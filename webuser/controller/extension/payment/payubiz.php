<?php 

/**
 *
 *
 * Copyright (c) 2011-2016 PayU India
 * @author     PayU
 * @copyright  2011-2022 PayU India
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @revised	   2018
 * @version    4.0
 */

class ControllerExtensionPaymentPayubiz extends Controller {
	private $error = array(); 

	public function index() {

		if(PHP_VERSION_ID < 70300)
		  $data['error_warning'] = "**Notice: PayU plugin requires PHP v7.3 or higher. Plugin will not work properly below PHP v7.3 due to SameSite cookie restriction.";


		$this->load->language('extension/payment/payubiz');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
			
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_payubiz', $this->request->post);				
			
			$this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_cta'] = $this->language->get('text_cta');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_live'] = $this->language->get('text_live');
		$data['text_demo'] = $this->language->get('text_demo');		
		$data['entry_merchantid'] = $this->language->get('entry_merchantid');
		$data['entry_salt'] = $this->language->get('entry_salt');
		$data['entry_mode'] = $this->language->get('entry_mode');
		$data['entry_total'] = $this->language->get('entry_total');	
		$data['entry_order_status'] = $this->language->get('entry_order_status');		
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['help_password'] = $this->language->get('help_password');
		$data['help_total'] = $this->language->get('help_total');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
        $data['help_salt'] = $this->language->get('help_salt');
		$data['help_merchantid'] = $this->language->get('help_merchantid');


