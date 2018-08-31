<?php
class UserLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function updateUser($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateUser($data);
	}
	public function getUserDataById($id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getUserDataById($id);
	}
	public function emailExist($email)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->emailExist($email);
	}
	public function getUserDataByAfterRegistrationId($id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getUserDataByAfterRegistrationId($id);
	}
	public function checkCurrentPassword($data)
	{
		$response = array();
		$this->CI->load->model ( 'Account_Model', 'account' );
		$result = $this->CI->account->checkCurrentPassword($data);
		if (count($result ) > 0) {
			$response ['status'] = 1;
			$response ['msg'] = "Record Found";
		} else {
			
			$response ['status'] = 0;
			$response ['msg'] = "Old Password Not correct";
		}
		return $response;
	}
	public function getUserSubCategories()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getUserSubCategories();
	}
	public function updateUserInformation($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateUserInformation($data);
	}
	public function getSubUserByUserId($userid)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getSubUserByUserId($userid);
	}
	public function insertIntoUsers($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->insertIntoUsers($data);
	}
	public function getSubUserById($userid)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getSubUserById($userid);
	}
	public function getContactPersonByBusiId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getContactPersonByBusiId($data);
	}
	
}
