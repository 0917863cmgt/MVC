<nav class="dropdown-select" tabindex=0>
    <ul tabindex=0>
        <li tabindex=0 aria-haspopup="true">{{isset($category) ? $category->name : 'Categories'}}
            <ul tabindex=0 aria-label="submenu">
                @foreach($categories as $category)
                    <li tabindex=0>
                        <a class="n-t-d" href="/news/?category={{$category->slug}}&{{http_build_query(request()->except('category', 'page'))}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
