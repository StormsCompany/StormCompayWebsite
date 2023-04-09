<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<!-- CSRF Token -->
				<meta name="csrf-token" content="{{ csrf_token() }}">

				<title>{{ config('app.name', 'Laravel') }}</title>

				<!-- Fonts -->
				<link rel="dns-prefetch" href="//fonts.gstatic.com">
				<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

				<!-- bootstrap css -->
				<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
				<!-- style css -->
				<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
				<!-- Responsive-->
				<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
				<!-- gpstyle-->
				<link rel="stylesheet" href="{{ asset('assets/css/gpstyle.css') }}" />
				<!-- fevicon -->
				<link rel="icon" href="{{ asset('assets/images/fevicon.png') }}" type="image/gif" />
				<!-- Scrollbar Custom CSS -->
				<link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}" />
				<!-- Tweaks for older IEs-->
				<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
								media="screen" />
				{{--  <link rel="stylesheet" type="text/css"
								href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  --}}
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
								integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
								crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
				<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
								crossorigin="anonymous"></script>

				<!-- Scripts -->
				<link rel="stylesheet" href="{{ asset('css/main.css') }}">
				@vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
				<div id="app">
								<main class="py-4">
												@yield('content')
								</main>
				</div>
</body>

</html>
