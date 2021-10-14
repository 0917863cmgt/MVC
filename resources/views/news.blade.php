@extends('layout')
@section('content')
<body id="news">
<section id="news-container" class="container">
    @foreach($articles as $article)
        <div class="row">
            <div class="col-6 offset-3">
                <article>
                    <p><a href="/news/category/{{$article->category->slug}}">{{$article->category->name}}</a></p>
                    <h1>
                        <a href="/news/{{$article->slug}}">
                            {{$article->title}}
                        </a>
                    </h1>
                    <div>
                        <p>By {{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->prefix}} {{$article->author->last_name}}</p>
                        <p>{{$article->summary}}</p>
                    </div>
                </article>
            </div>
        </div>
        {{--        @dd($loop)--}}
    @endforeach
</section>
</body>
@endsection
