<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Methods: GET, OPTIONS, POST, GET, PUT");
   header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
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
      // $inputs = $this->input->post();
      $data = json_decode(file_get_contents('php://input'), true);
      $apiKey = $data['API-Token'];
      /*$data_curl = [
        'AdultCount'            => $data['AdultCount'],
        'ChildCount'            => $data['ChildCount'],
        'ClientId'           => $data['ClientId'],
        'EndUserIp'           => $data['EndUserIp'],
        'InfantCount'           => $data['InfantCount'],
        'JourneyType'           => $data['JourneyType'],
        'Password'           => $data['Password'],
        'Segments'           => [
          [
            'Destination' => $data['Destination_1'],
            'FlightCabinClass' => $data['FlightCabinClass_1'],
            'Origin' => $data['Origin_1'],
            'PreferredArrivalTime' => $data['PreferredArrivalTime_1'],
            'PreferredDepartureTime' => $data['PreferredDepartureTime_1'],
          ],
          [
            'Destination' => $data['Destination_2'],
            'FlightCabinClass' => $data['FlightCabinClass_2'],
            'Origin' => $data['Origin_2'],
            'PreferredArrivalTime' => $data['PreferredArrivalTime_2'],
            'PreferredDepartureTime' => $data['PreferredDepartureTime_2'],
          ]
        ],
        'UserName' => $data['UserName']
      ];*/

      /* API URL */
      //  $url = 'https://flight.srdvtest.com/v5/rest/Search';
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
