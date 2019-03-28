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
	<h5 class="my-3" style="text-align: center;">Test Editing Area</h5>
	<div>
		<form action="{{route('questions.create')}}">
			
			<button class="btn btn-primary col-md-2 offset-md-5 my-4">Create A Question</button>
		</form>
		<table class="col-md-10 offset-md-1">
			<thead>
				<tr style="border-bottom: solid;">
					<td><b>No.</b></td>
					<td><b>Question</b></td>
					<td><b>Action</b></td>
				</tr>
			</thead>
			<tbody>
				@foreach($questions as $question)
				<tr style="border-bottom: solid;">
					<td>{{$loop->iteration}}</td>
					<td>{{$question->question}}</td>
					<!-- <td><a href="{{ route('questions.edit',$question->id)}}" class="btn btn-primary">Edit</a></td> -->
					<td>
					<form action="{{ route('questions.destroy', $question->id)}}" method="post">
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