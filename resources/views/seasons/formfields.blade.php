{{ csrf_field() }}

<div class="form-group">
	<label for="year">Year</label>
	<input type="text" name="year" id="year" class="form-control" value="{{ ( ! empty($season) ? $season->year : '' ) }}" />
</div>

<div class="form-group">
	<label for="seq_no">Sequence</label>
	<input type="text" name="seq_no" id="seq_no" class="form-control" value="{{ ( ! empty($season) ? $season->seq_no : '' ) }}" />
</div>

<div class="form-group">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" class="form-control" value="{{ ( ! empty($season) ? $season->name : '' ) }}" />
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">{{ ( empty($season) ? 'Add' : 'Update' ) }} season</button>
</div>

@include('layouts.errors')

