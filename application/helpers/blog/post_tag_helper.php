<?php

defined('BASEPATH') or exit('No direct script access allowed');

function post_tag_form()
{
	$obj = &get_instance();
	return [
		'post_id' => $obj->input->post('post_id'),
		'tag_id' => $obj->input->post('tag_id'),

	];
}