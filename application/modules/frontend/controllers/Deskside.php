<?php
class Deskside extends MX_Controller {
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

	public function myDeskside() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$stage = $this->product->getProductStage($busi_id);
		if($stage[0]['step'] == 4) {
			$is_item_added = 0;
			if(!empty($this->session->flashdata('is_item_added'))) {
				$is_item_added = 1;
			}
			$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
			$products = $this->product->getActiveProductItems($busi_id);
			$this->template->set ( 'mproducts', $mproducts );
			$this->template->set ( 'products', $products );
			$this->template->set('is_item_added',$is_item_added);
			$this->template->set ( 'pro_step', $stage[0]['step'] );
			$this->template->set ( 'busi_id',$busi_id );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/editmydesksite','',true);
			echo $html;
		} else {
			if($stage[0]['step'] == 1) {
				$maincats = $this->product->getActiveProductMainAndSubCategories();
				$this->template->set ( 'mcats', $maincats );
			} else if ($stage[0]['step'] == 2) {
				$mproducts = $this->product->getMainProducts($busi_id);
				$this->template->set ( 'mproducts', $mproducts );
			} else if($stage[0]['step'] == 3) {
				$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
				$this->template->set ( 'mproducts', $mproducts );
			}
			$countries = $this->product->getAllCountries();
			$this->template->set ( 'countries', $countries );
			$this->template->set ( 'pro_step', $stage[0]['step'] );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/mydeskside','',true);
			echo $html;
		}
	}
	
	public function myShipperDeskside() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$stage = $this->product->getProductStage($busi_id);
		if($stage[0]['step'] == 2) {
			$is_item_added = 0;
			if(!empty($this->session->flashdata('is_item_added'))) {
				$is_item_added = 1;
			}
			$services = $this->product->getShipperServices($busi_id);

			$this->template->set ( 'services', $services );
			$this->template->set('is_item_added',$is_item_added);
			$this->template->set ( 'pro_step', $stage[0]['step'] );
			$this->template->set ( 'busi_id',$busi_id );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/editshipperdesksite','',true);
			echo $html;
		} else {
			$categories = $this->product->getShippingMainCategories();
			$this->template->set ( 'categories', $categories );
			$this->template->set ( 'pro_step', $stage[0]['step'] );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/shipper-desksite','',true);
			echo $html;
		}
	}
	
	public function myBuyerDeskside() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$stage = $this->product->getProductStage($busi_id);
		if($stage[0]['step'] == 2) {
			$is_item_added = 0;
			if(!empty($this->session->flashdata('is_item_added'))) {
				$is_item_added = 1;
			}
			$mainproducts = $this->product->getMainProducts($busi_id);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			$this->template->set ( 'mainproducts', $mainproducts );
			$this->template->set ( 'mcats', $maincats );
			$this->template->set ('is_item_added',$is_item_added);
			$this->template->set ( 'pro_step', $stage[0]['step'] );
			$this->template->set ( 'busi_id',$busi_id );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/editbuyerdesksite','',true);
			echo $html;
		} else {
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			$this->template->set ( 'mcats', $maincats );
			$this->template->set ( 'pro_step', $stage[0]['step'] );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/buyer-desksite','',true);
			echo $html;
		}
	}
	
	public function desksiteBgImages() {
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/mydeskside','',true);
		echo $html;
	}
	public function myDeskdesign() {
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/mydeskdesign','',true);
		echo $html;
	}
	public function myDeskMainProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$this->load->model('Product_Model','product');
		$maincats = $this->product->getActiveProductMainAndSubCategories();
		$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>1));
		$this->template->set ( 'page', 'home' );
		$this->template->set ( 'mcats', $maincats );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		if($category_id == 1) {
			$html = $this->template->build ('station/pages/subpages/mainproduct','',true);
		} else if($category_id == 2) {
			$html = $this->template->build ('station/pages/subpages/main-services','',true);
		} else {
			$html = $this->template->build ('station/pages/subpages/buyermainproduct','',true);
		}
		echo $html;
	}
	
	public function desksiteSubProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getMainProducts($busi_id);
		$this->template->set ( 'page', 'home' );
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/subproduct','',true);
		echo $html;
	}
	
	public function desksiteSubProductItem() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$countries = $this->product->getAllCountries();
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'countries', $countries );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/subproductitem','',true);
		echo $html;
	}
	
	public function newDesksiteSubProductItem() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$countries = $this->product->getAllCountries();
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'countries', $countries );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/addnewitem','',true);
		echo $html;
	}
	
	public function getMainServices() {
		$this->load->model('Product_Model','product');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$categories = $this->product->getShippingMainCategories();
		$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>1));
		$this->template->set ( 'categories', $categories );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/main-services','',true);
		echo $html;
	}
	
	public function viewMainServices() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$services = $this->product->getShipperServices($busi_id);
		$this->template->set ( 'services', $services );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/shipperservices','',true);
		echo $html;
	}
	
	public function uploadDsBackground() {
		$this->load->model('Account_Model');
		$user_id = $this->session->userdata('tsuser')['userid'];
		$busi_img = $this->Account_Model->getBackgroundImages($this->session->userdata('tsuser')['busi_id']);
		$userPath = FCPATH. "assets/images/user_images/$user_id/info/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		$size = 0;
		$images = array();
		$images['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		if (!empty($_FILES['ds_background1']['name'])) {
			$tmpFilePath = $_FILES['ds_background1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_background1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['desksite_bg1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['desksite_bg1']);
					$size = $size + $_FILES['ds_background1']['size'];
				}
			}
		}
		if (!empty($_FILES['ds_background2']['name'])) {
			$tmpFilePath = $_FILES['ds_background2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_background2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['desksite_bg2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['desksite_bg2']);
					$size = $size + $_FILES['ds_background2']['size'];
				}
			}
		}
		$resp = array();
		if((!empty($images['desksite_bg1']) && $images['desksite_bg1'] != "") || (!empty($images['desksite_bg2']) && $images['desksite_bg2'] != "") ) {
			$this->Account_Model->updateBusinessImages($images);
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
			$resp['status'] = 1;
			$resp['msg'] = 'Desksite images uploaded successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to upload desksite images.';
		}
		echo json_encode($resp);
		
	}
	
	public function uploadMainDsBackground() {
		$user_id = $this->session->userdata('tsuser')['userid'];
		$userPath = FCPATH. "assets/images/user_images/$user_id/info/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		$size = 0;
		$images = array();
		$images['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		if (!empty($_FILES['ds_background1']['name'])) {
			$tmpFilePath = $_FILES['ds_background1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_background1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['desksite_bg1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['ds_background1']['size'];
				}
			}
		}
		if (!empty($_FILES['ds_background2']['name'])) {
			$tmpFilePath = $_FILES['ds_background2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_background2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['desksite_bg2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['ds_background2']['size'];
				}
			}
		}
		if (!empty($_FILES['website_img1']['name'])) {
			$tmpFilePath = $_FILES['website_img1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['website_img1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['website_bg1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['website_img1']['size'];
				}
			}
		}
		if (!empty($_FILES['website_img2']['name'])) {
			$tmpFilePath = $_FILES['website_img2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['website_img2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['website_bg2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['website_img2']['size'];
				}
			}
		}
		if (!empty($_FILES['ds_info_img1']['name'])) {
			$tmpFilePath = $_FILES['ds_info_img1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_info_img1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['info_img1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['ds_info_img1']['size'];
				}
			}
		}
		if (!empty($_FILES['ds_info_img2']['name'])) {
			$tmpFilePath = $_FILES['ds_info_img2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_info_img2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['info_img2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['ds_info_img2']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img1']['name'])) {
			$tmpFilePath = $_FILES['compn_img1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['compn_img1']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img2']['name'])) {
			$tmpFilePath = $_FILES['compn_img2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['compn_img2']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img3']['name'])) {
			$tmpFilePath = $_FILES['compn_img3']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img3']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img3'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['compn_img3']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img4']['name'])) {
			$tmpFilePath = $_FILES['compn_img4']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img4']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img4'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size + $_FILES['compn_img4']['size'];
				}
			}
		}
		$resp = array();
		if($images['desksite_bg1'] != "" || $images['desksite_bg2'] != "") {
			$this->load->model('Account_Model');
			$this->Account_Model->updateBusinessImages($images);
			$resp['status'] = 1;
			$resp['msg'] = 'Desksite images uploaded successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to upload desksite images.';
		}
		echo json_encode($resp);
	
	}
	
	public function uploadWebsiteBackground() {
		$this->load->model('Account_Model');
		$busi_img = $this->Account_Model->getBackgroundImages($this->session->userdata('tsuser')['busi_id']);
		$user_id = $this->session->userdata('tsuser')['userid'];
		$userPath = FCPATH. "assets/images/user_images/$user_id/info/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		$size = 0;
		$images = array();
		$images['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		if (!empty($_FILES['website_img1']['name'])) {
			$tmpFilePath = $_FILES['website_img1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['website_img1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['website_bg1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['website_bg1']);
					$size = $size + $_FILES['website_img1']['size'];
				}
			}
		}
		if (!empty($_FILES['website_img2']['name'])) {
			$tmpFilePath = $_FILES['website_img2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['website_img2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['website_bg2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['website_bg2']);
					$size = $size + $_FILES['website_img2']['size'];
				}
			}
		}
		$resp = array();
		if(!empty($images['website_bg1']) || !empty($images['website_bg2'])) {
			$this->Account_Model->updateBusinessImages($images);
			$resp['status'] = 1;
			$resp['msg'] = 'Website images uploaded successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to upload website images.';
		}
		echo json_encode($resp);
	
	}
	
	public function uploadInfoImage() {
		$this->load->model('Account_Model');
		$busi_img = $this->Account_Model->getBackgroundImages($this->session->userdata('tsuser')['busi_id']);
		$user_id = $this->session->userdata('tsuser')['userid'];
		$userPath = FCPATH. "assets/images/user_images/$user_id/info/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		$size = 0;
		$images = array();
		$images['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		if (!empty($_FILES['ds_info_img1']['name'])) {
			$tmpFilePath = $_FILES['ds_info_img1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_info_img1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['info_img1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['info_img1']);
					$size = $size + $_FILES['ds_info_img1']['size'];
				}
			}
		}
		if (!empty($_FILES['ds_info_img2']['name'])) {
			$tmpFilePath = $_FILES['ds_info_img2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['ds_info_img2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['info_img2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['info_img2']);
					$size = $size + $_FILES['ds_info_img2']['size'];
				}
			}
		}
		$resp = array();
		if((isset($images['info_img1']) &&  $images['info_img1'] != "") || (isset($images['info_img2']) && $images['info_img2'] != "")) {
			$this->Account_Model->updateBusinessImages($images);
			$resp['status'] = 1;
			$resp['msg'] = 'Information images uploaded successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to upload information images.';
		}
		echo json_encode($resp);
	
	}
	
	public function uploadCompanyImage() {
		$this->load->model('Account_Model');
		$busi_img = $this->Account_Model->getBackgroundImages($this->session->userdata('tsuser')['busi_id']);
		$user_id = $this->session->userdata('tsuser')['userid'];
		$userPath = FCPATH. "assets/images/user_images/$user_id/info/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		$size = 0;
		$images = array();
		$images['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		if (!empty($_FILES['compn_img1']['name'])) {
			$tmpFilePath = $_FILES['compn_img1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img1'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['company_info_img1']);
					$size = $size + $_FILES['compn_img1']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img2']['name'])) {
			$tmpFilePath = $_FILES['compn_img2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img2'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['company_info_img2']);
					$size = $size + $_FILES['compn_img2']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img3']['name'])) {
			$tmpFilePath = $_FILES['compn_img3']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img3']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img3'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['company_info_img3']);
					$size = $size + $_FILES['compn_img3']['size'];
				}
			}
		}
		if (!empty($_FILES['compn_img4']['name'])) {
			$tmpFilePath = $_FILES['compn_img4']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['compn_img4']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$images['company_info_img4'] = "images/user_images/$user_id/info/".$fileName;
					$size = $size - @filesize(FCPATH."assets/".$busi_img[0]['company_info_img4']);
					$size = $size + $_FILES['compn_img4']['size'];
				}
			}
		}
		$resp = array();
		if(!empty($images['company_info_img1']) || !empty($images['company_info_img2']) || !empty($images['company_info_img3']) || !empty($images['company_info_img4'])) {
			$this->load->model('Account_Model');
			$this->Account_Model->updateBusinessImages($images);
			$resp['status'] = 1;
			$resp['msg'] = 'Company images uploaded successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to upload company images.';
		}
		echo json_encode($resp);
	
	}
	
	public function saveNewProducts() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$names = $this->input->post('main_product');
		$scats = $this->input->post('main_category');
		$products = array();
		$i = 1;
		foreach ($names as $key=>$name) {
			if(!empty($name) && !empty($scats[$key])) {
				$product = array();
				$product['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$product['name'] = $name;
				$product['subcat_id'] = $scats[$key];
				$product['sortorder'] = $i;
				$products[] = $product;
				$i++;
			}
		}
		$resp = array();
		if(count($products)) {
			$this->load->model('Product_Model','product');
			$this->product->addBulkMainProduct($products);
			$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>2));
			$resp['status'] = 1;
			$resp['msg'] = 'Main products added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'No any main product added.';
		}
		echo json_encode($resp);
	}
	
	public function saveBuyerMainProducts() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$names = $this->input->post('main_product');
		$scats = $this->input->post('main_category');
		$products = array();
		$product = array();
		$product['busi_id'] = $busi_id;
		$product['name'] = $this->input->post('main_product1');;
		$product['subcat_id'] = $this->input->post('main_category1');
		$product['sortorder'] = 1;
		$products[] = $product;
		$i = 2;
		foreach ($names as $key=>$name) {
			if(!empty($name) && !empty($scats[$key])) {
				$product = array();
				$product['busi_id'] = $busi_id;
				$product['name'] = $name;
				$product['subcat_id'] = $scats[$key];
				$product['sortorder'] = $i;
				$products[] = $product;
				$i++;
			}
		}
		$resp = array();
		if(count($products)) {
			$this->load->model('Product_Model','product');
			$this->product->addBulkMainProduct($products);
			$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>2));
			$this->session->set_flashdata('is_item_added','1');
			$resp['status'] = 1;
			$resp['msg'] = 'Main products added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'No any main product added.';
		}
		echo json_encode($resp);
	}
	
	public function saveSubProducts() { 
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$names = $this->input->post('mainproduct');
		$products = array();
		$i = 1;
		$j = 0;
		foreach ($names as $key=>$name) {
			if(!empty($name)) {
				$subproducts = $this->input->post('sub_product'.$i);
				foreach ($subproducts as $skey=>$subproduct) {
					if(!empty($subproduct)) {
						$product = array();
						$product['name'] = $subproduct;
						$product['mproduct_id'] = $name;
						$product['sortorder'] = $i;
						$products[] = $product;
						$j++;
					}
				}
			}
			$i++;
		}
		$resp = array();
		if(count($products)) {
			$this->load->model('Product_Model','product');
			$this->product->addBulkSubProduct($products);
			$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>3));
			$resp['status'] = 1;
			$resp['msg'] = 'Sub products added successfully.';
		} else {
			$resp['status'] = 1;
			$resp['msg'] = 'No any sub product added.';
			$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>3));
		}
		echo json_encode($resp);
	}
	
	public function saveSubProductItems() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$size = 0;
		$item = array();
		$item['busi_id'] = $busi_id;
		
		$userPath = FCPATH. "assets/images/user_images/$user_id/product/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		if (!empty($_FILES['product_mainimage']['name'])) {
			$tmpFilePath = $_FILES['product_mainimage']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['product_mainimage']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['main_image'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['product_mainimage']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image1']['name'])) {
			$tmpFilePath = $_FILES['sub_image1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image1'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image1']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image2']['name'])) {
			$tmpFilePath = $_FILES['sub_image2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image2'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image2']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image3']['name'])) {
			$tmpFilePath = $_FILES['sub_image3']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image3']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image3'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image3']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image4']['name'])) {
			$tmpFilePath = $_FILES['sub_image4']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image4']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image4'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image4']['size'];
				}
			}
		}
		
		if (!empty($_FILES['flyr_image1']['name'])) {
			$tmpFilePath = $_FILES['flyr_image1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['flyr_image1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['flyr_image1'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['flyr_image1']['size'];
				}
			}
		}
		if (!empty($_FILES['flyr_image2']['name'])) {
			$tmpFilePath = $_FILES['flyr_image2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['flyr_image2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['flyr_image2'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['flyr_image2']['size'];
				}
			}
		}
		$spro = explode("#",$this->input->post('sub_product_id'));
		$item['mproduct_id'] = $spro[0];
		$item['sproduct_id'] = $spro[1];
		$item['model_no'] = $this->input->post('model_no');
		$item['name'] = $this->input->post('item_name');
		$item['unit_price'] = $this->input->post('unit_price');
		$item['lead_time'] = $this->input->post('lead_time');
		$item['quantity'] = $this->input->post('quantity');
		$item['unit'] = $this->input->post('unit');
		$item['country_id'] = $this->input->post('country_id');
		$item['brand'] = $this->input->post('brand');
		$item['cbm'] = $this->input->post('cbm');
		$item['about'] = $this->input->post('about');
		$item['description'] = $this->input->post('description');
		$item['created_date'] = date('Y-m-d H:i:s');
		
		$colors = $this->input->post('colors');
		$tech_fields = $this->input->post('tech_field');
		$tech_vals = $this->input->post('tech_value');
		$product_colors = array();
		$product_specs = array();
		$resp = array();
		if(!empty($item['name'])) {
			$this->load->model('Product_Model','product');
			$item_id = $this->product->addProductItem($item);
			foreach ($colors as $color) {
				if(!empty($color)) {
					$product_color = array();
					$product_color['item_id'] = $item_id;
					$product_color['color_code'] = $color;
					$product_colors[] = $product_color;
				}
			}
			foreach ($tech_fields as $key=>$row) {
				if(!empty($row) && !empty($tech_vals[$key])) {
					$product_spec = array();
					$product_spec['spec_name'] = $row;
					$product_spec['spec_value'] = $tech_vals[$key];
					$product_spec['item_id'] = $item_id;
					$product_specs[] = $product_spec;
				}
			}
			if(count($product_colors) > 0)
				$this->product->addProductItemColor($product_colors);
			if(count($product_specs) > 0)
				$this->product->addProductItemSpec($product_specs);
			$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>4));
			$this->session->set_flashdata('is_item_added','1');
			$resp['status'] = 1;
			$resp['msg'] = 'Product item added successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'products';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add product item.';
		}
		echo json_encode($resp);
	}
	
	public function saveNewProductItems() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$size = 0;
		$item = array();
		$item['busi_id'] = $busi_id;
	
		$userPath = FCPATH. "assets/images/user_images/$user_id/product/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		if (!empty($_FILES['product_mainimage']['name'])) {
			$tmpFilePath = $_FILES['product_mainimage']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['product_mainimage']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['main_image'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['product_mainimage']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image1']['name'])) {
			$tmpFilePath = $_FILES['sub_image1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image1'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image1']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image2']['name'])) {
			$tmpFilePath = $_FILES['sub_image2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image2'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image2']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image3']['name'])) {
			$tmpFilePath = $_FILES['sub_image3']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image3']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image3'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image3']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image4']['name'])) {
			$tmpFilePath = $_FILES['sub_image4']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image4']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image4'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image4']['size'];
				}
			}
		}
		
		if (!empty($_FILES['flyr_image1']['name'])) {
			$tmpFilePath = $_FILES['flyr_image1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['flyr_image1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['flyr_image1'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['flyr_image1']['size'];
				}
			}
		}
		if (!empty($_FILES['flyr_image2']['name'])) {
			$tmpFilePath = $_FILES['flyr_image2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['flyr_image2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['flyr_image2'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['flyr_image2']['size'];
				}
			}
		}
		$spro = explode("#",$this->input->post('sub_product_id'));
		$item['mproduct_id'] = $spro[0];
		$item['sproduct_id'] = $spro[1];
		$item['model_no'] = $this->input->post('model_no');
		$item['name'] = $this->input->post('item_name');
		$item['unit_price'] = $this->input->post('unit_price');
		$item['lead_time'] = $this->input->post('lead_time');
		$item['quantity'] = $this->input->post('quantity');
		$item['unit'] = $this->input->post('unit');
		$item['country_id'] = $this->input->post('country_id');
		$item['brand'] = $this->input->post('brand');
		$item['cbm'] = $this->input->post('cbm');
		$item['about'] = $this->input->post('about');
		$item['description'] = $this->input->post('description');
		$item['created_date'] = date('Y-m-d H:i:s');
	
		$colors = $this->input->post('colors');
		$tech_fields = $this->input->post('tech_field');
		$tech_vals = $this->input->post('tech_value');
		$product_colors = array();
		$product_specs = array();
		$resp = array();
		if(!empty($item['name'])) {
			$this->load->model('Product_Model','product');
			$item_id = $this->product->addProductItem($item);
			foreach ($colors as $color) {
				if(!empty($color)) {
					$product_color = array();
					$product_color['item_id'] = $item_id;
					$product_color['color_code'] = $color;
					$product_colors[] = $product_color;
				}
			}
			foreach ($tech_fields as $key=>$row) {
				if(!empty($row) && !empty($tech_vals[$key])) {
					$product_spec = array();
					$product_spec['spec_name'] = $row;
					$product_spec['spec_value'] = $tech_vals[$key];
					$product_spec['item_id'] = $item_id;
					$product_specs[] = $product_spec;
				}
			}
			if(count($product_colors) > 0)
				$this->product->addProductItemColor($product_colors);
			if(count($product_specs) > 0)
				$this->product->addProductItemSpec($product_specs);
			$resp['status'] = 1;
			$resp['msg'] = 'Product item added successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'products';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add product item.';
		}
		echo json_encode($resp);
	}
	
	public function editDesksiteSubProductItem($id) {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$products = $this->product->getProductItemById($id);
		$product_colors = $this->product->getProductColors($id);
		$product_specs = $this->product->getProductSpecs($id);
		$countries = $this->product->getAllCountries();
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'product', $products[0] );
		$this->template->set ( 'product_colors', $product_colors );
		$this->template->set ( 'product_specs', $product_specs );
		$this->template->set ( 'countries', $countries );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editproductitem','',true);
		echo $html;
	}
	
	public function updateDesksiteSubProductItem() {
		$size = 0;
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$item = array();
		$item['id'] = $this->input->post('item_id');
		$item['busi_id'] = $busi_id;
		
		$userPath = FCPATH. "assets/images/user_images/$user_id/product/";
		if (!file_exists($userPath)) {
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		if (!empty($_FILES['product_mainimage']['name'])) {
			$tmpFilePath = $_FILES['product_mainimage']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['product_mainimage']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['main_image'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['product_mainimage']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image1']['name'])) {
			$tmpFilePath = $_FILES['sub_image1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image1'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image1']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image2']['name'])) {
			$tmpFilePath = $_FILES['sub_image2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image2'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image2']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image3']['name'])) {
			$tmpFilePath = $_FILES['sub_image3']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image3']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image3'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image3']['size'];
				}
			}
		}
		if (!empty($_FILES['sub_image4']['name'])) {
			$tmpFilePath = $_FILES['sub_image4']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['sub_image4']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['sub_image4'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['sub_image4']['size'];
				}
			}
		}
		
		if (!empty($_FILES['flyr_image1']['name'])) {
			$tmpFilePath = $_FILES['flyr_image1']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['flyr_image1']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['flyr_image1'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['flyr_image1']['size'];
				}
			}
		}
		if (!empty($_FILES['flyr_image2']['name'])) {
			$tmpFilePath = $_FILES['flyr_image2']['tmp_name'];
			if ($tmpFilePath != ""){
				$fileName = microtime(true).$_FILES['flyr_image2']['name'];
				$newFilePath = $userPath.$fileName;
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {
					$item['flyr_image2'] = "images/user_images/$user_id/product/".$fileName;
					$size = $size + $_FILES['flyr_image2']['size'];
				}
			}
		}
		$spro = explode("#",$this->input->post('sub_product_id'));
		$item['mproduct_id'] = $spro[0];
		$item['sproduct_id'] = $spro[1];
		$item['model_no'] = $this->input->post('model_no');
		$item['name'] = $this->input->post('item_name');
		$item['unit_price'] = $this->input->post('unit_price');
		$item['lead_time'] = $this->input->post('lead_time');
		$item['quantity'] = $this->input->post('quantity');
		$item['unit'] = $this->input->post('unit');
		$item['country_id'] = $this->input->post('country_id');
		$item['brand'] = $this->input->post('brand');
		$item['cbm'] = $this->input->post('cbm');
		$item['about'] = $this->input->post('about');
		$item['description'] = $this->input->post('description');
		$item['created_date'] = date('Y-m-d H:i:s');
		
		$colors = $this->input->post('colors');
		$tech_fields = $this->input->post('tech_field');
		$tech_vals = $this->input->post('tech_value');
		$product_colors = array();
		$product_specs = array();
		$resp = array();
		if(!empty($item['name'])) {
			$this->load->model('Product_Model','product');
			$this->product->updateProductItem($item);
			$item_id = $item['id'];
			foreach ($colors as $color) {
				if(!empty($color)) {
					$product_color = array();
					$product_color['item_id'] = $item_id;
					$product_color['color_code'] = $color;
					$product_colors[] = $product_color;
				}
			}
			foreach ($tech_fields as $key=>$row) {
				if(!empty($row) && !empty($tech_vals[$key])) {
					$product_spec = array();
					$product_spec['spec_name'] = $row;
					$product_spec['spec_value'] = $tech_vals[$key];
					$product_spec['item_id'] = $item_id;
					$product_specs[] = $product_spec;
				}
			}
			$this->product->deleteProductItemColor($item_id);
			$this->product->deleteProductItemSpec($item_id);
			if(count($product_colors) > 0)
				$this->product->addProductItemColor($product_colors);
			if(count($product_specs) > 0)
				$this->product->addProductItemSpec($product_specs);
			$resp['status'] = 1;
			$resp['msg'] = 'Product item updated successfully.';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'products';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to update product item.';
		}
		echo json_encode($resp);
	}
	
	public function deleteDesksiteSubProductItem() {
		$resp = array();
		$item_id = $this->input->get('item_id');
		$this->load->model('Product_Model','product');
		$is_deleted = $this->product->deleteProductItem($item_id);
		if($is_deleted) {
			$resp['status'] = 1;
			$resp['msg'] = 'Product item deleted successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to delete product item.';
		}
		echo json_encode($resp);
	}
	
	public function updateProductCategory() {
		$resp = array();
		$params = array();
		$params['id'] = $this->input->post('item_id');
		$spro = explode("#",$this->input->post('sproduct_id'));
		$params['mproduct_id'] = $spro[0];
		$params['sproduct_id'] = $spro[1];
		$this->load->model('Product_Model','product');
		$is_deleted = $this->product->updateProductItem($params);
		if($is_deleted) {
			$resp['status'] = 1;
			$resp['msg'] = 'Product item updated successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to update product item.';
		}
		echo json_encode($resp);
	}
	
	public function editDesksiteBackgroundImage() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Account_Model','account');
		$busi_images = $this->account->getBackgroundImages($busi_id);
		$this->template->set ( 'busi_image', $busi_images[0] );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editbackgoundimage','',true);
		echo $html;
	}
	
	public function viewMainProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mainproducts = $this->product->getMainProducts($busi_id);
		$maincats = $this->product->getActiveProductMainAndSubCategories();
		$this->template->set ( 'mainproducts', $mainproducts );
		$this->template->set ( 'mcats', $maincats );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editmainproduct','',true);
		echo $html;
	}
	
	public function viewBuyerMainProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mainproducts = $this->product->getMainProducts($busi_id);
		$maincats = $this->product->getActiveProductMainAndSubCategories();
		$this->template->set ( 'mainproducts', $mainproducts );
		$this->template->set ( 'mcats', $maincats );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editbuyermainproduct','',true);
		echo $html;
	}
	
	public function addMainProduct() {
		$this->load->model('Product_Model','product');
		$product = array();
		$product['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$product['name'] = $this->input->post('mainproduct');
		$product['subcat_id'] = $this->input->post('main_category');
		if(!empty($this->input->post('main_category_sorder'))) {
			$product['sortorder'] = $this->input->post('main_category_sorder');
		} else {
			$mp = $this->product->getMaxMainProductOrder($product['busi_id']);
			if(count($mp) > 0 && !empty($mp[0]['sortorder'])) {
				$product['sortorder'] = ($mp[0]['sortorder']+1);
			} else {
				$product['sortorder'] = 1;
			}
		}
		$id = $this->product->addMainProduct($product);
		$resp = array();
		if($id > 0) {
			$resp['status'] = 1;
			$resp['msg'] = 'Main product added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'This main Product is already exist, please select other name.';
		}
		echo json_encode($resp);
	}
	
	public function updateMainProduct() {
		$product = array();
		$product['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$product['id'] = $this->input->post('id');
		$product['name'] = $this->input->post('name');
		$product['subcat_id'] = $this->input->post('scat_id');
		if(!empty($this->input->post('main_category_sorder'))) {
			$product['sortorder'] = $this->input->post('main_category_sorder');
		}
		$this->load->model('Product_Model','product');
		$updated = $this->product->updateMainProduct($product);
		$resp = array();
		if($updated) {
			$resp['status'] = 1;
			$resp['msg'] = 'Main product updated successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to update main product.';
		}
		echo json_encode($resp);
	}
	
	public function deleteMainProduct() {
		$resp = array();
		$item_id = $this->input->get('item_id');
		$this->load->model('Product_Model','product');
		$is_deleted = $this->product->deleteMainProduct($item_id);
		if($is_deleted) {
			$resp['status'] = 1;
			$resp['msg'] = 'Main product deleted successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to delete main product.';
		}
		echo json_encode($resp);
	}
	
	public function moveUpMainProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$sortorder = $this->input->get('sortorder');
		$osortorder = $sortorder - 1;
		$product = array();
		$product['id'] = $this->input->get('item_id');
		$product['sortorder'] = $osortorder;
		$this->load->model('Product_Model','product');
		$mp = $this->product->getMainProductBySortorder($busi_id,$osortorder);
		$updated = $this->product->updateMainProduct($product);
		$product = array();
		$product['id'] = $mp[0]['id'];
		$product['sortorder'] = $sortorder;
		$updated = $this->product->updateMainProduct($product);
		$resp = array();
		if($updated) {
			$resp['status'] = 1;
			$resp['msg'] = 'Main product moved successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to move main product.';
		}
		echo json_encode($resp);
	}
	
	public function moveDownMainProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$sortorder = $this->input->get('sortorder');
		$osortorder = $sortorder + 1;
		$product = array();
		$product['id'] = $this->input->get('item_id');
		$product['sortorder'] = $osortorder;
		$this->load->model('Product_Model','product');
		$mp = $this->product->getMainProductBySortorder($busi_id,$osortorder);
		$updated = $this->product->updateMainProduct($product);
		$product = array();
		$product['id'] = $mp[0]['id'];
		$product['sortorder'] = $sortorder;
		$updated = $this->product->updateMainProduct($product);
		$resp = array();
		if($updated) {
			$resp['status'] = 1;
			$resp['msg'] = 'Main product updated successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to update main product.';
		}
		echo json_encode($resp);
	}
	
	public function viewSubProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mainproducts = $this->product->getMainProducts($busi_id);
		$subproducts = $this->product->getActiveSubProducts($busi_id);
		$maincats = $this->product->getActiveProductMainAndSubCategories();
		$this->template->set ( 'mainproducts', $mainproducts );
		$this->template->set ( 'subproducts', $subproducts );
		$this->template->set ( 'mcats', $maincats );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editsubproduct','',true);
		echo $html;
	}
	
	public function addSubProduct() {
		$product = array();
		$product['name'] = $this->input->post('subproduct');
		$product['mproduct_id'] = $this->input->post('mproduct_id');
		$product['sortorder'] = $this->input->post('sortorder');
		$this->load->model('Product_Model','product');
		$id = $this->product->addSubProduct($product);
		$resp = array();
		if($id > 0) {
			$resp['status'] = 1;
			$resp['msg'] = 'Sub product added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add sub product.';
		}
		echo json_encode($resp);
	}
	
	public function updateSubProduct() {
		$product = array();
		$product['id'] = $this->input->post('id');
		$product['name'] = $this->input->post('name');
		$this->load->model('Product_Model','product');
		$updated = $this->product->updateSubProduct($product);
		$resp = array();
		if($updated) {
			$resp['status'] = 1;
			$resp['msg'] = 'Sub product updated successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to update sub product.';
		}
		echo json_encode($resp);
	}
	
	public function deleteSubProduct() {
		$resp = array();
		$item_id = $this->input->get('item_id');
		$this->load->model('Product_Model','product');
		$is_deleted = $this->product->deleteSubProduct($item_id);
		if($is_deleted) {
			$resp['status'] = 1;
			$resp['msg'] = 'Sub product deleted successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to delete sub product.';
		}
		echo json_encode($resp);
	}
	
	public function moveUpSubProduct() {
		$resp = array();
		$this->load->model('Product_Model','product');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$mid = $this->input->get('mid');
		$sortorder = $this->input->get('sortorder');
		$max_order = $this->product->getSubProductMinOrder($busi_id,$mid);
		if(!empty($max_order[0]['sortorder']) && $max_order[0]['sortorder'] == $sortorder) {
			$resp['status'] = 0;
			$resp['msg'] = 'Already at top.';
		} else {
			$osortorder = $sortorder - 1;
			$product = array();
			$product['id'] = $this->input->get('item_id');
			$product['sortorder'] = $osortorder;
			$mp = $this->product->getSubProductBySortorderAndMid($busi_id,$osortorder,$mid);
			$updated = $this->product->updateSubProduct($product);
			$product = array();
			$product['id'] = $mp[0]['id'];
			$product['sortorder'] = $sortorder;
			$updated = $this->product->updateSubProduct($product);
			if($updated) {
				$resp['status'] = 1;
				$resp['msg'] = 'Sub product moved successfully.';
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'Failed to move sub product.';
			}
		}
		echo json_encode($resp);
	}
	
	public function moveDownSubProduct() {
		$this->load->model('Product_Model','product');
		$resp = array();
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$sortorder = $this->input->get('sortorder');
		$mid = $this->input->get('mid');
		$max_order = $this->product->getSubProductMaxOrder($busi_id,$mid);
		if(!empty($max_order[0]['sortorder']) && $max_order[0]['sortorder'] == $sortorder) {
			$resp['status'] = 0;
			$resp['msg'] = 'Already at bottom.';
		} else {
			$osortorder = $sortorder + 1;
			$product = array();
			$product['id'] = $this->input->get('item_id');
			$product['sortorder'] = $osortorder;
			$mp = $this->product->getSubProductBySortorderAndMid($busi_id,$osortorder,$mid);
			$updated = $this->product->updateSubProduct($product);
			$product = array();
			$product['id'] = $mp[0]['id'];
			$product['sortorder'] = $sortorder;
			$updated = $this->product->updateSubProduct($product);
			if($updated) {
				$resp['status'] = 1;
				$resp['msg'] = 'Sub product updated successfully.';
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'Failed to update sub product.';
			}
		}
		echo json_encode($resp);
	}
	
	public function desksiteHoteSaleItem() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$hotsales = $this->product->getHoteSaleMenu($busi_id);
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'hotsales', $hotsales );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/hotsales','',true);
		echo $html;
	}
	
	public function desksiteNewArrivalItem() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$newarrivals = $this->product->getNewArrivals($busi_id);
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'newarrivals', $newarrivals );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/newarrivals','',true);
		echo $html;
	}
	
	public function addHotSaleProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_ids = $this->input->post('item_id');
		$item_arr = explode(",",$item_ids);
		$products = array();
		foreach ($item_arr as $item) {
			$product = array();
			$product['busi_id'] = $busi_id;
			$product['item_id'] = $item;
			$product['created_date'] = date('Y-m-d H:i:s');
			$products[] = $product;
		}
		$this->load->model('Product_Model','product');
		if(count($products) > 0)
		$added = $this->product->addToHotSale($products);
		$resp = array();
		if($added) {
			$resp['status'] = 1;
			$resp['msg'] = 'Hote sale menu added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add hot sale menu.';
		}
		echo json_encode($resp);
	}
	
	public function deleteHotSaleProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_ids = $this->input->post('item_id');
		$product = array();
		$product['busi_id'] = $busi_id;
		$product['item_id'] = $item_ids;
		$this->load->model('Product_Model','product');
		if($item_ids != "")
			$added = $this->product->deleteToHotSale($product);
		$resp = array();
		if($added) {
			$resp['status'] = 1;
			$resp['msg'] = 'Hote sale menu deleted successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to delete hot sale menu.';
		}
		echo json_encode($resp);
	}
	
	public function addNewArrivalProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_ids = $this->input->post('item_id');
		$item_arr = explode(",",$item_ids);
		$products = array();
		foreach ($item_arr as $item) {
			$product = array();
			$product['busi_id'] = $busi_id;
			$product['item_id'] = $item;
			$product['created_date'] = date('Y-m-d H:i:s');
			$products[] = $product;
		}
		$this->load->model('Product_Model','product');
		if(count($products) > 0)
			$added = $this->product->addToNewArrival($products);
		$resp = array();
		if($added) {
			$resp['status'] = 1;
			$resp['msg'] = 'New arrival added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add new arrival.';
		}
		echo json_encode($resp);
	}
	
	public function deleteNewArrivalProduct() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_ids = $this->input->post('item_id');
		$product = array();
		$product['busi_id'] = $busi_id;
		$product['item_id'] = $item_ids;
		$this->load->model('Product_Model','product');
		if($item_ids != "")
			$added = $this->product->deleteToNewArrival($product);
		$resp = array();
		if($added) {
			$resp['status'] = 1;
			$resp['msg'] = 'New arrival deleted successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to delete new arrival.';
		}
		echo json_encode($resp);
	}
	
	public function searchProducts() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$name = $this->input->get('query');
		$sproduct_id = $this->input->get('sproduct_id');
		$mproduct_id = $this->input->get('mproduct_id');
		$params = array();
		$params['busi_id'] = $busi_id;
		$params['name'] = $name;
		$params['mproduct_id'] = $mproduct_id;
		$params['sproduct_id'] = $sproduct_id;
		$this->load->model('Product_Model','product');
		$products = $this->product->searchActiveProductItems($params);
		if(count($products) > 0) { 
			$this->template->set ( 'products', $products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/product_list','',true);
		} else {
			$html = "Sorry we do not found any item for your search criteria.";
		}
		echo $html;
	}
	
	public function getMyProductList() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$name = $this->input->get('query');
		$sproduct_id = $this->input->get('sproduct_id');
		$params = array();
		$params['busi_id'] = $busi_id;
		$params['name'] = $name;
		$params['sproduct_id'] = $sproduct_id;
		$this->load->model('Product_Model','product');
		$products = $this->product->searchActiveProductItems($params);
		if(count($products) > 0) {
			$this->template->set ( 'products', $products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/partialproduct','',true);
		} else {
			$html = "Sorry we do not found any item for your search criteria.";
		}
		echo $html;
	}
	
	public function saveMainServices() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$services = $this->input->post('main_service');
		$descs = $this->input->post('description');
		$shipping_category = $this->input->post('shipping_cate_id');
		$size = 0;
		$msparams = array();
		$msg = "";
		foreach ($services as $key=>$service) {
			if(!empty($service) && !empty($shipping_category[$key]) && !empty($descs[$key])) {
				$msparam = array();
				$msparam['busi_id'] = $busi_id;
				$msparam['name'] = $service;
				$msparam['description'] = $descs[$key];
				$msparam['shipping_cat_id'] = $shipping_category[$key];
				$start_num = $key + 1;
				//$countimages = count($_FILES['msimg'.$start_num]['name']);
				$userPath = FCPATH. "assets/images/user_images/$user_id/services/";
				if (!file_exists($userPath)) {
					mkdir($userPath, 0777, true);
					chmod($userPath, 0777);
				}
				$moreCerts = array();
				$imct = 0;
				for($i=0; $i < 4; $i++) {
					$imgnum = $i + 1;
					if(!empty($_FILES['msimg'.$start_num]['tmp_name'][$i])) {
						$tmpFilePath = $_FILES['msimg'.$start_num]['tmp_name'][$i];
						$msparam['image'.$imgnum] = "";
						if ($tmpFilePath != ""){
							$fileName = microtime(true). $_FILES['msimg'.$start_num]['name'][$i];
							$newFilePath = $userPath.$fileName;
							if(move_uploaded_file($tmpFilePath, $newFilePath)) {
								$msparam['image'.$imgnum] = "images/user_images/$user_id/services/".$fileName;
								$size = $size + $_FILES['msimg'.$start_num]['size'][$i];
								$imct++;
							}
						}
					} else {
						$msparam['image'.$imgnum] = "";
					}
				}
				if($imct == 0) {
					if($msg == "") {
						$msg = "At least one image required for service ".$service;
					} else {
						$msg = $msg.", ".$service;
					}
				}
				$msparam['is_special'] = 0;
				$msparam['created_date'] = date('Y-m-d H:i:s');
				$msparam['status'] = 1;
				$msparams[] = $msparam;
			}
		}
		if($msg == "") {
			if(count($msparams) > 0) {
				$this->load->model('Product_Model','product');
				$is_added = $this->product->addShipperServices($msparams);
				$resp = array();
				if($is_added) {
					$this->session->set_flashdata('is_item_added','1');
					$this->product->updateProductStage(array('busi_id'=>$busi_id,'step'=>2));
					$resp['status'] = 1;
					$resp['msg'] = 'Services added successfully';
					/* ************** Storage Implementation *************** */
					if($size != 0) {
						$this->load->library('mylib/StorageLib');
						$storage = array();
						$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
						$storage['field'] = 'desksite';
						$storage['datasize'] = round($size/1024,2);
						$this->storagelib->updateStorageByBusiId($storage);
					}
					/* ***************************************************** */
				} else {
					$resp['status'] = 0;
					$resp['msg'] = 'Failed to add services';
				}
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'Please select at least one service.';
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = $msg;
		}
		echo json_encode($resp);
	}
	
	public function openSpecialService() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$services = $this->product->getShipperSpecialServices($busi_id);
		$this->template->set ( 'services', $services );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/specialservice','',true);
		echo $html;
	}
	
	public function newSpecialService() {
		$this->load->model('Product_Model','product');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$categories = $this->product->getShippingMainCategories();
		$this->template->set ( 'categories', $categories );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/newspecialservice','',true);
		echo $html;
	}
	
	public function newMainService() {
		$this->load->model('Product_Model','product');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$categories = $this->product->getShippingMainCategories();
		$this->template->set ( 'categories', $categories );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/newservice','',true);
		echo $html;
	}
	
	public function addSpecialServices() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$services = $this->input->post('main_service');
		$descs = $this->input->post('description');
		$shipping_category = $this->input->post('shipping_cate_id');
		$size = 0;
		$msparams = array();
		$msg = "";
		foreach ($services as $key=>$service) {
			if(!empty($service) && !empty($shipping_category[$key]) && !empty($descs[$key])) {
				$msparam = array();
				$msparam['busi_id'] = $busi_id;
				$msparam['name'] = $service;
				$msparam['description'] = $descs[$key];
				$msparam['shipping_cat_id'] = $shipping_category[$key];
				$start_num = $key + 1;
				$userPath = FCPATH. "assets/images/user_images/$user_id/services/";
				if (!file_exists($userPath)) {
					mkdir($userPath, 0777, true);
					chmod($userPath, 0777);
				}
				$moreCerts = array();
				$imct = 0;
				for($i=0; $i < 4; $i++) {
					$imgnum = $i + 1;
					if(!empty($_FILES['msimg'.$start_num]['tmp_name'][$i])) {
						$tmpFilePath = $_FILES['msimg'.$start_num]['tmp_name'][$i];
						$msparam['image'.$imgnum] = "";
						if ($tmpFilePath != ""){
							$fileName = microtime(true). $_FILES['msimg'.$start_num]['name'][$i];
							$newFilePath = $userPath.$fileName;
							if(move_uploaded_file($tmpFilePath, $newFilePath)) {
								$msparam['image'.$imgnum] = "images/user_images/$user_id/services/".$fileName;
								$size = $size + $_FILES['msimg'.$start_num]['size'][$i];
								$imct++;
							}
						}
					} else {
						$msparam['image'.$imgnum] = "";
					}
				}
				if($imct == 0) {
					if($msg == "") {
						$msg = "At least one image required for service ".$service;
					} else {
						$msg = $msg.", ".$service;
					}
				}
				$msparam['is_special'] = 1;
				$msparam['created_date'] = date('Y-m-d H:i:s');
				$msparam['status'] = 1;
				$msparams[] = $msparam;
			}
		}
		
		if($msg == "") {
			if(count($msparams) > 0) {
				$this->load->model('Product_Model','product');
				$is_added = $this->product->addShipperService($msparams[0]);
				$resp = array();
				if($is_added > 0) {
					$resp['status'] = 1;
					$resp['msg'] = 'Services added successfully';
					/* ************** Storage Implementation *************** */
					if($size != 0) {
						$this->load->library('mylib/StorageLib');
						$storage = array();
						$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
						$storage['field'] = 'desksite';
						$storage['datasize'] = round($size/1024,2);
						$this->storagelib->updateStorageByBusiId($storage);
					}
					/* ***************************************************** */
				} else {
					$resp['status'] = 0;
					$resp['msg'] = 'Duplicate special service';
				}
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'Please select at least one service.';
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = $msg;
		}
			
		echo json_encode($resp);
	}
	
	public function addNewMainService() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$services = $this->input->post('main_service');
		$shipping_category = $this->input->post('shipping_cate_id');
		$descs = $this->input->post('description');
		$size = 0;
		$msparams = array();
		$msg = "";
		foreach ($services as $key=>$service) {
			if(!empty($service) && !empty($shipping_category[$key]) && !empty($descs[$key])) {
				$msparam = array();
				$msparam['busi_id'] = $busi_id;
				$msparam['name'] = $service;
				$msparam['description'] = $descs[$key];
				$msparam['shipping_cat_id'] = $shipping_category[$key];
				$start_num = $key + 1;
				$userPath = FCPATH. "assets/images/user_images/$user_id/services/";
				if (!file_exists($userPath)) {
					mkdir($userPath, 0777, true);
					chmod($userPath, 0777);
				}
				$moreCerts = array();
				$imct = 0;
				for($i=0; $i < 4; $i++) {
					$imgnum = $i + 1;
					if(!empty($_FILES['msimg'.$start_num]['tmp_name'][$i])) {
						$tmpFilePath = $_FILES['msimg'.$start_num]['tmp_name'][$i];
						$msparam['image'.$imgnum] = "";
						if ($tmpFilePath != ""){
							$fileName = microtime(true). $_FILES['msimg'.$start_num]['name'][$i];
							$newFilePath = $userPath.$fileName;
							if(move_uploaded_file($tmpFilePath, $newFilePath)) {
								$msparam['image'.$imgnum] = "images/user_images/$user_id/services/".$fileName;
								$size = $size + $_FILES['msimg'.$start_num]['size'][$i];
								$imct++;
							}
						}
					} else {
						$msparam['image'.$imgnum] = "";
					}
				}
				if($imct == 0) {
					if($msg == "") {
						$msg = "At least one image required for service ".$service;
					} else {
						$msg = $msg.", ".$service;
					}
				}
				$msparam['is_special'] = 0;
				$msparam['created_date'] = date('Y-m-d H:i:s');
				$msparam['status'] = 1;
				$msparams[] = $msparam;
			}
		}
		if($msg == "") {
			if(count($msparams) > 0) {
				$this->load->model('Product_Model','product');
				$is_added = $this->product->addShipperService($msparams[0]);
				$resp = array();
				if($is_added > 0) {
					$resp['status'] = 1;
					$resp['msg'] = 'Services added successfully';
					/* ************** Storage Implementation *************** */
					if($size != 0) {
						$this->load->library('mylib/StorageLib');
						$storage = array();
						$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
						$storage['field'] = 'desksite';
						$storage['datasize'] = round($size/1024,2);
						$this->storagelib->updateStorageByBusiId($storage);
					}
					/* ***************************************************** */
				} else {
					$resp['status'] = 0;
					$resp['msg'] = 'Duplicate Service Name';
				}
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'Please select at least one service.';
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = $msg;
		}
		echo json_encode($resp);
	}
	
	public function editNewMainService($id) {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$services = $this->product->getShipperServiceById($id);
		$categories = $this->product->getShippingMainCategories();
		$this->template->set ( 'categories', $categories );
		$this->template->set ( 'services', $services );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editservice','',true);
		echo $html;
	}
	
	public function editNewSpecialService($id) {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$services = $this->product->getShipperServiceById($id);
		$categories = $this->product->getShippingMainCategories();
		$this->template->set ( 'categories', $categories );
		$this->template->set ( 'services', $services );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editspecialservice','',true);
		echo $html;
	}
	
	public function updateMainService() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$services = $this->input->post('main_service');
		$descs = $this->input->post('description');
		$shipping_category = $this->input->post('shipping_cate_id');
		$size = 0;
		foreach ($services as $key=>$service) {
			$msparam = array();
			$msparam['id'] = $this->input->post('id');
			$msparam['busi_id'] = $busi_id;
			$msparam['name'] = $service;
			$msparam['description'] = $descs[$key];
			$msparam['shipping_cat_id'] = $shipping_category[$key];
			$msparam['is_special'] = 0;
			$start_num = $key + 1;
			$userPath = FCPATH. "assets/images/user_images/$user_id/services/";
			if (!file_exists($userPath)) {
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$moreCerts = array();
			if(!empty($_FILES['msimg1']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg1']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg1']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image1'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg1']['size'];
					}
				}
			}
			if(!empty($_FILES['msimg2']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg2']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg2']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image2'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg2']['size'];
					}
				}
			}
			if(!empty($_FILES['msimg3']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg3']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg1']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image3'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg3']['size'];
					}
				}
			}
			if(!empty($_FILES['msimg4']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg4']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg1']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image4'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg4']['size'];
					}
				}
			}
		}
		
		$this->load->model('Product_Model','product');
		$is_added = $this->product->updateShipperService($msparam);
		$resp = array();
		if($is_added > 0) {
			$resp['status'] = 1;
			$resp['msg'] = 'Services updated successfully';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Duplicate service name.';
		}
		echo json_encode($resp);
	}
	
	public function updateSpecialService() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$user_id = $this->session->userdata('tsuser')['userid'];
		$services = $this->input->post('main_service');
		$descs = $this->input->post('description');
		$shipping_category = $this->input->post('shipping_cate_id');
		$size = 0;
		foreach ($services as $key=>$service) {
			$msparam = array();
			$msparam['id'] = $this->input->post('id');
			$msparam['busi_id'] = $busi_id;
			$msparam['name'] = $service;
			$msparam['description'] = $descs[$key];
			$msparam['shipping_cat_id'] = $shipping_category[$key];
			$msparam['is_special'] = 1;
			$start_num = $key + 1;
			$userPath = FCPATH. "assets/images/user_images/$user_id/services/";
			if (!file_exists($userPath)) {
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$moreCerts = array();
			if(!empty($_FILES['msimg1']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg1']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg1']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image1'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg1']['size'];
					}
				}
			}
			if(!empty($_FILES['msimg2']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg2']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg2']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image2'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg2']['size'];
					}
				}
			}
			if(!empty($_FILES['msimg3']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg3']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg1']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image3'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg3']['size'];
					}
				}
			}
			if(!empty($_FILES['msimg4']['tmp_name'])) {
				$tmpFilePath = $_FILES['msimg4']['tmp_name'];
				if ($tmpFilePath != ""){
					$fileName = microtime(true). $_FILES['msimg1']['name'];
					$newFilePath = $userPath.$fileName;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						$msparam['image4'] = "images/user_images/$user_id/services/".$fileName;
						$size = $size + $_FILES['msimg4']['size'];
					}
				}
			}
		}
	
		$this->load->model('Product_Model','product');
		$is_added = $this->product->updateShipperService($msparam);
		$resp = array();
		if($is_added > 0) {
			$resp['status'] = 1;
			$resp['msg'] = 'Services updated successfully';
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'desksite';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Duplicate special service.';
		}
		echo json_encode($resp);
	}
	
	public function deleteMainService() {
		$ids = $this->input->get('ids');
		$this->load->model('Product_Model','product');
		$is_added = $this->product->deleteShipperService($ids);
		$resp = array();
		if($is_added) {
			$resp['status'] = 1;
			$resp['msg'] = 'Services deleted successfully';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to delete services';
		}
		echo json_encode($resp);
	}
	
	
}