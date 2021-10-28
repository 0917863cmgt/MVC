@extends('layout')
@section('content')
<body id="news">
<section id="news-container" class="container-fluid">
    <x-articles-header></x-articles-header>
    @foreach($articles as $article)
        <div class="row">
            @if($loop->first)
            <x-article-div :article="$article"/>
            @else
            <x-article-div class="article-separator" :article="$article"/>
            @endif
        </div>
        {{--        @dd($loop)--}}
    @endforeach
    @if($articles->count() <1)
        <div class="col-6 offset-3 no-articles" style="height: calc(40vh - 150px);">
            <p style="text-align: center;">No articles found</p>
        </div>
    @endif
</section>
</body>
@endsection
