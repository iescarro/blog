<?php

class Home extends CI_Controller
{
    var $post_model;

    var $layout;
    var $session;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['html', 'url', 'blog/post']);
        $this->load->model('blog/post_model');
        $this->load->library('session');
        $this->load->library('layout');
        $this->layout->set('blog/layouts/home');
    }

    function index()
    {
        $data['recent_posts'] = $this->post_model->find_all();
        $this->layout->view('blog/home', $data);
    }

    function post($id = 0)
    {
        $data['post'] = $this->post_model->read($id);
        $this->layout->view('blog/post', $data);
    }
}
