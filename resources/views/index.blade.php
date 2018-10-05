<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }} ">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
  
  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  
</head>

<body>
  <br>
  <br>
  <div id="login-page">
    @yield('content')
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{asset('lib/jquery.backstretch.min.js')}}"></script>
  <script>
    $.backstretch("{{asset('img/login-bg.jpg')}}", {
      speed: 200
    });
  </script>
</body>

</html>
