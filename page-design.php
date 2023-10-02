<?php
/*
Template name: Шаблон: Дизайнер интерьера
*/
get_header();
?>

<section class="hero hero--disint">
  <div class="hero__h1 jbm js-slide-bot">
    За 1 год <img src="<?=imgs(); ?>/dizayner-interyera/b1-sm.webp" alt=""> сделаем из тебя <br>
    <b>успешного дизайнера интерьера</b> <br>
    и изменим твою жизнь <br>
    до неузнаваемости
  </div>
  <div class="hero__videowrap js-slide-bot">
    <div class="hero__videobox square">
      <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
        <source src="<?=imgs(); ?>/dizayner-interyera/b1-video.mp4">
      </video>
    </div>
    <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
      Стать дизайнером<br>
      интерьера
    </a>
  </div>
</section>

<div class="disint2">
  <div class="container">
    <div class="title">и не важно:</div>
    <div class="disint2__grid grid3">
      <div class="grid-item disint2__item">
        <div class="disint2__picwrap">
          <img src="<?=imgs(); ?>/dizayner-interyera/b2-1.webp" alt="" class="js-slide-opac">
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
      <div class="grid-item disint2__item">
        <div class="disint2__picwrap">
          <img src="<?=imgs(); ?>/dizayner-interyera/b2-2.webp" alt="" class="js-slide-opac">
        </div>
        <div class="disint2__title">
          Eсть ли у тебя талант<br>
          или врожденное чувство стиля
        </div>
        <div class="disint2__sub">
          Это всё мифы и установки
        </div>
      </div><!-- //disint1__item -->
      <div class="grid-item disint2__item">
        <div class="disint2__picwrap">
          <img src="<?=imgs(); ?>/dizayner-interyera/b2-3.webp" alt="" class="js-slide-opac">
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
      Мы создали <i class="title-dot">i</i>Phone на рынке <br><b>обучения дизайну интерьеров</b>
    </h2>
    <div class="iphone__wrap flexi">
      <aside class="iphone__right">
        <img data-src="<?=imgs(); ?>/dizayner-interyera/b3-iphone-bg.webp" alt="" class="iphone__mock lazy">
        <img src="<?=imgs(); ?>/dizayner-interyera/b3-iphone.svg" alt="" class="iphone__overmock">
        <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
          <source src="<?=imgs(); ?>/dizayner-interyera/b3-iphone.mp4">
        </video>
      </aside>
      <div class="iphone__grid">
        <div class="iphone__prop">
          <img data-src="<?=imgs(); ?>/dizayner-interyera/b3-1.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Диплом о проф. переподготовке</div>
          <p>Получите специализацию в сфере дизайна интерьера и диплом о профессиональной переподготовке</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?=imgs(); ?>/dizayner-interyera/b3-2.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Персональный наставник</div>
          <p>Создаст индивидуальную образовательную траекторию для каждого студента, поможет выстроить гибкое расписание, ответит на вопросы и напомнит о занятиях</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__propicon iphone__counter jbm flexi">100+</div>
          <div class="iphone__proptitle">Часов практики</div>
          <p>Семинары и практические занятия в мини-группах под руководством практикующих дизайнеров с опытом от 10 лет</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?=imgs(); ?>/dizayner-interyera/b3-4.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Лучшие преподаватели</div>
          <p>Мы собрали звезд индустрии, чтобы вы могли учиться у лучших: владельцев студий, арт-директоров, архитекторов, победителей российских и международных конкурсов</p>
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
        <div class="dreams__item dreams__item--complex">
          <i></i><i></i><i></i><i></i>
          <i></i><i></i><i></i><i></i>
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b5-1.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Выполнять частные заказы <br>на дизайн интерьера
            <small class="dreamsltitle__min">и хорошо зарабатывать</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b5-2.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Разработать дизайн <br>собственного дома
            <small class="dreamsltitle__min">или квартиры</small>
          </div>
        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b5-3.webp" alt="" class="lazy">
          </div>
          <div class="dreamsltitle">
            Открыть свою дизайн <br>студию
          </div>
        </div>
        <div class="dreams__item  dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b5-4.svg" alt="" class="lazy js-slide-opac">
            <img src="<?=imgs(); ?>/dizayner-interyera/b5-heart.svg" alt="" class="dreams__heart">
          </div>
          <div class="dreamsltitle">
            Заниматься делом, которое приносит <br>не только доход
            <small class="dreamsltitle__min">но и удовольствие</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b5-5.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Получить новую высокооплачиваемую <br>профессию
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b5-6.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Изменить качество <br>своей жизни
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //dreams -->



