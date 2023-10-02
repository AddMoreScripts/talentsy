<?php
/*
Template name: Шаблон: Нутрициолог
*/
get_header(null, ['white' => true]);
$pics = imgs() . '/nutriciolog';
?>



<div class="nutrihero">
  <div class="container">
    <div class="nutrihero__wrap flexi">
      <div class="nutrihero__main">
        <div class="nutrihero__line1">Нутрициолог: обучение с нуля</div>
        <h1 class="nutrihero__h1 jbm">ИНТЕГРАТИВНЫЙ <br>НУТРИЦИОЛОГ</h1>
        <ul class="nutrihero__list">
          <li>освойте новую востребованную профессию онлайн <br>за 8 месяцев</li>
          <li>научитесь восстанавливать и поддерживать здоровье <br>через <b>коррекцию питания</b> и <b>образа жизни</b></li>
          <li>получите сертификат установленного образца РФ,<br>а также два международных сертификата с правом консультирования в сфере нутрициологии</li>
        </ul>
        <button class="nutrihero__button button" data-scrollto="#offer">
          <img src="<?=$pics; ?>/b1-button-arrow.svg" alt="">
          <span>Принять участие</span>
        </button>
        <div class="nutrihero__treeblock flexi">
          <img src="<?=$pics; ?>/b1-tree.png" alt="">
          <p>Единственная в России образовательная программа, реализуемая при поддержке <b>Федерального исследовательского центра питания, биотехнологий и безопасности пищи</b></p>
        </div>
      </div><!-- //nutrihero__main -->

      <aside class="nutrihero__right">
        <img src="<?=$pics; ?>/b1-main.webp" alt="" class="nutrihero__mainpic js-slide-opac">
        <div class="nutrihero__abs abs1 js-slide-left">
          <img src="<?=$pics; ?>/b1-l1.webp" alt="" width="94">
          <span>Фитнес</span>
        </div>
        <div class="nutrihero__abs abs2 js-slide-left">
          <img src="<?=$pics; ?>/b1-l2.webp" alt="" width="94">
          <span>Генетика</span>
        </div>
        <div class="nutrihero__abs abs3 js-slide-left">
          <img src="<?=$pics; ?>/b1-l3.webp" alt="" width="101">
          <span>Сон</span>
        </div>
        <div class="nutrihero__abs abs4 js-slide-left">
          <img src="<?=$pics; ?>/b1-l4.webp" alt="" width="101">
          <span>Антиэйдж</span>
        </div>

        <div class="nutrihero__abs abs5 js-slide-right">
          <img src="<?=$pics; ?>/b1-r1.webp" alt="" width="94">
          <span>Питание</span>
        </div>
        <div class="nutrihero__abs abs6 js-slide-right">
          <img src="<?=$pics; ?>/b1-r2.webp" alt="" width="94">
          <span>Стресс <br>менеджмент</span>
        </div>
        <div class="nutrihero__abs abs7 js-slide-right">
          <img src="<?=$pics; ?>/b1-r3.webp" alt="" width="94">
          <span>Психология</span>
        </div>
        <div class="nutrihero__abs abs8 js-slide-right">
          <img src="<?=$pics; ?>/b1-r4.webp" alt="" width="94">
          <span>Иммунитет</span>
        </div>
      </aside>
    </div>

    <div class="nutrihero__bottom">
      <div class="nutrihero__feat">
        <div class="nutrihero__picwrap">
          <img src="<?=$pics; ?>/b1-feat1.webp" alt="" width="198" class="js-slide-opac">
        </div>
        <div class="nutrihero__featttl">Только <b>достоверные</b> научные данные и методики</div>
        <div class="nutrihero__feattxt">Никакой восточной магии и шаманства. Мы даем знания, имеющие под собой твердую доказательную базу.</div>
      </div>
      <div class="nutrihero__feat">
        <div class="nutrihero__picwrap">
          <img src="<?=$pics; ?>/b1-feat2.png" alt="" width="120" class="js-slide-opac">
        </div>
        <div class="nutrihero__featttl"><b>Не требует</b> медицинского образования</div>
        <div class="nutrihero__feattxt">Курс создан для <b>обучения с нуля</b>. Чтобы усвоить материал, <b>необязательно</b> иметь медицинское образование или даже начальные знания о нутрициологии.</div>
      </div>
      <div class="nutrihero__feat">
        <div class="nutrihero__picwrap">
          <img src="<?=$pics; ?>/b1-feat3.png" alt="" width="138" class="nutrihero__pic3 js-slide-opac">
        </div>
        <div class="nutrihero__featttl">Зарабатывайте <br>от <b>100 000 рублей</b> в месяц</div>
        <div class="nutrihero__feattxt">и научитесь добиваться <b>долгосрочных изменений</b> в сфере здоровья для себя и&nbsp;своих&nbsp;близких</div>
      </div>
    </div>
  </div>
</div>




<section class="programfromlead mb-0 programfromlead--nutri">
  <div class="container">
    <h2 class="title">
      Получить полную  программу курса
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить программу', 'formClassName' => 'nutriformbox']); ?>
  </div>
</section><!-- //programfromlead -->







<section class="nutri3">
  <div class="container">
    <img src="<?=$pics; ?>/b3-right.svg" alt="" class="nutri3__bg js-slide-right">
    <div class="nutri3__wrap flexi">
      <aside class="nutri3__left">
        <img src="<?=$pics; ?>/b3-bg.webp" alt="" class="nutri3__pic">
        <p class="nutri3__abg abs1 js-slide-interval">Генетика</p>
        <p class="nutri3__abg abs2 js-slide-interval">Иммунитет</p>
        <p class="nutri3__abg abs3 js-slide-interval">Психология</p>
        <p class="nutri3__abg abs4 js-slide-interval">Фитнес</p>
        <p class="nutri3__abg abs5 js-slide-interval">Питание</p>
        <p class="nutri3__abg abs6 js-slide-interval">Сон</p>
        <p class="nutri3__abg abs7 js-slide-interval">Детокс</p>
        <p class="nutri3__abg abs8 js-slide-interval">Стресс</p>
        <p class="nutri3__abg abs9 js-slide-interval">Антиэйдж</p>
      </aside>
      <div class="nutri3__main">
        <p>Нутрициология — наука о составе пищи, и это лишь часть <br>интегративной нутрициологии</p>
        <div class="nutri3__title">
          <b>Интегративный нутрициолог —</b>  <br>
          это консультант по здоровому образу жизни,<br>
          который комплексно подходит к вопросам здоровья<br>
          человека, исходя из его запросов, целей<br>
          ииндивидуальных особенностей
        </div>
        <button class="nutrihero__button button" data-scrollto="#offer">
          <img src="<?=$pics; ?>/b1-button-arrow.svg" alt="">
          <span>Принять участие</span>
        </button>
      </div>
    </div>
  </div>
</section>






<section class="nutri4">
  <div class="container">
    <h2 class="title">ИНТЕГРАТИВНЫЕ НУТРИЦИОЛОГИ <span class="nutri4__defis"></span></h2>
    <div class="nutri4__sub">очень востребованы, потому что умеют комплексно работать <br>
    с запросами мужчин и женщин</div>
    <div class="nutri4__wrap flexi">
      <div class="nutri4__picwrap">
        <img src="<?=$pics; ?>/b4-left.webp" alt="" class="nutri4__pic">
      </div>
      <div class="nutri4__right">
        <div class="nutri4__tags">
          <div class="nutri4__item js-slide-interval">Чувствую постоянную усталость</div>
          <div class="nutri4__item js-slide-interval">Хочу сбалансировать питание</div>
          <i></i>
          <div class="nutri4__item js-slide-interval">Хочу лучше выглядеть</div>
          <div class="nutri4__item js-slide-interval">Я часто болею</div>
          <div class="nutri4__item js-slide-interval">Не могу отказаться от сладкого</div>
          <div class="nutri4__item js-slide-interval">Хочу похудеть и сбросить вес</div>
          <div class="nutri4__item js-slide-interval">Подберите мне комплекс витаминов и БАДов</div>
          <div class="nutri4__item js-slide-interval">Я в постоянном стрессе и поэтому переедаю</div><span style="width: 150px;"></span>
          <div class="nutri4__item js-slide-interval">У меня проблемы со сном</div>
          <div class="nutri4__item js-slide-interval">Не хочу стареть</div>
          <div class="nutri4__item js-slide-interval">Хочу набрать мышечную массу</div>
          <i></i>
          <div class="nutri4__item js-slide-interval">У меня начали выпадать волосы</div>
          <div class="nutri4__item js-slide-interval">У меня проблема с ЖКТ</div>
        </div>
        <div class="nutri4__bottom">И другими...</div>
      </div>
    </div>
  </div>
</section>




<section class="nutri5">
  <div class="container">
    <img src="<?=$pics; ?>/b3-right.svg" alt="" class="nutri5__bg js-slide-right">
    <h2 class="title">СПРОС НА <b>НУТРИЦИОЛОГОВ</b> <br>ПОСТОЯННО РАСТЕТ</h2>
    <div class="nutri5__grid">
      <div class="nutri5__item js-slide-bot">
        <img src="<?=$pics; ?>/b5-grad.svg" alt="" class="nutri5__pic" width="138">
        <div class="nutri5__itemtxt">
          В 2022 году по данным Института <br>труда спрос на специалистов <br>по питанию <b>вырос в 1,5 раза</b>
        </div>
      </div>
      <div class="nutri5__item js-slide-bot">
        <div class="nutri5__itemnum jbm">3X</div>
        <div class="nutri5__itemtxt">
          Число людей, заинтересованных <br>в здоровом образе жизни <b>выросло <br>в 3 раза</b> за последнее десятилетие
        </div>
      </div>
    </div>
    <h3 class="nutri5__h3 jbm">ИНТЕГРАТИВНЫЕ НУТРИЦИОЛОГИ ЗАРАБАТЫВАЮТ <br>100-150 ТЫС. РУБ/МЕСЯЦ</h3>

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




<section class="guideform guideform--nutri mb-0">
  <div class="container">
    <h3 class="guideform__title title js-slide-bot"><span>Получите гайд </span>
      <span>по профессии</span>
      <span><b>ИНТЕГРАТИВНЫЙ</b></span>
      <span><b>НУТРИЦИОЛОГ</b></span>
      <img src="<?=$pics; ?>/b6-cat.webp" alt="" class="nutri-catalog">
    </h3>
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить гайд', 'formClassName' => 'nutriformbox']); ?>
  </div>
</section><!-- //guideform -->





<section class="nutri7">
  <div class="container">
    <h2 class="title">МЫ ГОТОВИМ КВАЛИФИЦИРОВАННЫХ <br><b>ИНТЕГРАТИВНЫХ НУТРИЦИОЛОГОВ</b></h2>
    <div class="nutri7__pics">
      <img src="<?=$pics; ?>/b7-img.png" alt="" class="nutri7__pic">
    </div>
    <div class="title nutri7__bot">С НУЛЯ ЗА <b>8&nbsp;МЕСЯЦЕВ</b></div>
  </div>
</section>





