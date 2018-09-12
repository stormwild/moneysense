<header class="banner">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
    @if (has_custom_logo())
      {!! the_custom_logo() !!}
    @else
      <h1 class="site-title"><a href="{!! esc_url(home_url('/')) !!}" class="text-white">{{ bloginfo('name') }}</a></h1>    
    @endif
    <div class="navbar-text">
      <h3>Add goes here</h3>
      <p>More text</p>
    </div>
  </nav>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-info">
  <div class="container">
    <a href="{!! esc_url(home_url('/')) !!}" class="navbar-brand"><i class="fas fa-home" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-primary" aria-controls="nav-primary" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav-primary" class="collapse navbar-collapse">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'navbar-nav mr-auto', 'walker' => new App\NavWalker ]) !!}
      @endif
    </div>
  </div>
</nav>

