<?php
class OfferLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getOfferByBusiId($busi_id)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->getOfferByBusiId($busi_id);
	}
	public  function getBuyerOfferByBusiId($busi_id)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->getBuyerOfferByBusiId($busi_id);
	}
	public  function saveOffer($param)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->saveOffer($param);
	}
	public  function getOfferById($offerid)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->getOfferById($offerid);
	}
	public  function updateOffer($param)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->updateOffer($param);
	}
	public  function updateToggelpinOffer($param)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->updateToggelpinOffer($param);
	}
	public  function updateOfferAlert($id,$param,$categoryId)
	{
		$this->CI->load->model ( 'Offer_model', 'offer' );
		return $res = $this->CI->offer->updateOfferAlert($id,$param,$categoryId);
	}
	
	public function getStorageBoxInfo($busiId, $categoryId)
	{
	    $this->CI->load->model ( 'Offer_model', 'offer' );
	    return $res = $this->CI->offer->getStorageBoxInfo($busiId, $categoryId);
	}
	
}
