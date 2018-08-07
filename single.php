<?php
get_header();

$post_id = null;
if ( is_single() ) $post_id = get_the_ID();

$args = array(
  'post_not_in' => array ($post_id),
  'post_type' => 'paintings',
  'order' => 'DESC',
  'post_per_page' => 1
);

$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : ?>

  <main class="block-main">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="photo" id="current-img">
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-fluid"/>
          </div>
        </div> <!-- col -->
        <div class="col-6">
          <div class="main-content">
            <h1><?php the_title(); ?></h1>
            <p>Disponibility : <?php the_field('vente_du_tableau'); ?>.</p>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
  </main>

<?php endif; ?>

<?php get_footer(); ?>
