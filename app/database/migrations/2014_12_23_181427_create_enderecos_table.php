<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('func_dados');
			$table->string('logradouro');
			$table->string('numero');
			$table->string('complemento');
			$table->string('bairro');
			$table->string('uf');
			$table->string('municipio');
			$table->string('distrito');
			$table->string('cep');
			$table->string('zona_residencial');
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
		Schema::drop('enderecos');
	}

}
