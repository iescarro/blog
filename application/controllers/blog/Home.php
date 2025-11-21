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
  var $post_view_model;
  var $page_model;

  var $layout;
  var $session;

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['html', 'url', 'blog/app', 'blog/post', 'blog/category', 'blog/post_view']);
    $this->load->model(['blog/post_model', 'blog/category_model', 'blog/post_view_model', 'blog/page_model']);
    $this->load->library(['session', 'layout']);
    $this->layout->theme(config_item('theme'));
    $this->layout->set('layouts/app');
  }

  function index()
  {
    $data['recent_posts'] = $this->post_model->find_all();
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('home', $data);
  }

  function category($category_id = 0)
  {
    $data['category'] = $this->category_model->read($category_id);
    $data['recent_posts'] = $this->post_model->find_by_category($category_id);
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('category', $data);
  }

  function posts()
  {
    $data['posts'] = $this->post_model->find_all();
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('posts', $data);
  }

  function post($post_id = 0)
  {
    $post_view = post_view_form($post_id);
    $this->post_view_model->save($post_view);
    $data['post'] = $this->post_model->read($post_id);
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('post', $data);
  }

  function page($page_id = 0)
  {
    $data['page'] = array(); //$this->page_model->read($page_id);
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('page', $data);
  }
}
