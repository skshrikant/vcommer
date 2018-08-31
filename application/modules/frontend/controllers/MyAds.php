<?php
class MyAds extends MX_Controller {
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
	
	public function getMyAds() {
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/myads','',true);
		echo $html;
	}
	public function getMore() {
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/mymore','',true);
		echo $html;
	}
	public function getMainScreenAds() {
		$this->load->model('Ads_model','adsmodel');
		$adinfo = $this->adsmodel->getAdsPrice();
		$dates = $this->getNextMSAvailableDate();
		$last_day = explode("-",$dates['to_date'])[2];
		$week_num = floor(($last_day-1)/7);
		$week_name = "First";
		if($week_num == 0) {
			$week_name = "First";
		} else if ($week_num == 1) {
			$week_name = "Second";
		} else if ($week_num == 2) {
			$week_name = "Third";
		} else if ($week_num == 3) {
			$week_name = "Fourth";
		} else if ($week_num == 4) {
			$week_name = "Fifth";
		}
		$this->template->set ( 'adinfo', $adinfo[0] );
		$this->template->set ( 'dates', $dates );
		$this->template->set ( 'weekname', $week_name );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/mainscreenads','',true);
		echo $html;
	}
	
	public function getFeaturedProductsAds() {
		$dates = $this->getNextFCAvailableDate();
		$last_day = explode("-",$dates['to_date'])[2];
		$week_num = floor(($last_day-1)/7);
		$week_name = "First";
		if($week_num == 0) {
			$week_name = "First";
		} else if ($week_num == 1) {
			$week_name = "Second";
		} else if ($week_num == 2) {
			$week_name = "Third";
		} else if ($week_num == 3) {
			$week_name = "Fourth";
		} else if ($week_num == 4) {
			$week_name = "Fifth";
		}
		$this->load->model('Ads_model','adsmodel');
		$adinfo = $this->adsmodel->getAdsPrice();
		$this->template->set ( 'adinfo', $adinfo[0] );
		$this->template->set ( 'dates', $dates );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/featuredcarousel','',true);
		echo $html;
	}
	
	public function getNextMSAvailableDate() {
		$this->load->model('Ads_model','adsmodel');
		$last_date = $this->adsmodel->getLastAdFromDate();
		if(count($last_date) > 0 && !empty($last_date[0]['from_date'])) {
			$current_date = date('Y-m-d');
			if($current_date < $last_date[0]['from_date']) {
				$from_date = $last_date[0]['from_date'];
			} else {
				$from_date = date('Y-m-d',strtotime('monday next week'));
			}
		} else {
			$from_date = date('Y-m-d',strtotime('monday next week'));
		}
		$to_date = date('Y-m-d',strtotime('+6 days',strtotime($from_date)));
		$map = array();
		$map['from_date'] = $from_date;
		$map['to_date'] = $to_date;
		$myads = $this->adsmodel->getCurrentAdsCount($map);
		$total_ads = $myads[0]['ads'];
		if($total_ads >= 10) {
			$map['from_date'] = date('Y-m-d',strtotime('+7 days',strtotime($from_date)));
			$map['to_date'] = date('Y-m-d',strtotime('+7 days',strtotime($from_date)));
		}
		return $map;
	}
	
	public function getNextFCAvailableDate() {
		$this->load->model('Ads_model','adsmodel');
		$last_date = $this->adsmodel->getLastFCAdFromDate();
		if(count($last_date) > 0 && !empty($last_date[0]['from_date'])) {
			$current_date = date('Y-m-d');
			if($current_date < $last_date[0]['from_date']) {
				$from_date = $last_date[0]['from_date'];
			} else {
				$from_date = date('Y-m-d',strtotime('first day of next month'));
			}
		} else {
			$from_date = date('Y-m-d',strtotime('first day of next month'));
		}
		$to_date = date('Y-m-d',strtotime('last day of this month',strtotime($from_date)));
		$map = array();
		$map['from_date'] = $from_date;
		$map['to_date'] = $to_date;
		$myads = $this->adsmodel->getCurrentFCAdsCount($map);
		$total_ads = $myads[0]['ads'];
		if($total_ads >= 10) {
			$map['from_date'] = date('Y-m-d',strtotime('first day of next month',strtotime($from_date)));
			$map['to_date'] = date('Y-m-d',strtotime('last day of next month',strtotime($from_date)));
		}
		return $map;
	}
	
