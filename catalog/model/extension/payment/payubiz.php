<?php 
class ModelExtensionPaymentPayubiz extends Model {
  	public function getMethod($address, $total) {
		$this->load->language('extension/payment/payubiz');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_payubiz_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
		
		if ($this->config->get('payment_payubiz_total') > $total) {
			$status = false;
		} elseif (!$this->config->get('payment_payubiz_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true; 
		} else {
			$status = false;
		}	
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'       => 'payubiz',
        		'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('payment_payubiz_sort_order')
      		);
    	}
       	return $method_data;
  	}
	
	public function addOrder($order_info, $customer_id, $payubiz_order_id, $adnl_charge=0, $environment = 'demo') {

		$this->db->query("INSERT INTO `" . DB_PREFIX . "payubiz_order` SET `order_id` = '" . (int)$order_info['order_id'] . "', `payubiz_order_id` = '" . $payubiz_order_id . "', `customer_id` = ".$customer_id.", `amount` = ".$this->currency->convert($order_info['total'],$this->config->get('config_currency'),$order_info['currency_code']).", `currency` = '".$order_info['currency_code']."', `adnl_charge` = ".$adnl_charge.", `environment` = '" . $environment . "'");

		return $this->db->getLastId();
	}
}
?>