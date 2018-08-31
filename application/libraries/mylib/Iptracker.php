<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*********************************************************************
 * Description: Tracks the number of website visits everyday. 
 * Version: 1.0.0
 * Date Created: January 09, 2015
 * Author: Glenn Tan Gevero
 * Website: http://app-arsenal.com
 * File: IP Tracker Library File
**********************************************************************/
class Iptracker{
		
	private $CI;
	
	public function __construct(){
		$this->CI =& get_instance();
        $this->CI->load->library('user_agent');
	}
	
	private static function get_ip_address(){		
		$ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');		
		return $ip;
	}
	
	private function get_page_visit(){
		return current_url();
	}
    
    private function get_user_agent(){        
        if ($this->CI->agent->is_browser()){
            $agent = $this->CI->agent->browser().' '.$this->CI->agent->version();
        }
        elseif ($this->CI->agent->is_robot()){
            $agent = $this->CI->agent->robot();
        }
        elseif ($this->CI->agent->is_mobile()){
            $agent = $this->CI->agent->mobile();
        }
        else{
            $agent = 'Unidentified User Agent';
        }
        return $agent;
    }
	
    private function get_page_reference(){
    	/*if ($this->CI->agent->is_referral())
    		{
    		$reference_page = $this->CI->agent->referrer();
    		return $reference_page;
    		}*/
    	if(isset($_SERVER['HTTP_REFERER']))
    	{
    		echo "here";
    		$reference_page = $_SERVER['HTTP_REFERER'];
    		return $reference_page;
    	}
    
    }
    
	public function save_site_visit(){
		$ip 	 = self::get_ip_address();
		$page	 = self::get_page_visit();
        $agent   = self::get_user_agent();
		$seg     = explode("-", $page);
		//$ref_page   = self::get_page_reference();
		$user_id =  $this->CI->session->userdata('fbuser')['id'];
        //Uncomment the IF Statement if you do not want your own admin pages to be tracked. Change the value of the needle ('admin) to the segments (URI) found in your admin pages.
		//if(!in_array('admin', $seg)){	
			$data = array(
				'ip'            => $ip,
				'page_view'     => $page,
                'user_agent'    => $agent,
				'session_id' 	=> session_id(),
				//'ref_page'		=> $ref_page,
				'date'          => date('Y-m-d H:i:s')
			);
			
			if(!empty($user_id)){
				$data['user_id'] = $user_id;
			}
			
			$this->CI->db->insert('fb_site_visits', $data);
			/*if($page=='https://freightbazaar.com/trucks/new_truck' || $page=='https://freightbazaar.com/loads/postload' || $page=='https://freightbazaar.com/loadboard' || $page=='https://freightbazaar.com/trucks/truckboard/0'){
				$this->CI->db->insert('fb_site_visits', $data);
			}*/
			
			/*if($page=='http://192.168.1.117' || $page=='http://192.168.1.117/trucks/new_truck' || $page=='http://192.168.1.117/loads/postload' || $page=='http://192.168.1.117/loadboard' || $page=='http://192.168.1.117/trucks/truckboard/0'){
				$this->CI->db->insert('fb_site_visits', $data);
			}*/
				
		//}
	}
}
$tracker = new Iptracker();
$tracker->save_site_visit();