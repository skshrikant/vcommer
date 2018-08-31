<?php
class MycartLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getMyCart($busi_id)
	{
		$this->CI->load->model ( 'Cart_model', 'cart' );
		return $res = $this->CI->cart->getMyCart($busi_id);
	}
	public  function getMyCartSeller($busi_id)
	{
		$this->CI->load->model ( 'Cart_model', 'cart' );
		return $res = $this->CI->cart->getMyCartSeller($busi_id);
	}
	public  function insertBatchProductCart($busi_id)
	{
		$this->CI->load->model ( 'Cart_model', 'cart' );
		return $res = $this->CI->cart->insertBatchProductCart($busi_id);
	}
	public  function updateCart($data)
	{
		$this->CI->load->model ( 'Cart_model', 'cart' );
		return $res = $this->CI->cart->updateCart($data);
	}
	
}
