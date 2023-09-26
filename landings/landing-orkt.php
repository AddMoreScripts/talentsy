<?php
/*
Template name: Шаблон: Лендинг - ОРКТ
*/
get_header();
$pics = imgs() . '/orkt';
$clopics = imgs() . '/clo3d';

$saleDate = 'до ' . getTomorow();
?>

<div class="pagewrap">

  <section class="orkt1">
    <div class="clocontainer">
      <div class="orkt1__sub jbm">Повышение квалификации для&nbsp;психологов </div>
      <h1 class="orkt1__h1 jbm">
        <mark>Освойте ОРКТ подход</mark><br>
        за&nbsp;12&nbsp;недель и&nbsp;достигайте<br>
        быстрых результатов с&nbsp;клиентами
      </h1>

      <img src="<?=$pics; ?>/b1-star.svg" alt="" class="orkt1__star">
      <div class="cloform__line">
      </div>

      <div class="orkt1bot">
        <img src="<?=$pics; ?>/b1-lead.png" alt="" class="orkt1bot__bg">
        <div class="orkt1bot__over">
          <div class="orkt1bot__main">
            <div class="orkt1bot__text">
              <b>Добавьте ОРКТ-подход</b><br>
              в свою практику и <b>приводите</b><br>
              своих клиентов <b>к результату<br>
                за 10 сессий</b>
            </div>
            <a href="#orderform" class="orkt1bot__button clobtn" data-scrollto>Записаться на курс</a>
          </div>
          <div class="orkt1sale">
            <img src="<?=$pics; ?>/b1-salebg.svg" alt="" class="orkt1sale__bg">
            <span>-34<small>%</small></span>
            <em><?=$saleDate; ?></em>
          </div>
          <div class="orkt1places">
            <img src="<?=$pics; ?>/b1-green.svg" alt="">
            <span>Осталось <b>6 мест</b> на новый поток</span>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //orkt1 -->



  <section class="clob2 orkt2">
    <div class="clob2__bg">
      <div class="clocontainer flexi">
        <div class="clob2__left">
          <h2 class="h2">
            Что такое<br>
            ОРКТ-подход<br>
            и почему его<br>
            стоит освоить
          </h2>
          <div class="clob2__vidowrap">
            <img src="<?=$pics; ?>/b2-pic.jpg" alt="" class="clob2__photo">
            <!-- <video class="clob2__video" preload="auto" playsinline="" autoplay="" loop="" muted="">
            <source src="<?=$pics; ?>/b2-pic.jpg" type="video/mp4">
          </video> -->
          </div>
        </div>
        <div class="clob2__right">
          <p class="clob2__line1">
            Ориентированная на решение краткосрочная терапия (ОРКТ) —
          </p>
          <div class="clob2__line2">
            <p>Подход в психологии, фокусирующийся на настоящем и будущем, а не на прошлом. Метод помогает определить цели и искать решения, основываясь на сильных сторонах и ресурсах клиента.</p>
            <p>Терапевт задает клиенту вопросы, которые помогают ему разобраться в том, как он хотел бы, чтобы его жизнь выглядела, и выявляет уже существующие ресурсы и стратегии, которые клиент может использовать для достижения этих целей.</p>
          </div>
          <div class="clob2__bot">
            <div class="orkt2feats">
              <div class="orkt2feat">
                <i><img src="<?=$pics; ?>/b2-icon-1-eye.svg" alt=""></i>
                <span>Фокус на настоящем и будущем, а не на прошлом</span>
              </div>
              <div class="orkt2feat">
                <i><img src="<?=$pics; ?>/b2-icon-2-tune.svg" alt=""></i>
                <span>Быстрый результат: 10-15 сессий</span>
              </div>
              <div class="orkt2feat">
                <i><img src="<?=$pics; ?>/b2-icon-3-megafon.svg" alt=""></i>
                <span>Достижение конкретных, видимых результатов</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //clob2 -->



  <section class="clocourseslider orktcourseslider js-closlider1">
    <div class="clocontainer">
      <div class="orktcourseslider__hdr">
        <h2 class="h2">ЧЕМУ ВЫ НАУЧИТЕСЬ ЗА&nbsp;12&nbsp;НЕДЕЛЬ</h2>
      </div>
      <div class="clocourseslider__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">01</div>
            <div class="clo3slide__title">Повысите эффективность работы с клиентами</div>
            <div class="clo3slide__descr">
              Освоите эффективный подход, которым сможете разнообразить терапевтический инструментарий.
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/001.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide1 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">02</div>
            <div class="clo3slide__title">Построите позитивную рабочую атмосферу</div>
            <div class="clo3slide__descr">
              Научитесь выявлять предыдущие успехи клиента и активировать его сильные стороны
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/002.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide2 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">03</div>
            <div class="clo3slide__title">Поможете клиенту достичь быстрых результатов </div>
            <div class="clo3slide__descr">
              Разовьете навыки для работы с клиентами, помогая им найти решения в короткие сроки
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/003.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide3 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">04</div>
            <div class="clo3slide__title">ОРКТ дает психологу гибкость</div>
            <div class="clo3slide__descr">
              Применяйте подход к работе с детьми индивидуальной, парной и семейной терапии
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/004.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide4 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">05</div>
            <div class="clo3slide__title">Клиент станет активным участником процесса</div>
            <div class="clo3slide__descr">
              Научитесь задавать эффективные вопросы, активно слушать клиента и сотрудничать с ним
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/005.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide5 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">06</div>
            <div class="clo3slide__title">Пройдете практику</div>
            <div class="clo3slide__descr">
              И получите полезную обратную связь на супервизиях
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/006.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide6 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">07</div>
            <div class="clo3slide__title">Научитесь определять желаемый клиентом результат терапии</div>
            <div class="clo3slide__descr">
              И....
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/007.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide7 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">08</div>
            <div class="clo3slide__title">Заведете полезные связи</div>
            <div class="clo3slide__descr">
              Получите возможность стать членом “Ассоциации ориентированных на решение психотерапевтов и практиков”
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?=$pics; ?>/b3-slider/008.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide8 -->
        </div>
      </div><!-- //clocourseslider__swiper -->
      <div class="closlictrl flexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?=$clopics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag">1 / 7</div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?=$clopics; ?>/b3-arrow.svg" alt=""></button>
      </div>
    </div>
  </section><!-- //clocourseslider -->



  <section class="cloform orktform1">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="orktform1__hdr">
          <h2 class="h2">
            <mark>ДОБАВЬТЕ ОРКТ В&nbsp;СВОЮ ПРАКТИКУ</mark><br>
            И&nbsp;ПРИВОДИТЕ КЛИЕНТОВ К<br>
            РЕЗУЛЬТАТУ ЗА&nbsp;10&nbsp;СЕССИЙ
          </h2>
          <div class="orktform1__time">Осталось: <b>6 мест</b></div>
        </div>
        <div class="cloform__line"></div>

        <form action="#" class="cloformbox js-ajaxform" method="post">
          <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div>
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="name" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <div class="promoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?=$clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="promocode" placeholder="Введите промокод" class="">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn js-promo-submit" type="button">
                <span>Активировать</span>
                <img src="<?=$clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?=$clopics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </form>

      </div>
    </div>
  </section><!-- //orktform1 -->


  <section class="orkt5for">
    <img src="<?=$pics; ?>/b5-linebg.svg" alt="" class="orkt5for__linebg">
    <div class="clocontainer">
      <h2 class="h2">Кому подойдёт курс</h2>
      <div class="orkt5for__grid">
        <article class="orkt5for__item">
          <div class="orkt5for__picwrap">
            <img src="<?=$pics; ?>/b5-1.jpg" alt="">
          </div>
          <div class="orkt5for__title">Вы – начинающий психолог</div>
          <div class="orkt5for__descr">Получите квалификацию ОРКТ-психолога и начните свою практическую деятельность</div>
        </article>
        <article class="orkt5for__item">
          <div class="orkt5for__picwrap">
            <img src="<?=$pics; ?>/b5-2.jpg" alt="">
          </div>
          <div class="orkt5for__title">Вы – коуч</div>
          <div class="orkt5for__descr">Расширьте свой спектр запросов благодаря новому подходу к коуч-сессиям</div>
        </article>
        <article class="orkt5for__item">
          <div class="orkt5for__picwrap">
            <img src="<?=$pics; ?>/b5-3.jpg" alt="">
          </div>
          <div class="orkt5for__title">Вы – студент психологических программ</div>
          <div class="orkt5for__descr">Научитесь применять свои знания по ОРКТ на практике
            и поработайте с первыми клиентами</div>
        </article>
        <article class="orkt5for__item">
          <div class="orkt5for__picwrap">
            <img src="<?=$pics; ?>/b5-4.jpg" alt="">
          </div>
          <div class="orkt5for__title">Вы – практикующий психолог</div>
          <div class="orkt5for__descr">Добавьте ОРКТ-подход
            в свою практику и приводите своих клиентов к результату за короткий срок (от 10 до 20 сессий)</div>
        </article>
      </div>
    </div>
  </section><!-- //orkt5for -->



  <section class="orkt6how">
    <div class="clob2__bg">
      <div class="clocontainer orkt6how__cont">
        <h2 class="h2">Как ОРКТ работает на&nbsp;клиенте </h2>
        <div class="orkt6how__grid">
          <div class="orkt6how__item">
            <i class="orkt6how__num">01</i>
            <div class="orkt6how__text">На сессиях психолог помогает клиенту развивать уже работающие для него стратегии и оценивать свой успех</div>
          </div>
          <div class="orkt6how__item">
            <i class="orkt6how__num">02</i>
            <div class="orkt6how__text">Для этого психолог и клиент заключают терапевтический альянс (доверительные и открытые взаимоотношения) для достижения общей цели</div>
          </div>
          <div class="orkt6how__item">
            <i class="orkt6how__num">03</i>
            <div class="orkt6how__text">Установка в том, что клиент —
              уже эксперт по своей жизни и знает, каких результатов хочет добиться,
              а психолог направляет его и помогает найти рабочие стратегии</div>
          </div>
        </div>
        <div class="orkt6how__bot">
          <div class="orkt6greencard">
            <img src="<?=$pics; ?>/b6-star-white.svg" alt="" class="orkt6greencard__star">
            <div class="orkt6greencard__title">Цель ОРКТ </div>
            <p>Повысить качество своей жизни после быстрого и эффективного решения конкретной проблемы.</p>
          </div>
          <div class="orkt6photobotwrap">
            <img class="orkt6photobotwrap__photo" alt="" src="<?=$pics; ?>/b6-photo.jpg">
          </div>
        </div>
      </div>
    </div>
  </section><!-- //orkt6how -->



  <section class="orkt7stat">
    <div class="clocontainer orkt7stat__cont">
      <div class="orkt7stat__left">
        <h2 class="h2">
          Поговорим <br>о&nbsp;статистике <br><mark>эффективности подхода</mark>
        </h2>
        <img src="<?=$pics; ?>/b7-left.jpg" alt="" class="orkt7stat__leftpic">
      </div>
      <div class="orkt7stat__right">
        <dl class="orkt7stat__item is-gray">
          <dt class="jbm">74%</dt>
          <dd>
            из 43 исследований в 2013 году показали, что клиенты, прошедшие ОРКТ, улучшили свою жизнь
          </dd>
        </dl>
        <dl class="orkt7stat__item">
          <dt class="jbm"><small>для</small>77%</dt>
          <dd>
            клиентов ОРКТ-терапия дает успешный результат в разрешении их запросов
          </dd>
        </dl>
      </div>
    </div>
  </section><!-- //orkt7stat -->


  <section class="orkt8situation">
    <div class="clocontainer">
      <div class="clob1__line"></div>
      <h2 class="h2">С какими жизненными ситуациями <br>и&nbsp;запросами <mark>работает ОРКТ</mark></h2>
      <div class="orkt8situation__grid">
        <div class="orkt8situation__picwrap">
          <img src="<?=$pics; ?>/b8-pic.jpg" alt="">
        </div>
        <dl class="orkt8situation__item is-gray">
          <dt class="jbm">01</dt>
          <dd>Проблемы самооценки, самозванца, самореализации</dd>
        </dl>
        <dl class="orkt8situation__item">
          <dt class="jbm">02</dt>
          <dd>Поддержка в проживании серьезных изменений в жизни</dd>
        </dl>
        <dl class="orkt8situation__item is-gray">
          <dt class="jbm">03</dt>
          <dd>Проработка и изменение поведения, внедрение новых привычек и навыков</dd>
        </dl>
        <dl class="orkt8situation__item">
          <dt class="jbm">04</dt>
          <dd>Cемейные конфликты, отношения
            в паре и детско-родительские отношения</dd>
        </dl>
        <dl class="orkt8situation__item is-gray">
          <dt class="jbm">05</dt>
          <dd>Депрессивные расстройства</dd>
        </dl>
        <dl class="orkt8situation__item">
          <dt class="jbm">06</dt>
          <dd>Расстройства пищевого поведения </dd>
        </dl>
      </div>
    </div>
  </section>



  <section class="cloform orktform2">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="orktform1__hdr">
          <h2 class="h2">
            <mark>ПОЛУЧИТЕ КВАЛИФИКАЦИЮ</mark>
            ОРКТ-ПСИХОЛОГА
            ЗА 12 НЕДЕЛЬ
          </h2>
          <div class="orktform1__time">Осталось: <b>6 мест</b></div>
        </div>
        <div class="cloform__line"></div>

        <form action="#" class="cloformbox js-ajaxform" method="post">
          <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div>
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="name" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </form>

      </div>
    </div>
  </section><!-- //orktform2 -->




  <section class="orkt10teach">
    <div class="clob2__bg">
      <div class="clocontainer orkt10teach__cont">
        <h2 class="h2">Познакомьтесь с <mark>преподавателями</mark></h2>
        <div class="orkt10teach__grid">
          <div class="orkt10prepod">
            <img src="<?=$pics; ?>/b10-ava1.jpg" alt="" class="orkt10prepod__ava">
            <div class="orkt10prepod__name jbm">Юрий <br>Гамзин</div>
            <div class="orkt10prepod__text">
              <ul>
                <li>Психолог-консультант;</li>
                <li>Супервизор, ОРКТ-практик;</li>
                <li>Председатель совета «Ассоциации ориентированных на решение практиков и психотерапевтов»</li>
              </ul>
            </div>
          </div>
          <div class="orkt10prepod is-accent">
            <img src="<?=$pics; ?>/b10-ava2.jpg" alt="" class="orkt10prepod__ava">
            <div class="orkt10prepod__name jbm">Вероника Мерещак</div>
            <div class="orkt10prepod__text">
              <ul>
                <li>Психолог-консультант;</li>
                <li>Супервизор, ОРКТ-практик;</li>
                <li>Действительный член ОППЛ, аккредитованный специалист в полимодальной психотерапии в СРО «Союз психотерапевтов и психологов»;</li>
                <li>Член «Ассоциации ориентированных на решении практиков и психотерапевтов»;</li>
                <li>Член и аккредитованный супервизор ассоциации супервизоров и консультантов.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //orkt10teach -->


  <section class="closummary orktsummary">
    <div class="clocontainer">
      <h2 class="h2">Программа обучения</h2>
      <div class="closummary__wrap">
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary1">
          <label class="closummary__hdr flexi" for="closummary1">
            <span class="clo3slide__num">01</span>
            <span class="closummary__title">Знакомство с подходом</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Знакомимся с подходом ОРКТ, разбираем сферы его применения и результаты, которые вы получите после прохождения курса.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary2">
          <label class="closummary__hdr flexi" for="closummary2">
            <span class="clo3slide__num">02</span>
            <span class="closummary__title">История ОРКТ и её развитие в русскоязычном пространстве</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Определяем роль подхода ОРКТ в семействе терапий. Разбираем модель краткосрочной терапии института MRI в Пало-Альто и другие направления развития подхода.</p>
                <p>Разбираем, как ОРКТ связана с другими подходами. Знакомимся с Ассоциацией ориентированных на решение психологов и психотерапевтов.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary3">
          <label class="closummary__hdr flexi" for="closummary3">
            <span class="clo3slide__num">03</span>
            <span class="closummary__title">Принципы и ключевые идеи ОРКТ</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Разбираем, на каких основах базируется подход ОРКТ, для каких клиентов он будет работать и в чём его основная ценность в отличие от других подходов.</p>
                <ul>
                  <li>Принцип сотрудничества</li>
                  <li>Принцип незнания</li>
                  <li>Не сломано, не чини</li>
                  <li>Следование за клиентом</li>
                  <li>Ориентированность на ресурсы</li>
                  <li>Ориентированность на решение / на будущее</li>
                  <li>Ценность маленьких шагов</li>
                </ul>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary4">
          <label class="closummary__hdr flexi" for="closummary4">
            <span class="clo3slide__num">04</span>
            <span class="closummary__title">Установление альянса и определение целей терапии</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Создаем терапевтический альянс и определяем главные мотивации клиента к изменениям. Учимся различать типы клиентов (визитер, жалобщик, покупатель) и особенности работы с ними.</p>
                <p>Разбираем, как определить досессионные изменения, правильно ставить цели на время ОРКТ-терапии и проверять их динамику.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary5">
          <label class="closummary__hdr flexi" for="closummary5">
            <span class="clo3slide__num">05</span>
            <span class="closummary__title">Установление альянса и определение целей терапии</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Учимся правильно заключать терапевтический альянс с клиентом, различать и работать с разными типами клиентов (визитер, жалобщик, покупатель). Определяем досессионные изменения, цели, лучшие надежды клиента и следим за динамикой целей в терапии. Изучаем, что такое исключения из проблемы и как их искать.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary6">
          <label class="closummary__hdr flexi" for="closummary6">
            <span class="clo3slide__num">06</span>
            <span class="closummary__title">Базовые навыки ОР-практика Ч.1 - Фокусирование на решении и обнаружение ресурсов</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Работаем с фокусированием на решении и обнаружении ресурсов, на ресурсах и позитивных элементах, на исключениях и будущем, на решении и возможностях.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary7">
          <label class="closummary__hdr flexi" for="closummary7">
            <span class="clo3slide__num">07</span>
            <span class="closummary__title">Базовые навыки ОР-практика Ч.2 - Следование за клиентом и поддержка изменений</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Учимся грамотно использовать язык клиента, молчание и комплименты.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary8">
          <label class="closummary__hdr flexi" for="closummary8">
            <span class="clo3slide__num">08</span>
            <span class="closummary__title">Вопросы и вопросные техники</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Изучаем особенности вопросных техник в ОР-подходе. Что такое чудесный вопрос? Каковы условия его эффективности и ошибки в использовании? Какие вопросы могут возникнуть при вопросах клиента?</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary9">
          <label class="closummary__hdr flexi" for="closummary9">
            <span class="clo3slide__num">09</span>
            <span class="closummary__title">Обратная связь и домашние задания</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Практикуемся в полученных знаниях и получаем обратную связь от кураторов. Учимся формулировать задания, обратную связь и ставить эксперименты в работе с клиентами в ОР-подходе.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary10">
          <label class="closummary__hdr flexi" for="closummary10">
            <span class="clo3slide__num">10</span>
            <span class="closummary__title">Структура и задачи первой консультации</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Заполняем протокол первой сессии.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary11">
          <label class="closummary__hdr flexi" for="closummary11">
            <span class="clo3slide__num">11</span>
            <span class="closummary__title">Структура и задачи последующих консультаций</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Учимся составлять цели, задачи и вопросы на последующие сессии. Выбираем стратегии работы в зависимости от прогресса клиента или его отсутствия.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary12">
          <label class="closummary__hdr flexi" for="closummary12">
            <span class="clo3slide__num">12</span>
            <span class="closummary__title">Кризисное консультирование в ОРКТ</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Разбираем особенности работы с клиентами в ситуации кризиса. Исследуем копинговые стратегии, ресурсы и комплименты.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="closummary13">
          <label class="closummary__hdr flexi" for="closummary13">
            <span class="clo3slide__num">13</span>
            <span class="closummary__title">Самооценка эффективности и завершение работы с клиентом</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Практикуем способы оценки эффективности через обратную связь и определяем основания для завершения работы с клиентом.</p>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section><!-- //closummary -->




  <section class="cloform orktform3">
    <div class="clocontainer">
      <img src="<?=$clopics; ?>/b6-star.svg" alt="" class="orktform1__star">
      <div class="cloform__bg">
        <div class="orktform1__hdr">
          <h2 class="h2">
            <mark>ВОЗНИКЛИ ВОПРОСЫ?</mark>
          </h2>
          <div class="orktform1__time">Осталось: <b>6 мест</b></div>
        </div>
        <div class="cloform__line"></div>
        <form action="#" class="cloformbox js-ajaxform" method="post">
          <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b></div>
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="name" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Получить консультацию</button>
            </div>
          </div>
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </form>

      </div>
    </div>
  </section><!-- //orktform3 -->




  <section class="clob10 orkt13format">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">формат обучения</h2>
        <div class="clob10__wrap flexi">
          <dl class="clob10dl clob10dl--green">
            <dt>12</dt>
            <dd>Практических <br>онлайн-занятий</dd>
          </dl>
          <dl class="clob10dl">
            <dt>14</dt>
            <dd>Видеолекций + <br>семинары с разбором</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>
              <img src="<?=$pics; ?>/b13-infinity.svg" alt="" class="clob10dl__svg">
            </dt>
            <dd>Неограниченный доступ <br>к курсу</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>12/7</dt>
            <dd>Поддержка студентов <br>и ответы на вопросы</dd>
          </dl>
          <dl class="clob10dl">
            <dt>72</dt>
            <dd>Академических <br>часа</dd>
          </dl>
          <dl class="clob10dl clob10dl__withbg">
            <img src="<?=$clopics; ?>/b10-pic.jpg" alt="" class="clob10dl__bg">
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
            <img src="<?=$pics; ?>/b13-collage.png" alt="" class="clob10__rightpic">
          </aside>
        </div>
      </div>
    </div>
  </section><!-- //clob10 -->




  <section class="orkt14teams">
    <div class="clocontainer">
      <h2 class="h2">ВАС ЖДУТ <mark>ЗАНЯТИЯ В&nbsp;МИНИГРУППАХ</mark> <br>ДО 20 ЧЕЛОВЕК</h2>
      <div class="orkt14teams__wrap">
        <img src="<?=$pics; ?>/b14-pic.jpg" alt="" class="orkt14teams__pic">
        <div class="orkt14teams__content">
          <div class="orkt14teams__line">Студенты <b>мотивируют и помогают</b> друг другу</div>
          <div class="orkt14teams__line">Вы будете <b>расти в среде единомышленников</b> и обмениваться знаниями</div>
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
          <h2 class="h2">Освойте ОРКТ подход и <mark>достигайте <br>быстрых результатов</mark> с клиентами</h2>
          <div class="cloform4__sales">
            <div class="cloform4__circle flexi jbm">
              <span>-</span>34<small>%</small>
            </div>
            <div class="cloform4__line">Скидка <?=$saleDate; ?></div>
            <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
          </div>
        </div>
        <div class="cloform__line"></div>

        <form action="#" class="cloformbox js-ajaxform" method="post">
          <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="name" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <div class="promoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?=$clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="promocode" placeholder="Введите промокод" class="">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn js-promo-submit" type="button">
                <span>Активировать</span>
                <img src="<?=$clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?=$clopics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->

          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </form>
      </div>
    </div>
  </section><!-- //cloform4 -->





  <section class="cloreviews js-clo-reviews">
    <div class="clocontainer">
      <h2 class="h2">ВОТ ЧТО <span style="color:#0C9F6A">ГОВОРЯТ СТУДЕНТЫ</span> <br>ОНЛАЙН УНИВЕРСИТЕТА TALENTSY</h2>

      <div class="cloreviews__wrap">
        <div class="getreview-widget" data-widget-id="78K6YVYSqo4uZ4ew"></div>
      </div>
    </div>
  </section><!-- //cloreviews -->




  <section class="orkt17about">
    <div class="clob2__bg">
      <div class="clocontainer">
        <div class="orkt17about__wrap">
          <div class="orkt17about__left">
            <h2 class="h2">ПОЧЕМУ <mark>СТОИТ <br>ОБУЧАТЬСЯ</mark> <br>В TALENTSY</h2>
            <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" class="orkt17about__licence" target="_blank"><span>Посмотреть лицензию</span></a>
          </div>
          <div class="orkt17about__right">
            <div class="orkt17aboutbox">
              <img src="<?=$pics; ?>/b17-lic.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">У нас есть лицензия </div>
              <div class="orkt17aboutbox__descr">От Департамента образования и науки города Москвы</div>
            </div>
            <div class="orkt17aboutbox is-green">
              <img src="<?=$pics; ?>/b17-sk.png" alt="" class="orkt17aboutbox__img">
              <div class="orkt17aboutbox__titl">Участники <br>Skolkovo</div>
            </div>
          </div>
        </div>
        <div class="cloform__line"></div>
        <div class="orkt17sertblock">
          <img src="<?=$pics; ?>/b17-sert.png" alt="" class="orkt17sertblock__pic">
          <div class="orkt17sertblock__right">
            <h3 class="h3">
              По итогам курса<br>
              вы получите Удостоверение<br>
              о <mark>повышении профессиональной<br>
                квалификации</mark> психолога
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
              <div class="cloform5__char2">1375</div>
              <div class="cloform5__char3">₽/мес</div>
            </div>
            <div class="cloform5__old jbm">2083 ₽/мес</div>
          </div>
          <div class="cloform5__underprice">
            <div class="cloform4__sales">
              <div class="cloform4__circle flexi">
                <span>-</span>34<small>%</small>
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

        <form action="#" class="cloformbox js-ajaxform" method="post">
          <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
          <div class="cloformbox__grid">
            <div class="cloformbox__inpwrap">
              <input type="text" name="name" placeholder="Имя" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="cloformbox__inpwrap">
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="cloformbox__subwrap">
              <button type="submit" class="clobtn">Забронировать место</button>
            </div>
          </div>
          <div class="promoform">
            <div class="promoform__openbutton promoform__btn">
              <span>У меня есть промокод</span>
              <img src="<?=$clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="promocode" placeholder="Введите промокод" class="">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn js-promo-submit" type="button">
                <span>Активировать</span>
                <img src="<?=$clopics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?=$clopics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
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
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq1">
          <label class="closummary__hdr flexi" for="clofaq1">
            <span class="closummary__title">Получится ли совмещать учебу и работу?</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Мы организовали обучение таким образом, чтобы вам было максимально удобно и просто. Если вы не сможете присутствовать на живых онлайн-занятиях, все обучающие видеоматериалы останутся доступными даже после завершения курса, что позволит вам вернуться к ним и закрепить полученные знания, когда вы этого захотите.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq2">
          <label class="closummary__hdr flexi" for="clofaq2">
            <span class="closummary__title">Смогу ли я получить все нужные знания онлайн?</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Да, сможете – на курсе вы будете максимально вовлечены в учебный процесс через вебинары, домашние задания и работу с кураторами.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq3">
          <label class="closummary__hdr flexi" for="clofaq3">
            <span class="closummary__title">Какое программное обеспечение мне понадобится для обучения? </span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <ul>
                  <li>Zoom – приложение для вебинаров и групповых мастермайндов;</li>
                  <li>Telegram – мессенджер для общения куратора и студентов.</li>
                </ul>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq4">
          <label class="closummary__hdr flexi" for="clofaq4">
            <span class="closummary__title">Смогу ли я подключаться с планшета или телефона? </span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Да. Для этого на нем должны быть установлены Zoom и Telegram.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq5">
          <label class="closummary__hdr flexi" for="clofaq5">
            <span class="closummary__title">Кому я смогу задавать вопросы в процессе обучения? </span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                За каждой группой наших студентов закреплен куратор, который сможет оперативно ответить на все вопросы. На все вопросы по содержанию лекций будет отвечать преподаватель.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq6">
          <label class="closummary__hdr flexi" for="clofaq6">
            <span class="closummary__title">Есть ли у вас рассрочка?</span>
            <span class="closummary__plus"></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Да, у нас действует программа рассрочки с несколькими банками: Тинькофф, СберБанк, Почта Банк, АльфаБанк.
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

</div>
<?php
get_footer();
