<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function save($menu)
	{
		$this->db->insert('menus', $menu);
		return $this->db->insert_id();
	}

	function read($id)
	{
		return $this->db->get_where('menus', ['id' => $id])->row();
	}

	function find_all()
	{
		return $this->db->get('menus')->result();
	}

	function update($menu, $id)
	{
		$this->db->update('menus', $menu, ['id' => $id]);
	}

	function delete($id)
	{
		$this->db->delete('menus', ['id' => $id]);
	}
}