<section class="reviewsslider js-review-slider disint6">
  <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
  <div class="reviewsslider__wrap">
    <button class="ctrl ctrl--prev"><img src="<?=imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <button class="ctrl ctrl--next"><img src="<?=imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <div class="reviewsslider__cont js-slide-bot">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 6, 1) as $key => $videoNum) : ?>
            <div class="swiper-slide">
              <a href="<?=imgs(); ?>/dizayner-interyera/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
                <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="reviewsslider__screen square__img lazy">
                  <source data-src="<?=imgs(); ?>/dizayner-interyera/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
                </video>
                <span class="reviewsslider__button">Смотреть видео</span>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="disint6__bot container">
    А еще вы можете посмотреть работы наших<br> студентов <a href="https://pin.it/64rsuUj" target="_blank">перейдя по ссылке</a>
  </div>
</section>




<section class="mentors disint-mentors">
  <div class="container">
    <h2 class="title">вы будете учиться <span>у&nbsp;</span><b>15 лучших <br class="mobbr">специалистов</b> <span>со
        всей страны</span></h2>
    <div class="mentorsfeat">
      <div class="mentorsfeat__item">
        <img src="<?=imgs(); ?>/dizayner-interyera/b7-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы потратили полгода и&nbsp;миллионы рублей</div>
        <div class="mentorsfeat__text">
          чтобы собрать их всех <br>в 1 курсе
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?=imgs(); ?>/dizayner-interyera/b7-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
        <div class="mentorsfeat__text">
          у которых календари расписаны <br>на полгода вперед
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?=imgs(); ?>/dizayner-interyera/b7-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
        <div class="mentorsfeat__text">
          чтобы ты мог учиться у лучших <br>из лучших
        </div>
      </div>
    </div>

    <?php get_template_part('inc/mentors-block'); ?>
  </div>
</section><!-- //mentors -->



<section class="features disint8">
  <div class="container">
    <h2 class="title">Тебя ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?=imgs(); ?>/dizayner-interyera/b8-video.mp4">
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
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-1.jpg" alt="" class="lazy js-slide-opac">
            <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-2.jpg" alt="" class="lazy js-slide-opac">
            <p>Студенты обучаются <b>современному программному обеспечению</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-3.jpg" alt="" class="lazy js-slide-opac">
            <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
          </div>
          <div class="features__item">
            <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-4.webp" alt="" class="lazy js-slide-opac">
            <p><b>
                В курс входит множество дополнительных материалов (примеры, шаблоны, схемы)
              </b></p>
          </div>
        </div>

        <div class="psy11__gridwrap">
          <div class="grid-mob-scroll">
            <div class="psy11__grid">
              <div class="psy11__item psy11__item--wide">
                <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-1.jpg" alt="" class="lazy js-slide-opac">
                <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
              </div>
              <div class="psy11__item">
                <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-2.jpg" alt="" class="lazy js-slide-opac">
                <p>Студенты обучаются <b>современному программному обеспечению</b></p>
              </div>
              <div class="psy11__item">
                <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-3.jpg" alt="" class="lazy js-slide-opac">
                <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
              </div>
              <div class="psy11__item">
                <img data-src="<?=imgs(); ?>/dizayner-interyera/b8-4.webp" alt="" class="lazy js-slide-opac">
                <p>В курс входит множество дополнительных материалов (примеры, шаблоны, схемы)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //disint8 -->





<section class="stepform disint-stepform">
  <div class="container">
    <h2 class="title">Возникли вопросы?</h2>
    <div class="grid-mob-scroll">
      <div class="stepform__vector">
        <p class="js-slide-interval">Оставьте свой <br>номер телефона</p>
        <span class="stepform__arrow"></span>
        <p class="js-slide-interval">Наш специалист <br>свяжется с вами</p>
        <span class="stepform__arrow"></span>
        <p class="js-slide-interval">Даст подробную информацию <br>о&nbsp;начале учебы на&nbsp;курсе</p>
      </div>
    </div>
    <?php get_template_part('inc/leadform', null, ['formClassName' => 'programfromlead__formwrap--yellow']); ?>
  </div>
</section><!-- //stepform -->



<section class="disint10">
  <div class="container">
    <h2 class="title">
      мы Пригласили <b>БОЛЕЕ 100 ПАРТНЕРОВ-ПРОИЗВОДИТЕЛЕЙ МЕБЕЛИ</b> <br>И ТЕХНИКИ
    </h2>
    <video preload="auto" playsinline autoplay loop muted class="lazy disint10__video">
      <source data-src="<?=imgs(); ?>/dizayner-interyera/b10-video.mp4">
    </video>
    <div class="disint10__grid grid3">
      <div class="disint10__item">
        <div class="disint10__iconwrap">
          <img src="<?=imgs(); ?>/dizayner-interyera/b11-1.svg" alt="" class="js-slide-opac">
        </div>
        <div class="disint10__title">Студенты практикуются на реальных объектах</div>
      </div>
      <div class="disint10__item">
        <div class="disint10__iconwrap">
          <img src="<?=imgs(); ?>/dizayner-interyera/b11-2.svg" alt="" class="js-slide-opac">
        </div>
        <div class="disint10__title">По желанию можете взять собственный объект</div>
        <div class="disint10__sub">дом или квартиру <br>для практики</div>
      </div>
      <div class="disint10__item">
        <div class="disint10__iconwrap">
          <img src="<?=imgs(); ?>/dizayner-interyera/b11-3.svg" alt="" class="js-slide-opac">
        </div>
        <div class="disint10__title">Первые деньги студенты могут заработать уже в&nbsp;процессе обучения</div>
      </div>
    </div>
    <div class="disint10__line"></div>
  </div>
</section><!-- //disint10 -->



<section class="guideform disint-guideform">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot">
      <span>Получите гайд</span>
      <span>по профессии</span>
      <span><b>Дизайнер интерьера</b></span>
      <img src="<?=imgs(); ?>/dizayner-interyera/b12-catalog.webp" alt="">
    </h3>
    <?php get_template_part('inc/leadform', null, [
      'formClassName' => 'programfromlead__formwrap--yellow',
      'buttonTxt' => 'Получить гайд',
    ]); ?>
  </div>
</section><!-- //disint-guideform -->




<section class="features disint13">
  <div class="container">
    <h2 class="title">Вас ждут практические занятия<br>в <b>мини-группах до 15 человек</b></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?=imgs(); ?>/sexolog/b15-video.mp4">
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
            <img src="<?=imgs(); ?>/dizayner-interyera/b13-1.jpg" alt="" class="js-slide-opac">
            <p><b>Уникальный</b> формат <br>обучения</p>
          </div>
          <div class="features__item">
            <img src="<?=imgs(); ?>/dizayner-interyera/b13-2.jpg" alt="" class="js-slide-opac">
            <p>Участники группы <br><b>мотивируют и помогают</b><br> друг другу</p>
          </div>
          <div class="features__item">
            <img src="<?=imgs(); ?>/dizayner-interyera/b13-3.jpg" alt="" class="js-slide-opac">
            <p>Студенты растут <b>в среде <br>единомышленников</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //sex15 -->





<section class="disint-programs">
  <div class="container">
    <h2 class="title">
      <b>вы научитесь работать<br>
        в 3 программах</b> для дизайна<br>
      интерьера и управления<br>
      дизайн-проектами
    </h2>
    <div class="disint-programs__sub">А также уроки <br>скетчинга <br>от руки</div>
    <div class="disint10__line"></div>
    <div class="disint-programs__linegrid grid3">
      <div class="grid-item">
        <div class="disint-program">
          <img src="<?=imgs(); ?>/dizayner-interyera/b14-1.webp" alt="" class="disint-program__logo js-slide-opac">
          <div class="disint-program__title">Рабочие чертежи</div>
        </div>
      </div>
      <div class="grid-item">
        <div class="disint-program">
          <img src="<?=imgs(); ?>/dizayner-interyera/b14-2.webp" alt="" class="disint-program__logo js-slide-opac">
          <div class="disint-program__title">Коллаж</div>
        </div>
      </div>
      <div class="grid-item">
        <div class="disint-program">
          <img src="<?=imgs(); ?>/dizayner-interyera/b14-3.webp" alt="" class="disint-program__logo js-slide-opac">
        </div>
      </div>
    </div>
  </div>
</section><!-- //disint-programs -->




<section class="disintchat" style="background-image: url(<?=imgs(); ?>/dizayner-interyera/b15-golden.svg);">
  <div class="container">
    <h2 class="title">
      мы договорились с<br>
      преподавателями и партнерами<br>
      о&nbsp;<b>стажировках для студентов</b>
    </h2>
    <div class="disintchat__smartphone">
      <div class="disintchat__composition">
        <img src="<?=imgs(); ?>/dizayner-interyera/b15-iphone.png" alt="" class="disintchat__ramka">
        <img src="<?=imgs(); ?>/dizayner-interyera/b15-messages.svg" alt="" class="disintchat__interface">
      </div>
      <div class="disintchat__context disintchat__context--1 js-slide-left">Наши преподаватели и партнеры приглашают наиболее активных студентов на стажировки</div>
      <div class="disintchat__context disintchat__context--2 js-slide-right">
        Таким образом <br>вы сможете начать окупать свое обучение еще в&nbsp;процессе самого обучения
      </div>
    </div>
  </div>
</section>






<section class="timeslot timeslot--disint">
  <div class="container">
    <h2 class="title">
      Научим <b>рекламировать свои <br>
        услуги</b> и <b>привлекать <br>клиентов</b>
    </h2>
    <div class="timeslot__box">
      <img src="<?=imgs(); ?>/psychology/b19-bg.svg" alt="" class="timeslot__bg">
      <div class="timeslot__over flexi">
        <div class="timeslot__text">
          <p>
            С каждой группой<br>
            работает отдельный<br>
            куратор-специалист<br>
            по привлечению клиентов
          </p>
        </div>
        <div class="timeslot__avawrap">
          <img src="<?=imgs(); ?>/psychology/b19-ava.png" alt="" class="timeslot__ava js-slide-opac">
        </div>
        <img src="<?=imgs(); ?>/psychology/b19-matrix.png" alt="" class="timeslot__matrix js-slide-opac">
      </div>
    </div>
    <div class="jbm timeslot__bot">с 3 месяца</div>
  </div>
</section><!-- //timeslot -->




<section class="diplomblock diplomblock--disint">
  <div class="container">
    <h2 class="title">
      <b>Вы получите диплом <br>установленного образца</b> <br>
      о профессиональной переподготовке
    </h2>
    <img src="<?=imgs(); ?>/dizayner-interyera/b17-diplom.webp" alt="" class="diplomblock__pic">
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




