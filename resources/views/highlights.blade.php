@extends('layout')
@section('content')
    <body id="highlights">
    <section id="highlights-section" class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
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
    </section>
    </body>
@endsection
