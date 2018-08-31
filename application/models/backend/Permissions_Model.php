<?php

class Permissions_Model extends CI_Model{

    public $admin_user_id;
    public $as_admin;
    public $manage_sub_admin;
    public  $manage_member;
    public  $manage_carousel;
    public  $audit;
    public  $chat;
    public  $view_errors;
    public  $statistic;
    public  $account_alarm;

    public function add_permissions($user_id, $permisson){

        $this->admin_user_id = $user_id;
        $this->as_admin = $permisson->as_admin;
        $this->manage_sub_admin = $permisson->manage_sub_admin;
        $this->manage_member = $permisson->manage_member;
        $this->manage_carousel = $permisson->manage_carousel;
        $this->audit = $permisson->audit;
        $this->chat = $permisson->chat;
        $this->view_errors = $permisson->view_errors;
        $this->statistic = $permisson->statistic;
        $this->account_alarm = $permisson->account_alarm;

        return $this->db->insert('admin_permissions', $this);
    }

    public function getPermissionsByUserId($user_id)
    {
        $query = $this->db->get_where('admin_permissions', array('admin_user_id' => $user_id));
        return $query->row();
    }

    public function delete($adminIds){
        $this->db->where_in('admin_user_id',$adminIds);
        return $this->db->delete('admin_permissions');
    }

    public function updatePermissions($user_id, $permisson){
        $this->db->trans_start();
        $permitions = array(
            'as_admin' => $permisson['as_admin'],
            'manage_sub_admin' => $permisson['manage_sub_admin'],
            'manage_member' => $permisson['manage_member'],
            'manage_carousel' => $permisson['manage_carousel'],
            'audit' => $permisson['audit'],
            'chat' => $permisson['chat'],
            'view_errors' => $permisson['view_errors'],
            'statistic' => $permisson['statistic'],
            'account_alarm' => $permisson['account_alarm']
        );

        $this->db->where('admin_user_id', $user_id);
        $result = $this->db->update('admin_permissions', $permitions);
        if ($result) {
            $this->db->trans_complete();
            $this->load->model('backend/Admin_User_Model');
            return $this->Admin_User_Model->get_user_by_id($user_id);
        }
        return null;
    }
}