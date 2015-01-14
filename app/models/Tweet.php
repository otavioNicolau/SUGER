<?php

class Tweet extends Eloquent {
	protected $guarded = array();
	protected $table = 'func_dados';
	public static $rules = array(
		'author' => 'required',
		'body' => 'required'
	);
}
