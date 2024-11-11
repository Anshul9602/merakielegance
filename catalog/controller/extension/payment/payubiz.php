<?php

/**
 * Copyright (c) 2011-2019 PayU India
 * @author     PayU
 * @copyright  2009-2022 PayU India
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @revised	   2018
 * @version    4.5
 */

class ControllerExtensionPaymentPayubiz extends Controller {
	public function index() {	
		
		$this->manage_session();
		
    	$data['button_confirm'] = $this->language->get('button_confirm');
		$this->load->model('checkout/order');
		$this->load->language('extension/payment/payubiz');
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        $currency_code = $order_info['currency_code'];

        $key = $this->config->get('payment_payubiz_merchantid_'.$currency_code);        		
        $salt = $this->config->get('payment_payubiz_salt_'.$currency_code);
        
        if($key && $salt)
		{
	       	if($this->config->get('payment_payubiz_payment_gateway')=='demo')
			{
				$data['action'] = 'https://test.payu.in/_payment.php';
			}
			else
			{
				$data['action'] = 'https://secure.payu.in/_payment.php';
			}        
			$txnid = $this->session->data['order_id'].'_'.rand(1,999);
			$data['key'] = $key;
			$data['txnid'] = $txnid;
			$data['amount'] = $order_info['total'];
			$data['productinfo'] = 'opencart products information';
			$data['firstname'] = $order_info['payment_firstname'];
			$data['Lastname'] = $order_info['payment_lastname'];
			$data['Zipcode'] = $order_info['payment_postcode'];
			$data['email'] = $order_info['email'];
			$data['phone'] = $order_info['telephone'];
			$data['address1'] = $order_info['payment_address_1'];
	        $data['address2'] = $order_info['payment_address_2'];
	        $data['state'] = $order_info['payment_zone'];
	        $data['city']=$order_info['payment_city'];
	        $data['country']=$order_info['payment_country'];
	        $data['pg']="";	        
			$data['bankcode']="";	        
			$data['udf5'] = "Opencart_v_3.0.3 (Multi-currency)"; //For internal tracking
	        $data['surl'] = $this->url->link('extension/payment/payubiz/callback',true);
			$data['Furl'] = $this->url->link('extension/payment/payubiz/callback',true);
			$data['curl'] = $this->url->link('extension/payment/payubiz/callback',true);
			
			$Hash=hash('sha512', $key.'|'.$txnid.'|'.$order_info['total'].'|'.$data['productinfo'].'|'.$data['firstname'].'|'.$data['email'].'|||||'.$data['udf5'].'||||||'.$salt); 

			$data['Hash'] = $Hash;
	    } else
	    {
          echo '<h4 style="color:red">WARNING: Something Went wrong with configuration Please put Key and salt with refrence to Currency: '.$currency_code.' !!</h4>';
	    }		
			/////////////////////////////////////End payubiz Vital  Information /////////////////////////////////
		return $this->load->view('extension/payment/payubiz', $data);
		
	}
	
