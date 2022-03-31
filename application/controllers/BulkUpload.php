<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BulkUpload extends CI_Controller
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

    function pageUploadLeads(){
        $this->load->view('partner/leadUpload');
    }
    function importLead(){

        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    
                    $mobile= $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $leaving_from = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $going_to = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $start_date = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $end_date = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $total_pax = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $adults = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $kids = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $infants = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $class_of_travel = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $preferred_airline = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $description = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $origin = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $price = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $partner_id = $worksheet->getCellByColumnAndRow(14, $row)->getValue();

                        $data[] = array(
                            'partner_id'=>$partner_id,
                            'mobile' => $mobile,
                            'leaving_from' => $leaving_from,
                            'going_to' => $going_to,
                            'start_date' => $start_date,
                            'end_date' => $end_date,
                            'total_pax' => $total_pax,
                            'adults' => $adults,
                            'kids' => $kids,
                            'infants' => $infants,
                            'class_of_travel' => $class_of_travel,
                            'preferred_airline' => $preferred_airline,
                            'description' => $description,
                            'origin' => $origin,
                            'price'=>$price,
                        );
                    
                }
            }
                if ($this->admin->insert_batch('leads', $data)) {
                    echo 'OK';
                } else {
                    echo 'Fail';
                }
            
        } else {
            echo 'Fail';
        }
        redirect('partner-manage-leads');        
    }


}