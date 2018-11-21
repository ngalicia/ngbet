@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Reporte 3 - Goleadores</h3>

			@include('bet.reporte.reporte3.search')

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Posicion</th>
						<th>Nombre</th>
						<th>Fecha nacimiento</th>
						<th>Altura</th>
						<th>Peso</th>
						<th>Camisola</th>
						<th>Posicion</th>
						<th>Goles</th>
						<th>Seleccion</th>
					</thead>

					@foreach($goleadores as $key => $gol)
						<tr>
							<td>{{$key + 1}}</td>
							<td>{{$gol->nombre_}}</td>
							<td>{{$gol->fecha_nacimiento_}}</td>
							<td>{{$gol->altura_}}</td>
							<td>{{$gol->peso_}}</td>
							<td>{{$gol->camisola_}}</td>
							<td>{{$gol->posicion_}}</td>
							<td>{{$gol->goles_}}</td>
							<td>{{$gol->seleccion_}}</td>
						</tr>
					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection