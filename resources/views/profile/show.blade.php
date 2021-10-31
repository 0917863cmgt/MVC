@extends('components.layout')
@section('content')
    <body id="user">
        <section id="user-section" class="container-fluid">
            <div class="row user-background">
                <div class="col-12 p-0">
                    <div class="col"><img class="background-image" src="{{$user->background_image}}"></div>
                </div>
            </div>
            <div class="row bio">
                <div class="col-4 offset-3">
                    <img class="profile-image" alt="avatar" src="{{$user->profile_image}}">
                </div>
                <div class="col-4 p-3 grey">
                    <p>{{$user->first_name}} {{Illuminate\Support\Str::limit($user->middle_name,1,'.')}} {{$user->prefix}} {{$user->last_name}}</p>
                    <p>Member since: {{$user->created_at->format('d-m-Y')}}</p>
                    <p style="margin-bottom: 0">Bio:</p>
                    <p>{{$user->bio}}</p>
                    <p>{{$followers->count()}} Followers</p>
                    <p>{{$follows->count()}} Following</p>
                    @unless(auth()->user()->id === $user->id)
                        <form method="post" action="/u/{{$user->id}}/follow" style="display: inline;">
                            @csrf
                            <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}">
                            <input type="hidden" id="follow_id" name="follow_id" value="{{$user->id}}">
                            <input type="hidden" id="follower_id" name="follower_id" value="{{auth()->user()->id}}">
                            <button class="highlight-selected-profile-button" type="submit">Follow</button>
                        </form>
                    @endunless
                </div>
            </div>
            <div class="row data">
                <div class="col-4 statistics">
                    <table id="user-statistic-table">
                        <tr>
                            <th style="text-align:right;font-weight: normal">Player</th>
                            <td style="text-align:left;">Statistics</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{$user->first_name}} {{Illuminate\Support\Str::limit($user->middle_name,1,'.')}} {{$user->prefix}} {{$user->last_name}}</td>
                        </tr>
                        <tr>
                            <th>Rank:</th>
                            <td>{{$statistic->rank}}</td>
                        </tr>
                        <tr>
                            <th>Points:</th>
                            <td>{{$statistic->rank_points}}</td>
                        </tr>
                        <tr>
                            <th>Played:</th>
                            <td>{{$statistic->matches_played}}</td>
                        </tr>
                        <tr>
                            <th>Won:</th>
                            <td>{{$statistic->matches_won}}</td>
                        </tr>
                        <tr>
                            <th>Draw:</th>
                            <td>{{$statistic->matches_draw}}</td>
                        </tr>
                        <tr>
                            <th>Lost:</th>
                            <td>{{$statistic->matches_lost}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-8 user-highlights">
                    <div class="row g-3 row-cols-3">
                        @foreach($highlights as $highlight)
                            <div class="col">
                                <a href="/highlights/s/{{$highlight->slug}}">
                                    <img class="highlight-block" src="{{$highlight->media}}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row user-bottom">
                <div class="col-4"></div>
                <div class="col-8">
                    <div style="float: right;">
                        {{$highlights->links()}}
                    </div>
                    @if(!$highlights->count() <1)
                        <div class="col-6 offset-3 no-articles" style="height: calc(40vh - 150px);">
                            <p style="text-align: center;">No highlights found</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </body>
@endsection
