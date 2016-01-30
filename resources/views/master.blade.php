<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

	<title>@yield('title')</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen and (max-width: 900)">

</head>

<body>

	<div>
		@yield('header')
	</div>

	<hr/>

	<div>
		@yield('content')
	</div>
	
	<div>
		@yield('footer')
	</div>


</body>