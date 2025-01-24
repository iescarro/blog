<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Comments extends CI_Controller
{
	var $comment_model;

	var $input;
	var $layout;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['html', 'url', 'form', 'comment']);
		$this->load->library(['form_validation', 'layout']);
		$this->load->model(['comment_model']);
		$this->layout->set('app');
	}

	function index()
	{
		$data['comments'] = $this->comment_model->find_all();
		$this->layout->view('comments/index', $data);
	}

	function create()
	{
		if ($this->input->post()) {
			$comment = comment_form();
			$this->comment_model->save($comment);
      redirect('comments');
		}
		$this->layout->view('comments/create');
	}

	function edit($id)
	{
		if ($this->input->post()) {
			$comment = comment_form();
			$this->comment_model->update($comment, $id);
			redirect('comments');
		}
		$data['comment'] = $this->comment_model->read($id);
		$this->layout->view('comments/edit', $data);
	}

	function delete($id)
	{
		$this->comment_model->delete($id);
		redirect('comments');
	}
}