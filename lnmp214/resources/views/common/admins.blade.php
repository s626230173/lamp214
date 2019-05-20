<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<style type="text/css">
		table,td{font-family:微软雅黑;text-align:center;}
		h3{font-family:微软雅黑;}
		.cur{width:100px;}
		.ids{width:50px;}
	</style>
</head>
<body>
	<center>
	@include('admin/tpl/menu')
	@section('content')
		
		@show	
	</center>	
	@include('admin/tpl/cos')
</body>
</html>
