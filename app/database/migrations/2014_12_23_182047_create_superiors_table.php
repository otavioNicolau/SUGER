<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuperiorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('superiors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('func_dados');
			$table->string('classe_do_curso');
			$table->string('nome_do_curso');
			$table->string('instituicao');
			$table->string('situacao_do_curso_superior');
			$table->string('ano_de_conclusao');
			$table->string('formacao_complementar_pedagogica');
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
		Schema::drop('superiors');
	}

}
