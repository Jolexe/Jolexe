<!-- BOUCLE ARTICLE -->
<?php get_header();?>

<nav>
<?php the_posts_pagination(); ?>
</nav>

<h1>Page d'acceuil</h1>

<section>
    <aside>
      <?php get_sidebar();?>
    </aside>
</section>

<?php get_footer();?>
