@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{$dado->nome}} <small>FÚNCIONARIO</small>
        {{ link_to_route('dados.edit', 'ATUALIZAR', array($dado->id), array('class' => 'btn btn-lg btn-primary col-sm-offset-1')) }}
        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('dados.destroy', $dado->id))) }}
        {{ Form::submit('DELETAR', array('class' => 'btn btn-lg btn-danger')) }}
        {{ Form::close() }}
        </h1>
    </div>
</div>
<!-- /.row -->
<div class="form-horizontal">
    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>DADOS PESSOAIS</B></h3> </div>
        <div class="panel-body">
            <div class="col-sm-3">
                {{{Session::put('nome', $dado->nome )}}}
                {{ HTML::image('/upload/'.$dado->foto_perfil,'a picture', array('class' => 'img-thumbnail','style'=>'width: 200px; height: 210px')) }}
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <div class="col-sm-8">
                        {{ Form::label('func_dados', 'Nome:', array('class'=>'control-label')) }}
                        {{ Form::text('nome', $dado->nome, array('class'=>'form-control texto', 'placeholder'=>'Nome', 'disabled')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ Form::label('func_dados', 'CPF:', array('class'=>'control-label')) }}
                        {{ Form::text('cpf', $dado->cpf, array('class'=>'form-control texto', 'placeholder'=>'CPF','disabled')) }}
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'Nacionalidade:', array('class'=>'control-label')) }}
                        {{ Form::text('nacionalidade', $dado->nacionalidade, array('class'=>'form-control texto', 'placeholder'=>'Nacionalidade','disabled')) }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'País de Origem:', array('class'=>'control-label')) }}
                        {{ Form::text('pais_de_origem', $dado->pais_de_origem, array('class'=>'form-control texto', 'placeholder'=>'País de Origem','disabled')) }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'UF de Nascimento:', array('class'=>'control-label')) }}
                        {{ Form::text('uf_de_nacionalidade', $dado->uf_de_nacionalidade, array('class'=>'form-control texto', 'placeholder'=>'UF de Nascimento','disabled')) }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'Naturalidade:', array('class'=>'control-label')) }}
                        {{ Form::text('naturalidade', $dado->naturalidade, array('class'=>'form-control texto', 'placeholder'=>'Naturalidade','disabled')) }}
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'Data de Nascimento:', array('class'=>'control-label')) }}
                        {{ Form::text('data_de_nascimento', $dado->data_de_nascimento, array('class'=>'form-control texto', 'placeholder'=>'Data de Nascimento','disabled')) }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'Sexo:', array('class'=>'control-label')) }}
                        {{ Form::text('sexo', $dado->sexo, array('class'=>'form-control texto', 'placeholder'=>'Sexo','disabled')) }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'Estado Civil:', array('class'=>'control-label')) }}
                        {{ Form::text('estado_civil', $dado->estado_civil, array('class'=>'form-control texto', 'placeholder'=>'Estado Civil','disabled')) }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::label('func_dados', 'Cor/Raça:', array('class'=>'control-label')) }}
                        {{ Form::text('cor_raca', $dado->cor_raca, array('class'=>'form-control texto', 'placeholder'=>'Cor/Raça','disabled')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>PAIS</B></h3> </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-6">
                    {{ Form::label('func_dados', 'Nome da Mãe:', array('class'=>'control-label')) }}
                    {{ Form::text('nome_mae', $dado->nome_mae, array('class'=>'form-control texto', 'placeholder'=>'Nome da Mãe','disabled')) }}
                </div>
                <div class="col-sm-6">
                    {{ Form::label('nome', 'Nome do Pai:', array('class'=>'control-label')) }}
                    {{ Form::text('nome_pai', $dado->nome_pai, array('class'=>'form-control texto', 'placeholder'=>'Nome do Pai','disabled')) }}
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>CONTATO</B></h3> </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-6">
                    {{ Form::label('nome', 'E-mail do Funcionário:', array('class'=>'control-label')) }}
                    {{ Form::text('email_do_funcionario', $dado->email_do_funcionario , array('class'=>'form-control texto', 'placeholder'=>'E-mail do Funcionário','disabled')) }}
                </div>
                <div class="col-sm-3">
                    {{ Form::label('nome', 'Telefone:', array('class'=>'control-label')) }}
                    {{ Form::text('telefone', $dado->telefone, array('class'=>'form-control texto', 'placeholder'=>'Telefone','disabled')) }}
                </div>
                <div class="col-sm-3">
                    {{ Form::label('nome', 'Celular:', array('class'=>'control-label')) }}
                    {{ Form::text('celular', $dado->celular, array('class'=>'form-control texto', 'placeholder'=>'Celular','disabled')) }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop