<!DOCTYPE html>
<html>
<head>
	@yield('header')
	<title>@yield('title')</title>
</head>
<body>
	<section id="container">
		<header class="header black-bg">
			@yield('navbar')
		</header>
		<aside>
			<div id="sidebar" class="nav-collapse ">
				@yield('sidebar')
			</div>
		</aside>
		<section id="main-content">
	    	<section class="wrapper site-min-height">
		        <div class="row">
					<div class="col-lg-12">
		           		@yield('content_header')
						@yield('content')		        
					</div>
		        </div>
	      	</section>
		</section>

		<footer class="site-footer">
		  @include('layout.footer')
		</footer>
	</section>

	@yield('scripts')
</body>
</html>