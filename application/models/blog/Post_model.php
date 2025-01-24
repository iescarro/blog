<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($post)
	{
		$this->db->insert('posts', $post);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('posts', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('posts')->result();
	}

	function update($post, $id)
	{
		$this->db->update('posts', $post, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('posts', ['id' => $id]);
	}
}