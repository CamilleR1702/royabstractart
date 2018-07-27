<?php get_header(); ?>

<?php echo  the_field('image_principale'); ?>


<header class="block-header">
  <div class="row no-gutters row-height">
    <div class="d-none d-lg-block col-lg-8 col-xl-9">
      <div class="content-img" style="background-image: url('<?php the_field('image_principale', 'option'); ?>');"></div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
      <div class="mobile-content">
        <div class="text-content">
          <div class="content">
            <div class="content-band-name d-none d-sm-block">
              <div class="band-name d-none d-sm-block">
                <div class="ceo-name">
                  <div class="first-name">Eric</div>
                  <div class="last-name">
                    <span>Roy</span><span class="dot">.</span><span class="spanabstractart">abstractart</span>
                  </div>
                </div>
              </div>
            </div>

            <h1 class="main-title"><?php the_field('titre_principal', 'option'); ?></h1><p class="second-title"><?php the_field('description_principale', 'option'); ?></p>
            <div class="svg-btn d-none d-sm-block">
              <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                <rect class="shape" height="60" width="320" />
                <div class="text">Read more</div>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row no-gutters">
    <div class="col-12 col-lg-2 bg-tablet">
      <ul class="nav social-media-nav">
        <li class="nav-item">
          <a class="nav-link text-center" href="#" title="Lien Page Instagram">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" xml:space="preserve">
            <g>
              <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752	c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407	c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752	c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
              <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
              <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78	c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78	C135.661,29.421,132.821,28.251,129.921,28.251z"/>
            </g>
          </svg>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-center" href="#" title="Lien Page Twitter">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="512.002px" height="512.002px" viewBox="0 0 512.002 512.002"
          xml:space="preserve">
          <g>
            <path d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115
            c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039
            c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809
            c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321
            c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888
            c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471
            c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59
            C480.111,136.775,497.92,118.275,512.002,97.211z"/>
          </g>
        </svg>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-center" href="#" title="Lien Page Facebook">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="430.113px" height="430.114px" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;"
        xml:space="preserve">
        <g>
          <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
          c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
          c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
        </g>
      </svg>
    </a>
  </li>
</ul>
</div>
</div>
</header> <!-- header -->

<main class="block-main">
  <section class="block-section block-section-works">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title">Latest <span>works</span></h2>
        </div>
      </div>
      <div class="row row-class-flex">
        <div class="col-12 col-lg-6">
          <?php
          $args = array (
            'post_type'        => 'canvas',
            'order'            => 'DESC',
            'post_status'      => 'publish',
            'category'         => 5,
            'offset'           => 0,
            'posts_per_page'   => 1
          );
          $query = new WP_Query( $args );
          ?>
          <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts()) : $query->the_post();?>
              <div class="content-img">
                <div class="img-canvas img-canvas1" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
              </div>
            </div> <!-- col -->
            <div class="col-12 col-lg-6">
              <div class="content-canvas">
                <h3 class="canvas-title"><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>">
                  <div class="svg-btn">
                    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                      <rect class="shape" height="60" width="320" />
                      <div class="text">Read more</div>
                    </svg>
                  </div>
                </a>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php endif; ?>
        </div> <!-- col -->
      </div> <!-- row -->
      <div class="row row-class-flex-reverse">

        <?php
        $args = array (
          'post_type'        => 'canvas',
          'order'            => 'DESC',
          'post_status'      => 'publish',
          'category'         => 5,
          'offset'           => 1,
          'posts_per_page'   => 1
        );
        $query = new WP_Query( $args );
        ?>
        <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts()) : $query->the_post();?>
            <div class="col-12 col-lg-6">
              <div class="content-canvas">
                <h3 class="canvas-title"><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>">
                  <div class="svg-btn">
                    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                      <rect class="shape" height="60" width="320" />
                      <div class="text">Read more</div>
                    </svg>
                  </div>
                </a>
              </div>
            </div> <!-- col -->
            <div class="col-12 col-lg-6">
              <div class="content-img">
                <div class="img-canvas img-canvas1" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div> <!-- row -->
  </div> <!-- container -->
