@extends('layouts.scaffold')

@section('main')

<h1>All Superiors</h1>

<p>{{ link_to_route('superiors.create', 'Add New Superior', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($superiors->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Classe_do_curso</th>
				<th>Nome_do_curso</th>
				<th>Instituicao</th>
				<th>Situacao_do_curso_superior</th>
				<th>Ano_de_conclusao</th>
				<th>Formacao_complementar_pedagogica</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($superiors as $superior)
				<tr>
					<td>{{{ $superior->func_dados }}}</td>
					<td>{{{ $superior->classe_do_curso }}}</td>
					<td>{{{ $superior->nome_do_curso }}}</td>
					<td>{{{ $superior->instituicao }}}</td>
					<td>{{{ $superior->situacao_do_curso_superior }}}</td>
					<td>{{{ $superior->ano_de_conclusao }}}</td>
					<td>{{{ $superior->formacao_complementar_pedagogica }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('superiors.destroy', $superior->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('superiors.edit', 'Edit', array($superior->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no superiors
@endif

@stop
