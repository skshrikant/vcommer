<?php
class Station extends MX_Controller {
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
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$busi_id = $this->session->userdata('busi_id');
		if(empty($busi_id)) {
			redirect(base_url());
		}
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$this->load->library('mylib/CommunityLib');
		$this->load->library('mylib/MyfavoriteLib');
		$this->load->library('mylib/InquiryLib');
		$this->load->library('mylib/OfferLib');
		$this->load->library('mylib/orderLib');
		$this->load->model('Product_Model','product');
		
		$totalcount = $this->common->getTotalCountForAlert($busi_id);
		$this->template->set ( 'totalcount', $totalcount);
		$this->template->set('cust_type',$cust_type);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/mystation');
	}
	public function shipperStation() {
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$busi_id = $this->session->userdata('busi_id');
		if(empty($busi_id)) {
			redirect(base_url());
		}
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$this->load->library('mylib/CommunityLib');
		$this->load->library('mylib/MyfavoriteLib');
		$this->load->library('mylib/InquiryLib');
		$this->load->library('mylib/OfferLib');
		$this->load->library('mylib/orderLib');
		$this->load->model('Product_Model','product');
		$totalcount = $this->common->getTotalCountForAlert($busi_id);
		$this->template->set ( 'totalcount', $totalcount);
        $allposts = $this->product->communityPostListByAlluser($busi_id);
		$this->template->set ('allposts', $allposts);
		$this->template->set('cust_type',$cust_type);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/shipper_mystation');
	}
	public function buyerStation() {
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$busi_id = $this->session->userdata('busi_id');
		if(empty($busi_id)) {
			redirect(base_url());
		}
		$this->load->library('mylib/CommunityLib');
		$this->load->library('mylib/MyfavoriteLib');
		$this->load->library('mylib/InquiryLib');
		$this->load->library('mylib/OfferLib');
		$this->load->library('mylib/orderLib');

		$this->load->model('Product_Model','product');
		$totalcount = $this->common->getTotalCountForAlert($busi_id);

		$this->template->set ( 'totalcount', $totalcount);
		// $this->template->set ('allposts', $allposts);
		$this->template->set('cust_type',$cust_type);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/buyer_mystation');
	}


	/// get single getCommunityPostDetail post by id
		public function getCommunityPostDetail($postid) {
		$busi_id = $this->session->userdata('busi_id');
		$myposts = $this->product->getPostDetailsById($postid);
		$this->template->set ('allpost', $myposts[0]);
		$this->template->set ( 'page', 'community' );
		$this->template->set ( 'browser_icon', 'community.ico' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/post_detail','',true);
		echo $html;
	}
	

	public function getCommunityRealtimePosts() {
		$busi_id = $this->session->userdata('busi_id');
		$allposts = $this->product->communityPostListByAlluser($busi_id);
		$this->template->set ('busi_id', $busi_id);
		$this->template->set ('allposts', $allposts);
		$this->template->set ( 'page', 'community' );
		$this->template->set ( 'browser_icon', 'community.ico' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('community/pages/posts','',true);
		$myposts = $this->product->communityPostListByBusinessId($busi_id);
		$this->template->set ('myposts', $myposts);
		$this->template->set ('mypost_count', count($myposts));
		$this->template->set ( 'page', 'community' );
		$this->template->set ( 'browser_icon', 'community.ico' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html1 = $this->template->build ('station/pages/myposts','',true);
		echo json_encode(array('html1'=>$html,'html2'=>$html1));
	}


	public function searchMyCommunityMemberByName() {
		$this->load->model('Community_Model','communitymodel');
		$name = $this->input->get('name');
		$busi_id = $_SESSION ['busi_id'];
		$result = $this->communitymodel->searchCommunityMember($busi_id,$name);
		$this->template->set ( 'communitymember', $result);
		$this->template->set ( 'page', 'community' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/postpages/mymembers','',true);
		echo json_encode(array('html'=>$html,'members'=>count($result)));
	}

	/*End my  funcrion post*/
	
	public function myaccount() {
		$this->load->library('mylib/UserLib');
		$id = $this->session->userdata('tsuser')['userid'];
		$is_subuser = $this->session->userdata('is_subuser');
		$subuserid = $this->session->userdata('subuserid');
		$subuserdata = array();
		if($subuserid != 0)
		{
			$subuserdata  = $this->userlib->getSubUserById($subuserid);
		}
		$this->template->set('subuserdata',$subuserdata);
		$userdata = $this->userlib->getUserDataByAfterRegistrationId($id);
		
		$contact_person = "";
		if(count($userdata)  > 0)
		{
			$contact = array();
			$contact['busi_id']  = $userdata[0]['busi_id'];
			$contactdata = $this->userlib->getContactPersonByBusiId($contact);
			if(count($contactdata) > 0)
			{
				$contact_person = $contactdata[0]['name_prefix']." ".$contactdata[0]['name'];
			} else {
				$contact_person = $userdata[0]['name_prefix']." ".$userdata[0]['name'];
			}
		}
		
		$this->template->set('contact_person',$contact_person);
		$this->template->set('userdata',$userdata);
		
		$subuser = $this->userlib->getSubUserByUserId($id);
		$this->template->set ('subuser',$subuser);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/myaccount','',true);
		echo $html;
	}
	public function changepassword() {

		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/changepassword','',true);
		echo $html;
	}
	public function editpassword() {
		
		$param = $this->input->post('data');
		$id = $this->session->userdata('tsuser')['userid'];
		$is_subuser = $this->session->userdata('is_subuser');
		$subuserid = $this->session->userdata('subuserid');
		$data = array();
		$data['oldpassword'] = $param['oldpassword'];
		if($subuserid == 0) {
			$data['id'] = $id;
		} else {
			$data['id'] = $subuserid;
		}
		$this->load->library('mylib/UserLib');
		$response= $this->userlib->checkCurrentPassword($data);
		$map = array();
		if($response['status'] == 1){
			$editdata = array();
			if($subuserid == 0) {
				$editdata['id'] = $id;
			} else {
				$editdata['id'] = $subuserid;
			}
			$editdata['text_password'] = $param['text_password'];
			$editdata['password'] = md5($param['text_password']);
			$boolvalue = $this->userlib->updateUser($editdata);
			if(count($boolvalue) > 0)
			{
				$map['status'] = 1;
				$map['msg'] = "Password updated successfully";
			}
			else
			{
				$map['status'] = 0;
				$map['msg'] = "Failed to change password";
			}
		}
		else
		{
			$map = $response;
		}
		echo json_encode($map);
	}
	
	
	public function viewmyaccount() {
		$id = $this->session->userdata('tsuser')['userid'];
		$this->load->library('mylib/UserLib');
		$subuser = $this->userlib->getSubUserByUserId($id);
		$this->template->set('subuser',$subuser);
		$personalinfo = $this->userlib->getUserDataByAfterRegistrationId($id);
		$this->template->set('personalinfo',$personalinfo);
		$usersubcategory = $this->userlib->getUserSubCategories();
		$this->template->set('usersubcategory',$usersubcategory);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/editmyaccount','',true);
		echo $html;
	}
	public function accountPersonalInfo() {
		$id = $this->session->userdata('tsuser')['userid'];
		$this->load->library('mylib/UserLib');
		$personalinfo = $this->userlib->getUserDataByAfterRegistrationId($id);
		$usersubcategory = $this->userlib->getUserSubCategories();
		$this->template->set('personalinfo',$personalinfo);
		$this->template->set('usersubcategory',$usersubcategory);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/personalinfo','',true);
		echo $html;
	}
	public function accountCompanyInfo() {
		$this->load->library('mylib/TradLib');
		$this->load->model('Product_Model','product');
		$id = $this->session->userdata('tsuser')['userid'];
		$busi_id= $this->session->userdata('busi_id');
		$this->load->library('mylib/UserLib');
		$companyinfo = $this->userlib->getUserDataByAfterRegistrationId($id);
		$contact_person = "";
		if(count($companyinfo)  > 0)
		{
			$contact = array();
			$contact['busi_id']  = $companyinfo[0]['busi_id'];
			$contactdata = $this->userlib->getContactPersonByBusiId($contact);
			if(count($contactdata) > 0)
			{
				$contact_person = $contactdata[0]['name_prefix']." ".$contactdata[0]['name'];
			} else {
				$contact_person = $companyinfo[0]['name_prefix']." ".$companyinfo[0]['name'];
			}
		}
		$this->template->set('contact_person',$contact_person);
		$this->template->set('companyinfo',$companyinfo);
		$this->load->library('mylib/BusinessLib');
		$routeinfo = $this->businesslib->getBusinessRoutes($busi_id);
		$this->template->set('myrouteinfo',$routeinfo); 
		$payment_terms = $this->tradlib->getTradePaymentTerms();
		$this->template->set('payment_terms',$payment_terms); 
		$tradepayment_terms = $this->tradlib->getTradePaymentTermsByBusinessId($busi_id);
		$this->template->set('tradepayment_terms',$tradepayment_terms);
		$contactpersone = $this->businesslib->getContactperson($busi_id);
		$this->template->set('contactpersone',$contactpersone);
		$branches = $this->businesslib->getBusinessBranches($busi_id);
		$this->template->set('branches',$branches);
		$countries = $this->product->getAllCountries();
		$this->template->set ( 'countries', $countries );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/companyinfo','',true);
		echo $html;
	}
	public function accountFactoryInfo() {
		
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/FactoryLib');
		$factoryinfo = $this->factorylib->getBusinessFactoryInfoById($busi_id);
		$this->template->set('factoryinfo',$factoryinfo);
		$fact_id = $factoryinfo[0]['id'];
		$user_rnd = $this->factorylib->getUserRNDtype($fact_id);
		$this->template->set('user_rnd',$user_rnd);
		$rnd_type = $this->factorylib->getRNDtype();
		$this->template->set('rnd_type',$rnd_type);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/factoryinfo','',true);
		echo $html;
	}
	
	public function accountTradeInfo() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/TradLib');
		$tradeinfo = $this->tradlib->getBusinessTradeInfoById($busi_id);
		$trad_id = $tradeinfo[0]['id'];
		$this->template->set('tradeinfo',$tradeinfo);
		$trademarket = $this->tradlib->getTradeMarketByTradId($trad_id);
		$this->template->set('trademarket',$trademarket);
		$tradeinternationaltrad = $this->tradlib->getTradeInternationalTradByTradId($trad_id);
		$this->template->set('tradeinternationaltrad',$tradeinternationaltrad);
		$tradepaymentcurrency = $this->tradlib->getTradePaymentCurrencyByTradId($trad_id);
		$this->template->set('tradepaymentcurrency',$tradepaymentcurrency);
		$tradepayment_terms = $this->tradlib->getTradePaymentTermsByTradId($trad_id);
		$this->template->set('tradepayment_terms',$tradepayment_terms);
		
		$market = $this->tradlib->getTradeMarket();
		$this->template->set('market',$market);
		$internationaltrad = $this->tradlib->getInternationalTrad();
		$this->template->set('internationaltrad',$internationaltrad);
		$paymentcurrency = $this->tradlib->getTradePaymentCurrency();
		$this->template->set('paymentcurrency',$paymentcurrency);
		$payment_terms = $this->tradlib->getTradePaymentTerms();
		$this->template->set('payment_terms',$payment_terms); 
		
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/tradeinfo','',true);
		echo $html;
	}
	
	public function accountCertificateInfo() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/CertificateLib');
		$certificateinfo = $this->certificatelib->getBusinessCertificateInfoById($busi_id);
		$this->template->set('certificateinfo',$certificateinfo);
		$certificate_type = $this->certificatelib->getCertificateType();
		$this->template->set ( 'certificate_type', $certificate_type);
		$morecertificate = $this->certificatelib->getMoreCertificate($busi_id);
		$this->template->set ( 'morecertificate', $morecertificate);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/certificateinfo','',true);
		echo $html;
	}
	
	public function accountSubuserInfo() {
		$this->load->library('mylib/UserLib');
		$id = $this->session->userdata('tsuser')['userid'];
		$subuser = $this->userlib->getSubUserByUserId($id);
		$this->template->set ('subuser',$subuser);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/subusers','',true);
		echo $html;
	}
	public function editprofile()
	{
		$errors = array ();
		$this->load->library ( 'form_validation' );
		$errorMsg = array ();
		$map = array();
		$err_num = 0;
		$plan_id= $this->session->userdata('tsuser')['plan_id'];
		$userId = $this->session->userdata('tsuser')['userid'];
		$busi_id = $this->session->userdata('busi_id');
		
		$param = $this->input->post('data');
		
		$this->load->library('mylib/UserLib');
		$userinfo  = array();
		$userinfo['alternative_email'] = $param['alternative_email'];
		$userinfo['country'] = $param['country'];
		$userinfo['province'] = $param['province'];
		$userinfo['city'] = $param['city'];
		$userinfo['street'] = $param['street'];
		$userinfo['mobile_code'] = $param['mobile_code'];
		$userinfo['mobile_number'] = $param['mobile_number'];
		$userinfo['timezone'] = $param['timezone'];
		$userinfo['position'] = $param['position'];
		$userinfo['id'] = $param['userinfo_id'];
		
		$user  = array();
		$user['name_prefix'] = $param['name_prefix'];
		$user['name'] = $param['name'];
		$user['user_subcategory_id'] = $param['user_subcategory_id'];$this->session->userdata('tsuser')['userid'];
		$user['id'] = $userId;
		$result = $this->userlib->updateUser($user);
		
		
		$userinfo['profile_image'] =  $param['profilepath'];
		$this->session->unset_userdata('profile_img');
		$this->session->set_userdata('profile_img', $userinfo['profile_image']);
		$this->userlib->updateUserInformation($userinfo);
		
		$map['status'] = 1;
		$map['msg'] = "Personal Profile updated successfully";
		$map['proimg'] = $param['profilepath'];
		
		$this->load->library('mylib/General');
		$subcategory = $this->general->getUserSubCategoriesById($param['user_subcategory_id']);
		$subcategory_name = $subcategory[0]['sub_category'];
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$category_name = $this->session->userdata('tsuser')['category'];
		$email = $this->session->userdata('tsuser')['email'];
		$user_role = $this->session->userdata('tsuser')['user_role'];
		
		$this->session->unset_userdata('tsuser');
		
		$userinfo = array();
		$userinfo['name'] = $param['name'];
		$userinfo['userid'] = $userId;
		$userinfo['prefix'] = $param['name_prefix'];
		$userinfo['email'] = $email;
		$userinfo['category_id'] = $category_id;
		$userinfo['subcat_id'] = $param['user_subcategory_id'];
		$userinfo['category'] = $category_name;
		$userinfo['subcategory'] = $subcategory_name;
		$userinfo['user_role'] = $user_role;
		$userinfo['plan_id'] = $plan_id;
		$userinfo['busi_id'] = $busi_id;
		
		$this->session->set_userdata('tsuser',$userinfo);
		echo json_encode($map);
	}
	public function  editCompanyInfo()
	{
		$this->load->model('Account_Model');
		$this->load->library('mylib/TradLib');
		$errors = array ();
		$this->load->library ( 'form_validation' );
		$errorMsg = array ();
		$map = array();
		$err_num = 0;
		$userId = $this->session->userdata('tsuser')['userid'];
		$busi_id = $this->session->userdata('busi_id');
		$param = $this->input->post('data');
		$this->load->library('mylib/BusinessLib');
		$businessinfo = array();
		$companyinfo = array();
		$payment = $this->input->post('payment');
		$contactarr = array();
		
		// Branches

		$prebranch = array();
		$prebranch['busi_id'] = $busi_id;
		
		$this->Account_Model->deleteBusinessBranch($prebranch);
		
		$country = $this->input->post("bcountry");
		$province = $this->input->post("bprovince");
		$city = $this->input->post("bcity");
		$street = $this->input->post("bstreet");
		$tel_code = $this->input->post("bcountry_code");
		$city_code = $this->input->post("bcity_code");
		$telephone_number1 = $this->input->post("btelephone1");
		$telephone_number2 = $this->input->post("btelephone2");
		$email = $this->input->post("bemail");
		$fax = $this->input->post("bfax");
		$this->load->model('Account_Model');
		$branches = array();
		if (is_array($country) || is_object($country))
		{
			foreach ($country as $key=>$count) {
				$branch = array();
				$branch['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$branch['country'] = $country[$key];
				$branch['province'] = $province[$key];
				$branch['city'] = $city[$key];
				$branch['street'] = $street[$key];
				$branch['country_code'] = $tel_code[$key];
				$branch['city_code'] = $city_code[$key];
				$branch['telephone1'] = $telephone_number1[$key];
				$branch['telephone2'] = $telephone_number2[$key];
				$branch['fax'] = $fax[$key];
				$branch['email'] = $email[$key];
				$branches[] = $branch;
			}
		}
		if(count($branches) > 0)
			$this->Account_Model->addMoreBranches($branches);
		
		
		// Contact Person
		$contactperson = $this->input->post('contact_person');
		$contactarr['name_prefix'] = $this->input->post('contactpersoneprefix');
		$contactarr['name'] = $this->input->post('contactpersone_name');
		$contactarr['email'] = $this->input->post('contact_person_email');
		$contactarr['mobile_code'] = $this->input->post('contact_person_code');
		$contactarr['mobile'] = $this->input->post('contact_person_mobile');
		$contactarr['position'] = $this->input->post('contact_person_position');
		$contactarr['text_password'] = $this->input->post('contact_password');
		$contactarr['password'] = md5($this->input->post('contact_password'));
		$contactarr['picture'] = $this->input->post('contact_imgpath');
		$contactarr['busi_id'] = $busi_id;
		if($contactperson == 1)
		{
			$companyinfo['contact_person_flag'] = $contactperson;
			$companyinfo['contact_person'] = $this->session->userdata('tsuser')['name'];
			
			$contactarr['busi_id'] = $busi_id;
			$boolvaluecontact = $this->Account_Model->deleteBusinessContact($contactarr);
			
			$paramuser = array();
			$paramuser['user_role'] = 3;
			$paramuser['busi_id'] = $busi_id;
			$usercontactdata = $this->Account_Model->getUserByBusiIdAndUserRole($paramuser);
			
			if(count($usercontactdata) >0 )
			{
				$userinfo = array();
				$userinfo['user_id'] = $usercontactdata[0]['id'];
				$userdata = $this->Account_Model->deleteUserInfo($userinfo);
			}
			
			$user = array();
			$user['busi_id'] = $busi_id;
			$user['user_role'] = 3;
			$userdata = $this->Account_Model->deleteUser($user);
			
			$adminuser = array();
			$adminuser['user_role'] = 1;
			$adminuser['busi_id'] = $busi_id;
			$adminuser['is_contactperson'] = 1;
			$userdata = $this->Account_Model->updateUser($adminuser);
			
		} else if($contactperson == 2) {
			$companyinfo['contact_person_flag'] = $contactperson;
			$contact = $this->businesslib->getContactperson($busi_id);
			if(count($contact) > 0 ) 
			{
			 	$this->businesslib->updateBusinessContact($contactarr);
			 	
			 	$user = array();
			 	$user['busi_id'] = $busi_id;
			 	$user['email'] = $this->input->post('contact_person_email');
			 	$user['name_prefix'] = $this->input->post('contactpersoneprefix');
			 	$user['name'] = $this->input->post('contactpersone_name');
			 	$user['password'] = md5($this->input->post('contact_password'));
			 	$user['text_password'] = $this->input->post('contact_password');
			 	$user['user_role'] = 3;
			 
			 	$data =  $this->load->library('mylib/UserLib');
			 	$userdata = $this->Account_Model->updateUser($user);
			 	
			 	$paramuser = array();
			 	$paramuser['user_role'] = 3;
			 	$paramuser['busi_id'] = $busi_id;
			 	$usercontactdata = $this->Account_Model->getUserByBusiIdAndUserRole($paramuser);
			 	
			 	$userinfo =  array();
			 	if(count($usercontactdata) >0 )
			 	{
				 	$userinfo['user_id'] = $usercontactdata[0]['id'];
				 	$userinfo['mobile_code'] = $this->input->post('contact_person_code');
				 	$userinfo['mobile_number'] = $this->input->post('contact_person_mobile');
				 	$userinfo['position'] = $this->input->post('contact_person_position');
				 	$userinfo['profile_image'] = $this->input->post('contact_imgpath');
				 	$userinfo['created_date'] = date('Y-m-d');
				 	
				 	$lastInsertuserinfoId = $this->Account_Model->updateUserInformation($userinfo);
			 	}
			 	
			} else {
				$contactarr['created_date'] = date('Y-m-d H:i:s');
				$contactdetail = $this->Account_Model->insertIntoContactPersone($contactarr);
				$user = array();
				$user['busi_id'] = $busi_id;
				$user['email'] = $this->input->post('contact_person_email');
				$user['name_prefix'] = $this->input->post('contactpersoneprefix');
				$user['name'] = $this->input->post('contactpersone_name');
				$user['user_role'] = 3;
				$user['user_category_id'] = $this->session->userdata('tsuser')['category_id'];
				$user['user_subcategory_id'] = $this->session->userdata('tsuser')['subcat_id'];
				$user['admin_user_id'] = $this->session->userdata('tsuser')['userid'];
				$user['account_activated'] = $this->session->userdata('activstatus');
				$user['password'] = md5($this->input->post('contact_password'));
				$user['text_password'] = $this->input->post('contact_password');
				$user['registration_step'] = $this->session->userdata('registration_step');
				$user['is_contactperson'] = 1;
				$user['is_subuser'] = 0;
				$user['created_date'] = date('Y-m-d H:i:s');
				$data =  $this->load->library('mylib/UserLib');
				$lastInsertId = $this->userlib->insertIntoUsers($user);
				
				$userinfo =  array();
				$userinfo['user_id'] = $lastInsertId;
				$userinfo['mobile_code'] = $this->input->post('contact_person_code');
				$userinfo['mobile_number'] = $this->input->post('contact_person_mobile');
				$userinfo['position'] = $this->input->post('contact_person_position');
				$userinfo['profile_image'] = $this->input->post('contact_imgpath');
				$userinfo['created_date'] = date('Y-m-d');
				
				$lastInsertuserinfoId = $this->Account_Model->insertProfileInfo($userinfo);
			}
			$adminuser = array();
			$adminuser['user_role'] = 1;
			$adminuser['busi_id'] = $busi_id;
			$adminuser['is_contactperson'] = 0;
			$userdata = $this->Account_Model->updateUser($adminuser);
			
		}
		// End Contact
		
		// business Routes
		$route = array();
		$from_location = $this->input->post("from_shipping_port");
		$to_location= $this->input->post("to_shipping_port");
		$from_country = $this->input->post("from_country_id");
		$to_country = $this->input->post("to_country_id");
		$this->businesslib->deleteBusinessRoutes($busi_id);
		foreach ($from_country as $key=>$country)
		{
			if($country > 0) {
				$route['from_country_id'] = $country;
			} else {
				$route['from_country_id'] = 0;
			}
			if($to_country[$key] > 0) {
				$route['to_country_id'] = $to_country[$key];
			} else {
				$route['to_country_id'] = 0;
			}
			$route['from_location'] = $from_location[$key];
			$route['to_location'] = $to_location[$key];
			$route['busi_id'] = $busi_id;
			$route['created_date'] = date('Y-m-d H:i:s');
			$boolvalueroute = $this->businesslib->insertBusinessRoutes($route);
		}
		// End Routes

		$businessinfo['business_logo'] =  $param['profilepath'];
		$businessinfo['id'] = $busi_id;
		$businessinfo['company_name'] = $param['company_name'];
		$businessinfo['license_company_name'] = $param['license_company_name'];
		$businessinfo['company_country'] = $param['company_country'];
		$businessinfo['company_province'] = $param['company_province'];
		$businessinfo['company_city'] = $param['company_city'];
		$businessinfo['company_street'] = $param['company_street'];
		$businessinfo['license_company_country'] = $param['license_company_country'];
		$businessinfo['license_company_province'] = $param['license_company_province'];
		$businessinfo['license_company_city'] = $param['license_company_city'];
		$businessinfo['license_company_street'] = $param['license_company_street'];
		$businessinfo['telephone_code'] = $param['telephone_code'];
		$businessinfo['telephone_city_code'] = $param['telephone_city_code'];
		$businessinfo['telephone_number'] = $param['telephone_number'];
		$businessinfo['telephone_number1'] = $param['telephone_number1'];
		$businessinfo['fax'] = $param['fax'];
		$businessinfo['p_o_box'] = $param['p_o_box'];
		$businessinfo['fax'] = $param['fax'];
		$businessinfo['website'] = $param['website'];
		$businessinfo['company_email'] = $param['company_email'];
		$businessinfo['annual_trad_volume'] = $param['annual_trad_volume'];
		if(isset($param['company_rendom_carousel'])) {
			$businessinfo['company_rendom_carousel'] = $param['company_rendom_carousel'];
		}
		
		$boolvalue = $this->businesslib->updateBusinessInfo($businessinfo);
		
		$companyinfo['busi_id'] = $busi_id;
		$companyinfo['year_of_registration'] = $param['year_of_registration'];
		$companyinfo['company_owner_name'] = $param['company_owner_name'];
		$companyinfo['company_size'] = $param['company_size'];
		$companyinfo['total_no_of_emp'] = $param['total_no_of_emp'];
		$companyinfo['company_introduction'] = $param['company_introduction'];
		$companyinfo['hot_presentation'] = $param['hot_presentation'];
		$companyinfo['account_no'] = $param['account_no'];
		$companyinfo['account_name'] = $param['account_name'];
		$companyinfo['bank_name'] = $param['bank_name'];
		$companyinfo['bank_code'] = $param['bank_code'];
		$companyinfo['bank_address'] = $param['bank_address'];
		$companyinfo['swift_code'] = $param['swift_code'];
		$boolvalue1 = $this->businesslib->updateCompanyInfoByBusiId($companyinfo);
		
		//payment term 
		if(!empty($payment)) {
				$userpayment = array();
				$userpayment['busi_id'] = $busi_id;
				$result2 = $this->tradlib->deletePaymentByBusinessId($userpayment);
				$paymentarr = array();
				for($i=0;$i<count($payment);$i++)
				{
					$paymentarr[$i]['payment_terms_id'] = $payment[$i];
					$paymentarr[$i]['trad_id'] = 0;
					$paymentarr[$i]['busi_id'] = $busi_id;
					$paymentarr[$i]['created_date'] = date('Y-m-d H:i:s');
				}
				if(count($paymentarr) > 0) {
					$response2 = $this->tradlib->saveUserPaymentTerms($paymentarr);
				}
		}
		// end payment
		
	
		
	
		
		if(count($boolvalue) > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Business Information updated successfully";
			
		}
		else
		{
			$map['status'] = 0;
			$map['msg'] = "Failed to change Business Information";
		}
		echo json_encode($map);
		
	}
	public function editFactoryInfo()
	{
		$errors = array ();
		$this->load->library ( 'form_validation' );
		$errorMsg = array ();
		$map = array();
		$err_num = 0;
		$userId = $this->session->userdata('tsuser')['userid'];
		$busi_id = $this->session->userdata('busi_id');
		$param = $this->input->post('data');
		$rndtype = $this->input->post('rndtype');
		$this->load->library('mylib/FactoryLib');
		$factoryinfo = array();
		$factoryinfo['busi_id'] = $busi_id;
		$factoryinfo['fact_province'] = $param['fact_province'];
		$factoryinfo['fact_city'] = $param['fact_city'];
		$factoryinfo['fact_street'] = $param['fact_street'];
		$factoryinfo['fact_license_province'] = $param['fact_license_province'];
		$factoryinfo['fact_license_city'] = $param['fact_license_city'];
		$factoryinfo['fact_license_street'] = $param['fact_license_street'];
		$factoryinfo['telephone_code'] = $param['telephone_code'];
		$factoryinfo['telephone_city_code'] = $param['telephone_city_code'];
		$factoryinfo['telephone'] = $param['telephone'];
		$factoryinfo['fact_size'] = $param['fact_size'];
		$factoryinfo['no_of_production_line'] = $param['no_of_production_line'];
		$factoryinfo['production_lead_time'] = $param['production_lead_time'];
		$factoryinfo['no_of_rnd_staff'] = $param['no_of_rnd_staff'];
		$factoryinfo['no_of_control_staff'] = $param['no_of_control_staff'];
		$factoryinfo['rnd_capacity'] = $param['rnd_capacity'];
		$factoryinfo['rnd_capacity_type'] = implode(',',$rndtype);
		$factoryinfo['annual_turnover'] = $param['annual_turnover'];
		$this->factorylib->updateFactoryInfoByBusinessId($factoryinfo);
		
			$rnd = array();
			$rnd['factory_id'] = $param['factory_id'];
			$result = $this->factorylib->deleteRNDtypeByFactoryId($rnd);
			$rndtypearr = array();
			for($i=0;$i<count($rndtype);$i++)
			{
				$rndtypearr[$i]['rnd_type_id'] = $rndtype[$i];
				$rndtypearr[$i]['factory_id'] = $param['factory_id'];
				$rndtypearr[$i]['created_date'] = date('Y-m-d H:i:s');
			}
			$result = $this->factorylib->saveRndType($rndtypearr);
			$map['status'] = 1;
			$map['msg'] = "Factory Information updated successfully";
// 		}
// 		else
// 		{
// 			$map['status'] = 0;
// 			$map['msg'] = "Failed to change Factory Information";
// 		}
		echo json_encode($map);
		
	}
	public function editTradeInfo()
	{
		$errors = array ();
		$errorMsg = array ();
		$map = array();
		$err_num = 0;
		$userId = $this->session->userdata('tsuser')['userid'];
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/TradLib');
		$tradinfo =array();
		$market = $this->input->post('market');
		$port1 = $this->input->post('port1');
		$port2 = $this->input->post('port2');
		$port3 = $this->input->post('port3');
		$trade= $this->input->post('trade');
		$payment= $this->input->post('payment');
		$currency= $this->input->post('currency');
		$trade_id= $this->input->post('trad_id');
		
		$tradeinfo['busi_id'] = $busi_id;
		$tradeinfo['main_market_ids'] = implode(',',$market);
		$tradeinfo['part1'] = $port1;
		$tradeinfo['part2'] = $port2;
		$tradeinfo['part3'] = $port3;
		$tradeinfo['terms_of_international_trade_ids'] = implode(',',$trade);
		$tradeinfo['terms_of_payment_ids'] = implode(',',$payment);
		$tradeinfo['payment_currency_ids'] = implode(',',$currency);
		$boolvalue = $this->tradlib->updateTradInfoBybusinessId($tradeinfo);
		
		$usermarket = array();
		$usermarket['trad_id'] = $trade_id;
		$result = $this->tradlib->deleteMarketByTradeId($usermarket);
		
		$usertrade = array();
		$usertrade['trad_id'] = $trade_id;
		$result1 = $this->tradlib->deleteTradeByTradeId($usertrade);
		
		$userpayment = array();
		$userpayment['trad_id'] = $trade_id;
		$result2 = $this->tradlib->deletePaymentByTradeId($userpayment);
		
		$usercurrency = array();
		$usercurrency['trad_id'] = $trade_id;
		$result3 = $this->tradlib->deleteCurrencyByTradeId($usercurrency);
		
		$marketarr = array();
		for($i=0;$i<count($market);$i++)
		{
			$marketarr[$i]['market_id'] = $market[$i];
			$marketarr[$i]['trad_id'] = $trade_id;
			$marketarr[$i]['created_date'] = date('Y-m-d H:i:s');
		}
		$response = $this->tradlib->saveUserMarket($marketarr);
		
		$tradearr = array();
		for($i=0;$i<count($trade);$i++)
		{
			$tradearr[$i]['international_trad_id'] = $trade[$i];
			$tradearr[$i]['trad_id'] = $trade_id;
			$tradearr[$i]['created_date'] = date('Y-m-d H:i:s');
		}
		$response1 = $this->tradlib->saveUserInternationaltrad($tradearr);
		
		$paymentarr = array();
		for($i=0;$i<count($payment);$i++)
		{
			$paymentarr[$i]['payment_terms_id'] = $payment[$i];
			$paymentarr[$i]['trad_id'] = $trade_id;
			$paymentarr[$i]['created_date'] = date('Y-m-d H:i:s');
		}
		$response2 = $this->tradlib->saveUserPaymentTerms($paymentarr);
		
		$currencyarr = array();
		for($i=0;$i<count($currency);$i++)
		{
			$currencyarr[$i]['payment_currency_id'] = $currency[$i];
			$currencyarr[$i]['trad_id'] = $trade_id;
			$currencyarr[$i]['created_date'] = date('Y-m-d H:i:s');
		}
		$response3 = $this->tradlib->saveUserPaymentCurrency($currencyarr);
		
		$map['status'] = 1;
		$map['msg'] = "Trade Information updated successfully";
		
		echo json_encode($map);
		
	}
	public function editCertificateInfo()
	{
		$this->load->library('mylib/CertificateLib');
		$errors = array ();
		$errorMsg = array ();
		$map = array();
		$err_num = 0;
		$user_id= $this->session->userdata('tsuser')['userid'];
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/CertificateLib');
		$param = $this->input->post('data');
		$certificateinfo = array();
		$certificatemoreimg = array();
		$arrcerti_type = $this->input->post('certificate_type');
		$arrcerti_name= $this->input->post('certificate_name');
		$arrcerti_no = $this->input->post('certificate_no');
		$arrmoreimgpath = $this->input->post('moreimgpath');
		$prerowcount= $this->input->post('prerowcount');
		$idcount= $this->input->post('morecertid');
		
		//$multicertificatecount = 0;
		
		if (!empty($_FILES['certificateImage1']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/certificate";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/certificate/";
			
			$certificate_Img1 = uploadImage($_FILES['certificateImage1'],$location,array('jpeg','jpg','png','gif','pdf'),2097152,'certificate1');
			if($certificate_Img1['status'] == 1) {
				$certificateinfo['cert_image1'] =  $certificate_Img1['image'];
				
			} else {
				$error = array("avatar"=>$certificate_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$certificate_Img['errormsg'] = $errorMsg;
				echo json_encode($certificate_Img);
				exit;
			}
			
			
		} else {
			
					$certificateinfo['cert_image1'] = $param['hcertimage1'];
		}
		 
		
		if (!empty($_FILES['certificateImage2']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/certificate";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/certificate/";
			
			$certificate_Img2 = uploadImage($_FILES['certificateImage2'],$location,array('jpeg','jpg','png','gif','pdf'),2097152,'certificate2');
			if($certificate_Img2['status'] == 1) {
				$certificateinfo['cert_image2'] =  $certificate_Img2['image'];
				
			} else {
				$error = array("avatar"=>$certificate_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$certificate_Img['errormsg'] = $errorMsg;
				echo json_encode($certificate_Img);
				exit;
			}
			
		} else {
			
				$certificateinfo['cert_image2'] = $param['hcertimage2'];
			
		}
		
		if (!empty($_FILES['certificateImage3']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/certificate";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/certificate/";
			
			$certificate_Img3 = uploadImage($_FILES['certificateImage3'],$location,array('jpeg','jpg','png','gif','pdf'),2097152,'certificate3');
			if($certificate_Img3['status'] == 1) {
				$certificateinfo['cert_image3'] =  $certificate_Img3['image'];
				
			} else {
				$error = array("avatar"=>$certificate_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$certificate_Img['errormsg'] = $errorMsg;
				echo json_encode($certificate_Img);
				exit;
			}
			
		} else {
			
				$certificateinfo['cert_image3'] = $param['hcertimage3'];
			
		}
		
		if (!empty($_FILES['certificateImage4']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/certificate";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/certificate/";
			
			$certificate_Img4 = uploadImage($_FILES['certificateImage4'],$location,array('jpeg','jpg','png','gif','pdf'),2097152,'certificate4');
			if($certificate_Img4['status'] == 1) {
				$certificateinfo['cert_image4'] =  $certificate_Img4['image'];
				
			} else {
				$error = array("avatar"=>$certificate_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$certificate_Img['errormsg'] = $errorMsg;
				echo json_encode($certificate_Img);
				exit;
			} 
			
		}  else {
			
				$certificateinfo['cert_image4'] = $param['hcertimage4'];
			
		}
// 		for($h=1;$h<=4;$h++)
// 		{
// 			if(empty($certificateinfo['cert_image'.$h]))
// 			{
// 				$certificateinfo['cert_image'.$h] = "";
// 			}
// 		}
		
		if (!empty($_FILES['moreCertificateImage']['name'])) {
			$countmorecertificate = count($_FILES['moreCertificateImage']['name']);
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/certificate";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/certificate/";
			for($i=0;$i<$countmorecertificate;$i++)
			{
				$file = array();
				$file['name'] = $_FILES['moreCertificateImage']['name'][$i];
				$file['type'] = $_FILES['moreCertificateImage']['type'][$i];
				$file['tmp_name'] = $_FILES['moreCertificateImage']['tmp_name'][$i];
				$file['error'] = $_FILES['moreCertificateImage']['error'][$i];
				$file['size'] = $_FILES['moreCertificateImage']['size'][$i];
				$certificate_Img = uploadImage($file,$location,array('jpeg','jpg','png','gif','pdf'),2097152,'morecertificate');
				if($certificate_Img['status'] == 1) {
					$certificatemoreimg[$i] =  $certificate_Img['image'];
					
				} else {
					$error = array("avatar"=>$certificate_Img['msg']);
					if (! empty ( $error )) {
						array_push ( $errors, $error );
					}
					$errorMsg["errors"] = $errors;
					$certificate_Img['errormsg'] = $errorMsg;
					echo json_encode($certificate_Img);
					exit;
				}
			}
		}
		
		$morecertiarray = array();
		$preimgcount =0;
		$idstring = "";
		for($i=0;$i<$prerowcount;$i++)
		{
			$morecertiarray[$i]['id'] = $idcount[$i];
			$morecertiarray[$i]['busi_id'] = $busi_id;
			$morecertiarray[$i]['certificate_type'] = $arrcerti_type[$i];
			$morecertiarray[$i]['certificate_name'] = $arrcerti_name[$i];
			$morecertiarray[$i]['certificate_no'] = $arrcerti_no[$i];
			if($arrmoreimgpath[$i] == "1") 
			{
				$morecertiarray[$i]['certificate_url'] = $certificatemoreimg[$preimgcount];
				$preimgcount++;
			} else if($arrmoreimgpath[$i] == "") {
				$morecertiarray[$i]['certificate_url'] = "";
			} else {
				$morecertiarray[$i]['certificate_url'] = $arrmoreimgpath[$i];
			}
			
			if($idcount[$i] != "") {
				if($i == 0) {
					$idstring = $idcount[$i];
				} else {
					$idstring = $idstring.",".$idcount[$i];
				}
				
				$this->certificatelib->updateMoreCertificateById($morecertiarray[$i]);
			}
		}
		if($idstring != "")
		{
			$this->certificatelib->deleteCertificateType($busi_id,$idstring);
		}
		$icount = $prerowcount;
		$mainarraycertificate = array();
		for($i=$prerowcount;$i<count($arrcerti_type);$i++)
		{
			$mainarraycertificate[$i]['busi_id'] = $busi_id;
			$mainarraycertificate[$i]['certificate_type'] = $arrcerti_type[$i];
		}
		for($i=$prerowcount;$i<count($arrcerti_name);$i++)
		{
			$mainarraycertificate[$i]['certificate_name'] = $arrcerti_name[$i];
		}
		for($i=$prerowcount;$i<count($arrcerti_no);$i++)
		{
			$mainarraycertificate[$i]['certificate_no'] = $arrcerti_no[$i];
		}
		for($i=$preimgcount;$i<count($certificatemoreimg);$i++)
		{
			$mainarraycertificate[$icount]['certificate_url'] = $certificatemoreimg[$i];
			$icount++;
		}
		
		if(count($mainarraycertificate) > 0) {
			$this->certificatelib->addMoreCertificates($mainarraycertificate);
		}
		
		$certificateinfo['id'] = $param['certificate_id'];
		$certificateinfo['license'] = $param['license'];
		$certificateinfo['start_date'] = date('Y-m-d',strtotime($param['start_date']));
		$certificateinfo['renwal_date'] = date('Y-m-d',strtotime($param['end_date']));
		$certificateinfo['scope'] = $param['scope'];
// 		$certificateinfo['certificate'] = $param['certificate_type'];
// 		$certificateinfo['certificate_name'] = $param['certificate_name'];
// 		$certificateinfo['certificate_no'] = $param['certificate_no'];
		
		
		
		$this->certificatelib->updateCertificateById($certificateinfo);
		//$this->certificatelib->deleteCertificateType($busi_id);
		//$this->certificatelib->addMoreCertificates($mainarraycertificate);
		
		$map['status'] = 1;
		$map['msg'] = "Certificate Information updated successfully";
		
		echo json_encode($map);
	}
	public function createSubuser()
	{
		$map = array();
		$param = $this->input->post('data');
		$busi_id = $this->session->userdata('busi_id');
		$email = $this->session->userdata('tsuser')['email'];
		$user_id= $this->session->userdata('tsuser')['userid'];
		$user_category_id= $this->session->userdata('tsuser')['category_id'];
		$user_subcategory_id = $this->session->userdata('tsuser')['subcat_id'];
		
		$user = array();
		$user['email'] = $param['name'];
		$user['name'] = $param['subusername'];
		$user['busi_id'] = $busi_id;
		//$user['name'] = $param['name'];
		$user['user_category_id'] = $user_category_id;
		$user['user_subcategory_id'] = $user_subcategory_id;
		$user['user_role	'] = 2;
		$user['admin_user_id'] = $user_id;
		$user['account_activated'] = 1;
		$user['password'] = md5($param['password']);
		$user['text_password'] = $param['password'];
		$user['registration_step'] = 5;
		$user['is_subuser'] = 1;
		$user['created_date'] = date('Y-m-d H:i:s');
		$data =  $this->load->library('mylib/UserLib');
		$lastInsertId = $this->userlib->insertIntoUsers($user);
		if($lastInsertId > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Subuser added successfully";
			
		} else {
			$map['status'] = 0;
			$map['msg'] = "Subuser fail to save.";
		}
		echo json_encode($map);
		
	}
	public function suspendSubUser()
	{
		$id = $this->input->post('id');
		$user = array();
		$user['id'] = $id;
		$user['is_suspend'] = 1;
		$this->load->library('mylib/UserLib');
		$result = $this->userlib->updateUser($user);
		if($result > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Subuser suspended successfully";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Subuser fail to suspend.";
		}
		echo json_encode($map);
	}
	public function allowSubuser()
	{
		$id = $this->input->post('id');
		$user = array();
		$user['id'] = $id;
		$user['is_suspend'] = 0;
		$this->load->library('mylib/UserLib');
		$result = $this->userlib->updateUser($user);
		if($result > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Subuser allowed successfully";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Subuser fail to allowed.";
		}
		echo json_encode($map);
	}
	public function deleteSubUser()
	{
		$id = $this->input->post('id');
		$user = array();
		$user['id'] = $id;
		$user['is_deleted'] = 1;
		$this->load->library('mylib/UserLib');
		$result = $this->userlib->updateUser($user);
		if($result > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Subuser deleteded successfully";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Subuser fail to delete.";
		}
		echo json_encode($map);
	}
	
	public function mypackage() {
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$this->load->library('mylib/PackageLib');
		$userdata = $this->packagelib->getSubscriptionPackagesByCType($cust_type);
		$this->template->set('cust_type',$cust_type);
		$this->template->set('packages',$userdata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/package','',true);
		echo $html;
	}
	public  function Dispalyimage()
	{
		$displayimg = $this->input->post('imagesrc');
		$this->template->set('displayimg',$displayimg);
		$this->template->set ( 'page', 'popup' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/viewcertificate','',true);
		echo $html;
	}
	
	public function myRank() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->getBusinessInfo($busi_id);
		$terms = $this->businesslib->getGauranteeTerms();
		$rank = $this->calculateRank($userdata[0]);
		$userdata[0]['rank'] = $rank;
		$data = array();
		$data['id'] = $busi_id;
		$data['rank'] = $rank;
		$this->businesslib->updateBusinessInfo($data);
		$this->template->set('binfo',$userdata);
		$this->template->set('terms',$terms);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/ranking','',true);
		echo $html;
	}
	
	public function logoVerificationRequest() {
		$busi_id = $this->session->userdata('busi_id');
		$data = array();
		$data['id'] = $busi_id;
		$data['is_logo_verified'] = 1;
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$resp = array();
		if($userdata) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
	
	public function logoBuyerVerificationRequest() {
		$busi_id = $this->session->userdata('busi_id');
		$user_id = $this->session->userdata('tsuser')['userid'];
		$imgPath = FCPATH. "assets/images/user_images/$user_id/verified/";
		if (!file_exists($imgPath)) {
			mkdir($imgPath, 0777, true);
			chmod($imgPath, 0777);
		}
		$imgcount = count($_FILES['fileattachs']['name']);
		$cert_files = array();
		for($i=0; $i<$imgcount; $i++) {
			$images = array();
			$images['busi_id'] = $busi_id;
			if (!empty($_FILES['fileattachs']['tmp_name'][$i])) {
				$file_name = microtime(true).$_FILES['fileattachs']['name'][$i];
				$newFilePath = $imgPath.$file_name;
				$images['doc_url'] = "images/user_images/$user_id/verified/".$file_name;
				if(move_uploaded_file($_FILES['fileattachs']['tmp_name'][$i], $newFilePath)) {
					
				}
				$cert_files[] = $images;
			}
			
		}
		$this->load->library('mylib/BusinessLib');
		$this->businesslib->addCertFiles($cert_files);
		$data = array();
		$data['id'] = $busi_id;
		$data['is_logo_verified'] = 1;
		$data['verification_id'] = $this->input->post('audit_no');
		$data['verify_url'] = $this->input->post('verified_url');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$resp = array();
		if($userdata) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
	
	public function cancelGaurantee() {
		$busi_id = $this->session->userdata('busi_id');
		$data = array();
		$data['id'] = $busi_id;
		$data['gaurantee_term'] = "";
		$data['gaurantee_period'] = 0;
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$binfo = $this->businesslib->getBusinessInfo($busi_id);
		$data = array();
		$data['id'] = $busi_id;
		$data['rank'] = $this->calculateRank($binfo[0]);
		$this->businesslib->updateBusinessInfo($data);
		$resp = array();
		if($userdata) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
	
			
			public function cancelLicense() {
				$busi_id = $this->session->userdata('busi_id');
				$data = array();
				$data['id'] = $busi_id;
				$data['export_lic_number'] = "";
				$data['export_license'] = "";
				$this->load->library('mylib/BusinessLib');
				$userdata = $this->businesslib->updateBusinessInfo($data);
				$binfo = $this->businesslib->getBusinessInfo($busi_id);
				$data = array();
				$data['id'] = $busi_id;
				$data['rank'] = $this->calculateRank($binfo[0]);
				$this->businesslib->updateBusinessInfo($data);
				$resp = array();
				if($userdata) {
					$resp['status'] = 1;
				} else {
					$resp['status'] = 0;
				}
				echo json_encode($resp);
			}
			
			public function cancelCerti() {
				$busi_id = $this->session->userdata('busi_id');
				$data = array();
				$data['id'] = $busi_id;
				$data['product_certs'] = "";
				$this->load->library('mylib/BusinessLib');
				$userdata = $this->businesslib->updateBusinessInfo($data);
				$binfo = $this->businesslib->getBusinessInfo($busi_id);
				$data = array();
				$data['id'] = $busi_id;
				$data['rank'] = $this->calculateRank($binfo[0]);
				$this->businesslib->updateBusinessInfo($data);
				$resp = array();
				if($userdata) {
					$resp['status'] = 1;
				} else {
					$resp['status'] = 0;
				}
				echo json_encode($resp);
			}
	
	public function confirmGaurantee() {
		$busi_id = $this->session->userdata('busi_id');
		$data = array();
		$data['id'] = $busi_id;
		$data['gaurantee_term'] = trim($this->input->post('gaurantee_term'));
		$data['gaurantee_period'] = $this->input->post('gaurantee_period');;
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$binfo = $this->businesslib->getBusinessInfo($busi_id);
		$data = array();
		$data['id'] = $busi_id;
		$data['rank'] = $this->calculateRank($binfo[0]);
		$this->businesslib->updateBusinessInfo($data);
		$resp = array();
		if($userdata) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
	
	public function confirmProductCerts() {
		$busi_id = $this->session->userdata('busi_id');
		$data = array();
		$data['id'] = $busi_id;
		$data['product_certs'] = trim($this->input->post('certs'));
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$binfo = $this->businesslib->getBusinessInfo($busi_id);
		$data = array();
		$data['id'] = $busi_id;
		$data['rank'] = $this->calculateRank($binfo[0]);
		$this->businesslib->updateBusinessInfo($data);
		$resp = array();
		if($userdata) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
	
	public function confirmProductLicense() {
		$busi_id = $this->session->userdata('busi_id');
		$data = array();
		$data['id'] = $busi_id;
		$data['export_lic_number'] = trim($this->input->post('lics'));
		$data['export_license'] = trim($this->input->post('lics_pic'));
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$binfo = $this->businesslib->getBusinessInfo($busi_id);
		$data = array();
		$data['id'] = $busi_id;
		$data['rank'] = $this->calculateRank($binfo[0]);
		$this->businesslib->updateBusinessInfo($data);
		$resp = array();
		if($userdata) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
	
	public function calculateRank($data) {
		$rank = 0;
		if($data['plan_id'] == 2) {
			$rank = $rank + 59;
		}
		if($data['plan_id'] == 3) {
			$rank = $rank + 61;
		}
		if($data['plan_id'] == 4) {
			$rank = $rank + 63;
		}
		if($data['is_logo_verified'] == 2) {
			$rank = $rank + 20;
		}
		if(!empty($data['gaurantee_term'])) {
			$rank = $rank + 5;
		}
		if(!empty($data['product_certs'])) {
			$rank = $rank + 5;
		}
		if(!empty($data['export_lic_number'])) {
			$rank = $rank + 5;
		}
		return $rank;
	}
	
	
	public function getPaymentLink() {
		$paypal_email = 'developerslogic@gmail.com';
		$return_url = base_url().'mystation/payment/payment-successful';
		$cancel_url = base_url().'mystation/payment/payment-cancelled';
		$notify_url = base_url().'mystation/payment/payment-notify';
		$querystring = '';
		$this->load->library('mylib/PackageLib');
		$plan = $this->packagelib->getSubscriptionPackageById($_POST['item_number']);
		// Firstly Append paypal account to querystring
		$querystring .= "?business=".urlencode($paypal_email)."&";
		
		// Append amount& currency (£) to quersytring so it cannot be edited in html
		
		//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
		$querystring .= "item_name=".urlencode($plan[0]['name'])."&";
		$querystring .= "amount=".urlencode($plan[0]['price'])."&";
		
		//loop for posted values and append to querystring
		foreach($_POST as $key => $value){
			$value = urlencode(stripslashes($value));
			$querystring .= "$key=$value&";
		}
		
		// Append paypal return addresses
		$querystring .= "return=".urlencode(stripslashes($return_url))."&";
		$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
		$querystring .= "notify_url=".urlencode($notify_url);
		
		// Append querystring with custom field
		//$querystring .= "&custom=".USERID;
		
		// Redirect to paypal IPN
		header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
		exit();
	}
	
	public function paymentNotify() {
		error_log(json_encode($_POST),0);
		$resp = array();
		// Response from Paypal
		// read the post from PayPal system and add 'cmd'
		$req = 'cmd=_notify-validate';
		foreach ($_POST as $key => $value) {
			$value = urlencode(stripslashes($value));
			$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
			$req .= "&$key=$value";
		}
		
		// assign posted variables to local variables
		$data['item_name']			= $_POST['item_name'];
		$data['item_number'] 		= $_POST['item_number'];
		$data['payment_status'] 	= $_POST['payment_status'];
		$data['payment_amount'] 	= $_POST['mc_gross'];
		$data['payment_currency']	= $_POST['mc_currency'];
		$data['txn_id']				= $_POST['txn_id'];
		$data['receiver_email'] 	= $_POST['receiver_email'];
		$data['payer_email'] 		= $_POST['payer_email'];
		$data['custom'] 			= $_POST['custom'];
		
		// post back to PayPal system to validate
		$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
		
		$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
		
		if (!$fp) {
			// HTTP ERROR
			$resp['status'] = 0;
		} else {
			$resp['status'] = 0;
			fputs($fp, $header . $req);
			while (!feof($fp)) {
				$res = fgets ($fp, 1024);
				if (strcmp($res, "VERIFIED") == 0) {
					// Used for debugging
					// mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));
		
					// Validate payment (Check unique txnid & correct price)
					//$valid_txnid = check_txnid($data['txn_id']);
					//$valid_price = check_price($data['payment_amount'], $data['item_number']);
					// PAYMENT VALIDATED & VERIFIED!
					/*if ($valid_txnid && $valid_price) {
						$orderid = updatePayments($data);
						if ($orderid) {
							// Payment has been made & successfully inserted into the Database
						} else {
							// Error inserting into DB
							// E-mail admin or alert user
							// mail('user@domain.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));
						}
					} else {
						// Payment made but data has been changed
						// E-mail admin or alert user
					}*/
					$resp['status'] = 1;
				} else if (strcmp ($res, "INVALID") == 0) {
					$resp['status'] = 0;
				}
			}
			fclose ($fp);
		}
		echo json_encode($resp);
	}
	
	public function paymentSuccess() {
		error_log(json_encode($_POST),0);
		var_dump($_POST);
	}
	
	public function paymentCancel() {
		error_log(json_encode($_POST),0);
		var_dump($_POST);
	}
	
	public function confirmPackagePayment() {
		$paymant_data = $this->input->post('paydata');
		$plan_id = $this->input->post('id');
		$this->load->model('Payment_model','payment');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$pdata = array();
		$pdata['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$pdata['plan_id'] = $plan_id;
		$pdata['txn_id'] = $paymant_data['id'];
		$pdata['payment_gross'] = $paymant_data['transactions'][0]['amount']['total'];
		$pdata['currency_code'] = $paymant_data['transactions'][0]['amount']['currency'];
		$pdata['payer_email'] = $paymant_data['payer']['payer_info']['email'];
		$pdata['payment_status'] = $paymant_data['state'];
		$invoice_id = $this->payment->addPaymentInfo($pdata);
		$data['id'] = $this->session->userdata('tsuser')['busi_id'];
		$data['plan_id'] = $plan_id;
		$data['expiry_date'] = date('Y-m-d',strtotime('+12 months'));
		$this->load->library('mylib/BusinessLib');
		$binfo = $this->businesslib->getBusinessInfo($busi_id);
		$data['rank'] = $this->calculateRank($binfo[0]);
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$tuser = $this->session->userdata('tsuser');
		$tuser['plan_id'] = $plan_id;
		$this->session->set_userdata('tsuser',$tuser);
		if($invoice_id > 0) {
			$udetails = $this->payment->getMemberDetails($pdata['busi_id']);
			$pdata['expiry_date'] = $data['expiry_date'];
			$pdata['uname'] = $udetails[0]['name_prefix']." ".$udetails[0]['user_name']; 
			$pdata['ucategory'] = $udetails[0]['user_category'];
			$pdata['usubcategory'] = $udetails[0]['sub_category'];
			$pdata['plan_name'] = $udetails[0]['plan_name'];
			$pdata['starting_on'] = date('d/m/Y');
			if($udetails[0]['cat_id'] == 1) {
				$pdata['amount'] = $udetails[0]['price'];
			} else {
				$pdata['amount'] = $udetails[0]['shipper_price'];
			}
			$pdata['company_name'] = $udetails[0]['company_name'];
			$pdata['company_country'] = $udetails[0]['company_country'];
			$pdata['telephone_number'] = $udetails[0]['telephone_number'];
			$pdata['invoice_id'] = getInvoiceCode($invoice_id);
			$this->template->set ( 'invoice', $pdata );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('default/invoice','',true);
			$config = Array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'mytrdstation@gmail.com', // change it to yours
					'smtp_pass' => 'tradestation123', // change it to yours
					'mailtype' => 'html',
					'charset' => 'iso-8859-1',
					'wordwrap' => TRUE
			);
			$email = $udetails[0]['user_email'].",".$udetails[0]['company_email'];
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('no-reply@gmail.com'); // change it to yours
			$this->email->to($email); // change it to yours
			$this->email->subject('VCOMMERS ORDER INVOICE');
			$this->email->message($html);
			$this->email->send();
		}
		echo json_encode(array('status'=>1));
	}
	
	public function getMyVerification() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->getBusinessInfo($busi_id);
		$this->template->set('binfo',$userdata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/verification','',true);
		echo $html;
	}
	public function getMyBuyerVerification() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->getBusinessInfo($busi_id);
		$this->template->set('binfo',$userdata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/buyerverification','',true);
		echo $html;
	}
	public function buyerMessage()
	{
		$flag = $this->input->post('flag');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$data = array();
		$data['id'] = $busi_id;
		$data['message_flag'] = $flag;
		$this->load->library('mylib/BusinessLib');
		$userdata = $this->businesslib->updateBusinessInfo($data);
		$this->session->unset_userdata('mystation_popup');
		if($flag == 1)
		{
			$this->session->set_userdata('mystation_popup',1);
		}
	}
	function check_emailcontactperson()
	{
		$this->load->model('Account_Model');
		if (true === empty($_POST)) {
			return false;
		}
		$email = $_POST['email'];
		$busi_id = $_POST['busi_id'];
		$emailExist = $this->Account_Model->emailExistContactperson($email,$busi_id);
		echo json_encode($emailExist);
	}
	
	public function getLoginStatus() {
		$map = array();
		$tsuserdata = $this->session->userdata('tsuser');
		if(!empty($tsuserdata['userid']) && $tsuserdata['userid'] > 0) {
			$map['status'] = 1;
		} else {
			$map['status'] = 0;
		}
		echo json_encode($map);
	}
	
}