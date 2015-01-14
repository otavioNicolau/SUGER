@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}}
         <small>ATUALIZAR ENDEREÇO</small></h1>
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
{{ Form::model($endereco, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('enderecos.update', $endereco->id))) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>INFORMAÇÕES DE ENDEREÇO</B></h3> </div>
    <div class="panel-body">
        
        {{ Form::hidden('func_dados', Input::old('func_dados'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
        <div class="form-group">
            <div class="col-sm-5">
                {{ Form::label('logradouro', 'Logradouro:', array('class'=>' control-label')) }}
                {{ Form::text('logradouro', Input::old('logradouro'), array('class'=>'form-control', 'placeholder'=>'Logradouro')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::label('numero', 'Número:', array('class'=>' control-label')) }}
                {{ Form::text('numero', Input::old('numero'), array('class'=>'form-control', 'placeholder'=>'Número')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::label('uf', 'Uf:', array('class'=>' control-label')) }}
                {{ Form::text('uf', Input::old('uf'), array('class'=>'form-control', 'placeholder'=>'UF')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('cep', 'Cep:', array('class'=>' control-label')) }}
                {{ Form::text('cep', Input::old('cep'), array('class'=>'cep form-control', 'placeholder'=>'CEP')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('complemento', 'Complemento:', array('class'=>' control-label')) }}
                {{ Form::text('complemento', Input::old('complemento'), array('class'=>'form-control', 'placeholder'=>'Complemento')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('bairro', 'Bairro:', array('class'=>' control-label')) }}
                {{ Form::text('bairro', Input::old('bairro'), array('class'=>'form-control', 'placeholder'=>'Bairro')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('municipio', 'Município:', array('class'=>' control-label')) }}
                {{ Form::text('municipio', Input::old('municipio'), array('class'=>'form-control', 'placeholder'=>'Município')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('distrito', 'Distrito:', array('class'=>' control-label')) }}
                {{ Form::text('distrito', Input::old('distrito'), array('class'=>'form-control', 'placeholder'=>'Distrito')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('zona_residencial', 'Zona Residencial:', array('class'=>' control-label')) }}
                {{Form::select('zona_residencial', array($endereco->zona_residencial => $endereco->zona_residencial,'URBANA' => 'URBANA','RURAL' => 'RURAL'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('ATUALIZAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('enderecos.show', 'CANCELAR',$endereco->id, array('class' => 'btn btn-lg btn-danger'))}}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop