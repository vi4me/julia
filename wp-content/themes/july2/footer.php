<?php

?>
<section id="footer">
    <img class="footer-img" src="<?php print(get_template_directory_uri());?>/img/wave2.png" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-5 footer-box">
          <img id="hello" src="<?php print(get_template_directory_uri());?>/img/logo.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate neque, nemo ab aperiam aspernatur atque libero ad numquam nostrum. Necessitatibus, quidem vero? Rerum maxime veniam odio, fugiat quisquam cumque, placeat.</p>
        </div>
        <div class="col-md-3 footer-box">
          <p><b>CONTACT US</b></p>
          <p><i class="fa fa-map-marker"></i>adress</p>
          <p><i class="fa fa-phone"></i>phone</p>
          <p><i class="fa fa-envelope-o"></i>web adress</p>
        </div>
        <div class="col-md-4 footer-box">
          <p><b>SUBSCRIBE</b></p>
          <input type="email" class="form-control" placeholder="Your email">
          <button type="button" class="btn btn-primary">Subscribe</button>
        </div>
      </div>
      <hr>
      <div class="copyright">Website created by ViMe</div>
    </div>
  </section>



<?php wp_footer(); ?>

</body>
</html>
