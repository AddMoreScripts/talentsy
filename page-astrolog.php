<?php
/*
Template name: Шаблон: Астролог
*/
get_header(null, ['white' => true]);
$pics = imgs() . '/astrolog';
?>



<section class="astrohero">
  <div class="astrohero__vidwrap">
    <video class="astrohero__bgvidep" preload="auto" playsinline="" autoplay="" loop="" muted="">
      <source src="<?= $pics; ?>/b1-video.mp4">
    </video>
  </div>
  <div class="astrohero__cont container">
    <img src="<?= $pics; ?>/b1-girl.png" alt="" class="astrohero__girl">
    <img src="<?= $pics; ?>/b1-stars.svg" alt="" class="astrohero__overgirl">
    <div class="astrohero__main">
      <h1 class="astrohero__h1 jbm">
        <span><b>Профессия</b> <br>Астр<i>о</i>л<i>о</i>г</span>
      </h1>
      <div class="astrohero__gridtxt">
        <img src="<?= $pics; ?>/b1-icon2.svg" alt="" class="astrohero__decor">
        <div class="astrohero__griditem">
          Освойте новую <br>профессию <br>онлайн <b>с нуля</b>
        </div>
        <div class="astrohero__griditem">
          <b>Заработайте <br>первые деньги</b> <br>на астрологических консультациях
        </div>
        <div class="astrohero__griditem">
          <b>Узнайте себя</b> <br>и других людей, <br>поймите свои таланты <br>и кармические <br>задачи
        </div>
        <div class="astrohero__griditem">
          <a href="#offer" class="astrohero__button circlebutton" data-scrollto="">
            <span>Принять <br>участие</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="astro2">
  <div class="container">
    <div class="astro2__wrap flexi">
      <div class="astro2__item js-slide-opac">
        <div class="astro2__picwrap">
          <img src="<?= $pics; ?>/b2-icon1.svg" alt="" class="astro2__pic" height="126">
        </div>
        <div class="astro2__title">Комплексная <br>образовательная <br>программа</div>
        <div class="astro2__descr">Вы получите необходимый и достаточный объем знаний, чтобы эффективно работать с широким спектром запросов ваших будущих клиентов</div>
      </div>
      <div class="astro2__item js-slide-opac">
        <div class="astro2__picwrap">
          <img src="<?= $pics; ?>/b2-icon2.svg" alt="" class="astro2__pic" height="175">
        </div>
        <div class="astro2__title">Не требует <br>начальных знаний</div>
        <div class="astro2__descr">Курс создан для обучения с нуля и подходит «полным» новичкам</div>
      </div>
      <div class="astro2__item js-slide-opac">
        <div class="astro2__picwrap">
          <img src="<?= $pics; ?>/b2-icon3.svg" alt="" class="astro2__pic" height="149">
        </div>
        <div class="astro2__title">Зарабатывайте <br>от 100 000 руб/мес</div>
        <div class="astro2__descr">На личных консультациях клиентов, привлекать которых вы научитесь на нашей образовательной программе</div>
      </div>
    </div>
  </div>
</section>



<section class="programfromlead mb-0 astroform">
  <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg">
  <div class="container">
    <h2 class="title">
      Получить полную<br> <b>программу курса</b>
    </h2>
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
      'buttonTxt' => 'Получить программу',
      'formClassName' => 'withastrobutton',
      'bg' => "#fff"]); ?>
  </div>
</section><!-- //programfromlead -->




