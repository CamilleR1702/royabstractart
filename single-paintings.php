<?php
get_header();

$post_id = null;
if ( is_single() ) $post_id = get_the_ID();

$args = array(
  'post_not_in' => array ($post_id),
  'post_type' => 'paintings',
  'order' => 'DESC',
  'post_per_page' => 3
);

$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <main class="block-main">
      <div class="container">
        <!-- <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link( 'paintings' ); ?>">Paintings</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
              </ol>
            </nav>
          </div>
        </div> -->
        <div class="row">
          <div class="col-6">
            <div class="photo" id="current-img">
              <!-- <img src="<?php //the_post_thumbnail_url(); ?>" class="img-responsive img-fluid"/> -->
            </div>
            <!-- <div class="video" id="current-video">
              <video width="320" height="240" controls>
                <source src="<?php the_field('video_du_tableau'); ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div> -->
            <p id="video-url" style="display: none"> <?php the_field('video_du_tableau') ?> </p>
            <div class="owl-carousel owl-theme" id="singlePost">
              <?php
              // Contrôle si le repeater a des champs
              if( have_rows('galerie_dimages', $term) ):
                // boucle sur les champs du repeater
                while ( have_rows('galerie_dimages', $term) ) : the_row();?>
                <div class="item">
                  <div class="inner">
                  <?php
                    if(get_sub_field('is_image_video') == null){
                  ?>
                    <img src="<?php the_sub_field('image'); ?>" class="img-responsive img-fluid video"/>
                  <?php
                    }else{
                  ?>
                    <img src="<?php the_sub_field('image'); ?>" class="img-responsive img-fluid"/>
                  <?php
                  }
                  ?>
                  </div>
                </div>
                <?php
              endwhile;
              else :
                echo "Pas d'image dans la galerie";
              endif;
              ?>

            </div> <!-- owl carousel -->
          </div> <!-- col -->
          <div class="col-6">
            <div class="main-content">
              <h1><?php the_title(); ?></h1>
              <p>Disponibility : <?php the_field('vente_du_tableau'); ?>.</p>
              <p><?php the_content(); ?></p>
            </div>
            <div class="second-content">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Détails livraison
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Détails dimensions
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
              <ul class="pager">
                <?php if ( is_single() ) : // navigation links for single posts ?>

                  <?php previous_post_link( '<li class="nav-previous previous">%link</li>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> Previous object' ); ?>
                  <?php next_post_link( '<li class="nav-next next">%link</li>', ' <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span> Next object ' ); ?>

                <?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

                  <?php if ( get_next_posts_link() ) : ?>
                    <li class="nav-previous previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></li>
                  <?php endif; ?>

                  <?php if ( get_previous_posts_link() ) : ?>
                    <li class="nav-next next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ); ?></li>
                  <?php endif; ?>

                <?php endif; ?>

              </ul>
            </nav>
          </div>
        </div> <!-- row -->
        <div class="row">
          <div class="col-12">
            <h2>Related <strong>Posts</strong></h2>
            <?php query_posts('cat=3&showposts=3'); if (have_posts()) : ?>
              <?php while (have_posts()) : the_post();?>

                <div class="col-lg-4">
                  <div class="liste-articles">
                    <a href="<?php the_permalink();?>">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"/>
                      <div class="titre-article"><?php the_title(); ?></div>
                    </a>
                  </div>

                </div>
              <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div> <!-- row -->
        <div class="row">
          <div class="col-12">
            <?php
            $comments = get_comments();
            foreach ($comments as $comment) { ?>

              <article class="comment">
                <div class="author">
                  <?php echo $comment->comment_author; ?>
                </div>
                <p class="commment">
                  <?php echo $comment->comment_content; ?>
                </p>
              </article>
            <?php } ?>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Add comment
            </button>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <?php comments_template(); ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
