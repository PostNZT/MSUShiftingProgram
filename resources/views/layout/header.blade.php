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