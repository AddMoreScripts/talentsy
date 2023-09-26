<?php
/*
Template name: Шаблон: Базовая форма помощь в выборе
*/
get_header();
?>

<div class="comingsoonform">
  <div class="comingsoonform__h1 druk js-slide-bot">Поможем в выборе!</div>
  <div class="comingsoonform__sub  js-slide-bot">Если у вас есть вопросы или вы не знаете что<br>выбрать, оставьте свой номер: мы позвоним, чтобы<br>ответить на все ваши вопросы</div>
  
  <form class="ajaxForm" data-target="axFormRequest">
    <div class="comingsoonform__form flexi js-slide-bot">
      <div class="comingsoonform__col">
        <div class="floatinp">
          <input type="text" id="inpname" name="Name" required class="floatinp__input" placeholder=" ">
          <label for="inpname">Имя</label>
        </div>
      </div>
      <div class="comingsoonform__col">
        <div class="floatinp">
          <input type="tel" id="Phone" name="Phone" required class="floatinp__input" placeholder=" ">
          <label for="Phone">Телефон</label>
        </div>
      </div>
      <div class="comingsoonform__col">
        <div class="floatinp">
          <input type="email" id="Email" name="Email" required class="floatinp__input" placeholder=" ">
          <label for="Email">Почта</label>
        </div>
      </div>
      <div class="comingsoonform__submit">
        <button class="button" type="submit">Отправить</button>
        <img src="<?=imgs(); ?>/about/tab4-buttonbg.svg" alt="">
      </div>
    </div>
    <div class="comingsoonform__accept  js-slide-bot">Нажимая "Отправить" вы соглашаетесь на обработку <a href="<?=ldocslink('agree'); ?>" target="_blank">персональных данных</a></div>
  </form>
</div>




<a class="scrollTop" href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <polyline points="18 15 12 9 6 15"></polyline>
  </svg>
</a>

<script src="<?=get_template_directory_uri(); ?>/js/custom/vk-superappkit.js"></script>
<script src="<?=get_template_directory_uri(); ?>/js/custom/sombra.js"></script>
<?php
wp_footer(); ?>
</body>

</html>
