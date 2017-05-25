@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2 class="h3">Album details</h2>

		<p class="h4">
			<span class="fieldname">Title: </span><span class="fieldval">{{ $album->title }}</span><br>
			<span class="fieldname">Artist: </span><span class="fieldval">{{ $album->artist->name }}</span><br>
			<span class="fieldname">Price: </span><span class="fieldval">${{ $album->price }}</span><br>
			<span class="fieldname">Have: </span><span class="fieldval">{{ $album->have ? 'Yes' : 'No' }}</span>
		</p>

		<h3 class="h4">Tracks</h3>
		<ul class="list-unstyled">
			@foreach($tracks as $track)
				<li>{{ $track->title }}</li>
			@endforeach
		</ul>


		<a href="/albums"><button class="btn">Back to album list</button></a>

	</div>

@endsection