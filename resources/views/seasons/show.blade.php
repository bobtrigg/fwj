@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update a season</h2>

		<hr>

		<form method="POST" action="/seasons/{{ $season->id }} ">

			{{ method_field('PUT') }}

			@include('seasons.formfields')

		</form>

		<a href="/seasons"><button class="btn">Back to season list</button></a>

	</div>

@endsection