<section class="astroplanets">
  <img src="<?=$pics; ?>/b4-round-anim.svg" alt="" class="astroplanets__circlebg">
  <div class="astroplanets__middle">
    <img src="<?=$pics; ?>/b4-planet-left.webp" alt="" class="astroplanets__midleft">
    <img src="<?=$pics; ?>/b4-planet-right.webp" alt="" class="astroplanets__midright">
    <div class="astroplanets__middleblock flexi">
      <div class="astroplanets__roundbg"></div>
      <div class="astroplanets__middlebg">
        <div class="astroplanets__middlecontent">
          Люди обращаются к астрологам,<br>
          так как хотят получить ответы,<br>
          ведь астрология — <b>это<br>
          мощнейший инструмент для<br>
          понимания своей судьбы</b>
        </div>
      </div>
    </div>
  </div>
  <div class="astroplanets__bot">
    <img src="<?=$pics; ?>/b4-bot-left.svg" alt="" class="astroplanets__botleft">
    <img src="<?=$pics; ?>/b4-botright.svg" alt="" class="astroplanets__botright">
    <div class="astroplanets__botblock flexi">
      <img src="<?=$pics; ?>/b4-bottitle.svg" alt="Астрология" class="astroplanets__bottitlepic">
      <p>это представление о воздействии небесных тел на земной мир и человека (его темперамент, характер, поступки и будущее), которое определяется астрологами на основе видимого движения и взаимного расположения планет в данный момент времени</p>
    </div>
  </div>
</section>






<section class="sex6 sex6--astro" style="background-image: url(<?=$pics; ?>/b5-bg.webp);">
  <img src="<?=$pics; ?>/b7-butter1.png" alt="" class="sex6-butter js-slide-opac">
  <img src="<?=$pics; ?>/b7-butter1.png" alt="" class="sex6-butte2 js-slide-opac">
  <div class="container">
    <h3 class="title jbm">
      Астрологи зарабатывают<br>
      <b>100-150 тыс. руб/месяц</b>
    </h3>

    <div class="sex6__calc flexi">
      <dl class="sex6dl sex6dl--bg">
        <dt class="jbm">2</dt>
        <dd>Консультации в&nbsp;день</dd>
      </dl>
      <div class="sex6__x"></div>
      <dl class="sex6dl sex6dl--border">
        <dt class="jbm">20</dt>
        <dd>Рабочих дней <br>в месяц</dd>
      </dl>
      <div class="sex6__x"></div>
      <dl class="sex6dl sex6dl--white">
        <dt class="jbm">
          <span>2500p.</span>
        </dt>
        <dd>
          Средняя стоимость <br>консультации по данным <br>Profi.ru
        </dd>
      </dl>
    </div>

    <div class="sex6__pricewrap flexi sex6__pricewrap--bot">
      <div class="sex6__price flexi">
        <span class="jbm"><i>=</i>100</span>
        <small>тыс.<br>₽/мес</small>
      </div>
    </div>
  </div>
</section>




<section class="guideform guideform--astrolog mb-0">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot"><span>Получите гайд по</span>
      <span>профессии <b>астролог</b></span>
      <img src="<?=$pics; ?>/b6-catalog.png" alt="" class="astrolog-catalog">
    </h3>
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить гайд', 'formClassName' => 'astrologformbox']); ?>
  </div>
</section><!-- //guideform -->



<div class="astrophotoblock" style="background-image: url(<?=$pics; ?>/b7-bg.webp);">
  <div class="container">
    <h2 class="title">Мы готовим квалифицированных <br>астрологов</h2>
    <div class="astrophotoblock__both1 jbm js-slide-bot">С нуля за 10 месяцев</div>
  </div>
  <img src="<?=$pics; ?>/b7-butter1.png" alt="" class="astrophotoblock__pic1 js-slide-opac" width="157" height="140">
  <img src="<?=$pics; ?>/b7-butter2.png" alt="" class="astrophotoblock__pic2 js-slide-opac" width="200" height="225">
  <img src="<?=$pics; ?>/b7-butter3.png" alt="" class="astrophotoblock__pic3 js-slide-opac" width="389" height="392">
</div>





