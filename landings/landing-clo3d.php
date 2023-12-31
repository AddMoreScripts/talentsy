<?php
/*
Template name: Шаблон: Лендинг - CLO3D
*/
get_header();
$pics = imgs() . '/clo3d';
$saleDate = 'до ' . getTomorow();
?>

<div class="pagewrap">
  <section class="clob1">
    <div class="clocontainer">
      <h1 class="clob1__title jbm">
        Научим создавать реальную
        <br>и&nbsp;виртуальную одежду в<span style="color:#368048">&nbsp;CLO3D</span>
        <br>за&nbsp;25&nbsp;уроков
      </h1>
      <div class="clob1__line"></div>
      <div class="clob1__main cloflexi">
        <aside class="clob1__side">
          <img src="<?= $pics; ?>/b1-lead.png" alt="" class="clob1__lead">
          <img src="<?= $pics; ?>/b1-star.svg" alt="" class="clob1__star">
        </aside>
        <div class="clob1__left">
          <ul class="clob1__dl">
            <li>Научитесь визуализировать <small>сложные образы, включая обувь и аксессуары</small></li>
            <li>Создадите свой первый прототип одежды <small>уже через 2 недели</small></li>
            <li>Исключите ошибки лекал <small>еще до раскроя, примеряя их на 3D-аватар</small></li>
          </ul>
          <div class="clob1__line clob1__line--mob"></div>
          <div class="clob1__action cloflexi">
            <a href="#orderform" class="clob1__button clobtn" data-scrollto>Записаться на курс</a>
            <div class="clob1__saleblock cloflexi">
              <div class="clob1__saleproc cloform4__circle jbm">
                <span>-</span>47<small>%</small>
              </div>
              <div class="clob1__saleright">
                <strong>Скидка <?=$saleDate; ?></strong>
                <span>Осталось <mark>6 мест</mark> на новый поток</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //clob1 -->

  <section class="clob2">
    <div class="clob2__bg">
      <div class="clocontainer cloflexi">
        <div class="clob2__left">
          <h2 class="h2">о профессии</h2>
          <div class="clob2__vidowrap">
            <video class="clob2__video" preload="auto" playsinline="" autoplay="" loop="" muted="">
              <source src="<?= $pics; ?>/b2-video2.mp4" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="clob2__right">
          <p class="clob2__line1">
            Clo 3D станет любимой программой в вашем творческом арсенале для создания одежды.
          </p>
          <p class="clob2__line2">
            <b>Визуализируйте каждый свой шедевр</b> на 3D-аватарах чтобы узнать, как он сидит на фигуре ещё до раскройки
          </p>
          <div class="clob2__bot">
            <h3 class="h3">Clo 3D открывает широкие возможности для заработка</h3>
            <div class="clob2__line3">Выходите на новые развивающиеся рынки</div>
            <div class="clob2__grid">
              <div class="clob2feat">
                <div class="clob2feat__picwrap">
                  <img src="<?= $pics; ?>/b2-pic1.png" alt="">
                </div>
                <div class="clob2txt">Создавайте диджитал-луки для фэшн-инфлюенсеров и блогеров</div>
              </div>
              <div class="clob2feat">
                <div class="clob2feat__picwrap">
                  <img src="<?= $pics; ?>/b2-pic2.png" alt="">
                </div>
                <div class="clob2txt">Продавате цифровую одежду в соцсетях и на специальных платформах</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //clob2 -->

  <section class="clocourseslider js-closlider1">
    <div class="clocontainer">
      <div class="clocourseslider__hdr cloflexi">
        <h2 class="h2">Чему научитесь на курсе</h2>
      </div>
      <div class="clocourseslider__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">01</div>
            <div class="clo3slide__title">Сможете проектировать <br>одежду</div>
            <div class="clo3slide__descr">
              Освоите программу Clo3D с нуля и научитесь визуализировать реальную и виртуальную одежду
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide1.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide1 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">02</div>
            <div class="clo3slide__title">Научитесь примерять свои <br>модели на 3D-аватар</div>
            <div class="clo3slide__descr">
              Сможете корректировать посадку изделия по фигуре до того, как она будет сшита.
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide2.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide2 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">03</div>
            <div class="clo3slide__title">Научитесь создавать <br>реалистичные 3D-образы</div>
            <div class="clo3slide__descr">
              Работать с принтом и мехом, делать корсеты и стеганные изделия
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide3.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide3 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">04</div>
            <div class="clo3slide__title">Научитесь работать <br>с разными материалами</div>
            <div class="clo3slide__descr">
              Настраивать цвета, фактуру ткани, текстуры кожи. Увидите как они ведут себя в статике и в движении
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide4.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide4 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">05</div>
            <div class="clo3slide__title">Научитесь <br>визуализировать</div>
            <div class="clo3slide__descr">
              Разные детали одежды - оборки, складки, молнии, пуговицы
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide5.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide5 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">06</div>
            <div class="clo3slide__title">Научитесь проверять <br>и корректировать ваши <br>лекала </div>
            <div class="clo3slide__descr">
              с помощью инструментов программы
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide6.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide6 -->
          <div class="swiper-slide clo3slide">
            <div class="clo3slide__num">07</div>
            <div class="clo3slide__title">Научитесь настраивать <br>свет, тени и фон</div>
            <div class="clo3slide__descr">
              Сможете создавать эффектные образы
            </div>
            <div class="clo3slide__picwrap">
              <img src="<?= $pics; ?>/b3-slide7.jpg" alt="" class="clo3slide__pic">
            </div>
          </div><!-- //slide7 -->
        </div>
      </div><!-- //clocourseslider__swiper -->
      <div class="closlictrl cloflexi">
        <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $pics; ?>/b3-arrow.svg" alt=""></button>
        <div class="closlictrl__pag">1 / 7</div>
        <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $pics; ?>/b3-arrow.svg" alt=""></button>
      </div>
    </div>
  </section><!-- //clocourseslider -->

  <section class="cloform cloform1">
    <div class="clocontainer">
      <div class="cloform__bg">
        <div class="cloform1__top cloflexi">
          <div class="cloform1__left">
            <h2 class="h2">Получите в&nbsp;<span style="color:#368048">подарок</span> <br>видеоролик</h2>
            <div class="cloform1__sub">И взгляните как создаются 3D-модели</div>
          </div>
          <div class="cloform1__right">
            <div class="cloform1__picwrap">
              <video class="cloform1__video" preload="auto" playsinline="" autoplay="" loop="" muted="">
                <source src="<?= $pics; ?>/b4-video.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__title">Заполните форму, и <b>получите запись</b></div>
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
              <button type="submit" class="clobtn">Получить запись</button>
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
          <input type="hidden" name="isHtmlWidget" value="1"/>
        </form>
      </div>
    </div>
  </section><!-- //cloform1 -->

  <section class="clob5">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">Для кого этот курс</h2>
        <div class="clob5__wrap">
          <div class="clob5box clob5box--green">
            <div class="clob5box__picwrap">
              <img src="<?= $pics; ?>/b5-icon1.svg" alt="">
            </div>
            <div class="clob5box__title">Конструкторам одежды</div>
            <div class="clob5box__descr">
              выявляйте и исключайте ошибки до раскроя. Достаточно примерить ваши лекала на аватар и в пару кликов
              скорректировать их. Удвойте свою производительность.
            </div>
          </div>
          <div class="clob5box">
            <div class="clob5box__picwrap">
              <img src="<?= $pics; ?>/b5-icon2.svg" alt="">
            </div>
            <div class="clob5box__title">Fashion-дизайнерам</div>
            <div class="clob5box__descr">
              раскройте своё модное воображение с Clo 3D! Визуализируйте одежду, обувь и аксессуары как никогда
              раньше. Создавайте и анимируйте виртуальные модели, которые идеально «сядут» на человеке.
            </div>
          </div>
          <div class="clob5box">
            <div class="clob5box__picwrap">
              <img src="<?= $pics; ?>/b5-icon3.svg" alt="">
            </div>
            <div class="clob5box__title">3D-Визуализаторам</div>
            <div class="clob5box__descr">
              создавайте сложные образы, включая обувь, аксессуары, оборки, складки, молнии, пуговицы, в том числе с
              учётом движения и разных углов падения света
            </div>
          </div>
          <div class="clob5box clob5box--border">
            <div class="clob5box__picwrap">
              <img src="<?= $pics; ?>/b5-icon4.svg" alt="">
            </div>
            <div class="clob5box__title">А также новичкам</div>
            <div class="clob5box__descr">
              которые хотят освоить стремительно развивающуюся и востребованную профессию
            </div>
          </div>
        </div>

        <h2 class="h2 clob5__both2">и не важно</h2>
        <div class="clob5__botgrid">
          <div class="clob5botitem">
            <div class="clob5botitem__picwrap"><img src="<?= $pics; ?>/b5-bot1.png" alt=""></div>
            <div class="clob5botitem__title">Какой у вас опыт и какими навыками владеете</div>
            <div class="clob5botitem__descr">Даже полный новичок справится</div>
          </div>
          <div class="clob5botitem">
            <div class="clob5botitem__picwrap"><img src="<?= $pics; ?>/b5-bot2.png" alt=""></div>
            <div class="clob5botitem__title">Есть ли у вас талант или врожденное чувство стиля</div>
            <div class="clob5botitem__descr">Это все мифы и установки</div>
          </div>
          <div class="clob5botitem">
            <div class="clob5botitem__picwrap"><img src="<?= $pics; ?>/b5-bot3.png" alt=""></div>
            <div class="clob5botitem__title">Кем вы работаете сейчас и работаете ли вообще</div>
            <div class="clob5botitem__descr">Это вообще все не важно </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //clob5 -->

  <section class="cloform cloform2">
    <div class="clocontainer">
      <div class="cloform__bg">
        <h2 class="cloform2__h2 h2">ОСВОЙТЕ <span style="color:#368048;">СОВРЕМЕННУЮ ПРОФЕССИЮ</span> <br>И получайте
          коммерческие заказы</h2>
        <div class="cloform__line"></div>

        <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
          <div class="cloformbox__title">Заполните форму, чтобы <b>получить консультацию специалиста</b></div>
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
              <button type="submit" class="clobtn">Получить консультацию</button>
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
          <input type="hidden" name="isHtmlWidget" value="1"/>
        </form>
      </div>
    </div>
  </section><!-- //cloform2 -->

  <section class="clob7 js-closlider2">
    <div class="clocontainer">
      <h2 class="h2">Сомневаетесь что справитесь?</h2>
      <div class="clob7__sub">Посмотрите <b>работы наших выпускников</b> с первого потока</div>
      <div class="clob7__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/001.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/001.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/002.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/002.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/003.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/003.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/004.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/004.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/005.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/005.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/006.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/006.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/007.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/007.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?= $pics; ?>/student-works/008.png" class="clob7__picwrap square" data-fancybox="student-work">
              <img src="<?= $pics; ?>/student-works/008.png" alt="" class="square__img" loading="lazy">
              <div class="swiper-lazy-preloader"></div>
            </a>
          </div>
        </div>
      </div>
      <div class="clob7__footer">
        <div class="closlictrl cloflexi">
          <button class="closlictrlbutt closlictrlbutt--prev"><img src="<?= $pics; ?>/b3-arrow.svg" alt=""></button>
          <div class="closlictrl__pag"></div>
          <button class="closlictrlbutt closlictrlbutt--next"><img src="<?= $pics; ?>/b3-arrow.svg" alt=""></button>
        </div>
        <div class="clob7__bottxt">
          Наши выпускники <b>тоже сомневались в себе</b>, но всё же <b>рискнули</b> и раскрыли в себе потрясающую
          фантазию и навыки
        </div>
      </div>

    </div>
  </section><!-- //clob6 -->

  <div class="mobpresummary">
    <div class="clocontainer">
      <div class="clob1__line clob1__summline clob1__line--mob"></div>
    </div>
  </div>

  <section class="closummary">
    <div class="clocontainer">
      <div class="clob1__line"></div>
      <h2 class="h2">Содержание курса</h2>
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
  </section><!-- //closummary -->

  <section class="cloform cloform3">
    <div class="clocontainer">
      <div class="cloform__bg">
        <h2 class="cloform2__h2 h2">ПОЛУЧИТЬ <span style="color:#368048">ПОЛНУЮ <br>ПРОГРАММУ КУРСА</span></h2>
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
          <input type="hidden" name="isHtmlWidget" value="1"/>
        </form>
      </div>
    </div>
  </section><!-- //cloform3 -->

  <section class="clob10">
    <div class="cloblack">
      <div class="clocontainer">
        <h2 class="h2">формат обучения</h2>
        <div class="clob10__wrap cloflexi">
          <dl class="clob10dl clob10dl--green">
            <dt>25</dt>
            <dd>Подробных <br>видеолекций</dd>
          </dl>
          <dl class="clob10dl">
            <dt>8</dt>
            <dd>Домашних заданий <br>с проверкой</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>
              <img src="<?= $pics; ?>/b10-infinity.svg" alt="" class="clob10dl__svg">
            </dt>
            <dd>Неограниченный доступ <br>к курсу</dd>
          </dl>
          <dl class="clob10dl clob10dl--bord">
            <dt>12/7</dt>
            <dd>Поддержка студентов <br>и ответы на вопросы</dd>
          </dl>
          <dl class="clob10dl">
            <dt>57</dt>
            <dd>Академических <br>часов</dd>
          </dl>
          <dl class="clob10dl clob10dl__withbg">
            <img src="<?= $pics; ?>/b10-pic.jpg" alt="" class="clob10dl__bg">
            <dt></dt>
            <dd>Онлайн формат</dd>
          </dl>
        </div>
        <div class="clob10__hr"></div>
        <div class="clob10__bot cloflexi">
          <div class="clob10__left">
            <h2 class="h2">А ещё вы получите доступ в <span style="color: #368048;">закрытый Telegram-чат</span></h2>
            <div class="clob10__bottxt">C полезным контентом для fashion-дизайнеров, <br>конструкторов и
              визуализаторов</div>
          </div>
          <aside class="clob10__right">
            <img src="<?= $pics; ?>/b11-collage.png" alt="" class="clob10__rightpic">
          </aside>
        </div>
      </div>
    </div>
  </section><!-- //clob10 -->

  <section class="clob12">
    <div class="clocontainer">
      <h2 class="clob12__h2 h2">Погрузитесь в мир,где <span style="color:#368048;">творчество</span> <br>не знает
        границ</h2>
      <div class="clob12__wrap cloflexi">
        <div class="clob12__left">
          <video class="clob12__pic" preload="auto" playsinline="" autoplay="" loop="" muted="">
            <source src="<?= $pics; ?>/b4-video.mp4" type="video/mp4">
          </video>
          <!-- <img src="<?= $pics; ?>/b12-video.jpg" alt="" class="clob12__pic"> -->
        </div>
        <div class="clob12__right">
          <p>Раскройте <b>в себе внутреннего виртуоза моды</b> и отправляйтесь в путешествие, где виртуальные модели
            оживают, позволяя вам анимировать и вдохнуть жизнь <b>в ваши творения</b></p>
          <img src="<?= $pics; ?>/b12-logo.svg" alt="" class="clob12__logo">
        </div>
      </div>
    </div>
  </section><!-- //clob12 -->

  <section class="cloform cloform4">
    <div class="clocontainer">
      <div class="cloform__bg">

        <div class="cloform4__hdr">
          <h2 class="h2">Научим создавать реальную <br>и виртуальную одежду <span style="color:#368048;">в
              CLO3D</span></h2>
          <div class="cloform4__sales">
            <div class="cloform4__circle jbm">
              <span>-</span>47<small>%</small>
            </div>
            <div class="cloform4__line">Скидка <?=$saleDate; ?></div>
            <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
          </div>
        </div>
        <div class="cloform__line"></div>

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
              <img src="<?= $pics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn jsPPRequest" type="button">
                <span>Активировать</span>
                <img src="<?= $pics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?= $pics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->

          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
          </p>

          <input type="hidden" name="jsPmoHiddenFormField">

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
  </section><!-- //cloform4 -->

  <section class="cloreviews js-clo-reviews">
    <div class="clocontainer">
      <h2 class="h2">ВОТ ЧТО <span style="color:#368048">ГОВОРЯТ СТУДЕНТЫ</span> <br>ОНЛАЙН УНИВЕРСИТЕТА TALENTSY</h2>

      <div class="cloreviews__wrap">
        <div class="getreview-widget" data-widget-id="78K6YVYSqo4uZ4ew"></div>
      </div>
    </div>
  </section><!-- //cloreviews -->

  <section class="cloreasons">
    <div class="clocontainer">
      <h2 class="h2">ПОЧЕМУ <span style="color:#368048;">СТОИТ <br>ОБУЧАТЬСЯ</span> В TALENTSY</h2>
      <div class="cloreasons__wrap cloflexi">
        <div class="cloreasons__col">
          <div class="cloreasons__picwrap">
            <img src="<?= $pics; ?>/b15-1.png" alt="">
          </div>
          <div class="cloreasons__title">У нас есть лицензия</div>
          <div class="cloreasons__descr">От Департамента образования <br>и науки города Москвы</div>
        </div>
        <div class="cloreasons__col">
          <div class="cloreasons__picwrap">
            <img src="<?= $pics; ?>/b15-2.png" alt="">
          </div>
          <div class="cloreasons__title">Сертификат</div>
          <div class="cloreasons__descr">По итогам курса вы получите <br>сертификат об успешном окончании</div>
        </div>
        <div class="cloreasons__col">
          <div class="cloreasons__picwrap">
            <img src="<?= $pics; ?>/b15-3.png" alt="">
          </div>
          <div class="cloreasons__title">Участник Skolkovo</div>
        </div>
      </div>
    </div>
  </section><!-- //cloreasons -->

  <section class="cloform cloform5">
    <div class="cloform__bg" id="orderform">
      <div class="clocontainer">
        <div class="cloform5__head">
          <h2 class="h2">стоимость обучения</h2>
          <div class="cloform__line cloform5__line"></div>
          <div class="cloform5__prices cloflexi">
            <div class="cloform5__current cloflexi jbm">
              <div class="cloform5__char1">От</div>
              <div class="cloform5__char2 jsPPSumm">1333</div>
              <div class="cloform5__char3">₽/мес</div>
            </div>
            <div class="cloform5__old jbm">2500 ₽/мес</div>
          </div>
          <div class="cloform5__underprice">
            <div class="cloform4__sales">
              <div class="cloform4__circle">
                <span>-</span>47<small>%</small>
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
              <img src="<?= $pics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
            </div>
            <div class="promoform__inpwrap">
              <div class="promoform__inpbox">
                <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                <button class="promoform__clearer" type="button"></button>
              </div>
              <button class="promoform__btn jsPPRequest" type="button">
                <span>Активировать</span>
                <img src="<?= $pics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
              </button>
            </div>
            <div class="promoform__success promoform__btn">
              <span>Промокод активирован</span>
              <img src="<?= $pics; ?>/promo-check.svg" alt="" class="promoform__arrow">
            </div>
          </div><!-- //promoform -->
          <p class="cloformbox__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
          </p>

          <input type="hidden" name="jsPmoHiddenFormField">

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

  <section class="clofaq">
    <div class="clocontainer">
      <h2 class="h2">Часто задаваемые <br>вопросы</h2>
      <div class="clofaq__wrap">
        <? foreach(get_field('faq_list') as $k => $faqData): ?>
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
</div><!-- //pagewrap -->

</div>
<?php
get_footer();
