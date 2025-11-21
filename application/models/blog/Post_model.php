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

class Post_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($post)
	{
		$this->db->set('created_at', now());
		$this->db->set('updated_at', now());
		$this->db->insert('posts', $post);
		return $this->db->insert_id();
	}

	function read($id)
	{
		$this->db->select('p.*');
		$this->db->select('u.name author');
		$this->db->select('c.name category_name');
		$this->db->join('categories c', 'c.id = p.category_id', 'left outer');
		$this->db->join('users u', 'u.id = p.user_id');
		return $this->db->get_where('posts p', ['p.id' => $id])->row();
	}

	function find_all()
	{
		$this->db->select('p.*');
		$this->db->select('u.name author');
		$this->db->select('c.name category_name');
		$this->db->select("(select count(c.id) from comments c where c.post_id = p.id) comments_count");
		$this->db->join('categories c', 'c.id = p.category_id', 'left outer');
		$this->db->join('users u', 'u.id = p.user_id');
		$this->db->order_by('p.created_at', 'desc');
		return $this->db->get('posts p')->result();
	}

	function find_recent($limit = 5)
	{
		$this->db->select('p.*');
		$this->db->select('u.name author');
		$this->db->select('c.name category_name');
		$this->db->select("(select count(c.id) from comments c where c.post_id = p.id) comments_count");
		$this->db->join('categories c', 'c.id = p.category_id', 'left outer');
		$this->db->join('users u', 'u.id = p.user_id');
		$this->db->order_by('p.created_at', 'desc');
		$this->db->limit($limit);
		return $this->db->get('posts p')->result();
	}


	function find_by_category($category_id)
	{
		$this->db->select('p.*');
		$this->db->select('u.name author');
		$this->db->select('c.name category_name');
		$this->db->select("(select count(c.id) from comments c where c.post_id = p.id) comments_count");
		$this->db->join('categories c', 'c.id = p.category_id', 'left outer');
		$this->db->join('users u', 'u.id = p.user_id');
		$this->db->where('p.category_id', $category_id);
		return $this->db->get('posts p')->result();
	}

	function update($post, $id)
	{
		$this->db->set('updated_at', now());
		$this->db->update('posts', $post, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('posts', ['id' => $id]);
	}
}
