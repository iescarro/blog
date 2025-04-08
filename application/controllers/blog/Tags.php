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

class Tags extends CI_Controller
{
  var $tag_model;

  var $input;
  var $layout;

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['html', 'url', 'form', 'tag']);
    $this->load->library(['form_validation', 'layout']);
    $this->load->model(['tag_model']);
    $this->layout->set('app');
  }

  function index()
  {
    $data['tags'] = $this->tag_model->find_all();
    $this->layout->view('tags/index', $data);
  }

  function create()
  {
    if ($this->input->post()) {
      $tag = tag_form();
      $this->tag_model->save($tag);
      redirect('tags');
    }
    $this->layout->view('tags/create');
  }

  function edit($id)
  {
    if ($this->input->post()) {
      $tag = tag_form();
      $this->tag_model->update($tag, $id);
      redirect('tags');
    }
    $data['tag'] = $this->tag_model->read($id);
    $this->layout->view('tags/edit', $data);
  }

  function delete($id)
  {
    $this->tag_model->delete($id);
    redirect('tags');
  }
}
