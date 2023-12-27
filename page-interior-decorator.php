<?php
/*
Template name: Шаблон: Декоратор интерьера
*/
get_header();
?>

<section class="hero hero-interior">
  <div class="hero__h1 jbm js-slide-bot">
    За 6 месяцев поможем тебе стать <br>
    <b>успешным декоратором интерьера <br>
      </b> и&nbsp;изменить свою жизнь <br>
     до&nbsp;неузнаваемости
  </div>
  <div class="hero__videowrap js-slide-bot">
    <div class="hero__videobox square">
      <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
        <source src="<?= imgs(); ?>/interior-decorator/b1-video.mp4">
      </video>
    </div>
    <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
      Стать <br>декоратором <br>интерьера
    </a>
  </div>
</section>



<div class="disint2">
  <div class="container">
    <div class="title">и не важно:</div>
    <div class="disint2__grid grid3 disint2__grid--nobotline">
      <div class="grid-item disint2__item">
        <div class="disint2__picwrap">
          <img src="<?= imgs(); ?>/dizayner-interyera/b2-1.webp" alt="" class="js-slide-opac">
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
          <img src="<?= imgs(); ?>/dizayner-interyera/b2-2.webp" alt="" class="js-slide-opac">
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
          <img src="<?= imgs(); ?>/dizayner-interyera/b2-3.webp" alt="" class="js-slide-opac">
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




<section class="decorator3">
  <div class="container">
    <div class="decorator3__wrap flexi">
      <div class="decorator3__left">
        <h2 class="title">Чем занимается декоратор интерьера?</h2>
        <p>Декоратор интерьера преобразует пространство без ремонтно-строительных работ и перепланировок при помощи средств декора: текстиля, света, цвета, фактур и текстур, арт-объектов и предметов мебели. </p>
        <p>Получив профессию декоратора интерьера, вы сможете оформлять частные и общественные интерьеры для клиентов, а также преобразить интерьер своего дома или квартиры самостоятельно с минимальными затратами.</p>
      </div>
      <div class="decorator3__right">
        <img src="<?= imgs(); ?>/interior-decorator/decorator3-img.webp" alt="" class="decorator3__picture">
      </div>
    </div>
  </div>
</section>



<section class="iphone disint-iphone">
  <div class="container">
    <h2 class="title js-slide-bot">
      Мы создали <i class="title-dot">i</i>Phone на рынке <br><b>обучения декору интерьера</b>
    </h2>
    <div class="iphone__wrap flexi">
      <aside class="iphone__right">
        <img data-src="<?= imgs(); ?>/dizayner-interyera/b3-iphone-bg.webp" alt="" class="iphone__mock lazy">
        <img src="<?= imgs(); ?>/dizayner-interyera/b3-iphone.svg" alt="" class="iphone__overmock">
        <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
          <source src="<?= imgs(); ?>/dizayner-interyera/b3-iphone.mp4">
        </video>
      </aside>
      <div class="iphone__grid">
          <div class="iphone__prop">
              <img data-src="<?= imgs(); ?>/psychology/stack_diploma_retina.png" alt=""
                   class="iphone__propicon lazy js-slide-opac">
              <div class="iphone__proptitle">Вы получите дипломы</div>
              <div>
                  <ul class="landing__list">
                      <li>Диплом о проф. переподготовке</li>
                      <li>Международный <b>MBA</b> диплом</li>
                      <li>Международный сертификат <a class="landing__link"
                                                      href="https://cpduk.co.uk/"><b>CPD</b></a></li>
                  </ul>
              </div>
          </div>
        <div class="iphone__prop">
          <img data-src="<?= imgs(); ?>/dizayner-interyera/b3-2.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Занятия в мини-группах</div>
          <p>Под руководством наставника, который выстроит индивидуальную траекторию для каждого студента, ответит на вопросы и напомнит о занятиях</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__propicon iphone__counter jbm flexi">100+</div>
          <div class="iphone__proptitle">Часов практики</div>
          <p>Семинары и практические занятия под руководством практикующих декораторов с опытом от 10 лет</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= imgs(); ?>/interior-decorator/b3-4.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">ТОП-преподаватели</div>
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
            <img data-src="<?= imgs(); ?>/interior-decorator/b5-1.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Научиться составлять <br>функциональные и эстетически <br>привлекательные помещения
            <small class="dreamsltitle__min">и хорошо зарабатывать</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= imgs(); ?>/interior-decorator/b5-2.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Работать на себя и ни от кого не&nbsp;зависеть
          </div>
        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?= imgs(); ?>/interior-decorator/b5-3.webp" alt="" class="lazy">
          </div>
          <div class="dreamsltitle">
            Преобразить собственную <br>квартиру
          </div>
        </div>
        <div class="dreams__item  dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img data-src="<?= imgs(); ?>/dizayner-interyera/b5-4.svg" alt="" class="lazy js-slide-opac">
            <img src="<?= imgs(); ?>/dizayner-interyera/b5-heart.svg" alt="" class="dreams__heart">
          </div>
          <div class="dreamsltitle">
            Заниматься делом, которое приносит <br>не только доход но и удовольствие
            <small class="dreamsltitle__min">и раскрыть свой творческий потенциал</small>
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?= imgs(); ?>/interior-decorator/b5-5.jpg" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Получить новую высокооплачиваемую <br>профессию
          </div>
        </div>
        <div class="dreams__item  dreams__item--border">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?= imgs(); ?>/interior-decorator/b5-6.webp" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Изменить качество <br>своей жизни
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //dreams -->


