<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class AppImageApiClone extends REST_Controller {

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
	public function index_get($type_name = 0)
	{
        if(!empty($type_name)){
            $data = $this->db->get_where("app_images", ['type_name' => $type_name])->result();
        }else{
            $data = $this->db->get("app_images")->result();
        }

        $this->response($data, REST_Controller::HTTP_OK);
	}

    /**
     * Get All Data from this method.
     *
     * @return Response
    */

}
