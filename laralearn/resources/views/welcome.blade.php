<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    @if (count($friends) === 1)
    	{{ $friends[0] }}
    @elseif (count($friends) > 0)
    	I have multiple friends!
    @else
    	You have no friends
	@endif

	@unless ()

	@endunless
</body>
</html>