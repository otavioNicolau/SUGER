<?php

class Documentacao extends Eloquent {
	protected $guarded = array();
	protected $table = 'func_documentacao';
	public static $rules = array(
		'func_dados' => 'required',
		'ind_numero' => 'required',
		'ind_orgao_expedidor' => 'required',
		'ind_uf' => 'required',
		'ind_data_de_emissao' => 'required',
		'cer_tipo_de_certidao' => 'required',
		'cer_termo' => 'required',
		'cer_folha' => 'required',
		'cer_livro' => 'required',
		'cer_nome_do_cartorio' => 'required',
		'cer_uf' => 'required',
		'cer_data_de_emissao' => 'required',
		'tit_numero_da_inscricao' => 'required',
		'tit_zona' => 'required',
		'tit_secao' => 'required',
		'cart_serie' => 'required',
		'cart_numero' => 'required',
		'cart_uf' => 'required'
	);
}
