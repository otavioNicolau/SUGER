<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentacaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentacaos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('func_dados');
			$table->string('ind_numero');
			$table->string('ind_orgao_expedidor');
			$table->string('ind_uf');
			$table->string('ind_data_de_emissao');
			$table->string('cer_tipo_de_certidao');
			$table->string('cer_termo');
			$table->string('cer_folha');
			$table->string('cer_livro');
			$table->string('cer_nome_do_cartorio');
			$table->string('cer_uf');
			$table->string('cer_data_de_emissao');
			$table->string('tit_numero_da_inscricao');
			$table->string('tit_zona');
			$table->string('tit_secao');
			$table->string('cart_serie');
			$table->string('cart_numero');
			$table->string('cart_uf');
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
		Schema::drop('documentacaos');
	}

}
