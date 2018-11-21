@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Pronosticos <a href="pronostico/create"><button class="btn btn-success">Nuevo</button></a></h3>

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Participante</th>
						<th>Partido</th>
						<th>G1</th>
						<th>G2</th>
						<th>Opciones</th>
					</thead>

					@foreach($pronosticos as $pron)
						<tr>
							<td>{{$pron->participante_}}</td>
							<td>{{$pron->partido_}}</td>
							<td>{{$pron->goles_1_}}</td>
							<td>{{$pron->goles_2_}}</td>
							<td>
								<a href="{{URL::action('PronosticoController@edit', $pron->id_)}}"><button class="btn btn-info fa fa-pencil"></button></a>
								<a href="" data-target="#modal-delete-{{$pron->id_}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash"></button></a>
							</td>
						</tr>

						@include('bet.pronostico.modal')

					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection