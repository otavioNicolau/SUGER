@extends('layouts.scaffold')
@section('main')
@foreach ($enderecos as $endereco)
<!-- Page Heading -->
<div class="row ">
	<div class="col-lg-12">
		<h1 class="page-header texto">{{Session::get('nome')}} <small>ENDEREÇO</small>
        {{ link_to_route('enderecos.edit', 'ATUALIZAR', array($endereco->id), array('class' => 'btn btn-lg btn-primary col-sm-offset-3')) }}

		</h1>
	</div>
</div>
<div class="form-horizontal">
	<div class="panel panel-primary">
		<div class="panel-heading"> <h3 class="panel-title"><B>INFORMAÇÕES DE ENDEREÇO</B></h3> </div>
		<div class="panel-body">
			
			<div class="form-group">
				<div class="col-sm-5">
					{{ Form::label('logradouro', 'Logradouro:', array('class'=>' control-label')) }}
					{{ Form::text('logradouro', $endereco->logradouro, array('class'=>'form-control texto', 'placeholder'=>'Logradouro' ,'disabled')) }}
				</div>
				<div class="col-sm-2">
					{{ Form::label('numero', 'Número:', array('class'=>' control-label')) }}
					{{ Form::text('numero', $endereco->numero, array('class'=>'form-control texto', 'placeholder'=>'Número','disabled')) }}
				</div>
				<div class="col-sm-2">
					{{ Form::label('uf', 'Uf:', array('class'=>' control-label')) }}
					{{ Form::text('uf', $endereco->uf, array('class'=>'form-control texto', 'placeholder'=>'UF','disabled')) }}
				</div>
				<div class="col-sm-3">
					{{ Form::label('cep', 'Cep:', array('class'=>' control-label')) }}
					{{ Form::text('cep', $endereco->cep, array('class'=>'form-control texto', 'placeholder'=>'CEP','disabled')) }}
				</div>
				<div class="col-sm-6">
					{{ Form::label('complemento', 'Complemento:', array('class'=>' control-label')) }}
					{{ Form::text('complemento', $endereco->complemento, array('class'=>'form-control texto', 'placeholder'=>'Complemento','disabled')) }}
				</div>
				<div class="col-sm-6">
					{{ Form::label('bairro', 'Bairro:', array('class'=>' control-label')) }}
					{{ Form::text('bairro', $endereco->bairro, array('class'=>'form-control texto', 'placeholder'=>'Bairro','disabled')) }}
				</div>
				<div class="col-sm-3">
					{{ Form::label('municipio', 'Município:', array('class'=>' control-label')) }}
					{{ Form::text('municipio',$endereco->municipio, array('class'=>'form-control texto', 'placeholder'=>'Município','disabled')) }}
				</div>
				<div class="col-sm-3">
					{{ Form::label('distrito', 'Distrito:', array('class'=>' control-label')) }}
					{{ Form::text('distrito',$endereco->distrito, array('class'=>'form-control texto', 'placeholder'=>'Distrito','disabled')) }}
				</div>
				<div class="col-sm-3">
					{{ Form::label('zona_residencial', 'Zona Residencial:', array('class'=>' control-label')) }}
					{{ Form::text('zona_residencial', $endereco->zona_residencial, array('class'=>'form-control texto', 'placeholder'=>'Zona residencial','disabled')) }}
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@stop