<?php
class Tools extends MX_Controller {
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
	public function viewMyTools() {
		$this->load->library('mylib/StorageLib');
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$this->load->model('Tool_model','mytoolmodel');
		$this->load->model('Product_Model','product');
		$busi_id = $this->session->userdata('busi_id');
		$plan_id = $this->session->userdata('tsuser')['plan_id'];
		$business_stats= $this->mytoolmodel->getMyStationStats($busi_id);
		$product_stats = $this->mytoolmodel->getMyStationProductStats($busi_id);
		$aproduct_stats = $this->mytoolmodel->getMyStationActiveProductStats($busi_id);
		$countries = $this->product->getAllCountries();
		$busi_history_pages = $this->mytoolmodel->getBusinessVisitHistoryCount(array('busi_id'=>$busi_id,'page'=>1));
		$aproduct_history_pages = $this->mytoolmodel->getActiveProductVisitHistoryCount(array('busi_id'=>$busi_id));
		$busi_history = $this->mytoolmodel->getBusinessVisitHistory(array('busi_id'=>$busi_id,'page'=>1));
		$product_history = $this->mytoolmodel->getProductVisitHistory(array('busi_id'=>$busi_id,'page'=>1));
		$aproduct_history = $this->mytoolmodel->getActiveProductVisitHistory(array('busi_id'=>$busi_id,'page'=>1));
		$storage_plan = $this->mytoolmodel->getStoragePlan($plan_id,$cust_type)[0]['intvalue'];
		$ois_plan = $this->mytoolmodel->getOISPlan($plan_id,$cust_type)[0]['intvalue']/2;
		$comm_plan = $this->mytoolmodel->getCommunityPlan($plan_id,$cust_type)[0]['intvalue'];
		$storage = $this->storagelib->getMyBusinessStorage($busi_id);
		$product_storage = round(($storage[0]['desksite']+$storage[0]['products']+$storage[0]['udtalk'] + $storage[0]['files'])/1024,2);
		$video_storage = round($storage[0]['videos']/1024,2);
		$community_storage = round($storage[0]['community']/1024,2);
		$offer_storage = round($storage[0]['offers']/1024,2);
		$inquiry_storage = round($storage[0]['inquiries']/1024,2);
		$bstation_storage = round($storage[0]['bstation']/1024,2);
		$stock_storage = round($storage[0]['stockmarket']/1024,2);
		$total_strorage = round($storage[0]['usedspace']/1024,2);
		$this->template->set('cust_type',$cust_type);
		$this->template->set ( 'business_stats', $business_stats);
		$this->template->set ( 'product_stats', $product_stats);
		$this->template->set ( 'aproduct_stats', $aproduct_stats);
		$this->template->set ( 'countries', $countries);
		$this->template->set ( 'busi_history_pages', $busi_history_pages);
		$this->template->set ( 'aproduct_history_pages', $aproduct_history_pages);
		$this->template->set ( 'busi_history', $busi_history);
		$this->template->set ( 'product_history', $product_history);
		$this->template->set ( 'aproduct_history', $aproduct_history);
		$this->template->set ( 'storage_plan', $storage_plan);
		$this->template->set ( 'product_storage', $product_storage);
		$this->template->set ( 'community_storage', $community_storage);
		$this->template->set ( 'offer_storage', $offer_storage);
		$this->template->set ( 'inquiry_storage', $inquiry_storage);
		$this->template->set ( 'video_storage', $video_storage);
		$this->template->set ( 'bstation_storage', $bstation_storage);
		$this->template->set ( 'stock_storage', $stock_storage);
		$this->template->set ( 'total_storage', $total_strorage);
		$this->template->set ( 'ois_plan', $ois_plan);
		$this->template->set ( 'comm_plan', $comm_plan);
		$this->template->set ( 'page', 'home' );
		$this->template->set ( 'totalPages', $product_history['totalPages']);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/mytools','',true);
		echo $html;
	}
	
