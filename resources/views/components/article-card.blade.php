<div class="p-3 m-1 col-3 border">
    <img id="featured-image" src="{{$article->image}}">
    <h5 style="margin-top: 10px; min-height: 72px; max-height: 72px;">{{$article->title}}</h5>
    <p>{{\Carbon\Carbon::parse($article->publish_date)->format('d/m/Y')}}</p>
    <a class="category" href="/news/category/{{$article->category->slug}}">{{$article->category->name}}</a>
    <br>
    <p>{{Illuminate\Support\Str::limit($article->summary, 50)}}</p>
    <br>
    <div class="row">
        <div class="col-6"><p>By {{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->prefix}} {{$article->author->last_name}}</p></div>
        <div class="col-6"><a class="read-more" href="/news/{{$article->slug}}">Lees meer</a></div>
    </div>
</div>
