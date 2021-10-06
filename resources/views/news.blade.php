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
</html>
