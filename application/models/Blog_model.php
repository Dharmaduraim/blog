<?php
class Blog_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

      function create($data){
      $this->db->insert('blog',$data);
          return $this->db->insert_id();
      }

     function get_blog_list($id) {
       $this->db->where('bloguserid', $id);
        $query = $this->db->get('blog');
        return $query->result();
    }

      function delete_blog_item($id) {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }
function get_blog_item($id) {
        $query = $this->db->get_where('blog', array('id' => $id));
        return $query->row();
    }

      function update_blog_item($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('blog', $data);
    }

     function get_blogfull_list() {
        $query = $this->db->get('blog');
        return $query->result();
    }


                    

}