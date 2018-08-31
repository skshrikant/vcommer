<?php

class Chat_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function addChatMessage($data) {
    	$this->db->insert(TABLES::$CHAT_MESSAGES,$data);
    }
    
    public function deleteChatMessageById($id) {
    	$this->db->where('id',$id);
    	$this->db->delete(TABLES::$CHAT_MESSAGES);
    }
    
    public function deleteChatMessageBusiId($busi_id) {
    	$this->db->where('from_busi_id',$busi_id);
    	$this->db->delete(TABLES::$CHAT_MESSAGES);
    }
    
    public function selectMemberUnReadMessages($from_busi_id) {
    	$this->db->select("*");
    	$this->db->from(TABLES::$CHAT_MESSAGES);
    	$this->db->where('from_busi_id',$from_busi_id);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function selectMemberMessages($from_busi_id,$to_busi_id,$inserid) {
    	$this->db->select("*");
    	$this->db->from(TABLES::$CHAT_MESSAGES);
    	$this->db->where("from_busi_id =".$from_busi_id." OR to_busi_id = ".$to_busi_id,'',false);
    	$this->db->where('id > '.$inserid,'',false);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    /**
     * get chat conversation alert 
     * 
     * @param int $busiId
     * @return array
     */
    public function getCometChatConversations($busiId)
    {
        if (!is_numeric($busiId)) {
            return array();
        }
        $this->db->select("cc.from,cc.to, DATE_FORMAT(FROM_UNIXTIME(MAX(cc.sent)), '%e %b %Y') AS 'last_chat_date', COUNT( * ) AS totalChats,usr.name_prefix,usr.name,bi.company_name,ui.profile_image");
        $this->db->from(TABLES::$COMECHAT . " AS cc");
        $this->db->join(TABLES::$USER. ' AS usr','usr.id=cc.from','inner');
        $this->db->join(TABLES::$BUSINESS_INFO. ' AS bi','usr.busi_id=bi.id','inner');        
    	$this->db->join(TABLES::$USER_INFO. ' AS ui','usr.id=ui.user_id','inner');
        $this->db->where("cc.to = $busiId", "", false);
        $this->db->where("cc.read", 0);
        $this->db->group_by("cc.from,cc.to");
        $this->db->order_by("cc.sent", "DESC");
        $query = $this->db->get();
//        echo $this->db->last_query();
        $result = $query->result_array();
        return $result;
    }
}