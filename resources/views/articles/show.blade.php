@extends('app')
@section('content')
	<h1>Articles</h1>
	<hr>
	<h2><a href="#">{{$articles['title']}}</a></h2>
	<article>
		<div class="body">
		{{$articles['content']}}
		</div>
	</article>
@stop