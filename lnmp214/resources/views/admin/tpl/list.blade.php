@extends('common.admins')

@section('title','添加新闻的新闻')
@section('content')
<form action="" method="post">
	用户名: <input type="text" name="">
	手机号:<input type="text" name="">
	<button>提交</button>
</form>
@if(false)
<h1> zhen </h1>
@else
<h1>jia</h1>
@endif
@switch(2)
@case(1)
	First case...
	@break
@case(2)
First case...
	@break
@default
	Default case
@endswitch

@stop