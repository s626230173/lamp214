<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="/admin/goods/30" method='post'>
		手机号: <input type="text" name='phone' />

		{{ method_field('PUT') }}

		{{csrf_field()}}

		<button>提交</button>
	</form>
	
</body>
</html>

