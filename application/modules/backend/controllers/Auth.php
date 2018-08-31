<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');


class Auth extends REST_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->library('session');
	}
	
	public function login_post(){
		// $this->response($this->post());
		$post = $this->post();
		$this->load->model('backend/Admin_User_Model');
		$user['email'] = $post['email'];
		$user['password'] = $post['password'];
		$user['security_code'] = $post['security_code'];
		
		$authenticateUser = $this->Admin_User_Model->authenticate($user);

		if(isset($authenticateUser)){
            $this->session->set_userdata('admin_user',json_encode($authenticateUser));
//            $user =  $this->session->userdata('admin_user');
//            var_dump(json_decode($user));
			$this->response($authenticateUser);
		}else {
            $this->response(NULL, 404);
		}
	}

	function getLoggetInUser_get(){
		$user =  $this->session->userdata('admin_user');
			if(isset($user)){
				$this->response(json_decode($user));
			}else {
				$this->response(NULL,404);
        }
	}

	function logout_get(){
		$this->session->sess_destroy();
		
		echo $this->session->unset_userdata('admin_user');
	}
}