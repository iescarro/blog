<?php

defined('BASEPATH') or exit('No direct script access allowed');

function post_teaser($content, $length = 300)
{
	$teaser = substr($content, 0, $length);
	if (strlen($content) > $length) {
		$teaser .= '...';
	}
	return $teaser;
}

function post_form($user_id)
{
	$obj = &get_instance();
	return [
		'user_id' => $user_id,
		'title' => $obj->input->post('title'),
		'content' => $obj->input->post('content'),

	];
}
