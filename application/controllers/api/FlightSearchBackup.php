<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class FlightSearch extends REST_Controller {

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
	public function index_get()
	{
	}

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
      // $inputs['InfantCount'] = "2";tps://flight.srdvapi.com/v5/rest/Search'
      // $inputs['ChildCount'] = "1";
      // $inputs['EndUserIp'] = "1";
      $data = json_decode(file_get_contents('php://input'), true);
      if($data){
        print_r($data);die;
        // echo 'hi';
        $apiKey = $data['API-Token'];
        /* API URL */
        // $url = 'https://flight.srdvtest.com/v5/rest/Search';
         $url = 'https://flight.srdvapi.com/v5/rest/Search';
        /* Init cURL resource */
        $ch = curl_init($url);
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
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
          $response = json_decode($result, true);
        /* close cURL resource */
        curl_close($ch);

        $this->response($response, REST_Controller::HTTP_OK);
      }else{
        // echo 'bye';die;

        $inputs = $this->input->post();
        $inputs['API-Token'] = "(S;q66r?nHa9";
        $inputs['ClientId'] = "180134";
        $inputs['Password'] = "tZ2W!zZr2q";
        $inputs['EndUserIp'] = "124.123.78.11";
        $date=date_create();
        date_date_set($date,2020,10,30);
        $inputs['Segments'][0] = [
          "Destination" => $inputs['Destination'],
          "FlightCabinClass" => $inputs['FlightCabinClass'],
          "Origin" => $inputs['Origin'],
          "PreferredArrivalTime" => "2022-03-15T23:00:00",
          "PreferredDepartureTime" => "2022-03-15T23:00:00",
        ];  
        $inputs['UserName'] = "Hash7212";
        // print_r(json_decode($inputs));die;
        $apiKey = $inputs['API-Token'];
        print_r($inputs);die;
        /* API URL */
        // $url = 'https://flight.srdvtest.com/v5/rest/Search';
         $url = 'https://flight.srdvapi.com/v5/rest/Search';
        /* Init cURL resource */
        $ch = curl_init($url);
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputs));
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
          $response = json_decode($result, true);
        /* close cURL resource */
        curl_close($ch);

        $this->response($response, REST_Controller::HTTP_OK);
      }
      die;
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