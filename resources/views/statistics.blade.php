@extends('components.layout')
@section('content')
    <body id="statistics">
        <section id="statistics-section" class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1">
                    <table id="statistic-table">
                        <tr>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Points</th>
                            <th>Played</th>
                            <th>Won</th>
                            <th>Draw</th>
                            <th>Lost</th>
                        </tr>
                        @foreach($statistics as $statistic)
                        <tr>
                            <td><a href="/u/{{$statistic->player->id}}">{{$statistic->player->first_name}} {{Illuminate\Support\Str::limit($statistic->player->middle_name,1,'.')}} {{$statistic->player->prefix}} {{$statistic->player->last_name}}</a></td>
                            <td>{{$statistic->rank}}</td>
                            <td>{{$statistic->rank_points}}</td>
                            <td>{{$statistic->matches_played}}</td>
                            <td>{{$statistic->matches_won}}</td>
                            <td>{{$statistic->matches_draw}}</td>
                            <td>{{$statistic->matches_lost}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </body>
@endsection
