<!-- 1 PAGE -->
<?php get_header();?>

<!-- THE LOOP -->

<?php while (have_posts()) : the_post(); ?>
<article>
  <h1><?php the_title(); ?></h1>
  <div><?php the_content(); ?></div>
</article>

<?php endwhile; ?>

<section>
    <aside>
      <?php get_sidebar();?>
    </aside>
</section>

<?php get_footer();?>
