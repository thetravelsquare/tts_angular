<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HasTrek extends CI_Controller
{
    public $created_at;
    public $apikey;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('download');

        $this->load->model('MainModel', 'admin');
        date_default_timezone_set("Asia/Kolkata");
        $this->created_at = Date('Y-m-d H:i:s', time());
        if (!$this->session->userdata('seller')) {
            redirect('partner/login');
        }
    }
    function post(){
        $userinfo = $this->session->userdata('seller');

        $data['package_name']=$this->input->post('package_name');
        $data['package_type']=$this->input->post('package_type');
        $data['trek_type']=$this->input->post('trek_type');
        $data['from_city']=$this->input->post('from_city');
        $data['destination_city']=$this->input->post('destination_city');
        $data['price_per']=$this->input->post('unit_type');
        $data['currency']=$this->input->post('currency');
        // $data['price_b2b']=$this->input->post('price_b2b');
        $data['price_b2c']=$this->input->post('booking_amount');
        $data['dealer_id']=$userinfo->id;
        $data['dealer_type']=$userinfo->type;
        $data['things_to_carry']=$this->input->post('things_to_carry');
        $data['medical_advisory']=$this->input->post('medical_advisory');
        $data['exclusion']=$this->input->post('exclusion');
        $data['refund_policy']=$this->input->post('refund_policy');
        $data['days']=$this->input->post('days');
        $data['nights']=$this->input->post('nights');
        $data['cancellation_policy']=$this->input->post('cancelation_policy');
        $data['terms']=$this->input->post('terms');

        $latestPackageId=$this->admin->insert_data_get_latest_id('tbl_hastrek_deal',$data);

        if($latestPackageId){


            $location_covered=$this->input->post('location_covered');
            $lcc=0;
            $date_of_travel=$this->input->post('date_of_travel');
            $dotc=0;
            $pickup_location=$this->input->post('plocation');
            $plocationc=0;
            $drop_location=$this->input->post('dlocation');
            $dlocationc=0;
            $day_details=$this->input->post('day_details');
            $day_details_c=0;
            foreach($location_covered as $row){
                $location_covered_data[$lcc]['locations']=$location_covered[$lcc];
                $location_covered_data[$lcc]['ht_id']=$latestPackageId;
                $lcc++;
            }
            $this->admin->insert_batch('tbl_ht_location_covered',$location_covered_data);

            foreach($date_of_travel as $row){
                $date_of_travel_data[$dotc]['dates']=$date_of_travel[$dotc];
                $date_of_travel_data[$dotc]['price_b2b']=$this->input->post('price_b2b')[$dotc];
                $date_of_travel_data[$dotc]['price_b2c']=$this->input->post('price_b2c')[$dotc];
                $date_of_travel_data[$dotc]['currency']=$userinfo->currency;
                $date_of_travel_data[$dotc]['ht_id']=$latestPackageId;
                $dotc++;
            }
            $this->admin->insert_batch('tbl_ht_dates',$date_of_travel_data);

            foreach($pickup_location as $row){
                $pickup_location_data[$plocationc]['location_type']="PICKUP";
                $pickup_location_data[$plocationc]['location']=$pickup_location[$plocationc];
                $pickup_location_data[$plocationc]['timings']=$this->input->post('ptiming')[$plocationc];
                $pickup_location_data[$plocationc]['ht_id']=$latestPackageId;
                $plocationc++;
            }
            $this->admin->insert_batch('tbl_ht_pickup_drop_locations',$pickup_location_data);

            foreach($drop_location as $row){
                $drop_location_data[$dlocationc]['location_type']="DROP";
                $drop_location_data[$dlocationc]['location']=$drop_location[$dlocationc];
                $drop_location_data[$dlocationc]['timings']=$this->input->post('dtiming')[$dlocationc];
                $drop_location_data[$dlocationc]['ht_id']=$latestPackageId;
                $dlocationc++;
            }
            $this->admin->insert_batch('tbl_ht_pickup_drop_locations',$drop_location_data);

            foreach($day_details as $row){
                $day_details_data[$day_details_c]['day_']=$day_details_c+1;
                $day_details_data[$day_details_c]['details']=$day_details[$day_details_c];
                $day_details_data[$day_details_c]['ht_id']=$latestPackageId;
                $day_details_c++;
            }
            $this->admin->insert_batch('tbl_ht_daywise_itineary',$day_details_data);


                $image_count = count($_FILES['image']['name']);
                for ($ic = 0; $ic < $image_count; $ic++) {
                    $this->load->helper("file");
                    $this->load->library('upload');

                    $_FILES['file']['name'] = $_FILES['image']['name'][$ic];
                    $_FILES['file']['type'] = $_FILES['image']['type'][$ic];
                    $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$ic];
                    $_FILES['file']['error'] = $_FILES['image']['error'][$ic];
                    $_FILES['file']['size'] = $_FILES['image']['size'][$ic];

                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'jpg|png|pdf';
                    $config['max_size'] = 0;
                    $config['max_width'] = 0;
                    $config['max_height'] = 0;
                    $config['file_name'] = md5($_FILES['image']['name'][$ic]);

                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('file')) {
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
                        $event_image[$ic]['image'] = base_url() . 'uploads/' . $filename;
                        $event_image[$ic]['ht_id'] = $latestPackageId;
                        $event_image[$ic]['position'] = $ic;
                    }
                }
                $this->admin->insert_batch('tbl_ht_package_images', $event_image);

                // $image_count_b = count($_FILES['banner']['name']);
                // for ($icb = 0; $icb < $image_count_b; $icb++) {
                    $this->load->helper("file");
                    $this->load->library('upload');

                    $_FILES['file']['name'] = $_FILES['banner']['name'];
                    $_FILES['file']['type'] = $_FILES['banner']['type'];
                    $_FILES['file']['tmp_name'] = $_FILES['banner']['tmp_name'];
                    $_FILES['file']['error'] = $_FILES['banner']['error'];
                    $_FILES['file']['size'] = $_FILES['banner']['size'];

                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'jpg|png|pdf';
                    $config['max_size'] = 0;
                    $config['max_width'] = 0;
                    $config['max_height'] = 0;
                    $config['file_name'] = md5($_FILES['banner']['name']);

                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('file')) {
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
                        $event_image_b['image'] = base_url() . 'uploads/' . $filename;
                        $event_image_b['ht_id'] = $latestPackageId;
                    } 
                // }
                $this->admin->insert_data('tbl_ht_promotional_banner', $event_image_b);

                $this->load->helper("file");
                $this->load->library('upload');

                $_FILES['file']['name'] = $_FILES['video']['name'];
                $_FILES['file']['type'] = $_FILES['video']['type'];
                $_FILES['file']['tmp_name'] = $_FILES['video']['tmp_name'];
                $_FILES['file']['error'] = $_FILES['video']['error'];
                $_FILES['file']['size'] = $_FILES['video']['size'];

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'mp4|jpg';
                $config['max_size'] = 0;
                $config['max_width'] = 0;
                $config['max_height'] = 0;
                $config['file_name'] = md5($_FILES['video']['name']);

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $event_image_v['video'] = base_url() . 'uploads/' . $filename;
                    $event_image_v['ht_id'] = $latestPackageId;
                }
                $this->admin->insert_data('tbl_ht_video', $event_image_v);


            if(!empty($this->input->post('guide'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='guide'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('guide');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('meal_plan'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='meal_plan'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('meal_plan');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('sightseeing'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='sightseeing'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('sightseeing');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('activities'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='activities'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('activities');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('accomodation'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='accomodation'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('accomodation');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('amenities'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='amenities'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('amenities');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('equipment'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='equipment'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('equipment');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }
            if(!empty($this->input->post('transaportation'))){
                $idata=array();
                $value=$this->admin->getRawRow("Select * from tbl_ht_inclusion where trim_name='transaportation'")->id;
                $idata['ht_id']=$latestPackageId;
                $idata['ht_inclusion_id']=$value;
                $idata['details']=$this->input->post('transaportation');
                $this->admin->insert_data('tbl_ht_included_inclusion',$idata);
            }

            $this->success("Success");
        }else{
            $this->failure("Failed");
        }
        redirect('partner/adddeal');
    }

    public function success($message)
    {
        $this->session->set_flashdata('item', $message);

    }
    public function failure($message)
    {
        $this->session->set_flashdata('item', $message);

    }
}