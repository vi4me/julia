<?php

get_header();
?>

  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <object id="me" type="image/svg+xml" data="<?php print(get_template_directory_uri());?>/img/cherednichenko.svg"></object>
          <div class="letters">
            <object id="j" type="image/svg+xml" data="<?php print(get_template_directory_uri());?>/img/J.svg"></object>
            <object id="u" type="image/svg+xml" data="<?php print(get_template_directory_uri());?>/img/u.svg"></object>
            <object id="l" type="image/svg+xml" data="<?php print(get_template_directory_uri());?>/img/l.svg"></object>
            <object id="i" type="image/svg+xml" data="<?php print(get_template_directory_uri());?>/img/i.svg"></object>
            <object id="a" type="image/svg+xml" data="<?php print(get_template_directory_uri());?>/img/a.svg"></object>
          </div>

          <p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, consectetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem est molestiae ex quibusdam incidunt modi totam sed autem consectetur
            tempore fugiat et reiciendis nulla suscipit sunt, aliquid, quam atque minima non voluptatibus aliquam corporis, iusto?</p>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?php print(get_template_directory_uri());?>/img/girl2-3.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <img src="<?php print(get_template_directory_uri());?>/img/wave1.png" alt="" class="bottom-img">
  </section>

  <section id="services">
    <div class="container text-center">
      <h1 class="title">Моя специализация</h1>
      <div class="row text-center">
        <div class="col-md-4 services">
          <img src="<?php print(get_template_directory_uri());?>/img/girl2-3.jpg" alt="" class="services-img">
          <h4>Lorem ipsum dolor sit.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora culpa earum minima, libero repellat asperiores!</p>
        </div>
        <div class="col-md-4 services">
          <img src="<?php print(get_template_directory_uri());?>/img/girl2-3.jpg" alt="" class="services-img">
          <h4>Lorem ipsum dolor sit.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora culpa earum minima, libero repellat asperiores!</p>
        </div>
        <div class="col-md-4 services">
          <img src="<?php print(get_template_directory_uri());?>/img/girl2-3.jpg" alt="" class="services-img">
          <h4>Lorem ipsum dolor sit.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora culpa earum minima, libero repellat asperiores!</p>
        </div>
      </div>
      <div class="wrapper">
        <a href="#" class="btn">button
          <svg>
            <rect></rect>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section id="about-us">
    <div class="container">
      <h1 class="title text-center">Мои работы</h1>
        <div class="row">
            <?php

              $args_works = array( 'post_type' => 'my_works');
              $loop = new WP_Query( $args_works );
              while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <?php
              $about_us_text = 'get_post_meta'( get_the_ID(), 'about_us_text', true);
              $about_us_short_text = 'get_post_meta'( get_the_ID(), 'about_us_short_text', true);
              $about_us_title = 'get_post_meta'( get_the_ID(), 'about_us_title', true);
            ?>

            <div class="col-md-6 about-us">
              <p class="about-title"><?=$about_us_title?></p>
              <p class="about-text"><?=$about_us_short_text?></p>

              <!-- Button trigger modal -->
                <button href="#myModal-<? the_ID(); ?>" type="button" class="btn" data-toggle="modal">
                  Read more &raquo;
                </button>
              <!-- Modal -->
              <div class="modal fade" id="myModal-<? the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-id='<?php 'get_post_meta'( get_the_ID()) ?>'>
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"><?=$about_us_title?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-img">
                      <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'works_img'); ?>" alt="">
                    </div>
                    <div class="modal-body">
                      <?=$about_us_text?>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
              <div class="col-md-6 about-us">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'works_img'); ?>" alt="" class="img-fluid">
              </div>

            <?php
              endwhile;
            ?>
            </div>
        </div>
  </section>

  <section id="testimonials">
    <div class="container">
      <h1 class="title text-center">Отзывы</h1>
      <div class="slider">

        <?php
          global $post;
          $args = array( 'post_type' => 'testimonials',
                         'publish' => true);

          $thumbnails_slider = get_posts( $args );
          foreach( $thumbnails_slider as $post ){

            include (get_template_directory() . '/content_thumbnails.php');

          }
          wp_reset_postdata();
        ?>

      </div>
    </div>
  </section>

  <section id="social">
    <div class="container text-center">
      <p>Lorem ipsum dolor sit amet.</p>
      <div class="social-icons">
        <?php

          $args_social = array( 'post_type' => 'social');
          $loop = new WP_Query( $args_social );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <a href="<?php echo the_field("social_link"); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'social_img'); ?>" alt=""></a>

        <?php
          endwhile;
        ?>
      </div>
    </div>
  </section>


<?php

get_footer();
