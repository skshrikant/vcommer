<?php
class InquiryLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getInquiryByBusiId($busi_id)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->getInquiryByBusiId($busi_id);
	}
	public  function updateInquiry($data)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->updateInquiry($data);
	}
	public  function updateToggelpinInquiry($data)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->updateToggelpinInquiry($data);
	}
	public  function getInquiryById($data)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->getInquiryById($data);
	}
	public  function getBuyerInquiryByBusiId($data)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->getBuyerInquiryByBusiId($data);
	}
	public  function saveInquiry($data)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->saveInquiry($data);
	}
	public  function updateInquiryRequest($data)
	{
		$this->CI->load->model ( 'Inquiry_model', 'inquiry' );
		return $res = $this->CI->inquiry->updateInquiryRequest($data);
	}
	
}