<section class="iphone iphone-nutri mb-0">
  <div class="container">
    <h2 class="title js-slide-bot">
      Наш курс - это <span><i class="title-dot">i</i>Phone</span> на <br>рынке <b>обучения нутрициологии</b>
    </h2>
    <div class="iphone__wrap flexi">
      <aside class="iphone__right">
        <img data-src="<?= $pics; ?>/b8-mockup.png" alt="" class="iphone__mock lazy">
        <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
          <source src="<?= $pics; ?>/b8-video.mp4">
        </video>
        <div class="iphone__mockuser flexi">
          <img src="<?=$pics; ?>/b8-videoava.webp" alt="">
          <span>Юлия Бордовских</span>
        </div>
      </aside>
      <div class="iphone__grid">
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b8-1.webp" alt="" class="iphone__propicon lazy js-slide-opac">
          <div class="iphone__proptitle">Диплом о проф. <br>переподготовке</div>
          <p>Получите диплом установленного образца РФ, а так же два международных сертификата <br>с правом консультирования <br>в сфере нутрициологии</p>
        </div>
        <div class="iphone__prop">
          <img data-src="<?= $pics; ?>/b8-2.webp" alt="" class="iphone__propicon round lazy js-slide-opac">
          <div class="iphone__proptitle">Занятия в мини-группах</div>
          <p>Под руководством действующих нутрициологов, которые ответят на все вопросы, напомнят о занятиях и помогут правильно проконсультировать первых<br> клиентов</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__propicon iphone__counter jbm flexi">700+</div>
          <div class="iphone__proptitle">Часов обучения</div>
          <p>Комплексный и системный подход к здоровью по западной методологии: 200+ видеолекций, 300+ часов семинарских и практических занятий</p>
        </div>
        <div class="iphone__prop">
          <div class="iphone__icongrid">
            <img src="<?=$pics; ?>/b8-ava1.webp" alt="" class="iphone__avatar">
            <img src="<?=$pics; ?>/b8-ava2.webp" alt="" class="iphone__avatar">
            <img src="<?=$pics; ?>/b8-ava3.webp" alt="" class="iphone__avatar">
            <div class="iphone__avanum jbm">+10</div>
          </div>
          <div class="iphone__proptitle">Лучшие преподаватели</div>
          <p>Более 10 звезд индустрии: доктора наук, профессоры университетов, лидеры мнений, врачи, практикующие специалисты</p>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="nutri9">
  <div class="container flexi">
    <aside class="nutri9__picwrap">
      <img src="<?=$pics; ?>/b9-tree.webp" alt="" class="nutri9__pic">
    </aside>
    <div class="nutri9__block">
      <div class="nutri9__line1">Научным партнером курса выступает</div>
      <div class="nutri9__line2">Федеральный исследовательский центр питания, <br>биотехнологий и безопасности пищи</div>
      <div class="nutri9__line3">
        Это гарантирует качество и безопасность <br>образовательной программы
      </div>
    </div>
  </div>
</section>




<section class="programfromlead mb-0  programfromlead--nutri2">
  <!-- <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg"> -->
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить консультацию', 'formClassName' => 'nutriformbox']); ?>
  </div>
</section><!-- //programfromlead -->







<section class="mentors mentors--nutri">
  <div class="container">
    <h2 class="title">Вы будете учиться у&nbsp;<b>лучших <br class="mobbr">специалистов</b> со всей страны</h2>
    <div class="mentorsfeat">
      <div class="mentorsfeat__item">
        <img src="<?= $pics; ?>/b9-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
        <div class="mentorsfeat__title">Мы потратили полгода <br>и миллионы рублей</div>
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






<section class="features features--nutri">
  <div class="container">
    <h2 class="title">Вас ждет <b>фундаментальная, <br>глубокая</b> и <b>подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <video preload="auto" playsinline autoplay loop muted class="lazy">
          <source data-src="<?= $pics; ?>/b12-video.mp4">
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
            <img data-src="<?= $pics; ?>/b12-1.webp" alt="" class="lazy js-slide-opac">
            <p>Программа соответствует <br><b>профессиональным <br>стандартам</b></p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b12-2.webp" alt="" class="lazy js-slide-opac">
            <p><b>Практика</b> начнется <br>с первых дней <br>обучения</p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b12-3.webp" alt="" class="lazy js-slide-opac">
            <p><b>Современные</b> <br>методики обучения</p>
          </div>
          <div class="features__item">
            <img data-src="<?= $pics; ?>/b12-4.webp" alt="" class="lazy js-slide-opac">
            <p>Более <b>100 дополнительных материалов</b> (примеры, <br>шаблоны, схемы)</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>






