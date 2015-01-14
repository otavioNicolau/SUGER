@extends('layouts.scaffold')

@section('main')

<h1>All Enderecos</h1>

<p>{{ link_to_route('enderecos.create', 'Add New Endereco', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($enderecos->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Logradouro</th>
				<th>Numero</th>
				<th>Complemento</th>
				<th>Bairro</th>
				<th>Uf</th>
				<th>Municipio</th>
				<th>Distrito</th>
				<th>Cep</th>
				<th>Zona_residencial</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($enderecos as $endereco)
				<tr>
					<td>{{{ $endereco->func_dados }}}</td>
					<td>{{{ $endereco->logradouro }}}</td>
					<td>{{{ $endereco->numero }}}</td>
					<td>{{{ $endereco->complemento }}}</td>
					<td>{{{ $endereco->bairro }}}</td>
					<td>{{{ $endereco->uf }}}</td>
					<td>{{{ $endereco->municipio }}}</td>
					<td>{{{ $endereco->distrito }}}</td>
					<td>{{{ $endereco->cep }}}</td>
					<td>{{{ $endereco->zona_residencial }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('enderecos.destroy', $endereco->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('enderecos.edit', 'Edit', array($endereco->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no enderecos
@endif

@stop
