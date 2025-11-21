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

class Pages extends CI_Controller
{
	var $page_model;

	var $input;
	var $layout;
	var $session;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['html', 'url', 'form', 'blog/page']);
		$this->load->library(['form_validation', 'layout', 'session']);
		redirect_if(!$this->session->userdata('user_id'), 'auth/login');
		$this->load->model(['blog/page_model']);
		$this->load->library('layout');
		$this->layout->set('blog/layouts/admin');
	}

	function index()
	{
		$data['pages'] = $this->page_model->find_all();
		$this->layout->view('blog/pages/index', $data);
	}

	function create()
	{
		if ($this->input->post()) {
			$page = page_form();
			$this->page_model->save($page);
			redirect('blog/pages');
		}
		$this->layout->view('blog/pages/create');
	}

	function edit($id)
	{
		if ($this->input->post()) {
			$page = page_form();
			$this->page_model->update($page, $id);
			redirect('blog/pages');
		}
		$data['page'] = $this->page_model->read($id);
		$this->layout->view('blog/pages/edit', $data);
	}

	function delete($id)
	{
		$this->page_model->delete($id);
		redirect('blog/pages');
	}
}
