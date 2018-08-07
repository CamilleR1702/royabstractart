<?php
get_header();
?>


<div class="category-template">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <aside class="aside-bar">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link( 'paintings' ); ?>">Paintings</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php single_cat_title(''); ?></li>
            </ol>
          </nav>
          <?php // custom_breadcrumbs(); ?>
          <nav aria-label="list-categories" class="list-categories">
            <ul>
              <?php wp_list_categories('show_count=0&title_li=<h2>Categories</h2>'); ?>
            </ul>
          </nav>
        </aside>
      </div>
      <div class="col-9">
        <main class="block-main-category block-main-category-most-popular">
          <div class="row">
            <div class="col-12">
              <h1><?php single_cat_title(''); ?></h1>
              <p><?php echo category_description(); ?></p>
            </div>
          </div>
          <?php

          $args = array (
            'post_type'      => 'paintings',
            'order'          => 'DESC',
            'posts_per_page' => 9
          );

          if($cat == 1){
            $query = new WP_Query($args);
          }else{
            $args['cat'] = $cat;
            $query = new WP_Query( $args );
          }
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
