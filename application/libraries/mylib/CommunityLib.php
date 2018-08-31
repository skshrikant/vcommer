<?php
class CommunityLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getSendCommunityRequest($busi_id)
	{
		$this->CI->load->model ( 'Community_Model', 'community' );
		return $res = $this->CI->community->getSendCommunityRequest($busi_id);
	}
	public  function getInvitationCommunityRequest($busi_id)
	{
		$this->CI->load->model ( 'Community_Model', 'community' );
		return $res = $this->CI->community->getInvitationCommunityRequest($busi_id);
	}
	public  function updateCommunity($data)
	{
		$this->CI->load->model ( 'Community_Model', 'community' );
		return $res = $this->CI->community->updateCommunity($data);
	}
	public  function updateCommunityRequest($data)
	{
		$this->CI->load->model ( 'Community_Model', 'community' );
		return $res = $this->CI->community->updateCommunityRequest($data);
	}
}
