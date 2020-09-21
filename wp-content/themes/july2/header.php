<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section id="nav-bar">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	      <a class="navbar-brand" href="#"><img id="hello_header" src="<?php print(get_template_directory_uri());?>/img/logo.png" alt=""></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <i class="fa fa-bars" aria-hidden="true"></i>
	      </button>

						<?php wp_nav_menu( array (
							'theme_location'  => 'menu-1',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbarNav',

							'menu_class' => 'navbar-nav ml-auto',

						) ); ?>
	              <!-- <a class="nav-link" id="first" href="#banner"><?php echo the_field("menu"); ?><span class="sr-only">(current)</span></a> -->

	    </nav>
	  </section>
