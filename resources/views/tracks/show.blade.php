@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update a track</h2>

		<hr>

		<form method="POST" action="/tracks/{{ $track->id }}">

			{{ method_field('PUT') }}

			@include('tracks.formfields')

		</form>

		<a href="/tracks"><button class="btn">Back to track list</button></a>

	</div>

@endsection