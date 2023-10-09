<?php
/*
Template name: Шаблон: Лендинг - Интерьерный скетчинг
*/
get_header();
$pics = imgs() . '/sketching';
$clopics = imgs() . '/clo3d';

$saleDate = 'до ' . getTomorow();
$saleProc = 96;

$countDownTime = DateTimeImmutable::createFromFormat('U', strtotime('tomorrow'));
?>

<div class="sketching">

  <section class="sketching1">
    <div class="clocontainer">
      <div class="sketching1__h1 jbm">
        ОСВОЙ <mark>ИНТЕРЬЕРНЫЙ СКЕТЧИНГ</mark><br>
        НЕ ВЫХОДЯ ИЗ&nbsp;ДОМА ЗА 21&nbsp;ДЕНЬ<br>
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
              <img src="<?= $pics; ?>/b1-reload.svg" alt="" class="sketching1__reload">
              <span>Осталось <b>6 мест</b> <br>на новый поток</span>
            </div>
          </div>
        </div>
        <img src="<?= $pics; ?>/b1-main.png" alt="" class="sketching1__pic">
      </div>

    </div>
  </section>



  <section class="clob2 sketching2">
    <div class="clob2__bg">
      <div class="clocontainer sketching2__cont">

        <h2 class="h2">И совершенно не&nbsp;важно</h2>
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

        <div class="sketching2__picwrap">
          <img src="<?= $pics; ?>/b2-bottom.jpg" alt="" class="sketching2__pic">
        </div>

      </div>
    </div>
  </section>



  <section class="sketchingresults">
    <div class="clocontainer">
      <h2 class="h2">ВОТ ЧЕМУ ТЫ НАУЧИШЬСЯ <br><mark>ПО&nbsp;ИТОГАМ ОБУЧЕНИЯ</mark></h2>
      <div class="sketchingresults__grid">
        <div class="sketchingresults__line1">
          <div class="sketchingresults__item verbg">
            <div class="sketchingresults__picwrap">
              <img src="<?= $pics; ?>/b3-1.jpg" alt="">
            </div>
            <div class="sketchingresults__txt">
              Рисовать от руки и работать спиртовыми маркерами, линерами
            </div>
          </div>
          <div class="sketchingresults__item">
            <div class="sketchingresults__picwrap">
              <img src="<?= $pics; ?>/b3-2.png" alt="">
            </div>
            <div class="sketchingresults__txt">
              Быстро визуализировать идею будущего интерьера на бумаге
            </div>
          </div>
          <div class="sketchingresults__item verblue">
            <div class="sketchingresults__picwrap">
              <img src="<?= $pics; ?>/b3-3.svg" alt="">
            </div>
            <div class="sketchingresults__txt">
              Грамотно строить перспективу
            </div>
          </div>
        </div>
        <div class="sketchingresults__line2">
          <div class="sketchingresults__item">
            <div class="sketchingresults__picwrap">
              <img src="<?= $pics; ?>/b3-4.svg" alt="">
            </div>
            <div class="sketchingresults__txt">
              Передавать форму и объём предметов, текстуры, фактуры и эффекты освещения с помощью маркеров
            </div>
          </div>
          <div class="sketchingresults__item verborder">
            <div class="sketchingresults__picwrap">
              <img src="<?= $pics; ?>/b3-5.png" alt="">
            </div>
            <div class="sketchingresults__txt">
              Изображать предметы мебели и декора
            </div>
          </div>
          <div class="sketchingresults__item verbg">
            <div class="sketchingresults__picwrap">
              <img src="<?= $pics; ?>/b3-6.jpg" alt="">
            </div>
            <div class="sketchingresults__txt">
              Делать свежие и реалистичные зарисовки интерьеров
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="cloform sketchingform1">
    <div class="clocontainer">
      <img src="<?= $clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="sketchingform1__hdr">
          <div class="sketchingform1__top">
            <h2 class="h2">
              ЗАПИШИСЬ НА КУРС <br>И&nbsp;<mark>НАЧНИ ОБУЧЕНИЕ</mark> <br>УЖЕ СЕГОДНЯ
            </h2>
            <img src="<?= $pics; ?>/b4-1.png" alt="" class="beayhackform1__pic">
          </div>
        </div>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <!-- <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div> -->
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="formParams[first_name]" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="formParams[email]" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
              персональных данных</a>
          </p>

          <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
          <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
          <input name="formParams[dealCustomFields][1291877]" type="hidden">
          <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
          <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
          <input type="hidden" name="requestTime" value="1695648662">
          <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
          <input type="hidden" name="isHtmlWidget" value="1" />
        </form>

      </div>
    </div>
  </section><!-- //sketchingform1 -->




  <section class="clob2 sketching5">
    <div class="clob2__bg">
      <div class="clocontainer sketching5__cont">
        <div class="sketching5__left">
          <h2 class="h2">ПОЗНАКОМЬСЯ С ПРЕПОДАВАТЕЛЕМ</h2>
          <img src="<?= $pics; ?>/b5-prepod.jpg" alt="" class="sketching5__prepod">
        </div>
        <div class="sketching5__right">
          <div class="h2"><mark>ДИАНА УСАНИНА</mark></div>
          <div class="sketching5__props">
            <div class="sketching5__prop">
              <img src="<?= $pics; ?>/b5-1.png" alt="" class="sketching5__propimg">
              <p>Основатель и арт-директор собственной студии дизайна интерьера</p>
            </div>
            <div class="sketching5__prop">
              <img src="<?= $pics; ?>/b5-2.png" alt="" class="sketching5__propimg">
              <p>Васту-мастер с 7-летним опытом</p>
            </div>
          </div>
          <div class="sketching5__line"></div>
          <div class="sketching5__accentblock">
            <img src="<?= $pics; ?>/b5-icon.svg" alt="" class="sketching5__accentsvg">
            <p>Входит в топ-100 лучших специалистов <small>по скетчингу интерьеров по версии AD</small></p>
          </div>
        </div>
      </div>
      <div class="clocontainer sketching5__bot js-clo-reviews">
        <div class="cloform__line"></div>
        <h3 class="h2">Работы преподавателя</h3>
        <div class="sketching5works swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/work/001.jpg" data-fancybox="prepodwork" class="sketching5works__link square">
                <img src="<?= $pics; ?>/work/001.jpg" alt="" class="square__img">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/work/002.jpg" data-fancybox="prepodwork" class="sketching5works__link square">
                <img src="<?= $pics; ?>/work/002.jpg" alt="" class="square__img">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/work/003.jpg" data-fancybox="prepodwork" class="sketching5works__link square">
                <img src="<?= $pics; ?>/work/003.jpg" alt="" class="square__img">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/work/004.jpg" data-fancybox="prepodwork" class="sketching5works__link square">
                <img src="<?= $pics; ?>/work/004.jpg" alt="" class="square__img">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/work/001.jpg" data-fancybox="prepodwork" class="sketching5works__link square">
                <img src="<?= $pics; ?>/work/001.jpg" alt="" class="square__img">
              </a>
            </div>
          </div>
        </div>
        <div class="closlictrl flexi">
          <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
          <div class="closlictrl__pag">1 / 6</div>
          <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
        </div>
      </div>
    </div>
  </section>



  <section class="closummary sketchingsummary">
    <div class="clocontainer">
      <h2 class="h2">Программа обучения</h2>
      <div class="closummary__wrap">
        <? foreach ((array) get_field('prog_list') as $k => $progStep) : ?>
          <article class="closummary__quest">
            <input type="checkbox" name="questcheck" id="closummary<?= $k; ?>">
            <label class="closummary__hdr cloflexi" for="closummary<?= $k; ?>">
              <span class="clo3slide__num"><?= ($k + 1) > 9 ? ($k + 1) : '0' . ($k + 1); ?></span>
              <span class="closummary__title"><?= $progStep['step']; ?></span>
              <span class="closummary__plus"></span>
            </label>
            <div class="closummary__content">
              <div class="closummary__text">
                <div class="closummary__textpad"><?= $progStep['desc']; ?></div>
              </div>
            </div>
          </article>
        <? endforeach; ?>
      </div>
    </div>
  </section><!-- //closummary -->



  <section class="clob10 sketching7">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">ПОГОВОРИМ О ЦИФРАХ</h2>
        <div class="clob10__wrap cloflexi">
          <dl class="clob10dl clob10dl--green">
            <dt>15</dt>
            <dd>уроков <br>в HD-качестве</dd>
          </dl>
          <dl class="clob10dl">
            <dt>12</dt>
            <dd>домашних заданий, <br>которые проверят <br>наши кураторы</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>7</dt>
            <dd>базовых навыков скетчинга + <br>приемы для передачи интерьерных <br>стилей в скетче</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>3</dt>
            <dd>готовые работы для вашего <br>портфолио по итогам обучения</dd>
          </dl>
          <dl class="clob10dl">
            <dt>1000+</dt>
            <dd>человек уже <br>прошли курс</dd>
          </dl>
          <dl class="clob10dl clob10dl__withbg">
            <img src="<?= $pics; ?>/b10-bg.jpg" alt="" class="clob10dl__bg">
            <dt><img src="<?= $pics; ?>/b10-infinity.svg" alt="" class="clob10dl__svg"></dt>
            <dd>доступ к курсу навсегда</dd>
          </dl>
        </div>
        <div class="clob10__hr"></div>
        <div class="clob10__bot cloflexi">
          <div class="clob10__left">
            <h2 class="h2">А ещё ты получишь <br>доступ в <mark>закрытый <br>Telegram-чат</mark></h2>
            <div class="clob10__bottxt">С полезным контентом для дизайнера интерьера</div>
          </div>
          <aside class="clob10__right">
            <img src="<?= $pics; ?>/b11-illustr.png" alt="" class="clob10__rightpic">
          </aside>
        </div>
      </div>
    </div>
  </section><!-- //clob10 -->




  <section class="sketching8 js-sketch-journal-slider">
    <div class="clocontainer">
      <div class="sketching8__hdr">
        <h2 class="h2">
          получи <mark>10 ЭКСПЕРТНЫХ <br>МАТЕРИАЛОВ</mark> ПО ДИЗАЙНУ <br>ИНТЕРЬЕРОВ
        </h2>
        <div class="sketching8__sub">
          <b>Оплачивай курс пока действует</b><br>
          супер предложение <b>и получи</b><br>
          дополнительно материалы<br>
          <b>по дизайну интерьеров</b>
        </div>
      </div>
      <div class="sketching8__slider swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 10, 1) as $picnumber) : ?>
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/journals/<?= str_pad((string) $picnumber, 2, '0', STR_PAD_LEFT); ?>.jpg" class="sketching8__link square" data-fancybox="jounals">
                <img src="<?= $pics; ?>/journals/<?= str_pad((string) $picnumber, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" class="square__img">
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="closlictrl flexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag">1 / 6</div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
      </div>
    </div>
  </section>





  <section class="cloform sketchingform2">
    <div class="clocontainer">
      <img src="<?= $clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="sketchingform2__hdr">
          <div class="sketchingform2__price">
            <h2 class="h2">всего за <mark>490 ₽/мес</mark></h2>
            <s class="jbm">12900 ₽/мес</s>
          </div>
          <div class="sketchingform2__line2">
            <div class="cloform4__circle flexi">
              <span>-</span><?= $saleProc; ?><small>%</small>
            </div>
            <p>Скидка будет действовать еще</p>
            <span class="sketchingform2__brake"></span>
            <div class="sketchingform2__timer jbm js-cout-down"></div>
          </div>
        </div>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="formParams[first_name]" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="formParams[email]" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
              персональных данных</a>
          </p>

          <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
          <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
          <input name="formParams[dealCustomFields][1291877]" type="hidden">
          <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
          <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
          <input type="hidden" name="requestTime" value="1695648662">
          <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
          <input type="hidden" name="isHtmlWidget" value="1" />
        </form>

      </div>
    </div>
  </section><!-- //sketchingform2 -->






  <section class="sketching8 sketching9 js-sketch-work-slider">
    <div class="clocontainer">
      <div class="sketching8__hdr">
        <h2 class="h2">Сомневаетесь <br>что справитесь?</h2>
        <div class="sketching8__sub">
          Наши выпускники <b>тоже сомневались<br>
            в себе,</b> но всё же рискнули и <b>раскрыли<br>
            в себе потрясающую фантазию</b> и навыки
        </div>
      </div>
      <div class="sketching8__under">Посмотрите работы наших выпускников с первого потока</div>
      <div class="sketching8__slider sketching9__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/studworks/01.jpg" class="sketching8__link square" data-fancybox="studwork">
              <img src="<?= $pics; ?>/studworks/01.jpg" alt="" class="square__img">
              <div class="sketching8__label">Квентин Тарантино</div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/studworks/02.jpg" class="sketching8__link square" data-fancybox="studwork">
              <img src="<?= $pics; ?>/studworks/02.jpg" alt="" class="square__img">
              <div class="sketching8__label">Леонардо Ди Каприо</div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/studworks/03.jpg" class="sketching8__link square" data-fancybox="studwork">
              <img src="<?= $pics; ?>/studworks/03.jpg" alt="" class="square__img">
              <div class="sketching8__label">Колин Фаррел</div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/studworks/01.jpg" class="sketching8__link square" data-fancybox="studwork">
              <img src="<?= $pics; ?>/studworks/01.jpg" alt="" class="square__img">
              <div class="sketching8__label">Квентин Тарантино</div>
            </a>
          </div>
        </div>
      </div>
      <div class="closlictrl flexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag">1 / 6</div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
      </div>
    </div>
  </section>





  <section class="sketching10">
    <div class="clocontainer">
      <div class="cloform__line"></div>
      <h2 class="h2">КАКИЕ <mark>МАТЕРИАЛЫ</mark> <br>ПОТРЕБУЮТСЯ ДЛЯ ОБУЧЕНИЯ?</h2>
      <div class="sketching10__grid">
        <div class="sketching10__item vergreen">
          <div class="sketching10__picwrap">
            <img src="<?= $pics; ?>/b12-1.png" alt="" class="sketching10__pic">
          </div>
          <p>Набор маркеров</p>
        </div>
        <div class="sketching10__item">
          <div class="sketching10__picwrap">
            <img src="<?= $pics; ?>/b12-2.png" alt="" class="sketching10__pic">
          </div>
          <p>Карандаш <br>простой</p>
        </div>
        <div class="sketching10__item">
          <div class="sketching10__picwrap">
            <img src="<?= $pics; ?>/b12-3.png" alt="" class="sketching10__pic">
          </div>
          <p>Плотная гладкая бумага </p>
          <small>для работы маркерами</small>
        </div>
        <div class="sketching10__item">
          <div class="sketching10__picwrap">
            <img src="<?= $pics; ?>/b12-4.png" alt="" class="sketching10__pic">
          </div>
          <p>Линейка</p>
        </div>
      </div>
    </div>
  </section>




  <section class="clob2 sketching11">
    <div class="clob2__bg">
      <div class="clocontainer sketching11__cont">
        <div class="sketching11__left">
          <h2 class="h2">
            <mark>ОБУЧЕНИЕ ПРОХОДИТ<br>
              ОНЛАЙН</mark> В ВАШЕМ<br>
            ПЕРСОНАЛЬНОМ<br>
            КАБИНЕТЕ
          </h2>
          <div class="sketching11__leftbot">
            <img src="<?= $pics; ?>/b13-notebook.png" alt="" class="sketching11__notebook">
          </div>
        </div>
        <div class="sketching11__right">
          <div class="sketching11__prop verwhite">
            <div class="sketching11__picwrap">
              <img src="<?= $pics; ?>/b13-icon1.svg" alt="">
            </div>
            <p>Возможность учиться <br>в любом месте</p>
            <small>вы сами составляете себе расписание</small>
          </div>
          <div class="sketching11__prop">
            <div class="sketching11__picwrap">
              <img src="<?= $pics; ?>/b13-icon2.svg" alt="">
            </div>
            <p>Интерактивные задания для <br>закрепления материала</p>
          </div>
          <div class="sketching11__prop">
            <div class="sketching11__picwrap">
              <img src="<?= $pics; ?>/b13-icon3.svg" alt="">
            </div>
            <p>Увлекательные и методично <br>разработанные уроки</p>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="sketchingreviews js-sketch-journal-slider">
    <div class="clocontainer">
      <h2 class="h2">Отзывы</h2>
      <div class="sketchingreviews__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/reviews/01.jpg" class="sketchingreviews__link" data-fancybox="review">
              <img src="<?= $pics; ?>/reviews/01.jpg" alt="">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/reviews/02.jpg" class="sketchingreviews__link" data-fancybox="review">
              <img src="<?= $pics; ?>/reviews/02.jpg" alt="">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/reviews/03.jpg" class="sketchingreviews__link" data-fancybox="review">
              <img src="<?= $pics; ?>/reviews/03.jpg" alt="">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/reviews/04.jpg" class="sketchingreviews__link" data-fancybox="review">
              <img src="<?= $pics; ?>/reviews/04.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="closlictrl flexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag">1 / 6</div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
      </div>
    </div>
  </section>


  <section class="orkt17about sketchingabout">
    <div class="clob2__bg">
      <div class="clocontainer">
        <div class="orkt17about__wrap">
          <div class="orkt17about__left">
            <h2 class="h2">ПОЧЕМУ <mark>СТОИТ <br>ОБУЧАТЬСЯ</mark> <br>В&nbsp;TALENTSY</h2>
            <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" class="orkt17about__licence" target="_blank"><span>Посмотреть лицензию</span></a>
          </div>
          <div class="orkt17about__right">
            <div class="orkt17aboutbox">
              <img src="<?= $clopics; ?>/b15-1.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">У нас есть лицензия </div>
              <div class="orkt17aboutbox__descr">От Департамента образования и науки города Москвы</div>
            </div>
            <div class="orkt17aboutbox is-green">
              <img src="<?= $pics; ?>/b15-sk.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">Участники <br>Skolkovo</div>
            </div>
          </div>
        </div>
        <div class="orkt17sertblock">
          <img src="<?= $pics; ?>/b15-sert.jpg" alt="" class="orkt17sertblock__pic">
          <div class="orkt17sertblock__right">
            <h3 class="h3">
              ПО ИТОГАМ КУРСА<br>
              <span style="color:#218A8E;">ВЫ ПОЛУЧИТЕ СЕРТИФИКАТ</span><br>
              ОБ УСПЕШНОМ ОКОНЧАНИИ
            </h3>
            <p>Всё официально. Удостоверение будет занесено в «Федеральный реестр сведений о документах об образовании и (или) о квалификации, документах об обучении».</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //orkt17about -->



  <section class="cloform sketchingpriceform">
    <div class="clocontainer" id="orderform">
      <div class="cloform5__head">
        <h2 class="h2">успей записаться на курс</h2>
        <div class="cloform__line cloform5__line"></div>
        <div class="cloform5__prices flexi">
          <div class="cloform5__current flexi jbm">
            <div class="cloform5__char1"></div>
            <div class="cloform5__char2 jsPPSumm">490</div>
            <div class="cloform5__char3">₽/мес</div>
          </div>
          <div class="cloform5__old jbm">12900 ₽/мес</div>
        </div>
        <div class="cloform5__underprice">
          <div class="sketchingform2__line2">
            <div class="cloform4__circle flexi">
              <span>-</span><?= $saleProc; ?><small>%</small>
            </div>
            <p>Скидка будет действовать еще</p>
            <span class="sketchingform2__brake"></span>
            <div class="sketchingform2__timer jbm js-cout-down"></div>
          </div>
          <div class="cloform5__right">
            <p>И кстати</p>
            <p class="cloform5__small">
              Если курс вдруг тебе не понравится, мы вернем 100%
              средств в течение 7 дней. Для этого просто пришли
              нам чек на почту <a href="mailto:finance@talentsy.ru">finance@talentsy.ru</a>
            </p>
          </div>
        </div>

      </div>

      <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
        <div class="cloformbox__grid">
          <div class="cloformbox__inpwrap">
            <input type="text" name="formParams[first_name]" placeholder="Имя" required>
          </div>
          <div class="cloformbox__inpwrap">
            <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required>
          </div>
          <div class="cloformbox__inpwrap">
            <input type="email" name="formParams[email]" placeholder="Email" required>
          </div>
          <div class="cloformbox__subwrap">
            <button type="submit" class="clobtn">Забронировать место</button>
          </div>
        </div>
        <p class="cloformbox__accept">
          Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
            персональных данных</a>
        </p>

        <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
        <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
        <input name="formParams[dealCustomFields][1291877]" type="hidden">
        <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
        <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
        <input type="hidden" name="requestTime" value="1695648662">
        <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
        <input type="hidden" name="isHtmlWidget" value="1" />
      </form>
    </div>
  </section><!-- //cloform5 -->




  <script>
    function iniCountDown() {
      const countDownDate = new Date("<?= $countDownTime->format('c'); ?>").getTime();

      const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.querySelectorAll(".js-cout-down").forEach((el) => {
          el.innerHTML = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        });

        if (distance < 0) {
          clearInterval(x);
          document.querySelectorAll(".js-cout-down").forEach((el) => {
            el.innerHTML = "Акция завершена";
          });
        }
      }, 1000);
    }
    iniCountDown();
  </script>



</div>

<?php
get_footer();
