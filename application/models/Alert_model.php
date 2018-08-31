<?php

class Alert_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function getMyOfferAlerts($busi_id) {
    	$this->db->select('count(a.id) as offers');
    	$this->db->from(TABLES::$OFFER. ' AS a');
    	$this->db->join(TABLES::$OFFER_TYPE. ' AS b','a.offer_type_id=b.id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyInquiryAlerts($busi_id,$type) {
    	$this->db->select('count(a.id) as inquiries');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	if($type == 3) {
    		$this->db->where('a.requester_busi_id', $busi_id);
    	} else {
    		$this->db->where('a.busi_id', $busi_id);
    	}
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyOrderAlerts($busi_id) {
    	$this->db->select('count(a.orderid) as orders');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$ORDER_ITEM. ' AS b','a.orderid=b.order_id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.item_id=c.id','inner');
    	$this->db->where('a.is_deleted = 0 and (a.sellerbusi_id = '.$busi_id.' or  a.buyer_id = '.$busi_id.')');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyCommunityRequests($busi_id) {
    	$this->db->select('count(a.id) as requests');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.my_busi_id=b.id','inner');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }    
    
    public function saveContactUs($params) {
    	if ($this->db->insert(TABLES::$CONTACT_US, $params)) {
    		return $this->db->insert_id();
    	}
    }
    
    public function saveAlertCount($busiId, $totalcount) {
        
        if(!is_numeric($busiId)) {
            return false;
        }
        if(!is_numeric($totalcount)) {
            return false;
        }
        $params = array();
        $params['busi_id'] = $busiId;
        $params['alert_count'] = $totalcount;
        $params['date'] = date('Y-m-d H:i:s');
        if ($this->db->insert(TABLES::$MANAGE_ALERT, $params)) {
            return $this->db->insert_id();
        }
    }

    public function updateAlertCount($busiId, $totalcount)
    {
        $data = array();
        
        if (! is_numeric($busiId)) {
            return false;
        }
        if (! is_numeric($totalcount)) {
            return false;
        }
        $data['alert_count'] = $totalcount;
        // update tbl_manage_alert table with new alert count
        $this->db->where('busi_id', $busiId);
        return $this->db->update(TABLES::$MANAGE_ALERT, $data);
    }

    public function getMyAlertCount($busiId) {
        $this->db->select('alert_count');
        $this->db->from(TABLES::$MANAGE_ALERT . ' AS ma');
        $this->db->where('ma.busi_id',$busiId);
        $query = $this->db->get();

        $row = $query->result_array();
		 
        if(!empty($row)) {
            return json_encode(array("total"=>$row[0]['alert_count'],"action"=>"added"),true);
        } else {
            return json_encode(array("total"=>0,"action"=>"new"),true);
        }
    }

    public function updateUserAlertCount($moduleType, $busiId)
    {
        // get module type and then calculate its total alerts
        $data = array();
        switch ($moduleType) {
            case 'inquiry':
                $this->db->select('inq.alert_viewed');
                $this->db->from(TABLES::$INQUIRY . ' AS inq');
                $this->db->where('inq.busi_id', $busiId);
                $this->db->where('inq.alert_viewed', 0);
                $query = $this->db->get();
                
                $rowInquiry = $query->result_array();
                 
                if (! empty($rowInquiry)) {
                    $data['alert_count'] = count($rowInquiry);
                }
                break;
            case 'offer':
                $this->db->select('ofr.alert_viewed');
                $this->db->from(TABLES::$OFFER . ' AS ofr');
                $this->db->where('ofr.busi_id', $busiId);
                $this->db->where('ofr.alert_viewed', 0);
                $query = $this->db->get();
                
                $rowOffer = $query->result_array();
                if (! empty($rowOffer)) {
                    $data['alert_count'] = count($rowOffer);
                }
                break;
            case 'request':
                $this->db->select('req.alert_viewed');
                $this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS req');
                $this->db->where('req.busi_id', $busiId);
                $this->db->where('req.alert_viewed', 0);
                $query = $this->db->get();
                
                $rowRequest = $query->result_array();
                if (! empty($rowRequest)) {
                    $data['alert_count'] = count($rowRequest);
                }
                break;
            case 'sellerOrder':
                $this->db->select('ord.alert_viewed');
                $this->db->from(TABLES::$ORDER . ' AS ord');
                $this->db->where('ord.sellerbusi_id', $busiId);
                $this->db->or_where('ord.buyer_id', $busiId);
                $this->db->where('ord.alert_viewed', 0);
                $query = $this->db->get();
               
                $rowRequest = $query->result_array();
                if (! empty($rowRequest)) {
                    $data['alert_count'] = count($rowRequest);
                }
                break;
            case 'chat':
                $this->db->select('cht.read');
                $this->db->from(TABLES::$COMECHAT . ' AS cht');
                $this->db->where('cht.to', $busiId);
                $this->db->where('cht.read', 0);
                $query = $this->db->get();
                $rowRequest = $query->result_array();
                if (! empty($rowRequest)) {
                    $data['alert_count'] = count($rowRequest);
                }
                break;
        }
        // get alert count
        $this->db->select('ma.alert_count');
        $this->db->from(TABLES::$MANAGE_ALERT . ' AS ma');
        $this->db->where('ma.busi_id', $busiId);
        $query = $this->db->get();
        
        $rowManagelert = $query->result_array();
        
        if (! empty($rowManagelert) && ! empty($data)) {
            $data['alert_count'] = (int) $rowManagelert[0]['alert_count'] - (int) $data['alert_count'];

            // update tbl_manage_alert table with new alert count
            $this->db->where('busi_id', $busiId);
            return $this->db->update(TABLES::$MANAGE_ALERT, $data);
        }
    }
}
