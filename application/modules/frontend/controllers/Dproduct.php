<?php
class Dproduct extends MX_Controller {
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
	public function dproduct() {
		$this->load->library('mylib/Dproductlib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$product = $this->product->getProductlist($busi_id);
		$product3Ddata = $this->dproductlib->getProduct3Dlist($busi_id);
		$this->template->set ( 'product', $product);
		$this->template->set ( 'product3Ddata', $product3Ddata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/3dproduct','',true);
		echo $html;
	}
	public function add3dproduct() {
		$this->load->library('mylib/Dproductlib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$product = $this->product->getProductlist($busi_id);
		$product3Ddata = $this->dproductlib->getProduct3Dlist($busi_id);
		$this->template->set ( 'product', $product);
		$this->template->set ( 'product3Ddata', $product3Ddata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/add3dproduct','',true);
		echo $html;
	}
	public function edit3dproduct() {
		$this->load->library('mylib/Dproductlib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$productdata = $this->dproductlib->getProduct3Dlist($busi_id);
		$this->template->set ( 'productdata', $productdata);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/edit3dproduct','',true);
		echo $html;
	}
	public function edit3dProductForm() {
		$this->load->library('mylib/Dproductlib');
		$product_id = $this->input->get('product_id');
		$this->template->set ( 'product_id', $product_id);
		$productdata = $this->dproductlib->getProduct3DdataById($product_id);
		$this->template->set ( 'productdata', $productdata);
		$productimage = $this->dproductlib->getProduct3Dimages($product_id);
		$this->template->set ( 'productimage', $productimage);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/edit3dproductform','',true);
		echo $html;
	}
	public function getProductByName()
	{
		$this->load->library('mylib/Dproductlib');
		$params = $this->input->get();
		//$poductitem = $this->dproductlib->getProductByName($params);
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$name = $this->input->post('product');

		$params = array();
		$params['busi_id'] = $busi_id;
		$params['name'] = $name;
		$this->load->model('Product_Model','product');
		$products = $this->product->searchActiveProductItems($params);
		if(count($products) > 0) {
			$selected_products = array();
			if($this->input->post('preselect') == true)
			{
				$selected_products = explode(',', $this->input->post('selected_productids'));
			}
			$this->template->set ( 'products', $products );
			$this->template->set ( 'selected_products', $selected_products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/new_product_list','',true);
		} else {
			$html = "Sorry we do not found any item for your search criteria.";
		}
		echo $html;
	}
	public function save3DProductTemparary()
	{
			$map = array();
			$max_width =350;
			if (!empty($_FILES['dproductfile']['name'])) {
				$user_photo1 = $_FILES['dproductfile']['name'];
				$path = getcwd() . "/assets/images/tempimages/";
				$list = explode('.',$_FILES['dproductfile']['name']);
				
				$ext = $list[1];
				if (!file_exists($path)) {
					
					mkdir($path, 0777, true);
					chmod($path, 0777);
				}
				
				$location =  "assets/images/tempimages/";
				
				$Img = uploadImage($_FILES['dproductfile'],$location,array('jpeg','jpg','png','gif'),2097152,'temp');
				$width = $this->getWidth(asset_url().$Img['image']);
				$height = $this->getHeight(asset_url().$Img['image']); //Scale the image if it is greater than the width set above if ($width > $max_width){
				$scale = $max_width/$width;
				$uploaded = $this->resizeImage(getcwd() . "/assets/".$Img['image'],$width,$height,$scale, $ext);
				if($Img['status'] == 1) {
					
					$map['msg'] = asset_url().$Img['image'];
					$map['status'] = 1;
					
				} else {
					$error = array("avatar"=>$Img['msg']);
					if (! empty ( $error )) {
						array_push ( $errors, $error );
					}
					$errorMsg["errors"] = $errors;
					$map['msg'] = $errorMsg;
					$map['status'] = 0;
					
				}
				echo json_encode($map);
			}
			
	}
	function getWidth($image) {
		$sizes = getimagesize($image);
		$width = $sizes[0];
		return $width;
	}
	function getHeight($image) {
		$sizes = getimagesize($image);
		$height = $sizes[1];
		return $height;
	}
	function resizeImage($image,$width,$height,$scale,$ext) {
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		switch ($ext) {
			case 'jpg':
			case 'jpeg':
				$source = imagecreatefromjpeg($image);
				break;
			case 'gif':
				$source = imagecreatefromgif($image);
				break;
			case 'png':
				//$source = imagecreatefrompng($image);
				$source = imagecreatefromstring(file_get_contents($image));
				break;
			default:
				$source = false;
				break;
		}
		imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
		imagejpeg($newImage,$image,90);
		chmod($image, 0777);
		return $image;
	}
	public function add3dProductpicture()
	{
		
		$x1 = $_POST['x1'];
		$y1 = $_POST['y1'];
		$x2 = $_POST['x2'];
		$y2 = $_POST['y2'];
		$width = $_POST['w1'];
		$height = $_POST['h1'];
		$image_name = $_POST['image_name'];
		$id = $_POST['product_id'];
		
		$original_image = $image_name;
		$data = explode('/',$original_image);
		$imagename = $data[count($data)-1];
		$imgarry = explode('.',$imagename);
		$imagenameonly = $imgarry[0];
		
		$busi_id = $this->session->userdata('busi_id');
		$path = getcwd() . "/assets/images/business_images/";
		if (!file_exists($path)) {
			
			mkdir($path, 0777, true);
			chmod($path, 0777);
		}
		$userPath = FCPATH . "assets/images/business_images/$busi_id";
		if (!file_exists($userPath)) {
			
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
		$bisinessPath = FCPATH . "assets/images/business_images/$busi_id/My3DProduct";
		if (!file_exists($bisinessPath)) {
			
			mkdir($bisinessPath, 0777, true);
			chmod($bisinessPath, 0777);
		}
		$new_image = 'assets/images/business_images/'.$busi_id.'/My3DProduct/'.$imagenameonly.'new'.'.jpg';
		$image_quality = '95';
		list( $current_width, $current_height ) = getimagesize( $original_image );
		
		$x1 = $x1;
		$y1 = $y1;
		$x2 = $x2;
		$y2 = $y2;
		$width = $width;
		$height = $height;
		
		$crop_width = 350;
		$crop_height = 400;
		$new = imagecreatetruecolor( $crop_width, $crop_height );
		
		$current_image = "";
		
		switch($imgarry[2]) {
			case 'jpeg':
			case 'jpg':
				$current_image= imagecreatefromjpeg($original_image);
				break;
			case 'png':
				$current_image= imagecreatefromstring(file_get_contents($original_image));
				//$current_image= imagecreatefrompng($original_image);
				break;
			case 'gif':
				$current_image= imagecreatefromgif($original_image);
				break;
		}
		
		imagecopyresampled( $new, $current_image, 0, 0, $x1, $y1, $crop_width, $crop_height, $width, $height );
		imagejpeg( $new, $new_image, $image_quality );
		
		$fullpath = asset_url().'images/business_images/'.$busi_id.'/My3DProduct/'.$imagenameonly.'new'.'.jpg';
		$product = array();
		$product['image'] = 'images/business_images/'.$busi_id.'/My3DProduct/'.$imagenameonly.'new'.'.jpg';
		$product['product_item_id'] = $id;
		$product['created_date'] = date("Y-m-d H:i:s");
		
		$this->load->library('mylib/Dproductlib');
		$pid = $this->dproductlib->save3DProduct($product);
		$map = array();
		if($pid > 0)
		{
			$map['status'] = 1;
			$map['msg'] = "Product Image added Successfully.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Product Image Fail to add.";
		}
		echo json_encode($map);
			
	}
	public function delete3DProduct()
	{
		$this->load->library('mylib/Dproductlib');
		$param = $this->input->post('productlist');
		$boolean = 1;
		for($i=0;$i<count($param);$i++) {
			$data = array();
			$data['id'] = $param[$i];
			$data['status'] = 0;
			$boolean = $this->dproductlib->delete3DProduct($data);
		}
		if($boolean == 1) {
			$map['status'] = 1;
			$map['msg'] = "Product Deleted successfully";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Product Fail to Delete";
		}
		echo json_encode($map);
	}
	public function editProduct()
	{
		$params = array();
		$map = array();
		$this->load->library('mylib/Dproductlib');
		$param = $this->input->post('data');
		$busi_id = $this->session->userdata('busi_id');
		$params['id'] = $param['dpid'];
		$params['name'] = $param['productname'];
		$params['description'] = $param['discription'];
		
		if (!empty($_FILES['changeproductfile']['name'])) {
			
			$mainproductimage = $_FILES['changeproductfile']['name'];
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/myProduct";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/myProduct/";
			
			$product_Img = uploadImage($_FILES['changeproductfile'],$location,array('jpeg','jpg','png','gif'),2097152,'product');
			if($product_Img['status'] == 1) {
				$params['main_image'] =  $product_Img['image'];
				
			} else {
				$error = array("publicfile"=>$product_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$product_Img['errormsg'] = $errorMsg;
				echo json_encode($product_Img);
				exit;
			}
		}
	
		$boolean = $this->dproductlib->deleteProduct($params);
		if($boolean == 1) {
			$map['status'] = 1;
			$map['msg'] = "Product edit successfully";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Product Fail to edit";
		}
		echo json_encode($map);
	}
	public  function linkProduct()
	{
		$this->load->library('mylib/Dproductlib');
		$productid = $this->input->post('product_id');
		$busi_id = $this->session->userdata('busi_id');
		$map = array();
		$param =array();
		$pid = 0;
		$size = 0;
		$success = false;
		if (!empty($_FILES['file3dimages']['name'])) {
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH. "assets/images/business_images/$busi_id/myProduct/";
			if (!file_exists($userPath)) {
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			
			$total = count($_FILES['file3dimages']['name']);
			if($total > 0) {
				$all_param = array();
				for($i=0; $i<$total; $i++) {
					$tmpFilePath = $_FILES['file3dimages']['tmp_name'][$i];
					if ($tmpFilePath != ""){
						$newFilePath = $userPath. $_FILES['file3dimages']['name'][$i];
						$param['image'] = "images/business_images/$busi_id/myProduct/".$_FILES['file3dimages']['name'][$i]."?t=".time();
						//$param['product_item_id'] = $id;
						$param['created_date'] = date('Y-m-d H:i:s');
						if(file_exists($newFilePath)) {
    						chmod($newFilePath,0755); //Change the file permissions if allowed
    						unlink($newFilePath); //remove the file
						}
						if(move_uploaded_file($tmpFilePath, $newFilePath)) {
							$success = true;
						}
						//$pid = $this->dproductlib->save3DProductImages($param);
						$size = $size + $_FILES['file3dimages']['size'][$i];
						//$all_param[] = $param;
						array_push($all_param,$param);
					}
				} // end for
			}
			if($success == true){
				$map['status'] = $success;
				$map['total'] = $total;
				$map['uploaded_files'] = $all_param;
				$map['size'] = $size;
				echo json_encode($map);
			}
			
		}
		
		
	}

	function show3dImages(){
		$this->load->library('mylib/Dproductlib');
		//$params = $this->input->get();
		//$poductitem = $this->dproductlib->getProductByName($params);
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$images = $this->input->post('images');
		$params = array();
		/*$params['busi_id'] = $busi_id;
		$params['name'] = $name;
		$this->load->model('Product_Model','product');
		$products = $this->product->searchActiveProductItems($params);*/
		if(count($images) > 0) {
			$this->template->set ( 'uploaded_files', $images );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/show_uploaded_images','',true);
		} else {
			$html = "Failed";
		}
		echo $html;
	}

	public function publish3dImages(){
		$this->load->library('mylib/Dproductlib');
		$size = 0;
		$productid = $this->input->post('product_id');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$images = $this->input->post('images');
		$size = $this->input->post('size');
		$total = count($images);
		if($total > 0) {
				$dparam = array();
				$dparam['busi_id'] = $busi_id;
				$dparam['product_id'] = $productid;
				$dparam['created_date'] = date('Y-m-d H:i:s');
				$dparam['status'] = 1;
				$id = $this->dproductlib->save3DProduct($dparam);

				foreach ($images as $key => $image) {
						$param['product_item_id'] = $id;
						$param['created_date'] = $image['created_date'];
						$param['image'] = $image['image'];
						$pid = $this->dproductlib->save3DProductImages($param);
				}
			}
				if($pid > 0)
				{
					/*************** Storage Implementation *************** */
					if($size != 0) {
						$this->load->library('mylib/StorageLib');
						$storage = array();
						$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
						$storage['field'] = 'products';
						$storage['datasize'] = round($size/1024,2);
						$this->storagelib->updateStorageByBusiId($storage);
					}
					/*******************************************************/
					$map['status'] = 1;
					$map['msg'] = "Product 3DImage added Successfully.";
					$map['id'] = $id;
				} else {
					$map['status'] = 0;
					$map['msg'] = "Product 3DImage Fail to add.";
				}
		echo json_encode($map);
	}

	public function change3dimages(){
		$success = false;
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$image_index = $this->input->post('image_index');
		$uploaded_files = $this->input->post('uploaded_files');
		//print_r($_POST);
		$map = array();
		$total = count($_FILES['changefile3dimage']['name']);
		if($total > 0) {
			//print_r($_FILES['changefile3dimage']);
			$tmpFilePath = $_FILES['changefile3dimage']['tmp_name'];
			if ($tmpFilePath != ""){
					$userPath = FCPATH. "assets/images/business_images/$busi_id/myProduct/";
					$newFilePath = $userPath. $_FILES['changefile3dimage']['name'];
					$param['image'] = "images/business_images/$busi_id/myProduct/".$_FILES['changefile3dimage']['name']."?t=".time();
						//$param['product_item_id'] = $id;
					$param['created_date'] = date('Y-m-d H:i:s');
					if(file_exists($newFilePath)) {
    						chmod($newFilePath,0755); //Change the file permissions if allowed
    						unlink($newFilePath); //remove the file
						}
					if(move_uploaded_file($tmpFilePath, $newFilePath)) {
							$success = true;
					}
			}
			if($success == true){
				//print_r($uploaded_files);
						$map['status'] = $success;
						$uploaded_files[$image_index] = $param;
						$map['img_name'] = pathinfo($param['image'])['filename'];
						$map['uploaded_files'] = $uploaded_files;
						$map['image_index'] = $image_index;
						$map['msg'] = "Image Changed Successfully.";
			}
					
		}else{
				$map['status'] = false;
				$map['msg'] = "Image change failed";
		}
			echo json_encode($map);
	}
	
	public function getProductList()
	{
		$this->load->library('mylib/Dproductlib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$params = array();
		$params['busi_id'] = $busi_id;
		$this->load->model('Product_Model','product');
		$products = $this->product->searchActiveProductItems($params);
		if(count($products) > 0) {
			$this->template->set ( 'products', $products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/product_list','',true);
		} else {
			$html = "Sorry we do not found any item for your search criteria.";
		}
		echo $html;
	
	}
	public  function getProductById()
	{
		$product_id = $this->input->post('productid');
		$this->load->library('mylib/Dproductlib');
		$productdata = $this->dproductlib->getProductById($product_id);
		echo json_encode($productdata);
	}
	public  function getSelectedProductLists()
	{
		$product_ids = $this->input->post('productids');
		$products = $this->product->getSelectedProductsByIds($product_ids);
		//print_r($products);
		if(count($products) > 0) {
			$this->template->set ( 'products', $products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/selected_products_list','',true);
		} else {
			$html = "Sorry we do not found any item for your search criteria.";
		}
		echo $html;
		/*$this->load->library('mylib/Dproductlib');
		$productdata = $this->dproductlib->getProductById($product_id);
		echo json_encode($productdata);*/
	}
	function changImage()
	{
		$this->load->library('mylib/Dproductlib');
		$params = array();
		$map = array();
		$dproid = $this->input->post('fileid');
		$busi_id = $this->session->userdata('busi_id');
		$params['id'] = $dproid;
		$size = 0;
		$dpfile = $this->dproductlib->getProductImageById($dproid);
		if (!empty($_FILES['filechangeimage']['name'])) {
			$mainproductimage = $_FILES['filechangeimage']['name'];
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/myProduct";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/myProduct/";
			
			$product_Img = uploadImage($_FILES['filechangeimage'],$location,array('jpeg','jpg','png','gif'),2097152,'product');
			if($product_Img['status'] == 1) {
				$params['image'] =  $product_Img['image'];
				$size = $size + $_FILES['filechangeimage']['size'];
			} else {
				$error = array("publicfile"=>$product_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$product_Img['errormsg'] = $errorMsg;
				echo json_encode($product_Img);
				exit;
			}
			$updatedid  = $this->dproductlib->change3dproduct($params);
			$size = $size - filesize(FCPATH."assets/".$dpfile[0]['image']);
			unlink(FCPATH."assets/".$dpfile[0]['image']);
			/* ************** Storage Implementation *************** */
			if($size != 0) {
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'products';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
			}
			/* ***************************************************** */
			$map['status'] = 1;
			$map['msg'] = "Image Changed Successfully.";
			$map['pid'] = $dproid;
			$map['src'] = $product_Img['image'];
		}  else {
			$map['status'] = 0;
			$map['msg'] = "Image Fail to Changed.";
		}
		
		echo json_encode($map);
	}
	public  function changeLinkProduct()
	{
		$map = array();
		$newid = $this->input->post('newproductid');
		$id = $this->input->post('did');
		$this->load->library('mylib/Dproductlib');
		$updatedid = $this->dproductlib->update3dproduct($id,$newid);
		if($updatedid > 0 || $newid == $this->input->post('oldproductid'))
		{
			$map['status'] = 1;
			$map['msg'] = "Product Successfully Linked.";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Product Fail to Link.";
		}
		echo json_encode($map);
	}
	public function  getDproductById()
	{
		$this->load->library('mylib/Dproductlib');
		$pid = $this->input->post('pid');
		$productimage = $this->dproductlib->getProduct3Dimages($pid);
		$this->template->set ( 'productimage', $productimage);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/dproductexample','',true);
		echo $html;
		
	}
	
	public function get3DProductList() {
		$this->load->library('mylib/Dproductlib');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$productdata = $this->dproductlib->getProductlist($busi_id);
		$this->template->set ( 'my3dproducts', $productdata );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/partial3dpro','',true);
		echo $html;
	}
	
	public function show3Dpro($id) {
		$this->load->library('mylib/Dproductlib');
		$productdata = $this->dproductlib->getProduct3DDetailById($id);
		$this->template->set ( 'productdata', $productdata );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('default/my3dpro','',true);
		echo $html;
	}
	public function show3DproBuyer($id) {
		$this->load->library('mylib/Dproductlib');
		$productdata = $this->dproductlib->getProduct3DDetailByIdBuyer($id);
		$this->template->set ( 'productdata', $productdata );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('default/my3dpro','',true);
		echo $html;
	}

	public function show3Dprobeforesave() {
		$this->load->library('mylib/Dproductlib');
		$uploaded_images = $this->input->post('uploaded_images');
		$productid = $this->input->post('productid');
		$productdata = $this->dproductlib->getProductById($productid);
		$all_images = [];
		foreach ($uploaded_images as $key => $image) {
			$img = $image['image'];
			array_push($all_images,$img);
		}

		$productdata[0]['pro_images'] = implode(",",$all_images); 
		
		$this->template->set ( 'productdata', $productdata );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('default/my3dpro','',true);
		echo $html;
	}
	
}