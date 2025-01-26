<?php

defined('BASEPATH') or exit('No direct script access allowed');

function category_form()
{
	$obj = &get_instance();
	return [
		'name' => $obj->input->post('name'),
		'slug' => $obj->input->post('slug'),
		'description' => $obj->input->post('description'),
		'created_at' => $obj->input->post('created_at'),
		'updated_at' => $obj->input->post('updated_at'),

	];
}