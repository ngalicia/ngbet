@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Selecciones <a href="seleccion/create"><button class="btn btn-success">Nueva</button></a></h3>

		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nombre</th>
						<th>Grupo</th>
						<th>Confederacion</th>
						<th>Opciones</th>
					</thead>

					@foreach($selecciones as $sel)
						<tr>
							<td>{{$sel->nombre_}}</td>
							<td>{{$sel->grupo_}}</td>
							<td>{{$sel->confederacion_}}</td>
							<td>
								<a href="{{URL::action('SeleccionController@edit', $sel->id_)}}"><button class="btn btn-info fa fa-pencil"></button></a>
								<a href="" data-target="#modal-delete-{{$sel->id_}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash"></button></a>
							</td>
						</tr>

						@include('bet.seleccion.modal')

					@endforeach
				</table>
			</div>

		</div>
	</div>
@endsection