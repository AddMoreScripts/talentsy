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
    window.ajaxurl = "<?= admin_url('admin-ajax.php'); ?>";
  </script>

<header class="blogheader">
  <div class="blogheader__wrap flexi">
    <div class="blogheader__left flexi">
      <button class="blogheader__burger" data-hystmodal="#menuBlogModal">
        <img src="<?=imgs();?>/blog/icon-burger.svg" alt="">
      </button>
      <div class="blogheader__links flexi">
        <a href="/">На главную</a>
        <a href="/">Отзывы</a>
      </div>
    </div>
    <?php the_custom_logo(); ?>
    <div class="blogheader__right flexi">
      <div class="blogheader__links flexi">
        <a href="/">Журнал</a>
        <a href="/">О Talentsy</a>
        <a href="tel:88007753768">8 800 775 37 68</a>
      </div>
      <a href="#" class="blogheader__login">Вход</a>
    </div>
    <button class="blogheader__mobsearch" data-hystmodal="#menuSearchModal">
        <img src="<?=imgs();?>/blog/icon-search.svg" alt="">
    </button>
  </div>
</header>

<?php get_template_part('inc/menu-blog'); ?>

<div class="js-scroll-elem"></div>
