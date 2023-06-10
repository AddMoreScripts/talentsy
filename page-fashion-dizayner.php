<?php
/*
Template name: Шаблон: Дизайнер одежды
*/
get_header();
$pics = imgs() . '/fashion-dizayner';
?>

<section class="hero hero-fashion">
  <div class="hero__h1 jbm js-slide-bot">
    За 12 месяцев <img src="<?= $pics; ?>/b1-sm.webp" alt=""> сделаем из
    <br>тебя <b>успешного дизайнера
      <br>одежды</b> и изменим твою жизнь
    <br>до неузнаваемости
  </div>
  <div class="hero__videowrap js-slide-bot">
    <div class="hero__videobox square">
      <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
        <source src="<?= $pics; ?>/b1-video.mp4">
      </video>
    </div>
    <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
      Стать <br>дизайнером <br>одежды
    </a>
  </div>
</section>



<div class="disint2">
  <div class="container">
    <div class="title">и не важно:</div>
    <div class="disint2__grid grid3 disint2__grid--nobotline">
      <div class="grid-item disint2__item">
        <div class="disint2__picwrap">
          <img src="<?= $pics; ?>/b2-1.png" alt="" class="js-slide-opac">
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
          <img src="<?= $pics; ?>/b2-2.png" alt="" class="js-slide-opac">
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
          <img src="<?= $pics; ?>/b2-3.png" alt="" class="js-slide-opac">
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




<section class="iphone disint-iphone">
  <div class="container">
    <h2 class="title js-slide-bot">
      Мы создали <i class="title-dot">i</i>Phone на рынке <br><b>обучения дизайну одежды </b>
    </h2>
    <div class="iphone__wrap flexi">
      <aside class="iphone__right">
        <img data-src="<?= $pics; ?>/b3-mock.png" alt="" class="iphone__mock lazy">
        <!-- <img src="<?= imgs(); ?>/dizayner-interyera/b3-iphone.svg" alt="" class="iphone__overmock"> -->
        <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
          <source src="<?= $pics; ?>/b3-video.mp4">
        </video>
      </aside>
      <div class="iphone__grid">
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-1.png" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Диплом о проф. переподготовке</div>
          <p>Получите специализацию в сфере дизайна одежды и диплом о профессиональной переподготовке</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-2.png" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Занятия в мини-группах</div>
          <p>Под руководством персонального наставника, который выстроит индивидуальную траекторию для каждого студента, ответит на вопросы и напомнит о занятиях</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-3.png" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Капсульная коллекция одежды</div>
          <p>И собственный модный бренд, над которыми вы работаете все время обучения, проходя таким образом весь путь от идеи до продаж</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b3-4.png" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Лучшие преподаватели</div>
          <p>Мы собрали звезд индустрии, чтобы вы могли учиться у лучших: владельцев модных брендов, востребованных дизайнеров, победителей российских и международных конкурсов</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="programfromlead disint4">
  <div class="container">
    <h2 class="title">
      Получить полную<br> <b>программу курса</b>
    </h2>
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить программу']); ?>
  </div>
</section><!-- //programfromlead -->




<section class="dreams disint5">
  <div class="container">
    <h2 class="title">Мы знаем, о чем ты мечтаешь, <br><b>и поможем тебе этого добиться</b></h2>
    <div class="grid-mob-scroll">
      <div class="dreams__grid">
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-1.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Создать свою коллекцию одежды
            <small class="dreamsltitle__min">Освоить дизайн, моделирование, <br>конструирование и пошив</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b5-2.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Открыть свой бренд одежды
          </div>
          <small class="dreamsltitle__min">Делать счастливыми людей и при этом хорошо зарабатывать</small>
        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-3.png" alt="" class="lazy">
          </div>
          <div class="dreamsltitle">
            Научиться продавать одежду <br>через интернет
          </div>
        </div>
        <div class="dreams__item  dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-4.svg" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Заниматься делом, которое приносит не&nbsp;только доход, но и удовольствие
            <small class="dreamsltitle__min">и раскрыть свой творческий потенциал</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b5-5.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Получить новую <br>высокооплачиваемую <br>профессию
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
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





<section class="mentors disint-mentors">
  <div class="container">
    <h2 class="title">Ты будешь учиться <span>у&nbsp;</span><b>10+ лучших <br class="mobbr">специалистов</b> <span>со
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

    <?php include(locate_template('inc/_decorator_mentors_data.php')); ?>
    <div class="teamblock flexi">
      <div class="teamblock__nav jbm teamblock__nav--left">
        <?php foreach ($mentorsLeft as $key => $mentor) : ?>
          <a href="#" class="teamblock__navlink <?= $key == 0 ? 'is-active' : ''; ?>" data-slide="<?= $key; ?>"><?= $mentor['name']; ?></a>
        <?php endforeach; ?>
      </div>
      <div class="teamblock__nav jbm teamblock__nav--right">
        <?php foreach ($mentorsRight as $key => $mentor) : ?>
          <a href="#" class="teamblock__navlink" data-slide="<?= $key + count($mentorsLeft); ?>"><?= $mentor['name']; ?></a>
        <?php endforeach; ?>
      </div>

      <div class="swiper teamslider js-team-slider">
        <div class="swiper-wrapper">

          <!-- Слайдер менторов -->
          <?php foreach ($mentorsLeft as $key => $mentor) : ?>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="<?= imgs(); ?>/dizayner-interyera/mentors/<?= $mentor['img']; ?>.webp" alt="" class="teamslider__photo">
                <h3 class="teamslider__name"><?= $mentor['title']; ?></h3>
                <div class="teamslider__content">
                  <?= $mentor['text']; ?>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
          <?php foreach ($mentorsRight as $key => $mentor) : ?>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="<?= imgs(); ?>/dizayner-interyera/mentors/<?= $mentor['img']; ?>.webp" alt="" class="teamslider__photo">
                <h3 class="teamslider__name"><?= $mentor['title']; ?></h3>
                <div class="teamslider__content">
                  <?= $mentor['text']; ?>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
          <!-- конец: Слайдер менторов -->
        </div>
      </div>

    </div><!-- //teamblock -->
  </div>
</section><!-- //mentors -->




<section class="features decorator9">
  <div class="container">
    <h2 class="title">Тебя ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?= $pics; ?>/b8-video.mp4">
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
            <img data-src="<?= $pics; ?>/b8-1.png" alt="" class="lazy js-slide-opac">
            <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b8-2.png" alt="" class="lazy js-slide-opac">
            <p>Студенты обучаются <b>современному программному обеспечению</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b8-3.png" alt="" class="lazy js-slide-opac">
            <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b8-4.png" alt="" class="lazy js-slide-opac">
            <p>Более <b>250 дополнительных материалов (примеры, шаблоны, схемы)</b></p>
          </div>
        </div>

        <div class="psy11__gridwrap">
          <div class="grid-mob-scroll">
            <div class="psy11__grid">
              <div class="psy11__item psy11__item--wide">
                <img data-src="<?= $pics; ?>/b8-1.png" alt="" class="lazy js-slide-opac">
                <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
              </div>
              <div class="psy11__item">
                <img data-src="<?= $pics; ?>/b8-2.png" alt="" class="lazy js-slide-opac">
                <p>Студенты обучаются <b>современному программному обеспечению</b></p>
              </div>
              <div class="psy11__item">
                <img data-src="<?= $pics; ?>/b8-3.png" alt="" class="lazy js-slide-opac">
                <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
              </div>
              <div class="psy11__item">
                <img data-src="<?= $pics; ?>/b8-4.png" alt="" class="lazy js-slide-opac">
                <p>Более <b>250 дополнительных материалов (примеры, шаблоны, схемы)</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //disint8 -->




<section class="guideform">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot">
      <span>Получите гайд</span>
      <span>по профессии</span>
      <span><b>Дизайнер одежды</b></span>
      <img src="<?= $pics; ?>/b9-catalog.png" alt="">
    </h3>
    <?php get_template_part('inc/leadform', null, [
      'formClassName' => 'programfromlead__formwrap--yellow',
      'buttonTxt' => 'Получить гайд',
    ]); ?>
  </div>
</section><!-- //disint-guideform -->




