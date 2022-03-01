<!-- Footer -->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col s6 m3">
        <img class="materialize-logo" src="images/materialize-teal.png" alt="">
        <p>Made with love by Materialize.</p>
      </div>
      <div class="col s6 m3">
        <h5>About</h5>
        <ul>
          <li><a href="#!">Blog</a></li>
          <li><a href="#!">Pricing</a></li>
          <li><a href="#!">Docs</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Connect</h5>
        <ul>
          <li><a href="#!">Community</a></li>
          <li><a href="#!">Subscribe</a></li>
          <li><a href="#!">Email</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Contact</h5>
        <ul>
          <li><a href="#!">Twitter</a></li>
          <li><a href="#!">Facebook</a></li>
          <li><a href="#!">Github</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/materialize.min.js' ?>"></script>

    <!-- External libraries -->
    <script src="<?= get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js' ?>"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js' ?>"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/TweenMax.min.js' ?>"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/ScrollMagic.min.js' ?>"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/animation.gsap.min.js' ?>"></script>

    <!-- Initialization script -->
    <script src="<?= get_template_directory_uri() . '/assets/js/startup.js' ?>"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/init.js' ?>"></script>
</body>
</html>