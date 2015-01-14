<?php
class Dado extends Eloquent {
	protected $guarded = array();
	protected $table = 'func_dados';
	public static $rules = array(
		'nome' => 'required',
		'pais_de_origem' => 'required',
		'uf_de_nacionalidade' => 'required',
		'naturalidade' => 'required',
		'data_de_nascimento' => 'required',
		'sexo' => 'required',
		'estado_civil' => 'required',
		'cor_raca' => 'required',
		'cpf' => 'required',
		'nome_mae' => 'required',
		'nome_pai' => 'required',
		'email_do_funcionario' => 'required',
		//'foto_perfil' => 'required',
		'telefone' => 'required',
		'celular' => 'required'
	);

	public function documentos(){
		return $this->hasOne('Documentacao', 'func_dados');
	}
	public function funcional(){
		return $this->hasOne('Funcional', 'func_dados');
	}
	public function habilitaco(){
		return $this->hasOne('Habilitaco', 'func_dados');
	}
	public function escolaridade(){
		return $this->hasOne('Escolaridade', 'func_dados');
	} 
	public function superior(){
		return $this->hasOne('Superior', 'func_dados');
	}
	public function diciplina(){
		return $this->hasMany('Diciplina', 'func_dados');
	}
	public function endereco(){
		return $this->hasOne('Endereco', 'func_dados');
	}

}