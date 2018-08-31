<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');


class SubAdmins extends REST_Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
        parent::__construct();

        $this->load->model('backend/Admin_User_Model');
        $this->load->model('backend/Permissions_Model');

    }

    public function getAll_get($suspended)
    {
        $subAdmins = $this->Admin_User_Model->getAll($suspended);
        if ($subAdmins) {
            $this->response($subAdmins, 200);
        } else {
            $this->response([], 404);
        }
    }

    /**
     * create new subadmin with permissions
     *
     * @return json
     */
    public function add_post()
    {
        // print_r(json_decode($this->post()['permissions']));
        $post_admin = $this->post();
        $post_admin['permissions'] = json_decode($post_admin['permissions']);
        $image_upload_status = $this->do_upload();
        if (isset($image_upload_status['error'])) {
            $error = array('profile_image' => $image_upload_status['error']);
            $this->response($error, 422);
        }
        // $user =  $this->session->userdata('admin_user');
        // $post_admin['created_by'] = $user['admin_user_id'];
        $image_url = $image_upload_status['upload_data']['asset_url'];
        $post_admin['profile_image'] = $image_url;

        $this->load->library('form_validation');
        $this->form_validation->set_data($post_admin);
        $this->form_validation->set_rules('username', 'Username',
            'trim|required|is_unique[tbl_admin_users.username]',
            array('required' => 'required',
                'is_unique' => 'is_unique'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
            array('required' => 'required')
        );
        $this->form_validation->set_rules('security_code', 'Security Code', 'trim|required',
            array('required' => 'required')
        );
        $this->form_validation->set_rules('email', 'Email',
            'trim|required|valid_email|is_unique[tbl_admin_users.email]',
            array('required' => 'required',
                'valid_email' => 'valid_email',
                'is_unique' => 'is_unique')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->response($this->form_validation->error_array(), 422);
        } else {
            $user = json_decode($this->session->userdata('admin_user'));
            $post_admin['created_by'] = $user->id;
            $post_admin['modified_by'] = $user->id;

            $crated_admin = $this->Admin_User_Model->add_sub_admin($post_admin);
            if ($crated_admin) {
                $this->response($crated_admin);
            } else {
                $this->response(NULL);
            }
        }
    }

    public function edit_put()
    {
        $put_admin = $this->put();
        $this->load->library('form_validation');
        $this->form_validation->set_data($put_admin);
        $this->form_validation->set_rules('username', 'Username',
            'trim|required',
            array('required' => 'required'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
            array('required' => 'required')
        );
        $this->form_validation->set_rules('security_code', 'Security Code', 'trim|required',
            array('required' => 'required')
        );
        $this->form_validation->set_rules('email', 'Email',
            'trim|required|valid_email',
            array('required' => 'required',
                'valid_email' => 'valid_email',
                'is_unique' => 'is_unique')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->response($this->form_validation->error_array(), 422);
        } else {
            $user = json_decode($this->session->userdata('admin_user'));
            $put_admin['modified_by'] = $user->id;

            $edited_admin = $this->Admin_User_Model->editSubAdmin($put_admin);
            if ($edited_admin) {
                $this->response($edited_admin);
            } else {
                $this->response(NULL);
            }
        }
    }

    public function delete_put(){
        $adminIds = $this->put();

        if ($result = $this->Admin_User_Model->delete($adminIds)) {
            $this->response($result);
        } else {
            $this->response(NULL);
        }
    }

    public function suspend_put($status){
        $adminIds = $this->put();

        if ($result = $this->Admin_User_Model->suspend($adminIds,$status)) {
            $this->response($result);
        } else {
            $this->response(NULL);
        }
    }

    public function permissions_put()
    {
        $permissions = $this->put();
        $admin_user_id = $permissions['admin_user_id'];
        if ($result = $this->Permissions_Model->updatePermissions($admin_user_id, $permissions)) {
            $this->response($result);
        } else {
            $this->response(NULL);
        }
    }

    public function permissions_get($user_id)
    {
        if ($result = $this->Permissions_Model->getPermissionsByUserId($user_id)) {
            $this->response($result);
        } else {
            $this->response(NULL, 404);
        }

    }

    function check_user_email($email)
    {
        if ($this->post('id'))
            $id = $this->post('id');
        else
            $id = '';
        $result = $this->Admin_User_Model->check_unique_user_email($id, $email);
        if ($result == 0)
            $response = true;
        else {
            $response = false;
        }
        return $response;
    }

    /**
     * upload subadmins images
     *
     * @return json_response
     */
    public
    function do_upload()
    {
        $upload_path = "assets/images/admin_images/";
        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('profile_image')) {
            $data = array('sucess' => true, 'upload_data' => $this->upload->data());
            $data['upload_data']['asset_url'] = $upload_path . $data['upload_data']['file_name'];
            return $data;
        } else {
            return array('error' => strip_tags($this->upload->display_errors()));

        }
    }
}