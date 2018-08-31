<?php
class Business extends MX_Controller {
	
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
		$this->load->model('Account_Model');
		$this->lang->load($current_lang.'_home_page_lang', $current_lang);
		$fb_config = parse_ini_file ( APPPATH . "config/FB.ini" );
	} 
	
	public function likeComment($busi_id) {
		$visitor_id = $this->session->userdata('tsuser')['busi_id']; 
		$this->load->model('Business_model','busimodel');
		$mycomment = array();
		if(!empty($visitor_id)) 
		$mycomment = $this->busimodel->getMyLikeComment($busi_id,$visitor_id);
		$comments = $this->busimodel->getBusinessLikeComments($busi_id);
		$this->template->set ( 'comments', $comments );
		$this->template->set ( 'mycomment', $mycomment );
		$this->template->set ( 'page', 'home' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$this->template->build ('desksite/likecomment');
	}
}