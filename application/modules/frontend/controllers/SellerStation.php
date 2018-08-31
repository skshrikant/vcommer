

	
<!-- 	public function index() -->
<!-- 	{ -->
<!-- 		$this->load->view('seller_mystation/deskhome'); -->
<!-- 		//$this->load->view('seller_mystation/myaccount'); -->
<!-- 		$this->load->view('seller_mystation/menufooter'); -->
<!-- 	} -->
<!-- 	public function my_account() -->
<!-- 	{ -->
<!-- 		$this->load->view('seller_mystation/deskhome'); -->
<!-- 		$this->load->view('seller_mystation/myaccount'); -->
<!-- 		$this->load->view('seller_mystation/menufooter'); -->
<!-- 	} -->
<!-- 	public function view_account() -->
<!-- 	{ -->
<!-- 		$this->load->view('seller_mystation/deskhome'); -->
<!-- 		$this->load->view('seller_mystation/viewaccount'); -->
<!-- 		$this->load->view('seller_mystation/menufooter'); -->
<!-- 	} -->

<!-- } -->

<?php
class SellerStation extends MX_Controller {
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
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('mystation')
		->title ( 'TreadStation' )
		->set_partial ( 'footer', 'seller_mystation/menufooter' );
		$this->template->build ('seller_mystation/deskhome');
	}
	public function myAccount()
	{
		$this->template->set ( 'page', 'home' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('mystation')
		->title ( 'TreadStation' )
		->set_partial ( 'footer', 'seller_mystation/menufooter' );
		$this->template->build ('seller_mystation/myaccount');
	}
	
}