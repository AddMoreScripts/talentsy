<?php
/*
Template name: Шаблон: Лендинг - Интерьерный скетчинг
*/
get_header();
$pics = imgs() . '/sketching';
$clopics = imgs() . '/clo3d';

$saleDate = 'до ' . getTomorow();
$saleProc = 96;
?>


<div class="sketching">

  <section class="sketching1">
    <div class="clocontainer">
      <div class="sketching1__h1 jbm">
        ОСВОЙ <mark>ИНТЕРЬЕРНЫЙ СКЕТЧИНГ</mark><br>
        НЕ ВЫХОДЯ ИЗ ДОМА ЗА 21 ДЕНЬ<br>
        ПОД РУКОВОДСТВОМ<br>
        ТОП-ПРЕПОДАВАТЕЛЯ
      </div>
      <div class="orkt1sale sketching1sale">
        <img src="<?= $pics; ?>/b1-badge.svg" alt="" class="orkt1sale__bg">
        <span>-<?= $saleProc; ?><small>%</small></span>
        <em><?= $saleDate; ?></em>
      </div>

      <img src="<?= imgs(); ?>/orkt/b1-star.svg" alt="" class="orkt1__star">
      <div class="cloform__line"></div>

      <div class="sketching1__bot">
        <div class="sketching1__left">
          <div class="sketching1__list">
            <dl class="sketching1__dl">
              <dt>Научитесь быстро визуализировать</dt>
              <dd>идею будущего интерьера на бумаге </dd>
            </dl>
            <dl class="sketching1__dl">
              <dt>Научитесь передавать форму и объём</dt>
              <dd>предметов, текстуры, фактуры и эффекты освещения с помощью маркеров</dd>
            </dl>
          </div>
          <div class="sketching1__action">
            <button class="sketching1__button clobtn" data-scrollto="#orderform">Записаться на курс</button>
            <div class="sketching1__counter">
              <img src="<?=$pics; ?>/b1-reload.svg" alt="" class="sketching1__reload">
              <span>Осталось <b>6 мест</b> <br>на новый поток</span>
            </div>
          </div>
        </div>
        <img src="<?=$pics; ?>/b1-main.png" alt="" class="sketching1__pic">
      </div>

    </div>
  </section>



  <section class="clob2 sketching2">
    <div class="clob2__bg">
      <div class="clocontainer">

        <h2 class="h2">И совершенно не важно</h2>
        <div class="clob5__botgrid">
          <div class="clob5botitem">
            <div class="clob5botitem__picwrap"><img src="<?= $pics; ?>/b2-1.png" alt=""></div>
            <div class="clob5botitem__title">Какой у тебя опыт и какими навыками владеешь</div>
            <div class="clob5botitem__descr">Даже полный новичок справится</div>
          </div>
          <div class="clob5botitem">
            <div class="clob5botitem__picwrap"><img src="<?= $pics; ?>/b2-2.png" alt=""></div>
            <div class="clob5botitem__title">Есть ли у тебя талант или врожденное чувство стиля</div>
            <div class="clob5botitem__descr">Это все мифы и установки</div>
          </div>
          <div class="clob5botitem">
            <div class="clob5botitem__picwrap"><img src="<?= $pics; ?>/b2-3.png" alt=""></div>
            <div class="clob5botitem__title">Кем ты работаешь сейчас и&nbsp;работаешь ли вообще</div>
            <div class="clob5botitem__descr">Это вообще все не важно </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>

<?php
get_footer();
