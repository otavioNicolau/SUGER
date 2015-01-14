@extends('layouts.scaffold')
@section('main')
@foreach ($escolaridades as $escolaridade)
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header texto">{{Session::get('nome')}} <small>DADOS DE ESCOLARIDADE</small>
		{{ link_to_route('escolaridades.edit', 'ATUALIZAR', $escolaridade->id , array('class' => 'btn btn-lg btn-primary')) }}
		</h1>
	</div>
</div>
{{ Form::model($escolaridade, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('escolaridades.update', $escolaridade->id))) }}
<div class="panel panel-primary">
	<div class="panel-heading"> <h3 class="panel-title"><B>ESCOLARIDADE</B></h3> </div>
	<div class="panel-body">
		<div class="form-group">
			<div class="col-sm-5">
				@if($escolaridade->fundamental_incompleto == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('fundamental_incompleto', 'Fundamental incompleto', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-3">
				@if($escolaridade->fundamental_incompleto == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('fundamental_completo', 'Fundamental completo', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-4">
				@if($escolaridade->fundamental_incompleto == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('ensino_medio_completo', ' Ensino Médio - Normal / Magistério', array('class'=>' control-label')) }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-5">
				@if($escolaridade->ensino_medio_incompleto == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('ensino_medio_incompleto', 'Ensino Médio-Normal / Magistério Específico Indígena', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-3">
				@if($escolaridade->superior_completo_incompleto == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('superior_completo_incompleto', ' Ensino Médio', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-4">
				@if($escolaridade->superior_completo_completo == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('superior_completo_completo', 'Superior completo', array('class'=>' control-label')) }}
			</div>
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading"> <h3 class="panel-title"><B>PÓS-GRADUAÇÃO</B></h3> </div>
	<div class="panel-body">
		<div class="col-sm-4">
			@if($escolaridade->especificacao == 1)
			<B class="badge">SIM</B>
			@else
			<B class="badge">NÃO</B>
			@endif
			{{ Form::label('especificacao', 'Especialização', array('class'=>' control-label')) }}
		</div>
		<div class="col-sm-4">
			@if($escolaridade->mestrado == 1)
			<B class="badge">SIM</B>
			@else
			<B class="badge">NÃO</B>
			@endif
			{{ Form::label('mestrado', 'Mestrado', array('class'=>' control-label')) }}
		</div>
		<div class="col-sm-4">
			@if($escolaridade->doutorado == 1)
			<B class="badge">SIM</B>
			@else
			<B class="badge">NÃO</B>
			@endif
			{{ Form::label('doutorado', 'Doutorado', array('class'=>' control-label')) }}
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading"> <h3 class="panel-title"><B>OUTROS CURSOS (Formação continuada)</B></h3> </div>
	<div class="panel-body">
		{{ Form::hidden('func_dados', '', array('class'=>'form-control texto')) }}
		
		<div class="form-group">
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_creche == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_creche', 'Específico para creche ', array('class'=>'control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_pre_escola == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_pre_escola', 'Específico para pré-escola', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_educacao_especial_modalidade_substitutiva == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_educacao_especial_modalidade_substitutiva', 'Específico para educação especial - modalidade substitutiva', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_educacao_indigena == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_educacao_indigena', 'Específico para educação indígena', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->intercultural_diversidade == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('intercultural_diversidade', ' Intercultural/Diversidade ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_os_anos_iniciais_do_ensino_fundamental == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_os_anos_iniciais_do_ensino_fundamental', ' Específico para os anos iniciais do Ensino Fundamental ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_os_anos_finais_do_ensino_fundamental == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_os_anos_finais_do_ensino_fundamental', ' Específico para os anos finais do Ensino Fundamental ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_ensino_medio == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_ensino_medio', ' Específico para Ensino Médio', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_educacao_de_jovens_e_adultos == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_educacao_de_jovens_e_adultos', ' Específico para Educação de Jovens e Adultos ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_educacao_do_campo == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_educacao_do_campo', ' Específico para educação do campo ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_educacao_ambiental == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_educacao_ambiental', ' Específico para educação ambiental ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->especifico_para_educacao_em_direitos_humanos == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('especifico_para_educacao_em_direitos_humanos', ' Específico para educação em direitos humanos ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->genero_e_diversidade_sexual == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('genero_e_diversidade_sexual', ' Gênero e diversidade sexual ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->direitos_da_crianca_e_do_adolecente == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('direitos_da_crianca_e_do_adolecente', ' Direitos da criança e do adolescente ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->ed_rela_etnicorraciais_historia_cult_afro_bra_africana == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('ed_rela_etnicorraciais_historia_cult_afro_bra_africana', ' Educação para as relações etnicorraciais e história e cultura afro-brasileira e africana ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->outros == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('outros', 'Outros ', array('class'=>' control-label')) }}
			</div>
			<div class="col-sm-10">
				@if($escolaridade->nenhum_curso_adicional == 1)
				<B class="badge">SIM</B>
				@else
				<B class="badge">NÃO</B>
				@endif
				{{ Form::label('nenhum_curso_adicional', ' Nenhum curso adicional', array('class'=>' control-label')) }}
			</div>
		</div>
	</div>
</div>
@endforeach
{{ Form::close() }}
@stop