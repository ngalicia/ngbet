@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Partido: 

				@foreach($selecciones as $sel)
					@if($sel->id_ == $partidos[0]->id_seleccion_1_)
						{{$sel->nombre_.' vs '}}
					@endif
				@endforeach

				@foreach($selecciones as $sel)
					@if($sel->id_ == $partidos[0]->id_seleccion_2_)
						{{$sel->nombre_}}
					@endif
				@endforeach

			</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::model($partidos, ['method'=>'patch', 'route'=>['bet.partido.update', $partidos[0]->id_]])!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Fecha</label>
					<input type="date" name="fecha" class="form-control" value="{{$partidos[0]->fecha_}}" placeholder="Fecha">
				</div>
				<div class="form-group">
					<label>Hora</label>
					<input type="time" name="hora" class="form-control" value="{{$partidos[0]->hora_}}" placeholder="Hora">
				</div>
				<div class="form-group">
					<label>Goles 1</label>
					<input type="number" name="goles_1" class="form-control" value="{{$partidos[0]->goles_1_}}" placeholder="Goles 1">
				</div>
				<div class="form-group">
					<label>Goles 2</label>
					<input type="number" name="goles_2" class="form-control" value="{{$partidos[0]->goles_2_}}" placeholder="Goles 2">
				</div>
				<div class="form-group">
					<label>Seleccion 1</label>
					<select name="id_seleccion_1" class="form-control">
						@foreach($selecciones as $sel)
							@if($sel->id_ == $partidos[0]->id_seleccion_1_)
								<option value="{{$sel->id_}}" selected>{{$sel->nombre_}}</option>
							@else
								<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Seleccion 2</label>
					<select name="id_seleccion_2" class="form-control">
						@foreach($selecciones as $sel)
							@if($sel->id_ == $partidos[0]->id_seleccion_2_)
								<option value="{{$sel->id_}}" selected>{{$sel->nombre_}}</option>
							@else
								<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Central</label>
					<select name="id_arbitro_1" class="form-control">
						@foreach($arbitros as $arb)
							@if($arb->id_ == $partidos[0]->id_arbitro_1_)
								<option value="{{$arb->id_}}" selected>{{$arb->nombre_}}</option>
							@else
								<option value="{{$arb->id_}}">{{$arb->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Asistente 1</label>
					<select name="id_arbitro_2" class="form-control">
						@foreach($arbitros as $arb)
							@if($arb->id_ == $partidos[0]->id_arbitro_2_)
								<option value="{{$arb->id_}}" selected>{{$arb->nombre_}}</option>
							@else
								<option value="{{$arb->id_}}">{{$arb->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Asistente 2</label>
					<select name="id_arbitro_3" class="form-control">
						@foreach($arbitros as $arb)
							@if($arb->id_ == $partidos[0]->id_arbitro_3_)
								<option value="{{$arb->id_}}" selected>{{$arb->nombre_}}</option>
							@else
								<option value="{{$arb->id_}}">{{$arb->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Ciudad</label>
					<select name="id_ciudad" class="form-control">
						@foreach($ciudades as $ciu)
							@if($ciu->id_ == $partidos[0]->id_ciudad_)
								<option value="{{$ciu->id_}}" selected>{{$ciu->nombre_}}</option>
							@else
								<option value="{{$ciu->id_}}">{{$ciu->nombre_}}</option>
							@endif
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