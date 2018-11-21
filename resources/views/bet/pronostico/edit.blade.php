@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Pronostico: 
				@foreach($partidos as $par)
					@if($par->id_ == $pronosticos[0]->id_partido_)
						{{$par->fecha_.' '.$par->hora_.' -> '.$par->seleccion_1_.' vs '.$par->seleccion_2_}}
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


			{!!Form::model($pronosticos, ['method'=>'patch', 'route'=>['bet.pronostico.update', $pronosticos[0]->id_]])!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Goles 1</label>
					<input type="number" name="goles_1" class="form-control" value="{{$pronosticos[0]->goles_1_}}" placeholder="Goles 1">
				</div>
				<div class="form-group">
					<label>Goles 2</label>
					<input type="number" name="goles_2" class="form-control" value="{{$pronosticos[0]->goles_2_}}" placeholder="Goles 2">
				</div>
				<div class="form-group">
					<label>Partido</label>
					<select name="id_partido" class="form-control">
						@foreach($partidos as $par)
							@if($par->id_ == $pronosticos[0]->id_partido_)
								<option value="{{$par->id_}}" selected>{{$par->fecha_.' '.$par->hora_.' -> '.$par->seleccion_1_.' vs '.$par->seleccion_2_}}</option>
							@else
								<option value="{{$par->id_}}">{{$par->fecha_.' '.$par->hora_.' -> '.$par->seleccion_1_.' vs '.$par->seleccion_2_}}</option>
							@endif
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