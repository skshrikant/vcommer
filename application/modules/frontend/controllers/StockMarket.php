<?php
class StockMarket extends MX_Controller {
	
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
		$this->load->model('Account_Model','account');
		$this->lang->load($current_lang.'_home_page_lang', $current_lang);
		$fb_config = parse_ini_file ( APPPATH . "config/FB.ini" );
	} 
	
	public function index() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
		$Country= $this->account->getCountry();
		$busi_id = $this->session->userdata('busi_id');
		$this->template->set ( 'Country', $Country);
		$this->load->model('Product_Model', 'product' );
		$usertype = $this->product->getUserTypebyBusinessId($busi_id);
		$this->template->set ('usertype', $usertype);
		$products = $this->product->stockProductListBySellerId($busi_id);
		$this->template->set ( 'productList', $products);
		$contact_details = $this->account->getBusinessContactDetails($busi_id);
		$productslist = $this->product->getProductlist($busi_id);
		$totalcount = 0;
        if(!empty($busi_id)) {
            $category_id = $this->session->userdata('tsuser')['category_id'];
            $this->load->library('mylib/InquiryLib');
            $this->load->library('mylib/OfferLib');
            $this->load->library('mylib/orderLib');
            $this->load->library('mylib/CommunityLib');
            $totalcount = $this->common->getTotalCountForAlert($busi_id);
        }
        $this->template->set ( 'totalcount', $totalcount);
		$this->template->set ( 'products', $productslist);
		$this->template->set('contact_details',$contact_details);
		$this->template->set ( 'page', 'stock_market' );
		$this->template->set ( 'browser_icon', 'stock.ico' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
			->title ( 'Stock Goods Market' )
			->set_partial ( 'header', 'default/floating-header' )
			->set_partial ( 'footer', 'default/bstation-footer' );
		$this->template->build ('stock_market/stock_market');
	}
	
	public function postInsert(){
		$params = array();
		$params['busi_id'] = $this->session->userdata('busi_id');
		$params['title'] = $this->input->post('title');
		$params['product_item_id'] = $this->input->post('product_id');
		$params['description'] = $this->input->post('description');
		$params['usd_price'] = $this->input->post('usd_price');
		$params['quantity'] = $this->input->post('quantity');
		$params['is_locked'] = $this->input->post('profilecheck');
		$params['status'] = 1;
		$params['created_date'] = date('Y-m-d H:i:s');
		
		$pathname = 'bstation_images';
		if (! is_dir ( 'assets/images/' . $pathname )) {
			mkdir ( './assets/images/' . $pathname, 0777, TRUE );
		}
		$cpt = 0;
		$k =1;
		$size = 0;
		$cimages = $this->input->post('cimg');
		$location =  "assets/images/".$pathname."/";
		if (!empty($_FILES['postphoto1']['name'])) {
			$Img = uploadImage($_FILES['postphoto1'],$location,array('jpeg','jpg','png','gif'),2097152,'bstation');
			if($Img['status'] == 1) {
				$params['image1'] = $Img['image'];
				$size = $size + $_FILES['postphoto1']['size'];
			} else {
				$params['image1'] = $cimages[0];
			}
		} else {
			$params['image1'] = $cimages[0];
		}
		if (!empty($_FILES['postphoto2']['name'])) {
			$Img1 = uploadImage($_FILES['postphoto2'],$location,array('jpeg','jpg','png','gif'),2097152,'bstation1');
			if($Img1['status'] == 1) {
				$params['image2'] = $Img1['image'];
				$size = $size + $_FILES['postphoto2']['size'];
			} else {
				$params['image2'] = $cimages[1];
			}
		} else {
			$params['image2'] = $cimages[1];
		}
		if (!empty($_FILES['postphoto3']['name'])) {
			$Img2 = uploadImage($_FILES['postphoto3'],$location,array('jpeg','jpg','png','gif'),2097152,'bstation2');
			if($Img2['status'] == 1) {
				$params['image3'] = $Img2['image'];
				$size = $size + $_FILES['postphoto3']['size'];
			} else {
				$params['image3'] = $cimages[2];
			}
		} else {
			$params['image3'] = $cimages[2];
		}
		if (!empty($_FILES['postphoto4']['name'])) {
			$Img3 = uploadImage($_FILES['postphoto4'],$location,array('jpeg','jpg','png','gif'),2097152,'bstation3');
			if($Img3['status'] == 1) {
				$params['image4'] = $Img3['image'];
				$size = $size + $_FILES['postphoto4']['size'];
			} else {
				$params['image4'] = $cimages[3];
			}
		} else {
			$params['image4'] = $cimages[3];
		}
		$this->load->model('Product_Model', 'product' );
		$response = $this->product->stockPostInsert($params);
		/* ************** Storage Implementation *************** */
		if($size != 0) {
			$this->load->library('mylib/StorageLib');
			$storage = array();
			$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			$storage['field'] = 'stockmarket';
			$storage['datasize'] = round($size/1024,2);
			$this->storagelib->updateStorageByBusiId($storage);
		}
		/* ***************************************************** */
		echo json_encode($response);

	}
	
	public function stockPostInsertBuyer(){
		$params = array();
		$params['busi_id'] = $this->session->userdata('busi_id');
		$params['title'] = $this->input->post('btitle');
		$params['description'] = $this->input->post('bdescription');
		$params['is_locked'] = $this->input->post('bprofilecheck');
		$params['status'] = 1;
		$params['created_date'] = date('Y-m-d H:i:s');
	
		$pathname = 'bstation_images';
		if (! is_dir ( 'assets/images/' . $pathname )) {
			mkdir ( './assets/images/' . $pathname, 0777, TRUE );
		}
		$files = $_FILES;
		$cpt = 0;
		$k =1;
		$size = 0;
		if(!empty($_FILES ['bpostphoto'] ['name']))
			$cpt = count ( $_FILES ['bpostphoto'] ['name'] );
		$data['images'] =array();
		for($i = 0; $i < $cpt; $i ++) {
			$_FILES ['user'] ['name'] = $_FILES ['bpostphoto'] ['name'] [$i];
			$_FILES ['user'] ['type'] = $_FILES ['bpostphoto'] ['type'] [$i];
			$_FILES ['user'] ['tmp_name'] = $_FILES ['bpostphoto'] ['tmp_name'] [$i];
			$_FILES ['user'] ['error'] = $_FILES ['bpostphoto'] ['error'] [$i];
			$_FILES ['user'] ['size'] = $_FILES ['bpostphoto'] ['size'] [$i];
			$config = array ();
			$config ['upload_path'] = 'assets/images/' . $pathname . '/';
			$config ['allowed_types'] = 'gif|jpg|png|PNG|JPEG';
			$config ['max_size'] = 204800;
			$config ['max_width'] = 2048;
			$config ['max_height'] = 2048;
			$this->load->library ( 'upload', $config );
			if ($this->upload->do_upload ( 'user' )) {
				$params['image'.$k] = 'images/' . $pathname . '/'. $this->upload->data ( 'file_name' );
				$size = $size + $_FILES ['bpostphoto'] ['size'] [$i];
			} else {
				echo "No Image.";
			}
			$k++;
		}
	
		$this->load->model('Product_Model', 'product' );
		$response = $this->product->stockPostInsert($params);
		/* ************** Storage Implementation *************** */
		if($size != 0) {
			$this->load->library('mylib/StorageLib');
			$storage = array();
			$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			$storage['field'] = 'stockmarket';
			$storage['datasize'] = round($size/1024,2);
			$this->storagelib->updateStorageByBusiId($storage);
		}
		/* ***************************************************** */
		echo json_encode($response);
	
	}
	
	public function newBuyerRequest($id,$userid) {
		$this->load->model ( 'Account_Model', 'account' );
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$this->load->model('Product_Model', 'product' );
		$post = $this->product->getStockMarketPostById($id,$userid);
		$contact_details = $this->account->getBusinessContactDetails($busi_id);
		$Country= $this->account->getCountry();
		$this->template->set ( 'Country', $Country);
		$this->template->set('contact_details',$contact_details);
		$this->template->set('post',$post);
		$this->template->set('seller_id',$id);
		$this->template->set('busi_id',$busi_id);
		$this->template->set ( 'page', 'bstation' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('stock_market/pages/buyer_request');
	}
	
	public function saveBuyerRequest() {
		$userId = $this->session->userdata('tsuser')['userid'];
		$params = array();
		$params['post_id'] = $this->input->post('post_id');
		$params['message'] = $this->input->post('TextArea3');
		$params['details'] = $this->input->post('TextArea4');
		$params['contact_person'] = $this->input->post('name');
		$params['company'] = $this->input->post('Company');
		$params['additional_email'] = $this->input->post('email');
		$params['phone'] = $this->input->post('phone');
		$params['country'] = $this->input->post('country');
		$params['seller_id'] = $this->input->post('seller_id');
		$params['buyer_id'] = $this->session->userdata('busi_id');
		$params['created_date'] = date('Y-m-d H:i:s');
		$size = 0;
		if (!empty($_FILES['FileUpload3']['name'])) {
			$certiPath = FCPATH . "assets/images/user_images/$userId/buyerrequest";
			if (!file_exists($certiPath)) {
				mkdir($certiPath, 0777, true);
				chmod($certiPath, 0777);
			}
			$certiPath = "assets/images/user_images/$userId/buyerrequest";
			$imgupload = uploadImage($_FILES['FileUpload3'],$certiPath,array('jpeg','jpg','png','gif','pdf','doc','docx','xls','xlsx'),20971521,'br');
			if($imgupload['status'] == 1) {
				$params['attachment'] = $imgupload['image'];
				$size = $size + $_FILES['FileUpload3'] ['size'];
			}
		}
		$this->load->model('Product_Model', 'product' );
		$this->product->addStockMarketPostRequest($params);
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
		echo json_encode(array('status'=>1));
	}
	
	public function newSellerOffer($id) {
		print_r($id);exit;
		$this->load->model ( 'Account_Model', 'account' );
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$this->load->model('Product_Model', 'product' );
		$contact_details = $this->account->getBusinessContactDetails($busi_id);
		$post = $this->product->getStockMarketPostById($id);
		$Country= $this->account->getCountry();
		$this->template->set ( 'Country', $Country);
		$this->template->set('contact_details',$contact_details);
		$this->template->set('post',$post);
		$this->template->set('buyer_id',$post);
		$this->template->set('busi_id',$busi_id);
		$this->template->set ( 'page', 'bstation' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('stock_market/pages/seller_offer');
	}
	
	public function saveSellerOffer() {
		$userId = $this->session->userdata('tsuser')['userid'];
		$params = array();
		$params['post_id'] = $this->input->post('post_id');
		$params['message'] = $this->input->post('TextArea3');
		$params['details'] = $this->input->post('TextArea4');
		$params['contact_person'] = $this->input->post('name');
		$params['price'] = $this->input->post('Price');
		$params['unit_type'] = $this->input->post('Combobox1');
		$params['quantity'] = $this->input->post('Qty');
		$params['company'] = $this->input->post('Company');
		$params['additional_email'] = $this->input->post('email');
		$params['phone'] = $this->input->post('phone');
		$params['country'] = $this->input->post('country');
		$params['buyer_id'] = $this->input->post('buyer_id');
		$params['seller_id'] = $this->session->userdata('busi_id');
		$params['created_date'] = date('Y-m-d H:i:s');
		$size = 0;
		if (!empty($_FILES['FileUpload3']['name'])) {
			$certiPath = FCPATH . "assets/images/user_images/$userId/selleroffer";
			if (!file_exists($certiPath)) {
				mkdir($certiPath, 0777, true);
				chmod($certiPath, 0777);
			}
			$certiPath = "assets/images/user_images/$userId/selleroffer";
			$imgupload = uploadImage($_FILES['FileUpload3'],$certiPath,array('jpeg','jpg','png','gif','pdf','doc','docx','xls','xlsx'),20971521,'br');
			if($imgupload['status'] == 1) {
				$params['attachment'] = $imgupload['image'];
				$size = $size + $_FILES['FileUpload3'] ['size'];
			}
		}
		$this->load->model('Product_Model', 'product' );
		$this->product->addStockMarketPostOffer($params);
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
		echo json_encode(array('status'=>1));
	}
	
	public function searchBusinessPosts() {
		$busi_id = $this->session->userdata('busi_id');
		$params = $this->input->post();
		$params['busi_id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$posts = $this->product->searchStockMarketPosts($params);
		$bposts = $this->product->searchBuyerStockMarketPosts($params);
		$contact_details = $this->account->getBusinessContactDetails($busi_id);
		$this->template->set ( 'posts', $posts);
		$this->template->set ( 'bposts', $bposts);
		$this->template->set('contact_details',$contact_details);
		$this->template->set ( 'page', 'bstation' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('stock_market/pages/posts','',true);
		$this->template->set ( 'bposts', $bposts);
		$this->template->set ( 'page', 'bstation' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html1 = $this->template->build ('stock_market/pages/requests','',true);
		$resp = array();
		$resp['posts'] = $html;
		$resp['requests'] = $html1;
		echo json_encode($resp);
	}
	
	public function myBusinessPosts() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$posts = $this->product->getMyStockMarketPosts($busi_id);
		$this->template->set ( 'posts', $posts);
		$this->template->set ( 'page', 'bstation' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('stock_market/pages/sellerposts','',true);
		echo $html;
	}
	
	public function myBuyerBusinessPosts() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$posts = $this->product->getMyBuyerStockMarketPosts($busi_id);
		$this->template->set ( 'posts', $posts);
		$this->template->set ( 'page', 'bstation' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('stock_market/pages/buyerposts','',true);
		echo $html;
	}
	
	public function sellerNewPost() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$items = $this->product->getActiveProductItems($busi_id);
		$todaysposts = $this->product->getTodaysStockMarketPosts($busi_id);
		if(count($todaysposts) > 0 && $todaysposts[0]['posts'] < 10) {
			$this->template->set ( 'items', $items);
			$this->template->set ( 'page', 'bstation' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('stock_market/pages/newsellerpost','',true);
			echo $html;
		} else {
			echo 11;
		}
	}
	
	public function closeSellerPost($id) {
		$this->load->model('Product_Model', 'product' );
		$is_deleted = $this->product->closeStockSellerPost($id);
		if($is_deleted) {
			echo json_encode(array('status'=>1));
		} else {
			echo json_encode(array('status'=>0));
		}
	}
	
	public function deleteSellerPost($id) {
		$this->load->model('Product_Model', 'product' );
		$is_deleted = $this->product->deleteStockSellerPost($id);
		if($is_deleted) {
			echo json_encode(array('status'=>1));
		} else {
			echo json_encode(array('status'=>0));
		}
	}
	
	public function buyerNewPost() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$todaysposts = $this->product->getTodaysStockMarketPosts($busi_id);
		if(count($todaysposts) > 0 && $todaysposts[0]['posts'] < 10) {
			$this->template->set ( 'page', 'bstation' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('stock_market/pages/newbuyerpost','',true);
			echo $html;
		} else {
			echo 11;
		}
	}
	
	
	
}
