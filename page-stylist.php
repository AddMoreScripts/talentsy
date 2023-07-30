<?php
/*
Template name: Шаблон: Профессия стилист
*/
get_header();
$pics = imgs() . '/stylist';
?>

<section class="hero hero-stylist">
  <div class="hero__h1 jbm js-slide-bot font66">
    За 6 месяцев <img src="<?= $pics; ?>/b1-sm.webp" alt=""> сделаем
    <br>из тебя <b>успешного стилиста-
      <br>имиджмейкера</b> и изменим твою жизнь
    <br>до неузнаваемости
  </div>
  <div class="hero__videowrap js-slide-bot">
    <div class="hero__videobox square">
      <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
        <source src="<?= $pics; ?>/b1-video.mp4">
      </video>
    </div>
    <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
      Стать <br>стилистом <br>имиджмейкером
    </a>
  </div>
</section>



<div class="disint2">
  <div class="container">
    <div class="title">и не важно:</div>
    <div class="disint2__grid grid3">
      <div class="grid-item disint2__item">
        <div class="disint2__picwrap">
          <img src="<?= $pics; ?>/b2-1.webp" alt="" class="js-slide-opac">
        </div>
        <div class="disint2__title">
          Какой у тебя опыт <br>
          и какими навыками <br>
          владеешь
        </div>
        <div class="disint2__sub">
          Даже полный новичок справится
        </div>
      </div><!-- //disint1__item -->
      <div class="grid-item disint2__item disint2__item--lined">
        <div class="disint2__picwrap">
          <img src="<?= $pics; ?>/b2-2.webp" alt="" class="js-slide-opac">
        </div>
        <div class="disint2__title">
          Eсть ли у тебя талант<br>
          или врожденное чувство стиля
        </div>
        <div class="disint2__sub">
          Это всё мифы и установки
        </div>
      </div><!-- //disint1__item -->
      <div class="grid-item disint2__item disint2__item--lined">
        <div class="disint2__picwrap">
          <img src="<?= $pics; ?>/b2-3.webp" alt="" class="js-slide-opac">
        </div>
        <div class="disint2__title">
          Кем ты работаешь<br>
          сейчас и работаешь<br>
          ли вообще
        </div>
        <div class="disint2__sub">
          Это вообще всё не важно
        </div>
      </div><!-- //disint1__item -->
    </div>
  </div>
</div><!-- //disint2 -->




<section class="iphone iphone--stylist">
  <div class="container">
    <h2 class="title js-slide-bot">
      Мы создали <i class="title-dot">i</i>Phone на рынке <br><b>подготовки стилистов-<br>имиджмейкеров </b>
    </h2>
    <div class="iphone__wrap iphone__onlyone flexi">
      <div class="iphone__grid">
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-1.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Диплом о проф. переподготовке</div>
          <p>Получите специализацию в сфере стиля и имиджа и диплом о профессиональной переподготовке</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-2.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Занятия в мини-группах</div>
          <p>Под руководством персонального наставника, который выстроит индивидуальную траекторию для каждого студента, ответит на вопросы и напомнит о занятиях</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__propicon iphone__propicon--text jbm flexi">30+</div>
          <div class="iphone__proptitle">Работ в портфолио</div>
          <p>По итогам обучения, которые вы профессионально оформите и сможете показывать потенциальным клиентам</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-4.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Лучшие преподаватели</div>
          <p>Мы собрали звезд индустрии, чтобы вы могли учиться у лучших: востребованных стилистов, экспертов в индустрии моды, победителей российских и международных конкурсов</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="programfromlead programfromlead--stylist">
  <div class="container">
    <h2 class="title">
      Получить полную<br> <b>программу курса</b>
    </h2>
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить программу']); ?>
  </div>
</section><!-- //programfromlead -->



