<?php
class Udtalks extends MX_Controller {
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
	
	public function udtalk() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Myudtalk_model','myudtalk');
		$images = $this->myudtalk->getUdFiles($busi_id);
		$this->template->set ( 'myimages', $images);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/udtalk','',true);
		echo $html;
	}
	
	public function saveImage() {
		$this->load->model('Myudtalk_model','myudtalk');
		$busi_id = $this->session->userdata('busi_id');
		if (!empty($_FILES['FileUpload3']['name'])) {
			$user_id = $this->session->userdata('tsuser')['userid'];
			$user_photo1 = $_FILES['FileUpload3']['name'];
			$userPath = FCPATH. "assets/images/user_images/$user_id/udtalk/";
			if (!file_exists($userPath)) {
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
				
			$location =  "assets/images/user_images/$user_id/udtalk/";
			$Img = uploadImage($_FILES['FileUpload3'],$location,array('jpeg','jpg','png','gif'),20097152,'udt');
			if($Img['status'] == 1) {
				$size = $_FILES['FileUpload3']['size'];
				$map['msg'] = asset_url().$Img['image'];
				$map['status'] = 1;
				$data = array();
				$data['busi_id'] = $busi_id;
				$data['image'] = $Img['image'];
				$data['created_date'] = date('Y-m-d H:i:s');
				$this->myudtalk->saveUdFile($data);
				/* ************** Storage Implementation *************** */
				$this->load->library('mylib/StorageLib');
				$storage = array();
				$storage['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
				$storage['field'] = 'udtalk';
				$storage['datasize'] = round($size/1024,2);
				$this->storagelib->updateStorageByBusiId($storage);
				/* ***************************************************** */
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
		} else {
			echo json_encode(array('status'=>0));
		}
	}
	
	public function deleteImage($id) {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Myudtalk_model','myudtalk');
		$file = $this->myudtalk->getUDFileById($id);
		$this->myudtalk->deleteUdFile($id);
		/* ************** Storage Implementation *************** */
		$size = filesize(FCPATH."assets/".$file[0]['image']);
		$size = $size * -1;
		$this->load->library('mylib/StorageLib');
		$storage = array();
		$storage['busi_id'] = $busi_id;
		$storage['field'] = 'udtalk';
		$storage['datasize'] = round($size/1024,2);
		$this->storagelib->updateStorageByBusiId($storage);
		/* ***************************************************** */
		echo json_encode(array('status'=>1));
	}
	
	
}