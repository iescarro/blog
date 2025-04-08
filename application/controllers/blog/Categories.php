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

class Categories extends CI_Controller
{
  var $category_model;

  var $input;
  var $layout;
  var $session;

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['html', 'url', 'form', 'blog/app', 'blog/category']);
    $this->load->library(['form_validation', 'layout', 'session']);
    redirect_if(!$this->session->userdata('user_id'), 'auth/login');
    $this->load->model(['blog/category_model']);
    $this->layout->set('blog/layouts/app');
  }

  function index()
  {
    $data['categories'] = $this->category_model->find_all();
    $this->layout->view('blog/categories/index', $data);
  }

  function create()
  {
    if ($this->input->post()) {
      $category = category_form();
      $this->category_model->save($category);
      redirect('blog/categories');
    }
    $this->layout->view('blog/categories/create');
  }

  function edit($id)
  {
    if ($this->input->post()) {
      $category = category_form();
      $this->category_model->update($category, $id);
      redirect('blog/categories');
    }
    $data['category'] = $this->category_model->read($id);
    $this->layout->view('blog/categories/edit', $data);
  }

  function delete($id)
  {
    $this->category_model->delete($id);
    redirect('blog/categories');
  }
}
