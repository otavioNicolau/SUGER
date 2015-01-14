<?php

class Superior extends Eloquent {
	protected $guarded = array();
	protected $table = 'func_formacao_superior';
	public static $rules = array(
		'classe_do_curso' => 'required',
		'nome_do_curso' => 'required',
		'instituicao' => 'required',
		'situacao_do_curso_superior' => 'required',
		'ano_de_conclusao' => 'required',
	);
}
