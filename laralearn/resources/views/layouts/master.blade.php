<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<nav>
		<a href="/">Home</a>
		@yield ('navigation-bar')
	</nav>
	<section>
		@yield ('content')
	</section>
</body>
</html>