<section class="programfromlead mb-0  programfromlead--nutri2">
  <!-- <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg"> -->
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Задать вопрос', 'formClassName' => 'nutriformbox']); ?>
  </div>
</section><!-- //programfromlead -->






<section class="nutri15">
  <div class="container">
    <h2 class="title">ВЫ ОСВОИТЕ ВСЕ НЕОБХОДИМЫЕ <br>ИНСТРУМЕНТЫ ДЛЯ РАБОТЫ</h2>
    <div class="grid-mob-scroll">
      <div class="nutri15__grid">
        <div class="nutri15__item js-slide-bot">
          <div class="nutri15__picwrap"><img src="<?=$pics; ?>/b15-1.webp" alt="" class="nutri15__pic"></div>
          <div class="nutri15__title">Дневник питания</div>
          <div class="nutri15__txt">Инструмент для анализа <br>пищевого поведения клиента</div>
        </div>
        <div class="nutri15__item js-slide-bot">
          <div class="nutri15__picwrap"><img src="<?=$pics; ?>/b15-2.webp" alt="" class="nutri15__pic"></div>
          <div class="nutri15__title">Анкета для диагностики <br>пищевого поведения</div>
          <div class="nutri15__txt">Опросник для выявления типа пищевого поведения</div>
        </div>
        <div class="nutri15__item js-slide-bot">
          <div class="nutri15__picwrap"><img src="<?=$pics; ?>/b15-3.webp" alt="" class="nutri15__pic"></div>
          <div class="nutri15__title">Калькуляторы КБЖУ</div>
          <div class="nutri15__txt">Программа для расчета калорийности блюд <br>и рационов</div>
        </div>
        <div class="nutri15__item js-slide-bot">
          <div class="nutri15__picwrap"><img src="<?=$pics; ?>/b15-4.webp" alt="" class="nutri15__pic"></div>
          <div class="nutri15__title">Программа питания</div>
          <div class="nutri15__txt">Готовый рацион для ваших клиентов, рассчитанный на неделю, месяц, год</div>
        </div>
      </div>
    </div>

    <div class="nutri15__bottom flexi">
      <img src="<?=$pics; ?>/b16-lines.svg" alt="" class="nutri15__botbg js-slide-left">
      <aside class="nutri15__botpicwrap">
        <img src="<?=$pics; ?>/b16-bot.png" alt="" class="nutri15__botpic js-slide-bot" width="664" height="591">
      </aside>
      <div class="nutri15__botblock">
        Каждый студент курса получает<br>
        возможность <b>бесплатно</b> использовать<br>
        аналитический сервис для планирования<br>
        питания и оценки состояния здоровья
      </div>
    </div>
  </div>
</section>




