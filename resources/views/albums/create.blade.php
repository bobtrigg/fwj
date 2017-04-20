@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h1>Add an album</h1>

		<hr>

		<form method="POST" action="/albums">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title</label>
				<textarea name="title" id="title" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="artist_id">Artist</label>
				<textarea name="artist_id" id="artist_id" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="format_id">Format</label>
				<textarea name="format_id" id="format_id" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="price">Price</label>
				<textarea name="price" id="price" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="have">Have</label>
				<textarea name="have" id="have" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add album</button>
			</div>

			@include('layouts.errors')

		</form>

		<a href="/albums"><button class="btn">Back to album list</button></a>

	</div>

@endsection