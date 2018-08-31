<?php

class Ads_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getAdsPrice()
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$ADS_INFO);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function addMainScreenAd($msads)
    {
    	$this->db->insert(TABLES::$MAIN_SCREEN_ADS,$msads);
    	return $this->db->insert_id();
    }
    
    public function updateMainScreenAd($msads) {
    	$this->db->where('id',$msads['id']);
    	return $this->db->update(TABLES::$MAIN_SCREEN_ADS,$msads);
    }
    
    public function getLastAdFromDate() {
    	$this->db->select('max(from_date) as from_date');
    	$this->db->from(TABLES::$MAIN_SCREEN_ADS);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getCurrentAdsCount($map)
    {
    	$this->db->select('count(id) as ads');
    	$this->db->from(TABLES::$MAIN_SCREEN_ADS);
    	$this->db->where("to_date between '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	$this->db->where('status',1);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMainScreenAd($id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MAIN_SCREEN_ADS);
    	$this->db->where('id',$id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getLastFCAdFromDate() {
    	$this->db->select('max(from_date) as from_date');
    	$this->db->from(TABLES::$FEATURED_CAROUSEL_ADS);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getCurrentFCAdsCount($map) {
    	$this->db->select('count(id) as ads');
    	$this->db->from(TABLES::$FEATURED_CAROUSEL_ADS);
    	$this->db->where("to_date between '".$map['from_date']."' AND '".$map['to_date']."'",'',false);
    	$this->db->where('status',1);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function addFeaturedCarouselAd($msads)
    {
    	$this->db->insert(TABLES::$FEATURED_CAROUSEL_ADS,$msads);
    	return $this->db->insert_id();
    }
    
    public function updateFeaturedCarouselAd($msads) {
    	$this->db->where('id',$msads['id']);
    	return $this->db->update(TABLES::$FEATURED_CAROUSEL_ADS,$msads);
    }
    

    public function getFeaturedCarouselAd($id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$FEATURED_CAROUSEL_ADS.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS b','a.busi_id=b.busi_id','inner');
    	$this->db->where('a.id',$id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function addFeaturedVideo($data)
    {
    	$this->db->insert(TABLES::$FEATURED_PRODUCT_VIDEO,$data);
    	return $this->db->insert_id();
    }
    
	public function addFeaturedCatalogue($data)
    {
    	$this->db->insert(TABLES::$FEATURED_CATALOGUE,$data);
    	return $this->db->insert_id();
    }
    
    public function addFeatured3DPro($data)
    {
    	$this->db->insert(TABLES::$FEATURED_3DPRODUCT,$data);
    	return $this->db->insert_id();
    }
    
    public function addFeaturedProduct($data)
    {
    	$this->db->insert(TABLES::$FEATURED_PRODUCT,$data);
    	return $this->db->insert_id();
    }
    
    public function addFeaturedBusiness($data)
    {
    	$this->db->insert(TABLES::$FEATURED_WORLD_SELLER,$data);
    	return $this->db->insert_id();
    }
    
   
}
