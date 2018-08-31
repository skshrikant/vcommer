<?php

class MyFIle_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function savePublicMyFile($data)
    {
    	if ($this->db->insert(TABLES::$MYFILE, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function getFilesListBybusi_id($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MYFILE);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function deleteMyFiles($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$MYFILE, $data);
    	return $this->db->affected_rows();
    }
    public function checkFilePassword($data)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MYFILE);
    	$this->db->where('id', $data['id']);
    	$this->db->where('password', $data['password']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function updateFileDownload($id) {
    	$sql = "update ".TABLES::$MYFILE." set download_count = download_count + 1 where id=".$id;
    	$query = $this->db->query($sql);
    	return $this->db->affected_rows();
    }
    
    public function getFileById($id) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MYFILE);
    	$this->db->where('id', $id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getFileSizesByIds($ids) {
    	$this->db->select('sum(file_size) as filesize');
    	$this->db->from(TABLES::$MYFILE);
    	$this->db->where("id IN(".$ids.")",'',false);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
   
}
