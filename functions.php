<?php

function wp_add_files() {

  // Styles
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css', '', '', false );
  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/dist/css/owl.carousel.min.css', '', '', false );
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/dist/css/owl.theme.default.min.css', '', '', false );
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Oswald:400,700|Playfair+Display:400,700', false );
  wp_enqueue_style( 'style-content', get_stylesheet_uri() );

  // Scripts
  // Set paramter to true for scripts in footer
  wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/dist/js/jquery.min.js', '', '', true );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', '', '', true );
  wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/dist/js/owl.carousel.min.js', '', '', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/script.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_add_files' );

// -------------------------------------------------------------------
// ADD MULTIPLE MENUS
// -------------------------------------------------------------------

function add_menu() {
  register_nav_menus( array(
    'primary' => __('Menu prinicpal'),
    'secondary' => __('Menu secondaire'),
    'social' => __('réseaux sociaux')
  ));
}

add_action('after_setup_theme', 'add_menu');

// -------------------------------------------------------------------
// CUSTOM CLASS TO LINK MENU
// -------------------------------------------------------------------

add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
  $class = 'nav-item nav-link';
  $atts['class'] = $class;
  return $atts;
}

// -------------------------------------------------------------------
// -------------------------------------------------------------------
// AJOUTER LES CUSTOMS POSTS TYPE
// -------------------------------------------------------------------
// -------------------------------------------------------------------

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

  // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
  $labels = array(
    'name'                => _x( 'Tableaux', 'Post Type General Name'),
    'singular_name'       => _x( 'Tableaux', 'Post Type Singular Name'),
    'menu_name'           => __( 'Tableaux'),
    'all_items'           => __( 'Canvas'),
    'view_item'           => __( 'Voir les tableaux'),
    'add_new_item'        => __( 'Ajouter'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer la fiche'),
    'update_item'         => __( 'Modifier la fiche'),
    'search_items'        => __( 'Rechercher'),
    'not_found'           => __( 'Aucun article dans la liste.'),
    'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
  );

  // On peut définir ici d'autres options pour notre custom post type

  $args = array(
    'label'               => __( 'canvas'),
    'description'         => __( 'Found all canvas here.'),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments', 'author' ),
    'taxonomies'          => array('category', 'post_tag'),
    'hierarchical'        => false,
    'public'              => true,
    'menu_position'       => 5,
    'has_archive'         => 'canvas',
    'rewrite'			        => array( 'slug' => 'canvas', 'with_front' => false)

  );

  // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
  register_post_type( 'canvas', $args );

  // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
  $labels = array(
    'name'                => _x( 'Evenements', 'Post Type General Name'),
    'singular_name'       => _x( 'Evenements', 'Post Type Singular Name'),
    'menu_name'           => __( 'Evenements'),
    'all_items'           => __( 'Events'),
    'view_item'           => __( 'Voir'),
    'add_new_item'        => __( 'Ajouter'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer la fiche'),
    'update_item'         => __( 'Modifier la fiche'),
    'search_items'        => __( 'Rechercher'),
    'not_found'           => __( 'Aucun article dans la liste.'),
    'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
  );

  // On peut définir ici d'autres options pour notre custom post type

  $args = array(
    'label'               => __( 'events'),
    'description'         => __( 'Found all canvas here.'),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments', 'author' ),
    'taxonomies'          => array('category', 'post_tag'),
    'hierarchical'        => false,
    'public'              => true,
    'menu_position'       => 6,
    'has_archive'         => true,
    'rewrite'			        => array( 'slug' => 'events')

  );

  // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
  register_post_type( 'events', $args );
}

add_action( 'init', 'wpm_custom_post_type', 0 );


// -------------------------------------------------------------------
// -------------------------------------------------------------------
// AJOUTER LA FONCTION IMAGE A LA UNE
// -------------------------------------------------------------------
// -------------------------------------------------------------------

function wlz_setup_theme(){

  add_theme_support('post-thumbnails');

}

add_action ('after_setup_theme' , 'wlz_setup_theme');

// -------------------------------------------------------------------
// -------------------------------------------------------------------
// PAGINATION POUR ARTICLES DANS CATEGORY
// -------------------------------------------------------------------
// -------------------------------------------------------------------

function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages

    if(is_home()){
      $query->set('posts_per_page', 3);
    }

    if(is_category()){
      $query->set('posts_per_page', 3);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );

// -------------------------------------------------------------------
// -------------------------------------------------------------------
// ??????????????????
// -------------------------------------------------------------------
// -------------------------------------------------------------------

/* RETURN PAGE CURRENT */
function get_page_current($parametre){

  if(is_category()){
    if($parametre === 'ID' || 'slug'){
      if($parametre === 'ID' || $parametre === 'id'){
        return get_category(get_query_var('cat'))->cat_ID;
      }else{
        return get_category(get_query_var('cat'))->slug;
      }
    }else{
      return false;
    }

  }elseif(is_page() || is_single()){

    if($parametre === 'ID' || 'slug'){
      if($parametre === 'ID' || $parametre === 'id'){
        return get_post()->ID;

      }else{
        return get_post()->post_name;
      }
    }else{
      return false;
    }
  }else{

    $args = array(
      'taxonomy' => 'product_cat',
      'hide_empty' => 0,
    );
    if($parametre === 'ID' || 'slug'){
      if($parametre === 'ID' || $parametre === 'id'){
        return get_categories($args)[0]->cat_ID;
      }else{
        return get_categories($args)[0]->slug;
      }
    }else{
      return false;
    }
  }
}


function get_categoryByUrl(){

  $root = str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
  $url = str_replace($root,'',$_SERVER['REQUEST_URI']);
  $deriner_carac=substr($url,-1);
  if(substr($url,-1) === '/'){$url = explode('/',substr($url,0,-1));}
  else{$url = explode('/',$url);}

  return get_category_by_slug($url[0])->cat_ID;
}

function get_title_with_balise($string){

  $string          = explode(' ',$string);
  $return = '';
  for($i= 0; $i < count($string); $i++){
    $return = $return.'<span>'.$string[$i].'</span>'.' ';
  }
  return $return;
}

// Breadcrumbs
function custom_breadcrumbs() {

  // Settings
  $separator          = '';
  $breadcrums_id      = 'breadcrumbs';
  $breadcrums_class   = 'breadcrumb';
  $home_title         = 'Home';

  // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
  $custom_taxonomy    = 'product_cat';

  // Get the query & post information
  global $post,$wp_query;

  // Do not display on the homepage
  if ( !is_front_page() ) {

    // Build the breadcrums
    echo '<nav aria-label="breadcrumb"><ol id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

    // Home page
    echo '<li class="breadcrumb-item"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';

    if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

      echo '<li class="breadcrumb-item item-current item-archive active" aria-current="page"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

    } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

      // If post is a custom post type
      $post_type = get_post_type();

      // If it is a custom post type display name and link
      if($post_type != 'post') {

        $post_type_object = get_post_type_object($post_type);
        $post_type_archive = get_post_type_archive_link($post_type);

        echo '<li class="breadcrumb-item item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

      }

      $custom_tax_name = get_queried_object()->name;
      echo '<li class="breadcrumb-item item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

    } else if ( is_single() ) {

      // If post is a custom post type
      $post_type = get_post_type();

      // If it is a custom post type display name and link
      if($post_type != 'post') {

        $post_type_object = get_post_type_object($post_type);
        $post_type_archive = get_post_type_archive_link($post_type);

        echo '<li class="breadcrumb-item item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

      }

      // Get post category info
      $category = get_the_category();

      if(!empty($category)) {

        // Get last category post is in
        $last_category = end(array_values($category));

        // Get parent any categories and create array
        $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
        $cat_parents = explode(',',$get_cat_parents);

        // Loop through parent categories and store in variable $cat_display
        $cat_display = '';
        foreach($cat_parents as $parents) {
          $cat_display .= '<li class="breadcrumb-item item-cat">'.$parents.'</li>';
        }

      }

      // If it's a custom post type within a custom taxonomy
      $taxonomy_exists = taxonomy_exists($custom_taxonomy);
      if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

        $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
        $cat_id         = $taxonomy_terms[0]->term_id;
        $cat_nicename   = $taxonomy_terms[0]->slug;
        $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
        $cat_name       = $taxonomy_terms[0]->name;

      }

      // Check if the post is in a category
      if(!empty($last_category)) {
        echo $cat_display;
        echo '<li class="breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

        // Else if post is in a custom taxonomy
      } else if(!empty($cat_id)) {

        echo '<li class="breadcrumb-item item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
        echo '<li class="breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

      } else {

        echo '<li class="breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

      }

    } else if ( is_category() ) {

      // Category page
      echo '<li class="breadcrumb-item item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

    } else if ( is_page() ) {

      // Standard page
      if( $post->post_parent ){

        // If child page, get parents
        $anc = get_post_ancestors( $post->ID );

        // Get parents in the right order
        $anc = array_reverse($anc);

        // Parent page loop
        if ( !isset( $parents ) ) $parents = null;
        foreach ( $anc as $ancestor ) {
          $parents .= '<li class="breadcrumb-item item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
        }

        // Display parent pages
        echo $parents;

        // Current page
        echo '<li class="breadcrumb-item item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

      } else {

        // Just display current page if not parents
        echo '<li class="breadcrumb-item breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

      }

    } else if ( is_tag() ) {

      // Tag page

      // Get tag information
      $term_id        = get_query_var('tag_id');
      $taxonomy       = 'post_tag';
      $args           = 'include=' . $term_id;
      $terms          = get_terms( $taxonomy, $args );
      $get_term_id    = $terms[0]->term_id;
      $get_term_slug  = $terms[0]->slug;
      $get_term_name  = $terms[0]->name;

      // Display the tag name
      echo '<li class="breadcrumb-item item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

    } elseif ( is_day() ) {

      // Day archive

      // Year link
      echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
      echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

      // Month link
      echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
      echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

      // Day display
      echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

    } else if ( is_month() ) {

      // Month Archive

      // Year link
      echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
      echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

      // Month display
      echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

    } else if ( is_year() ) {

      // Display year archive
      echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

    } else if ( is_author() ) {

      // Auhor archive

      // Get the author information
      global $author;
      $userdata = get_userdata( $author );

      // Display author name
      echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

    } else if ( get_query_var('paged') ) {

      // Paginated archives
      echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

    } else if ( is_search() ) {

      // Search results page
      echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

    } elseif ( is_404() ) {

      // 404 page
      echo '<li>' . 'Error 404' . '</li>';
    }

    echo '</ol></nav>';

  }

}

// -------------------------------------------------------------------
// -------------------------------------------------------------------
// AJOUTER UNE PAGE D'OPTIONS POUR ACF
// -------------------------------------------------------------------
// -------------------------------------------------------------------

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'    => 'Page d\'accueil',
    'menu_title'    => 'Page d\'accueil',
    'menu_slug'     => 'theme-options',
    'capability'    => 'edit_posts',
    'parent_slug'   => '',
    'position'      => 8,
    'icon_url'      => false,
    'update_button' => __('Mettre à jour', 'acf'),
    'redirect'      => false
  ));


}
