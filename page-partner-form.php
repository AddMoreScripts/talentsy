<?php
/*
Template name: Шаблон: Форма Стать партнером
*/
get_header();
?>



<div class="comingsoonform">
  <div class="container partnerforpage">
    <div class="comingsoonform__h1 druk js-slide-bot"><?= get_the_title(); ?></div>
    <div class="comingsoonform__sub  js-slide-bot"><?php the_content(); ?></div>

    <div class="partnerformwrap flexi">
      <div class="partnerform js-slide-left">
        <form class="abloutform ajaxForm" data-target="axFormRequest">
          <div class="floatinp">
            <input type="text" id="inpname" name="Name" required class="floatinp__input" placeholder=" ">
            <label for="inpname">Имя</label>
          </div>

          <div class="floatinp">
            <input type="tel" id="Phone" name="Phone" required class="floatinp__input" placeholder=" ">
            <label for="Phone">Телефон</label>
          </div>

          <div class="floatinp">
            <input type="email" id="Email" name="Email" required class="floatinp__input" placeholder=" ">
            <label for="Email">Почта</label>
          </div>

          <div class="floatinp">
            <textarea name="Comment" id="Textarea" class="floatinp__textarea" placeholder=" "></textarea>
            <label for="Textarea">Комментарий</label>
          </div>
          <div class="fileinput flexi">
            <label for="fileInput" class="fileinput__label flexi">Загрузить файл</label>
            <input type="file" name="file" id="fileInput" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx">
            <div class="fileinput__info"></div>
          </div>

          <div class="abloutform__submit">
            <button class="button" type="submit">Отправить</button>
            <img src="<?= imgs(); ?>/about/tab4-buttonbg.svg" alt="">
          </div>

          <div class="abloutform__accept">Нажимая "Отправить" вы соглашаетесь на обработку <a href="<?= ldocslink('agree'); ?>" target="_blank">персональных данных</a></div>

          <input type="hidden" name="special" value="partner">
        </form>
      </div><!-- //partnerform -->

      <aside class="partnersidebar js-slide-right">
        <div class="partnersidebar__title">Заполните форму, если ваша <br>компания заинтересована в:</div>
        <ul class="partnersidebar__list">
          <li>Трудоустройстве специалистов креативных специальностей</li>
          <li>Бесплатном выполнение ваших творческих задач нашими студентами</li>
          <li>Проведение совместных образовательных мероприятий</li>
          <li>Адаптации наших курсов под задачи вашего корпоративного обучения</li>
        </ul>
      </aside>
    </div>
  </div>
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
