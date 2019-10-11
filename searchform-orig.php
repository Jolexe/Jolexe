<?php _e('Search',''); ?>
<form id="searchform" action="<?php bloginfo('home'); ?>" >
  <input type="text" name="s" value="<?php the_search_query(); ?>" />
  <input type="submit" value="<?php _e('Search',''); ?>" />
</form>
