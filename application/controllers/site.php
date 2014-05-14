<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
    //C-ONTROLLER

    function index()
    {
        $data = array();
        
        if ($query = $this->site_model->get_record())
        {
            $data['records'] = $query;
        }
        
        $this->load->view('options_view', $data);
    }
    
    function create()
    {
        $data = array(
        
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        
        $this->site_model->add_record($data);
        $this->index();
    }
    
    function update()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        
        $this->site_model->update_record($data);
        $this->index(); 
    }
    
    function delete()
    {
        $this->site_model->delete_row();
        $this->index();
    }
}

