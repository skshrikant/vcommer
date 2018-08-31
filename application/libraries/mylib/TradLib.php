<?php
class TradLib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function saveRndType($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->saveRndType($data);
	}
	public  function saveUserMarket($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->saveUserMarket($data);
	}
	public  function saveUserInternationaltrad($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->saveUserInternationaltrad($data);
	}
	public  function saveUserPaymentTerms($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->saveUserPaymentTerms($data);
	}
	public  function saveUserPaymentCurrency($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->saveUserPaymentCurrency($data);
	}
	public function getBusinessTradeInfoById($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getBusinessTradeInfoById($busi_id);
	}
	public function getTradeMarketByTradId($trade_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradeMarketByTradId($trade_id);
	}
	public function getTradeInternationalTradByTradId($trad_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradeInternationalTradByTradId($trad_id);
	}
	public function getTradePaymentCurrencyByTradId($trad_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradePaymentCurrencyByTradId($trad_id);
	}
	public function getTradePaymentTermsByTradId($trad_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradePaymentTermsByTradId($trad_id);
	}
	public function getTradeMarket()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradeMarket();
	}
	public function getInternationalTrad()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getInternationalTrad();
	}
	public function getTradePaymentCurrency()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradePaymentCurrency();
	}
	public function getTradePaymentTerms()
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradePaymentTerms();
	}
	public function updateTradInfoBybusinessId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->updateTradInfoBybusinessId($data);
	}
	public function deleteMarketByTradeId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deleteMarketByTradeId($data);
	}
	public function deleteTradeByTradeId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deleteTradeByTradeId($data);
	}
	public function deletePaymentByTradeId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deletePaymentByTradeId($data);
	}
	public function deleteCurrencyByTradeId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deleteCurrencyByTradeId($data);
	}
	public function getTradePaymentTermsByBusinessId($busi_id)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->getTradePaymentTermsByBusinessId($busi_id);
	}
	public function deletePaymentByBusinessId($data)
	{
		$this->CI->load->model ( 'Account_Model', 'account' );
		return $res = $this->CI->account->deletePaymentByBusinessId($data);
	}

}
