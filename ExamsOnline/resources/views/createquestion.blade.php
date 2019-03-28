@extends('layouts.master')

@section('content')
	<script type="text/javascript">
		document.getElementById('nav_create').className= "nav-item active";
	</script>
	@if (session()->get('success'))
		<script type="text/javascript">
			bootstrap_alert("{{session()->get('success')}}", 'success')
		</script>
	@endif
	<form method="post" action="{{ route('questions.store') }}">
		@csrf
		<!-- Store test id and user id -->
		<input type="hidden" name="test_id" value="{{ request()->session()->get('test_id')}}">
		<input type="hidden" name="user_id" value="{{Auth::id()}}">

		<!-- Question Area -->
		<div class="form-group w-50 mx-auto mt-5">
		<label for="inputQuestion" style="color: #1475CF">Question</label>
		<input type="text" name="question" class="form-control" id="inputQuestion" placeholder="Question" required>
		</div>

	  	<div class="form-row w-50 mx-auto">

			<!-- Option A -->
		    <div class="form-group col-md-6">
		      <label for="inputOptionA" style="color: #1475CF">Option A</label>
			      <div class="form-check" >
			      	<input class="form-check-input" type="hidden" name="checka" id="CheckA" value="0">
				  	<input class="form-check-input" type="checkbox" name="checka" id="CheckA" value="1">
				  	<label class="form-check-label" for="CheckA">Correct Answer</label>
				  </div>
		      <input type="text" class="form-control" name="inputOptionA" placeholder="A." required>
		    </div>
			
			<!-- Option B -->
		    <div class="form-group col-md-6">
		      <label for="inputOptionB" style="color: #1475CF">Option B</label>
			      <div class="form-check" >
			      	<input class="form-check-input" type="hidden" name="checkb" id="CheckB" value="0">
				  	<input class="form-check-input" type="checkbox" name="checkb" id="CheckB" value="1">
				  	<label class="form-check-label" for="CheckB">Correct Answer</label>
				  </div>
		      <input type="text" class="form-control" name="inputOptionB" placeholder="B." required>
		    </div>
		    
		    <!-- Option C -->
		    <div class="form-group col-md-6">
		      <label for="inputOptionC" style="color: #1475CF">Option C</label>
			      <div class="form-check" >
			      	<!-- checkbox to check if correct answer -->
			      	<input class="form-check-input" type="hidden" name="checkc" id="CheckC" value="0">
				  	<input class="form-check-input" type="checkbox" name="checkc" id="CheckC" value="1">
				  	<label class="form-check-label" for="CheckC">Correct Answer</label>
				  </div>
		      <input type="text" class="form-control" name="inputOptionC" placeholder="C." required>
		    </div>
		    
		    <!-- Option D -->
		    <div class="form-group col-md-6">
		      <label for="inputOptionD" style="color: #1475CF">Option D</label>
			      <div class="form-check">
			      	<input class="form-check-input" type="hidden" name="checkd" id="CheckD" value="0">
				  	<input class="form-check-input" type="checkbox" name="checkd" id="CheckD" value="1">
				  	<label class="form-check-label" for="CheckD">Correct Answer</label>
				  </div>
		      <input type="text" class="form-control" name="inputOptionD" placeholder="D." required>
		    </div>

		<!-- <input type="text" class="form-control" name="answer" placeholder="Answer" required> -->
		<button type="submit" class="btn btn-primary col-md-2 offset-md-5 my-4">Submit</button>
		</div>
	</form>
	<a href="{{url('/create')}}" class="btn btn-primary col-md-2 offset-md-5 my-4">Done</a>
@stop