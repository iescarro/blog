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

class Comment_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($comment)
	{
		$this->db->insert('comments', $comment);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('comments', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('comments')->result();
	}

	function update($comment, $id)
	{
		$this->db->update('comments', $comment, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('comments', ['id' => $id]);
	}
}
