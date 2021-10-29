@props(['article'])
<div {{ $attributes->merge(['class' => 'col-6 offset-3']) }}>
    <article>
        <p><a class="category" href="/news?category={{$article->category->slug}}">{{$article->category->name}}</a></p>
        <h1>
            <a href="/news/{{$article->slug}}" style="color:rgb(33, 37, 41);text-decoration: none;">
                {{$article->title}}
            </a>
        </h1>
        <div>
            <p>By <a href="/news?author={{$article->author->last_name}}">{{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->prefix}} {{$article->author->last_name}}</a></p>
            <p>{{$article->summary}}</p>
        </div>
    </article>
</div>