<section class="features features--nutri17">
  <div class="container">
    <h2 class="title">Вас ждут практические <br>занятия в&nbsp;<b>мини-группах</b></h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <img src="<?=$pics; ?>/b17-1.webp" alt="" class="nutri16__videopic">
      </div>
      <div class="features__right">
        <div class="features__subtitle">
          В формате семинаров и тренингов под<br>
          руководством опытных нутрициологов
        </div>
        <div class="features__grid">
          <div class="features__item">
            <img src="<?= $pics; ?>/b17-2.webp" alt="" class="js-slide-opac">
            <p><b>Уникальный</b> формат <br>обучения</p>
          </div>
          <div class="features__item">
            <img src="<?= $pics; ?>/b17-3.webp" alt="" class="js-slide-opac">
            <p>Участники группы <br><b>мотивируют и помогают</b><br> друг другу</p>
          </div>
          <div class="features__item">
            <img src="<?= $pics; ?>/b17-4.webp" alt="" class="js-slide-opac">
            <p>Студенты растут <b>в среде <br>единомышленников</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<div class="nutri18">
  <div class="container">
    <h2 class="title">
      ЧТО ВЫ БУДЕТЕ УЧИТЬСЯ ДЕЛАТЬ <br>НА ПРАКТИЧЕСКИХ ЗАНЯТИЯХ?
    </h2>
    <div class="nutri18__swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="nutri18__item">
            <div class="nutri18__picwrap">
              <img src="<?=$pics; ?>/b18-1.webp" alt="" class="nutri18__pic">
            </div>
            <div class="nutri18__title">Диагностика общего <br>состояния организма</div>
            <div class="nutri18__txt">Составите анкету и заполните её с клиентом. Проведёте анализ на основе ответов на вопросы.</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="nutri18__item">
            <div class="nutri18__picwrap">
              <img src="<?=$pics; ?>/b18-2.webp" alt="" class="nutri18__pic">
            </div>
            <div class="nutri18__title">Рацион для клиента <br>на день</div>
            <div class="nutri18__txt">Заполните с клиентом дневник питания и&nbsp;составите рацион на день</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="nutri18__item">
            <div class="nutri18__picwrap">
              <img src="<?=$pics; ?>/b18-3.webp" alt="" class="nutri18__pic">
            </div>
            <div class="nutri18__title">Рацион для клиента <br>на неделю</div>
            <div class="nutri18__txt">Проанализируете анализ крови клиента и&nbsp;его образ жизни, дадите рекомендации по корректировке питания и составите рацион</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="nutri18__item">
            <div class="nutri18__picwrap">
              <img src="<?=$pics; ?>/b18-4.webp" alt="" class="nutri18__pic">
            </div>
            <div class="nutri18__title">Психологический <br>опросник и его анализ</div>
            <div class="nutri18__txt">Заполните с клиентом психологический опросник и проанализируете состояние клиента</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="nutri18__item">
            <div class="nutri18__picwrap">
              <img src="<?=$pics; ?>/b18-5.webp" alt="" class="nutri18__pic">
            </div>
            <div class="nutri18__title">Рацион на основе <br>анализов крови</div>
            <div class="nutri18__txt">Определите потребность клиента в витаминах и минералах на основе его анализов и скорректируете рацион</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<section class="programfromlead mb-0  programfromlead--nutri3">
  <!-- <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg"> -->
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
    <?php get_template_part('inc/leadform', null, ['buttonTxt' => 'Задать вопрос', 'formClassName' => 'nutriformbox']); ?>
  </div>
</section><!-- //programfromlead -->




<section class="timeslot timeslot--nutri mb-0">
  <div class="container">
    <h2 class="title">
      Научим <b> рекламировать свои
        <br>услуги</b> и&nbsp;<b>привлекать клиентов</b>
    </h2>
    <div class="timeslot__box">
      <img src="<?= imgs(); ?>/stylist/timeslot-bg.svg" alt="" class="timeslot__bg">
      <div class="timeslot__over flexi">
        <div class="timeslot__text">
          <p>С каждой группой <br>работает отдельный <br>куратор специалист <br>и&nbsp;привлечению клиентов</p>
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





<section class="nutri21">
  <div class="container">
    <h2 class="title">У НУТРИЦИОЛОГА МНОЖЕСТВО <br>ВАРИАНТОВ РАЗВИТИЯ КАРЬЕРЫ</h2>
    <div class="nutri21__grid">
      <div class="nutri21__col">
        <p>Консультация клиентов вживую <br>или онлайн</p>
        <p>Вести свой блог в соц. сетях и стать <br>лидером мнений</p>
        <p>Открыть ресторан здорового питания</p>
        <p>Организовать сервис доставки <br>полезной еды</p>
        <p>Открыть свою клинику или центр <br>консультирования</p>
        <p>Устроиться на работу в фитнес-<br>центр, клинику, государственное <br>или коммерческое учреждение</p>
      </div>
      <div class="nutri21__col">
        <p>Стать спикером конференций на <br>ЗОЖ темы</p>
        <p>На основе полученных знаний создать <br>авторскую обучающую программу</p>
        <p>Работать с госпрограммами, <br>получать гранты</p>
        <p>Организовать ЗОЖ комьюнити</p>
        <p>Издать книгу и стать популярным <br>автором в данной теме</p>
        <p>Любой вариант, который вы <br>можете придумать</p>
      </div>
    </div>
  </div>
