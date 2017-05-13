			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" value="{{ ( ! empty($album) ? $album->title : '' ) }}" />
			</div>

			<div class="form-group">
				<label for="artist_id">Artist</label>
				<select name="artist_id" id="artist_id" class="form-control">
					@foreach ($artists as $artist)
						<option value="{{$artist->id}}" {{ ( ! empty($album) && $album->artist_id == $artist->id ) ? ' selected' : '' }}>{{ $artist->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="format_id">Format</label>
				<select name="format_id" id="format_id" class="form-control">
					@foreach ($formats as $format)
						<option value="{{$format->id}}" {{ ( ! empty($album) && $format->id == $album->format_id ) ? ' selected' : '' }}>{{ $format->format }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="price">Price</label>
				<input type="text" name="price" id="price" class="form-control" value="{{ ( ! empty($album) ? $album->price : '' ) }}" />
			</div>

			<div class="form-group">
				<label for="have">Have</label>
				<select name="have" id="have" class="form-control">
					<option value="1" {{ ! empty($album) && $album->have ? 'selected' : '' }}>Yes</option>
					<option value="0" {{ ( ! empty($album) && ! $album->have ) ? ' selected' : '' }}>No</option>
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">{{ ( empty($album) ? 'Add' : 'Update' ) }}  album</button>
			</div>

			@include('layouts.errors')

