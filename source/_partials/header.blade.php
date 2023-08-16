<header class="header" role="banner">
  <div class="container">
    <div class="flex items-end">
      <img src="/assets/images/camjam-logo-rocket.png" alt="CamJam Logo" class="logo">
    </div>
    <nav class="nav-main grow" aria-label="Primary Navigation">
      <ul class="menu">
        <li class="menu-item"><a href="#about">About</a></li>
        <li class="menu-item has-submenu has-submenu--closed">
          <a class="menu-toggle" href="#projects">Projects</a>
          <!-- <ul class="submenu flex flex-col relative left-0">
            @foreach ($projects as $project)
              <li class="menu-item"><a href="#{{ $project->id }}">{{ $project->title }}</a></li>
            @endforeach
          </ul> -->
        </li>
        <li class="menu-item"><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    @include('_partials.icons')
  </div>
</header>