<!-- 1 PAGE -->
<?php get_header();?>

<!-- THE LOOP -->
<article>
  <h1> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Lien permanent vers <?php echo the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h1>
  <div><?php the_content(); ?></div>
</article>

<section>
    <aside>
      <?php get_sidebar();?>
    </aside>
</section>

<?php get_footer();?>
