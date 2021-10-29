@props(['article'])
<div id="featured-article" class="row gx-3 justify-content-center">
    <div class="p-3 m-1 col-8 border">
        <div class="row">
            <div class="col-6 white">
                <img id="featured-image" src="{{$article->image}}">
            </div>
            <div class="p-3 col-6 white">
                <h5>{{Illuminate\Support\Str::limit($article->title, 60)}}</h5>
                <p>{{\Carbon\Carbon::parse($article->publish_date)->format('d/m/Y')}}</p>
                <a class="category" href="/news?category={{$article->category->slug}}">{{$article->category->name}}</a>
                <br>
                <p>{{Illuminate\Support\Str::limit($article->summary, 50)}}</p>
                <br>
                <div class="row">
                    <div class="col-8"><p>By <a href="/news?author={{$article->author->last_name}}">{{$article->author->first_name}} {{$article->author->middle_name}} {{$article->author->insertion}} {{$article->author->last_name}}</a></p></div>
                    <div class="col-4"><a class="read-more" href="/news/{{$article->slug}}">Lees meer</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