<section class="iphone iphone-astrolog">
  <div class="container">
    <h2 class="title js-slide-bot">
      Наш курс - это <b><i class="title-dot">i</i>Phone</b> <br>на рынке обучения астрологии
    </h2>
    <div class="iphone__wrap flexi">
      <aside class="iphone__right">
        <img data-src="<?= $pics; ?>/b8-mockup.png" alt="" class="iphone__mock lazy">
        <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
          <source src="<?= $pics; ?>/b8-video.mp4">
        </video>
        <div class="iphone__mockuser flexi">
          <img src="<?=$pics; ?>/b8-mock-ava.webp" alt="">
          <span>Ксения Меренкова</span>
        </div>
      </aside>
      <div class="iphone__grid">
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b8-1.png" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Привлечение клиентов</div>
          <p>Мы даем простые, понятные и&nbsp;эффективные способы привлечения клиентов на консультации через интернет, которые позволят заработать первые деньги уже во&nbsp;время обучения</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b8-2.jpg" alt="" class="iphone__propicon round lazy js-slide-opac">
          <div class="iphone__proptitle">Занятия в мини-группах</div>
          <p>Под руководством действующих астрологов, которые ответят на все вопросы, напомнят о занятиях и&nbsp;помогут правильно проконсультировать первых клиентов</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__propicon iphone__counter jbm flexi">350+</div>
          <div class="iphone__proptitle">Часов обучения</div>
          <p>Комплексный и системный подход к&nbsp;обучению западной астрологии: 150&nbsp;часов видеолекций и 150 часов практических занятий</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__icongrid">
            <img src="<?=$pics; ?>/b8-ava1.webp" alt="" class="iphone__avatar">
            <img src="<?=$pics; ?>/b8-ava2.webp" alt="" class="iphone__avatar">
            <img src="<?=$pics; ?>/b8-ava3.webp" alt="" class="iphone__avatar">
            <div class="iphone__avanum jbm">+10</div>
          </div>
          <div class="iphone__proptitle">ТОП-преподаватели</div>
          <p>Вы будете учиться у звезд индустрии: лучших преподавателей и лидеров мнений</p>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="programfromlead mb-0 astroform">
  <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg">
  <div class="container">
    <h2 class="title">
      Возникли вопросы?
    </h2>
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить консультацию', 'formClassName' => 'withastrobutton', 'bg' => '#fff']); ?>
  </div>
</section><!-- //programfromlead -->





<section class="mentors mentors--astro" style="background-image: url(<?=$pics; ?>/b9-bg.webp);">
  <div class="container">
    <h2 class="title">Вы будете учиться <span>у&nbsp;</span><b>ТОП-<br class="mobbr">специалистов</b> <span>со всей страны</span></h2>
    <div class="mentorsfeat">
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b9-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы потратили полгода</div>
        <div class="mentorsfeat__text">
          чтобы собрать их всех <br>в 1 курсе
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b9-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
        <div class="mentorsfeat__text">
          у которых календари расписаны <br>на полгода вперед
        </div>
      </div>
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b9-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
        <div class="mentorsfeat__text">
          чтобы ты мог учиться у авторитетных <br>специалистов
        </div>
      </div>
    </div>

    <?php get_template_part('inc/mentors-block'); ?>
  </div>
</section><!-- //mentors -->




<section class="features features--astrolog">
  <div class="container">
    <h2 class="title">Вас ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?= $pics; ?>/b10-video.mp4">
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
            <img data-src="<?= $pics; ?>/b10-1.webp" alt="" class="lazy js-slide-opac">
            <p>Более 50 дополнительных материалов (примеры, шаблоны, схемы)</p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b10-2.webp" alt="" class="lazy js-slide-opac">
            <p><b>Практика</b> начнется <b>с первых дней</b> обучения</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section><!-- //disint8 -->



<section class="programfromlead mb-0 astroform astroform--violet">
  <div class="container">
    <h2 class="title">
      Получить полную<br> программу курса
    </h2>
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
      'buttonTxt' => 'Получить программу',
      'formClassName' => 'astrologformbox',
    ]); ?>
  </div>
</section><!-- //programfromlead -->



<section class="astroprocessor" style="background-image: url(<?=$pics; ?>/b9-bg.webp);">
  <div class="container">
    <img src="<?=$pics; ?>/b11-leftplanet.webp" alt="" class="astroprocessor__left js-slide-left" width="311">
    <img src="<?=$pics; ?>/b11-centerplanet.png" alt="" class="astroprocessor__center js-slide-bot" width="716">
    <img src="<?=$pics; ?>/b11-rightplanet.webp" alt="" class="astroprocessor__right js-slide-right" width="473">
    <div class="astroprocessor__over">
      <h2 class="title"><b>Каждый студент</b></h2>
      <div class="astroprocessor__descr">получает скидку на использование универсальной астрологической программы "Астропроцессор ZET"</div>
      <img src="<?=$pics; ?>/b11-preview.webp" alt="" class="astroprocessor__lead">
    </div>
  </div>
