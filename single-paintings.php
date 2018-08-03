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


<div class="our-company">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<main class="block-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="photo">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"/>
                </div>
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


                <div class="block-articles">
                    <h2>Related <strong>Posts</strong></h2>
                    <?php query_posts('cat=&showposts=3'); if (have_posts()) : ?>
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
                </div> <!-- block articles -->

                                   <?php
                    // Si besoin d'afficher seulement quelques informations, ouvrir un tableau
//                    $args = array(
//                    'ID' => 45
//                    );

                    // Sinon, si l'on cherche a afficher toutes les informations du tableau, ne pas ajouter $args entre les parentheses get_comment($args);
                    $comments = get_comments();

                    ?>

                    <pre>
                    <?php
                    // affiche le tableau avec la fonction print_r seulement pour le dev
                    // print_r($comments);
                    ?>
                    </pre>

                    <?php foreach ($comments as $comment) { ?>

                    <article class="comment">
                        <div class="author">
                            <?php echo $comment->comment_author; ?>
                        </div>
                        <p class="commment">
                            <?php echo $comment->comment_content; ?>
                        </p>
                    </article>

                <?php } ?>

            </div>
        </div>
    </div>
</main>

<?php endif; ?>

<?php get_footer(); ?>
