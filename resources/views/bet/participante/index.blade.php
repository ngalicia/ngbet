@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Perfil</h3>

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Monto</th>
						<th>Pais</th>
						<th>Opciones</th>
					</thead>

					@foreach($participantes as $part)
						<tr>
							<td>{{$part->nombre_}}</td>
							<td>{{$part->edad_}}</td>
							<td>{{$part->monto_}}</td>
							<td>{{$part->pais_}}</td>
							<td>
								<a href="{{URL::action('ParticipanteController@edit', $part->id_)}}"><button class="btn btn-info fa fa-pencil"></button></a>
								<a href="" data-target="#modal-delete-{{$part->id_}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash"></button></a>
							</td>
						</tr>

						@include('bet.participante.modal')

					@endforeach
				</table>
			</div>

			<h4>Puntos marcador valido: {{$puntos[0]->total_}}</h4>
			<h4>Puntos resultado exacto: {{$puntos[1]->total_}}</h4>
			<h4>Puntos totales: {{$puntos[0]->total_ + $puntos[1]->total_}}</h4>

		</div>
	</div>
@endsection