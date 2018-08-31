<?php
class FactoryLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function saveRndType($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->saveRndType($data);
	}
	public function getBusinessFactoryInfoById($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getBusinessFactoryInfoById($busi_id);
	}
	public function getUserRNDtype($fact_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getUserRNDtype($fact_id);
	}
	public function getRNDtype()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getRNDtype();
	}
	public function updateFactoryInfoByBusinessId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateFactoryInfoByBusinessId($data);
	}
	public function deleteRNDtypeByFactoryId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deleteRNDtypeByFactoryId($data);
	}

}
