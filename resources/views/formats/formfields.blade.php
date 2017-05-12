{{ csrf_field() }}

<div class="form-group">
	<label for="format">Name</label>
	<input type="text" name="format" id="format" class="form-control" value="{{ ( empty($format) ? '' : $format->name ) }}"></textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">{{ ( empty($format) ? 'Add' : 'Update' ) }} format</button>
</div>

@include('layouts.errors')