@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add a season</h2>

		<hr>

		<form method="POST" action="/seasons">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="year">Year</label>
				<textarea name="year" id="year" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="seq_no">Sequence</label>
				<textarea name="seq_no" id="seq_no" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="name">Name</label>
				<textarea name="name" id="name" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add season</button>
			</div>

			@include('layouts.errors')

		</form>

		<a href="/seasons"><button class="btn">Back to season list</button></a>

	</div>

@endsection