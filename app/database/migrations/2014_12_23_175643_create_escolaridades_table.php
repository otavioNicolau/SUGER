<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscolaridadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escolaridades', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('func_dados')->nullable();
			$table->integer('especifico_para_creche')->nullable();
			$table->integer('especifico_para_pre_escola')->nullable();
			$table->integer('especifico_para_educacao_especial_modalidade_substitutiva')->nullable();
			$table->integer('especifico_para_educacao_indigena')->nullable();
			$table->integer('intercultural_diversidade')->nullable();
			$table->integer('especifico_para_os_anos_iniciais_do_ensino_fundamental')->nullable();
			$table->integer('especifico_para_os_anos_finais_do_ensino_fundamental')->nullable();
			$table->integer('especifico_para_ensino_medio')->nullable();
			$table->integer('especifico_para_educacao_de_jovens_e_adultos')->nullable();
			$table->integer('especifico_para_educacao_do_campo')->nullable();
			$table->integer('fundamental_incompleto')->nullable();
			$table->integer('fundamental_completo')->nullable();
			$table->integer('ensino_medio_completo')->nullable();
			$table->integer('ensino_medio_incompleto')->nullable();
			$table->integer('superior_completo_incompleto')->nullable();
			$table->integer('superior_completo_completo')->nullable();
			$table->integer('especificacao')->nullable();
			$table->integer('mestrado')->nullable();
			$table->integer('doutorado')->nullable();
			$table->integer('especifico_para_educacao_ambiental')->nullable();
			$table->integer('especifico_para_educacao_em_direitos_humanos')->nullable();
			$table->integer('genero_e_diversidade_sexual')->nullable();
			$table->integer('direitos_da_crianca_e_do_adolecente')->nullable();
			$table->integer('ed_rela_etnicorraciais_historia_cult_afro_bra_africana')->nullable();
			$table->integer('outros')->nullable();
			$table->integer('nenhum_curso_adicional')->nullable();
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
		Schema::drop('escolaridades');
	}

}
