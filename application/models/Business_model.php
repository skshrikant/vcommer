<?php

class Business_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	public function getBusinessLikeComments($busi_id)
	{
		$this->db->select('a.*,b.name_prefix,b.name,c.profile_image');
		$this->db->from(TABLES::$BUSINESS_LIKE_COMMENTS.' AS a');
		$this->db->join(TABLES::$USER.' AS b','a.visitor_id=b.busi_id','inner');
		$this->db->join(TABLES::$USER_INFO.' AS c','b.id=c.user_id','inner');
		$this->db->where('a.busi_id',$busi_id);
		$this->db->where('a.visitor_id != ',$busi_id);
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	
	public function insertBusinessLikeComments($data) {
		$this->db->select('*');
		$this->db->from(TABLES::$BUSINESS_LIKE_COMMENTS);
		$this->db->where('busi_id',$data['busi_id']);
		$this->db->where('visitor_id',$data['visitor_id']);
		$query = $this->db->get();
		$row = $query->result_array();
		if (count($row) > 0) {
			$this->db->insert(TABLES::$BUSINESS_LIKE_COMMENTS, $data);
		} else {
			$this->db->where('id',$data['id']);
			$this->db->update(TABLES::$BUSINESS_LIKE_COMMENTS, $data);
		}
	}
	
	public function getMyLikeComment($busi_id,$visitor_id) {
		$this->db->select('*');
		$this->db->from(TABLES::$BUSINESS_LIKE_COMMENTS);
		$this->db->where('busi_id',$busi_id);
		$this->db->where('visitor_id',$visitor_id);
		$query = $this->db->get();
		$row = $query->result_array();
	}
}