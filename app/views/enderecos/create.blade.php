@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small>ENDEREÇO</small></h1>
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
{{ Form::open(array('route' => 'enderecos.store', 'class' => 'form-horizontal')) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>INFORMAÇÕES DE ENDEREÇO</B></h3> </div>
    <div class="panel-body">
        
        {{ Form::hidden('func_dados', Session::get('id'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
        <div class="form-group">
            <div class="col-sm-5">
                {{ Form::text('logradouro', Input::old('logradouro'), array('class'=>'form-control', 'placeholder'=>'Logradouro')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('numero', Input::old('numero'), array('class'=>'form-control', 'placeholder'=>'Número')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('uf', Input::old('uf'), array('class'=>'form-control', 'placeholder'=>'UF')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('cep', Input::old('cep'), array('class'=>'cep form-control', 'placeholder'=>'CEP')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::text('complemento', Input::old('complemento'), array('class'=>'form-control', 'placeholder'=>'Complemento')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::text('bairro', Input::old('bairro'), array('class'=>'form-control', 'placeholder'=>'Bairro')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {{ Form::text('municipio', Input::old('municipio'), array('class'=>'form-control', 'placeholder'=>'Município')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('distrito', Input::old('distrito'), array('class'=>'form-control', 'placeholder'=>'Distrito')) }}
            </div>
            <div class="col-sm-3">
                {{Form::select('zona_residencial', array(''=>'Zona residencial','URBANA' => 'URBANA','RURAL' => 'RURAL'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}

            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('CADASTRAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('enderecos.show', 'CANCELAR',Session::get('id'), array('class' => 'btn btn-lg btn-danger'))}}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop