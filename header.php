<!DOCTYPE html>
<html lang="<?php language_attributes();?>" dir="ltr">

  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="author" content="Alexandra & Joris">
    <?php wp_head();?>
  </head>
  <body>

    <header>
      <h1>  <?php bloginfo('name');?> </h1>

      <h2>  <?php bloginfo('description');?> </h2>

      <nav class="menu-top">
        <?php wp_nav_menu(array('theme_location' => 'menu-principal',
                                'container_class' => 'menuprincipal'
                                )
                          );
        ?>
      </nav>

    </header>
