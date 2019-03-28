@extends('layouts.master')

@section('content')
<?php
	use Illuminate\Support\Facades\DB;
	use App\Question;
	use App\Choice;
?>
<h1 class="question my-5" style="text-align: center; color: #1475CF";>{{$test->test_name}}</h1>
	<form action="{{url('testresult')}}">
		<input type="hidden" name="test_id" value="{{$test->id}}">

		<!-- create all questions -->
		@foreach($questions as $question)

		<input type="hidden" name="question_number" value="{{$loop->count}}">

		<input type="hidden" name="question_id{{$loop->index}}" value="{{$question->id}}">

		<div class="col-md-6 mx-auto my-5" style="background-color: rgb(200,200,200);">
			<h3>{{$question->question}}</h3>
		</div>
		<?php 
			$choices = DB::table('choices')->where('question_id', '=', $question->id)->get();
		?>
		<div>
			<!-- get index number -->
			<?php 
				$curr_itr = $loop->index;
			?>

			<!-- create all choices -->
			@foreach($choices as $choice)
			<div class="form-check col-md-6 mx-auto my-5" >
				<input class="form-check-input" type="radio" name="choice{{$curr_itr}}" value="{{$choice->choice}}">
				<label class="form-check-label" for="Radio1">{{$choice->choice}}</label>
			</div>
			@endforeach
		</div>
		@endforeach
		<button type="submit" class="btn btn-primary col-md-1 offset-md-5 mb-5">Check</button>
	</form>
@stop