<?php
/*
Template name: Шаблон: Профессия психолог
*/
get_header();
?>


<nav class="breadcrumbs container jbm">
  <a href="/">Главная</a>
  <a href="">Факультет психологии</a>
  <span>Обучение на психолога</span>
</nav>


<section class="hero">
  <h2 class="hero__small">Курсы по психологии</h2>
  <div class="hero__h1 jbm">
    За 1 год сделаем <img src="<?=imgs(); ?>/psychology/b1-sm.png" alt=""> из вас <br>
    <b>успешного психолога-консультанта</b><br>
    и&nbsp;поможем запустить свою частную <br>практику
  </div>
  <div class="hero__videowrap ">
    <div class="hero__videobox square">
      <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
        <source src="<?=imgs(); ?>/psychology/psycho_main.mp4">
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
      Мы создали <i class="title-dot">i</i>Phone на рынке <br>обучения психологии
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
          <img data-src="<?=imgs(); ?>/psychology/b2-3.svg" alt="" class="iphone__propicon lazy js-slide-opac ">
          <div class="iphone__proptitle">Часов обучения</div>
          <p>1200 академических часов, 250&nbsp;видеолекций, 150+ часов семинарских и практических занятий за 50
            недель
            обучения</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?=imgs(); ?>/psychology/b2-4.png" alt="" class="iphone__propicon lazy js-slide-opac">
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
            <img data-src="<?=imgs(); ?>/psychology/b4-1.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Освоить новую профессию без <br>базового образования психолога
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?=imgs(); ?>/psychology/b4-2.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Открыть свою частную практику
          </div>
        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/psychology/b4-3.png" alt="" class="lazy">
          </div>
          <div class="dreamsltitle">
            Помогать людям <br>профессионально
          </div>
        </div>
        <div class="dreams__item  dreams__item--light">
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/psychology/b4-4.svg" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Заниматься делом, которое приносит <br>не только доход, но и удовольствие
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img data-src="<?=imgs(); ?>/psychology/b4-5.png" alt="" class="lazy js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Работать на себя и ни от кого <br>не зависеть
          </div>
        </div>
        <div class="dreams__item  dreams__item--border dreams__item--light">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img data-src="<?=imgs(); ?>/psychology/b4-6.jpg" alt="" class="lazy js-slide-opac">
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
              <a href="<?=imgs();?>/psychology/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
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
      На фоне стрессов растёт <br>спрос на <b>квалифицированных <br>психологов</b>
    </h2>
    <div class="psy6__wrap">
      <div class="psy6__item js-slide-interval">
        <div class="psy6__complex jbm">
          <span>133%</span>
          <img src="<?=imgs(); ?>/psychology/b6-1.svg" alt="">
        </div>
        <div class="psy6__text">
          Спрос на услуги психологов в России вырос в 2021 году <b>на 133%</b> по сравнению с 2020
        </div>
      </div>
      <div class="psy6__item js-slide-interval">
        <img src="<?=imgs(); ?>/psychology/b6-2.svg" alt="" class="psy6__icon">
        <div class="psy6__text">
          Профессия психолог <b>входит в топ-30</b> профессий, стабильность которых сохраняется даже в кризис
        </div>
      </div>
      <div class="psy6__item js-slide-interval">
        <img src="<?=imgs(); ?>/psychology/b6-3.png" alt="" class="psy6__icon">
        <div class="psy6__text">
          <b>6 000</b> открытых вакансий специалистов с компетенциями психолога на hh.ru
        </div>
      </div>
    </div>
  </div>
</section><!-- //psy6 -->


<section class="psy7">
  <div class="container">
    <h2 class="title">
      Наш курс — <b> полное погружение</b> <br>в профессию
    </h2>
    <div class="psy7__wrap">
      <div class="psy7__item js-slide-interval">
        <img src="<?=imgs(); ?>/psychology/b7-1.svg" alt="" class="psy7__icon">
        <div class="psy7__title">Для тех, кто мечтает о профессии психолога с нуля</div>
        <div class="psy7__text">
          Всегда хотели зарабатывать любимым и благородным делом. Люди тянутся к вам за советами, у вас богатый
          жизненный опыт, но не хватает знаний
        </div>
      </div>
      <div class="psy7__item js-slide-interval">
        <img src="<?=imgs(); ?>/psychology/b7-2.svg" alt="" class="psy7__icon">
        <div class="psy7__title">Для тех, кто только начинает путь психолога</div>
        <div class="psy7__text">
          Ещё студент или выпускник, но чувствуете неуверенность и страх перед клиентами. Хотели бы наработать первые
          часы практики в комфортном режиме вместе с опытными наставниками
        </div>
      </div>
      <div class="psy7__item js-slide-interval">
        <img src="<?=imgs(); ?>/psychology/b7-3.svg" alt="" class="psy7__icon">
        <div class="psy7__title">Для тех, кто хочет освоить психологию для себя</div>
        <div class="psy7__text">
          Разобраться в психических процессах, практиках психологов-консультантов. Гармонизировать свою жизнь,
          улучшить взаимоотношения с близкими и коллегами
        </div>
      </div>
      <div class="psy7__item js-slide-interval">
        <img src="<?=imgs(); ?>/psychology/b7-4.svg" alt="" class="psy7__icon">
        <div class="psy7__title">Для тех, кому нужен диплом для работы</div>
        <div class="psy7__text">
          Вы уже работаете и хотите подкрепить свой статус официальным документом РФ установленного образца — дипломом
          психолога-консультанта ( а так же два международных диплома)
        </div>
      </div>
    </div>
  </div>
</section><!-- //psy6 -->



<section class="psy8">
  <div class="container">
    <h2 class="title">Мы готовим квалифицированных <br><b>психологов-консультантов</b></h2>
    <img data-src="<?=imgs(); ?>/psychology/b8-bg.png" alt="" class="psy8__bg lazy" style="aspect-ratio: 1680 / 739;">
    <div class="psy8__post title js-slide-bot">
      с нуля за <b>12 месяцев</b>
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

    <div class="teamblock flexi">
      <div class="teamblock__nav jbm teamblock__nav--left">
        <a href="#" class="teamblock__navlink is-active" data-slide="0">Новоселова</a>
        <a href="#" class="teamblock__navlink" data-slide="1">Колмановский</a>
        <a href="#" class="teamblock__navlink" data-slide="2">Васильева</a>
        <a href="#" class="teamblock__navlink" data-slide="3">Кунникова</a>
        <a href="#" class="teamblock__navlink" data-slide="4">Виндекер</a>
        <a href="#" class="teamblock__navlink" data-slide="5">Лебедева</a>
        <a href="#" class="teamblock__navlink" data-slide="6">Подкорытова</a>
      </div>
      <div class="teamblock__nav jbm teamblock__nav--right">
        <a href="#" class="teamblock__navlink" data-slide="7">Николаева</a>
        <a href="#" class="teamblock__navlink" data-slide="8">Фомичева</a>
        <a href="#" class="teamblock__navlink" data-slide="9">Гоглев</a>
        <a href="#" class="teamblock__navlink" data-slide="10">Двойнин</a>
        <a href="#" class="teamblock__navlink" data-slide="11">Киселёв</a>
        <a href="#" class="teamblock__navlink" data-slide="12">Меглинская</a>
        <a href="#" class="teamblock__navlink" data-slide="13">Томина</a>
      </div>

      <!-- Слайдер десктоп -->
      <div class="swiper teamslider js-team-slider">
        <div class="swiper-wrapper">
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/001.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Елена Новоселова</h3>
              <div class="teamslider__content">
                <ul>
                  <li>Психотерапевт с 30-ти летним опытом</li>
                  <li>Автор книг и психологических программ на радио</li>
                  <li>Член профессиональной психотерапевтической лиги</li>
                  <li>Эксперт программы "Правила жизни" на телеканале Культура</li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/002.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Александр Колмановский</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Психолог, писатель и радиоведущий </li>
                  <li> Преподаватель Московского государственного университета </li>
                  <li> Руководитель центра социально-психологической реабилитации «Наша жизнь» </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/003.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Инна Васильева</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Доктор психологических наук, профессор </li>
                  <li> Специалист в области психологии интуиции </li>
                  <li> Два гранта Президента РФ, несколько грантов Российского фонда фундаментальных исследований
                  </li>
                  <li> Автор более 170 научных статей </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/004.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Ксения Кунникова</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Кандидат психологических наук </li>
                  <li> Руководитель инновационного проекта MyBabyCheck" (диагностика раннего развития ребёнка). </li>
                  <li> Психофизиолог и специалист по раннему развитию </li>
                  <li> Руководитель грантов Российского фонда фундаментальных исследований </li>
                  <li> Сотрудник лаборатории мозга и нейрокогнитивного развития </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/005.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Ольга Виндекер</h3>
              <div class="teamslider__content">
                <ul>
                  <li>Кандидат психологических наук, доцент, практикующий психолог </li>
                  <li>Руководитель Уральского отделения Российского психологического общества </li>
                  <li>Автор учебных пособий, более 100 научных статей</li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/006.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Юлия Лебедева</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Кандидат психологических наук. </li>
                  <li> Более 20 лет работы в высшей школе. </li>
                  <li> Специалист в области психологии эмпатии. </li>
                  <li> Практикующий психолог на телефоне доверия. </li>
                  <li> Разработчик тренинговых программ для подростков. </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/007.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Ольга Подкорытова</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Психолог, гештальт-терапевт. </li>
                  <li> Консультант по детско-родительским отношениям. </li>
                  <li> Ведущая групп поддержки для подростков и семинаров для детей </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/008.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Елена Николаева</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Доктор биологических наук, профессор </li>
                  <li> Заведующая кафедрой возрастной психологии и педагогики семьи Института детства Российского
                    государственного педагогического университета им. А.И. Герцена </li>
                  <li> Член Российского физиологического общества, Российского психологического общества, Европейской
                    ассоциации психологии здоровья (EHPA), Американской психологической ассоциации (APA)</li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/009.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Наталья Фомичева</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Кандидат психологических наук </li>
                  <li> Клинический психолог </li>
                  <li> Сексолог </li>
                  <li> Специалист по психотерапии психосоматических нарушений </li>
                  <li> Нарушений пищевого поведения </li>
                  <li> Сертифицированный специалист в области экзистенциально-гуманистической психотерапии (частная
                    практика c 2007 года) </li>
                  <li> Директор АНО «Центр прикладных исследований „Русское общество психосоматики"» </li>
                  <li> Автор научных публикаций и книги «Близость: Книга о хорошем сексе» </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/010.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Сергей Гоглев</h3>
              <div class="teamslider__content">
                <ul>
                  <li> 10 лет консультативной практики </li>
                  <li> 6 лет ведущий обучающих и супервизионных групп для психологов-консультантов </li>
                  <li> обучающий терапевт Санкт-Петербургского Института гештальта </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/011.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Алексей Двойнин</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Специалист в области общей психологии и психологии личности, автор более 140 научных и
                    учебно-методических публикаций. </li>
                  <li>Кандидат психологических наук. Доцент, практикующий психолог.</li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/012.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Сергей Киселёв</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Кандидат психологических наук, специалист в области детской нейропсихологии. </li>
                  <li> Создатель одной из первых в России лаборатории мозга и нейрокогнитивного развития. </li>
                  <li> Результаты исследований его научной группы опубликованы в ведущих российских, американских и
                    европейских изданиях. </li>
                  <li> Автор уникального обучающего семинара "Нейропсихологическая диагностика и коррекция детей".
                  </li>
                  <li> Член Экспертного совета при Уполномоченном при Президенте РФ по правам ребенка. </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/013.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Евгения Меглинская</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Психолог, консультант по коррекции пищевого поведения. </li>
                  <li> Автор двух книг-тренингов. </li>
                  <li> Приглашенный эксперт для телеканалов «Мама-ТВ» и «Здоровое ТВ». </li>
                  <li> Руководитель Школы Консультантов по психологической коррекции пищевого поведения и осознанному
                    отношению к еде, телу и эмоциям </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="swiper-slide teamslider__slide">
            <div class="teamslider__item">
              <img src="<?=imgs(); ?>/psychology/mentors/014.jpg" alt="" class="teamslider__photo">
              <h3 class="teamslider__name">Надежда Томина</h3>
              <div class="teamslider__content">
                <ul>
                  <li> Магистр психологии с большим опытом работы в медицинских учреждениях и частной практике </li>
                  <li> Клинический психолог, специализирующийся на психоаналитической психотерапии </li>
                  <li> Член Российского психологического общества, преподаватель высшей школы </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
      <!-- Слайдер десктоп -->

    </div><!-- //teamblock -->
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить программу']); ?>
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
            <p>Программа разработана <br><b>на основе ФГОС ВО 370301 «Психология»</b>, и&nbsp;соответствует
              <b>профессиональным
                стандартам</b>
            </p>
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
            <p>Более <b> 100 дополнительных материалов </b>, (конспекты, шпаргалки, схемы, протоколы, упражнения,
              методики, литература)</p>
          </div>
        </div>

        <div class="psy11__gridwrap">
          <div class="grid-mob-scroll">
            <div class="psy11__grid">
              <div class="psy11__item psy11__item--wide">
                <img data-src="<?=imgs(); ?>/psychology/b12-1.png" alt="" class="lazy js-slide-opac">
                <p>Программа разработана на основе ФГОС ВО 370301 «Психология», и&nbsp;соответствует профессиональным
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
    <div class="progrmsummary__item" data-hidewrap="1">
      <div class="progrmsummary__head" data-hideopen="1">
        <span>Модуль 1. Знакомство профессией психолог-консультант</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="1">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Погрузитесь в основы психологии, узнайте о её возникновении и популярных психологических практиках.</p>
          <p>Улучшите ваши личные навыки, полезные в работе практикующего психолога.</p>
          <p>Вы изучите:</p>
          <ul>
            <li>содержание профессиональной деятельности психолога-консультанта,</li>
            <li>этические принципы работы психолога-консультанта</li>
            <li>историю психологии и психологического консультирования,</li>
            <li>востребованные направления психологического консультирования</li>
          </ul>
          <h3>Практика в модуле</h3>
          <h4>Практикум «Введение в профессию психолог-консультант»</h4>
          <p>Вы познакомитесь с участниками учебной группы, освоите формат групповой психологической работы, его
            особенности и правила.</p>
          <p>В мини-лекциях, упражнениях, обсуждениях и домашних заданиях начнете формировать мышление
            психолога-консультанта: умение прислушиваться к себе и умение слышать других, наблюдательность,
            чувствительность, умение отделять факт от аффекта и системную рефлексию; эмоциональный интеллект, эмпатию,
            психологическую разумность и системную рефлексию</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="2">
      <div class="progrmsummary__head" data-hideopen="2">
        <span>Модуль 2. Мозг и поведение человека</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="2">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Узнайте больше о современном научном взгляде на психику человека. По каким закономерностям работает
            восприятие, внимание, мышление, память и эмоции; и какую роль в этом играет мозг и нервная система.</p>
          <p>Вы изучите:</p>
          <ul>
            <li>биологические основы психики и поведения человека,психофизиологические механизмы адаптации и
              совладания со стрессом,</li>
            <li>современные высокотехнологичные методы изучения мозга, и последние открытия в области нейронаук,</li>
            <li>универсальные свойства восприятия, внимания, памяти, мышления, речи и психических состояний,</li>
            <li>психологию сознания и бессознательного,</li>
            <li>психологию эмоций и природу эмпатии.</li>
          </ul>
          <h3>Практика</h3>
          <h4>Семинар по общей психологии</h4>
          <p>Сделаем понятными сложные моменты из лекционного материала. Вы сможете задать собственные вопросы по
            лекциям или теме в целом, свяжете теорию и личный опыт.</p>
          <p>Из каждой темы общей психологии мы сделаем конкретные практические выводы для психологического
            консультирования. Вы увидите, как можно использовать знания общей психологии в работе с клиентами и в
            вашем собственном развитии как психолога-профессионала.</p>
          <h4>Семинар «Мозг и поведение человека»</h4>
          <p>На первом семинаре мы поработаем с атласом головного мозга, чтобы закрепить и визуализировать информацию
            о строении и функциях разных отделов нервной системы.</p>
          <p>На втором семинаре поговорим о мифах о работе мозга и затронем один из наиболее интересных вопросов в
            нейронауке — восстанавливаются ли нервные клетки?</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="3">
      <div class="progrmsummary__head" data-hideopen="3">
        <span>Модуль 3. Основы психологического консультирования</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="3">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Начните смотреть на психологическую консультацию взглядом профессионала. Понимать ее цели и задачи;
            видеть, на каком этапе находится консультативная беседа; предполагать, какой вопрос сейчас стоит задать
            клиенту; устанавливать рабочий контакт с клиентом.</p>
          <p>Улучшите ваши личные навыки, полезные в работе практикующего психолога: умение ставить цели и двигаться к
            ним, умение распознать и противостоять манипуляции, умение опираться на собственные личностные ресурсы.
          </p>
          <p>Темы модуля:</p>
          <ul>
            <li>Что такое профессиональное психологическое консультирование в России? Его отличия от дружеской
              поддержки и от психотерапии</li>
            <li>Основные принципы психологического консультирования</li>
            <li>Этапы консультативной беседы</li>
            <li>Первая консультация с новым клиентом</li>
            <li>Профессиональная эмпатия психолога-консультанта</li>
          </ul>
          <h3>Практика</h3>
          <h4>Основы психологического консультирования</h4>
          <p>Вы начнете осваивать профессиональные навыки психолога-консультанта: установление контакта, расспрос,
            эмпатическое реагирование, формулирование контракта, проверку гипотез.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="4">
      <div class="progrmsummary__head" data-hideopen="4">
        <span>Модуль 4. Психология личности и основы психологической диагностики</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="4">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Научитесь анализировать внутренний мир человека с помощью психодиагностики, чтобы помочь с проблемами,
            из-за которых обращаются к психологам.</p>
          <p>Сформируйте профессиональный взгляд на личность человека. Ведь понимание личности клиента - это
            краеугольный камень любого направления консультирования.</p>
          <p>Вы изучите:</p>
          <ul>
            <li>фундаментальные основы психологии личности,</li>
            <li>способы диагностики и развития ресурсов личности,</li>
            <li>модели личности, лежащие в основе самых признанных подходов к психологическому консультированию,</li>
            <li>отличительные признаки профессиональной диагностической методики,</li>
            <li>основные принципы психодиагностики,</li>
            <li>диагностические методики, подходящие для работы практикующего психолога.</li>
          </ul>
          <h3>Практика в модуле</h3>
          <h4>Практикум по психодиагностике.</h4>
          <p>Вы познакомитесь с правилами построения и интерпретации психодиагностических методик. Поймёте, насколько
            можно доверять результатам диагностики и как использовать их в процессе консультирования.</p>
          <p>Получите опыт работы с тестовыми и психосемантическими методиками. Узнаете, как подбирать и где искать
            психодиагностический инструментарий, а также как отличить настоящую методику от подделки.</p>
          <p>Семинар Личность в психологическом консультировании:</p>
          <p>На семинаре рассмотрим основные проблемы психологии личности в контексте психологического
            консультирования.</p>
          <p>Как не потеряться в многообразии теорий личности? Что именно необходимо знать о личности
            психологу-консультанту? Что такое полноценно функционирующая личность? Можно ли совмещать различные
            подходы в работе? Как влияет на личность процесс психологического консультирования? Эти и другие вопросы
            мы обсудим на этом семинаре.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="5">
      <div class="progrmsummary__head" data-hideopen="5">
        <span>Модуль 5. Возрастная психология в консультировании</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="5">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Погрузитесь в процесс развития психики человека на протяжении всей его жизни: от младенчества до пожилого
            возраста.</p>
          <p>Научитесь учитывать возраст клиента в психологической консультации: понимать типичные для проблемы,
            ограничения и возможности, понимать направление потенциального роста личности клиента, подбирать стиль
            работы под возраст клиента.</p>
          <p>Темы модуля</p>
          <ul>
            <li>Как развивается психика человека на протяжении жизни.</li>
            <li>Понятие "возрастных кризисов". Зачем они необходимы психике, и что с ними делать?</li>
            <li>Особенности консультирования клиентов разных возрастов</li>
          </ul>
          <h3>Практика в модуле</h3>
          <h4>Семинар «Возрастная психология»</h4>
          <p>На занятии вы получите возможность обобщить свои знания по возрастной психологии, разберете
            характеристики каждого возрастного периода. На примере кейсов проследите линию развития личности, начиная
            с подросткового возраста и заканчивая серебряным.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="6">
      <div class="progrmsummary__head" data-hideopen="6">
        <span>Модуль 6. Психология семьи и психология сексуальности</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="6">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Сформируйте профессиональный взгляд на семейные проблемы, чтобы помогать клиентам, опираясь не на свой
            личный опыт, а на взвешенную профессиональную позицию.</p>
          <p>Семейный консультант эффективно работает такими проблемами, как отношения между супругами,
            детско-родительские отношения, развод, сложности с построением длительных отношений, эмоциональные
            нарушения и поведенческие проблемы детей.</p>
          <p>Исследуйте развитие сексуальности, гендерного воспитания, основы помощи при сексуальных проблемах во
            взрослом возрасте и развейте мифы о сексологии.</p>
          <p>Вы изучите:</p>
          <ul>
            <li>основы системного подхода к анализу семьи,</li>
            <li>психологию родительства,</li>
            <li>представления о гармоничных отношениях и формы отклонений в супружеских и детско-родительских
              отношениях,</li>
            <li>основы психологии сексуальности.</li>
          </ul>
          <h3>Практика</h3>
          <h4>Семинар «Психологическая работа с семьей»</h4>
          <p>Вы исследуете собственные мифы и установки в области семьи, и потренируетесь смотреть на проблемы
            отношений с позиции психолога-консультанта.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="7">
      <div class="progrmsummary__head" data-hideopen="7">
        <span>Модуль 7. Основы клинической психологии</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="7">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Используйте основы клинического подхода, чтобы лучше понимать проблему клиента и его личность.</p>
          <p>Научитесь определять границы своих возможностей: с чем вы сможете помочь человеку, как психолог
            консультант, а с чем лучше обратиться к врачу или клиническому психологу. Для улучшения эффективности
            вашей работы и качества жизни клиента.</p>
          <p>Вы изучите:</p>
          <ul>
            <li>вы определитесь с понятием нормы и не нормы в психологии,</li>
            <li>изучите психические нарушения разного уровня тяжести, и поймете возможности и границы работы
              психолога-консультанта,</li>
            <li>узнаете диагностические критерии психических расстройств и научитесь понимать, в каком случае важно
              рекомендовать клиенту обратиться к специалисту-клинику или психиатру,</li>
            <li>познакомитесь с клинико-психологической концепцией психосоматики.</li>
          </ul>
          <h3>Практика</h3>
          <h4>Семинар «Клиническая психология»</h4>
          <p>Вы получите возможность обсудить и прояснить важные для вас моменты из лекций, задать интересующие
            вопросы в безопасных условиях группы. Увидите на примерах особенности клинического мышления и как его
            можно использовать в консультировании.</p>
          <h4>Семинар по нейропсихологии</h4>
          <p>На первом семинаре по нейропсихологии мы поговорим про исполнительные функции, которые играют важнейшую
            роль в нашей социальной жизни. Выполним короткие упражнения, чтобы определить и развить у себя эти
            функции.</p>
          <p>Второй семинар по нейропсихологии посвящен межполушарной асимметрии. Вы узнаете, зачем нужна человеку
            специализация полушарий мозга, чем левши отличаются от правшей и как определить у себя профиль асимметрии.
          </p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="8">
      <div class="progrmsummary__head" data-hideopen="8">
        <span>Модуль 8. Кризисная психологическая помощь</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="8">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Научитесь распознавать острые психологические кризисы, и освойте способы психологической поддержки
            клиентов.</p>
          <h3>Темы модуля:</h3>
          <ul>
            <li>Экстремальные ситуации и экстренная психологическая помощь</li>
            <li>Психологическая помощь при суицидальных рисках</li>
            <li>Понятие и виды кризисов в психологии</li>
            <li>Краткосрочная кризисная интервенция</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="9">
      <div class="progrmsummary__head" data-hideopen="9">
        <span>Модуль 9. Современные модальности консультирования</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="9">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Исследуйте в теории и на практике основные модальности (направления) психологического консультирования.
          </p>
          <p>Выбирайте модальность консультирования для дальнейшей специализации.</p>
          <p>Интегрируйте идеи и методы различных направлений в свою практику.</p>
          <p>Вы изучите основы:</p>
          <ul>
            <li>клиент-центрированного подхода</li>
            <li>экзистенциально-гуманистического направления</li>
            <li>когнитивно-поведенческой психотерапии,</li>
            <li>гештальт-подхода,</li>
            <li>психоаналитического направления,</li>
            <li>арт-терапии,</li>
            <li>телесно-ориентированного подхода,</li>
            <li>коучинга</li>
          </ul>
          <h3>Практика</h3>
          <p>На практикумах по подходам к консультированию вы подробно разберете отдельные темы из лекций, сможете
            задать преподавателю ваши собственные вопросы, свяжете теорию с личным опытом.</p>
          <p>Вы сформируете представление о данном подходе к консультированию и опробуете некоторые приемы работы
            психолога-консультанта в нем.</p>
          <p>Время отведенное на вопросы, позволит Вам максимально уточнить интересующие Вас моменты у психолога -
            практика. Каждое упражнение мы обсуждаем, думая, с какими запросами, с какими клиентами можно их
            использовать.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="10">
      <div class="progrmsummary__head" data-hideopen="10">
        <span>Модуль 10. Начало практики консультирующего психолога</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="10">
        <div class="progrmsummary__content textcontent">
          <h3>Теория</h3>
          <p>Получите опыт индивидуальной и групповой психологической работы, снимите психологический барьер перед
            клиентом.</p>
          <p>Выработайте свой индивидуальный стиль консультирования.</p>
          <p>Вы изучите:</p>
          <ul>
            <li>методы профилактики профессионального выгорания,</li>
            <li>способы повышения эффективности психолога-консультанта,</li>
            <li>схему профессионального самоанализа проведенной консультации,</li>
            <li>научитесь работать в интервизионной и супервизионной группе коллег-психологов.</li>
          </ul>
          <h3>Практика</h3>
          <h4>Мастерская психологического консультирования. Практическая работа в группе</h4>
          <p>Практические занятия направлены на формирование профессиональных компетенций психолога-консультанта.</p>
          <p>Вы научитесь наблюдать и анализировать ход консультации на содержательном уровне, на уровне отношений
            консультанта и клиента, на уровне внутренних переживаний консультанта и клиента.</p>
          <p>Закрепите навыки установления и поддержания контакта, формулировки гипотез, анализа консультации и
            профессионального самоанализа.</p>
          <p>Научитесь давать корректную, этичную и содержательную обратную связь.</p>
          <p>Преодолеете «страх первой консультации».</p>
          <p>Сформируете группу коллег, в которой сможете получать профессиональную поддержку и разбирать случаи
            клиентов и после окончания обучения.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="11">
      <div class="progrmsummary__head" data-hideopen="11">
        <span>Модуль 11. Личный бренд психолога-консультанта</span>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="11">
        <div class="progrmsummary__content textcontent">
          <p>Успешные блогеры и предприниматели-психологи расскажут о личном бренде как инструменте продвижения, о
            правилах позиционирования себя в социальных сетях, ведении аккаунтов и других составляющих продвижения
            себя как профессионала в сфере психологии.</p>
        </div>
      </div>
    </div><!-- //item -->
  </div>
