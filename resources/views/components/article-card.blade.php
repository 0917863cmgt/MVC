<div class="p-3 m-1 col-4 border">
    <img id="featured-image" src="{{$article->image}}">
    <h5 style="margin-top: 20px; min-height: 72px; max-height: 72px;">{{$article->title}}</h5>
    <p>{{\Carbon\Carbon::parse($article->publish_date)->format('d/m/Y')}} <a class="category" style="float: right" href="/news?category={{$article->category->slug}}">{{$article->category->name}}</a></p>
    <p>{{Illuminate\Support\Str::limit($article->summary, 50)}}</p>
    <br>
    <div class="row">
        <div class="col-8"><p>By <a href="/news?author={{$article->author->last_name}}">{{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->insertion}} {{$article->author->last_name}}</a></p></div>
        <div class="col-4"><a class="read-more" href="/news/{{$article->slug}}">Lees meer</a></div>
    </div>
</div>
