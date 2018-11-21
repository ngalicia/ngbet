@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Partidos <a href="partido/create"><button class="btn btn-success">Nuevo</button></a></h3>

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Seleccion 1</th>
						<th>G1</th>
						<th>G2</th>
						<th>Seleccion 2</th>
						<th>Central</th>
						<th>Asistente 1</th>
						<th>Asistente 2</th>
						<th>Ciudad</th>
						<th>Opciones</th>
					</thead>

					@foreach($partidos as $par)
						<tr>
							<td>{{$par->fecha_}}</td>
							<td>{{$par->hora_}}</td>
							<td>{{$par->seleccion_1_}}</td>
							<td>{{$par->goles_1_}}</td>
							<td>{{$par->goles_2_}}</td>
							<td>{{$par->seleccion_2_}}</td>
							<td>{{$par->arbitro_1_}}</td>
							<td>{{$par->arbitro_2_}}</td>
							<td>{{$par->arbitro_3_}}</td>
							<td>{{$par->ciudad_}}</td>
							<td>
								<a href="{{URL::action('PartidoController@edit', $par->id_)}}"><button class="btn btn-info fa fa-pencil"></button></a>
								<a href="" data-target="#modal-delete-{{$par->id_}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash"></button></a>
							</td>
						</tr>

						@include('bet.partido.modal')

					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection