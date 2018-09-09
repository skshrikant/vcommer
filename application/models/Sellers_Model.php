<?php

class Sellers_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
    public function getSellers(){
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*, 
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product,j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS k','a.busi_id = k.busi_id ','inner');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('k.step', 4);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('b.id'); 
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function searchSellers($params) {
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,b.likes,
		b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position,c.profile_image as profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 (select GROUP_CONCAT(DISTINCT mp.name SEPARATOR ",") from tbl_main_product as mp where mp.busi_id=b.id) as main_product,j.id as catalouge_id,l.id as community_id,a.name as contact_name,a.name_prefix as contact_prefix,a.id as user_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','h.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS m ','b.id = m.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 4);
	    if(!empty($params['keyword'])) {
		    	if(!empty($params['country'])) {
		    		$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
		    	}
		    	if(!empty($params['city'])) {
		    		$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
		    	}
		    	if(!empty($params['type'])) {
		    		if($params['type'] ==1) {
		    			$this->db->order_by('b.is_logo_verified', 'DESC');
		    		}
		    	}
	    		if(!empty($params['keyword'])) {
	    			$this->db->where("(". text_search_str('a.name',$params['keyword']) ." OR ". text_search_str('h.name',$params['keyword']) ." OR ". text_search_str('b.company_name',$params['keyword']) ." OR ".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword']).")",'',false);

                    $common_keywords = explode(" ",$params['keyword']);
                    $keywords = array_values(array_unique($common_keywords));
                    $incrementValue = count($keywords);

                    if(!empty($params['plan_id'])) {
                        if($params['plan_id'] <= 1) {                    
                            $this->db->order_by("CASE h.name WHEN '". $params['keyword']. "' THEN 0 END DESC,
                                                 CASE a.name WHEN '". $params['keyword']. "'THEN 1 END DESC,
                                                 CASE b.company_name WHEN '". $params['keyword']. "' THEN 2 END DESC,
                                                 CASE h.name ". fullOrder_str($params['keyword'],$incrementValue+1). " END ASC,
                                                 CASE a.name ". fullOrder_str($params['keyword'],$incrementValue+$incrementValue+1). " END ASC,
                                                 CASE b.company_name ". fullOrder_str($params['keyword'],$incrementValue+$incrementValue+$incrementValue+1). " END ASC
                                                ");
                        }
                    }
	    		}
    	} else {
    		if(!empty($params['country'])) {
    			$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(!empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(!empty($params['cat_id'])) {
    			$this->db->where('k.id', $params['cat_id']);
    		}
			}
			
    	if(!empty($params['busi_id'])) {
    		if(!empty($params['community_only'])) {
    			
					$this->db->where("l.id IS NOT NULL");
					$this->db->where("b.plan_id > 1");
    		}
      
    		if(!empty($params['community_hide'])) {
					$this->db->where("l.id IS NULL");
					$this->db->where("b.plan_id <= 1");
    		}
    	}
    	


        if(!empty($params['plan_id'])) {
            if($params['plan_id'] > 1) {
                $this->db->order_by('b.plan_id', 'DESC');
            }else{
                $this->db->order_by('b.plan_id', 'ASC');
            }
        }

        $this->db->order_by('b.rank','DESC');

    	$this->db->group_by('b.id');
    	
        if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}
    	
        $query = $this->db->get();
		$result = $query->result_array();    
    	return $result;
    }
    
    public function countSellers($params) {
    	$this->db->select('count(DISTINCT a.id) as sellers');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','h.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS m ','b.id = m.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 4);
    	if(!empty($params['keyword'])) {
		    	if(!empty($params['country'])) {
		    		$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
		    	}
		    	if(!empty($params['city'])) {
		    		$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
		    	}
		    	if(!empty($params['type'])) {
		    		if($params['type'] ==1) {
		    			$this->db->order_by('b.is_logo_verified', 'DESC');
		    		}
		    	}
	    		if(!empty($params['keyword'])) {
	    			$this->db->where("(".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword']).")",'',false);
	    		}
    	} else {
    		if(!empty($params['country'])) {
    			$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(!empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(!empty($params['cat_id'])) {
    			$this->db->where('k.id', $params['cat_id']);
    		}
    	}
    	if(!empty($params['busi_id'])) {
    		if(!empty($params['community_only'])) {
    			$this->db->where("l.my_busi_id",$params['busi_id']);
    		}
    		if(!empty($params['community_hide'])) {
    			$this->db->where("l.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(!empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('b.plan_id', 'DESC');
    		}
    	}
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) > 0) {
    		return ceil($result[0]['sellers']/25);
    	} else {
    		return 0;
    	}
    }
    
    public function searchBuyers($params) {
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_subcategory_id, a.user_role, a.account_activated, b.company_name,(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active,
		b.company_country, b.company_province, b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image as profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 (select GROUP_CONCAT(DISTINCT mp.name SEPARATOR ",") from tbl_main_product as mp where mp.busi_id=b.id and mp.status=1) as main_product,j.id as catalouge_id,k.id as pmk_id,l.id as community_id, (select count(l.id) from  tbl_stocks_buyer_request as l where l.buyer_id=b.id) as stock_buyer_count,(select count(l.id) from tbl_bstation_post
             as l where l.busi_id=b.id) as bstation_post_count,m.id as have_request,a.name as contact_name,a.name_prefix as contact_prefix');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','h.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$STOCK_REQUEST.' AS m ','b.id = m.buyer_id ','left');
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('a.user_category_id', 3);
    	if(!empty($params['keyword'])) {
	    	if(!empty($params['country'])) {
	    		$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
	    	}
	    	if(!empty($params['keyword'])) {
	    		$this->db->where("(a.name like '%".trim($params['keyword'])."%' OR b.company_name like '%".trim($params['keyword'])."%' OR h.name like'%".trim($params['keyword'])."%' )",'',false);
	    	}
	    	/*if(!empty($params['keyword'])) {
	    		$this->db->where("(".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword']).")",'',false);
	    	}*/
	    	if(!empty($params['type'])) {
	    		if($params['type'] ==1){
                    $this->db->order_by('is_active','DESC');
	    			// $this->db->order_by('(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email)', 'ASC');
	    		} elseif($params['type'] == 2) {
                    $this->db->order_by('stock_buyer_count','DESC');
                    $this->db->order_by('bstation_post_count','DESC');
	    			// $this->db->order_by('count(m.id)', 'DESC');
	    		}
	    	}
	    	if(!empty($params['similar'])) {
	    		$this->db->where('a.user_subcategory_id', $params['similar']);
	    	}
    	} else {
    		if(!empty($params['cat_id'])) {
    			$this->db->where('k.id', $params['cat_id']);
    		}

            $this->db->order_by('is_active','DESC');
    	}
    	if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}

    	
    	$this->db->group_by('b.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function countBuyers($params) {
    	$this->db->select('count(DISTINCT a.id) as buyers');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','h.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$STOCK_REQUEST.' AS m ','b.id = m.buyer_id ','left');
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('a.user_category_id', 3);
    	if(!empty($params['keyword'])) {
	    	if(!empty($params['country'])) {
	    		$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
	    	}
	    	/*if(!empty($params['keyword'])) {
	    		$this->db->where("(a.name like '%".trim($params['keyword'])."%' OR b.company_name like '%".trim($params['keyword'])."%' OR h.name like'%".trim($params['keyword'])."%' OR n.name like'%".trim($params['keyword'])."%')",'',false);
	    	}*/
	    	if(!empty($params['keyword'])) {
	    		$this->db->where("(".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword']).")",'',false);
	    	}
	    	if(!empty($params['type'])) {
	    		if($params['type'] ==1){
	    			$this->db->order_by('(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email)', 'ASC');
	    		} elseif($params['type'] == 2) {
	    			$this->db->order_by('count(m.id)', 'DESC');
	    		}
	    	}
    	} else {
    		if(!empty($params['cat_id'])) {
    			$this->db->where('k.id', $params['cat_id']);
    		}
    	}
    	$this->db->order_by('a.created_date','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) > 0) {
    		return ceil($result[0]['buyers']/25);
    	} else {
    		return 0;
    	}
    }
    
    public function getBuyers(){
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product, j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 3);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('b.id'); 
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    /* ***** Shippers code ******* */
    public function getShippers(){
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product, j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
    	$this->db->where('a.user_category_id', 2);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 2);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('b.id'); 
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function searchShippers($params) {
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,b.likes,
		b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image as profile_image, d.*, e.*, f.company_owner_name, f.company_introduction,f.hot_presentation, f.contact_person, f.contact_person_flag,
 		 (select GROUP_CONCAT(DISTINCT mp.name SEPARATOR ",") from tbl_shipper_service as mp where mp.busi_id=b.id and mp.is_special=0 and status=1) as main_product, j.id as catalouge_id , l.id as community_id,a.name as contact_name,a.name_prefix as contact_prefix');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$SHIPPER_SERVICES.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$SHIPPING_CATEGORIES.' AS sc','h.shipping_cat_id = sc.id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$TRADE_INFO.' AS k','a.busi_id=k.busi_id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l','a.busi_id=l.my_busi_id','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
		$this->db->join(TABLES::$MAIN_PRODUCT.' AS p ','b.id = p.busi_id ','left');
		$this->db->join(TABLES::$PRODUCT_ITEM.' AS q ','b.id = q.busi_id ','left');
		$this->db->join(TABLES::$SUB_PRODUCT.' AS r','q.id=q.sproduct_id','left');
    	$this->db->where('a.user_category_id', 2);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 2);

    	if(isset($params['keyword']) && !empty($params['keyword'])) {
	    	if(!empty($params['country'])) {
	    		$this->db->where("b.company_country like '%".$params['country']."%'",'',false);
	    	}
	    	if(!empty($params['city'])) {
	    		$this->db->where("b.company_city like '%".$params['city']."%'",'',false);
	    	}
	    	if(!empty($params['keyword'])) {
	    		$this->db->where("(".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword'])." OR ".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('sc.alias',$params['keyword']).")",'',false);
	    	}
    	} else {
    		if(isset($params['service']) && !empty($params['service'])) {
    			$this->db->where('sc.id',$params['service']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
					$this->db->where("l.id IS NULL");
					$this->db->where("b.plan_id <= 1");
    		}
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->order_by("l.id","DESC");
    		}
    	}

			if(isset($params['main_prod']) && !empty($params['main_prod'])) {
					$this->db->where("(h.name like '%".trim($params['main_prod'])."%')",'',false);
			}
			if(isset($params['sub_prod']) && !empty($params['sub_prod'])) {
					$this->db->where("(r.name like '%".trim($params['sub_prod'])."%')",'',false);
			}
    	if(isset($params['usubcat_id']) && !empty($params['usubcat_id'])) {
				$this->db->order_by("FIELD(e.id, ".$params['usubcat_id'].") DESC");
    	}
        $this->db->order_by('b.plan_id','DESC');
    	$this->db->group_by('b.id');
    	if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function countShippers($params) {
    	$this->db->select('count(DISTINCT a.id) as shippers');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$SHIPPER_SERVICES.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$SHIPPING_CATEGORIES.' AS sc','h.shipping_cat_id = sc.id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$TRADE_INFO.' AS k','a.busi_id=k.busi_id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l','a.busi_id=l.my_busi_id','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
		$this->db->join(TABLES::$MAIN_PRODUCT.' AS p ','b.id = p.busi_id ','left');
		$this->db->join(TABLES::$PRODUCT_ITEM.' AS q ','b.id = q.busi_id ','left');
		$this->db->join(TABLES::$SUB_PRODUCT.' AS r','q.id=q.sproduct_id','left');
    	$this->db->where('a.user_category_id', 2);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 2);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
	    	if(!empty($params['country'])) {
	    		$this->db->where("b.company_country like '%".$params['country']."%'",'',false);
	    	}
	    	if(!empty($params['city'])) {
	    		$this->db->where("b.company_city like '%".$params['city']."%'",'',false);
	    	}
	    	if(!empty($params['keyword'])) {
	    		$this->db->where("(".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword'])." OR ".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('sc.alias',$params['keyword']).")",'',false);
	    	}
    	} else {
    		if(isset($params['service']) && !empty($params['service'])) {
    			$this->db->where('sc.id',$params['service']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where('a.busi_id !=', $params['busi_id']);
    		}
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->order_by('k.busi_id', 'DESC');
    		}
    		
    	}
    	if(isset($params['usubcat_id']) && !empty($params['usubcat_id'])) {
    		$this->db->where("e.id",$params['usubcat_id']);
    	}
		if(isset($params['main_prod']) && !empty($params['main_prod'])) {
			$this->db->where("(p.name like '%".trim($params['main_prod'])."%')",'',false);
		}
		if(isset($params['sub_prod']) && !empty($params['sub_prod'])) {
			$this->db->where("(r.name like '%".trim($params['sub_prod'])."%')",'',false);
		}
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) > 0) {
    		return ceil($result[0]['shippers']/25);
    	} else {
    		return 0;
    	}
    }
    
    public function getShippersByCommunity($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product, j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 2);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('b.id IN('.$busi_ids.')','',false);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('a.id'); 
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function getShippersHideCommunity($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product, j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 2);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('b.id NOT IN('.$busi_ids.')','',false);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('a.id'); 
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function getShippersShippingLines($id){
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product, j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 2);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('a.user_subcategory_id', $id);
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    /* ************** Shippers Code End  ***************** */
    
    public function getFeaturedProductVideo()
    {
    	$this->db->select('a.*, b.*,c.*, d.company_name , d.company_country , d.company_province, d.gaurantee_period, d.plan_id, d.is_logo_verified, d.rank');
    	$this->db->from(TABLES::$FEATURED_PRODUCT_VIDEO.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as c', ' c.id = a.video_id ', 'left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' as b', ' b.id = c.product_item_id ', 'left');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as d' , 'd.id = a.busi_id', 'left');
    	$this->db->where ( 'NOW() BETWEEN a.from_date AND a.to_date');
    	$this->db->where('a.status', 1);
    	$this->db->limit(12);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getFeaturedWorldSeller()
    {
    	$this->db->select('f.id, b.company_country, b.company_province, d.company_owner_name, d.company_introduction, d.contact_person, e.name as contact_person_name, d.contact_person_flag, e.picture, e.position,i.flag,f.busi_id,a.name as product_name');
    	//$this->db->from(TABLES::$FEATURED_WORLD_SELLER.' as a');
        $this->db->from(TABLES::$USER.' AS f');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as b', 'f.busi_id = b.id', 'left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' as c', 'b.id = c.busi_id', 'left');
    	$this->db->join(TABLES::$COMPANY_INFO.' as d', 'b.id = d.busi_id', 'left');
    	$this->db->join(TABLES::$CONTACTPERSON.' as e', 'b.id = e.busi_id', 'left');
        $this->db->join(TABLES::$COUNTRY.' AS i','b.company_country=i.name','left');
        $this->db->join(TABLES::$PRODUCT_ITEM.' as a', 'b.id = a.busi_id', 'left');
    	//$this->db->where ( 'NOW() BETWEEN a.start_date AND a.end_date');
    	//$this->db->where('b.is_logo_verified', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	//$this->db->where('a.status', 1);
    	$this->db->where('f.user_category_id', 1);
        $this->db->order_by('b.plan_id',"desc");
        $this->db->group_by('f.busi_id');
    	$this->db->limit(4);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getFeaturedWorldShippers()
    {
    	$this->db->select('f.id, b.company_country, b.company_province, d.company_owner_name, d.company_introduction, d.contact_person, e.name as contact_person_name, d.contact_person_flag, e.picture, e.position,a.name as product_name,f.busi_id');
    	//$this->db->from(TABLES::$FEATURED_WORLD_SELLER.' as a');
        $this->db->from(TABLES::$USER.' AS f');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as b', 'f.busi_id = b.id', 'left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' as c', 'b.id = c.busi_id', 'left');
    	$this->db->join(TABLES::$COMPANY_INFO.' as d', 'b.id = d.busi_id', 'left');
    	$this->db->join(TABLES::$CONTACTPERSON.' as e', 'b.id = d.busi_id', 'left');
        $this->db->join(TABLES::$PRODUCT_ITEM.' as a', 'b.id = a.busi_id', 'left');
    	//$this->db->join(TABLES::$USER.' AS f', 'b.id= f.busi_id', 'left');
    	//$this->db->where ( 'NOW() BETWEEN a.start_date AND a.end_date');
    	$this->db->where('b.is_logo_verified', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	//$this->db->where('a.status', 1);
    	$this->db->where('f.user_category_id', 2);
        $this->db->order_by('b.plan_id',"desc");
        $this->db->group_by('f.busi_id');
    	$this->db->limit(4);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getFeaturedWorldBuyer()
    {
    	
        $this->db->select('f.id, b.company_country, b.company_province, d.company_owner_name, d.company_introduction, d.contact_person,d.contact_person_flag, e.name as contact_person_name, e.picture, e.position,f.busi_id,i.flag,a.name as product_name');
        //$this->db->from(TABLES::$FEATURED_WORLD_BUYER.' as a');
        $this->db->from(TABLES::$USER.' AS f'/*, 'b.id= f.busi_id', 'left'*/);
        $this->db->join(TABLES::$BUSINESS_INFO.' as b', 'f.busi_id = b.id', 'left');
        $this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' as c', 'b.id = c.busi_id', 'left');
        $this->db->join(TABLES::$COMPANY_INFO.' as d', 'b.id = d.busi_id', 'left');
        $this->db->join(TABLES::$CONTACTPERSON.' as e', 'b.id = e.busi_id', 'left');
        $this->db->join(TABLES::$COUNTRY.' AS i','b.company_country=i.name','left');
        $this->db->join(TABLES::$PRODUCT_ITEM.' as a', 'b.id = a.busi_id', 'left');
        //$this->db->join(TABLES::$USER.' AS f', 'b.id= f.busi_id', 'left');
        //$this->db->where ( 'NOW() BETWEEN a.from_date AND a.to_date');
        $this->db->where('f.user_category_id', 3);
        //$this->db->where('b.is_logo_verified', 1);
        $this->db->where('b.is_disable', 0);
        $this->db->where('b.is_deleted', 0);
        $this->db->where('b.company_rendom_carousel', 1);
        $this->db->order_by('b.plan_id',"desc");
        $this->db->group_by('f.busi_id');
        $this->db->limit(4);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }
    public function getFeaturedProduct()
    {
    	$this->db->select('a.*, b.*, c.company_name , c.company_country , c.company_province, c.gaurantee_period, c.plan_id, c.is_logo_verified, c.rank');
    	$this->db->from(TABLES::$FEATURED_PRODUCT.' as a');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' as b', ' b.id = a.item_id ', 'left');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->where ( 'NOW() BETWEEN a.from_date AND a.to_date');
    	$this->db->where('a.status', 1);
    	$this->db->limit(12);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getProducts(){
    	$this->db->select('a.*, b.company_name, b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*, d.name as main_category_name,  d.id as main_category_id ');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS c','c.id=a.sproduct_id','left');
    	$this->db->join(TABLES::$PRODUCT_MAIN_CATEGORY.' AS d','c.mcat_id=d.id','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('d.status', 1);
    	$this->db->where('c.status', 1);
    	$this->db->group_by('a.id');
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function searchProducts($params){
    	$this->db->select('a.*, b.company_name, b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,e.id as user_id, e.name_prefix,e.name as user_name, h.sub_category, g.*, d.name as main_category_name,  d.id as main_category_id, l.id as community_id,IFNULL(n.picture,f.profile_image) as profile_image,n.name as contact_name,n.name_prefix as contact_prefix ');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER.' AS e','a.busi_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO.' AS f','e.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS h','e.user_subcategory_id=h.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS c','c.id=a.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','a.mproduct_id=d.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l','a.busi_id=l.my_busi_id','left');
    	$this->db->join(TABLES::$CONTACTPERSON.' AS n ','b.id = n.busi_id ','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('d.status', 1);
    	$this->db->where('(c.status = 1 OR c.status IS NULL)', '',false);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
	    	if(isset($params['country']) && !empty($params['country'])) {
	    		$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
	    	}
	    	if(isset($params['keyword']) && !empty($params['keyword'])) {
					$this->db->where("(". text_search_str('a.name',$params['keyword']) ." OR ". text_search_str('a.model_no',$params['keyword']) ." OR ". fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('a.model_no',$params['keyword']).")",'',false);
					$common_keywords = explode(" ",$params['keyword']);
					$keywords = array_values(array_unique($common_keywords));
					$incrementValue = count($keywords);
					$this->db->order_by("CASE a.name WHEN '". $params['keyword']. "' THEN 0 END DESC,
																CASE a.model_no WHEN '". $params['keyword']. "' THEN 1 END DESC,
																CASE a.name ". fullOrder_str($params['keyword'],$incrementValue+1). " END ASC,
																CASE a.model_no ". fullOrder_str($params['keyword'],$incrementValue+$incrementValue+1). " END ASC
															");
	    	}
	    	if(isset($params['city']) && !empty($params['city'])) {
	    		$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
	    	}
	    	if(isset($params['type']) && !empty($params['type'])) {
	    		if($params['type'] ==1) {
	    			$this->db->order_by('a.unit_price', 'ASC');
	    		} elseif($params['type'] ==2){
	    			 
	    			$this->db->order_by('a.unit_price', 'DESC');
	    		}
	    	}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('d.subcat_id', $params['cat_id']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
					$this->db->where("l.id IS NOT NULL");
					$this->db->where("b.plan_id > 1");
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
					$this->db->where("l.id IS NULL");
					$this->db->where("b.plan_id <= 1");
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
			if($params['plan_id'] > 1) {
				$this->db->order_by('b.plan_id', 'DESC');
			}else{
                $this->db->order_by('b.plan_id', 'ASC');
            }
    	}
    	if(isset($params['main_prod']) && $params['main_prod']!=''){
				$this->db->where("(d.name like '%".trim($params['main_prod'])."%')",'',false);
			}
			if(isset($params['sub_prod']) && $params['sub_prod']!=''){
				$this->db->where("(c.name like '%".trim($params['sub_prod'])."%')",'',false);
			}
    	
        $this->db->order_by('b.rank','DESC');

        $this->db->group_by('a.id');
    	if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}

    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;	
    }
    
    public function countProducts($params){
    	$this->db->select('count(DISTINCT a.id) as products');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER.' AS e','a.busi_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO.' AS f','e.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS h','e.user_subcategory_id=h.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS c','c.id=a.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','a.mproduct_id=d.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l','a.busi_id=l.my_busi_id','left');
    	$this->db->join(TABLES::$CONTACTPERSON.' AS n ','b.id = n.busi_id ','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('d.status', 1);
    	$this->db->where('(c.status = 1 OR c.status IS NULL)', '',false);
    	if(!empty($params['keyword'])) {
	    	if(!empty($params['country'])) {
	    		$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
	    	}
	    	if(!empty($params['keyword'])) {
	    		$this->db->where("(a.name like '%".trim($params['keyword'])."%' OR a.model_no like '%".trim($params['keyword'])."%')",'',false);
	    	}
	    	if(!empty($params['city'])) {
	    		$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
	    	}
	    	if(!empty($params['type'])) {
	    		if($params['type'] ==1) {
	    			$this->db->order_by('a.unit_price', 'ASC');
	    		} elseif($params['type'] ==2){
	    			 
	    			$this->db->order_by('a.unit_price', 'DESC');
	    		}
	    	}
    	} else {
    		if(!empty($params['cat_id'])) {
    			$this->db->where('d.subcat_id', $params['cat_id']);
    		}
    	}
    	if(!empty($params['busi_id'])) {
    		if(!empty($params['community_only'])) {
    			$this->db->where("l.my_busi_id",$params['busi_id']);
    		}
    		if(!empty($params['community_hide'])) {
    			$this->db->where("l.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(!empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('b.plan_id', 'DESC');
    		}
    	}
    	 
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) > 0) {
    		return ceil($result[0]['products']/25);
    	} else {
    		return 0;
    	}
    	 
    }
    
    public function getOneproductById($id) {
    	$this->db->select('a.id as product_id,a.name as product_name,  a.description, a.likes as item_likes, a.visit, a.main_image, b.*, c.*, d.name as plan,i.flag,l.id as community_id, u.user_category');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. '  AS b','a.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER. '  AS c','c.busi_id=b.id','left');
        $this->db->join(TABLES::$USER_CATEGORIES. '  AS u','c.user_category_id=u.id','left');
    	$this->db->join(TABLES::$SUBSCRIPTION_PLAN. '  AS d','d.id=b.plan_id','left');
    	$this->db->join(TABLES::$COUNTRY.' AS i','b.company_country=i.name','left');
        $this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.my_busi_id ','left');
    	$this->db->where('a.id',$id);
        $this->db->group_by('a.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getProductsbyVerified(){
    	$this->db->select('a.*, b.company_name, b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->order_by('b.is_logo_verified','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    public function productCommunityFirst($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.*, b.company_name, b.company_country, b.company_province,  b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('b.id IN('.$busi_ids.')','',false);
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    public function productCommunityHide($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.*, b.company_name, b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('b.id NOT IN('.$busi_ids.')','',false);
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function getSellersByBlackHorseMember(){
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,b.accept_chat,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product,  j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->order_by('b.plan_id','DESC');
    	$this->db->group_by('a.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function getSellersByCommunityMember($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product,   j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	//$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS i ','b.id = i.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('b.id IN('.$busi_ids.')','',false);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('a.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function getSellersByCommunityMemberhide($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product,   j.id as catalouge_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	//$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS i ','b.id = i.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('b.id NOT IN('.$busi_ids.')','',false);
    	$this->db->order_by('a.created_date','DESC');
    	$this->db->group_by('a.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    public function getCatalogueById($id)
    {
    	$this->db->select('a.*,  b.company_name , b.company_country , b.company_province, b.gaurantee_period, b.plan_id, b.is_logo_verified, b.rank, c.*, d.* ');
    	$this->db->from(TABLES::$PRODUCT_CATALOGUE.' as a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as b' , 'b.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE_ITEM. ' as c' , 'a.id = c.catalogue_id', 'left');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' as d' , 'd.id = c.item_id', 'left');
    	$this->db->where('a.status', 1);
    	$this->db->where('a.id', $id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getSellerById($id) {
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.company_image1, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product,  j.id as catalouge_id,b.accept_chat,i.picture,x.flag');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
        $this->db->join(TABLES::$CONTACTPERSON.' as i', 'b.id = i.busi_id', 'left');
        $this->db->join(TABLES::$COUNTRY.' AS x','b.company_country=x.name','left');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('a.id', $id);
        $this->db->group_by('a.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getBuyerById($id) {
    		$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
		b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.company_image1, f.contact_person, f.contact_person_flag,
 		 GROUP_CONCAT(h.name SEPARATOR ",") as main_product,(select count(l.id) from  tbl_stocks_buyer_request as l where l.buyer_id=b.id) as stock_buyer_count,(select count(l.id) from tbl_bstation_post
             as l where l.busi_id=b.id) as bstation_post_count,(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active,b.accept_chat,i.picture,x.flag');
    		$this->db->from(TABLES::$USER.' AS a');
    		$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    		$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    		$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    		$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    		$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    		$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    		$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
            $this->db->join(TABLES::$CONTACTPERSON.' as i', 'b.id = i.busi_id', 'left');
            $this->db->join(TABLES::$COUNTRY.' AS x','b.company_country=x.name','left');
    		$this->db->where('a.user_category_id', 3);
    		$this->db->where('a.account_activated', 1);
    		$this->db->where('a.is_suspend', 0);
    		$this->db->where('a.is_deleted', 0);
    		$this->db->where('b.is_disable', 0);
    		$this->db->where('b.is_deleted', 0);
    		$this->db->where('a.id', $id);
            $this->db->group_by('a.id');
    		$query = $this->db->get();
    		//echo $this->db->last_query();
    		$result = $query->result_array();
    		return $result;
    		
    }
    public function getShipperById($id) {
            $this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,
        b.company_country, b.company_province, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
        c.user_id, c.alternative_email, c.mobile_number,c.position, c.profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.company_image1, f.contact_person, f.contact_person_flag,
         GROUP_CONCAT(h.name SEPARATOR ",") as main_product,b.accept_chat,i.picture,x.flag');
            $this->db->from(TABLES::$USER.' AS a');
            $this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
            $this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
            $this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
            $this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
            $this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
            $this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
            $this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
            $this->db->join(TABLES::$CONTACTPERSON.' as i', 'b.id = i.busi_id', 'left');
            $this->db->join(TABLES::$COUNTRY.' AS x','b.company_country=x.name','left');
            $this->db->where('a.user_category_id', 2);
            $this->db->where('a.account_activated', 1);
            $this->db->where('a.is_suspend', 0);
            $this->db->where('a.is_deleted', 0);
            $this->db->where('b.is_disable', 0);
            $this->db->where('b.is_deleted', 0);
            $this->db->where('a.id', $id);
            $query = $this->db->get();
            //echo $this->db->last_query();
            $result = $query->result_array();
            return $result;
            
    }

    public function getProductCategory() {
    	$this->db->select('*');
    	$this->db->from(TABLES::$PRODUCT_MAIN_CATEGORY);
    	$this->db->where('status', 1);
    }
    
    public function getCityByCountry($country,$type) {
    	$this->db->select('DISTINCT(a.company_city)');
    	$this->db->from(TABLES::$BUSINESS_INFO.' AS a' );
    	$this->db->join(TABLES::$USER.' AS b','a.id=b.busi_id','inner');
    	$this->db->where('a.company_country', $country);
    	$this->db->where('a.is_disable', 0);
    	$this->db->where('b.user_category_id', $type);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    
    public function getAllShipperService() {
    	$this->db->select('DISTINCT name',false);
    	$this->db->from(TABLES::$SHIPPER_SERVICES);
    	$this->db->where('status', 1);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getAllShipperCategories() {
    	$this->db->select('id,name,cat_image', false);
    	$this->db->from(TABLES::$SHIPPING_CATEGORIES);
    	$this->db->where('status', 1);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function search3DProducts($params){
    	$this->db->select('a.id as did,b.*, c.company_name, c.company_country, c.company_province,c.company_city, c.company_email, c.business_logo, c.annual_trad_volume, c.plan_id, c.gaurantee_period, c.is_logo_verified, c.rank,g.image');
    	$this->db->from(TABLES::$MY_3DPRODUCT.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS b', 'a.product_id = b.id', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER.' AS f','b.busi_id=f.busi_id','inner');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS e','e.id=b.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','b.mproduct_id=d.id','left');
    	$this->db->join(TABLES::$PRODUCT_3DPRODUCT.' AS g','a.id=g.product_item_id','left');
    	$this->db->where('f.is_contactperson', 1);
    	$this->db->where('b.status', 1);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(!empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(!empty($params['keyword'])) {
    			$this->db->where("(".fulltext_search_str('b.name',$params['keyword'])." OR ".fulltext_search_str('b.model_no',$params['keyword']).")",'',false);
    		}
    		if(!empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(!empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('a.unit_price', 'ASC');
    			} elseif($params['type'] ==2){
    
    				$this->db->order_by('a.unit_price', 'DESC');
    			}
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('d.subcat_id', $params['cat_id']);
    		}
    	}
    	$this->db->group_by('a.id');
    	if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    	
    }
    
    public function count3DProducts($params){
    	$this->db->select('count(DISTINCT a.id) as products');
    	$this->db->from(TABLES::$MY_3DPRODUCT.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS b', 'a.product_id = b.id', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER.' AS f','b.busi_id=f.busi_id','inner');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS e','e.id=b.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','b.mproduct_id=d.id','left');
    	$this->db->where('f.is_contactperson', 1);
    	$this->db->where('b.status', 1);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(!empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(!empty($params['keyword'])) {
    			$this->db->where("(".fulltext_search_str('b.name',$params['keyword'])." OR ".fulltext_search_str('b.model_no',$params['keyword']).")",'',false);
    		}
    		if(!empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(!empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('a.unit_price', 'ASC');
    			} elseif($params['type'] ==2){
    
    				$this->db->order_by('a.unit_price', 'DESC');
    			}
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('d.subcat_id', $params['cat_id']);
    		}
    	}
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	 
    	 
    }
    
    public function searchVCatalogues($params){
    	$current_date = date('Y-m-d');
    	$this->db->select('b.*,b.id as catalogue_id, c.company_name, c.company_country, c.company_province,c.company_city, c.company_email, c.business_logo, c.annual_trad_volume, c.plan_id, c.gaurantee_period, c.is_logo_verified, c.rank,(select id from tbl_community_member as cm where cm.my_busi_id=c.id and cm.busi_id = '.$params['busi_id'].' limit 1) as incommunity');
    	$this->db->from(TABLES::$PRODUCT_CATALOGUE.' as b');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER.' AS f','b.busi_id=f.busi_id','inner');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE_ITEM.' AS g','b.id=g.catalogue_id','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS h', 'g.item_id = h.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS e','e.id=h.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','h.mproduct_id=d.id','left');
    	$this->db->where('f.is_contactperson', 1);
    	$this->db->where('b.status', 1);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(!empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(!empty($params['keyword'])) {
    			$this->db->where("(".fulltext_search_str('b.catalogue_title',$params['keyword']).")",'',false);
    		}
    		if(!empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(!empty($params['type']) && $params['type'] == 1) {
    			$this->db->where("c.plan_id > 1",'',false);
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('d.subcat_id', $params['cat_id']);
    		}
    	}
    	$this->db->group_by('b.id');
    	if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    
    public function countVCatalogues($params){
    	$current_date = date('Y-m-d');
    	$this->db->select('count(DISTINCT b.id) as catalogues');
    	$this->db->from(TABLES::$PRODUCT_CATALOGUE.' as b');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER.' AS f','b.busi_id=f.busi_id','inner');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE_ITEM.' AS g','b.id=g.catalogue_id','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS h', 'g.item_id = h.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS e','e.id=h.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','h.mproduct_id=d.id','left');
    	$this->db->where('f.is_contactperson', 1);
    	$this->db->where('b.status', 1);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(!empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(!empty($params['keyword'])) {
    			$this->db->where("(".fulltext_search_str('b.catalogue_title',$params['keyword']).")",'',false);
    		}
    		if(!empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(!empty($params['type']) && $params['type'] == 1) {
    			$this->db->where("c.plan_id > 1",'',false);
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('d.subcat_id', $params['cat_id']);
    		}
    	}
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) > 0) {
    		return ceil($result[0]['products']/25);
    	} else {
    		return 0;
    	}
    	 
    }
    
    public function searchSellerDesksites($params) {
    	$this->db->select('a.id, a.busi_id, a.email, a.name_prefix, a.name, a.user_category_id, a.user_role, b.company_name,b.likes,(select group_concat(n.main_image) from tbl_product_item as n where n.busi_id=b.id and n.status=1 group by n.busi_id) as pro_images, 
		b.company_country, b.company_province,b.company_city, b.company_email, b.business_logo, b.annual_trad_volume, b.plan_id, b.gaurantee_period, b.is_logo_verified, b.rank,  g.*,
		c.user_id, c.alternative_email, c.mobile_number,c.position,c.profile_image as profile_image, d.*, e.*, f.company_owner_name, f.company_introduction, f.contact_person, f.contact_person_flag,
 		 (select GROUP_CONCAT(DISTINCT mp.name SEPARATOR ",") from tbl_main_product as mp where mp.busi_id=b.id) as main_product,j.id as catalouge_id,l.id as community_id,a.name as contact_name,a.name_prefix as contact_prefix,a.id as user_id');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','h.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS m ','b.id = m.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
		$this->db->join(TABLES::$SUB_PRODUCT.' AS p','p.id=m.sproduct_id','left');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 4);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['type']) && !empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('b.is_logo_verified', 'DESC');
    			}
    		}
    		if(isset($params['keyword']) && !empty($params['keyword'])) {
    			$this->db->where("(".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword']).")",'',false);
    		}
    	} else {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('k.id', $params['cat_id']);
    		}
    	}
		
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->where("l.my_busi_id",$params['busi_id']);
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where("l.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('b.plan_id', 'DESC');
    		}
    	}
		if(isset($params['main_prod']) && !empty($params['main_prod'])) {
    		$this->db->where("(h.name like '%".trim($params['main_prod'])."%')",'',false);
    	}
		if(isset($params['sub_prod']) && $params['sub_prod']!=''){
			$this->db->where("(p.name like '%".trim($params['sub_prod'])."%')",'',false);
		} 
    	$this->db->order_by('b.rank','DESC');
    	$this->db->order_by('b.plan_id','DESC');
    	$this->db->order_by('b.is_logo_verified','DESC');
    	$this->db->order_by('b.gaurantee_period','DESC');
    	$this->db->group_by('b.id');
    	if(!empty($params['page'])) {
    		$start = $params['page']*25 - 25;
    		$this->db->limit($start,25);
    	}
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function countSellerDesksites($params) {
    	$this->db->select('count(DISTINCT a.id) as sellers');
    	$this->db->from(TABLES::$USER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS g','g.busi_id=b.id','left');
    	$this->db->join(TABLES::$USER_INFO.' AS c','a.id=c.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS d','a.user_category_id=d.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS e','a.user_subcategory_id=e.id','left');
    	$this->db->join(TABLES::$COMPANY_INFO.' AS f','b.id=f.busi_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS h ','b.id = h.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' AS j ','b.id = j.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','h.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS m ','b.id = m.busi_id ','left');
    	$this->db->join(TABLES::$PRODUCT_STAGE.' AS o','a.busi_id = o.busi_id ','inner');
		$this->db->join(TABLES::$SUB_PRODUCT.' AS p','p.id=m.sproduct_id','left');
    	$this->db->where('a.user_category_id', 1);
    	$this->db->where('a.account_activated', 1);
    	$this->db->where('a.is_contactperson', 1);
    	$this->db->where('a.is_suspend', 0);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_disable', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('o.step', 4);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['type']) && !empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('b.is_logo_verified', 'DESC');
    			}
    		}
    		if(isset($params['keyword']) && !empty($params['keyword'])) {
    			$this->db->where("(".fulltext_search_str('a.name',$params['keyword'])." OR ".fulltext_search_str('b.company_name',$params['keyword'])." OR ".fulltext_search_str('h.name',$params['keyword']).")",'',false);
    		}
    	} else {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("b.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("b.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('k.id', $params['cat_id']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->where("l.my_busi_id",$params['busi_id']);
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where("l.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('b.plan_id', 'DESC');
    		}
    	}
		if(isset($params['main_prod']) && !empty($params['main_prod'])) {
    		$this->db->where("(h.name like '%".trim($params['main_prod'])."%')",'',false);
    	}
		if(isset($params['sub_prod']) && $params['sub_prod']!=''){
			$this->db->where("(p.name like '%".trim($params['sub_prod'])."%')",'',false);
		} 
    	$this->db->order_by('a.created_date','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) > 0) {
    		return ceil($result[0]['sellers']/25);
    	} else {
    		return 0;
    	}
    }
    
    
}