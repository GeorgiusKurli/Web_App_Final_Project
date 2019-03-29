@extends('layouts.master')

@section('content')
	<script type="text/javascript">
		document.getElementById('nav_test').className= "nav-item active";
	</script>

	@if(Session::has('error'))
		<script type="text/javascript">
			bootstrap_alert("{{Session::get('error')}}", "danger");
		</script>
	@endif

	<form class="col-md-8 offset-md-2 mt-2" action="{{url('test')}}">
		<div class="form-group row">
			@csrf
			<input class="form-control ml-auto col-sm-6 col-md-4" type="search" placeholder="Search" name="search">
			<button type="submit" class="btn btn-primary mr-auto"> Submit </button>
		</div>
		<div class="form-group row">
			<div class="dropdown col-md-2 offset-md-7">
				<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Advanced</button>
				<div class="dropdown-menu">
					<div class="dropdown-item">
						<label class="form-check-label" for="search_id">ID</label>
						<input class="form-control" type="search" name="id" id="search_id">
					</div>
					<div class="dropdown-item">
						<label class="form-check-label" for="search_category">Category</label>
						<input class="form-control" type="search" name="category" id="search_category">
					</div>
					
				</div>
			</div>
		</div>
	</form>
	<div>
		<table class="col-md-8 offset-md-2">
			<thead>
				<tr>
					<td><b>ID</b></td>
					<td><b>Test Name</b></td>
					<td><b>Category</b></td>
				</tr>
			</thead>
			<tbody>
				@foreach($tests as $test)
				<tr>
					<td>{{$test->id}}</td>
					<td><a href="{{ url('showquestion/' . $test->id) }}">{{$test->test_name}}</a></td>
					<td>{{$test->category}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	<div>
@stop