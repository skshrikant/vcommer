<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fbemail {

	private $client = null;
	public $config = array();
	public $attachment = 0;
	public $from = '';
	public $reply_to = '';
	public $to = '';
	public $headline = '';
	public $subject = '';
	public $file = '';
	public $bcc = 0;
	public $mctag = '';
	private $smtp = '';
	private $port = '';
	private $smtp_user = '';
	private $smtp_pass = '';
	private $CI;
	private $email_activation = true;


	function __construct() {
		unset($this->config);
		$this->CI =& get_instance();
		$fb_config = parse_ini_file(APPPATH."config/FB.ini");
		$this->email_activation = $fb_config['email_activate'];
	}

	function send_email( $message ) {
		if($this->email_activation)
		{
			$CI = &get_instance();
			$CI->load->library('email',$this->config);
			$CI->email->set_newline("\r\n");
			$CI->email->from($this->from, $this->headline);
			$CI->email->reply_to($this->reply_to, 'FreightBazaar');
			if($this->bcc)
				$CI->email->bcc($this->to);
			else
				$CI->email->to($this->to);
			$CI->email->subject($this->subject);
			if($this->attachment == 1)
				$CI->email->attach($this->file);
			//if($this->mctag)
				//$CI->email->mctag($this->mctag);
			$CI->email->message($message);
		    if (!$CI->email->send()) 
		    {
			   return false;
		    }
			else
			{
				$CI->email->clear(TRUE);
				return true;
			}
		} else {
			return false;
		}
	}

	function load_system_config() {
		$this->config = array (
			  'protocol' => 'smtp',
			  'smtp_host' => 'smtp.mandrillapp.com',
			  'smtp_port' => 587,
			  'smtp_user' => 'xxxxxxx',
			  'smtp_pass' => 'xxxxxxxxx',
			  'mailtype'  => 'html',
			  'smtp_timeout' => 30,
			  'crlf' => "\r\n",
  			  'newline' => "\r\n");

		$this->config['mailtype'] = 'html';
		$this->config['charset'] = 'iso-8859-1';
		$this->config['wordwrap'] = TRUE;
		$this->from = '';
		$this->headline = '';
		$this->reply_to = '';
	}
	
	function load_system_config_office() {
		$this->config = array (
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.office365.com',
				'smtp_port' => 587,
				'smtp_user' => 'xxxxxxxx',
				'smtp_pass' => 'xxxxxxxxxx',
				'smtp_crypto' => 'tls',
				'mailtype'  => 'html',
				'smtp_timeout' => 60,
				'crlf' => "\r\n",
				'newline' => "\r\n");
	
		$this->config['mailtype'] = 'html';
		$this->config['charset'] = 'iso-8859-1';
		$this->config['wordwrap'] = TRUE;
		$this->from = '';
		$this->headline = '';
		$this->reply_to = '';
	}
	

}
