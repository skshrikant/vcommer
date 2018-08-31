<?php

class Myfavorite_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function savePublicMyFile($data)
    {
    	if ($this->db->insert(TABLES::$MYFILE, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function getMyfavoriteseller($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,b.*,c.info_img1,c.info_img2,d.name_prefix,d.name,e.company_introduction,e.hot_presentation,f.profile_image,
		g.sub_category,group_concat(h.name SEPARATOR ", ") as productname,i.id as catalouge_id');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.favorite_id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','a.favorite_id=d.busi_id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.favorite_id=e.busi_id','left');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->join(TABLES::$MAIN_PRODUCT. ' AS h','b.id=h.busi_id','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE. ' AS i','b.id=i.busi_id','left');
    	$this->db->where('a.busi_id', $busi_id);
    	//$this->db->where('d.admin_user_id', 0);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->group_by('a.favorite_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getMyfavoritesShipper($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,b.*,c.info_img1,c.info_img2,d.name_prefix,d.name,e.company_introduction,e.hot_presentation,f.profile_image,g.sub_category,group_concat(h.name SEPARATOR ", ") as productname,i.id as catalouge_id');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.favorite_id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','a.favorite_id=d.busi_id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.favorite_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->join(TABLES::$SHIPPER_SERVICES. ' AS h','b.id = h.busi_id','left');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE. ' AS i','b.id=i.busi_id','left');
    	$this->db->where('a.busi_id', $busi_id);
    	//$this->db->where('d.admin_user_id', 0);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->group_by('a.favorite_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getMyfavoritesBuyer($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,b.*,b.id as busi_id,c.info_img1,c.info_img2,d.name_prefix,d.name,e.company_introduction,e.hot_presentation,IFNULL(n.picture,f.profile_image) as profile_image,g.sub_category,group_concat(h.name SEPARATOR ", ") as productname,l.id as community_id,(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active, m.id as have_request,n.name as contact_name,n.name_prefix as contact_prefix');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.favorite_id=c.busi_id','left');
    	$this->db->join(TABLES::$USER. ' AS d','a.favorite_id=d.busi_id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.favorite_id=e.busi_id','left');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->join(TABLES::$MAIN_PRODUCT. ' AS h','b.id=h.busi_id','left');
    	$this->db->join(TABLES::$COMMUNITY_MEMBER.' AS l ','b.id = l.busi_id ','left');
    	$this->db->join(TABLES::$STOCK_REQUEST.' AS m ','b.id = m.buyer_id ','left');
    	$this->db->join(TABLES::$CONTACTPERSON.' AS n ','b.id = n.busi_id ','left');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->group_by('a.favorite_id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    // Edited Query add new field in query b.id as product_id  //pramesh
    public function getMyfavoriteProduct($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,c.*,b.name as product_name,b.id as product_id,b.model_no,b.unit_price,b.description,b.main_image,b.sub_image2,d.name_prefix,d.name,e.profile_image,g.sub_category');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','c.id=d.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS e','d.id=e.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getMyfavoriteVedio($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,b.id,b.video_likes,b.visit,b.shares,c.name as product_name,c.model_no,c.unit_price,c.quantity,c.unit,c.description,b.vedio_file,e.name_prefix,e.name,f.profile_image,'.
    			'd.company_name,d.company_country,d.company_province,d.plan_id,d.gaurantee_period,d.is_logo_verified,f.country as country, f.province as province, g.user_category as category, h.sub_category as subcategory,0 as community_id');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$PRODUCTVEDIO. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.product_item_id =c.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','c.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','d.id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_CATEGORIES.' AS g','e.user_category_id=g.id','left');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS h','e.user_subcategory_id=h.id','left');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getMyfavoriteDProduct($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,c.name as product_name,c.id,c.quantity,c.unit,c.likes,c.model_no,c.unit_price,c.description,b.image,e.name_prefix,e.name,f.profile_image,'.
    			'd.company_country,d.company_province');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$PRODUCT_3DPRODUCT. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.product_item_id =c.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','c.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','d.id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getMyfavoriteCatalouge($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,b.*,b.id as catalogue_id, c.company_name, c.company_country, c.company_province,c.company_city, c.company_email, c.business_logo, c.annual_trad_volume, c.plan_id, c.gaurantee_period, c.is_logo_verified, c.rank,(select id from tbl_community_member as cm where cm.my_busi_id=c.id and cm.busi_id = '.$busi_id.' limit 1) as incommunity');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE.' as b','a.favorite_id=b.id');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$USER.' AS f','b.busi_id=f.busi_id','inner');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE_ITEM.' AS g','b.id=g.catalogue_id','left');
    	$this->db->join(TABLES::$PRODUCT_ITEM.' AS h', 'g.item_id = h.id', 'left');
    	$this->db->join(TABLES::$SUB_PRODUCT.' AS e','e.id=h.sproduct_id','left');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS d','h.mproduct_id=d.id','left');
    	$this->db->where('b.status', 1);
    	$this->db->where('c.is_disable', 0);
    	$this->db->where('c.is_deleted', 0);
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->group_by('b.id', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getMyfavoriteAds($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,c.*,b.from_date,b.to_date,b.amount,b.content,b.main_banner,e.name_prefix,e.name,f.profile_image,'.
    			'c.company_country,c.company_province,d.hot_presentation');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$MAIN_SCREEN_ADS. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS d','c.id=d.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','c.id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    // add field in query b.id as postid 
    public function getMyfavoritePost($busi_id,$type)
    {
    	$this->db->select('a.id as favorite_id,c.*,b.id as postid,b.title,b.description,b.usd_price,b.quantity,b.postviews,b.likes,'.
    			'b.image1,b.image2,b.image3,b.image4,e.name_prefix,e.name,f.profile_image,'.
    			'c.company_country,c.company_province,d.hot_presentation');
    	$this->db->from(TABLES::$FAVORITE. ' AS a');
    	$this->db->join(TABLES::$COMMMUNITY_POST. ' AS b','a.favorite_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS c','b.busi_id=c.id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS d','c.id=d.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','c.id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.type',$type);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public  function updateFavorite($data)
    {
    	$this->db->where('id',$data['id']);
    	$query=$this->db->update(TABLES::$FAVORITE,$data);
    	
    	if($query)
    		return 1;
    		else
    			return 0;
    }
    
    public function deleteFavorite($id,$type) {
    	$this->db->where('favorite_id',$id);
        $this->db->where('type',$type);
    	 $this->db->delete(TABLES::$FAVORITE);
    }
    
    public function addToFavourite($map) {
    	$this->db->select('id');
    	$this->db->from(TABLES::$FAVORITE);
    	$this->db->where('busi_id',$map['busi_id']);
    	$this->db->where('favorite_id',$map['favorite_id']);
    	$this->db->where('type',$map['type']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$this->db->insert(TABLES::$FAVORITE,$map);
    		return 1;
    	} else {
    		return 0;
    	}
    }
   
}
