@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update a season</h2>

		<form method="POST" action="/seasons/{{ $season->id }} ">

			{{ method_field('PUT') }}

			<p class="h4">Total cost for season: {{ $priceTotal }}</p>
			<p class="h4">Total oustanding cost for season: {{ $outstandingPriceTotal }}</p>

			<hr>

			@include('seasons.formfields')

		</form>

		<a href="/seasons"><button class="btn">Back to season list</button></a>

	</div>

@endsection
