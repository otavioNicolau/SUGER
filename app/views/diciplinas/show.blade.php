@extends('layouts.scaffold')
@section('main')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header texto">{{Session::get('nome')}} <small>DICIPLINAS</small>
		{{ link_to_route('diciplinas.create', 'ADICIONAR', null, array('class' => 'btn btn-primary')) }}
		</h1>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Disciplinas</th>
				<th>Inicio</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($diciplinas as $diciplina)
			<tr>
				<td>{{{ $diciplina->disciplinas }}}</td>
				<td>{{{ $diciplina->created_at }}}</td>
				<td>
					{{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('diciplinas.destroy', $diciplina->id))) }}
					{{ Form::submit('EXCLUIR', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
					{{ link_to_route('diciplinas.edit', 'ATUALIZAR', array($diciplina->id), array('class' => 'btn btn-primary')) }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop