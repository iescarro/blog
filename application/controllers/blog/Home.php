<?php

class Home extends CI_Controller
{
    var $post_model;

    var $layout;

    function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->library('layout');
        $this->layout->set('blog/layouts/app');
    }

    function index()
    {
        $data['recent_posts'] = $this->post_model->find_all();
        $this->layout->view('blog/home', $data);
    }
}
