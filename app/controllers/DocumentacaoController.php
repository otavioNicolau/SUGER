<?php

class DocumentacaoController extends BaseController {

	/**
	 * Documentacao Repository
	 *
	 * @var Documentacao
	 */
	protected $documentacao;

	public function __construct(Documentacao $documentacao)
	{
		$this->documentacao = $documentacao;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$documentacaos = $this->documentacao->all();

		return View::make('documentacaos.index', compact('documentacaos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('documentacaos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Documentacao::$rules);

		if ($validation->passes())
		{
			$this->documentacao->create($input);

			return Redirect::route('documentacaos.show',[Session::get('id')]);
		}

		return Redirect::route('documentacaos.create')
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
		$documentacaos = Documentacao::where('func_dados', '=', $id)->get();

		if(count($documentacaos) == 0){
			return View::make('documentacaos.create');

		}else{
			return View::make('documentacaos.show', compact('documentacaos'));
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
		$documentacao = $this->documentacao->find($id);

		if (is_null($documentacao))
		{
			return Redirect::route('documentacaos.index');
		}

		return View::make('documentacaos.edit', compact('documentacao'));
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
		$validation = Validator::make($input, Documentacao::$rules);

		if ($validation->passes())
		{
			$documentacao = $this->documentacao->find($id);
			$documentacao->update($input);

			return Redirect::route('documentacaos.show', $id);
		}

		return Redirect::route('documentacaos.edit', $id)
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
		$this->documentacao->find($id)->delete();

		return Redirect::route('documentacaos.index');
	}

}
