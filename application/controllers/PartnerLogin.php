<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PartnerLogin extends CI_Controller
{
    public $created_at;
    public $apikey;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('MainModel', 'admin');
        date_default_timezone_set("Asia/Kolkata");
        $this->created_at = Date('Y-m-d H:i:s', time());
        
    }

    public function allBookings($id){
        // $this->db->where("user_id", $id);
        // $data = $this->db->get("bookings");
        // echo json_encode($data->result());

}

    public function login()
    {
        if (!$this->session->userdata('partner')) {
            $this->load->view('partner/login');
        } else {
            redirect('partner');
        }
    }

    public function loginForm()
    {

        $url = base_url() . 'RestApi/login';
        $phone=$this->input->post('phone');
        $postdata = http_build_query(
            array(
                'apikey' => 'vibhu@123',
                'requestType' => '1',
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password'),
                'type'=>'partner'
            )
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        $result = curl_exec($ch);
        $data = json_decode($result);
        curl_close($ch);
        if ($data->error_code == 0) { // Login the users
            $manager = $this->admin->getRawRow("Select * from partner where mobile='$phone' and type='partner'");
            $this->session->set_userdata('partner', $manager);
            redirect('partner');
            // if($manager->type=='partner'){redirect('partner');}
            // else if($manager->type=='seller'){redirect('seller');}
        } else {
            $this->failed($data->response_string);
            redirect('partner/login');
        }

    }

    public function login_post() {
        $url = base_url() . 'RestApi/login';
        // print_r($url); die;
        $phone=$this->input->post('phone');
        $postdata = http_build_query(
            array(
                'apikey' => 'vibhu@123',
                'requestType' => '1',
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password'),
                'type'=>'partner'
            )
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        $result = curl_exec($ch);
        $data = json_decode($result);
        curl_close($ch);
        if ($data->error_code == 0) { // Login the users
            $manager = $this->admin->getRawRow("Select * from partner where mobile='$phone' and type='partner'");
            // $this->session->set_userdata('partner', $manager);
            // redirect('partner');
            echo json_encode($manager);
            // if($manager->type=='partner'){redirect('partner');}
            // else if($manager->type=='seller'){redirect('seller');}
        } else {
            $this->failed($data->response_string);
            redirect('partner/login');
        }
    }

    public function registration_post() {
        // Get the post data
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        
        // Validate the post data
        if(!empty($name) && !empty($phone) && !empty($email) && !empty($password)){
            // Check if the given email already exists
            $con['returnType'] = 'count';
            $con['conditions'] = array(
                'email' => $email,
            );

            $userCount = $this->admin->getRawRow("Select * from partner where mobile='$phone' OR email='$email' and type='partner'");
            // print_r($userCount); die;
            // $this->user->getRows($con);
            if($userCount != ''){
                // Set the response and exit
                echo json_encode("The given phone or email already exists");
                // $this->response("The given email already exists.", REST_Controller::HTTP_BAD_REQUEST);
            }else{
                // Insert user data
                $userData = array(
                    'name' => $name,
                    'email' => $email,
                    'pass' => md5($password),
                    'mobile' => $phone
                );
                // $insert = $this->user->insert($userData);
                $insert = $this->db->insert('partner',$userData);  

                
                // Check if the user data is inserted
                if($insert){
                    // Set the response and exit
                    $response = array(
                        'status' => TRUE,    
                        'message' => 'The user has been added successfully.',
                        'data' => $userData
                    );

                    echo json_encode($response);
                    
                }else{
                    // Set the response and exit
                    echo json_encode("Some problems occurred, please try again.");
                }
            }
        }else{
            echo json_encode("Provide complete user info to add.");
            // Set the response and exit
            // $this->response("Provide complete user info to add.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}