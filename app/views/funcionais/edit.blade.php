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
{{ Form::model($funcional, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('funcionais.update', $funcional->id))) }}
<div class="panel panel-primary">
  <div class="panel-heading"> <h3 class="panel-title"><B>DADOS FUNCIONAIS</B></h3> </div>
  <div class="panel-body">
    {{ Form::hidden('func_dados', Session::get('id'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
    <div class="form-group">
      <div class="col-sm-6">
        {{ Form::label('matricula', 'Matrícula:', array('class'=>' control-label')) }}
        {{ Form::text('matricula', Input::old('matricula'), array('class'=>'form-control', 'placeholder'=>'Matrícula')) }}
      </div>
      <div class="col-sm-6">
        {{ Form::label('funcao', 'Função:', array('class'=>' control-label')) }}
        <select id="" name="funcao" class="form-control">
          <option value="">{{$funcional->funcao}}</option>
          <option value="ADMINISTRADOR">ADMINISTRADOR</option>
          <option value="ADMINISTRADOR ESCOLAR">ADMINISTRADOR ESCOLAR</option>
          <option value="AGENTE ADMINISTRATIVO">AGENTE ADMINISTRATIVO</option>
          <option value="AGENTE EDUCACIONAL">AGENTE EDUCACIONAL</option>
          <option value="ANALISTA DE SISTEMA">ANALISTA DE SISTEMA</option>
          <option value="ARQUITETO">ARQUITETO</option>
          <option value="ARTIFICE">ARTIFICE</option>
          <option value="ASSESSOR DE ADMINISTRACAO">ASSESSOR DE ADMINISTRACAO</option>
          <option value="ASSESSOR DE ASSUNTOS TECNICOS EDUCIONAL">ASSESSOR DE ASSUNTOS TECNICOS EDUCIONAL</option>
          <option value="ASSESSOR SERVICOS ADMINISTRATIVOS ADJUNTO">ASSESSOR SERVICOS ADMINISTRATIVOS ADJUNTO</option>
          <option value="ASSISTENTE DE ADMINISTRACAO">ASSISTENTE DE ADMINISTRACAO</option>
          <option value="ASSISTENTE DE SERVICOS ADM ADJUNTO">ASSISTENTE DE SERVICOS ADM ADJUNTO</option>
          <option value="ASSISTENTE DE SERVICOS ADMINISTRATIVO">ASSISTENTE DE SERVICOS ADMINISTRATIVO</option>
          <option value="ASSISTENTE SOCIAL">ASSISTENTE SOCIAL</option>
          <option value="ATENDENTE DE ENFERMAGEM">ATENDENTE DE ENFERMAGEM</option>
          <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
          <option value="AUXILIAR DE BIBLIOTECA">AUXILIAR DE BIBLIOTECA</option>
          <option value="AUXILIAR DE EXPEDIENTE">AUXILIAR DE EXPEDIENTE</option>
          <option value="AUXILIAR DE SECRETARIA">AUXILIAR DE SECRETARIA</option>
          <option value="AUXILIAR DE SERVICOS DIVERSOS">AUXILIAR DE SERVICOS DIVERSOS</option>
          <option value="AUXILIAR DE SERVIÇOES GERAIS">AUXILIAR DE SERVIÇOES GERAIS</option>
          <option value="AUXILIAR EM EDUCAÇÃO">AUXILIAR EM EDUCAÇÃO</option>
          <option value="AUXILIAR/Assistente Educacional (antigo Auxiliar de Educação Infantil)">AUXILIAR/Assistente Educacional (antigo Auxiliar de Educação Infantil)</option>
          <option value="CONTADOR">CONTADOR</option>
          <option value="DIRETOR">DIRETOR</option>
          <option value="DOCENTE">DOCENTE</option>
          <option value="ECONOMISTA">ECONOMISTA</option>
          <option value="EDUCADOR SOCIAL">EDUCADOR SOCIAL</option>
          <option value="ENGENHEIRO">ENGENHEIRO</option>
          <option value="ESTATISTICO">ESTATISTICO</option>
          <option value="FONOAUDIOLOGO">FONOAUDIOLOGO</option>
          <option value="FOTOGRAFO">FOTOGRAFO</option>
          <option value="INSPETOR DE ALUNO">INSPETOR DE ALUNO</option>
          <option value="INTERPRETE DE LIBRAS">INTERPRETE DE LIBRAS</option>
          <option value="JORNALISTA">JORNALISTA</option>
          <option value="MEDICO">MEDICO</option>
          <option value="MERENDEIRA">MERENDEIRA</option>
          <option value="MONITOR">MONITOR</option>
          <option value="MOTORISTA">MOTORISTA</option>
          <option value="NUTRICIONISTA">NUTRICIONISTA</option>
          <option value="OFICIAL DE APOIO TECNICO">OFICIAL DE APOIO TECNICO</option>
          <option value="ORIENTADOR EDUCACIONAL">ORIENTADOR EDUCACIONAL</option>
          <option value="ORIENTADOR EM ESP E LAZER">ORIENTADOR EM ESP E LAZER</option>
          <option value="ORIENTADORA">ORIENTADORA</option>
          <option value="PROFESSOR">PROFESSOR</option>
          <option value="PROFESSOR ATIVIDADES">PROFESSOR ATIVIDADES</option>
          <option value="PROFISSIONAL/Monitor de Atividade Complementar">PROFISSIONAL/Monitor de Atividade Complementar</option>
          <option value="PSICOLOGO">PSICOLOGO</option>
          <option value="RELACOES PUBLICAS">RELACOES PUBLICAS</option>
          <option value="SECRETÁRIO ESCOLAR">SECRETÁRIO ESCOLAR</option>
          <option value="SUPERVISOR APOIO TECNICO">SUPERVISOR APOIO TECNICO</option>
          <option value="SUPERVISOR ESCOLAR">SUPERVISOR ESCOLAR</option>
          <option value="SUPERVISORA PEDAGÓGICA">SUPERVISORA PEDAGÓGICA</option>
          <option value="TECNICO DE CONTABILIDADE">TECNICO DE CONTABILIDADE</option>
          <option value="TECNICO DE EDUCACAO">TECNICO DE EDUCACAO</option>
          <option value="TECNICO DE ESPORTE E LAZER">TECNICO DE ESPORTE E LAZER</option>
          <option value="TECNICO DE ESTATISTICA">TECNICO DE ESTATISTICA</option>
          <option value="TECNICO DE PLANEJAMENTO">TECNICO DE PLANEJAMENTO</option>
          <option value="TECNICO DE SANEAMENTO">TECNICO DE SANEAMENTO</option>
          <option value="TECNICO EM ELETRICIDADE">TECNICO EM ELETRICIDADE</option>
          <option value="TECNICO EM ELETRONICA">TECNICO EM ELETRONICA</option>
          <option value="TECNICO EM RECURSOS HUMANOS">TECNICO RECURSOS HUMANOS</option>
          <option value="TELEFONISTA">TELEFONISTA</option>
          <option value="VICE DIRETOR">VICE DIRETOR</option>
          <option value="VIGIA">VIGIA</option>
        </select>
      </div>
    </div>
    <HR>
    <div class="form-group">
      <div class="col-sm-6">
        {{ Form::label('situacao_funcional', 'Situação Funcional:', array('class'=>' control-label')) }}
        {{Form::select('situacao_funcional', array(
        $funcional->situacao_funcional => $funcional->situacao_funcional,
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
      )}}                </div>
      <div class="col-sm-3">
        {{ Form::label('data_de_admissao', 'Data de Admissão:', array('class'=>' control-label')) }}
        {{ Form::text('data_de_admissao', Input::old('data_de_admissao'), array('class'=>'date form-control', 'placeholder'=>'Data de Admissão','data-provide'=>'datepicker')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('data_de_demissao', 'Data de Demissão:', array('class'=>' control-label')) }}
        {{ Form::text('data_de_demissao', Input::old('data_de_demissao'), array('class'=>'date form-control', 'placeholder'=>'Data de Demissão','data-provide'=>'datepicker')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('Carga_horaria_semanal', 'Carga horária semanal (horas):', array('class'=>' control-label')) }}
        {{ Form::text('carga_horaria_semanal', Input::old('carga_horaria_semanal'), array('class'=>'form-control', 'placeholder'=>'Carga horária semanal (horas)')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('final_do_contrato', 'Final do Contrato:', array('class'=>' control-label')) }}
        {{ Form::text('final_do_contrato', Input::old('final_do_contrato'), array('class'=>'date form-control', 'placeholder'=>'Final do Contrato','data-provide'=>'datepicker')) }}
      </div>
    </div>
    <br>
    <HR>
    <div class="form-group">
      <div class="col-sm-4">
        {{ Form::label('registro', 'Registro:', array('class'=>' control-label')) }}
        {{ Form::text('registro', Input::old('registro'), array('class'=>'form-control', 'placeholder'=>'Registro')) }}
      </div>
      <div class="col-sm-4">
        {{ Form::label('matricula_anterior', 'Matrícula Anterior:', array('class'=>' control-label')) }}
        {{ Form::text('matricula_anterior', Input::old('matricula_anterior'), array('class'=>'form-control', 'placeholder'=>'Matrícula Anterior')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('data_acesso_funcional', 'Data Acesso Funcional:', array('class'=>' control-label')) }}
        {{ Form::text('data_acesso_funcional', Input::old('data_acesso_funcional'), array('class'=>'date form-control', 'placeholder'=>'Data Acesso Funcional','data-provide'=>'datepicker')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('letra_numero', 'Letra/Número:', array('class'=>' control-label')) }}
        {{ Form::text('letra_numero', Input::old('letra_numero'), array('class'=>'form-control', 'placeholder'=>'Letra/Número')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('regime_juridico', 'Regime Jurídico:', array('class'=>' control-label')) }}
        {{ Form::text('regime_juridico', Input::old('regime_juridico'), array('class'=>'form-control', 'placeholder'=>'Regime Jurídico')) }}
      </div>
      <div class="col-sm-3">
        {{ Form::label('motivo_contrato', 'Motivo Contrato:', array('class'=>' control-label')) }}
        {{ Form::text('motivo_contrato', Input::old('motivo_contrato'), array('class'=>'form-control', 'placeholder'=>'Motivo Contrato')) }}
      </div>
    </div>
    <br>
    <HR>
    <div class="form-group">
      <div class="col-sm-4">
        {{ Form::label('data_de_entrada_na_escola', 'Data de entrada na Suger:', array('class'=>' control-label')) }}
        {{ Form::text('data_de_entrada_na_escola', Input::old('data_de_entrada_na_escola'), array('class'=>'date form-control', 'placeholder'=>'Data de entrada na Suger','data-provide'=>'datepicker')) }}
      </div>
      <div class="col-sm-4">
        {{ Form::label('data_de_daida_da_escola', 'Data de saída da Suger:', array('class'=>' control-label')) }}
        {{ Form::text('data_de_daida_da_escola', Input::old('data_de_daida_da_escola'), array('class'=>'date form-control', 'placeholder'=>'Data de saída da Suger','data-provide'=>'datepicker')) }}
      </div>
    </div>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="form-group">
      <div class="col-sm-offset-4  col-sm-12">
        {{ Form::submit('ATUALIZAR', array('class' => 'btn btn-lg btn-primary')) }}
        {{ link_to_route('funcionais.show', 'CANCELAR', Session::get('id'), array('class' => 'btn btn-lg btn-danger')) }}
      </div>
    </div>
  </div>
</div>
{{ Form::close() }}
@stop