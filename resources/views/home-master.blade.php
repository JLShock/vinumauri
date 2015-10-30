<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link href='https://fonts.googleapis.com/css?family=Suranna|Libre+Baskerville:400,400italic,700|Questrial|Work+Sans:400,500,600,700,800,200,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/headerfooter.css">
	<link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/main.js"></script>
</head>
<body>
	@include('home-header')

	@yield('content')
</body>
</html>