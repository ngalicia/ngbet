{!!Form::open(array('url'=>'bet/reporte/reporte2', 'method'=>'get', 'autocomplete'=>'off'))!!}

	<div class="form-group">

		<select name="id_seleccion" class="form-control">
			@foreach($selecciones as $sel)
				<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
			@endforeach
		</select>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Generar</button>
		</div>

	</div>

{{Form::close()}}