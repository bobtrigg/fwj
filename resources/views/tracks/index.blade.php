@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Tracks</h2>
    </div>
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
                        <td>
                            {{ $track->season->name }}
                            @if (Auth::check())
                              <span class="crudicons">
                                  <a href="/tracks/delete/{{ $track->id }}"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                                  <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                              </span>
                            @endif
                        </td>
                    </tr>
        	    @endforeach
            </tbody>
        </table>
    </div>
    <a href="/tracks/create"><button class="btn btn-primary">Add a track</button></a>
@endsection