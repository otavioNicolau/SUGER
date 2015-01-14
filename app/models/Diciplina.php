<?php

class Diciplina extends Eloquent {
	
	protected $guarded = array();
	protected $table = 'func_disciplinas';

	public static $rules = array(
		'disciplinas' => 'required'
	);
}
