<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dados', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('nacionalidade');
			$table->string('pais_de_origem');
			$table->string('uf_de_nacionalidade');
			$table->string('naturalidade');
			$table->string('data_de_nascimento');
			$table->string('sexo');
			$table->string('estado_civil');
			$table->string('cor_raca');
			$table->string('cpf');
			$table->string('nome_mae');
			$table->string('nome_pai');
			$table->string('email_do_funcionario');
			$table->string('foto_perfil');
			$table->string('telefone');
			$table->string('celular');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dados');
	}

}
