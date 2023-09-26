<!doctype html>
<html <?php language_attributes(); ?> class="nomarginwp">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;700&family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet">

  <script src="<?=get_template_directory_uri(); ?>/js/custom/gsap.min.js"></script>
  <script src="<?=get_template_directory_uri(); ?>/js/custom/ScrollTrigger.min.js"></script>
  <?= vite('js/main.js') ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
  window.pageID = "<?= get_the_ID(); ?>";
  window.ajaxurl = "<?= admin_url('admin-ajax.php'); ?>";

  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TLLHK7P');
</script>


<!-- === === === ШАПКА СТАРТ === === === -->

<?php get_template_part('inc/menu'); ?>

<div class="js-scroll-elem"></div>

<header class="hdr">
  <div class="hdr__wrap flexi">

    <?php
      if(isset($args['white']) && $args['white']){
        echo "<a href='/' class='custom-logo-link'><img src='". imgs() . "/logo-white.svg' alt=''></a>";
      } else {
        the_custom_logo();
      }
     ?>

    <div class="hdr__burgerwrap">
      <button class="hdr__burger" data-hystmodal="#menuModal">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
          <path stroke="#fff" stroke-width="2" d="m1 7.5 20 1M3 15.5l20 1" />
        </svg>
        <span>Каталог курсов</span>
      </button>
    </div>

    <?php wp_nav_menu([
      'menu' => 'Верхнее меню сайт',
      'menu_class' => '',
      'container' => 'nav',
      'container_class' => 'hdr__leftmenu',
    ]); ?>

    <aside class="hdr__right flexi">
      <?php wp_nav_menu([
        'menu' => 'Верхнее меню сайт - справа',
        'menu_class' => 'flexi',
        'container' => 'nav',
        'container_class' => '',
      ]); ?>
      <!-- <a href="<?=get_permalink(204); ?>">О Talentsy</a>
      <a href="tel:88007753768" class="hdr__phone">8 800 775 37 68</a> -->
      <a href="https://lk.talentsy.ru/" class="hdr__login flexi">Вход</a>
    </aside>

  </div>
</header>
<!-- /=== === === ШАПКА КОНЕЦ === === === -->
