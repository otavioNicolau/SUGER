<?php
class EscolaridadeController extends BaseController {
	/**
	* Escolaridade Repository
	*
	* @var Escolaridade
	*/
	protected $escolaridade;
	public function __construct(Escolaridade $escolaridade)
	{
		$this->escolaridade = $escolaridade;
	}
	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$escolaridades = $this->escolaridade->all();
		return View::make('escolaridades.index', compact('escolaridades'));
	}
	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		return View::make('escolaridades.create');
	}
	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Escolaridade::$rules);
		if ($validation->passes())
		{
			$this->escolaridade->create($input);
			return Redirect::route('escolaridades.show',[Session::get('id')]);
		}
		return Redirect::route('escolaridades.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}
	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
		$escolaridades = Escolaridade::where('func_dados', '=', $id)->get();


		if(count($escolaridades) == 0){
			return View::make('escolaridades.create');
		}else{
			return View::make('escolaridades.show', compact('escolaridades'));
		}
		
	}
	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit($id)
	{
		$escolaridade = $this->escolaridade->find($id);
		if (is_null($escolaridade))
		{
			return Redirect::route('escolaridades.index');
		}
		return View::make('escolaridades.edit', compact('escolaridade'));
	}
	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Escolaridade::$rules);
		if ($validation->passes())
		{
			$escolaridade = $this->escolaridade->find($id);
			$escolaridade->update($input);
			return Redirect::route('escolaridades.show', $id);
		}
		return Redirect::route('escolaridades.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}
	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
		$this->escolaridade->find($id)->delete();
		return Redirect::route('escolaridades.index');
	}
}