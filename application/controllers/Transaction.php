<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
	
	public function transaction_stripe_pay($transaction_id) {

		$payer = $this->session->userdata('log_id');
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));

		$user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 

        $id = urlencode($this->mod_crypt->Enc_String($order_id));
        $orders_info = $this->mod_orders->orders_by_id($order_id);

        $order_name = $this->mod_crypt->Dec_String($orders_info['Ord_Name']);
	    $order_cost = $this->mod_crypt->Dec_String($orders_info['Ord_Price']);
	    $order_deadline = date('M d H:i A', strtotime($this->mod_crypt->Dec_String($orders_info['Ord_Deadline'])));   
		
		$stripe_Token = $_POST['stripeToken'];
		$stripe_Email = $_POST['stripeEmail'];
		
		require_once APPPATH."third_party/stripe/init.php";

		$stripe = array(
                "secretKey" => "sk_test_51JAW36LbL1tUcWWUdDb7iU1Y1BmimlhcMGEfvvvW5rBkhWfTXELXLAqU8u5uU7B2STPBhyCXpZz1OAlgpLMFrbBz00yjr5sREd",
        		"publishableKey" => "pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp"
			);
			
		\Stripe\Stripe::setApiKey($stripe['secretKey']);
		\Stripe\Stripe::setVerifySslCerts(false);
			
        $customer = \Stripe\Customer::create(array(
            'email' => $stripe_Email,
            'source'  => $stripe_Token
        ));
        
		$currency = "usd";
        
        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount'   => $order_cost,
            'currency' => $currency,
            'description' => $order_name,
            'metadata' => array(
                'item_id' => $id
            )
        ));
		
		$chargeJson = $charge->jsonSerialize();

		//check whether the charge is successful
		if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
			$amount = $chargeJson['amount'];
			$balance_transaction = $chargeJson['balance_transaction'];
			$currency = $chargeJson['currency'];
			$status = $chargeJson['status'];
			$date = date("Y-m-d H:i:s");
			
			$dataDB = array(
				'Person' => $this->session->userdata('log_id'),
				'Stripe_Token' => $_POST['stripeToken'], 
				'Stripe_Email' => $_POST['stripeEmail'],
				'Time_At' => time(), 
				'Transaction' => $id, 
				'Stripe_Amount' => $amount,
				'Stripe_Balance_Transaction' => $balance_transaction,
				'Stripe_Currency' => $currency,
				'Stripe_Status' => $status
			);
			
			$dataupdate = array('Ord_Pay' => '11');
			
			$this->db->where('Ord_Id', $order_id);
            $this->db->update('tbl_Orders', $dataupdate);

            $this->db->insert('tbl_Stripe', $dataDB);
            redirect('client/orders');
            
		}else{
			$statusMsg = "";
            redirect('client/orders/pay/'.urldecode($this->uri->segment(3)));
			
		}
        
	}
	
}
