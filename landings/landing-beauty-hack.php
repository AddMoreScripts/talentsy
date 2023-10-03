<?php
/*
Template name: Шаблон: Лендинг - Бьюти-хакинг
*/
get_header();
$pics = imgs() . '/beauty-hacking';
$clopics = imgs() . '/clo3d';

$saleDate = 'до ' . getTomorow();
$saleProc = 54;
?>

<div class="beautyhacking">

  <section class="orkt1 beayhack1">
    <div class="clocontainer">
      <div class="orkt1__sub jbm">Нутрициолог: Бьюти Хакинг</div>
      <h1 class="orkt1__h1 jbm">
        За 9 лекций научим составлять<br>
        <mark>индивидуальный рацион</mark> питания<br>
        для красоты и здоровья
      </h1>

      <div class="orkt1sale beayhack1sale">
        <img src="<?= $pics; ?>/b1-badge.svg" alt="" class="orkt1sale__bg">
        <span>-<?= $saleProc; ?><small>%</small></span>
        <em><?= $saleDate; ?></em>
      </div>

      <img src="<?= imgs(); ?>/orkt/b1-star.svg" alt="" class="orkt1__star">
      <div class="cloform__line">
      </div>

      <div class="orkt1bot">
        <img src="<?= $pics; ?>/b1-lead.png" alt="" class="orkt1bot__bg beayhack1__bg">
        <div class="orkt1bot__over">
          <div class="orkt1bot__main">
            <div class="beayhack1__title">С четким пониманием: </div>
            <ul class="beayhack1__list">
              <li>параметров <b>усвоения витаминов</b> и минералов,</li>
              <li>что именно в <b>состоянии ЖКТ</b> влияет на внешность</li>
              <li><b>анатомии тела</b>, строения кожи, ногтей и волос.</li>
            </ul>
            <button class="beayhack1__button clobtn" data-scrollto="#orderform">Записаться на курс</button>
          </div>
          <div class="beayhack1__places">
            <img src="<?= $pics; ?>/b1-reload.svg" alt="">
            <span>Осталось <b>6 мест</b> <br>на новый поток</span>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //beayhack1 -->






  <section class="clob2 beayhack2">
    <div class="clob2__bg">
      <div class="clocontainer flexi">
        <div class="clob2__left">
          <h2 class="h2">
            О курсе <br><mark>Бьюти Хакинг</mark>
          </h2>
          <div class="beayhack2__pic">
            <img src="<?= $pics; ?>/b2-photo.jpg" alt="" class="beayhack2__photo">
          </div>
        </div>
        <div class="clob2__right">
          <p class="beayhack2__line1 jbm">
            Вы освоите глубинные знания в области <br>науки о питании
          </p>
          <div class="beayhack2__line2">
            <p>что позволит вам <b>составлять эффективную программу</b> и целенаправленные диетические стратегии для <b>улучшения состояния здоровья и внешности:</b></p>
          </div>
          <div class="clob2__bot">
            <div class="beayhack2__props">
              <dl class="beayhack2__prop">
                <dt class="jbm">01</dt>
                <dd>сократить выпадение волос, укрепить ногти </dd>
              </dl>
              <dl class="beayhack2__prop">
                <dt class="jbm">02</dt>
                <dd>предупредить возрастные изменения</dd>
              </dl>
              <dl class="beayhack2__prop">
                <dt class="jbm">03</dt>
                <dd>избавиться от акне, от целлюлита</dd>
              </dl>
              <dl class="beayhack2__prop">
                <dt class="jbm">04</dt>
                <dd>сделать кожу лица и тела гладкой и красивой</dd>
              </dl>
            </div>
            <div class="beayhack2__line"></div>
          </div>
          <div class="beayhack2__bottom">
            <div class="beayhack2greencard">
              <img src="<?= $pics; ?>/b2-icon.svg" alt="" class="beayhack2greencard__icon">
              <div class="beayhack2greencard__title">Научный подход</div>
              <div class="beayhack2greencard__text">Вы будете оперировать только достоверными научными данными и методиками</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //beayhack2 -->





  <section class="beayhackslider js-closlider1">
    <div class="clocontainer">
      <h2 class="h2">Чему вы научитесь</h2>
      <div class="clocourseslider__swiper swiper beayhackslider__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">01</div>
            <div class="clo3slide__title">Научитесь составлять персональный рацион</div>
            <div class="clo3slide__descr">
              Сможете составить рацион красоты для себя и своих клиентов, а также сможете работать со специфическими запросами по бьюти
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/001.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide1 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">02</div>
            <div class="clo3slide__title">Научитесь проводить диагностику</div>
            <div class="clo3slide__descr">
              И составлять рекомендации по нутрицевтической коррекции таких состояний, как: акне, ломкость волос, преждевременное старение кожи и не только
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/002.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide2 -->


          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">03</div>
            <div class="clo3slide__title">Узнаете всё о наиболее частых проблемах</div>
            <div class="clo3slide__descr">
              Узнаете всё о проблемах с состоянием кожи, волос, ногтей, их связи с дефицитами. Научитесь определять дефициты витаминов и минеральных веществ
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/003.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide3 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">04</div>
            <div class="clo3slide__title">Сможете определять дефициты и научитесь их закрывать</div>
            <div class="clo3slide__descr">
              Узнаете, какие продукты, блюда, нутрицевтики могут помочь закрыть дефициты
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/004.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide4 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">05</div>
            <div class="clo3slide__title">Научим вас быть в курсе последних исследований</div>
            <div class="clo3slide__descr">
              Что позволит предоставлять точную и основанную на фактах информацию о продуктах питания, питательных веществах и их влиянии на здоровье
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/005.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide5 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">06</div>
            <div class="clo3slide__title">Освоите алгоритм консультирования по бьюти-тематике</div>
            <div class="clo3slide__descr">
              Что поможет повысить стоимость услуг и превзойти коллег по “цеху”
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/006.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide6 -->

          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">07</div>
            <div class="clo3slide__title">Сможете вести экспертный блог</div>
            <div class="clo3slide__descr">
              Знания из курса помогут вам развеять мифы о питании и уверенно вести экспертный блог, основываясь на научном подходе
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3slider/007.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide7 -->
        </div>
      </div><!-- //clocourseslider__swiper -->
      <div class="closlictrl flexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag">1 / 6</div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
      </div>
    </div>
  </section><!-- //beayhackslider -->





  <section class="cloform beayhackform1">
    <div class="clocontainer">
      <img src="<?= $clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="beayhackform1__hdr">
          <div class="beayhackform1__top">
            <h2 class="h2">
              <mark>РАСШИРЬТЕ СПЕКТР<br>
                ЗНАНИЙ</mark> И ПОВЫСЬТЕ<br>
              СВОЮ ВОСТРЕБОВАННОСТЬ
            </h2>
            <img src="<?= $pics; ?>/b4-icon.png" alt="" class="beayhackform1__pic">
          </div>
          <div class="beayhackform1__time">Осталось: <b>6 мест</b></div>
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
          <input type="hidden" name="isHtmlWidget" value="1" />
        </form>

      </div>
    </div>
  </section><!-- //beayhackform1 -->





  <section class="beayhackwho">
    <div class="clocontainer">
      <h2 class="h2">Для кого этот курс</h2>
      <div class="beayhackwho__grid">
        <div class="beayhackwho__item vergreen">
          <div class="beayhackwho__picwrap">
            <img src="<?= $pics; ?>/b5-1.png" alt="">
          </div>
          <div class="beayhackwho__title">Практикующим нутрициологам</div>
          <div class="beayhackwho__text">Повысьте свою востребованность сразу после прохождения курса. Работайте со специфическими запросами по бьюти, оперируя научными данными.</div>
        </div>
        <div class="beayhackwho__item verborder">
          <div class="beayhackwho__picwrap">
            <img src="<?= $pics; ?>/b5-2.png" alt="">
          </div>
          <div class="beayhackwho__title">Косметологам, трихологам, фитнес-тренерам</div>
          <div class="beayhackwho__text">Расширьте спектр услуг. Консультируйте текущих клиентов по смежным запросам. Помогайте им комплексно и увеличьте свой средний чек.</div>
        </div>
        <div class="beayhackwho__item vergray">
          <div class="beayhackwho__picwrap">
            <img src="<?= $pics; ?>/b5-3.png" alt="">
          </div>
          <div class="beayhackwho__title">Тем, кто заботится о своем здоровье</div>
          <div class="beayhackwho__text">Подберите для себя и близких здоровый рацион. Решите проблемы с кожей, волосами, ногтями, возрастными изменениями и целлюлитом.</div>
        </div>
        <div class="beayhackwho__item verphotobg">
          <div class="beayhackwho__picwrap">
            <img src="<?= $pics; ?>/b5-4.jpg" alt="">
          </div>
          <div class="beayhackwho__title">А также</div>
          <div class="beayhackwho__text">выпускникам медицинских вузов <br>и студентам программ по нутрициологии.</div>
        </div>
      </div>
    </div>
  </section><!-- //beayhackwho -->






  <section class="beayhackprepod">
    <div class="beayhackprepod__bg">
      <div class="clocontainer beayhackprepod__wrap">
        <div class="beayhackprepod__left">
          <h2 class="h2">ПОЗНАКОМЬТЕСЬ <br>С ПРЕПОДАВАТЕЛЕМ</h2>
          <img src="<?= $pics; ?>/b6-left.png" alt="" class="beayhackprepod__pic">
        </div>
        <div class="beayhackprepod__right">
          <div class="beayhackprepod__line1 h2"><mark>АЛЕКСАНДРА ФОМИНА</mark></div>
          <div class="beayhackprepod__line2">Врач-терапевт, гастроэнтеролог, диетолог и нутрициолог</div>
          <ul class="beayhackprepod__list">
            <li>Диплом: Первый МГМУ им И.М. Сеченова</li>
            <li>Преподаватель, спикер ЗОЖ-конференций и форумов</li>
            <li>Автор блога Sasha_bewell</li>
          </ul>

          <div class="beayhackprepod__bot">
            <div class="beayhackprepod__line"></div>
            <div class="beayhackprepodcard">
              <img src="<?= $pics; ?>/b6-right.png" alt="" class="beayhackprepodcard__pic">
              <div class="beayhackprepodcard__text">
                Член «Научного сообщества по содействию клиническому изучению микробиома человека» и «Российской гастроэнтерологической ассоциации»
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //beayhackprepod -->




  <section class="closummary beayhacksummary">
    <div class="clocontainer">
      <h2 class="h2">Содержание курса</h2>
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

        <? if (get_field('is_closed')) : ?>
          <button class="closummary__more"></button>
        <? endif; ?>
      </div>
    </div>
  </section><!-- //closummary -->

  <section class="cloform beayhacksummaryform2">
    <div class="clocontainer">
      <img src="<?= $clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <h2 class="cloform2__h2 h2">ПОЛУЧИТЬ <span style="color:#E37524">ПОЛНУЮ <br>ПРОГРАММУ КУРСА</span></h2>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__title">Заполните форму, чтобы <b>получить полную программу курса</b></div>
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
              <button type="submit" class="clobtn">Получить программу</button>
            </div>
          </div>
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
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
  </section><!-- //beayhacksummaryform2 -->




  <section class="clob10 beayhackformat">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">формат обучения</h2>
        <div class="clob10__wrap">
          <dl class="clob10dl clob10dl--green">
            <dt>9</dt>
            <dd>Экспертных <br>онлайн занятий</dd>
          </dl>
          <dl class="clob10dl difficultformat--4">
            <dt>8</dt>
            <dd>Домашних заданий <br>с&nbsp;разбором кейса</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord difficultformat--3">
            <dt><img src="<?= $pics; ?>/b8-icon.svg" alt="" class="clob10dl__svg"></dt>
            <dd>Неограниченный доступ <br>к курсу</dd>
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
            <img src="<?= $pics; ?>/b10-online.jpg" alt="" class="clob10dl__bg">
            <dt></dt>
            <dd>Онлайн <br>формат обучения</dd>
          </dl>
        </div>
        <div class="clob10__hr"></div>
        <div class="clob10__bot flexi">
          <div class="clob10__left">
            <h2 class="h2">А ещё вы получите доступ в <span style="color: #0C9F6A;">закрытый Telegram-чат</span></h2>
            <div class="clob10__bottxt">C полезным контентом для нутрициологов</div>
          </div>
          <aside class="clob10__right">
            <img src="<?= $pics; ?>/b9-more.png" alt="" class="clob10__rightpic">
          </aside>
        </div>
      </div>
    </div>
  </section><!-- //clob10 -->




  <section class="orkt14teams beayhackteams">
    <div class="clocontainer">
      <h2 class="h2">ВАС ЖДУТ <mark>ЗАНЯТИЯ В&nbsp;МИНИГРУППАХ</mark> <br>ДО 20 ЧЕЛОВЕК</h2>
      <div class="orkt14teams__wrap">
        <img src="<?= $pics; ?>/b10-left.jpg" alt="" class="orkt14teams__pic">
        <div class="orkt14teams__content">
          <div class="orkt14teams__line">Студенты <b>мотивируют и помогают</b> друг другу</div>
          <div class="orkt14teams__line">Вы будете <b>расти в среде единомышленников</b> и&nbsp;обмениваться знаниями</div>
          <div class="orkt14teams__line"><b>Формат</b> занятий подразумевает <b>возможность дискуссий</b></div>
        </div>
      </div>
    </div>
  </section>




  <section class="cloform orktform4">
    <div class="clocontainer">
      <img src="<?= $clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">

        <div class="cloform4__hdr">
          <h2 class="h2">
            НАУЧИМ СОСТАВЛЯТЬ<br>
            <mark>ИНДИВИДУАЛЬНЫЙ РАЦИОН</mark> ПИТАНИЯ<br>
            ДЛЯ КРАСОТЫ И ЗДОРОВЬЯ
          </h2>
          <div class="cloform4__sales">
            <div class="cloform4__circle jbm">
              <span>-</span>50<small>%</small>
            </div>
            <div class="cloform4__line">Скидка <?= $saleDate; ?></div>
            <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
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
          <input type="hidden" name="isHtmlWidget" value="1" />
        </form>
      </div>
    </div>
  </section><!-- //cloform4 -->



  <section class="cloreviews cloreviewsnutri js-clo-reviews">
    <div class="clocontainer">
      <h2 class="h2">ВОТ ЧТО <span style="color:#779C34">ГОВОРЯТ СТУДЕНТЫ</span> <br>ОНЛАЙН УНИВЕРСИТЕТА TALENTSY</h2>
      <div class="cloreviews__slider swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 11, 1) as $key => $videoNum) : ?>
            <div class="swiper-slide">
              <a href="<?= imgs(); ?>/nutriciolog/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="cloreview square" data-ratio="0.5625" data-fancybox="reviewVideo">
                <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="cloreview__pic square__img" loading="lazy">
                  <source src="<?= imgs(); ?>/nutriciolog/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
                </video>
                <div class="cloreview__play"></div>
                <div class="cloreview__name">Смотреть видео</div>
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
  </section><!-- //cloreviews -->




  <section class="beayhackwhy">
    <div class="beayhackwhy__bg">
      <img src="<?=$pics; ?>/b13-left.png" alt="" class="beayhackwhybot__absleft">
      <img src="<?=$pics; ?>/b13-right.png" alt="" class="beayhackwhybot__absright">
      <div class="clocontainer">
        <h2 class="h2">ПОЧЕМУ <mark>СТОИТ<br> ОБУЧАТЬСЯ</mark> В TALENTSY</h2>
        <div class="beayhackwhy__cards">
          <div class="beayhackwhycard">
            <img src="<?=$pics; ?>/b12-licence.png" alt="" class="beayhackwhycard__pic">
            <div class="beayhackwhycard__title">
              У нас есть лицензия от Департамента<br>
              образования и науки города Москвы
            </div>
            <a href="" target="_blank" class="beayhackwhycard__link">Посмотреть лицензию</a>
          </div>
          <div class="beayhackwhycard">
            <img src="<?=$pics; ?>/b12-diplom.jpg" alt="" class="beayhackwhycard__pic">
            <div class="beayhackwhycard__title">
              По итогам курса вы получите <br>сертификат об успешном окончании
            </div>
            <div class="beayhackwhycard__descr">с правом консультирования в сфере нутрициологии</div>
          </div>
        </div><!-- //beayhackwhy__cards -->

        <div class="cloform__line"></div>

        <div class="beayhackwhybot">
          <img src="<?=$pics; ?>/b13-lines.svg" alt="" class="beayhackwhybot__absbg">
          <img src="<?=$pics; ?>/b13-logo.png" alt="" class="beayhackwhybot__logo">
          <div class="beayhackwhybot__pre">
          Научным партнером нашего курса по нутрициологии выступает
          </div>
          <div class="beayhackwhybot__title jbm">
            Федеральный <mark>исследовательский<br>
            центр питания</mark>, биотехнологий<br>
            и безопасности пищи
          </div>
          <div class="beayhackwhybot__sub">
            Это гарантирует качество и безопасность <br>образовательной программы
          </div>
        </div>

      </div>
    </div>
  </section><!-- //beayhackwhy -->




  <section class="cloform cloform5 beayhackpriceform">
    <div class="cloform__bg pb0" id="orderform">
      <div class="clocontainer">
        <div class="cloform5__head">
          <h2 class="h2">стоимость обучения</h2>
          <div class="cloform__line cloform5__line"></div>
          <div class="cloform5__prices flexi">
            <div class="cloform5__current flexi jbm">
              <div class="cloform5__char1">От</div>
              <div class="cloform5__char2 jsPPSumm">1000</div>
              <div class="cloform5__char3">₽/мес</div>
            </div>
            <div class="cloform5__old jbm">2166 ₽/мес</div>
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




  <section class="clofaq beayhackfaq">
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
