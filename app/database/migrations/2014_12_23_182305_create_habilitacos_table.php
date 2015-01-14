<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHabilitacosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habilitacos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('func_dados');
			$table->string('antropologia');
			$table->string('arte');
			$table->string('artes');
			$table->string('biologia');
			$table->string('ciencias');
			$table->string('ciencias_da_natureza');
			$table->string('ciencias_humanas');
			$table->string('ciencias_humanas_e_suas_tecnologias');
			$table->string('codigos_e_suas_tecnologias');
			$table->string('comunicacao_linguagem_leitura_e_producao_de_texto');
			$table->string('curriculo_e_avaliacao_na_educacao_infantil');
			$table->string('curriculo_e_avaliacao_nos_anos_iniciais_do_ensino_fundamental');
			$table->string('didatica');
			$table->string('didatica_da_arte');
			$table->string('didatica_da_geografia');
			$table->string('didatica_da_historia');
			$table->string('didatica_da_linguagem');
			$table->string('didatica_da_matematica');
			$table->string('didatica_das_ciencias');
			$table->string('didatica_geral');
			$table->string('disciplinas_voltadas_ao_atendimento_as_necessidades_educacionais');
			$table->string('educacao_artistica');
			$table->string('educacao_especial_e_inclusiva');
			$table->string('educacao_fisica');
			$table->string('educacao_infantil');
			$table->string('educacao_sexual');
			$table->string('ensino_da_educacao_fisica_escolar');
			$table->string('ensino_da_geografia');
			$table->string('ensino_da_historia');
			$table->string('ensino_da_lingua_portuguesa');
			$table->string('ensino_da_matematica');
			$table->string('ensino_das_artes_e_musica');
			$table->string('ensino_de_ciencias');
			$table->string('ensino_religioso');
			$table->string('estagio_supervisionado');
			$table->string('estagio_supervisionado_ii_educacao_infantil');
			$table->string('estagio_supervisionado_iii_ensino_fundamental');
			$table->string('estatist_aplic_educacao');
			$table->string('estatistica_aplicada_a_educacao');
			$table->string('filosofia');
			$table->string('fisica');
			$table->string('fundamentos_da_educacao');
			$table->string('fundamentos_socio_filosoficos');
			$table->string('geografia');
			$table->string('historia');
			$table->string('historia_da_educacao');
			$table->string('lingua_brasileira_de_sinais_libras');
			$table->string('lingua_estrangeira');
			$table->string('lingua_estrangeira_moderna_espanhol');
			$table->string('lingua_estrangeira_moderna_frances');
			$table->string('lingua_estrangeira_moderna_ingles');
			$table->string('lingua_portuguesa');
			$table->string('lingua_portuguesa_literatura');
			$table->string('linguagens');
			$table->string('literatura_infantil_e_contacao_de_historias');
			$table->string('matematica');
			$table->string('matematica_contextualizada');
			$table->string('matematica_e_suas_tecnologias');
			$table->string('metodologia_cientifica');
			$table->string('org_educ_nac_estrutura');
			$table->string('organizacao_e_funcionamento_do_sistema_de_ensino');
			$table->string('outras');
			$table->string('pratica_pedagogica');
			$table->string('psicologia');
			$table->string('psicologia_da_educacao');
			$table->string('psicologia_do_desenvolvimento');
			$table->string('quimica');
			$table->string('sociologia');
			$table->string('sociologia_da_educacao');
			$table->string('tecnica');
			$table->string('tecnologias_em_educacao');
			$table->string('trab_concl_curso_tcc');
			$table->string('trabalho_de_conclusao_de_curso');
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
		Schema::drop('habilitacos');
	}

}
