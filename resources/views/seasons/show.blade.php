@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2 class="h3">Season details</h2>


		<p class="h4">
			<span class="fieldname">Year: </span><span class="fieldval">{{ $season->year }}</span><br>
			<span class="fieldname">Sequence #: </span><span class="fieldval">{{ $season->seq_no }}</span><br>
			<span class="fieldname">Name: </span><span class="fieldval">${{ $season->name }}</span><br>
			<span class="fieldname">Outstanding cost: </span><span class="fieldval">{{ $outstandingPriceTotal }}</span><br>
			<span class="fieldname">Total cost: </span><span class="fieldval">{{ $priceTotal }}</span>
		</p>

		<p class="h4">Albums and tracks for season</h3>

		<ul class="h5">
				<ul>
					@foreach (
					$season->tracks as $track)
						<li>{{ $track->title }} from {{ $track->album->title }}</li>
					@endforeach

				</ul>
		</ul>

		<a href="/seasons"><button class="btn">Back to season list</button></a>

	</div>

@endsection