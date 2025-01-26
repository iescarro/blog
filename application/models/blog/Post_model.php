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
		$this->db->set('created_at', now());
		$this->db->set('updated_at', now());
		$this->db->insert('posts', $post);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('posts', ['id' => $id])->row();
	}

	function find_all()
	{
		$this->db->select('p.*, u.name author');
		$this->db->select("(select count(c.id) from comments c where c.post_id = p.id) comments_count");
		$this->db->join('users u', 'u.id = p.user_id');
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
