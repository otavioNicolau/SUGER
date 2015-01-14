<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionais', function(Blueprint $table) {
			$table->increments('id');
			$table->string('func_dados');
			$table->string('matricula');
			$table->string('funcao');
			$table->string('situacao_funcional');
			$table->string('data_de_admissao');
			$table->string('data_de_demissao');
			$table->string('carga_horaria_semanal');
			$table->string('final_do_contrato');
			$table->string('registro');
			$table->string('matricula_anterior');
			$table->string('data_acesso_funcional');
			$table->string('letra_numero');
			$table->string('regime_juridico');
			$table->string('motivo_contrato');
			$table->string('regime_especial');
			$table->string('concursado');
			$table->string('concursado_zona_rural_especifico');
			$table->string('data_de_entrada_na_escola');
			$table->string('data_de_daida_da_escola');
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
		Schema::drop('funcionais');
	}

}
