<form id="searchform" class="footer-searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Enter Search Term" value="<?php echo get_search_query(); ?>">
    <input class="button" type="submit" value="Search">
</form>
