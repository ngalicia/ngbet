@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nuevo Partido</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bet/partido', 'method'=>'post', 'autocomplete'=>'off'))!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Fecha</label>
					<input type="date" name="fecha" value="{{old('fecha')}}" class="form-control" placeholder="Fecha">
				</div>
				<div class="form-group">
					<label>Hora</label>
					<input type="time" name="hora" value="{{old('hora')}}" class="form-control" placeholder="Hora">
				</div>
				<div class="form-group">
					<label>Goles 1</label>
					<input type="number" name="goles_1" value="{{old('goles_1')}}" class="form-control" placeholder="Goles 1">
				</div>
				<div class="form-group">
					<label>Goles 2</label>
					<input type="number" name="goles_2" value="{{old('goles_2')}}" class="form-control" placeholder="Goles 2">
				</div>
				<div class="form-group">
					<label>Seleccion 1</label>
					<select name="id_seleccion_1" class="form-control">
						@foreach($selecciones as $sel)
							<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Seleccion 2</label>
					<select name="id_seleccion_2" class="form-control">
						@foreach($selecciones as $sel)
							<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Central</label>
					<select name="id_arbitro_1" class="form-control">
						@foreach($arbitros as $arb)
							<option value="{{$arb->id_}}">{{$arb->nombre_}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Asistente 1</label>
					<select name="id_arbitro_2" class="form-control">
						@foreach($arbitros as $arb)
							<option value="{{$arb->id_}}">{{$arb->nombre_}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Asistente 2</label>
					<select name="id_arbitro_3" class="form-control">
						@foreach($arbitros as $arb)
							<option value="{{$arb->id_}}">{{$arb->nombre_}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Ciudad</label>
					<select name="id_ciudad" class="form-control">
						@foreach($ciudades as $ciu)
							<option value="{{$ciu->id_}}">{{$ciu->nombre_}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="{{ url('/bet/partido') }}" class="btn btn-default">Regresar</a>
				</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection