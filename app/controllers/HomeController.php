<?php
class HomeController extends BaseController {
	





	public function search()
	{

		if($input = Input::all()){
			$nome = $input['buscar'];
			$dados = Dado::where('nome', 'LIKE', "%$nome%")->paginate(10);
			if(count($dados) == 0){
				$dados = Dado::where('cpf', 'LIKE', "%$nome%")->paginate(10);
			}

			return View::make('dados.index', compact('dados'));		
		}
		
	}



	public function doLogin(){
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required|alphaNum|min:3'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('login')
			->withErrors($validator)
			->withInput(Input::except('password'));
		} else {
			$userdata = array('email'     => Input::get('email'), 'password'  => Input::get('password'));
			if (Auth::attempt($userdata)) {
				return Redirect::intended('dados');
			} else {
				return Redirect::to('login');
			}
		}
	}
	
	public function showLogin(){
		return View::make('login');
	}
	public function doLogout(){
		Auth::logout();
		return Redirect::to('login');
	}
		
	public function showWelcome(){
			return View::make('hello');
		}
}