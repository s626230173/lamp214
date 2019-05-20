<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
	<script src='/js/jquery.min.js'></script>
</head>
<body>


	<form action="/create" method='post'>
		用户名: <input type="text" name='uname' />

		{{csrf_field()}}

		<button>提交</button>

	</form>

	<a href="/edit/10/www">修改</a>

	<a href="{{route('ac',['id'=>10])}}">跳转</a>
	

	<button id='buts'>点击</button>
	<script>
/*
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});*/

		$('#buts').click(function(){

			/*$.post('/create',{},function(data){

				console.log(data);
			})*/

			$.get('/admin',{},function(data){

				console.log(data)
			})
		})
	</script>
	
</body>
</html>