<?php

defined('BASEPATH') or exit('No direct script access allowed');

function menu_form()
{
	$obj = &get_instance();
	return [
		'name' => $obj->input->post('name'),
		'url' => $obj->input->post('url'),
		'sort_order' => $obj->input->post('sort_order'),

	];
}