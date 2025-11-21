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

function blog_posts()
{
	$CI = &get_instance();
	$CI->load->model('blog/post_model');
	$posts = $CI->post_model->find_recent();
	foreach ($posts as $post) {
		blog_post($post);
	}
}

function blog_post($post)
{
	load_view('post', ['post' => $post]);
}

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
	$CI = &get_instance();
	return [
		'user_id' => $user_id,
		'category_id' => $CI->input->post('category_id'),
		'title' => $CI->input->post('title'),
		'content' => $CI->input->post('content'),

	];
}
