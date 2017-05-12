{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" id="title" class="form-control" value="{{ ( ! empty($track) ? $track->title : '' ) }}"/>
</div>

<div class="form-group">
	<label for="album_id">Album</label>
	<select name="album_id" id="album_id" class="form-control">
		@foreach ($albums as $album)
			<option value="{{$album->id}}"{{ (! empty($track) && $track->album_id == $album->id) ? ' selected' : '' }}>{{$album->title}}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="season_id">Season</label>
	<select name="season_id" id="season_id" class="form-control">
		@foreach ($seasons as $season)
			<option value="{{$season->id}}{{ (! empty($track) && $track->season_id == $season->id) ? ' selected' : '' }}">{{$season->name}}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">{{ ( empty($track) ? 'Add' : 'Update' ) }} track</button>
</div>

@include('layouts.errors')