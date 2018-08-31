<?php

class Storage_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function updateStorageByBusiId($data)
    {
    	$this->db->select('id');
    	$this->db->from(TABLES::$MYSTORAGE);
    	$this->db->where('busi_id', $data['busi_id']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$params = array();
    		$params['busi_id'] = $data['busi_id'];
    		$params['desksite'] = 0;
    		$params['files'] = 0;
    		$params['udtalk'] = 0;
    		$params['products'] = 0;
    		$params['community'] = 0;
    		$params['offers'] = 0;
    		$params['inquiries'] = 0;
    		$params['videos'] = 0;
    		$params['bstation'] = 0;
    		$params['stockmarket'] = 0;
    		$params['freespace'] = 0;
    		$params['usedspace'] = 0;
    		$this->db->insert(TABLES::$MYSTORAGE, $data);
    	} else {
    		$sql = "UPDATE ".TABLES::$MYSTORAGE." SET ".$data['field']." = IFNULL(".$data['field'].",0) + ".$data['datasize'].", freespace = freespace - ".$data['datasize'].", usedspace = usedspace + ".$data['datasize']." WHERE busi_id = ".$data['busi_id'];
    		$this->db->query($sql);
    	}
    }
    /**
     * delete storage information when inquiry or offer is deleted
     * 
     * @param type $data busi_id and storage information in kb
     * @return void
     */
    public function deleteStorageByBusiId($data)
    {
    	$this->db->select('id');
    	$this->db->from(TABLES::$MYSTORAGE);
    	$this->db->where('busi_id', $data['busi_id']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$params = array();
    		$params['busi_id'] = $data['busi_id'];
    		$params['desksite'] = 0;
    		$params['files'] = 0;
    		$params['udtalk'] = 0;
    		$params['products'] = 0;
    		$params['community'] = 0;
    		$params['offers'] = 0;
    		$params['inquiries'] = 0;
    		$params['videos'] = 0;
    		$params['bstation'] = 0;
    		$params['stockmarket'] = 0;
    		$params['freespace'] = 0;
    		$params['usedspace'] = 0;
    		$this->db->insert(TABLES::$MYSTORAGE, $data);
    	} else {
    		$sql = "UPDATE ".TABLES::$MYSTORAGE." SET ".$data['field']." = IFNULL(".$data['field'].",0) - ".$data['datasize'].", freespace = freespace + ".$data['datasize'].", usedspace = usedspace - ".$data['datasize']." WHERE busi_id = ".$data['busi_id'];
    		$this->db->query($sql);
    	}
    }
    
    public function getMyBusinessStorage($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MYSTORAGE);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getStorageBoxInfo($busiId, $type, $category_id)
    {
        if($type == "inquiry") {
        // converting each uploaded file size into MB by dividing into 1024/
        $this->db->select('(SUM(inqAttach.attachment1_size+inqAttach.attachment2_size+inqAttach.attachment3_size+inqAttach.attachment4_size)/1024) as totalAttachment');
        $this->db->from(TABLES::$INQUIRY . ' AS inqAttach');
        }
        if (in_array($category_id, array(SELLER_ID, SHIPPER_ID))) {
            $this->db->where('inqAttach.busi_id', $busiId);
        } else {
            $this->db->where('inqAttach.requester_busi_id', $busiId);
        }
        $queryStorageBoxAttachmentSizeInfo = $this->db->get();
        $rowStorageBoxAttachmentSize = $queryStorageBoxAttachmentSizeInfo->result_array();

        if ($rowStorageBoxAttachmentSize[0]['totalAttachment'] > 0) {
            return $rowStorageBoxAttachmentSize[0]['totalAttachment'];
        }
        return 0;
    }
}