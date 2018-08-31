<?php

class Order_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public  function getOrderByBusiId($busi_id)
    {
    	$this->db->select('a.*,b.*,c.name_prefix,c.name,d.profile_image');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.buyer_id=b.id','inner');
    	$this->db->join(TABLES::$USER. ' AS c','b.id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS d','c.id=d.user_id','inner');
    	$this->db->where('c.is_contactperson', 1);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('a.is_deleted = 0 and (a.sellerbusi_id = '.$busi_id.' or  a.buyer_id = '.$busi_id.')');
    	$this->db->group_by('a.orderid');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    	
    }
    public  function getOrderItemByBusiId($busi_id)
    {
    	$this->db->select('a.*,b.quantity,b.order_id,c.name as product_name,c.main_image,'.
    			'd.*,e.name_prefix,e.name,f.profile_image');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$ORDER_ITEM. ' AS b','a.orderid=b.order_id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.item_id=c.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.buyer_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','d.id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('e.is_contactperson', 1);
    	$this->db->where('a.is_deleted', 0);
    	$this->db->where('b.is_deleted', 0);
    	$this->db->where('a.is_deleted = 0 and (a.sellerbusi_id = '.$busi_id.' or  a.buyer_id = '.$busi_id.')');
    	$this->db->group_by('b.id');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    	
    }
    public function insertProductOrder($data)
    {
    	$this->db->insert(TABLES::$ORDER, $data);
    	return $this->db->insert_id();
    }
    public function insertOrderItem($data)
    {
    	$this->db->insert(TABLES::$ORDER_ITEM, $data);
    	return $this->db->insert_id();
    }
    public function updateOrder($data)
    {
    	$this->db->where('orderid', $data['orderid']);
    	$this->db->update(TABLES::$ORDER, $data);
    	return $this->db->affected_rows();
    }
    public  function getInvoiceByorderId($order_id)
    {
    	$this->db->select('a.orderid,a.total,a.sellerbusi_id,a.buyer_id as buyerbusi_id,a.selller_status,a.buyer_status,a.status,'.
    			'd.profile_image as buyerimage,e.company_name as sellercompany,'.
    			'e.telephone_code as sellertelcode,e.telephone_city_code as sellercitycode,e.telephone_number as sellertelephone,e.telephone_number1 as selleralttelnumber,'.
    			'e.p_o_box as sellerpobox,e.company_country as sellercountry,'.
    			'e.company_province as sellerprovince,e.company_city as sellercity,e.company_street as sellerstreet,f.name_prefix as sellernameprefix,'.
    			'f.name as sellername,g.profile_image as sellerimage,g.mobile_code as sellermobilecode,g.mobile_number as sellermobile,
				i.seller_bankaccount,i.id as invoice_id,'.
				'i.buyer_companyname  as buyercompany,i.buyer_poboxno as buyerpobox,i.buyer_contry as buyercontry,'.
    			'i.buyer_province as buyerprovince,i.buyer_city as buyercity,i.buyer_street as buyerstreet,'.
    			'i.buyer_telcode as buyertelcode,i.buyer_citycode as buyercitycode,i.buyer_telephone as buyertelephone,'.
    			'i.buyer_telephone1 as buyeralttelnumber,i.production_leadtime,i.product_warranty,i.document_certificate,i.obligation,i.declaration,'.
    			'i.buyer_prefix as buyernameprefix,i.buyer_name as buyername,i.buyer_mobilecode  as buyermobilecode,i.buyer_mobile as buyermobile,'.
    			'i.buyer_address,i.payment_method,i.currency,i.clause');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.buyer_id=b.id','inner');
    	$this->db->join(TABLES::$USER. ' AS c','b.id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS d','c.id=d.user_id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS e','e.id=a.sellerbusi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS f','f.busi_id=e.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS g','g.user_id=f.id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS h','h.busi_id=e.id','inner');
    	$this->db->join(TABLES::$INVOICE. ' AS i','i.order_id=a.orderid','inner');
    	$this->db->where('c.admin_user_id', 0);
    	$this->db->where('f.admin_user_id', 0);
    	$this->db->where('a.orderid',$order_id);
    	$query = $this->db->get();
    	//echo $this->db->last_query($query);
    	//exit;
    	$row = $query->result_array();
    	return $row;
    	
    }
    
    
    public  function getOrderById($order_id)
    {
    	$this->db->select('a.orderid,a.total,a.sellerbusi_id,a.buyer_id as buyerbusi_id,b.company_name as buyercompany,b.p_o_box as buyerpobox,b.company_country as buyercontry,'.
    			'b.company_province as buyerprovince,b.company_city as buyercity,b.company_street as buyerstreet,'.
    			'b.telephone_code as buyertelcode,b.telephone_city_code as buyercitycode,b.telephone_number as buyertelephone,b.telephone_number1 as buyeralttelnumber,'.
    			'c.name_prefix as buyernameprefix,c.name as buyername,d.mobile_code as buyermobilecode,d.mobile_number as buyermobile,'.
    			'd.profile_image as buyerimage,h.company_bank_account as sellerbankaccount,group_concat(k.payment_terms) as payment_terms');
    			//'group_concat(m.payment_currency) as payment_currency');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.buyer_id=b.id','inner');
    	$this->db->join(TABLES::$USER. ' AS c','b.id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS d','c.id=d.user_id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS e','e.id=a.sellerbusi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS f','f.busi_id=e.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS g','g.user_id=f.id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS h','h.busi_id=e.id','inner');
    	$this->db->join(TABLES::$TRADE_INFO. ' AS i','i.busi_id=e.id','inner');
    	$this->db->join(TABLES::$USERPAYMENT_TERMS. ' AS j','j.trad_id=i.id','inner');
    	$this->db->join(TABLES::$PAYMENT_TERMS. ' AS k','k.id=j.payment_terms_id','inner');
    	//$this->db->join(TABLES::$USERPAYMENT_CURRENCY. ' AS l','l.trad_id=i.id','inner');
    	//$this->db->join(TABLES::$PAYMENTCURRENCY. ' AS m','m.id=l.payment_currency_id','inner');
    	$this->db->where('c.admin_user_id', 0);
    	$this->db->where('f.admin_user_id', 0);
    	$this->db->where('a.orderid',$order_id);
    	$this->db->group_by('a.orderid');
    	$query = $this->db->get();
    	//echo $this->db->last_query($query);
    	//exit;
    	$row = $query->result_array();
    	return $row;
    	
    }
   
    public  function getOrderItemById($order_id)
    {
    	$this->db->select('b.id as orderitem_id,b.item_id,a.orderid,b.quantity,b.product_price,b.total_product_price,b.product_specification,b.product_cbm,'.
    			'c.name as product_name,c.model_no,c.main_image,');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$ORDER_ITEM. ' AS b','a.orderid=b.order_id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.item_id=c.id','inner');
    	$this->db->where('a.orderid',$order_id);
    	$this->db->where('b.is_deleted',0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public  function getOrderItemSpecificationById($order_id)
    {
    	$this->db->select('a.orderid,b.quantity,c.name as product_name,c.model_no,c.unit_price,c.main_image,d.spec_name,d.spec_value');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$ORDER_ITEM. ' AS b','a.orderid=b.order_id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.item_id=c.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM_SPEC. ' AS d','d.item_id=c.id','inner');
    	$this->db->where('a.orderid',$order_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public  function saveInvoice($data)
    {
    	if ($this->db->insert(TABLES::$INVOICE, $data)) {
    		return $this->db->insert_id();
    	}
    }
    public function isInvoiceGenerated($order_id)
    {
    	$this->db->select('a.*');
    	$this->db->from(TABLES::$INVOICE. ' AS a');
    	$this->db->where('a.order_id',$order_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateInvoice($data)
    {
    	$this->db->where('order_id', $data['order_id']);
    	$this->db->update(TABLES::$INVOICE, $data);
    	return $this->db->affected_rows(); 
    	
    }
    public function updateOrderItem($data)
    {
    	$this->db->where('order_id ='.$data['order_id'].' and item_id = '.$data['item_id'].' and is_deleted = 0' );
    	$this->db->update(TABLES::$ORDER_ITEM, $data);
    	return $this->db->affected_rows(); 
    }
    public function updateOrderItemById($data)
    {
    	$this->db->where('id',$data['id']);
    	$this->db->update(TABLES::$ORDER_ITEM, $data);
    	return $this->db->affected_rows(); 
    }
    public function saveOrderItem($data)
    {
    	$this->db->insert(TABLES::$ORDER_ITEM, $data);
    	return $this->db->insert_id();
    }
    
    public function updateOrderAlert($id,$data)
    {
        $this->db->where('sellerbusi_id', $id);        
        $this->db->or_where('buyer_id', $id);
        
        $this->db->update(TABLES::$ORDER,$data);
        return $this->db->affected_rows();
    }

}
