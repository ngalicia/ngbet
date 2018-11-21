@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Jugadores <a href="jugador/create"><button class="btn btn-success">Nuevo</button></a></h3>

			@include('bet.jugador.search')

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Fecha nacimiento</th>
						<th>Altura</th>
						<th>Peso</th>
						<th>Camisola</th>
						<th>Posicion</th>
						<th>Goles</th>
						<th>Opciones</th>
					</thead>

					@foreach($jugadores as $jug)
						<tr>
							<td>{{$jug->nombre_}}</td>
							<td>{{$jug->fecha_nacimiento_}}</td>
							<td>{{$jug->altura_}}</td>
							<td>{{$jug->peso_}}</td>
							<td>{{$jug->camisola_}}</td>
							<td>{{$jug->posicion_}}</td>
							<td>{{$jug->goles_}}</td>
							<td>
								<a href="{{URL::action('JugadorController@edit', $jug->id_)}}"><button class="btn btn-info fa fa-pencil"></button></a>
								<a href="" data-target="#modal-delete-{{$jug->id_}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash"></button></a>
							</td>
						</tr>

						@include('bet.jugador.modal')

					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection