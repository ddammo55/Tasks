<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/tailwindcss.css') }}">
</head>
<body>

<div class="container mx-auto">
 	@yield('content')	
</div>

</body>
</html>