<?php
class Catalouge extends MX_Controller {
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
	public function catalouge() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$this->load->model('Catalogue_model','catalogue');
		$catalogues = $this->catalogue->getProductCatalogues($busi_id);
		$this->template->set ( 'catalogues', $catalogues );
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/catalouge','',true);
		echo $html;
	}
	public function addCatelough() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$this->load->model('Catalogue_model','catalogue');
		$catalogues = $this->catalogue->getProductCatalogues($busi_id);
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'catalogues', $catalogues );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/addcatalouge','',true);
		echo $html;
	}
	public function editCatelough() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Catalogue_model','catalogue');
		$catalogues = $this->catalogue->getProductCatalogues($busi_id);
		$this->template->set ( 'catalogues', $catalogues );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editcatalouge','',true);
		echo $html;
	}
	public function editCatelougeForm() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$cataloge_id = $this->input->get('catalogue_id');
		$this->load->model('Catalogue_model','catalogue');
		$catalogues = $this->catalogue->getProductCatalogueById($cataloge_id);
		$catalogue_items = $this->catalogue->getProductCatalogueItems($cataloge_id);
		$this->load->model('Product_Model','product');
		$mproducts = $this->product->getActiveProductAndSubProduct($busi_id);
		$this->template->set ( 'mproducts', $mproducts );
		$this->template->set ( 'catalogue', $catalogues[0] );
		$this->template->set ( 'products', $catalogue_items );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/editcatalougeform','',true);
		echo $html;
	}
	
	public function saveVcatalogueTempararyImage()
	{
		$map = array();
		$max_width = 300;
		if (!empty($_FILES['catalogue-pic']['name'])) {
			$user_photo1 = $_FILES['catalogue-pic']['name'];
			$path = getcwd() . "/assets/images/tempimages/";
			$list = explode('.',$_FILES['catalogue-pic']['name']);
				
			//$ext = $list[1];
			$ext = pathinfo($_FILES['catalogue-pic']['name'], PATHINFO_EXTENSION);
			if (!file_exists($path)) {
	
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
				
			$location =  "assets/images/tempimages/";
				
			$Img = uploadImage($_FILES['catalogue-pic'],$location,array('jpeg','jpg','png','gif'),10097152,'temp');
			$width = getWidth(FCPATH."assets/".$Img['image']);
			$height = getHeight(FCPATH."assets/".$Img['image']); //Scale the image if it is greater than the width set above if ($width > $max_width){
			$scale = $max_width/$width;
			$uploaded = resizeImage(getcwd() . "/assets/".$Img['image'],$width,$height,$scale, $ext);
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
	
	public function changeVcatalogueImage()
	{
		$x1 = $_POST['x1'];
		$y1 = $_POST['y1'];
		$x2 = $_POST['x2'];
		$y2 = $_POST['y2'];
		$width = $_POST['w1'];
		$height = $_POST['h1'];
		$image_name = $_POST['image_name'];
	
		$original_image = $image_name;
		$data = explode('/',$original_image);
		$imagename = $data[count($data)-1];
		$imgarry = explode('.',$imagename);
		$imagenameonly = $imgarry[0];
	
		$userId = $this->session->userdata('tsuser')['userid'];
		$path = getcwd() . "/assets/images/user_images/";
		if (!file_exists($path)) {
				
			mkdir($path, 0777, true);
			chmod($path, 0777);
		}
		$userPath = FCPATH . "assets/images/user_images/$userId/catalogue";
		if (!file_exists($userPath)) {
				
			mkdir($userPath, 0777, true);
			chmod($userPath, 0777);
		}
	
		$new_image = 'assets/images/user_images/'.$userId.'/catalogue/'.$imagenameonly.'new'.'.jpg';
		$image_quality = '75';
		list( $current_width, $current_height ) = getimagesize( $original_image );
	
		$x1 = $x1;
		$y1 = $y1;
		$x2 = $x2;
		$y2 = $y2;
		$width = $width;
		$height = $height;
	
		$crop_width = 200;
		$crop_height = 200;
		$new = imagecreatetruecolor( $crop_width, $crop_height );
	
		$current_image = "";
	
		switch($imgarry[2]) {
			case 'jpeg':
			case 'jpg':
				$current_image= imagecreatefromjpeg($original_image);
				break;
			case 'png':
				$current_image= imagecreatefromstring(file_get_contents($original_image));
				break;
			case 'gif':
				$current_image= imagecreatefromgif($original_image);
				break;
		}
	
		imagecopyresampled( $new, $current_image, 0, 0, $x1, $y1, $crop_width, $crop_height, $width, $height );
		imagejpeg( $new, $new_image, $image_quality );
	
		$map = array();
		$map['fullpath'] = asset_url().'images/user_images/'.$userId.'/catalogue/'.$imagenameonly.'new'.'.jpg';
		$map['path'] = 'images/user_images/'.$userId.'/catalogue/'.$imagenameonly.'new'.'.jpg';
	
		echo json_encode($map);
	}
	
	public function addNewCatalogue() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_str = $this->input->post('item_id');
		$items = explode(",",$item_str);
		$params = array();
		$params['busi_id'] = $busi_id;
		$params['catalogue_title'] = $this->input->post('catalogue_title');
		$params['catalogue_cover'] = $this->input->post('catalogue_img');
		$params['status'] = 0;
		$params['pages'] = count($items)*2;//ceil(count($items)/2*3);
		$params['created_date'] = date('Y-m-d H:i:s');
		$this->load->model('Catalogue_model','catalogue');
		$catalogue_id = $this->catalogue->addProductCatalogue($params);
		$products = array();
		foreach ($items as $key=>$item) {
			$product = array();
			$product['catalogue_id'] = $catalogue_id;
			$product['item_id'] = $item;
			$product['sortorder'] = $key+1;
			$products[] = $product;
		}
		if(count($products) > 0) {
			$this->catalogue->addProductCatalogueItem($products);
		}
		if($catalogue_id > 0) {
			$resp['status'] = 1;
			$resp['id'] = $catalogue_id;
			$resp['msg'] = 'Catalogue added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add new catalogue.';
		}
		echo json_encode($resp);
	}
	
	public function getCatalogueContent($id) {
		$this->load->model('Catalogue_model','catalogue');
		$catalogue_items = $this->catalogue->getProductCatalogueItems($id);
		$this->template->set ( 'products', $catalogue_items );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/cataloguepages','',true);
		echo $html;
	}
	
	public function publishCatalogue() {
		$catalogue_id = $this->input->get('catalogue_id');
		$this->load->model('Catalogue_model','catalogue');
		$data = array();
		$data['id'] = $catalogue_id;
		$data['status'] = 1;
		$isupdated = $this->catalogue->updateProductCatalogue($data);
		if($isupdated) {
			$resp['status'] = 1;
			$resp['msg'] = 'Catalogue published successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to published new catalogue.';
		}
		echo json_encode($resp);
	}
	
	public function updateNewCatalogue() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_str = $this->input->post('item_id');
		$items = explode(",",$item_str);
		$params = array();
		$params['busi_id'] = $busi_id;
		$params['id'] = $this->input->post('id');
		$params['catalogue_title'] = $this->input->post('catalogue_title');
		$params['catalogue_cover'] = $this->input->post('catalogue_img');
		$params['pages'] = ceil(count($items)/2*3);
		$this->load->model('Catalogue_model','catalogue');
		$updated = $this->catalogue->updateProductCatalogue($params);
		$catalogue_id = $this->input->post('id');
		$products = array();
		foreach ($items as $key=>$item) {
			$product = array();
			$product['catalogue_id'] = $catalogue_id;
			$product['item_id'] = $item;
			$product['sortorder'] = $key+1;
			$products[] = $product;
		}
		$this->catalogue->deleteProductCatalogueItem($params['id']);
		if(count($products) > 0) {
			$this->catalogue->addProductCatalogueItem($products);
		}
		if($updated > 0) {
			$resp['status'] = 1;
			$resp['id'] = $catalogue_id;
			$resp['msg'] = 'Catalogue updated successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to updated catalogue.';
		}
		echo json_encode($resp);
	}

	public function catalogueProductSearch() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$name = $this->input->get('query');
		$sproduct_id = $this->input->get('sproduct_id');
		$params = array();
		$params['busi_id'] = $busi_id;
		$params['name'] = $name;
		$params['sproduct_id'] = $sproduct_id;
		$this->load->model('Product_Model','product');
		$products = $this->product->searchActiveProductItems($params);
		if(count($products) > 0) {
			$this->template->set ( 'products', $products );
			$this->template->set ( 'page', 'home' );
			$this->template->set_theme('default_theme');
			$this->template->set_layout (false);
			$html = $this->template->build ('station/pages/subpages/product_list_small','',true);
		} else {
			$html = "Sorry we do not found any item for your search criteria.";
		}
		echo $html;
	}
	
	public function addCatalogueItems() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_str = $this->input->post('item_id');
		$items = explode(",",$item_str);
		$catalogue_id = $this->input->post('catalogue_id');
		$products = array();
		foreach ($items as $key=>$item) {
			$product = array();
			$product['catalogue_id'] = $catalogue_id;
			$product['item_id'] = $item;
			$product['sortorder'] = $key+1;
			$products[] = $product;
		}
		$this->load->model('Catalogue_model','catalogue');
		if(count($products) > 0) {
			$this->catalogue->addProductCatalogueItem($products);
			$params = array();
			$params['id'] = $catalogue_id;
			$params['pages'] = ceil(count($items)/2*3);
			$this->load->model('Catalogue_model','catalogue');
			$this->catalogue->updateProductCatalogue($params);
		}
		if($catalogue_id > 0) {
			$resp['status'] = 1;
			$resp['id'] = $catalogue_id;
			$resp['msg'] = 'Catalogue item added successfully.';
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Failed to add new catalogue item.';
		}
		echo json_encode($resp);
	}
	
	public function deleteCatalogues() {
		$this->load->model('Catalogue_model','catalogue');
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$item_str = $this->input->post('catalogue_id');
		$items = explode(",",$item_str);
		foreach ($items as $item) {
			$this->catalogue->deleteProductCatalogue($item);
			$this->catalogue->deleteProductCatalogueItem($item);
		}
		$resp['status'] = 1;
		$resp['msg'] = 'Catalogue deleted successfully.';
		echo json_encode($resp);
	}
	
	public function moveCatalogueItemUp() {
		$this->load->model('Catalogue_model','catalogue');
		$oldsortorder = $this->input->post('sortorder');
		$newsortorder = $oldsortorder - 1;
		$catitem = array();
		$catitem['catalogue_id'] = $this->input->post('id');
		$catitem['item_id'] = $this->input->post('item_id');
		$catitem['sortorder'] = $newsortorder;
		$ocataitem = $this->catalogue->getProductCatalogueItemBySortOrder($catitem['catalogue_id'],$catitem['sortorder']);
		if(count($ocataitem) > 0) {
			$this->catalogue->updateProductCatalogueItemSortOrder($catitem);
			$catitem = array();
			$catitem['catalogue_id'] = $this->input->post('id');
			$catitem['item_id'] = $ocataitem[0]['item_id'];
			$catitem['sortorder'] = $oldsortorder;
			$updated = $this->catalogue->updateProductCatalogueItemSortOrder($catitem);
			$resp = array();
			if($updated) {
				$resp['status'] = 1;
			} else {
				$resp['msg'] = 'Can not move item.';
				$resp['status'] = 0;
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Can not move item.';
		}
		echo json_encode($resp);
	}
	public function moveCatalogueItemDown() {
		$this->load->model('Catalogue_model','catalogue');
		$oldsortorder = $this->input->post('sortorder');
		$newsortorder = $oldsortorder + 1;
		$catitem = array();
		$catitem['catalogue_id'] = $this->input->post('id');
		$catitem['item_id'] = $this->input->post('item_id');
		$catitem['sortorder'] = $newsortorder;
		$ocataitem = $this->catalogue->getProductCatalogueItemBySortOrder($catitem['catalogue_id'],$catitem['sortorder']);
		if(count($ocataitem) > 0) {
			$this->catalogue->updateProductCatalogueItemSortOrder($catitem);
			$catitem = array();
			$catitem['catalogue_id'] = $this->input->post('id');
			$catitem['item_id'] = $ocataitem[0]['item_id'];
			$catitem['sortorder'] = $oldsortorder;
			$updated = $this->catalogue->updateProductCatalogueItemSortOrder($catitem);
			$resp = array();
			if($updated) {
				$resp['status'] = 1;
			} else {
				$resp['msg'] = 'Can not move item.';
				$resp['status'] = 0;
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Can not move item.';
		}
		echo json_encode($resp);
	}
	
	public function getProductCatalogueList() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$this->load->model('Catalogue_model','cataloguemodel');
		$catalogues = $this->cataloguemodel->getProductCatalogues($busi_id);
		$this->template->set ( 'catalogues', $catalogues );
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/subpages/partialcatalogues','',true);
		echo $html;
	}
	
}