<?php

require_once __DIR__ . '/inc/helpers.php';

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
 * AJAX запрос изменения рейтинга статьи
 */
add_action('wp_ajax_ratepost', 'ratepost_load_func');
add_action('wp_ajax_nopriv_ratepost', 'ratepost_load_func');
function ratepost_load_func()
{
  $rating = intval(filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_SPECIAL_CHARS));
  $postId = intval(filter_input(INPUT_POST, 'post_id', FILTER_SANITIZE_SPECIAL_CHARS));
  $post = get_post(intval($postId));
  if (!$post) die('Ошибка. Пост не найден');
  if (!in_array($rating, [1, 2, 3, 4, 5]))  die('Ошибка. Оценка не верна');

  $oldRate = intval(get_field('star-' . $rating, $postId));
  update_field('star-' . $rating, $oldRate + 1, $postId);
  get_template_part('inc/blog-post-rating', "", ['postId' => $postId]);
  die;
}



/**
 * Обработка AJAX пагинация блога
 */
add_action('wp_ajax_catalog', 'cat_load_func');
add_action('wp_ajax_nopriv_catalog', 'cat_load_func');

function cat_load_func()
{
  $catIds = json_decode($_POST['catlist']);
  $pageNum = intval($_POST['page_num']);
  $perPage = intval($_POST['per_page']) ? intval($_POST['per_page']) : 12;
  $exclude = $_POST['exclude'] ? json_decode($_POST['exclude'], true) : [];
  get_template_part('inc/ajax-blog-posts', null, [
    'cats' => $catIds,
    'page_num' => $pageNum,
    'per_page' => $perPage,
    'exclude' => $exclude,
  ]);
  die;
}



remove_filter('the_content', 'wpautop');


add_filter('custom_permalinks_path_info', '__return_true');



function getTomorow()
{
  $now = new \DateTimeImmutable();
  $month = [
    '1' => 'января',
    '2' => 'февраля',
    "3" => 'марта',
    '4' => 'апреля',
    '5' => 'мая',
    '6' => 'июня',
    '7' => 'июля',
    '8' => 'августа',
    '9' => 'сенября',
    '10' => 'октября',
    '11' => 'ноября',
    '12' => 'декабря'
  ];
  return (intval($now->format('d')) + 1) . ' ' . $month[$now->format('n')];
}



function personal_link(){
  return ldocslink('agree');
}


function filter_search_post_type($query)
{
  if ($query->is_search && empty($_GET['search_post_type'])) {
    $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'filter_search_post_type');


// sombra 08-2023
// удаляем лишние стили
function disable_trash_scripts(){
  if( !is_admin() ):
    wp_dequeue_style('post-views-counter-frontend');
    wp_dequeue_style('dashicons');
    wp_dequeue_style('classic-theme-styles');

    // перезадаем jQuery без плагина
    wp_deregister_script('jquery');
    wp_register_script('jquery', (get_template_directory_uri() .'/dist/jquery-3.5.1.min.js'), false, '3.5.1');
    wp_enqueue_script('jquery');
  endif;
}
add_action('wp_enqueue_scripts', 'disable_trash_scripts', 99);

// Отключаем REST API
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
add_filter('rest_enabled', '__return_false');
// add_filter('rest_authentication_errors', function( $result ){
//   return new WP_Error('functionality disabled', 'Sorry, rest API is disabled.', ['status' => 401]);
// });

// добавляем нормальные размеры для фоток в блоге
add_image_size('blog-s', 410, 280, true);
add_image_size('blog-m', 520, 360, true);

// юридические документы вывел в опции, возвращаю по запросу
function ldocslink($type){
  return get_field('docs_'. $type, 'options');
}

// print_it
function print_it($a, $return = false){
  if( $return ):
    return '<pre>'. print_r($a, true) .'</pre>';
  else:
    echo '<pre>';
      print_r($a);
    echo '</pre>';
  endif;
}

// очищает значение от недопустимых в json символов
function clearValue($value){
  return trim(str_replace(['"', '\\', "{", "}"], '', $value));
}

// REST запрос к шлюзу на создание заявки
function rest_gateway_create_lead($data){
    $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://gateway.talentsy.ru/wp-content/themes/clear/inc/gateway.php?service=html-site');
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, ['data' => json_encode($data)]);
        $res = curl_exec($curl);
    curl_close($curl);

    return $res;
}

// преобразует куки переданные от JS единым полем в массив
function getJSCookiesAsArray($cookies){
  $return = [];

  foreach(explode('; ', $cookies) as $k => $s):
    $co = explode('=', $s, 2);
    $return[ $co[0] ] = clearValue($co[1]);
  endforeach;

  return $return;
}

// отправляет формы в шлюз
function axFormRequest(){
  parse_str($_POST['form'], $form);
  $cookies  = $_POST['cookies'];
  $urlfull  = $_POST['urlfull'];
  $pageID   = (int)$_POST['pageID'];
  $result   = ['form' => $form, 'urlfull' => $urlfull, 'pageID' => $pageID, 'cookies' => $cookies, 'jsData' => []];

  $sendData = [
    'cookies' => getJSCookiesAsArray($cookies),
    'url'     => $urlfull,
    'other'   => []
  ];

  if( isset($form['special']) ):
    if( $form['special'] == 'footer' ):

    endif;

    if( $form['special'] == 'about' ):

    endif;

    if( $form['special'] == 'wait-fashion' ):

    endif;

    if( $form['special'] == 'hr' ):

    endif;

    if( $form['special'] == 'partner' ):

    endif;

    if( $form['special'] == 'teacher' ):

    endif;
  else:
    $sendData['formName'] = get_field('amo_form_name', $pageID) ?? 'Неизвестная форма';
    $sendData['uData']    = [
      'name'    => $form['Name'],
      'email'   => $form['Email'],
      'phone'   => $form['Phone'],
    ];
    $result['gleadid']  = rest_gateway_create_lead($sendData);
    $result['jsData'][] = 'location = '. (get_field('redirect_form_link', $pageID) ?? get_permalink(99)) .';';
  endif;

  $result['jsData'] = implode('', $result['jsData']);
  die(json_encode($result));
}
add_action('wp_ajax_axFormRequest', 'axFormRequest');
add_action('wp_ajax_nopriv_axFormRequest', 'axFormRequest');
