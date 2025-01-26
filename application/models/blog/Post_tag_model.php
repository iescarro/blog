<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post_tag_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($post_tag)
	{
		$this->db->insert('post_tags', $post_tag);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('post_tags', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('post_tags')->result();
	}

	function update($post_tag, $id)
	{
		$this->db->update('post_tags', $post_tag, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('post_tags', ['id' => $id]);
	}
}