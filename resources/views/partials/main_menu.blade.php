<ul class="rd-navbar-nav">
    @foreach($items as $menu_item)
        <li class="rd-nav-item {{ explode('/', request()->path())[0] == ltrim($menu_item->link(), '/') ? 'active' : '' }}"><a class="rd-nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->getTranslatedAttribute('title', 'locale', App::getlocale()) }}</a>
        </li>
    @endforeach
</ul>