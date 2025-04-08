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

function comment_form()
{
	$CI = &get_instance();
	return [
		'title' => $CI->input->post('title'),
		'comment' => $CI->input->post('comment'),

	];
}
