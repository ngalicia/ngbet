@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Reporte 4 - Ganadores</h3>

			@include('bet.reporte.reporte4.search')

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Posicion</th>
						<th>Participante</th>
						<th>Puntos</th>
					</thead>

					@foreach($ganadores as $key => $gan)
						<tr>
							<td>{{$key + 1}}</td>
							<td>{{$gan->participante_}}</td>
							<td>{{$gan->puntos_}}</td>
						</tr>
					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection