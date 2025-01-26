<?php

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['html', 'form', 'url']);
        $this->load->library('session');
        redirect_if(!$this->session->userdata('user_id'), 'auth/login');
        $this->load->library('layout');
        $this->layout->set('blog/layouts/app');
    }

    function index()
    {
        $this->layout->view('blog/dashboard');
    }
}
