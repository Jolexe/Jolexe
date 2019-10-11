		<!-- 1 ARTICLE -->
<?php get_header();?>

<!-- THE LOOP -->
<?php while (have_posts()) : the_post(); ?>
<article>
  <h1> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Lien permanent vers <?php echo the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h1>
  <div><?php the_content(); ?></div>
  <p>Posté le <?php the_time('j F Y à G\hi\m\i\n'); ?> par <?php the_author_posts_link(); ?></p>
</article>

<?php endwhile; ?>

<section>
    <aside>
      <?php get_sidebar();?>
    </aside>
</section>

<?php get_footer();?>
