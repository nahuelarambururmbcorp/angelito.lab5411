<!DOCTYPE html>
<html lang="es">
	<head>


		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->	

		<title>Tango</title>

		<meta name="author" content="Tango">
		<meta name="description" content="Tango"/>
		<meta name="keywords" content=""/>

		<meta name="Revisit" content="1 days"/>
		<meta name="robots" content="index, follow, all"/>
		<meta name="revisit-after" content="1 days"/>
			 	
		<meta property="og:title" content="Tango" />
		<meta property="og:description" content="Tango" />
		<meta property="og:site_name" content="" />

		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}" />
		<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-196x196.png') }}" sizes="196x196" />
		<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
		<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32" />
		<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
		<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-128.png') }}" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

	    <!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	    <!-- Bootstrap V5.1.3 css -->
	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous">
	    <!-- Style css -->
		<link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}"/>

<!-- Partner ticketing -->
<script defer data-gyg-partner-hash="9MRZPLV" data-gyg-currency="USD" src="https://cdn.getyourguide.com/partner-ticketing/latest/ticketing.umd.min.js"></script>
<!-- End partner ticketing -->


        @include ('partials.favicons')
        @yield('styles')
	</head>

    <body class="Home" id="home">
		<!-- Preload -->
		<div id="preloader">
			<div id="status">
				<img src="{{ asset('assets/img/precarga/loading.gif') }}"/>
			</div>
		</div>
        <div class="panel-overlay"></div>

        @include('websiteDolar.partials.header')

    

        @yield('content')


        @include('website.partials.footer')


        </body>

</html>
