<?php
function loadThemeAssets()
{
 wp_enqueue_style('main-style', get_stylesheet_uri());
 wp_enqueue_style('swipercdd', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css");
 wp_enqueue_style('scss2', get_template_directory_uri() . '/build/index.css');
 wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
 wp_enqueue_script('swiperesmb', get_template_directory_uri() . '/js/lib/swiper.js', array('jquery'), '1.0.0', true);
 // wp_enqueue_script('swiperesmb', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.esm.browser.min.js', array(), '8.4.2', true);
}

add_action('wp_enqueue_scripts', 'loadThemeAssets');


function themeFeatures()
{
 register_nav_menu("mainMenu", 'Main Navigation');
 register_nav_menu("footer", 'Main Footer');
 register_nav_menu("strip", 'Strip Navigation');


 add_theme_support(
  'custom-logo',
  array(
   'height' => 45,
   'width' => 240,
   'flex-height' => true,
  )
 );

}

add_action('after_setup_theme', 'themeFeatures');

// function register_my_menus()
// {
//  register_nav_menus(
//   array(
//    'header-menu' => __('Header Menu'),
//    'footer-menu' => __('Footer Menu'),
//   )
//  );
// }
// add_action('init', 'register_my_menus');


add_action('wp_enqueue_scripts', 'load_dashicons_front_end');
function load_dashicons_front_end()
{
 wp_enqueue_style('dashicons');
}

add_image_size('recommendation', 120, 120); // 220 pixels wide by 180 pixels tall, soft proportional crop mode



add_theme_support('post-thumbnails');
function recommendationCpt()
{
 register_post_type(
  'recommend',
  array(
   'public' => true,
   'labels' => array(
    'name' => 'Recommendation',
   ),
   'supports' => array('title', 'thumbnail'),
   'menu_icon' => "dashicons-admin-users",
   'feature-image' => true,
  ),

 );


}


add_action('init', 'recommendationCpt');