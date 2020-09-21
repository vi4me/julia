<?php
function july2_scripts() {

  wp_enqueue_style( 'july2-slick',
                    get_template_directory_uri() . '/slick/slick.css');
  wp_enqueue_style( 'july2-slick_theme',
                    get_template_directory_uri() . '/slick/slick-theme.css');
  wp_enqueue_style( 'july2-bootstrap',
                    'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
  wp_enqueue_style( 'july2-bootstrap_font',
                    'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_enqueue_style( 'july2-main', get_stylesheet_uri());



	wp_enqueue_script( 'july2-vivus',
    'https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.min.js',
    array(),
    '',
    true
  );
  wp_enqueue_script( 'july2-jquery',
    'https://code.jquery.com/jquery-1.11.0.min.js',
    array(),
    '5.4.2',
    true
  );
  wp_enqueue_script( 'july2-bootstrap_js',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
    array(),
    '',
    true
  );
  wp_enqueue_script( 'july2-slick_js',
    get_template_directory_uri() . '/slick/slick.min.js',
    array('jquery'),
    '',
    true
  );

  wp_enqueue_script( 'main_js',
    get_template_directory_uri() . '/js/main.js',
    array('july2-slick_js', 'july2-vivus'),
    '',
    true
  );

}
add_action( 'wp_enqueue_scripts', 'july2_scripts' );

register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'july2' ),
			)
		);

// add_action('init', 'register_menu');
// function register_menu(){
//
//     $ctpArgs_menu = array(
// 		'labels'             => array(
// 			'name'               => 'Меню', // Основное название типа записи
// 			'singular_name'      => 'Меню', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить Меню',
// 			'add_new_item'       => 'Добавить новое Меню',
// 			'edit_item'          => 'Редактировать Меню',
// 			'new_item'           => 'Новое Меню',
// 			'view_item'          => 'Посмотреть Меню',
// 			'search_items'       => 'Найти Меню',
// 			'not_found'          => 'Меню не найдено',
// 			'not_found_in_trash' => 'В корзине Меню не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Меню'
//
// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 1,
//     'menu_icon'          => 'dashicons-editor-aligncenter',
// 		'supports'           => array('title')
// 	);
//   register_post_type('menu', $ctpArgs_menu);
// }



add_action('init', 'register_post_works');
function register_post_works(){

    $ctpArgs_works = array(
		'labels'             => array(
			'name'               => 'Мои работы', // Основное название типа записи
			'singular_name'      => 'Моя работа', // отдельное название записи типа Book
			'add_new'            => 'Добавить Мою работу',
			'add_new_item'       => 'Добавить новую Мою работу',
			'edit_item'          => 'Редактировать Мою работу',
			'new_item'           => 'Новая Моя работа',
			'view_item'          => 'Посмотреть Мою работу',
			'search_items'       => 'Найти Мою работу',
			'not_found'          => 'Мои работы не найдено',
			'not_found_in_trash' => 'В корзине Моих работ не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Мои работы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
    'menu_icon'          => 'dashicons-awards',
		'supports'           => array('title','thumbnail')
	);
  register_post_type('my_works', $ctpArgs_works);
}

add_theme_support( 'works-thumbnails' );
if (function_exists('add_image_size') ){
  add_image_size('works_img', true);
}


add_action('init', 'register_post_types');
function register_post_types(){

    $ctpArgs = array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить Отзыв',
			'add_new_item'       => 'Добавить новый Отзыв',
			'edit_item'          => 'Редактировать Отзыв',
			'new_item'           => 'Новый Отзыв',
			'view_item'          => 'Посмотреть Отзыв',
			'search_items'       => 'Найти Отзыв',
			'not_found'          =>  'Отзывов не найдено',
			'not_found_in_trash' => 'В корзине Отзывов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
    'menu_icon'          => 'dashicons-format-quote',
		'supports'           => array('title','thumbnail')
	);
  register_post_type('testimonials', $ctpArgs);
}

add_theme_support( 'post-thumbnails' );
if (function_exists('add_image_size') ){
  add_image_size('thumbnails_slider', 70, 70, true);
}



add_action('init', 'register_post_social');
function register_post_social(){

    $ctpArgs_social = array(
		'labels'             => array(
			'name'               => 'Ссылки', // Основное название типа записи
			'singular_name'      => 'Ссылка', // отдельное название записи типа Book
			'add_new'            => 'Добавить Ссылку',
			'add_new_item'       => 'Добавить новую Ссылку',
			'edit_item'          => 'Редактировать Ссылку',
			'new_item'           => 'Новая Ссылка',
			'view_item'          => 'Посмотреть Ссылку',
			'search_items'       => 'Найти Ссылку',
			'not_found'          =>  'Ссылку не найдено',
			'not_found_in_trash' => 'В корзине Ссылки не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Ссылки'


		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
    'menu_icon'          => 'dashicons-redo',
		'supports'           => array('title','thumbnail')
	);
  register_post_type('social', $ctpArgs_social);
}

add_theme_support( 'post-social' );
if (function_exists('add_image_size') ){
  add_image_size('social_img', 60, 60, true);
}
