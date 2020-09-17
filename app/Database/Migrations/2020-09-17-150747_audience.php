<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Audience extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,

			],

			'no_hp' => [
				'type'           => 'INT',
				'constraint' => 14

			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint' => '100'

			],
			'alamat' => [
				'type'           => 'TEXT',


			],
			'pekerjaan' => [
				'type'           => 'TEXT',


			],


			'created_date' => [
				'type'           => 'DATETIME'


			],
			'update_date' => [
				'type'           => 'DATETIME',

				'null'           => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_user', 'user', 'id');
		$this->forge->createTable('audience');
		//
		//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('audience');
		//
	}
}
