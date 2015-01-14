@extends('layouts.scaffold')

@section('main')

<h1>All Diciplinas</h1>

<p>{{ link_to_route('diciplinas.create', 'Add New Diciplina', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($diciplinas->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Programa_pedagogico</th>
				<th>Disciplinas</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($diciplinas as $diciplina)
				<tr>
					<td>{{{ $diciplina->func_dados }}}</td>
					<td>{{{ $diciplina->programa_pedagogico }}}</td>
					<td>{{{ $diciplina->disciplinas }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('diciplinas.destroy', $diciplina->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('diciplinas.edit', 'Edit', array($diciplina->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no diciplinas
@endif

@stop
