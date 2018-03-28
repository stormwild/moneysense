<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    @if(!dynamic_sidebar('sidebar-footer'))
    &copy; {{ date('Y') }} {{ bloginfo('name') }}
    @endif
  </div>
</footer>
