<?php
class MyfileLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function savePublicMyFile($data)
	{
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $res = $this->CI->account->savePublicMyFile($data);
	}
	public  function getFilesListBybusi_id($busi_id)
	{
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $res = $this->CI->account->getFilesListBybusi_id($busi_id);
	}
	public  function deleteMyFiles($data)
	{
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $res = $this->CI->account->deleteMyFiles($data);
	}
	public  function checkFilePassword($data)
	{
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $res = $this->CI->account->checkFilePassword($data);
	}
	public function formatSizeUnits($bytes)
	{
		
			if ($bytes >= 1073741824)
			{
				$bytes = number_format($bytes / 1073741824, 2) . ' GB';
			}
			elseif ($bytes >= 1048576)
			{
				$bytes = number_format($bytes / 1048576, 2) . ' MB';
			}
			elseif ($bytes >= 1024)
			{
				$bytes = number_format($bytes / 1024, 2) . ' KB';
			}
			elseif ($bytes > 1)
			{
				$bytes = $bytes . ' bytes';
			}
			elseif ($bytes == 1)
			{
				$bytes = $bytes . ' byte';
			}
			else
			{
				$bytes = '0 bytes';
			}
			
			return $bytes;
	}
	public  function updateFileDownload($id)
	{
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $this->CI->account->updateFileDownload($id);
	}
	
	public function getFileById($id) {
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $this->CI->account->getFileById($id);
	}
	
	public function getFileSizesByIds($ids) {
		$this->CI->load->model ( 'MyFIle_Model', 'account' );
		return $this->CI->account->getFileSizesByIds($ids);
	}

}