<section class="features disint18">
  <div class="container">
    <h2 class="title">Мы организовали <b>яркую <br>студенческую жизнь</b></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <img src="<?=imgs(); ?>/dizayner-interyera/b18-left.webp" alt="" class="features__leftimg">
      </div>
      <div class="features__right">
        <div class="features__grid">
          <div class="features__item">
            <picture class="js-slide-opac">
              <img src="<?=imgs(); ?>/dizayner-interyera/b18-1.webp" alt="">
            </picture>
            <div class="features__subtitle">Три очные встречи</div>
            <p>в Москве включены <br>в стоимость обучения</p>
          </div>
          <div class="features__item">
            <picture class="js-slide-opac">
              <img src="<?=imgs(); ?>/dizayner-interyera/b18-2.webp" alt="">
            </picture>
            <div class="features__subtitle">Киноклуб</div>
            <p>Обсуждаем фильмы в&nbsp;контексте дизайна <br>интерьера</p>
          </div>
          <div class="features__item">
            <img src="<?=imgs(); ?>/dizayner-interyera/b18-3.webp" alt="" class="js-slide-opac">
            <div class="features__subtitle">Читальный зал</div>
            <p>Обсуждаем интересные <br>книги</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //disint18 -->





<div class="disint19">
  <div class="disint19__bgs">
    <img src="<?=imgs(); ?>/dizayner-interyera/b19-left.jpg" alt="" class="disint19__leftbg">
    <img src="<?=imgs(); ?>/dizayner-interyera/b19-right.jpg" alt="" class="disint19__rightbg">
  </div>
  <div class="containter">
    <div class="disint19__lead jbm">
      Что <br>выберешь <br>ты?
    </div>
    <div class="disint19__chatwrap">
      <div class="disint19__badwrap js-slide-left">
        <p>Потерянное время, <br>деньги и нервы</p>
        <p>Занудные лекции</p>
        <p class="disint19__sp">Имитация поддержки <br>студентов</p>
        <p>Преподаватели <br>без достижений</p>
        <p class="disint19__sp">Отсутствие клиентов</p>
        <p>Неопытные кураторы</p>
        <p class="disint19__sp">Заурядная программа</p>
      </div>
      <div class="disint19__goodwrap js-slide-right">
        <p>Фундаментальная <br>образовательная <br>программа</p>
        <p class="disint19__sp">Звездные преподаватели</p>
        <p class="disint19__sp">Обучение в мини-группах</p>
        <p>Сотни часов практики</p>
        <p>Стажировки у партнеров</p>
        <p>Сопровождение <br>до первых клиентов</p>
        <p>Яркая студенческая жизнь</p>
      </div>
    </div>
  </div>
</div>



<section class="stepform disint20">
  <div class="container">
    <h2 class="title">Сделать правильный выбор</h2>
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
    <?php get_template_part('inc/leadform', null, [
      'formClassName' => 'programfromlead__formwrap--yellow',
      'buttonTxt' => 'Сделать выбор',
    ]); ?>
  </div>
</section><!-- //stepform -->





<div class="disint21">
  <section class="statistic container">
    <h2 class="title">Поговорим о цифрах</h2>
    <div class="statistic__grid">
      <dl class="statistic__item statistic__item--verbg">
        <dt>16<img src="<?=imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
        <dd>Топ <br>преподавателей</dd>
      </dl>
      <dl class="statistic__item statistic__item--verborder">
        <dt class="js-slide-opac">200</dt>
        <dd>Уроков <br>в HD-качестве</dd>
      </dl>
      <dl class="statistic__item statistic__item--col2">
        <dt class="js-slide-opac">100+</dt>
        <dd>Часов практических занятий</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">2</dt>
        <dd>Конкурса проектов</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">10+</dt>
        <dd>Работ и проектов <br>в портфолио</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">3</dt>
        <dd>Встречи в Москве</dd>
      </dl>
      <dl class="statistic__item  statistic__item--veryellow">
        <dt class="js-slide-opac">12/7</dt>
        <dd>Поддержка студентов во время обучения</dd>
      </dl>
    </div>
  </section>
