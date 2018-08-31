<?php
class StorageLib {
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function updateStorageByBusiId($data) {
		$this->CI->load->model ( 'Storage_model', 'storagemodel' );
		return $this->CI->storagemodel->updateStorageByBusiId($data);
	}
	public function deleteStorageByBusiId($data) {
		$this->CI->load->model ( 'Storage_model', 'storagemodel' );
		return $this->CI->storagemodel->deleteStorageByBusiId($data);
	}
	
	public function getMyBusinessStorage($busi_id) {
		$this->CI->load->model ( 'Storage_model', 'storagemodel' );
		return $this->CI->storagemodel->getMyBusinessStorage($busi_id);
	}

}
