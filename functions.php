<?php

  /* Élément title géré par wp */
  function gestion_title()
  {
    add_theme_support('title-tag');
  }
  /* le Hook */
  add_action('after_setup-theme', 'gestion_title');


  /* Gestion des styles et scripts par wp */
  function styles_et_scripts()
  {
    wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('general', get_template_directory_uri().'/css/index.css');
  }
  /* Le Hook */
  add_action('wp_enqueue_scripts', 'styles_et_scripts');

  register_sidebar(array('name' => 'Menu contextuel principal',
                         'id' => 'sidebar-1',
                         'description' => 'Sidebar principal qui s\'affiche sur la droite',
                         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                         'after_widget' => '</aside>',
                         'before_title' => '<h1 class="widget_title">',
                         'after_title' => '</h1>'
                        )
                  );

  /* autoriser les commentaires anonymes */

  function com_anonyme()
  {
    return true;
  }
  add_filter('rest_allow_anonymous_comments','com_anonyme');
    /* fin autoriser les commentaires anonymes */

  function creer_menus()
  {
    register_nav_menus(array('menu-principal' => 'Menu principal',
                            'menu-2' => 'Menu secondaire'
                            )
                      );
  }
  add_action('after_setup_theme', 'creer_menus');
 ?>
