<?php
class VedioLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function saveoneproductvedio($data)
	{
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->saveoneproductvedio($data);
	}
	public  function saveMainSubproductvedio($data)
	{
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->saveMainSubproductvedio($data);
	}
	public  function getOneproductvedioList()
	{
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->getOneproductvedioList();
	}
	public  function getMultiproductvedioList()
	{
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->getMultiproductvedioList();
	}
	public  function updateProductvedio($data)
	{
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->updateProductvedio($data);
	}
	public  function updateMultiProductvedio($data)
	{
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->updateMultiProductvedio($data);
	}
	
	public function getOneProductVideosByIds($ids) {
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->getOneProductVideosByIds($ids);
	}
	
	public function getMultiProductVideosByIds($ids) {
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->getMultiProductVideosByIds($ids);
	}
	
	public function getMultiProductVideoById($id) {
		$this->CI->load->model ( 'Vedio_model', 'vedio' );
		return $res = $this->CI->vedio->getMultiProductVideoById($id);
	}
	

}
