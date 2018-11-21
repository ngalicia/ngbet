@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Seleccion: {{$selecciones[0]->nombre_}}</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::model($selecciones, ['method'=>'patch', 'route'=>['bet.seleccion.update', $selecciones[0]->id_]])!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" class="form-control" value="{{$selecciones[0]->nombre_}}" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label>Grupo</label>
					<input type="text" name="grupo" class="form-control" value="{{$selecciones[0]->grupo_}}" placeholder="Grupo">
				</div>
				<div class="form-group">
					<label>Confederacion</label>
					<select name="id_confederacion" class="form-control">
						@foreach($confederaciones as $conf)
							@if($conf->id_ == $selecciones[0]->id_confederacion_)
								<option value="{{$conf->id_}}" selected>{{$conf->nombre_}}</option>
							@else
								<option value="{{$conf->id_}}">{{$conf->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="{{ url('/bet/seleccion') }}" class="btn btn-default">Regresar</a>
				</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection