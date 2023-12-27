<?php

/*
Template name: Шаблон: Профессия сексолог
*/
get_header();
?>

    <section class="hero hero--sex">
        <div class="hero__h1 font66 jbm">
            Профессия «Консультант<br>
            <b>в сфере сексуальных</b> <br>
            отношений»
        </div>
        <div class="hero__videowrap ">
            <div class="hero__videobox square">
                <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
                    <source src="<?= imgs(); ?>/sexolog/b1-video.mp4">
                </video>
            </div>
            <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
                Стать сексологом-<br>
                консультатном
            </a>
        </div>


        <div class="sex1">
            <div class="container">
                <div class="sex1__grid">
                    <div class="sex1__item">
                        <img data-src="<?= imgs(); ?>/psychology/stack_diploma_retina.png" alt=""
                             class="iphone__propicon lazy js-slide-opac">
                        <div class="iphone__proptitle">Вы получите дипломы</div>
                        <div>
                            <ul class="landing__list">
                                <li>Диплом о проф. переподготовке</li>
                                <li>Международный <b>MBA</b> диплом</li>

                                <li>Международный сертификат <a class="landing__link"
                                                                href="https://www.iphm.co.uk/directory/find-an-accredited-training-provider/talentsy-1/"><b>IPHM</b></a>
                                </li>
                                <li>Международный сертификат <a class="landing__link"
                                                                href="https://cpduk.co.uk/"><b>CPD</b></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sex1__item">
                        <div class="sex1__imgwrap">
                            <img src="<?= imgs(); ?>/sexolog/b2-2.png" alt="">
                        </div>
                        <div class="sex1__title">200+ часов практики</div>
                        <div class="sex1__descr">Семинары и практические занятия в мини-группах под руководством
                            практикующих сексологов
                        </div>
                    </div>
                    <div class="sex1__item">
                        <div class="sex1__imgwrap">
                            <img src="<?= imgs(); ?>/sexolog/b2-3.png" alt="">
                        </div>
                        <div class="sex1__title">Персональный наставник</div>
                        <div class="sex1__descr">Создаст индивидуальную образовательную траекторию для каждого студента,
                            поможет
                            выстроить гибкое расписание, ответит на вопросы и напомнит о занятиях
                        </div>
                    </div>
                    <div class="sex1__item">
                        <div class="sex1__imgwrap">
                            <img src="<?= imgs(); ?>/sexolog/b2-4.png" alt="">
                        </div>
                        <div class="sex1__title">ТОП-специалисты</div>
                        <div class="sex1__descr">Наши преподаватели – доктора и кандидаты наук, востребованные
                            практикующие психологи и
                            сексологи
                        </div>
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
            <?php
            get_template_part('inc/leadform', null, ['buttonTxt' => 'Получить программу']); ?>
        </div>
    </section><!-- //programfromlead -->


    <section class="dreams sex3">
        <div class="container">
            <h2 class="title">В современном обществе <br>существует <b>целый ряд проблем</b></h2>
            <div class="grid-mob-scroll">
                <div class="dreams__grid">
                    <div class="dreams__item dreams__item--border">
                        <div class="dreams__iconwrap">
                            <img data-src="<?= imgs(); ?>/sexolog/b4-1.png" alt="" class="lazy js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Насилие в семье и сексуальное насилие
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--border">
                        <div class="dreams__iconwrap dreams__iconwrap--wide">
                            <img data-src="<?= imgs(); ?>/sexolog/b4-2.png" alt="" class="lazy js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Отсутствие полового воспитания<br>&nbsp;
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--bg">
                        <div class="dreams__iconwrap">
                            <img data-src="<?= imgs(); ?>/sexolog/b4-3.png" alt="" class="lazy">
                        </div>
                        <div class="dreamsltitle">
                            Агрессивное навязывание <br>гендерных стереотипов
                        </div>
                    </div>
                    <div class="dreams__item  dreams__item--light">
                        <div class="dreams__iconwrap">
                            <img data-src="<?= imgs(); ?>/sexolog/b4-4.png" alt="" class="lazy js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Неумение людей работать <br>со своей сексуальностью
                        </div>
                    </div>
                    <div class="dreams__item">
                        <div class="dreams__iconwrap">
                            <img data-src="<?= imgs(); ?>/sexolog/b4-5.png" alt="" class="lazy js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Преследование людей <br>с нетрадиционной <br>ориентацией
                        </div>
                    </div>
                    <div class="dreams__item  dreams__item--border dreams__item--extra">
                        <div class="dreams__iconwrap dreams__iconwrap--wide">
                            <img data-src="<?= imgs(); ?>/sexolog/b4-6.png" alt="" class="lazy js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Неумение открыто говорить <br>с партнером о сексе
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //dreams -->


    <section class="reviewsslider js-review-slider">
        <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
        <div class="reviewsslider__wrap">
            <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
            <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
            <div class="reviewsslider__cont js-slide-bot">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        foreach (range(1, 7, 1) as $key => $videoNum) : ?>
                            <div class="swiper-slide">
                                <a href="<?= imgs(); ?>/sexolog/reviews/<?= str_pad($videoNum, 3, '0',
                                    STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square"
                                   data-ratio="0.5625" data-fancybox="reviewVideo">
                                    <video loop muted playsinline preload="auto" controlslist="nodownload"
                                           disablepictureinpicture="" crossorigin="anonymous"
                                           class="reviewsslider__screen square__img lazy">
                                        <source data-src="<?= imgs(); ?>/sexolog/reviews/<?= str_pad($videoNum, 3, '0',
                                            STR_PAD_LEFT); ?>.mp4">
                                    </video>
                                    <span class="reviewsslider__button">Смотреть видео</span>
                                </a>
                            </div>
                        <?php
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sex6">
        <div class="container">
            <h3 class="sex6__title jbm">
                Средняя стоимость <br>
                консультации специалиста <br>
                по сексуальным отношениям<br>
                составляет
            </h3>
            <div class="sex6__pricewrap flexi">
                <div class="sex6__price flexi ">
                    <span class="jbm">2500</span>
                    <small>₽/час</small>
                </div>
                <div class="sex6__pricedescr">
                    <b>Это на 20% больше,</b> чем <br>
                    стоимость консультации<br>
                    психолога общего профиля
                </div>
            </div>

            <div class="sex6__calc flexi">
                <dl class="sex6dl sex6dl--bg">
                    <dt class="jbm">2</dt>
                    <dd>Консультации <br>в день</dd>
                </dl>
                <div class="sex6__x"></div>
                <dl class="sex6dl sex6dl--border">
                    <dt class="jbm">20</dt>
                    <dd>Рабочих дней <br>в месяц</dd>
                </dl>
                <div class="sex6__x"></div>
                <dl class="sex6dl sex6dl--white">
                    <dt class="jbm">
                        <img src="<?= imgs(); ?>/sexolog/b6-woman.png" class="sex6dl__dlimg" alt="">
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
                <div class="sex6__pricedescr">
                    <b>
                        Может зарабатывать <br>
                        сексолог
                    </b> при минимальной<br>
                    нагрузке
                </div>
            </div>
        </div>
    </section>


    <div class="sex7">
        <div class="container">
            <h2 class="title">
                Поэтому спрос на<br>
                <b>квалифицированных консультантов </b><br>
                постоянно растёт
            </h2>
            <div class="grid2 sex7__grid">
                <div class="grid2__col">
                    <div class="sex7__imgwrap">
                        <img src="<?= imgs(); ?>/sexolog/b7-1.png" alt="">
                    </div>
                    <div class="sex7__text">
                        В 2020 году в России распалось <b>73% браков</b> — в числе основных причин: ревность, измены,
                        отсутствие
                        <b>взаимопонимания</b>
                    </div>
                </div>
                <div class="grid2__col">
                    <div class="sex7__imgwrap">
                        <img src="<?= imgs(); ?>/sexolog/b7-2.png" alt="">
                    </div>
                    <div class="sex7__text">
                        Запросы на консультацию сексолога <b>выросли за два года на 55%</b> и с каждым месяцем
                        продолжают расти
                    </div>
                </div>
                <div class="grid2__col">
                    <div class="sex7__imgwrap">
                        <img src="<?= imgs(); ?>/sexolog/b7-3.png" alt="">
                    </div>
                    <div class="sex7__text">
                        На фоне изменений образа жизни в 2020 году количество запросов на тему «отношения в паре,
                        семейные
                        отношения, интимные отношения» возросло <b>в 2,5 раза по данным Яндекса</b>
                    </div>
                </div>
                <div class="grid2__col">
                    <div class="sex7__imgwrap">
                        <img src="<?= imgs(); ?>/sexolog/b7-4.png" alt="">
                    </div>
                    <div class="sex7__text">
                        Сексология остается редкой профессией: на сайте hh.ru размещено 399 тысяч резюме психологов и
                        только <b>1
                            тысяча резюме сексологов.</b>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- //sex7 -->


    <section class="psy8">
        <div class="container">
            <h2 class="title">Мы готовим квалифицированных <br><b>консультантов в сфере <br>сексуальных отношений</b>
            </h2>
            <img data-src="<?= imgs(); ?>/sexolog/b8-bg.png" alt="" class="psy8__bg lazy"
                 style="aspect-ratio: 1680 / 739;">
            <div class="psy8__post title js-slide-bot">
                с нуля за <b>6 месяцев</b>
            </div>
        </div>
    </section>


    <section class="mentors">
        <div class="container">
            <h2 class="title">вы будете учиться <span>у&nbsp;</span><b>10 ТОП-<br class="mobbr">специалистов</b> <span>со
        всей страны</span></h2>
            <div class="mentorsfeat">
                <div class="mentorsfeat__item">
                    <img src="<?= imgs(); ?>/sexolog/b9-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
                    <div class="mentorsfeat__title">Мы потратили полгода и&nbsp;миллионы рублей</div>
                    <div class="mentorsfeat__text">
                        чтобы собрать их всех <br>в 1 курсе
                    </div>
                </div>
                <div class="mentorsfeat__item">
                    <img src="<?= imgs(); ?>/sexolog/b9-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
                    <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
                    <div class="mentorsfeat__text">
                        у которых календари расписаны <br>на полгода вперед
                    </div>
                </div>
                <div class="mentorsfeat__item">
                    <img src="<?= imgs(); ?>/sexolog/b9-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
                    <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
                    <div class="mentorsfeat__text">
                        чтобы ты мог учиться у авторитетных <br>специалистов
                    </div>
                </div>
            </div>

            <?php
            get_template_part('inc/mentors-block'); ?>

        </div>
    </section><!-- //mentors -->


    <section class="stepform sex11">
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
            <?php
            get_template_part('inc/leadform', null, ['formClassName' => 'programfromlead__formwrap--red']); ?>
        </div>
    </section><!-- //stepform -->


    <section class="features sex12">
        <div class="container">
            <h2 class="title">Вас ждет <b>фундаментальная, <br>глубокая и подробная</b> <br><span>программа <br
                            class="mobbr">обучения</span></h2>
            <div class="features__wrap">
                <div class="features__left js-slide-bot">
                    <video preload="auto" playsinline autoplay loop muted class="lazy">
                        <source data-src="<?= imgs(); ?>/sexolog/b12-video.mp4">
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
                            <img data-src="<?= imgs(); ?>/sexolog/b12-1.png" alt="" class="lazy js-slide-opac">
                            <p>Программа соответствует <b>профессиональным стандартам</b>
                            </p>
                        </div>
                        <div class="features__item">
                            <img data-src="<?= imgs(); ?>/sexolog/b12-2.png" alt="" class="lazy js-slide-opac">
                            <p><b>Практика</b> начнется с первых дней обучения</p>
                        </div>
                        <div class="features__item">
                            <img data-src="<?= imgs(); ?>/sexolog/b12-3.png" alt="" class="lazy js-slide-opac">
                            <p><b>Современные</b> методики обучения</p>
                        </div>
                        <div class="features__item">
                            <img data-src="<?= imgs(); ?>/sexolog/b12-4.png" alt="" class="lazy js-slide-opac">
                            <p>Более <b> 100 дополнительных материалов </b></p>
                        </div>
                    </div>

                    <div class="psy11__gridwrap">
                        <div class="grid-mob-scroll">
                            <div class="psy11__grid">
                                <div class="psy11__item psy11__item--wide">
                                    <img data-src="<?= imgs(); ?>/sexolog/b12-1.png" alt="" class="lazy js-slide-opac">
                                    <p>Программа соответствует <b>профессиональным стандартам</b></p>
                                </div>
                                <div class="psy11__item">
                                    <img data-src="<?= imgs(); ?>/sexolog/b12-2.png" alt="" class="lazy js-slide-opac">
                                    <p>Практика <b>начнется с первых дней обучения</b></p>
                                </div>
                                <div class="psy11__item">
                                    <img data-src="<?= imgs(); ?>/sexolog/b12-3.png" alt="" class="lazy js-slide-opac">
                                    <p>Современные <b>методики обучения</b></p>
                                </div>
                                <div class="psy11__item">
                                    <img data-src="<?= imgs(); ?>/sexolog/b12-4.png" alt="" class="lazy js-slide-opac">
                                    <p>Более 100 дополнительных материалов</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- //sex12 -->


    <section class="guideform sexguideform">
        <div class="container">
            <h3 class="guideform__title title js-slide-bot">
                <span>Получите <b>гайд</b></span>
                <span>по профессии</span>
                <span><b>Сексолог</b></span>
                <img src="<?= imgs(); ?>/sexolog/b13-book.png" alt="">
            </h3>
            <?php
            get_template_part('inc/leadform', null, [
                'formClassName' => 'programfromlead__formwrap--red',
                'buttonTxt' => 'Получить гайд'
            ]); ?>
        </div>
    </section><!-- //guideform -->


    <section class="features sex15">
        <div class="container">
            <h2 class="title">Вас ждут практические <br>занятия в <b>мини-группах</b></h2>
            <div class="features__wrap">
                <div class="features__left js-slide-bot">
                    <video preload="auto" playsinline autoplay loop muted class="lazy">
                        <source data-src="<?= imgs(); ?>/sexolog/b15-video.mp4">
                    </video>
                </div>
                <div class="features__right">
                    <div class="features__subtitle">
                        В формате семинаров, тренингов и&nbsp;супервизий под руководством опытных психологов
                    </div>
                    <div class="features__grid">
                        <div class="features__item">
                            <img src="<?= imgs(); ?>/sexolog/b15-1.jpg" alt="" class="js-slide-opac">
                            <p>Каждый получит <br>достаточно <b>внимания наставника</b></p>
                        </div>
                        <div class="features__item">
                            <img src="<?= imgs(); ?>/sexolog/b15-2.jpg" alt="" class="js-slide-opac">
                            <p>Участники группы <b>мотивируют и помогают</b> друг другу</p>
                        </div>
                        <div class="features__item">
                            <img src="<?= imgs(); ?>/sexolog/b15-3.jpg" alt="" class="js-slide-opac">
                            <p>Студенты растут <b>в среде единомышленников</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //sex15 -->


    <section class="timeslot timeslot--sex">
        <div class="container">
            <h2 class="title">
                Научим <b>рекламировать свои <br>
                    услуги</b> и <b>привлекать <br>клиентов</b>
            </h2>
            <div class="timeslot__box">
                <img src="<?= imgs(); ?>/sexolog/b19-bg.svg" alt="" class="timeslot__bg">
                <div class="timeslot__over flexi">
                    <div class="timeslot__text">
                        <p>
                            С каждой группой<br>
                            работает отдельный<br>
                            куратор-специалист<br>
                            по привлечению клиентов
                        </p>
                        <small>начиная с <span>третьего месяца</span> обучения</small>
                    </div>
                    <div class="timeslot__avawrap">
                        <img src="<?= imgs(); ?>/psychology/b19-ava.png" alt="" class="timeslot__ava js-slide-opac">
                    </div>
                    <img src="<?= imgs(); ?>/psychology/b19-matrix.png" alt="" class="timeslot__matrix js-slide-opac">
                </div>
            </div>
            <div class="jbm timeslot__bot">с 3 месяца</div>
        </div>
    </section><!-- //timeslot -->


    <section class="diplomblock diplomblock--sex">
        <div class="container diploma__container">
            <h2 class="diploma__header"><b class="diploma__sex">Каждый выпускник</b> <br> курса получает</h2>
            <div class="diploma__block diploma__layout--grey">
                <div class="diploma__info"><p class="diploma__num diploma__black--back">01</p>
                    <h3 class="diploma__subheader diploma__sex">Диплом о <br> профессиональной переподготовке <br>
                        <span
                                class="diploma__black">установленного <br> образца РФ</span></h3>
                    <div class="diploma__text">Это официальный документ, <span class="diploma__grey">который <br> дает вам право осуществлять <br> профессиональную деятельность</span>
                    </div>
                </div>
                <div class="diploma__pic"><img
                            src="<?= imgs(); ?>/sexolog/dip-sex.jpg" alt="diploma" class="diploma__img"
                            width="540" height="380"></div>

            </div>
            <div class="diploma__block diploma__layout--black">
                <div class="diploma__info"><p class="diploma__sex--back diploma__num ">02</p>
                    <h3 class="diploma__subheader diploma__white">MBA Диплом</h3>
                    <div class="diploma__text diploma__grey">Open European Academy (г. Прага) в <br> сотрудничестве с
                        Европейской Ассоциацией ВУЗов
                        <br> и преподавателей высшей школы HiSTES, <span class="diploma__white">дающий <br> право ведения деятельности в Евросоюзе и <br> признаваемый во всем мире.</span>
                    </div>

                    <div class="diploma__subtext">
                        <span class="diploma__white diploma__mark ">А также 2 международных сертификата:</span>
                        <ul class="diploma__list">
                            <li class="diploma__item diploma__grey">от аккредитующего центра Великобритании <a
                                        href="https://www.iphm.co.uk/directory/find-an-accredited-training-provider/talentsy-1/"
                                        class="diploma__white diploma__link">IPHM</a></li>
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


    <section class="features sex18">
        <div class="container">
            <h2 class="title">Мы организовали <b>яркую <br>студенческую жизнь</b></h2>
            <div class="features__wrap">
                <div class="features__left js-slide-bot">
                    <img src="<?= imgs(); ?>/sexolog/b18-left.jpg" alt="" class="features__leftimg">
                </div>
                <div class="features__right">
                    <div class="features__grid">
                        <div class="features__item">
                            <picture class="js-slide-opac">
                                <!-- <source media="(min-width: 768px)" srcset="<?= imgs(); ?>/sexolog/b18-1.webp"> -->
                                <img src="<?= imgs(); ?>/sexolog/b18-1.webp" alt="">
                            </picture>
                            <div class="features__subtitle">Научный клуб</div>
                            <p>Научим составлять портфолио и подготовим к поступлению в магистратуру</p>
                        </div>
                        <div class="features__item">
                            <picture class="js-slide-opac">
                                <source media="(min-width: 768px)" srcset="<?= imgs(); ?>/psychology/b16-2.jpg">
                                <img src="<?= imgs(); ?>/sexolog/b18-2.webp" alt="">
                            </picture>
                            <div class="features__subtitle">Киноклуб</div>
                            <p>Обсуждаем фильмы в&nbsp;контексте сексологии</p>
                        </div>
                        <div class="features__item">
                            <img src="<?= imgs(); ?>/sexolog/b18-3.webp" alt="" class="js-slide-opac">
                            <div class="features__subtitle">Читальный зал</div>
                            <p>Обсуждаем интересные книги</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //sex18 -->


    <section class="stepform sex19">
        <div class="container">
            <h2 class="title">Получить консультацию специалиста</h2>
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
            <?php
            get_template_part('inc/leadform', null, [
                'formClassName' => 'programfromlead__formwrap--red',
                'buttonTxt' => 'Получить гайд'
            ]); ?>
        </div>
    </section><!-- //stepform -->


    <div class="sex20">
        <section class="statistic container psy20">
            <h2 class="title">Поговорим о цифрах</h2>
            <div class="statistic__grid">
                <dl class="statistic__item statistic__item--verbg">
                    <dt>10<img src="<?= imgs(); ?>/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
                    <dd>Топ <br>преподавателей</dd>
                </dl>
                <dl class="statistic__item statistic__item--verborder">
                    <dt class="js-slide-opac">6</dt>
                    <dd>Месяцев <br>обучения</dd>
                </dl>
                <dl class="statistic__item">
                    <dt class="js-slide-opac">200+</dt>
                    <dd>Часов работы с наставниками <br>и супервизорами</dd>
                </dl>
                <dl class="statistic__item">
                    <dt class="js-slide-opac">400 <span>часов</span></dt>
                    <dd>Интересных и насыщенных <br>занятий</dd>
                </dl>
                <dl class="statistic__item">
                    <dt class="js-slide-opac">3</dt>
                    <dd>Дня очных <br>мероприятий <br>в Москве</dd>
                </dl>
                <dl class="statistic__item  statistic__item--verred">
                    <dt class="js-slide-opac">12/7</dt>
                    <dd>Поддержка студентов во время обучения</dd>
                </dl>
            </div>
        </section>
    </div>

    <div class="sex21">
        <section class="progrmsummary container">
            <h2 class="title">Программа обучения</h2>
            <div class="progrmsummary__wrap">
                <div class="progrmsummary__item" data-hidewrap="1">
                    <div class="progrmsummary__head" data-hideopen="1">
                        <span>Модуль 1. Сексология не только про секс</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="1">
                        <div class="progrmsummary__content textcontent">
                            <p>Вводный модуль погрузит вас в системное изучение этой науки и практики.</p>
                            <p>Вы изучите:</p>
                            <ul>
                                <li>основные понятия и концепции сексуальности человека</li>
                                <li>историко-эволюционные подходы к ролям мужчины и женщины в обществе</li>
                                <li>концепцию развития сексуальной культуры в ходе истории человечества</li>
                                <li>новейшие представления о трендах и тенденциях сексуальной жизни в XXI в.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="2">
                    <div class="progrmsummary__head" data-hideopen="2">
                        <span>Модуль 2. Особенности психологического консультирования по вопросам сексуальности</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="2">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Как проходит консультация в сфере сексуальных отношений?</i> Опытные практикующие
                                сексологи расскажут
                                об общих требованиях и особенностях консультирования в этой сфере и научат:</p>
                            <ul>
                                <li>эффективно организовывать начало работы с клиентом, собирать анамнез и выявлять
                                    проблемы
                                </li>
                                <li>определять цели и задачи консультирования</li>
                                <li>следовать этике психолога-консультанта по сексуальным отношениям</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="3">
                    <div class="progrmsummary__head" data-hideopen="3">
                        <span>Модуль 3. Мужская и женская сексуальность</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="3">
                        <div class="progrmsummary__content textcontent">
                            <p>Изучив этот модуль, Вы узнаете:</p>
                            <ul>
                                <li>Об основах сексуального возбуждения и работе с сексуальными стимулами</li>
                                <li>Что такое эрогенные зоны и как на них воздействовать</li>
                                <li>Как половое поведение связано с возрастом и общим состоянием здоровья</li>
                                <li>Что такое дисфункции, их разновидности, медицинские и психологические причины</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="4">
                    <div class="progrmsummary__head" data-hideopen="4">
                        <span>Модуль 4. Как устроен мозг мужчины и женщины</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="4">
                        <div class="progrmsummary__content textcontent">
                            <p>Что современная наука знает о различиях в строении и работе головного мозга у
                                представителей разных
                                полов, о работе гормонов и биохимических основах любви и привязанности.</p>
                            <p>Основные темы модуля:</p>
                            <ul>
                                <li>психология мужчины и женщины, различия в развитии и строении головного мозга</li>
                                <li>половые различия в мышлении и коммуникации, роль межполушарной асимметрии в
                                    поведении мужчин и женщин
                                </li>
                                <li>гормоны и их влияние на половое поведение, феромоны</li>
                                <li>выбор партнера и биохимия любви, проблема формирования любовной зависимости,
                                    проблема переживания
                                    разрыва отношений
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="5">
                    <div class="progrmsummary__head" data-hideopen="5">
                        <span>Модуль 5. Развитие сексуальности и сексуальное воспитание</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="5">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Откуда берутся дети?</i> Насколько сексуальное поведение взрослого человека зависит от
                                воспитания и
                                традиций родительской семьи? Как заложить у ребенка психологические основы гармоничного
                                общения с
                                противоположным полом в будущем?</p>
                            <p>В этом модуле вы узнаете:</p>
                            <ul>
                                <li>о закономерностях психосексуального развития человека</li>
                                <li>факторах формирование здоровой сексуальности в детском и подростковом возрасте</li>
                                <li>роль психологические травмы, полученные в детском возрасте</li>
                                <li>о гендерных ролях, влиянии поведенческих моделей отца и матери на развитие
                                    сексуальности ребенка
                                </li>
                            </ul>
                            <p>Также вы разберетесь с мифами и стереотипами о женственности и мужественности. На
                                практических занятиях
                                вместе с наставниками проанализируете популярные темы психологического консультирования
                                родителей по
                                вопросам сексуальности детей и подростков, поговорите об основных ошибках родителей в
                                сексуальном
                                воспитании детей.</p>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="6">
                    <div class="progrmsummary__head" data-hideopen="6">
                        <span>Модуль 6. Формирование гендерной идентичности и сексуальной ориентации</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="6">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Хочу себе отрезать грудь!</i> В процессе изучения этого модуля, отбросив социальные
                                стереотипы, вы
                                разберетесь с тем:</p>
                            <ul>
                                <li>как формируется гендерная идентичность и с какими структурами мозга она связана</li>
                                <li>что такое цисгендерная и трансгендерная идентичность</li>
                                <li>что лежит в основе развития сексуальной ориентации и почему она не зависит от
                                    воспитания
                                </li>
                                <li>проблемы и запросы ЛГБ-клиентов, особенности психологического консультирования</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="7">
                    <div class="progrmsummary__head" data-hideopen="7">
                        <span>Модуль 7. Семейно-супружеские аспекты в сексологическом консультировании</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="7">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Есть ли секс после конфетно-букетного периода или рождения детей?</i> В рамках модуля
                                разбирается
                                крайне важная для консультантов в сфере сексологии тема – семейные отношения. На
                                практических занятиях вы
                                обсудите конкретные запросы и кейсы из области семейного консультирования в сексологии.
                                Отдельные занятия
                                будут посвящены диагностике, основным стратегиям и техникам в семейном консультировании.
                            </p>
                            <p>Вы изучите:</p>
                            <ul>
                                <li>Системный подход в семейном консультировании</li>
                                <li>Основные направления работы с парными запросами (КПТ, ЭФТ, ЭОТ)</li>
                                <li>Стадии и кризисы, через которые проходит любая семья</li>
                                <li>Основные проблемы в сексуальной жизни пары и особенности работы с ними</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="8">
                    <div class="progrmsummary__head" data-hideopen="8">
          <span>Модуль 8. Психологическое консультирование при проблеме отсутствия влечения и сексуального охлаждения в
            паре</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="8">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Почему супруги изменяют друг другу и есть ли жизнь после развода?</i> В модуле
                                рассматриваются одни из
                                самых распространенных запросов, с которыми пары обращаются за консультацией сексолога,
                                и практические
                                методы для улучшения качества интимной жизни в паре</p>
                            <ul>
                                <li>Сексуальная коммуникация в паре</li>
                                <li>Диагностика психологических причин сексуального охлаждения в паре</li>
                                <li>Особенности работы с проблемой супружеской измены</li>
                                <li>Секс-терапия и техники интимного массажа для женщин</li>
                                <li>Психологическая помощь после расставания и развода</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="9">
                    <div class="progrmsummary__head" data-hideopen="9">
                        <span>Модуль 9. Деструктивная сексуальность</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="9">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Мне нравятся все женщины на свете.</i> В рамках модуля представлен разбор разных видов
                                сексуальных
                                девиаций. Для практикующего специалиста важно уметь распознавать парафилии (или половые
                                девиации) и
                                понимать причины их развития.</p>
                            <p>Вы узнаете:</p>
                            <ul>
                                <li>как определить границы нормы в партнерских отношениях</li>
                                <li>в каких случаях требуется лечение парафилии и вмешательство врача-психиатра</li>
                                <li>в каких случаях могут применяться психотерапевтические методы</li>
                                <li>алгоритм работы при проблеме порнозависимости</li>
                                <li>об особенности психологической работы с жертвами инцеста</li>
                                <li>о других видах парафилий (вуайеризм, эксгибиционизм, BDSM-отношения)</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="10">
                    <div class="progrmsummary__head" data-hideopen="10">
                        <span>Модуль 10. Сексуальная агрессия</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="10">
                        <div class="progrmsummary__content textcontent">
                            <p><i>Меня изнасиловали и я никому не скажу.</i> Как "разговорить" жертву сексуального
                                насилия, оказать
                                психологическую помощь и найти ресурсы для нормализации жизни? Помогут знания данного
                                модуля:</p>
                            <ul>
                                <li>формы сексуальной агрессии</li>
                                <li>техники помощи клиентам разных возрастов, подвергнувшихся сексуальному насилию</li>
                                <li>что такое сексуальное домогательство и как работать с клиентами, пережившими
                                    харассмент
                                </li>
                                <li>почему важна проблема насилия в семьях, каковы ее причины и как сексолог может
                                    помочь женщинам,
                                    ставшим жертвами домашнего насилия
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- //item -->

                <div class="progrmsummary__item" data-hidewrap="11">
                    <div class="progrmsummary__head" data-hideopen="11">
                        <span>Бизнес-модуль. Формирование личного бренда.</span>
                        <button class="progrmsummary__plus">+</button>
                    </div>
                    <div class="progrmsummary__contentwrap" data-hidebox="11">
                        <div class="progrmsummary__content textcontent">
                            <p>Успешные блогеры и предприниматели-психологи расскажут о личном бренде как инструменте
                                продвижения, о
                                правилах позиционирования себя в социальных сетях, ведении аккаунтов и других
                                составляющих продвижения
                                себя как профессионала в сфере консультирования по вопросам сексуальности.</p>
                        </div>
                    </div>
                </div><!-- //item -->
            </div>
        </section><!-- //progrmsummary -->
    </div>


<?php
if (get_field('is-show_quiz')): ?>
    <section class="quizlink">
        <div class="container">
            <h2 class="title">Подходит ли вам профессия <br>Сексолог-консультант?</h2>
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
<?php
endif; ?>


    <section class="dreams sex23">
        <div class="container">
            <h2 class="title">Это обучение <b>поможет вам</b></h2>
            <div class="grid-mob-scroll">
                <div class="dreams__grid">
                    <div class="dreams__item">
                        <div class="dreams__iconwrap">
                            <img src="<?= imgs(); ?>/sexolog/b23-1.png" alt="" class="js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Работать с сексуальными<br>
                            дисфункциями, вызванными<br>
                            психологическими причинами
                        </div>
                    </div>
                    <div class="dreams__item">
                        <div class="dreams__iconwrap dreams__iconwrap--wide">
                            <img src="<?= imgs(); ?>/sexolog/b23-2.png" alt="" class="js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Помогать людям принять и полюбить<br>
                            себя, собственное тело, чтобы<br>
                            не бояться секса
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--bg">
                        <div class="dreams__iconwrap">
                            <img src="<?= imgs(); ?>/sexolog/b23-3.png" alt="">
                        </div>
                        <div class="dreamsltitle">
                            Глубже понять свою личность <br>и сексуальность
                            <small class="dreamsltitle__min">
                                работать с самооценкой и принятием своего
                                тела, открыто говорить с партнером на интимные темы
                            </small>
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--nobg">
                        <div class="dreams__iconwrap">
                            <img src="<?= imgs(); ?>/sexolog/b23-4.png" alt="" class="js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Помогать справиться <br>
                            с расстройствами влечения<br>
                            и возбуждения
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--nobg">
                        <div class="dreams__iconwrap">
                            <img src="<?= imgs(); ?>/sexolog/b23-5.png" alt="" class="js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Подсказать, как учесть разный<br>
                            сексуальный темперамент у супругов,<br>
                            чтобы это не мешало отношениям
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--border dreams__item--extra">
                        <div class="dreams__iconwrap dreams__iconwrap--wide">
                            <img src="<?= imgs(); ?>/sexolog/b23-6.png" alt="" class="js-slide-opac radius0">
                        </div>
                        <div class="dreamsltitle">
                            Получать оргазм во время интимной<br>
                            близости (по статистике его <br>
                            испытывают меньше половины женщин)
                        </div>
                    </div>
                    <div class="dreams__item">
                        <div class="dreams__iconwrap">
                            <img src="<?= imgs(); ?>/sexolog/b23-7.png" alt="" class="js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Проводить диагностику проблем<br>
                            сексуальной сферы личности<br>
                            и пары
                            <small class="dreamsltitle__min">
                                подбирать стратегию и тактику работы с индивидуальными и парными клиентскими запросами
                            </small>
                        </div>
                    </div>
                    <div class="dreams__item dreams__item--border">
                        <div class="dreams__iconwrap">
                            <img src="<?= imgs(); ?>/sexolog/b23-8.png" alt="" class="js-slide-opac">
                        </div>
                        <div class="dreamsltitle">
                            Помогать семейным парам<br>
                            восстановить гармоничные<br>
                            интимные отношения
                            <small class="dreamsltitle__min">
                                Помочь преодолеть охлаждение друг к другу и пережить кризисы в семейных отношениях,
                                связанные с
                                рождением ребенка, изменой одного из супругов
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title sex23__bottitle">
                а также <b>Консультировать <br>родителей</b> по вопросам детской<br>и подростковой сексуальности
            </h2>
        </div>
    </section><!-- //dreams -->


    <section class="psy7 sex24">
        <div class="container">
            <h2 class="title">Для кого наш курс</h2>
            <div class="psy7__wrap">
                <div class="psy7__item js-slide-interval">
                    <img src="<?= imgs(); ?>/sexolog/b24-1.svg" alt="" class="psy7__icon">
                    <div class="psy7__title">Для тех, кто мечтает о профессии сексолога с нуля</div>
                    <div class="psy7__text">
                        Вы всегда хотели зарабатывать любимым и благородным делом. Люди тянутся к вам за советами, у вас
                        богатый
                        жизненный опыт, но не хватает знаний
                    </div>
                </div>
                <div class="psy7__item js-slide-interval">
                    <img src="<?= imgs(); ?>/sexolog/b24-2.svg" alt="" class="psy7__icon">
                    <div class="psy7__title">Для тех, кто интересуется темой сексологии в личных целях</div>
                    <div class="psy7__text">
                        И хочет разобраться в вопросах секса, семейной психологии, отношений в паре, гендерной
                        психологии и обрести
                        благополучие в психологической и сексуальной сфере
                    </div>
                </div>
                <div class="psy7__item js-slide-interval">
                    <img src="<?= imgs(); ?>/sexolog/b24-3.png" alt="" class="psy7__icon">
                    <div class="psy7__title">Для специалистов с высшим психологическим образованием</div>
                    <div class="psy7__text">
                        Или студентов старших курсов по психологии, которые рассматривают обучение сексологии как способ
                        расширить
                        знания, повысить квалификацию и доход
                    </div>
                </div>
                <div class="psy7__item js-slide-interval">
                    <img src="<?= imgs(); ?>/sexolog/b24-4.png" alt="" class="psy7__icon">
                    <div class="psy7__title">Для тех, кому нужен диплом, чтобы работать официально.</div>
                    <div class="psy7__text">
                        Вы уже работаете и хотите подкрепить свой статус официальным документом - дипломом сексолога
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //psy6 -->


    <section class="priceblock" id="offer">
        <div class="container">
            <h2 class="title">Стоимость обучения</h2>
            <div class="priceblock__row flexi">
                <div class="priceblock__price jbm"><span>9375</span><span>₽/МЕС</span></div>
                <div class="priceblock__descr">
                    <p>Беспроцентная рассрочка на 24 месяца.</p>
                    <p>Первый платеж через 2 месяца.</p>
                </div>
            </div>
            <div class="priceblock__greenprice jbm"><span>От</span> <span class="jsPPSumm">5625</span>
                <span>₽/МЕС</span>
                <small>Скидка 40% &nbsp;<b>до <?= getTomorow(); ?></b></small></div>
            <div class="priceblock__mobdescr">
                <p>Беспроцентная рассрочка на 24 месяца.</p>
                <p>Первый платеж через 2 месяца.</p>
            </div>
            <?php
            get_template_part('inc/leadform', null, [
                'formClassName' => 'programfromlead__formwrap--red',
                'showTopTxt' => true,
                'isPromoForm' => true,
            ]); ?>
        </div>
    </section><!-- //priceblock -->


    <section class="faqblock">
        <h2 class="title">Часто задаваемые вопросы</h2>
        <div class="faqblock__wrap container">
            <div class="progrmsummary__item" data-hidewrap="faq1">
                <div class="progrmsummary__head" data-hideopen="faq1">
                    <strong>Нужна ли специальная подготовка для обучения на этом курсе?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq1">
                    <div class="progrmsummary__content">
                        <p>Нет, специальная подготовка или психологическое образование не требуется. Учиться можно даже
                            не имея высшего образования.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq2">
                <div class="progrmsummary__head" data-hideopen="faq2">
                    <strong>Какой документ я получу после окончания обучения?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq2">
                    <div class="progrmsummary__content">
                        <p>Если на момент окончания обучения у вас не будет диплома о среднем профессиональном или
                            высшем образовании, вы получите сертификат о прохождении обучения.</p>
                        <p>
                            Если на момент окончания обучения у вас будет высшее или среднее профессиональное
                            образование, вы получите диплом установленного образца о профессиональной переподготовке. В
                            дипломе будет указана квалификация: «Психолог-консультант в сфере сексуальных
                            отношений».<br>
                            Такой диплом дает право вести практическую деятельность.<br>
                            Каждый выпускник курса получает два международных диплома.<br>
                            Первый диплом <b>IPHM</b> и второй диплом <b>CPD</b>
                        </p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq3">
                <div class="progrmsummary__head" data-hideopen="faq3">
                    <strong>Смогу ли я получить все нужные навыки онлайн?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq3">
                    <div class="progrmsummary__content">
                        <p>Да. Наша образовательная программа включает 200 часов практических занятий в мини-группах, во
                            время которых вы сможете закрепить знания и навыки, полученные на лекциях, разбирать
                            реальные кейсы, работать с диагностическими методиками, и выполнять упражнения в парах.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq4">
                <div class="progrmsummary__head" data-hideopen="faq4">
                    <strong>Если я пропустил практическое занятие, что делать?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq4">
                    <div class="progrmsummary__content">
                        <p>Особенностью нашей программы является построение индивидуальной траектории обучения и
                            создание гибкого расписания для всех студентов. Если Вы пропустили занятие, Вы сможете
                            посетить его с другой группой в удобное время или посмотреть в записи.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq5">
                <div class="progrmsummary__head" data-hideopen="faq5">
                    <strong>Кому я смогу задавать вопросы в процессе обучения?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq5">
                    <div class="progrmsummary__content">
                        <p>За каждой группой наших студентов закреплен куратор, который сможет оперативно ответить на
                            все вопросы. На все вопросы по содержанию лекций на платформе будут отвечать
                            преподаватели.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq6">
                <div class="progrmsummary__head" data-hideopen="faq6">
                    <strong>Смогу ли я совмещать обучение с работой?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq6">
                    <div class="progrmsummary__content">
                        <p>Мы организовали обучение так, чтобы Вам было максимально удобно и просто. Видеоуроки Вы
                            смотрите у себя в личном кабинете в любое удобное время. К этим материалам можно будет
                            возвращаться неограниченно. Куратор поможет Вам в организации процесса обучения и графика
                            посещения практических занятий. Практики проходят 1 раз в неделю в утреннее или вечернее
                            время, в зависимости от Вашего графика работы.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq7">
                <div class="progrmsummary__head" data-hideopen="faq7">
                    <strong>Какое программное обеспечение мне понадобится для обучения?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq7">
                    <div class="progrmsummary__content">
                        <p>Мы постарались сделать курс максимально доступным для каждого студента. Поэтому в ходе
                            обучения мы используем следующие сервисы:</p>
                        <p>Zoom — для проведения практик и всех групповых активностей.</p>
                        <p>Telegram — мессенджер, в котором происходит общение куратора, преподавателей и студентов.</p>
                        <p>Платформа Talentsy открывается в любом веб-браузере, на ней размещаются лекции и
                            дополнительные материалы к ним.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq8">
                <div class="progrmsummary__head" data-hideopen="faq8">
                    <strong>Смогу ли я подключаться с планшета или телефона?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq8">
                    <div class="progrmsummary__content">
                        <p>Да. Для этого на нем должны быть установлены веб-браузер, zoom и Телеграм.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq9">
                <div class="progrmsummary__head" data-hideopen="faq9">
                    <strong>Будет ли итоговый экзамен?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq9">
                    <div class="progrmsummary__content">
                        <p>Для нас очень важно, чтобы студенты усвоили все содержание курса на высоком уровне. Поэтому
                            по итогам каждой недели обучения Вы будете проходить тест, где требуется набрать от 70%
                            правильных ответов. Количество попыток прохождения теста не ограничено. В конце обучения
                            будет итоговый тест. Вы получаете диплом при условии успешного прохождения этого
                            тестирования.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq10">
                <div class="progrmsummary__head" data-hideopen="faq10">
                    <strong>Что если мне не понравится?</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq10">
                    <div class="progrmsummary__content">
                        <p>Мы уверены в качестве нашей образовательной программы, поэтому если курс вам не понравится,
                            мы сделаем возврат средств пропорционально пройденным материалам, согласно условиям
                            публичной оферты.</p>
                    </div>
                </div>
            </div><!-- //item -->

            <div class="progrmsummary__item" data-hidewrap="faq11">
                <div class="progrmsummary__head" data-hideopen="faq11">
                    <strong>Особенности курсов сексологии</strong>
                    <button class="progrmsummary__plus">+</button>
                </div>
                <div class="progrmsummary__contentwrap" data-hidebox="faq11">
                    <div class="progrmsummary__content">
                        <p>После окончания курсов у вас будет диплом о проф. переподготовке. Вы получите специализацию в
                            сфере психологического консультирования, диплом о профессиональной переподготовке и начните
                            заниматься частной практикой.</p>
                        <p>На курсе более 200 часов практики. Занятия в мини-группах под руководством опытных
                            практикующих сексологов.</p>
                        <p>Наши преподаватели – доктора и кандидаты наук, востребованные практикующие психологи и
                            сексологи</p>
                    </div>
                </div>
            </div><!-- //item -->

        </div>
    </section>


<?php
get_footer();
