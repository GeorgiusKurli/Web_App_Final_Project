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
	<h5 class="my-3" style="text-align: center;">Test Creation Area</h5>
	<div>
		<a href="{{ url('/createtest') }}" class="btn btn-primary col-md-2 offset-md-5 my-4" >Create New Test</a>
		<table class="col-md-10 offset-md-1">
			<thead>
				<tr style="border-bottom: solid;">
					<td><b>ID</b></td>
					<td><b>Test Name</b></td>
					<td><b>Category</b></td>
					<td colspan="2"><b style="text-align: center;">Action</b></td>
				</tr>
			</thead>
			<tbody>
				@foreach($tests as $test)
				<tr style="border-bottom: solid;">
					<td>{{$test->id}}</td>
					<td>{{$test->test_name}}</td>
					<td>{{$test->category}}</td>
					<td style="padding-right: 0;"><a href="{{ route('tests.edit', $test->id)}}" class="btn btn-primary">Edit</a></td>
					<td>
					<form action="{{ route('tests.destroy', $test->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	<div>
@stop