<section class="features">
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
            <img src="<?= $pics; ?>/b10-1.jpg" alt="" class="js-slide-opac">
            <p><b>Уникальный</b> формат <br>обучения</p>
          </div>
          <div class="features__item">
            <img src="<?= $pics; ?>/b10-2.jpg" alt="" class="js-slide-opac">
            <p>Участники группы <br><b>мотивируют и помогают</b><br> друг другу</p>
          </div>
          <div class="features__item">
            <img src="<?= $pics; ?>/b10-3.jpg" alt="" class="js-slide-opac">
            <p>Студенты растут <b>в среде <br>единомышленников</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="reviewsslider js-review-slider decorator7">
  <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
  <div class="reviewsslider__wrap">
    <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <div class="reviewsslider__cont js-slide-bot">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 4, 1) as $key => $videoNum) : ?>
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



<section class="timeslot timeslot--disint">
  <div class="container">
    <h2 class="title">
      Научим <b>продавать одежду</b><br>
      через <b>интернет </b>
    </h2>
    <div class="timeslot__box">
      <img src="<?= imgs(); ?>/psychology/b19-bg.svg" alt="" class="timeslot__bg">
      <div class="timeslot__over flexi">
        <div class="timeslot__text">
          <p>С вами работает специалист <br>по продвижению и привлечению <br>клиентов</p>
          <small>начиная с 6 месяца обучения</small>
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



<section class="diplomblock">
  <div class="container">
    <h2 class="title">
      <b>Ты получишь диплом <br>установленного образца</b> <br>
      о профессиональной переподготовке
    </h2>
    <img src="<?= $pics; ?>/b13-diplom.png" alt="" class="diplomblock__pic">
    <div class="diplomblock__footer flexi">
      <p>
        Сможете <b>подтвердить <br>
          свою квалификацию</b><br>
        перед заказчиками<br>
        и / или работодателями
      </p>
      <!-- <a href="#offer" class="circlebutton" data-scrollto="#offer">Задать вопрос <br>специалисту</a> -->
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить консультацию']); ?>
  </div>
</section><!-- //stepform -->





<div class="disint21">
  <section class="statistic container">
    <h2 class="title">Поговорим о цифрах</h2>
    <div class="statistic__grid">
      <dl class="statistic__item statistic__item--verbg">
        <dt>11<img src="<?= imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
        <dd>Топ <br>преподавателей</dd>
      </dl>
      <dl class="statistic__item statistic__item--verborder">
        <dt class="js-slide-opac">50</dt>
        <dd>Недель обучения</dd>
      </dl>
      <dl class="statistic__item statistic__item--col2">
        <dt class="js-slide-opac">350+</dt>
        <dd>Видеоуроков в HD</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">78+</dt>
        <dd>Часов воркшопов <br>и мастермайндов</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">847</dt>
        <dd>Академических <br>часов</dd>
      </dl>
      <dl class="statistic__item statistic__item--short">
        <dt class="js-slide-opac">30+</dt>
        <dd>Документов, <br>шаблонов и схем</dd>
      </dl>
      <dl class="statistic__item  statistic__item--veryellow">
        <dt class="js-slide-opac">12/7</dt>
        <dd>Поддержка студентов во время обучения</dd>
      </dl>
    </div>
  </section>
</div>





<section class="quizlink quizlink--decorator">
  <div class="container">
    <h2 class="title">Подходит ли тебе профессия <br><b>дизайнер одежды?</b></h2>
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




<section class="dreams disint5">
  <div class="container">
    <h2 class="title">Мы знаем, о чем ты мечтаешь, <br><b>и поможем тебе этого добиться</b></h2>
    <div class="grid-mob-scroll">
      <div class="dreams__grid">
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-1.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Сможешь разбираться в истории моды, анализировать и прогнозировать модные тренды.
            <small class="dreamsltitle__min">Узнаете структуру модной индустрии и как работают производственные циклы.</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-2.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Будешь учиться анализировать рынок и работать с портретами целевой аудитории.
            <small class="dreamsltitle__min">Сможешь сформировать ДНК бренда и составить ассортиментную матрицу.</small>
          </div>

        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-3.png" alt="" class="lazy">
          </div>
          <div class="dreamsltitle">
            Узнаешь как создавать современные модные коллекции, которые выделят вас среди других дизайнеров.
            <small class="dreamsltitle__min">Создашь лукбук своей коллекции.</small>
          </div>
        </div>
        <div class="dreams__item  dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-4.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Будешь учиться рисовать fashion-скетчи на бумаге и оцифровывать их с помощью Adobe Photoshop.
            <small class="dreamsltitle__min">Сразу увидишь, как будет выглядеть одежда вашей коллекции, и сможешь презентовать её</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= $pics; ?>/b17-5.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Узнаешь как проектировать одежду, пользоваться швейной машинкой и оверлоком.
            <small class="dreamsltitle__min">Cнимать мерки, делать выкройки и обрабатывать изделия. Сможешь сшить любую вещь: от платья до пальто.</small>
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-6.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Познакомишься с видами и свойствами тканей и их значением для создания коллекции.
            <small class="dreamsltitle__min">Узнаешь, как и где искать ткани: сможете работать с выставками и с поставщиками.</small>
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-7.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Узнаешь как проектировать одежду, пользоваться швейной машинкой и оверлоком.
            <small class="dreamsltitle__min">Cнимать мерки, делать выкройки и обрабатывать изделия. Сможешь сшить любую вещь: от платья до пальто.</small>
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-8.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Познакомишься с видами и свойствами тканей и их значением для создания коллекции.
            <small class="dreamsltitle__min">Узнаешь, как и где искать ткани: сможете работать с выставками и с поставщиками.</small>
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-9.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Узнаешь как планировать производственную цепочку, запускать пошив, следить за качеством готовых изделий и работать с браком.
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= $pics; ?>/b17-10.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Узнаешь, как проходят байерские сессии, как работать с оптовыми заказчиками, маркетплейсами и собственной розницой.
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //dreams -->



<section class="priceblock disint24" id="offer">
  <div class="container">
    <h2 class="title">Стоимость обучения</h2>
    <div class="priceblock__row flexi">
      <div class="priceblock__price jbm"><span>10400</span><span>₽/МЕС</span></div>
      <div class="priceblock__descr">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
    </div>
    <div class="priceblock__greenprice jbm"><span>От</span> <span>6250</span> <span>₽/МЕС</span> <small>Скидка <b>до
          24 марта</b></small></div>
    <div class="priceblock__mobdescr">
      <p>Беспроцентная рассрочка на 24 месяца.</p>
      <p>Первый платеж через 2 месяца.</p>
    </div>
    <?php get_template_part('inc/leadform', null, [
      'formClassName' => 'programfromlead__formwrap--yellow',
      'isPromoForm' => true,
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
          <p>Уникальный формат обучения в мини-группах. Сильнейший преподавательский состав. Опытный куратор, профессиональный дизайнер одежды с опытом создания своего бренда, который будет вам помогать. Современная, продуманная, сбалансированная программа, направленная на конечный результат: получение новой профессии. 70+ часов практических занятий онлайн. Отдельный куратор-специалист по продвижению, который доведет вас до первых клиентов.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq2">
      <div class="progrmsummary__head" data-hideopen="faq2">
        <strong>Смогу ли я получить все нужные навыки онлайн?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq2">
        <div class="progrmsummary__content">
          <p>Да. Наша образовательная программа включает 50+ часов практических занятий в мини-группах, во время которых вы сможете закрепить знания и навыки, полученные на лекциях и получить обратную связь по своим коллекциям от экспертов.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq3">
      <div class="progrmsummary__head" data-hideopen="faq3">
        <strong>Нужна ли специальная подготовка для обучения на этом курсе?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq3">
        <div class="progrmsummary__content">
          <p>Нет, специальная подготовка не требуется. Учиться можно даже не имея высшего образования.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq4">
      <div class="progrmsummary__head" data-hideopen="faq4">
        <strong>Какой документ я получу после окончания обучения?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4">
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
          <p>12 месяцев.</p>
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
        <strong>Кто такой дизайнер одежды?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq11">
        <div class="progrmsummary__content">
          <p> Дизайнер одежды анализирует тренды, разрабатывает эскизы, организует и контролирует производство.</p>
          <p>Если вы мечтаете стать профессиональным дизайнером, освоить основные принципы построения и шить одежду, научиться работать в специализированных программах, то стоит прийти на курс к специалистам Talentsy.</p>
          <p> Этот курс подойдет вам, если:</p>
          <ol>
            <li>Вы мечтаете выпускать свои коллекции. Вы научитесь превращать эскиз на бумаге в реальное изделие.</li>
            <li>Для начинающих в дизайне. Вы научитесь всему тому, что должен уметь дизайнер – рисовать эскизы, сочетать ткани, контролировать производство. Вы сможете начать свою карьеру в дизайнерском бюро или известном бренде.</li>
            <li>Тем, кто уже умеет шить. Вы сможете попробовать себя в роли дизайнера. Поймёте, как организовать производство. Сможете выпустить свою первую линейку одежды.</li>
            <li>Этот курс для тех, кто интересуется модой. Вы сможете окунуться в мир моды, познакомитесь с дизайнерами разных эпох, поймете, как устроена fashion-индустрия.</li>
          </ol>
        </div>
      </div>
    </div><!-- //item -->


    <div class="progrmsummary__item" data-hidewrap="faq12">
      <div class="progrmsummary__head" data-hideopen="faq12">
        <strong>Чему вы научитесь на нашем курсе?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq12">
        <div class="progrmsummary__content">
        <ol>
          <li>Понимать и применять тренды. Вы проведете анализ трендов и соберёте референсы.</li>
          <li>Создадите дизайн-концепции одежды. Поймете, как найти сильную идею и разработать концепцию уникальной одежды.</li>
          <li>Делать fashion-скетчи и технические рисунки. Идеи, рожденные в голове, нужно уметь переносить на бумагу, которую поймут и технолог, и конструктор.</li>
          <li>Подбирать ткани и фурнитуру. Вы научитесь разбираться в особенностях и свойствах разных материалов. Научитесь создавать ткани и актуальные предметы одежды.</li>
          <li>Организация производства. Научитесь планировать производственную цепочку и контролировать качество изделий, чтобы выпустить идеальную коллекцию.</li>
        </ol>
        </div>
      </div>
    </div><!-- //item -->


    <div class="progrmsummary__item" data-hidewrap="faq13">
      <div class="progrmsummary__head" data-hideopen="faq13">
        <strong>Я новичок в этой сфере. У меня получится научиться дизайну одежды?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq13">
        <div class="progrmsummary__content">
          <p>Даже если у вас нет специальных знаний и практики, вы сможете углубиться в моду на нашем курсе. Опытные кураторы помогут в освоении знаний и будут сопровождать вас на протяжении всего курса. Вы научитесь всем тонкостям кройки и шитья, работе в специализированных программах.</p>
        </div>
      </div>
    </div><!-- //item -->


    <div class="progrmsummary__item" data-hidewrap="faq14">
      <div class="progrmsummary__head" data-hideopen="faq14">
        <strong>Особенности курса от профессионалов Talentsy</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq14">
        <div class="progrmsummary__content">
          <p>Курсы фэшн-дизайнеров от студии Talentsy — это продвинутая программа, подготовленная звездами индустрии. Занятия в мини-группах проводит опытный и отзывчивый наставник.</p>
          <p>В процессе курса вы узнаете, как:</p>
          <ul>
            <li>Наладить выпуск собственной коллекции одежды.</li>
            <li>Запустить свой бренд.</li>
            <li>Овладеть высокооплачиваемой профессией.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq15">
      <div class="progrmsummary__head" data-hideopen="faq15">
        <strong>Что такое колористика в костюме?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq15">
        <div class="progrmsummary__content">
          <p>После окончания курса вы научитесь разбираться в цветовых гармониях. Вы изучите теорию цвета: цветовой круг Гете, родственные, родственно-контрастные и контрастные гаммы. </p>
          <p> В процессе курса вы узнаете, как:</p>
          <ul>
            <li>Выполнять колористические композиции.</li>
            <li>Работать с фактурами и текстурами.</li>
            <li>Подбирать цвета для одежды.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq16">
      <div class="progrmsummary__head" data-hideopen="faq16">
        <strong>Конструирование женской одежды и моделирование одежды</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq16">
        <div class="progrmsummary__content">
          <p> На курсе вы научитесь создавать чертежи швейных изделий – типовые и индивидуальные. Вы научитесь основам платьев, юбок и брюк. Смоделируете чертежи в соответствии с эскизами, поработаете с вытачками, срезами и рукавами.</p>
          <p>Вы научитесь снимать мерки и выбирать конструктивные прибавки. Моделировать швейные изделия.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq17">
      <div class="progrmsummary__head" data-hideopen="faq17">
        <strong>Fashion-брендинг</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq17">
        <div class="progrmsummary__content">
          <p>По прошествию курса научитесь эффективно управлять бизнесом. </p>
          <p>Вы научитесь искать инвесторов и клиентов. Создадите торговую марку. Будете вести клиентоориентированный бизнес и эффективно продавать свои изделия.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq18">
      <div class="progrmsummary__head" data-hideopen="faq18">
        <strong>Технология швейных изделий</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq18">
        <div class="progrmsummary__content">
          <p>Базовый курс научит вас:</p>
          <ul>
            <li>Классифицировать материалы, состав и назначение изделий.</li>
            <li>Выполнять основные узлы, которые используют при производстве одежды.</li>
            <li>Создавать элементы одежды легкого и верхнего ассортиментов.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->


  </div>
</section>





<section class="talentsyabout talentsyabout--disint">
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
        <dl class="talentsyabout__prop talentsyabout__prop--yellow">
          <dt class="js-slide-opac">13k<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 51 50" class="talentsyabout__heart">
              <path fill="currentColor" fill-rule="evenodd" d="M16.833.51c2.064.067 3.876.475 5.03 1.05 1.326.66 2.566 1.417 3.646 2.255 1.071-.834 2.299-1.589 3.608-2.253l.226.446-.226-.446C30.255.985 32.058.577 34.118.51c2.07-.068 4.444.206 6.733 1.032 2.29.826 4.504 2.209 6.233 4.361 1.73 2.154 2.951 5.053 3.298 8.876.721 7.956-1.907 14.137-6.48 19.567-4.554 5.406-11.051 10.086-18.08 15.062a.5.5 0 0 1-.578-.816c7.052-4.992 13.437-9.6 17.893-14.89 4.435-5.267 6.942-11.19 6.249-18.833-.331-3.65-1.49-6.357-3.082-8.34-1.594-1.985-3.643-3.271-5.793-4.047-2.152-.776-4.396-1.037-6.36-.973-1.973.065-3.618.456-4.582.945a21.696 21.696 0 0 0-3.27 2.015c1.249 1.106 2.213 2.335 2.742 3.658.535 1.338.62 2.766.105 4.224-.51 1.448-1.598 2.887-3.34 4.29a.5.5 0 0 1-.628 0c-1.741-1.403-2.828-2.839-3.337-4.283-.513-1.455-.425-2.879.111-4.214.534-1.327 1.507-2.561 2.766-3.675a21.107 21.107 0 0 0-3.3-2.014l.223-.447-.223.447c-.985-.49-2.642-.881-4.618-.946-1.967-.064-4.21.197-6.356.973C8.3 3.257 6.258 4.544 4.67 6.53c-1.586 1.982-2.74 4.689-3.072 8.34-1.24 13.684 9.574 23.525 17.777 29.395a.5.5 0 1 1-.582.813C10.594 39.21-.693 29.067.603 14.78c.346-3.822 1.563-6.72 3.286-8.875 1.722-2.152 3.928-3.536 6.215-4.362C12.388.716 14.759.442 16.833.51Zm8.676 4.597c-1.23 1.061-2.148 2.213-2.629 3.41-.453 1.128-.521 2.3-.096 3.508.402 1.138 1.254 2.342 2.708 3.578 1.454-1.236 2.308-2.443 2.711-3.585.428-1.212.361-2.39-.09-3.52-.477-1.192-1.385-2.338-2.604-3.391Z" clip-rule="evenodd" />
            </svg>
          <dd>Любимых <br>студентов</dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="talentsyabout__tags" data-hidewrap="tags">
      <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Дизайн интерьера</a>
      <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Ландшафтный <br>дизайн</a>
      <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Графический дизайн</a>
      <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Стилизации <br>интерьеров</a>
      <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Декорирование <br>интерьера</a>
    </div>
</section><!-- //talentsyabout -->



<?php
get_footer();
