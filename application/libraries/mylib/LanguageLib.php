<?php
class LanguageLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public function  saveLangPersonalinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangPersonalinfo($param);
	}
	public function  getLangPersonalinfoBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLangPersonalinfoBusiId($busi_id);
	}
	public function updateLangPersonalinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangPersonalinfo($param);
	}
	
	/* company */
	public function  saveLangCompanyinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangCompanyinfo($param);
	}
	public function  getLangCompanyinfoBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLangCompanyinfoBusiId($busi_id);
	}
	public function updateLangCompanylinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangCompanylinfo($param);
	}
	
	/* factory */
	public function  saveLangFactoryinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangFactoryinfo($param);
	}
	public function  getLangFactoryinfoBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLangFactoryinfoBusiId($busi_id);
	}
	public function updateLangFactoryinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangFactoryinfo($param);
	}
	
	
	/* trade */
	public function  saveLangTradeinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangTradeinfo($param);
	}
	public function  getLangTradeinfoBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLangTradeinfoBusiId($busi_id);
	}
	public function updateLangTradeinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangTradeinfo($param);
	}
	
	
	/* certificate */
	public function  saveLangCertificateinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangCertificateinfo($param);
	}
	public function  getLangCertificateinfoBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLangCertificateinfoBusiId($busi_id);
	}
	public function updateLangCertificateinfo($param)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangCertificateinfo($param);
	}
	
	public function getSubProductsByBusi_id($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getSubProductsByBusi_id($busi_id);
	}
	public function getProductlistBybusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getProductlistBybusiId($busi_id);
	}
	public function getLangMainproductinfoBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLangMainproductinfoBusiId($busi_id);
	}
	public function updateLangMainProductlinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangMainProductlinfo($data);
	}
	public function saveLangMainproductinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangMainproductinfo($data);
	}
	public function getSubProductsByBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getSubProductsByBusiId($busi_id);
	}
	public function saveLangSubproductinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangSubproductinfo($data);
	}
	public function updateLangSubproductinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangSubproductinfo($data);
	}
	public function getLanguageSubProductsByBusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageSubProductsByBusiId($busi_id);
	}
	public function getProductSpecificationByProId($proid)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getProductSpecificationByProId($proid);
	}
	public function getLanguageProductsByProid($pro_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageProductsByProid($pro_id);
	}
	public function getLanguageProductsByProidAndLangId($pro_id,$lang_id) {
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageProductsByProidAndLangId($pro_id,$lang_id);
	}
	public function getLanguageProductSpecificationByProid($pro_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageProductSpecificationByProid($pro_id);
	}
	public function getLanguageProductSpecificationByProidAndLangId($pro_id,$lang_id) {
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageProductSpecificationByProidAndLangId($pro_id,$lang_id);
	}
	public function updateLangProductinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangProductinfo($data);
	}
	public function saveLangProductinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangProductinfo($data);
	}
	public function updateLangProductSpecinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangProductSpecinfo($data);
	}
	public function saveLangProductSpecinfo($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangProductSpecinfo($data);
	}
	public function getProductServicesBybusiId($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getProductServicesBybusiId($busi_id);
	}
	public function saveLangProductServices($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveLangProductServices($data);
	}
	public function getLanguageServicesBybusi_id($busi_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageServicesBybusi_id($busi_id);
	}
	public function updateLangProductServices($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->updateLangProductServices($data);
	}
	public function saveNewLanguage($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->saveNewLanguage($data);
	}
	public function getAllLanguage()
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getAllLanguage();
	}
	public function getLanguageFieldTranslation($language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getLanguageFieldTranslation($language_id);
	}
	public function getPersonalInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getPersonalInfoByLanguageId($busi_id,$language_id);
	}
	public function getCompanyInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getCompanyInfoByLanguageId($busi_id,$language_id);
	}
	public function getFactoryInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getFactoryInfoByLanguageId($busi_id,$language_id);
	}
	public function getTradInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getTradInfoByLanguageId($busi_id,$language_id);
	}
	public function getCertificateInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getCertificateInfoByLanguageId($busi_id,$language_id);
	}
	public function getMainproductInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getMainproductInfoByLanguageId($busi_id,$language_id);
	}
	public function getSubProductInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getSubProductInfoByLanguageId($busi_id,$language_id);
	}
	public function getProductInfoByLanguageId($busi_id,$language_id)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getProductInfoByLanguageId($busi_id,$language_id);
	}
	public function getProductSecificationByLanguageId($busi_id,$language_id,$proid)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $res = $this->CI->language->getProductSecificationByLanguageId($busi_id,$language_id,$proid);
	}
	public function saveLanguageBusiness($param,$category_id)
	{
		$flag = 0;
		$response = 0;
		$this->CI->load->model ( 'Language_model', 'language' );
		$res = $this->CI->language->checkLanguageBusiness($param);
		if(count($res) == 0)
		{
			$response =  $this->CI->language->saveLanguageBusiness($param);
			
		} else {
			if($category_id == 1) {
				$calculate = $res[0]['personal_info'] + $res[0]['compay_info'] + $res[0]['main_product'] + $res[0]['product_spec_serv'];
				if($calculate == 4)
				{
					$langbusi = array();
					$langbusi['id'] = $res[0]['id'];
					$langbusi['allow_to_publish'] = 1;
					
					$response =  $this->CI->language->updateLangBusiness($param);
					if($res[0]['is_publish'] == 1) {
						$flag = 2;
					} else {
						$flag = 1;
					}
				}
			} else if($category_id == 2) {
				$calculate = $res[0]['personal_info'] + $res[0]['compay_info'] + $res[0]['product_spec_serv'];
				if($calculate == 3)
				{
					$langbusi = array();
					$langbusi['id'] = $res[0]['id'];
					$langbusi['allow_to_publish'] = 1;
						
					$response =  $this->CI->language->updateLangBusiness($param);
					if($res[0]['is_publish'] == 1) {
						$flag = 2;
					} else {
						$flag = 1;
					}
				}
			} else {
				$calculate = $res[0]['personal_info'] + $res[0]['compay_info'] + $res[0]['main_product'];
				if($calculate == 3)
				{
					$langbusi = array();
					$langbusi['id'] = $res[0]['id'];
					$langbusi['allow_to_publish'] = 1;
					
					$response =  $this->CI->language->updateLangBusiness($param);
					if($res[0]['is_publish'] == 1) {
						$flag = 2;
					} else {
						$flag = 1;
					}
				}
			}
		}
		return $flag;
	}
	public function updateLangBusiness($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $this->CI->language->updateLangBusiness($data);
	}
	public function deleteLangBusiness($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $this->CI->language->deleteLangBusiness($data);
	}
	public function checkLanguageBusiness($data)
	{
		$this->CI->load->model ( 'Language_model', 'language' );
		return $this->CI->language->checkLanguageBusiness($data);
	}

	public function getMyPublishedLang($busi_id) {
		$this->CI->load->model ( 'Language_model', 'language' );
		return $this->CI->language->getMyPublishedLang($busi_id);
	}
	
	public function getMyUnPublishedLang($busi_id) {
		$this->CI->load->model ( 'Language_model', 'language' );
		return $this->CI->language->getMyUnPublishedLang($busi_id);
	}
	
	public function getServiceInfoByLanguageId($language_id,$busi_id,$id) {
		$this->CI->load->model ( 'Language_model', 'language' );
		return $this->CI->language->getServiceInfoByLanguageId($language_id,$busi_id,$id);
	}
	
}
