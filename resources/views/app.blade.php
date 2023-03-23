<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name', 'app_name') }}</title>
	@viteReactRefresh
	@vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>
<body>
	<!-- <div id="app"></div> -->
	<h1 class="text-3xl font-bold underline">
		Hello world!
	</h1>
</body>
</html>