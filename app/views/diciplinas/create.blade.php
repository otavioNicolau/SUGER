@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small>DICIPLINAS</small></h1>
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
{{ Form::open(array('route' => 'diciplinas.store', 'class' => 'form-horizontal')) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>ADICIONE DICIPLINA</B></h3> </div>
    <div class="panel-body">
        
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::hidden('func_dados', Session::get('id'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}

                {{ Form::text('disciplinas', Input::old('disciplinas'), array('class'=>'form-control', 'placeholder'=>'Disciplinas')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('CADASTRAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('diciplinas.show', 'CANCELAR',Session::get('id'), array('class' => 'btn btn-lg btn-danger'))}}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop