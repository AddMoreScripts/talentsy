<aside class="blogheader blogcatheader--menu">
  <div class="blogheader__wrap flexi">
    <div class="blogheader__left flexi">
      <button class="blogheader__burger" data-hystclose>
        <img src="<?= imgs(); ?>/blog/icon-burger-close.svg" alt="">
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
      <img src="<?= imgs(); ?>/blog/icon-search.svg" alt="">
    </button>
  </div>
</aside>
