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

function tag_form()
{
	$obj = &get_instance();
	return [
		'name' => $obj->input->post('name'),
		'slug' => $obj->input->post('slug'),
		'created_at' => $obj->input->post('created_at'),

	];
}
