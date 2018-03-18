<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content container">
        <div class="row">
        @if (App\display_sidebar())
          <main class="main col-lg-8">
            @yield('content')
          </main>
          <aside class="sidebar col-lg-4">
            @include('partials.sidebar')
          </aside>
        @else 
          <main class="main col">
            @yield('content')
          </main>
        @endif
        </div>
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
