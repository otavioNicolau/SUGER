@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header texto">{{Session::get('nome')}} <small>SUPERIOR</small></h1>
	</div>
</div>
@foreach ($superios as $superior)
<!-- /.row -->
<div class="form-horizontal">
	<div class="panel panel-primary">
		<div class="panel-heading"> <h3 class="panel-title">
			{{ link_to_route('superiors.edit', 'ATUALIZAR', $superior->id , array('class' => 'btn btn-xs btn-success')) }}
			{{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('superiors.destroy', $superior->id))) }}
			{{ Form::submit('EXCLUIR', array('class' => 'btn btn-xs btn-danger')) }}
			{{ Form::close() }}
			<B CLASS=" col-sm-offset-3">FORMAÇÃO SUPERIOR</B>
			</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-6">
					{{ Form::label('classe_do_curso', 'Classe do curso:', array('class'=>'control-label')) }}
					{{ Form::text('classe_do_curso', $superior->classe_do_curso, array('class'=>'form-control texto', 'placeholder'=>'Classe do curso','disabled')) }}
				</div>
				<div class="col-sm-6">
					{{ Form::label('nome_do_curso', 'Nome do Curso:', array('class'=>' control-label')) }}
					{{ Form::text('nome_do_curso', $superior->nome_do_curso, array('class'=>'form-control texto', 'placeholder'=>'Nome do Curso','disabled')) }}
				</div>
				<div class="col-sm-6">
					{{ Form::label('instituicao', 'Instituição:', array('class'=>' control-label')) }}
					{{ Form::text('instituicao', $superior->instituicao, array('class'=>'form-control texto', 'placeholder'=>'Instituição','disabled')) }}
				</div>
				<div class="col-sm-3">
					{{ Form::label('situacao_do_curso_superior', 'Situação do Curso Superior:', array('class'=>' control-label')) }}
					{{ Form::text('situacao_do_curso_superior', $superior->situacao_do_curso_superior, array('class'=>'form-control texto', 'placeholder'=>'Situação do Curso Superior','disabled')) }}
				</div>
				<div class="col-sm-2">
					{{ Form::label('ano_de_conclusao', ' Ano de conclusão:', array('class'=>' control-label')) }}
					{{ Form::text('ano_de_conclusao', $superior->ano_de_conclusao, array('class'=>'form-control texto', 'placeholder'=>'Ano de conclusão','disabled')) }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-5">
					{{ Form::label('formacao_complementar_pedagogica', 'Formação/Complementação Pedagógica:') }}
					@if($superior->formacao_complementar_pedagogica == 1)
					<B>SIM</B>
					@else
					<B>NÃO</B>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@stop