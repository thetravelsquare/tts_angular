<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require('razorpay-php/Razorpay.php');
// use Razorpay\Api\Api;

class PaymentRequest extends CI_Controller
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
        
        
    }
    function encrypt($simple_string){
        $ciphering = "AES-128-CTR"; 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
        $encryption_iv = '1234567891011121'; 
        $encryption_key = "thetravel@square@123"; 
        $encryption = openssl_encrypt($simple_string, $ciphering,$encryption_key, $options, $encryption_iv); 
        return $encryption;
    }
    function decrypt($encryption){
        $ciphering = "AES-128-CTR"; 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
        $decryption_iv = '1234567891011121'; 
        $decryption_key = "thetravel@square@123"; 
        $decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv);
        return $decryption;
    }
    function createOrder($id){

        $rowid=$this->decrypt($id);
        $reqddata=$this->admin->getRawRow("Select * from tbl_payment_request where id='$rowid'");
        
        $amount=$data['amount']=$reqddata->amount;
        $currency_id=$data['currency_id']=$reqddata->currency;
        $data['user_id']=$reqddata->request_from_id;
        $data['user_type']=$reqddata->request_from_type;
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
                $this->makepayment($latestID,$walletData->razorpay_order_id,$amount,$currency,$rowid);
            }else{
                echo 'Error';
            }

        }
    }
    function makepayment($latestID,$id,$amount,$currency,$rowid){
        $reqddata=$this->admin->getRawRow("Select * from tbl_payment_request where id='$rowid'");

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
                location.replace("'.base_url().'PR/rzp-fetch-response/"+response.razorpay_payment_id+"/"+response.razorpay_order_id+"/"+response.razorpay_signature+"/'.$latestID.'/'.$rowid.'")

            },
            "prefill": {
                "name": "'.$reqddata->name.'",
                "email": "'.$reqddata->email.'",
                "contact": "'.$reqddata->phone.'"
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
    function fetchResponse($payment_id,$order_id,$signature,$wallet_id,$rowid){
        $reqddata=$this->admin->getRawRow("Select * from tbl_payment_request where id='$rowid'");

        $data['rzp_payment_id']=$payment_id;
        $data['rzp_order_id']=$order_id;
        $data['rzp_signature']=$signature;
        $data['wallet_id']=$wallet_id;
        if($this->admin->insert_data('tbl_wallet_details',$data)){
            $udata['status']="SUCCESS";
            $this->admin->edit_data('id',$wallet_id,$udata,'tbl_wallet');

            $ndata['wallet_id']=$wallet_id;
            $ndata['transaction_for']="REQ-".$rowid;
            $ndata['payee_type']="USER";
            $ndata['payee_name']=$reqddata->name;
            $ndata['payee_email']=$reqddata->email;
            $ndata['payee_phone']=$reqddata->phone;
            $ndata['benificiary_id']=$reqddata->request_from_id;
            $ndata['benificiary_type']=$reqddata->request_from_type;
            
            if($reqddata->request_from_type=="SELLER" || $reqddata->request_from_type=="PARTNER" ){
            $bdata=$this->admin->getRawRow("Select * from partner where id='$reqddata->request_from_id'");
            
                $ndata['benificiary_name']=$bdata->name;
                $ndata['benificiary_email']=$bdata->email;
                $ndata['benificiary_phone']=$bdata->mobile;
            }
            $this->admin->insert_data('tbl_wallet_transaction_details',$ndata);

            $updata['deleted_at']=$this->created_at;
            $updata['updated_at']=$this->created_at;
            $this->admin->edit_data('id',$rowid,$updata,'tbl_payment_request');

        }else{

        }
        redirect('all-payment-requests');
    }



}