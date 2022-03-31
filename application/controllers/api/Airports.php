<?php
   
   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;
     
class Airports extends REST_Controller {
    
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
	public function airport_name_get($name)
	{
        if(!empty($name)){
            $data = $this->db->get_where("airport_codes", ['cityName' => $name])->row_array();
            if($data == ''){
                $data = $this->db->get_where("airport_codes", ['airport_code' => $name])->row_array();
                if($data == ''){
                    $data = $this->db->get_where("airport_codes", ['cityCode' => $name])->row_array();
                    if($data == ''){
                        $data = $this->db->get_where("airport_codes", ['cityName' => $name])->row_array();
                        if($data == ''){
                            $data = $this->db->get_where("airport_codes", ['countryName' => $name])->row_array();
                            if($data == ''){
                                $data = $this->db->get_where("airport_codes", ['countryCode' => $name])->row_array();
                                if($data == ''){
                                    $data = $this->db->get_where("airport_codes", ['name' => $name])->row_array();
                                    if($data == ''){
                                        $data = "Not Found";
                                    }
                                }
                            }
                        }
                    }
                }
                
            }
        }else{
            $data = $this->db->get("airport_codes")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}

    public function all_airports_get(){
        $data = $this->db->get("airport_codes")->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }
}