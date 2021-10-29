@extends('components.layout')
@section('content')
<body id="news">
<section id="news-container" class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <article>
                <img src="{{$article->banner}}"/>
                <h1>{{$article->title}}</h1>
                <p><a class="category" href="/news?category={{$article->category->slug}}">{{$article->category->name}}</a></p>
                <p>By <a href="/news?author={{$article->author->last_name}}">{{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->insertion}} {{$article->author->last_name}}</a> |
                    <time class="date-section-time" datetime="{{\Carbon\Carbon::parse($article->publish_date)->format('Y-m-d\TH:i:s.U\Z')}}" title="{{\Carbon\Carbon::parse($article->publish_date)->format('d F. Y')}}">{{\Carbon\Carbon::parse($article->publish_date)->format('d F. Y')}}</time> |
                    <time class="date-section-time" datetime="{{\Carbon\Carbon::parse($article->updated_at)->format('Y-m-d\TH:i:s.U\Z')}}" title="{{\Carbon\Carbon::parse($article->publish_date)->format('h:m')}}">Laatste update: {{\Carbon\Carbon::parse($article->publish_date)->format('h:m')}}</time>
                </p>
                <p class="summary">{{$article->summary}}</p>
                <p>{{$article->body}}</p>
            </article>
        </div>
    </div>
</section>
</body>
@endsection
