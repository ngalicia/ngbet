@extends('layouts.admin')
@section('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Cargar CSV</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'bet/carga', 'method'=>'post', 'autocomplete'=>'off', 'files'=>'true'))!!}
			{{Form::token()}}

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<select name="opcion" class="form-control">
					<option value="TMP_PAISES">TMP_PAISES</option>
					<option value="TMP_USUARIOS">TMP_USUARIOS</option>
					<option value="TMP_EQUIPOS">TMP_EQUIPOS</option>
					<option value="TMP_JUEGOS">TMP_JUEGOS</option>
					<option value="TMP_RPONOSTICOS">TMP_RPONOSTICOS</option>
					<option value="TMP_MARCADORES">TMP_MARCADORES</option>
					<option value="TMP_JUGADORES">TMP_JUGADORES</option>
				</select>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="input-group">
					<input type="file" name="documento" value="{{old('documento')}}" class="form-control">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary">Cargar</button>
					</span>
				</div>
			</div>

			{!!Form::close()!!}
		</div>
	</div>

@endsection