<?php

class Language_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public  function saveLangPersonalinfo($param)
    {
    	if ($this->db->insert(TABLES::$LANGUAGEPERSONALINFO, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public  function getLangPersonalinfoBusiId($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$LANGUAGEPERSONALINFO);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateLangPersonalinfo($data)
    {
    	$this->db->where('busi_id', $data['busi_id']);
    	$this->db->update(TABLES::$LANGUAGEPERSONALINFO, $data);
    	return $this->db->affected_rows();
    }
    
    /* company */
    public function  saveLangCompanyinfo($param)
    {
    	if ($this->db->insert(TABLES::$LANGUAGECOMPANYINFO, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public function  getLangCompanyinfoBusiId($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$LANGUAGECOMPANYINFO);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateLangCompanylinfo($param)
    {
    	$this->db->where('busi_id', $param['busi_id']);
    	$this->db->update(TABLES::$LANGUAGECOMPANYINFO, $param);
    	return $this->db->affected_rows();
    }
    
    /* factory */
    public function  saveLangFactoryinfo($param)
    {
    	if ($this->db->insert(TABLES::$LANGUAGEFACTORYINFO, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public function  getLangFactoryinfoBusiId($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$LANGUAGEFACTORYINFO);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateLangFactoryinfo($param)
    {
    	$this->db->where('busi_id', $param['busi_id']);
    	$this->db->update(TABLES::$LANGUAGEFACTORYINFO, $param);
    	return $this->db->affected_rows();
    }
    
    
    /* trade */
    public function  saveLangTradeinfo($param)
    {
    	if ($this->db->insert(TABLES::$LANGUAGETRADEINFO, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public function  getLangTradeinfoBusiId($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$LANGUAGETRADEINFO);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateLangTradeinfo($data)
    {
    	$this->db->where('busi_id', $data['busi_id']);
    	$this->db->update(TABLES::$LANGUAGETRADEINFO, $data);
    	return $this->db->affected_rows();
    }
    
    
    /* certificate */
    public function  saveLangCertificateinfo($param)
    {
    	if ($this->db->insert(TABLES::$LANGUAGECERTIFICATEINFO, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public function  getLangCertificateinfoBusiId($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$LANGUAGECERTIFICATEINFO);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateLangCertificateinfo($data)
    {
    	$this->db->where('busi_id', $data['busi_id']);
    	$this->db->update(TABLES::$LANGUAGECERTIFICATEINFO, $data);
    	return $this->db->affected_rows();
    }
    
    public function getSubProductsByBusi_id($busi_id) {
    	$this->db->select('group_concat(a.name) as name,a.id,a.mproduct_id');
    	$this->db->from(TABLES::$SUB_PRODUCT.' AS a');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS b','a.mproduct_id=b.id','inner');
    	$this->db->where('a.status',1);
    	$this->db->where('b.busi_id',$busi_id);
    	$this->db->group_by('a.mproduct_id');
    	$this->db->order_by('a.mproduct_id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getSubProductsByBusiId($busi_id) {
    	$this->db->select('a.name,a.id,a.mproduct_id');
    	$this->db->from(TABLES::$SUB_PRODUCT.' AS a');
    	$this->db->join(TABLES::$MAIN_PRODUCT.' AS b','a.mproduct_id=b.id','inner');
    	$this->db->where('a.status',1);
    	$this->db->where('b.busi_id',$busi_id);
    	$this->db->order_by('a.mproduct_id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getProductlistBybusiId($busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$PRODUCT_ITEM . ' AS a');
    	//$this->db->join(TABLES::$SUB_PRODUCT. ' AS b','a.sproduct_id = b.id','inner');
    //	$this->db->join(TABLES::$MAIN_PRODUCT. ' AS c','b.mproduct_id=c.id','inner');
    	//$this->db->join(TABLES::$MAIN_PRODUCT. ' AS c','b.mproduct_id=c.id','inner');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->where('a.status',1);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    public function getLangMainproductinfoBusiId($busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEMAINPRODUCT. ' AS a');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    public function updateLangMainProductlinfo($data)
    {
    	$this->db->where('main_product_id', $data['main_product_id']);
    	$this->db->update(TABLES::$LANGUAGEMAINPRODUCT, $data);
    	return $this->db->affected_rows();
    	
    }
    public function saveLangMainproductinfo($data)
    {
    	return $this->db->insert_batch(TABLES::$LANGUAGEMAINPRODUCT,$data);
    	
    }
    public function saveLangSubproductinfo($data)
    {
    	return $this->db->insert_batch(TABLES::$LANGUAGESUBPRODUCT,$data);
    	
    }
    public function updateLangSubproductinfo($data)
    {
    	$this->db->where('sub_product_id', $data['sub_product_id']);
    	$this->db->update(TABLES::$LANGUAGESUBPRODUCT, $data);
    	return $this->db->affected_rows();
    	
    }
    public function getLanguageSubProductsByBusiId($busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGESUBPRODUCT. ' AS a');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getProductSpecificationByProId($proid)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$PRODUCT_ITEM_SPEC. ' AS a');
    	$this->db->where('a.item_id',$proid);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function  getLanguageProductsByProid($pro_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPRODUCT. ' AS a');
    	$this->db->where('a.product_id',$pro_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function  getLanguageProductsByProidAndLangId($pro_id,$lang_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPRODUCT. ' AS a');
    	$this->db->where('a.product_id',$pro_id);
    	$this->db->where('a.language_id',$lang_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function  getLanguageProductSpecificationByProid($pro_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPRODUCTSPECIFICATION. ' AS a');
    	$this->db->where('a.product_id',$pro_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function  getLanguageProductSpecificationByProidAndLangId($pro_id,$lang_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPRODUCTSPECIFICATION. ' AS a');
    	$this->db->where('a.product_id',$pro_id);
    	$this->db->where('a.language_id',$lang_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function updateLangProductinfo($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$LANGUAGEPRODUCT, $data);
    	return $this->db->affected_rows();
    }
    public function saveLangProductinfo($data)
    {
    	if ($this->db->insert(TABLES::$LANGUAGEPRODUCT, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function updateLangProductSpecinfo($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$LANGUAGEPRODUCTSPECIFICATION, $data);
    	return $this->db->affected_rows();
    }
    public function saveLangProductSpecinfo($data)
    {
    	if ($this->db->insert_batch(TABLES::$LANGUAGEPRODUCTSPECIFICATION, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function getProductServicesBybusiId($busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$SHIPPER_SERVICES. ' AS a');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    	
    }
    public function saveLangProductServices($data)
    {
    	if ($this->db->insert_batch(TABLES::$LANGUAGESERVICES, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function getLanguageServicesBybusi_id($busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGESERVICES. ' AS a');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function updateLangProductServices($data)
    {
    	$this->db->where('busi_id', $data['busi_id']);
    	$this->db->update(TABLES::$LANGUAGESERVICES, $data);
    	return $this->db->affected_rows();
    }
    public function saveNewLanguage($data)
    {
    	$this->db->insert(TABLES::$LANGUAGE, $data);
    	return $this->db->insert_id();
    	
    }
    public function getAllLanguage()
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGE. ' AS a');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getLanguageFieldTranslation($language_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEFIELDTRANSLATION. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getPersonalInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPERSONALINFO. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getCompanyInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGECOMPANYINFO. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getFactoryInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEFACTORYINFO. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getTradInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGETRADEINFO. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getCertificateInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGECERTIFICATEINFO. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getMainproductInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEMAINPRODUCT. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getSubProductInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGESUBPRODUCT. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getProductSecificationByLanguageId($language_id,$busi_id,$proid)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPRODUCTSPECIFICATION. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('a.product_id',$proid);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    public function getProductInfoByLanguageId($language_id,$busi_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEPRODUCT. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getServiceInfoByLanguageId($language_id,$busi_id,$id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGESERVICES. ' AS a');
    	$this->db->where('language_id', $language_id);
    	$this->db->where('busi_id', $busi_id);
    	$this->db->where('service_id', $id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function checkLanguageBusiness($param)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$LANGUAGEBUSINESS. ' AS a');
    	$this->db->where('language_id', $param['language_id']);
    	$this->db->where('busi_id', $param['busi_id']);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
   
    public function saveLanguageBusiness($param)
    {
    	if ($this->db->insert(TABLES::$LANGUAGEBUSINESS, $param)) {
    		return $this->db->insert_id();
    	}
    }
    public function updateLangBusiness($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->update(TABLES::$LANGUAGEBUSINESS, $data);
    	return $this->db->affected_rows();
    }
    public function deleteLangPersonalinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGEPERSONALINFO);
    	return $this->db->affected_rows();
    }
    public function deleteLangCompanyinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGECOMPANYINFO);
    	return $this->db->affected_rows();
    }
    public function deleteLangFactoryinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGEFACTORYINFO);
    	return $this->db->affected_rows();
    }
    public function deleteLangTradeinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGETRADEINFO);
    	return $this->db->affected_rows();
    }
    public function deleteLangCrtificateinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGECERTIFICATEINFO);
    	return $this->db->affected_rows();
    }
    public function deleteLangMainProductinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGEMAINPRODUCT);
    	return $this->db->affected_rows();
    }
    public function deleteLangSubProductinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGESUBPRODUCT);
    	return $this->db->affected_rows();
    }
    public function deleteLangProductinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGEPRODUCT);
    	return $this->db->affected_rows();
    }
    public function deleteLangProductSepcificationinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGEPRODUCTSPECIFICATION);
    	return $this->db->affected_rows();
    }
    public function deleteLangProductServiceinfo($data)
    {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGESERVICES);
    	return $this->db->affected_rows();
    }
    
    public function getMyPublishedLang($busi_id) {
	    $this->db->select('a.*');
	    $this->db->from(TABLES::$LANGUAGE. ' AS a');
	    $this->db->join(TABLES::$LANGUAGEBUSINESS. ' AS b','a.id=b.language_id','inner');
	    $this->db->where('b.is_publish', 1);
	    $this->db->where('b.busi_id', $busi_id);
	    $this->db->group_by('a.id');
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result;
    }
    
    public function getMyUnPublishedLang($busi_id) {
    	$this->db->select('a.*,b.allow_to_publish,b.is_publish');
    	$this->db->from(TABLES::$LANGUAGE. ' AS a');
    	$this->db->join(TABLES::$LANGUAGEBUSINESS. ' AS b','a.id=b.language_id','inner');
    	$this->db->where('b.is_publish', 0);
    	$this->db->where('b.busi_id', $busi_id);
    	$this->db->group_by('a.id');
    	$this->db->order_by("b.id","DESC");
    	$this->db->limit(1);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function deleteLangBusiness($data) {
    	if(!empty($data['busi_id'])) {
    		$this->db->where('busi_id', $data['busi_id']);
    	}
    	if(!empty($data['language_id'])) {
    		$this->db->where('language_id', $data['language_id']);
    	}
    	if(!empty($data['id'])) {
    		$this->db->where('id', $data['id']);
    	}
    	$this->db->delete(TABLES::$LANGUAGEBUSINESS);
    	return $this->db->affected_rows();
    }

}