</div>




<section class="dreams disint22 disint5">
  <div class="container">
    <h2 class="title">Вот, что ты в конечном <br>итоге <b>будешь уметь</b></h2>
    <div class="grid-mob-scroll">
      <div class="dreams__grid">
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-1.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Бриф заказчика</span>
            <small class="dreamsltitle__min">
              Презентация портфолио, первая встреча, переговоры и прикладная психология, анализ объекта,, коллаж и мудборд, расчет сроков и многое другое
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-2.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Презентация концепции</span>
            <small class="dreamsltitle__min">
              Аксонометрия, визуализация, отделочные материалы и мебель, оформление эскизного решения, составление договора и другие юридические вопросы
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-3.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Техническое задание</span>
            <small class="dreamsltitle__min">
              Подготовка референсов, анализ вводных данных и планов БТИ, обмеры и фотофиксация, СНИПЫ и многое другое
            </small>
          </div>
        </div>
        <div class="dreams__item dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-4.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Планировочные решения</span>
            <small class="dreamsltitle__min">
              Функциональное зонирование, общая и приватные зоны, эргономика помещений, монтажные чертежи, планировки студий, квартир от 150 кв.м., домов
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-5.webp" alt="" class="js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            <span>Проектирование <br>жилых интерьеров</span>
            <small class="dreamsltitle__min">
              Демонтаж и перегородки, план сантехники, приборов отопления, потолка, розеток, проектирование не типовых элементов и конструкций, отделочные материалы, спецификации и ведомости
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-6.webp" alt="" class="js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            <span>Проектирование <br>коммерческих интерьеров</span>
            <small class="dreamsltitle__min">
              Нормативы, логистика, планировочные решения, монтажные планы, освещение, водоснабжение и водоотведение, электрообеспечение, узлы, отделочные материалы и многое другое
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-7.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Дизайн отдельных помещений</span>
            <small class="dreamsltitle__min">
              Холл, прихожая, кухня, гостиная, детская комната, спальня, санузел, ванна, гардебор, кабинет
            </small>
          </div>
        </div>
        <div class="dreams__item dreams__item--complex">
          <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-8.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Съемки объекта</span>
            <small class="dreamsltitle__min">
              Композиция в фотографии, стайлинг, создание истории, продвижение в журналах и издательствах и многое другое
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-9.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Строительные процессы</span>
            <small class="dreamsltitle__min">
              Инженерные, тепловые, сантехнические и электрические коммуникации, вентиляция, кондиционирование, газ, сигнализация, умный дом, взаимодействие с прорабом
            </small>
          </div>
        </div>
        <div class="dreams__item dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-10.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Программные навыки</span>
            <small class="dreamsltitle__min">
              Скетчинг от руки, Photoshop, Archicad, Bitrix24 управление проектами
            </small>
          </div>
        </div>
        <div class="dreams__item dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-11.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Декорирование</span>
            <small class="dreamsltitle__min">
              Подбор материалов, композиция, пропорции, акценты, цвет в интерьере, стили в интерьере, материаловедение, светодизайн, озеленение, мебель, арт-объекты, текстиль и многое другое
            </small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/dizayner-interyera/b22-12.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            <span>Привлечение клиентов</span>
            <small class="dreamsltitle__min">
              Контент-план, реклама, продвижение на площадках, сарафанное радио, создание сайта и многое другое
            </small>
          </div>
        </div>
      </div><!-- //dreams__grid -->
    </div>
  </div>
</section><!-- //disint22 -->


<?php if(get_field('is-show_quiz')): ?>
<section class="quizlink disint23">
  <div class="container">
    <h2 class="title">Подходит ли тебе профессия <br><b>дизайнера интерьера?</b></h2>
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



<section class="priceblock disint24" id="offer">
  <div class="container">
    <h2 class="title">Стоимость обучения</h2>
    <div class="priceblock__row flexi">
      <div class="priceblock__price jbm"><span>11458</span><span>₽/МЕС</span></div>
      <div class="priceblock__descr">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
    </div>
    <div class="priceblock__greenprice jbm"><span>От</span> <span class="jsPPSumm">6875</span> <span>₽/МЕС</span>
    <small>Скидка 40% &nbsp;<b>до <?=getTomorow(); ?></b></small></div>
    <div class="priceblock__mobdescr">
      <p>Беспроцентная рассрочка на 24 месяца.</p>
      <p>Первый платеж через 2 месяца.</p>
    </div>
    <?php get_template_part('inc/leadform', null, [
      'formClassName' => 'programfromlead__formwrap--yellow',
      'isPromoForm' => true,
      'showTopTxt' => true,
    ]); ?>
  </div>
</section><!-- //priceblock -->



<section class="faqblock faqblock--disint">
  <h2 class="title">Часто задаваемые вопросы</h2>
  <div class="faqblock__wrap container">
    <div class="progrmsummary__item" data-hidewrap="faq1">
      <div class="progrmsummary__head" data-hideopen="faq1">
        <strong>Мой компьютер справится с программами?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq1">
        <div class="progrmsummary__content">
          <p>Посмотрите системные требования на официальных сайтах разработчиков: </p>
          <p>
            <a href="https://graphisoft.com/ru/resources-and-support/system-requirements">Системные требования для Archiсad.</a><br>
            <a href="https://helpx.adobe.com/ru/photoshop/system-requirements.html">Системные требования для Photoshop.</a>
          </p>
          <p>Самая тяжелая программа-это Архикад. На время обучения вы получите бесплатный доступ к Архикад и фотошоп</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq2">
      <div class="progrmsummary__head" data-hideopen="faq2">
        <strong>У меня получится, если никогда не занимался дизайном?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq2">
        <div class="progrmsummary__content">
          <p>Если своевременно смотреть лекции и выполнять практические задания, вы сможете достигнуть результата без специальных базовых знаний. Во всём помогут опытные кураторы с опытом работы более 10 лет.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq3">
      <div class="progrmsummary__head" data-hideopen="faq3">
        <strong>Сколько времени нужно уделять учебе?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq3">
        <div class="progrmsummary__content">
          <p>Система обучения создана с распределением нагрузки по неделям, чтобы можно было изучить теорию и отработать знания на практике. </p>
          <p>Вы сможете изучать материалы курса в удобном для вас режиме, совмещать обучение с работой и личной жизнью.</p>
          <p>Все видео будут доступны и по окончании курса, и вы сможете освежить свои знания в любой момент.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq4">
      <div class="progrmsummary__head" data-hideopen="faq4">
        <strong>Сколько часов потребуется в неделю?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4">
        <div class="progrmsummary__content">
          <p>В среднем наши студенты занимаются от 5 до 10 часов в неделю.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq5">
      <div class="progrmsummary__head" data-hideopen="faq5">
        <strong>Как я смогу получить обратную связь по заданиям?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq5">
        <div class="progrmsummary__content">
          <p>Наша программа отличается большим числом практических занятий, плотным взаимодействием наставника и студента и оперативной поддержкой в чатах.</p>
          <p>У вас никогда не возникнет ощущения, что про вас "забыли". Вы будете чувствовать постоянную заботу и поддержку со стороны наставников.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq6">
      <div class="progrmsummary__head" data-hideopen="faq6">
        <strong>Есть ли у вас рассрочка по оплате?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq6">
        <div class="progrmsummary__content">
          <p>Да, вы можете купить курс в рассрочку и спланировать свой бюджет, разбив всю сумму на небольшие ежемесячные платежи.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq7">
      <div class="progrmsummary__head" data-hideopen="faq7">
        <strong>Хочу сделать проект своей квартиры, получится после курса?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq7">
        <div class="progrmsummary__content">
          <p>Да, вы сможете начать работать над дизайном своей квартиры или дома уже во время обучения.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq8">
      <div class="progrmsummary__head" data-hideopen="faq8">
        <strong>Смогу ли я получить работу после прохождения вашего курса?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq8">
        <div class="progrmsummary__content">
          <p>Лучшие студенты приглашаются на стажировку в дизайнерские студии наших спикеров. </p>
          <p>Во время обучения с группой начинаем работать отдельный куратор - специалист по личному бренду и привлечение клиентов: всё организовано так, чтобы к концу обучения вы не только обладали навыками и портфолио, но и имели реальные заказы клиентов.</p>
          <p>Мы консультируем своих выпускников по вопросам оформления портфолио, составлению резюме и поиску работы.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq9">
      <div class="progrmsummary__head" data-hideopen="faq9">
        <strong>Что если мне не понравится?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq9">
        <div class="progrmsummary__content">
          <p>Мы уверены в качестве нашей образовательной программы, поэтому если курс вам не понравится, мы сделаем возврат средств пропорционально пройденным материалам, согласно условиям публичной оферты.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq10">
      <div class="progrmsummary__head" data-hideopen="faq10">
        <strong>Кому подходит этот курс?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq10">
        <div class="progrmsummary__content">
          <ul>
            <li>Тем, кто осваивает новые навыки, хочет быть востребованным.</li>
            <li>Для тех, кто интересуется дизайном и хочет освоить новую профессию.</li>
            <li>Повышаете профессиональный уровень.</li>
            <li>Планируете открыть для себя новое направление деятельности.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq11">
      <div class="progrmsummary__head" data-hideopen="faq11">
        <strong>Основные программы и сервиса для дизайна интерьера</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq11">
        <div class="progrmsummary__content">
          <ul>
            <li>Archicad. Создаете 3D квартиру и получаете альбом рабочих чертежей. Навыки работы с одной из этих программ должны быть в арсенале любого дизайнера.</li>
            <li>Photoshop – без него можно обойтись при создании проекта. Но изучив базовые функции, он станет незаменимым для постобработки и корректировки оформления.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq12">
      <div class="progrmsummary__head" data-hideopen="faq12">
        <strong>Что мы советуем для дизайнерской насмотренности?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq12">
        <div class="progrmsummary__content">
          <p> Конечно, курсы с профессиональными преподавателями – это основа для того, чтобы и дальше развиваться в этой области. Но для того, чтобы стать лучшим из лучших, необходимо постоянно тренировать свои умения, пополнять багаж знаний, тренировать насмотренность. </p>
          <p> Для тренировки последнего стоит читать книги: </p>
          <ul>
            <li>Деян Суджич — Язык вещей.</li>
            <li>Деян Суджич — Как в Bauhaus. Азбука современного мира.</li>
            <li>Виктор Папанек — Дизайн для реального мира.</li>
            <li>Энтони Данн и Фиона Рэби — Спекулятивный мир.</li>
            <li>Дизайн, воображение и социальное визионерство Дональд Норман — Дизайн вещей будущего</li>
          </ul>
          <p> Смотреть фильмы: </p>
          <ul>
            <li>Бьярке Ингельс — The infinite happiness (2015).</li>
            <li>Фильм о Луисе Кане — «Мой Архитектор. Путешествие сына».</li>
            <li>Фильм о Юлиусе Шульмане — «Визуальная акустика».</li>
            <li>Имз — Архитектор и художник.</li>
            <li>Сериал от Apple «Home»</li>
          </ul>
          <p> Тренировать свой вкус, изучая такие журналы:
          <ul>
            <li>Apartamento.</li>
            <li>Openhouse.</li>
            <li>032c.</li>
            <li>«A» magazine.</li>
            <li>NUMERO (немецкий).</li>
            <li>Kinfolk.</li>
            <li>Masses.</li>
            <li>Kaleidoscope</li>
          </ul>
          </p>
        </div>
      </div>
    </div><!-- //item -->

  </div>
</section>


<?php
get_footer();
