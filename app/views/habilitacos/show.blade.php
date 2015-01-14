@extends('layouts.scaffold')
@section('main')
@foreach ($habilitacoes as $habilitaco)
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header texto"> {{Session::get('nome')}} <small> HABILITAÇÃO</small>
         {{ link_to_route('habilitacos.edit', 'ATUALIZAR', $habilitaco->id , array('class' => 'btn btn-lg btn-primary col-sm-offset-2')) }}
        </h1>
    </div>
</div>
<div class="form-horizontal">
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
                    <td>
                        @if($habilitaco->antropologia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                        @endif
                    </td>
                    <td>
                    {{ Form::label('antropologia', 'ANTROPOLOGIA', array('class'=>' control-label')) }}</td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->arte == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                        @endif
                    </td>
                    <td>
                        {{ Form::label('arte', 'ARTE', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->artes == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                        @endif
                    </td>
                    <td>{{ Form::label('artes', 'ARTES', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->biologia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('biologia', 'BIOLOGIA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ciencias == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ciencias', 'CIENCIAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ciencias_da_natureza == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ciencias_da_natureza', 'CIENCIAS DA NATUREZA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ciencias_humanas == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ciencias_humanas', 'CIENCIAS HUMANAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ciencias_humanas_e_suas_tecnologias == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ciencias_humanas_e_suas_tecnologias', 'CIÊNCIAS HUMANAS E SUAS TECNOLOGIAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->codigos_e_suas_tecnologias == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('codigos_e_suas_tecnologias', 'CÓDIGOS E SUAS TECNOLOGIAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->comunicacao_linguagem_leitura_e_producao_de_texto == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('comunicacao_linguagem_leitura_e_producao_de_texto', 'COMUNICAÇÃO, LINGUAGEM, LEITURA E PRODUÇÃO DE TEXTO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->curriculo_e_avaliacao_na_educacao_infantil == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('curriculo_e_avaliacao_na_educacao_infantil', 'CURRICULO E AVALIAÇÃO NA EDUCAÇÃO INFANTIL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->curriculo_e_avaliacao_nos_anos_iniciais_do_ensino_fundamental == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('curriculo_e_avaliacao_nos_anos_iniciais_do_ensino_fundamental', 'CURRICULO E AVALIAÇÃO NOS ANOS INICIAIS DO ENSINO FUNDAMENTAL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica', 'DIDÁTICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica_da_arte == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica_da_arte', 'DIDÁTICA DA ARTE', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica_da_geografia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica_da_geografia', 'DIDÁTICA DA GEOGRAFIA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica_da_historia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica_da_historia', 'DIDÁTICA DA HISTÓRIA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica_da_linguagem == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica_da_linguagem', 'DIDÁTICA DA LINGUAGEM', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica_da_matematica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica_da_matematica', 'DIDÁTICA DA MATEMÁTICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->trabalho_de_conclusao_de_curso == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('trabalho_de_conclusao_de_curso', 'DIDÁTICA DAS CIÊNCIAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->didatica_geral == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('didatica_geral', 'DIDÁTICA GERAL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->disciplinas_voltadas_ao_atendimento_as_necessidades_educacionais == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('disciplinas_voltadas_ao_atendimento_as_necessidades_educacionais', 'DISCIPLINAS VOLTADAS AO ATENDIMENTO ÀS NECESSIDADES EDUCACIONAIS ESPECÍFICAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->educacao_artistica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('educacao_artistica', 'EDUCACAO ARTISTICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->educacao_especial_e_inclusiva == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('educacao_especial_e_inclusiva', 'EDUCAÇÃO ESPECIAL E INCLUSIVA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->educacao_fisica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('educacao_fisica', 'EDUCACAO FISICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->trabalho_de_conclusao_de_curso == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('educacao_infantil', 'EDUCACAO INFANTIL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->educacao_sexual == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('educacao_sexual', 'EDUCAÇÃO SEXUAL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_da_educacao_fisica_escolar == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_da_educacao_fisica_escolar', 'ENSINO DA EDUCAÇÃO FÍSICA ESCOLAR ', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_da_geografia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_da_geografia', 'ENSINO DA GEOGRAFIA ', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_da_historia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_da_historia', 'ENSINO DA HISTÓRIA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_da_lingua_portuguesa == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_da_lingua_portuguesa', 'ENSINO DA LÍNGUA PORTUGUESA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_da_matematica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_da_matematica', 'ENSINO DA MATEMATICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_das_artes_e_musica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_das_artes_e_musica', 'ENSINO DAS ARTES E MÚSICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_de_ciencias == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_de_ciencias', 'ENSINO DE CIÊNCIAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->ensino_religioso == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('ensino_religioso', 'ENSINO RELIGIOSO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->estagio_supervisionado == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('estagio_supervisionado', 'ESTÁGIO SUPERVISIONADO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->estagio_supervisionado_ii_educacao_infantil == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('estagio_supervisionado_ii_educacao_infantil', 'ESTÁGIO SUPERVISIONADO II - EDUCAÇÃO INFANTIL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->estagio_supervisionado_iii_ensino_fundamental == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('estagio_supervisionado_iii_ensino_fundamental', 'ESTÁGIO SUPERVISIONADO III - ENSINO FUNDAMENTAL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->estatist_aplic_educacao == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('estatist_aplic_educacao', 'ESTATÍST. APLIC. EDUCAÇÃO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->estatistica_aplicada_a_educacao == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('estatistica_aplicada_a_educacao', 'ESTATÍSTICA APLICADA A EDUCAÇÃO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->filosofia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('filosofia', 'FILOSOFIA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->fisica == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('fisica', 'FISICA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->fundamentos_da_educacao == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('fundamentos_da_educacao', 'FUNDAMENTOS DA EDUCAÇÃO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->fundamentos_socio_filosoficos == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('fundamentos_socio_filosoficos', 'FUNDAMENTOS SÓCIO-FILOSÓFICOS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->geografia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('geografia', 'GEOGRAFIA:', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->historia == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('historia', 'HISTORIA:', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->historia_da_educacao == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('historia_da_educacao', 'HISTÓRIA DA EDUCAÇÃO', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->lingua_brasileira_de_sinais_libras == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('lingua_brasileira_de_sinais_libras', 'LÍNGUA BRASILEIRA DE SINAIS - LIBRAS', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->lingua_estrangeira == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('lingua_estrangeira', 'LINGUA ESTRANGEIRA', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->lingua_estrangeira_moderna_espanhol == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                    @endif                                        </td>
                    <td>
                        {{ Form::label('lingua_estrangeira_moderna_espanhol', 'LÍNGUA ESTRANGEIRA MODERNA - ESPANHOL', array('class'=>' control-label')) }}
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($habilitaco->lingua_estrangeira_moderna_frances == 1)
                        <B>SIM</B>
                        @else
                        <B>NÃO</B>
                        @endif                                        <td>
                            {{ Form::label('lingua_estrangeira_moderna_frances', 'LÍNGUA ESTRANGEIRA MODERNA - FRANCÊS', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->lingua_estrangeira_moderna_ingles == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('lingua_estrangeira_moderna_ingles', 'LÍNGUA ESTRANGEIRA MODERNA - INGLÊS', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->lingua_portuguesa == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('lingua_portuguesa', 'LINGUA PORTUGUESA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->lingua_portuguesa_literatura == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('lingua_portuguesa_literatura', 'LÍNGUA PORTUGUESA/LITERATURA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->linguagens == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('linguagens', 'LINGUAGENS', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->literatura_infantil_e_contacao_de_historias == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('literatura_infantil_e_contacao_de_historias', 'LITERATURA INFANTIL E CONTAÇÃO DE HISTÓRIAS ', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->matematica == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('matematica', 'MATEMATICA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->matematica_contextualizada == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                        @endif                                        </td>
                        <td>
                            {{ Form::label('matematica_contextualizada', 'MATEMÁTICA CONTEXTUALIZADA', array('class'=>' control-label')) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($habilitaco->matematica_e_suas_tecnologias == 1)
                            <B>SIM</B>
                            @else
                            <B>NÃO</B>
                            @endif                                        <td>
                                {{ Form::label('matematica_e_suas_tecnologias', 'MATEMÁTICA E SUAS TECNOLOGIAS', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->metodologia_cientifica == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('metodologia_cientifica', 'METODOLOGIA CIENTÍFICA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->org_educ_nac_estrutura == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('org_educ_nac_estrutura', 'ORG. EDUC. NAC. ESTRUTURA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->organizacao_e_funcionamento_do_sistema_de_ensino == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('organizacao_e_funcionamento_do_sistema_de_ensino', 'ORGANIZAÇÃO E FUNCIONAMENTO DO SISTEMA DE ENSINO ', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->outras == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('outras', 'OUTRAS', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->pratica_pedagogica == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('pratica_pedagogica', 'PRÁTICA PEDAGÓGICA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->psicologia == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('psicologia', 'PSICOLOGIA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->psicologia_da_educacao == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('psicologia_da_educacao', 'PSICOLOGIA DA EDUCAÇÃO', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->psicologia_do_desenvolvimento == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('psicologia_do_desenvolvimento', 'PSICOLOGIA DO DESENVOLVIMENTO', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->quimica == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('quimica', 'QUIMICA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->sociologia == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('sociologia', 'SOCIOLOGIA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->trabalho_de_conclusao_de_curso == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('sociologia_da_educacao', 'SOCIOLOGIA DA EDUCAÇÃO', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->tecnica == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                            @endif                                        </td>
                            <td>
                                {{ Form::label('tecnica', 'TECNICA', array('class'=>' control-label')) }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @if($habilitaco->tecnologias_em_educacao == 1)
                                <B>SIM</B>
                                @else
                                <B>NÃO</B>
                                @endif                                        <td>
                                    {{ Form::label('tecnologias_em_educacao', 'TECNOLOGIAS EM EDUCAÇÃO', array('class'=>' control-label')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if($habilitaco->trab_concl_curso_tcc == 1)
                                    <B>SIM</B>
                                    @else
                                    <B>NÃO</B>
                                @endif                                        </td>
                                <td>
                                    {{ Form::label('trab_concl_curso_tcc', 'TRAB. CONCL. CURSO –TCC', array('class'=>' control-label')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if($habilitaco->trabalho_de_conclusao_de_curso == 1)
                                    <B>SIM</B>
                                    @else
                                    <B>NÃO</B>
                                    @endif
                                </td>
                                <td>
                                    {{ Form::label('trabalho_de_conclusao_de_curso', 'TRABALHO DE CONCLUSÃO DE CURSO', array('class'=>' control-label')) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{ Form::close() }}
                @endforeach
                @stop