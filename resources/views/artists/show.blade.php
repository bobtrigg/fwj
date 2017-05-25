@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2 class="h3">Artist details</h2>


		<p class="h4"><span class="fieldname">Artist Name:</span><span class="fieldval">{{ $artist->name }}</span></p>

		<h3 class="h4">Albums and tracks by {{ $artist->name }}</h3>

		<ul>

			@foreach ($albums as $album)
		
				<li>{{ $album->title }} ( ${{ $album->price }}, {{ $album->have ? 'purchased' : 'not purchased'}} )</li>

				<ul>

					@foreach (\App\Track::where("album_id", $album->id)->pluck('title') as $track)
						<li>{{ $track }}</li>
					@endforeach

				</ul>
	
			@endforeach

		</ul>

		<a href="/artists"><button class="btn">Back to artist list</button></a>

	</div>

@endsection