<section class="psy6 decorator6">
  <div class="container">
    <h2 class="title">
      спрос на <b>квалифицированных <br>
        декораторов интерьера </b><br>
      постоянно растёт
    </h2>
    <div class="psy6__wrap">
      <div class="psy6__item js-slide-interval">
        <img src="<?= imgs(); ?>/interior-decorator/b6-1.webp" alt="" class="psy6__icon psy6__icon--wide">
        <div class="psy6__text">
          <b>73,8 млрд. руб</b> составил общий объём рынка интерьерного дизайна и декора в&nbsp;России, согласно исследованию Союза Дизайнеров в России
        </div>
      </div>
      <div class="psy6__item js-slide-interval">
        <img src="<?= imgs(); ?>/interior-decorator/b6-2.svg" alt="" class="psy6__icon">
        <div class="psy6__text">
          Декоратор может работать на себя и&nbsp;зарабатывать <b>от 100-150 000 руб.</b>
          Или может работать в компании и&nbsp;зарабатывать <b>до 200 000 руб.</b>
        </div>
      </div>
      <div class="psy6__item js-slide-interval">
        <img src="<?= imgs(); ?>/interior-decorator/b6-3.webp" alt="" class="psy6__icon">
        <div class="psy6__text">
          <b>На 54% вырос</b> спрос на текстильные изделия и предметы искусства. Вы узнаете, как декораторы на этом дополнительно зарабатывают.
        </div>
      </div>
    </div>
  </div>
</section><!-- //psy6 -->



<section class="reviewsslider js-review-slider decorator7">
  <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
  <div class="reviewsslider__wrap">
    <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <div class="reviewsslider__cont js-slide-bot">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 6, 1) as $key => $videoNum) : ?>
            <div class="swiper-slide">
              <a href="<?= imgs(); ?>/dizayner-interyera/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
                <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="reviewsslider__screen square__img lazy">
                  <source data-src="<?= imgs(); ?>/dizayner-interyera/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
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


<section class="mentors disint-mentors">
  <div class="container">
    <h2 class="title">Ты будешь учиться <span>у&nbsp;</span><b>10+ ТОП-<br class="mobbr">специалистов</b> <span>со
        всей страны</span></h2>
    <div class="mentorsfeat">
      <div class="mentorsfeat__item">
        <img src="<?= imgs(); ?>/dizayner-interyera/b7-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы потратили полгода и&nbsp;миллионы рублей</div>
        <div class="mentorsfeat__text">
          чтобы собрать их всех <br>в 1 курсе
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?= imgs(); ?>/dizayner-interyera/b7-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
        <div class="mentorsfeat__text">
          у которых календари расписаны <br>на полгода вперед
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?= imgs(); ?>/dizayner-interyera/b7-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
        <div class="mentorsfeat__text">
          чтобы ты мог учиться у авторитетных <br>специалистов
        </div>
      </div>
    </div>

    <?php get_template_part('inc/mentors-block'); ?>
  </div>
