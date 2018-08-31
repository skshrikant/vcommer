<?php

class Inquiry_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * function to get inquiries to sellers/shippers from buyers
     * 
     * @param int $busi_id
     * @return obj 
     */
    public  function getInquiryByBusiId($busi_id)
    {
    	$this->db->select('a.id as inqury_id,a.requester_busi_id,a.inquiry_subject,a.inquiry_body,a.product_id,a.created_date as actual_date,'.
    			'a.pin_unpin,a.unreadmark,b.inqury_type,a.attachment1,a.attachment2,a.attachment3,a.attachment4,'.
    			'd.*,e.name_prefix,e.name,f.profile_image,uc.user_category,a.alert_viewed');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_id=c.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.requester_busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
        $this->db->join(TABLES::$USER_CATEGORIES. ' AS uc','e.user_category_id=uc.id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('e.is_contactperson', 1);
        $this->db->where('a.is_deleted', 0);
    	$this->db->group_by('a.id');
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    /**
     * function to get list of inquiries by buyers
     * 
     * @param int $busi_id
     * @return obj
     */
    public function getBuyerInquiryByBusiId($busi_id)
    {
    	$this->db->select('a.id as inqury_id,a.requester_busi_id,a.inquiry_subject,a.inquiry_body,a.product_id,a.created_date as actual_date,'.
    			'a.pin_unpin,a.unreadmark,b.inqury_type,a.attachment1,a.attachment2,a.attachment3,a.attachment4,'.
    			'd.*,e.name_prefix,e.name,f.profile_image,uc.user_category,a.alert_viewed');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_id=c.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
        $this->db->join(TABLES::$USER_CATEGORIES. ' AS uc','e.user_category_id=uc.id','inner');
    	$this->db->where('a.requester_busi_id', $busi_id);
    	$this->db->where('e.is_contactperson', 1);
        $this->db->where('a.is_deleted', 0);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateInquiry($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$INQUIRY, $data);
    	return $this->db->affected_rows();
    }
    public function updateToggelpinInquiry($data)
    {
    	$response = 0;
    	$this->db->select('a.id as inqury_id,a.pin_unpin');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->where('a.id', $data['id']);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) > 0)
    	{
    		$inquiry = array();
    		$inquiry['id'] = $row[0]['inqury_id'];
    		if($row[0]['pin_unpin'] == 1){
    			$inquiry['pin_unpin'] = 0;
            } else {
    			$inquiry['pin_unpin'] = 1;
            }
    			$this->db->where('id', $inquiry['id']);
    			$this->db->update(TABLES::$INQUIRY, $inquiry);
    			$response =  $this->db->affected_rows();
    	}
    	return $response;
    }
    public function getInquiryById($id)
    {
    	$this->db->select('a.id as inqury_id,a.requester_busi_id,a.inquiry_subject,a.inquiry_body,a.product_id,a.created_date,'.
    			'a.pin_unpin,a.unreadmark,b.inqury_type,c.name as product_name,c.model_no,c.main_image,a.attachment1,a.attachment2,a.attachment3,a.attachment4,a.attachment1_size,a.attachment2_size,a.attachment3_size,a.attachment4_size,'.
    			'd.*,e.name_prefix,e.name,f.profile_image');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_id=c.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.requester_busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.id', $id);
    	$this->db->where('e.is_contactperson', 1);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
        $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    }

    public function saveInquiry($param)
    {
    	if ($this->db->insert(TABLES::$INQUIRY, $param)) {
    		return $this->db->insert_id();
    	}
    }

    public function getNewInquiryAlert($busiId,$userId)
    {
        $this->db->select('inq.id,u.profile_image,usr.name,c.user_category,u.country');
        $this->db->from(TABLES::$INQUIRY. ' AS inq');
        $this->db->join(TABLES::$USER. ' AS usr','inq.user_id=usr.id','inner');
        $this->db->join(TABLES::$USER_INFO. ' AS u','inq.user_id=u.user_id','inner');
        $this->db->join(TABLES::$USER_CATEGORIES. ' AS c','usr.user_category_id=c.id','inner');
        $this->db->where('inq.busi_id', $busiId);
        $this->db->where('inq.user_id', $userId);
         $this->db->where('inq.alert_viewed', 0);
        $this->db->order_by('inq.id', 'desc');
        $query = $this->db->get();
        $row = $query->result_array();
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function updateInquiryAlert($id,$data,$categoryId)
    {
        if(in_array($categoryId,array(SELLER_ID,SHIPPER_ID))) {
            $this->db->where('busi_id', $id);
        } else {
            $this->db->where('requester_busi_id', $id);
        }
        $this->db->update(TABLES::$INQUIRY,$data);
        return $this->db->affected_rows();
    }
}
