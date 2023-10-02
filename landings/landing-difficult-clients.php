<?php
/*
Template name: Шаблон: Лендинг - Сложные клиенты
*/
get_header();
$pics = imgs() . '/difficult-clients';
$orktPics = imgs() . '/orkt';
$clopics = imgs() . '/clo3d';

$saleDate = 'до ' . getTomorow();
?>

<div class="page-difficult">


  <section class="orkt1 difficult1">
    <div class="clocontainer">
      <div class="orkt1__sub jbm">Повышение квалификации для&nbsp;психологов </div>
      <h1 class="orkt1__h1 jbm">
        Научим работать <mark>с&nbsp;8&nbsp;типами<br>
          сложных клиентов</mark> за 6&nbsp;недель<br>
        обучения
      </h1>

      <div class="orkt1sale difficult1sale">
        <img src="<?= imgs(); ?>/orkt/b1-salebg.svg" alt="" class="orkt1sale__bg">
        <span>-50<small>%</small></span>
        <em><?= $saleDate; ?></em>
      </div>

      <img src="<?= imgs(); ?>/orkt/b1-star.svg" alt="" class="orkt1__star">
      <div class="cloform__line">
      </div>

      <div class="orkt1bot">
        <img src="<?= $pics; ?>/b1-lead.png" alt="" class="orkt1bot__bg">
        <div class="orkt1bot__over">
          <div class="orkt1bot__main">
            <div class="orkt1bot__text">
              Узнайте как <b>«расколоть»<br>
                молчаливого клиента</b>, реагировать<br>
              на неожиданные слова и поступки<br>
              <b>и быть уверенным, что любая<br>
                проблема разрешима</b>
            </div>
            <a href="#orderform" class="orkt1bot__button clobtn" data-scrollto>Записаться на курс</a>
          </div>
          <div class="orkt1places">
            <img src="<?= imgs(); ?>/orkt/b1-green.svg" alt="">
            <span>Осталось <b>6 мест</b> на новый поток</span>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //orkt1 -->




  <section class="difficult2 js-closlider1">
    <div class="clob2__bg">
      <div class="clocontainer">
        <div class="orktcourseslider__hdr">
          <h2 class="h2">ЧЕМУ ВЫ НАУЧИТЕСЬ ЗА&nbsp;6&nbsp;НЕДЕЛЬ</h2>
        </div>
        <div class="clocourseslider__swiper swiper difficult2__swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide clo3slide">
              <div class="clo3slide__num">01</div>
              <div class="clo3slide__title">Поймете профиль «своего» клиента</div>
              <div class="clo3slide__descr">
              Научитесь находить контакт даже с молчаливыми клиентами
              </div>
              <div class="clo3slide__picwrap">
                <img src="<?= $pics; ?>/b2-01.jpg" alt="" class="clo3slide__pic">
              </div>
            </div><!-- //slide1 -->
            <div class="swiper-slide clo3slide">
              <div class="clo3slide__num">02</div>
              <div class="clo3slide__title">Освоите новый подход</div>
              <div class="clo3slide__descr">
                Овладеете навыками работы с эмоционально нестабильными клиентами
              </div>
              <div class="clo3slide__picwrap">
                <img src="<?= $pics; ?>/b2-02.jpg" alt="" class="clo3slide__pic">
              </div>
            </div><!-- //slide2 -->
            <div class="swiper-slide clo3slide">
              <div class="clo3slide__num">03</div>
              <div class="clo3slide__title">Определите смыслы и ценности</div>
              <div class="clo3slide__descr">
                На которые можно опираться в сложной работе
              </div>
              <div class="clo3slide__picwrap">
                <img src="<?= $pics; ?>/b2-03.jpg" alt="" class="clo3slide__pic">
              </div>
            </div><!-- //slide3 -->
            <div class="swiper-slide clo3slide">
              <div class="clo3slide__num">04</div>
              <div class="clo3slide__title">Станете более уверенными</div>
              <div class="clo3slide__descr">
                В работе с необычными клиентскими кейсами
              </div>
              <div class="clo3slide__picwrap">
                <img src="<?= $pics; ?>/b2-04.jpg" alt="" class="clo3slide__pic">
              </div>
            </div><!-- //slide4 -->
            <div class="swiper-slide clo3slide">
              <div class="clo3slide__num">05</div>
              <div class="clo3slide__title">Получите новые навыки</div>
              <div class="clo3slide__descr">
                Научитесь реагировать на неожиданные для вас слова и поступки клиента
              </div>
              <div class="clo3slide__picwrap">
                <img src="<?= $pics; ?>/b2-05.jpg" alt="" class="clo3slide__pic">
              </div>
            </div><!-- //slide5 -->
            <div class="swiper-slide clo3slide">
              <div class="clo3slide__num">06</div>
              <div class="clo3slide__title">Пройдете практику</div>
              <div class="clo3slide__descr">
                Получите полезную обратную связь на супервизиях
              </div>
              <div class="clo3slide__picwrap">
                <img src="<?= $pics; ?>/b2-06.jpg" alt="" class="clo3slide__pic">
              </div>
            </div><!-- //slide6 -->
          </div>
        </div><!-- //clocourseslider__swiper -->
        <div class="closlictrl flexi">
          <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
          <div class="closlictrl__pag">1 / 6</div>
          <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $clopics; ?>/b3-arrow.svg" alt=""></button>
        </div>
      </div>
    </div>
  </section>



  <section class="cloform orktform1">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="orktform1__hdr">
          <h2 class="h2">
            НАУЧИТЕСЬ <mark>ПРЕВРАЩАТЬ</mark><br>
            СЛОЖНЫЕ СЛУЧАИ В&nbsp;ПРОСТЫЕ
          </h2>
          <div class="orktform1__time">Осталось: <b>6 мест</b></div>
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
          <div class="promoform newpromoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?= $clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="promocode" placeholder="Введите промокод" class="jsPmoField">
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
        </form>

      </div>
    </div>
  </section><!-- //orktform1 -->





  <section class="difficul4">
    <div class="clocontainer">
      <h2 class="h2">Кому подойдёт курс</h2>
      <div class="difficul4__grid">
        <div class="difficul4item difficul4item--green">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b4-1.png" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Психологам, желающим начать практику
          </div>
        </div>
        <div class="difficul4item difficul4item--border">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b4-2.png" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Студентам психологических программ
          </div>
        </div>
        <div class="difficul4item difficul4item--black">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b4-3.png" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Коучам
          </div>
        </div>
        <div class="difficul4item difficul4item--bg">
          <div class="difficul4item__picwrap">
            <img src="<?=$pics; ?>/b4-4.jpg" alt="" class="difficul4item__pic">
          </div>
          <div class="difficul4item__text">
            Практикующим психологам
          </div>
        </div>
      </div>
    </div>
  </section><!-- //difficul4 -->



  <section class="clob2 difficultblackgrid">
    <div class="clob2__bg">
      <div class="clocontainer flexi">
        <div class="clob2__left">
          <h2 class="h2">
            <mark>8 типов<br>
            сложных клиентов,</mark><br>
            с которыми<br>
            вы научитесь работать:
          </h2>
          <div class="clob2__vidowrap">
            <img src="<?=$pics; ?>/b5-left.jpg" alt="" class="clob2__photo">
          </div>
        </div>
        <div class="clob2__right">
          <p class="clob2__line1">
            Сложные клиенты не безнадежны
          </p>
          <div class="clob2__line2">
            <p>Именно с такими людьми, у вас может получиться крепкий рабочий союз и самый поразительный опыт,  если преодолеть некоторые сложности</p>
          </div>
          <div class="clob2__bot">
            <div class="difficultblackgrid__props">
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">01</dt>
                <dd>Обесценивающие клиенты</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">02</dt>
                <dd>«Вязкие клиенты»</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">03</dt>
                <dd>Клиенты «на один раз»</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">04</dt>
                <dd>Эмоционально-нестабильные клиенты</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">05</dt>
                <dd>Клиенты, вызывающие бурю эмоций у психолога</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">06</dt>
                <dd>Клиенты с суицидальным риском</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">07</dt>
                <dd>Клиенты с подозрением на&nbsp;психическое расстройство</dd>
              </dl>
              <dl class="difficultblackgrid__prop">
                <dt class="jbm">08</dt>
                <dd>Клиенты с неудачным опытом психологической помощи</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //clob2 -->




  <section class="difficult6">
    <div class="clocontainer">
      <div class="difficult6__hdr">
        <h2 class="h2">
          Как с порога понять,<br>
          что к вам   <mark>пришел<br>
          сложный клиент?</mark>
        </h2>
        <i class="difficult6__line"></i>
        <div class="difficult6__nope jbm">никак</div>
      </div>
      <div class="difficult6__grid">
        <div class="difficult6item difficult6item--normal">
          <div class="difficult6item__picwrap">
            <img src="<?=$pics; ?>/b6-1.png" alt="" class="difficult6item__pic">
          </div>
          <div class="difficult6item__text">
            Это не всегда можно обнаружить<br>
            на первой консультации
          </div>
        </div>
        <div class="difficult6item difficult6item--border">
          <div class="difficult6item__picwrap">
            <img src="<?=$pics; ?>/b6-2.svg" alt="" class="difficult6item__pic">
          </div>
          <div class="difficult6item__text">
            Сложный клиент — это профессиональный вызов для психолога
          </div>
        </div>
        <div class="difficult6item difficult6item--black">
          <div class="difficult6item__picwrap">
            <img src="<?=$pics; ?>/b6-3.svg" alt="" class="difficult6item__pic">
          </div>
          <div class="difficult6item__text">
            Начав работу с человеком, вы можете случайно вскрыть старую рану и спровоцировать реакцию, к которой будете не готовы
          </div>
        </div>
        <div class="difficult6item difficult6item--bg">
          <div class="difficult6item__picwrap">
            <img src="<?=$pics; ?>/b6-4.jpg" alt="" class="difficult6item__pic">
          </div>
          <div class="difficult6item__text">
            Отказав человеку, можете лишить надежды и&nbsp;поселить в&nbsp;нем мысли, что его проблема не&nbsp;разрешима<br>&nbsp;
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="difficultprepod">
    <div class="difficultgraybg">
      <div class="clocontainer difficultprepod__cont">
        <div class="difficultprepod__left">
          <h2 class="h2">Преподаватель курса — <br>практикующий психолог</h2>
          <img src="<?=$pics; ?>/b7-prepod.jpg" alt="" class="difficultprepod__photo">
        </div>
        <div class="difficultprepod__right">
          <div class="difficultprepod__top">
            <h3 class="h2"><mark>Сергей Гоглев</mark></h3>
            <ul>
              <li>Психолог, гештальт-терапевт, преподаватель Санкт-Петербургского Института Гештальта;</li>
              <li>Член государственной экзаменационной комиссии СПбГУ;</li>
              <li>Официальный преподаватель ППЛ, супервизор;</li>
              <li>Школьный психолог, ведущий групп для детей и взрослых;</li>
              <li>Спикер международных офлайн и онлайн конференций</li>
            </ul>
          </div>
          <div class="difficultprepod__bot">
            <div class="difficultprepod__plank">
              <div class="difficultprepod__plankhdr">
                <span>Сергей Гоглев о курсе:</span>
                <img src="<?=$pics; ?>/b7-dzen.svg" alt="">
              </div>
                <p>Курс «Работа со сложными клиентами» — <b>результат осмысления моей регулярной десятилетней практики.</b> Бывало всякое: клиенты уходили из кабинета посреди разговора, кидались салфетками, молчали всю сессию, внезапно отменяли встречу, ложились в психиатрический стационар.</p>
                <p>Иногда я справлялся с такими случаями легко. А иногда — не справлялся совсем. В самые тяжёлые моменты меня поддерживала одна мысль: когда-нибудь я напишу об этом книгу…</p>
                <p>Итак, <b>этот курс — один из шагов в осмыслении сложных случаев.</b> Выпускники курса смогут с большей вероятностью <b>превращать сложные случаи — в простые</b>, что пойдет на пользу и консультантам, и их клиентам.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="closummary difficultsummary">
    <div class="clocontainer">
      <h2 class="h2">Программа обучения</h2>
      <div class="closummary__wrap">
        <? foreach(get_field('prog_list') as $k => $progStep): ?>
          <article class="closummary__quest">
            <input type="checkbox" name="questcheck" id="closummary<?=$k;?>">
            <label class="closummary__hdr cloflexi" for="closummary<?=$k;?>">
              <span class="clo3slide__num"><?= ($k+1) > 9 ? ($k+1) : '0'.($k+1); ?></span>
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

        <? if( get_field('is_closed') ): ?>
          <button class="closummary__more"></button>
        <? endif; ?>
      </div>
    </div>
  </section><!-- //difficultsummary -->



  <section class="orktform1 difficultform2">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="difficultform2__hdr">
          <div class="difficultform2__left">
            <h2 class="h2">
              ЗАБРОНИРОВАТЬ МЕСТО <br><mark>НА&nbsp;НОВЫЙ ПОТОК</mark>
            </h2>
            <div class="cloform4__sales">
              <div class="cloform4__circle">
                <span>-</span>50<small>%</small>
              </div>
              <div class="cloform4__line">Скидка <?=$saleDate; ?></div>
              <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
            </div>
          </div>
          <img src="<?=$pics; ?>/b9-right.jpg" alt="" class="difficultform2__right">
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




  <section class="clob10 orkt13format difficultformat">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">формат обучения</h2>
        <div class="clob10__wrap">
          <dl class="clob10dl clob10dl--green">
            <dt>5</dt>
            <dd>Живых <br>онлайн-семинаров</dd>
          </dl>
          <dl class="clob10dl difficultformat--4">
            <dt>2</dt>
            <dd>Супервизорские <br>сессии</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord difficultformat--3">
            <dt>6</dt>
            <dd>Недель <br>обучения</dd>
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
            <img src="<?=$pics; ?>/b10-online.jpg" alt="" class="clob10dl__bg">
            <dt></dt>
            <dd>Онлайн формат обучения</dd>
          </dl>
        </div>
        <div class="clob10__hr"></div>
        <div class="clob10__bot flexi">
          <div class="clob10__left">
            <h2 class="h2">А ещё вы получите доступ в <span style="color: #0C9F6A;">закрытый Telegram-чат</span></h2>
            <div class="clob10__bottxt">C полезным контентом для психологов</div>
          </div>
          <aside class="clob10__right">
            <img src="<?=$pics; ?>/b10-illustr.png" alt="" class="clob10__rightpic">
          </aside>
        </div>
      </div>
    </div>
  </section><!-- //clob10 -->




  <section class="orkt14teams">
    <div class="clocontainer">
      <h2 class="h2">ВАС ЖДУТ <mark>ЗАНЯТИЯ В&nbsp;МИНИГРУППАХ</mark> <br>ДО 20 ЧЕЛОВЕК</h2>
      <div class="orkt14teams__wrap">
        <img src="<?=$pics; ?>/b11-left.jpg" alt="" class="orkt14teams__pic">
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
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">

        <div class="cloform4__hdr">
          <h2 class="h2">
            Научитесь работать<br>
            <mark>с 8 типами сложных клиентов</mark><br>
            за 6 недель обучения
          </h2>
          <div class="cloform4__sales">
            <div class="cloform4__circle jbm">
              <span>-</span>50<small>%</small>
            </div>
            <div class="cloform4__line">Скидка <?=$saleDate; ?></div>
            <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
          </div>
        </div>
        <div class="cloform__line"></div>

        <form action="#" class="cloformbox ajaxForm" data-target="axFormRequest">
          <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
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
  </section><!-- //cloform4 -->





  <section class="cloreviews js-clo-reviews">
    <div class="clocontainer">
      <h2 class="h2">ВОТ ЧТО <span style="color:#0C9F6A">ГОВОРЯТ СТУДЕНТЫ</span> <br>ОНЛАЙН УНИВЕРСИТЕТА TALENTSY</h2>
      <div class="cloreviews__sub">Уже <b>более 90 студентов</b> прошли курс и <b>превзошли своих коллег</b> по цеху</div>

      <div class="cloreviews__wrap">
        <div class="getreview-widget" data-widget-id="78K6YVYSqo4uZ4ew"></div>
      </div>
    </div>
  </section><!-- //cloreviews -->




  <section class="orkt17about difficultabout">
    <div class="clob2__bg">
      <div class="clocontainer">
        <div class="orkt17about__wrap">
          <div class="orkt17about__left">
            <h2 class="h2">ПОЧЕМУ <mark>СТОИТ <br>ОБУЧАТЬСЯ</mark> <br>В TALENTSY</h2>
            <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" class="orkt17about__licence" target="_blank"><span>Посмотреть лицензию</span></a>
          </div>
          <div class="orkt17about__right">
            <div class="orkt17aboutbox">
              <img src="<?=$orktPics; ?>/b17-lic.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">У нас есть лицензия </div>
              <div class="orkt17aboutbox__descr">От Департамента образования и науки города Москвы</div>
            </div>
            <div class="orkt17aboutbox is-green">
              <img src="<?=$orktPics; ?>/b17-sk.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">Участники <br>Skolkovo</div>
            </div>
          </div>
        </div>
        <div class="orkt17sertblock difficultsertblock">
          <img src="<?=$pics; ?>/b9-cert.jpg" alt="" class="orkt17sertblock__pic">
          <div class="orkt17sertblock__right">
            <h3 class="h3">
              По итогам курса<br>
              вы получите Удостоверение<br>
              о <mark>повышении квалификации</mark>
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
          <div class="cloform5__prices">
            <div class="cloform5__current flexi jbm">
              <div class="cloform5__char1">От</div>
              <div class="cloform5__char2 jsPPSumm">833</div>
              <div class="cloform5__char3">₽/мес</div>
            </div>
            <div class="cloform5__old jbm">1667 ₽/мес</div>
          </div>
          <div class="cloform5__underprice">
            <div class="cloform4__sales">
              <div class="cloform4__circle">
                <span>-</span>50<small>%</small>
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

        <form action="#" class="cloformbox ajaxForm" data-target="axFormRequest">
          <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
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
          <div class="promoform newpromoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?= $clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="promocode" placeholder="Введите промокод" class="jsPmoField">
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
        </form>
      </div>
    </div>
  </section><!-- //cloform5 -->



  <section class="clofaq ortkfaq">
    <div class="clocontainer">
      <h2 class="h2">Часто задаваемые <br>вопросы</h2>
      <div class="clofaq__wrap">
        <?php
        foreach(get_field('faq_list') ? get_field('faq_list') : [] as $k => $faqData): ?>
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
