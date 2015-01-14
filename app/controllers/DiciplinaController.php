<?php
class DiciplinaController extends BaseController {

	protected $diciplina;

	public function __construct(Diciplina $diciplina){
		$this->diciplina = $diciplina;
	}
	public function index(){
		$diciplinas = $this->diciplina->all();
		return View::make('diciplinas.index', compact('diciplinas'));
	}
	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		return View::make('diciplinas.create');
	}
	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Diciplina::$rules);
		if ($validation->passes())
			{
			$this->diciplina->create($input);
			return Redirect::route('diciplinas.show',[Session::get('id')]);
		}
		return Redirect::route('diciplinas.create')
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
		$diciplinas = Diciplina::where('func_dados', '=', $id)->get();
		if(count($diciplinas) == 0){
			return View::make('diciplinas.create');
		}else{
			return View::make('diciplinas.show', compact('diciplinas'));
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
		$diciplina = $this->diciplina->find($id);
		if (is_null($diciplina))
		{
			return Redirect::route('diciplinas.index');
		}
		return View::make('diciplinas.edit', compact('diciplina'));
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
		$validation = Validator::make($input, Diciplina::$rules);
		if ($validation->passes())
		{
			$diciplina = $this->diciplina->find($id);
			$diciplina->update($input);
			return Redirect::route('diciplinas.show', $id);
		}
		return Redirect::route('diciplinas.edit', $id)
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
		$this->diciplina->find($id)->delete();
		return Redirect::route('diciplinas.index');
	}
}