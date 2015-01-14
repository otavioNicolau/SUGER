@extends('layouts.scaffold')

@section('main')

<h1>All Documentacaos</h1>

<p>{{ link_to_route('documentacaos.create', 'Add New Documentacao', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($documentacaos->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Func_dados</th>
				<th>Ind_numero</th>
				<th>Ind_orgao_expedidor</th>
				<th>Ind_uf</th>
				<th>Ind_data_de_emissao</th>
				<th>Cer_tipo_de_certidao</th>
				<th>Cer_termo</th>
				<th>Cer_folha</th>
				<th>Cer_livro</th>
				<th>Cer_nome_do_cartorio</th>
				<th>Cer_uf</th>
				<th>Cer_data_de_emissao</th>
				<th>Tit_numero_da_inscricao</th>
				<th>Tit_zona</th>
				<th>Tit_secao</th>
				<th>Cart_serie</th>
				<th>Cart_numero</th>
				<th>Cart_uf</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($documentacaos as $documentacao)
				<tr>
					<td>{{{ $documentacao->func_dados }}}</td>
					<td>{{{ $documentacao->ind_numero }}}</td>
					<td>{{{ $documentacao->ind_orgao_expedidor }}}</td>
					<td>{{{ $documentacao->ind_uf }}}</td>
					<td>{{{ $documentacao->ind_data_de_emissao }}}</td>
					<td>{{{ $documentacao->cer_tipo_de_certidao }}}</td>
					<td>{{{ $documentacao->cer_termo }}}</td>
					<td>{{{ $documentacao->cer_folha }}}</td>
					<td>{{{ $documentacao->cer_livro }}}</td>
					<td>{{{ $documentacao->cer_nome_do_cartorio }}}</td>
					<td>{{{ $documentacao->cer_uf }}}</td>
					<td>{{{ $documentacao->cer_data_de_emissao }}}</td>
					<td>{{{ $documentacao->tit_numero_da_inscricao }}}</td>
					<td>{{{ $documentacao->tit_zona }}}</td>
					<td>{{{ $documentacao->tit_secao }}}</td>
					<td>{{{ $documentacao->cart_serie }}}</td>
					<td>{{{ $documentacao->cart_numero }}}</td>
					<td>{{{ $documentacao->cart_uf }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('documentacaos.destroy', $documentacao->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('documentacaos.edit', 'Edit', array($documentacao->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no documentacaos
@endif

@stop
