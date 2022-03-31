<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PartnerBooking extends CI_Controller
{
    public $created_at;
    public $apikey;
    public $userinfo;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');

        $this->load->model('MainModel', 'admin');
        date_default_timezone_set("Asia/Kolkata");
        $this->created_at = Date('Y-m-d H:i:s', time());
        if (!$this->session->userdata('partner')) {
            redirect('partner/login');
        } else {
            $this->userinfo = $this->session->userdata('partner');
        }
    }


    function next_installment($id){
        $xcdata=$this->admin->getRawRow("Select * from tbl_booking where id='$id'");
        
        $deal_id=$xcdata->deal_combined_id;
        $deal = explode("-", $deal_id);
        $deal_data_details_type=$data['deal_type'] = $deal[0];
        if($deal_data_details_type=="HST"){
            $deal_data_details_id=$data['deal_type_id'] = $deal[1];
            $deal_data_details=$this->admin->getRawRow("Select * from tbl_hastrek_deal where id='$deal_data_details_id'");
        }
        $booking_data['booking_id'] = $xcdata->id;
        $booking_data['deal_id'] = $deal_id;
        $booking_data['transaction_type'] = "PARTIAL";
        $this->session->set_userdata('booking_data', $booking_data);

        $amount = $wdata['amount'] = $this->input->post('amount');
        $currency_id = $wdata['currency_id'] = $this->userinfo->currency;
        $wdata['user_id'] = $this->userinfo->id;
        $wdata['user_type'] = $this->userinfo->type;
        $wdata['type'] = 'DEBIT';

        $latestID = $this->admin->insert_data_get_latest_id('tbl_wallet', $wdata);

        if ($latestID) {
            $currency = $this->admin->getRawRow("Select * from tbl_currency where id='$currency_id'")->name;

            $url = "https://api.razorpay.com/v1/orders";
            $ch = curl_init($url);
            $headers = array(
                'Authorization: Basic cnpwX3Rlc3RfcWtVWnROS0x4c2poWjg6UjFnTVAxT1pyMEtOdlpMUkRLZkhZMkJu',
                'Content-Type: application/json',
            );
            $data = array(
                "amount" => $amount * 100,
                "currency" => "$currency",
                "receipt" => "$latestID",
                "payment_capture" => 1,
            );
            $payload = json_encode($data);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $response = json_decode($result);

            curl_close($ch);

            if (empty($response->error)) {
                $udata['razorpay_order_id'] = $response->id;
                $this->admin->edit_data('id', $latestID, $udata, 'tbl_wallet');
                $walletData = $this->admin->getRawRow("Select * from tbl_wallet where id='$latestID'");
                $this->makepayment($latestID, $walletData->razorpay_order_id, $amount, $currency);
            } else {
                echo 'Error';
            }

        } else {
            $this->failed("Error");
        }

    }
    public function booking_form()
    {

        $deal_id = $data['deal_combined_id'] = $this->input->post('deal_id');

        $deal = explode("-", $deal_id);
        $deal_data_details_type=$data['deal_type'] = $deal[0];
        if($deal_data_details_type=="HST"){
            $deal_data_details_id=$data['deal_type_id'] = $deal[1];
            $deal_data_details=$this->admin->getRawRow("Select * from tbl_hastrek_deal where id='$deal_data_details_id'");
        }

        $data['user_type'] = $this->userinfo->type;
        $data['user_type_id'] = $this->userinfo->id;

        $data['customer_first_name'] = $this->input->post('customer_first_name');
        $data['customer_last_name'] = $this->input->post('customer_last_name');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['currency'] = $this->userinfo->currency;
        $travel_date= explode("_",$this->input->post('travel_date'));
        $data['travel_date'] = $travel_date[0];
        

        $data['return_date'] = $this->input->post('return_date');
        $data['pax'] = $this->input->post('pax');


        $ppf=$this->input->post('payment_of');
        if($ppf=="partial"){
            $total_amount_to_be_paid = $data['price'] = $travel_date[1]*$data['pax'];
            $payment_of = $deal_data_details->price_b2c;
        }else{
            $total_amount_to_be_paid = $data['price'] = $travel_date[1]*$data['pax'];
            $payment_of = $travel_date[1]*$data['pax'];
        }




        $latestBookingID = $this->admin->insert_data_get_latest_id('tbl_booking', $data);

        if ($latestBookingID) {

            if ($payment_of < $total_amount_to_be_paid) {

                $booking_data['booking_id'] = $latestBookingID;
                $booking_data['deal_id'] = $deal_id;
                $booking_data['transaction_type'] = "PARTIAL";
                $this->session->set_userdata('booking_data', $booking_data);

            } else {
                $booking_data['booking_id'] = $latestBookingID;
                $booking_data['deal_id'] = $deal_id;
                $booking_data['transaction_type'] = "FULL";
                $this->session->set_userdata('booking_data', $booking_data);
            }

            $amount = $wdata['amount'] = $payment_of;
            $currency_id = $wdata['currency_id'] = $this->userinfo->currency;
            $wdata['user_id'] = $this->userinfo->id;
            $wdata['user_type'] = $this->userinfo->type;
            $wdata['type'] = 'DEBIT';

            $latestID = $this->admin->insert_data_get_latest_id('tbl_wallet', $wdata);

            if ($latestID) {
                $currency = $this->admin->getRawRow("Select * from tbl_currency where id='$currency_id'")->name;

                $url = "https://api.razorpay.com/v1/orders";
                $ch = curl_init($url);
                $headers = array(
                    'Authorization: Basic cnpwX3Rlc3RfcWtVWnROS0x4c2poWjg6UjFnTVAxT1pyMEtOdlpMUkRLZkhZMkJu',
                    'Content-Type: application/json',
                );
                $data = array(
                    "amount" => $amount * 100,
                    "currency" => "$currency",
                    "receipt" => "$latestID",
                    "payment_capture" => 1,
                );
                $payload = json_encode($data);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                $response = json_decode($result);

                curl_close($ch);

                if (empty($response->error)) {
                    $udata['razorpay_order_id'] = $response->id;
                    $this->admin->edit_data('id', $latestID, $udata, 'tbl_wallet');
                    $walletData = $this->admin->getRawRow("Select * from tbl_wallet where id='$latestID'");
                    $this->makepayment($latestID, $walletData->razorpay_order_id, $amount, $currency);
                } else {
                    echo 'Error';
                }

            } else {
                $this->failed("Error");
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
                location.replace("'.base_url().'PartnerBooking/fetchResponse/"+response.razorpay_payment_id+"/"+response.razorpay_order_id+"/"+response.razorpay_signature+"/'.$latestID.'")

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
        $userinfo = $this->userinfo;
        $booking_data = $this->session->userdata('booking_data');

        $deal = explode("-", $booking_data['deal_id']);
        $deal_type=$deal[0];
        $deal_type_id = $deal[1];

        if($deal_type=="HST"){
            $benificiary_data=$this->admin->getRawRow("Select * from partner where id IN (Select dealer_id from tbl_hastrek_deal where id='$deal_type_id')");
        }

        $data['rzp_payment_id']=$payment_id;
        $data['rzp_order_id']=$order_id;
        $data['rzp_signature']=$signature;
        $data['wallet_id']=$wallet_id;
        if($this->admin->insert_data('tbl_wallet_details',$data)){
            $udata['status']="SUCCESS";
            $this->admin->edit_data('id',$wallet_id,$udata,'tbl_wallet');


            $ndata['wallet_id']=$wallet_id;
            
            $ndata['transaction_for']="BK-".$booking_data['booking_id']."-".$booking_data['deal_id'];
            
            $ndata['payee_id']=$userinfo->id;
            $ndata['transaction_type']=$booking_data['transaction_type'];
            $ndata['payee_type']=$userinfo->type;
            $ndata['payee_name']=$userinfo->name;
            $ndata['payee_email']=$userinfo->email;
            $ndata['payee_phone']=$userinfo->mobile;
            $ndata['benificiary_id']=$benificiary_data->id;
            $ndata['benificiary_type']=$benificiary_data->type;
            $ndata['benificiary_name']=$benificiary_data->name;
            $ndata['benificiary_email']=$benificiary_data->email;
            $ndata['benificiary_phone']=$benificiary_data->mobile;
            $this->admin->insert_data('tbl_wallet_transaction_details',$ndata);
            $this->success("OK");
        }else{
            $this->success("Error");
        }
        $this->session->unset_userdata('booking_data');

        redirect('partner-booking/'.$booking_data['deal_id']);
    }
    public function success($message)
    {

        $data = '
                        <div class="alert alert-success fade show" role="alert">
                            <div class="alert-text">' . $message . '</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
        ';

        $this->session->set_flashdata('item', $data);

    }
    public function failed($message)
    {

        $data = '
                        <div class="alert alert-danger fade show" role="alert">
                            <div class="alert-text">' . $message . '</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
        ';

        $this->session->set_flashdata('item', $data);

    }

}
