<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    @if (count($friends) === 1)
    	{{ $friends[0] }}
    @elseif (count($friends) > 0)
    	@foreach ($friends as $friend)
    		I have a friend called: {{ $friend}} <br>
    	@endforeach
    @else
    	You have no friends
	@endif

	@while (true)
		This is a bad idea because it will continue of ever
	@endwhile
</body>
</html>