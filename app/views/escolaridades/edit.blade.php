@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small>DADOS DE ESCOLARIDADE</small></h1>
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
{{ Form::model($escolaridade, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('escolaridades.update', $escolaridade->id))) }}
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>ESCOLARIDADE</B></h3> </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-5">
                {{ Form::checkbox('fundamental_incompleto') }}
                {{ Form::label('fundamental_incompleto', 'Fundamental incompleto', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::checkbox('fundamental_completo') }}
                {{ Form::label('fundamental_completo', 'Fundamental completo', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::checkbox('ensino_medio_completo') }}
                {{ Form::label('ensino_medio_completo', ' Ensino Médio - Normal / Magistério', array('class'=>' control-label')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5">
                {{ Form::checkbox('ensino_medio_incompleto') }}
                {{ Form::label('ensino_medio_incompleto', 'Ensino Médio-Normal / Magistério Específico Indígena', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-3">
                {{ Form::checkbox('superior_completo_incompleto') }}
                {{ Form::label('superior_completo_incompleto', ' Ensino Médio', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-4">
                {{ Form::checkbox('superior_completo_completo') }}
                {{ Form::label('superior_completo_completo', 'Superior completo', array('class'=>' control-label')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>PÓS-GRADUAÇÃO</B></h3> </div>
    <div class="panel-body">
        <div class="col-sm-4">
            {{ Form::checkbox('especificacao') }}
            {{ Form::label('especificacao', 'Especialização', array('class'=>' control-label')) }}
        </div>
        <div class="col-sm-4">
            {{ Form::checkbox('mestrado') }}
            {{ Form::label('mestrado', 'Mestrado', array('class'=>' control-label')) }}
        </div>
        <div class="col-sm-4">
            {{ Form::checkbox('doutorado') }}
            {{ Form::label('doutorado', 'Doutorado', array('class'=>' control-label')) }}
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3 class="panel-title"><B>OUTROS CURSOS (Formação continuada)</B></h3> </div>
    <div class="panel-body">
        {{ Form::hidden('func_dados', '', array('class'=>'form-control')) }}
        
        <div class="form-group">
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_creche') }}
                {{ Form::label('especifico_para_creche', 'Específico para creche ', array('class'=>'control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_pre_escola') }}
                {{ Form::label('especifico_para_pre_escola', 'Específico para pré-escola', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_educacao_especial_modalidade_substitutiva') }}
                {{ Form::label('especifico_para_educacao_especial_modalidade_substitutiva', 'Específico para educação especial - modalidade substitutiva', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_educacao_indigena') }}
                {{ Form::label('especifico_para_educacao_indigena', 'Específico para educação indígena', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('intercultural_diversidade') }}
                {{ Form::label('intercultural_diversidade', ' Intercultural/Diversidade ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_os_anos_iniciais_do_ensino_fundamental') }}
                {{ Form::label('especifico_para_os_anos_iniciais_do_ensino_fundamental', ' Específico para os anos iniciais do Ensino Fundamental ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_os_anos_finais_do_ensino_fundamental') }}
                {{ Form::label('especifico_para_os_anos_finais_do_ensino_fundamental', ' Específico para os anos finais do Ensino Fundamental ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_ensino_medio') }}
                {{ Form::label('especifico_para_ensino_medio', ' Específico para Ensino Médio', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_educacao_de_jovens_e_adultos') }}
                {{ Form::label('especifico_para_educacao_de_jovens_e_adultos', ' Específico para Educação de Jovens e Adultos ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_educacao_do_campo') }}
                {{ Form::label('especifico_para_educacao_do_campo', ' Específico para educação do campo ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_educacao_ambiental') }}
                {{ Form::label('especifico_para_educacao_ambiental', ' Específico para educação ambiental ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('especifico_para_educacao_em_direitos_humanos') }}
                {{ Form::label('especifico_para_educacao_em_direitos_humanos', ' Específico para educação em direitos humanos ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('genero_e_diversidade_sexual') }}
                {{ Form::label('genero_e_diversidade_sexual', ' Gênero e diversidade sexual ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('direitos_da_crianca_e_do_adolecente') }}
                {{ Form::label('direitos_da_crianca_e_do_adolecente', ' Direitos da criança e do adolescente ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('ed_rela_etnicorraciais_historia_cult_afro_bra_africana') }}
                {{ Form::label('ed_rela_etnicorraciais_historia_cult_afro_bra_africana', ' Educação para as relações etnicorraciais e história e cultura afro-brasileira e africana ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('outros') }}
                {{ Form::label('outros', 'Outros ', array('class'=>' control-label')) }}
            </div>
            <div class="col-sm-10">
                {{ Form::checkbox('nenhum_curso_adicional') }}
                {{ Form::label('nenhum_curso_adicional', ' Nenhum curso adicional', array('class'=>' control-label')) }}
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-offset-4  col-sm-12">
                {{ Form::submit('ATUALIZAR', array('class' => 'btn btn-lg btn-primary')) }}
                {{ link_to_route('escolaridades.show', 'CANCELAR','', array('class' => 'btn btn-lg btn-danger')) }}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop