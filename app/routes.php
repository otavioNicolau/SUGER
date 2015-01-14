<?php
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));
Route::post('find', array('uses' => 'HomeController@search'));
Route::get('/', function(){
	return Redirect::guest('dados');
});
Route::group(array('before' => 'auth'), function(){
	
	Route::resource('diciplinas', 'DiciplinaController'); 
	
	Route::resource('enderecos', 'EnderecoController');
	
	Route::resource('superiors', 'SuperiorController'); 
	
	Route::resource('dados', 'DadoController'); 
	
	Route::resource('escolaridades', 'EscolaridadeController'); 
	
	Route::resource('funcionais', 'FuncionalController');  
	
	Route::resource('documentacaos', 'DocumentacaoController'); 
	
	Route::resource('habilitacos', 'HabilitacoController'); 
});