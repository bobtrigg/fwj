@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Update an album</h2>

		<hr>

		<form method="POST" action="/albums/{{ $album->id }}">

			{{ method_field('PUT') }}

			@include('albums.formfields')

		</form>

		<a href="/albums"><button class="btn">Back to album list</button></a>

	</div>

@endsection