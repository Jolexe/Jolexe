<!-- RESULTAT DE RECHERCHE -->
<?php get_header();?>

<h1> Résultats de recherche</h1>

<!-- THE LOOP -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<article>
  <h2> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Lien permanent vers <?php echo the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h2>
  <div><?php the_content(); ?></div>
</article>

<?php endwhile; ?>

<?php else : ?>
  <p>Désolé, il y a rien ici, veuillez circuler !</p>
<?php endif; ?>

<section>
    <aside>
      <?php get_sidebar();?>
    </aside>
</section>

<?php get_footer();?>
