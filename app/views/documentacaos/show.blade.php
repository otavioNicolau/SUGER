@extends('layouts.scaffold')

@section('main')

@foreach ($documentacaos as $documentacao)
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header texto">{{Session::get('nome')}} <small>DOCUMENTAÇÃO</small>
            {{ link_to_route('documentacaos.edit', 'ATUALIZAR', $documentacao->id , array('class' => 'btn btn-lg btn-primary col-sm-offset-2')) }}
            </h1>
        </div>
    </div>

<div class="form-horizontal">
    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>INDENTIDADE</B></h3> </div>
        <div class="panel-body">

            <div class="form-group">

                <div class="col-sm-4">
           		  	{{ Form::label('func_dados', 'Número:', array('class'=>'control-label')) }}
                  	{{ Form::text('ind_numero', $documentacao->ind_numero, array('class'=>'form-control texto', 'placeholder'=>'Número','disabled')) }}
                </div>

                <div class="col-sm-2">
           		  	{{ Form::label('func_dados', 'Orgão Expedidor:', array('class'=>'control-label')) }}
                  	{{ Form::text('ind_orgao_expedidor', $documentacao->ind_orgao_expedidor, array('class'=>'form-control texto', 'placeholder'=>'Orgão Expedidor','disabled')) }}
                </div>

                <div class="col-sm-2">
           		  	{{ Form::label('func_dados', 'UF:', array('class'=>'control-label')) }}
                  	{{ Form::text('ind_uf', $documentacao->ind_uf, array('class'=>'form-control texto', 'placeholder'=>'UF','disabled')) }}
                </div>

                <div class="col-sm-3">
           		  	{{ Form::label('func_dados', 'Data de Emissão:', array('class'=>'control-label')) }}
                    {{ Form::text('ind_data_de_emissao', $documentacao->ind_data_de_emissao, array('class'=>'form-control texto', 'placeholder'=>'Data de Emissão','disabled')) }}
                </div>

            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>CERTIDÃO CIVIL:</B></h3> </div>
        <div class="panel-body">

            <div class="form-group">
                <div class="col-sm-3">
					{{ Form::label('func_dados', 'Tipo de Certidão:', array('class'=>'control-label')) }}
					{{ Form::text('cer_tipo_de_certidao', $documentacao->cer_tipo_de_certidao, array('class'=>'form-control texto', 'placeholder'=>'Tipo de Certidão','disabled')) }}
                </div>

                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'Termo:', array('class'=>'control-label')) }}
                  	{{ Form::text('cer_termo', $documentacao->cer_termo, array('class'=>'form-control texto', 'placeholder'=>'Termo','disabled')) }}
                </div>

                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'Folha:', array('class'=>'control-label')) }}
                  	{{ Form::text('cer_folha', $documentacao->cer_folha, array('class'=>'form-control texto', 'placeholder'=>'Folha','disabled')) }}
                </div>

                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'Livro:', array('class'=>'control-label')) }}
                  	{{ Form::text('cer_livro', $documentacao->cer_livro, array('class'=>'form-control texto', 'placeholder'=>'Livro','disabled')) }}
                </div>

                <div class="col-sm-3">
                	{{ Form::label('func_dados', 'Nome do cartório:', array('class'=>'control-label')) }}
                  	{{ Form::text('cer_nome_do_cartorio', $documentacao->cer_nome_do_cartorio, array('class'=>'form-control texto', 'placeholder'=>'Nome do cartório','disabled')) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'UF:', array('class'=>'control-label')) }}
                  	{{ Form::text('cer_uf', $documentacao->cer_uf, array('class'=>'form-control texto', 'placeholder'=>'UF','disabled')) }}
                </div>

                <div class="col-sm-3">
                	{{ Form::label('func_dados', 'Data de Emissão:', array('class'=>'control-label')) }}
                  	{{ Form::text('cer_data_de_emissao', $documentacao->cer_data_de_emissao, array('class'=>'form-control texto', 'placeholder'=>'Data de Emissão','disabled')) }}
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>TÍTULO DE ELEITOR:</B></h3> </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-4">
                	{{ Form::label('func_dados', 'Número de Inscrição:', array('class'=>'control-label')) }}
                  	{{ Form::text('tit_numero_da_inscricao', $documentacao->tit_numero_da_inscricao, array('class'=>'form-control texto', 'placeholder'=>'Número de Inscrição','disabled')) }}
                </div>
                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'Zona:', array('class'=>'control-label')) }}
                  	{{ Form::text('tit_zona', $documentacao->tit_zona, array('class'=>'form-control texto', 'placeholder'=>'Zona','disabled')) }}
                </div>
                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'Seção:', array('class'=>'control-label')) }}
                 	 {{ Form::text('tit_secao', $documentacao->tit_secao, array('class'=>'form-control texto', 'placeholder'=>'Seção','disabled')) }}
                </div>
            </div>
        </div>
    </div>    
    <div class="panel panel-primary">
        <div class="panel-heading"> <h3 class="panel-title"><B>CARTEIRA DE TRABALHO:</B></h3> </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3">
                	{{ Form::label('func_dados', 'Série:', array('class'=>'control-label')) }}
                  	{{ Form::text('cart_serie', $documentacao->cart_serie, array('class'=>'form-control texto', 'placeholder'=>'Série','disabled')) }}
                </div>
                <div class="col-sm-3">
                	{{ Form::label('func_dados', 'Número:', array('class'=>'control-label')) }}
                  	{{ Form::text('cart_numero', $documentacao->cart_numero, array('class'=>'form-control texto', 'placeholder'=>'Número','disabled')) }}
                </div>
                <div class="col-sm-2">
                	{{ Form::label('func_dados', 'UF:', array('class'=>'control-label')) }}
                  	{{ Form::text('cart_uf', $documentacao->cart_uf, array('class'=>'form-control texto', 'placeholder'=>'UF','disabled')) }}
                </div>
            </div>
        </div>
    </div>
@endforeach
@stop


