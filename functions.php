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
  $isTagTaxonomy = (isset($_POST['taxonomyType']) && $_POST['taxonomyType'] == 'tag');
  $catIds = json_decode($_POST['catlist']);
  $pageNum = intval($_POST['page_num']);
  $perPage = intval($_POST['per_page']) ? intval($_POST['per_page']) : 12;
  $exclude = $_POST['exclude'] ? json_decode($_POST['exclude'], true) : [];
  get_template_part('inc/ajax-blog-posts', null, [
    'cats' => $isTagTaxonomy ? null : $catIds,
    'page_num' => $pageNum,
    'per_page' => $perPage,
    'exclude' => $exclude,
    'tags' => $isTagTaxonomy ? $catIds : null,
  ]);
  die;
}




remove_filter('the_content', 'wpautop');


add_filter('custom_permalinks_path_info', '__return_true');



function getTomorow(){
  return date_i18n('d F', strtotime('tomorrow'));
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
// удаляем лишние стили + подключаем нужные
function disable_enable_scripts(){
  // убираем
  if( !is_admin() ):
    wp_dequeue_style('post-views-counter-frontend');
    wp_dequeue_style('dashicons');
    wp_dequeue_style('classic-theme-styles');

    // перезадаем jQuery без плагина
    wp_deregister_script('jquery');
    wp_register_script('jquery', (get_template_directory_uri() .'/js/custom/jquery-3.6.4.min.js'), false, '3.6.4', false);
    wp_enqueue_script('jquery');
  endif;

  // добавляем
  $theme_ver = '1.0.4';
  wp_enqueue_style('css-sombra', get_template_directory_uri() . '/styles/custom.css', [], $theme_ver);

  if(
    is_page_template('landings/landing-clo3d.php') ||
    is_page_template('landings/landing-orkt.php') ||
    is_page_template('landings/landing-difficult-clients.php') ||
    is_page_template('landings/landing-beauty-hack.php') ||
    is_page_template('landings/landing-sketching.php')
  ) {
    wp_enqueue_style('css-clo3d-site', get_template_directory_uri() . '/landings/css/clo3d/site.css', [], $theme_ver);
    wp_enqueue_style('css-clo3d-media', get_template_directory_uri() . '/landings/css/clo3d/media.css', [], $theme_ver, '(max-width:1330px)');
    wp_enqueue_script('js-clo3d-main', (get_template_directory_uri() .'/landings/js/clo3d/main.js'), [], $theme_ver, true);
    wp_enqueue_script('js-clo3d-getreview', 'https://app.getreview.io/tags/mugUGuLoIpZqq1qD/sdk.js', [], $theme_ver, true);
  }

  if( is_page_template('landings/landing-kids.php') ){
    wp_enqueue_style('css-kids-site', get_template_directory_uri() . '/landings/css/kids/main.css', [], $theme_ver);
    wp_enqueue_style('css-kids-media', get_template_directory_uri() . '/landings/css/kids/media.css', [], $theme_ver, '(max-width:1200px)');
    wp_enqueue_script('js-kids-typed', (get_template_directory_uri() .'/landings/js/kids/typed.umd.js'), [], $theme_ver, true);
    wp_enqueue_script('js-kids-main', (get_template_directory_uri() .'/landings/js/kids/main.js'), [], $theme_ver, true);
  }

  if(
    is_page_template('landings/landing-orkt.php') ||
    is_page_template('landings/landing-difficult-clients.php') ||
    is_page_template('landings/landing-beauty-hack.php') ||
    is_page_template('landings/landing-sketching.php')
  ){
    wp_enqueue_style('css-orkt-site', get_template_directory_uri() . '/landings/css/orkt/main.css', [], $theme_ver);
    wp_enqueue_style('css-orkt-media', get_template_directory_uri() . '/landings/css/orkt/media.css', [], $theme_ver, '(max-width:1200px)');
  }

  if( is_page_template('landings/landing-difficult-clients.php') ){
    wp_enqueue_style('css-difficult-site', get_template_directory_uri() . '/landings/css/difficult/main.css', [], $theme_ver);
    wp_enqueue_style('css-difficult-media', get_template_directory_uri() . '/landings/css/difficult/media.css', [], $theme_ver, '(max-width:1300px)');
  }

  if( is_page_template('landings/landing-beauty-hack.php') ){
    wp_enqueue_style('css-beauty-hack', get_template_directory_uri() . '/landings/css/beautyhack/main.css', [], $theme_ver);
    wp_enqueue_style('css-beauty-hack-media', get_template_directory_uri() . '/landings/css/beautyhack/media.css', [], $theme_ver, '(max-width:1300px)');
  }

  if( is_page_template('landings/landing-sketching.php') ){
    wp_enqueue_style('css-sketching', get_template_directory_uri() . '/landings/css/sketching/main.css', [], $theme_ver);
    wp_enqueue_style('css-sketching-media', get_template_directory_uri() . '/landings/css/sketching/media.css', [], $theme_ver, '(max-width:1199px)');
  }

}
add_action('wp_enqueue_scripts', 'disable_enable_scripts', 99);

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
  $result   = ['jsData' => []];

  $sendData = [
    'cookies' => getJSCookiesAsArray($cookies),
    'url'     => $urlfull,
    'other'   => []
  ];



  if( isset($form['special']) ):
    // если на странице "о нас" выбрали тему обращения "другое" - отправляем как подвал
    if( $form['special'] == 'about' && $form['Theme'] == 'Другое' ) $form['special'] = 'footer';

    // форма в подвале уходит в шлюз, там если есть такой url - идет по матрице, если нет - в общую воронку
    if( $form['special'] == 'footer' ):
      $sendData['formName'] = 'Форма в подвале';
      $sendData['other']['specialForm'] = 'footerForm';
      $sendData['uData']    = [
        'name'    => $form['Name'],
        'email'   => $form['Email'],
        'phone'   => $form['Phone'],
      ];
      if( $form['Comment'] ) $sendData['uData']['other']['Comment'] = $form['Comment'];
      $result['gleadid']  = rest_gateway_create_lead($sendData);
      $result['gtm']      = true;
    endif;


    // формы с файлом, уходят на email
    if( in_array($form['special'], ['partner', 'hr', 'teacher', 'about']) ):
      switch($form['special']){
        case 'partner':
          $targetEM = 'nosko.a@talentsy.ru';
          $subject  = 'Заявка с сайта: Стать партнером';
          break;
        case 'teacher':
          $targetEM = 'pilkova.o@talentsy.ru';
          $subject  = 'Заявка с сайта: Стать преподавателем';
          break;
        case 'hr':
          $targetEM = 'pilkova.o@talentsy.ru';
          $subject  = 'Заявка с сайта: Стать сотрудником';
          break;

        default:
          $targetEM = 'it-sombra@ya.ru';
          $subject  = 'Неопознанная форма на талентси WP';
          break;
      }

      // у страницы о нас еще свои условия
      if( $form['special'] == 'about' ):
        switch($form['Theme']){
          case 'Ваш клиент':
            $targetEM = 'support@talentsy.ru';
            $subject  = 'Заявка с сайта: Ваш клиент';
            break;
          case 'Хочу быть вашим преподавателем':
            $targetEM = 'pilkova.o@talentsy.ru';
            $subject  = 'Заявка с сайта: Стать преподавателем';
            break;
          case 'Инвестор':
            $targetEM = 'ceo@talentsy.ru';
            $subject  = 'Заявка с сайта: Стать инвестором';
            break;
          case 'Представитель СМИ':
            $targetEM = 'nosko.a@talentsy.ru';
            $subject  = 'Заявка с сайта: Представитель СМИ';
            break;
          case 'Хочу у вас работать':
            $targetEM = 'pilkova.o@talentsy.ru';
            $subject  = 'Заявка с сайта: Стать сотрудником';
            break;
          case 'Возврат денежных средств':
            $targetEM = 'finance@talentsy.ru';
            $subject  = 'Заявка с сайта: Возврат денежных средств';
            break;
          default:
            $targetEM = 'it-sombra@ya.ru';
            $subject  = 'Неопознанная форма на талентси WP about';
            break;
        }
      endif;

      $message  = [
        '<b>Имя</b>: '. $form['Name'],
        '<b>Телефон</b>: '. $form['Phone'],
        '<b>Email</b>: '. $form['Email'],
        '<b>Комментарий</b>: '. $form['Comment'],
      ];
      if( $form['rezume'] ) $message[] = '<b>Резюме:</b>: '. $form['rezume'];
      $files    = [];

      if( !empty($_FILES) ):
        if( !function_exists('wp_handle_upload') ) require_once(ABSPATH . 'wp-admin/includes/file.php');

        foreach($_FILES as $key => $data):
          $movefile = wp_handle_upload($_FILES[$key], array('test_form' => false));

          if( $movefile && !isset($movefile['error']) ):
            $attachment = [
              'post_mime_type'  => $movefile['type'],
              'guid'            => $movefile['url'],
              'post_title'      => '',
              'post_content'    => '',
            ];
            $id = wp_insert_attachment($attachment, $movefile['file']);

            if( !is_wp_error($id) ):
              $files[] = get_attached_file($id);
            endif;
          endif;
        endforeach;
      endif;

      $result['mail'] = wp_mail($targetEM, $subject, implode('<br>', $message), ['From: Talentsy WP <wp-tech@talentsy.ru>', 'content-type: text/html'], $files);
    endif;
  else:
    $sendData['formName'] = get_field('amo_form_name', $pageID) ?? 'Неизвестная форма';
    $sendData['uData']    = [
      'name'    => $form['Name'],
      'email'   => $form['Email'],
      'phone'   => $form['Phone'],
    ];
    if( get_field('elly_alias', $pageID) ) $sendData['other']['ellyalias'] = get_field('elly_alias', $pageID);
    if( $form['ellyalias'] ) $sendData['other']['ellyalias'] = $form['ellyalias'];

    $result['gleadid']  = rest_gateway_create_lead($sendData);
    $result['gtm']      = true;
  endif;

  // редирект после отправки
  $result['jsData'][] = 'location = "'. (get_field('redirect_form_link', $pageID) && get_field('redirect_form_link', $pageID) != '' ? get_field('redirect_form_link', $pageID) : get_permalink(990)) .'";';

  $result['jsData'] = implode('', $result['jsData']);
  die(json_encode($result));
}
add_action('wp_ajax_axFormRequest', 'axFormRequest');
add_action('wp_ajax_nopriv_axFormRequest', 'axFormRequest');

// loadmore на главной блога
function axLoadMoreHome(){
  $nextPage = $_POST['params'];
  $result   = ['nextPage' => $nextPage, 'jsData' => [], 'eTarget' => '.jsLoadMoreCont'];

  ob_start();
    get_template_part('inc/post-teasers-main', null, ['page' => $nextPage, 'showTg' => false]);
  $result['aHtml'] = ob_get_clean();

  $result['jsData'][] = "$('[data-target=\"axLoadMoreHome\"]').data('params', ". $nextPage+1 .");";


  $result['jsData'] = implode('', $result['jsData']);
  die(json_encode($result));
}
add_action('wp_ajax_axLoadMoreHome', 'axLoadMoreHome');
add_action('wp_ajax_nopriv_axLoadMoreHome', 'axLoadMoreHome');

// проверяет есть ли в строке какие-то символы/слова из массива
function str_allowed($str, $arr){ // ГДЕ ищем и [ЧТО] ищем
  if( !is_array($arr) ) $arr = [$arr];
  if( !$str ) return false;

    foreach($arr as $bad_string){
        if( $bad_string && strpos($str, $bad_string) !== false)
            return true; // есть говно
    }
    return false; // нет говна
}
