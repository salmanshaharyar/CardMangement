<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="{{elixir('/css/app.css')}}">
	
	@yield('header')

</head>
<body>

	<div class="container">
		@yield('content')
	</div>	


	@yield('footer')
</body>
</html>