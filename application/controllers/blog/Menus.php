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

class Menus extends CI_Controller
{
	var $menu_model;

	var $input;
	var $layout;
	var $session;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['html', 'url', 'form', 'blog/menu']);
		$this->load->library(['form_validation', 'layout', 'session']);
		redirect_if(!$this->session->userdata('user_id'), 'auth/login');

		$this->load->model(['blog/menu_model']);
		$this->load->library('layout');
		$this->layout->set('blog/layouts/admin');
	}

	function index()
	{
		$data['menus'] = $this->menu_model->find_all();
		$this->layout->view('blog/menus/index', $data);
	}

	function create()
	{
		if ($this->input->post()) {
			$menu = menu_form();
			$this->menu_model->save($menu);
			redirect('blog/menus');
		}
		$this->layout->view('blog/menus/create');
	}

	function edit($id)
	{
		if ($this->input->post()) {
			$menu = menu_form();
			$this->menu_model->update($menu, $id);
			redirect('blog/menus');
		}
		$data['menu'] = $this->menu_model->read($id);
		$this->layout->view('blog/menus/edit', $data);
	}

	function delete($id)
	{
		$this->menu_model->delete($id);
		redirect('blog/menus');
	}
}
