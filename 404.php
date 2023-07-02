<?php
  get_header();
?>


<div class="page404">
  <img src="<?=imgs(); ?>/404.svg" alt="" class="page404__pic js-slide-bot" width="320">
  <h1 class="page404__h1 druk js-slide-bot">
    Мы не <br class="mobbr">смогли найти <br>эту страницу
  </h1>
  <div class="page404__sub  js-slide-bot">
    Переходите на главную страницу – там вы также <br>сможете найти много полезной информации
  </div>
  <a href="/" class="button page404__button  js-slide-bot">На главную</a>
</div>


<?php
wp_footer(); ?>
</body>
</html>
