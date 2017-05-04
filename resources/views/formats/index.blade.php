@extends('layouts.master')

@section('content')
	<div class="container">
		<h2>Formats</h2>
	</div>
	<div class="container">
		<ul class="datalist">
	   	    @foreach($formats as $format)

	   	        <li>

                    @if (Auth::check())
                          <a href="/formats/delete/{{ $format->id }}"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
                          <a href=""><span class="glyphicon glyphicon-edit"></span></a>
                          &nbsp;&nbsp;
                    @endif

	   	            {{ $format->format }}

	   	        </li>

	   	    @endforeach
	   	</ul>
   	</div>

    <a href="/formats/create"><button class="btn btn-primary">Add a format</button></a>

@endsection
