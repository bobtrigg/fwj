@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add a track</h2>

		<hr>

		<form method="POST" action="/tracks">

			@include('tracks.formfields')

		</form>

		<a href="/tracks"><button class="btn">Back to track list</button></a>

	</div>

@endsection