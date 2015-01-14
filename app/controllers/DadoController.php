<?php

class DadoController extends BaseController {


	protected $dado;

	public function __construct(Dado $dado)
	{
		$this->dado = $dado;
	}


	public function index()
	{
		$dados = Dado::paginate(10);

		return View::make('dados.index', compact('dados'));
	}


	public function create()
	{
		return View::make('dados.create');
	}

	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Dado::$rules);

		if ($validation->passes())
		{


			if($file = Input::file('foto_perfil')){
				$cod = rand(5,1000);
				$destinationPath = 'upload/';
				$path = $destinationPath.'/'.$cod.'_'.$file->getClientOriginalName();
				$filename = $cod.'_'.$file->getClientOriginalName();
				$file = Image::make(Input::file('foto_perfil'))->resize(300, 200)->save($path);
				$input['foto_perfil'] = $filename;
	
			}
			if($file = Input::file('foto_perfil') == false){
				$input['foto_perfil'] = 'images.jpg';
			}

			$this->dado->create($input);
			

			return Redirect::route('dados.show',[Session::get('id')]);
		}

		return Redirect::route('dados.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	public function show($id)
	{
		$dado = $this->dado->findOrFail($id);

		return View::make('dados.show', compact('dado'));
	}


	public function edit($id)
	{
		$dado = $this->dado->find($id);

		if (is_null($dado))
		{
			return Redirect::route('dados.index');
		}

		return View::make('dados.edit', compact('dado'));
	}


	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Dado::$rules);
		$dado_old = $this->dado->find($id);
		if ($validation->passes())
		{

			if($file = Input::file('foto_perfil')){	
				$destinationPath = 'public/upload';	
				$cod = rand(5,1000);
				$path = $destinationPath.'/'.$cod.'_'.$file->getClientOriginalName();
				$filename = $cod.'_'.$file->getClientOriginalName();
				$input['foto_perfil'] = $filename;
				$file = Image::make(Input::file('foto_perfil'))->resize(300, 200)->save($path);
				
				
				
				if($dado_old['foto_perfil'] != 'images.jpg'){				
					$file_old = $dado_old['foto_perfil'];
					if (file_exists($destinationPath.'/'.$dado_old['foto_perfil'])) {
						unlink($destinationPath.'/'.$file_old);
					}
				}	
			}
			if($input['foto_perfil'] == null){
				unset($input['foto_perfil']);
			}

			$dado_old->update($input);
			return Redirect::route('dados.show', $id);

		}

		return Redirect::route('dados.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}


	public function destroy($id)
	{
		$this->dado->find($id)->documentos()->delete();
		$this->dado->find($id)->funcional()->delete();
		$this->dado->find($id)->habilitaco()->delete();
		$this->dado->find($id)->escolaridade()->delete();
		$this->dado->find($id)->superior()->delete();
		$this->dado->find($id)->diciplina()->delete();
		$this->dado->find($id)->endereco()->delete();
		$this->dado->find($id)->delete();

		return Redirect::route('dados.index');
	}

}
