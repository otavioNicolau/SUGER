@extends('layouts.scaffold')

@section('main')

<h1>All Funcionais</h1>

<p>{{ link_to_route('funcionais.create', 'Add New Funcionai', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($funcionais->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Matricula</th>
				<th>Funcao</th>
				<th>Situacao_funcional</th>
				<th>Data_de_admissao</th>
				<th>Data_de_demissao</th>
				<th>Carga_horaria_semanal</th>
				<th>Final_do_contrato</th>
				<th>Registro</th>
				<th>Matricula_anterior</th>
				<th>Data_acesso_funcional</th>
				<th>Letra_numero</th>
				<th>Regime_juridico</th>
				<th>Motivo_contrato</th>
				<th>Regime_especial</th>
				<th>Concursado</th>
				<th>Concursado_zona_rural_especifico</th>
				<th>Data_de_entrada_na_escola</th>
				<th>Data_de_daida_da_escola</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($funcionais as $funcionai)
				<tr>
					<td>{{{ $funcionai->func_dados }}}</td>
					<td>{{{ $funcionai->matricula }}}</td>
					<td>{{{ $funcionai->funcao }}}</td>
					<td>{{{ $funcionai->situacao_funcional }}}</td>
					<td>{{{ $funcionai->data_de_admissao }}}</td>
					<td>{{{ $funcionai->data_de_demissao }}}</td>
					<td>{{{ $funcionai->carga_horaria_semanal }}}</td>
					<td>{{{ $funcionai->final_do_contrato }}}</td>
					<td>{{{ $funcionai->registro }}}</td>
					<td>{{{ $funcionai->matricula_anterior }}}</td>
					<td>{{{ $funcionai->data_acesso_funcional }}}</td>
					<td>{{{ $funcionai->letra_numero }}}</td>
					<td>{{{ $funcionai->regime_juridico }}}</td>
					<td>{{{ $funcionai->motivo_contrato }}}</td>
					<td>{{{ $funcionai->regime_especial }}}</td>
					<td>{{{ $funcionai->concursado }}}</td>
					<td>{{{ $funcionai->concursado_zona_rural_especifico }}}</td>
					<td>{{{ $funcionai->data_de_entrada_na_escola }}}</td>
					<td>{{{ $funcionai->data_de_daida_da_escola }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('funcionais.destroy', $funcionai->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('funcionais.edit', 'Edit', array($funcionai->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no funcionais
@endif

@stop
