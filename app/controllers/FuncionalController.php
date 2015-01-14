<?php

class FuncionalController extends BaseController {

	/**
	 * Funcional Repository
	 *
	 * @var Funcional
	 */
	protected $funcional;

	public function __construct(Funcional $funcional)
	{
		$this->funcional = $funcional;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$funcionais = $this->funcional->all();

		return View::make('funcionais.index', compact('funcionais'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('funcionais.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Funcional::$rules);

		if ($validation->passes())
		{
			$this->funcional->create($input);

			return Redirect::route('funcionais.show',[Session::get('id')]);
		}

		return Redirect::route('funcionais.create')
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
		$funcionais = Funcional::where('func_dados', '=', $id)->get();
		if(count($funcionais) == 0){

			return View::make('funcionais.create');

		}else{
			return View::make('funcionais.show', compact('funcionais'));
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
		$funcional = $this->funcional->find($id);

		if (is_null($funcional))
		{
			return Redirect::route('funcionais.index');
		}

		return View::make('funcionais.edit', compact('funcional'));
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
		$validation = Validator::make($input, Funcional::$rules);

		if ($validation->passes())
		{
			$funcional = $this->funcional->find($id);
			$funcional->update($input);

			return Redirect::route('funcionais.show', $id);
		}

		return Redirect::route('funcionais.edit', $id)
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
		$this->funcional->find($id)->delete();

		return Redirect::route('funcionais.index');
	}

}
