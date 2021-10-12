@extends('layout')
@section('content')
<body id="news">
@foreach($articles as $article)
    {{--        @dd($loop)--}}
    <article>
        <p><a href="/news/category/{{$article->category->slug}}">{{$article->category->name}}</a></p>
        <h1>
            <a href="/news/{{$article->slug}}">
                {{$article->title}}
            </a>
        </h1>
        <div>
            <p>By {{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->insertion}} {{$article->author->last_name}}</p>
            <p>{{$article->article_summary}}</p>
        </div>
    </article>
@endforeach
</body>
@endsection
