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
        <div class="astro2__descr">Вы получите необходимый и достаточный объем знаний, чтобы эффективно работать с любыми запросами ваших будущих клиентов</div>
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
          <div class="iphone__proptitle">Лучшие преподаватели</div>
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
    <h2 class="title">Вы будете учиться <span>у&nbsp;</span><b>лучших <br class="mobbr">специалистов</b> <span>со всей страны</span></h2>
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
          чтобы ты мог учиться у лучших <br>из лучших
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
          <img src="<?=$pics; ?>/b14-r-2.svg" alt="" class="astroabout__abs astroabout__abs4" width="33">
        </article>
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon4.svg" alt="" class="astroabout__icon" width="27">
          <h3 class="astroabout__h3 jbm">Благополучие:</h3>
          Есть ли у меня перспективы на этой работе?<br>Стоит ли соглашаться на предложение с другой работы?<br>Могу ли я начать бизнес?<br>Совместим ли я с этим бизнес-партнером?
          <img src="<?=$pics; ?>/b14-r-4.svg" alt="" class="astroabout__abs astroabout__abs5" width="119">
        </article>
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon5.svg" alt="" class="astroabout__icon" width="29">
          <h3 class="astroabout__h3 jbm">Место жительства:</h3>
          Какое место выбрать для постоянного проживания?<br>Стоит ли покупать/продавать квартиру этому человеку?
        </article>
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon6.svg" alt="" class="astroabout__icon" width="36">
          <h3 class="astroabout__h3 jbm">Путешествия:</h3>
          В какой стране мне лучше выбрать отдых?<br>Будет ли данная поездка безопасна?<br>Какое транспортное средство выбрать для путешествия?
          <img src="<?=$pics; ?>/b14-r-2.svg" alt="" class="astroabout__abs astroabout__abs6" width="41">
        </article>
        <article class="astroabout__item js-slide-bot">
          <img src="<?=$pics; ?>/b14-icon7.svg" alt="" class="astroabout__icon" width="29">
          <h3 class="astroabout__h3 jbm">Прогнозы:</h3>
          Что ожидается меня в ближайшую неделю/месяц/год?<br>Какие важные события могут произойти в моей жизни?
        </article>
      </div>
    </div>
  </div>
</section>



<?php if(get_field('is-show_quiz')): ?>
<section class="quizlink quizlink--astro withastrobutton mb-0">
  <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg">
  <div class="container">
    <h2 class="title">Подходит ли вам <br>профессия астролога</h2>
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
        <a href="#" class="circlebutton"><span>Пройти <br>тест</span></a>
      </div>
    </div>
  </div>
</section><!-- //quizlink -->
<?php endif; ?>



<section class="astrononwork" style="background-image: url(<?=$pics; ?>/b9-bg.webp);">
  <div class="container">
    <img src="<?=$pics; ?>/b4-planet-right.webp" alt="" class="astrononwork__planet1 js-slide-left" width="230">
    <img src="<?=$pics; ?>/b4-planet-left.webp" alt="" class="astrononwork__planet2 js-slide-right" width="258">
    <h2 class="title">Используйте знания <br>не только для работы</h2>
    <div class="astrononwork__sub js-slide-bot">
      Вы сможете составлять личный гороскоп себе и своим<br>
      близким, будете видеть, как исправить ту или иную<br>
      проблему и как усилить любую сферу жизни
    </div>
    <div class="astrononwork__grid flexi">
      <div class="astrononwork__item js-slide-opac">
        <div class="astrononwork__picwrap flexi">
          <img src="<?=$pics; ?>/b15-icon1.svg" alt="" class="astrononwork__icon" width="117">
        </div>
        <div class="astrononwork__txt">
          Не можете наладить финансовый поток? Работаете на выплату кредитов? Постоянно не хватает денег? Нет уверенности в завтрашнем дне?
        </div>
      </div>
      <div class="astrononwork__item js-slide-opac">
        <div class="astrononwork__picwrap flexi">
          <img src="<?=$pics; ?>/b15-icon2.svg" alt="" class="astrononwork__icon" width="80">
        </div>
        <div class="astrononwork__txt">
          Не получается выстроить гармоничные отношения? Одни и те же проблемы повторяются из раза в раз с разными партнерами? Преследует “венец безбрачия"?
        </div>
      </div>
      <div class="astrononwork__item js-slide-opac">
        <div class="astrononwork__picwrap flexi">
          <img src="<?=$pics; ?>/b15-icon3.svg" alt="" class="astrononwork__icon" width="119">
        </div>
        <div class="astrononwork__txt">
          Не знаете, чем хотите заняться либо боитесь идти за своей мечтой? Хочется найти свое дело и самореализоваться в нем? Ищете свое предназначение, но постоянно ошибаетесь?
        </div>
      </div>
      <div class="astrononwork__item js-slide-opac">
        <div class="astrononwork__picwrap flexi">
          <img src="<?=$pics; ?>/b15-icon4.svg" alt="" class="astrononwork__icon" width="80">
        </div>
        <div class="astrononwork__txt">
          Волнуетесь за судьбу своих детей? Хотите помочь им найти свой путь для счастливой жизни?
        </div>
      </div>
    </div>
  </div>
