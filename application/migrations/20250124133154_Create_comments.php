<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_comments extends CI_Migration
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
				'type' => 'INT',
				'null' => TRUE,
			),
			'user_id' => array(
				'type' => 'INT',
				'null' => TRUE,
			),
			'title' => array(
				'type' => 'varchar',
				'constraint' => 255,
				'null' => TRUE,
			),
			'content' => array(
				'type' => 'text',
				'null' => TRUE,
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('comments');
	}

	function down()
	{
		$this->dbforge->drop_table('comments');
	}
}
