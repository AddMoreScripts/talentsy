<?php
/*
Template name: Шаблон: Профессия семейный психолог
*/
get_header();
?>


<section class="hero hero--family">
    <h2 class="hero__small">Курсы семейная психология</h2>
    <div class="hero__h1 jbm">
      За 1,5 года <img src="<?=imgs(); ?>/psychology-family/b1-sm.webp" alt="" class="hero-mob-img"> сделаем <img src="<?=imgs(); ?>/psychology-family/b1-sm.webp" alt=""> из вас <br>
      <b>успешного семейного психолога-<br>
        консультанта</b> и&nbsp;поможем запустить<br>
      свою частную практику
    </div>
    <div class="hero__videowrap ">
      <div class="hero__videobox square">
        <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
          <source src="<?=imgs(); ?>/psychology-family/b1-video.mp4">
        </video>
      </div>
      <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
        Стать<br>
        психологом-<br>
        консультатном
      </a>
    </div>
  </section>


  <section class="iphone">
    <div class="container">
      <h2 class="title js-slide-bot">
        Мы создали <span style="white-space: nowrap;"><i class="title-dot">i</i>Phone</span> на рынке <br>
        обучения психологии
      </h2>
      <div class="iphone__wrap flexi">
        <aside class="iphone__right">
          <img data-src="<?=imgs(); ?>/psychology/b2-mock.png" alt="" class="iphone__mock lazy">
          <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
            <source src="<?=imgs(); ?>/psychology/b2-vid.mp4">
          </video>
        </aside>
        <div class="iphone__grid">
          <div class="iphone__prop">
            <img data-src="<?=imgs(); ?>/psychology/b2-1.png" alt="" class="iphone__propicon lazy js-slide-opac">
            <div class="iphone__proptitle">Диплом о проф. переподготовке</div>
            <p>А так же два международных диплома, которые позволят заниматься частной практикой после прохождения
              обучения</p>
          </div>
          <div class="iphone__prop">
            <img data-src="<?=imgs(); ?>/psychology/b2-2.png" alt="" class="iphone__propicon lazy js-slide-opac">
            <div class="iphone__proptitle">Занятия в мини-группах</div>
            <p>Под руководством личного наставника, который выстроит комфортное расписание и напомнит о занятиях</p>
          </div>
          <div class="iphone__prop">
            <div class="iphone__propicon iphone__propicon--text js-slide-opac jbm">1700</div>
            <div class="iphone__proptitle">Часов обучения</div>
            <p>1700 академических часов, 200&nbsp;видеолекций, 300 часов семинарских и практических занятий за 50
              недель обучения</p>
          </div>
          <div class="iphone__prop">
            <img data-src="<?=imgs(); ?>/psychology-family/b2-4.webp" alt="" class="iphone__propicon lazy js-slide-opac">
            <div class="iphone__proptitle">Лучшие преподаватели</div>
            <p>Востребованные и практикующие психологи, доктора и кандидаты наук — наши преподаватели</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="programfromlead">
    <div class="container">
      <h2 class="title">
        Получить полную<br> <b>программу курса</b>
      </h2>
      <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить программу']); ?>
    </div>
  </section><!-- //programfromlead -->


  <section class="dreams">
    <div class="container">
      <h2 class="title">Мы знаем, о чем вы мечтаете, <br><b>и поможем вам этого добиться</b></h2>
      <div class="grid-mob-scroll">
        <div class="dreams__grid">
          <div class="dreams__item dreams__item--border">
            <div class="dreams__iconwrap">
              <img data-src="<?=imgs(); ?>/psychology-family/b4-1.webp" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Освоить новую профессию без <br>базового образования психолога
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img data-src="<?=imgs(); ?>/psychology-family/b4-2.webp" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Открыть свою частную практику
            </div>
          </div>
          <div class="dreams__item dreams__item--bg">
            <div class="dreams__iconwrap">
              <img data-src="<?=imgs(); ?>/psychology-family/b4-3.webp" alt="" class="lazy">
            </div>
            <div class="dreamsltitle">
              Помогать людям <br>профессионально
            </div>
          </div>
          <div class="dreams__item  dreams__item--light">
            <div class="dreams__iconwrap">
              <img data-src="<?=imgs(); ?>/psychology-family/b4-4.svg" alt="" class="lazy js-slide-opac">
              <!-- <img src="<?=imgs(); ?>/psychology-kid/b4-4-2.svg" alt="" class="dreams__heart"> -->
            </div>
            <div class="dreamsltitle">
              Заниматься делом, которое приносит <br>не только доход, но и удовольствие
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img data-src="<?=imgs(); ?>/psychology-family/b4-5.webp" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Работать на себя и ни от кого <br>не зависеть
            </div>
          </div>
          <div class="dreams__item  dreams__item--border dreams__item--light">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img data-src="<?=imgs(); ?>/psychology-family/b4-6.webp" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Изменить качество <br>своей жизни
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //dreams -->



  <section class="reviewsslider js-review-slider">
    <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
    <div class="reviewsslider__wrap">
      <button class="ctrl ctrl--prev"><img src="<?=imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
      <button class="ctrl ctrl--next"><img src="<?=imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
      <div class="reviewsslider__cont js-slide-bot">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach (range(1, 17, 1) as $key => $videoNum) : ?>
              <div class="swiper-slide">
                <a href="<?=imgs(); ?>/psychology/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
                  <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="reviewsslider__screen square__img lazy">
                    <source data-src="<?=imgs(); ?>/psychology/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
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



  <section class="psy6">
    <div class="container">
      <h2 class="title">
        Последние два года<b> растёт<br>
        количество семейных пар, </b><br>
        которые обращаются <br>к психологу
      </h2>
      <div class="psy6__wrap">
        <div class="psy6__item js-slide-interval">
          <div class="psy6__complex jbm">
            <span>135%</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 18">
              <path stroke="#27B783" stroke-linecap="round" stroke-linejoin="round" d="M.75 16.917l9.5-9.5 6.333 6.334L29.25 1.084" />
              <path stroke="#000" stroke-linecap="round" d="M29.25 5.834v-4.75H24.5" />
            </svg>
          </div>
          <div class="psy6__text">
          На <b>135% выросло</b> за последние два года количество пар, которые обращаются к семейному психологу (этому способствуют ситуации в мире: самоизоляция, кризис)
          </div>
        </div>
        <div class="psy6__item js-slide-interval">
          <img src="<?=imgs(); ?>/psychology/b6-2.svg" alt="" class="psy6__icon">
          <div class="psy6__text">
            Семейные проблемы входят <b>в топ-3</b> проблем, с которыми люди обращаются к психологу
          </div>
        </div>
        <div class="psy6__item js-slide-interval">
          <img src="<?=imgs(); ?>/psychology/b6-3.png" alt="" class="psy6__icon">
          <div class="psy6__text">
            <b>Более 150</b> вакансий семейного психолога ежедневно появляется на сайте hh.ru
          </div>
        </div>
      </div>
    </div>
  </section><!-- //psy6 -->




  <section class="psy7 bg-white">
    <div class="container">
      <h2 class="title">
        Наш курс — <b> полное <br>погружение</b> в профессию
      </h2>
      <div class="psy7__wrap">
        <div class="psy7__item js-slide-interval">
          <img src="<?=imgs(); ?>/psychology-family/b8-1.svg" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кто мечтает о профессии психолога с нуля</div>
          <div class="psy7__text">
            Всегда хотели зарабатывать любимым и благородным делом. Люди тянутся к вам за советами, у вас богатый жизненный опыт, но не хватает знаний
          </div>
        </div>
        <div class="psy7__item js-slide-interval">
          <img src="<?=imgs(); ?>/psychology-family/b8-2.svg" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кто только начинает путь психолога</div>
          <div class="psy7__text">
            Ещё студент или выпускник, но чувствуете неуверенность и страх перед клиентами. Хотели бы наработать первые часы практики в комфортном режиме вместе с опытными наставниками
          </div>
        </div>
        <div class="psy7__item js-slide-interval">
          <img src="<?=imgs(); ?>/psychology-family/b8-3.svg" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кто хочет освоить психологию для себя</div>
          <div class="psy7__text">
            Разобраться в психических процессах, практиках психологов-консультантов. Гармонизировать свою жизнь, улучшить взаимоотношения с близкими и коллегами
          </div>
        </div>
        <div class="psy7__item js-slide-interval">
          <img src="<?=imgs(); ?>/psychology-family/b8-4.svg" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кому нужен диплом для работы</div>
          <div class="psy7__text">
            Вы уже работаете и хотите подкрепить свой статус официальным документом государственного образца — дипломом психолога-консультанта (А так же два международных сертификата с правом консультирования в сфере психологии)
          </div>
        </div>
      </div>
    </div>
  </section><!-- //psy6 -->



  <section class="psy8 psy8--kids">
    <div class="container">
      <h2 class="title">Мы готовим квалифицированных <br><b>психологов-консультантов</b></h2>
      <img data-src="<?=imgs(); ?>/psychology/b8-bg.png" alt="" class="psy8__bg lazy" style="aspect-ratio: 1680 / 739;">
      <div class="psy8__post title js-slide-bot">
        с нуля за <b>18 месяцев</b>
      </div>
    </div>
  </section>



  <section class="mentors">
    <div class="container">
      <h2 class="title">вы будете учиться <span>у&nbsp;</span><b>15 лучших <br class="mobbr">специалистов</b> <span>со
          всей страны</span></h2>
      <div class="mentorsfeat">
        <div class="mentorsfeat__item">
          <img src="<?=imgs(); ?>/psychology/b9-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
          <div class="mentorsfeat__title">Мы потратили полгода и&nbsp;миллионы рублей</div>
          <div class="mentorsfeat__text">
            чтобы собрать их всех <br>в 1 курсе
          </div>
        </div>
        <div class="mentorsfeat__item">
          <img src="<?=imgs(); ?>/psychology/b9-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
          <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
          <div class="mentorsfeat__text">
            у которых календари расписаны <br>на полгода вперед
          </div>
        </div>
        <div class="mentorsfeat__item">
          <img src="<?=imgs(); ?>/psychology/b9-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
          <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
          <div class="mentorsfeat__text">
            чтобы ты мог учиться у лучших <br>из лучших
          </div>
        </div>
      </div>

      <?php get_template_part('inc/mentors-block'); ?>
    </div>
  </section><!-- //mentors -->



  <section class="regalii">
    <div class="container">
      <h2 class="title"><b>Преподаватели</b> — члены <br>профессиональных объединений <br>и ассоциаций</h2>
      <div class="regalii__grid">
        <div class="regalii__item">
          <img data-src="<?=imgs(); ?>/psychology/b10-1.png" alt="" class="lazy js-slide-opac">
          <div class="regalii__title">Российское психологическое общество</div>
        </div>
        <div class="regalii__item">
          <img data-src="<?=imgs(); ?>/psychology/b10-2.png" alt="" class="lazy js-slide-opac">
          <div class="regalii__title">Российская психотерапевти-<br>ческая лига</div>
        </div>
        <div class="regalii__item">
          <img data-src="<?=imgs(); ?>/psychology/b10-3.png" alt="" class="lazy js-slide-opac">
          <div class="regalii__title">Американская психологическая ассоциация</div>
        </div>
        <div class="regalii__item">
          <img data-src="<?=imgs(); ?>/psychology/b10-4.png" alt="" class="lazy js-slide-opac">
          <div class="regalii__title">Ассоциация <br>сексологов</div>
        </div>
      </div>
    </div>
  </section>



  <section class="stepform">
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
      <?php get_template_part('inc/leadform', null, []); ?>
    </div>
  </section><!-- //stepform -->



  <section class="features psy11">
    <div class="container">
      <h2 class="title">Вас ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
      <div class="features__wrap">
        <div class="features__left js-slide-bot">
          <video preload="auto" playsinline autoplay loop muted class="lazy">
            <source data-src="<?=imgs(); ?>/psychology/b12-video.mp4">
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
              <img data-src="<?=imgs(); ?>/psychology/b12-1.png" alt="" class="lazy js-slide-opac">
              <p>Программа соответствует <b>профессиональным стандартам</b></p>
            </div>
            <div class="features__item">
              <img data-src="<?=imgs(); ?>/psychology/b12-2.png" alt="" class="lazy js-slide-opac">
              <p><b>Практика</b> начнется с первых дней обучения</p>
            </div>
            <div class="features__item">
              <img data-src="<?=imgs(); ?>/psychology/b12-3.png" alt="" class="lazy js-slide-opac">
              <p><b>Современные</b> методики обучения</p>
            </div>
            <div class="features__item">
              <img data-src="<?=imgs(); ?>/psychology/b12-4.png" alt="" class="lazy js-slide-opac">
              <p>Более <b> 100 дополнительных материалов </b>, (примеры, шаблоны, схемы)</p>
            </div>
          </div>

          <div class="psy11__gridwrap">
            <div class="grid-mob-scroll">
              <div class="psy11__grid">
                <div class="psy11__item psy11__item--wide">
                  <img data-src="<?=imgs(); ?>/psychology/b12-1.png" alt="" class="lazy js-slide-opac">
                  <p class="features__mobmin">Программа разработана на основе ФГОС ВО 370301 «Психология», и&nbsp;соответствует профессиональным
                    стандартам</p>
                </div>
                <div class="psy11__item">
                  <img data-src="<?=imgs(); ?>/psychology/b12-2.png" alt="" class="lazy js-slide-opac">
                  <p>Практика <b>начнется с первых дней обучения</b></p>
                </div>
                <div class="psy11__item">
                  <img data-src="<?=imgs(); ?>/psychology/b12-3.png" alt="" class="lazy js-slide-opac">
                  <p>Современные <b>методики обучения</b></p>
                </div>
                <div class="psy11__item">
                  <img data-src="<?=imgs(); ?>/psychology/b12-4.png" alt="" class="lazy js-slide-opac">
                  <p>Более 100 дополнительных материалов</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section><!-- //psy11 -->



  <section class="progrmsummary container">
    <h2 class="title">Программа обучения</h2>
    <div class="progrmsummary__wrap">

      <?php get_template_part('inc/family-program'); ?>

    </div>
  </section><!-- //progrmsummary -->




  <section class="guideform">
    <div class="container">
      <h3 class="guideform__title title js-slide-bot">
        <span>Получите <b>гайд</b></span>
        <span>по профессии</span>
        <span><b>психолог-консультант</b></span>
        <img src="<?=imgs(); ?>/psychology-family/b15-cat.webp" alt="" class="psy-family-catalog">
      </h3>
      <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить гайд', 'bg' => '#fff']); ?>
    </div>
  </section><!-- //guideform -->






  <section class="features psy15">
    <div class="container">
      <h2 class="title">Вас ждут практические <br>занятия, в <b>мини-группах</b></h2>
      <div class="features__wrap">
        <div class="features__left js-slide-bot">
          <video preload="auto" playsinline autoplay loop muted class="lazy">
            <source data-src="<?=imgs(); ?>/psychology/b15-video.mp4">
          </video>
        </div>
        <div class="features__right">
          <div class="features__subtitle">
            В формате супервизий <br>
            и&nbsp;<br class="mobbr">тренингов <br>
            под&nbsp;руководством <br><br class="mobbr">
            практикующего психолога
          </div>
          <div class="features__grid">
            <div class="features__item">
              <img src="<?=imgs(); ?>/psychology/b15-1.png" alt="" class="js-slide-opac">
              <p>Каждый получит <br><b>достаточно внимания наставника</b></p>
            </div>
            <div class="features__item">
              <img src="<?=imgs(); ?>/psychology/b15-2.png" alt="" class="js-slide-opac">
              <p><b>Участники группы</b> мотивируют и помогают друг другу</p>
            </div>
            <div class="features__item">
              <img src="<?=imgs(); ?>/psychology/b15-3.png" alt="" class="js-slide-opac">
              <p>Студенты <b>растут в среде единомышленников</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //psy15 -->




  <section class="features psy16">
    <div class="container">
      <h2 class="title">Мы организовали <b>яркую <br>студенческую жизнь</b></h2>
      <div class="features__wrap">
        <div class="features__left js-slide-bot">
          <img src="<?=imgs(); ?>/psychology/b16-collage.jpg" alt="" class="psy16__collage">
        </div>
        <div class="features__right">
          <div class="features__grid">
            <div class="features__item">
              <picture class="js-slide-opac">
                <source media="(min-width: 768px)" srcset="<?=imgs(); ?>/psychology/b16-1.jpg">
                <img src="<?=imgs(); ?>/psychology/b16-1m.png" alt="">
              </picture>
              <div class="features__subtitle">Читальный зал</div>
              <p>Обсуждаем интересные <br>книги</p>
            </div>
            <div class="features__item">
              <picture class="js-slide-opac">
                <source media="(min-width: 768px)" srcset="<?=imgs(); ?>/psychology/b16-2.jpg">
                <img src="<?=imgs(); ?>/psychology/b16-2m.png" alt="">
              </picture>
              <div class="features__subtitle">Киноклуб</div>
              <p>Обсуждаем фильмы в&nbsp;контексте психологии</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //psy16 -->




  <section class="diplomblock">
    <div class="container">
      <h2 class="title">
        <b>Вы получаете диплом <br>установленного образца</b> <br>
        о профессиональной переподготовке
      </h2>
      <div class="diplomblock__sub js-slide-opac">А так же два международных сертификата с правом <br>консультирования в сфере психологии</div>

      <div class="swiper js-diplomblock-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?=imgs(); ?>/psychology-family/diplom-1.webp" alt="" class="diplomblock__sl-pic">
          </div>
          <div class="swiper-slide">
            <img src="<?=imgs(); ?>/psychology-family/diplom-2.webp" alt="" class="diplomblock__sl-pic">
          </div>
        </div>
        <button class="ctrl ctrl--prev"><img src="<?=imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
        <button class="ctrl ctrl--next"><img src="<?=imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
      </div>

      <div class="diplomblock__footer flexi">
        <p>
          Каждый выпускник курса может<br>
          <b>подтвердить свою<br>
            квалификацию</b> перед клиентами<br>
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
      <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить консультацию', 'bg' => '#fff']); ?>
    </div>
  </section><!-- //stepform -->





  <section class="timeslot">
    <div class="container">
      <h2 class="title">
        Научим <b>рекламировать свои <br>
          услуги</b> и <b>привлекать <br>клиентов</b>
      </h2>
      <div class="timeslot__box">
        <img src="<?=imgs(); ?>/psychology/b19-bg.svg" alt="" class="timeslot__bg">
        <div class="timeslot__over flexi">
          <div class="timeslot__text">
            <p>С каждой группой <br>работает отдельный <br>куратор-специалист <br>по привлечению клиентов</p>
            <small><span>начиная</span> с третьего месяца обучения</small>
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




  <section class="statistic container psy20">
    <h2 class="title">Поговорим о цифрах</h2>
    <div class="statistic__grid">
      <dl class="statistic__item statistic__item--verbg">
        <dt>15<img src="<?=imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
        <dd>Топ <br>преподавателей</dd>
      </dl>
      <dl class="statistic__item statistic__item--verborder">
        <dt class="js-slide-opac">18</dt>
        <dd>Месяцев <br>обучения</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">500+</dt>
        <dd>Часов работы с наставниками <br>и супервизорами</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">1700</dt>
        <dd>Часов интересных и насыщенных <br>занятий</dd>
      </dl>
      <dl class="statistic__item statistic__item--short">
        <dt class="js-slide-opac">3</dt>
        <dd>Дня практических <br>занятий в Москве</dd>
      </dl>
      <dl class="statistic__item  statistic__item--verbg">
        <dt class="js-slide-opac">12/7</dt>
        <dd>Поддержка студентов во время обучения</dd>
      </dl>
    </div>
  </section>




  <section class="dreams psy21">
    <div class="container">
      <h2 class="title">В результате обучения <br><b>вы сможете</b></h2>
      <div class="grid-mob-scroll">
        <div class="dreams__grid">
          <div class="dreams__item dreams__item--border">
            <div class="dreams__iconwrap">
              <img src="<?=imgs(); ?>/psychology-family/b22-1.webp" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Разбираться в&nbsp;себе и&nbsp;своих проблемах
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img src="<?=imgs(); ?>/psychology-family/b22-2.webp" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Начать свою частную практику
            </div>
          </div>
          <div class="dreams__item dreams__item--bg">
            <div class="dreams__iconwrap">
              <img src="<?=imgs(); ?>/psychology-family/b22-3.webp" alt="">
            </div>
            <div class="dreamsltitle dreamsltitle--gray">
              Понимать психологические механизмы функционирования семейных отношений и&nbsp;любовных отношений
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img src="<?=imgs(); ?>/psychology-family/b22-4.svg" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Иметь навыки психологической помощи при созависимых отношениях
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img src="<?=imgs(); ?>/psychology-family/b22-5.webp" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Выбирать метод и&nbsp;планировать программу психологической работы
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img src="<?=imgs(); ?>/psychology-family/b22-6.webp" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Проводить диагностику и&nbsp;выявлять проблемы в&nbsp;отношениях, их истоки, и&nbsp;ресурсы для их разрешения
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img src="<?=imgs(); ?>/psychology-family/b22-7.webp" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Выработать стиль проведения индивидуальной и&nbsp;групповой психологической консультации по&nbsp;проблемам отношений
            </div>
          </div>
          <div class="dreams__item dreams__item--border">
            <div class="dreams__iconwrap">
              <img src="<?=imgs(); ?>/psychology-family/b22-8.webp" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Подбирать стратегии работы с&nbsp;часто встречающимися запросами
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //dreams -->



  <?php if(get_field('is-show_quiz')): ?>
  <section class="quizlink">
    <div class="container">
      <h2 class="title">Подходит ли вам профессия <br><b>детский психолог-консультант?</b></h2>
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



  <section class="priceblock" id="offer">
    <div class="container">
      <h2 class="title">Стоимость обучения</h2>
      <div class="priceblock__row flexi">
        <div class="priceblock__price jbm"><span>15000</span><span>₽/МЕС</span></div>
        <div class="priceblock__descr">
          <p>Беспроцентная рассрочка на 24 месяца.</p>
          <p>Первый платеж через 2 месяца.</p>
        </div>
      </div>
      <div class="priceblock__greenprice jbm">
        <span>От</span> <span class="jsPPSumm">9000</span> <span>₽/МЕС</span>
        <small>Скидка 40% &nbsp;<b>до <?=getTomorow(); ?></b></small>
      </div>
      <div class="priceblock__mobdescr">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
      <?php get_template_part('inc/leadform', null, ['isPromoForm' => true, 'showTopTxt' => true]); ?>
    </div>
  </section><!-- //priceblock -->





  <section class="faqblock">
    <h2 class="title">Часто задаваемые вопросы</h2>
    <div class="faqblock__wrap container">
      <div class="progrmsummary__item" data-hidewrap="faq1">
        <div class="progrmsummary__head" data-hideopen="faq1">
          <strong>Какой график обучения? Получится ли совмещать учебу с работой?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq1">
          <div class="progrmsummary__content">
            <p>Безусловно, обучение новой профессии требует времени. Но мы организовали обучение так, чтобы вам было
              максимально удобно и просто. Уроки с теоретической информацией вы смотрите у себя в личном кабинете в
              удобное время. К этим материалам можно будет возвращаться неограниченно.</p>
            <p>Куратор будет с вами на связи, ответит на все вопросы и поможет в организации процесса обучения. За 1 год
              вы изучите 250 теоретических видеоуроков, отработаете материал на 150 интерактивных воркшопах, получите
              300 часов практики в онлайн-мастерской психологического консультирования.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq2">
        <div class="progrmsummary__head" data-hideopen="faq2">
          <strong>Подойдёт ли мне эта программа?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq2">
          <div class="progrmsummary__content">
            <p>Программа подойдёт вам не только для общего развития. Мы расскажем не только про саму профессию, но и про
              подходы и современные методы в работе. Вы научитесь правильно реагировать на разные запросы от своих
              клиентов.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq3">
        <div class="progrmsummary__head" data-hideopen="faq3">
          <strong>Я смогу общаться с преподавателями?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq3">
          <div class="progrmsummary__content">
            <p>Вы будете регулярно общаться с преподавателями на практических занятиях в группе и в чате, получать
              обратную связь по домашним заданиям и аттестации.</p>
            <p>Общения будет много — продуктивного и приятного, в среде единомышленников.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq4">
        <div class="progrmsummary__head" data-hideopen="faq4">
          <strong>У меня получится работать и зарабатывать после окончания курса?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq4">
          <div class="progrmsummary__content">
            <p>Психолог-консультант — конкретная, практико-ориентированная профессия, компетенции которой можно освоить
              при определенном уровне мотивации и включенности.</p>
            <p>Преподаватели и наставники помогут вам: не только обучат техникам консультирования, но и снимут
              тревожность перед первыми клиентами. Даже без базового бакалавриата вы сможете начать работать и
              определиться с направлением дальнейшего профессионального развития и обучения.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq5">
        <div class="progrmsummary__head" data-hideopen="faq5">
          <strong>Есть ли какие-то требования при поступлении?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq5">
          <div class="progrmsummary__content">
            <p>Понадобится только диплом о высшем или среднем специальном образовании.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq6">
        <div class="progrmsummary__head" data-hideopen="faq6">
          <strong>Какие документы я получу после окончания обучения?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq6">
          <div class="progrmsummary__content">
            <p>После успешной аттестации вы получаете Диплом о профессиональной переподготовке установленного образца
              РФ. Это официальный документ, который дает право осуществлять профессиональную деятельность в сфере
              практической психологии.
              Каждый выпускник курса получает два международных диплома.
              Первый диплом <b>IPHM</b> и второй диплом <b>CPD</b></p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq7">
        <div class="progrmsummary__head" data-hideopen="faq7">
          <strong>Что такое профессиональная переподготовка?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq7">
          <div class="progrmsummary__content">
            <p>Профессиональная переподготовка — вид дополнительной профессиональной программы с выдачей диплома и
              присвоением новой квалификации.</p>
            <p>Эта квалификация дает право заниматься новым видом профессиональной деятельности. Диплом о
              профессиональной переподготовке на психолога-консультанта имеет значение при трудоустройстве в профильные
              государственные учреждения.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq8">
        <div class="progrmsummary__head" data-hideopen="faq8">
          <strong>Как я получу реальный, физический диплом если обучение онлайн?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq8">
          <div class="progrmsummary__content">
            <p>Вы получите физический, реальный диплом, который мы доставим в любую страну мира. Мы отправим его удобным
              для вас способом: почта, службы доставки и т.д.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq9">
        <div class="progrmsummary__head" data-hideopen="faq9">
          <strong>Можно ли адаптировать этот диплом для работы за границей?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq9">
          <div class="progrmsummary__content">
            <p>Это можно сделать самостоятельно после окончания обучения в организации, которая занимается адаптацией
              документов.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq10">
        <div class="progrmsummary__head" data-hideopen="faq10">
          <strong>Как проходят практические занятия?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq10">
          <div class="progrmsummary__content">
            <p>1 раз в неделю у Вас будет проходить практическое занятие, состоящее из:</p>
            <p>2 часа — воркшопы для закрепления теории,</p>
            <p>1 час — психологическая работа в группе.</p>
            <p>Психологические консультации в кругу студентов проводит опытный наставник. Это гарантирует
              психологическую безопасность каждого участника. Данная методика погружения в консультативный процесс через
              активное участие или наблюдение эффективна и широко применяема при обучении психологов-консультантов.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq11">
        <div class="progrmsummary__head" data-hideopen="faq11">
          <strong>Что такое супервизия?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq11">
          <div class="progrmsummary__content">
            <p>Супервизия — специально организованное занятие, когда более опытный наставник консультирует начинающих
              психологов-консультантов. Это самый полезный и эффективный вид обучения для молодых психологов.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq12">
        <div class="progrmsummary__head" data-hideopen="faq12">
          <strong>Можно ли взять программу в рассрочку?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq12">
          <div class="progrmsummary__content">
            <p>Вы можете купить курс в рассрочку и спланировать свой бюджет, разбив всю сумму на небольшие ежемесячные
              платежи.</p>
            <p>Чтобы узнать больше о рассрочке, оставьте контакты ниже — мы позвоним и бесплатно проконсультируем по
              всем вопросам.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq13">
        <div class="progrmsummary__head" data-hideopen="faq13">
          <strong>Подойдет ли мне программа, если я уже практикующий психолог?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq13">
          <div class="progrmsummary__content">
            <p>Курс будет полезен, если вам хочется получить системное представление о психологическом консультировании.
            </p>
            <p>Курс построен на интегративном подходе, поэтому представители разных подходов смогут почерпнуть новые
              знания и инструменты для использования в практике.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq14">
        <div class="progrmsummary__head" data-hideopen="faq14">
          <strong>Реально ли стать психологом всего за 1.5 года обучения?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq14">
          <div class="progrmsummary__content">
            <p>Мы разработали курс таким образом, чтобы за год дать все необходимые знания и навыки для самостоятельной
              работы с клиентами.</p>
            <p>Любая профессия, связанная с оказанием помощи людям, предполагает постоянное обучение. Данный курс —
              хорошая база, чтобы сориентироваться в разнообразии психологических методов и подходов, начать
              практиковать под руководством опытного супервизора-наставника, а затем более целенаправленно планировать
              свое профессиональное развитие.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq15">
        <div class="progrmsummary__head" data-hideopen="faq15">
          <strong>Когда будут проходить занятия?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq15">
          <div class="progrmsummary__content">
            <p>Новые теоретические видеоуроки еженедельно появляются в личном кабинете студента.</p>
            <p>Воркшопы для закрепления теории и психологическая работа в группе проходят 1 раз в неделю вечером в будни
              или в выходной день.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq16">
        <div class="progrmsummary__head" data-hideopen="faq16">
          <strong>В каких форматах будет проходить обучение?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq16">
          <div class="progrmsummary__content">
            <p>Всего в рамках курса 700 часов занятий: видеоуроки в личном кабинете и интерактивные воркшопы в Zoom,
              демо-сессии, работа в мини-группах под наблюдением наставника, групповые супервизии и интервизии.</p>
            <p>Более 300 часов вы проведете в формате групповых интерактивных занятий, на которых отработаете теорию и
              получите навыки проведения психологических консультаций.</p>
            <p>Видеоуроки из личного кабинета останутся у вас для неограниченного использования даже после обучения.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq17">
        <div class="progrmsummary__head" data-hideopen="faq17">
          <strong>Можно ли учиться с планшета или телефона?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq17">
          <div class="progrmsummary__content">
            <p>Вы можете обучиться новой профессии из любой точки мира. Главное — стабильный интернет, чтобы заниматься
              онлайн.</p>
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
