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

class Post_view_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($post_view)
	{
		$this->db->insert('post_views', $post_view);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('post_views', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('post_views')->result();
	}

	function find_group_by_day()
	{
		$query = "
      select date(created_at) date, count(id) total
      from post_views
      group by date(created_at)";
		return $this->db->query($query)->result();
	}

	function update($post_view, $id)
	{
		$this->db->update('post_views', $post_view, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('post_views', ['id' => $id]);
	}
}
