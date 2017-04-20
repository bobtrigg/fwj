@extends('layouts.master')

@section('content')

	<div class="container">
		<ul>
	   	    @foreach($formats as $format)
	   	        <li>
	   	            {{ $format->format }}
	   	        </li>
	   	    @endforeach
	   	</ul>
   	</div>

    <a href="/formats/create"><button class="btn btn-primary">Add a format</button></a>

@endsection
