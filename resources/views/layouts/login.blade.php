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
        <h3>Login</h3>
        
        {!!Form::open(array('url'=>'layouts/login', 'method'=>'get', 'autocomplete'=>'off'))!!}

          <div class="form-group">
            <label>Participante</label>
            <select name="id_participante" class="form-control">
              @foreach($participantes as $part)
                <option value="{{$part->id_}}">{{$part->nombre_}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
          </div>

        {{Form::close()}}

          <div class="form-group">
            <a href="{{url('/register')}}"><button class="btn btn-danger btn-block" type="reset">Registrar</button></a>
          </div>
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
