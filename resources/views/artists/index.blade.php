@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Artists</h2>
    </div>
	<div class="container">
    	<ul class="datalist">
    	    @foreach($artists as $artist)
    	        <li>

                    @if (Auth::check())
                      <a href="/artists/delete/{{ $artist->id }}">
                          <span class="glyphicon glyphicon-remove crud-glyph"></span>
                      </a>
                      <a href="/artists/edit/{{ $artist->id }}">
                          <span class="glyphicon glyphicon-edit crud-glyph"></span>
                      </a>
                    @endif

                    <a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a>

                </li>
    	    @endforeach
    	</ul>
    </div>
    <a href="/artists/create"><button class="btn btn-primary">Add an artist</button></a>
@endsection