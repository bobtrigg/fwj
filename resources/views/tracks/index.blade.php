@extends('layouts.master')

@section('content')
	<div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Album</th>
                    <th>Season</th>
                </tr>
            </thead>
            <tbody>
        	    @foreach($tracks as $track)
                    <tr>
                        <td>{{ $track->title }}</td>
                        <td>{{ $track->album->title }}</td>
                        <td>{{ $track->season->name }}</td>
                    </tr>
        	    @endforeach
            </tbody>
        </table>
    </div>
    <a href="/tracks/create"><button class="btn btn-primary">Add a track</button></a>
@endsection