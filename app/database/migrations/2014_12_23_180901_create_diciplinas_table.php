<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiciplinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diciplinas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('func_dados');
			$table->string('programa_pedagogico');
			$table->string('disciplinas');
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
		Schema::drop('diciplinas');
	}

}
