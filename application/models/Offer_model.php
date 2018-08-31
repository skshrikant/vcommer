<?php

class Offer_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * function to list of offers to buyer(s) from seller(s)/shpper(s)
     * 
     * @param int $busi_id
     * @return obj
     */
    public  function getOfferByBusiId($busi_id)
    {
    	$this->db->select('a.id as offer_id,a.busi_id as offer_receiver_id,a.offer_subject,a.offer_body,a.attachment1,a.attachment2,a.attachment3,'.
    			'a.attachment4,a.created_date as actual_date,a.unreadmark,a.pin_unpin,b.offer_type,c.*,d.name_prefix,d.name,e.profile_image,uc.user_category,a.offer_body,a.alert_viewed');
    	$this->db->from(TABLES::$OFFER. ' AS a');
    	$this->db->join(TABLES::$OFFER_TYPE. ' AS b','a.offer_type_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','a.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','d.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS e','d.id=e.user_id','inner');
    	$this->db->join(TABLES::$USER_CATEGORIES. ' AS uc','d.user_category_id=uc.id','inner');
    	$this->db->where('a.offer_sender_id', $busi_id);
    	$this->db->where('d.is_contactperson', 1);
        $this->db->where('a.is_deleted', 0);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
        //echo $this->db->last_query(); 
    	$row = $query->result_array();
    	return $row;	
    }
    
    /**
     * function to get list of offers send by seller(s)/shipper(s) to buyer(s)
     * 
     * @param int $busi_id
     * @return int
     */
    public function getBuyerOfferByBusiId($busi_id)
    {
    	$this->db->select('a.id as offer_id,a.busi_id as offer_receiver_id,a.offer_subject,a.offer_body,a.attachment1,a.attachment2,a.attachment3,'.
    			'a.attachment4,a.created_date as actual_date,a.unreadmark,a.pin_unpin,b.offer_type,c.*,d.name_prefix,d.name,e.profile_image,uc.user_category,a.offer_body,a.alert_viewed');
    	$this->db->from(TABLES::$OFFER. ' AS a');
    	$this->db->join(TABLES::$OFFER_TYPE. ' AS b','a.offer_type_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','a.offer_sender_id=c.id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','d.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS e','d.id=e.user_id','inner');
    	$this->db->join(TABLES::$USER_CATEGORIES. ' AS uc','d.user_category_id=uc.id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('d.is_contactperson', 1);
        $this->db->where('a.is_deleted', 0);
        $this->db->group_by('offer_id');
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function saveOffer($param)
    {
    	if ($this->db->insert(TABLES::$OFFER, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public function getOfferById($offer_id)
    {
    	$this->db->select('a.id as offer_id,a.product_id,a.busi_id as offer_receiver_id,a.offer_sender_id,a.offer_subject,a.offer_body,a.attachment1,a.attachment2,'.
    			'a.attachment3,a.attachment4,a.created_date,b.offer_type,c.name as product_name,c.model_no,c.sub_image1,c.sub_image2,'.
    			'c.sub_image3,c.sub_image4,c.main_image,d.*,e.name_prefix,e.name,f.profile_image');
    	$this->db->from(TABLES::$OFFER. ' AS a');
    	$this->db->join(TABLES::$OFFER_TYPE. ' AS b','a.offer_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_id=c.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.id', $offer_id);
    	$this->db->where('e.is_contactperson', 1);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    }
  
    public function updateOffer($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$OFFER, $data);
    	return $this->db->affected_rows();
    	
    }
    public function updateToggelpinOffer($data)
    {
    	$response = 0;
    	$this->db->select('a.id as offer_id,a.pin_unpin');
    	$this->db->from(TABLES::$OFFER. ' AS a');
    	$this->db->where('a.id', $data['id']);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) > 0)
    	{
    		$inquiry = array();
    		$inquiry['id'] = $row[0]['offer_id'];
    		if($row[0]['pin_unpin'] == 1)
    			$inquiry['pin_unpin'] = 0;
    			else
    				$inquiry['pin_unpin'] = 1;
    				
    				$this->db->where('id', $inquiry['id']);
    				$this->db->update(TABLES::$OFFER, $inquiry);
    				$response =  $this->db->affected_rows();
    	}
    	return $response;
    }

    public function updateOfferAlert($id,$data,$categoryId)
    {
        if(in_array($categoryId,array(SELLER_ID,SHIPPER_ID))) {
          $this->db->where('offer_sender_id', $id);
        } else {
            $this->db->where('busi_id', $id);
        }
        $this->db->update(TABLES::$OFFER,$data);
        return $this->db->affected_rows();
    }
    
    public function getStorageBoxInfo($busiId, $category_id)
    {
        $this->db->select('SUM(LENGTH(ofr.offer_subject)/1024/1024)+ SUM(LENGTH(ofr.offer_body)/1024/1024) AS textStorage');
        $this->db->from(TABLES::$OFFER . ' AS ofr');
    
        if (in_array($category_id, array(SELLER_ID, SHIPPER_ID))) {
            $this->db->where('ofr.offer_sender_id', $busiId);
        } else {
            $this->db->where('ofr.busi_id', $busiId);
        }
        $queryStorageBoxTextSizeInfo = $this->db->get();
        $rowStorageBoxTextSize = $queryStorageBoxTextSizeInfo->result_array();
    
        // converting each uploaded file size into MB by dividing into 1024/1024
        $this->db->select('(SUM(ofrAttach.attachment1_size+ofrAttach.attachment2_size+ofrAttach.attachment3_size)/1024/1024) as totalAttachment');
        $this->db->from(TABLES::$OFFER . ' AS ofrAttach');
    
        if (in_array($category_id, array(SELLER_ID, SHIPPER_ID))) {
            $this->db->where('ofrAttach.offer_sender_id', $busiId);
        } else {
            $this->db->where('ofrAttach.busi_id', $busiId);
        }
        $queryStorageBoxAttachmentSizeInfo = $this->db->get();
        $rowStorageBoxAttachmentSize = $queryStorageBoxAttachmentSizeInfo->result_array();
    
        // get final storage size
        $finalLength = $rowStorageBoxTextSize[0]['textStorage'] + $rowStorageBoxAttachmentSize[0]['totalAttachment'];
        if ($finalLength > 0) {
            return $finalLength;
        }
        return 0;
    }
}
