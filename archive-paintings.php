<?php

/*
Template Name: paintings
*/

get_header();

// load all 'category' terms for the post
$terms = get_the_terms( get_the_ID(), 'category');

// we will use the first term to load ACF data from
if( !empty($terms) ) {

  $term = array_pop($terms);
}

?>
<header class="block-header-canvas">
  <div class="row no-gutters">
    <div class="col-12">
      <div class="background-img d-flex align-items-center justify-content-center ">
        <div class="content">
          <h1 class="title-header">All Paintings</h1>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore ma. Ep ex ea commodo consequat. Duis aute irure dolor in reprehenderi. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
      </div>
    </div>
  </div>
</header>

<main class="block-main">
  <div class="main-title">All Paintings</div>
  <section class="block-section block-section-popular">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="title2">Trending now</h2>
          <div class="owl-carousel owl-theme" id="mostPopular">

            <?php
            $args = array (
              'post_type'      => 'paintings',
              'order'          => 'DESC',
              'category'       => '',
              'posts_per_page' => 8
            );
            $query = new WP_Query( $args );
            ?>


            <?php if ( $query->have_posts() ) : ?>
              <?php while ( $query->have_posts()) : $query->the_post();?>
                <div class="item">
                  <div class="inner">
                    <a href="<?php the_permalink();?>">
                      <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-fluid"/>
                      <?php endif; ?>
                    </a>
                  </div>
                  <h3><?php the_title();?></h3>
                  <p class="sales"><?php the_field('vente_du_tableau'); ?></p>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>

          </div> <!-- owl carousel -->
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <section class="block-section block-section-collection">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="title2">New collection</h2>
        </div>
      </div>
      <div class="row">
        <?php
        $args = array (
          'post_type'      => 'paintings',
          'order'          => 'DESC',
          'category'       => '',
          'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        ?>


        <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts()) : $query->the_post();?>
            <div class="col-12">
              <div class="item">
                <div class="background-img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                  <div class="inner">
                    <h2 class="text">Collection 2018<br><span>SUMMER STORY</span></h2>
                    <?php
                    // Get the ID of a given category
                    $category_id = get_cat_ID( 'Recent Works' );
                    // Get the URL of this category
                    $category_link = get_category_link( $category_id );
                    ?>
                    <a class="btn btn-view" href="<?php echo esc_url( $category_link ); ?>">View More</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="block-section block-section-category-color">
    <div class="container">
      <div class="row">
        <?php
        $args = array (
          'post_type'      => 'paintings',
          'order'          => 'DESC',
          'category'       => '',
          'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        ?>


        <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts()) : $query->the_post();?>
            <div class="col-12 col-lg-8">
              <div class="inner">
                <?php if ( has_post_thumbnail() ) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-fluid"/>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-12 col-lg-4  d-flex align-items-center justify-content-center ">
            <div class="content">
              <h2 class="title2">Colors collections</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <?php
              // Get the ID of a given category
              $category_id = get_cat_ID( 'Recent Works' );
              // Get the URL of this category
              $category_link = get_category_link( $category_id );
              ?>
              <a  href="<?php echo esc_url( $category_link ); ?>">
                <div class="svg-btn">
                  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape" height="60" width="320" />
                    <div class="text">Read more</div>
                  </svg>
                </div>
              </a>
            </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
