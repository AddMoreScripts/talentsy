<?php
/*
Template name: Шаблон: Вакансии
*/
get_header();
?>

<section class="pagehr">
  <div class="container">
    <div class="pagehr__title druk">Вакансии</div>
    <div class="hrblock">
      <div class="hrblock__top flexi">
        <dl>
          <dt>Контактное лицо</dt>
          <dd>Ольга Пылкова</dd>
        </dl>
        <dl>
          <dt>E-mail</dt>
          <dd>pilkova.o@talentsy.ru</dd>
        </dl>
        <button class="hrblock__button button" data-hystmodal="#hrModal">Отправить резюме</button>
      </div>
      <div class="hrblock__bot">Мы рады видеть в команде инициативных и вовлеченных сотрудников, готовых решать сложные задачи и реализовывать масштабные проекты.</div>
    </div>

    <div class="hritemwrap">
      <?php while (have_rows('vakansii')) : the_row(); ?>
        <hr>
        <div class="hritem">
          <input type="checkbox" id="hrblock<?= get_row_index(); ?>">
          <label for="hrblock<?= get_row_index(); ?>" class="hritem__title jbm">
            <span class="hritem__proffname"><?= get_sub_field('title'); ?></span>
            <span class="hritem__profprise"><?= get_sub_field('sub'); ?></span>
            <span class="hritem__plus"></span>
          </label>
          <div class="hritem__contentwrap">
            <div class="hritem__content">
              <div class="hritem__text textcontent">
                <?= get_sub_field('descr'); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>

  </div>
</section>

<div class="hystmodal" id="hrModal" aria-hidden="false">
  <div class="hystmodal__window hrform" role="dialog" aria-modal="true">
    <button class="menuwindow__closer" data-hystclose><img src="<?=imgs();?>/menu/icon-close.svg" alt=""></button>
    <div class="hrform__box">
      <div class="hrform__h1 druk">Отправить <br>резюме</div>
      <div class="hrform__sub">
        Мы рады видеть в команде инициативных и вовлеченных сотрудников, готовых решать сложные задачи и реализовывать масштабные проекты.
      </div>
      <form action="/" class="hrform__form" method="post" enctype="multipart/form-data">

        <div class="floatinp">
          <input type="text" id="inpname" name="name" required class="floatinp__input" placeholder=" ">
          <label for="inpname">Имя</label>
        </div>

        <div class="floatinp">
          <input type="tel" id="Phone" name="Phone" required class="floatinp__input" placeholder=" ">
          <label for="Phone">Телефон</label>
        </div>

        <div class="floatinp">
          <input type="email" id="Email" name="Email" required class="floatinp__input" placeholder=" ">
          <label for="Email">e-mail</label>
        </div>

        <div class="hrform__prelabel">Добавьте ссылку на ваше резюме <br>(любой файлообменник)</div>
        <div class="floatinp">
          <input type="text" id="Link" name="rezume" required class="floatinp__input" placeholder=" ">
          <label for="Email"></label>
        </div>

        <div class="hrform__submit">
          <button class="button" type="submit">Отправить</button>
        </div>
        <div class="hrform__accept">Нажимая "Отправить" вы соглашаетесь на обработку <a href="<?= personal_link(); ?>" target="_blank">персональных данных</a></div>

      </form>
    </div>
  </div>
</div><!-- //#hrModal -->

<?php
get_footer();
