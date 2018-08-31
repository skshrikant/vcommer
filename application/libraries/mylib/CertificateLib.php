<?php
class CertificateLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getBusinessCertificateInfoById($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getBusinessCertificateInfoById($busi_id);
	}
	public function getCertificateType()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getCertificateType();
	}
	public  function updateCertificateById($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateCertificateById($data);
	}
	public function getMoreCertificate($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getMoreCertificate($busi_id);
	}
	public function deleteCertificateType($busi_id,$string)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deleteCertificateType($busi_id,$string);
	}
	public function addMoreCertificates($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->addMoreCertificates($data);
	}
	public function updateMoreCertificateById($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateMoreCertificateById($data);
	}
}
