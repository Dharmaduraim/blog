<?php
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->helper('url');
                   $this->load->library('session');

    }

    function index(){
   	// echo "aaa";exit;

    	                $this->load->view('frondend/home');

    }
     function dashboard(){
   	// echo "aaa";exit;

    	                $this->load->view('frondend/dash');

    }
    function blog_view(){
         $this->load->helper(array('form'));
         $data['fullblog'] = $this->Blog_model->get_blogfull_list();
// print_r($data);exit;
                        $this->load->view('frondend/home',$data);

    }

 

    function blog_view_full($id){
         $this->load->helper(array('form'));
         $data['blog'] = $this->Blog_model->get_blog_item($id);
 // print_r($data);exit;
                        $this->load->view('frondend/fullblog',$data);

    }


}