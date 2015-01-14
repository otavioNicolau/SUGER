@extends('layouts.scaffold')

@section('main')

<h1>All Escolaridades</h1>

<p>{{ link_to_route('escolaridades.create', 'Add New Escolaridade', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($escolaridades->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Especifico_para_creche</th>
				<th>Especifico_para_pre_escola</th>
				<th>Especifico_para_educacao_especial_modalidade_substitutiva</th>
				<th>Especifico_para_educacao_indigena</th>
				<th>Intercultural_diversidade</th>
				<th>Especifico_para_os_anos_iniciais_do_ensino_fundamental</th>
				<th>Especifico_para_os_anos_finais_do_ensino_fundamental</th>
				<th>Especifico_para_ensino_medio</th>
				<th>Especifico_para_educacao_de_jovens_e_adultos</th>
				<th>Especifico_para_educacao_do_campo</th>
				<th>Fundamental_incompleto</th>
				<th>Fundamental_completo</th>
				<th>Ensino_medio_completo</th>
				<th>Ensino_medio_incompleto</th>
				<th>Superior_completo_incompleto</th>
				<th>Superior_completo_completo</th>
				<th>Especificacao</th>
				<th>Mestrado</th>
				<th>Doutorado</th>
				<th>Especifico_para_educacao_ambiental</th>
				<th>Especifico_para_educacao_em_direitos_humanos</th>
				<th>Genero_e_diversidade_sexual</th>
				<th>Direitos_da_crianca_e_do_adolecente</th>
				<th>Ed_rela_etnicorraciais_historia_cult_afro_bra_africana</th>
				<th>Outros</th>
				<th>Nenhum_curso_adicional</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($escolaridades as $escolaridade)
				<tr>
					<td>{{{ $escolaridade->func_dados }}}</td>
					<td>{{{ $escolaridade->especifico_para_creche }}}</td>
					<td>{{{ $escolaridade->especifico_para_pre_escola }}}</td>
					<td>{{{ $escolaridade->especifico_para_educacao_especial_modalidade_substitutiva }}}</td>
					<td>{{{ $escolaridade->especifico_para_educacao_indigena }}}</td>
					<td>{{{ $escolaridade->intercultural_diversidade }}}</td>
					<td>{{{ $escolaridade->especifico_para_os_anos_iniciais_do_ensino_fundamental }}}</td>
					<td>{{{ $escolaridade->especifico_para_os_anos_finais_do_ensino_fundamental }}}</td>
					<td>{{{ $escolaridade->especifico_para_ensino_medio }}}</td>
					<td>{{{ $escolaridade->especifico_para_educacao_de_jovens_e_adultos }}}</td>
					<td>{{{ $escolaridade->especifico_para_educacao_do_campo }}}</td>
					<td>{{{ $escolaridade->fundamental_incompleto }}}</td>
					<td>{{{ $escolaridade->fundamental_completo }}}</td>
					<td>{{{ $escolaridade->ensino_medio_completo }}}</td>
					<td>{{{ $escolaridade->ensino_medio_incompleto }}}</td>
					<td>{{{ $escolaridade->superior_completo_incompleto }}}</td>
					<td>{{{ $escolaridade->superior_completo_completo }}}</td>
					<td>{{{ $escolaridade->especificacao }}}</td>
					<td>{{{ $escolaridade->mestrado }}}</td>
					<td>{{{ $escolaridade->doutorado }}}</td>
					<td>{{{ $escolaridade->especifico_para_educacao_ambiental }}}</td>
					<td>{{{ $escolaridade->especifico_para_educacao_em_direitos_humanos }}}</td>
					<td>{{{ $escolaridade->genero_e_diversidade_sexual }}}</td>
					<td>{{{ $escolaridade->direitos_da_crianca_e_do_adolecente }}}</td>
					<td>{{{ $escolaridade->ed_rela_etnicorraciais_historia_cult_afro_bra_africana }}}</td>
					<td>{{{ $escolaridade->outros }}}</td>
					<td>{{{ $escolaridade->nenhum_curso_adicional }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('escolaridades.destroy', $escolaridade->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('escolaridades.edit', 'Edit', array($escolaridade->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no escolaridades
@endif

@stop
