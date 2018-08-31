<?php
class MyFiles extends MX_Controller {
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
	public function myFile() {
		$this->load->library('mylib/MyfileLib');
		$this->load->library('mylib/PackageLib');
		$busi_id = $this->session->userdata('busi_id');
		$myfilelist = $this->myfilelib->getFilesListBybusi_id($busi_id);
		$plan_id = $this->session->userdata('tsuser')['plan_id'];
		$cust_type = $this->session->userdata('tsuser')['category_id'];
		$plandata = $this->packagelib->getPlanItemById($plan_id,$cust_type);
		$max_filemb = 0;
		foreach($plandata as $row)
		{
			if($row['code'] == 'mf')
			{
				$max_filemb = $row['intvalue'];
			}
			
		}
		
		$totalstorage = $max_filemb;
		$storageinbytes = $totalstorage * 1048576;
		
		$filecount = count($myfilelist);
		$size =0;
		foreach ($myfilelist as $row)
		{
			$size = $size + $row['file_size'];
		}
		$remainstorage = $storageinbytes - $size;
		$this->template->set('remainstorageinbyte',$remainstorage);
		$remainingsize = $this->myfilelib->formatSizeUnits($remainstorage);
		$this->template->set('totalstorage',$totalstorage);
		$this->template->set('remainingsize',$remainingsize);
		$this->template->set('filecount',$filecount);
		$this->template->set('myfilelist',$myfilelist);
		$this->template->set ( 'page', 'home' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('station/pages/myfiles','',true);
		echo $html;
	}
	public function publicFileUpload()
	{
		$map = array();
		$this->load->library('mylib/MyfileLib');
		$publicfile = array();
		$privatefile =array();
		$busi_id = $this->session->userdata('busi_id');
		$id = $this->session->userdata('tsuser')['userid'];
		$map = array();
		$remainstorage = $this->input->post('remainstorage');
		if (!empty($_FILES['publicfileupload']['name'])) {
			
			$publicuploadedfile = $_FILES['publicfileupload']['name'];
			$splitfilename = explode('.',$publicuploadedfile);
			$extention = $splitfilename[1];
			
			$extention= pathinfo($_FILES['publicfileupload']['name'], PATHINFO_EXTENSION);
			
			
			$size = $_FILES['publicfileupload']['size'];
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/Myfiles";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/Myfiles/";
			
			$certificate_Img = uploadImage($_FILES['publicfileupload'],$location,array('xlsx','xls','xlsm','txt','docx','doc','ppt','pptm','pptx','pdf','jpeg','jpg','png','gif','zip','rar','arj'),$remainstorage,'publicfile');
				if($certificate_Img['status'] == 1) {
					$publicfile['file'] =  $certificate_Img['image'];
					if($extention == 'jpeg' || $extention == 'jpg' || $extention == 'png' || $extention=='gif')
					{
						$publicfile['file_type'] =  'image';
					}
					if($extention == 'xlsx' || $extention == 'xls' || $extention == 'xlsm' )
					{
						$publicfile['file_type'] =  'excel';
					}
					if($extention == 'docx' || $extention == 'doc')
					{
						$publicfile['file_type'] =  'word';
					}
					if($extention == 'txt')
					{
						$publicfile['file_type'] =  'text';
					}
					if($extention == 'ppt' || $extention == 'pptm' || $extention == 'pptx')
					{
						$publicfile['file_type'] =  'ppt';
					}
					if($extention == 'pdf')
					{
						$publicfile['file_type'] =  'pdf';
					}
					if($extention == 'zip' || $extention == 'rar' || $extention == 'arj')
					{
						$publicfile['file_type'] =  'zip';
					}
					$publicfile['file_size'] =  $size;
					$publicfile['file_access_type'] =  1;
					$publicfile['dispaly_name'] = $publicuploadedfile;
					
				} else {
					$error = array("publicfile"=>$certificate_Img['msg']);
					if (! empty ( $error )) {
						array_push ( $errors, $error );
					}
					$errorMsg["errors"] = $errors;
					$certificate_Img['errormsg'] = $errorMsg;
					echo json_encode($certificate_Img);
					exit;
				}
		}

		if(count($publicfile) > 0) 
		{
			$publicfile['busi_id'] = $busi_id;
			$publicfile['created_date'] = date('Y-m-d H:i:s');
			$publicfile['created_by'] = $id;
			$insertedid = $this->myfilelib->savePublicMyFile($publicfile);
			$this->load->library('mylib/StorageLib');
			$storage = array();
			$storage['busi_id'] = $busi_id;
			$storage['field'] = 'files';
			$storage['datasize'] = round($size/1024,2);
			$this->storagelib->updateStorageByBusiId($storage);
			if($insertedid > 0) {
				$map['status'] = 1;
				$map['msg'] = "File Upload successfully";
			} else {
				$map['status'] = 0;
				$map['msg'] = "File Fail to Upload";
			} 
		}  else {
			$map['status'] = 0;
			$map['msg'] = "File Fail to Upload";
		}
		
		echo json_encode($map);
		
	}
	
	
	public function privateFileUpload()
	{
		$map = array();
		$errors = array();
		$this->load->library('mylib/MyfileLib');
		$publicfile = array();
		$privatefile =array();
		$busi_id = $this->session->userdata('busi_id');
		$id = $this->session->userdata('tsuser')['userid'];
		$privatefile['password'] = $this->input->post('password');
		$map = array();
		
		if (!empty($_FILES['privatefileupload']['name'])) {
			$privateuploadedfile = $_FILES['privatefileupload']['name'];
			$splitfilename = explode('.',$privateuploadedfile);
			$extention = $splitfilename[1];
			$size = $_FILES['privatefileupload']['size'];
			
			$path = getcwd() . "/assets/images/business_images/$busi_id";
			if (!file_exists($path)) {
				
				mkdir($path, 0777, true);
				chmod($path, 0777);
			}
			$userPath = FCPATH . "assets/images/business_images/$busi_id/Myfiles";
			if (!file_exists($userPath)) {
				
				mkdir($userPath, 0777, true);
				chmod($userPath, 0777);
			}
			$location =  "assets/images/business_images/$busi_id/Myfiles/";
			
			$certificate_Img = uploadImage($_FILES['privatefileupload'],$location,array('xlsx','xls','xlsm','txt','docx','doc','ppt','pptm','pptx','pdf','jpeg','jpg','png','gif'),2097152,'publicfile');
			if($certificate_Img['status'] == 1) {
				$privatefile['file'] =  $certificate_Img['image'];
				if($extention == 'jpeg' || $extention == 'jpg' || $extention == 'png' || $extention=='gif')
				{
					$privatefile['file_type'] =  'image';
				}
				if($extention == 'xlsx' || $extention == 'xls' || $extention == 'xlsm' )
				{
					$privatefile['file_type'] =  'excel';
				}
				if($extention == 'docx' || $extention == 'doc')
				{
					$privatefile['file_type'] =  'word';
				}
				if($extention == 'txt')
				{
					$privatefile['file_type'] =  'text';
				}
				if($extention == 'ppt' || $extention == 'pptm' || $extention == 'pptx')
				{
					$privatefile['file_type'] =  'ppt';
				}
				if($extention == 'pdf')
				{
					$privatefile['file_type'] =  'pdf';
				}
				$privatefile['file_size'] =  $size;
				$privatefile['file_access_type'] =  2;
				$privatefile['dispaly_name'] = $privateuploadedfile;
				
				
			} else {
				$error = array("privatefile"=>$certificate_Img['msg']);
				if (! empty ( $error )) {
					array_push ( $errors, $error );
				}
				$errorMsg["errors"] = $errors;
				$certificate_Img['errormsg'] = $errorMsg;
				echo json_encode($certificate_Img);
				exit;
			}
		}
		if(count($privatefile) > 0)
		{
			$privatefile['busi_id'] = $busi_id;
			$privatefile['created_date'] = date('Y-m-d H:i:s');
			$privatefile['created_by'] = $id;
			$insertedid = $this->myfilelib->savePublicMyFile($privatefile);
			$this->load->library('mylib/StorageLib');
			$storage = array();
			$storage['busi_id'] = $busi_id;
			$storage['field'] = 'files';
			$storage['datasize'] = round($size/1024,2);
			$this->storagelib->updateStorageByBusiId($storage);
			if($insertedid > 0) {
				$map['status'] = 1;
				$map['msg'] = "File Upload successfully";
			} else {
				$map['status'] = 0;
				$map['msg'] = "File Fail to Upload";
			}
		} else {
			$map['status'] = 0;
			$map['msg'] = "File Fail to Upload";
		}
		echo json_encode($map);
	}
	
	public function deleteFile()
	{
		$this->load->library('mylib/MyfileLib');
		$param = $this->input->post('filearray');
		$boolean = 1;
		$ids = "";
		for($i=0;$i<count($param);$i++) {
			$data = array();
			$data['id'] = $param[$i];
			$data['is_deleted'] = 1;
			$boolean = $this->myfilelib->deleteMyFiles($data);
			if($ids == "") {
				$ids = $param[$i];
			} else {
				$ids = $ids.",".$param[$i];
			}
		}
		if($boolean == 1) {
			if($ids != "") {
				$myfilelist = $this->myfilelib->getFileSizesByIds($ids);
				if($myfilelist[0]['filesize'] > 0) {
					$size = $myfilelist[0]['filesize'] * -1;
					$this->load->library('mylib/StorageLib');
					$storage = array();
					$storage['busi_id'] = $busi_id;
					$storage['field'] = 'files';
					$storage['datasize'] = round($size/1024,2);
					$this->storagelib->updateStorageByBusiId($storage);
				} 
			}
			$map['status'] = 1;
			$map['msg'] = "Files Deleted successfully";
		} else {
			$map['status'] = 0;
			$map['msg'] = "Files Fail to Deleted";
		}
		echo json_encode($map);
	}
	public function checkFilePassword()
	{
		$data = array();
		$map = array();
		$data['id'] = $this->input->post('id');
		$data['password'] = $this->input->post('password');
		$this->load->library('mylib/MyfileLib');
		$data = $this->myfilelib->checkFilePassword($data);
		if(count($data) > 0 )	{
			$this->myfilelib->updateFileDownload($this->input->post('id'));
			$map['status'] = 1;
			$map['msg'] = "File Found";
			$myfilelist = $this->myfilelib->getFileById($this->input->post('id'));
			$map['filename'] = $myfilelist[0]['file'];
			$map['fname'] = basename($myfilelist[0]['file']);
		} else {
			$map['status'] = 0;
			$map['msg'] = "File Not Found";
		}
		echo json_encode($map);
	}
	
	public function recordFileDownload($id) {
		$this->load->library('mylib/MyfileLib');
		$flag = $this->myfilelib->updateFileDownload($id);
		$myfilelist = $this->myfilelib->getFileById($id);
		if($flag)	{
			$map['status'] = 1;
			$map['msg'] = "File Found";
			$map['filename'] = $myfilelist[0]['file'];
		} else {
			$map['status'] = 0;
			$map['msg'] = "File Not Found";
			$map['flag'] = "";
		}
		echo json_encode($map);
	}
	
	public function downloadFile($id) {
		
        $this->load->library('mylib/MyfileLib');
        $myfilelist = $this->myfilelib->getFileById($id);
				$path = FCPATH."assets/".$myfilelist[0]['file'];
				// print_r(basename($path));exit;
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($path).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
				readfile($path);
        flush(); // Flush system output buffer
        exit;
    }
	
}