@props(['articles'])
<div class="row news-header">
    <div class="col-2 offset-3">

    </div>
    <div class="col-2">
    </div>
    <div class="col-2">
        {{$articles->links()}}
    </div>
</div>
