<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;700&family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <?= vite('js/main.js') ?>
</head>

<body <?php body_class(); ?>>
<script>
  window.pageID = "<?= get_the_ID(); ?>";
  window.ajaxurl = "<?= admin_url('admin-ajax.php'); ?>";

  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TLLHK7P');
</script>

<header class="blogheader">
  <div class="blogheader__wrap flexi">
    <div class="blogheader__left flexi">
      <button class="blogheader__burger" data-hystmodal="#menuBlogModal">
        <img src="<?=imgs();?>/blog/icon-burger.svg" alt="">
      </button>

      <?php wp_nav_menu([
        'menu' => 'Верхнее меню блог',
        'menu_class' => 'flexi',
        'container' => 'nav',
        'container_class' => 'blogheader__links',
      ]); ?>

    </div>
    <?php the_custom_logo(); ?>
    <div class="blogheader__right flexi">
      <?php wp_nav_menu([
        'menu' => 'Верхнее меню блог - справа',
        'menu_class' => 'flexi',
        'container' => 'nav',
        'container_class' => 'blogheader__links',
      ]); ?>
      <a href="https://lk.talentsy.ru/" class="blogheader__login">Вход</a>
    </div>
    <button class="blogheader__mobsearch" data-hystmodal="#menuSearchModal">
        <img src="<?=imgs();?>/blog/icon-search.svg" alt="">
    </button>
  </div>
</header>

<?php get_template_part('inc/menu-blog'); ?>

<div class="js-scroll-elem"></div>