</section>


<?php if(get_field('is-show_quiz')): ?>
<section class="quizlink quizlink--nutri mb-0">
  <!-- <img src="<?=$pics; ?>/b3-lines.svg" alt="" class="astroform__bg"> -->
  <div class="container">
    <h2 class="title">Подходит ли вам <br>профессия нутрициолог</h2>
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



<div class="nutri23">
  <div class="container">
    <h2 class="title">
      <b>Вы получите диплом<br>
      установленного образца</b><br>
      о профессиональной<br>
      переподготовке
    </h2>
    <div class="nutri23__sub">А так же два международных сертификата с правом <br>консультирования в сфере нутрициологии</div>
    <picture class="nutri23__diplom">
      <source media="(min-width: 992px)" srcset="<?=$pics; ?>/b23-diplom.webp">
      <img src="<?=$pics; ?>/b23-diplom-m.webp" alt="" class="nutri23__diplom">
    </picture>
  </div>
</div>



<section class="features psy16 nutri24 mb-0">
  <div class="container">
    <h2 class="title">Вас ждет яркая <br>студенческая жизнь</h2>
    <div class="features__wrap">
      <div class="features__left js-slide-bot">
        <img src="<?= imgs(); ?>/stylist/collage.png" alt="" class="psy16__collage">
      </div>
      <div class="features__right">
        <div class="features__grid">
          <div class="features__item">
            <img src="<?= $pics; ?>/b24-1.webp" alt="" class="js-slide-opac">
            <div class="features__subtitle">Читальный зал</div>
            <p>Обсуждаем интересные <br>книги</p>
          </div>
          <div class="features__item">
            <picture class="js-slide-opac iconmobauto">
              <img src="<?= $pics; ?>/b24-2.webp" alt="">
            </picture>
            <div class="features__subtitle">Две очные встречи</div>
            <p>в Москве включены <br>в стоимость обучения</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="statistic statistic--nutri mb-0">
  <div class="container">
    <h2 class="title">Поговорим о&nbsp;цифрах</h2>
    <div class="statistic__grid">
      <dl class="statistic__item statistic__item--verbg">
        <dt>10</dt>
        <dd>Топ <br>преподавателей</dd>
      </dl>
      <dl class="statistic__item statistic__item--verborder">
        <dt class="js-slide-opac">8</dt>
        <dd>Месяцев <br>обучения</dd>
      </dl>
      <dl class="statistic__item statistic__item--col2 statistic__item--verorange">
        <dt class="js-slide-opac">300+</dt>
        <dd>Часов работы с наставниками <br>и супервизорами</dd>
      </dl>
      <dl class="statistic__item statistic__item--col2">
        <dt class="js-slide-opac">700</dt>
        <dd>Часов интересных <br>и насыщенных занятий</dd>
      </dl>
      <dl class="statistic__item">
        <dt class="js-slide-opac">2</dt>
        <dd>Дня практических <br>занятий в Москве</dd>
      </dl>
      <dl class="statistic__item  statistic__item--vernutri">
        <img src="<?=$pics; ?>/b25-grad.svg" alt="" class="statistic__item__nutbg">
        <dt class="js-slide-opac">12/7</dt>
        <dd>Поддержка студентов во время обучения</dd>
      </dl>
    </div>
  </div>
</section>




