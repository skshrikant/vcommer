<?php

class Community_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function addToCommunity($map) {
    	$this->db->select('id');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER);
    	$this->db->where('busi_id',$map['busi_id']);
    	$this->db->where('my_busi_id',$map['my_id']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$this->db->insert(TABLES::$COMMUNITY_MEMBER,$map);
    		return 1;
    	} else {
    		return 0;
    	}
    }

    public function getSendCommunityRequest($busi_id)
    {
        $start_date = date('Y-m-d',strtotime("-15 days"));
    	$this->db->select('a.id as community_id,a.created_date as added_date,b.*,c.info_img1,c.info_img2,d.name_prefix,d.name,d.user_category_id,e.company_introduction,e.hot_presentation,f.profile_image,
		g.sub_category,(select GROUP_CONCAT(j.name SEPARATOR ", ") from tbl_main_product as j where j.busi_id=b.id AND j.status != 0 group by j.busi_id) as mainproducts,
    	(select GROUP_CONCAT(k.name SEPARATOR ", ") from tbl_shipper_service as k where k.busi_id=b.id AND k.status != 0 group by k.busi_id) as mainservices,
        (select count(id) from tbl_inquiry as inq where inq.busi_id = b.id and inq.is_deleted = 0) as have_request,
    	(select count(l.id) from  tbl_stocks_goods as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as stock_buyer_count,(select count(l.id) from tbl_bstation_post as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as bstation_post_count');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.busi_id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','a.busi_id=d.busi_id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.busi_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->where('a.my_busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$this->db->where('a.status',0);
    	$this->db->where('d.account_activated', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('d.is_contactperson',1);
        
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }

    public function getInvitationCommunityRequest($busi_id)
    {
    	$start_date = date('Y-m-d',strtotime("-15 days"));
    	$this->db->select('a.id as community_id,a.created_date as added_date,b.*,c.info_img1,c.info_img2,d.name_prefix,d.user_category_id,d.name,e.company_introduction,e.hot_presentation,f.profile_image,
		g.sub_category,(select GROUP_CONCAT(j.name SEPARATOR ", ") from tbl_main_product as j where j.busi_id=b.id AND j.status != 0 group by j.busi_id) as mainproducts,
        (select count(id) from tbl_inquiry as inq where inq.busi_id = b.id and inq.is_deleted = 0) as have_request,
    	(select GROUP_CONCAT(k.name SEPARATOR ", ") from tbl_shipper_service as k where k.busi_id=b.id AND k.status != 0 group by k.busi_id) as mainservices,
    	(select count(l.id) from  tbl_stocks_goods as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as stock_buyer_count,
        (select count(l.id) from tbl_bstation_post as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as bstation_post_count,a.my_busi_id,d.name,f.profile_image,h.user_category,f.country,a.alert_viewed,d.id as user_id');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.my_busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.my_busi_id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','a.my_busi_id=d.busi_id and d.is_contactperson=1','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.my_busi_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
        $this->db->join(TABLES::$USER_CATEGORIES. ' AS h','d.user_category_id=h.id','inner');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$this->db->where('a.status',0);
    	$this->db->where('d.account_activated', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
        
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function updateCommunity($data)
    {
    	$this->db->where('id',$data['id']);
    	$query=$this->db->update(TABLES::$COMMUNITY_MEMBER,$data);
    	
    	if($query) {
	       return 1;
	   } else {
    	    return 0;
	   }		
    }
    
    public function addToMyCommunity($map) 
    {
        $this->db->select('id');
        $this->db->from(TABLES::$COMMUNITY_MEMBER);
        $this->db->where('busi_id',$map['busi_id']);
        $this->db->where('user_id',$map['user_id']);
        $this->db->where('my_busi_id',$map['my_busi_id']);
        $this->db->where('my_user_id',$map['my_user_id']);
        $query = $this->db->get();
        $row = $query->result_array();
        if(count($row) <= 0) {
            $map['created_date'] = date('Y-m-d H:i:s');
            $this->db->insert(TABLES::$COMMUNITY_MEMBER,$map);
            return 1;
        } else {
            return 0;
        }
    }
    
    public function searchCommunityMember($id,$name) 
    {
        $start_date = date('Y-m-d',strtotime("-15 days"));
    	/*$this->db->select('a.*,b.id as mbid,b.company_name as cname,b.company_country as country,b.company_province as state,
    			b.company_city as city,b.plan_id,b.is_logo_verified,b.gaurantee_period,
    			(CASE WHEN d.nickname IS NULL OR d.nickname = "" THEN d.name ELSE d.nickname END) as membername,
    			d.user_category_id,(CASE WHEN d.nickname IS NULL OR d.nickname = "" THEN e.profile_image ELSE "images/img3470.png" END) as memberimg,f.sub_category as subcategory,
    			(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active,
    			(select count(id) from tbl_chat_messages as cht where cht.from_busi_id = b.id and cht.is_read=0) as messages,
    			(select count(id) from tbl_inquiry as inq where inq.busi_id = b.id and is_deleted = 0) as have_request');*/
        $this->db->select('a.*,b.id as mbid,b.company_name as cname,b.company_country as country,b.company_province as state,
                b.company_city as city,b.plan_id,b.is_logo_verified,b.gaurantee_period,
                d.name as membername,
                d.user_category_id,IFNULL(k.picture,e.profile_image) as memberimg,f.sub_category as subcategory,
                (b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active,
                (select count(id) from tbl_chat_messages as cht where cht.from_busi_id = b.id and cht.is_read=0) as messages,(select count(l.id) from  tbl_stocks_goods as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as stock_buyer_count,(select count(l.id) from tbl_bstation_post as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as bstation_post_count');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS c','c.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER.' AS d','d.busi_id=a.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO.' AS e','e.user_id=d.id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS f','f.id=d.user_subcategory_id','inner');
        $this->db->join(TABLES::$CONTACTPERSON.' AS k ','d.busi_id = k.busi_id ','left');
        //$this->db->join(TABLES::$STOCK_REQUEST.' AS m ','b.id = m.buyer_id ','left');
    	$this->db->where('a.my_busi_id',$id);
    	$this->db->where('a.status',1);
    	$this->db->where('d.is_contactperson',1);
    	if(!empty($name))
    	$this->db->where("(d.name like '%".$name."%' OR d.nickname like '%".$name."%')",'',false);
    	$query_1 = $this->db->get_compiled_select ();
    	$this->db->select('a.*,b.id as mbid,b.company_name as cname,b.company_country as country,b.company_province as state,
    			b.company_city as city,b.plan_id,b.is_logo_verified,b.gaurantee_period,
    			d.name as membername,
    			d.user_category_id,IFNULL(k.picture,e.profile_image) as memberimg,f.sub_category as subcategory,
    			(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active,
    			(select count(id) from tbl_chat_messages as cht where cht.from_busi_id = b.id and cht.is_read=0) as messages,(select count(l.id) from  tbl_stocks_goods as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as stock_buyer_count,(select count(l.id) from tbl_bstation_post as l where l.busi_id=b.id and DATE(l.created_date) > "'.$start_date.'") as bstation_post_count');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.my_busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS c','c.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER.' AS d','d.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER_INFO.' AS e','e.user_id=d.id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS f','f.id=d.user_subcategory_id','inner');
        $this->db->join(TABLES::$CONTACTPERSON.' AS k ','d.busi_id = k.busi_id ','left');
        $this->db->join(TABLES::$STOCK_REQUEST.' AS m ','b.id = m.buyer_id ','left');
    	$this->db->where('a.busi_id',$id);
    	$this->db->where('a.status',1);
    	$this->db->where('d.is_contactperson',1);
    	if(!empty($name))
    		$this->db->where("(d.name like '%".$name."%' OR d.nickname like '%".$name."%')",'',false);
    	$query_2 = $this->db->get_compiled_select ();
    	$sql = "SELECT t.* FROM (".$query_1." UNION ".$query_2.") as t group by t.mbid order by t.created_date desc";
    	$query = $this->db->query($sql);
    	$result = $query->result_array();
    	return $result;
    }
    
    public function deleteCommunityMembers($busi_id,$members) 
    {
    	$this->db->where("((my_busi_id = ".$busi_id." AND busi_id IN(".$members.")) OR (busi_id = ".$busi_id." AND my_busi_id IN(".$members.")))",'',false);
    	$this->db->where('status',1);
    	return $this->db->delete(TABLES::$COMMUNITY_MEMBER);
    }
    
    public function deleteCommunityRequest($id) 
    {
    	$this->db->where('id',$id);
    	return $this->db->delete(TABLES::$COMMUNITY_MEMBER);
    }
    
    public function acceptCommunityRequest($params) 
    {
    	$this->db->where('id',$params['id']);
    	return $this->db->update(TABLES::$COMMUNITY_MEMBER,$params);
    }
    
    public function getCommunityPostById($id) 
    {
    	$this->db->select('a.id,a.title,a.busi_id,b.company_name,c.name_prefix,c.name');
    	$this->db->from(TABLES::$COMMMUNITY_POST.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER.' AS c','b.id=c.busi_id','inner');
    	$this->db->where('a.id', $id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getCommunityPostDetailById($id) 
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$COMMMUNITY_POST.' AS a');
    	$this->db->where('a.id', $id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function updateCommunityPost($params) 
    {
    	$this->db->where('id',$params['id']);
    	return $this->db->update(TABLES::$COMMMUNITY_POST,$params);
    }
    
    public function updateCommunityVisit($id) 
    {
    	$sql = "UPDATE ".TABLES::$COMMMUNITY_POST." SET postviews = postviews + 1 WHERE id=".$id;
    	$this->db->query($sql);
    	return $this->db->affected_rows();
    }
    
    public function communityPostShareInsert($params)
    {
        $this->db->insert( TABLES::$COMMUNITY_POST_SHARE, $params );
        $last_id = $this->db->insert_id ();
        $data ['status'] = 1;
        $data ['msg'] = "Added successfully";
        return $data;
    }

    public function getMyCommunity($myBusiId) 
    {
        $this->db->select('id');
        $this->db->from(TABLES::$COMMUNITY_MEMBER);
        $this->db->where('my_busi_id',$map['my_busi_id']);
        $query = $this->db->get();
        $row = $query->result_array();
        if(count($row) > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function checkNewCommunityAlert($myBusiId)
    {
        $this->db->select('cm.id,cm.my_busi_id,u.profile_image,usr.name,c.user_category,u.country');
        $this->db->from(TABLES::$COMMUNITY_MEMBER. ' AS cm');
        $this->db->join(TABLES::$USER. ' AS usr','cm.my_user_id=usr.id','inner');
        $this->db->join(TABLES::$USER_INFO. ' AS u','cm.my_user_id=u.user_id','inner');
        $this->db->join(TABLES::$USER_CATEGORIES. ' AS c','usr.user_category_id=c.id','inner');
        $this->db->where('cm.busi_id', $myBusiId);
        $this->db->where('cm.alert_viewed', 0);
        $this->db->order_by('cm.id', 'desc');
        $query = $this->db->get();
        $row = $query->result_array();
        if ($row > 0) {
            return $row;
        } else {
            return false;
        }
    }

    /**
    * function to update community request per company
    * 
    * @return int
    */
    public function updateCommunityRequest ($data) {
        $this->db->where('busi_id', $data['busi_id']);
        $this->db->update(TABLES::$COMMUNITY_MEMBER, $data);

        return $this->db->affected_rows();
    }

    
}
