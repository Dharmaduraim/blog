<?php
class Usercontroller  extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
           $this->load->library('session');
    }

   function userregister(){
                $this->load->view('frondend/register');
                }
                        function register_valid(){
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[12]');
                        $this->form_validation->set_rules('email', 'Email Id', 'required|valid_email');
                        $this->form_validation->set_rules('password', 'Password', 'required');
                        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
                        if($this->form_validation->run()){

                        $data = array(
                        "name" => $this->input->post("name"),
                        "email" => $this->input->post("email"),
                        "password" => $this->input->post("password"),
                        "phone" => $this->input->post("phone"),
                        'date' => date('Y-m-d H:i:s'),
                        );
// print_r($data);exit;
                        $this->Admin_model->userregister($data);
                        $registered_id = $this->db->insert_id();
                        // $this->form_valid();
                        //echo $registered_id;die;
                        redirect(base_url()."usercontroller/userlogin");
                        }
                        else{
                        $this->userregister();
                        }
                        }
                        
     function userlogin(){
            $this->load->library('form_validation');
            $this->load->view('frondend/login');

            }


    function login_valid()
    {

     $this->load->library("form_validation");
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run()){

           $data['name']=$this->input->post("name");
           $data['password']=$this->input->post("password");
          $this->load->model('Admin_model');
         $result = $this->Admin_model->usercheck($data);
          if($result == TRUE)
            {
              $this->session->set_userdata('id',$result->id);
              $this->session->set_userdata('name',$result->name);
                redirect('Home/dashboard');
                        }
                        else{
                     $this->session->set_flashdata('danger', ' Invalid User name/Password');
                      redirect('Usercontroller/login_valid');



                        }

                        }
                        else{
                        $this->userlogin();
                        }

                        }

      function homepage(){
    // echo "aaa";exit;

       $this->load->view('frondend/home');

               }



    function userlogout(){

         if($this->session->has_userdata('id')){
         $this->session->sess_destroy();

                redirect(base_url()."home/blog_view");
                }
                
                }

}
?>
