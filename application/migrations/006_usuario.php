<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* This basic migration has been auto-generated by the Gas ORM */

class Migration_usuario extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'usuario_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'nombre' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
			),
		));

		$this->dbforge->add_key('usuario_id', TRUE);

		$this->dbforge->create_table('usuario', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('usuario');
	}
}