</section><!-- //progrmsummary -->




<section class="guideform">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot">
      <span>Получите <b>гайд</b></span>
      <span>по профессии</span>
      <span><b>психолог-консультант</b></span>
      <img src="<?=imgs(); ?>/psychology/b14-book.png" alt="">
    </h3>
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить гайд']); ?>
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
          <div class="features__item">
            <img src="<?=imgs(); ?>/psychology/b16-3.png" alt="" class="js-slide-opac">
            <div class="features__subtitle">Очные встречи</div>
            <p>в Москве со студентами и наставниками</p>
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
    <div class="diplomblock__sub js-slide-opac">А так же два международных диплома</div>
    <img src="<?=imgs(); ?>/psychology/b17-diplom.jpg" alt="" class="diplomblock__pic">
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Сделать выбор']); ?>
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
          <p>С вами работает специалист <br>по продвижению <br>и привлечению клиентов</p>
          <small><span>начиная</span> с шестого месяца обучения</small>
        </div>
        <div class="timeslot__avawrap">
          <img src="<?=imgs(); ?>/psychology/b19-ava.png" alt="" class="timeslot__ava js-slide-opac">
        </div>
        <img src="<?=imgs(); ?>/psychology/b19-matrix.png" alt="" class="timeslot__matrix js-slide-opac">
      </div>
    </div>
    <div class="jbm timeslot__bot">с 6 месяца</div>
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
      <dt class="js-slide-opac">12</dt>
      <dd>Месяцев <br>обучения</dd>
    </dl>
    <dl class="statistic__item">
      <dt class="js-slide-opac">150+</dt>
      <dd>Часов работы с наставниками <br>и супервизорами</dd>
    </dl>
    <dl class="statistic__item">
      <dt class="js-slide-opac">400</dt>
      <dd>Часов интересных и насыщенных <br>занятий</dd>
    </dl>
    <dl class="statistic__item  statistic__item--veryellow">
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
            <img src="<?=imgs(); ?>/psychology/b21-1.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Разбираться в себе и своих проблемах
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img src="<?=imgs(); ?>/psychology/b21-2.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Начать свою частную практику
          </div>
        </div>
        <div class="dreams__item dreams__item--bg">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/psychology/b21-3.png" alt="">
          </div>
          <div class="dreamsltitle">
            Понимать психологические <br>характеристики разных людей
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/psychology/b21-4.svg" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Справляться со стрессами и лучше <br>себя чувствовать
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/psychology/b21-5.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Трудоустроиться по новой <br>специальности
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap dreams__iconwrap--wide">
            <img src="<?=imgs(); ?>/psychology/b21-6.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Помогать другим людям справиться <br>с психологическими проблемами
          </div>
        </div>
        <div class="dreams__item">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/psychology/b21-7.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Выработать индивидуальный стиль <br>консультирования
          </div>
        </div>
        <div class="dreams__item dreams__item--border">
          <div class="dreams__iconwrap">
            <img src="<?=imgs(); ?>/psychology/b21-8.png" alt="" class="js-slide-opac">
          </div>
          <div class="dreamsltitle">
            Применять техники для <br>профессионального развития
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- //dreams -->




