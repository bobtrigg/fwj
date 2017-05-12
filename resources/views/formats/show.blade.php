@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update a format</h2>

		<hr>

		<form method="POST" action="/formats/{{ $format->id }}">

			{{ method_field('PUT') }}

			@include('formats.formfields')

		</form>

		<a href="/formats"><button class="btn">Back to format list</button></a>

	</div>

@endsection