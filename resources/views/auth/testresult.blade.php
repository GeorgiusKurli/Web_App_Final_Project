@extends('layouts.master')

@section('content')
<div>

	<h1 style="text-align: center;">You got {{$score}}/{{$question_number}} Correct!<h1>
	<?php 
		if ($score<$question_number/2) {
			echo '<img class="my-5" style="display:block; margin-left: auto; margin-right: auto; width: 20%;" src="https://media0.giphy.com/media/uCeC6zBklAwgM/giphy.gif?cid=3640f6095c98cff0514b47772eccd345"> ';
			
		}
		else{
			echo '<img class="my-5" style="display:block; margin-left: auto; margin-right: auto; width: 40%;" src="https://media1.tenor.com/images/05146a636fd6e91e5e689f20cbccd521/tenor.gif?itemid=12084051"> ';
		}
	?>
	<div class="col-md-2 offset-md-5">
		<a class="btn btn-primary mx-auto" href="javascript:history.back()">Retry</a>
		<a class="btn btn-primary mx-auto" href="{{url('browse')}}">Browse</a>
		
	</div>
</div>
@stop