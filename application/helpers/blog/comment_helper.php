<?php

defined('BASEPATH') or exit('No direct script access allowed');

function comment_form()
{
	$CI = &get_instance();
	return [
		'title' => $CI->input->post('title'),
		'comment' => $CI->input->post('comment'),

	];
}