<section class="quizlink">
  <div class="container">
    <h2 class="title">Подходит ли вам профессия <br><b>Психолог-консультант?</b></h2>
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




<section class="priceblock" id="offer">
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
    <?php get_template_part('inc/leadform', null, ['isPromoForm' => true]); ?>
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
        <strong>Реально ли стать психологом всего за год обучения?</strong>
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

    <div class="progrmsummary__item" data-hidewrap="faq19">
      <div class="progrmsummary__head" data-hideopen="faq19">
        <strong>Психологии можно обучиться дистанционно?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq19">
        <div class="progrmsummary__content">
          <p>Научиться дистанционно можно многому, если вы настроены серьезно. Удаленное обучение предполагает, что вы
            включаете компьютер и не тратите время на дорогу до института, а в остальном оно ничем не отличается от
            очной лекции.</p>
          <p>Живой диалог с преподавателем будет на вебинарах, а практикумы в рамках программы курса позволят получить
            конкретные навыки психологической работы. Кстати, это особенно актуально в современном мире, когда все
            больше консультаций ведется по онлайн, а клиенты приходят из разных уголков мира.</p>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq20">
      <div class="progrmsummary__head" data-hideopen="faq20">
        <strong>Где может работать психолог?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq20">
        <div class="progrmsummary__content textcontent">
          <p>
            В зависимости от специализации:</p>
          <ul>
            <li>Психолог-консультант и психотерапевт может вести частную практику — арендовать кабинет и принимать
              клиентов, а может работать в психологическом центре.</li>
            <li>Специалист по детской, возрастной психологии и психологии развития может пойти в систему образования:
              детский сад, школу, колледж.</li>
            <li>При наличии специальной подготовки и дополнительных медицинских знаний можно работать в клинике,
              реабилитационном и медицинском центре.</li>
            <li>Специалист по организационной психологии, управлению персоналом, HR может работать в компании или
              государственном учреждении.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

    <div class="progrmsummary__item" data-hidewrap="faq21">
      <div class="progrmsummary__head" data-hideopen="faq21">
        <strong>Как начать работать психологом после обучения?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq21">
        <div class="progrmsummary__content textcontent">
          <p>Самым простым вариантом является поиск вакансии без опыта работы в интересной для вас сфере. Также можно
            пойти на стажировку к уже практикующим психологам, чтобы получить достаточные знания и опыт.</p>
          <p>Если вы нацелены на частную практику, надо нарабатывать клиентскую базу. На самом деле она начинает
            формироваться с самого начала вашего обучения:</p>

          <ul>
            <li>Знакомые узнают, что вы учитесь на психолога, и начинают задавать вам вопросы (помогать можно смело,
              главное — сохранять границы и разделять профессиональные и личные отношения).</li>
            <li>Знакомые могут рекомендовать вас своим друзьям и знакомым, а те потом своим. Так заработает сарафанное
              радио.</li>
            <li>Психолог не может работать со своими близкими и друзьями, поскольку крайне сложно отделить личные
              отношения от терапевтических. Поэтому можно договориться с сокурсниками и перенаправлять эту категорию
              клиентов друг к другу. Таким образом можно тоже получить клиентов.</li>
          </ul>
        </div>
      </div>
    </div><!-- //item -->

  </div>