	public function callback() {
		
		$this->manage_session();
		
		$this->load->model('checkout/order');
		
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        $currency_code = $order_info['currency_code'];
        
        $key = $this->config->get('payment_payubiz_merchantid_'.$currency_code);        		
        $salt = $this->config->get('payment_payubiz_salt_'.$currency_code);
		
		$response = $this->request->post;	
		
		if (isset($response['key']) && isset($response['txnid'])) {	
			$var = explode('_',$response['txnid']);
			$resp_txnid=$var[0];
			
			if($this->session->data['order_id'] != $resp_txnid)
			{
				$this->session->data['error'] = 'Invalid order reference received in payment response';
				$this->response->redirect($this->url->link('checkout/checkout', '', true));
			}

			$this->load->language('extension/payment/payubiz');
			
			$data['title'] = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));
			$data['charset'] = $this->language->get('charset');
			$data['language'] = $this->language->get('code');
			$data['direction'] = $this->language->get('direction');
			$data['heading_title'] = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));
			$data['text_response'] = $this->language->get('text_response');
			$data['text_success'] = $this->language->get('text_success');
			$data['text_success_wait'] = sprintf($this->language->get('text_success_wait'), $this->url->link('checkout/success'));
			$data['text_failure'] = $this->language->get('text_failure');
			$data['text_cancelled'] = $this->language->get('text_cancelled');
			$data['text_cancelled_wait'] = sprintf($this->language->get('text_cancelled_wait'), $this->url->link('checkout/cart'));
			$data['text_pending'] = $this->language->get('text_pending');
			$data['text_failure_wait'] = sprintf($this->language->get('text_failure_wait'), $this->url->link('checkout/cart'));
			
			$data['continue'] = $this->url->link('checkout/cart');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
			
			$Udf1 = $response['udf1'];
			$Udf2 = $response['udf2'];
		 	$Udf3 = $response['udf3'];
		 	$Udf4 = $response['udf4'];
		 	$Udf5 = $response['udf5'];
		 	$Udf6 = $response['udf6'];
		 	$Udf7 = $response['udf7'];
		 	$Udf8 = $response['udf8'];
		 	$Udf9 = $response['udf9'];
		 	$Udf10 = $response['udf10'];
			
			$txnid=$response['txnid'];
			$amount        = $response['amount'];
			$productinfo   = $response['productinfo'];
			$firstname     = $response['firstname'];;
			$email         = $response['email'];
			
			$additionalCharges = 0; 
			if (isset($response["additionalCharges"])) $additionalCharges = $response['additionalCharges'];
			
			if(round($order_info['total'],2) != round($response['amount'],2))
			{
				$this->session->data['error'] = 'Amount received in payment response does not match with Order amount';
				$this->response->redirect($this->url->link('checkout/checkout', '', true));
			}
			
			$keyString =  $key.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|'.$Udf1.'|'.$Udf2.'|'.$Udf3.'|'.$Udf4.'|'.$Udf5.'|'.$Udf6.'|'.$Udf7.'|'.$Udf8.'|'.$Udf9.'|'.$Udf10;
		  
			$keyArray = explode("|",$keyString);
			$reverseKeyArray = array_reverse($keyArray);
			$reverseKeyString=implode("|",$reverseKeyArray);			 
			$status=$response['status'];			
			$saltString     = $salt.'|'.$status.'|'.$reverseKeyString;
			if($additionalCharges > 0)
				$saltString     = $additionalCharges.'|'.$salt.'|'.$status.'|'.$reverseKeyString;
			
			$sentHashString = strtolower(hash('sha512', $saltString));               
			
			$responseHashString= $response['hash'];

			if($sentHashString != $responseHashString)
			{	
				$this->log->write('PayU Signature mismatch - <br />Response Signature ('.$responseHashString.') <br />Calculated Signature ('.$sentHashString.')');
				$this->session->data['error_warning'] = "Signature mismatch..." ;
				$this->response->redirect($this->url->link('checkout/checkout', '', true));
			}
			elseif($response['status'] == 'success' && $this->verify_payment($txnid,$key,$salt,(($this->config->get('payment_payubiz_payment_gateway')=='demo')? true : false),false)) {
				
				$message = 'Additional Charges: ' . $additionalCharges . "\n";
				$message .= 'Transaction Id: ' . $response['mihpayid'] . "\n";
				
				$this->model_checkout_order->addOrderHistory($resp_txnid, $this->config->get('payment_payubiz_order_status_id'), $message, true);				
				$this->addPayubizOrder($response['mihpayid'],$additionalCharges); 
				$this->response->redirect($this->url->link('checkout/success', '', true));	
			}
			elseif($response['unmappedstatus'] == 'userCancelled')
			{
				$this->session->data['error_warning'] = $response['error_Message'];
				$this->response->redirect($this->url->link('checkout/checkout', '', true));
			}
			else {				
				$this->session->data['error_warning'] = $response['error_Message'];
				$this->response->redirect($this->url->link('checkout/checkout', '', true));
			}
		}
		else {
			$this->session->data['error_warning'] = 'Invalid payment response';
			$this->response->redirect($this->url->link('checkout/checkout', '', true));
		}
	}
	
	private function verify_payment($txnid,$payu_key,$payu_salt,$isSandbox=true,$bypass=false)
	{
		if($bypass) return true; //bypass verification
		
		try
		{
			$fields = array(
				'key' => $payu_key,
				'command' => 'verify_payment',
				'var1' => $txnid,
				'hash' => ''
			);
				
			$hash = hash("sha512", $fields['key'].'|'.$fields['command'].'|'.$fields['var1'].'|'.$payu_salt );
			$fields['hash'] = $hash;
			$fields_string = http_build_query($fields);
			$url = 'https://info.payu.in/merchant/postservice.php?form=2';
			if( $isSandbox )
				$url = 'https://test.payu.in/merchant/postservice.php?form=2';	
			
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
			
			$message = '';
			if($curlerr !='')
				$message = $curlerr;
			else 
			{
				$res = json_decode($response,true);	
				if(!isset($res['status']))
					return false;
				else{
					$res = $res['transaction_details'];
					$res = $res[$txnid];						
					
					if($res['status'] == 'success')	
						return true;					
					elseif($res['status'] == 'pending' || $res['status'] == 'failure')
						return false;
				}
			}			
		}
		catch (Exception $e)
		{
			return false;	
		}
	}
	
	public function addPayubizOrder($payubiz_order_id,$adnl_charge=0)
	{
		$this->load->model('checkout/order');
		$this->load->model('extension/payment/payubiz');

		if($this->customer->isLogged()) {
			$customer_id = $this->customer->getId();
			$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
			return $this->model_extension_payment_payubiz->addOrder($order_info, $customer_id, $payubiz_order_id, $adnl_charge, $this->config->get('payment_payubiz_payment_gateway'));
			
		}
	}
	
	/**
	* Session patch CSRF Samesite=None; Secure
	**/
	public function manage_session()
	{
		global $log;
		
		try
		{
			if(PHP_VERSION_ID >= 70300)
			{
				$options = session_get_cookie_params();  
				$options['samesite'] = 'None';
				$options['secure'] = true;
				unset($options['lifetime']); 
				$cookies = $_COOKIE;  	
				foreach ($cookies as $key => $value)
				{
					if (!preg_match('/cart/', $key))
						setcookie($key, $value, $options);
				}
			}
			else {
				$log->write( "PayU plugin does not support this PHP version for cookie management. 
				Required PHP v7.3 or higher.");
			}
		}
		catch(Exception $e) {
			$log->write( $e->getMessage() );
		}
	}
	
}
?>