<section class="nutri26">
  <div class="container">
    <h2 class="title">Используйте знания <br>не только для работы</h2>
    <div class="nutri26__sub">
      Ведь знания о правильном питании и ЗОЖ можно использовать <br>и для себя, и для близких и <b>дорогих людей</b>
    </div>
    <div class="grid-mob-scroll">
      <div class="nutri26__grid">
        <div class="nutri26__item">
          <div class="nutri26__picwrap">
            <img src="<?=$pics; ?>/b26-1.webp" alt="" width="300" height="435" class="js-slide-opac">
          </div>
          <div class="nutri26__itemtxt">Создайте правильный <br>рацион для ребенка</div>
        </div>
        <div class="nutri26__item">
          <div class="nutri26__picwrap">
            <img src="<?=$pics; ?>/b26-2.webp" alt="" width="300" height="435" class="js-slide-opac">
          </div>
          <div class="nutri26__itemtxt">Спланируйте зарядку для <br>пожилой бабушки</div>
        </div>
        <div class="nutri26__item">
          <div class="nutri26__picwrap">
            <img src="<?=$pics; ?>/b26-3.webp" alt="" width="300" height="435" class="js-slide-opac">
          </div>
          <div class="nutri26__itemtxt">Посоветуйте подходящие витамины <br>для друга-вегетарианца</div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="reviewsslider reviewsslider-nutri js-review-slider mb-0">
  <h2 class="title">Вот что говорят <b>студенты <br>онлайн университета <br>Talentsy</b></h2>
  <div class="reviewsslider__wrap">
    <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
    <div class="reviewsslider__cont js-slide-bot">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach (range(1, 11, 1) as $key => $videoNum) : ?>
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




<section class="priceblock priceblock--nutri mb-0" id="offer">
  <div class="container">
    <h2 class="title">Стоимость обучения</h2>
    <div class="priceblock__row flexi">
      <div class="priceblock__price jbm js-slide-left"><span>9375</span><span>₽/МЕС</span></div>
      <div class="priceblock__descr js-slide-right">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
    </div>
    <div class="priceblock__greenprice jbm js-slide-bot">
      <span>От</span> <span class="jsPPSumm">5625</span> <span>₽/МЕС</span>
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





<section class="faqblock faqblock--nutri">
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
          <p>Если на момент окончания обучения у вас не будет диплома о среднем профессиональном или высшем образовании, вы получите сертификат о прохождении обучения.</p>
          <p>Если на момент окончания обучения у вас будет высшее или среднее профессиональное образование, вы получите диплом установленного образца о профессиональной переподготовке. В дипломе будет указана квалификация: «Интегративный нутрициолог».</p>
          <p>Такой диплом дает право вести практическую деятельность.<br>
          Каждый выпускник курса получает два международных диплома.<br>
          Первый диплом <a href="https://www.iphm.co.uk/directory/find-an-accredited-training-provider/talentsy-1/" target="_blank">IPHM</a> и второй диплом <a href="https://cpduk.co.uk/" target="_blank">CPD</a></p>
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
          <p>Да. Наша образовательная программа включает 300 часов практических занятий в мини-группах, во время которых вы сможете закрепить знания и навыки, полученные на лекциях, разбирать реальные кейсы, работать с диагностическими методиками, и выполнять упражнения в парах.</p>
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

    <div class="progrmsummary__item" data-hidewrap="faq1">
      <div class="progrmsummary__head" data-hideopen="faq1">
        <strong>Смогу ли я совмещать обучение с работой?</strong>
        <button class="progrmsummary__plus">+</button>
      </div>
      <div class="progrmsummary__contentwrap" data-hidebox="faq1">
        <div class="progrmsummary__content">
          <p>Мы организовали обучение так, чтобы Вам было максимально удобно и просто. Видеоуроки Вы смотрите у себя в личном кабинете в любое удобное время. К этим материалам можно будет возвращаться неограниченно. Куратор поможет Вам в организации процесса обучения и графика посещения практических занятий. Практики проходят 1 раз в неделю в утреннее или вечернее время, в зависимости от Вашего графика работы.</p>
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




<?php
get_footer();
