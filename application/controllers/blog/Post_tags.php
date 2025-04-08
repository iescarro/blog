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

class Post_tags extends CI_Controller
{
  var $post_tag_model;

  var $input;
  var $layout;

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['html', 'url', 'form', 'post_tag']);
    $this->load->library(['form_validation', 'layout']);
    $this->load->model(['post_tag_model']);
    $this->layout->set('app');
  }

  function index()
  {
    $data['post_tags'] = $this->post_tag_model->find_all();
    $this->layout->view('post_tags/index', $data);
  }

  function create()
  {
    if ($this->input->post()) {
      $post_tag = post_tag_form();
      $this->post_tag_model->save($post_tag);
      redirect('post_tags');
    }
    $this->layout->view('post_tags/create');
  }

  function edit($id)
  {
    if ($this->input->post()) {
      $post_tag = post_tag_form();
      $this->post_tag_model->update($post_tag, $id);
      redirect('post_tags');
    }
    $data['post_tag'] = $this->post_tag_model->read($id);
    $this->layout->view('post_tags/edit', $data);
  }

  function delete($id)
  {
    $this->post_tag_model->delete($id);
    redirect('post_tags');
  }
}
