<?php
class BusinessLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function updateBusinessInfo($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateBusinessInfo($data);
	}
	public  function updateCompanyInfoByBusiId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateCompanyInfoByBusiId($data);
	}
	public function getBusinessRoutes($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getBusinessRoutes($busi_id);
	}
	public function insertBusinessRoutes($route)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->insertBusinessRoutes($route);
	}
	public function deleteBusinessRoutes($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deleteBusinessRoutes($busi_id);
	}
	public function updateBusinessRoutes($route)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateBusinessRoutes($route);
	}
	public function getContactperson($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getContactperson($busi_id);
	}
	public function updateBusinessContact($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		$res = $this->CI->account->updateBusinessContact($data);
		
	
// 		$this->CI->load->model ( 'Account_Model', 'account' );
// 		$res = $this->CI->account->updateBusinessContact($data);
		
	}
	public function insertIntoContactPersone($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		$res = $this->CI->account->insertIntoContactPersone($data);
		
	}
	public function getBusinessBranches($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getBusinessBranches($busi_id);
	}
	public function updateBusinessBranch($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateBusinessBranch($data);
	}
	
	public  function getBusinessInfo($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getBusinessInfo($busi_id);
	}
	
	public  function getGauranteeTerms()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getGauranteeTerms();
	}
	
	public function addCertFiles($data) {
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->addCertFiles($data);
	}

}
