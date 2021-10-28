<nav class="dropdown-select">
    <ul>
        <li aria-haspopup="true">{{isset($category) ? $category->name : 'Categories'}}
            <ul aria-label="submenu">
                @foreach($categories as $category)
                    <li>
                        <a class="n-t-d" href="/news/?category={{$category->slug}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
