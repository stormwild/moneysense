
<form role="search" method="get" class="search-form" action="{{ esc_url(home_url('/')) }}">
    <label for="search-form-field" class="sr-only">{{ _x( 'Search for:', 'label' ) }}</label>    
    <div class="input-group mb-3">
        <input type="search" class="search-field form-control mb-2" id="search-form-field" placeholder="{{ esc_attr_x( 'Search &hellip;', 'placeholder' ) }}" value="{{ get_search_query() }}" name="s">
        <div class="input-group-append">
            <button type="submit" class="search-submit btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>        
</form>