</section><!-- //mentors -->




<section class="features decorator9">
  <div class="container">
    <h2 class="title">Тебя ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?= imgs(); ?>/interior-decorator/b8-video.mp4">
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
            <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-1.jpg" alt="" class="lazy js-slide-opac">
            <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-2.jpg" alt="" class="lazy js-slide-opac">
            <p>Студенты обучаются <b>современному программному обеспечению</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-3.jpg" alt="" class="lazy js-slide-opac">
            <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
          </div>
          <div class="features__item">
            <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-4.webp" alt="" class="lazy js-slide-opac">
            <p>Более <b>150 дополнительных материалов</b></p>
          </div>
        </div>

        <div class="psy11__gridwrap">
          <div class="grid-mob-scroll">
            <div class="psy11__grid">
              <div class="psy11__item psy11__item--wide">
                <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-1.jpg" alt="" class="lazy js-slide-opac">
                <p>Программа соответствует <br><b>профессиональным стандартам</b></p>
              </div>
              <div class="psy11__item">
                <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-2.jpg" alt="" class="lazy js-slide-opac">
                <p>Студенты обучаются <b>современному программному обеспечению</b></p>
              </div>
              <div class="psy11__item">
                <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-3.jpg" alt="" class="lazy js-slide-opac">
                <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
              </div>
              <div class="psy11__item">
                <img data-src="<?= imgs(); ?>/dizayner-interyera/b8-4.webp" alt="" class="lazy js-slide-opac">
                <p>В курс входит множество дополнительных материалов (примеры, шаблоны, схемы)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //disint8 -->



<section class="guideform disint-guideform decorator-guideform">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot">
      <span>Получите гайд</span>
      <span>по профессии</span>
      <span><b>Декоратор интерьера</b></span>
      <img src="<?= imgs(); ?>/interior-decorator/b12-catalog.webp" alt="">
    </h3>
    <?php get_template_part('inc/leadform', null, [
      'buttonTxt' => 'Получить гайд',
      'bg' => '#ffda6b',
    ]); ?>
  </div>
</section><!-- //disint-guideform -->



<section class="features disint13">
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
            <img src="<?= imgs(); ?>/dizayner-interyera/b13-1.jpg" alt="" class="js-slide-opac">
            <p><b>Уникальный</b> формат <br>обучения</p>
          </div>
          <div class="features__item">
            <img src="<?= imgs(); ?>/dizayner-interyera/b13-2.jpg" alt="" class="js-slide-opac">
            <p>Участники группы <br><b>мотивируют и помогают</b><br> друг другу</p>
          </div>
          <div class="features__item">
            <img src="<?= imgs(); ?>/dizayner-interyera/b13-3.jpg" alt="" class="js-slide-opac">
            <p>Студенты растут <b>в среде <br>единомышленников</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //sex15 -->




<section class="disint-programs decorator-programs">
  <div class="container">
    <h2 class="title">
      <b>ты научишся работать <br>в 2 программах</b> для декора<br> интерьера
    </h2>
    <div class="disint-programs__sub">А также уроки <br>скетчинга <br>от руки</div>
    <div class="disint10__line"></div>
    <div class="disint-programs__linegrid grid2">
      <div class="grid-item ">
        <div class="disint-program">
          <img src="<?= imgs(); ?>/dizayner-interyera/b14-1.webp" alt="" class="disint-program__logo js-slide-opac">
          <div class="disint-program__title">Рабочие чертежи</div>
        </div>
      </div>
      <div class="grid-item">
        <div class="disint-program">
          <img src="<?= imgs(); ?>/dizayner-interyera/b14-2.webp" alt="" class="disint-program__logo js-slide-opac">
          <div class="disint-program__title">Коллаж</div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //disint-programs -->