	public function getPaymentMSAds() {
		$paymant_data = $this->input->post('paydata');
		$this->load->model('Ads_model','adsmodel');
		$this->load->model('Payment_model','payment');
		$ms_id = $this->input->post('ad_id');
		$msads = array();
		$msads['id'] = $this->input->post('ad_id');
		$msads['is_paid'] = 1;
		$msads['payment_id'] = $this->input->post('paydata')['id'];
		$msads['status'] = 1;
		$this->adsmodel->updateMainScreenAd($msads);
		$pdata = array();
		$pdata['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$pdata['txn_id'] = $paymant_data['id'];
		$pdata['payment_gross'] = $paymant_data['transactions'][0]['amount']['total'];
		$pdata['currency_code'] = $paymant_data['transactions'][0]['amount']['currency'];
		$pdata['payer_email'] = $paymant_data['payer']['payer_info']['email'];
		$pdata['payment_status'] = $paymant_data['state'];
		$this->payment->addPaymentInfo($pdata);
		echo json_encode(array('status'=>1));
	}
	
	public function getMSAdsNextScreen() {
		$this->load->model('Ads_model','adsmodel');
		$this->load->model('Payment_model','payment');
		$msads = array();
		$msads['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$msads['from_date'] = $this->input->post('from_date').' 00:00:00';
		$msads['to_date'] = $this->input->post('to_date').' 23:59:59';
		$msads['is_paid'] = 0;
		$msads['payment_id'] = '';
		$msads['amount'] = $this->input->post('amount');;
		$msads['status'] = 0;
		$ms_id = $this->adsmodel->addMainScreenAd($msads);
		$adinfo = $this->adsmodel->getAdsPrice();
		$dates = $this->getNextMSAvailableDate();
		$last_day = explode("-",$dates['to_date'])[2];
		$week_num = floor(($last_day-1)/7);
		$week_name = "First";
		if($week_num == 0) {
			$week_name = "First";
		} else if ($week_num == 1) {
			$week_name = "Second";
		} else if ($week_num == 2) {
			$week_name = "Third";
		} else if ($week_num == 3) {
			$week_name = "Fourth";
		} else if ($week_num == 4) {
			$week_name = "Fifth";
		}
		$this->template->set ( 'adinfo', $adinfo[0] );
		$this->template->set ( 'ms_id', $ms_id );
		$this->template->set ( 'dates', $dates );
		$this->template->set ( 'weekname', $week_name );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/mainscreenpayment','',true);
		echo $html;
	}
	
	public function confirmMainScreenAd() {
		$this->load->model('Ads_model','adsmodel');
		$params = array();
		$params['id'] = $this->input->post('adid');
		$params['content'] = $this->input->post('about_ms_ad');
		$params['video_id'] = $this->input->post('ms_video_id');
		$params['catalogue_id'] = $this->input->post('ms_catalogue_id');
		$userId = $this->session->userdata('tsuser')['userid'];
		if (!empty($_FILES['mainscreen_ad_image']['name'])) {
			$path = FCPATH . "assets/images/user_images/$userId/ads";
			if (!file_exists($path)) {
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$location =  "assets/images/user_images/$userId/ads";
			$Img = uploadImage($_FILES['mainscreen_ad_image'],$location,array('jpeg','jpg','png','gif'),2097152,'ads');
			if($Img['status'] == 1) {
				$params['main_banner'] = $Img['image'];
				$map['status'] = 1;
			}
		}
		$params['status'] = 0;
		$params['created_date'] = date('Y-m-d H:i:s');
		$this->adsmodel->updateMainScreenAd($params);
		$map = array();
		$map['status'] = 1;
		$map['image'] = asset_url().$params['main_banner'];
		$map['ads_id'] = $this->input->post('adid');
		echo json_encode($map);
	}
	
	public function getPaymentFCAds() {
		$paymant_data = $this->input->post('paydata');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Ads_model','adsmodel');
		$this->load->model('Payment_model','payment');
		$msads = array();
		$msads['id'] = $this->input->post('ad_id');
		$msads['is_paid'] = 1;
		$msads['payment_id'] = $this->input->post('paydata')['id'];
		$msads['amount'] = $this->input->post('amount');;
		$msads['status'] = 1;
		$ms_id = $this->adsmodel->updateFeaturedCarouselAd($msads);
		$pdata = array();
		$pdata['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$pdata['txn_id'] = $paymant_data['id'];
		$pdata['payment_gross'] = $paymant_data['transactions'][0]['amount']['total'];
		$pdata['currency_code'] = $paymant_data['transactions'][0]['amount']['currency'];
		$pdata['payer_email'] = $paymant_data['payer']['payer_info']['email'];
		$pdata['payment_status'] = $paymant_data['state'];
		$this->payment->addPaymentInfo($pdata);
		echo json_encode(array('status'=>1));
	}
	
	public function getFCAdsNextScreen() {
		$paymant_data = $this->input->post('paydata');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Ads_model','adsmodel');
		$this->load->model('Payment_model','payment');
		$msads = array();
		$msads['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$msads['from_date'] = $this->input->post('from_date').' 00:00:00';
		$msads['to_date'] = $this->input->post('to_date').' 23:59:59';
		$msads['is_paid'] = 0;
		$msads['payment_id'] = '';
		$msads['amount'] = $this->input->post('amount');;
		$msads['status'] = 0;
		$ms_id = $this->adsmodel->addFeaturedCarouselAd($msads);
		$adinfo = $this->adsmodel->getAdsPrice();
		$dates['from_date'] = $this->input->post('from_date');
		$dates['to_date'] = $this->input->post('to_date');
		$last_day = explode("-",$dates['to_date'])[2];
		$week_num = floor(($last_day-1)/7);
		$week_name = "First";
		if($week_num == 0) {
			$week_name = "First";
		} else if ($week_num == 1) {
			$week_name = "Second";
		} else if ($week_num == 2) {
			$week_name = "Third";
		} else if ($week_num == 3) {
			$week_name = "Fourth";
		} else if ($week_num == 4) {
			$week_name = "Fifth";
		}
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'adinfo', $adinfo[0] );
		$this->template->set ( 'ms_id', $ms_id );
		$this->template->set ( 'dates', $dates );
		$this->template->set ( 'weekname', $week_name );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/featuredpayment','',true);
		echo $html;
	}
	
	public function confirmFeaturedCarouselAd() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Ads_model','adsmodel');
		$params = array();
		$params['id'] = $this->input->post('fadid');
		$params['status'] = 1;
		$params['created_date'] = date('Y-m-d H:i:s');
		$this->adsmodel->updateFeaturedCarouselAd($params);
		$fv = array();
		$fv['busi_id'] = $busi_id;
		$fv['fc_id'] = $params['id'];
		$fv['video_id'] = $this->input->post('fc_video_id');
		$fv['from_date'] = $this->input->post('fc_from_date');
		$fv['to_date'] = $this->input->post('fc_to_date');
		$fv['status'] = 1;
		$this->adsmodel->addFeaturedVideo($fv);
		$fc = array();
		$fc['busi_id'] = $busi_id;
		$fc['fc_id'] = $params['id'];
		$fc['catalogue_id'] = $this->input->post('fc_catalogue_id');
		$fc['start_date'] = $this->input->post('fc_from_date');
		$fc['end_date'] = $this->input->post('fc_to_date');
		$fc['status'] = 1;
		$this->adsmodel->addFeaturedCatalogue($fc);
		$fc3d = array();
		$fc3d['busi_id'] = $busi_id;
		$fc3d['fc_id'] = $params['id'];
		$fc3d['product3d_id'] = $this->input->post('fc_3dpro_id');
		$fc3d['from_date'] = $this->input->post('fc_from_date');
		$fc3d['to_date'] = $this->input->post('fc_to_date');
		$fc3d['status'] = 1;
		$this->adsmodel->addFeatured3DPro($fc3d);
		$fitem = array();
		$fitem['busi_id'] = $busi_id;
		$fitem['fc_id'] = $params['id'];
		$fitem['item_id'] = $this->input->post('fc_product_id');
		$fitem['from_date'] = $this->input->post('fc_from_date');
		$fitem['to_date'] = $this->input->post('fc_to_date');
		$fitem['status'] = 1;
		$this->adsmodel->addFeaturedProduct($fitem);
		$fbusi = array();
		$fbusi['busi_id'] = $busi_id;
		$fbusi['fc_id'] = $params['id'];
		$fbusi['start_date'] = $this->input->post('fc_from_date');
		$fbusi['end_date'] = $this->input->post('fc_to_date');
		$fbusi['status'] = 1;
		$this->adsmodel->addFeaturedBusiness($fbusi);
		$map = array();
		$map['status'] = 1;
		$map['ads_id'] = $this->input->post('fadid');
		echo json_encode($map);
	}
	
	public function msCheckout($id) {
		$this->load->model('Ads_model','adsmodel');
		$msad = $this->adsmodel->getMainScreenAd($id);
		$last_day = explode("-",$msad[0]['to_date'])[2];
		$week_num = floor(($last_day-1)/7);
		$week_name = "First";
		if($week_num == 0) {
			$week_name = "First";
		} else if ($week_num == 1) {
			$week_name = "Second";
		} else if ($week_num == 2) {
			$week_name = "Third";
		} else if ($week_num == 3) {
			$week_name = "Fourth";
		} else if ($week_num == 4) {
			$week_name = "Fifth";
		}
		$this->template->set ( 'msad', $msad);
		$this->template->set ( 'weekname', $week_name);
		$this->template->set ( 'page', 'msads' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$this->template->build ('station/pages/subpages/adsPayment');
	}
	
	public function fcCheckout($id) {
		$this->load->model('Ads_model','adsmodel');
		$msad = $this->adsmodel->getFeaturedCarouselAd($id);
		$this->template->set ( 'msad', $msad);
		$this->template->set ( 'page', 'msads' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$this->template->build ('station/pages/subpages/featuredAdsPayment');
	}
	
}