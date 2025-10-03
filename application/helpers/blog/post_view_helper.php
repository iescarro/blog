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

function post_views_to_column_chart_data($post_views)
{
	$categories = array();
	$data = array();
	foreach ($post_views as $post_view) {
		$categories[] = date('M d', strtotime($post_view->date));
		$data[] = (int)$post_view->total;
	}
	return array($categories, $data);
}

function post_view_form($post_id)
{
	$obj = &get_instance();
	return array(
		'post_id' => $post_id,
		'ip_address' => $obj->input->ip_address(),
		'created_at' => now(),
	);
}
