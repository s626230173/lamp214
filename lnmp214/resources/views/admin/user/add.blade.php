<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/admin/goods" method='post'>
		手机号: <input type="text" name='phone' />
		{{csrf_field()}}
		<button>提交</button>
	</form>
	<a href="/admin/edit/10">修改</a>
	<a href="{{route('ar')}}">列表页</a>
	<a href="/admin/goods/2">显示页面信息</a>
	<a href="/admin/goods/10/edit">修改</a>
	<form action="/admin/goods/30" method='post'>
		{{ method_field('DELETE') }}
		{{csrf_field()}}
		<button>删除</button>
	</form>
</body>
</html>