	public function viewMyShipperTools() {
		$this->load->library('mylib/StorageLib');
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$this->load->model('Tool_model','mytoolmodel');
		$this->load->model('Product_Model','product');
		$busi_id = $this->session->userdata('busi_id');
		$plan_id = $this->session->userdata('tsuser')['plan_id'];
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$business_stats = $this->mytoolmodel->getMyStationStats($busi_id);
		$product_stats = $this->mytoolmodel->getMyStationServiceStats($busi_id);
		$aproduct_stats = $this->mytoolmodel->getMyStationActiveServiceStats($busi_id);
		$countries = $this->product->getAllCountries();
		$busi_history_pages = $this->mytoolmodel->getBusinessVisitHistoryCount(array('busi_id'=>$busi_id));
		$product_history_pages = $this->mytoolmodel->getServiceVisitHistoryCount(array('busi_id'=>$busi_id));
		$aproduct_history_pages = $this->mytoolmodel->getActiveServiceVisitHistoryCount(array('busi_id'=>$busi_id));
		$busi_history = $this->mytoolmodel->getBusinessVisitHistory(array('busi_id'=>$busi_id,'page'=>1));
		$product_history = $this->mytoolmodel->getServiceVisitHistory(array('busi_id'=>$busi_id,'page'=>1));
		$aproduct_history = $this->mytoolmodel->getActiveServiceVisitHistory(array('busi_id'=>$busi_id,'page'=>1));
		$storage_plan = $this->mytoolmodel->getStoragePlan($plan_id,$cust_type);
		if(count($storage_plan) > 0) {
			$storage_plan = $storage_plan[0]['intvalue'];
		} else {
			$storage_plan = 50;
		}
		$ois_plan = $this->mytoolmodel->getOISPlan($plan_id,$cust_type);
		if(count($ois_plan) > 0) {
			$ois_plan = $ois_plan[0]['intvalue']/2;
		} else {
			$ois_plan = 0;
		}
		$comm_plan = $this->mytoolmodel->getCommunityPlan($plan_id,$cust_type);
		if(count($comm_plan) > 0) {
			$comm_plan = $comm_plan[0]['intvalue'];
		} else {
			$comm_plan = 0;
		}
		$storage = $this->storagelib->getMyBusinessStorage($busi_id);
		$product_storage = round(($storage[0]['desksite']+$storage[0]['products']+$storage[0]['udtalk'] + $storage[0]['files'])/1024,2);
		$video_storage = round($storage[0]['videos']/1024,2);
		$community_storage = round($storage[0]['community']/1024,2);
		$offer_storage = round($storage[0]['offers']/1024,2);
		$inquiry_storage = round($storage[0]['inquiries']/1024,2);
		$bstation_storage = round($storage[0]['bstation']/1024,2);
		$stock_storage = round($storage[0]['stockmarket']/1024,2);
		$total_strorage = round($storage[0]['usedspace']/1024,2);
		$this->template->set('cust_type',$cust_type);
		$this->template->set ( 'business_stats', $business_stats);
		$this->template->set ( 'product_stats', $product_stats);
		$this->template->set ( 'aproduct_stats', $aproduct_stats);
		$this->template->set ( 'countries', $countries);
		$this->template->set ( 'busi_history_pages', $busi_history_pages);
		$this->template->set ( 'product_history_pages', $product_history_pages);
		$this->template->set ( 'aproduct_history_pages', $aproduct_history_pages);
		$this->template->set ( 'busi_history', $busi_history);
		$this->template->set ( 'product_history', $product_history);
		$this->template->set ( 'aproduct_history', $aproduct_history);
		$this->template->set ( 'storage_plan', $storage_plan);
		$this->template->set ( 'product_storage', $product_storage);
		$this->template->set ( 'community_storage', $community_storage);
		$this->template->set ( 'offer_storage', $offer_storage);
		$this->template->set ( 'inquiry_storage', $inquiry_storage);
		$this->template->set ( 'video_storage', $video_storage);
		$this->template->set ( 'bstation_storage', $bstation_storage);
		$this->template->set ( 'stock_storage', $stock_storage);
		$this->template->set ( 'total_storage', $total_strorage);
		$this->template->set ( 'ois_plan', $ois_plan);
		$this->template->set ( 'comm_plan', $comm_plan);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/shippertools','',true);
		echo $html;
	}
	
