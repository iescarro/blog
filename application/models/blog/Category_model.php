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

class Category_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($category)
	{
		$this->db->set('created_at', now());
		$this->db->insert('categories', $category);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('categories', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('categories')->result();
	}

	function update($category, $id)
	{
		$this->db->set('updated_at', now());
		$this->db->update('categories', $category, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('categories', ['id' => $id]);
	}
}
