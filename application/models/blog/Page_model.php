<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($page)
	{
		$this->db->insert('pages', $page);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('pages', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('pages')->result();
	}

	function update($page, $id)
	{
		$this->db->update('pages', $page, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('pages', ['id' => $id]);
	}
}