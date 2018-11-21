@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Jugador: {{$jugadores[0]->nombre_}}</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::model($jugadores, ['method'=>'patch', 'route'=>['bet.jugador.update', $jugadores[0]->id_]])!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" value="{{$jugadores[0]->nombre_}}" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label>Fecha nacimiento</label>
					<input type="text" name="fecha_nacimiento" value="{{$jugadores[0]->fecha_nacimiento_}}" class="form-control" placeholder="Fecha nacimiento">
				</div>
				<div class="form-group">
					<label>Altura</label>
					<input type="number" name="altura" value="{{$jugadores[0]->altura_}}" class="form-control" placeholder="Altura">
				</div>
				<div class="form-group">
					<label>Peso</label>
					<input type="number" name="peso" value="{{$jugadores[0]->peso_}}" class="form-control" placeholder="Peso">
				</div>
				<div class="form-group">
					<label>Camisola</label>
					<input type="number" name="camisola" value="{{$jugadores[0]->camisola_}}" class="form-control" placeholder="Camisola">
				</div>
				<div class="form-group">
					<label>Posicion</label>
					<select name="posicion" class="form-control">
						@if($jugadores[0]->posicion_ == "GK")
							<option value="GK" selected>GK</option>
							<option value="DF">DF</option>
							<option value="MF">MF</option>
							<option value="FW">FW</option>
						@elseif($jugadores[0]->posicion_ == "DF")
							<option value="GK">GK</option>
							<option value="DF" selected>DF</option>
							<option value="MF">MF</option>
							<option value="FW">FW</option>
						@elseif($jugadores[0]->posicion_ == "MF")
							<option value="GK">GK</option>
							<option value="DF">DF</option>
							<option value="MF" selected>MF</option>
							<option value="FW">FW</option>
						@elseif($jugadores[0]->posicion_ == "FW")
							<option value="GK">GK</option>
							<option value="DF">DF</option>
							<option value="MF">MF</option>
							<option value="FW" selected>FW</option>
						@endif
					</select>
				</div>
				<div class="form-group">
					<label>Goles</label>
					<input type="number" name="goles" value="{{$jugadores[0]->goles_}}" class="form-control" placeholder="Goles">
				</div>
				<div class="form-group">
					<label>Seleccion</label>
					<select name="id_seleccion" class="form-control">
						@foreach($selecciones as $sel)
							@if($sel->id_ == $jugadores[0]->id_seleccion_)
								<option value="{{$sel->id_}}" selected>{{$sel->nombre_}}</option>
							@else
								<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
							@endif
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