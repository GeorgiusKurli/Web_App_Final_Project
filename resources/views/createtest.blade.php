@extends('layouts.master')

@section('content')
	<script type="text/javascript">
		document.getElementById('nav_create').className= "nav-item active";
	</script>
	<form method="post" action="{{ route('tests.store') }}" class="col-md-8 mx-auto mt-4">
		<div class="form-group">
			@csrf
			<label for="test_name">Test Name:</label>
			<input type="text" class="form-control mb-3" name="test_name" placeholder="Your Test Name" required>
			<label for="category">Category:</label>
			<input type="text" class="form-control" name="category" placeholder="Test Category" required>
			<input type="hidden" name="user_id" value="{{Auth::id()}}">
		</div>

		<button type="submit" class="btn btn-primary col-md-2 offset-md-5">Create Test</button>
	</form>
@stop