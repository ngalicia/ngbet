@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nuevo Pronostico</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bet/pronostico', 'method'=>'post', 'autocomplete'=>'off'))!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Goles 1</label>
					<input type="number" name="goles_1" value="{{old('goles_1')}}" class="form-control" placeholder="Goles 1">
				</div>
				<div class="form-group">
					<label>Goles 2</label>
					<input type="number" name="goles_2" value="{{old('goles_2')}}" class="form-control" placeholder="Goles 2">
				</div>
				<div class="form-group">
					<label>Partido</label>
					<select name="id_partido" class="form-control">
						@foreach($partidos as $par)
							<option value="{{$par->id_}}">{{$par->fecha_.' '.$par->hora_.' -> '.$par->seleccion_1_.' vs '.$par->seleccion_2_}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="{{ url('/bet/pronostico') }}" class="btn btn-default">Regresar</a>
				</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection