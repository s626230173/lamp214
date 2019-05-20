<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
</head>
<body>
	@foreach($arr as $k => $v)

		<li>{{$v->name}}</li>

	@endforeach

	{{--$arr->links()--}}

	{{--!! $arr->render() !!--}}

	{{foo()}}
	
</body>
</html>