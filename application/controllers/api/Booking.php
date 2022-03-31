<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class Booking extends REST_Controller {

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
  public function index_get($id = 0)
  {
        if(!empty($id)){
            $data = $this->db->get_where("bookings", ['user_id' => $id])->result()->user_id;
        }else{
            $data = $this->db->get("bookings")->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
  }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
      $this->load->helper('string');
      $data = json_decode(file_get_contents('php://input'), true);
      // var_dump($data);
      //$data_res = json_encode($data);
        // print_r($_POST);
        
        $apiKey = $data['API-Token'];

        //$json = json_encode($decoded);
        $data_curl = [
        'ClientId'                => $data['ClientId'],
          'EndUserIp'           => $data['EndUserIp'],
          'UserName'          => $data['UserName'],
          'Password'           => $data['Password'],
          'SrdvType'            => $data['SrdvType'],
          'SrdvIndex'           => $data['SrdvIndex'],
          'TraceId'               => $data['TraceId'],
          'ResultIndex'        => $data['ResultIndex'],
          // 'Passengers'        => [
          //   [
          //     'Title'                 => $data['Title'],
          //     'FirstName'      => $data['FirstName'],
          //     'LastName'      => $data['LastName'],
          //     'PaxType'         => $data['PaxType'],
          //     'DateOfBirth'   => $data['DateOfBirth'],
          //     'Gender'           => $data['Gender'],
          //     'PassportNo'   => $data['PassportNo'],
          //     'PassportExpiry' => $data['PassportExpiry'],
          //     'AddressLine1' => $data['AddressLine1'],
          //     'City'                   => $data['City'],
          //     'CountryCode'  => $data['CountryCode'],
          //     'CountryName' => $data['CountryName'],
          //     'ContactNo'      => $data['ContactNo'],
          //     'Email'               => $data['Email'],
          //     'IsLeadPax'      => $data['IsLeadPax'],
          //     'Fare' => [
          //       'BaseFare'      => $data['BaseFare'],
          //       'Tax'                => $data['Tax'],
          //       'TransactionFee' => $data['TransactionFee'],
          //       'YQTax'                 => $data['YQTax'],
          //       'AdditionalTxnFeeOfrd' => $data['AdditionalTxnFeeOfrd'],
          //       'AdditionalTxnFeePub' => $data['AdditionalTxnFeePub'],
          //       'AirTransFee' => $data['AirTransFee']
          //     ],
          //   ],
          // ],
        ];
        // print_r($data_curl);die;
        //die();
        /* API URL */
         $url = 'https://flight.srdvtest.com/v5/rest/TicketLCC';
         //$url = 'https://flight.srdvapi.com/v5/rest/TicketLCC';
         /* Init cURL resource */
         $ch = curl_init($url);;
         /* pass encoded JSON string to the POST fields */
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_curl));
         curl_setopt($ch, CURLOPT_POST, 1);
         // curl_setopt($ch, CURLOPT_USERPWD, "api-key: rzp_test_1U3fdUZx6lMZ13-iCS5tAavgvQ7B9mlv5EZFPio");
         // curl_setopt($ch, CURLOPT_USERPWD, 'rzp_test_1U3fdUZx6lMZ13' . ':' . 'iCS5tAavgvQ7B9mlv5EZFPio');
        $headers = array(
          'Content-Type: application/json',
          'Accept: application/json',
          'API-Token:' .$apiKey
        );
        // $headers[] = 'Accept: application/json';
        // $headers[] = 'Content-Type: application/json';
         /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

         /* set return type json */
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         /* execute request */
         $result = curl_exec($ch);
         // $result = explode(',', $result);
         // $result = strip_slashes($result);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          }
         /* close cURL resource */
          curl_close($ch);
          $response = json_decode($result, true);
          //print_r($response);
          //die();
          $res = $response['Response'];
          $flights = $res['FlightItinerary'];
          $segment = $flights['Segments']['0'];
          $airline = $segment['Airline'];
          $data_insert_array = [
            'user_id'            => $data['user_id'],
            // 'amount'            => $data['amount'],
            'flight_pnr'           => $res['PNR'],
            'flight_booking_id'           => $res['BookingId'],
            'flight_name'           => $airline['AirlineName'],
            // 'payment_type'           => $data['payment_type'],
            // 'payment_status'           => $data['payment_status'], 
            'payment_details'           => $data['payment_details'],
            'all_data' => json_encode($response['Response'])
          ];
          $this->db->insert('bookings',$data_insert_array);
          $id = $this->db->insert_id();

        // $this->response($response, REST_Controller::HTTP_OK);

        $this->response(['status' => 'success','booking_id' => $id, 'data' =>$result , 'message' => 'A new Booking Created Successfully.'], REST_Controller::HTTP_OK);
      }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
      }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
    }

}
