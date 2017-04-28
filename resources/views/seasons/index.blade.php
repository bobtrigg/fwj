@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Seasons</h2>
    </div>
    <div class="container">
        <ul>
            @foreach($seasons as $season)
                <li>
                    Year:&nbsp;
                    {{ $season->year }}
                    ;&nbsp;Seq #:&nbsp;
                    {{ $season->seq_no }}
                    ;&nbsp;Name:&nbsp;
                    {{ $season->name }}
                </li>
            @endforeach
        </ul>
    </div>
    
    <a href="/seasons/create"><button class="btn btn-primary">Add a season</button></a>

@endsection
