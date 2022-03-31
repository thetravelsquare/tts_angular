<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require('razorpay-php/Razorpay.php');
// use Razorpay\Api\Api;

class RazorPayPayment extends CI_Controller
{
    public $created_at;
    public $apikey;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('excel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('MainModel', 'admin');
        date_default_timezone_set("Asia/Kolkata");
        $this->created_at = Date('Y-m-d H:i:s', time());
        if (!$this->session->userdata('partner')) {
            redirect('partner/login');
        }
        
    }

    function createOrder(){
        $userinfo = $this->session->userdata('partner');

        $amount=$data['amount']=$this->input->post('amount');
        $currency_id=$data['currency_id']=$this->input->post('currency_id');
        $data['user_id']=$userinfo->id;
        $data['user_type']=$userinfo->type;
        $data['type']='CREDIT';
        
        $latestID=$this->admin->insert_data_get_latest_id('tbl_wallet',$data);

        if($latestID){
            $currency=$this->admin->getRawRow("Select * from tbl_currency where id='$currency_id'")->name;

            $url = "https://api.razorpay.com/v1/orders";
            $ch = curl_init($url);
            $headers = array(
                'Authorization: Basic cnpwX3Rlc3RfcWtVWnROS0x4c2poWjg6UjFnTVAxT1pyMEtOdlpMUkRLZkhZMkJu',
                'Content-Type: application/json'
            );    
            $data = array(
                "amount"=> $amount*100,
                "currency"=> "$currency",
                "receipt"=> "$latestID",
                "payment_capture"=> 1,
            );
            $payload = json_encode($data);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $response = json_decode($result);
            
            curl_close($ch);

            if(empty($response->error)){
                $udata['razorpay_order_id']=$response->id;
                $this->admin->edit_data('id',$latestID,$udata,'tbl_wallet');
                $walletData=$this->admin->getRawRow("Select * from tbl_wallet where id='$latestID'");
                $this->makepayment($latestID,$walletData->razorpay_order_id,$amount,$currency);
            }else{
                echo 'Error';
            }

        }
    }
    function makepayment($latestID,$id,$amount,$currency){
        $userinfo = $this->session->userdata('partner');
       
        echo '
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
        var options = {
            "key": "rzp_test_qkUZtNKLxsjhZ8", // Enter the Key ID generated from the Dashboard
            "amount": '.$amount.', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "'.$currency.'",
            "name": "The Travel Square",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "order_id": "'.$id.'", 
            "handler": function (response){
                alert(response.razorpay_payment_id);
                alert(response.razorpay_order_id);
                alert(response.razorpay_signature);
                location.replace("'.base_url().'rzp-fetch-response/"+response.razorpay_payment_id+"/"+response.razorpay_order_id+"/"+response.razorpay_signature+"/'.$latestID.'")

            },
            "prefill": {
                "name": "'.$userinfo->name.'",
                "email": "'.$userinfo->email.'",
                "contact": "'.$userinfo->mobile.'"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#000000"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
        
        </script>
        ';
        // print_r($response);
    }
    function fetchResponse($payment_id,$order_id,$signature,$wallet_id){
        $userinfo = $this->session->userdata('partner');

        $data['rzp_payment_id']=$payment_id;
        $data['rzp_order_id']=$order_id;
        $data['rzp_signature']=$signature;
        $data['wallet_id']=$wallet_id;
        if($this->admin->insert_data('tbl_wallet_details',$data)){
            $udata['status']="SUCCESS";
            $this->admin->edit_data('id',$wallet_id,$udata,'tbl_wallet');

            $ndata['wallet_id']=$wallet_id;
            $ndata['transaction_for']="ADD MONEY TO TRAVPAY";
            $ndata['payee_id']=$userinfo->id;
            $ndata['payee_type']=$userinfo->type;
            $ndata['payee_name']=$userinfo->name;
            $ndata['payee_email']=$userinfo->email;
            $ndata['payee_phone']=$userinfo->mobile;
            $ndata['benificiary_id']=$userinfo->id;
            $ndata['benificiary_type']=$userinfo->type;
            $ndata['benificiary_name']=$userinfo->name;
            $ndata['benificiary_email']=$userinfo->email;
            $ndata['benificiary_phone']=$userinfo->mobile;
            $this->admin->insert_data('tbl_wallet_transaction_details',$ndata);
        }else{

        }
        redirect('partner-travpay-add-money');
    }



}