</section>




<section class="priceblock priceblock--astro mb-0" id="offer">
  <div class="container">
    <h2 class="title">Стоимость обучения</h2>
    <div class="priceblock__row flexi">
      <div class="priceblock__price jbm js-slide-left"><span>8300</span><span>₽/МЕС</span></div>
      <div class="priceblock__descr js-slide-right">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
    </div>
    <div class="priceblock__greenprice jbm js-slide-bot">
      <span>От</span> <span class="jsPPSumm">5000</span> <span>₽/МЕС</span>
      <small>Скидка 40% &nbsp;<b>до <?=getTomorow(); ?></b></small>
    </div>
    <div class="priceblock__mobdescr">
      <p>Беспроцентная рассрочка на 24 месяца.</p>
      <p>Первый платеж через 2 месяца.</p>
    </div>
    <?php get_template_part('inc/leadform', null, [
      'formClassName' => '',
      'isPromoForm' => true,
    ]); ?>
  </div>
</section><!-- //priceblock -->




<section class="astropartners">
  <div class="container">
    <h2 class="title">Наши партнеры</h2>
    <div class="astropartners__block flexi">
      <img src="<?=$pics; ?>/b16-numia.png" alt="" class="astropartners__img js-slide-left">
      <div class="astropartners__content js-slide-right">
        <a href="astropartners__block" target="_blank" class="astropartners__link">Numia Сlub</a>
        <p>Крупнейший сервис для консультаций с персональным астрологом. Вы можете задать вопрос любому астрологу из нашей интернациональной команды. Более 300 астрологов з 20 стран мира, более 10 млн пользователей.</p>
        <p>Выпускники Talentsy имеют возможность трудоустройства в Numia сразу после окончания обучения.</p>
        <p><a href="https://numia.ru/" target="_blank">На сайт партнера</a></p>
      </div>
    </div>
  </div>
</section>




<section class="faqblock faqblock--astro">
  <h2 class="title">Часто задаваемые вопросы</h2>
  <div class="faqblock__wrap container">

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
          <p>Вы получите сертификат о прохождении обучения.</p>
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
          <p>Да. Наша образовательная программа включает 150 часов практических занятий в мини-группах, во время которых вы сможете закрепить знания и навыки, полученные на лекциях, разбирать реальные кейсы, работать с диагностическими методиками, и выполнять упражнения в парах.</p>
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
          <p>Особенностью нашей программы является построение индивидуальной траектории обучения и создание гибкого расписания для всех студентов. Если Вы пропустили занятие, Вы сможете посетить его с другой группой в удобное время или посмотреть в записи.</p>
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
          <p>За каждой группой наших студентов закреплен куратор, который сможет оперативно ответить на все вопросы. На все вопросы по содержанию лекций на платформе будут отвечать преподаватели.</p>
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

    <div class="progrmsummary__item" data-hidewrap="faq5">
      <div class="progrmsummary__head" data-hideopen="faq5">
        <strong>Смогу ли я подключаться с планшета или телефона?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq5">
        <div class="progrmsummary__content">
          <p>Да. Для этого на нем должны быть установлены Zoom и Telegram.</p>
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
          <p>Мы уверены в качестве нашей образовательной программы, поэтому если курс вам не понравится, мы сделаем возврат средств пропорционально пройденным материалам, согласно условиям публичной оферты.</p>
        </div>
      </div>
    </div><!-- //item -->

  </div>
</section>





<section class="talentsyabout talentsyabout--black talentsyabout--astro">
  <div class="talentsyabout__topbg">
    <div class="container">
      <div class="talentsyabout__tags" data-hidewrap="tags">
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Обучение <br>астрологии</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Курсы по <br>астрологии с нуля</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Школа астрологии</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Курсы астрологии <br>для начинающих</a>
        <a href="<?= get_permalink(); ?>" class="talentsyabout__tag">Астролог <br>профессионал</a>
      </div>
    </div>
  </div>
</section><!-- //talentsyabout -->


<?php
get_footer();
