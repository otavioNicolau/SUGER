@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">OTAVIO NICOLAU DA SILVA <small>ATUALIZAR DADOS PESSOAIS</small></h1>
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
{{ Form::model($dado, array('class' => 'form-horizontal', 'files' => true, 'method' => 'PATCH', 'route' => array('dados.update', $dado->id))) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>DADOS PESSOAIS</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::label('func_dados', 'Nome:', array('class'=>'control-label')) }}
                {{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'placeholder'=>'Nome')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Nacionalidade:', array('class'=>'control-label')) }}
                {{Form::select('nacionalidade', array( $dado->nacionalidade => $dado->nacionalidade, 'BRASILEIRA' => 'BRASILEIRA', 'ESTRANGEIRA' => 'ESTRANGEIRA'),'all', array('class'=>'form-control'))}}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'País de Origem:', array('class'=>'control-label')) }}
                {{ Form::text('pais_de_origem', Input::old('pais_de_origem'), array('class'=>'form-control', 'placeholder'=>'País de Origem')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{ Form::label('func_dados', 'UF de Nascimento:', array('class'=>'control-label')) }}
                {{Form::select('uf_de_nacionalidade', array( $dado->uf_de_nacionalidade => $dado->uf_de_nacionalidade,
                'AC' => 'AC',
                'AL' => 'AL',
                'AP' => 'AP',
                'AM' => 'AM',
                'BA' => 'BA',
                'CE' => 'CE',
                'DF' => 'DF',
                'ES' => 'ES',
                'GO' => 'GO',
                'MA' => 'MA',
                'MT' => 'MT',
                'MS' => 'MS',
                'MG' => 'MG',
                'PA' => 'PA',
                'PB' => 'PB',
                'PR' => 'PR',
                'PE' => 'PE',
                'PI' => 'PI',
                'RJ' => 'RJ',
                'RN' => 'RN',
                'RS' => 'RS',
                'RO' => 'RO',
                'RR' => 'RR',
                'SC' => 'SC',
                'SP' => 'SP',
                'SE' => 'SE',
                'TO' => 'TO',
                ),'all', array('class'=>'form-control'))}}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Naturalidade:', array('class'=>'control-label')) }}
                {{ Form::text('naturalidade', Input::old('naturalidade'), array('class'=>'form-control', 'placeholder'=>'Naturalidade')) }}
            </div>
            
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Data de Nascimento:', array('class'=>'control-label')) }}
                {{ Form::text('data_de_nascimento', Input::old('data_de_nascimento'), array('class'=>'date form-control', 'placeholder'=>'Data de Nascimento','data-provide'=>'datepicker')) }}
            </div>
            
            <div class="col-sm-2">
                {{ Form::label('func_dados', 'Sexo:', array('class'=>'control-label')) }}
                {{Form::select('sexo', array($dado->sexo => $dado->sexo, 'MASCULINO' => 'MASCULINO','FEMININO' => 'FEMININO'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Estado Civil:', array('class'=>'control-label')) }}
                {{Form::select('estado_civil', array($dado->estado_civil => $dado->estado_civil,'CASADO(a)' => 'CASADO(a)','SOLTEIRO(a)' => 'SOLTEIRO(a)','VIÚVO(a)'=>'VIÚVO(a)', 'DIVORCIADO(a)'=>'DIVORCIADO(a)', 'Outros'=>'SEM INFORMAÇÃO'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Cor/Raça:', array('class'=>'control-label')) }}
                {{Form::select('cor_raca', array($dado->cor_raca => $dado->cor_raca,'BRANCA' => 'BRANCA','PRETA' => 'PRETA','PARDA' => 'PARDA','AMARELA' => 'AMARELA','INDÍGENA' => 'INDÍGENA'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'CPF:', array('class'=>'control-label')) }}
                {{ Form::text('cpf', Input::old('cpf'), array('class'=>'cpf form-control', 'placeholder'=>'CPF')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                {{ Form::label('nome', 'Foto:', array('class'=>'control-label')) }}
                {{ Form::file('foto_perfil') }}
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
                {{ Form::text('nome_mae', Input::old('nome_mae'), array('class'=>'form-control', 'placeholder'=>'Nome da Mãe')) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('func_dados', 'Nome da Pai:', array('class'=>'control-label')) }}
                {{ Form::text('nome_pai', Input::old('nome_pai'), array('class'=>'form-control', 'placeholder'=>'Nome do Pai')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>CONTATO</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::label('func_dados', 'E-mail do Funcionário:', array('class'=>'control-label')) }}
                {{ Form::text('email_do_funcionario', Input::old('email_do_funcionario'), array('class'=>'form-control', 'placeholder'=>'E-mail do Funcionário')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Telefone:', array('class'=>'control-label')) }}
                {{ Form::text('telefone', Input::old('telefone'), array('class'=>'phone form-control', 'placeholder'=>'Telefone')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::label('func_dados', 'Celular:', array('class'=>'control-label')) }}
                {{ Form::text('celular', Input::old('celular'), array('class'=>'phone form-control', 'placeholder'=>'Celular')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('ATUALIZAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('dados.show', 'CANCELAR', $dado->id, array('class' => 'btn btn-lg btn-danger')) }}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop