<?php
    class Admin extends CI_Controller
    {
        public function index()
        {
            $this->load->view('admin/template/header');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/template/footer');
        }
        
    }
    
?>