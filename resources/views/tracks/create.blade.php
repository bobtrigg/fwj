@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		
		<h2>Add a track</h2>

		<hr>

		<form method="POST" action="/tracks">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title</label>
				<textarea name="title" id="title" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="album_id">Album</label>
				<select name="album_id" id="album_id" class="form-control">
					@foreach ($albums as $album)
						<option value="{{$album->id}}">{{$album->title}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="season_id">Season</label>
				<select name="season_id" id="season_id" class="form-control">
					@foreach ($seasons as $season)
						<option value="{{$season->id}}">{{$season->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add a track</button>
			</div>

			@include('layouts.errors')

		</form>

		<a href="/tracks"><button class="btn">Back to track list</button></a>

	</div>

@endsection