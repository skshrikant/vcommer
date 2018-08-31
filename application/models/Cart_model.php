<?php

class Cart_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public  function getMyCartSeller($busi_id)
    {
    	$this->db->select('a.id as cart_id,c.*,b.id as product_id,b.busi_id as sellerbusi_id,b.name as product_name,b.model_no,'.
    			'b.unit_price,b.description,b.main_image,d.name_prefix,d.name,e.profile_image');
    	$this->db->from(TABLES::$MYCART. ' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS b','a.product_item_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','c.id=d.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS e','d.id=e.user_id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('d.admin_user_id', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->group_by('sellerbusi_id');
    	$this->db->order_by('b.id', 'acs');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public  function getMyCart($busi_id)
    {
    	$this->db->select('a.id as cart_id,c.*,b.id as product_id,b.busi_id as sellerbusi_id,b.name as product_name,b.model_no,b.unit_price,b.description,b.main_image,d.name_prefix,d.name,e.profile_image');
    	$this->db->from(TABLES::$MYCART. ' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS b','a.product_item_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','c.id=d.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS e','d.id=e.user_id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('d.admin_user_id', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->order_by('b.id', 'acs');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function productListBySellerProduct($busi_id,$proid)
    {
    	$this->db->select('a.*,b.name as subproduct,c.name as mainproduct');
    	$this->db->from(TABLES::$PRODUCT_ITEM. ' AS a');
    	$this->db->join(TABLES::$SUB_PRODUCT. ' AS b','a.sproduct_id = b.id','inner');
    	$this->db->join(TABLES::$MAIN_PRODUCT. ' AS c','b.mproduct_id=c.id','inner');
    	$this->db->where('a.busi_id',$busi_id);
    	if($proid != "") {
    		$this->db->where ( 'a.id NOT IN('.$proid.')','',false );
    	}
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function insertBatchProductCart($data)
    {
    	$status = $this->db->insert_batch(TABLES::$MYCART,$data);
    	return $status;
    }
    public function updateCart($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$MYCART, $data);
    	return $this->db->affected_rows();
    	
    }

}