<section class="dreams dreams--stylist minmargin">
  <div class="container">
    <h2 class="title">Мы знаем, о чем ты мечтаешь, <br><b>и поможем тебе этого добиться</b></h2>
    <div class="grid-mob-scroll">
      <div class="dreams__grid">
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-1.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Работать с частными клиентами в&nbsp;свободном графике
            <small class="dreamsltitle__min">и хорошо зарабатывать</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b5-2.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Научиться создавать гармоничные образы
          </div>
          <small class="dreamsltitle__min">из одежды и аксессуаров</small>
        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-3.webp" alt="" class="lazy">
          </div>
          <div class="dreamsltitle">
            Привести в порядок свой стиль и&nbsp;гардероб
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-4.svg" alt="" class="lazy js-slide-opac ">
          </div>
          <div class="dreamsltitle">
            Заниматься делом, которое приносит не&nbsp;только доход, но и удовольствие
            <small class="dreamsltitle__min">и раскрыть свой творческий потенциал</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-5.webp" alt="" class="lazy js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            Получить новую <br>высокооплачиваемую <br>профессию
          </div>
        </div>
        <div class="dreams__item dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b5-6.jpg" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Изменить качество <br>своей жизни
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //dreams -->




<section class="mentors mentors--stylist">
  <div class="container">
    <h2 class="title">Ты будешь учиться <span>у&nbsp;</span><b>8 лучших <br class="mobbr">специалистов</b> <span>со
        всей страны</span></h2>
    <div class="mentorsfeat">
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b6-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы потратили полгода и&nbsp;миллионы рублей</div>
        <div class="mentorsfeat__text">
          чтобы собрать их всех <br>в 1 курсе
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b6-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
        <div class="mentorsfeat__text">
          у которых календари расписаны <br>на полгода вперед
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b6-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
        <div class="mentorsfeat__text">
          чтобы ты мог учиться у лучших <br>из лучших
        </div>
      </div>
    </div>

    <?php get_template_part('inc/mentors-block'); ?>
  </div>
</section><!-- //mentors -->





<section class="features features--stylist">
  <div class="container">
    <h2 class="title">Тебя ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?= $pics; ?>/b7-video.mp4">
        </video>
      </div>
      <div class="features__right">
        <div class="features__subtitle">
          Подробная как<br>
          в университете,<br><br class="mobbr">
          но компактная<br>
          и не скучная
        </div>

        <div class="features__grid">
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b7-1.webp" alt="" class="lazy js-slide-opac">
            <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b7-2.webp" alt="" class="lazy js-slide-opac">
            <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b7-3.webp" alt="" class="lazy js-slide-opac radius0">
            <p>Современные <b>методики обучения</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b7-4.webp" alt="" class="lazy js-slide-opac">
            <p>Более <b>50 дополнительных материалов (примеры, шаблоны, схемы)</b></p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section><!-- //disint8 -->




<section class="guideform guideform--stylist">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot">
      <span>Получи <b>гайд</b></span>
      <span>по профессии</span>
      <span><b>стилист-имиджмейкер</b></span>
      <img src="<?= $pics; ?>/b8-catalog.webp" alt="" class="stylist-catalog">
    </h3>
    <?php get_template_part('inc/leadform', null, [
      'bg' => '#fff',
      'buttonTxt' => 'Получить гайд',
    ]); ?>
  </div>
</section><!-- //disint-guideform -->




<section class="features features--fashion2">
  <div class="container">
    <h2 class="title">Тебя ждут практические <br>занятия в&nbsp;<b>мини-группах</b></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?= imgs(); ?>/sexolog/b15-video.mp4">
        </video>
      </div>
      <div class="features__right">
        <div class="features__subtitle">
          Каждый студент получает внимание<br>
          и консультации наставников, помощь<br>
          кураторов и необходимую поддержку<br>
          от первых шагов до первых клиентов
        </div>
        <div class="features__grid">
          <div class="features__item">
            <img src="<?= $pics; ?>/b9-1.jpg" alt="" class="js-slide-opac">
            <p><b>Уникальный</b> формат <br>обучения</p>
          </div>
          <div class="features__item">
            <img src="<?= $pics; ?>/b9-2.jpg" alt="" class="js-slide-opac">
            <p>Участники группы <br><b>мотивируют и помогают</b><br> друг другу</p>
          </div>
          <div class="features__item">
            <img src="<?= $pics; ?>/b9-3.jpg" alt="" class="js-slide-opac">
            <p>Студенты растут <b>в среде <br>единомышленников</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="reviewsslider js-review-slider mb-0">
  <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
  <div class="reviewsslider__wrap">
    <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <div class="reviewsslider__cont js-slide-bot">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 12, 1) as $key => $videoNum) : ?>
            <div class="swiper-slide">
              <a href="<?= $pics; ?>/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
                <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="reviewsslider__screen square__img lazy">
                  <source data-src="<?= $pics; ?>/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
                </video>
                <span class="reviewsslider__button">Смотреть видео</span>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="timeslot timeslot--stylist">
  <div class="container">
    <h2 class="title">
      Научим <b> рекламировать свои
        <br>услуги</b> и <b>привлекать клиентов</b>
    </h2>
    <div class="timeslot__box">
      <img src="<?= $pics; ?>/timeslot-bg.svg" alt="" class="timeslot__bg">
      <div class="timeslot__over flexi">
        <div class="timeslot__text">
          <p>С вами работает специалист <br>по продвижению и&nbsp;привлечению <br>клиентов</p>
          <small>начиная с пятого месяца обучения</small>
        </div>
        <div class="timeslot__avawrap">
          <img src="<?= imgs(); ?>/psychology/b19-ava.png" alt="" class="timeslot__ava js-slide-opac">
        </div>
        <img src="<?= imgs(); ?>/psychology/b19-matrix.png" alt="" class="timeslot__matrix js-slide-opac">
      </div>
    </div>
    <!-- <div class="jbm timeslot__bot">с 3 месяца</div> -->
  </div>
</section><!-- //timeslot -->



<section class="features psy16 features-stylist2">
  <div class="container">
    <h2 class="title">Мы организовали <b>яркую <br>студенческую жизнь</b></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <img src="<?= $pics; ?>/collage.png" alt="" class="psy16__collage">
      </div>
      <div class="features__right">
        <div class="features__grid">
          <div class="features__item">
            <img src="<?= $pics; ?>/b12-1.webp" alt="" class="js-slide-opac">
            <div class="features__subtitle">Очная встреча</div>
            <p>в Москве включена в&nbsp;стоимость обучения</p>
          </div>
          <div class="features__item">
            <picture class="js-slide-opac iconmobauto">
              <img src="<?= $pics; ?>/b12-2.webp" alt="">
            </picture>
            <div class="features__subtitle">Нетворкинг</div>
            <p>Общаемся и делимся полезной информацией для учебы и работы</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //psy16 -->



<section class="diplomblock diplomblock--stylist">
  <div class="container">
    <h2 class="title">
      <b>Ты получишь диплом <br>установленного образца</b> <br>
      о профессиональной переподготовке
    </h2>
    <img src="<?= $pics; ?>/b13-diplom.webp" alt="" class="diplomblock__pic">
    <div class="diplomblock__footer flexi">
      <p>
        Сможете <b>подтвердить <br>
          свою квалификацию</b><br>
        перед заказчиками<br>
        и / или работодателями
      </p>
      <a href="#offer" class="circlebutton" data-scrollto="#offer">Задать вопрос <br>специалисту</a>
    </div>
  </div>
</section><!-- //diplomblock -->



<section class="stepform psy18">
  <div class="container">
    <h2 class="title">Получить консультацию <br>специалиста</h2>
    <div class="grid-mob-scroll">
      <div class="stepform__vector js-slide-bot">
        <p>Оставьте свой <br>номер телефона</p>
        <span class="stepform__arrow"></span>
        <p>Наш специалист <br>свяжется с вами</p>
        <span class="stepform__arrow"></span>
        <p>Даст подробную информацию <br>
          о&nbsp;начале учебы на&nbsp;курсе</p>
      </div>
    </div>
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить консультацию', 'bg' => "#fff"]); ?>
  </div>
</section><!-- //stepform -->



<section class="statistic container statistic--stylist">
  <h2 class="title">Поговорим о&nbsp;цифрах</h2>
  <div class="statistic__grid">
    <dl class="statistic__item statistic__item--verbg">
      <dt>8<img src="<?= imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
      <dd>Топ <br>преподавателей</dd>
    </dl>
    <dl class="statistic__item statistic__item--verborder">
      <dt class="js-slide-opac">6</dt>
      <dd>Месяцев обучения</dd>
    </dl>
    <dl class="statistic__item statistic__item--col2">
      <dt class="js-slide-opac">150+</dt>
      <dd>Видеоуроков в HD</dd>
    </dl>
    <dl class="statistic__item statistic__item--col2">
      <dt class="js-slide-opac">60+</dt>
      <dd>Часов практических занятий</dd>
    </dl>
    <dl class="statistic__item statistic__item--col2 statistic__item--verborder">
      <dt class="js-slide-opac">50+</dt>
      <dd>Документов, шаблонов и схем</dd>
    </dl>
    <dl class="statistic__item">
      <dt class="js-slide-opac">30</dt>
      <dd>Работ в портфолио по&nbsp;итогам обучения</dd>
    </dl>
    <dl class="statistic__item statistic__item--col2">
      <dt class="js-slide-opac">2</dt>
      <dd>Дня практических занятий в Москве</dd>
    </dl>
    <dl class="statistic__item  statistic__item--stylist">
      <dt class="js-slide-opac">12/7</dt>
      <dd>Поддержка студентов во время обучения</dd>
    </dl>
  </div>
</section>


<?php if(get_field('is-show_quiz')): ?>
<section class="quizlink quizlink--stylist">
  <div class="container">
    <h2 class="title">Подходит ли тебе профессия <br><b>стилист-имиджмейкер?</b></h2>
    <div class="quizlink__box flexi js-slide-opac">
      <dl>
        <dt>7 вопросов</dt>
        <dd>Пройдите <br>тест из семи <br>вопросов</dd>
      </dl>
      <dl>
        <dt>5000 ₽</dt>
        <dd>Получите скидку <br>на обучение <br>в 5000 руб.</dd>
      </dl>
      <div class="quizlink__action flexi">
        <a href="#" class="circlebutton">Пройти <br>тест</a>
      </div>
    </div>
  </div>
</section><!-- //quizlink -->
<?php endif; ?>


<section class="dreams dreams--abs dreams--stylist dreams--stylist2">
  <div class="container">
    <h2 class="title">
      <b>ты получишь все необходимое
        <br>для старта</b> и&nbsp;развития карьеры
      <br>в&nbsp;модной индустрии
    </h2>
    <div class="grid-mob-scroll">
      <div class="dreams__grid">
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-1.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <p>Методы цветового анализа и схемы цветовых сочетаний</p>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-2.webp" alt="" class="lazy js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            <p>Методику работы с&nbsp;частными клиентами и&nbsp;наглядные инструменты работы</p>
            <small class="dreamsltitle__min">анкета клиента, стильбук, коллажи</small>
          </div>

        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-3.webp" alt="" class="lazy">
          </div>
          <div class="dreamsltitle" style="color:#000; white-space: nowrap;">
            Техники визуальной коррекции фигуры
          </div>
        </div>
        <div class="dreams__item dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-4.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <p>Методику создания индивидуальных женских и&nbsp;мужских стилей</p>
          </div>
        </div>
        <div class="dreams__item dreams__item--nobg">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-5.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <p>Маршруты профессионального шоппинга для клиентов разных ценовых сегментов</p>
          </div>
        </div>
        <div class="dreams__item  dreams__item--border dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-6.webp" alt="" class="lazy js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            Коммерчески-направленный аккаунт в соц. сетях и&nbsp;правила создания продающего контента
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-7.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Методику создания<br>
            личного бренда стилиста
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-8.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Основы психологии и&nbsp;нюансы профессионального общения с&nbsp;клиентами
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //dreams -->




<section class="priceblock disint24 priceblock--stylist" id="offer">
  <div class="container">
    <h2 class="title">Стоимость обучения</h2>
    <div class="priceblock__row flexi">
      <div class="priceblock__price jbm"><span>6250</span><span>₽/МЕС</span></div>
    </div>

    <div class="stylistsubprice flexi">
      <div class="stylistsubprice__left jbm">
        <small>от</small>3750 ₽/мес
      </div>
      <div class="stylistsubprice__right">
        Беспроцентная рассрочка <br>на&nbsp;24 месяца
      </div>
    </div>
    <div class="stylistsubprice__bot">Скидка 40% &nbsp;<b>до <?=getTomorow(); ?></b></div>
    <?php get_template_part('inc/leadform', null, [
      'bg' => '#f7f1e2',
      'isPromoForm' => true,
      'showTopTxt' => true
    ]); ?>
  </div>
</section><!-- //priceblock -->



<section class="faqblock">
  <h2 class="title">Часто задаваемые вопросы</h2>
  <div class="faqblock__wrap container">
    <div class="progrmsummary__item" data-hidewrap="faq1">
      <div class="progrmsummary__head" data-hideopen="faq1">
        <strong>Чем ваш курс лучше других?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq1">
        <div class="progrmsummary__content">
          <p>Уникальный формат обучения в мини-группах. Сильнейший преподавательский состав. Опытный куратор, профессиональный стилист, который будет вам помогать. Современная, продуманная, сбалансированная программа, направленная на конечный результат: получение новой профессии. 30+ практических занятий онлайн и 2 дня практических занятий офлайн. Отдельный куратор специалист по продвижению, который доведет вас до первых клиентов.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq2">
      <div class="progrmsummary__head" data-hideopen="faq2">
        <strong>Где я смогу работать после курса?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq2">
        <div class="progrmsummary__content">
          <p>Работа с частными клиентами является основной после получения профессии. Вы также можете профессионально реализовать себя как стилист: </p>
          <ul>
            <li>в глянцевых журналах;</li>
            <li>на телевидении;</li>
            <li>в кинопроизводстве;</li>
            <li>в специализированных агентствах (имидж-студиях);</li>
            <li>в салонах красоты;</li>
            <li>в фото-студиях;</li>
            <li>в рекламных агентствах;</li>
            <li>в бутиках одежды.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq3">
      <div class="progrmsummary__head" data-hideopen="faq3">
        <strong>Действительно ли стилист столько может заработать, сколько написано на вашем сайте?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq3">
        <div class="progrmsummary__content">
          <p>Может и значительно больше. Интерес к моде и стилю только растет и услуги имиджмейкеров становятся всё более востребованными. С вами будет работать отдельный куратор, который специализируется на привлечении клиентов для творческих профессий. Вы сможете привлечь первых клиентов уже во время обучения. Через 2-3 месяца по окончании обучения студенты выходят на доход в 50+ тыс. руб. в месяц и далее с каждым месяцем эта цифра растет.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq4">
      <div class="progrmsummary__head" data-hideopen="faq4">
        <strong>Нужно ли покупать вещи для выполнения домашних заданий?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4">
        <div class="progrmsummary__content">
          <p>Для выполнения заданий — вам придется сперва убеждать модель в правильности выбранного образа, затем выкупить необходимую одежду, после чего её нужно будет сдать в магазин с каменным лицом. И только после этого можно считать, что вы — стилист, который прошел все испытания, выпадающие на долю каждого представителя профессии ежедневно.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq4x">
      <div class="progrmsummary__head" data-hideopen="faq4x">
        <strong>Смогу ли я получить все нужные навыки онлайн?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4x">
        <div class="progrmsummary__content">
          <p>Да. Наша образовательная программа включает в себя 30+ практических занятий в мини-группах, во время которых вы сможете закрепить знания и навыки, полученные на лекциях, разбирать реальные кейсы и выполнять упражнения в парах.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq4y">
      <div class="progrmsummary__head" data-hideopen="faq4y">
        <strong>Нужна ли специальная подготовка для обучения на этом курсе?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4y">
        <div class="progrmsummary__content">
          <p>Нет, специальная подготовка не требуется. Учиться можно даже не имея высшего образования.</p>
        </div>
      </div>
    </div><!-- //item -->


    <div class="progrmsummary__item" data-hidewrap="faq4z">
      <div class="progrmsummary__head" data-hideopen="faq4z">
        <strong>Какой документ я получу после окончания обучения?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4z">
        <div class="progrmsummary__content">
          <p>Если на момент окончания обучения у вас не будет диплома о среднем профессиональном или высшем образовании, вы получите сертификат о прохождении обучения.</p>
          <p>Если на момент окончания обучения у вас будет высшее или среднее профессиональное образование, вы получите диплом установленного образца о профессиональной переподготовке.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq5">
      <div class="progrmsummary__head" data-hideopen="faq5">
        <strong>Можно обучаться только с телефона или планшета?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq5">
        <div class="progrmsummary__content">
          <p>Да</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq6">
      <div class="progrmsummary__head" data-hideopen="faq6">
        <strong>Какое программное обеспечение мне понадобится для обучения?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq6">
        <div class="progrmsummary__content">
          <p>Мы постарались сделать курс максимально доступным для каждого студента. Поэтому в ходе обучения мы используем следующие сервисы:</p>
          <p>Zoom — для проведения практик и всех групповых активностей.</p>
          <p>Telegram — мессенджер, в котором происходит общение куратора, преподавателей, студентов.</p>
          <p>Платформа Talentsy открывается в любом веб-браузере, на ней размещаются лекции и дополнительные материалы к ним.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq7">
      <div class="progrmsummary__head" data-hideopen="faq7">
        <strong>Кому я смогу задать вопросы в процессе обучения?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq7">
        <div class="progrmsummary__content">
          <p>За каждой группой наших студентов закреплен куратор, который будет оперативно отвечать на все вопросы.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq8">
      <div class="progrmsummary__head" data-hideopen="faq8">
        <strong>Если я пропустил практическое занятие, что делать?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq8">
        <div class="progrmsummary__content">
          <p>Особенностью нашей программы является построение индивидуальной траектории обучения и созданию гибкого обучения для всех студентов. Если Вы пропустили занятие, Вы сможете посетить его с другой группой в удобное время или посмотреть в записи.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq9">
      <div class="progrmsummary__head" data-hideopen="faq9">
        <strong>Сколько длится обучение?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq9">
        <div class="progrmsummary__content">
          <p>6 месяцев.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq10">
      <div class="progrmsummary__head" data-hideopen="faq10">
        <strong>Заключается ли договор на обучение?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq10">
        <div class="progrmsummary__content">
          <p>Да. Оплачивая пакет обучения на онлайн-курсе вы принимаете условия нашей Публичной оферты, что считается соблюдением письменной формы договора об образовании (п. 3 ст. 434 ГК РФ).</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq10x">
      <div class="progrmsummary__head" data-hideopen="faq10x">
        <strong>Что если мне не понравится?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq10x">
        <div class="progrmsummary__content">
          <p>Мы уверены в качестве нашей образовательной программы, поэтому если курс вам не понравится, мы сделаем
            возврат средств пропорционально пройденным материалам, согласно условиям публичной оферты.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq11">
      <div class="progrmsummary__head" data-hideopen="faq11">
        <strong>Что делает стилист-имиджмейкер?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq11">
        <div class="progrmsummary__content">
          <p>Стилист-имиджмейкер – это специалист с глубокими познаниями в сфере моды, стиля, красоты. </p>
          <p>На курсе вы разберетесь, что делает стилист, как формируется цена на его услуги:</p>
          <ul>
            <li>Ключевые компетенции стилиста. Узнаете, как натренировать насмотренность и вкус.</li>
            <li>Мода, стиль, имидж. Что такое персональный стиль? Как произвести неизгладимое первое впечатление?</li>
            <li>Какие есть стили в одежде? Что было популярно ранее? Сможете составить стайлборд для конкретного стиля. Улучшить и гармонизировать свой образ.</li>
            <li>Работа с клиентом. Создание гармоничного гардероба для каждого клиента. Сможете подбирать референсы и собирать стайлборды.</li>
            <li>Цветовой анализ. Работа с цветовым кругом, различать тона, определять глубину и чистоту цвета.</li>
            <li>Принт и паттерн. Какая есть типология принтов? Как грамотно и правильно сочетать между собой?</li>
            <li>Соразмерность фигуры, одежды и аксессуаров.</li>
            <li>Пропорции – вертикальные и горизонтальные. Анализ фигуры, исходя из соотношения пропорций.</li>
            <li>Визуальная коррекция фигуры и типы фигур. Вы поймете, как визуально сбалансировать любые диспропорции фигуры клиента. Научитесь работать с любыми типами фигур.</li>
            <li>Разбор гардероба. Как правильно сортировать вещи, на что обращать внимание во время примерки и как составить шопинг-лист.</li>
            <li>Базовый гардероб – что это и из чего он состоит? Как просто и со вкусом подчеркнуть достоинства?</li>
            <li>Тренды. Выявление и анализ модных тенденций. Вы узнаете все о модных трендах. Разберётесь в fashion-брендах.</li>
            <li>Как составить капсулу. Что такое капсульный принцип составления гардероба? Как проходит процедура подбора одежды?</li>
            <li>Повседневная работа стилиста. Вы узнаете, как эффективно организовать рабочее время. Научитесь вести клиентскую базу и работать с системами CRM. Как начать зарабатывать на любимом деле.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

  </div>
</section>



<section class="talentsyabout talentsyabout--black">
  <div class="talentsyabout__topbg">
    <div class="container">
      <img src="<?= imgs(); ?>/footer/logo-white.svg" alt="" class="talentsyabout__logo js-slide-opac">
      <dl class="talentsyabout__line1 flexi">
        <dt>Онлайн-обучение <br>гуманитарным <br>профессиям</dt>
        <dd>
          Мы помогаем развивать талант, чтобы вы могли начать заниматься любимым делом и превратили свое увлечение в
          профессию. Вас ждут самые актуальные подходы к обучению и топ-преподаватели на каждой программе. Мы создаем
          современный университет, в котором интересно учиться, и заботимся о каждом студенте.
        </dd>
      </dl>
      <div class="talentsyabout__props">
        <dl class="talentsyabout__prop">
          <dt class="js-slide-opac">6</dt>
          <dd>Факультетов</dd>
        </dl>
        <dl class="talentsyabout__prop">
          <dt class="js-slide-opac">20</dt>
          <dd>Образователь- <br>ных программ</dd>
        </dl>
        <dl class="talentsyabout__prop">
          <dt class="js-slide-opac">70+</dt>
          <dd>Выдающихся <br>преподавателей</dd>
        </dl>
        <dl class="talentsyabout__prop talentsyabout__prop--red">
          <dt class="js-slide-opac">13k<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 51 50" class="talentsyabout__heart">
              <path fill="currentColor" fill-rule="evenodd" d="M16.833.51c2.064.067 3.876.475 5.03 1.05 1.326.66 2.566 1.417 3.646 2.255 1.071-.834 2.299-1.589 3.608-2.253l.226.446-.226-.446C30.255.985 32.058.577 34.118.51c2.07-.068 4.444.206 6.733 1.032 2.29.826 4.504 2.209 6.233 4.361 1.73 2.154 2.951 5.053 3.298 8.876.721 7.956-1.907 14.137-6.48 19.567-4.554 5.406-11.051 10.086-18.08 15.062a.5.5 0 0 1-.578-.816c7.052-4.992 13.437-9.6 17.893-14.89 4.435-5.267 6.942-11.19 6.249-18.833-.331-3.65-1.49-6.357-3.082-8.34-1.594-1.985-3.643-3.271-5.793-4.047-2.152-.776-4.396-1.037-6.36-.973-1.973.065-3.618.456-4.582.945a21.696 21.696 0 0 0-3.27 2.015c1.249 1.106 2.213 2.335 2.742 3.658.535 1.338.62 2.766.105 4.224-.51 1.448-1.598 2.887-3.34 4.29a.5.5 0 0 1-.628 0c-1.741-1.403-2.828-2.839-3.337-4.283-.513-1.455-.425-2.879.111-4.214.534-1.327 1.507-2.561 2.766-3.675a21.107 21.107 0 0 0-3.3-2.014l.223-.447-.223.447c-.985-.49-2.642-.881-4.618-.946-1.967-.064-4.21.197-6.356.973C8.3 3.257 6.258 4.544 4.67 6.53c-1.586 1.982-2.74 4.689-3.072 8.34-1.24 13.684 9.574 23.525 17.777 29.395a.5.5 0 1 1-.582.813C10.594 39.21-.693 29.067.603 14.78c.346-3.822 1.563-6.72 3.286-8.875 1.722-2.152 3.928-3.536 6.215-4.362C12.388.716 14.759.442 16.833.51Zm8.676 4.597c-1.23 1.061-2.148 2.213-2.629 3.41-.453 1.128-.521 2.3-.096 3.508.402 1.138 1.254 2.342 2.708 3.578 1.454-1.236 2.308-2.443 2.711-3.585.428-1.212.361-2.39-.09-3.52-.477-1.192-1.385-2.338-2.604-3.391Z" clip-rule="evenodd" />
            </svg>
          <dd>Любимых <br>студентов</dd>
        </dl>
      </div>

      <div class="townsmarquee jbm js-towns-marquee">
        <div class="townsmarquee__line1 flexi"><?php get_template_part('inc/_towns'); ?></div>
        <div class="townsmarquee__line2 flexi"><?php get_template_part('inc/_towns'); ?></div>
        <div class="townsmarquee__line1 flexi"><?php get_template_part('inc/_towns'); ?></div>
      </div>

      <div class="talentsyabout__tags" data-hidewrap="tags">
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Курсы стилистов-<br>имиджмейкеров</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Базовый курс <br>«Практикующий <br>стилист»</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Курс имиджмейкер <br>стилист</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Школа имиджа <br>Talentsy</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Как определить <br>стилевые <br>направления?</a>

        <div data-hidebox="tags" class="talentsyabout__more">
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Базовый курс <br>«Профессия имиджмейкер»</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Базовый курс <br>«Профессия стилист»</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Цена обучения <br>стилиста-имиджмейкера</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Онлайн курсы <br>для стилистов</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Дистанционный <br>интенсивный fashion курс</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Fashion-стилист</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Как собрать <br>мужской гардероб?</a>

          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Цена онлайн-курсов <br>стилиста-имиджмейкера</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Курсы стилиста <br>имиджмейкера</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Длительность онлайн <br>Fashion курса</a>
          <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Шопинг-сопровождение после <br>прохождения курсов</a>
        </div>
      </div>
      <div class="talentsyabout__action">
        <button data-hideopen="tags"><span>Показать еще</span><i>Cкрыть</i></button>
      </div>
    </div>
  </div>
</section><!-- //talentsyabout -->



<?php
get_footer();
