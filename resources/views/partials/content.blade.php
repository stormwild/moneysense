<article @php post_class('card mb-3') @endphp>
  @include('partials/featured-image')
  <div class="card-body">
    <h2 class="entry-title card-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </div>
  <div class="entry-summary card-text">
      @php(the_excerpt())
  </div>
</article>