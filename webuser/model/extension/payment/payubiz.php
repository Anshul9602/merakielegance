<?php
class ModelExtensionPaymentPayubiz extends Model {
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "payubiz_order` (
			`payubiz_order_id` varchar(255) NOT NULL,
			`order_id` int(11) NOT NULL DEFAULT '0',
			`customer_id` INT(11) NOT NULL,
			`amount` DECIMAL( 15, 4 ) NOT NULL DEFAULT  '0',
			`adnl_charge` DECIMAL( 15, 4 ) NOT NULL DEFAULT  '0',
			`currency` VARCHAR( 5 ) NOT NULL,
			`pmt_verified` SMALLINT NOT NULL DEFAULT  '0',
			`refund_date` DATETIME NULL DEFAULT NULL,
			`environment` varchar(5) NOT NULL DEFAULT 'demo',
			PRIMARY KEY (`payubiz_order_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");		
		
	}

	public function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "payubiz_order`");				

		$this->log('PayuBiz Module uninstalled');
	}


	public function getOrder($order_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "payubiz_order` WHERE `order_id` = '" . $order_id . "' LIMIT 1");

		if ($query->num_rows) {
			return $query->row;
		} else {
			return false;
		}
	}
	
	public function setVerify($order_id,$verify) {
		$query = $this->db->query("UPDATE `" . DB_PREFIX . "payubiz_order` set `pmt_verified` = ".$verify." WHERE `order_id` = '" . $order_id . "'");

		return true;
	}
	
	public function log($data) {
		//if ($this->config->has('payutr_logging') && $this->config->get('payutr_logging')) {
			$log = new Log('payutr.log');

			$log->write($data.'\n\r');
		//}
	}
}
