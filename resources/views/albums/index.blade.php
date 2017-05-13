@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Albums</h2>
    </div>
	<div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Format</th>
                    <th>Price</th>
                    <th>Have?</th>
                </tr>
            </thead>
            <tbody>
        	    @foreach($albums as $album)
                    <tr>
                        <td>{{ $album->title }}</td>
                        <td>{{ $album->artist->name }}</td>
                        <td>{{ $album->format['format'] }}</td>
                        <td>{{ $album->price }}</td>
                        <td>{{ $album->have ? 'Yes' : 'No'}}
                            @if (Auth::check())
                              <span class="crudicons">
                                  <a href="/albums/delete/{{ $album->id }}"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                                  <a href="/albums/{{ $album->id }}"><span class="glyphicon glyphicon-edit"></span></a>
                              </span>
                            @endif
                        </td>
                    </tr>
        	    @endforeach
            </tbody>
        </table>
    </div>
    <a href="/albums/create"><button class="btn btn-primary">Add an album</button></a>
@endsection