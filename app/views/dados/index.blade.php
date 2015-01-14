@extends('layouts.scaffold1')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">LISTAGEM DE <small>FÚNCIONARIOS</small>
        {{ link_to_route('dados.create', 'CADASTRAR NOVO', null, array('class' => 'btn btn-lg btn-primary col-sm-offset-4')) }}
        </h1>
    </div>
</div>
<!-- /.row -->
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>BUSCAR</B></h3> </div>
    <div class="panel-body">
        {{ Form::open(array('url' => 'find','method'=>'POST', 'class' => 'form-horizontal')) }}
        <div class="form-group">
            <div class="col-sm-8">
                {{ Form::text('buscar', Input::old('nome'), array('class'=>'form-control', 'placeholder'=>'Nome ou CPF')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::submit('BUSCAR', array('class' => 'btn btn-primary')) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
<br><br>
@if ($dados->count())
@foreach ($dados as $dado)
<div class="media">
    <a class="media-left" href="dados/{{$dado->id}}">
        {{ HTML::image('/upload/'.$dado->foto_perfil,'a picture', array('class' => 'img-thumbnail','style'=>'width: 100px; height: 100px')) }}
    </a>
    <div class="media-body">
        <h4 class="media-heading texto">{{{$dado->nome}}}  {{link_to_route('dados.show', 'ver', array($dado->id), array('class' => 'btn btn-sm btn-primary')) }}</h4>
        <p>{{{$dado->cpf}}}</p>
        <p>{{$dado->celular}}</p>
    </div>
</div>
<hr>

@endforeach
<?php echo $dados->links(); ?>
@else
    <h3 class="panel-title"><B>NENHUM FUNCIONÁRIO ENCONTRADO.</B></h3>
@endif
@stop