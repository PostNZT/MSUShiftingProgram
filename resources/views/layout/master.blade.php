<!DOCTYPE html>
<html>
<head>
	@include('layout.header')
	<title>@yield('title')</title>
</head>
<body>
	<section id="container">
		<header class="header black-bg">
			@include('layout.navbar')
		</header>
		<aside>
			<div id="sidebar" class="nav-collapse ">
				@include('layout.sidebar')
			</div>
		</aside>
		<section id="main-content">
	    	<section class="wrapper">
		        <div class="row">
					@yield('content')
		        </div>
	      	</section>
		</section>

		<footer class="site-footer">
		  @include('layout.footer')
		</footer>
	</section>

	@include('layout.scripts')
</body>
</html>