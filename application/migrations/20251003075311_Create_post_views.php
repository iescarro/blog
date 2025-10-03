<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_post_views extends CI_Migration
{
	function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'post_id' => array(
				'type' => 'integer',
				'null' => TRUE,
			),
			'ip_address' => array(
				'type' => 'varchar',
				'constraint' => 255,
				'null' => TRUE,
			),
			'created_at' => array(
				'type' => 'datetime',
				'null' => TRUE,
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('post_views');
	}

	function down()
	{
		$this->dbforge->drop_table('post_views');
	}
}
