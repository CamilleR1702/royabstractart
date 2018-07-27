<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Camille Raher">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <link rel="canonical" href="http://www.roy-abstractart.com" />
    <link rel="icon" type="image/png" sizes="16x16" href="./public/img/favicon.png">
    <title><?php bloginfo( 'name' ) ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>



    <body <?php body_class(); ?> id="top-page">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="#" title="roy.abstractart.com">Roy <span>Abstractart</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <?php wp_nav_menu(
              array(
                'theme_location' 	  => 'primary', // identifiant du menu, défini dans functions.php
                'depth'             => 2,// profondeur de menu admise (0 pour no-limit)
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse', // classe de cet élément
                'container_id'      => 'navbarNavAltMarkup', // ID de cet élément
                'menu_class' 		    => 'navbar-nav d-flex justify-content-end w-100',
                'menu_id'           => 'mainmenu', // ID du menu
                'link_before'       => '<span class="item-name">',
                'link_after'        => '</span>'
                )
              );
          ?>
          <button type="button" class="btn btn-outline-dark d-none d-sm-block">Please contact</button>
      </nav>
