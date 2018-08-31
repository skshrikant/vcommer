<?php
class Home extends MX_Controller {

    //send offers steps completed
    const STEPS_COMPLETED = 2;


    public function __construct() {
        parent::__construct ();
		header("Last-Modified: " . gmdate( "D, j M Y H:i:s" ) . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0");
		header("Pragma: no-cache");
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
        $this->load->model ( 'Account_Model', 'account' );
    }
    public function index() {
        $this->load->library('mylib/General');
        $this->load->model ( 'Account_Model', 'account' );
        $subcategories = $this->general->getUserSubCategories();
        $this->template->set ( 'subcategories', $subcategories);
        $procategories = $this->general->getProductCategories();
        $this->template->set ( 'procategories', $procategories);
        $prosubcategories = $this->general->getProductSubCategories();
		$this->template->set ( 'prosubcategories', $prosubcategories);
        $desksites= $this->account->getDesksites();
        $this->template->set ( 'desksites', $desksites);
        $vCatalogues= $this->account->getVCatalogue();
        $this->template->set ( 'vCatalogues', $vCatalogues);
        $products3D = $this->account->get3DProducts();
        $this->template->set ( 'products3D', $products3D);
        $FeaturedProducts= $this->account->getFeaturedProduct();
        $this->template->set ( 'FeaturedProducts', $FeaturedProducts);
        $FeaturedVideos= $this->account->getFeaturedProductVideo();
        $this->template->set ( 'FeaturedVideos', $FeaturedVideos);
        $FWSellers= $this->account->getFeaturedWorldSeller();
        $this->template->set ( 'FWSellers', $FWSellers);
        $FWBuyers= $this->account->getFeaturedWorldBuyer();
        $this->template->set ( 'FWBuyers', $FWBuyers);
        $NewArrivals= $this->account->getBstationPostOffer();
        $this->template->set ( 'NewArrivals', $NewArrivals);
        $NewOrders= $this->account->getBstationPostRequest();
        $this->template->set ( 'NewOrders', $NewOrders);
        $WebsiteImages= $this->account->getWebsiteImage();
        $this->template->set ( 'WebsiteImages', $WebsiteImages);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $homeAds = $this->account->getHomeBannerAds();
        /* ADDED TO SHOW ALERT COUNT*/
        $busi_id = $this->session->userdata('busi_id');
        $totalcount = 0;
        if(!empty($busi_id)) {
            $totalcount = $this->common->getTotalCountForAlert($busi_id);
        }
        $this->template->set ( 'totalcount', $totalcount);
        /**/
        $this->template->set ( 'homeAds', $homeAds);
        $this->template->set ( 'page', 'home' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION' )
        ->set_partial ( 'header', 'default/header' )
        ->set_partial ( 'footer', 'default/footer' )
        ->set_partial ( 'vcatalogue', 'default/vcatalogue' );
        $this->template->build ('Home/home');
    }

    public function intro() {
        $this->template->set ( 'page', 'home' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $this->template->build ('Home/intro.php');
    }
    public function afterloginHome()
    {
        $this->load->library('mylib/General');
        $this->load->model ( 'Account_Model', 'account' );
        $subcategories = $this->general->getUserSubCategories();
        $this->template->set ( 'subcategories', $subcategories);
        $procategories = $this->general->getProductCategories();
        $this->template->set ( 'procategories', $procategories);
        $procategories = $this->general->getProductCategories();
        $this->template->set ( 'procategories', $procategories);
        $desksites= $this->account->getDesksites();
        $this->template->set ( 'desksites', $desksites);
        $vCatalogues= $this->account->getVCatalogue();
        $this->template->set ( 'vCatalogues', $vCatalogues);
        $products3D = $this->account->get3DProducts();
        $this->template->set ( 'products3D', $products3D);
        $FeaturedProducts= $this->account->getFeaturedProduct();
        $this->template->set ( 'FeaturedProducts', $FeaturedProducts);
        $FeaturedVideos= $this->account->getFeaturedProductVideo();
        $this->template->set ( 'FeaturedVideos', $FeaturedVideos);
        $FWSellers= $this->account->getFeaturedWorldSeller();
        $this->template->set ( 'FWSellers', $FWSellers);
        $FWBuyers= $this->account->getFeaturedWorldBuyer();
        $this->template->set ( 'FWBuyers', $FWBuyers);
        $NewArrivals= $this->account->getNewArrival();
        $this->template->set ( 'NewArrivals', $NewArrivals);
        $NewOrders= $this->account->getNewOrder();
        $this->template->set ( 'NewOrders', $NewOrders);
        $WebsiteImages= $this->account->getWebsiteImage();
        $this->template->set ( 'WebsiteImages', $WebsiteImages);
        $homeAds = $this->account->getHomeBannerAds();
        $this->template->set ( 'homeAds', $homeAds);
        $this->template->set ( 'page', 'home' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION' )
        ->set_partial ( 'header', 'default/header_after_login' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/home');
    }
    public function create_captcha() {
        $this->load->library('mylib/General');
        $form_id = $this->input->get('form_id');
        $data = $this->general->createCaptcha($form_id);
        echo json_encode($data);
    }
    public function signin()
    {
        if(!empty($this->session->userdata('tsuser')['busi_id'])) {
            redirect(base_url());
        }
        $this->load->library('mylib/General');
        //$subcategories = $this->general->getUserSubCategories();
        //	$this->template->set ( 'subcategories', $subcategories);
        $this->template->set ( 'page', 'login' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false)
        ->title ( 'login' );
        $this->template->build ('login/login');
    }

    public function sellersList()
    {
        $params = $this->input->get();
        $keyword = "";
        if(!empty($params['keyword']))
            $keyword = $params['keyword'];
            if(empty($params)) {
                if(!empty($_COOKIE['seller_keywd'])) {
                    $params['keyword'] = $_COOKIE['seller_keywd'];
                }
            } else {
                if(isset($params['keyword']) && $params['keyword'] != "")
                    setcookie('seller_keywd', $params['keyword'], time() + (86400 * 30), "/");
            }
            $params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
            if(empty($params['page'])) {
                $params['page'] = 1;
            }
            
            $this->load->library('mylib/General');
            $this->load->model('Sellers_Model', 'sellers' );
            $this->load->model('Product_Model','product');
            $this->load->model('Account_Model','account');
            $sellers = $this->sellers->searchSellers($params);
            $total_pages = $this->sellers->countSellers($params);
            $this->template->set ( 'Sellers', $sellers);
            $procategories = $this->general->getProductCategories();
            $this->template->set ( 'procategories', $procategories);
            $prosubcategories = $this->general->getProductSubCategories();
            $this->template->set ( 'prosubcategories', $prosubcategories);
            $Country= $this->account->getCountry();
            $this->template->set ( 'Country', $Country);
            $featuredSellers = $this->sellers->getFeaturedWorldSeller();
            $this->template->set ( 'featuredSellers', $featuredSellers);
            $featuredProductVideo= $this->account->getFeaturedProductVideo();
            $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
            $featuredProducts = $this->account->getFeaturedProduct();
            $this->template->set ( 'featuredProducts', $featuredProducts);
            $procategories = $this->general->getProductCategories();
            $this->template->set ( 'categories', $procategories);
            /* ADDED TO SHOW ALERT COUNT*/
            $totalcount = 0;
            if(!empty($params['busi_id'])) {
                $totalcount = $this->common->getTotalCountForAlert($params['busi_id']);
            }
            $this->template->set ( 'totalcount', $totalcount);
            /*END*/
            unset($params['community_only']);
            unset($params['community_hide']);
            unset($params['plan_id']);
            if(empty($keyword)) {
                unset($params['keyword']);
            }
            $url = base_url()."seller?".http_build_query($params);
            $maincats = $this->product->getActiveProductMainAndSubCategories();
            if(!empty($params['country'])) {
                $city= $this->sellers->getCityByCountry($params['country'],1);
                $this->template->set ( 'cities', $city);
            }
            $this->template->set ( 'mcats', $maincats );
            $this->template->set('sellerurl',$url);
            $this->template->set('page',$params['page']);
            $this->template->set('total_pages',$total_pages);
            $this->template->set ( 'params', $params);
            unset($params['page']);
            if(http_build_query($params) != ""){
                $wpurl = base_url()."seller?".http_build_query($params)."&";
            } else {
                    $wpurl = base_url()."seller?";
            }
            $this->template->set('wpsellerurl',$wpurl);
            $this->template->set ( 'page', 'sellers' );
            $this->template->set ( 'browser_icon', 'seller.ico' );
            $this->template->set ( 'userId', '' );
            $this->template->set_theme('default_theme');
            $this->template->set_layout ('default')
                ->title ( 'Find Seller' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
            $this->template->build ('Home/seller');
    }

    public function buyersList()
    {
        $params = $this->input->get();
        $keyword = "";
        if(!empty($params['keyword']))
            $keyword = $params['keyword'];
            if(empty($params)) {
                if(!empty($_COOKIE['buyer_keywd'])) {
                    $params['keyword'] = $_COOKIE['buyer_keywd'];
                }
            } else {
                	
                setcookie('buyer_keywd', $keyword, time() + (86400 * 30), "/");
            }
            $params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
            if(empty($params['page'])) {
                $params['page'] = 1;
            }
            $this->load->model('Sellers_Model', 'buyers' );
            $this->load->library('mylib/General');
            $buyers = $this->buyers->searchBuyers($params);
            $total_pages = $this->buyers->countBuyers($params);
			$procategories = $this->general->getProductCategories();
            $this->template->set ( 'procategories', $procategories);
            $prosubcategories = $this->general->getProductSubCategories();
            $this->template->set ( 'prosubcategories', $prosubcategories);
            $this->template->set ( 'Buyers', $buyers);
            $Country= $this->account->getCountry();
            $this->template->set ( 'Country', $Country);
            $featuredBuyers = $this->buyers->getFeaturedWorldBuyer();
            $this->template->set ( 'featuredBuyers', $featuredBuyers);
            $featuredProductVideo= $this->buyers->getFeaturedProductVideo();
            $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
            $featuredProduct= $this->buyers->getFeaturedProduct();
            $this->template->set ( 'featuredProduct', $featuredProduct);
            $procategories = $this->general->getProductCategories();
            $this->template->set ( 'categories', $procategories);
            $maincats = $this->product->getActiveProductMainAndSubCategories();
            $this->template->set ( 'mcats', $maincats );
            /* ADDED TO SHOW ALERT COUNT*/
            $totalcount = 0;
            if(!empty($params['busi_id'])) {
                $totalcount = $this->common->getTotalCountForAlert($params['busi_id']);
            }
            $this->template->set ( 'totalcount', $totalcount);
            /*END*/
            unset($params['community_only']);
            unset($params['community_hide']);
            if(empty($keyword)) {
                unset($params['keyword']);
            }
            $url = base_url()."buyer?".http_build_query($params);
            $this->template->set('sellerurl',$url);
            $this->template->set('page',$params['page']);
            $this->template->set('total_pages',$total_pages);
            $this->template->set ( 'params', $params);
            unset($params['page']);
            if(http_build_query($params) != "")
                $wpurl = base_url()."buyer?".http_build_query($params)."&";
                else
                    $wpurl = base_url()."buyer?";
                    $this->template->set('wpbuyerurl',$wpurl);
                    $this->template->set ( 'page', 'buyers' );
                    $this->template->set ( 'browser_icon', 'buyer.ico' );
                    $this->template->set ( 'userId', '' );
                    $this->template->set_theme('default_theme');
                    $this->template->set_layout ('default')
                    ->title ( 'Find Buyer' )
                    ->set_partial ( 'header', 'default/inner-header' )
                    ->set_partial ( 'footer', 'default/footer' );
                    $this->template->build ('Home/buyer');
    }

    public function shippersList()
    {
        $params = $this->input->get();
        $keyword = "";
        if(!empty($params['keyword']))
            $keyword = $params['keyword'];
            if(empty($params)) {
                if(!empty($_COOKIE['shipper_keywd'])) {
                    $params['keyword'] = $_COOKIE['shipper_keywd'];
                }
            } else {
                setcookie('shipper_keywd', $keyword, time() + (86400 * 30), "/");
            }
            $params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
            if(empty($params['page'])) {
                $params['page'] = 1;
            }
            $this->load->model('Sellers_Model', 'shipper' );
            $services = $this->shipper->getAllShipperCategories();
            $Shippers = $this->shipper->searchShippers($params);
            $total_pages = $this->shipper->countShippers($params);
            $this->template->set ( 'Shippers', $Shippers);
            $Country= $this->account->getCountry();
            $this->template->set ( 'Country', $Country);
            $featuredShippers = $this->shipper->getFeaturedWorldShippers();
            $this->template->set ( 'featuredShippers', $featuredShippers);
            $featuredProductVideo= $this->account->getFeaturedProductVideo();
            $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
            $featuredProducts= $this->shipper->getFeaturedProduct();
            /* ADDED TO SHOW ALERT COUNT*/
            $totalcount = 0;
            if(!empty($params['busi_id'])) {
                $totalcount = $this->common->getTotalCountForAlert($params['busi_id']);
            }
            $this->template->set ( 'totalcount', $totalcount);
            /*END*/
            unset($params['usubcat_id']);
            unset($params['community_only']);
            unset($params['community_hide']);
            if(empty($keyword)) {
                unset($params['keyword']);
            }
            $url = base_url().'shipper?'.http_build_query($params);
            $this->template->set ( 'featuredProducts', $featuredProducts);
            $this->template->set ( 'services', $services);
            $this->template->set ( 'params', $params);
            $this->template->set ( 'url', $url );
            $this->template->set('total_pages',$total_pages);
            unset($params['page']);
            if(http_build_query($params) != "")
                $wpurl = base_url()."shipper?".http_build_query($params)."&";
                else
                    $wpurl = base_url()."shipper?";
                    $this->template->set('wpshipperurl',$wpurl);
                    $this->template->set ( 'page', 'shippers' );
                    $this->template->set ( 'browser_icon', 'shipper.ico' );
                    $this->template->set ( 'userId', '' );
                    $this->template->set_theme('default_theme');
                    $this->template->set_layout ('default')
                    ->title ( 'Find Shippers' )
                    ->set_partial ( 'header', 'default/inner-header' )
                    ->set_partial ( 'footer', 'default/footer' );
                    $this->template->build ('Home/shipper');
    }
    public function filter_by_cat(){
        $params = $this->input->get();
        $keyword = "";
        if(!empty($params['keyword']))
            $keyword = $params['keyword'];
            $params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
            if(empty($params['page'])) {
                $params['page'] = 1;
            }
            $params['cat_id'] = $this->input->post('cat_id');
            $params['main_cat_id'] = $this->input->post('main_cat_id');
            $params['main_prod'] = $this->input->post('main_prod');
            $this->load->model('Sellers_Model', 'sellers' );
            $this->load->model('Product_Model', 'product' );
            $this->load->library('mylib/General', 'general');
            $this->load->model ( 'Account_Model', 'account' );
            $products = $this->product->filterProducts($_POST);
            $productMainCat = $this->product->getProductCatSubcat($_POST['main_cat_id'],$_POST['cat_id']);
            $subproducts = $this->product->getSubProdBySubCat($params['main_prod']);
			$this->template->set ( 'subproducts', $subproducts);
			$this->template->set ( 'productMainCat', $productMainCat);

            $total_pages = $this->sellers->countProducts($params);
            $procategories = $this->general->getProductCategories();
            $this->template->set ( 'procategories', $procategories);
            $prosubcategories = $this->general->getProductSubCategories();
            $this->template->set ( 'prosubcategories', $prosubcategories);
            $this->template->set ( 'products', $products);
            $Country= $this->account->getCountry();
            $this->template->set ( 'Country', $Country);
            $featuredSellers = $this->sellers->getFeaturedWorldSeller();
            $this->template->set ( 'featuredSellers', $featuredSellers);
            $featuredProductVideo= $this->account->getFeaturedProductVideo();
            $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
            $featuredProducts = $this->account->getFeaturedProduct();
            $this->template->set ( 'featuredProducts', $featuredProducts);
            $procategories = $this->general->getProductCategories();
            $this->template->set ( 'categories', $procategories);
            $maincats = $this->product->getActiveProductMainAndSubCategories();
            $this->template->set ( 'mcats', $maincats );
            unset($params['community_only']);
            unset($params['community_hide']);
            if(empty($keyword)) {
                unset($params['keyword']);
            }
            $url = base_url()."products?".http_build_query($params);
            $this->template->set ( 'params', $params);
            $this->template->set('producturl',$url);
            $this->template->set('page',$params['page']);
            $this->template->set('total_pages',$total_pages);
            unset($params['page']);
            if(http_build_query($params) != "")
                $wpurl = base_url()."products?".http_build_query($params)."&";
                else
                    $wpurl = base_url()."products?";
                    $this->template->set('wpproducturl',$wpurl);
                    $this->template->set ( 'page', 'product' );
                    $this->template->set ( 'browser_icon', 'products.ico' );
                    $this->template->set ( 'userId', '' );
                    $this->template->set_theme('default_theme');
                    $this->template->set_layout ('default')
                    ->title ( 'Find Products' )
                    ->set_partial ( 'header', 'default/inner-header' )
                    ->set_partial ( 'footer', 'default/footer' );
                    $this->template->build ('product/product');
    }
    public function search()
    {
        $this->load->library('mylib/General');
        $this->load-> model('Search_Model', 'search');
        $this->load-> model('Account_Model', 'account');
		$productMainCat =array();
        $keyword = $this->input->post('keyword');
        $type = $this->input->post('type');
        $newcountry = $this->input->post('country');
        $busiId = $this->session->userdata('tsuser')['busi_id'];
		$params['cat_id'] = $this->input->post('cat_id');
		$params['main_cat_id'] = $this->input->post('main_cat_id');
		$params['main_prod'] = $this->input->post('main_prod');
		$params['sub_prod'] = $this->input->post('sub_prod');
		$params['keyword'] = $this->input->post('keyword');
		$params['service'] = isset($_POST['service'])?$_POST['service']:'';
		
        $country = explode('_', $newcountry);
        $procategories = $this->general->getProductCategories();
        $this->template->set ( 'procategories', $procategories);
        $prosubcategories = $this->general->getProductSubCategories();
        $this->template->set ( 'prosubcategories', $prosubcategories);
		if(isset($params['main_prod']) && $params['main_prod']!=''){
			$productMainCat = $this->product->getProductCatSubcat($params['main_cat_id'],$params['cat_id']);
		}
		$subproducts = $this->product->getSubProdBySubCat($params['main_prod']);
		$this->template->set ( 'subproducts', $subproducts);
		$this->template->set ( 'productMainCat', $productMainCat);
        $totalcount = 0;
        if(!empty($busiId)) {
            $totalcount = $this->common->getTotalCountForAlert($busiId);
        }
        $this->template->set ( 'totalcount', $totalcount);
        $result =array();
        if($type ==1){
            $url = base_url()."seller";
            if(!empty($country[0])){
                $this->load->model('Sellers_Model', 'sellers' );
                $search = $this->search->searchBusinessCountry($type, $country, $keyword);
                $this->template->set ( 'Sellers', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredSellers = $this->sellers->getFeaturedWorldSeller();
                $this->template->set ( 'featuredSellers', $featuredSellers);
                $featuredProductVideo= $this->account->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->account->getFeaturedProduct();
                $this->template->set ( 'featuredProducts', $featuredProduct);
                $this->template->set ( 'page', 'sellers' );
                $this->template->set ( 'userId', '' );
                $this->template->set ( 'sellerurl', $url );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Seller' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/seller');
                //return true;
            }else{
                $this->load->model('Sellers_Model', 'sellers' );
                $search = $this->search->searchBusiness($type, $keyword,$params);
                $this->template->set ( 'Sellers', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredSellers = $this->sellers->getFeaturedWorldSeller();
                $this->template->set ( 'featuredSellers', $featuredSellers);
                $featuredProductVideo= $this->account->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->account->getFeaturedProduct();
                $this->template->set ( 'featuredProducts', $featuredProduct);
                $this->template->set ( 'page', 'sellers' );
                $this->template->set ( 'userId', '' );
                $this->template->set ( 'sellerurl', $url );
				$this->template->set ( 'params', $params );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Seller' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/seller');
                return true;
            }
        } elseif($type == 2){
            $url = base_url().'shipper';
            if($country[0] !='') {
                $this->load->model('Sellers_Model', 'shipper' );
                $services = $this->shipper->getAllShipperCategories();
                $this->template->set ( 'services', $services);
                $search = $this->search->searchBusinessCountry($type, $country, $keyword);
                $this->template->set ( 'Shippers', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredShippers = $this->shipper->getFeaturedWorldShippers();
                $this->template->set ( 'featuredShippers', $featuredShippers);
                $featuredProductVideo= $this->shipper->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->shipper->getFeaturedProduct();
                $this->template->set ( 'featuredProduct', $featuredProduct);
                $this->template->set ( 'page', 'shippers' );
                $this->template->set ( 'userId', '' );
                $this->template->set ( 'url', $url );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Shipper' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/shipper');
                return true;
            }else{
                $this->load->model('Sellers_Model', 'shipper' );
                $services = $this->shipper->getAllShipperCategories();
				$this->template->set ( 'services', $services);
				$Shippers = $this->shipper->searchShippers($params);
				$total_pages = $this->shipper->countShippers($params);
				$this->template->set ( 'Shippers', $Shippers);
				$Country= $this->account->getCountry();
				$this->template->set ( 'Country', $Country);
				$featuredShippers = $this->shipper->getFeaturedWorldShippers();
				$this->template->set ( 'featuredShippers', $featuredShippers);
				$featuredProductVideo= $this->account->getFeaturedProductVideo();
				$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
				$featuredProducts= $this->shipper->getFeaturedProduct();
                $this->template->set ( 'page', 'shippers' );
                $this->template->set ( 'userId', '' );
                $this->template->set ( 'url', $url );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Shipper' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/shipper');
                return true;
            }
        } elseif($type ==3){
            if($country[0] !='') {
                $this->load->model('Sellers_Model', 'buyers' );
                $search = $this->search->searchBusinessCountry($type,$country, $keyword);
                $this->template->set ( 'Buyers', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredBuyers = $this->buyers->getFeaturedWorldBuyer();
                $this->template->set ( 'featuredBuyers', $featuredBuyers);
                $featuredProductVideo= $this->buyers->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->buyers->getFeaturedProduct();
                $this->template->set ( 'featuredProduct', $featuredProduct);
                $this->template->set ( 'page', 'buyers' );
                $this->template->set ( 'userId', '' );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Buyer' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/buyer');
                return true;
            } else {
                $this->load->model('Sellers_Model', 'buyers' ); 
                $search = $this->search->searchBusinessCountry($type,$country=array(),$keyword,$params);
                $this->template->set ( 'Buyers', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredBuyers = $this->buyers->getFeaturedWorldBuyer();
                $this->template->set ( 'featuredBuyers', $featuredBuyers);
                $featuredProductVideo= $this->buyers->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->buyers->getFeaturedProduct();
                $this->template->set ( 'featuredProduct', $featuredProduct);
                $this->template->set ( 'page', 'buyers' );
                $this->template->set ( 'userId', '' );
				$this->template->set ( 'params', $params );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Buyer' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/buyer');
                return true;
            }
        } elseif($type == 4) {
            $url = base_url()."products";
            if($country[0] !='') {
                $this->load->model('Sellers_Model', 'buyers' );
                $this->load->model('Account_Model', 'account' );
                $search = $this->search->searchProductCountry($country, $keyword);
                $this->template->set ( 'products', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredBuyers = $this->buyers->getFeaturedWorldBuyer();
                $this->template->set ( 'featuredBuyers', $featuredBuyers);
                $featuredProductVideo= $this->buyers->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->account->getFeaturedProduct();
                $this->template->set ( 'featuredProducts', $featuredProduct);
                $this->template->set ( 'page', 'products' );
                $this->template->set ( 'producturl', $url );
                $this->template->set ( 'userId', '' );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Product' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('product/product');
                return true;
            } else {
                $this->load->model('Sellers_Model', 'buyers' );
                $this->load->model('Account_Model', 'account' );
                $search = $this->buyers->searchProducts($params);
                $this->template->set ( 'products', $search);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $featuredBuyers = $this->buyers->getFeaturedWorldBuyer();
                $this->template->set ( 'featuredBuyers', $featuredBuyers);
                $featuredProductVideo= $this->buyers->getFeaturedProductVideo();
                $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
                $featuredProduct= $this->account->getFeaturedProduct();
                $this->template->set ( 'featuredProducts', $featuredProduct);
                $this->template->set ( 'page', 'product' );
                $this->template->set ( 'producturl', $url );
                $this->template->set ( 'params', $params );
                $this->template->set ( 'userId', '' );
                $this->template->set_theme('default_theme');
				$this->template->set ( 'browser_icon', 'products.ico' );
                $this->template->set_layout ('default')
                ->title ( 'Find Product' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('product/product');
                return true;
            }
        } elseif($type == 5) {
			$params['keyword'] = "";
			if(!empty($params['keyword']))
			$keyword = $params['keyword'];
			if(empty($params)) {
				if(!empty($_COOKIE['seller_keywd'])) {
					$params['keyword'] = $_COOKIE['seller_keywd'];
				}
			} else {
				if(isset($params['keyword']) && $params['keyword'] != "")
						setcookie('video_keywd', $params['keyword'], time() + (86400 * 30), "/");
			}
			$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->library('mylib/General');
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->model('Account_Model', 'account' );
			$this->load->model('Product_Model','product');
			$this->load->model('Vedio_model', 'videos' );
			$videos = $this->videos->searchProductsInVideos($params);
			$total_pages = $this->videos->countProductsInVideos($params);
			$this->template->set ( 'videos', $videos);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$featuredSellers = $this->sellers->getFeaturedWorldSeller();
			$this->template->set ( 'featuredSellers', $featuredSellers);
			$featuredProductVideo= $this->account->getFeaturedProductVideo();
			$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
			$featuredProducts = $this->account->getFeaturedProduct();
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			unset($params['community_only']);
			unset($params['community_hide']);
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			if(!empty($params['country'])) {
				$city= $this->sellers->getCityByCountry($params['country'],1);
				$this->template->set ( 'cities', $city);
			}
			$url = base_url()."pro-video?".http_build_query($params);
			$this->template->set('url',$url);
			$this->template->set ( 'mcats', $maincats );
			$this->template->set ( 'params', $params);
			$this->template->set ( 'featuredProducts', $featuredProducts);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."pro-video?".http_build_query($params)."&";
			else
				$wpurl = base_url()."pro-video?";
			$this->template->set('wpvideourl',$wpurl);
			$this->template->set ( 'page', 'pro-videos' );
			$this->template->set ( 'userId', '' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout ('default')
			->title ( 'Product In Videos' )
			->set_partial ( 'header', 'default/inner-header' )
			->set_partial ( 'footer', 'default/footer' );
			$this->template->build ('product/pro-videos');
		}elseif($type ==6){
			$params['keyword'] = "";
			if(!empty($params['keyword']))
			$keyword = $params['keyword'];
			$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->library('mylib/General', 'general');
			$this->load->model ( 'Account_Model', 'account' );
			$products = $this->sellers->search3DProducts($params);
			$total_pages = $this->sellers->count3DProducts($params);
			$this->template->set ( 'products', $products);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$featuredSellers = $this->sellers->getFeaturedWorldSeller();
			$this->template->set ( 'featuredSellers', $featuredSellers);
			$featuredBuyers = $this->sellers->getFeaturedWorldBuyer();
			$this->template->set ( 'featuredBuyers', $featuredBuyers);
			$featuredProducts = $this->sellers->getFeaturedProduct();
			$this->template->set ( 'featuredProducts', $featuredProducts);
			$procategories = $this->general->getProductCategories();
			$this->template->set ( 'categories', $procategories);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			$this->template->set ( 'mcats', $maincats );
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			$url = base_url()."3dproducts?".http_build_query($params);
			$this->template->set ( 'params', $params);
			$this->template->set('producturl',$url);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."3dproducts?".http_build_query($params)."&";
			else
				$wpurl = base_url()."3dproducts?";
			$this->template->set('wpproducturl',$wpurl);
			$this->template->set ( 'page', '3dproduct' );
			$this->template->set ( 'browser_icon', 'products.ico' );
			$this->template->set ( 'userId', '' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout ('default')
			->title ( '3D Pro' )
			->set_partial ( 'header', 'default/inner-header' )
			->set_partial ( 'footer', 'default/footer' );
			$this->template->build ('product/product3D');
		}elseif($type ==7){
			$params['keyword'] = "";
			if(!empty($params['keyword']))
				$keyword = $params['keyword'];
			if(!empty($this->session->userdata('tsuser')['busi_id'])) {
				$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			} else {
				$params['busi_id'] = 0;
			}
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->library('mylib/General', 'general');
			$this->load->model ( 'Account_Model', 'account' );
			$vCatalogues = $this->sellers->searchVCatalogues($params);
			$total_pages = $this->sellers->countProducts($params);
			$this->template->set ( 'vCatalogues', $vCatalogues);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$featuredSellers = $this->sellers->getFeaturedWorldSeller();
			$this->template->set ( 'featuredSellers', $featuredSellers);
			$featuredBuyers = $this->sellers->getFeaturedWorldBuyer();
			$this->template->set ( 'featuredBuyers', $featuredBuyers);
			$featuredProducts = $this->sellers->getFeaturedProduct();
			$this->template->set ( 'featuredProducts', $featuredProducts);
			$procategories = $this->general->getProductCategories();
			$this->template->set ( 'categories', $procategories);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			$this->template->set ( 'mcats', $maincats );
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			$url = base_url()."vcatalogues?".http_build_query($params);
			$this->template->set ( 'params', $params);
			$this->template->set('producturl',$url);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."vcatalogues?".http_build_query($params)."&";
			else
				$wpurl = base_url()."vcatalogues?";
			$this->template->set('wpproducturl',$wpurl);
			$this->template->set ( 'page', 'vcatalogue' );
			$this->template->set ( 'browser_icon', 'products.ico' );
			$this->template->set ( 'userId', '' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout ('default')
			->title ( 'V-Catalogues' )
			->set_partial ( 'header', 'default/inner-header' )
			->set_partial ( 'footer', 'default/footer' )
			->set_partial ( 'vcatalogue', 'default/vcatalogue' );
			$this->template->build ('product/Vcatalogue');
		}elseif($type ==8){
			$this->load->model ( 'Account_Model', 'account' );
			$params['keyword'] = "";
			if(!empty($params['keyword']))
			$keyword = $params['keyword'];
			if(empty($params)) {
				if(!empty($_COOKIE['dseller_keywd'])) {
					$params['keyword'] = $_COOKIE['dseller_keywd'];
				}
			} else {
				setcookie('dseller_keywd', $params['keyword'], time() + (86400 * 30), "/");
			}
			$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->library('mylib/General');
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->model('Product_Model','product');
			$sellers = $this->sellers->searchSellerDesksites($params);
			$total_pages = $this->sellers->countSellerDesksites($params);
			$this->template->set ( 'Sellers', $sellers);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$featuredSellers = $this->sellers->getFeaturedWorldSeller();
			$this->template->set ( 'featuredSellers', $featuredSellers);
			$featuredProductVideo= $this->sellers->getFeaturedProductVideo();
			$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
			$featuredProducts = $this->sellers->getFeaturedProduct();
			$this->template->set ( 'featuredProducts', $featuredProducts);
			unset($params['community_only']);
			unset($params['community_hide']);
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			$url = base_url()."seller/desksites?".http_build_query($params);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			if(!empty($params['country'])) {
				$city= $this->sellers->getCityByCountry($params['country'],1);
				$this->template->set ( 'cities', $city);
			}
			$this->template->set ( 'mcats', $maincats );
			$this->template->set('sellerurl',$url);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			$this->template->set ( 'params', $params);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."seller/desksites?".http_build_query($params)."&";
			else 
				$wpurl = base_url()."seller/desksites?";
			$this->template->set('wpsellerurl',$wpurl);
			$this->template->set ( 'page', 'sellerdesksite' );
			$this->template->set ( 'browser_icon', 'seller.ico' );
			$this->template->set ( 'userId', '' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout ('default')
			->title ( 'Find Desksite' )
			->set_partial ( 'header', 'default/inner-header' )
			->set_partial ( 'footer', 'default/footer' );
			$this->template->build ('Home/sellerdesksite');
		}elseif($type ==9){
			$this->load->model ( 'Account_Model', 'account' );
			$params['keyword'] = "";
			if(!empty($params['keyword']))
				$keyword = $params['keyword'];
			if(empty($params)) {
				if(!empty($_COOKIE['dseller_keywd'])) {
					$params['keyword'] = $_COOKIE['dseller_keywd'];
				}
			} else {
				setcookie('dseller_keywd', $params['keyword'], time() + (86400 * 30), "/");
			}
			$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->library('mylib/General');
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->model('Product_Model','product');
			$sellers = $this->sellers->searchShippers($params);
			$total_pages = $this->sellers->countShippers($params);
			$this->template->set ( 'Sellers', $sellers);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$featuredSellers = $this->sellers->getFeaturedWorldSeller();
			$this->template->set ( 'featuredSellers', $featuredSellers);
			$featuredProductVideo= $this->sellers->getFeaturedProductVideo();
			$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
			$featuredProducts = $this->sellers->getFeaturedProduct();
			$this->template->set ( 'featuredProducts', $featuredProducts);
			unset($params['community_only']);
			unset($params['community_hide']);
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			$url = base_url()."shipper/desksites?".http_build_query($params);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			if(!empty($params['country'])) {
				$city= $this->sellers->getCityByCountry($params['country'],1);
				$this->template->set ( 'cities', $city);
			}
			$this->template->set ( 'mcats', $maincats );
			$this->template->set('sellerurl',$url);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			$this->template->set ( 'params', $params);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."shipper/desksites?".http_build_query($params)."&";
			else
				$wpurl = base_url()."shipper/desksites?";
			$this->template->set('wpsellerurl',$wpurl);
			$this->template->set ( 'page', 'shipperdesksite' );
			$this->template->set ( 'browser_icon', 'shipper.ico' );
			$this->template->set ( 'userId', '' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout ('default')
			->title ('Find Desksite' )
			->set_partial ( 'header', 'default/inner-header' )
			->set_partial ( 'footer', 'default/footer' );
			$this->template->build ('Home/shipperdesksite');
		}
        elseif($type =='0'){
            if($country[0] !=''){
                $this->load->model('Sellers_Model', 'search' );

                $buyers = $this->search->searchBusinessCountry(3,$country, $keyword);
                $this->template->set ('Buyers', $buyers);

                $Sellers = $this->search->searchBusinessCountry(1, $country, $keyword);
                $this->template->set ('Sellers', $Sellers);

                $Shippers = $this->search->searchBusinessCountry(2, $country, $keyword);
                $this->template->set ( 'Shippers', $Shippers);

                $Products = $this->search->searchProductCountry($country, $keyword);
                $this->template->set ( 'Products', $Products);

                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);

                $this->template->set ( 'page', 'search' );
                $this->template->set ( 'userId', '' );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Seller' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/search');

            }else{
                $this->load->model('Sellers_Model', 'search' );

                $buyers = $this->search->searchBusiness(1, $keyword);
                $this->template->set ('Buyers', $buyers);

                $Sellers = $this->search->searchBusiness(3, $keyword);
                $this->template->set ('Sellers', $Sellers);

                $Shippers = $this->search->searchBusiness(2, $keyword);
                $this->template->set ( 'Shippers', $Shippers);

                $Products = $this->search->searchProduct($keyword);
                $this->template->set ( 'Products', $Products);

                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $Country= $this->account->getCountry();
                $this->template->set ( 'Country', $Country);
                $this->template->set ( 'page', 'search' );
                $this->template->set ( 'userId', '' );
                $this->template->set_theme('default_theme');
                $this->template->set_layout ('default')
                ->title ( 'Find Seller' )
                ->set_partial ( 'header', 'default/inner-header' )
                ->set_partial ( 'footer', 'default/footer' );
                $this->template->build ('Home/search');

            }
        }

    }

    public function getSellerVideo($id) {
        $this->load->model('Vedio_model', 'videomodel' );
        $videodetail= $this->videomodel->getOneproductvedioById($id);
        $this->template->set ( 'videodetail', $videodetail);
        $this->template->set ( 'page', 'buyers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/video', '', true);
        echo $html;
    }

    public function getSellerProduct($id) {
        $this->load->model('Sellers_Model', 'seller' );
        $productdetail= $this->seller->getOneproductById($id);
        $this->template->set ( 'productdetail', $productdetail);
        $this->template->set ( 'page', 'sellers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/product', '', true);
        echo $html;
    }

    public function getShippersByCommunity($id) {
        $this->load->model('Sellers_Model', 'shippers' );
        $Shippers = $this->shippers->getShippersByCommunity($id);
        $this->template->set ( 'Shippers', $Shippers);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredShippers = $this->shippers->getFeaturedWorldShippers();
        $this->template->set ( 'featuredShippers', $featuredShippers);
        $featuredProductVideo= $this->shippers->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProducts= $this->shippers->getFeaturedProduct();
        $this->template->set ( 'featuredProducts', $featuredProducts);
        $this->template->set ( 'page', 'shippers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Find Shipper' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/shipper');
    }
    public function getShippersHideCommunity($id) {
        $this->load->model('Sellers_Model', 'shippers' );
        $Shippers = $this->shippers->getShippersHideCommunity($id);
        $this->template->set ( 'Shippers', $Shippers);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredShippers = $this->shippers->getFeaturedWorldShippers();
        $this->template->set ( 'featuredShippers', $featuredShippers);
        $featuredProductVideo= $this->shippers->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProducts= $this->shippers->getFeaturedProduct();
        $this->template->set ( 'featuredProducts', $featuredProducts);
        $this->template->set ( 'page', 'shippers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Find Shipper' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/shipper');
        /*$this->template->set_layout (false);
         $html= $this->template->build ('Home/pages/shippers-filter', '', true);
         echo $html; */
    }

    public function getShippersShippingLines($id) {
        $this->load->model('Sellers_Model', 'shippers' );
        $Shippers = $this->shippers->getShippersShippingLines($id);
        $this->template->set ( 'Shippers', $Shippers);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredShippers = $this->shippers->getFeaturedWorldShippers();
        $this->template->set ( 'featuredShippers', $featuredShippers);
        $featuredProductVideo= $this->shippers->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProducts= $this->shippers->getFeaturedProduct();
        $this->template->set ( 'featuredProducts', $featuredProducts);
        $this->template->set ( 'page', 'shippers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Find Shipper' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/shipper');
        /*$this->template->set_layout (false);
         $html= $this->template->build ('Home/pages/shippers-filter', '', true);
         echo $html; */
    }

    public function getSellersByBlackHorseMember() {
        $this->load->model('Sellers_Model', 'sellers' );
        $Sellers_list= $this->sellers->getSellersByBlackHorseMember();
        $this->template->set ( 'Sellers', $Sellers_list);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredSellers = $this->sellers->getFeaturedWorldSeller();
        $this->template->set ( 'featuredSellers', $featuredSellers);
        $featuredProductVideo= $this->account->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProducts = $this->account->getFeaturedProduct();
        $this->template->set ( 'featuredProducts', $featuredProducts);
        $this->template->set ( 'page', 'sellers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Find Seller' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/seller');
        /*$this->template->set_layout (false);
         $html= $this->template->build ('Home/pages/seller-filter', '', true);
         echo $html; */
    }

    public function getSellersByCommunityMember($id) {
        $this->load->model('Sellers_Model', 'sellers' );
        $Sellers_list= $this->sellers->getSellersByCommunityMember($id);
        $this->template->set ( 'Sellers', $Sellers_list);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredSellers = $this->sellers->getFeaturedWorldSeller();
        $this->template->set ( 'featuredSellers', $featuredSellers);
        $featuredProductVideo= $this->account->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProduct= $this->account->getFeaturedProduct();
        $this->template->set ( 'featuredProduct', $featuredProduct);
        $this->template->set ( 'page', 'sellers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Find Seller' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/seller');
        /*$this->template->set_layout (false);
         $html= $this->template->build ('Home/pages/seller-filter', '', true);
         echo $html;*/
    }

    public function getSellersByCommunityMemberhide($id) {
        $this->load->model('Sellers_Model', 'sellers' );
        $Sellers_list= $this->sellers->getSellersByCommunityMemberhide($id);
        $this->template->set ( 'Sellers', $Sellers_list);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredSellers = $this->sellers->getFeaturedWorldSeller();
        $this->template->set ( 'featuredSellers', $featuredSellers);
        $featuredProductVideo= $this->account->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProduct= $this->account->getFeaturedProduct();
        $this->template->set ( 'featuredProduct', $featuredProduct);
        $this->template->set ( 'page', 'sellers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Find Seller' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/seller');
        // 		$this->template->set_layout (false);
        // 		$html= $this->template->build ('Home/pages/seller-filter', '', true);
        // 		echo $html;
    }

    public function getCatalogueById($id) {
        $this->load->model('Catalogue_model','catalogue');
        $catalogue_items = $this->catalogue->getProductCatalogueItems($id);
        $this->template->set ( 'products', $catalogue_items );
        $this->template->set ( 'page', 'home' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html = $this->template->build ('Home/pages/bcatalogue', '', true);
        echo $html;
    }
    public function getSellerById($id) {
        $this->load->model('Sellers_Model', 'seller' );
        $SellerBox = $this->seller->getSellerById($id);
        $this->template->set ( 'SellerBox', $SellerBox);
        $this->template->set ( 'page', 'sellers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/sellers', '', true);
        echo $html;
    }
    public function getBuyerById($id) {
        $this->load->model('Sellers_Model', 'seller' );
        $BuyerBox= $this->seller->getBuyerById($id);
        $this->template->set ( 'BuyerBox', $BuyerBox);
        $this->template->set ( 'page', 'sellers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/buyers', '', true);
        echo $html;
    }
    public function getShipperById($id) {
        $this->load->model('Sellers_Model', 'seller' );
        $ShipperBox= $this->seller->getShipperById($id);
        $this->template->set ( 'SellerBox', $ShipperBox);
        $this->template->set ( 'page', 'shippers' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/sellers', '', true);
        echo $html;
    }

    public function bstation() {
        $this->load->model('Sellers_Model', 'seller' );
        $this->template->set ( 'page', 'bstation' );
        $this->template->set ( 'browser_icon', 'trade.ico' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION - B-Station' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('Home/bstation');
    }
    public function DesksiteByBusiId($id,$product_id=NULL){
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $this->load->model('Product_Model','product');
        $community = array();
        if(!empty($busi_id)) {
            if($busi_id != $id) {
                $community = $this->product->getInCommunity($busi_id,$id);
            }
        }
        $ip_address = getRealIP();
        $ipinfo = ip_info($ip_address,'location');
        if(!empty($ip_address)) {
            $map = array();
            $map['busi_id'] = $id;
            $map['visitor_id'] = $busi_id;
            $map['visit_date'] = date('Y-m-d');
            $map['city'] = $ipinfo['city'];
            $map['country'] = $ipinfo['country'];
            $map['ip_address'] = $ip_address;
            $this->load->model('Tool_model','mytoolmodel');
            $this->mytoolmodel->addBusinessVisit($map);
        }
        $map =array();
        $map['id'] = $id;
        $map['user_id'] = $busi_id ;
        $this->load->model('Catalogue_model','catalogue');
        $this->load->model('Myudtalk_model','myudtalk');
        $Desksites= $this->product->getDesksiteByBusiId($map);
        $catalogues = $this->catalogue->getProductCatalogues($id);
        $images = $this->myudtalk->getUdFiles($busi_id);
        $countries = $this->product->getAllCountries();
        $branches = $this->product->getBusinessBranchesByBusiId($map);
        $contact_details = array();
        $totalcount = 0;
        if(!empty($busi_id)) {
            $contact_details = $this->account->getBusinessContactDetails($busi_id);
            $totalcount = $this->common->getTotalCountForAlert($busi_id);
        }
            $this->template->set ( 'totalcount', $totalcount);
            $this->template->set ( 'countries', $countries );
            $this->template->set ( 'community', $community );
            $this->template->set ( 'branches', $branches );
            $this->template->set ( 'images', $images);
            $this->template->set ( 'Desksites', $Desksites);
            $this->template->set ( 'catalogues', $catalogues);
            $this->template->set ( 'contact_details',$contact_details);
            $this->template->set ( 'busi_id', $id);
            $this->template->set ( 'page', 'desksite');
            $this->template->set ( 'pagename', 'seller');
            $this->template->set ( 'browser_icon', 'desksite.ico');
            $this->template->set( 'product_id',$product_id);
            $this->template->set_theme('default_theme');
            $this->template->set_layout ('default')
            ->title ( 'DeskSite' )
            ->set_partial ( 'header', 'default/desk-header' )
            ->set_partial ( 'footer', 'default/footer-sbc' );
            $this->template->build ('desksite/desksite');

    }

    public function getComapnyProfile($id) {
        $this->load->library('mylib/FactoryLib');
        $this->load->model('Product_Model', 'product' );
        $Company = $this->product->getComapnyProfile($id);
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $ip_address = getRealIP();
        $ipinfo = ip_info($ip_address,'location');
        if(!empty($ip_address)) {
            $map = array();
            $map['busi_id'] = $id;
            $map['visitor_id'] = $busi_id;
            $map['visit_date'] = date('Y-m-d');
            $map['city'] = $ipinfo['city'];
            $map['country'] = $ipinfo['country'];
            $map['ip_address'] = $ip_address;
            $this->load->model('Tool_model','mytoolmodel');
            $this->mytoolmodel->addBusinessVisit($map);
        }
        $user_rnd = $this->factorylib->getUserRNDtype($Company[0]['factory_id']);
        $trade_info = $this->product->getCompanyTradeInfo($id);
        $market_info = array();
        if(!empty($trade_info[0]['main_market_ids']))
            $market_info = $this->product->getCompanyMarketInfo($trade_info[0]['main_market_ids']);
            $this->template->set('user_rnd',$user_rnd);
            $this->template->set('trade_info',$trade_info);
            $this->template->set('market_info',$market_info);
            $this->template->set ( 'Company', $Company);
            $this->template->set ( 'page', 'desksite' );
            $this->template->set ( 'userId', '' );
            $this->template->set_theme('default_theme');
            $this->template->set_layout (false);
            $html= $this->template->build ('desksite/subpages/company_profile', '', true);
            echo $html;
    }

    public function getBuyerComapnyProfile($id) {
        $this->load->library('mylib/FactoryLib');
        $this->load->model('Product_Model', 'product' );
        $Company = $this->product->getComapnyProfile($id);
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $ip_address = getRealIP();
        $ipinfo = ip_info($ip_address,'location');
        if(!empty($ip_address)) {
            $map = array();
            $map['busi_id'] = $id;
            $map['visitor_id'] = $busi_id;
            $map['visit_date'] = date('Y-m-d');
            $map['city'] = $ipinfo['city'];
            $map['country'] = $ipinfo['country'];
            $map['ip_address'] = $ip_address;
            $this->load->model('Tool_model','mytoolmodel');
            $this->mytoolmodel->addBusinessVisit($map);
        }
        $pterms = $this->product->getBusinessPaymentTerms($id);
        $this->template->set('pterms',$pterms);
        $this->template->set ( 'Company', $Company);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/buyer_company_profile', '', true);
        echo $html;
    }

    public function getShipperComapnyProfile($id) {
        $this->load->library('mylib/FactoryLib');
        $this->load->model('Product_Model', 'product' );
        $Company = $this->product->getComapnyProfile($id);
        $mainservices = $this->product->getMainShippingServices($id);
        $specialservices = $this->product->getSpecialShippingServices($id);
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $ip_address = getRealIP();
        $ipinfo = ip_info($ip_address,'location');
        if(!empty($ip_address)) {
            $map = array();
            $map['busi_id'] = $id;
            $map['visitor_id'] = $busi_id;
            $map['visit_date'] = date('Y-m-d');
            $map['city'] = $ipinfo['city'];
            $map['country'] = $ipinfo['country'];
            $map['ip_address'] = $ip_address;
            $this->load->model('Tool_model','mytoolmodel');
            //$this->mytoolmodel->addBusinessVisit($map);
        }
        $user_rnd = $this->factorylib->getUserRNDtype($Company[0]['factory_id']);
        $this->template->set('user_rnd',$user_rnd);
        $this->template->set ( 'Company', $Company);
        $this->template->set ( 'mainservices', $mainservices);
        $this->template->set ( 'specialservices', $specialservices);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/shipper_company_profile', '', true);
        echo $html;
    }

    public function getComapnyAbout($id) {
        $this->load->model('Product_Model', 'product' );
        $Company= $this->product->getComapnyAbout($id);
        $this->template->set ( 'Company', $Company);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/about-us', '', true);
        echo $html;
    }
    public function getComapnyCertificate($id) {
        $this->load->model('Product_Model', 'product' );
        $Certificate = $this->product->getComapnyCertificate($id);
        $licences = $this->product->getComapnyMainCertificate($id);
        $this->template->set ( 'Certificate', $Certificate);
        $this->template->set ( 'licences', $licences);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/certification', '', true);
        echo $html;
    }
    public function getAdvantage($id) {
        $this->load->model('Product_Model', 'product' );
        $Company = $this->product->getAdvantage($id);
        $this->template->set ( 'Company', $Company);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/advantage', '', true);
        echo $html;
    }

    public function getMyfiles($id) {
        $this->load->model('Product_Model', 'product' );
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
		    $MyFiles = $this->product->getMyFiles($id,$busi_id);
        $binfo = $this->product->getBusinessCategory($id);
        $this->template->set ( 'bcatinfo', $binfo);
        $this->template->set ( 'Files', $MyFiles);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/my-files', '', true);
        echo $html;
    }
    public function getContactPerson($id) {
        $this->load->model('Product_Model', 'product' );
        $Contacts = $this->product->getContactPerson($id);
        $this->template->set ( 'Contacts', $Contacts);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/contact-person', '', true);
        echo $html;
    }

    public function getProductVideos($id) {
        $this->load->model('Product_Model', 'product' );
        $Videos = $this->product->getProductVideosByBusiId($id);
        $this->template->set ( 'Videos', $Videos);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/product-video', '', true);
        echo $html;
    }
    public function getShipperVideos($id) {
        $this->load->model('Product_Model', 'product' );
        $Videos = $this->product->getShipperVideosByBusiId($id);
        $this->template->set ( 'Videos', $Videos);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/shipper-videos', '', true);
        echo $html;
    }
    public function get3DProduct($id) {
        $this->load->model('Product_Model', 'product' );
        $Products = $this->product->getProduct3Dlist($id);
        $this->template->set ( 'Products', $Products);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/3d-product', '', true);
        echo $html;
    }
    public function getCurrentPost($id) {
        $this->load->model('Product_Model', 'product' );
        $Posts = $this->product->getCurrentPost($id);
        $binfo = $this->product->getBusinessCategory($id);
        $this->template->set ( 'bcatinfo', $binfo);
        $this->template->set ( 'Posts', $Posts);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/post', '', true);
        echo $html;
    }
    public function getCurrentRequest($id) {
        $this->load->model('Product_Model', 'product' );
        $Posts = $this->product->getCurrentRequest($id);
        $binfo = $this->product->getBusinessCategory($id);
        $this->template->set ( 'bcatinfo', $binfo);
        $this->template->set ( 'Posts', $Posts);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/post', '', true);
        echo $html;
    }

    public function buyerCurrentRequest($id) {
        $this->load->model('Product_Model', 'product' );
        $Posts = $this->product->getCurrentRequest($id);
        $binfo = $this->product->getBusinessCategory($id);
        $this->template->set ( 'bcatinfo', $binfo);
        $this->template->set ( 'Posts', $Posts);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/post', '', true);
        echo $html;
    }
    public function addFavourite($busi_id, $type) {
        $my_id = $this->session->userdata('tsuser')['busi_id'];
        $data = array(
            'busi_id' => $my_id,
            'favorite_id' => $busi_id,
            'type' =>$type
        );
        $this->load->model('Product_Model', 'product' );
        $result = $this->product->addFavourite($data);
        echo json_encode($result);
    }

    public function getRoutesByBusiId($busi_id) {
        $this->load->model('Product_Model', 'product' );
        $routes = $this->product->getRoutesByBusiId($busi_id);
        $this->template->set ( 'Routes', $routes);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/routes', '', true);
        echo $html;
    }
    public function getVerifiedByBusiId($busi_id) {
        $this->load->model('Product_Model', 'product' );
        $Verified = $this->product->getRoutesByBusiId($busi_id);
        $this->template->set ( 'verifiedDetails', $Verified);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/verified-member', '', true);
        echo $html;
    }
    public function getProductCategories($busi_id) {
        $this->load->model('Product_Model', 'product' );
        $productCategories = $this->product->getActiveProductAndSubProduct($busi_id);
        $this->template->set ( 'productCategories', $productCategories);
        $this->template->set ( 'mybid', $busi_id );
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/product-category', '', true);
        echo $html;
    }


    public function desksiteSearch(){
        $keyword = $this->input->post('keyword');
        $busi_id = $this->input->post('busi_id');
        $this->load->model('Account_Model', 'account' );
        $this->load->model('Search_Model', 'search' );
        $this->load->model('Sellers_Model', 'buyers' );
        $this->load->model('Product_Model', 'product' );
        $search = $this->search->searchProductByBusiId($keyword,$busi_id);
        $this->template->set ( 'products', $search);
        $Country= $this->account->getCountry();
        $this->template->set ( 'Country', $Country);
        $featuredBuyers = $this->buyers->getFeaturedWorldSeller();
        $this->template->set ( 'featuredSellers', $featuredBuyers);
        $featuredProductVideo= $this->account->getFeaturedProductVideo();
        $this->template->set ( 'featuredProductVideo', $featuredProductVideo);
        $featuredProduct= $this->account->getFeaturedProduct();
        $maincats = $this->product->getActiveProductMainAndSubCategories();
        $this->template->set ( 'mcats', $maincats );
        $this->template->set ( 'featuredProducts', $featuredProduct);
        $this->template->set ( 'page', 'buyers' );
        $this->template->set ( 'browser_icon', 'products.ico' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION - Desksite' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('product/product');

    }

    public function classicViewDesksite($id){
        //$this->load->model('Product_Model', 'product' );
        //$Company= $this->product->getComapnyProfile($id);
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        if(!empty($busi_id)) {
            $map = array();
            $map['busi_id'] = $busi_id;
            $map['item_id'] = $id;
            $map['visit_date'] = date('Y-m-d');
            $this->load->model('Tool_model','mytoolmodel');
            $this->mytoolmodel->addProductVisit($map);
        }
        $this->load->model('Product_Model', 'product' );
        $getProductdetailsById = $this->product->getProductdetailsById($id);
        $this->template->set ( 'Productdetails', $getProductdetailsById);
        $colors = $this->product->getProductColorById($id);
        $this->template->set ( 'colors', $colors);
        $Specifications = $this->product->getProductSpecificationById($id);
        $this->template->set ( 'specifications', $Specifications);
        $this->template->set ( 'page', 'website');
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION - Website' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('desksite/website');

    }
    public function productViewWebsite($id){
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        if(!empty($busi_id)) {
            $map = array();
            $map['busi_id'] = $busi_id;
            $map['item_id'] = $id;
            $map['visit_date'] = date('Y-m-d');
            $this->load->model('Tool_model','mytoolmodel');
            $this->mytoolmodel->addProductVisit($map);
        }
        //$this->load->model('Product_Model', 'product' );
        //$Company= $this->product->getComapnyProfile($id);
        $this->load->model('Product_Model', 'product' );
        $getProductdetailsById = $this->product->getProductdetailsById($id);
        $this->template->set ( 'Productdetails', $getProductdetailsById);
        $colors = $this->product->getProductColorById($id);
        $this->template->set ( 'colors', $colors);
        $Specifications = $this->product->getProductSpecificationById($id);
        $this->template->set ( 'specifications', $Specifications);
        $this->template->set ( 'page', 'website');
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION - Products' )
        ->set_partial ( 'header', 'default/inner-header' )
        ->set_partial ( 'footer', 'default/footer' );
        $this->template->build ('desksite/website');

    }
    public function advertisement($id){

        $homeAds = $this->account->getBannerAdById($id);
        $this->template->set ( 'bannerAds', $homeAds);
        $this->template->set ( 'page', 'ads');
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'TRADE STATION - Advertisment' )
        ->set_partial ( 'header', 'default/desk-header' )
        ->set_partial ( 'footer', 'default/desk-header' );
        $this->template->build ('Home/advertisement');

    }
    /**
     * get buyers desksite information
     * 
     * @param int $id
     * @return string buyers desksite page
     */
    public function buyerProfileByBusiId($id)
    {
        $this->load->model('Product_Model', 'product');
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $ip_address = getRealIP();
        $ipinfo = ip_info($ip_address, 'location');
        $community = array();
        $map = array();
        $totalcount = 0;

        if (!empty($busi_id) && !empty($id)) {
            if ($busi_id != $id) {
                $community = $this->product->getInCommunity($busi_id, $id);
            }
        }

        if (!empty($ip_address)) {
            $map['busi_id'] = $id;
            $map['visitor_id'] = $busi_id;
            $map['visit_date'] = date('Y-m-d');
            $map['city'] = $ipinfo['city'];
            $map['country'] = $ipinfo['country'];
            $map['ip_address'] = $ip_address;
            $this->load->model('Tool_model', 'mytoolmodel');
            $this->mytoolmodel->addBusinessVisit($map);
        }

        $map['id'] = $id;
        $map['user_id'] = $busi_id;
        $Desksites = $this->product->getDesksiteByBusiId($map);
        $countries = $this->product->getAllCountries();
        $requests = $this->product->getCurrentRequest($busi_id);
        $contact_details = $this->account->getBusinessContactDetails($id);
        /* ADDED TO SHOW ALERT COUNT */
        if (!empty($busi_id) && !empty($id)) {
            $totalcount = $this->common->getTotalCountForAlert($busi_id);
        }
        $this->template->set('totalcount', $totalcount);
        $this->template->set('countries', $countries);
        $this->template->set('Desksites', $Desksites);
        $this->template->set('community', $community);
        $this->template->set('contact_details', $contact_details);
        $this->template->set('requests', $requests);
        $this->template->set('page', 'desksite');
        $this->template->set('pagename', 'buyer');
        $this->template->set('buyer', BUYER_ID);
        $this->template->set('steps_needed', self::STEPS_COMPLETED);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('default')
            ->title('Buyer Profile')
            ->set_partial('header', 'default/desk-header')
            ->set_partial('footer', 'default/footer-sbc');
        $this->template->build('desksite/buyer-profile');
    }

    public function shipperProfileByBusiId($id){
        $this->load->model('Product_Model','product');
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $community = array();
		$self_user=0;
        $totalcount = 0;
        if(!empty($busi_id)) {
            if($busi_id != $id) {
                $community = $this->product->getInCommunity($busi_id,$id);
				$self_user=1;
            }
        }
        $ip_address = getRealIP();
        $ipinfo = ip_info($ip_address,'location');
        if(!empty($ip_address)) {
            $map = array();
            $map['busi_id'] = $id;
            $map['visitor_id'] = $busi_id;
            $map['visit_date'] = date('Y-m-d');
            $map['city'] = $ipinfo['city'];
            $map['country'] = $ipinfo['country'];
            $map['ip_address'] = $ip_address;
            $this->load->model('Tool_model','mytoolmodel');
            $this->mytoolmodel->addBusinessVisit($map);
        }
        $map =array();
        $map['id'] = $id;
        $map['user_id'] = $busi_id ;
        $this->load->model('Myudtalk_model','myudtalk');
        $Desksites= $this->product->getShipperDesksiteByBusiId($map);
        $images = $this->myudtalk->getUdFiles($busi_id);
        $branches = $this->product->getBusinessBranchesByBusiId($map);
        $countries = $this->product->getAllCountries();
        if(!empty($busi_id)) {
            $totalcount = $this->common->getTotalCountForAlert($busi_id);
        }
        $this->template->set ( 'totalcount', $totalcount);
        $this->template->set ( 'countries', $countries );
        $this->template->set ( 'images', $images);
        $this->template->set ( 'branches', $branches);
        $this->template->set ( 'Desksites', $Desksites);
        $this->template->set ( 'community', $community);
        $this->template->set ( 'self_user', $self_user);
        $this->template->set ( 'page', 'desksite');
        $this->template->set ( 'pagename', 'shipper');
        $this->template->set_theme('default_theme');
        $this->template->set_layout ('default')
        ->title ( 'Shipper Profile' )
        ->set_partial ( 'header', 'default/desk-header' )
        ->set_partial ( 'footer', 'default/footer-sbc' );
        $this->template->build ('desksite/shipper-profile');

    }
    public function AddCommunity($busi_id){
        $this->load->model('Community_Model' , 'community');
        $map =array();
        $map['busi_id'] = $busi_id;
        $map['my_id'] = $this->session->userdata('tsuser')['busi_id'];
        $result = $this->community->addToCommunity($map);
        if($result){
            $data['msg'] = "Added to your community";
        }
        else{
            $data['msg'] ="Please try again.";
        }

    }

    public function setHomePageCookie() {
        setcookie('drag_me', 1, time() + (86400 * 30), "/");
    }


    public function cityByCountry(){
        $country = $this->input->post('country');
        $type = $this->input->post('busi_type');
        $this->load->model('Sellers_Model', 'sellers' );
        $city= $this->sellers->getCityByCountry($country,$type);
        $this->template->set ( 'cities', $city);
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/city', '', true);
        echo $html;
    }

    public function getSubscriptionCheckout($plan_id) {
        $this->load->model('Payment_model','payment');
        $busi_id = $this->session->userdata('tsuser')['busi_id'];
        $cust_type = $this->session->userdata('tsuser')['category_id'];
        $this->load->model('Package_model','adsmodel');
        $msad = $this->adsmodel->getSubscriptionPackageById($plan_id);
        $sprice = 4999;
        if($cust_type == 1) {
            $sprice = $msad[0]['price'];
        } else if($cust_type == 2) {
            $sprice = $msad[0]['shipper_price'];
        }
        $pdata = array();

        $udetails = $this->payment->getMemberDetails($busi_id);
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
        $payment_data = $this->payment->getPaymentInfo($busi_id);
        if(!empty($payment_data))
            $pdata['invoice_id'] = getInvoiceCode($payment_data[0]['payment_id']);
        else
            $pdata['invoice_id'] = getInvoiceCode(1);
        $this->template->set ( 'invoice', $pdata );
        $this->template->set ( 'payment_data', $payment_data );
        $this->template->set ( 'msad', $msad);
        $this->template->set ( 'sprice', $sprice);
        $this->template->set ( 'page', 'msads' );
        $this->template->set ( 'page', 'msads' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $this->template->build ('station/pages/subpages/subscriptionCheckout');
    }

    public function getCatalogueByBusiId($busi_id) {
        $this->load->model('Catalogue_model','catalogue');
        $catalogues = $this->catalogue->getProductCatalogues($busi_id);
        $params = array();
        if(count($catalogues) > 0) {
            $id = $catalogues[0]['id'];
            $catalogue_items = $this->catalogue->getProductCatalogueItems($id);
            $this->template->set ( 'products', $catalogue_items );
            $this->template->set ( 'catalogues', $catalogues );
            $this->template->set ( 'page', 'home' );
            $this->template->set_theme('default_theme');
            $this->template->set_layout (false);
            $html = $this->template->build ('Home/pages/bcatalogue', '', true);
            $this->template->set ( 'catalogues', $catalogues );
            $this->template->set_theme('default_theme');
            $this->template->set_layout (false);
            $html2 = $this->template->build ('default/catalogue-links', '', true);
            $params['html'] = $html;
            $params['html2'] = $html2;
            $params['id'] = $id;
            $params['busi_id'] = $busi_id;
            $params['views'] = $catalogues[0]['views'];
            $params['likes'] = $catalogues[0]['likes'];
            $params['user_id'] = $catalogues[0]['user_id'];
            $params['accept_chat'] = $catalogues[0]['accept_chat'];
            echo json_encode($params);
        } else {
            $params['html'] = 0;
            $params['id'] = 0;
            echo json_encode($params);
        }
    }

    public function getNextCatalogueById($id) {
        $this->load->model('Catalogue_model','catalogue');
        $catalogue = $this->catalogue->getProductCatalogueById($id);
        $catalogue_items = $this->catalogue->getProductCatalogueItems($id);
        $this->template->set ( 'products', $catalogue_items );
        $this->template->set ( 'page', 'home' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/bcatalogue', '', true);
        $params['html'] = $html;
        $params['id'] = $id;
        $params['busi_id'] = $catalogue[0]['busi_id'];
        $params['views'] = $catalogue[0]['views'];
        $params['likes'] = $catalogue[0]['likes'];
        $params['user_id'] = $catalogue[0]['user_id'];
        echo json_encode($params);
    }
    public function getCataloguePages($id,$pageno){
        $this->load->model('Catalogue_model','catalogue');

        if($pageno % 2 == 1){
            $record = ($pageno+1)/2;
        }else
        {
            $record = $pageno/2;
        }

        $catalogue_items = $this->catalogue->getProductCatalogueItemsPage($id,$record);
        $this->template->set ( 'product', $catalogue_items );
        $this->template->set ('pageno', $pageno);
        $this->template->set ( 'page', 'home' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        //print_r($catalogue_items);
        $html = $this->template->build ('Home/pages/bcatalogue-items', '', true);
        echo $html;
    }

    public function getShipperServices($busi_id) {
        $this->load->model('Product_Model', 'product' );
        $services = $this->product->getShipperServices($busi_id);
        $this->template->set ( 'services', $services);
        $this->template->set ( 'page', 'desksite' );
        $this->template->set ( 'userId', '' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/services', '', true);
        echo $html;
    }

    public function likeBusiness($busi_id) {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $resp = array();
        if(!empty($mybusi_id)) {
            $this->load->model('Product_Model', 'product' );
            $result = $this->product->updateBusinessLikes($busi_id,$mybusi_id);
            if($result) {
                $resp['status'] = 1;
                $resp['msg'] = "WE HAVE RECORDED YOUR RESPONSE";
            } else {
                $resp['status'] = 0;
                $resp['msg'] = "YOU HAVE ALREADY LIKED THIS DESKSITE";
            }
        } else {
            $resp['status'] = 0;
            $resp['msg'] = "LOGIN TO LIKE";
        }
        echo json_encode($resp);

    }

    public function likeCatalogue($catalogue_id) {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $resp = array();
        if(!empty($mybusi_id)) {
            $this->load->model('Product_Model', 'product' );
            $this->product->updateCatalogueLikes($catalogue_id);
            $resp['status'] = 1;
            $resp['msg'] = "WE HAVE RECORDED YOUR RESPONSE";
        } else {
            $resp['status'] = 0;
            $resp['msg'] = "LOGIN TO LIKE";
        }
        echo json_encode($resp);

    }

    public function getGeneralInquiry($busi_id) {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $this->load->model('Product_Model','product');
        $mydesksite = $this->product->getBusinessContactInfo(array('id'=>$mybusi_id));
        $desksites = $this->product->getBusinessContactInfo(array('id'=>$busi_id));
        $this->template->set ( 'mydesksite', $mydesksite);
        $this->template->set ( 'desksite', $desksites);
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/general_inquiry', '', true);
        echo $html;
    }

    public function getGeneralInquiryBuyer($busi_id) {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $this->load->model('Product_Model','product');
        $mydesksite = $this->product->getBusinessContactInfo(array('id'=>$mybusi_id));
        $desksites = $this->product->getBusinessContactInfo(array('id'=>$busi_id));
        $this->template->set ( 'mydesksite', $mydesksite);
        $this->template->set ( 'desksite', $desksites);
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/general_inquiry', '', true);
        echo $html;
    }

    public function getItemInquiry($busi_id,$item_id) {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $this->load->model('Product_Model','product');
        $mydesksite = $this->product->getBusinessContactInfo(array('id'=>$mybusi_id));
        $desksites = $this->product->getBusinessContactInfo(array('id'=>$busi_id));
        $item = $this->product->getProductById($item_id);
        $this->template->set ( 'mydesksite', $mydesksite);
        $this->template->set ( 'desksite', $desksites);
        $this->template->set ( 'item', $item);
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/item_enquiry', '', true);
        echo $html;
    }

    public function saveGeneralInquiry() {
        $this->load->model('Product_Model','product');
        $userId = $this->session->userdata('tsuser')['userid'];
        if(!empty($this->input->post('product_id'))) {
            $product_id = $this->input->post('product_id');
        } else {
            $product_id = 0;
        }
        if(!empty($this->input->post('post_type'))) {
            $post_type = $this->input->post('post_type');
        } else {
            $post_type = 0;
        }
        if(!empty($this->input->post('post_id'))) {
            $post_id = $this->input->post('post_id');
        } else {
            $post_id = 0;
        }
        $params = array();
        $params['busi_id'] = $this->input->post('busi_id');
        $params['requester_busi_id'] = $this->input->post('my_busi_id');
        $params['inquiry_subject'] = $this->input->post('title');
        $params['inquiry_body'] = $this->input->post('message');
        $params['product_id'] = $product_id;
        $params['inquiry_type_id'] = $this->input->post('inquiry_type_id');
        $params['post_type'] = $post_type;
        $params['post_id'] = $post_id;
        $params['name'] = $this->input->post('name');
        $params['company'] = $this->input->post('company');
        $params['email'] = $this->input->post('email');
        $params['phone'] = $this->input->post('phone');
        $params['created_date'] = date('Y-m-d H:i:s');
        $params['attachment1'] = "";
        $params['attachment1_size'] = 0;
        $params['attachment2'] = "";
        $params['attachment2_size'] = 0;
        $params['attachment3'] = "";
        $params['attachment3_size'] = 0;
        $params['attachment4'] = "";
        $params['attachment4_size'] = 0;
        $size = 0;
        $pathname = FCPATH."assets/images/user_images/$userId/buyerrequest";
        $config = array(
            'upload_path'   => "assets/images/user_images/$userId/buyerrequest",
            'allowed_types' => 'gif|jpg|png|PNG|JPEG|pdf|doc|docx|xls|xlsx',
            'overwrite'     => 1,
        );
        if (! is_dir ($pathname)) {
            mkdir ($pathname, 0777, TRUE );
        }
        $this->load->library('upload', $config);
        if(!empty($_FILES['FileUpload1'])) {
            $files = $_FILES['FileUpload1'];
            $k = 1;
            foreach ($files['name'] as $key => $image) {
                $_FILES['FileUpload1']['name']= $files['name'][$key];
                $_FILES['FileUpload1']['type']= $files['type'][$key];
                $_FILES['FileUpload1']['tmp_name']= $files['tmp_name'][$key];
                $_FILES['FileUpload1']['error']= $files['error'][$key];
                $_FILES['FileUpload1']['size']= $files['size'][$key];
                $file_name = microtime(true)."-".$image;
                $config['file_name'] = $file_name;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('FileUpload1')) {
                    $file_name = $this->upload->data('file_name');
                    $params['attachment'.$k] = 'images/user_images/'.$userId.'/buyerrequest/'. $file_name;
                    $size = $size + $files['size'][$key];
                    $params['attachment'.$k.'_size'] = $files['size'][$key];
                    $k++;
                } else {
                    //
                }
            }
        }
        $this->load->model('Inquiry_model', 'inquirymodel' );
        $id = $this->inquirymodel->saveInquiry($params);
        $resp = array();
        if(!empty($id)) {
            /* ************** Storage Implementation *************** */
            if($size != 0) {
                $this->load->library('mylib/StorageLib');
                $storage = array();
                $storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
                $storage['field'] = 'inquiries';
                $storage['datasize'] = round($size/1024,2);
                 
                $this->storagelib->updateStorageByBusiId($storage);
            }
            /* ***************************************************** */
            $resp['status'] = 1;
            $resp['msg'] = "Inquiry added successfully.";
        } else {
            $resp['status'] = 0;
            $resp['msg'] = "Failed to add Inquiry.";
        }
        echo json_encode($resp);
    }

    public function saveGeneralOffer() {
        $this->load->model('Product_Model','product');
        $userId = $this->session->userdata('tsuser')['userid'];
        $product_id = 0;
        $post_type = 0;
        $post_id = 0;
        if(!empty($this->input->post('product_id'))) {
            $product_id = $this->input->post('product_id');
        }
        if(!empty($this->input->post('post_type'))) {
            $post_type = $this->input->post('post_type');
        }
        if(!empty($this->input->post('post_id'))) {
            $post_id = $this->input->post('post_id');
        }
        $size = 0;
        $params = array();
        $params['busi_id'] = $this->input->post('busi_id');
        $params['offer_sender_id'] = $this->input->post('my_busi_id');
        $params['offer_subject'] = $this->input->post('title');
        $params['offer_body'] = $this->input->post('message');
        $params['product_id'] = $product_id;
        $params['offer_type_id'] = $this->input->post('offer_type_id');
        $params['post_type'] = $post_type;
        $params['post_id'] = $post_id;
        $params['name'] = $this->input->post('name');
        $params['company'] = $this->input->post('company');
        $params['email'] = $this->input->post('email');
        $params['phone'] = $this->input->post('phone');
        $params['price'] = $this->input->post('price');
        $params['qty'] = $this->input->post('qty');
        $params['fob'] = $this->input->post('fob');
        $params['created_date'] = date('Y-m-d H:i:s');
        $params['attachment1'] = "";
        $params['attachment1_size'] = 0;
        $params['attachment2'] = "";
        $params['attachment2_size'] = 0;
        $params['attachment3'] = "";
        $params['attachment3_size'] = 0;
        $params['attachment4'] = "";
        $params['attachment4_size'] = 0;
        $params['alert_viewed'] = 0;
        $config = array(
            'upload_path'   => "assets/images/user_images/$userId/selleroffer",
            'allowed_types' => 'gif|jpg|png|PNG|JPEG|pdf|doc|docx|xls|xlsx',
            'overwrite'     => 1,
        );
        $pathname = FCPATH."assets/images/user_images/$userId/selleroffer";
        if (! is_dir ($pathname)) {
            mkdir ($pathname, 0777, TRUE );
        }
        $this->load->library('upload', $config);
        if(!empty($_FILES['FileUpload1'])) {
            $files = $_FILES['FileUpload1'];
            $k = 1;
            foreach ($files['name'] as $key => $image) {
                $_FILES['FileUpload1']['name']     = $files['name'][$key];
                $_FILES['FileUpload1']['type']     = $files['type'][$key];
                $_FILES['FileUpload1']['tmp_name'] = $files['tmp_name'][$key];
                $_FILES['FileUpload1']['error']    = $files['error'][$key];
                $_FILES['FileUpload1']['size']     = $files['size'][$key];
                $file_name = microtime(true)."-".$image;
                $config['file_name'] = $file_name;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('FileUpload1')) {
                    $file_name = $this->upload->data('file_name');
                    $params['attachment'.$k] = 'images/user_images/'.$userId.'/selleroffer/'. $file_name;
                    $size = $size + $files['size'][$key];
                    $params['attachment'.$k.'_size'] = $files['size'][$key];
                    $k++;
                }
            }
        }
        $this->load->model('Offer_model', 'offermodel' );
        $id = $this->offermodel->saveOffer($params);
        $resp = array();
        if(!empty($id)) {
            /* ************** Storage Implementation *************** */
            if($size != 0) {
                $this->load->library('mylib/StorageLib');
                $storage = array();
                $storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
                $storage['field'] = 'offers';
                $storage['datasize'] = round($size/1024,2);
                $this->storagelib->updateStorageByBusiId($storage);
            }
            /* ***************************************************** */
            $resp['status'] = 1;
            $resp['msg'] = "Your offer has been sent successfully to the buyer.";
        } else {
            $resp['status'] = 0;
            $resp['msg'] = "Failed to add Offer.";
        }
        echo json_encode($resp);

    }

    public function saveContactUs() {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $params = array();
        $params['busi_id'] = $this->input->post('busi_id');
        $params['sender_id'] = $mybusi_id;
        $params['name'] = $this->input->post('name');
        $params['email'] = $this->input->post('email');
        $params['mobile'] = $this->input->post('mobile');
        $params['country'] = $this->input->post('country');
        $params['city'] = $this->input->post('city');
        $params['message'] = $this->input->post('message');
        $params['created_date'] = date('Y-m-d H:i:s');
        $this->load->model('Alert_model', 'alertmodel' );
        $id = $this->alertmodel->saveContactUs($params);
        
        $subject = 'Contact Buyer';

        $full_msg = 'Name: '.$params['name'].'<br>Email: '.$params['email'].'<br>Contact : '.$params['mobile'].'<br>Subject: '.$subject.'<br>Message: '.$params['message'].'<br>city: '.$params['city'];
        
        $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'mytrdstation@gmail.com', // change it to yours
                'smtp_pass' => 'tradestation123', // change it to yours
                'mailtype' => 'text',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
                );
    
        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from('no-reply@vcommers.com'); // change it to yours
        $this->email->to($params['email']); // change it to yours
        $this->email->subject($subject);
        $this->email->message($full_msg);
        $this->email->send();

        $resp = array();
        if(!empty($id)) {
            $resp['status'] = 1;
            $resp['msg'] = "Query added successfully.";
        } else {
            $resp['status'] = 0;
            $resp['msg'] = "Failed to add Query.";
        }
        echo json_encode($resp);

    }

    public function getGeneralOffer($busi_id) {
        $mybusi_id = $this->session->userdata('tsuser')['busi_id'];
        $this->load->model('Product_Model','product');
        $mydesksite = $this->product->getBusinessContactInfo(array('id'=>$mybusi_id));
        $desksites = $this->product->getBusinessContactInfo(array('id'=>$busi_id));
        $this->template->set ( 'mydesksite', $mydesksite);
        $this->template->set ( 'desksite', $desksites);
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('desksite/subpages/general_offer', '', true);
        echo $html;
    }
	/*
		Added by Rohit
		Get main products from sub category list
	*/
	public function getMainProductsBySubcat(){
		
		$this->load->model('Product_Model','product');
        $mainProduct = $this->product->getMainProdBySubCat($_POST['id']);
		$this->template->set ( 'mainProduct', $mainProduct );
        $this->template->set ( 'params', $_POST);
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html= $this->template->build ('Home/pages/main-products', '', true);		
		echo $html;
	}
}

