<?php

class SuperiorController extends BaseController {

	/**
	 * Superior Repository
	 *
	 * @var Superior
	 */
	protected $superior;

	public function __construct(Superior $superior)
	{
		$this->superior = $superior;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$superiors = $this->superior->all();

		return View::make('superiors.index', compact('superiors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('superiors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Superior::$rules);

		if ($validation->passes())
		{
			$this->superior->create($input);

			return Redirect::route('superiors.show',[Session::get('id')]);
		}

		return Redirect::route('superiors.create')
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
		$superios = Superior::where('func_dados', '=', $id)->get();

		if(count($superios) == 0){
			return View::make('superiors.create');

		}else{
			return View::make('superiors.show', compact('superios'));
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
		$superior = $this->superior->find($id);

		if (is_null($superior))
		{
			return Redirect::route('superiors.index');
		}

		return View::make('superiors.edit', compact('superior'));
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
		$validation = Validator::make($input, Superior::$rules);

		if ($validation->passes())
		{
			$superior = $this->superior->find($id);
			$superior->update($input);

			return Redirect::route('superiors.show', $id);
		}

		return Redirect::route('superiors.edit', $id)
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
		$this->superior->find($id)->delete();

		return Redirect::route('superiors.index');
	}

}
