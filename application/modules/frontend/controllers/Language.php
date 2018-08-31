<?php
class Language extends MX_Controller {
	public function __construct() {
		parent::__construct ();
		$current_lang = $this->session->userdata('my_lang');
		if(!$current_lang) {
			$current_lang = 'english';
			$this->session->set_userdata('my_lang','english');
		}
		$this->load->helper ( 'url' );
		$this->load->helper ( 'cookie' );
		$this->load->helper('mylang');
		$this->lang->load($current_lang.'_home_page_lang', $current_lang);
		$fb_config = parse_ini_file ( APPPATH . "config/FB.ini" );
	}
	
	public function index() {
		
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/mystation');
	}
	public function language() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
// 		$this->load->model('Product_Model','product');
// 		$product = $this->product->getProductlist($busi_id);
// 		$this->template->set ( 'product', $product);
		$this->load->library('mylib/LanguageLib');
		$language = $this->languagelib->getAllLanguage();
		$published = $this->languagelib->getMyPublishedLang($busi_id);
		$unpublished = $this->languagelib->getMyUnPublishedLang($busi_id);
		$this->template->set ( 'language', $language);
		$this->template->set ( 'published', $published);
		$this->template->set ( 'unpublished', $unpublished);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/language','',true);
		echo $html;
	}
	public function getLanguageProduct()
	{
		$number = $this->input->post('number');
		$language_id = $this->input->post('lang_id');
		$number = $number-1;
		$this->load->library('mylib/LanguageLib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$productinfo = $this->languagelib->getProductlistBybusiId($busi_id);
		$this->template->set ( 'productinfo', $productinfo);
		$productspecification = $this->languagelib->getProductSpecificationByProId($productinfo[$number]['id']);
		$this->template->set ( 'productspecification', $productspecification);
		$languagefieldinfo = $this->languagelib->getLanguageFieldTranslation($language_id);
		$this->template->set ( 'languagefieldinfo', $languagefieldinfo);
		
		$langproductinfo = $this->languagelib->getProductInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langproductinfo', $langproductinfo);
		
		$langproductspecificationinfo = $this->languagelib->getProductSecificationByLanguageId($language_id,$busi_id,$productinfo[$number]['id']);
		if(count($langproductspecificationinfo) > 0 )
			$this->template->set ( 'langproductspecificationinfo', $langproductspecificationinfo);
		
		$this->template->set ( 'number', $number);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/language_subchineseproduct','',true);
		echo $html;
	}
	
	public function getLanguageService()
	{
		$number = $this->input->post('number');
		$language_id = $this->input->post('lang_id');
		$number = $number-1;
		$this->load->library('mylib/LanguageLib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$productserviceinfo = $this->languagelib->getProductServicesBybusiId($busi_id);
		$this->template->set ( 'productserviceinfo', $productserviceinfo[$number]);
		$languagefieldinfo = $this->languagelib->getLanguageFieldTranslation($language_id);
		$this->template->set ( 'languagefieldinfo', $languagefieldinfo);
		$langproductinfo = $this->languagelib->getServiceInfoByLanguageId($language_id,$busi_id,$productserviceinfo[$number]['id']);
		$this->template->set ( 'langproductserviceinfo', $langproductinfo);
	
		$this->template->set ( 'number', $number);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/languagemainservice','',true);
		echo $html;
	}
	public function chineseTranslation($language_id)
	{
		$this->load->library('mylib/LanguageLib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Account_Model','account');
		$this->load->model('Product_Model','product');
		$personalinfo = $this->account->getPersonalInfoByBusiId($busi_id);
		$this->template->set ( 'personalinfo', $personalinfo);
		
		$langpersonalinfo = $this->languagelib->getPersonalInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langpersonalinfo', $langpersonalinfo);
		
		$langcompanyinfo = $this->languagelib->getCompanyInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langcompanyinfo', $langcompanyinfo);
		
		$langfactoryinfo = $this->languagelib->getFactoryInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langfactoryinfo', $langfactoryinfo);
		
		$langtradinfo = $this->languagelib->getTradInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langtradinfo', $langtradinfo);
		
		$langcertificateinfo = $this->languagelib->getCertificateInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langcertificateinfo', $langcertificateinfo);
		
		$langmainproductinfo = $this->languagelib->getMainproductInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langmainproductinfo', $langmainproductinfo);
		
		$langsubproductinfo = $this->languagelib->getSubProductInfoByLanguageId($language_id,$busi_id);
		$this->template->set ( 'langsubproductinfo', $langsubproductinfo);
		
		
		
		$businessinfo = $this->account->getBusinessInfoByBusiId($busi_id);
		$this->template->set ( 'businessinfo', $businessinfo);
		
		$mainproductinfo = $this->product->getMainProducts($busi_id);
		$mainpro = array();
		for($i=0; $i<count($mainproductinfo);$i++)
		{
			$mainpro[$i] = $mainproductinfo[$i]['name'];
		}
		$mainprostr = implode(',',$mainpro);
		
		$this->template->set ( 'mainprostr', $mainprostr);
		$this->template->set ( 'mainproductinfo', $mainproductinfo);
		
		$subproductinfo = $this->languagelib->getSubProductsByBusi_id($busi_id);
		$this->template->set ( 'subproductinfo', $subproductinfo);
		
		$subproductdata = $this->languagelib->getSubProductsByBusiId($busi_id);
		$this->template->set ( 'subproductdata', $subproductdata);
		
		$productinfo = $this->languagelib->getProductlistBybusiId($busi_id);
		$this->template->set ( 'productinfo', $productinfo);
		
		$productserviceinfo = $this->languagelib->getProductServicesBybusiId($busi_id);
		$this->template->set ( 'productserviceinfo', $productserviceinfo);
		
		
		$languagefieldinfo = $this->languagelib->getLanguageFieldTranslation($language_id);
		$this->template->set ( 'languagefieldinfo', $languagefieldinfo);
		
		$this->template->set ( 'language_id', $language_id);
		
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$this->template->build ('station/pages/language_chinesetranslatation');
		
	}
	public function saveLangPersonalinfo()
	{
		$map = array();
		$this->load->library('mylib/LanguageLib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$language_id = $this->input->post('personal_langid');
		$paramuser = array();
		$paramuser['country'] = $this->input->post('personalinfocountry');
		$paramuser['province'] = $this->input->post('personalinfoprovince');
		$paramuser['city'] = $this->input->post('personalinfocity');
		$paramuser['street'] = $this->input->post('personalinfostreet');
		$paramuser['name_prefix'] = $this->input->post('personalinfostreet');
		$paramuser['name'] = $this->input->post('personalinfoname');
		$paramuser['position'] = $this->input->post('personalinfoposition');
		$paramuser['name_prefix'] = $this->input->post('personalinfonameprefix');
		$paramuser['busi_id'] = $busi_id;
		$paramuser['language_id'] = $language_id;
		$paramuser['created_date'] = date('Y-m-d H:i:s');
		$data = $this->languagelib->getLangPersonalinfoBusiId($busi_id);
		if(count($data) >0 )
		{
			$response = $this->languagelib->updateLangPersonalinfo($paramuser);
			
		} else {
			$response = $this->languagelib->saveLangPersonalinfo($paramuser);
		}
		if($response > 0)
		{
			$langbusiness = array();
			$langbusiness['busi_id'] = $busi_id;
			$langbusiness['language_id'] = $language_id;
			$langbusiness['personal_info'] = 1;
			$category_id = $this->session->userdata('tsuser')['category_id'];
			$res = $this->languagelib->checkLanguageBusiness(array('language_id'=>$language_id,'busi_id'=>$busi_id));
			if($category_id == 1) {
				if(!empty($paramuser['country']) && !empty($paramuser['province']) && !empty($paramuser['city']) && !empty($paramuser['street']) && !empty($paramuser['name_prefix']) && !empty($paramuser['name']) && !empty($paramuser['position'])) {
					if(($res[0]['compay_info'] + $res[0]['main_product'] + $res[0]['product_spec_serv']) == 3) {
						$langbusiness['allow_to_publish'] = 1;
					}
				} else {
					$langbusiness['allow_to_publish'] = 0;
				}
			} else if($category_id == 3) {
				if(!empty($paramuser['country']) && !empty($paramuser['province']) && !empty($paramuser['city']) && !empty($paramuser['street']) && !empty($paramuser['name_prefix']) && !empty($paramuser['name']) && !empty($paramuser['position'])) {
					if(($res[0]['compay_info'] + $res[0]['main_product']) == 2) {
						$langbusiness['allow_to_publish'] = 1;
					}
				} else {
					$langbusiness['allow_to_publish'] = 0;
				}
			} else if($category_id == 2) {
				if(!empty($paramuser['country']) && !empty($paramuser['province']) && !empty($paramuser['city']) && !empty($paramuser['street']) && !empty($paramuser['name_prefix']) && !empty($paramuser['name']) && !empty($paramuser['position'])) {
					if(($res[0]['compay_info'] + $res[0]['product_spec_serv']) == 2) {
						$langbusiness['allow_to_publish'] = 1;
					}
				} else {
					$langbusiness['allow_to_publish'] = 0;
				}
			}
			$this->languagelib->updateLangBusiness($langbusiness);
			$map['status'] = 1;
			$map['msg'] = "Personal Information save successfully.";
			
		} else {
			$map['status'] = 0;
			$map['msg'] = "Fail to save Personal Information.";
		}
		echo json_encode($map);
	}
	
	public function savelangCompanyInfo()
	{
		$map = array();
		$this->load->library('mylib/LanguageLib');
		$language_id = $this->input->post('company_langid');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$businessinfo = array();
		$factoryinfo = array();
		$certificateinfo= array();
		
		$businessinfo['company_name'] = $this->input->post('company_name');
		$businessinfo['owner_name'] = $this->input->post('owner_name');
		$businessinfo['company_introduction'] = $this->input->post('company_intro');
		$businessinfo['hot_presentation'] = $this->input->post('hot_presentation');
		$businessinfo['busi_id'] = $busi_id;
		$businessinfo['language_id'] = $language_id;
		$businessinfo['created_date'] = date('Y-m-d H:i:s');
		
		
		$factoryinfo['province'] = $this->input->post('fact_prvince');
		$factoryinfo['city'] = $this->input->post('fact_city');
		$factoryinfo['street'] = $this->input->post('fact_street');
		$factoryinfo['busi_id'] = $busi_id;
		$factoryinfo['language_id'] = $language_id;
		$factoryinfo['created_date'] = date('Y-m-d H:i:s');
		
		$tradinfo['port1'] = $this->input->post('port1');
		$tradinfo['port2'] = $this->input->post('port2');
		$tradinfo['port3'] = $this->input->post('port3');
		$tradinfo['busi_id'] = $busi_id;
		$tradinfo['language_id'] = $language_id;
		$tradinfo['created_date'] = date('Y-m-d H:i:s');
		
		$certificateinfo['scope'] = $this->input->post('companyscope');
		$certificateinfo['busi_id'] = $busi_id;
		$certificateinfo['language_id'] = $language_id;
		$certificateinfo['created_date'] = date('Y-m-d H:i:s');
		
		$companydata = $this->languagelib->getLangCompanyinfoBusiId($busi_id);
		if(count($companydata) > 0 )
		{
			$response = $this->languagelib->updateLangCompanylinfo($businessinfo);
			
		} else {
			$response = $this->languagelib->saveLangCompanyinfo($businessinfo);
		}
		
		if(!empty($factoryinfo['province'])) {
			$factorydata = $this->languagelib->getLangFactoryinfoBusiId($busi_id);
			if(count($factorydata) >0 )
			{
				$response = $this->languagelib->updateLangFactoryinfo($factoryinfo);
				
			} else {
				$response = $this->languagelib->saveLangFactoryinfo($factoryinfo);
			}
		}
		
		if(!empty($tradinfo['port1'])) {
			$tradedata = $this->languagelib->getLangTradeinfoBusiId($busi_id);
			if(count($tradedata) >0 )
			{
				$response = $this->languagelib->updateLangTradeinfo($tradinfo);
				
			} else {
				$response = $this->languagelib->saveLangTradeinfo($tradinfo);
			}
		}
		if(!empty($certificateinfo['scope'])) {
			$certificatedata = $this->languagelib->getLangCertificateinfoBusiId($busi_id);
			if(count($certificatedata) >0 )
			{
				$response = $this->languagelib->updateLangCertificateinfo($certificateinfo);
				
			} else {
				$response = $this->languagelib->saveLangCertificateinfo($certificateinfo);
			}
		}
		
		
		$langbusiness = array();
		$langbusiness['busi_id'] = $busi_id;
		$langbusiness['language_id'] = $language_id;
		$langbusiness['compay_info'] = 1;
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$res = $this->languagelib->checkLanguageBusiness(array('language_id'=>$language_id,'busi_id'=>$busi_id));
		if($category_id == 1) {
			if(($res[0]['personal_info'] + $res[0]['main_product'] + $res[0]['product_spec_serv']) == 3) {
				$langbusiness['allow_to_publish'] = 1;
			}
		} else if($category_id == 3) {
			if(!empty($businessinfo['company_name']) && !empty($businessinfo['owner_name']) && !empty($businessinfo['company_introduction']) && !empty($businessinfo['hot_presentation'])) {
				if(($res[0]['personal_info'] + $res[0]['main_product']) == 2) {
					$langbusiness['allow_to_publish'] = 1;
				}
			} else {
				$langbusiness['allow_to_publish'] = 0;
			}
		} else if($category_id == 2) {
			if(($res[0]['personal_info'] + $res[0]['product_spec_serv']) == 2) {
				$langbusiness['allow_to_publish'] = 1;
			}
		}
		$this->languagelib->updateLangBusiness($langbusiness);
		
		if($response)
		{
			$map['status'] = 1;
			$map['msg'] = "Company Information save successfully.";
			
		} else {
			$map['status'] = 0;
			$map['msg'] = "Fail to save Company Information.";
		}
		echo json_encode($map);
	}
	public function saveLangMainProductInfo()
	{
		$map = array();
		$language_id = $this->input->post('mainproduct_langid');
		$this->load->model('Product_Model','product');
		$this->load->library('mylib/LanguageLib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$mainproductinfo = array();
		
		$mainproduct = $this->input->post('mainproduct');
		$mainproductdata = $this->product->getMainProducts($busi_id);
		for($i=0;$i<count($mainproductdata);$i++)
		{
			$temp = array();
			$temp['main_product_id'] = $mainproductdata[$i]['id'];
			$temp['mainproduct'] = $mainproduct[$i];
			$temp['busi_id'] = $busi_id;
			$temp['language_id'] = $language_id;
			$temp['created_date'] = date('Y-m-d H:i:s');
			$mainproductinfo[$i] = $temp;
		}
		$all_mps = true;
		$mainproductlangdata = $this->languagelib->getMainproductInfoByLanguageId($language_id,$busi_id);
		if(count($mainproductlangdata) >0 )
		{
			foreach ($mainproductinfo as $row) {
				$updatemainprodata = array();
				$updatemainprodata['main_product_id'] = $row['main_product_id'];
				$updatemainprodata['mainproduct'] = $row['mainproduct'];
				$response = $this->languagelib->updateLangMainProductlinfo($updatemainprodata);
				if(empty($row['main_product_id']) || empty($row['mainproduct'])) {
					$all_mps = false;
				}
			}
			
		} else {
			$response = $this->languagelib->saveLangMainproductinfo($mainproductinfo);
		}
		
		// sub product
		
		$subproductinfo = array();
		$subproductdata = $this->languagelib->getSubProductsByBusiId($busi_id);
		for($i=0;$i<count($subproductdata);$i++)
		{
				$id = $subproductdata[$i]['id'];
				$temp = array();
				$temp['main_product_id'] = $subproductdata[$i]['mproduct_id'];
				$temp['sub_product_id'] = $subproductdata[$i]['id'];
				$temp['sub_product'] = $this->input->post('subproduct-'.$id);
				$temp['busi_id'] = $busi_id;
				$temp['language_id'] = $language_id;
				$temp['created_date'] = date('Y-m-d H:i:s');
				$subproductinfo[$i] = $temp;
				
		}
		$all_subps = true;
		$subprolangdata = $this->languagelib->getSubProductInfoByLanguageId($language_id,$busi_id);
		if(count($subprolangdata) >0 )
		{
			foreach ($subproductinfo as $row) {
				$updatesubprodata = array();
				$updatesubprodata['sub_product_id'] = $row['sub_product_id'];
				$updatesubprodata['sub_product'] = $row['sub_product'];
				$response = $this->languagelib->updateLangSubproductinfo($updatesubprodata);
				if(empty($row['sub_product_id']) || empty($row['sub_product'])) {
					$all_subps = false;
				}
			}
			
		} else {
			if(count($subproductinfo) > 0)
			$response = $this->languagelib->saveLangSubproductinfo($subproductinfo);
		}
		
		
		$langbusiness = array();
		$langbusiness['busi_id'] = $busi_id;
		$langbusiness['language_id'] = $language_id;
		$langbusiness['main_product'] = 1;
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$res = $this->languagelib->checkLanguageBusiness(array('language_id'=>$language_id,'busi_id'=>$busi_id));
		if($category_id == 1) {
			if($all_mps && $all_subps) {
				if(($res[0]['personal_info'] + $res[0]['compay_info'] + $res[0]['product_spec_serv']) == 3) {
					$langbusiness['allow_to_publish'] = 1;
				}
			} else {
				$langbusiness['allow_to_publish'] = 0;
			}
		} else if($category_id == 3) {
			if($all_mps) {
				if(($res[0]['personal_info'] + $res[0]['compay_info']) == 2) {
					$langbusiness['allow_to_publish'] = 1;
				}
			} else {
				$langbusiness['allow_to_publish'] = 0;
			}
		}
		$this->languagelib->updateLangBusiness($langbusiness); 
		
		
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Main Product save successfully.";
			
		} else {
			$map['status'] = 1;
			$map['msg'] = "Main Product save successfully.";
			//$map['status'] = 0;
			//$map['msg'] = "Fail to save Main product.";
		}
		echo json_encode($map);
	}
	public function saveLangProductInfo()
	{
		
		$map = array();
		$response = 0;
		$language_id = $this->input->post('productspec_langid');
		$this->load->model('Product_Model','product');
		$this->load->library('mylib/LanguageLib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$product_id = $this->input->post('product_id');
		$param = array();
		$param['busi_id'] = $busi_id;
		$param['language_id'] = $language_id;
		$param['product_id'] = $this->input->post('product_id');
		$param['product_name'] = $this->input->post('product_name');
		$param['about_product'] = $this->input->post('product_about');
		$param['product_description'] = $this->input->post('product_description');
		$param['created_date'] = date('Y-m-d H:i:s');
		
		
		
		$prolangdata = $this->languagelib->getLanguageProductsByProidAndLangId($product_id,$language_id);
		
		if(count($prolangdata) >0 )
		{
			//foreach ($param as $row) {
				$updateprodata = array();
				$updateprodata['id'] = $prolangdata[0]['id'];
				$updateprodata['product_id'] = $param['product_id'];
				$updateprodata['product_name'] = $param['product_name'];
				$updateprodata['about_product'] = $param['about_product'];
				$updateprodata['product_description'] = $param['product_description'];
				$response = $this->languagelib->updateLangProductinfo($updateprodata);
			//}
			
		} else {
			$response = $this->languagelib->saveLangProductinfo($param);
		}
	
		
		$prospecification = array();
		$spec_name = $this->input->post('spec_name');
		$spec_value = $this->input->post('spec_value');
		
		for($i=0;$i<count($spec_name);$i++)
		{
			$temp  = array();
			$temp['busi_id'] = $busi_id;
			$temp['language_id'] = $language_id;
			$temp['product_id'] = $this->input->post('product_id');
			$temp['spec_name'] = $spec_name[$i];
			$temp['spec_value'] = $spec_value[$i];
			$temp['created_date'] = date('Y-m-d H:i:s');
			$prospecification[$i] = $temp;
		}
		$prospeclangdata = $this->languagelib->getLanguageProductSpecificationByProidAndLangId($product_id,$language_id);
		if(count($prospeclangdata) >0 )
		{
			foreach ($prospecification as $row) {
				$updateprospecdata = array();
				$updateprospecdata['id'] = $prospeclangdata[0]['id'];
				$updateprospecdata['product_id'] = $row['product_id'];
				$updateprospecdata['spec_name'] = $row['spec_name'];
				$updateprospecdata['spec_value'] = $row['spec_value'];
				$response = $this->languagelib->updateLangProductSpecinfo($updateprospecdata);
			}
			
		} else {
			$response = $this->languagelib->saveLangProductSpecinfo($prospecification);
		}
		
		if($response > 0)
		{
			
			$langproductinfo = $this->languagelib->getProductInfoByLanguageId($language_id,$busi_id);
			
			$productinfo = $this->languagelib->getProductlistBybusiId($busi_id);
			
			if(count($langproductinfo) == count($productinfo))
			{
				$langbusiness = array();
				$langbusiness['busi_id'] = $busi_id;
				$langbusiness['language_id'] = $language_id;
				$res = $this->languagelib->checkLanguageBusiness(array('language_id'=>$language_id,'busi_id'=>$busi_id));
				if(($res[0]['personal_info'] + $res[0]['compay_info'] + $res[0]['main_product']) == 3) {
					$langbusiness['allow_to_publish'] = 1;
				}
				$langbusiness['product_spec_serv'] = 1;
				
				$this->languagelib->updateLangBusiness($langbusiness); 
			}
			
// 			$langproductspecificationinfo = $this->languagelib->getProductSecificationByLanguageId($language_id,$busi_id,$productinfo[$number]['id']);
// 			if(count($langproductspecificationinfo) > 0 )
// 				$this->template->set ( 'langproductspecificationinfo', $langproductspecificationinfo);
			
			$map['status'] = 1;
			$map['msg'] = "Product save successfully.";
			
		} else {
			$map['status'] = 1;
			$map['msg'] = "Product save successfully.";
		}
		echo json_encode($map);
	}
	
	public  function savelangServiceInfo()
	{
		$this->load->library('mylib/LanguageLib');
		$language_id = $this->input->post('productservice_langid');
		$map = array();
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$services_id = $this->input->post('service_id');
		$services_name = $this->input->post('service_name');
		$services_description = $this->input->post('service_description');
		$servicelangdata = $this->languagelib->getLanguageServicesBybusi_id($busi_id);
		$service = array();
		for ($i=0;$i<count($services_name);$i++) {
			$temp = array();
			$temp['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			$temp['language_id'] = $language_id;
			$temp['service_id'] = $services_id[$i];
			$temp['service_name'] = $services_name[$i];
			$temp['service_description'] = $services_description[$i];
			$temp['created_date'] = date('Y-m-d H:i:s');
			$service[$i] = $temp;
		}
		if(count($servicelangdata) <= 0)
		{
			$this->languagelib->saveLangProductServices($service);
		} else {
			for($i=0;$i<count($servicelangdata);$i++)
			{
				$this->languagelib->updateLangProductServices($service[$i]);
			}
		}
		$res = $this->languagelib->checkLanguageBusiness(array('language_id'=>$language_id,'busi_id'=>$busi_id));
		$langbusiness = array();
		$langbusiness['busi_id'] = $busi_id;
		$langbusiness['language_id'] = $language_id;
		$langbusiness['product_spec_serv'] = 1;
		if(($res[0]['personal_info'] + $res[0]['compay_info']) == 2) {
			$langbusiness['allow_to_publish'] = 1;
		}
		$this->languagelib->updateLangBusiness($langbusiness); 
		
		$map['status'] = 1;
		$map['msg'] = 'Services Save Successfully.';
		echo json_encode($map);
	}
	public function saveNewLanguage()
	{
		$map = array();
		$this->load->library('mylib/LanguageLib');
		$language = $this->input->post('language');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$data = array();
		$data['language'] = $language;
		$data['created_busi_id'] = $busi_id;
		$data['created_date'] = date('Y-m-d H:i:s');
		$response = $this->languagelib->saveNewLanguage($data);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "New Language added successfully.";
			
		} else {
			$map['status'] = 1;
			$map['msg'] = "New Language fail to add.";
		}
		echo json_encode($map);
	}
	public function saveLanguageBusiness()
	{
		$map = array();
		$this->load->library('mylib/LanguageLib');
		$language_id = $this->input->post('language_id');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$param = array();
		$param['language_id'] = $language_id;
		$param['busi_id'] = $busi_id;
		$response = $this->languagelib->saveLanguageBusiness($param,$category_id);
		echo $response;
	}
	public  function publishLanguage()
	{
		$map = array();
		$this->load->library('mylib/LanguageLib');
		$language_id = $this->input->post('language_id');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		
		$param = array();
		$param['language_id'] = $language_id;
		$param['busi_id'] = $busi_id;
		
		$languageis_publish = $this->languagelib->checkLanguageBusiness($param);
		if(count($languageis_publish) > 0) {
			if($languageis_publish[0]['is_publish'] == 1)
			{
				$map['status'] = 1;
				$map['msg'] = "Language Allready Published.";
				
			} else {
				$param['is_publish'] = 1;
				$response = $this->languagelib->updateLangBusiness($param);
				if($response  > 0)
				{
					$map['status'] = 1;
					$map['msg'] = "Language Published Successfully.";
				} else {
					$map['status'] = 0;
					$map['msg'] = "Language Fail to Publish.";
				}
			}
		}
		echo json_encode($map);
	}
	public  function deletedLanguage()
	{
		$map = array();
		$this->load->library('mylib/LanguageLib');
		$this->load->model ( 'Language_model', 'language' );
		$language_id = $this->input->post('language_id');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		
		$param = array();
		$param['language_id'] = $language_id;
		$param['busi_id'] = $busi_id;
		
		$response = $this->language->deleteLangPersonalinfo($param);
		$response = $this->language->deleteLangCompanyinfo($param);
		$response = $this->language->deleteLangFactoryinfo($param);
		$response = $this->language->deleteLangTradeinfo($param);
		$response = $this->language->deleteLangCrtificateinfo($param);
		$response = $this->language->deleteLangMainProductinfo($param);
		$response = $this->language->deleteLangSubProductinfo($param);
		$response = $this->language->deleteLangProductinfo($param);
		$response = $this->language->deleteLangProductSepcificationinfo($param);
		$response = $this->language->deleteLangProductServiceinfo($param);
		
		
		$param['is_publish'] = 0;
		$param['personal_info'] = 0;
		$param['compay_info'] = 0;
		$param['main_product'] = 0;
		$param['product_spec_serv'] = 0;
		$param['allow_to_publish'] = 0;
		$response = $this->languagelib->deleteLangBusiness($param);
		
		$map['status'] = 1;
		$map['msg'] = "Language Deleted Successfully.";
		
		echo json_encode($map);
	}
}