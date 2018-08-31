<?php
class Dproductlib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getProductByName($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductByName($data);
	}
	public  function save3DProduct($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->save3DProduct($data);
	}
	
	public function save3DProductImages($data) {
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->save3DProductImages($data);
	}
	
	public  function getProduct3DdataById($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProduct3DdataById($data);
	}
	
	public  function getProduct3DDetailById($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProduct3DDetailById($data);
	}
	public  function getProduct3DDetailByIdBuyer($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProduct3DDetailByIdBuyer($data);
	}
	
	public  function getProduct3Dimages($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProduct3Dimages($data);
	}
	public  function getProductlist($busi_id)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductlist($busi_id);
	}
	public  function getProduct3Dlist($busi_id)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProduct3Dlist($busi_id);
	}
	public  function delete3DProduct($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->delete3DProduct($data);
	}
	public  function getProductById($id)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductById($id);
	}
	
	public  function getProductImageById($id)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductImageById($id);
	}
	
	public  function change3dproduct($params)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->change3dproduct($params);
	}
	public  function update3dproduct($oldid,$newid)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->update3dproduct($oldid,$newid);
	}
	

}
