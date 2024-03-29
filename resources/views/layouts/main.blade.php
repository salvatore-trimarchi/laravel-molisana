<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- FONT: Teko, Open Sans, Raleway, Playfair Display --}}
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	{{-- MAIN CSS (SASS) --}}
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	{{-- PARTIAL CSS --}}
	@yield('partial-css')
	<title>@yield('title', 'ciccio') | La Molisana</title>
</head>
<body>
	
	@include('partials.header')

	@yield('content')

	@include('partials.footer')

</body>
</html>