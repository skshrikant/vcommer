<?php

class Package_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getSubscriptionPackages()
    {
    	$this->db->select('a.*,b.name as plan_name,b.price,b.shipper_price');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS.' AS a');
    	$this->db->join(TABLES::$SUBSCRIPTION_PLAN.' AS b','a.plan_id=b.id','inner');
    	$this->db->order_by('b.id','DESC');
    	$this->db->order_by('a.id','ASC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getSubscriptionPackagesByCType($ctype)
    {
    	$this->db->select('a.*,b.name as plan_name,b.price,b.shipper_price');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS.' AS a');
    	$this->db->join(TABLES::$SUBSCRIPTION_PLAN.' AS b','a.plan_id=b.id','inner');
    	$this->db->where('a.cust_type',$ctype);
    	$this->db->order_by('b.id','DESC');
    	$this->db->order_by('a.id','ASC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getPlanItemById($plan_id,$cust_type)
    {
    	$this->db->select('a.*,b.name as plan_name');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS.' AS a');
    	$this->db->join(TABLES::$SUBSCRIPTION_PLAN.' AS b','a.plan_id=b.id','inner');
    	$this->db->where('b.id',$plan_id);
    	$this->db->where('a.cust_type',$cust_type);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getSubscriptionPackageById($plan_id) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$SUBSCRIPTION_PLAN);
    	$this->db->where('id',$plan_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
}