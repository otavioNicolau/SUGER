<?php
class EnderecoController extends BaseController {

	protected $endereco;
	public function __construct(Endereco $endereco)
	{
		$this->endereco = $endereco;
	}

	public function index()
	{
		$enderecos = $this->endereco->all();
		return View::make('enderecos.index', compact('enderecos'));
	}

	public function create()
	{
		return View::make('enderecos.create');
	}

	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Endereco::$rules);
		if ($validation->passes())
		{
			$this->endereco->create($input);
			return Redirect::route('enderecos.show',[Session::get('id')]);
		}
		return Redirect::route('enderecos.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	public function show($id)
	{
		$enderecos = Endereco::where('func_dados', '=', $id)->get();

		if(count($enderecos) == 0){
			return View::make('enderecos.create');
		}else{
			return View::make('enderecos.show', compact('enderecos'));
		}
	}

	public function edit($id)
	{
		$endereco = $this->endereco->find($id);
		if (is_null($endereco))
		{
			return Redirect::route('enderecos.index');
		}
		return View::make('enderecos.edit', compact('endereco'));
	}

	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Endereco::$rules);
		if ($validation->passes())
		{
			$endereco = $this->endereco->find($id);
			$endereco->update($input);
			return Redirect::route('enderecos.show', $id);
		}
		return Redirect::route('enderecos.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	public function destroy($id)
	{
		$this->endereco->find($id)->delete();
		return Redirect::route('enderecos.index');
	}
}