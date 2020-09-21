<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package july2
 */

get_header();
?>

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
            <a href="<?php the_permalink() ?>">
              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong">
                Read more &raquo;
              </button>
            </a>


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

<?php

get_footer();
// ____________________________________________________
<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <!-- Цикл WordPress -->
  <!-- Вывод постов: the_title() и т.д. -->
  <?php the_title() ?>
  <?php the_excerpt() ?>
  <?php echo get_the_post_thumbnail( $id, 'thumbnail'); ?>

  <br>
  <!-- Button trigger modal -->

    <button href="#myModal-<? the_ID(); ?>" type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong">
      Read more &raquo;
    </button>
  <!-- Modal -->

    <div class="modal fade" id="myModal-<? the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?php the_title() ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-img">
            <?php echo get_the_post_thumbnail( $id, 'thumbnail'); ?>
          </div>
          <div class="modal-body">
            <?php the_content() ?>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php } } else { ?>
  <p>Записей нет.</p>
<?php } ?>
