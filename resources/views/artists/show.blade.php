@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>View/update an artist</h2>

		<hr>

		<p class="h3"><span class="fieldname">Artist Name:</span><span class="fieldval">{{ $artist->name }}</span></p>

		<h3>Albums and tracks by {{ $artist->name }}</h3>

		<ul>
			@foreach ($albums as $album)
		
				<li class="h4">{{ $album->title }} ( ${{ $album->price }} )</li>

				<ul>

					@php 
						$tracks = \App\Track::where("album_id", $album->id)->get();
						foreach ($tracks as $track) {
							echo '<li>' . $track->title . '</li>';
						}
					@endphp

				</ul>
	
			@endforeach
		</ul>

		<a href="/artists"><button class="btn">Back to artist list</button></a>

	</div>

@endsection