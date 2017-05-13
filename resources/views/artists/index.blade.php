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
                      <a href="/artists/delete/{{ $artist->id }}"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
                      <a href="/artists/{{ $artist->id }}"><span class="glyphicon glyphicon-edit"></span></a>
                      &nbsp;&nbsp;
                    @endif

    	            {{ $artist->name }}

                </li>
    	    @endforeach
    	</ul>
    </div>
    <a href="/artists/create"><button class="btn btn-primary">Add an artist</button></a>
@endsection