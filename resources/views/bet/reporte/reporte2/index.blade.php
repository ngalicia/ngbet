@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Reporte 2 - Resultados por equipo</h3>

			@include('bet.reporte.reporte2.search')

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
					</thead>

					@foreach($resultados as $res)
						<tr>
							<td>{{$res->fecha_}}</td>
							<td>{{$res->hora_}}</td>
							<td>{{$res->seleccion_1_}}</td>
							<td>{{$res->goles_1_}}</td>
							<td>{{$res->goles_2_}}</td>
							<td>{{$res->seleccion_2_}}</td>
						</tr>
					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection