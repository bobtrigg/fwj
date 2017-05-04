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
                    @if (Auth::check())
                      <span class="crudicons">
                          <a href="/seasons/delete/{{ $season->id }}"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                          <a href=""><span class="glyphicon glyphicon-edit"></span></a>
                      </span>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    
    <a href="/seasons/create"><button class="btn btn-primary">Add a season</button></a>

@endsection
