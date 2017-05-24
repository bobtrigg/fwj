@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Seasons</h2>
    </div>
    <div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Sequence #</th>
                    <th>Cost outstanding</th>
                    <th>Cost total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($seasons as $season)
                    <tr>
                        <td><a href="/seasons/{{ $season->id }}">{{ $season->name }}</a></td>
                        <td>{{ $season->year }}</td>
                        <td>{{ $season->seq_no }}</td>
                        <td><?php echo $seasonRepo->getPriceTotal($season, \App\Repositories\Seasons::ALL); ?></td>
                        <td><?php echo $seasonRepo->getPriceTotal($season, \App\Repositories\Seasons::NEED); ?>

                            @if (Auth::check())
                                <span class="crudicons">
                                    <a href="/seasons/delete/{{ $season->id }}"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                                    <a href="/seasons/edit/{{ $season->id }}"><span class="glyphicon glyphicon-edit"></span></a>
                                </span>
                            @endif

                        </td>
                    </tr>


               @endforeach

            </tbody>
        </table>
    </div>
        
    <a href="/seasons/create"><button class="btn btn-primary">Add a season</button></a>

@endsection
