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
		'category_id' => $obj->input->post('category_id'),
		'title' => $obj->input->post('title'),
		'content' => $obj->input->post('content'),

	];
}
