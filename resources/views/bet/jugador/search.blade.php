{!!Form::open(array('url'=>'bet/jugador', 'method'=>'get', 'autocomplete'=>'off'))!!}

	<div class="form-group">
		<div class="input-group">

			<select name="id_seleccion" class="form-control">
				@foreach($selecciones as $sel)
					@if($sel->id_ == $jugadores[0]->id_seleccion_)
						<option value="{{$sel->id_}}" selected>{{$sel->nombre_}}</option>
					@else
						<option value="{{$sel->id_}}">{{$sel->nombre_}}</option>
					@endif
				@endforeach
			</select>

			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>
	</div>

{{Form::close()}}