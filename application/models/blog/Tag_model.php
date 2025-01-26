<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tag_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($tag)
	{
		$this->db->insert('tags', $tag);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('tags', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('tags')->result();
	}

	function update($tag, $id)
	{
		$this->db->update('tags', $tag, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('tags', ['id' => $id]);
	}
}