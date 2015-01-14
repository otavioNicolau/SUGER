@extends('layouts.scaffold')

@section('main')

<h1>All Habilitacos</h1>

<p>{{ link_to_route('habilitacos.create', 'Add New Habilitaco', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($habilitacos->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Antropologia</th>
				<th>Trabalho_de_conclusao_de_curso</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($habilitacos as $habilitaco)
				<tr>
					<td>{{{ $habilitaco->func_dados }}}</td>
	<td>{{{ $habilitaco->trabalho_de_conclusao_de_curso }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('habilitacos.destroy', $habilitaco->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('habilitacos.edit', 'Edit', array($habilitaco->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no habilitacos
@endif

@stop
