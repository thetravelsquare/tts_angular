<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
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
        // if (!$this->session->userdata('partner')) {
        //     redirect('partner/login');
        // }
    }
    public function blogs()
    {
        // $userinfo = $this->session->userdata('partner');
        $data = $this->admin->getRawResult("Select tbl_blog.*,tbl_blog_image.image from tbl_blog,tbl_blog_image where tbl_blog.id=tbl_blog_image.blog_id and tbl_blog.deleted_at IS NULL and tbl_blog_image.position=0");
        $this->load->view('partner/blogs', compact( 'data'));
    }
    public function blog($id)
    {
        // $userinfo = $this->session->userdata('partner');
        $mdata = $this->admin->getRawResult("Select * from tbl_blog where id='$id'");
        foreach ($mdata as $row) {
            $data[] = array(
                'id' => $row->id,
                'headline' => $row->headline,
                'tagline' => $row->tagline,
                'blog' => $row->blog,
                'image' => $this->admin->getRawResult("Select * from tbl_blog_image where blog_id='$row->id'"),
            );
        }
        $this->load->view('partner/single_blog_detail', compact('data'));
    }
}
