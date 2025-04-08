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
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{
  var $post_model;
  var $category_model;

  var $input;
  var $layout;
  var $session;

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['html', 'url', 'form', 'blog/app', 'blog/category', 'blog/post']);
    $this->load->library('session');
    redirect_if(!$this->session->userdata('user_id'), 'auth/login');
    $this->load->model('blog/post_model');
    $this->load->model('blog/category_model');
    $this->load->library('form_validation');
    $this->load->library('layout');
    $this->layout->set('blog/layouts/app');
  }

  function index()
  {
    $data['posts'] = $this->post_model->find_all();
    $this->layout->view('blog/posts/index', $data);
  }

  function create()
  {
    if ($this->input->post()) {
      $post = post_form($this->session->userdata('user_id'));
      $this->post_model->save($post);
      redirect('blog/posts');
    }
    $categories = $this->category_model->find_all();
    $data['categories'] = categories_for_dropdown($categories);
    $this->layout->view('blog/posts/create', $data);
  }

  function edit($id)
  {
    if ($this->input->post()) {
      $post = post_form($this->session->userdata('user_id'));
      $this->post_model->update($post, $id);
      redirect('blog/posts');
    }
    $data['post'] = $this->post_model->read($id);
    $categories = $this->category_model->find_all();
    $data['categories'] = categories_for_dropdown($categories);
    $this->layout->view('blog/posts/edit', $data);
  }

  function delete($id)
  {
    $this->post_model->delete($id);
    redirect('blog/posts');
  }
}
