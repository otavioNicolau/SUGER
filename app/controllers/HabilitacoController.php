<?php

class HabilitacoController extends BaseController {

	/**
	 * Habilitaco Repository
	 *
	 * @var Habilitaco
	 */
	protected $habilitaco;

	public function __construct(Habilitaco $habilitaco)
	{
		$this->habilitaco = $habilitaco;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$habilitacos = $this->habilitaco->all();

		return View::make('habilitacos.index', compact('habilitacos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('habilitacos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Habilitaco::$rules);

		if ($validation->passes())
		{
			$this->habilitaco->create($input);

			return Redirect::route('habilitacos.show',[Session::get('id')]);
		}

		return Redirect::route('habilitacos.create')
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
		$habilitacoes = Habilitaco::where('func_dados', '=', $id)->get();

		if(count($habilitacoes) == 0){

			return View::make('habilitacos.create');

		}else{
			return View::make('habilitacos.show', compact('habilitacoes'));
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
		$habilitaco = $this->habilitaco->find($id);

		if (is_null($habilitaco))
		{
			return Redirect::route('habilitacos.index');
		}

		return View::make('habilitacos.edit', compact('habilitaco'));
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
		$validation = Validator::make($input, Habilitaco::$rules);

		if ($validation->passes())
		{
			$habilitaco = $this->habilitaco->find($id);
			$habilitaco->update($input);

			return Redirect::route('habilitacos.show', $id);
		}

		return Redirect::route('habilitacos.edit', $id)
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
		$this->habilitaco->find($id)->delete();

		return Redirect::route('habilitacos.index');
	}

}
