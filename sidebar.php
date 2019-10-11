<div>
  <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?> <!-- { -->
    <li class="widget">
      <?php get_search_form();?>
      <?php get_calendar(); ?>
    </li>
    <li class="widget">
      Méta
      <ul>
        <?php wp_register(); ?>
        <li> <?php wp_loginout(); ?> </li>
        <?php wp_meta(); ?>
      </ul>
    </li>
<?php endif; ?> <!-- } -->
</div>