</section>




<section class="talentsyabout">
  <div class="container">
    <img src="<?=imgs(); ?>/footer/logo-white.svg" alt="" class="talentsyabout__logo js-slide-opac">
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
        <dt class="js-slide-opac">13k<img src="<?=imgs(); ?>/footer/props-heart.svg" alt="" class="talentsyabout__heart"></dt>
        <dd>Любимых студентов</dd>
      </dl>
    </div>

    <div class="talentsyabout__tags" data-hidewrap="tags">
      <a href="#" class="talentsyabout__tag">Программа повышения <br>квалификации</a>
      <a href="#" class="talentsyabout__tag">Практический <br>психолог</a>
      <a href="" class="talentsyabout__tag">Курс психолог-<br>консультант</a>
      <a href="" class="talentsyabout__tag">Социальная <br>психология</a>
      <a href="" class="talentsyabout__tag">Организационная <br>психология</a>

      <div data-hidebox="tags" class="talentsyabout__more">
        <a href="" class="talentsyabout__tag">Дистанционное обучение с присвоением<br> квалификации практический
          психолог</a>
        <a href="" class="talentsyabout__tag">Цена оказания психологических <br>услуг населению</a>
        <a href="" class="talentsyabout__tag">Программа профессиональной <br>переподготовки психолога</a>
        <a href="" class="talentsyabout__tag">Семейное консультирование <br>и психотерапия</a>
        <a href="" class="talentsyabout__tag">Методы психологического <br>консультирования</a>
        <a href="" class="talentsyabout__tag">Индивидуальное <br>консультирование</a>
        <a href="" class="talentsyabout__tag">Технологии терапии <br>для родителей</a>

        <a href="" class="talentsyabout__tag">Гештальт-терапия</a>
        <a href="" class="talentsyabout__tag">Методы <br>психоанализа</a>
        <a href="" class="talentsyabout__tag">Конфликтология</a>
        <a href="" class="talentsyabout__tag">Психофизиология</a>
        <a href="" class="talentsyabout__tag">Мастер-классы <br>и вебинары</a>
        <a href="" class="talentsyabout__tag">Психокоррекция <br>девиантного поведения</a>
        <a href="" class="talentsyabout__tag">Программа обучения <br>практических психологов</a>
        <a href="" class="talentsyabout__tag">Семейные консультации</a>
        <a href="" class="talentsyabout__tag">Обучение на психолога <br>дистанционно</a>
      </div>
    </div>
    <div class="talentsyabout__action">
      <button data-hideopen="tags"><span>Показать еще</span><i>Cкрыть</i></button>
    </div>
  </div>
</section><!-- //talentsyabout -->



<?php
get_footer();
