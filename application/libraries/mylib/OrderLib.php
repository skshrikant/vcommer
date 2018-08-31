<?php
class OrderLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public function getOrderByBusiId($busi_id)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->getOrderByBusiId($busi_id);
	}
	
	public function insertProductOrder($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->insertProductOrder($data);
	}
	
	public function insertOrderItem($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->insertOrderItem($data);
	}
	public function updateOrder($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->updateOrder($data);
	}
	public function getOrderItemByBusiId($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->getOrderItemByBusiId($data);
	}
	public function getOrderById($order_id)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->getOrderById($order_id);
	}
	public function getOrderItemById($order_id)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->getOrderItemById($order_id);
	}
	public function getOrderItemSpecificationById($order_id)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->getOrderItemSpecificationById($order_id);
	}
	public function saveInvoice($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->saveInvoice($data);
	}
	public function isInvoiceGenerated($order_id)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->isInvoiceGenerated($order_id);
	}
	public function getInvoiceByorderId($order_id)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->getInvoiceByorderId($order_id);
	}
	public function updateInvoice($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->updateInvoice($data);
	}
	public function updateOrderItem($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->updateOrderItem($data);
	}
	public function updateOrderItemById($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->updateOrderItemById($data);
	}
	public function saveOrderItem($data)
	{
		$this->CI->load->model ( 'Order_model', 'order' );
		return $res = $this->CI->order->saveOrderItem($data);
	}
	public function updateOrderAlert($busiId,$data)
	{
	    $this->CI->load->model ( 'Order_model', 'order' );
	    return $res = $this->CI->order->updateOrderAlert($busiId,$data);
	}
	
}
