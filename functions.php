<?php

require_once __DIR__ . '/inc/helpers.php';

define('ACF_PRO_LICENSE', 'b3JkZXJfaWQ9MzQ3NTJ8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE0LTA3LTE0IDE5OjU3OjM0');

function addmorescripts_setup()
{

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('woocommerce');
  add_theme_support('widgets-block-editor');

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    [
      'MainMenu' => 'MainMenu',
    ]
  );

  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  add_theme_support('custom-logo', array(
    'flex-width'  => true,
    'flex-height' => true,
  ));
}
add_action('after_setup_theme', 'addmorescripts_setup');


//Удаление скриптов блочного редактора
function wps_deregister_styles()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('global-styles');
}
add_action('wp_print_styles', 'wps_deregister_styles', 100);


//Функция для упрощения проставления адресов изображений темы
function imgs()
{
  return get_template_directory_uri() . "/img";
}


//Возвращает миниатюру с Youtube нужного размера и виедо
function youtube_parser($urlInp, $type = "", $size = "maxresdefault")
{
  $url = parse_url($urlInp);
  parse_str($url['query'], $query);
  if ($type == "id") {
    return $query['v'];
  } else {
    return "https://img.youtube.com/vi/" . $query['v'] . "/" . $size . ".jpg";
  }
}



/**
 * Страница с опциями ACF
 */
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'post_id' => 'options',
    'page_title'   => 'Основные настройки',
    'menu_title'  => 'Настройки темы',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'icon_url'    => 'dashicons-superhero-alt',
  ));
}



/**
 * AJAX запрос переключения категорий готовых решений
 */
// add_action('wp_ajax_readyPacks', 'readyPacks_load_func');
// add_action('wp_ajax_nopriv_readyPacks', 'readyPacks_load_func');
// function readyPacks_load_func()
// {
//   $subject = filter_input(INPUT_POST, 'catid', FILTER_SANITIZE_SPECIAL_CHARS);
//   get_template_part('inc/readypack-cat', "", ['catId' => $subject]);
//   die;
// }


remove_filter( 'the_content', 'wpautop' );


add_filter( 'custom_permalinks_path_info', '__return_true' );
