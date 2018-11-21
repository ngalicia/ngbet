@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Participante: {{$participantes[0]->nombre_}}</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::model($participantes, ['method'=>'patch', 'route'=>['bet.participante.update', $participantes[0]->id_]])!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" class="form-control" value="{{$participantes[0]->nombre_}}" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label>Edad</label>
					<input type="number" name="edad" class="form-control" value="{{$participantes[0]->edad_}}" placeholder="Edad">
				</div>
				<div class="form-group">
					<label>Monto</label>
					<input type="number" name="monto" class="form-control" value="{{$participantes[0]->monto_}}" placeholder="Monto">
				</div>
				<div class="form-group">
					<label>Pais</label>
					<select name="id_pais" class="form-control">
						@foreach($paises as $pai)
							@if($pai->id_ == $participantes[0]->id_pais_)
								<option value="{{$pai->id_}}" selected>{{$pai->nombre_}}</option>
							@else
								<option value="{{$pai->id_}}">{{$pai->nombre_}}</option>
							@endif
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="{{ url('bet/participante') }}" class="btn btn-default">Regresar</a>
				</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection