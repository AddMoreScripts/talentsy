<?php
/*
Template name: Шаблон: Лендинг - Кризисные ситуации
*/
get_header();
$pics = imgs() . '/crisis-situations';
$clopics = imgs() . '/clo3d';

$saleDate = 'до ' . getTomorow();
$saleProc = 50;
?>
<div class="crisis-situations">
  <section class="orkt1 crysis1">
    <div class="clocontainer">
      <div class="orkt1__sub jbm">Повышение квалификации для&nbsp;психологов </div>
      <h1 class="orkt1__h1 jbm">
        Освойте навыки <mark>кризисного<br>
        консультирования</mark> за 6 недель<br>
        и будьте готовы к сложным<br>
        клиентским ситуациям
      </h1>

      <div class="orkt1sale crysis1sale">
        <img src="<?= $pics; ?>/b1-badge.svg" alt="" class="orkt1sale__bg">
        <span>-<?=$saleProc; ?><small>%</small></span>
        <em><?= $saleDate; ?></em>
      </div>

      <img src="<?= imgs(); ?>/orkt/b1-star.svg" alt="" class="orkt1__star">
      <div class="cloform__line">
      </div>

      <div class="crysis1bot">
        <img src="<?= $pics; ?>/b1-lead.png" alt="" class="orkt1bot__bg">
        <div class="orkt1bot__over">
          <div class="orkt1bot__main">
            <div class="orkt1bot__text">
              Узнайте как <b>экологично помочь</b> тому,<br>
              кто сломлен, и <b>восстановиться</b> самому<br>
              после <b>сложной консультации</b>
            </div>
            <a href="#orderform" class="orkt1bot__button clobtn" data-scrollto>Записаться на курс</a>
          </div>
          <div class="orkt1places crysis1places">
            <img src="<?= $pics; ?>/b1-reload.svg" alt="">
            <span>Осталось <b>6 мест</b> на новый поток</span>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //crysis2 -->



  <section class="crysis2 clob2">
    <div class="clob2__bg">
      <div class="clocontainer crysis2__cont">
        <div class="crysis2__line1">
          <h2 class="h2">
            Работать с клиентом<br>
            <mark>в остром кризисе</mark> —<br>
            всё равно что<br>
            разминировать бомбу
          </h2>
          <div class="crysis2__badge jbm"><span>Ошибка <br>может <br>дорого <br>стоить</span></div>
        </div>
        <div class="crysis2__line2">
          <div class="crysis2card">
            <div class="crysis2card__picwrap">
              <img src="<?=$pics; ?>/b2-pic.png" alt="" class="crysis2card__pic">
            </div>
            <p><b>Навыки кризисного консультирования необходимы</b> не только кризисному психологу, но и любому <b>психологу-консультанту</b></p>
          </div>
          <div class="crysis2card is-dark">
            <div class="crysis2card__picwrap">
              <img src="<?=$pics; ?>/b2-icon.svg" alt="" class="crysis2card__pic">
            </div>
            <p><b>Ваш клиент</b>, обратившийся с другим запросом, однажды <b>может оказаться в переломной ситуации</b>. И будет искать помощи у вас</p>
          </div>
        </div>
        <div class="crysis2__tags">
          <div class="crysis2__tag">Напряжение</div>
          <div class="crysis2__tag">Чувство одиночества</div>
          <div class="crysis2__tag">Тревога</div>
          <div class="crysis2__tag">Враждебность</div>
          <div class="crysis2__tag">Депрессия</div>
          <div class="crysis2__tag">Ступор</div>
        </div>
        <div class="crysis2__bottom">
          <picture class="crysis2__divider">
            <source media="(min-width: 768px)" srcset="<?=$pics; ?>/b3-divider.svg">
            <img src="<?=$pics; ?>/b3-divider-mob.svg" alt="">
          </picture>
          <h2 class="h2">C этим можно и<br>нужно научиться <br>работать </h2>
          <div class="crysis2__bottext">И помочь клиенту без применения <br>лекарственных препаратов</div>
        </div>
      </div>
      <img src="<?=$pics; ?>/b3-leftbg.png" alt="" class="crysis2__leftbg">
      <img src="<?=$pics; ?>/b3-rightbg.png" alt="" class="crysis2__rightbg">
    </div>
  </section>



  <section class="clocourseslider orktcourseslider js-closlider1">
    <div class="clocontainer">
      <div class="orktcourseslider__hdr">
        <h2 class="h2">ЧЕМУ ВЫ НАУЧИТЕСЬ</h2>
      </div>
      <div class="clocourseslider__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">01</div>
            <div class="clo3slide__title">Поможете клиентам <br>в остром кризисе</div>
            <div class="clo3slide__descr">
              Освоите метод психологической помощи клиентам, переживающим травматичный опыт
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b4-slider/01.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide1 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">02</div>
            <div class="clo3slide__title">Научитесь помогать экологично</div>
            <div class="clo3slide__descr">
            Чтобы не навредить клиенту и сохранить собственное душевное здоровье
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b4-slider/02.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide2 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">03</div>
            <div class="clo3slide__title">Получите навыки выхода из&nbsp;кризиса</div>
            <div class="clo3slide__descr">
              Изучите способы выхода из кризиса с опорой на внутренние ресурсы личности
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b4-slider/03.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide3 -->
        </div>
      </div><!-- //clocourseslider__swiper -->
      <!-- <div class="closlictrl flexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?=$clopics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag"></div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?=$clopics; ?>/b3-arrow.svg" alt=""></button>
      </div> -->
    </div>
  </section><!-- //clocourseslider -->





  <section class="cloform orktform1 crysisform1">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="orktform1__hdr">
          <h2 class="h2">
            ОСВОЙТЕ НОВЫЕ НАВЫКИ<br>
            И <mark>БУДЬТЕ ГОТОВЫ</mark> К СЛОЖНЫМ<br>
            КЛИЕНТСКИМ СИТУАЦИЯМ
          </h2>
          <div class="orktform1__time">Осталось: <b>6 мест</b></div>
        </div>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div>
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
          <div class="promoform newpromoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?= $clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn jsPPRequest" type="button">
                <span>Активировать</span>
                <img src="<?= $clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?= $clopics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->
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
          <input type="hidden" name="isHtmlWidget" value="1"/>
        </form>

      </div>
    </div>
  </section><!-- //orktform1 -->





  <section class="difficul4 crysis6">
    <div class="clocontainer">
      <h2 class="h2">ДЛЯ КОГО ЭТОТ КУРС</h2>
      <div class="difficul4__grid">
        <div class="difficul4item difficul4item--green">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b6-1.png" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Психологам, желающим начать практику
          </div>
        </div>
        <div class="difficul4item difficul4item--border">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b6-2.png" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Студентам психологических программ
          </div>
        </div>
        <div class="difficul4item difficul4item--black">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b6-3.png" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Коучам
          </div>
        </div>
        <div class="difficul4item difficul4item--bg">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b6-4.jpg" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Практикующим психологам
          </div>
        </div>
      </div>
    </div>
  </section><!-- //crysis5 -->





  <section class="clob2 crysis7">
    <div class="clob2__bg">
      <div class="clocontainer crysis7__cont">
        <div class="crysis7__left">
          <h2 class="h2">
            Курс <mark>с заботой</mark><br>
            о&nbsp;Психологе-консультанте
          </h2>
          <img src="<?=$pics; ?>/b7-main.jpg" alt="" class="crysis7__pic">
        </div>
        <div class="crysis7__right">
          <div class="crysis7__text">
            <b>Психолог — не расходный материал.</b><br>
            Несмотря на благородство профессии, специалист не должен <b>спасать клиента себе во вред.</b>
          </div>
          <div class="crysis7__h3 jbm">Вы можете растеряться</div>
          <div class="crysis7__feats">
            <div class="crysis7__feat">
              <img src="<?=$pics; ?>/b7-pic1.png" alt="" class="crysis7__featimg">
              <p>Позволить клиенту отдать вам свои негативные переживания</p>
            </div>
            <div class="crysis7__feat">
              <img src="<?=$pics; ?>/b7-pic2.png" alt="" class="crysis7__featimg">
              <p>Чувствовать себя <br>раздавленным после сессии</p>
            </div>
          </div>
          <div class="crysis7__card">
            <img src="<?=$pics; ?>/b7-icon.svg" class="crysis7__cardicon" alt="">
            <p> Все эти случаи, способы восстановления и экологичной работы мы рассмотрим на курсе</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //crysis7 -->





  <section class="crysisprepods">
    <div class="clocontainer">
      <h2 class="h2">Преподаватели курса</h2>
      <div class="crysisprepods__wrap">
        <div class="crysisprepod">
          <div class="crysisprepod__picwrap">
            <img src="<?=$pics; ?>/b8-teach1.jpg" alt="" class="crysisprepod__pic">
          </div>
          <div class="crysisprepod__name jbm">Андрей Березовский</div>
          <div class="crysisprepod__descr">
            <ul>
              <li>Врач-психиатр</li>
              <li>Психотерапевт с 27-летним опытом работы</li>
              <li>Работает в медицинских учреждениях и центрах оказания психологической поддержки</li>
              <li>Заведовал Кризисным стационаром. Преподавал в Самарском государственном университете</li>
            </ul>
          </div>
        </div>
        <div class="crysisprepod is-white">
          <div class="crysisprepod__picwrap">
            <img src="<?=$pics; ?>/b8-teach2.jpg" alt="" class="crysisprepod__pic">
          </div>
          <div class="crysisprepod__name jbm">Наталья Куделькина</div>
          <div class="crysisprepod__descr">
            <ul>
              <li>Клинический психолог</li>
              <li>Консультант с 20-летним опытом работы</li>
              <li>Оказывает профессиональную психологическую помощь людям, переживающим кризис или оказавшимся в сложной жизненной ситуации</li>
              <li>Преподаватель факультета психологии Talentsy</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //crysisprepods -->



  <section class="cloform crysisform2">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="crysisform2__hdr">
          <div class="crysisform2__left">
            <h2 class="h2">
            ЗАЙМИТЕ МЕСТО <br><mark>В&nbsp;БЛИЖАЙШЕМ ПОТОКЕ</mark>
            </h2>
            <div class="crysisform2__time">Осталось: <b>6 мест</b></div>
          </div>
          <div class="crysisform2__aside">
            <img src="<?=$pics; ?>/b9-img.png" alt="" class="crysisform2__pic">
          </div>
        </div>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div>
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
          <input type="hidden" name="isHtmlWidget" value="1"/>
        </form>

      </div>
    </div>
  </section><!-- //orktform1 -->






  <section class="clob10 orkt13format">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">формат обучения</h2>
        <div class="clob10__wrap flexi">
          <dl class="clob10dl clob10dl--green">
            <dt>6</dt>
            <dd>Живых онлайн-семинаров</dd>
          </dl>
          <dl class="clob10dl">
            <dt>2</dt>
            <dd>Супервизорские <br>сессии</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>
              <img src="<?=$pics; ?>/b10-infinity.svg" alt="" class="clob10dl__svg">
            </dt>
            <dd>Неограниченный доступ <br>к рабочей тетради</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>12/7</dt>
            <dd>Поддержка студентов <br>и ответы на вопросы</dd>
          </dl>
          <dl class="clob10dl">
            <dt>36</dt>
            <dd>Академических <br>часов</dd>
          </dl>
          <dl class="clob10dl clob10dl__withbg">
            <img src="<?=$pics; ?>/b10-bg.jpg" alt="" class="clob10dl__bg">
            <dt></dt>
            <dd>Онлайн <br>формат обучения</dd>
          </dl>
        </div>
        <div class="clob10__hr"></div>
        <div class="clob10__bot flexi">
          <div class="clob10__left">
            <h2 class="h2">А ещё вы получите доступ в <span style="color: #0C9F6A;">закрытый Telegram-чат</span></h2>
            <div class="clob10__bottxt">C полезным контентом для психологов</div>
          </div>
          <aside class="clob10__right">
            <img src="<?=imgs(); ?>/orkt/b13-collage.png" alt="" class="clob10__rightpic">
          </aside>
        </div>
      </div>
    </div>
  </section><!-- //clob10 -->



  <section class="orkt14teams">
    <div class="clocontainer">
      <h2 class="h2">ВАС ЖДУТ <mark>ЗАНЯТИЯ В&nbsp;МИНИГРУППАХ</mark> <br>ДО 20 ЧЕЛОВЕК</h2>
      <div class="orkt14teams__wrap">
        <img src="<?=imgs(); ?>/orkt/b14-pic.jpg" alt="" class="orkt14teams__pic">
        <div class="orkt14teams__content">
          <div class="orkt14teams__line">Студенты <b>мотивируют и помогают</b> друг другу</div>
          <div class="orkt14teams__line">Вы будете <b>расти в среде единомышленников</b> и обмениваться знаниями</div>
          <div class="orkt14teams__line"><b>Формат</b> занятий подразумевает <b>возможность дискуссий</b></div>
        </div>
      </div>
    </div>
  </section>



  <section class="orktform1 difficultform2 crysisform3">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="difficultform2__hdr">
          <div class="difficultform2__left">
            <h2 class="h2">
              Освойте навыки <br><mark>кризисного</mark> <br>консультирования
            </h2>
            <div class="cloform4__sales">
              <div class="cloform4__circle">
                <span>-</span>50<small>%</small>
              </div>
              <div class="cloform4__line">Скидка <?=$saleDate; ?></div>
              <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
            </div>
          </div>
          <img src="<?=$pics; ?>/b13-pic.png" alt="" class="difficultform2__right">
        </div>
        <div class="cloform__line"></div>
        <form action="#" class="cloformbox ajaxForm" data-target="axFormRequest">
          <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div>
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="Name" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="Phone" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="Email" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </form>

      </div>
    </div>
  </section><!-- //orktform3 -->



  <section class="cloreviews js-clo-reviews">
    <div class="clocontainer">
      <h2 class="h2">ВОТ ЧТО <span style="color:#0C9F6A">ГОВОРЯТ СТУДЕНТЫ</span> <br>ОНЛАЙН УНИВЕРСИТЕТА TALENTSY</h2>

      <div class="cloreviews__wrap">
        <div class="getreview-widget" data-widget-id="78K6YVYSqo4uZ4ew"></div>
      </div>
    </div>
  </section><!-- //cloreviews -->



  <section class="orkt17about crysisabout">
    <div class="clob2__bg">
      <div class="clocontainer">
        <div class="orkt17about__wrap">
          <div class="orkt17about__left">
            <h2 class="h2">ПОЧЕМУ <mark>СТОИТ <br>ОБУЧАТЬСЯ</mark> <br>В TALENTSY</h2>
            <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" class="orkt17about__licence" target="_blank"><span>Посмотреть лицензию</span></a>
          </div>
          <div class="orkt17about__right">
            <div class="orkt17aboutbox">
              <img src="<?=imgs(); ?>/orkt/b17-lic.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">У нас есть лицензия </div>
              <div class="orkt17aboutbox__descr">От Департамента образования и науки города Москвы</div>
            </div>
            <div class="orkt17aboutbox is-green">
              <img src="<?=imgs(); ?>/orkt/b17-sk.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">Участники <br>Skolkovo</div>
            </div>
          </div>
        </div>
        <div class="orkt17sertblock difficultsertblock">
          <img src="<?=$pics; ?>/b14-sert.png" alt="" class="orkt17sertblock__pic">
          <div class="orkt17sertblock__right">
            <h3 class="h3">
              По итогам курса <br>
              вы получите Удостоверение<br>
              о&nbsp;<mark>повышении квалификации</mark>
            </h3>
            <p>Всё официально. Удостоверение будет занесено в «Федеральный реестр сведений о документах об образовании и (или) о квалификации, документах об обучении».</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //orkt17about -->




  <section class="cloform cloform5 ortkpriceform">
    <div class="cloform__bg pb0" id="orderform">
      <div class="clocontainer">
        <div class="cloform5__head">
          <h2 class="h2">стоимость обучения</h2>
          <div class="cloform__line cloform5__line"></div>
          <div class="cloform5__prices flexi">
            <div class="cloform5__current flexi jbm">
              <div class="cloform5__char1">От</div>
              <div class="cloform5__char2 jsPPSumm">625</div>
              <div class="cloform5__char3">₽/мес</div>
            </div>
            <div class="cloform5__old jbm">1250 ₽/мес</div>
          </div>
          <div class="cloform5__underprice">
            <div class="cloform4__sales">
              <div class="cloform4__circle flexi">
                <span>-</span><?=$saleProc; ?><small>%</small>
              </div>
              <div class="cloform4__line">Скидка <?=$saleDate; ?></div>
              <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
            </div>
            <div class="cloform5__right">
              <p>Начни учиться бесплатно</p>
              <p class="cloform5__small">Беспроцентная рассрочка на 24 месяца. Первый платеж через 2 месяца.</p>
              <p class="cloform5__green">Скидка студентам Talentsy — до&nbsp;10%</p>
            </div>
          </div>

        </div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
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
          <div class="promoform newpromoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?= $clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn jsPPRequest" type="button">
                <span>Активировать</span>
                <img src="<?= $clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?= $clopics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->
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
          <input type="hidden" name="isHtmlWidget" value="1"/>
        </form>
      </div>
    </div>
  </section><!-- //cloform5 -->





  <section class="clofaq ortkfaq">
    <div class="clocontainer">
      <h2 class="h2">Часто задаваемые вопросы</h2>
      <div class="clofaq__wrap">
        <? foreach((array) get_field('faq_list') as $k => $faqData): ?>
          <article class="closummary__quest">
            <input type="checkbox" name="questcheck" id="clofaq<?= $k; ?>">
            <label class="closummary__hdr cloflexi" for="clofaq<?= $k; ?>">
              <span class="closummary__title"><?= $faqData['q']; ?></span>
              <span class="closummary__plus"></span>
            </label>
            <div class="closummary__content">
              <div class="closummary__text">
                <div class="closummary__textpad"><?= $faqData['a']; ?></div>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


</div>
<?php
get_footer();