	public function viewMyBuyerTools() {
		$this->load->library('mylib/StorageLib');
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$this->load->model('Tool_model','mytoolmodel');
		$busi_id = $this->session->userdata('busi_id');
		$storage_plan = 900;
		$ois_plan = 150;
		$inq_plan = 100;
		$comm_plan = 250;
		$busi_info = $this->mytoolmodel->getBuyerBusiInfo($busi_id);
		$storage = $this->storagelib->getMyBusinessStorage($busi_id);
		$product_storage = round(($storage[0]['desksite']+$storage[0]['products']+$storage[0]['udtalk'] + $storage[0]['files'])/1024,2);
		$video_storage = round($storage[0]['videos']/1024,2);
		$community_storage = round($storage[0]['community']/1024,2);
		$offer_storage = round($storage[0]['offers']/1024,2);
		$inquiry_storage = round($storage[0]['inquiries']/1024,2);
		$bstation_storage = round($storage[0]['bstation']/1024,2);
		$stock_storage = round($storage[0]['stockmarket']/1024,2);
		$total_strorage = round($storage[0]['usedspace']/1024,2);
		$this->template->set('cust_type',$cust_type);
		$this->template->set ( 'storage_plan', $storage_plan);
		$this->template->set ( 'product_storage', $product_storage);
		$this->template->set ( 'video_storage', $video_storage);
		$this->template->set ( 'community_storage', $community_storage);
		$this->template->set ( 'offer_storage', $offer_storage);
		$this->template->set ( 'inquiry_storage', $inquiry_storage);
		$this->template->set ( 'bstation_storage', $bstation_storage);
		$this->template->set ( 'stock_storage', $stock_storage);
		$this->template->set ( 'total_storage', $total_strorage);
		$this->template->set ( 'ois_plan', $ois_plan);
		$this->template->set ( 'inq_plan', $inq_plan);
		$this->template->set ( 'comm_plan', $comm_plan);
		$this->template->set ( 'busi_info', $busi_info);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/buyertools','',true);
		echo $html;
	}
	
	public function updateBusinessStats() {
		$map = array();
		$map['busi_id'] = $this->input->post('busi_id');
		$map['visitor_id'] = $this->input->post('visitor_id');
		$map['likes'] = $this->input->post('likes');
		$map['shares'] = $this->input->post('shares');
		$map['visit_date'] = date('Y-m-d');
		$this->load->model('Tool_model','mytoolmodel');
		$this->mytoolmodel->addBusinessVisit($map);
	}
	
	public function updateProductStats() {
		$map = array();
		$map['item_id'] = $this->input->post('item_id');
		$map['busi_id'] = $this->input->post('busi_id');
		$map['likes'] = $this->input->post('likes');
		$map['shares'] = $this->input->post('shares');
		$map['visit_date'] = date('Y-m-d');
		$this->load->model('Tool_model','mytoolmodel');
		$this->mytoolmodel->addProductVisit($map);
	}
	
