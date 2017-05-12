@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add a season</h2>

		<hr>

		<form method="POST" action="/seasons">

			@include('seasons.formfields')

		</form>

		<a href="/seasons"><button class="btn">Back to season list</button></a>

	</div>

@endsection