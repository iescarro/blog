<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{
	var $post_model;

	var $input;
	var $layout;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['html', 'url', 'form', 'post']);
		$this->load->model('blog/post_model');
		$this->load->library('form_validation');
		$this->load->library('layout');
		$this->layout->set('layouts/app');
	}

	function index()
	{
		$data['posts'] = $this->post_model->find_all();
		$this->layout->view('blog/posts/index', $data);
	}

	function create()
	{
		if ($this->input->post()) {
			$post = post_form();
			$this->post_model->save($post);
			redirect('blog/posts');
		}
		$this->layout->view('blog/posts/create');
	}

	function edit($id)
	{
		if ($this->input->post()) {
			$post = post_form();
			$this->post_model->update($post, $id);
			redirect('blog/posts');
		}
		$data['post'] = $this->post_model->read($id);
		$this->layout->view('blog/posts/edit', $data);
	}

	function delete($id)
	{
		$this->post_model->delete($id);
		redirect('blog/posts');
	}
}
