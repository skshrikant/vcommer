<?php

class Myudtalk_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function saveUdFile($data)
    {
    	if ($this->db->insert(TABLES::$UDT_IMAGES, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function getUdFiles($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$UDT_IMAGES);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getUDFileById($id) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$UDT_IMAGES);
    	$this->db->where('id', $id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    
    public function deleteUdFile($id) {
    	$this->db->where('id',$id);
    	$this->db->delete(TABLES::$UDT_IMAGES);
    }
    
}