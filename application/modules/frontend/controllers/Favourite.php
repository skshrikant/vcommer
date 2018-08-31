<?php
class Favourite extends MX_Controller {
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
	public function addToFavourite($fav_id,$type) {
		$this->load->model('Myfavorite_model','myfavourite');
		$busi_id = $this->session->userdata('busi_id');
		if(!empty($busi_id)) { 
			$myfav = array();
			$myfav['busi_id'] = $busi_id;
			$myfav['favorite_id'] = $fav_id;
			$myfav['type'] = $type;
			$myfav['is_deleted'] = 0;
			$myfav['created_date'] = date('Y-m-d H:i:s');
			$is_added = $this->myfavourite->addToFavourite($myfav);
			$map = array();
			if($is_added) {
				$map['status'] = 1;
				$map['msg'] = 'Added successfully to your favourite';
			} else {
				$map['status'] = 0;
				$map['msg'] = 'Already added to your favourite.';
			}
		} else {
			$map['msg'] = 'Please login to add to favourite.';
		}
		echo json_encode($map);
	}
	
}