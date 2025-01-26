<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($category)
	{
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
		$this->db->update('categories', $category, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('categories', ['id' => $id]);
	}
}