</section>


<section class="timeslot timeslot--atro mb-0">
  <div class="container">
    <h2 class="title">
      Научим <b> рекламировать свои
        <br>услуги</b> и&nbsp;<b>привлекать клиентов</b>
    </h2>
    <div class="timeslot__box">
      <img src="<?= imgs(); ?>/stylist/timeslot-bg.svg" alt="" class="timeslot__bg">
      <div class="timeslot__over flexi">
        <div class="timeslot__text">
          <p>С каждой группой <br>работает специалист <br>по продвижению <br>и&nbsp;привлечению клиентов</p>
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




<section class="statistic container statistic--astro mb-0" style="background-image: url(<?=$pics; ?>/b9-bg.webp);">
  <h2 class="title">Поговорим о&nbsp;цифрах</h2>
  <div class="statistic__grid">
    <dl class="statistic__item statistic__item--verbg">
      <dt>7<img src="<?= imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
      <dd>Топ <br>преподавателей</dd>
    </dl>
    <dl class="statistic__item statistic__item--verborder">
      <dt class="js-slide-opac">10</dt>
      <dd>Месяцев обучения</dd>
    </dl>
    <dl class="statistic__item statistic__item--col2 statistic__item--verorange">
      <dt class="js-slide-opac">150+</dt>
      <dd>Часов работы с наставниками <br>и супервизорами</dd>
    </dl>
    <dl class="statistic__item statistic__item--col2">
      <dt class="js-slide-opac">350+</dt>
      <dd>Часов интересных <br>и насыщенных занятий</dd>
    </dl>
    <dl class="statistic__item">
      <dt class="js-slide-opac">2</dt>
      <dd>Дня очных <br>мероприятий <br>в Москве</dd>
    </dl>
    <dl class="statistic__item  statistic__item--verorange">
      <dt class="js-slide-opac">12/7</dt>
      <dd>Поддержка студентов во время обучения</dd>
    </dl>
  </div>
</section>




<section class="astroabout">
  <div class="container">
    <h2 class="title">С какими запросами вы <br>научитесь работать?</h2>
    <div class="astroabout__wrap">
      <aside class="astroabout__sidebar">
        <div class="astroabout__sideblock">
          <img src="<?=$pics; ?>/b14-girl.webp" alt="" class="astroabout__girl">
          <button class="button" data-scrollto="#offer">Записаться на курс</button>
        </div>
      </aside>
      <div class="astroabout__main">
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon1.svg" alt="" class="astroabout__icon" width="30">
          <h3 class="astroabout__h3 jbm">Отношения, семья и дети:</h3>
          Как встретить подходящего партнера?<br>Когда лучше начать новые отношения?<br>Стоит ли съезжаться со своим любовником?<br>Можно ли проверить супруга на совместимость?<br>Удастся ли помириться со своей второй половинкой?<br>Долго ли будет существовать наша семья?<br>Будут ли у меня дети?<br>Когда лучше зачать ребенка?<br>Какого пола будет мой ребенок?
          <img src="<?=$pics; ?>/b14-r-1.svg" alt="" class="astroabout__abs astroabout__abs1" width="134">
          <img src="<?=$pics; ?>/b14-r-2.svg" alt="" class="astroabout__abs astroabout__abs2" width="28">
        </article>
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon2.svg" alt="" class="astroabout__icon" width="35">
          <h3 class="astroabout__h3 jbm">Здоровье:</h3>
          Есть ли у меня предрасположенность к заболеваниям?<br>Когда лучше проводить операцию?<br>Поможет ли мне эта диета?
          <img src="<?=$pics; ?>/b14-r-3.webp" alt="" class="astroabout__abs astroabout__abs3" width="258">
        </article>
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon3.svg" alt="" class="astroabout__icon" width="23">
          <h3 class="astroabout__h3 jbm">Личность:</h3>
          Каково мое предназначение?<br>Какие у меня скрытые способности?<br>На какую профессию мне пойти учиться?
          <img src="<?=$pics; ?>/b14-r-2.svg" alt="" class="astroabout__abs astroab