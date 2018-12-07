<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* This basic migration has been auto-generated by the Gas ORM */

class Migration_coords extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'coords_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'lat' => array(
				'type' => 'FLOAT',
				'constraint' => 0,
			),
			'lon' => array(
				'type' => 'FLOAT',
				'constraint' => 0,
			),
		));

		$this->dbforge->add_key('coords_id', TRUE);

		$this->dbforge->create_table('coords', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('coords');
	}
}