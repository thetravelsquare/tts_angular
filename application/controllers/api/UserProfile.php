<?php

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class UserProfile extends REST_Controller {

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
            $data = $this->db->get_where("users_profile", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("users_profile")->result();
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
        $inputs = $this->input->post();
        $data = [
          'name'            => $this->input->post('name'),
          'email'           => $this->input->post('email'),
          'contact'         => $this->input->post('contact'),
          'dob'             => $this->input->post('dob'),
          'gender'          => $this->input->post('gender'),
          'marital_status'  => $this->input->post('marital_status'),
          'aniversary_date' => $this->input->post('aniversary_date'),
          'passport_number' => $this->input->post('passport_number'),
          'nationality'     => $this->input->post('nationality'),
          'issuing_country' => $this->input->post('issuing_country'),
          'expiry'          => $this->input->post('expiry')
        ];
        $this->db->insert('users_profile',$data);
        $this->response(['Profile Created Successfully.'], REST_Controller::HTTP_OK);
      }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $inputs = $this->put();
        $data = [
          'name'            => $this->input->post('name'),
          'email'           => $this->input->post('email'),
          'contact'         => $this->input->post('contact'),
          'dob'             => $this->input->post('dob'),
          'gender'          => $this->input->post('gender'),
          'marital_status'  => $this->input->post('marital_status'),
          'aniversary_date' => $this->input->post('aniversary_date'),
          'passport_number' => $this->input->post('passport_number'),
          'nationality'     => $this->input->post('nationality'),
          'issuing_country' => $this->input->post('issuing_country'),
          'expiry'          => $this->input->post('expiry')
        ];
        $this->db->update('users_profile', $data, array('id'=>$id));

        $this->response(['Profile updated successfully.'], REST_Controller::HTTP_OK);
      }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('users_profile', array('id'=>$id));

        $this->response(['Profile deleted successfully.'], REST_Controller::HTTP_OK);
    }

}
