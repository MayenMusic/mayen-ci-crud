<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model {
    
    // M-ODEL
 
    function get_record() {     //Retrieve
    
        $query = $this->db->get('data');
        return $query->result();
    }
    
    function add_record($data) {    //Create
    
        $this->db->insert('data', $data);
        return;
    }
    
    function update_record($data) {     //Update
        
        $id = $this->input->post('id');
    
        $this->db->where('id', $id);
        $this->db->update('data', $data);
    }
    
    function delete_row() {     //Delete
    
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('data');
    }
              
}