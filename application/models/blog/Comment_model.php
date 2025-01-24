<?php

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
