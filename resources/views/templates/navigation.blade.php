
<nav class="nav">
    <ul class="nav__list container">
        @foreach($result as $category)
        <li class="nav__item">
            <a href="{{ route('all-lots') }}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</nav>
