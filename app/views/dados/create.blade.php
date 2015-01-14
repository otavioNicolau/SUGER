@extends('layouts.scaffold1')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">CADASTRO <small>ADICIONE UM NOVO FÚNCIONARIO</small></h1>
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
{{ Form::open(array('route' => 'dados.store','files' => true, 'class' => 'form-horizontal')) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>DADOS PESSOAIS</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'placeholder'=>'Nome')) }}
            </div>
            <div class="col-sm-3">
                {{Form::select('nacionalidade', array(''=>'Nacionalidade','BRASILEIRA' => 'BRASILEIRA', 'ESTRANGEIRA' => 'ESTRANGEIRA'), '', array('class'=>'form-control'))}}
            </div>
            <div class="col-sm-3">
                {{ Form::text('pais_de_origem', Input::old('pais_de_origem'), array('class'=>'form-control', 'placeholder'=>'País de Origem')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {{Form::select('uf_de_nacionalidade', array('' => 'UF de nascimento',
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
                {{ Form::text('naturalidade', Input::old('naturalidade'), array('class'=>'form-control', 'placeholder'=>'Naturalidade')) }}
            </div>
            
            <div class="col-sm-3">
                {{ Form::text('data_de_nascimento', Input::old('data_de_nascimento'), array('class'=>'date form-control', 'placeholder'=>'Data de Nascimento','data-provide'=>'datepicker')) }}
            </div>
            
            <div class="col-sm-2">
                {{Form::select('sexo', array(''=>'Sexo', 'MASCULINO' => 'MASCULINO','FEMININO' => 'FEMININO'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                {{Form::select('estado_civil', array(''=>'Estado Civil','CASADO(a)' => 'CASADO(a)','SOLTEIRO(a)' => 'SOLTEIRO(a)','VIÚVO(a)'=>'VIÚVO(a)', 'DIVORCIADO(a)'=>'DIVORCIADO(a)', 'Outros'=>'SEM INFORMAÇÃO'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
            </div>
            <div class="col-sm-3">
                {{Form::select('cor_raca', array(''=>'Cor / Raça ','BRANCA' => 'BRANCA','PRETA' => 'PRETA','PARDA' => 'PARDA','AMARELA' => 'AMARELA','INDÍGENA' => 'INDÍGENA'),'', array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('cpf', Input::old('cpf'), array('class'=>'cpf form-control', 'placeholder'=>'CPF')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                {{ Form::label('nome', 'Foto:', array('class'=>'control-label')) }}
                {{ Form::file('foto_perfil', Input::old('foto_perfil'), array('class'=>'form-control', 'placeholder'=>'Foto_perfil')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>PAIS</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-6">
                {{ Form::text('nome_mae', Input::old('nome_mae'), array('class'=>'form-control', 'placeholder'=>'Nome da Mãe')) }}
            </div>
            <div class="col-sm-6">
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
                {{ Form::text('email_do_funcionario', Input::old('email_do_funcionario'), array('class'=>'form-control', 'placeholder'=>'E-mail do Funcionário')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('telefone', Input::old('telefone'), array('class'=>'phone form-control', 'placeholder'=>'Telefone')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('celular', Input::old('celular'), array('class'=>'phone form-control', 'placeholder'=>'Celular')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('CADASTRAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('dados.show', 'CANCELAR','', array('class' => 'btn btn-lg btn-danger'))}}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop