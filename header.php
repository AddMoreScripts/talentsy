<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;700&family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

  <script src="<?=get_template_directory_uri(); ?>/js/custom/gsap.min.js"></script>
  <script src="<?=get_template_directory_uri(); ?>/js/custom/ScrollTrigger.min.js"></script>
  <script src="<?=get_template_directory_uri(); ?>/js/custom/ScrollSmoother.min.js"></script>
  <?= vite('js/main.js') ?>
</head>

<body <?php body_class(); ?>>
  <script>
    window.ajaxurl = "<?= admin_url('admin-ajax.php'); ?>";
  </script>


<!-- === === === ШАПКА СТАРТ === === === -->

<?php get_template_part('inc/menu'); ?>

<div class="js-scroll-elem"></div>

<header class="hdr">
  <div class="hdr__wrap flexi">

    <!-- Стандартный вывод логотипа WordPress ф-ей the_custom_logo() -->
    <?php the_custom_logo(); ?>

    <div class="hdr__burgerwrap">
      <button class="hdr__burger" data-hystmodal="#menuModal">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
          <path stroke="#fff" stroke-width="2" d="m1 7.5 20 1M3 15.5l20 1" />
        </svg>
        <span>Каталог курсов</span>
      </button>
    </div>

    <nav class="hdr__leftmenu">
      <ul>
        <li>
          <a href="/blog/">Журнал</a>
        </li>
        <li>
          <a href="https://talentsy.ru/otzyvy">Отзывы</a>
        </li>
      </ul>
    </nav>

    <aside class="hdr__right flexi">
      <a href="https://talentsy.ru/o-talentsy">О Talentsy</a>
      <a href="tel:88007753768" class="hdr__phone">8 800 775 37 68</a>
      <a href="https://lk.talentsy.ru/" class="hdr__login flexi">Вход</a>
    </aside>

  </div>
</header>
<!-- /=== === === ШАПКА КОНЕЦ === === === -->
