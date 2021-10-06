@extends('layout')
@section('content')
<body id="news">
@foreach($articles as $article)
    {{--        @dd($loop)--}}
    <article>
        <h1>
            <a href="/news/{{$article->slug}}">
                {{$article->title}}
            </a>
        </h1>
        <div>
            {{$article->excerpt}}
        </div>
    </article>
@endforeach
</body>
@endsection
