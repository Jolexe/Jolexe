<!DOCTYPE html>
<html lang="<?php language_attributes();?>" dir="ltr">

  <?php wp_head();?>

  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="author" content="Alexandra & Joris">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/eset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/index.css">
    <title> <?php bloginfo('name');?> - <?php bloginfo('description');?> </title>
  </head>
  <body>

    <header>
      <h1>  <?php bloginfo('name');?> </h1>

      <h2>  <?php bloginfo('description');?> </h2>

      <nav>
        <?php wp_page_menu('show_home=1');?>
      </nav>

    </header>
