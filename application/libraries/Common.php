<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * trdStation Common Class
 *
 * @package CodeIgniter
 * @subpackage Libraries
 * @category Common
 * @author Rajesh
 */
class Common
{
    // instance for CodeIgniter
    private $CI;
    
    // busiId
    private $busiId = '';
    
    // logged in user category id - Shipper/Seller/Buyer
    private $categoryId = '';

    /**
     * Constructor - set CodeIgniter instance to CI variable & business id to busiId
     */
    function __construct()
    {
        // Assign by reference with "&" so we don't create a copy
        $this->CI = & get_instance();
        
        // load community and session libraries
        $this->CI->load->library(array('mylib/CommunityLib', 'mylib/InquiryLib', 'mylib/OfferLib', 'mylib/orderLib', 'mylib/StorageLib', 'session'));
        
        // load tooal model
        $this->CI->load->model('Tool_model','mytoolmodel');
        
        // get busiId from session
        $this->busiId = $this->CI->session->userdata('busi_id');
        
        // get logged-in user category id
        $this->categoryId = $this->CI->session->userdata('tsuser')['category_id'];
    }

    /**
     * get add to community count
     *
     * @access public
     * @param
     *            -
     * @return int|count of add to community request
     */
    public function getTotalAddToCommunityCount()
    {
        $sendcommunityrequest = $this->CI->communitylib->getInvitationCommunityRequest($this->busiId);
        $totalAlertCount = 0;
        foreach ($sendcommunityrequest as $value) {
            if ($value['alert_viewed'] == 0) {
                $totalAlertCount ++;
            }
        }
        return $totalAlertCount;
    }

    /**
     * get inquiry alert count
     *
     * @access public
     * @param
     *            -
     * @return int|inquiry alert count
     */
    public function getTotalInquiryCount()
    {
        $totalInquiryAlertCount = 0;
        
        if (in_array($this->categoryId, array(SELLER_ID, SHIPPER_ID))) {
            $inquiry = $this->CI->inquirylib->getInquiryByBusiId($this->busiId);
        } else {
            $inquiry = $this->CI->inquirylib->getBuyerInquiryByBusiId($this->busiId);
        }
        
        foreach ($inquiry as $value) {
            if ($value['alert_viewed'] == 0) {
                $totalInquiryAlertCount ++;
            }
        }
        return $totalInquiryAlertCount;
    }

    /**
     * get offer alert count
     *
     * @access public
     * @param
     *            -
     * @return int|offer alert count
     */
    public function getTotalOfferCount()
    {
        $totalOfferAlertCount = 0;
        
        if (in_array($this->categoryId, array(SELLER_ID, SHIPPER_ID))) {
            $offer = $this->CI->offerlib->getOfferByBusiId($this->busiId);
        } else {
            $offer = $this->CI->offerlib->getBuyerOfferByBusiId($this->busiId);
        }
        
        foreach ($offer as $key => $value) {
            if ($value['alert_viewed'] == 0) {
                $totalOfferAlertCount ++;
            }
        }
        return $totalOfferAlertCount;
    }

    /**
     * get order alert count
     *
     * @access public
     * @param
     *            -
     * @return int|order alert count
     */
    public function getTotalMyOrderCount()
    {
        $totalMyOrderAlertCount = 0;
        
        if (in_array($this->categoryId, array(SELLER_ID, SHIPPER_ID))) {
            $offer = $this->CI->orderlib->getOrderByBusiId($this->busiId);
        } else {
            $offer = $this->CI->orderlib->getOrderItemByBusiId($this->busiId);
        }
       //echo '<pre>'; print_r($offer);die;
        foreach ($offer as $key => $value) {
            if (empty($value['alert_viewed']) || $value['alert_viewed'] == 0) {
                $totalMyOrderAlertCount ++;
            }
        }
        return $totalMyOrderAlertCount;
    }

     /**
     * get total alert count
     *
     * @access public
     * @param no
     *            -
     * @return int|offer alert count
     */
    public function getTotalCountForAlert() {
        //$order                       = $this->CI->orderlib->getOrderByBusiId($busiId);
        $totalMyOrderAlertCount      = (int) $this->getTotalMyOrderCount();
        $totalAddRequestAlertCount   = (int) $this->getTotalAddToCommunityCount();
        $totalInquiryAlertCount      = (int) $this->getTotalInquiryCount();
        $totalOfferAlertCount        = (int) $this->getTotalOfferCount();
            
        $totalcount = $totalAddRequestAlertCount + $totalInquiryAlertCount + $totalMyOrderAlertCount + $totalOfferAlertCount;
        return $totalcount;
    }
    
    /**
     * function to get storage of individual inquiry and offer tab
     * 
     * @param type $busiId | numeric
     * @param type $category_id | numeric
     * @param type $tab | string
     * @return type | array
     */
    public function getStorageInformation($busiId, $category_id, $tab)
    {
        $plan_id = $this->CI->session->userdata('tsuser')['plan_id'];
        $storage = $this->CI->storagelib->getMyBusinessStorage($busiId);

        /** Sellers/shippers **/
        if (in_array($category_id, array(SELLER_ID, SHIPPER_ID))) {
            $ois_plan = $this->CI->mytoolmodel->getOISPlan($plan_id, $category_id)[0]['intvalue'] / 2;
        } else {
            if ($tab === 'inquiry') {
                $ois_plan = 100;
            }
            if ($tab === 'offer') {
                $ois_plan = 150;
            }
        }

        if ($tab === 'inquiry') {
            $storageInfo = round($storage[0]['inquiries'] / 1024, 2);
        }
        if ($tab === 'offer') {
            $storageInfo = round($storage[0]['offers'] / 1024, 2);
        }

        return [$storageInfo, $ois_plan - $storageInfo];
    }
}
