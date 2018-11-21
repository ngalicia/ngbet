@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Reporte 5 - Posiciones pronosticadas</h3>

			@include('bet.reporte.reporte5.search')

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Posicion</th>
						<th>Seleccion</th>
						<th>Puntos</th>
					</thead>

					@foreach($posiciones as $key => $pos)
						<tr>
							<td>{{$key + 1}}</td>
							<td>{{$pos->seleccion_}}</td>
							<td>{{$pos->puntos_}}</td>
						</tr>
					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection