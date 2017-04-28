@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add an artist</h2>

		<hr>

		<form method="POST" action="/artists">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<textarea name="name" id="name" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add artist</button>
			</div>

			@include('layouts.errors')

		</form>

		<a href="/artists"><button class="btn">Back to artist list</button></a>

	</div>

@endsection