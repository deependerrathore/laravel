<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<nav>
		@section ('navigation-bar')
			<a href="/">Home</a>
		@show
	</nav>
	<section>
		@yield ('content')
	</section>
</body>
</html>