</section>
<section class="block-section block-section-events">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Recent <span>Events</span> </h2>
      </div><!-- col -->
    </div> <!-- row -->
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="content-event">
          <div class="row">
            <div class="col-2">
              <p class="date"><span class="number">22</span> <span>SEP</span></p>
            </div><!-- col -->
            <div class="col-10">
              <h3 class="event-title">Lorem ipsum dolor sit amet.</h3>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <button type="button" class="btn btn-outline-dark">Read more</button>
            </div><!-- col -->
          </div><!-- row -->
        </div>
      </div><!-- col -->
      <div class="col-12 col-lg-4">
        <div class="content-event">
          <div class="row">
            <div class="col-2">
              <p class="date"><span class="number">04</span> <span>OCT</span></p>
            </div><!-- col -->
            <div class="col-10">
              <h3 class="event-title">Lorem ipsum dolor sit amet.</h3>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <button type="button" class="btn btn-outline-dark">Read more</button>
            </div><!-- col -->
          </div><!-- row -->
        </div>
      </div><!-- col -->
      <div class="col-12 col-lg-4">
        <div class="content-event">
          <div class="row">
            <div class="col-2">
              <p class="date"><span class="number">28</span> <span>NOV</span></p>
            </div><!-- col -->
            <div class="col-10">
              <h3 class="event-title">Lorem ipsum dolor sit amet.</h3>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <button type="button" class="btn btn-outline-dark">Read more</button>
            </div><!-- col -->
          </div><!-- row -->
        </div>
      </div><!-- col -->
    </div><!-- row -->
  </div>
</section>
<section class="block-section block-section-about">
  <div class="container">
    <div class="row row-class-flex">
      <div class="col-12 col-lg-6">
        <div class="img-canvas" style="background-image:url('<?php the_field('image_section', 'option'); ?>');"></div>
      </div> <!-- col -->
      <div class="col-12 col-lg-6">
        <h2 class="section-about-title"><span>About</span> </h2>
        <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi <strong>ut aliquip</strong> ex ea commodo consequat.</p>
        <div class="svg-btn">
          <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
            <rect class="shape" height="60" width="320" />
            <div class="text">Read more</div>
          </svg>
        </div>
        <ul class="nav social-media-nav">
          <li class="nav-item">
            <a class="nav-link text-center" href="#" title="Lien Page Instagram">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" xml:space="preserve">
                <g>
                  <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752	c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407	c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752	c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                  <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                  <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78	c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78	C135.661,29.421,132.821,28.251,129.921,28.251z"/>
                </g>
              </svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="#" title="Lien Page Twitter">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512.002px" height="512.002px" viewBox="0 0 512.002 512.002" xml:space="preserve">
                <g>
                  <path d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115 c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039 c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809 c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321 c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888 c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471 c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59 C480.111,136.775,497.92,118.275,512.002,97.211z"/>
                </g>
              </svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="#" title="Lien Page Facebook">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="430.113px" height="430.114px" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;"  xml:space="preserve">
                <g>
                  <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805 c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354 c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
                </g>
              </svg>
            </a>
          </li>
        </ul>
      </div> <!-- col -->
    </div> <!-- row -->
  </div>
</section>

<section class="block-section block-section-gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">View <span>gallery</span> </h2>
      </div><!-- col -->
    </div> <!-- row -->
    <div class="row">
      <div class="col-12">
        <div class="content-gallery">
          <div class="row">

            <?php
            $args = array (
              'post_type'      => 'canvas',
              'order'          => 'DESC',
              'posts_per_page' => 4
            );
            $query = new WP_Query( $args );
            ?>

            <?php if ( $query->have_posts() ) : ?>
              <?php while ( $query->have_posts()) : $query->the_post();?>

                <div class="col-12 col-lg-6 col-xl-3">
                  <div class="img-content">
                    <a href="<?php the_permalink();?>" class="photo d-flex align-items-start" title="">
                      <?php if ( has_post_thumbnail() ) : ?>
                        <div class="img" style="background-image:url(<?php the_field('image_tableau') ?>);"></div>
                        <div class="glow-wrap">
                          <i class="glow"></i>
                        </div>
                      <?php endif; ?>
                    </a>
                  </div>
                </div>

              <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>


          </div>

        </div>
      </div> <!-- col -->
    </div> <!-- row -->
    <div class="row pt-5">
      <div class="col-12">
        <div class="svg-btn text-center">
          <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
            <rect class="shape" height="60" width="320" />
            <div class="text">Read more</div>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

<?php get_footer(); ?>
