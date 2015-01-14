@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small>ATUALIZAR</small></h1>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
        @endif
    </div>
</div>
{{ Form::model($superior, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('superiors.update', $superior->id))) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>FORMAÇÃO SUPERIOR</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            {{ Form::hidden('func_dados', Input::old('func_dados'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
            <div class="col-sm-6">
                {{ Form::label('classe_do_curso', 'Classe do curso:', array('class'=>'control-label')) }}
                {{ Form::text('classe_do_curso', Input::old('classe_do_curso'), array('class'=>'form-control', 'placeholder'=>'Classe do curso')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('nome_do_curso', 'Nome do Curso:', array('class'=>' control-label')) }}
                {{ Form::text('nome_do_curso', Input::old('nome_do_curso'), array('class'=>'form-control', 'placeholder'=>'Nome do Curso')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('instituicao', 'Instituição:', array('class'=>' control-label')) }}
                {{ Form::text('instituicao', Input::old('instituicao'), array('class'=>'form-control', 'placeholder'=>'Instituição')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('situacao_do_curso_superior', 'Situação do Curso Superior:', array('class'=>' control-label')) }}
                {{ Form::text('situacao_do_curso_superior', Input::old('situacao_do_curso_superior'), array('class'=>'form-control', 'placeholder'=>'Situação do Curso Superior')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::label('ano_de_conclusao', ' Ano de conclusão:', array('class'=>' control-label')) }}
                {{ Form::text('ano_de_conclusao', Input::old('ano_de_conclusao'), array('class'=>'date form-control', 'placeholder'=>'Ano de conclusão','data-provide'=>'datepicker')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5">
                {{ Form::label('formacao_complementar_pedagogica', 'Formação/Complementação Pedagógica:') }}
                <label class="radio-inline">
                    <input type="radio" name="formacao_complementar_pedagogica" id="optionsRadiosInline1" value="1">SIM
                </label>
                <label class="radio-inline">
                    <input type="radio" name="formacao_complementar_pedagogica" id="optionsRadiosInline3" value="0">NÃO
                </label>
            </div>
        </div>
    </div>
</div>
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-offset-4  col-sm-12">
                        {{ Form::submit('ATUALIZAR', array('class' => 'btn btn-lg btn-primary')) }}
                        {{ link_to_route('superiors.show', 'CANCELAR', $superior->id, array('class' => 'btn btn-lg btn-danger')) }}
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
        @stop