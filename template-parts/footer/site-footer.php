<hr>
<div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
          <h1 class="  text-secondary">Footer Area</h1>
          <h2 class="  text-secondary">Site Name Will Go Here</h1>
          <p class="lead text-white-50">Site TagLine Will go Here</p>
        </div>
        <div class="col-md-4 mt-4 footer--menu">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'woo_theme_footer_menu'
                )
            ) ?>
        </div>
      </div>
    </div>
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small class=text-secondary>Copyright &copy; Your Website</small>
    </div>
  </footer>

<!-- woo_theme_footer_menu -->