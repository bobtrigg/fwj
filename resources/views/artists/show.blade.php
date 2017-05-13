@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update an artist</h2>

		<hr>

		<form method="POST" action="/artists/{{ $artist->id }}">

			{{ method_field('PUT') }}

			@include('artists.formfields')

		</form>

		<a href="/artists"><button class="btn">Back to artist list</button></a>

	</div>

@endsection