<section class="timeslot timeslot--disint">
  <div class="container">
    <h2 class="title">
      Научим <b>рекламировать свои <br>
        услуги</b> и <b>привлекать <br>клиентов</b>
    </h2>
    <div class="timeslot__box">
      <img src="<?= imgs(); ?>/psychology/b19-bg.svg" alt="" class="timeslot__bg">
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
          <img src="<?= imgs(); ?>/psychology/b19-ava.png" alt="" class="timeslot__ava js-slide-opac">
        </div>
        <img src="<?= imgs(); ?>/psychology/b19-matrix.png" alt="" class="timeslot__matrix js-slide-opac">
      </div>
    </div>
    <!-- <div class="jbm timeslot__bot">с 3 месяца</div> -->
  </div>
</section><!-- //timeslot -->



<section class="diplomblock diplomblock--disint">
    <div class="container diploma__container">
        <h2 class="diploma__header"><b class="diploma__decorator">Каждый выпускник</b> <br> курса получает</h2>
        <div class="diploma__block diploma__layout--grey">
            <div class="diploma__info"><p class="diploma__num diploma__black--back">01</p>
                <h3 class="diploma__subheader diploma__decorator">Диплом о <br> профессиональной переподготовке <br>
                    <span
                            class="diploma__black">установленного <br> образца РФ</span></h3>
                <div class="diploma__text">Это официальный документ, <span class="diploma__grey">который <br> дает вам право осуществлять <br> профессиональную деятельность</span>
                </div>
            </div>
            <div class="diploma__pic"><img
                        src="<?= imgs(); ?>/interior-decorator/dip-decor.jpg" alt="diploma" class="diploma__img"
                        width="540" height="380"></div>

        </div>
        <div class="diploma__block diploma__layout--black">
            <div class="diploma__info"><p class="diploma__decorator--back diploma__num ">02</p>
                <h3 class="diploma__subheader diploma__white">MBA Диплом</h3>
                <div class="diploma__text diploma__grey">Open European Academy (г. Прага) в <br> сотрудничестве с
                    Европейской Ассоциацией ВУЗов
                    <br> и преподавателей высшей школы HiSTES, <span class="diploma__white">дающий <br> право ведения деятельности в Евросоюзе и <br> признаваемый во всем мире.</span>
                </div>

                <div class="diploma__subtext">
                    <span class="diploma__white diploma__mark ">А также 2 международных сертификата:</span>
                    <ul class="diploma__list">
                        <li class="diploma__item diploma__grey">от аккредитующего центра Великобритании <a
                                    href="https://cpduk.co.uk/"
                                    class="diploma__white diploma__link">CPD</a></li>
                    </ul>
                </div>
            </div>
            <div class="diploma__pic"><img
                        src="<?= imgs(); ?>/psychology/mba.png"
                        alt="mba" class="diploma__img"
                        width="540" height="380"></div>
        </div>
    </div>

</section><!-- //diplomblock -->






<section class="features psy16 decorator-life">
  <div class="container">
    <h2 class="title">Тебя ждет <b>яркая <br>студенческая жизнь</b></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <img src="<?= imgs(); ?>/interior-decorator/collage.png" alt="" class="psy16__collage">
      </div>
      <div class="features__right">
        <div class="features__grid">
          <div class="features__item">
            <img src="<?= imgs(); ?>/psychology/b16-3.png" alt="" class="js-slide-opac">
            <div class="features__subtitle">Очная встреча</div>
            <p>в Москве включена в&nbsp;стоимость обучения</p>
          </div>
          <div class="features__item">
            <picture class="js-slide-opac iconmobauto">
              <source media="(min-width: 768px)" srcset="<?= imgs(); ?>/psychology/b16-2.jpg">
              <img src="<?= imgs(); ?>/psychology/b16-2m.png" alt="">
            </picture>
            <div class="features__subtitle">Киноклуб</div>
            <p>Обсуждаем фильмы в&nbsp;контексте дизайна интерьера</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!-- //psy16 -->





