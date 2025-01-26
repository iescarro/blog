<?php

defined('BASEPATH') or exit('No direct script access allowed');

function tag_form()
{
	$obj = &get_instance();
	return [
		'name' => $obj->input->post('name'),
		'slug' => $obj->input->post('slug'),
		'created_at' => $obj->input->post('created_at'),

	];
}