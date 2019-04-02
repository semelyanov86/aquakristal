<ul class="rd-navbar-nav">
    @foreach($items as $menu_item)
        <li class="rd-nav-item {{ request()->is(ltrim($menu_item->link(), '/')) ? 'active' : '' }}"><a class="rd-nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->getTranslatedAttribute('title', 'locale', App::getlocale()) }}</a>
        </li>
    @endforeach
</ul>