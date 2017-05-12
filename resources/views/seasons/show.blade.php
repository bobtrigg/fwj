@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update a season</h2>

		<hr>

		<form method="POST" action="/seasons/{{ $season->id }} ">

			{{ csrf_field() }}
			{{ method_field('PUT') }}

			<div class="form-group">
				<label for="year">Year</label>
				<input type="text" name="year" id="year" class="form-control" value="{{ $season->year }}" />
			</div>

			<div class="form-group">
				<label for="seq_no">Sequence</label>
				<input type="text" name="seq_no" id="seq_no" class="form-control" value="{{ $season->seq_no }}" />
			</div>

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control" value="{{ $season->name }}" />
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update season</button>
			</div>

			@include('layouts.errors')

		</form>

		<a href="/seasons"><button class="btn">Back to season list</button></a>

	</div>

@endsection