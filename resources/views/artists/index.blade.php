@extends('layouts.master')

@section('content')
	<div class="container">
    	<ul>
    	    @foreach($artists as $artist)
    	        <li>
    	            {{ $artist->name }}
    	        </li>
    	    @endforeach
    	</ul>
    </div>
    <a href="/artists/create"><button class="btn btn-primary">Add an artist</button></a>
@endsection