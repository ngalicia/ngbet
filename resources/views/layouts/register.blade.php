<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NGBet</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>NGBet</b></a>
      </div><!-- /.login-logo -->
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Registro</h3>
			
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
			@endif


			{!!Form::open(array('url'=>'layouts/register', 'method'=>'post', 'autocomplete'=>'off'))!!}
			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label>Edad</label>
					<input type="number" name="edad" value="{{old('edad')}}" class="form-control" placeholder="Edad">
				</div>
				<div class="form-group">
					<label>Monto</label>
					<input type="number" name="monto" value="{{old('monto')}}" class="form-control" placeholder="Monto">
				</div>
				<div class="form-group">
					<label>Pais</label>
					<select name="id_pais" class="form-control">
						@foreach($paises as $pai)
							<option value="{{$pai->id_}}">{{$pai->nombre_}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Registrar</button>
					<a href="{{ url('/') }}" class="btn btn-default">Regresar</a>
				</div>

			{!!Form::close()!!}
		</div>
	</div>

    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('js/app.min.js')}}"></script>

  </body>
</html>
