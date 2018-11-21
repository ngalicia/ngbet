@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nuevo Jugador</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bet/jugador', 'method'=>'post', 'autocomplete'=>'off'))!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label>Fecha nacimiento</label>
					<input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" class="form-control" placeholder="Fecha nacimiento">
				</div>
				<div class="form-group">
					<label>Altura</label>
					<input type="number" name="altura" value="{{old('altura')}}" class="form-control" placeholder="Altura">
				</div>
				<div class="form-group">
					<label>Peso</label>
					<input type="number" name="peso" value="{{old('peso')}}" class="form-control" placeholder="Peso">
				</div>
				<div class="form-group">
					<label>Camisola</label>
					<input type="number" name="camisola" value="{{old('camisola')}}" class="form-control" placeholder="Camisola">
				</div>
				<div class="form-group">
					<label>Posicion</label>
					<select name="posicion" class="form-control">
						<option value="GK">GK</option>
						<option value="DF">DF</option>
						<option value="MF">MF</option>
						<option value="FW">FW</option>
					</select>
				</div>
				<div class="form-group">
					<label>Goles</label>
					<input type="number" name="goles" value="{{old('goles')}}" class="form-control" placeholder="Goles">
				</div>
				<div class="form-group">
					<label>Seleccion</label>
					<select name="id_seleccion" class="form-control">
						@foreach($selecciones as $sel)
							<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="{{ url('/bet/jugador') }}" class="btn btn-default">Regresar</a>
				</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection