<?php
class PackageLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public  function getSubscriptionPackages()
	{
		$this->CI->load->model ( 'Package_model', 'packagemodel' );
		return $res = $this->CI->packagemodel->getSubscriptionPackages();
	}
	
	public function getSubscriptionPackagesByCType($ctype) {
		$this->CI->load->model ( 'Package_model', 'packagemodel' );
		return $res = $this->CI->packagemodel->getSubscriptionPackagesByCType($ctype);
	}
	
	public function getSubscriptionPackageById($plan_id) {
		$this->CI->load->model ( 'Package_model', 'packagemodel' );
		return $res = $this->CI->packagemodel->getSubscriptionPackageById($plan_id);
	}
	
	public  function getPlanItemById($plan_id,$cust_type)
	{ 
		$this->CI->load->model ( 'Package_model', 'packagemodel' );
		return $res = $this->CI->packagemodel->getPlanItemById($plan_id,$cust_type);
	}
	
	
	
}