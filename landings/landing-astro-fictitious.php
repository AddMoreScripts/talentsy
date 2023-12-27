<?php
/*
Template name: Шаблон: Лендинг - astro-fictitious
*/
get_header(null, ['white' => true]);
$pics = imgs() . '/Astro-Fictitious';
$saleDate = 'до ' . getTomorow();
?>
    <div class="pagewrap">
        <section class="orkt1 difficult1">
            <div class="clocontainer">
                <h1 class="orkt1__h1 jbm text-uppercase">
                    Освойте <span style="color: #865AD0">фиктивные точки </span> <br>
                    за 8 лекций и повысьте точность астрологических трактовок
                </h1>

                <div class="orkt1sale difficult1sale orkt1sale-top">
                    <img src="<?= $pics; ?>/b1-salebg.svg" alt="" class="orkt1sale__bg">
                    <span>-54<small>%</small></span>
                    <em><?= $saleDate; ?></em>
                </div>
                <div class="cloform__line">
                </div>
                <div class="clob1__main cloflexi">
                    <aside class="clob1__side">
                        <img src="<?= $pics; ?>/b1-lead.png" alt="" class="clob1__lead">
                    </aside>
                    <div class="clob1__left">
                        <div>
                            <div class="beayhack1__title">Научитесь:</div>
                            <ul class="clob1__dl beayhack1__list-white">
                                <li><span>глубже анализировать натальную карту</span>
                                    в компенсаторике, синастрии и прогностике
                                </li>
                                <li><span>выявлять истинные причины событий жизни</span>, и освоите методы их проработки
                                </li>
                                <li><span>анализировать фиктивные точки</span>, что поможет вам стать востребованным
                                    профессионалом на рынке
                                </li>
                            </ul>
                        </div>
                        <div class="clob1__line clob1__line--mob"></div>
                        <div class="clob1__action cloflexi">
                            <a href="#orderform" class="clob1__button clobtn" data-scrollto="">Записаться на курс</a>
                            <div class="sketching1__counter">
                                <img src="<?= $pics; ?>/b1-purple.svg" alt="">
                                <span>Осталось <b>6 мест</b> <br>на&nbsp;новый поток</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clob2">
            <div class="clob2__bg">
                <div class="clocontainer cloflexi">
                    <div class="clob2__left">
                        <h2 class="h2">О КУРСЕ <span>ФИКТИВНЫЕ ТОЧКИ</span> И ПОЧЕМУ ИХ НЕОБХОДИМО ЗНАТЬ</h2>
                        <div class="clob2__vidowrap">
                            <img src="<?= $pics; ?>/b2-pic.jpg" alt="" class="clob2__photo">
                        </div>
                    </div>
                    <div class="clob2__right">
                        <b class="beayhack2__line1 jbm">
                            Фиктивные точки – <br>
                            это точки на астрологической карте
                        </b>
                        <div class="beayhack2__line2">
                            <p>которые не имеют физического существования, но они служат инструментом для интерпретации
                                астрологической информации и раскрытия потенциальных влияний на человека</p>
                        </div>
                        <div class="clob2__bot">
                            <div class="sketching5__prop sketching5__prop-flex">
                                <img src="<?= $pics; ?>/b5-1.png" alt="" class="sketching5__propimg">
                                <p>Многие астрологи <span>учитывают лишь 10 основных планет</span>, но это сильно <span>сужает точность</span>
                                    астрологических трактовок и их глубину</p>
                            </div>
                            <div class="beayhack2__bottom">
                                <div class="beayhack2greencard">
                                    <img src="<?= $pics; ?>/b2-icon.svg" alt="" class="beayhack2greencard__icon">
                                    <div class="beayhack2greencard__text">
                                        Курс позволит вам открыть более широкий угол обзора, чтения и анализа натальной
                                        карты
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="beayhackslider js-closlider1">
            <div class="clocontainer">
                <h2 class="h2">Чему вы научитесь</h2>
                <div class="clocourseslider__swiper swiper beayhackslider__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">01</div>
                            <div class="clo3slide__title">Повысите точность астрологических трактовок и их глубину</div>
                            <div class="clo3slide__descr">
                                Фиктивные точки дают новую информацию по натальной карте, дополняют прогностику и
                                синастрию
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/001.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide1 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">02</div>
                            <div class="clo3slide__title">Научитесь глубже анализировать натальную карту</div>
                            <div class="clo3slide__descr">
                                Фиктивные точки и астероиды помогут глубже анализировать натальную карту и не упускать
                                важные моменты
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/002.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide2 -->


                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">03</div>
                            <div class="clo3slide__title">Сможете ускорить свой рост и увеличить доходы
                            </div>
                            <div class="clo3slide__descr">
                                Знания из курса позволят вам превзойти коллег по “цеху” и ускорить финансовый рост
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/003.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide3 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">04</div>
                            <div class="clo3slide__title">Разберетесь в сферах своей жизни и ваших клиентов
                            </div>
                            <div class="clo3slide__descr">
                                Сможете глубже разбираться в сферах жизни(здоровье, работа, риски для жизни, финансы,
                                кармический путь)
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/004.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide4 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">05</div>
                            <div class="clo3slide__title">Научитесь выявлять истинные причины событий жизни</div>
                            <div class="clo3slide__descr">
                                И освоите методы их проработки
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/005.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide5 -->
                    </div>
                </div><!-- //clocourseslider__swiper -->
                <div class="closlictrl sketching5__bot flexi">
                    <button class="closlictrlbutt closlictrlbutt--prev swiper-button-disabled" disabled="" tabindex="-1"
                            aria-label="Previous slide" aria-controls="swiper-wrapper-dd761df46772dac2"
                            aria-disabled="true"><img
                                src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/b3-arrow.svg" alt="">
                    </button>
                    <div class="closlictrl__pag">1 / 5</div>
                    <button class="closlictrlbutt closlictrlbutt--next" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-dd761df46772dac2" aria-disabled="false"><img
                                src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/b3-arrow.svg" alt="">
                    </button>
                </div>
            </div>
        </section><!-- //beayhackslider -->
        <section class="cloform orktform1">
            <div class="clocontainer">
                <img src="<?= $pics; ?>/b6-star.svg" alt="" class="orktform1__star orktform1__star-big">
                <div class="cloform__bg">
                    <div class="orktform1__hdr">
                        <h2 class="h2">
                            ВЫЙДИТЕ НА НОВЫЙ УРОВЕНЬ. ПРЕВЗОЙДИТЕ СВОИХ КОНКУРЕНТОВ
                        </h2>
                        <div class="beayhackform1__time">Осталось: <b>6 мест</b></div>
                    </div>
                    <div class="cloform__line"></div>

                     <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
                      <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
                      <div class="cloformbox__grid">
                        <div class="cloformbox__inpwrap">
                          <input type="text" name="formParams[first_name]" placeholder="Имя" required>
                        </div>
                        <div class="cloformbox__inpwrap">
                          <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required>
                        </div>
                        <div class="cloformbox__inpwrap">
                          <input type="email" name="formParams[email]" placeholder="Email" required>
                        </div>
                        <div class="cloformbox__subwrap">
                          <button type="submit" class="clobtn">Забронировать место</button>
                        </div>
                      </div>
                      <div class="promoform newpromoform">
                        <div class="promoform__openbutton promoform__btn">
                          <span>У меня есть промокод</span>
                          <img src="/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg" alt="" class="promoform__arrow">
                        </div>
                        <div class="promoform__inpwrap">
                          <div class="promoform__inpbox">
                            <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                            <button class="promoform__clearer" type="button"></button>
                          </div>
                          <button class="promoform__btn jsPPRequest" type="button">
                            <span>Активировать</span>
                            <img src="/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg" alt="" class="promoform__arrow">
                          </button>
                        </div>
                        <div class="promoform__success promoform__btn">
                          <span>Промокод активирован</span>
                          <img src="/wp-content/themes/talentsy/img/clo3d/promo-check.svg" alt="" class="promoform__arrow">
                        </div>
                      </div><!-- //promoform -->

                      <p class="cloformbox__accept">
                        Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
                      </p>

                      <input type="hidden" name="jsPmoHiddenFormField">

                      <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
                      <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
                      <input name="formParams[dealCustomFields][1291877]" type="hidden">
                      <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
                      <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
                      <input type="hidden" name="requestTime" value="1695648662">
                      <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                      <input type="hidden" name="isHtmlWidget" value="1"/>
                    </form>
                </div>
            </div>
        </section>
        <section class="orkt5for">
            <div class="clocontainer">
                <h2 class="h2">ДЛЯ КОГО ЭТОТ КУРС</h2>
                <div class="difficult6__grid">
                    <div class="difficult6item difficult6item--normal">
                        <div class="difficult6item__picwrap">
                            <img src="<?= $pics; ?>/b6-1.png" alt="" class="difficult6item__pic">
                        </div>
                        <div class="clob5box__title">Астрологам, желающим начать практику</div>
                        <div class="clob5box__descr">
                            Опередите своих коллег по цеху и ускорьте свой финансовый рост
                        </div>
                    </div>
                    <div class="difficult6item difficult6item--border">
                        <div class="difficult6item__picwrap">
                            <img src="<?= $pics; ?>/b6-2.png" alt="" class="difficult6item__pic">
                        </div>
                        <div class="clob5box__title">Практикующим астрологам</div>
                        <div class="clob5box__descr">
                            Курс поможет вам отстройться от конкурентов за счет приобритенных навыков
                        </div>
                    </div>
                    <div class="difficult6item difficult6item--black">
                        <div class="difficult6item__picwrap">
                            <img src="<?= $pics; ?>/b6-3.png" alt="" class="difficult6item__pic">
                        </div>
                        <div class="clob5box__title">Астропсихологам</div>
                        <div class="clob5box__descr">
                            Освоив фиктивные точки вы станете более востребованными на рынке труда
                        </div>
                    </div>
                    <div class="difficult6item difficult6item--bg">
                        <div class="difficult6item__picwrap">
                            <img src="<?= $pics; ?>/b6-4.jpg" alt="" class="difficult6item__pic">
                        </div>
                        <div class="clob5box__title">А также</div>
                        <div class="clob5box__descr">
                            студентам астрологических программ
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="beayhackprepod">
            <div class="beayhackprepod__bg">
                <div class="clocontainer beayhackprepod__wrap">
                    <div class="beayhackprepod__left">
                        <img src="<?= $pics; ?>/b6-left.png" alt="" class="beayhackprepod__pic mt-0">
                    </div>
                    <div class="beayhackprepod__right">
                        <h2 class="h2">ПОЗНАКОМЬТЕСЬ <br>С ПРЕПОДАВАТЕЛЕМ</h2>
                        <div class="beayhackprepod__line1 h3">Елена Александрова</div>
                        <ul class="beayhackprepod__list">
                            <li>Профессиональный и практикующий астролог со стажем 14 лет (с 2009 года)</li>
                            <li>Автор обучающих курсов и статей</li>
                        </ul>
                        <div class="beayhackprepodcard">
                            <img src="<?= $pics; ?>/b6-right.png" alt="" class="beayhackprepodcard__pic">
                            <div class="beayhackprepodcard__text">
                                Автор собственной методики по астрологии, совмещающей аналитику и творчество
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="closummary orktsummary">
            <div class="clocontainer">
                <h2 class="h2">Содержание курса</h2>
                <div class="clob5box__title">
                    Фиктивные точки и дополнительные объекты в астрологии <br> (введение в понятие, область применения,
                    сочетание со сферами жизни).
                </div>
                <div class="closummary__wrap">
                    <? foreach (get_field('prog_list') as $k => $progStep): ?>
                      <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="closummary<?=$k;?>">
                        <label class="closummary__hdr cloflexi" for="closummary<?=$k;?>">
                          <span class="clo3slide__num"><?= ($k+1) > 9 ? ($k+1) : '0'.($k+1); ?></span>
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
        </section>
        <section class="cloform beayhacksummaryform2">
            <div class="clocontainer">
                <img src="<?= $pics; ?>/b6-star2.svg" alt="" class="orktform1__star">
                <div class="cloform__bg">
                    <div class="difficultform2__hdr">
                        <h2 class="cloform2__h2 h2">ПОЛУЧИТЬ ПОЛНУЮ <br>ПРОГРАММУ КУРСА</h2>
                        <img src="<?= $pics; ?>/pic22.png" alt="" class="pic-program-auto">
                    </div>

                    <div class="cloform__line"></div>

                    <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
                        <div class="cloformbox__title">Заполните форму, чтобы <b>получить полную программу курса</b>
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
                            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
                        </p>

                      <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
                      <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
                      <input name="formParams[dealCustomFields][1291877]" type="hidden">
                      <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
                      <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
                      <input type="hidden" name="requestTime" value="1695648662">
                      <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                      <input type="hidden" name="isHtmlWidget" value="1"/>
                    </form>
                </div>
            </div>
        </section>
        <section class="clob10">
            <div class="cloblack">
                <div class="clocontainer">
                    <h2 class="h2">формат обучения</h2>
                    <div class="clob10__wrap cloflexi">
                        <dl class="clob10dl clob10dl--green">
                            <dt>8</dt>
                            <dd>Экспертных <br> онлайн занятий</dd>
                        </dl>
                        <dl class="clob10dl">
                            <dt>3</dt>
                            <dd>Домашних заданий <br> с разбором</dd>
                        </dl>
                        <dl class="clob10dl clob10dl--bord">
                            <dt>
                                <img src="<?= $pics; ?>/b10-infinity.svg" alt="" class="clob10dl__svg">
                            </dt>
                            <dd>Неограниченный доступ <br> к ресурсу</dd>
                        </dl>
                        <dl class="clob10dl clob10dl--bord">
                            <dt><span style="color: #E7AD68">12/7</span></dt>
                            <dd>Поддержка студентов <br>и ответы на вопросы</dd>
                        </dl>
                        <dl class="clob10dl">
                            <dt>32
                            <dt>
                            <dd>Академических <br> часа</dd>
                        </dl>
                        <dl class="clob10dl clob10dl__withbg">
                            <img src="<?= $pics; ?>/b10-pic.jpg" alt="" class="clob10dl__bg">
                            <dt></dt>
                            <dd>Онлайн <br>
                                формат обучения
                            </dd>
                        </dl>
                    </div>
                    <div class="clob10__hr"></div>
                    <div class="clob10__bot cloflexi">
                        <div class="clob10__left">
                            <h2 class="h2">А ещё вы получите доступ в <span>закрытый Telegram-чат</span></h2>
                            <div class="clob10__bottxt">C полезным контентом для астрологов</div>
                        </div>
                        <aside class="clob10__right">
                            <img src="<?= $pics; ?>/b11-collage.png" alt="" class="clob10__rightpic">
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <section class="orkt14teams clob12">
            <div class="clocontainer">
                <h2 class="h2">ВАС ЖДУТ <span>ЗАНЯТИЯ В МИНИГРУППАХ</span> <br> ДО 20 ЧЕЛОВЕК</h2>
                <div class="orkt14teams__wrap">
                    <img src="<?= $pics; ?>/b11-left.jpg" alt="" class="orkt14teams__pic">
                    <div class="orkt14teams__content">
                        <div class="orkt14teams__line">Студенты <b>мотивируют и помогают</b> друг другу</div>
                        <div class="orkt14teams__line">Вы будете <b>расти в среде единомышленников</b> и&nbsp;обмениваться
                            знаниями
                        </div>
                        <div class="orkt14teams__line"><b>Формат</b> занятий подразумевает <b>возможность дискуссий</b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cloform cloform4">
            <div class="clocontainer">
                <div class="cloform__bg">

                    <div class="cloform4__hdr">
                        <div class="difficultform2__hdr">
                            <h2 class="h2">Освойте фиктивные точки
                                и увеличьте точность астрологических трактовок</h2>
                            <img src="<?= $pics; ?>/b5-planet.png" alt="" class="pic-program-auto">
                        </div>
                        <div class="beayhackform1__time">Осталось: <b>6 мест</b></div>
                    </div>
                    <div class="cloform__line"></div>

                    <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
                        <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
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
                        <div class="promoform newpromoform">
                            <div class="promoform__openbutton promoform__btn">
                                <span>У меня есть промокод</span>
                                <img src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg"
                                     alt="" class="promoform__arrow">
                            </div>
                            <div class="promoform__inpwrap">
                                <div class="promoform__inpbox">
                                    <input type="text" name="formParams[dealCustomFields][1367090]"
                                           placeholder="Введите промокод" class="jsPmoField">
                                    <button class="promoform__clearer" type="button"></button>
                                </div>
                                <button class="promoform__btn jsPPRequest" type="button">
                                    <span>Активировать</span>
                                    <img src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg"
                                         alt="" class="promoform__arrow">
                                </button>
                            </div>
                            <div class="promoform__success promoform__btn">
                                <span>Промокод активирован</span>
                                <img src="https://talentsy.ru/wp-content/themes/talentsy/img/clo3d/promo-check.svg"
                                     alt="" class="promoform__arrow">
                            </div>
                        </div><!-- //promoform -->

                        <p class="cloformbox__accept">
                            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
                        </p>

                        <input type="hidden" name="jsPmoHiddenFormField">

                      <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
                      <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
                      <input name="formParams[dealCustomFields][1291877]" type="hidden">
                      <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
                      <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
                      <input type="hidden" name="requestTime" value="1695648662">
                      <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                      <input type="hidden" name="isHtmlWidget" value="1"/>
                    </form>
                </div>
            </div>
        </section>
        <section class="cloreviews js-clo-reviews">
            <div class="clocontainer">
                <h2 class="h2">ВОТ ЧТО <span style="color:#E7AD68">ГОВОРЯТ СТУДЕНТЫ</span> <br>ОНЛАЙН УНИВЕРСИТЕТА
                    TALENTSY</h2>
                <div class="cloreviews__sub">Уже <b>более 90 студентов</b> прошли курс и <b>превзошли своих коллег</b>
                    по цеху
                </div>
                <div class="cloreviews__wrap">
                    <div class="getreview-widget" data-widget-id="62KvAOPa5e2ghZHN"></div>
                </div>
            </div>
        </section><!-- //cloreviews -->
        <section class="orkt17about difficultabout">
            <div class="clob2__bg">
                <div class="clocontainer">
                    <div class="orkt17about__wrap">
                        <div class="orkt17about__left">
                            <h2 class="h2">ПОЧЕМУ
                                <mark>СТОИТ <br>ОБУЧАТЬСЯ</mark>
                                <br>В TALENTSY
                            </h2>
                            <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/"
                               class="orkt17about__licence" target="_blank"><span>Посмотреть лицензию</span></a>
                        </div>
                        <div class="orkt17about__right">
                            <div class="orkt17aboutbox">
                                <img src="<?= $pics; ?>/b17-lic.png"
                                     alt="" class="orkt17aboutbox__img">
                                <div class="orkt17aboutbox__titl">У нас есть лицензия</div>
                                <div class="orkt17aboutbox__descr">От Департамента образования и науки города Москвы
                                </div>
                            </div>
                            <div class="orkt17aboutbox is-green">
                                <img src="<?= $pics; ?>/b17-sk.svg"
                                     alt="" class="orkt17aboutbox__img">
                                <div class="orkt17aboutbox__titl">Участники <br>Skolkovo</div>
                            </div>
                        </div>
                    </div>
                    <div class="orkt17sertblock difficultsertblock">
                        <a href="<?= $pics; ?>/cert.png" data-fancybox="gallery">
                            <img src="<?= $pics; ?>/b9-cert.jpg" alt="" class="orkt17sertblock__pic">
                        </a>
                        <div class="orkt17sertblock__right">
                            <h3 class="h3">
                                ПО ИТОГАМ КУРСА <br>
                                <mark>ВЫ ПОЛУЧИТЕ СЕРТИФИКАТ</mark>
                                <br>
                                ОБ УСПЕШНОМ ОКОНЧАНИИ
                            </h3>
                            <a href="<?= $pics; ?>/cert.png" class="orkt17about__licence" data-fancybox="gallery2"><span>Посмотреть сертификат</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cloform cloform5">
            <div class="" id="orderform">
                <div class="clocontainer">
                    <div class="cloform5__head">
                        <h2 class="h2">стоимость обучения</h2>
                        <div class="cloform__line cloform5__line"></div>
                        <div class="cloform5__prices cloflexi">
                            <div class="cloform5__current cloflexi jbm">
                                <div class="cloform5__char1">От</div>
                                <div class="cloform5__char2 jsPPSumm">958</div>
                                <div class="cloform5__char3">₽/мес</div>
                            </div>
                            <div class="cloform5__old jbm">2083 ₽/мес</div>
                        </div>
                        <div class="cloform5__underprice">
                            <div class="cloform4__sales">
                                <div class="cloform4__circle cloform5__circle">
                                    <span>-</span>54<small>%</small>
                                </div>
                                <div class="cloform4__line">Скидка <?= $saleDate; ?></div>
                                <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
                            </div>
                            <div class="cloform5__right">
                                <p>Начни учиться бесплатно</p>
                                <p class="cloform5__small">Беспроцентная рассрочка на 24 месяца. <br> Первый платеж
                                    через 2 месяца.</p>
                                <p class="cloform5__green">Скидка студентам Talentsy — до&nbsp;10%</p>
                            </div>
                        </div>

                    </div>


                    <form class="lt-normal-form lt-form-inner lt-form cloformbox" action="https://lk.talentsy.ru/pl/lite/block-public/process-html?id=<?= get_field('getcourse_wid'); ?>" method="post" data-open-new-window="0">
                      <div class="cloformbox__title">Отправьте заявку, <b>чтобы забронировать место</b></div>
                      <div class="cloformbox__grid">
                        <div class="cloformbox__inpwrap">
                          <input type="text" name="formParams[first_name]" placeholder="Имя" required>
                        </div>
                        <div class="cloformbox__inpwrap">
                          <input type="tel" name="formParams[phone]" placeholder="+7 (999) 999-99-99" required>
                        </div>
                        <div class="cloformbox__inpwrap">
                          <input type="email" name="formParams[email]" placeholder="Email" required>
                        </div>
                        <div class="cloformbox__subwrap">
                          <button type="submit" class="clobtn">Забронировать место</button>
                        </div>
                      </div>
                      <div class="promoform newpromoform">
                        <div class="promoform__openbutton promoform__btn">
                          <span>У меня есть промокод</span>
                          <img src="/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg" alt="" class="promoform__arrow">
                        </div>
                        <div class="promoform__inpwrap">
                          <div class="promoform__inpbox">
                            <input type="text" name="formParams[dealCustomFields][1367090]" placeholder="Введите промокод" class="jsPmoField">
                            <button class="promoform__clearer" type="button"></button>
                          </div>
                          <button class="promoform__btn jsPPRequest" type="button">
                            <span>Активировать</span>
                            <img src="/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg" alt="" class="promoform__arrow">
                          </button>
                        </div>
                        <div class="promoform__success promoform__btn">
                          <span>Промокод активирован</span>
                          <img src="/wp-content/themes/talentsy/img/clo3d/promo-check.svg" alt="" class="promoform__arrow">
                        </div>
                      </div><!-- //promoform -->

                      <p class="cloformbox__accept">
                        Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки персональных данных</a>
                      </p>

                      <input type="hidden" name="jsPmoHiddenFormField">

                      <input name="formParams[dealCustomFields][1265453]" type="hidden" value="<?= $_GET['utm_info'] ?? ''; ?>">
                      <input name="formParams[dealCustomFields][1810276]" type="hidden" value="<?= get_field('elly_alias'); ?>">
                      <input name="formParams[dealCustomFields][1291877]" type="hidden">
                      <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper">
                      <input type="hidden" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref">
                      <input type="hidden" name="requestTime" value="1695648662">
                      <input type="hidden" name="requestSimpleSign" value="de53721676f9b6aa19bb539ad254923d">
                      <input type="hidden" name="isHtmlWidget" value="1"/>
                    </form>
                </div>
            </div>
        </section>
        <section class="clofaq ortkfaq">
            <div class="clocontainer">
                <h2 class="h2">Часто задаваемые <br>вопросы</h2>
                <div class="clofaq__wrap">
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="clofaq0">
                        <label class="closummary__hdr cloflexi" for="clofaq0">
                            <span class="closummary__title">Получится ли совмещать учебу и работу?</span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><p>Мы организовали обучение таким оразом, чтобы вам
                                        было максимально удобно и просто. Если вы не сможете присутствовать на живых
                                        онлайн-занятиях, все обучающие видеоматериалы останутся доступными даже после
                                        завершения курса, что позволит вам вернуться к ним и закрепить полученные
                                        знания, когда вы этого захотите.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="clofaq1">
                        <label class="closummary__hdr cloflexi" for="clofaq1">
                            <span class="closummary__title">Смогу ли я получить все нужные знания онлайн?</span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><p>Да, сможете – на курсе вы будете максимально
                                        вовлечены в учебный процесс через вебинары, домашние задания и работу с
                                        кураторами.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="clofaq2">
                        <label class="closummary__hdr cloflexi" for="clofaq2">
                            <span class="closummary__title">Какое программное обеспечение мне понадобится для обучения?&nbsp;</span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad">
                                    <ul>
                                        <li>Zoom – приложение для вебинаров и групповых мастермайндов;</li>
                                        <li>Telegram – мессенджер для общения куратора и студентов.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="clofaq3">
                        <label class="closummary__hdr cloflexi" for="clofaq3">
                            <span class="closummary__title">Смогу ли я подключаться с планшета или телефона?&nbsp;</span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><p>Да. Для этого на нем должны быть установлены Zoom и
                                        Telegram.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="clofaq4">
                        <label class="closummary__hdr cloflexi" for="clofaq4">
                            <span class="closummary__title">Кому я смогу задавать вопросы в процессе обучения?&nbsp;</span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><p>За каждой группой наших студентов закреплен куратор,
                                        который сможет оперативно ответить на все вопросы. На все вопросы по содержанию
                                        лекций будет отвечать преподаватель.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="closummary__quest">
                        <input type="checkbox" name="questcheck" id="clofaq5">
                        <label class="closummary__hdr cloflexi" for="clofaq5">
                            <span class="closummary__title">Есть ли у вас рассрочка?</span>
                            <span class="closummary__plus"></span>
                        </label>
                        <div class="closummary__content">
                            <div class="closummary__text">
                                <div class="closummary__textpad"><p>Да, у нас действует программа рассрочки с
                                        несколькими банками: Тинькофф, СберБанк, Почта Банк, АльфаБанк.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();
