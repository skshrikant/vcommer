<?php

class Payment_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

 	public function addPaymentInfo($data) {
    	$this->db->insert(TABLES::$PAYMENT_TABLE,$data);
    	return $this->db->insert_id();
    }
    public function getPaymentInfo($busi_id) {
        $this->db->select('*');
        $this->db->from(TABLES::$PAYMENT_TABLE);
        $this->db->where('busi_id', $busi_id);
        $this->db->order_by('payment_id',"desc");
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }
    public function getMemberDetails($busi_id) {
    	$this->db->select('a.*,u.name_prefix,u.name as user_name,u.email as user_email,b.id as cat_id,b.user_category,c.id as subcat_id,c.sub_category,p.name as plan_name,p.price,p.shipper_price');
    	$this->db->from(TABLES::$BUSINESS_INFO. ' AS a');
    	$this->db->join(TABLES::$USER. ' AS u','a.id=u.busi_id','inner');
    	$this->db->join(TABLES::$USER_CATEGORIES. '  AS b','u.user_category_id=b.id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. '  AS c','u.user_subcategory_id =c.id','inner');
    	$this->db->join(TABLES::$SUBSCRIPTION_PLAN.' AS p','a.plan_id=p.id','inner');
    	$this->db->where('a.id', $busi_id);
    	$this->db->where('u.user_role', 1);
    	$this->db->group_by('a.id');
    	$query = $this->db->get();
		$row = $query->result_array();
		return $row;
    }
}