<section class="stepform stepform--decorator">
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
      'bg' => '#ffda6b',
      'buttonTxt' => 'Сделать выбор',
    ]); ?>
  </div>
</section><!-- //stepform -->




<div class="disint21">
  <section class="statistic container">
    <h2 class="title">Поговорим о цифрах</h2>
    <div class="statistic__grid">
      <dl class="statistic__item statistic__item--verbg">
        <dt>8<img src="<?= imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
        <dd>Топ <br>преподавателей</dd>
      </dl>
      <dl class="statistic__item statistic__item--verborder">
        <dt class="js-slide-opac">6</dt>
        <dd>Месяцев <br>обучения</dd>
      </dl>
      <dl class="statistic__item statistic__item--col2">
        <dt class="js-slide-opac">550+</dt>
        <dd>Часов воркшопов <br>и мастермайндов</dd>
      </dl>
      <dl class="statistic__item statistic__item--col2">
        <dt class="js-slide-opac">500 ЧАСОВ</dt>
        <dd>Интересных и насыщенных <br>занятий</dd>
      </dl>
      <dl class="statistic__item statistic__item--short">
        <dt class="js-slide-opac">30</dt>
        <dd>Документов, <br>шаблонов и схем</dd>
      </dl>
      <dl class="statistic__item  statistic__item--veryellow">
        <dt class="js-slide-opac" style="color:#be2b00;">12/7</dt>
        <dd>Поддержка студентов во время обучения</dd>
      </dl>
    </div>
  </section>
</div>




<section class="dreams disint22 disint5">
  <div class="container">
    <h2 class="title">
    <b>Ты научишься всему <br>необходимому для старта</b> <br>и развития карьеры <br>в декорировании интерьера</b>
    </h2>
    <div class="grid-mob-scroll">
      <div class="dreams__grid">
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?= imgs(); ?>/interior-decorator/b22-1.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Применять основы <br>колористики и композиции
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?= imgs(); ?>/interior-decorator/b22-2.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Ориентироваться в стилях <br>интерьера
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?= imgs(); ?>/interior-decorator/b22-3.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Работать с формой, текстурой <br>и фактурой
          </div>
        </div>
        <div class="dreams__item dreams__item--nobg">
          <div class="dreams__iconwrap">
            <img src="<?= imgs(); ?>/interior-decorator/b22-4.webp" alt="" class="js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            Составлять профессиональные <br>коллажи и рисовать скетчи
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?= imgs(); ?>/interior-decorator/b22-5.webp" alt="" class="js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            Подбирать отделочные материалы, <br>мебель, светильники, текстиль <br>для интерьера
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap radius0">
            <img src="<?= imgs(); ?>/interior-decorator/b22-6.png" alt="" class="js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            Подбирать аксессуары <br>и произведения искусства <br>для проекта
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap radius0">
            <img src="<?= imgs(); ?>/interior-decorator/b22-7.png" alt="" class="js-slide-opac radius0">
          </div>
          <div class="dreamsltitle">
            Соединять функцию и эстетику <br>интерьера через эргономику <br>и стилистический выбор
          </div>
        </div>
        <div class="dreams__item dreams__item--complex">
          <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
          <div class="dreams__iconwrap">
            <img src="<?= imgs(); ?>/interior-decorator/b22-8.webp" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Планировать проект с учетом <br>пожеланий заказчика
          </div>
        </div>
      </div><!-- //dreams__grid -->
    </div>
  </div>
</section><!-- //disint22 -->



<?php if(get_field('is-show_quiz')): ?>
<section class="quizlink quizlink--decorator">
  <div class="container">
    <h2 class="title">Подходит ли вам профессия <br><b>декоратор интерьера?</b></h2>
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
      <div class="priceblock__price jbm"><span>8333</span><span>₽/МЕС</span></div>
      <div class="priceblock__descr">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
    </div>
    <div class="priceblock__greenprice jbm">
      <span>От</span> <span class="jsPPSumm">5000</span> <span>₽/МЕС</span>
      <small>Скидка 40% &nbsp;<b>до <?=getTomorow(); ?></b></small>
    </div>
    <div class="priceblock__mobdescr">
      <p>Беспроцентная рассрочка на 24 месяца.</p>
      <p>Первый платеж через 2 месяца.</p>
    </div>
    <?php get_template_part('inc/leadform', null, [
      'isPromoForm' => true,
      'bg' => '#ffda6b',
      'showTopTxt' => true,
    ]); ?>
  </div>
