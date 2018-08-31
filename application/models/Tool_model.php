<?php

class Tool_model extends CI_Model {

    const pagination_size = 10;
    
    function __construct() {
        parent::__construct();
    }

    public function getMyStationStats($busi_id)
    {
        $this->db->select('b.id,COUNT(DISTINCT a.id) AS visit, SUM(a.likes) AS likes, SUM(a.shares) AS shares,c.desksite_bg1');
        $this->db->from(TABLES::$BUSINESS_VISITORS.' AS a');
        $this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
        $this->db->join(TABLES::$BUSINESSINFOIMAGE.' AS c','b.id=c.busi_id','left');
        $this->db->where('a.busi_id',$busi_id);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }
    
    public function getMyStationProductStats($busi_id)
    {
    	$this->db->select('count(id) as products,sum(visit) as visit,sum(likes) as likes,sum(shares) as shares,group_concat(main_image) as images');
    	$this->db->from(TABLES::$PRODUCT_ITEM);
    	$this->db->where('busi_id',$busi_id);
    	$this->db->where('status',1);
    	$this->db->group_by('busi_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyStationActiveProductStats($busi_id)
    {
    	/*$this->db->select('count(id) as products,sum(visit) as visit,sum(likes) as likes,sum(shares) as shares,group_concat(main_image) as images');
    	$this->db->from(TABLES::$PRODUCT_ITEM);
    	$this->db->where('busi_id',$busi_id);
    	$this->db->where('status',1);
    	$this->db->having('visit > 0','',false);
    	$this->db->having('likes > 0','',false);
    	$this->db->having('shares > 0','',false);
    	$this->db->group_by('busi_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;*/
        $this->db->select('count(b.id) as products,sum(b.visit) as visit,sum(a.likes) as likes,sum(a.shares) as shares,main_image as images');
        $this->db->from(TABLES::$PRODUCT_VISITORS.' AS a');
        $this->db->join(TABLES::$PRODUCT_ITEM.' AS b','a.item_id=b.id','inner');
        $this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','left');
        $this->db->where('b.busi_id',$busi_id);
        $this->db->where('b.status',1);
        $this->db->having('visit > 0','',false);
        $this->db->having('likes > 0','',false);
        $this->db->having('shares > 0','',false);
        $this->db->group_by('a.item_id');
        $this->db->group_by('a.city');
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;

    }
    
    public function addBusinessVisit($data) {
    	$this->db->select('id');
    	$this->db->from(TABLES::$BUSINESS_VISITORS);
    	$this->db->where('busi_id',$data['busi_id']);
    	$this->db->where('visit_date',$data['visit_date']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	//if(count($row) <= 0) {
    		$this->db->insert(TABLES::$BUSINESS_VISITORS,$data);
    	/*} else {
    		$this->db->where('id',$row[0]['id']);
    		$this->db->update(TABLES::$BUSINESS_VISITORS,$data);
    	}*/
    	$sql = 'UPDATE '.TABLES::$BUSINESS_INFO.' SET visit = visit+1 ';
    	if(!empty($data['likes'])) {
    		$sql = $sql.',likes = likes+1 ';
    	}
    	if(!empty($data['shares'])) {
    		$sql = $sql.',shares = shares+1 ';
    	}
    	$sql = $sql.' WHERE id='.$data['busi_id'];
    	$query = $this->db->query($sql);
    }
    
    public function addProductVisit($data) {
    	$this->db->select('id');
    	$this->db->from(TABLES::$PRODUCT_VISITORS);
    	$this->db->where('item_id',$data['item_id']);
    	$this->db->where('visit_date',$data['visit_date']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	//if(count($row) <= 0) {
    		$this->db->insert(TABLES::$PRODUCT_VISITORS,$data);
    	/*} else {
    		$this->db->where('id',$row[0]['id']);
    		$this->db->update(TABLES::$PRODUCT_VISITORS,$data);
    	}*/
    	$sql = 'UPDATE '.TABLES::$PRODUCT_ITEM.' SET visit = visit+1 ';
    	if(!empty($data['likes'])) {
    		$sql = $sql.',likes = likes+1 ';
    	}
    	if(!empty($data['shares'])) {
    		$sql = $sql.',shares = shares+1 ';
    	}
    	$sql = $sql.' WHERE id='.$data['item_id'];
    	$query = $this->db->query($sql);
    }
    
    public function getBusinessVisitHistory($map) {
    	$page_size = 10;
    	$this->db->select('count(DISTINCT a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares,a.country as country_name,a.city as city_name,a.visit_date');
    	$this->db->from(TABLES::$BUSINESS_VISITORS.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->where('a.busi_id',$map['busi_id']);
    	if(!empty($map['country_name'])) {
    		$this->db->where('a.country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	$this->db->group_by('a.city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('a.country','ASC');
    	$this->db->order_by('a.city','ASC');
    	if(!empty($map['page'])) {
    		$start_page = $map['page']*10 - $page_size;
    		$this->db->limit($page_size,$start_page);
    	}
    	$query = $this->db->get();
        //echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    }
    
    /**
     * function to get product visit history details
     * 
     * @param array $map
     * @return array
     */
    public function getProductVisitHistory($map) {

    	$getProdStatics = $this->getProductStatistics($map);
    	if(!empty($map['page'])) {
    	    $start_page = $map['page']*self::pagination_size - self::pagination_size;
    		$getProdStatics->limit(self::pagination_size,$start_page);
    	}
    	$query              = $getProdStatics->get();
        $queryCount         = $this->db->query('SELECT FOUND_ROWS() AS `Count`');
        $totalres           = $queryCount->row()->Count;  
    	$row                = $query->result_array();
    	$row['totalPages']  = ceil($totalres/self::pagination_size);
        $row['products']    = '';
        $row['visits']      = '';
        $row['likes']       = '';
        $row['shares']      = '';
        
        if( $row['totalPages'] == $map['page'] ) {
            $getTotalInfo   = $this->getProductStatistics($map,1);
            $querys         = $getTotalInfo->get();
            $rows           = $querys->result_array();
            foreach ($rows as $ap) {
                $products   = $ap['products'];
                $visits     = $ap['visits'];
                $likes      = $ap['likes'];
                $shares     = $ap['shares'];
        }
            $row['products']    = $products;
            $row['visits']      = $visits;
            $row['likes']       = $likes;
            $row['shares']      = $shares;
        }
        if($map['page'] == 1 ) {
            $getTotalInfo   = $this->getProductStatistics($map,1);
            $querys         = $getTotalInfo->get();
            $rows           = $querys->result_array();
            foreach ($rows as $ap) {
                $products   = $ap['products'];
                $visits     = $ap['visits'];
                $likes      = $ap['likes'];
                $shares     = $ap['shares'];
            }
            $row['productsHomePg']  = $products;
            $row['likesHomePg']     = $likes;
            $row['sharesHomePg']    = $shares;
            $row['viewsHomePg']    = $visits;
        }
        return $row;
    }
    
    /**
     *  function to get product statistics report
     *  
     * @param array $map
     * @param unknown $getTotal
     * @return object
     */
    function getProductStatistics($map,$getTotal=NULL) {
        
        if(is_null($getTotal)) {
            $this->db->select('sql_calc_found_rows a.item_id,count(DISTINCT a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares,a.country as country_name,a.city as city_name,a.visit_date,b.model_no',false);
        } else {
            $this->db->select('COUNT(DISTINCT a.id) as visits,SUM(a.likes) as likes,SUM(a.shares) as shares,COUNT(DISTINCT b.model_no) as products');
        }
        $this->db->from(TABLES::$PRODUCT_VISITORS.' AS a');
        $this->db->join(TABLES::$PRODUCT_ITEM.' AS b','a.item_id=b.id','inner');
        $this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','left');
        $this->db->where('b.busi_id',$map['busi_id']);
        $this->db->where('status',1);
        if(!empty($map['country_name'])) {
            $this->db->where('a.country',$map['country_name']);
        }
        if(!empty($map['from_date']) && !empty($map['to_date'])) {
            $this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
        }
        if(!empty($map['product_name'])) {
            $this->db->where("(b.name like '%".$map['product_name']."%' OR b.model_no like '%".$map['product_name']."%')",'',false);
        }
        if(is_null($getTotal)) {
            $this->db->group_by('a.item_id');
            $this->db->group_by('a.city');
            $this->db->order_by('a.visit_date','DESC');
            $this->db->order_by('a.country','ASC');
            $this->db->order_by('a.city','ASC');
        }
        return $this->db;
    }
    
    public function getActiveProductVisitHistory($map) {
    	$page_size = 10;
    	$this->db->select('a.item_id,count(DISTINCT a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares,a.country as country_name,a.city as city_name,a.visit_date,b.model_no');
    	$this->db->from(TABLES::$PRODUCT_VISITORS.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS b','a.item_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','left');
    	$this->db->where('b.busi_id',$map['busi_id']);
    	$this->db->where('b.status',1);
    	if(!empty($map['country_name'])) {
    		$this->db->where('a.country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	if(!empty($map['product_name'])) {
    		$this->db->where("(b.name like '%".$map['product_name']."%' OR b.model_no like '%".$map['product_name']."%')",'',false);
    	}
    	$this->db->having('visits > 0','',false);
    	$this->db->having('likes > 0','',false);
    	$this->db->having('shares > 0','',false);
    	$this->db->group_by('a.item_id');
    	$this->db->group_by('a.city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('a.country','ASC');
    	$this->db->order_by('a.city','ASC');
    	if(!empty($map['page'])) {
    		$start_page = $map['page']*10 - $page_size;
    		$this->db->limit($page_size,$start_page);
    	}
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getBusinessVisitHistoryCount($map) {
    	$page_size = 10;
    	$this->db->select('count(DISTINCT a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares');
    	$this->db->from(TABLES::$BUSINESS_VISITORS.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->where('a.busi_id',$map['busi_id']);
    	if(!empty($map['country_name'])) {
    		$this->db->where('a.country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	$this->db->group_by('a.city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('a.country','ASC');
    	$this->db->order_by('a.city','ASC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	$visits = 0;
    	$likes = 0;
    	$shares = 0;
    	foreach ($row as $ap) {
    		$visits = $visits + $ap['visits'];
    		$likes = $likes + $ap['likes'];
    		$shares = $shares + $ap['shares'];
    	}
    	$pages['visits'] = $visits;
    	$pages['likes'] = $likes;
    	$pages['shares'] = $shares;
    	$pages['pages'] = ceil(count($row)/20);
    	return $pages;
    }
    
    public function getActiveProductVisitHistoryCount($map) {
    	$page_size = 10;
    	/*$this->db->select('count(DISTINCT a.item_id) as products,count(a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares')
    	$this->db->from(TABLES::$PRODUCT_VISITORS.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS b','a.item_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','inner');
    	$this->db->where('b.busi_id',$map['busi_id']);
    	$this->db->where('b.status',1);
    	if(!empty($map['country_name'])) {
    		$this->db->where('a.country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	if(!empty($map['product_name'])) {
    		$this->db->where("(b.name like '%".$map['product_name']."%' OR b.model_no like '%".$map['product_name']."%')",'',false);
    	}
    	$this->db->having('visits > 0','',false);
    	$this->db->having('likes > 0','',false);
    	$this->db->having('shares > 0','',false);
    	$this->db->group_by('a.item_id');
    	$this->db->group_by('a.city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('a.country','ASC');
    	$this->db->order_by('a.city','ASC');*/
        $this->db->select('a.item_id,count(DISTINCT a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares,a.country as country_name,a.city as city_name,a.visit_date,b.model_no');
        $this->db->from(TABLES::$PRODUCT_VISITORS.' AS a');
        $this->db->join(TABLES::$PRODUCT_ITEM.' AS b','a.item_id=b.id','inner');
        $this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','left');
        $this->db->where('b.busi_id',$map['busi_id']);
        $this->db->where('b.status',1);
        if(!empty($map['country_name'])) {
            $this->db->where('a.country',$map['country_name']);
        }
        if(!empty($map['from_date']) && !empty($map['to_date'])) {
            $this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
        }
        if(!empty($map['product_name'])) {
            $this->db->where("(b.name like '%".$map['product_name']."%' OR b.model_no like '%".$map['product_name']."%')",'',false);
        }
        $this->db->having('visits > 0','',false);
        $this->db->having('likes > 0','',false);
        $this->db->having('shares > 0','',false);
        $this->db->group_by('a.item_id');
        $this->db->group_by('a.city');
        $this->db->order_by('a.visit_date','DESC');
        $this->db->order_by('a.country','ASC');
        $this->db->order_by('a.city','ASC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	$products = 0;
    	$visits = 0;
    	$likes = 0;
    	$shares = 0;
    	foreach ($row as $ap) {
    		$products++;
    		$visits = $visits + $ap['visits'];
    		$likes = $likes + $ap['likes'];
    		$shares = $shares + $ap['shares'];
    	}
    	$pages['products'] = $products;
    	$pages['visits'] = $visits;
    	$pages['likes'] = $likes;
    	$pages['shares'] = $shares;
    	$pages['pages'] = ceil(count($row)/10);
    	return $pages;
    }
    
    public function getStoragePlan($plan_id,$cust_type) {
    	$this->db->select('intvalue');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS);
    	$this->db->where('plan_id',$plan_id);
    	$this->db->where('cust_type',$cust_type);
    	$this->db->where('code','sb');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getOISPlan($plan_id,$cust_type) {
    	$this->db->select('intvalue');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS);
    	$this->db->where('plan_id',$plan_id);
    	$this->db->where('cust_type',$cust_type);
    	$this->db->where('code','ois');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getCommunityPlan($plan_id,$cust_type) {
    	$this->db->select('intvalue');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS);
    	$this->db->where('plan_id',$plan_id);
    	$this->db->where('cust_type',$cust_type);
    	$this->db->where('code','cps');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getEnquiryPlan($plan_id,$cust_type) {
    	$this->db->select('intvalue');
    	$this->db->from(TABLES::$SUBSCRIPTION_ITEMS);
    	$this->db->where('plan_id',$plan_id);
    	$this->db->where('cust_type',$cust_type);
    	$this->db->where('code','ois');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getCommunityPosts($busi_id) {
    	$this->db->select('count(id) as posts');
    	$this->db->from(TABLES::$COMMMUNITY_POST);
    	$this->db->where('busi_id',$busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyVideos($busi_id)
    {
    	$this->db->select('count(id) as videos');
    	$this->db->from(TABLES::$PRODUCTVEDIO);
    	$this->db->where('busi_id',$busi_id);
    	$this->db->where('is_deleted',0);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	$vs1 = $result[0]['videos'];
    	$this->db->select('count(a.id) as videos');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM . ' AS b','a.subproduct_id=b.sproduct_id','inner');
    	$this->db->where('b.busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$query = $this->db->get();
    	$result1 = $query->result_array();
    	$vs2 = $result1[0]['videos'];
    	return $vs1 + $vs2;
    }
    
    public function getMyOffers($busi_id) {
    	$this->db->select('count(id) as offers');
    	$this->db->from(TABLES::$STOCK_OFFER);
    	$this->db->where('seller_id',$busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyRequests($busi_id) {
    	$this->db->select('count(id) as requests');
    	$this->db->from(TABLES::$STOCK_REQUEST);
    	$this->db->where('seller_id',$busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyBstation($busi_id) {
    	$this->db->select('count(id) as posts');
    	$this->db->from(TABLES::$BSTATION_POST);
    	$this->db->where('busi_id',$busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyStocks($busi_id) {
    	$this->db->select('count(id) as stocks');
    	$this->db->from(TABLES::$STOCK_GOODS);
    	$this->db->where('busi_id',$busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyStationServiceStats($busi_id)
    {
    	$this->db->select('count(id) as products,sum(visit) as visit,sum(likes) as likes,sum(shares) as shares,group_concat(image1) as images');
    	$this->db->from(TABLES::$SHIPPER_SERVICES);
    	$this->db->where('busi_id',$busi_id);
    	$this->db->where('status',1);
    	$this->db->group_by('busi_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyStationActiveServiceStats($busi_id)
    {
    	$this->db->select('count(id) as products,sum(visit) as visit,sum(likes) as likes,sum(shares) as shares,group_concat(image1) as images');
    	$this->db->from(TABLES::$SHIPPER_SERVICES);
    	$this->db->where('busi_id',$busi_id);
    	$this->db->where('status',1);
    	$this->db->having('visit > 0','',false);
    	$this->db->having('likes > 0','',false);
    	$this->db->having('shares > 0','',false);
    	$this->db->group_by('busi_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getServiceVisitHistory($map) {
    	$page_size = 10;
    	$this->db->select('count(a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares,c.company_country as country_name,c.company_city as city_name,a.visit_date,b.name');
    	$this->db->from(TABLES::$SERVICE_VISITORS.' AS a');
    	$this->db->join(TABLES::$SHIPPER_SERVICES.' AS b','a.service_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','inner');
    	$this->db->where('b.busi_id',$map['busi_id']);
    	if(!empty($map['country_name'])) {
    		$this->db->where('c.company_country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	if(!empty($map['product_name'])) {
    		$this->db->where("(b.name like '%".$map['product_name']."%')",'',false);
    	}
    	$this->db->where('status',1);
    	$this->db->group_by('a.service_id');
    	$this->db->group_by('c.company_city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('c.company_country','ASC');
    	$this->db->order_by('c.company_city','ASC');
    	if(!empty($map['page'])) {
    		$start_page = $map['page']*10 - $page_size;
    		$this->db->limit($page_size,$start_page);
    	}
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getActiveServiceVisitHistory($map) {
    	$page_size = 10;
    	$this->db->select('count(a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares,c.company_country as country_name,c.company_city as city_name,a.visit_date,b.name');
    	$this->db->from(TABLES::$SERVICE_VISITORS.' AS a');
    	$this->db->join(TABLES::$SHIPPER_SERVICES.' AS b','a.service_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','inner');
    	$this->db->where('b.status',1);
    	if(!empty($map['country_name'])) {
    		$this->db->where('c.company_country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	if(!empty($map['product_name'])) {
    		$this->db->where("(b.name like '%".$map['product_name']."%')",'',false);
    	}
    	$this->db->having('visits > 0','',false);
    	$this->db->having('likes > 0','',false);
    	$this->db->having('shares > 0','',false);
    	$this->db->group_by('a.service_id');
    	$this->db->group_by('c.company_city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('c.company_country','ASC');
    	$this->db->order_by('c.company_city','ASC');
    	if(!empty($map['page'])) {
    		$start_page = $map['page']*10 - $page_size;
    		$this->db->limit($page_size,$start_page);
    	}
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getServiceVisitHistoryCount($map) {
    	$page_size = 10;
    	$this->db->select('count(a.id) as visits');
    	$this->db->from(TABLES::$SERVICE_VISITORS.' AS a');
    	$this->db->join(TABLES::$SHIPPER_SERVICES.' AS b','a.service_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','inner');
    	$this->db->where('b.busi_id',$map['busi_id']);
    	if(!empty($map['country_name'])) {
    		$this->db->where('c.company_country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	if(!empty($map['product_name'])) {
    		$this->db->where("(b.name like '%".$map['product_name']."%')",'',false);
    	}
    	$this->db->where('status',1);
    	$this->db->group_by('a.service_id');
    	$this->db->group_by('c.company_city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('c.company_country','ASC');
    	$this->db->order_by('c.company_city','ASC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	$pages = ceil(count($row)/10);
    	return $pages;
    }
    
    public function getActiveServiceVisitHistoryCount($map) {
    	$page_size = 10;
    	$this->db->select('count(a.id) as visits,sum(a.likes) as likes,sum(a.shares) as shares');
    	$this->db->from(TABLES::$SERVICE_VISITORS.' AS a');
    	$this->db->join(TABLES::$SHIPPER_SERVICES.' AS b','a.service_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','a.busi_id=c.id','inner');
    	$this->db->where('b.status',1);
    	if(!empty($map['country_name'])) {
    		$this->db->where('c.company_country',$map['country_name']);
    	}
    	if(!empty($map['from_date']) && !empty($map['to_date'])) {
    		$this->db->where("a.visit_date BETWEEN '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	}
    	if(!empty($map['product_name'])) {
    		$this->db->where("(b.name like '%".$map['product_name']."%')",'',false);
    	}
    	$this->db->where('status',1);
    	$this->db->having('visits > 0','',false);
    	$this->db->having('likes > 0','',false);
    	$this->db->having('shares > 0','',false);
    	$this->db->group_by('a.service_id');
    	$this->db->group_by('c.company_city');
    	$this->db->order_by('a.visit_date','DESC');
    	$this->db->order_by('c.company_country','ASC');
    	$this->db->order_by('c.company_city','ASC');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	$pages = ceil(count($row)/10);
    	return $pages;
    }
    
    public function getBuyerBusiInfo($busi_id) {
    	$this->db->select('id,accept_chat,accept_offer,accept_community,accept_email');
    	$this->db->from(TABLES::$BUSINESS_INFO);
    	$this->db->where('id',$busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
}