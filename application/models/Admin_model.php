<?php
class Admin_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
      function userregister($data){
      $this->db->insert('bloguserdata',$data);
      }

     function usercheck($data)
                      {
                      return $this->db->get_where('bloguserdata',$data)->row();
                      }


        

}