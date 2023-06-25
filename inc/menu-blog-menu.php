<aside class="blogheader blogcatheader--menu">
  <div class="blogheader__wrap flexi">
    <div class="blogheader__left flexi">
      <button class="blogheader__burger" data-hystclose>
        <img src="<?= imgs(); ?>/blog/icon-burger-close.svg" alt="">
      </button>
      <div class="blogheader__links flexi">
        <a href="/">На главную</a>
        <a href="<?=get_permalink(150); ?>">Отзывы</a>
      </div>
    </div>
    <?php the_custom_logo(); ?>
    <div class="blogheader__right flexi">
      <div class="blogheader__links flexi">
        <a href="/blog/">Журнал</a>
        <a href="/">О Talentsy</a>
        <a href="tel:88007753768">8 800 775 37 68</a>
      </div>
      <a href="#" class="blogheader__login">Вход</a>
    </div>
    <button class="blogheader__mobsearch" data-hystmodal="#menuSearchModal">
      <img src="<?= imgs(); ?>/blog/icon-search.svg" alt="">
    </button>
  </div>
</aside>
