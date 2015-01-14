<?php

class Endereco extends Eloquent {
	protected $guarded = array();

	protected $table = 'func_enderecos';

	public static $rules = array(
		'func_dados' => 'required',
		'logradouro' => 'required',
		'numero' => 'required',
		'complemento' => 'required',
		'bairro' => 'required',
		'uf' => 'required',
		'municipio' => 'required',
		'distrito' => 'required',
		'cep' => 'required',
		'zona_residencial' => 'required'
	);
}
