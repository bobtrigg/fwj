{{ csrf_field() }}

<div class="form-group">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" class="form-control" value="{{ ( ! empty($artist) ? $artist->name : '' ) }}" />
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">{{ ( empty($artist) ? 'Add' : 'Update' ) }} artist</button>
</div>

@include('layouts.errors')

