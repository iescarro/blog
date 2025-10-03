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

class Post_views extends CI_Controller
{
	var $post_view_model;

	var $input;
	var $layout;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['html', 'url', 'form', 'post_view']);
		$this->load->library(['form_validation', 'layout']);
		$this->load->model(['post_view_model']);
		$this->layout->set('layouts/app');
	}

	function index()
	{
		$data['post_views'] = $this->post_view_model->find_all();
		$this->layout->view('post_views/index', $data);
	}

	function create()
	{
		if ($this->input->post()) {
			$post_view = post_view_form();
			$this->post_view_model->save($post_view);
			redirect('post_views');
		}
		$this->layout->view('post_views/create');
	}

	function edit($id)
	{
		if ($this->input->post()) {
			$post_view = post_view_form();
			$this->post_view_model->update($post_view, $id);
			redirect('post_views');
		}
		$data['post_view'] = $this->post_view_model->read($id);
		$this->layout->view('post_views/edit', $data);
	}

	function delete($id)
	{
		$this->post_view_model->delete($id);
		redirect('post_views');
	}
}
