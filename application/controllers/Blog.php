<?php
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
           $this->load->library('session');
    }
function index(){
    // echo "aaa";exit;                   

    }

    function add(){
   	 //echo "aaa";exit;
    $this->form_validation->set_rules('title', 'Title', 'required');
        
    $this->form_validation->set_rules('shortcontant', 'Short Contant', 'required');
    $this->form_validation->set_rules('longcontant', 'Long Contant', 'required'); 
 
       if ($this->form_validation->run() == FALSE) {
            $this->load->view('frondend/addblog');
        } else {

              $data = array(
                'title' => $this->input->post('title'),
                                'shortcontant' => $this->input->post('shortcontant'),
                'longcontant' => $this->input->post('longcontant'),
                'bloguserid' =>  $this->session->userdata('id'),
                        

                'date' =>date('Y-m-d'),
            );


if($_FILES['blogimage']['name']!='')
{

$config['upload_path']='./uploads/';
$config['allowed_types']='png|jpg|jpeg|gif';
$this->load->library('upload', $config);


if($this->upload->do_upload('blogimage'))
{

$result=$this->upload->data('file_name');
$data['image'] = $result;
}

}
 // print_r($data);exit;
 $this->Blog_model->create($data);
 $this->session->set_flashdata('msg', 'Data Insert successfully');
        redirect('Blog/add');
       
    }
}
   
   function viewblog(){
             $this->load->helper(array('form'));

             $bloguserid = $this->session->userdata('id');
             $data['blog'] = $this->Blog_model->get_blog_list($bloguserid);
             //echo $this->db->last_query();exit;
             $this->load->view('frondend/blogview',$data);


   }  

    function edit($id) {
        $data['blog'] = $this->Blog_model->get_blog_item($id);
        $this->load->view('frondend/updateblog', $data);
    }


  function delete($id) {
        $this->Blog_model->delete_blog_item($id);
        redirect('Blog/viewblog');
    }  

  function update($id){
   
              $data = array(
                'title' => $this->input->post('title'),
                                'shortcontant' => $this->input->post('shortcontant'),
                'longcontant' => $this->input->post('longcontant'),
                        

                'date' =>date('Y-m-d'),
            );

if($_FILES['blogimage']['name']!='')
{

$config['upload_path']='./uploads/';
$config['allowed_types']='png|jpg|jpeg|gif';
$this->load->library('upload', $config);


if($this->upload->do_upload('blogimage'))
{

$result=$this->upload->data('file_name');
$data['image'] = $result;
// echo $data['image'];exit;
}

}
 // print_r($result);exit;
        $this->Blog_model->update_blog_item($id, $data);
        redirect('Blog/viewblog');
       
    }
    

}