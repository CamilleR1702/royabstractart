<?php

/*
Template Name: category-most-popular
*/

get_header();

// load all 'category' terms for the post
$terms = get_the_terms( get_the_ID(), 'category');


// we will use the first term to load ACF data from
if( !empty($terms) ) {

  $term = array_pop($terms);
}

?>

<?php
$categories = get_the_category();
$separator = '';
$output = '';
if ( ! empty( $categories ) ) {
  foreach( $categories as $category ) {
    $output .= '<li><a href="' . esc_url( get_category_link( $terms ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>' . $separator;
  }
  echo trim( $output, $separator );
}
?>
<div class="category-template">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <aside class="aside-bar">
          <?php custom_breadcrumbs(); ?>
        </aside>
      </div>
      <div class="col-9">
        <main class="block-main-category block-main-category-most-popular">
          <div class="row">
            <div class="col-12">
              <h1>Tous nos tableaux</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <?php
          $args = array (
            'post_type'      => 'canvas',
            'order'          => 'DESC',
            'posts_per_page' => 9
          );
          $query = new WP_Query( $args );
          ?>

          <div class="row">
            <?php if ( $query->have_posts() ) : ?>
              <?php while ( $query->have_posts()) : $query->the_post();?>

                <div class="col-4">
                  <a href="<?php the_permalink();?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-fluid"/>
                    <?php endif; ?>
                  </a>
                </div>

              <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
          </div> <!-- row -->


        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php
          the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '', 'textdomain' ),
            'next_text' => __( '', 'textdomain' ),
          ) ); ?>
        </div>
      </div>
    </main>
  </div>
</div>


<?php get_footer(); ?>