	public function searchBusinessStats() {
		$this->load->model('Tool_model','mytoolmodel');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$map = array();
		$map['busi_id'] = $busi_id;
		$map['page'] = $this->input->post('page');
		if(!empty($this->input->post('from_date'))) {
			$map['from_date'] = date('Y-m-d',strtotime($this->input->post('from_date')));
		}
		if(!empty($this->input->post('to_date'))) {
			$map['to_date'] = date('Y-m-d',strtotime($this->input->post('to_date')));
		}
		if(!empty($this->input->post('country_name'))) {
			$map['country_name'] = $this->input->post('country_name');
		}
		$busi_history = $this->mytoolmodel->getBusinessVisitHistory($map);
		$busi_history_pages = $this->mytoolmodel->getBusinessVisitHistoryCount($map);
		$this->template->set ( 'busi_history_pages', $busi_history_pages);
		$this->template->set ( 'busi_history', $busi_history);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/mybusinesshistory','',true);
		echo $html;
	}
	public function searchProductStats() {
		$this->load->model('Tool_model','mytoolmodel');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$map = array();
		$map['busi_id'] = $busi_id;
		$map['page'] = $this->input->post('page');
		if(!empty($this->input->post('from_date'))) {
			$map['from_date'] = date('Y-m-d',strtotime($this->input->post('from_date')));
		}
		if(!empty($this->input->post('to_date'))) {
			$map['to_date'] = date('Y-m-d',strtotime($this->input->post('to_date')));
		}
		if(!empty($this->input->post('country_name'))) {
			$map['country_name'] = $this->input->post('country_name');
		}
		if(!empty($this->input->post('product_name'))) {
			$map['product_name'] = $this->input->post('product_name');
		}
		$product_history = $this->mytoolmodel->getProductVisitHistory($map);
		$this->template->set ( 'product_history', $product_history);
		$this->template->set_theme('default_theme');
		$this->template->set ( 'totalPages', $product_history['totalPages']);
		$this->template->set ( 'currentPage', $map['page']);
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/myproducthistory','',true);
		echo $html;
	
	}
	public function searchAProductStats() {
		$this->load->model('Tool_model','mytoolmodel');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$map = array();
		$map['busi_id'] = $busi_id;
		$map['page'] = $this->input->post('page');
		if(!empty($this->input->post('from_date'))) {
			$map['from_date'] = date('Y-m-d',strtotime($this->input->post('from_date')));
		}
		if(!empty($this->input->post('to_date'))) {
			$map['to_date'] = date('Y-m-d',strtotime($this->input->post('to_date')));
		}
		if(!empty($this->input->post('country_name'))) {
			$map['country_name'] = $this->input->post('country_name');
		}
		if(!empty($this->input->post('product_name'))) {
			$map['product_name'] = $this->input->post('product_name');
		}
		$aproduct_history = $this->mytoolmodel->getActiveProductVisitHistory($map);
		$aproduct_history_pages = $this->mytoolmodel->getActiveProductVisitHistoryCount($map);
		$this->template->set ( 'aproduct_history_pages', $aproduct_history_pages);
		$this->template->set ( 'aproduct_history', $aproduct_history);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/myaproducthistory','',true);
		echo $html;
	
	}
	
	public function searchServiceStats() {
		$this->load->model('Tool_model','mytoolmodel');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$map = array();
		$map['busi_id'] = $busi_id;
		$map['page'] = $this->input->post('page');
		if(!empty($this->input->post('from_date'))) {
			$map['from_date'] = date('Y-m-d',strtotime($this->input->post('from_date')));
		}
		if(!empty($this->input->post('to_date'))) {
			$map['to_date'] = date('Y-m-d',strtotime($this->input->post('to_date')));
		}
		if(!empty($this->input->post('country_name'))) {
			$map['country_name'] = $this->input->post('country_name');
		}
		if(!empty($this->input->post('product_name'))) {
			$map['product_name'] = $this->input->post('product_name');
		}
		$product_history = $this->mytoolmodel->getServiceVisitHistory($map);
		$product_history_pages = $this->mytoolmodel->getServiceVisitHistoryCount($map);
		$this->template->set ( 'product_history_pages', $product_history_pages);
		$this->template->set ( 'product_history', $product_history);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/myservicehistory','',true);
		echo $html;
	
	}
	public function searchAServiceStats() {
		$this->load->model('Tool_model','mytoolmodel');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$map = array();
		$map['busi_id'] = $busi_id;
		$map['page'] = $this->input->post('page');
		if(!empty($this->input->post('from_date'))) {
			$map['from_date'] = date('Y-m-d',strtotime($this->input->post('from_date')));
		}
		if(!empty($this->input->post('to_date'))) {
			$map['to_date'] = date('Y-m-d',strtotime($this->input->post('to_date')));
		}
		if(!empty($this->input->post('country_name'))) {
			$map['country_name'] = $this->input->post('country_name');
		}
		if(!empty($this->input->post('product_name'))) {
			$map['product_name'] = $this->input->post('product_name');
		}
		$aproduct_history = $this->mytoolmodel->getActiveServiceVisitHistory($map);
		$aproduct_history_pages = $this->mytoolmodel->getActiveServiceVisitHistoryCount($map);
		$this->template->set ( 'aproduct_history_pages', $aproduct_history_pages);
		$this->template->set ( 'aproduct_history', $aproduct_history);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/myaservicehistory','',true);
		echo $html;
	
	}
	
	public function acceptBuyerControls() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Account_Model');
		$params = $this->input->post();
		$params['id'] = $busi_id;
		$this->Account_Model->updateBusinessInfo($params);
		echo json_encode(array('status'=>1,'msg'=>'Request completed'));
	}
	
	
}