</section><!-- //priceblock -->





<section class="faqblock">
  <h2 class="title">Часто задаваемые вопросы</h2>
  <div class="faqblock__wrap container">
    <div class="progrmsummary__item" data-hidewrap="faq1">
      <div class="progrmsummary__head" data-hideopen="faq1">
        <strong>У меня получится, если никогда не занимался декорированием интерьеров?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq1">
        <div class="progrmsummary__content">
          <p>Если своевременно смотреть лекции и выполнять практические задания, вы сможете достигнуть результата без специальных базовых знаний. Во всём помогут опытные кураторы с опытом работы более 10 лет. </p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq2">
      <div class="progrmsummary__head" data-hideopen="faq2">
        <strong>Сколько времени нужно уделять учебе?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq2">
        <div class="progrmsummary__content">
          <p>Система обучения создана с распределением нагрузки по неделям, чтобы можно было изучить теорию и отработать знания на практике. Вы сможете изучать материалы курса в удобном для вас режиме, совмещать обучение с работой и личной жизнью. </p>
          <p>Все видео будут доступны и по окончании курса, и вы сможете освежить свои знания в любой момент. </p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq3">
      <div class="progrmsummary__head" data-hideopen="faq3">
        <strong>Сколько часов потребуется в неделю?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq3">
        <div class="progrmsummary__content">
          <p>В среднем наши студенты занимаются от 5 до 10 часов в неделю. </p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq4">
      <div class="progrmsummary__head" data-hideopen="faq4">
        <strong>Как я смогу получить обратную связь по заданиям?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq4">
        <div class="progrmsummary__content">
          <p>Наша программа отличается большим числом практических занятий, плотным взаимодействием наставника и студента и оперативной поддержкой в чатах.</p>
          <p> У вас никогда не возникнет ощущения, что про вас "забыли". Вы будете чувствовать постоянную заботу и поддержку со стороны наставников.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq5">
      <div class="progrmsummary__head" data-hideopen="faq5">
        <strong>Есть ли у вас рассрочка по оплате?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq5">
        <div class="progrmsummary__content">
          <p>Да, вы можете купить курс в рассрочку и спланировать свой бюджет, разбив всю сумму на небольшие ежемесячные платежи.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq6">
      <div class="progrmsummary__head" data-hideopen="faq6">
        <strong>Хочу декорировать интерьер своей квартиры, получится после курса?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq6">
        <div class="progrmsummary__content">
          <p>Да, вы сможете начать работать над дизайном своей квартиры или дома уже во время обучения.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq7">
      <div class="progrmsummary__head" data-hideopen="faq7">
        <strong>Смогу ли я получить работу после прохождения вашего курса?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq7">
        <div class="progrmsummary__content">
          <p>Лучшие студенты приглашаются на стажировку в дизайнерские студии наших спикеров.</p>
          <p>Начиная со 2-го месяца обучения с группой начинаем работать отдельный куратор - специалист по личному бренду и привлечение клиентов: всё организовано так, чтобы к концу обучения вы не только обладали навыками и портфолио, но и имели реальные заказы клиентов.</p>
          <p>Мы консультируем своих выпускников по вопросам оформления портфолио, составлению резюме и поиску работы.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq18">
      <div class="progrmsummary__head" data-hideopen="faq18">
        <strong>Что если мне не понравится?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq18">
        <div class="progrmsummary__content">
          <p>Мы уверены в качестве нашей образовательной программы, поэтому если курс вам не понравится, мы сделаем
            возврат средств пропорционально пройденным материалам, согласно условиям публичной оферты.</p>
        </div>
      </div>
    </div><!-- //item -->

  </div>
</section>


<?php
get_footer();
