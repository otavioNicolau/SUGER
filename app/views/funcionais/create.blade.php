@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small>DADOS FUNCIONAIS</small></h1>
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
{{ Form::open(array('route' => 'funcionais.store', 'class' => 'form-horizontal')) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>DADOS FUNCIONAIS</B></h3> </div>
    <div class="panel-body">
        {{ Form::hidden('func_dados', Session::get('id'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::text('matricula', Input::old('matricula'), array('class'=>'form-control', 'placeholder'=>'Matrícula')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::text('funcao', Input::old('funcao'), array('class'=>'form-control', 'placeholder'=>'Função')) }}
            </div>
        </div>
        <HR>
        <div class="form-group">
            <div class="col-sm-6">
                {{Form::select('situacao_funcional', array(
                ''=>'Situação Funcional',
                'NA ATIVA' => 'NA ATIVA',
                'LICENÇA MEDICA' => 'LICENÇA MEDICA',
                'LICENÇA SEM VENCIMENTO' => 'LICENÇA SEM VENCIMENTO',
                'FÉRIAS' => 'FÉRIAS',
                'APOSENTADO' => 'APOSENTADO',
                'CONVENIADO' => 'CONVENIADO',
                'COMISSIONADO' => 'COMISSIONADO',
                'EFETIVO' => 'EFETIVO',
                'EFETIVO-COMISSIONADO' => 'EFETIVO-COMISSIONADO',
                'EFETIVO-CONVENIADO' => 'EFETIVO-CONVENIADO',
                'EFETIVO-CONVENIADO-COMISSIONADO' => 'EFETIVO-CONVENIADO-COMISSIONADO',
                'EFETIVO-FUNÇÃO GRATIFICADA' => 'EFETIVO-FUNÇÃO GRATIFICADA',
                ),'',array('class'=>'form-control')
                )}}
            </div>
            <div class="col-sm-3">
                {{ Form::text('data_de_admissao', Input::old('data_de_admissao'), array('class'=>'date form-control', 'placeholder'=>'Data de Admissão','data-provide'=>'datepicker')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('data_de_demissao', Input::old('data_de_demissao'), array('class'=>'date form-control', 'placeholder'=>'Data de Demissão','data-provide'=>'datepicker')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{ Form::text('carga_horaria_semanal', Input::old('carga_horaria_semanal'), array('class'=>'form-control', 'placeholder'=>'Carga horária semanal (horas)')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('final_do_contrato', Input::old('final_do_contrato'), array('class'=>'date form-control', 'placeholder'=>'Final do Contrato','data-provide'=>'datepicker')) }}
            </div>
        </div>
        <br>
        <HR>
        <div class="form-group">
            <div class="col-sm-4">
                {{ Form::text('registro', Input::old('registro'), array('class'=>'form-control', 'placeholder'=>'Registro')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('matricula_anterior', Input::old('matricula_anterior'), array('class'=>'form-control', 'placeholder'=>'Matrícula Anterior')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('data_acesso_funcional', Input::old('data_acesso_funcional'), array('class'=>'date form-control', 'placeholder'=>'Data Acesso Funcional','data-provide'=>'datepicker')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {{ Form::text('letra_numero', Input::old('letra_numero'), array('class'=>'form-control', 'placeholder'=>'Letra/Número')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('regime_juridico', Input::old('regime_juridico'), array('class'=>'form-control', 'placeholder'=>'Regime Jurídico')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('motivo_contrato', Input::old('motivo_contrato'), array('class'=>'form-control', 'placeholder'=>'Motivo Contrato')) }}
            </div>
        </div>
        <br>
        <HR>
        <div class="form-group">
            <div class="col-sm-4">
                {{ Form::text('data_de_entrada_na_escola', Input::old('data_de_entrada_na_escola'), array('class'=>'date form-control', 'placeholder'=>'Data de entrada na Suger','data-provide'=>'datepicker')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('data_de_daida_da_escola', Input::old('data_de_daida_da_escola'), array('class'=>'date form-control', 'placeholder'=>'Data de saída da Suger','data-provide'=>'datepicker')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('CADASTRAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('funcionais.show', 'CANCELAR', Session::get('id'), array('class' => 'btn btn-lg btn-danger'))}}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop