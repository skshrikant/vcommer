<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Global_config {
	private $CI;
	private $fb_config;
	private $pusher_key='';

	function load_config() {
		$this->CI = &get_instance();
		$fb_config = parse_ini_file(APPPATH."config/FB.ini");
		$this->CI->load->config('pusher');
		$this->CI->load->library('common');
		if($this->CI->router->directory=="../modules/frontend/controllers/") {
			$this->CI->template->set('global_url',site_url());
			$this->CI->template->set('asset_url',asset_url());
			
			$this->CI->load->library('user_agent');
			$tsuserdata = $this->CI->session->userdata('tsuser');
			$this->CI->template->set('tsuserid',$tsuserdata['userid']);
			$this->CI->template->set('tsusername',$tsuserdata['name']);
			$this->CI->template->set('tsprefix',$tsuserdata['prefix']);
			$this->CI->template->set('tsemail',$tsuserdata['email']);
			$this->CI->template->set('tscategory_id',$tsuserdata['category_id']);
			$this->CI->template->set('ts_subcat_id',$tsuserdata['subcat_id']);
			$this->CI->template->set('tscategory',$tsuserdata['category']);
			$this->CI->template->set('tssubcategory',$tsuserdata['subcategory']);
			$this->CI->template->set('tsuser_role',$tsuserdata['user_role']);
			$this->CI->template->set('tsplanid',$tsuserdata['plan_id']);
			$this->CI->template->set('google_map_key',$fb_config['google_api_key']);
			if(!empty($tsuserdata['reg_date'])) { 
				$this->CI->template->set('tsreg_date',$tsuserdata['reg_date']);
			} else {
				$this->CI->template->set('tsreg_date',date('Y-m-d H:i:s'));
			}
			
			$max_subuser = 5;
			$max_vc = 0;
			$max_videos = 0;
			$max_3dpro = 0;
			$max_filemb = 0;
			$this->CI->load->model('Package_model','package');
			$plan_id = $tsuserdata['plan_id'];
			$cust_type = $tsuserdata['category_id'];
			$plandata = $this->CI->package->getPlanItemById($plan_id,$cust_type);
			foreach($plandata as $row)
			{
			    switch ($row['code']) {
			        case 'su':
			            $max_subuser = $row['intvalue'];
			        break;			        
			        case 'vc':
			            $max_vc = $row['intvalue'];
			        break;			        
			        case 'vp':
			            $max_videos = $row['intvalue'];
			        break;			        
			        case 'ri3p':
			            $max_3dpro = $row['intvalue'];
			        break;			        
			        case 'mf':
			            $max_filemb = $row['intvalue'];
			        break;
			    }
			}
			
			$busi_id = $this->CI->session->userdata('busi_id');
			$this->CI->load->model('Product_Model','product');
			$this->CI->template->set('max_subuser',$max_subuser);
			$this->CI->template->set('max_vc',$max_vc);
			$this->CI->template->set('max_videos',$max_videos);
			$this->CI->template->set('max_3dpro',$max_3dpro);
			$this->CI->template->set('max_filemb',$max_filemb);
			$activstatus = $this->CI->session->userdata('activstatus');
			$this->CI->template->set('activstatus',$activstatus);
			$registration_step= $this->CI->session->userdata('registration_step');
			$this->CI->template->set('registration_step',$registration_step);
			$this->CI->template->set('busi_id',$busi_id);
			$profile_img = $this->CI->session->userdata('profile_img');
			$this->CI->template->set('profile_img',$profile_img);
			$tsmybstage = 0;
			if($tsuserdata['userid'] > 0) {
				$bstage = $this->CI->product->getProductStage($busi_id);
				$tsmybstage = 0;
				if(count($bstage) > 0)
				$tsmybstage = $bstage[0]['step'];
			} else {
				$bstage = array();
				$tsmybstage = 0;
			}
			if(count($bstage) > 0) {
				if($tsuserdata['category_id'] == 1) {
					$tsmybstage = $bstage[0]['step'];
				} else {
					if($bstage[0]['step'] >= 2) {
						$tsmybstage = 4;
					}
				}
			}
			$this->CI->template->set('myds_stage',$tsmybstage);
			if(!empty($busi_id)) {
				$this->CI->load->library('mylib/orderLib');
				//$gblmyorders     = $this->CI->orderlib->getOrderByBusiId($busi_id);
				$gblmyorders     = $this->CI->common->getTotalMyOrderCount();
				
				$gblmyrequests   = $this->CI->common->getTotalAddToCommunityCount();
				$gblmyinquiries  = $this->CI->common->getTotalInquiryCount();
				$gblmyoffers     = $this->CI->common->getTotalOfferCount();

				$this->CI->template->set('gbloffers',$gblmyoffers);
				$this->CI->template->set('gblinquiries',$gblmyinquiries);
				$this->CI->template->set('gblorders',count($gblmyorders));
				$this->CI->template->set('gblrequests',$gblmyrequests);				
			} else {
				$this->CI->template->set('gbloffers',0);
				$this->CI->template->set('gblinquiries',0);
				$this->CI->template->set('gblorders',0);
				$this->CI->template->set('gblrequests',0);
			}
		}
	}

	function initilize_config() {
		$this->CI->template->set('base_url',base_url());
		$this->CI->load->library('session');
		$this->CI->load->helper('cookie');
	}

}
