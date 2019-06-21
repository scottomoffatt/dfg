<header class="banner">
  <div class="container">

    <a href="{{ home_url('/') }}"><img <img src="{{ $site_brand }}" alt="{{ get_bloginfo('name', 'display') }}"></a>
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </nav>
  </div>
</header>
