<form role="search" action="<?php echo home_url('/'); ?>" method="get" class="searchform">
    <label for="search">Search the site:</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search the site...">
    <button type="submit">Go</button>
</form>