<?php
class Alerts extends MX_Controller 
{
	private $busiId ='';

	/**
	 * Constructor
	 *
	 * return void
	 */
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

		$this->busiId = $this->session->userdata('busi_id');
	}
	
	public function index() {
		
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/mystation');
	}

	public function alert() {
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$this->load->library('mylib/CommunityLib');
		$this->load->library('mylib/MyfavoriteLib');
		$this->load->library('mylib/InquiryLib');
		$this->load->library('mylib/OfferLib');
		$this->load->library('mylib/orderLib');
		$this->load->library('common');
		$this->load->model('Product_Model','product');
		if($category_id == 1 || $category_id == 2) {
			$inquiry = $this->inquirylib->getInquiryByBusiId($this->busiId);
			$offer = $this->offerlib->getOfferByBusiId($this->busiId);
		} else {
			$inquiry = $this->inquirylib->getBuyerInquiryByBusiId($this->busiId);
			$offer = $this->offerlib->getBuyerOfferByBusiId($this->busiId);
		}

		//$order = $this->orderlib->getOrderByBusiId($this->busiId);
		$favoritearray= $this->myfavoritelib->getMyfavoriteseller($this->busiId,1);
		$sendcommunityrequest = array();
		$sendcommunityrequest = $this->communitylib->getInvitationCommunityRequest($this->busiId);
		$totalMyOrderalertCount      = $this->common->getTotalMyOrderCount();
		$totalAddRequestAlertCount   = $this->common->getTotalAddToCommunityCount();
		$totalInquiryAlertCount      = $this->common->getTotalInquiryCount();
		$totalOfferAlertCount        = $this->common->getTotalOfferCount();
		$this->template->set ( 'favoritearray', $favoritearray);
		$this->template->set ( 'inquiry', $inquiry);
		$this->template->set ( 'offer', $offer);
		$this->template->set ( 'orderCount', $totalMyOrderalertCount);
		$this->template->set ( 'sendcommunityrequest', $sendcommunityrequest);
		$this->template->set ( 'addRequestCount', $totalAddRequestAlertCount);
		$this->template->set ( 'inquiryCount', $totalInquiryAlertCount);
		$this->template->set ( 'offerCount', $totalOfferAlertCount);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/alerts','',true);
		echo $html;
	}


	public function favoriteInfo() {
		$type = $this->input->post('type');
		$this->load->library('mylib/MyfavoriteLib');
		$this->load->model('Product_Model','product');

		if(!empty($this->busiId)) {
			switch($type) {
				case 1:
				$favoriteseller = $this->myfavoritelib->getMyfavoriteseller($this->busiId,1);
				$this->template->set ( 'favoriteseller', $favoriteseller);
				break;
				case 2:
				$favoriteshipper = $this->myfavoritelib->getMyfavoritesShipper($this->busiId,2);
				$this->template->set ( 'favoriteshipper', $favoriteshipper);
				break;
				case 3:
				$favoritebuyer = $this->myfavoritelib->getMyfavoritesBuyer($this->busiId,3);
				$this->template->set ( 'favoritebuyer', $favoritebuyer);
				break;
				case 4:
				$favoriteproduct = $this->myfavoritelib->getMyfavoriteProduct($this->busiId,4);
				$this->template->set ( 'favoriteproduct', $favoriteproduct);
				break;
				case 5:
				$favoritevedio = $this->myfavoritelib->getMyfavoriteVedio($this->busiId,5);
				$this->template->set ( 'favoritevedio', $favoritevedio);
				break;
				case 6:
				$favoritedproduct = $this->myfavoritelib->getMyfavoriteDProduct($this->busiId,6);
				$this->template->set ( 'favoritedproduct', $favoritedproduct);
				break;
				case 7:
				$favoritecatalouge = $this->myfavoritelib->getMyfavoriteCatalouge($this->busiId,7);
				$this->template->set ( 'favoritecatalouge', $favoritecatalouge);
				break;
				case 8:
				$favoriteads = $this->myfavoritelib->getMyfavoriteAds($this->busiId,8);
				$this->template->set ( 'favoriteads', $favoriteads);
				break;
				case 9:
				$favoritepost = $this->myfavoritelib->getMyfavoritePost($this->busiId,9);
				$this->template->set ( 'favoritepost', $favoritepost);
				break;
			}
			$this->template->set ( 'type', $type);
	    } else {
	    	$this->template->set ( 'favoriteseller', array());
			$this->template->set ( 'favoriteshipper', array());
			$this->template->set ( 'favoritebuyer', array());
			$this->template->set ( 'favoriteproduct', array());
			$this->template->set ( 'favoritevedio', array());
			$this->template->set ( 'favoritedproduct', array());
			$this->template->set ( 'favoritecatalouge', array());
			$this->template->set ( 'favoriteads', array());
			$this->template->set ( 'favoritepost', array());
			$this->template->set ( 'type', $type);	
	    }
	    $this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/myfavorite','',true);
		echo $html;
	}

	public function myCart() {
		$this->load->library('mylib/MycartLib');
		$this->load->model('Product_Model','product');
		$cartdataseller = $this->mycartlib->getMyCartSeller($this->busiId);
		$this->template->set ( 'cartdataseller', $cartdataseller);
		$cartdata = $this->mycartlib->getMyCart($this->busiId);
		$this->template->set ( 'cartdata', $cartdata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/mycart','',true);
		echo $html;
	}
	public function inquiry() {
		
		$this->load->library('mylib/InquiryLib');
		$this->load->model('Inquiry_model', 'inquiry');
        $this->load->model('Tool_model','mytoolmodel');
        $this->load->library('mylib/StorageLib');
		$this->load->model('Alert_model', 'alert');
		$this->load->model('Account_Model', 'account');
		
		$category_id = $this->session->userdata('tsuser')['category_id'];
		
		if(in_array($category_id,array(SELLER_ID,SHIPPER_ID))) {
			$inquiry = $this->inquirylib->getInquiryByBusiId($this->busiId);
		} else {
			$inquiry = $this->inquirylib->getBuyerInquiryByBusiId($this->busiId);
		}
		
		//update alert count in vcommers_dev.tbl_manage_alert table
		$this->alert->updateUserAlertCount(__FUNCTION__, $this->busiId);

		$data['alert_viewed'] = 1;
		$this->inquiry->updateInquiryAlert($this->busiId,$data,$category_id);
		
         // get total storage and remain storage information
        $storageInfo = $this->common->getStorageInformation($this->busiId, $category_id, 'inquiry');
        
		$this->template->set ( 'used', $storageInfo[0]);

		//remained space
		$this->template->set ( 'remain', $storageInfo[1]);
		
		$this->template->set ( 'inquiry', $inquiry);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/inquiry','',true);
		echo $html;
	}
	
	public function offer() {
		
		$this->load->library('mylib/OfferLib');
        $this->load->model('Tool_model','mytoolmodel');
        $this->load->library('mylib/StorageLib');
		$this->load->model('Alert_model', 'alert');
		$this->load->model('Account_Model', 'account');
		
		$category_id = $this->session->userdata('tsuser')['category_id'];
		$categoryId = $this->session->userdata('tsuser')['category_id'];
		
		if(in_array($category_id,array(SELLER_ID,SHIPPER_ID))) {
			$offer = $this->offerlib->getOfferByBusiId($this->busiId);
		} else {
			$offer = $this->offerlib->getBuyerOfferByBusiId($this->busiId);
		}
		
		//update alert count in vcommers_dev.tbl_manage_alert table
		$this->alert->updateUserAlertCount(__FUNCTION__, $this->busiId);
        
		 // get total storage and remain storage information
        $storageInfo = $this->common->getStorageInformation($this->busiId, $category_id, 'offer');
        
		$this->template->set ( 'used', $storageInfo[0]);

		//remained space
		$this->template->set ( 'remain', $storageInfo[1]);
		
		$data['alert_viewed'] = 1;
		$this->offerlib->updateOfferAlert($this->busiId,$data,$category_id);
		$this->template->set ( 'offer', $offer);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/offer','',true);
		echo $html;
	}
	
	public function request() 
	{
		$data = array();	
		$this->load->library('mylib/CommunityLib');
		$this->load->model('Alert_model', 'alert');
		$sendcommunityrequest = array();
		$sendcommunityrequest = $this->communitylib->getInvitationCommunityRequest($this->busiId);
		$mycommunityrequest = $this->communitylib->getSendCommunityRequest($this->busiId);
		$totalAlertCount = $this->common->getTotalAddToCommunityCount();
		$data['busi_id'] = $this->busiId;
		
		//update alert count in vcommers_dev.tbl_manage_alert table
		$this->alert->updateUserAlertCount(__FUNCTION__, $this->busiId);
		
		$data['alert_viewed'] = 1;
		$this->communitylib->updateCommunityRequest($data);
		$this->template->set ( 'sendcommunityrequest', $sendcommunityrequest);
		$this->template->set ( 'mycommunityrequest', $mycommunityrequest);
		$this->template->set ( 'totalAlertCount', $totalAlertCount);
		$this->template->set ( 'page', 'home' );
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/addrequest','',true);
		die(json_encode(array('dataHTML'=> $html,'totalCount'=>count($mycommunityrequest))));
	}
	public function addedRequest() {
		
		$this->load->library('mylib/CommunityLib');
		$sendcommunityrequest = $this->communitylib->getInvitationCommunityRequest($this->busiId);
		if($sendcommunityrequest[0]['community_id'] == "" ) {
			$sendcommunityrequest = array();
		}
		$this->template->set ( 'sendcommunityrequest', $sendcommunityrequest);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/addrequest','',true);
		echo $html;
		
	}
	public function invitationRequest() {
		
		$this->load->library('mylib/CommunityLib');
		$sendcommunityrequest = $this->communitylib->getSendCommunityRequest($this->busiId);
		if($sendcommunityrequest[0]['community_id'] == "" ) {
			$sendcommunityrequest = array();
		}
		$this->template->set ( 'sendcommunityrequest', $sendcommunityrequest);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/addrequest','',true);
		echo $html;
		
	}
	public function sellerOrder()
	{
		$this->load->library('mylib/orderLib');
		$this->load->model('Alert_model', 'alert');
		$order = $this->orderlib->getOrderByBusiId($this->busiId);
		$this->template->set ( 'order', $order);
		
		//update alert count in vcommers_dev.tbl_manage_alert table
		$this->alert->updateUserAlertCount(__FUNCTION__, $this->busiId);
		
		$data['alert_viewed'] = 1;
		$this->orderlib->updateOrderAlert($this->busiId,$data);
		$orderitem = $this->orderlib->getOrderItemByBusiId($this->busiId);
		$this->template->set ( 'orderitem', $orderitem);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/myorder','',true);
		echo $html;
	}
	public function inquiryReplay() {
		$this->load->model ( 'Account_Model', 'account' );
		$this->load->library('mylib/InquiryLib');
		$inquiryid = $this->input->post('inquiryid');
		$inquirydata = $this->inquirylib->getInquiryById($inquiryid);
		$contact_details = $this->account->getBusinessContactDetails($this->busiId);
		$this->template->set ( 'inquirydata', $inquirydata);
		$this->template->set('contact_details',$contact_details);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/inquiry_replay','',true);
		echo $html;
	}
	public function deleteFavorite()
	{
		$map = array();
		$this->load->library('mylib/MyfavoriteLib');
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		$data = array();
		$data['id'] = $id;
		$data['type'] = $type;
		$data['is_deleted'] = 1;
		$response = $this->myfavoritelib->deleteFavorite($id,$type);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Deleted Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to delete.';
		}
		echo json_encode($map);
	}
	public function deleteFromCart()
	{
		$map = array();
		$this->load->library('mylib/MycartLib');
		$ids = $this->input->post('values');
		for($i=0;$i<count($ids);$i++) 
		{
			$data = array();
			$data['id'] = $ids[$i];
			$data['is_deleted'] = 1;
			$response = $this->mycartlib->updateCart($data);
		}
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Deleted Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to delete.';
		}
		echo json_encode($map);
	}
	public function deleteInquiry()
	{
		$response = array();
		$map = array();
        $storage = array();
		$this->load->library('mylib/InquiryLib');
        $this->load->library('mylib/StorageLib');
		$ids = $this->input->post('values');
        $countIds = count($ids);
        $category_id = $this->session->userdata('tsuser')['category_id'];
        
		for($i=0; $i<$countIds; $i++) 
		{
			$data = array();
			$data['id'] = $ids[$i];
			$data['is_deleted'] = 1;
            
            // delete storage information
            $getStorageInfo = $this->inquirylib->getInquiryById($data['id']);            
            $size = $getStorageInfo[0]['attachment1_size']+$getStorageInfo[0]['attachment2_size']+$getStorageInfo[0]['attachment3_size']+$getStorageInfo[0]['attachment4_size'];
            $this->load->library('mylib/StorageLib');
            $storage = array();
            $storage['busi_id'] = $this->busiId;
            $storage['field'] = 'inquiries';
            $storage['datasize'] = round($size/1024,2);
            $this->storagelib->deleteStorageByBusiId($storage);
            //update is_deleted column
			$response = $this->inquirylib->updateInquiry($data);
		}
        
         // get total storage and remain storage information
        $storageInfo = $this->common->getStorageInformation($this->busiId, $category_id, 'inquiry');
        
		if($response > 0) {
			$map['status'] = 1;
			$map['msg'] = 'Deleted Successfully';
			$map['used'] = $storageInfo[0];
			$map['remain'] = $storageInfo[1];
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to delete.';
            $map['used'] = $storageInfo[0];
			$map['remain'] = $storageInfo[1];
		}
		echo json_encode($map);
	}
	public function productItemlistBySeller()
	{
		$this->load->library('mylib/MycartLib');
		$seller_busi_id = $this->input->post('seller_busi_id');
		$cartdata = $this->mycartlib->getMyCart($this->busiId);
		$proid = array();
		$i=0;
		foreach($cartdata as $row) {
			//echo  $row['product_id'];
			$proid[$i] = $row['product_id'];
			
			$i++;
		}
		
		$pstring = implode($proid,',');
		$this->template->set ( 'cartdata', $cartdata);
		$this->load->model('Cart_Model','cart');
		$products = $this->cart->productListBySellerProduct($seller_busi_id,$pstring);
		if(count($products) > 0) {
			$this->template->set ( 'products', $products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/product_list','',true);
		} else {
			$html = "Sorry No More Products Availible.";
		}
		echo $html;
	}
	public function addProductCart()
	{
		$map = array();
		$this->load->library('mylib/MycartLib');
		$product = $this->input->post('values');
		$cart = array();
		$cartdata = array();
		for ($i=0;$i<count($product);$i++){
			$cart['busi_id'] = $this->busiId;
			$cart['product_item_id'] = $product[$i];
			$cart['created_date'] = date('Y-m-d H:i:s');
			$cart['is_deleted'] = 0;
			$cartdata[] = $cart;
		}
		$response = $this->mycartlib->insertBatchProductCart($cartdata);
		if($response> 0) {
			$map['status'] = 1;
			$map['msg'] = "Product Add To cart successfully.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Product Fail to add cart.";
		}
		echo json_encode($map);
	}
	public function InitiatOrder()
	{
		$insertid = 0;
		$map = array();
		$this->load->model('Product_Model','product');
		$this->load->library('mylib/OrderLib');
		$product = $this->input->post('values');
		$orderitem = array();
		$orderitemdata = array();
		$order = array();
		$unit_price = 0;
		
		$order['buyer_id'] = $this->busiId;
		$order['buyer_name'] = $this->session->userdata('tsuser')['prefix']." ".$this->session->userdata('tsuser')['name'];
		for ($i=0;$i<count($product);$i++) {
			$data = $this->product->getProductItemById($product[$i]);
			$sellerbusi_id  = $data[0]['busi_id'];
			$unit_price =  $unit_price + $data[0]['unit_price']; 
		}
		$order['sellerbusi_id'] = $sellerbusi_id;
		$order['total'] = $unit_price;
		$order['status'] = 1;
		$order['created_date'] = date('Y-m-d H:i:s');
		$order['is_deleted'] = 0;
		$insertorderid = $this->orderlib->insertProductOrder($order);
		
		for ($i=0;$i<count($product);$i++){
			$specification = "";
			$data = $this->product->getProductItemById($product[$i]);
			$prospec = $this->product->getProductSpecificationById($product[$i]);
			
			for($j=0;$j<count($prospec);$j++) {
				
				$specification = $specification."<br>".$prospec[$j]['spec_name'].": ".$prospec[$j]['spec_value'];
			}
			$orderitem = array();
			$orderitem['item_id'] = $product[$i];
			$orderitem['order_id'] = $insertorderid;
			$orderitem['quantity'] = 1;
			$orderitem['product_price'] = $data[0]['unit_price']; 
			$orderitem['product_specification'] = $specification;
			//$orderitem['product_cbm'] = $data[0]['product_cbm']; 
			$insertid = $this->orderlib->insertOrderItem($orderitem);
		}
		if($insertid > 0) {
			$map['status'] = 1;
			$map['msg'] = "Order Initiate successfully.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Order Fail to Initiate.";
		}
		echo json_encode($map);
	}
	public function pinInquiry() {
		$response = 0;
		$map = array();
		$this->load->library('mylib/InquiryLib');
		$ids = $this->input->post('values');
		for($i=0;$i<count($ids);$i++)
		{
			$data = array();
			$data['id'] = $ids[$i];
			$response = $this->inquirylib->updateToggelpinInquiry($data);
		}
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Pin/Unpin Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to Pin/Unpin.';
		}
		echo json_encode($map);
	}
	public function unreadInquiry() {
		$response = 0;
		$map = array();
		$this->load->library('mylib/InquiryLib');
		$ids = $this->input->post('values');
		for($i=0;$i<count($ids);$i++)
		{
			$data = array();
			$data['id'] = $ids[$i];
			$data['unreadmark'] = 0;
			$response = $this->inquirylib->updateInquiry($data);
		}
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Inquiry marked as unread Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Inquiry marked as unread.';
		}
		echo json_encode($map);
	}
	
	public function readInquiry() {
		$response = 0;
		$map = array();
		$this->load->library('mylib/InquiryLib');
		$id = $this->input->post('id');
		$data = array();
		$data['id'] = $id;
		$data['unreadmark'] = 1;
		$response = $this->inquirylib->updateInquiry($data);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Inquiry marked as read Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Inquiry marked as read.';
		}
		echo json_encode($map);
	}
	
	public function deleteOrder() {
		$map = array();
		$this->load->library('mylib/OrderLib');
		$id = $this->input->post('id');
		$data = array();
		$data['orderid'] = $id;
		$data['is_deleted'] = 1;
		$response = $this->orderlib->updateOrder($data);
        $category_id = $this->session->userdata('tsuser')['category_id'];
        
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Order Deleted Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to delete order.';
		}
		echo json_encode($map);
	}
	public function deleteRequest()
	{
		$map = array();
		$this->load->library('mylib/CommunityLib');
		$id = $this->input->post('community_id');
		$data = array();
		$data['id'] = $id;
		$data['is_deleted'] = 1;
		$response = $this->communitylib->updateCommunity($data);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Community Request Deleted Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to  delete community request.';
		}
		echo json_encode($map);
	
	}
	public function saveInquiryReplay()
	{
        $fileSize = 0;
		$this->load->library('mylib/OfferLib');
		$subject = $this->input->post('title');
		$product_item_id = $this->input->post('product_id');
		$message = $this->input->post('message');
		
		$param['offer_subject'] = $subject;
		$param['offer_body'] = $message;
		$param['product_id'] = $product_item_id;
		$param['offer_type_id'] = 4;
		$param['offer_sender_id'] = $this->busiId;
		$param['busi_id'] = $this->input->post('busi_id');
		
		if (!empty($_FILES['inquiryreplay']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$this->busiId";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH. "assets/images/business_images/$this->busiId/inquiry/";
			if (!file_exists($userPath)) {
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			
			$total = count($_FILES['inquiryreplay']['name']);
			
			$j = 1;
			for($i=0; $i<$total; $i++) {
				$tmpFilePath = $_FILES['inquiryreplay']['tmp_name'][$i];
				if ($tmpFilePath != "") {
					$size = $_FILES['inquiryreplay']['size'][$i];
					$newFilePath = $userPath. $_FILES['inquiryreplay']['name'][$i];
					$param['attachment'.$j] = "images/business_images/$this->busiId/inquiry/".$_FILES['inquiryreplay']['name'][$i];
					$param['attachment'.$j.'_size'] = $size;
					$fileSize += $size; 
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						//
					}
				}
				$j++;
			} // end for
			$param['created_date'] = date('Y-m-d H:i:s');
		}
		
		$response = $this->offerlib->saveOffer($param);
        
        /* ************** Storage Implementation *************** */
            if($fileSize != 0) {
                $this->load->library('mylib/StorageLib');
                $storage = array();
                $storage['busi_id'] = $this->busiId;
                $storage['field'] = 'offers';
                $storage['datasize'] = round($fileSize/1024,2);

                $this->storagelib->updateStorageByBusiId($storage);
            }
            /* ***************************************************** */
		
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Offer Sent Successfully.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Fail to send offer.";
		}
		
		echo json_encode($map);
		
	}
	public function offerReplay()
	{
		$this->load->model ( 'Account_Model', 'account' );
		$this->load->library('mylib/OfferLib');
		$offerid = $this->input->post('offerid');
		$offerdata = $this->offerlib->getOfferById($offerid);
		$contact_details = $this->account->getBusinessContactDetails($offerdata[0]['offer_sender_id']);
                
		$this->template->set ( 'offerdata', $offerdata);
		$this->template->set ( 'contact_details', $contact_details);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/offer_replay','',true);
		echo $html;
	}
	public function saveOfferReplay()
	{ 
        $fileSize = 0;
		$this->load->library('mylib/InquiryLib');
		$subject = $this->input->post('title');
		$product_item_id = $this->input->post('product_id');
		$message = $this->input->post('message');
		//$inquiry_id = $this->input->post('inquiry_id');
		
		$param['inquiry_subject'] = $subject;
		$param['inquiry_body'] = $message;
		$param['product_id'] = $product_item_id;
		$param['inquiry_type_id'] = 4;
		$param['busi_id'] = $this->input->post('busi_id');
		$param['requester_busi_id'] = $this->input->post('requester_busi_id');
		
		if (!empty($_FILES['offerreplay']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$this->busiId";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH. "assets/images/business_images/$this->busiId/offer/";
			if (!file_exists($userPath)) {
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			
			$total = count($_FILES['offerreplay']['name']);
			
			$j = 1;
			for($i=0; $i<$total; $i++) {
				$tmpFilePath = $_FILES['offerreplay']['tmp_name'][$i];
				if ($tmpFilePath != "") {
					$size = $_FILES['offerreplay']['size'][$i];
					$newFilePath = $userPath. $_FILES['offerreplay']['name'][$i];
					$param['attachment'.$j] = "images/business_images/$this->busiId/offer/".$_FILES['offerreplay']['name'][$i];
					$param['attachment'.$j.'_size'] = $size;
					$fileSize += $size;
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
						//
					}
				}
				$j++;
			} // end for
			$param['created_date'] = date('Y-m-d H:i:s');
		}
		$response = $this->inquirylib->saveInquiry($param);
        
        /* ************** Storage Implementation *************** */
            if($fileSize != 0) {
                $this->load->library('mylib/StorageLib');
                $storage = array();
                $storage['busi_id'] = $this->busiId;
                $storage['field'] = 'inquiries';
                $storage['datasize'] = round($fileSize/1024,2);

                $this->storagelib->updateStorageByBusiId($storage);
            }
            /* ***************************************************** */
		
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Inquiry Sent Successfully.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Fail to send inquiry.";
		}
		
		echo json_encode($map);
		
	}
	public function deleteOffer()
    {
        $response = array();
        $map = array();
        $this->load->library('mylib/OfferLib');
        $ids = $this->input->post('values');
        $countIds = count($ids);
        $category_id = $this->session->userdata('tsuser')['category_id'];
        
        for ($i = 0; $i < $countIds; $i++) {
            $data = array();
            $data['id'] = $ids[$i];
            $data['is_deleted'] = 1;
            
            // delete storage information
            $getStorageInfo = $this->offerlib->getOfferById($data['id']);            
            $size = $getStorageInfo[0]['attachment1_size']+$getStorageInfo[0]['attachment2_size']+$getStorageInfo[0]['attachment3_size']+$getStorageInfo[0]['attachment4_size'];
            $this->load->library('mylib/StorageLib');
            $storage = array();
            $storage['busi_id'] = $this->busiId;
            $storage['field'] = 'offers';
            $storage['datasize'] = round($size/1024,2);
            $this->storagelib->deleteStorageByBusiId($storage);
            //update is_deleted column
            $response = $this->offerlib->updateOffer($data);
        }
        // get total storage and remain storage information
        $storageInfo = $this->common->getStorageInformation($this->busiId, $category_id, 'offer');

        if ($response > 0) {
            $map['status'] = 1;
            $map['msg'] = 'Deleted Successfully';
            $map['used'] = $storageInfo[0];
            $map['remain'] = $storageInfo[1];
        } else {
            $map['status'] = 0;
            $map['msg'] = 'Fail to delete.';
            $map['used'] = $storageInfo[0];
            $map['remain'] = $storageInfo[1];
        }
        echo json_encode($map);
    }

    public function pinOffer() {
		$response = 0;
		$map = array();
		$this->load->library('mylib/OfferLib');
		$ids = $this->input->post('values');
		for($i=0;$i<count($ids);$i++)
		{
			$data = array();
			$data['id'] = $ids[$i];
			$response = $this->offerlib->updateToggelpinOffer($data);
		}
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Pin/Unpin Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Fail to Pin/Unpin.';
		}
		echo json_encode($map);
	}
	public function unreadOffer() {
		$response = 0;
		$map = array();
		$this->load->library('mylib/OfferLib');
		$ids = $this->input->post('values');
		for($i=0;$i<count($ids);$i++)
		{
			$data = array();
			$data['id'] = $ids[$i];
			$data['unreadmark'] = 0;
			$response = $this->offerlib->updateOffer($data);
		}
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Offer marked as unread Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Offer marked as unread.';
		}
		echo json_encode($map);
	}
	
	public function readOffer() {
		$response = 0;
		$map = array();
		$this->load->library('mylib/OfferLib');
		$id = $this->input->post('id');
		$data = array();
		$data['id'] = $id;
		$data['unreadmark'] = 1;
		$response = $this->offerlib->updateOffer($data);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = 'Offer marked as read Successfully';
		} else {
			$map['status'] = 0;
			$map['msg'] = 'Offer marked as read.';
		}
		echo json_encode($map);
	}
	
	public function invoice($order_id)
	{
		$this->load->library('mylib/OrderLib');
		
		$invoicedata = $this->orderlib->isInvoiceGenerated($order_id);
		$orderdata = $this->orderlib->getOrderById($order_id);

		if(count($invoicedata) == 0){
			
			$param = array();
			$param['order_id'] = $order_id;
			$param['buyer_prefix'] = $orderdata[0]['buyernameprefix'];
			$param['buyer_name'] = $orderdata[0]['buyername'];
			$param['buyer_companyname'] = $orderdata[0]['buyercompany'];
			$param['buyer_address'] = $orderdata[0]['buyerstreet'].", " .$orderdata[0]['buyercity'].", ".$orderdata[0]['buyerprovince'].", " .$orderdata[0]['buyercontry'].", P.O.Box " .$orderdata[0]['buyerpobox'];
			
// 			$param['buyer_contry'] = $orderdata[0]['buyercontry'];
// 			$param['buyer_province'] = $orderdata[0]['buyerprovince'];
// 			$param['buyer_city'] = $orderdata[0]['buyercity'];
// 			$param['buyer_street'] = $orderdata[0]['buyerstreet'];
 			$param['buyer_citycode'] = $orderdata[0]['buyercitycode'];
			$param['buyer_telcode'] = $orderdata[0]['buyertelcode'];
			$param['buyer_telephone'] = $orderdata[0]['buyertelephone'];
			$param['buyer_telephone1'] = $orderdata[0]['buyeralttelnumber'];
			$param['buyer_mobilecode	'] = $orderdata[0]['buyermobilecode'];
			$param['buyer_mobile'] = $orderdata[0]['buyermobile'];
// 			$param['buyer_poboxno'] = $orderdata[0]['buyerpobox'];
			$param['seller_bankaccount'] = $orderdata[0]['sellerbankaccount'];
			$param['production_leadtime'] = "45 days from the date of receiving the down payment.
			The first party obligates to produce and devliver the above mentioned products according to the reuired remarks and specifications mentioned above.";
			$param['product_warranty'] = "6 months guarantee on all items.
			Terms:
			Changing the non prober items with good one ( shipping charges will be carried by both parties).";
			$param['document_certificate'] = "SASO certificate is required to be stamped ( legalized) by the second party Embassy and Chamber of commerce.
			Invoice, Packing list, Bill of loading and Certificate of origin, ( to be stamped by the second party embassy).";
			$param['obligation'] = "Both the parties agreed and obligated that the international courts on any country over the world shall be competent to settle any dispute that may rise between both the parties according to resulting of signature ( agree and press on confirm button) hereto from rights, specifications, conditions, obligations and financial commitments that have been approved from both parties.";
			$param['declaration'] = "Both the parties understand and accept that the Trade Station online order acts as an official reference without bearing any responsibilities towards both the parties or any other destination. 
			For more secure, Trade Station advise both the parties to issue an additional internal contract signed and stamped with each party seal.";
			//$param['currency'] = 
			$param['payment_method'] = $orderdata[0]['payment_terms'];
			$param['created_date'] = date('Y-m-d H:i:s');
			$invoiceid = $this->orderlib->saveInvoice($param);
			$order = array();
			$order['orderid'] = $order_id;
			$order['invoice_id'] = $invoiceid;
			$this->orderlib->updateOrder($order);
			
		}
		$invoicedata = $this->orderlib->getInvoiceByorderId($order_id);
		$this->template->set ( 'orderdata', $invoicedata);
		$orderitemdata = $this->orderlib->getOrderItemById($order_id);
		$this->template->set ( 'orderitemdata', $orderitemdata);
		//$orderitemspecdata = $this->orderlib->getOrderItemSpecificationById($order_id);
		//$this->template->set ( 'orderitemspecdata', $orderitemspecdata);
		$this->template->set ( 'order_id', $order_id);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/pages/subpages/invoice');
	}
	public function editInvoice($order_id)
	{
		$this->load->library('mylib/OrderLib');
		$this->template->set ( 'order_id', $order_id);
		$orderdata = $this->orderlib->getInvoiceByorderId($order_id);
		$this->template->set ( 'orderdata', $orderdata);
		$orderitemdata = $this->orderlib->getOrderItemById($order_id);
		$this->template->set ( 'orderitemdata', $orderitemdata);
		//$orderitemspecdata = $this->orderlib->getOrderItemSpecificationById($order_id);
		//$this->template->set ( 'orderitemspecdata', $orderitemspecdata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('station')
		->title ( 'My Station' );
		$this->template->build ('station/pages/subpages/editinvoice');
	}
	public function updateInvoice()
	{
		$map = array();
	
		$this->load->library('mylib/OrderLib');
		$order_id = $this->input->post('order_id');
		$invoice = array();
		$invoice['order_id'] = $this->input->post('order_id');
		$data = $this->input->post('data');
		$data['order_id'] = $this->input->post('order_id');
// 		print_r($data);
// 		exit;
		
		//$invoice['buyer_companyname'] = $this->input->post('buyer_companyname');
		//$invoice['buyer_prefix'] = $this->input->post('buyer_prefix');
		//$invoice['buyer_name'] = $this->input->post('buyer_name');
		//$invoice['buyer_contry'] = $this->input->post('buyer_contry');
		//$invoice['buyer_province'] = $this->input->post('buyer_province');
		//$invoice['buyer_city'] = $this->input->post('buyer_city');
		//$invoice['buyer_street'] = $this->input->post('buyer_street');
		//$invoice['buyer_citycode'] = $this->input->post('buyer_citycode');
		//$invoice['buyer_telcode'] = $this->input->post('buyer_telcode');
		//$invoice['buyer_telephone'] = $this->input->post('buyer_telephone');
		//$invoice['buyer_telephone1'] = $this->input->post('buyer_telephone1');
		//$invoice['buyer_mobilecode'] = $this->input->post('buyer_mobilecode');
		//$invoice['buyer_mobile'] = $this->input->post('buyer_mobile');
		//$invoice['buyer_poboxno'] = $this->input->post('buyer_poboxno');
// 		$invoice['buyer_poboxno'] = $this->input->post('buyer_poboxno');
// 		$invoice['seller_bankaccount'] = $this->input->post('seller_bankaccount');
// 		$invoice['production_leadtime'] = $this->input->post('production_leadtime');
// 		$invoice['product_warranty'] = $this->input->post('product_warranty');
// 		$invoice['document_certificate'] = $this->input->post('document_certificate');
// 		$invoice['obligation'] = $this->input->post('obligation');
// 		$invoice['declaration'] = $this->input->post('declaration');
		
		$response = $this->orderlib->updateInvoice($data);
		
		$orderitemdata = $this->orderlib->getOrderItemById($order_id);
		
		$orderitem = array();
		$product_price = $this->input->post('product_price');
		$quantity = $this->input->post('quantity');
		$cbm = $this->input->post('cbm');
		$product_specification = $this->input->post('product_specification');
		
		for($i=0;$i<count($orderitemdata);$i++)
		{
			$orderitem['order_id'] = $order_id;
			$orderitem['item_id'] = $orderitemdata[$i]['item_id'];
			$orderitem['product_price'] = $product_price[$i];
			$orderitem['quantity'] = $quantity[$i];
			$orderitem['total_product_price'] = ($quantity[$i] * $product_price[$i]);
			$orderitem['product_specification'] = $product_specification[$i];
			$orderitem['product_cbm'] = $cbm[$i];
			$response = $this->orderlib->updateOrderItem($orderitem);
		}
		
		$itemlist  = $this->orderlib->getOrderItemById($order_id); 
		$amount = 0;
		foreach ($itemlist as $row) {
			$amount = $amount + $row['total_product_price'];
		}
		$order = array();
		$order['orderid'] = $order_id;
		$order['total'] = $amount;
		$response = $this->orderlib->updateOrder($order);
		if($response > 0 ) 
		{
			$map['status'] = 1;
			$map['msg'] = "Order Update successfully.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Order Fail to Update";
		}
		$map['status'] = 1;
		$map['msg'] = "Order Update successfully.";
		echo json_encode($map);
	}
	public  function deleteInvoice()
	{
		$response1 = 0;
		$map = array();
		$orderitem_id = $this->input->post('values');
		$order_id = $this->input->post('order_id');
		$this->load->library('mylib/OrderLib');
		for($i=0;$i<count($orderitem_id);$i++)
		{
			$data = array();
			$data['id'] = $orderitem_id[$i];
			$data['is_deleted'] = 1;
			$response1 = $this->orderlib->updateOrderItemById($data);
		}
		
		$itemlist  = $this->orderlib->getOrderItemById($order_id);
		$amount = 0;
		foreach ($itemlist as $row) {
			$amount = $amount + $row['product_price'];
		}
		$order = array();
		$order['orderid'] = $order_id;
		$order['total'] = $amount;
		$response = $this->orderlib->updateOrder($order);
		
		$map['status'] =1;
		$map['msg'] = "Product Item deleted successfully.";
		echo json_encode($map);
	}
	public  function addInvoiceProduct()
	{
		$response = 0;
		$map = array();
		$orderitem = array();
		$this->load->library('mylib/OrderLib');
		$this->load->model('Product_Model','product');
		$orderid = $this->input->post('order_id');
		$product_modal  = $this->input->post('product_modal');
		$prodata = $this->product->getProductByModalNo($product_modal);
		if(count($prodata) > 0)
		{
			$specification = "";
			$prospec = $this->product->getProductSpecificationById($prodata[0]['id']);
			
			for($j=0;$j<count($prospec);$j++) {
				
				$specification = $specification."<br>".$prospec[$j]['spec_name'].": ".$prospec[$j]['spec_value'];
			}
			
			$orderitem['item_id'] = $prodata[0]['id'];
			$orderitem['order_id'] = $orderid;
			$orderitem['quantity'] = 1;
			$orderitem['product_price'] = $prodata[0]['unit_price'];
			$orderitem['product_specification'] = $specification;
			$response = $this->orderlib->saveOrderItem($orderitem);
		}
		if($response > 0)
		{
			$map['status'] =1;
			$map['msg'] = "Product Item added successfully.";
		} else {
			$map['status'] =0;
			$map['msg'] = "Product Item Not Found.";
		}
		echo json_encode($map);
	}
	public function firstPartyConfirm()
	{
		$map = array();
		$this->load->library('mylib/OrderLib');
		$orderid = $this->input->post('order_id');
		$busi_id = $this->input->post('busi_id');
		$order = array();
		$order['orderid'] = $orderid;
		$order['selller_status'] = 2;
		$response = $this->orderlib->updateOrder($order);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Invoice Confirmed By First Party ";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Fail to Invoice Confirmed. ";
		}
		echo json_encode($map);
	}
	public function secondPartyConfirm()
	{
		$map = array();
		$this->load->library('mylib/OrderLib');
		$orderid = $this->input->post('order_id');
		$busi_id = $this->input->post('busi_id');
		$order = array();
		$order['orderid'] = $orderid;
		$order['buyer_status'] = 2;
		$response = $this->orderlib->updateOrder($order);
		if($response > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Invoice Confirmed By First Party ";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Fail to Invoice Confirmed. ";
		}
		echo json_encode($map);
	}

	/**
     * get all alerts per busi id
     *
     * @return json|string
     */
	public function getNewAlerts () {
	    
    	$userId = $this->session->userdata('tsuserid'); 

	    if(!empty($this->busiId) && !empty($userId)) {

	    	$checkNewCommunityAlert = array();

            $this->load->model('Alert_model', 'myalert' );
    	    $this->load->library('mylib/OfferLib');
    	    $this->load->library('mylib/InquiryLib');
    	    $this->load->library('mylib/CommunityLib');
    	    $this->load->library('mylib/orderLib');

    	    $categoryId = $this->session->userdata('tsuser')['category_id'];
    	    //new request for add to community alerts
    	    $checkNewCommunityAlert = $this->communitylib->getInvitationCommunityRequest($this->busiId);

    		// get new alerts for inquiry and offer alerts
    	    if(in_array($categoryId,array(SELLER_ID,SHIPPER_ID))) {
    			$inquiry = $this->inquirylib->getInquiryByBusiId($this->busiId);
    			//$getMyOffers = $this->offerlib->getOfferByBusiId($this->busiId);
    			$this->template->set ( 'newInquiry', $inquiry);
    		} else {
    			//$inquiry = $this->inquirylib->getBuyerInquiryByBusiId($this->busiId);
    			$getMyOffers = $this->offerlib->getBuyerOfferByBusiId($this->busiId);
    			$this->template->set ( 'newOffers', $getMyOffers);
    		}
    		
    	    $this->template->set ( 'newCommunity', $checkNewCommunityAlert);
    	    $this->template->set ( 'busi_id',$this->busiId);

    	    $this->template->set_layout (false);
    	    $html = $this->template->build ('default/alerts_popup','',true);
    	    //get alert count
    	    $totalcount = $this->common->getTotalCountForAlert($this->busiId);
    	    //check alert count
            $getTotalUsersAlertCount = $this->myalert->getMyAlertCount($this->busiId);
			
			$usersAlertCount = json_decode($getTotalUsersAlertCount,true);
			
            if($usersAlertCount['action']=='new') {
                //save alert count to table
                $this->myalert->saveAlertCount($this->busiId, $totalcount);
            } else {
                // update alert count
                $this->myalert->updateAlertCount($this->busiId, $totalcount);
            }

            if($totalcount > $usersAlertCount['total']) {
                die(json_encode(array('dataHTML'=> $html,'totalCount'=>$totalcount)));
            } else {
                die(json_encode(array('dataHTML'=> '','totalCount'=>$totalcount)));
            }
	    } else {
	        die(json_encode(array('dataHTML'=> '','totalCount'=>0)));
	    }	    
	}

	/**
     * update community after added.
     *
     * @return int
     */
	public function alertAddToCommunity() {

		$this->load->model('Community_Model', 'mycommunity' );

		$id = $this->input->post('id');
		
		if(empty($id)) {
			return 0;
		}

		$data = array();
		$data['id'] = $id;
		$data['alert_viewed'] = 1;
		$data['status'] = 1;

		$addToMyCommunity = $this->mycommunity->updateCommunity($data);
		
		if($addToMyCommunity == 1) {
			echo 1;
		}
	}

	/**
     * clear alert when viewed.
     *
     * @return string 
     */
	public function clearAlert()
    {
        $this->load->library('mylib/OfferLib');
        $this->load->model('Inquiry_model', 'inquiry');
        
        $id = $this->input->post('id');
        $type = $this->input->post('type');
        $categoryId = $this->session->userdata('tsuser')['category_id'];
        
        if (empty($type) && empty($id)) {
            echo 'failed to clear alerts';
        }
        switch ($type) {
            case 'inquiry':
                $data = array();
                $data['alert_viewed'] = 1;
                $response = $this->inquiry->updateInquiryAlert($id, $data, $categoryId);
                if ($response > 0) {
                    echo 'cleared inquiry successfully';
                }
                break;
            case 'offer':
                $data = array();
                $data['id'] = $id;
                $data['alert_viewed'] = 1;
                $response = $this->offerlib->updateOffer($id, $data, $categoryId);
                if ($response > 0) {
                    echo 'cleared offer successfully';
                }
                break;
            case 'order':
                // not implemented yet
                break;
            case 'addToMyCommunity':
                // not implemented yet
                break;
            case 'chat':
                // not implemented yet
                break;
        }
    }
    /**
     * get chat alerts
     * @return String HTML
     */
    function chat() {
        $this->load->library('mylib/InquiryLib');
        $this->load->model('Chat_model', 'chat');
        $this->load->model('Alert_model', 'alert');
        $this->load->model('Account_Model', 'account');

        $userId = $this->session->userdata('tsuserid');

        $chatData = $this->chat->getCometChatConversations($userId);
        $sumTotalChats = array_sum(array_column($chatData, 'totalChats'));
            
        //update alert count in vcommers_dev.tbl_manage_alert table
        $this->alert->updateUserAlertCount(__FUNCTION__, $this->busiId);
/*
        $data['alert_viewed'] = 1;
        $this->inquiry->updateInquiryAlert($this->busiId,$data,$category_id);*/       

        $this->template->set ( 'chatMessages', $chatData);
        $this->template->set ( 'totalChats', $sumTotalChats);
        $this->template->set ( 'page', 'home' );
        $this->template->set_theme('default_theme');
        $this->template->set_layout (false);
        $html = $this->template->build ('station/pages/subpages/chat','',true);
        echo $html;
    }
}
