@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nueva Seleccion</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bet/seleccion', 'method'=>'post', 'autocomplete'=>'off'))!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label>Grupo</label>
					<input type="text" name="grupo" value="{{old('grupo')}}" class="form-control" placeholder="Grupo">
				</div>
				<div class="form-group">
					<label>Confederacion</label>
					<select name="id_confederacion" class="form-control">
						@foreach($confederaciones as $conf)
							<option value="{{$conf->id_}}">{{$conf->nombre_}}</option>
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