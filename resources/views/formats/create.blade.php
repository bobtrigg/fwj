@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add a format</h2>

		<hr>

		<form method="POST" action="/formats">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="format">Name</label>
				<textarea name="format" id="format" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add format</button>
			</div>

			@include('layouts.errors')

		</form>

		<a href="/formats"><button class="btn">Back to format list</button></a>

	</div>

@endsection