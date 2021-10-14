@extends('layout')
@section('content')
<body id="news">
<section id="news-container" class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <article>
                <h1>
                    {{$article->title}}
                </h1>
                <p><a href="/news/category/{{$article->category->slug}}">{{$article->category->name}}</a></p>
                <p>By {{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->insertion}} {{$article->author->last_name}}</p>
                <p class="summary">{{$article->summary}}</p>
                <p>{{$article->body}}</p>
            </article>
        </div>
    </div>
</section>
</body>
@endsection
