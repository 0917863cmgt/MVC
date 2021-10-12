<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tennis Platform</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/app.css">

</head>
<body id="news">
<article>
    <h1>
        {{$article->title}}
    </h1>
    <p><a href="/news/category/{{$article->category->slug}}">{{$article->category->name}}</a></p>
    <p>By {{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->insertion}} {{$article->author->last_name}}</p>    <p class="summary">{{$article->article_summary}}</p>
    <p>{{$article->article_body}}</p>
</article>

<a href="/news">Go Back</a>
</body>
</html>
