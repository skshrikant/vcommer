<?php

class Admin_User_Model extends CI_Model
{
    public $username;
    public $email;
    public $security_code;
    public $password;
    public $profile_image;
    public $online_status;
    public $is_suspended;
    public $is_deleted;
    public $created_by;
    public $modified_by;

    private $table_name = 'tbl_admin_users';
    // public $created_at;
    // public $modified_at;

    public function authenticate($user)
    {
        if (!empty($user)) {
            $this->db->select(['user.id as user_id', 'user.username', 'user.email', 'user.profile_image', 'permission.*']);
            $this->db->from('tbl_admin_users as user');
            $this->db->join('admin_permissions AS permission', 'user.id=permission.admin_user_id');
            $this->db->where('email', $user['email']);
            $this->db->where('password', $user['password']);
            $this->db->where('security_code', $user['security_code']);
            $this->db->where('is_suspended', false);
            $this->db->where('is_deleted', false);
            $query = $this->db->get();

            return $query->row();
        }
        return null;
    }

    public function getAll($suspended)
    {
        $this->db->where('id !=', 1);
        $this->db->where('is_suspended', $suspended);
        $result = $this->db->get($this->table_name);
        return $result->result_array();
    }

    public function add_sub_admin($subadmin)
    {
        $this->db->trans_start();
        $this->username = $subadmin['username'];
        $this->password = $subadmin['password'];
        $this->email = $subadmin['email'];
        $this->security_code = $subadmin['security_code'];
        $this->profile_image = $subadmin['profile_image'];
        $this->online_status = $subadmin['online_status'];
        $this->is_suspended = false;
        $this->is_deleted = false;
        $this->created_by = $subadmin['created_by'];
        $this->modified_by = $subadmin['modified_by'];
        // $this->modified_at = $this->created_at = date();

        $this->db->insert('tbl_admin_users', $this);
        $insert_id = $this->db->insert_id();
        $this->load->model('backend/Permissions_Model');
        if ($insert_id) {
            $permission_created = $this->Permissions_Model->add_permissions($insert_id, $subadmin['permissions']);
            if ($permission_created) {
                $this->db->trans_complete();
                return $this->get_user_by_id($insert_id);
            }
        }
        $this->db->trans_complete();
        return null;

    }

    public function editSubAdmin($subadmin)
    {
        $this->db->trans_start();
        $updatedUser = array(
            'password' => $subadmin['password'],
            'security_code' => $subadmin['security_code'],
            'email' => $subadmin['email'],
            'modified_by' => $subadmin['modified_by']
        );
        $this->db->where('id', $subadmin['id']);
        $result = $this->db->update($this->table_name, $updatedUser);
        if ($result) {
            $this->db->trans_complete();
            return $this->get_user_by_id($subadmin['id']);
        }
        return null;
    }

    public function get_user_by_id($user_id)
    {
        $this->db->from('tbl_admin_users as user');
        $this->db->where('user.id', $user_id);
        $this->db->where('is_suspended', false);
        $this->db->where('is_deleted', false);
        $query = $this->db->get();

        return $query->row();

    }

    public function delete($adminIds)
    {
        $this->db->trans_start();
        $this->db->where_in('id', $adminIds);
        $result = $this->db->delete($this->table_name);
        if ($result) {
            $this->load->model('backend/Permissions_Model');

            $permitionResult = $this->Permissions_Model->delete($adminIds);
            if ($permitionResult) {
                $this->db->trans_complete();
                return true;
            }
        }
        return null;
    }
    public function suspend($adminIds,$status)
    {
        $this->db->trans_start();
        $this->db->set('is_suspended', $status);

        $this->db->where_in('id', $adminIds);
        $result = $this->db->update($this->table_name);
        if ($result) {
                $this->db->trans_complete();
                return $result;
        }
        return null;
    }

    public function check_unique_user_email($id = '', $email)
    {
        $this->db->where('email', $email);
        if ($id) {
            $this->db->where_not_in('id', $id);
        }
        return $this->db->get('user')->num_rows();
    }
}