       if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->error['merchant'])) {
			$data['error_merchant'] = $this->error['merchant'];
		} else {
			$data['error_merchant'] = '';
		}

        if (isset($this->error['salt'])) {
			$data['error_salt'] = $this->error['salt'];
		} else {
			$data['error_salt'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_payment'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true),
      		'separator' => ' :: '
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/payment/payubiz','user_token=' . $this->session->data['user_token'], true),
      		'separator' => ' :: '
   		);
				
		$data['action'] = $this->url->link('extension/payment/payubiz', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['cancel'] = $this->url->link('marketplace/extension',  'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
		
		$this->load->model('localisation/currency');
		$currencies = $this->model_localisation_currency->getCurrencies();
		
		$data['currencies'] = $currencies;
		
		foreach($currencies as $currency)
		{
			if (isset($this->request->post['payment_payubiz_merchantid_'.$currency['code']])) {
				$data['payment_payubiz_merchantid_'.$currency['code']] = $this->request->post['payment_payubiz_merchantid_'.$currency['code']];
			} else {
				$data['payment_payubiz_merchantid_'.$currency['code']] = $this->config->get('payment_payubiz_merchantid_'.$currency['code']);
			}
			
			if (isset($this->request->post['payment_payubiz_salt_'.$currency['code']])) {
				$data['payment_payubiz_salt_'.$currency['code']] = $this->request->post['payment_payubiz_salt_'.$currency['code']];
			} else {
				$data['payment_payubiz_salt_'.$currency['code']] = $this->config->get('payment_payubiz_salt_'.$currency['code']);
			}
		}
		
		if (isset($this->request->post['payment_payubiz_total'])) {
			$data['payment_payubiz_total'] = $this->request->post['payment_payubiz_total'];
		} else {
			$data['payment_payubiz_total'] = $this->config->get('payment_payubiz_total'); 
		} 
				
		if (isset($this->request->post['payment_payubiz_order_status_id'])) {
			$data['payment_payubiz_order_status_id'] = $this->request->post['payment_payubiz_order_status_id'];
		} else {
			$data['payment_payubiz_order_status_id'] = $this->config->get('payment_payubiz_order_status_id'); 
		} 

		$this->load->model('localisation/order_status');
		
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		if (isset($this->request->post['payment_payubiz_geo_zone_id'])) {
			$data['payment_payubiz_geo_zone_id'] = $this->request->post['payment_payubiz_geo_zone_id'];
		} else {
			$data['payment_payubiz_geo_zone_id'] = $this->config->get('payment_payubiz_geo_zone_id'); 
		} 
		
		$this->load->model('localisation/geo_zone');
										
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		if (isset($this->request->post['payment_payubiz_status'])) {
			$data['payment_payubiz_status'] = $this->request->post['payment_payubiz_status'];
		} else {
			$data['payment_payubiz_status'] = $this->config->get('payment_payubiz_status');
		}


		if (isset($this->request->post['payment_payubiz_payment_gateway'])) {
			$data['payment_payubiz_payment_gateway'] = $this->request->post['payment_payubiz_payment_gateway'];
		} else {
			$data['payment_payubiz_payment_gateway'] = $this->config->get('payment_payubiz_payment_gateway');
		}
		
		if (isset($this->request->post['payment_payubiz_sort_order'])) {
			$data['payment_payubiz_sort_order'] = $this->request->post['payment_payubiz_sort_order'];
		} else {
			$data['payment_payubiz_sort_order'] = $this->config->get('payment_payubiz_sort_order');
		}
        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['user_token'] = $this->session->data['user_token'];
		

				
		$this->response->setOutput($this->load->view('extension/payment/payubiz', $data));

	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/payubiz')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
				
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	}
	
	public function install() {		
		if ($this->user->hasPermission('modify', 'marketplace/extension')) {
			$this->load->model('extension/payment/payubiz');
		
			$this->model_extension_payment_payubiz->install();
		}
	}

	public function uninstall() {
		if ($this->user->hasPermission('modify', 'marketplace/extension')) {
			$this->load->model('extension/payment/payubiz');

			$this->model_extension_payment_payubiz->uninstall();
		}
	}
	
	public function order() {
		$this->load->model('setting/setting');
		$this->load->model('extension/payment/payubiz');
		$this->load->language('extension/payment/payubiz');
		
		if ($this->config->get('payment_payubiz_status')) {
		
			$data['order_id'] = $this->request->get['order_id'];

			$payubiz_order = $this->model_extension_payment_payubiz->getOrder($this->request->get['order_id']);
			if ($payubiz_order) {
				$data['payubiz_environment'] = $payubiz_order['environment'];

				$data['amount'] = round($payubiz_order['amount'],2);
				$data['currency'] = $payubiz_order['currency'];
				$data['adnl_charge'] = $payubiz_order['adnl_charge'];
				$data['pmt_verified'] = $payubiz_order['pmt_verified'];
				
				/*
				$data['refund_date'] = 	$payubiz_order['refund_date'];
				$this->model_extension_payment_payubiz->log($data['refund_date']);
				$data['refunded']='';
				if(trim($data['refund_date']) != '')
					$data['refunded'] = 'Refunded on ' . date($this->language->get('date_format_short'), strtotime($data['refund_date']));

				$data['text_confirm_refund'] = $this->language->get('text_confirm_refund');
				$data['text_refund_ok'] = $this->language->get('text_refund_ok');
				$data['button_refund'] = $this->language->get('button_refund');
				$data['datetime_format'] = $this->language->get('datetime_format');
				*/
				$data['text_to_verify'] = $this->language->get('text_to_verify');
				$data['text_verify_success'] = $this->language->get('text_verify_success');
				
				$data['button_verify'] = $this->language->get('button_verify');
			
				$data['user_token'] = $this->request->get['user_token'];
				
				return $this->load->view('extension/payment/payubiz_order', $data);
			}
		}
	}
	
	public function verify() {
		$this->load->model('setting/setting');
		$this->load->language('extension/payment/payubiz');
		
		$json = array();
		$json['error'] = false;

		if (isset($this->request->post['order_id']) && $this->request->post['order_id'] != '') {
			$this->load->model('extension/payment/payubiz');
			$this->load->model('user/user');

			$payubiz_order = $this->model_extension_payment_payubiz->getOrder($this->request->post['order_id']);
			$user_info = $this->model_user_user->getUser($this->user->getId());
			if($payubiz_order)
			{
				$fields = array(
				'key' => $this->config->get('payment_payubiz_merchantid_'.$payubiz_order['currency']),
				'command' => 'verify_payment',
				'var1' => $payubiz_order['order_id'],
				'hash' => ''
			);
				
			$hash = hash("sha512", $fields['key'].'|'.$fields['command'].'|'.$fields['var1'].'|'.$this->config->get('payment_payubiz_salt_'.$payubiz_order['currency']) );
			$fields['hash'] = $hash;
			$fields_string = http_build_query($fields);
			$url = 'https://info.payu.in/merchant/postservice.php?form=2';
			if( $payubiz_order['environment'] == 'demo' )
				$url = "https://test.payu.in/merchant/postservice.php?form=2";	
        		
			
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_SSLVERSION, 6);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 60);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
			$response = curl_exec($curl);
			$curlerr = curl_error($curl);
			
			
			if($curlerr !=''){
				$json['error'] = true;
				$json['msg'] = $curlerr;
			}
			else 
			{
				$res = json_decode($response,true);	
				
				if(!isset($res['status'])) {					
					$json['error'] = true;
					$json['msg'] = $res['msg'];
				}
				else {
					$res = $res['transaction_details'];
					$res = $res[$payubiz_order['order_id']];
					$json['error'] = false;					
					$json['msg'] = 'Payment status is: '. strtoupper($res['status']);
					
					if($res['status'] == 'success')
					{	
						$Order = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order` WHERE `order_id` = " . $payubiz_order['order_id']);
						$row=$Order->rows[0];
						if($row['order_status_id'] != $this->config->get('payment_payubiz_order_status_id'))
						{
							$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `order_status_id` = ".$this->config->get('payment_payubiz_order_status_id')." WHERE `order_id` = ". $payubiz_order['order_id']);
						
							$this->db->query("INSERT INTO `" . DB_PREFIX . "order_history` SET `order_id` = ". $payubiz_order['order_id'] . ", `order_status_id` = ".$this->config->get('payment_payubiz_order_status_id').",`notify`=0,`comment`='Payment verified...', `date_added`= NOW()");
						
							$this->model_extension_payment_payubiz->setVerify($payubiz_order['order_id'],1);
						}
					}
					else
					{
						$json['error'] = true;
						$json['msg'] = $ra[2];
					}
				}
			}
			

		} else {
			$json['error'] = true;
			$json['msg'] = 'Missing data';
		}
		} else {
			$json['error'] = true;
			$json['msg'] = 'Payment for the order was not made by PayUBiz...';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>