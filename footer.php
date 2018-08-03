<footer id="colophon" class="site-footer block-footer">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <p>Lorem ipsum dolor it</p>
      </div>
      <div class="col-4">

      </div>
      <div class="col-4">
        <h2>Navigation</h2>
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
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sitemap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">  Copyright 2018 - 2019 | Eric Roy </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
