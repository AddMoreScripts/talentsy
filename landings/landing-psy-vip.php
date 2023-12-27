<?php
/*
Template name: Шаблон: Лендинг - astro-fictitious
*/
get_header(null, ['white' => true]);
$pics = imgs() . '/psy-vip';
$saleDate = 'до ' . getTomorow();
?>
    <div class="pagewrap">
    <section class="orkt1 beayhack1">
        <div class="clocontainer">
            <div class="vip-tag">
                VIP-Тариф
            </div>
            <h1 class="clob1__title orkt1__h1 jbm">
                ЗА 1 ГОД ПОМОЖЕМ ВАМ СТАТЬ УСПЕШНЫМ <span>ПСИХОЛОГОМ-КОНСУЛЬТАНТОМ</span> И ЗАПУСТИТЬ СВОЮ ЧАСТНУЮ
                ПРАКТИКУ
            </h1>
            <div class="orkt1sale beayhack1sale">
                <img src="<?= $pics; ?>/b1-badge.svg" alt="" class="orkt1sale__bg">
                <span>-39<small>%</small></span>
                <em><?= $saleDate; ?></em>
            </div>
            <div class="clob1__line"></div>
            <div class="clob1__main cloflexi">
                <aside class="clob1__side">
                    <img src="<?= $pics; ?>/b1-lead.png" alt="" class="clob1__lead">
                </aside>
                <div class="clob1__left">
                    <div class="beayhack1__title">VIP - это 3 полноценных мощных курса:</div>
                    <ul class="beayhack1__list">
                        <li>Первый год осваиваете базовый курс психолог-консультант</li>
                        <li>Второй год изучаем 2 специализации на выбор</li>
                    </ul>
                    <div class="sketching1__action">
                        <button class="sketching1__button clobtn" data-scrollto="#orderform">Записаться на
                            курс
                        </button>
                        <div class="sketching1__counter">
                            <img src="<?= $pics; ?>/b1-reload.svg" alt="" class="sketching1__reload">
                            <span>Осталось <b>6 мест</b> <br>на&nbsp;новый поток</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="clocontainer">
            <div class="vip-tag">
                VIP-Тариф
            </div>
            <h1 class="orkt1__h1 jbm">
                ЗА 1 ГОД ПОМОЖЕМ ВАМ СТАТЬ УСПЕШНЫМ <span>ПСИХОЛОГОМ-КОНСУЛЬТАНТОМ</span> И ЗАПУСТИТЬ СВОЮ ЧАСТНУЮ
                ПРАКТИКУ
            </h1>

            <div class="orkt1sale beayhack1sale">
                <img src="<?php /*= $pics; */?>/b1-badge.svg" alt="" class="orkt1sale__bg">
                <span>-39<small>%</small></span>
                <em><?php /*= $saleDate; */?></em>
            </div>
            <div class="cloform__line">
            </div>

            <div class="orkt1bot">
                <img src="<?php /*= $pics; */?>/b1-lead.png" alt="" class="orkt1bot__bg beayhack1__bg">
                <div class="orkt1bot__over">
                    <div class="orkt1bot__main">
                        <div class="beayhack1__title">VIP - это 3 полноценных мощных курса:</div>
                        <ul class="beayhack1__list">
                            <li>Первый год осваиваете базовый курс психолог-консультант</li>
                            <li>Второй год изучаем 2 специализации на выбор</li>
                        </ul>
                        <div class="sketching1__action">
                            <button class="sketching1__button clobtn" data-scrollto="#orderform">Записаться на
                                курс
                            </button>
                            <div class="sketching1__counter">
                                <img src="<?php /*= $pics; */?>/b1-reload.svg" alt="" class="sketching1__reload">
                                <span>Осталось <b>6 мест</b> <br>на&nbsp;новый поток</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section><!-- //beayhack1 -->
    <section class="clob2 orkt2">
        <div class="clob2__bg full-padding">
            <div class="clocontainer">
                <h2 class="orkt1__h1 jbm">
                    МЫ <span>СОЗДАЛИ IPHONE</span> НА РЫНКЕ ОБУЧЕНИЯ ПСИХОЛОГИИ
                </h2>
                <div class="top-block">
                    <div class="top-block__content">
                        <div class="top-block__item">
                            <div class="top-block__cert">
                                <img src="<?= $pics; ?>/cert-1.png" alt="">
                                <img src="<?= $pics; ?>/cert-2.png" alt="">
                            </div>
                            <div class="top-block__title">Вы получите дипломы</div>
                            <div class="top-block__description">
                                <ul class="landing__list">
                                    <li>Диплом о проф. переподготовке</li>
                                    <li>Международный <b>MBA</b> диплом</li>

                                    <li>Международный сертификат <a class="landing__link" href="https://www.iphm.co.uk/directory/find-an-accredited-training-provider/talentsy-1/"><b>IPHM</b></a></li>
                                    <li>Международный сертификат <a class="landing__link" href="https://cpduk.co.uk/"><b>CPD</b></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-block__item">
                            <div class="top-block__person">
                                <div class="top-block__person-item">
                                    <img src="<?= $pics; ?>/person-1.png" alt="">
                                </div>
                                <div class="top-block__person-item">
                                    <img src="<?= $pics; ?>/person-2.png" alt="">
                                </div>
                                <div class="top-block__person-item">
                                    <img src="<?= $pics; ?>/person-3.png" alt="">
                                </div>
                                <div class="top-block__person-item">
                                    +12
                                </div>
                            </div>
                            <div class="top-block__title">
                                ТОП <br>
                                преподаватели
                            </div>
                            <div class="top-block__description">Востребованные и практикующие психологи, доктора и
                                кандидаты наук — наши преподаватели
                            </div>
                        </div>
                        <div class="top-block__item">
                            <div class="top-block__circle">
                                1 200
                            </div>
                            <div class="top-block__title">Часов обучения на базовой программе</div>
                            <div class="top-block__description">
                                <ul class="list-content">
                                    <li>450+ видеолекций</li>
                                    <li>600 часов практических занятий</li>
                                    <li> 250+ дополнительных материалов</li>
                                    <li> + 2 полноценных курса по специализации на выбор</li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-block__item">
                            <div class="top-block__circle-pic">
                                <img src="<?= $pics; ?>/top-person-circle.png" alt="">
                            </div>
                            <div class="top-block__title">Занятия в мини-группах до 15 человек</div>
                            <div class="top-block__description">Под руководством авторитетных преподавателей. Вашими
                                наставниками станут опытные психологи-консультанты. Личный куратор выстроит
                                комфортное расписание и напомнит о занятиях
                            </div>
                        </div>
                    </div>
                    <div class="top-block__pic">
                        <aside class="iphone__right">
                            <img data-src="https://talentsy.ru/wp-content/themes/talentsy/img/psychology/b2-mock.png" alt="" class="iphone__mock lazy">
                            <video preload="auto" playsinline="" autoplay="" loop="" muted="" class="iphone__mockvideo">
                                <source src="https://talentsy.ru/wp-content/themes/talentsy/img/psychology/b2-vid.mp4">
                            </video>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="clocontainer mt-120 bg-black">
                <div class="cloform__bg">
                    <div class="difficultform2__hdr">
                        <h2 class="cloform2__h2 h2">ПОЛУЧИТЬ ПОЛНУЮ <br><span>ПРОГРАММУ КУРСА</span></h2>
                        <img src="<?= $pics; ?>/pic-program.png" alt="" class="pic-program-auto">
                    </div>

                    <div class="cloform__line"></div>

                    <form class="lt-normal-form lt-form-inner lt-form cloformbox"
                          action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>"
                          method="post" data-open-new-window="0">
                        <div class="cloformbox__title">Заполните форму, чтобы <b>получить полную программу курса</b>
                        </div>
                        <div class="cloformbox__grid">
                            <div class="cloformbox__inpwrap">
                                <input type="text" name="formParams[first_name]" placeholder="Имя" required="">
                            </div>
                            <div class="cloformbox__inpwrap">
                                <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99"
                                       required="">
                            </div>
                            <div class="cloformbox__inpwrap">
                                <input type="email" name="formParams[email]" placeholder="Email" required="">
                            </div>
                            <div class="cloformbox__subwrap">
                                <button type="submit" class="clobtn">Получить программу</button>
                            </div>
                        </div>
                        <p class="cloformbox__accept">
                            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>"
                                                                                  target="_blank">оферты</a> и <a
                                    href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
                                персональных данных</a>
                        </p>

                        <input name="formParams[dealCustomFields][1265453]" type="hidden"
                               value="<?= $_GET['utm_info'] ?? ''; ?>">
                        <input name="formParams[dealCustomFields][1810276]" type="hidden"
                               value="<?= get_field('elly_alias'); ?>">
                        <input name="formParams[dealCustomFields][1291877]" type="hidden">
                        <input type="hidden" name="__gc__internal__form__helper"
                               class="__gc__internal__form__helper">
                        <input type="hidden" name="__gc__internal__form__helper_ref"
                               class="__gc__internal__form__helper_ref">
                        <input type="hidden" name="requestTime" value="1695648662">
                        <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                        <input type="hidden" name="isHtmlWidget" value="1"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="clocontainer">
            <h2 class="orkt1__h1 jbm">
                МЫ ЗНАЕМ О ЧЕМ ВЫ МЕЧТАЕТЕ <br>
                И ПОМОЖЕМ ВАМ ЭТОГО ДОБИТЬСЯ
            </h2>
            <div class="dream-items">
                <div class="dream-item dream-item-green">
                    <div class="dream-item__icon">
                        <img src="<?= $pics; ?>/dream-1.png" alt="">
                    </div>
                    <div class="dream-item__title">Освоить новую профессию без базового образования психолога</div>
                </div>
                <div class="dream-item dream-item-black">
                    <div class="dream-item__icon">
                        <img src="<?= $pics; ?>/dream-2.svg" alt="">
                    </div>
                    <div class="dream-item__title">Открыть свою частную практику</div>
                </div>
                <div class="dream-item dream-item-border">
                    <div class="dream-item__icon">
                        <img src="<?= $pics; ?>/dream-3.png" alt="">
                    </div>
                    <div class="dream-item__title">Помогать людям профессионально</div>
                </div>
                <div class="dream-item dream-item-border">
                    <div class="dream-item__icon">
                        <img src="<?= $pics; ?>/dream-4.svg" alt="">
                    </div>
                    <div class="dream-item__title">Заниматься делом, которое приносит не только доход, но и
                        удовольствие
                    </div>
                </div>
                <div class="dream-item dream-item-white">
                    <div class="dream-item__icon">
                        <img src="<?= $pics; ?>/dream-5.png" alt="">
                    </div>
                    <div class="dream-item__title">Работать на себя и ни от кого не зависеть</div>
                </div>
                <div class="dream-item dream-item-black">
                    <div class="dream-item__icon">
                        <img src="<?= $pics; ?>/dream-6.svg" alt="">
                    </div>
                    <div class="dream-item__title">Изменить качество своей жизни</div>
                </div>
            </div>
        </div>
    </section>
    <div class="line-container">
        <div class="clocontainer">
            <div class="cloform__line cloform__line-page">
            </div>
        </div>
    </div>
    <section class="mt-140 section">
        <div class="clocontainer">
            <h2 class="orkt1__h1 jbm">
                ПОСМОТРИТЕ <span>ОТЗЫВЫ</span> <br>
                НАШИХ <span>СТУДЕНТОВ</span> О КУРСЕ
            </h2>
            <div class="cloreviews__wrap">
                <div class="getreview-widget" data-widget-id="62KvAOPa5e2ghZHN"></div>
            </div>
        </div>
    </section>
    <section class="clob2 orkt2 mt-140">
        <div class="clob2__bg full-padding">
            <div class="clocontainer cloflexi">
                <div class="clob2__left pt-0 pb-0">
                    <h2 class="h2">НА ФОНЕ СТРЕССОВ РАСТЕТ СПРОС НА <span> КВАЛИФИЦИРОВАННЫХ ПСИХОЛОГОВ</span></h2>
                    <div class="clob2__vidowrap">
                        <img src="<?= $pics; ?>/b2-pic.jpg" alt="" class="clob2__photo">
                    </div>
                </div>
                <div class="clob2__right  pt-0 pb-0">
                    <div class="circle-top">
                        <div class="circle-top__item">
                            <div class="circle-top__info circle-top__info-green">133%</div>
                            <div class="circle-top__text"><span>Спрос</span> на услуги психологов в России <span>вырос в 2021 году на 133%</span>
                                по сравнению с 2020
                            </div>
                        </div>
                        <div class="circle-top__item">
                            <div class="circle-top__info">ТОП-30</div>
                            <div class="circle-top__text"><span>Профессия психолог входит в топ-30профессий,</span>
                                стабильность которых сохраняется даже в кризис
                            </div>
                        </div>
                        <div class="circle-top__item">
                            <div class="circle-top__info">HH</div>
                            <div class="circle-top__text"><span>6 000 открытых вакансий</span> специалистов с
                                компетенциями психолога на <span>hh.ru</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clocontainer mt-120 bg-black">
                <div class="cloform__bg">
                    <div class="difficultform2__hdr">
                        <h2 class="cloform2__h2 h2">УСПЕЙТЕ ЗАПИСАТЬСЯ <br> НА <span> НОВЫЙ ПОТОК</span></h2>
                        <img src="<?= $pics; ?>/pic-program-3.png" alt="" class="pic-program-auto">
                    </div>

                    <div class="cloform__line"></div>

                    <form class="lt-normal-form lt-form-inner lt-form cloformbox"
                          action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>"
                          method="post" data-open-new-window="0">
                        <div class="cloformbox__title">Заполните форму, <b> чтобы забронировать место</b>
                        </div>
                        <div class="cloformbox__grid">
                            <div class="cloformbox__inpwrap">
                                <input type="text" name="formParams[first_name]" placeholder="Имя" required="">
                            </div>
                            <div class="cloformbox__inpwrap">
                                <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99"
                                       required="">
                            </div>
                            <div class="cloformbox__inpwrap">
                                <input type="email" name="formParams[email]" placeholder="Email" required="">
                            </div>
                            <div class="cloformbox__subwrap">
                                <button type="submit" class="clobtn">Забронировать место</button>
                            </div>
                        </div>
                        <p class="cloformbox__accept">
                            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>"
                                                                                  target="_blank">оферты</a> и <a
                                    href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
                                персональных данных</a>
                        </p>

                        <input name="formParams[dealCustomFields][1265453]" type="hidden"
                               value="<?= $_GET['utm_info'] ?? ''; ?>">
                        <input name="formParams[dealCustomFields][1810276]" type="hidden"
                               value="<?= get_field('elly_alias'); ?>">
                        <input name="formParams[dealCustomFields][1291877]" type="hidden">
                        <input type="hidden" name="__gc__internal__form__helper"
                               class="__gc__internal__form__helper">
                        <input type="hidden" name="__gc__internal__form__helper_ref"
                               class="__gc__internal__form__helper_ref">
                        <input type="hidden" name="requestTime" value="1695648662">
                        <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                        <input type="hidden" name="isHtmlWidget" value="1"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="clocontainer">
            <h2 class="orkt1__h1 jbm">
                НАШ КУРС - <span>ПОЛНОЕ <br> ПОГРУЖЕНИЕ</span> В ПРОФЕССИЮ
            </h2>
            <div class="profession-list">
                <div class="profession-item block-element block-element-white">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/element-1.png" alt="">
                    </div>
                    <div class="block-element-title">Для тех, кто мечтает о профессии психолога с нуля</div>
                    <div class="block-element-description">Всегда хотели зарабатывать любимым и благородным делом.
                        Люди тянутся к вам за советами, у вас богатый жизненный опыт, но не хватает знаний
                    </div>
                </div>
                <div class="profession-item block-element block-element-border">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/element-2.png" alt="">
                    </div>
                    <div class="block-element-title">Для тех, кто только начинает путь психолога</div>
                    <div class="block-element-description">Ещё студент или выпускник, но чувствуете неуверенность и
                        страх перед клиентами. Хотели бы наработать первые часы практики в комфортном режиме вместе
                        с опытными наставниками
                    </div>
                </div>
                <div class="profession-item block-element block-element-black">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/element-3.png" alt="">
                    </div>
                    <div class="block-element-title">Для тех, кто хочет освоить психологию
                        для себя
                    </div>
                    <div class="block-element-description">Разобраться в психических процессах, практиках
                        психологов-консультантов. Гармонизировать свою жизнь, улучшить взаимоотношения с близкими и
                        коллегами
                    </div>
                </div>
                <div class="profession-item block-element block-element__bg"
                     style="background-image: url('<?= $pics; ?>/element-4.png')">
                    <div class="block-element-title">Для тех, кому нужен диплом для работы</div>
                    <div class="block-element-description">Вы уже работаете и хотите подкрепить свой статус
                        официальным документом РФ установленного образца — дипломом психолога-консультанта
                        (а так же два международных сертификата)
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section mt-140 month">
        <div class="clocontainer">
            <div class="month-flex">
                <div class="month-pic">
                    <img src="<?= $pics; ?>/month.png" alt="">
                </div>
                <div class="month-content">
                    <h2 class="h2">МЫ ГОТОВИМ КВАЛИФИЦИРОВАННЫХ <span>ПСИХОЛОГОВ-КОНСУЛЬТАНТОВ</span></h2>
                    <div class="month-text">с нуля за 12 месяцев</div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">Вы будете учиться у <span> 15 ТОП СПЕЦИАЛИСТОВ </span> СО ВСЕЙ СТРАНЫ</h2>
            <div class="specialist-flex">
                <div class="specialist-item">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/specialist-element-1.svg" alt="">
                    </div>
                    <div class="block-element-title">Мы потратили полгода и миллионы рублей</div>
                    <div class="block-element-description">чтобы собрать их всех в 1 курсе</div>
                </div>
                <div class="specialist-item">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/specialist-element-2.svg" alt="">
                    </div>
                    <div class="block-element-title">Это преподаватели и спикеры высочайшего класса и опыта</div>
                    <div class="block-element-description">у которых календари расписаны на полгода вперед</div>
                </div>
                <div class="specialist-item">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/specialist-element-3.svg" alt="">
                    </div>
                    <div class="block-element-title">Мы записали с ними видео уроки в высоком качестве</div>
                    <div class="block-element-description">чтобы вы могли учиться у авторитетных специалистов</div>
                </div>
            </div>
            <?php
            get_template_part('inc/mentors-block'); ?>
        </div>
    </div>
    <div class="section mt-140 bg-white full-padding">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2"><span>ПРЕПОДАВАТЕЛИ</span> — <br>
                ЧЛЕНЫ ПРОФЕССИОНАЛЬНЫХ ОБЪЕДИНЕНИЙ И АССОЦИАЦИЙ</h2>
            <div class="professional-items">
                <div class="professional-item block-element block-element-green">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/professional-element-1.svg" alt="">
                    </div>
                    <div class="block-element-title">
                        Российское психологическое общество
                    </div>
                </div>
                <div class="professional-item block-element block-element-black">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/professional-element-2.svg" alt="">
                    </div>
                    <div class="block-element-title">
                        Российская психотерапевти-ческая лига
                    </div>
                </div>
                <div class="professional-item block-element block-element-gray">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/professional-element-3.svg" alt="">
                    </div>
                    <div class="block-element-title">
                        Американская психологическая ассоциация
                    </div>
                </div>
                <div class="professional-item block-element block-element-border">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/professional-element-4.svg" alt="">
                    </div>
                    <div class="block-element-title">
                        Ассоциация сексологов
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">ВОЗНИКЛИ ВОПРОСЫ?</h2>
            <div class="orkt6how__grid">
                <div class="orkt6how__item">
                    <i class="orkt6how__num">01</i>
                    <div class="orkt6how__text">Оставьте свой номер <br> телефона
                    </div>
                </div>
                <div class="orkt6how__item">
                    <i class="orkt6how__num">02</i>
                    <div class="orkt6how__text">Наш специалист <br> свяжется с вами
                    </div>
                </div>
                <div class="orkt6how__item">
                    <i class="orkt6how__num">03</i>
                    <div class="orkt6how__text">Даст подробную информацию о начале учебы на курсе
                    </div>
                </div>
            </div>
            <form class="lt-normal-form lt-form-inner lt-form cloformbox form-white"
                  action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>"
                  method="post" data-open-new-window="0">
                <div class="cloformbox__title">Заполните форму, чтобы <b>получить полную программу курса</b>
                </div>
                <div class="cloformbox__grid">
                    <div class="cloformbox__inpwrap">
                        <input type="text" name="formParams[first_name]" placeholder="Имя" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99"
                               required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="email" name="formParams[email]" placeholder="Email" required="">
                    </div>
                    <div class="cloformbox__subwrap">
                        <button type="submit" class="clobtn">Получить программу</button>
                    </div>
                </div>
                <p class="cloformbox__accept">
                    Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>"
                                                                          target="_blank">оферты</a> и <a
                            href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
                        персональных данных</a>
                </p>

                <input name="formParams[dealCustomFields][1265453]" type="hidden"
                       value="<?= $_GET['utm_info'] ?? ''; ?>">
                <input name="formParams[dealCustomFields][1810276]" type="hidden"
                       value="<?= get_field('elly_alias'); ?>">
                <input name="formParams[dealCustomFields][1291877]" type="hidden">
                <input type="hidden" name="__gc__internal__form__helper"
                       class="__gc__internal__form__helper">
                <input type="hidden" name="__gc__internal__form__helper_ref"
                       class="__gc__internal__form__helper_ref">
                <input type="hidden" name="requestTime" value="1695648662">
                <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                <input type="hidden" name="isHtmlWidget" value="1"/>
            </form>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <div class="head-flex">
                <h2 class="orkt1__h1 h2">ВАС ЖДЕТ ФУНДАМЕНТАЛЬНАЯ, <span>ГЛУБОКАЯ И ПОДРОБНАЯ</span> ПРОГРАММА ОБУЧЕНИЯ
                </h2>
                <div class="head-circle">
                    Подробная как
                    в университете,
                    но компактная
                    и не скучная
                </div>
            </div>
            <div class="program">
                <div class="program-item program-item-pic">
                    <video preload="auto" playsinline autoplay loop muted class="lazy">
                        <source data-src="https://talentsy.ru/wp-content/themes/talentsy/img/psychology/b12-video.mp4">
                    </video>
                </div>
                <div class="program-item block-element block-element-black">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/program-2.png" alt="">
                    </div>
                    <div class="block-element-title">
                        Программа разработана
                        <span>на основе ФГОС ВО 370301 «Психология»</span>, и соответствует <span>профессиональным стандартам</span>
                    </div>
                </div>
                <div class="program-item program-item-bottom block-element block-element-white">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/program-3.svg" alt="">
                    </div>
                    <div class="block-element-description">
                        <span>Практика</span> начнется с <span>первых дней</span> обучения
                    </div>
                </div>
                <div class="program-item program-item-bottom block-element block-element-black">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/program-4.svg" alt="">
                    </div>
                    <div class="block-element-description">
                        <span>Современные </span> методики обучения
                    </div>
                </div>
                <div class="program-item program-item-bottom block-element block-element-border">
                    <div class="block-element-title-light">
                        Более 100
                    </div>
                    <div class="block-element-description">
                        <span>Дополнительных материалов </span> (конспекты, шпаргалки, схемы, протоколы, упражнения,
                        методики, литература)
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line-container">
        <div class="clocontainer">
            <div class="cloform__line cloform__line-page">
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">РЫНОК ТРЕБУЕТ ОТ ПСИХОЛОГА ПРОЙТИ <span>СУПЕРВИЗИЮ</span> И
                <span>ЛИЧНУЮ ТЕРАПИЮ</span>
            </h2>
            <div class="text-description">
                Мы это учли, <span>чтобы помочь вам стать востребованным специалистом</span>
            </div>
            <div class="course-item">
                <div class="clo3slide__num">01</div>
                <div class="course-item__flex">
                    <div class="course-item__left">
                        <h3 class="title-40">Вас ждут регулярные встречи с опытным супервизором</h3>
                        <div class="course-item-pic">
                            <img src="<?= $pics; ?>/course-item-1.png" alt="">
                        </div>
                    </div>
                    <div class="course-item__right">
                        <div>
                            <h5 class="title-light">Супервизор: </h5>
                            <ul class="list-content">
                                <li>Повысит результативность вашей работы с клиентами</li>
                                <li>Обеспечит поддержку и развитие в вашей профессиональной практике</li>
                                <li> Предложит новые подходы, техники и инструменты, которые вы сможете применить</li>
                                <li>Обсудит ваши решения, дилеммы, эмоциональные реакции и профессиональные вызовы, с
                                    которыми вы сталкиваетесь
                                </li>
                            </ul>
                        </div>
                        <div class="course-plashka block-element block-element-green-2">
                            <div class="block-element-pic">
                                <img src="<?= $pics; ?>/course-item-1.svg" alt="">
                            </div>
                            <div class="block-element-description">
                                <span>В суперизионной группе вы очень быстро наберете опыт, обучаясь в том числе на кейсах
                                коллег</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-item">
                <div class="clo3slide__num">02</div>
                <h3 class="title-40">Вы пройдете курс личной терапии</h3>
                <div class="course-item__flex">
                    <div class="course-item__left">
                        <div class="course-item-pic">
                            <img src="<?= $pics; ?>/course-item-2.png" alt="">
                        </div>
                    </div>
                    <div class="course-item__right">
                        <div>
                            <h5 class="title-light">Терапия позволит вам: </h5>
                            <ul class="list-content">
                                <li>Сформировать и развить навыки самоанализа и саморефлексии, что поспособствует более
                                    эффективной работе с клиентами.


                                </li>
                                <li> Повысить эмпатию и понимание. Психолог, проходящий через процесс терапии, может
                                    лучше понять и ощутить на собственном опыте, каково это находиться в кресле
                                    напротив./li>
                                <li>Обеспечить быстрый личностный и профессиональный рост</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140 bg-white full-padding">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">НАШ КУРС ЭТО УНИКАЛЬНАЯ ВОЗМОЖНОСТЬ ОСВОИТЬ ЕЩЕ <span>2&nbsp;СПЕЦИАЛИЗАЦИИ</span>
                НА ВЫБОР</h2>
            <div class="specialization-line">
                <img src="<?= $pics; ?>/specialization-icon.svg" alt="">
            </div>
            <div class="specialization-flex">
                <div class="specialization-left block-element block-element-gray">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/specialization-pic.png" alt="">
                    </div>
                    <div class="block-element-title mb-0">
                        Каждая специализация - это полноценный практический курс <span class="gray-text">с выдачей документа, подтверждающий вашу квалификацию</span>
                    </div>
                </div>
                <div class="specialization-tags">
                    <div class="specialization-tag">Детский психолог</div>
                    <div class="specialization-tag">Консультант в сфере сексуальных отношений</div>
                    <div class="specialization-tag">Семейный психолог</div>
                    <div class="specialization-tag">Гештальт-подход в консультировании</div>
                    <div class="specialization-tag">ОРКТ - подход</div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <div class="access">
                <div class="access-left">
                    <h2 class="orkt1__h1 h2">ВЫ ПОЛУЧИТЕ ДОСТУП В ЗАКРЫТЫЙ <span>VIP-КЛУБ</span> ПСИХОЛОГОВ </h2>
                    <ul class="clob1__dl beayhack1__list">
                        <li>
                            <div class="beayhack1__list-title">Окружите себя профессионалами,</div>
                            <small>которые станут для вас источником развития, поддержки и мотивации</small></li>
                        <li>
                            <div class="beayhack1__list-title">Ваши знания будут всегда актуальны,</div>
                            <small>что позволит вам чувствовать себя увереннее и вы сможете расти в доходе быстрее
                                остальных психологов</small></li>
                    </ul>
                </div>
                <div class="access-right">
                    <img src="<?= $pics; ?>/access.png" alt="">
                </div>
            </div>
            <div class="participants">
                <div class="participants-left">
                    <h2 class="orkt1__h1 h2">ТОЛЬКО ДЛЯ УЧАСТНИКОВ <span>VIP-КЛУБа</span></h2>
                    <img src="<?= $pics; ?>/participants.png" alt="">
                </div>
                <div class="participants-right">
                    <div class="title-40">24 мастерские психологического консультирования Елены Новоселовой</div>
                    <div class="participants-items">
                        <div class="participants-item">
                            <div class="participants-item__number">01</div>
                            <div class="participants-item__content">
                                <div class="participants-item__title">Возможность учиться напрямую</div>
                                <div class="participants-item__description">у одной из лучших психологов страны</div>
                            </div>
                        </div>
                        <div class="participants-item">
                            <div class="participants-item__number">02</div>
                            <div class="participants-item__content">
                                <div class="participants-item__title">Разборы кейсов из реальной практики</div>
                                <div class="participants-item__description"> обмен опытом внутри группы</div>
                            </div>
                        </div>
                        <div class="participants-item">
                            <div class="participants-item__number">03</div>
                            <div class="participants-item__content">
                                <div class="participants-item__title">Один из самых эффективных обучающих форматов</div>
                                <div class="participants-item__description">по психологическому консультированию</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140 bg-white full-padding">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">ПРЕДОСТАВИМ ПЕРВЫХ <span>10 КЛИЕНТОВ</span> ДЛЯ КОНСУЛЬТИРОВАНИЯ</h2>
            <div class="clients">
                <div class="client-element block-element block-element-green">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/client-element-1.png" alt="">
                    </div>
                    <div class="block-element-title">Подключим вас к сервису консультирования</div>
                    <div class="block-element-description">чтобы вы закрепили свои навыки</div>
                </div>
                <div class="client-element block-element block-element-gray">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/client-element-2.png" alt="">
                    </div>
                    <div class="block-element-title">Предоставим вам первых клиентов</div>
                    <div class="block-element-description">с возможностью платного консультирования</div>
                </div>
                <div class="client-element block-element block-element-border">
                    <div class="block-element-pic">
                        <img src="<?= $pics; ?>/client-element-3.svg" alt="">
                    </div>
                    <div class="block-element-title">Предоставим возможность зарабатывать</div>
                    <div class="block-element-description">уже во время обучения </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">Программа обучения</h2>
            <div class="closummary__wrap">
                <? foreach (get_field('prog_list') as $k => $progStep): ?>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="closummary<?= $k; ?>">
                        <label class="closummary__hdr cloflexi" for="closummary<?= $k; ?>">
                            <span class="clo3slide__num"><?= ($k + 1) > 9 ? ($k + 1) : '0' . ($k + 1); ?></span>
                            <span class="closummary__title"><?= $progStep['step']; ?></span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><?= $progStep['desc']; ?></div>
                            </div>
                        </div>
                    </article>
                <? endforeach; ?>

                <? if (get_field('is_closed')): ?>
                    <button class="closummary__more"></button>
                <? endif; ?>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">А ТАКЖЕ только для <span>VIP-тарифа</span></h2>
            <div class="closummary__wrap">
                <? foreach (get_field('prog_list') as $k => $progStep): ?>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="closummary<?= $k; ?>">
                        <label class="closummary__hdr cloflexi" for="closummary<?= $k; ?>">
                            <span class="clo3slide__num"><?= ($k + 1) > 9 ? ($k + 1) : '0' . ($k + 1); ?></span>
                            <span class="closummary__title"><?= $progStep['step']; ?></span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><?= $progStep['desc']; ?></div>
                            </div>
                        </div>
                    </article>
                <? endforeach; ?>

                <? if (get_field('is_closed')): ?>
                    <button class="closummary__more"></button>
                <? endif; ?>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <form class="lt-normal-form lt-form-inner lt-form cloformbox form-white"
                  action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=" method="post"
                  data-open-new-window="0">
                <div class="difficultform2__hdr">
                    <h2 class="cloform2__h2 h2">ПОЛУЧИТЕ <span>ГАЙД</span> <br>
                        ПО&nbsp;ПРОФЕССИИ <br>
                        <span>ПСИХОЛОГ-КОНСУЛЬТАНТ</span></h2>
                    <img src="<?= $pics; ?>/get-pic.png" alt="" class="pic-program-abs">
                </div>
                <div class="cloform__line"></div>
                <div class="cloformbox__title">Заполните форму, <b> чтобы получить гайд</b>
                </div>
                <div class="cloformbox__grid">
                    <div class="cloformbox__inpwrap">
                        <input type="text" name="formParams[first_name]" placeholder="Имя" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="email" name="formParams[email]" placeholder="Email" required="">
                    </div>
                    <div class="cloformbox__subwrap">
                        <button type="submit" class="clobtn">Получить программу</button>
                    </div>
                </div>
                <p class="cloformbox__accept">
                    Отправляя данную форму вы соглашаетесь с условиями <a
                            href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora/" target="_blank">оферты</a>
                    и <a href="https://talentsy.ru/wp-content/uploads/2023/08/agreement_pd_15.03.23.pdf"
                         target="_blank">политикой обработки
                        персональных данных</a>
                </p>
                <input name="formParams[dealCustomFields][1265453]" type="hidden" value="">
                <input name="formParams[dealCustomFields][1810276]" type="hidden" value="">
                <input name="formParams[dealCustomFields][1291877]" type="hidden"
                       value="mailpix=3279607; tmr_lvid=57edb6f3d60401486bbc44b083b3730f; tmr_lvidTS=1696919244946; _ym_uid=1696919245731648396; _ym_d=1696919245; _tt_enable_cookie=1; _ttp=gA0ics7hUUYOHwYH9KLH57htAiw; advcake_track_id=3811beea-a16a-237d-d04c-9e1c06605edc; advcake_session_id=966d0c2a-a551-f8ea-b061-2072d9a8e0c4; _ymab_param=fv1XFoCbZ8bzAWbbSqf1EirXb6jiTaEdwQCtZx1vk7j2oUByAHIYnbCwX5zVHuU5IjcuLElxdLlj-vH8NsQdCN1xx70; mailpix=3279607; yaMetrikaClientID=1696919245731648396; amoCRMVisitorID=2389cac4-957a-486e-a490-e3f4c7ebb0f3; wordpress_test_cookie=WP%20Cookie%20check; wp-settings-time-6=1702819246; _ym_isad=1; _ym_visorc=w; traafLeadID=1702966020155248867432; _gr_session=%7B%22s_id%22%3A%22bcd60cde-faed-44f8-a66f-27e6de834ae1%22%2C%22s_time%22%3A1702966020216%7D; tmr_detect=1%7C1702966020487|w|h|https://talentsy.ru/psy-vip/">
                <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper"
                       value="https://talentsy.ru/psy-vip/">
                <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref"
                       value="">
                <input type="hidden" name="requestTime" value="1695648662">
                <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                <input type="hidden" name="isHtmlWidget" value="1">
            </form>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">ВАС ЖДУТ практические ЗАНЯТИЯ В <span>МИНИ-ГРУППАХ</span> ДО 15 ЧЕЛОВЕК</h2>
            <div class="mini-block">
                <div class="mini-pic">
                    <img src="<?= $pics; ?>/mini.png" alt="">
                </div>
                <div class="mini-content">
                    <div class="title-light">В формате тренингов и практических семинаров</div>
                    <div class="mini-items">
                        <div class="mini-item">
                            <i class="orkt6how__num">01</i>
                            <div class="mini-item__text">
                                Каждый получит <span>достаточно внимания наставника</span>
                            </div>
                        </div>
                        <div class="mini-item">
                            <i class="orkt6how__num">02</i>
                            <div class="mini-item__text"><span>Участники группы</span> мотивируют и помогают друг другу
                            </div>
                        </div>
                        <div class="mini-item">
                            <i class="orkt6how__num">03</i>
                            <div class="mini-item__text">Студенты растут в <span>среде единомышленников</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140 bg-black full-padding bg-black-light">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">МЫ ОРГАНИЗОВАЛИ <span>ЯРКУЮ СТУДЕНЧЕСКУЮ</span> ЖИЗНЬ</h2>
            <div class="life-container">
                <div class="life-pics">
                    <div class="life-pics-column">
                        <img src="<?= $pics; ?>/life-1.png" alt="">
                        <img src="<?= $pics; ?>/life-2.png" alt="">
                    </div>
                    <div class="life-pics-column">
                        <img src="<?= $pics; ?>/life-3.png" alt="">
                    </div>
                </div>
                <div class="life-content">
                    <div class="life-top">
                        <div class="life-top__item">
                            <div class="block-element-pic">
                                <img src="<?= $pics; ?>/life-4.png" alt="">
                            </div>
                            <div class="block-element-title">
                                Читальный зал
                            </div>
                            <div class="block-element-description">
                                Обсуждаем интересные книги
                            </div>
                        </div>
                        <div class="life-top__item">
                            <div class="block-element-pic">
                                <img src="<?= $pics; ?>/life-5.png" alt="">
                            </div>
                            <div class="block-element-title">
                                Киноклуб
                            </div>
                            <div class="block-element-description">
                                Обсуждаем фильмы в контексте психологии
                            </div>
                        </div>
                    </div>
                    <div class="life-bottom block-element block-element-green-2">
                        <div class="block-element-pic">
                            <img src="<?= $pics; ?>/life-6.png" alt="">
                        </div>
                        <div class="block-element-content">
                            <div class="block-element-title">
                                Очные встречи
                            </div>
                            <div class="block-element-description">
                                в Москве со студентами и наставниками
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">Каждый <span>выпускник</span> <br> курса получает</h2>
            <div class="diploma-items">
                <div class="diploma-item diploma-item-white">
                    <div class="diploma-item__content">
                        <i class="orkt6how__num">01</i>
                        <div class="title-40">
                            <span class="green-text">Диплом о профессиональной переподготовке</span> установленного
                            образца РФ
                        </div>
                        <div class="diploma-content">
                            Это официальный документ, <span class="gray-text">который дает вам право осуществлять профессиональную деятельность </span>
                        </div>
                    </div>
                    <div class="diploma-item__pic">
                        <img src="<?= $pics; ?>/diplom-1.png" alt="">
                    </div>
                </div>
                <div class="diploma-item diploma-item-black">
                    <div class="diploma-item__content">
                        <i class="orkt6how__num">02</i>
                        <div class="title-40">
                            MBA Диплом
                        </div>
                        <div class="diploma-content">
                            <span class="gray-text">Open European Academy (г. Прага) в сотрудничестве с Европейской Ассоциацией ВУЗов и
                            преподавателей высшей школы HiSTES,</span> дающий право ведения деятельности в Евросоюзе и
                            признаваемый во всем мире.
                        </div>
                        <div class="diploma-list">
                            <div class="diploma-list__title">А также 2 международных сертификата:</div>
                            <div class="list-content">
                                <li><span class="gray-text">от аккредитующего центра Великобритании</span> <a target="_blank" href="https://www.iphm.co.uk/directory/find-an-accredited-training-provider/talentsy-1/">IPHM</a>
                                </li>
                                <li><span class="gray-text">от аккредитующего центра Великобритании</span> <a target="_blank" href="https://cpduk.co.uk/">CPD</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="diploma-item__pic">
                        <img src="<?= $pics; ?>/diplom-2.png" alt="">
                    </div>
                </div>
                <div class="diploma-send">
                    <div class="diploma-send__content">
                        Каждый выпускник курса может подтвердить свою квалификацию
                        <span>перед клиентамии / или работодателями</span>
                    </div>
                    <a href="#" class="clobtn">Задать вопрос специалисту</a>
                </div>
            </div>
        </div>
    </div>
    <div class="line-container">
        <div class="clocontainer">
            <div class="cloform__line cloform__line-page">
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ <br> СПЕЦИАЛИСТА</h2>
            <div class="orkt6how__grid">
                <div class="orkt6how__item">
                    <i class="orkt6how__num">01</i>
                    <div class="orkt6how__text">Оставьте свой номер <br> телефона
                    </div>
                </div>
                <div class="orkt6how__item">
                    <i class="orkt6how__num">02</i>
                    <div class="orkt6how__text">Наш специалист <br> свяжется с вами
                    </div>
                </div>
                <div class="orkt6how__item">
                    <i class="orkt6how__num">03</i>
                    <div class="orkt6how__text">Даст подробную информацию о начале учебы на курсе
                    </div>
                </div>
            </div>
            <form class="lt-normal-form lt-form-inner lt-form cloformbox form-white"
                  action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=" method="post"
                  data-open-new-window="0">
                <div class="cloformbox__title">Заполните форму, <b>чтобы получить консультацию специалиста</b>
                </div>
                <div class="cloformbox__grid">
                    <div class="cloformbox__inpwrap">
                        <input type="text" name="formParams[first_name]" placeholder="Имя" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="email" name="formParams[email]" placeholder="Email" required="">
                    </div>
                    <div class="cloformbox__subwrap">
                        <button type="submit" class="clobtn">Сделать выбор</button>
                    </div>
                </div>
                <p class="cloformbox__accept">
                    Отправляя данную форму вы соглашаетесь с условиями <a
                            href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora/" target="_blank">оферты</a>
                    и <a href="https://talentsy.ru/wp-content/uploads/2023/08/agreement_pd_15.03.23.pdf"
                         target="_blank">политикой обработки
                        персональных данных</a>
                </p>

                <input name="formParams[dealCustomFields][1265453]" type="hidden" value="">
                <input name="formParams[dealCustomFields][1810276]" type="hidden" value="">
                <input name="formParams[dealCustomFields][1291877]" type="hidden"
                       value="mailpix=3279607; tmr_lvid=57edb6f3d60401486bbc44b083b3730f; tmr_lvidTS=1696919244946; _ym_uid=1696919245731648396; _ym_d=1696919245; _tt_enable_cookie=1; _ttp=gA0ics7hUUYOHwYH9KLH57htAiw; advcake_track_id=3811beea-a16a-237d-d04c-9e1c06605edc; advcake_session_id=966d0c2a-a551-f8ea-b061-2072d9a8e0c4; _ymab_param=fv1XFoCbZ8bzAWbbSqf1EirXb6jiTaEdwQCtZx1vk7j2oUByAHIYnbCwX5zVHuU5IjcuLElxdLlj-vH8NsQdCN1xx70; mailpix=3279607; yaMetrikaClientID=1696919245731648396; amoCRMVisitorID=2389cac4-957a-486e-a490-e3f4c7ebb0f3; wordpress_test_cookie=WP%20Cookie%20check; wp-settings-time-6=1702819246; _ym_isad=1; _ym_visorc=w; _gr_session=%7B%22s_id%22%3A%22bcd60cde-faed-44f8-a66f-27e6de834ae1%22%2C%22s_time%22%3A1702976680583%7D; tmr_detect=1%7C1702976680707; traafLeadID=1702976745968528533608|w|h|https://talentsy.ru/psy-vip/">
                <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper"
                       value="https://talentsy.ru/psy-vip/">
                <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref"
                       value="">
                <input type="hidden" name="requestTime" value="1695648662">
                <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                <input type="hidden" name="isHtmlWidget" value="1">
            </form>
        </div>
    </div>
    <div class="section mt-140 bg-white full-padding">
        <div class="clocontainer">
            <div class="lesson-container">
                <h2 class="orkt1__h1 h2">НАУЧИМ РЕКЛАМИРОВАТЬ СВОИ УСЛУГИ И <span>ПРИВЛЕКАТЬ КЛИЕНТОВ</span></h2>
                <div class="cloform__line"></div>
                <div class="lesson-content">
                    <div class="lesson-content__text block-element-title">С вами работает специалист по продвижению и привлечению клиентов
                        <span class="gray-text">начиная с шестого месяца обучения</span>
                    </div>
                    <div class="lesson-content-block">
                        <div class="important-block__title">
                            А ТАКЖЕ
                        </div>
                        <ul class="beayhack1__list">
                            <li>Научитесь развивать свой личный бренд <span class="gray-text">и экологично продавать свои услуги</span>
                            </li>
                            <li>Научитесь монетизировать <span class="gray-text">свои знания</span></li>
                        </ul>
                    </div>
                </div>
                <div class="lessonpic">
                    <img src="<?= $pics; ?>/lesson.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer clocontainer-numbers">
            <div class="numbers-top">
                <div class="number-item block-element block-element-green-2">
                    <div class="number-title">15</div>
                    <div class="block-element-title">ТОП
                        преподавателей</div>
                </div>
                <div class="number-item block-element block-element-black">
                    <div class="number-title">1200</div>
                    <div class="block-element-title">Часов обучения на <br> базовом курсе</div>
                </div>
                <div class="number-item block-element block-element-white">
                    <div class="number-title">600</div>
                    <div class="block-element-title">Часов <br> практик</div>
                </div>
            </div>
            <div class="numbers-bottom">
                <div class="numbers-column">
                    <div class="number-item block-element block-element-white">
                        <div class="number-title">50+50</div>
                        <div class="block-element-title">Часов супервизии и личной терапии</div>
                    </div>
                    <div class="number-item block-element block-element-border">
                        <div class="number-title">450+</div>
                        <div class="block-element-title">Экспертных видео-лекций</div>
                    </div>
                    <div class="number-item block-element block-element-border">
                        <div class="number-title">12/7</div>
                        <div class="block-element-title">Поддержка студентов и ответы на вопросы</div>
                    </div>
                    <div class="number-item block-element block-element-black">
                        <div class="number-title">2</div>
                        <div class="block-element-title">Курса специализации до 500 часов каждый</div>
                    </div>
                </div>
                <div class="numbers-column numbers-column-pic">
                    <img src="<?= $pics; ?>/numbers.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="line-container">
        <div class="clocontainer">
            <div class="cloform__line cloform__line-page">
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">Это обучение <span>поможет вам</span></h2>
            <div class="clocourseslider__swiper swiper beayhackslider__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">01</div>
                        <div class="clo3slide__title">Разбираться в себе и своих проблемах</div>

                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/001.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide1 -->

                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">02</div>
                        <div class="clo3slide__title">Начать свою частную практику</div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/002.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide2 -->


                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">03</div>
                        <div class="clo3slide__title">Понимать психологические характеристики разных людей
                        </div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/003.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide3 -->

                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">04</div>
                        <div class="clo3slide__title">Справляться со стрессами и лучше себя чувствовать
                        </div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/004.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide4 -->

                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">05</div>
                        <div class="clo3slide__title">Трудоустроиться по новой специальности</div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/005.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide5 -->

                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">06</div>
                        <div class="clo3slide__title">Помогать другим людям справиться с психологическими проблемами
                        </div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/006.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide6 -->

                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">07</div>
                        <div class="clo3slide__title">Выработать индивидуальный стиль консультирования</div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/007.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide7 -->

                    <div class="swiper-slide clo3slide">
                        <div class="clo3slide__num">07</div>
                        <div class="clo3slide__title">Применять техники для профессионального развития</div>
                        <div class="clo3slide__picwrap">
                            <img src="<?= $pics; ?>/008.jpg"
                                 alt="" class="clo3slide__pic">
                        </div>
                    </div><!-- //slide8 -->
                </div>
            </div><!-- //clocourseslider__swiper -->
            <div class="closlictrl sketching5__bot flexi">
                <button class="closlictrlbutt closlictrlbutt--prev swiper-button-disabled" disabled="" tabindex="-1"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-dd761df46772dac2"
                        aria-disabled="true"><img
                            src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/b3-arrow.svg" alt="">
                </button>
                <div class="closlictrl__pag">1 / 7</div>
                <button class="closlictrlbutt closlictrlbutt--next" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-dd761df46772dac2" aria-disabled="false"><img
                            src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/b3-arrow.svg" alt="">
                </button>
            </div>
        </div>
    </div>
    <div class="section mt-140 bg-white full-padding">
        <div class="clocontainer">
            <div class="fits-container">
                <div class="fits-block">
                    <h2 class="orkt1__h1 h2">ПОДХОДИТ ЛИ <br>ВАМ ПРОФЕССИЯ <br><span>ПСИХОЛОГ-КОНСУЛЬТАНТ?</span></h2>
                    <div class="fits-items">
                        <div class="fits-item">
                            <div class="fits-item__title">7 вопросов</div>
                            <div class="fits-item__description">Пройдите тест из семи
                                вопросов
                            </div>
                        </div>
                        <div class="fits-item">
                            <div class="fits-item__title">5000 Р</div>
                            <div class="fits-item__description">Получите скидку на обучение в 5000 руб.</div>
                        </div>
                    </div>
                    <a href="#" class="clobtn">Пройти тест</a>
                </div>
                <div class="fits-pic">
                    <img src="<?= $pics; ?>/fits.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-140">
        <div class="clocontainer green-text-block">
            <div class="cloform5__head">
                <h2 class="h2">стоимость обучения</h2>
                <div class="cloform__line cloform5__line"></div>
                <div class="cloform5__prices cloflexi">
                    <div class="cloform5__current cloflexi jbm">
                        <div class="cloform5__char1">От</div>
                        <div class="cloform5__char2 jsPPSumm">20000</div>
                        <div class="cloform5__char3">₽/мес</div>
                    </div>
                    <div class="cloform5__old jbm">33000 ₽/мес</div>
                </div>
                <div class="cloform5__underprice">
                    <div class="cloform4__sales">
                        <div class="cloform4__circle cloform5__circle">
                            <span>-</span>39<small>%</small>
                        </div>
                        <div class="cloform4__sales-content">
                            <div class="cloform4__line">Скидка до 1 сентября </div>
                            <p class="cloform4__line-text">с учетом гранта на обучение от Talentsy</p>
                        </div>

                    </div>
                    <div class="cloform5__right">
                        <p>Начни учиться бесплатно</p>
                        <p class="cloform5__small">Беспроцентная рассрочка на 24 месяца. <br> Первый платеж
                            через 2 месяца.</p>
                        <div class="cloform4__line"><b>Осталось</b> <span class="green-text">6 мест</span></div>
                    </div>
                </div>

            </div>
            <form class="lt-normal-form lt-form-inner lt-form cloformbox form-white"
                  action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=" method="post"
                  data-open-new-window="0">
                <div class="cloformbox__title">Заполните форму, <b>чтобы забронировать место</b>
                </div>
                <div class="cloformbox__grid">
                    <div class="cloformbox__inpwrap">
                        <input type="text" name="formParams[first_name]" placeholder="Имя" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required="">
                    </div>
                    <div class="cloformbox__inpwrap">
                        <input type="email" name="formParams[email]" placeholder="Email" required="">
                    </div>
                    <div class="cloformbox__subwrap">
                        <button type="submit" class="clobtn">Забронировать место</button>
                    </div>
                </div>
                <div class="important-block">
                    <div class="important-block__title">Важно!</div>
                    <div class="important-block__description">
                        Укажите номер телефона к которому привязан WhatsApp, <span class="gray-text">чтобы вы могли получить еще один</span>
                        <span class="green-text">бонус</span>
                    </div>
                </div>
                <div class="promoform newpromoform">
                    <div class="promoform__openbutton promoform__btn">
                        <span>У меня есть промокод</span>
                        <img src="<?= $pics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
                    </div>
                    <div class="promoform__inpwrap">
                        <div class="promoform__inpbox">
                            <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                            <button class="promoform__clearer" type="button"></button>
                        </div>
                        <button class="promoform__btn jsPPRequest" type="button">
                            <span>Активировать</span>
                            <img src="<?= $pics; ?>/promo-arrow.svg" alt="" class="promoform__arrow">
                        </button>
                    </div>
                    <div class="promoform__success promoform__btn">
                        <span>Промокод активирован</span>
                        <img src="/wp-content/themes/talentsy/img/clo3d/promo-check.svg" alt="" class="promoform__arrow">
                    </div>
                </div><!-- //promoform -->
                <p class="cloformbox__accept">
                    Отправляя данную форму вы соглашаетесь с условиями <a
                            href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora/" target="_blank">оферты</a>
                    и <a href="https://talentsy.ru/wp-content/uploads/2023/08/agreement_pd_15.03.23.pdf"
                         target="_blank">политикой обработки
                        персональных данных</a>
                </p>

                <input name="formParams[dealCustomFields][1265453]" type="hidden" value="">
                <input name="formParams[dealCustomFields][1810276]" type="hidden" value="">
                <input name="formParams[dealCustomFields][1291877]" type="hidden"
                       value="mailpix=3279607; tmr_lvid=57edb6f3d60401486bbc44b083b3730f; tmr_lvidTS=1696919244946; _ym_uid=1696919245731648396; _ym_d=1696919245; _tt_enable_cookie=1; _ttp=gA0ics7hUUYOHwYH9KLH57htAiw; advcake_track_id=3811beea-a16a-237d-d04c-9e1c06605edc; advcake_session_id=966d0c2a-a551-f8ea-b061-2072d9a8e0c4; _ymab_param=fv1XFoCbZ8bzAWbbSqf1EirXb6jiTaEdwQCtZx1vk7j2oUByAHIYnbCwX5zVHuU5IjcuLElxdLlj-vH8NsQdCN1xx70; mailpix=3279607; yaMetrikaClientID=1696919245731648396; amoCRMVisitorID=2389cac4-957a-486e-a490-e3f4c7ebb0f3; wordpress_test_cookie=WP%20Cookie%20check; wp-settings-time-6=1702819246; _ym_isad=1; _ym_visorc=w; traafLeadID=1702967191921282428499; _gr_session=%7B%22s_id%22%3A%22bcd60cde-faed-44f8-a66f-27e6de834ae1%22%2C%22s_time%22%3A1702967191954%7D; tmr_detect=0%7C1702967194679|w|h|https://talentsy.ru/psy-vip/">
                <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper"
                       value="https://talentsy.ru/psy-vip/">
                <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref"
                       value="">
                <input type="hidden" name="requestTime" value="1695648662">
                <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                <input type="hidden" name="isHtmlWidget" value="1">
            </form>
        </div>
    </div>
    <div class="line-container">
        <div class="clocontainer">
            <div class="cloform__line cloform__line-page">
            </div>
        </div>
    </div>
    <div class="section mt-140 pb140">
        <div class="clocontainer">
            <h2 class="orkt1__h1 h2">Часто задаваемые вопросы</h2>
            <div class="closummary__wrap">
                <? foreach (get_field('prog_list') as $k => $progStep): ?>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="closummary<?= $k; ?>">
                        <label class="closummary__hdr cloflexi" for="closummary<?= $k; ?>">
                            <span class="clo3slide__num"><?= ($k + 1) > 9 ? ($k + 1) : '0' . ($k + 1); ?></span>
                            <span class="closummary__title"><?= $progStep['step']; ?></span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><?= $progStep['desc']; ?></div>
                            </div>
                        </div>
                    </article>
                <? endforeach; ?>

                <? if (get_field('is_closed')): ?>
                    <button class="closummary__more"></button>
                <? endif; ?>
            </div>
        </div>
    </div>
<?php
get_footer();
