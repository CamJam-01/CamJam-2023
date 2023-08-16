<header class="header" role="banner">
  <div class="container">
    <div class="flex items-end">
      <img src="/assets/images/camjam-logo-rocket.png" alt="CamJam Logo" class="logo">
    </div>
    <nav class="nav-main grow" aria-label="Primary Navigation">
      <ul class="menu">
        @if ($menu = $page->menu)
          @foreach ($menu as $item)
            @if ($submenu = $item->submenu_items)
              <li class="menu-item has-submenu has-submenu--closed">
                <a class="menu-toggle" href="{{ $item->url }}">
                  <span>{{ $item->title }}</span>
                </a>
                <ul class="submenu flex flex-col relative left-0">
                  @foreach ($submenu as $subitem)
                    <li class="menu-item">
                      <a href="{{ $subitem->url }}">{{ $subitem->title }}</a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @else
              <li class="menu-item">
                  <a class="menu-toggle" href="{{ $item->url }}">
                    <span>{{ $item->title }}</span>
                  </a>
              </li>
            @endif
          @endforeach
        @endif
      </ul>
    </nav>
    @include('_partials.icons')
  </div>
</header>