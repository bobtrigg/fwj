@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add an album</h2>

		<hr>

		<form method="POST" action="/albums">

			@include('albums.formfields')

		</form>

		<a href="/albums"><button class="btn">Back to album list</button></a>

	</div>

@endsection