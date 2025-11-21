<?php

defined('BASEPATH') or exit('No direct script access allowed');

function page_form()
{
	$obj = &get_instance();
	return [
		'title' => $obj->input->post('title'),
		'content' => $obj->input->post('content'),
		'created_at' => $obj->input->post('created_at'),

	];
}