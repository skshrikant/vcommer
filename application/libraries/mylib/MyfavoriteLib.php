<?php
class MyfavoriteLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getMyfavoriteseller($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoriteseller($busi_id,$type);
	}
	public  function getMyfavoritesShipper($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoritesShipper($busi_id,$type);
	}
	public  function getMyfavoritesBuyer($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoritesBuyer($busi_id,$type);
	}
	public  function getMyfavoriteProduct($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoriteProduct($busi_id,$type);
	}
	public  function getMyfavoriteVedio($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoriteVedio($busi_id,$type);
	}
	public  function getMyfavoriteDProduct($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoriteDProduct($busi_id,$type);
	}
	public  function getMyfavoriteCatalouge($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoriteCatalouge($busi_id,$type);
	}
	public  function getMyfavoriteAds($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoriteAds($busi_id,$type);
	}
	public  function getMyfavoritePost($busi_id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->getMyfavoritePost($busi_id,$type);
	}
	public  function updateFavorite($data) 
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->updateFavorite($data);
	}
	public  function deleteFavorite($id,$type)
	{
		$this->CI->load->model ( 'Myfavorite_model', 'favorite' );
		return $res = $this->CI->favorite->deleteFavorite($id,$type);
	}
	
	
}
