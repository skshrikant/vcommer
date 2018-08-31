<?php

class Vedio_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function savePublicMyFile($data)
    {
    	if ($this->db->insert(TABLES::$MYFILE, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function saveoneproductvedio($data)
    {
    	if ($this->db->insert(TABLES::$PRODUCTVEDIO, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function saveMainSubproductvedio($data)
    {
    	if ($this->db->insert(TABLES::$MAINSUBPRODUCTVEDIO, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function getOneproductvedioList($busi_id)
    {
    	$this->db->select('a.id as vedio_id,a.vedio_file,a.vedio_size,b.*,c.name as subproname,d.name as mainproname');
    	$this->db->from(TABLES::$PRODUCTVEDIO.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM . ' AS b','a.product_item_id=b.id');
    	$this->db->join(TABLES::$SUB_PRODUCT. ' AS c','b.sproduct_id=c.id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT. ' AS d','c.mproduct_id=d.id','left');
    	$this->db->where('b.busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getMultiproductvedioList($busi_id)
    {
    	$this->db->select('a.*, group_concat(main_image) as mainimage,c.name as subproname,d.name as mainproname');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM . ' AS b','a.subproduct_id=b.sproduct_id','inner');
    	$this->db->join(TABLES::$SUB_PRODUCT. ' AS c','b.sproduct_id=c.id','inner');
    	$this->db->join(TABLES::$MAIN_PRODUCT. ' AS d','c.mproduct_id=d.id','inner');
    	$this->db->where('b.busi_id',$busi_id);
    	$this->db->group_by('a.id');
    	$this->db->where('is_deleted',0);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function updateProductvedio($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$PRODUCTVEDIO, $data);
    	return $this->db->affected_rows();
    }
    public function updateMultiProductvedio($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$MAINSUBPRODUCTVEDIO, $data);
    	return $this->db->affected_rows();
    }
    
    public function getOneproductvedioById($id)
    {
    	$this->db->select('a.id as vedio_id, a.vedio_file,a.vedio_size, b.name as product_name, b.description, a.video_likes, a.visit, c.*, d.*, e.name as plan, l.id as community_id, i.flag, u.user_category');
    	$this->db->from(TABLES::$PRODUCTVEDIO.' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM . ' AS b','a.product_item_id=b.id','left');
    	$this->db->join(TABLES::$BUSINESS_INFO. '  AS c','b.busi_id=c.id','left');
    	$this->db->join(TABLES::$USER. '  AS d','d.busi_id=c.id','left');
        $this->db->join(TABLES::$USER_CATEGORIES. '  AS u','d.user_category_id=u.id','left');
    	$this->db->join(TABLES::$SUBSCRIPTION_PLAN. '  AS e','e.id=c.plan_id','left');
        $this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','c.id = l.busi_id ','left');
        $this->db->join(TABLES::$COUNTRY.' AS i','c.company_country=i.name','left');
    	$this->db->where('a.id',$id);
        $this->db->group_by('a.id');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getProductsInVideos()
    {
    	$this->db->select('a.*, b.*,c.*,a.id as product_id,b.id as id,d.email as useremail,d.name as username,d.name_prefix as prefix,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	$this->db->order_by('b.created_date','DESC');
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    	
    }
    
    public function searchProductsInVideos($params)
    {
    	$this->db->select('a.name,a.description,a.unit_price,0 as end_price,a.quantity,a.unit,b.vedio_file,b.vedio_size,b.video_likes,b.created_date as added_date,c.*,a.id as product_id,b.id as vid,d.email as useremail,d.name as username,d.name_prefix as prefix,d.user_category_id,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory,h.id as community_id,0 as type');
        $this->db->from(TABLES::$PRODUCT_VIDEO.' as b');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a', 'b.product_item_id = a.id ', 'left');
    	//$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS sp','sp.id=a.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS i ','a.mproduct_id = i.id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','i.subcat_id = k.id ','left');
		$this->db->join(TABLES::$PRODUCT_MAIN_CATEGORY.' AS l ','l.id = k.mcat_id ','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['type']) && !empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('c.is_logo_verified', 'DESC');
    			}
    		}
    		if(isset($params['keyword']) && !empty($params['keyword'])) {
    			$this->db->where("(c.company_name like '%".trim($params['keyword'])."%' OR a.name like'%".trim($params['keyword'])."%' OR a.model_no like '%".trim($params['keyword'])."%')",'',false);
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('i.subcat_id', $params['cat_id']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->where("h.my_busi_id",$params['busi_id']);
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where("h.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('c.plan_id', 'DESC');
    		}
    	}
		if(isset($params['main_cat_id']) && !empty($params['main_cat_id'])) {
			$this->db->where('l.id', $params['main_cat_id']);
		}
    	$this->db->group_by('b.id');
    	$sql1 = $this->db->get_compiled_select ();
    	
    	$this->db->select('b.vedio_title as name,b.vedio_description as description,b.start_price as unit_price,b.end_price as end_price,1 as quantity,"Containers" as unit,b.vedio_file,b.vedio_size,b.video_likes,b.created_date as added_date,c.*,b.subproduct_id as product_id,b.id as vid,d.email as useremail,d.name as username,d.name_prefix as prefix,d.user_category_id,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory,h.id as community_id,1 as type');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO.' as b');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = b.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS sp','sp.id=b.subproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS i ','b.mainproduct_id = i.id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','i.subcat_id = k.id ','left');
    	$this->db->join(TABLES::$PRODUCT_MAIN_CATEGORY.' AS l ','l.id = k.mcat_id ','left');
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['type']) && !empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('c.is_logo_verified', 'DESC');
    			}
    		}
    		if(isset($params['keyword']) && !empty($params['keyword'])) {
    			$this->db->where("(c.company_name like '%".trim($params['keyword'])."%' OR b.vedio_title like'%".trim($params['keyword'])."%')",'',false);
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('i.subcat_id', $params['cat_id']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->where("h.my_busi_id",$params['busi_id']);
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where("h.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('c.plan_id', 'DESC');
    		}
    	}
		if(isset($params['main_cat_id']) && !empty($params['main_cat_id'])) {
			$this->db->where('l.id', $params['main_cat_id']);
		}
    	$this->db->group_by('b.id');
    	$sql2 = $this->db->get_compiled_select ();
    	$sql = "SELECT fq.* from (".$sql1." UNION ".$sql2.") as fq order by fq.created_date DESC";
    	if(!empty($params['page'])) {
    		$start = $params['page']*24 - 24;
    		$sql = $sql." LIMIT ".$start.",24";
    	}
    	$query = $this->db->query($sql);
    	$row = $query->result_array();
    	return $row;
    	 
    }
    
    public function countProductsInVideos($params)
    {
    	$this->db->select('count(a.id) as videos');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS sp','sp.id=a.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS i ','sp.mproduct_id = i.id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','i.subcat_id = k.id ','left');
		$this->db->join(TABLES::$PRODUCT_MAIN_CATEGORY.' AS l ','l.id = k.mcat_id ','left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['type']) && !empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('c.is_logo_verified', 'DESC');
    			}
    		}
    		if(isset($params['keyword']) && !empty($params['keyword'])) {
    			$this->db->where("(c.company_name like '%".trim($params['keyword'])."%' OR a.name like'%".trim($params['keyword'])."%' OR a.model_no like '%".trim($params['keyword'])."%')",'',false);
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('i.subcat_id', $params['cat_id']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->where("h.my_busi_id",$params['busi_id']);
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where("h.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('c.plan_id', 'DESC');
    		}
    	}
		if(isset($params['main_cat_id']) && !empty($params['main_cat_id'])) {
			$this->db->where('l.id', $params['main_cat_id']);
		}
    	$this->db->group_by('b.id');
    	$sql1 = $this->db->get_compiled_select ();
    	$this->db->select('count(b.id) as videos');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO.' as b');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = b.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS sp','sp.id=b.subproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS i ','b.mainproduct_id = i.id ','left');
    	$this->db->join(TABLES::$PRODUCT_SUB_CATEGORY.' AS k ','i.subcat_id = k.id ','left');
		$this->db->join(TABLES::$PRODUCT_MAIN_CATEGORY.' AS l ','l.id = k.mcat_id ','left');
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	if(isset($params['keyword']) && !empty($params['keyword'])) {
    		if(isset($params['country']) && !empty($params['country'])) {
    			$this->db->where("c.company_country like '%".trim($params['country'])."%'",'',false);
    		}
    		if(isset($params['city']) && !empty($params['city'])) {
    			$this->db->where("c.company_city like '%".trim($params['city'])."%'",'',false);
    		}
    		if(isset($params['type']) && !empty($params['type'])) {
    			if($params['type'] ==1) {
    				$this->db->order_by('c.is_logo_verified', 'DESC');
    			}
    		}
    		if(isset($params['keyword']) && !empty($params['keyword'])) {
    			$this->db->where("(c.company_name like '%".trim($params['keyword'])."%' OR b.vedio_title like'%".trim($params['keyword'])."%')",'',false);
    		}
    	} else {
    		if(isset($params['cat_id']) && !empty($params['cat_id'])) {
    			$this->db->where('i.subcat_id', $params['cat_id']);
    		}
    	}
    	if(isset($params['busi_id']) && !empty($params['busi_id'])) {
    		if(isset($params['community_only']) && !empty($params['community_only'])) {
    			$this->db->where("h.my_busi_id",$params['busi_id']);
    		}
    		if(isset($params['community_hide']) && !empty($params['community_hide'])) {
    			$this->db->where("h.my_busi_id !=",$params['busi_id']);
    		}
    	}
    	if(isset($params['plan_id']) && !empty($params['plan_id'])) {
    		if($params['plan_id'] > 1) {
    			$this->db->order_by('c.plan_id', 'DESC');
    		}
    	}
		if(isset($params['main_cat_id']) && !empty($params['main_cat_id'])) {
			$this->db->where('l.id', $params['main_cat_id']);
		}
    	$this->db->group_by('b.id');
    	$sql2 = $this->db->get_compiled_select ();
    	$sql = "SELECT sum(fq.videos) as videos from (".$sql1." UNION ".$sql2.") as fq where 1";
    	$query = $this->db->query($sql);
    	$row = $query->result_array();
    	if(count($row) > 0) {
    		return ceil($row[0]['videos']/24);
    	} else {
    		return 0;
    	}
    
    }
    
    public function getVedioByVerifiedUser(){
    	$this->db->select('a.*, b.*,c.*, d.email as useremail,d.name as username,d.name_prefix as prefix,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	$this->db->order_by('d.account_activated','DESC');
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    	
    }
    
    public function getVedioByCommunityMember($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.*, b.*,c.*, d.email as useremail,d.name as username,d.name_prefix as prefix,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	$this->db->where('c.id IN('.$busi_ids.')','',false);
    	$this->db->order_by('b.created_date','DESC');
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    	
    }
    
    public function getVedioByCommunityMemberhide($id){
    	$busi_ids= "select busi_id from ".TABLES::$COMMUNITY_MEMBER ." where my_busi_id =" .$id;
    	$this->db->select('a.*, b.*,c.*, d.email as useremail,d.name as username,d.name_prefix as prefix,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	$this->db->where('c.id IN('.$busi_ids.')','',false);
    	$this->db->order_by('b.created_date','DESC');
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    	
    }
    public function getProductsInVideosBySellerId($id)
    {
    	$this->db->select('a.*, b.*,c.*, d.email as useremail,d.name as username,d.name_prefix as prefix,e.country as country, e.province as province, f.user_category as category, g.sub_category as subcategory');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' as a');
    	$this->db->join(TABLES::$PRODUCT_VIDEO.' as b', 'b.product_item_id = a.id ', 'inner');
    	$this->db->join(TABLES::$BUSINESS_INFO.' as c' , 'c.id = a.busi_id', 'left');
    	$this->db->join(TABLES::$USER.' as d ', 'd.busi_id = c.id', 'left');
    	$this->db->join(TABLES::$USER_INFO.' AS e','d.id=e.user_id','left');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS f','d.user_category_id=f.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS g','d.user_subcategory_id=g.id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' as h ', 'h.busi_id = c.id', 'left');
    	$this->db->where('a.status', 1);
    	$this->db->where('d.is_suspend', 0);
    	$this->db->where('d.is_deleted', 0);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	$this->db->where('a.busi_id', $id);
    	$this->db->order_by('b.created_date','DESC');
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$row = $query->result_array();
    	return $row;
    	
    }
    public function getvedioById($busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO.' AS a');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->where('is_deleted',0);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function likeVideo($id) {
    	$sql = 'UPDATE '.TABLES::$PRODUCT_VIDEO.' SET visit = visit+1 ';
    	if(!empty($id)) {
    		$sql = $sql.',video_likes = video_likes+1';
    	}
    	$sql = $sql.' WHERE id='.$id;
    	return $query = $this->db->query($sql);
    }
    
    public function likeMVideo($id) {
    	$sql = 'UPDATE '.TABLES::$MAINSUBPRODUCTVEDIO.' SET visit = visit+1 ';
    	if(!empty($id)) {
    		$sql = $sql.',video_likes = video_likes+1';
    	}
    	$sql = $sql.' WHERE id='.$id;
    	return $query = $this->db->query($sql);
    }
    
    public function recordVideoLike($data) {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$PRODUCTVEDIO_LIKES.' AS a');
    	$this->db->where('a.busi_id',$data['busi_id']);
    	$this->db->where('a.video_id',$data['video_id']);
    	$this->db->where('likes',1);
    	$this->db->where('type',$data['type']);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	if(count($result) <= 0) {
    		$this->db->insert(TABLES::$PRODUCTVEDIO_LIKES,$data);
    		if($data['type'] == 0 || $data['type'] == "") {
    			$this->likeVideo($data['video_id']);
    		} else {
    			$this->likeMVideo($data['video_id']);
    		}
    		return 1;
    	} else {
    		return 0;
    	}
    }
    
    public function getOneProductVideosByIds($ids) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$PRODUCTVEDIO);
    	$this->db->where("id IN(".$ids.")",'',false);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getMultiProductVideosByIds($ids) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO);
    	$this->db->where("id IN(".$ids.")",'',false);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getMultiProductVideoById($id) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MAINSUBPRODUCTVEDIO);
    	$this->db->where("id",$id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
   
}
