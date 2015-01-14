@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small>DOCUMENTAÇÃO</small></h1>
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
{{ Form::open(array('route' => 'documentacaos.store', 'class' => 'form-horizontal')) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>INDENTIDADE</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-10">
                {{ Form::hidden('func_dados', Session::get('id'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::text('ind_numero', Input::old('ind_numero'), array('class'=>'form-control', 'placeholder'=>'Número')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('ind_orgao_expedidor', Input::old('ind_orgao_expedidor'), array('class'=>'form-control', 'placeholder'=>'Orgão Expedidor')) }}
            </div>
            <div class="col-sm-2">
                {{Form::select('ind_uf', array( '' => 'UF',
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
                {{ Form::text('ind_data_de_emissao', Input::old('ind_data_de_emissao'), array('class'=>'date form-control', 'placeholder'=>'Data de Emissão','data-provide'=>'datepicker')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>CERTIDÃO CIVIL:</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-3">
                {{Form::select('cer_tipo_de_certidao', array( '' => 'TIPO DE CERTIDÃO',
                'CASAMENTO' => 'CASAMENTO',
                'NASCIMENTO' => 'NASCIMENTO',
                ),'all', array('class'=>'form-control'))}}
            </div>
            <div class="col-sm-2">
                {{ Form::text('cer_termo', Input::old('cer_termo'), array('class'=>'form-control', 'placeholder'=>'Termo')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('cer_folha', Input::old('cer_folha'), array('class'=>'form-control', 'placeholder'=>'Folha')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('cer_livro', Input::old('cer_livro'), array('class'=>'form-control', 'placeholder'=>'Livro')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('cer_nome_do_cartorio', Input::old('cer_nome_do_cartorio'), array('class'=>'form-control', 'placeholder'=>'Nome do cartório')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                {{Form::select('cer_uf', array( '' => 'UF',
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
                {{ Form::text('cer_data_de_emissao', Input::old('cer_data_de_emissao'), array('class'=>'date form-control', 'placeholder'=>'Data de Emissão','data-provide'=>'datepicker')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>TÍTULO DE ELEITOR:</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-4">
                {{ Form::text('tit_numero_da_inscricao', Input::old('tit_numero_da_inscricao'), array('class'=>'form-control', 'placeholder'=>'Número de Inscrição')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('tit_zona', Input::old('tit_zona'), array('class'=>'form-control', 'placeholder'=>'Zona')) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('tit_secao', Input::old('tit_secao'), array('class'=>'form-control', 'placeholder'=>'Seção')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>CARTEIRA DE TRABALHO:</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-3">
                {{ Form::text('cart_serie', Input::old('cart_serie'), array('class'=>'form-control', 'placeholder'=>'Série')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::text('cart_numero', Input::old('cart_numero'), array('class'=>'form-control', 'placeholder'=>'Número')) }}
            </div>
            <div class="col-sm-2">
                {{Form::select('cart_uf', array( '' => 'UF',
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
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('CADASTRAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('documentacaos.show', 'CANCELAR',Session::get('id'), array('class' => 'btn btn-lg btn-danger'))}}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop