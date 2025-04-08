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

function categories_for_dropdown($categories)
{
	$data = [];
	foreach ($categories as $category) {
		$data[$category->id] = $category->name;
	}
	return $data;
}

function category_form()
{
	$obj = &get_instance();
	return [
		'name' => $obj->input->post('name'),
		'slug' => $obj->input->post('slug'),
		'description' => $obj->input->post('description'),

	];
}
