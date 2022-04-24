<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/app.css">
    <title>@yield('tile','Welcome')</title>
</head>

<body>
<div class="container">
@include('nav')
@if(session()has->('message'))
<div class="alert alert-success" role="alert">
<strong>SUCCESS</strong> {{session()->get('message')}}
</div>
@endif
@yield('content')
</div>

</body>
</html>