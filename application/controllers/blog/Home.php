<?php

/**
 * Blog
 *
 * Minimalist personal publishing platform
 *
 * Copyright (c) 2025 Blog. All rights reserved.
 *
 * Blog and its user interface are protected by trademark
 * and other pending or existing intellectual property
 * rights in the Philippines.
 */
class Home extends CI_Controller
{
  var $post_model;
  var $category_model;

  var $layout;
  var $session;

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['html', 'url', 'blog/app', 'blog/post', 'blog/category']);
    $this->load->model('blog/post_model');
    $this->load->model('blog/category_model');
    $this->load->library('session');
    $this->load->library('layout');
    $this->layout->set('blog/layouts/home');
  }

  function index()
  {
    $data['recent_posts'] = $this->post_model->find_all();
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('blog/home', $data);
  }

  function category($category_id = 0)
  {
    $data['category'] = $this->category_model->read($category_id);
    $data['recent_posts'] = $this->post_model->find_by_category($category_id);
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('blog/category', $data);
  }

  function post($post_id = 0)
  {
    $data['post'] = $this->post_model->read($post_id);
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('blog/post', $data);
  }
}
