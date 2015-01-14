@extends('layouts.scaffold')
@section('main')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto">{{Session::get('nome')}} <small> HABILITAÇÃO</small></h1>
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
{{ Form::open(array('route' => 'habilitacos.store', 'class' => 'form-horizontal')) }}
{{ Form::hidden('func_dados', Session::get('id'), array('class'=>'form-control', 'placeholder'=>'Func_dados')) }}
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th> </th>
                <th>ARÉA DE CONHECIMENTO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ Form::checkbox('antropologia') }}</td>
                <td>{{ Form::label('antropologia', 'ANTROPOLOGIA', array('class'=>' control-label')) }}</td>
            </tr>
            <tr>
                <td>{{ Form::checkbox('arte') }}</td>
                <td>{{ Form::label('arte', 'ARTE', array('class'=>' control-label')) }}</td>
            </tr>
            <tr>
                <td>{{ Form::checkbox('artes') }}</td>
                <td>{{ Form::label('arte', 'ARTES', array('class'=>' control-label')) }}</td>
            </tr>
            <tr>
                <td>{{ Form::checkbox('biologia') }}</td>
                <td>{{ Form::label('biologia', 'BIOLOGIA', array('class'=>' control-label')) }}</td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ciencias') }}
                </td>
                <td>
                    {{ Form::label('ciencias', 'CIENCIAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ciencias_da_natureza') }}
                </td>
                <td>
                    {{ Form::label('ciencias_da_natureza', 'CIENCIAS DA NATUREZA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ciencias_humanas') }}
                </td>
                <td>
                    {{ Form::label('ciencias_humanas', 'CIENCIAS HUMANAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ciencias_humanas_e_suas_tecnologias') }}
                </td>
                <td>
                    {{ Form::label('ciencias_humanas_e_suas_tecnologias', 'CIÊNCIAS HUMANAS E SUAS TECNOLOGIAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('codigos_e_suas_tecnologias') }}
                </td>
                <td>
                    {{ Form::label('codigos_e_suas_tecnologias', 'CÓDIGOS E SUAS TECNOLOGIAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('comunicacao_linguagem_leitura_e_producao_de_texto') }}
                </td>
                <td>
                    {{ Form::label('comunicacao_linguagem_leitura_e_producao_de_texto', 'COMUNICAÇÃO, LINGUAGEM, LEITURA E PRODUÇÃO DE TEXTO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('curriculo_e_avaliacao_na_educacao_infantil') }}
                </td>
                <td>
                    {{ Form::label('curriculo_e_avaliacao_na_educacao_infantil', 'CURRICULO E AVALIAÇÃO NA EDUCAÇÃO INFANTIL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('curriculo_e_avaliacao_nos_anos_iniciais_do_ensino_fundamental') }}
                </td>
                <td>
                    {{ Form::label('curriculo_e_avaliacao_nos_anos_iniciais_do_ensino_fundamental', 'CURRICULO E AVALIAÇÃO NOS ANOS INICIAIS DO ENSINO FUNDAMENTAL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica') }}
                </td>
                <td>
                    {{ Form::label('didatica', 'DIDÁTICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_da_arte') }}
                </td>
                <td>
                    {{ Form::label('didatica_da_arte', 'DIDÁTICA DA ARTE', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_da_geografia') }}
                </td>
                <td>
                    {{ Form::label('didatica_da_geografia', 'DIDÁTICA DA GEOGRAFIA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_da_historia') }}
                </td>
                <td>
                    {{ Form::label('didatica_da_historia', 'DIDÁTICA DA HISTÓRIA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_da_linguagem') }}
                </td>
                <td>
                    {{ Form::label('didatica_da_linguagem', 'DIDÁTICA DA LINGUAGEM', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_da_matematica') }}
                </td>
                <td>
                    {{ Form::label('didatica_da_matematica', 'DIDÁTICA DA MATEMÁTICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_das_ciencias') }}
                </td>
                <td>
                    {{ Form::label('didatica_das_ciencias', 'DIDÁTICA DAS CIÊNCIAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('didatica_geral') }}
                </td>
                <td>
                    {{ Form::label('didatica_geral', 'DIDÁTICA GERAL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('disciplinas_voltadas_ao_atendimento_as_necessidades_educacionais') }}
                </td>
                <td>
                    {{ Form::label('disciplinas_voltadas_ao_atendimento_as_necessidades_educacionais', 'DISCIPLINAS VOLTADAS AO ATENDIMENTO ÀS NECESSIDADES EDUCACIONAIS ESPECÍFICAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('educacao_artistica') }}
                </td>
                <td>
                    {{ Form::label('educacao_artistica', 'EDUCACAO ARTISTICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('educacao_especial_e_inclusiva') }}
                </td>
                <td>
                    {{ Form::label('educacao_especial_e_inclusiva', 'EDUCAÇÃO ESPECIAL E INCLUSIVA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('educacao_fisica') }}
                </td>
                <td>
                    {{ Form::label('educacao_fisica', 'EDUCACAO FISICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('educacao_infantil') }}
                </td>
                <td>
                    {{ Form::label('educacao_infantil', 'EDUCACAO INFANTIL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('educacao_sexual') }}
                </td>
                <td>
                    {{ Form::label('educacao_sexual', 'EDUCAÇÃO SEXUAL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_da_educacao_fisica_escolar') }}
                </td>
                <td>
                    {{ Form::label('ensino_da_educacao_fisica_escolar', 'ENSINO DA EDUCAÇÃO FÍSICA ESCOLAR ', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_da_geografia') }}
                </td>
                <td>
                    {{ Form::label('ensino_da_geografia', 'ENSINO DA GEOGRAFIA ', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_da_historia') }}
                </td>
                <td>
                    {{ Form::label('ensino_da_historia', 'ENSINO DA HISTÓRIA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_da_lingua_portuguesa') }}
                </td>
                <td>
                    {{ Form::label('ensino_da_lingua_portuguesa', 'ENSINO DA LÍNGUA PORTUGUESA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_da_matematica') }}
                </td>
                <td>
                    {{ Form::label('ensino_da_matematica', 'ENSINO DA MATEMATICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_das_artes_e_musica') }}
                </td>
                <td>
                    {{ Form::label('ensino_das_artes_e_musica', 'ENSINO DAS ARTES E MÚSICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_de_ciencias') }}
                </td>
                <td>
                    {{ Form::label('ensino_de_ciencias', 'ENSINO DE CIÊNCIAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('ensino_religioso') }}
                </td>
                <td>
                    {{ Form::label('ensino_religioso', 'ENSINO RELIGIOSO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('estagio_supervisionado') }}
                </td>
                <td>
                    {{ Form::label('estagio_supervisionado', 'ESTÁGIO SUPERVISIONADO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('estagio_supervisionado_ii_educacao_infantil') }}
                </td>
                <td>
                    {{ Form::label('estagio_supervisionado_ii_educacao_infantil', 'ESTÁGIO SUPERVISIONADO II - EDUCAÇÃO INFANTIL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('estagio_supervisionado_iii_ensino_fundamental') }}
                </td>
                <td>
                    {{ Form::label('estagio_supervisionado_iii_ensino_fundamental', 'ESTÁGIO SUPERVISIONADO III - ENSINO FUNDAMENTAL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('estatist_aplic_educacao') }}
                </td>
                <td>
                    {{ Form::label('estatist_aplic_educacao', 'ESTATÍST. APLIC. EDUCAÇÃO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('estatistica_aplicada_a_educacao') }}
                </td>
                <td>
                    {{ Form::label('estatistica_aplicada_a_educacao', 'ESTATÍSTICA APLICADA A EDUCAÇÃO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('filosofia') }}
                </td>
                <td>
                    {{ Form::label('filosofia', 'FILOSOFIA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('fisica') }}
                </td>
                <td>
                    {{ Form::label('fisica', 'FISICA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('fundamentos_da_educacao') }}
                </td>
                <td>
                    {{ Form::label('fundamentos_da_educacao', 'FUNDAMENTOS DA EDUCAÇÃO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('fundamentos_socio_filosoficos') }}
                </td>
                <td>
                    {{ Form::label('fundamentos_socio_filosoficos', 'FUNDAMENTOS SÓCIO-FILOSÓFICOS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('geografia') }}
                </td>
                <td>
                    {{ Form::label('geografia', 'GEOGRAFIA:', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('historia') }}
                </td>
                <td>
                    {{ Form::label('historia', 'HISTORIA:', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('historia_da_educacao') }}
                </td>
                <td>
                    {{ Form::label('historia_da_educacao', 'HISTÓRIA DA EDUCAÇÃO', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('lingua_brasileira_de_sinais_libras') }}
                </td>
                <td>
                    {{ Form::label('lingua_brasileira_de_sinais_libras', 'LÍNGUA BRASILEIRA DE SINAIS - LIBRAS', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('lingua_estrangeira') }}
                </td>
                <td>
                    {{ Form::label('lingua_estrangeira', 'LINGUA ESTRANGEIRA', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('lingua_estrangeira_moderna_espanhol') }}
                </td>
                <td>
                    {{ Form::label('lingua_estrangeira_moderna_espanhol', 'LÍNGUA ESTRANGEIRA MODERNA - ESPANHOL', array('class'=>' control-label')) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ Form::checkbox('lingua_estrangeira_moderna_frances') }}
                    <td>
                        {{ Form::label('lingua_estrangeira_moderna_frances', 'LÍNGUA ESTRANGEIRA MODERNA - FRANCÊS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('lingua_estrangeira_moderna_ingles') }}
                    </td>
                    <td>
                        {{ Form::label('lingua_estrangeira_moderna_ingles', 'LÍNGUA ESTRANGEIRA MODERNA - INGLÊS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('lingua_portuguesa') }}
                    </td>
                    <td>
                        {{ Form::label('lingua_portuguesa', 'LINGUA PORTUGUESA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('lingua_portuguesa_literatura') }}
                    </td>
                    <td>
                        {{ Form::label('lingua_portuguesa_literatura', 'LÍNGUA PORTUGUESA/LITERATURA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('linguagens') }}
                    </td>
                    <td>
                        {{ Form::label('linguagens', 'LINGUAGENS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('literatura_infantil_e_contacao_de_historias') }}
                    </td>
                    <td>
                        {{ Form::label('literatura_infantil_e_contacao_de_historias', 'LITERATURA INFANTIL E CONTAÇÃO DE HISTÓRIAS ', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('matematica') }}
                    </td>
                    <td>
                        {{ Form::label('matematica', 'MATEMATICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('matematica_contextualizada') }}
                    </td>
                    <td>
                        {{ Form::label('matematica_contextualizada', 'MATEMÁTICA CONTEXTUALIZADA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ Form::checkbox('matematica_e_suas_tecnologias') }}
                        <td>
                            {{ Form::label('matematica_e_suas_tecnologias', 'MATEMÁTICA E SUAS TECNOLOGIAS', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('metodologia_cientifica') }}
                        </td>
                        <td>
                            {{ Form::label('metodologia_cientifica', 'METODOLOGIA CIENTÍFICA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('org_educ_nac_estrutura') }}
                        </td>
                        <td>
                            {{ Form::label('org_educ_nac_estrutura', 'ORG. EDUC. NAC. ESTRUTURA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('organizacao_e_funcionamento_do_sistema_de_ensino') }}
                        </td>
                        <td>
                            {{ Form::label('organizacao_e_funcionamento_do_sistema_de_ensino', 'ORGANIZAÇÃO E FUNCIONAMENTO DO SISTEMA DE ENSINO ', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('outras') }}
                        </td>
                        <td>
                            {{ Form::label('outras', 'OUTRAS', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('pratica_pedagogica') }}
                        </td>
                        <td>
                            {{ Form::label('pratica_pedagogica', 'PRÁTICA PEDAGÓGICA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('psicologia') }}
                        </td>
                        <td>
                            {{ Form::label('psicologia', 'PSICOLOGIA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('psicologia_da_educacao') }}
                        </td>
                        <td>
                            {{ Form::label('psicologia_da_educacao', 'PSICOLOGIA DA EDUCAÇÃO', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('psicologia_do_desenvolvimento') }}
                        </td>
                        <td>
                            {{ Form::label('psicologia_do_desenvolvimento', 'PSICOLOGIA DO DESENVOLVIMENTO', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('quimica') }}
                        </td>
                        <td>
                            {{ Form::label('quimica', 'QUIMICA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('sociologia') }}
                        </td>
                        <td>
                            {{ Form::label('sociologia', 'SOCIOLOGIA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('sociologia_da_educacao') }}
                        </td>
                        <td>
                            {{ Form::label('sociologia_da_educacao', 'SOCIOLOGIA DA EDUCAÇÃO', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('tecnica') }}
                        </td>
                        <td>
                            {{ Form::label('tecnica', 'TECNICA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::checkbox('tecnologias_em_educacao') }}
                            <td>
                                {{ Form::label('tecnologias_em_educacao', 'TECNOLOGIAS EM EDUCAÇÃO', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::checkbox('trab_concl_curso_tcc') }}
                            </td>
                            <td>
                                {{ Form::label('trab_concl_curso_tcc', 'TRAB. CONCL. CURSO –TCC', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::checkbox('trabalho_de_conclusao_de_curso') }}
                            </td>
                            <td>
                                {{ Form::label('trabalho_de_conclusao_de_curso', 'TRABALHO DE CONCLUSÃO DE CURSO', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-sm-offset-4  col-sm-12">
                            {{ Form::submit('CADASTRAR', array('class' => 'btn btn-lg btn-primary')) }}
                            {{ link_to_route('habilitacos.show', 'CANCELAR',Session::get('id'), array('class' => 'btn btn-lg btn-danger')) }}
                        </div>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
            @stop