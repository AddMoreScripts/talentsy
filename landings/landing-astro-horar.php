<?php
/*
Template name: Шаблон: Лендинг - Astro Horar
*/
get_header(null, ['white' => true]);
$pics = imgs() . '/Astro-Horar';
$saleDate = 'до ' . getTomorow();
?>
    <div class="pagewrap">
        <section class="orkt1 difficult1">
            <div class="clocontainer">
                <h1 class="orkt1__h1 jbm text-uppercase">
                    Освойте искусство <span style="color: #865AD0">хорарной <br> астрологии</span> за 3 месяца и <br>
                    разблокируйте ключи к будущему
                    <br> ваших клиентов
                </h1>

                <div class="orkt1sale difficult1sale">
                    <img src="<?= $pics; ?>/b1-salebg.svg" alt="" class="orkt1sale__bg">
                    <span>-40<small>%</small></span>
                    <em><?= $saleDate; ?></em>
                </div>
                <div class="cloform__line">
                </div>

                <div class="orkt1bot">
                    <img src="<?= $pics; ?>/b1-lead.png" alt="" class="orkt1bot__bg">
                    <div class="orkt1bot__over">
                        <div class="orkt1bot__main">
                            <div class="orkt1bot__text">
                                Откройте дверь к <span>мудрости <br> и предсказаниям</span> с помощью <br> курса <span>АСТРО ХОРАР</span>
                            </div>
                            <a href="#orderform" class="orkt1bot__button clobtn" data-scrollto="">Записаться на курс</a>
                        </div>
                        <div class="orkt1places">
                            <img src="<?= $pics; ?>/b1-purple.svg" alt="">
                            <span>Осталось <b>6 мест</b> на&nbsp;новый поток</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clob2">
            <div class="clob2__bg">
                <div class="clocontainer cloflexi">
                    <div class="clob2__left">
                        <h2 class="h2">О КУРСЕ <span>АСТРО ХОРАР</span> И ПОЧЕМУ ЕГО СТОИТ ПРОЙТИ</h2>
                        <div class="clob2__vidowrap">
                            <img src="<?= $pics; ?>/b2-pic.jpg" alt="" class="clob2__photo">
                        </div>
                    </div>
                    <div class="clob2__right">
                        <p class="clob2__line2">
                            <span>Хорарная астрология</span> в отличие от натальной фокусируется <span>на ответах на конкретные вопросы и предсказаниях событий</span>
                            в конкретный момент времени.
                        </p>
                        <div class="clob2__bot">
                            <h3 class="h3">Хотите научиться предсказывать будущее и принимать решения
                                с уверенностью?</h3>
                            <div class="beayhack2__bottom">
                                <div class="beayhack2greencard">
                                    <img src="<?= $pics; ?>/b2-icon.svg" alt="" class="beayhack2greencard__icon">
                                    <div class="beayhack2greencard__text">
                                        Наш <span>уникальный курс</span> предлагает вам <span>возможность раскрыть тайны звезд и использовать их силу для прогнозирования исходов</span>
                                        вопросов и событий в вашей жизни и жизни ваших клиентов.
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
                            <div class="clo3slide__title">Овладеете древней техникой ответов на все вопросы</div>
                            <div class="clo3slide__descr">
                                Покупать ли квартиру? Стоит ли ехать в поездку? Вернется ли возлюбленный? Поступит ли
                                дочь/сын в институт?...
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/001.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide1 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">02</div>
                            <div class="clo3slide__title">Сможете строить прогнозы в отношениях</div>
                            <div class="clo3slide__descr">
                                Научитесь строить прогнозы в отношениях (любовь, измены, чувства, брак, развод) и
                                предсказывать, когда состоится свидание
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/002.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide2 -->


                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">03</div>
                            <div class="clo3slide__title">Научитесь проводить диагностику внешних воздействий на
                                человека
                            </div>
                            <div class="clo3slide__descr">
                                Сможете диагностировать сглазы, порчи, психическое воздействие
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/003.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide3 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">04</div>
                            <div class="clo3slide__title">Сможете определять наилучший выбор из различных вариантов
                            </div>
                            <div class="clo3slide__descr">
                                Направлений отпуска, покупки машины, квартиры, выбора садика, школы, ВУЗа, курсов
                                обучения и т.д.
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/004.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide4 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">05</div>
                            <div class="clo3slide__title">Научитесь консультировать в профессиональной сфере</div>
                            <div class="clo3slide__descr">
                                Сможете консультировать по вопросам смены работы и выбора работодателя
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/005.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide5 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">06</div>
                            <div class="clo3slide__title">Научитесь определять достоверность информации</div>
                            <div class="clo3slide__descr">
                                Можно ли доверять информации, вещий сон приснился или нет…
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/006.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide6 -->

                        <div class="swiper-slide clo3slide">
                            <div class="clo3slide__num">07</div>
                            <div class="clo3slide__title">Сможете давать прогнозы результатов событий</div>
                            <div class="clo3slide__descr">
                                Давать прогнозы результатов собеседований, экзаменов, перспектив сотрудничества,
                                судебных дел
                            </div>
                            <div class="clo3slide__picwrap">
                                <img src="<?= $pics; ?>/007.jpg"
                                     alt="" class="clo3slide__pic">
                            </div>
                        </div><!-- //slide7 -->
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
        </section><!-- //beayhackslider -->
        <section class="cloform orktform1">
            <div class="clocontainer">
                <img src="<?= $pics; ?>/b6-star.svg" alt="" class="orktform1__star">
                <div class="cloform__bg">
                    <div class="difficultform2__hdr">
                        <h2 class="cloform2__h2 h2"> НОВЫЕ НАВЫКИ - <br>
                            НОВЫЙ СПОСОБ ЗАРАБОТКА</h2>
                        <img src="<?= $pics; ?>/pic-program2.png" alt="" class="pic-program-auto">
                    </div>
                    <div class="beayhackform1__time">Осталось: <b>6 мест</b></div>
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
                <div class="orkt5for__grid">
                    <article class="orkt5for__item">
                        <div class="orkt5for__picwrap">
                            <img src="<?= $pics; ?>/b5-1.png" alt="" width="210px">
                        </div>
                        <div class="orkt5for__title">Астрологам, желающим начать практику</div>
                        <div class="orkt5for__descr">Опередите своих коллег по цеху и ускорьте свой финансовый рост.
                            Профессия крайне востребована на рынке. Помогая людям осознать их потребности и преодолеть
                            препятствия вы открываете новые горизонты для своего заработка
                        </div>
                    </article>
                    <article class="orkt5for__item">
                        <div class="orkt5for__picwrap orkt5for__picwrap-144">
                            <img src="<?= $pics; ?>/b5-2.png" alt="" width="144px">
                        </div>
                        <div class="orkt5for__title">Практикующим астрологам</div>
                        <div class="orkt5for__descr">Подготовка к консультации в натальной астрологии занимает несколько
                            часов, что нередко приводит к выгоранию
                            <br> <br>
                            Хорарная астрология подразумевает быстрый ответ на любые вопросы (свои и клиентов) -
                            консультация и подготовка к ней занимает 20 минут
                        </div>
                    </article>
                    <article class="orkt5for__item">
                        <div class="orkt5for__picwrap orkt5for__picwrap-144">
                            <img src="<?= $pics; ?>/b5-3.png" alt="" width="144px">
                        </div>
                        <div class="orkt5for__title">Студентам астрологических программ</div>
                        <div class="orkt5for__descr">Хорарная астрология предлагает быстрый и прямой доступ к
                            консультациям, что как следствие приводит к увеличению дохода. В отличие от натальной
                            астрологии, она не требует значительных усилий и продолжительных консультаций
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="target">
            <div class="clocontainer">
                <div class="cloform__line">
                </div>
                <h2 class="h2">МЫ ЗНАЕМ О ЧЕМ <span>ВЫ МЕЧТАЕТЕ</span> <br> И ПОМОЖЕМ ВАМ ЭТОГО ДОСТИЧЬ</h2>
                <div class="target-content">
                    <div class="difficultblackgrid__props">
                        <dl class="difficultblackgrid__prop">
                            <dt class="jbm">01</dt>
                            <dd>Находить ответы там, где натальная астрология не дает ответов</dd>
                        </dl>
                        <dl class="difficultblackgrid__prop">
                            <dt class="jbm">02</dt>
                            <dd>Заниматься делом, которое приносит не только доход, но и удовольствие</dd>
                        </dl>
                        <dl class="difficultblackgrid__prop">
                            <dt class="jbm">03</dt>
                            <dd>Получать быстрый ответ на любой вопрос клиента</dd>
                        </dl>
                        <dl class="difficultblackgrid__prop">
                            <dt class="jbm">04</dt>
                            <dd>Помогать людям профессионально</dd>
                        </dl>
                        <dl class="difficultblackgrid__prop">
                            <dt class="jbm">05</dt>
                            <dd>Работать на себя и ни от кого не зависеть. Изменить качество своей жизни</dd>
                        </dl>
                        <dl class="difficultblackgrid__prop">
                            <dt class="jbm">06</dt>
                            <dd>Тратить в разы меньше времени на подготовку к консультации</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="target-pic">
                <img src="<?= $pics; ?>/target-pic.png" alt="">
            </div>
        </section>
        <section class="beayhackprepod">
            <div class="beayhackprepod__bg">
                <div class="clocontainer beayhackprepod__wrap">
                    <div class="beayhackprepod__left">
                        <h2 class="h2">ПОЗНАКОМЬТЕСЬ <br>С ПРЕПОДАВАТЕЛЕМ</h2>
                        <img src="<?= $pics; ?>/b6-left.png" alt="" class="beayhackprepod__pic">
                    </div>
                    <div class="beayhackprepod__right">
                        <div class="beayhackprepod__line1 h2">Галина Бронникова</div>
                        <div class="beayhackprepod__line2">Эксперт в области прогностической и хорарной астрологии</div>

                        <div class="beayhackprepod__bot">
                            <div class="beayhackprepod__line"></div>
                            <ul class="beayhackprepod__list">
                                <li>Практика более 20 лет;</li>
                                <li>Автор астрологической игры «Звезда Мага» и колоды Таро «Для астрологов»;</li>
                                <li>Постоянно публикуется в газетах и журналах, ее приглашают на ТВ</li>
                            </ul>
                            <div class="beayhackprepodcard">
                                <img src="<?= $pics; ?>/b6-right.svg" alt="" class="beayhackprepodcard__pic">
                                <div class="beayhackprepodcard__text">
                                    Входит в рейтинг лучших астрологов России
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="closummary orktsummary">
            <div class="clocontainer">
                <h2 class="h2">Содержание курса</h2>
                <div class="closummary__wrap">
                    <? foreach(get_field('prog_list') as $k => $progStep): ?>
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

                    <? if( get_field('is_closed') ): ?>
                        <button class="closummary__more"></button>
                    <? endif; ?>
                </div>
            </div>
        </section>
        <section class="cloform beayhacksummaryform2">
            <div class="clocontainer">
                <img src="<?= $pics; ?>/b6-star.svg" alt="" class="orktform1__star">
                <div class="cloform__bg">
                    <div class="difficultform2__hdr">
                        <h2 class="cloform2__h2 h2">ПОЛУЧИТЬ ПОЛНУЮ <br>ПРОГРАММУ КУРСА</h2>
                        <img src="<?= $pics; ?>/pic-program.png" alt="" class="pic-program-auto">
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
                            <dt>12</dt>
                            <dd>Экспертных <br> онлайн занятий</dd>
                        </dl>
                        <dl class="clob10dl">
                            <dt>12</dt>
                            <dd>Домашних заданий <br> с разбором</dd>
                        </dl>
                        <dl class="clob10dl clob10dl--bord">
                            <dt>
                                <img src="<?= $pics; ?>/b10-infinity.svg" alt="" class="clob10dl__svg">
                            </dt>
                            <dd>Неограниченный доступ <br> к ресурсу</dd>
                        </dl>
                        <dl class="clob10dl clob10dl--bord">
                            <dt>12/7</dt>
                            <dd>Поддержка студентов <br>и ответы на вопросы</dd>
                        </dl>
                        <dl class="clob10dl">
                            <dt>24</dt>
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
                            <h2 class="h2">Освойте искусство хорарной астрологии и разблокируйте ключи к будущему ваших
                                клиентов</span></h2>
                            <img src="<?= $pics; ?>/b5-planet.png" alt="" class="pic-program-auto">
                        </div>

                        <div class="cloform4__sales">
                            <div class="cloform4__circle cloform5__circle jbm">
                                <span>-</span>40<small>%</small>
                            </div>
                            <div class="cloform4__line">Скидка <?= $saleDate; ?></div>
                            <div class="cloform4__line"><b>Осталось</b> 6 мест</div>
                        </div>
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
                            <a href="<?= $pics; ?>/cert.png" class="orkt17about__licence" data-fancybox="gallery"><span>Посмотреть сертификат</span></a>

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
                                <div class="cloform5__char2 jsPPSumm">1666</div>
                                <div class="cloform5__char3">₽/мес</div>
                            </div>
                            <div class="cloform5__old jbm">2783 ₽/мес</div>
                        </div>
                        <div class="cloform5__underprice">
                            <div class="cloform4__sales">
                                <div class="cloform4__circle cloform5__circle">
                                    <span>-</span>40<small>%</small>
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
                                <img src="/wp-content/themes/talentsy/img/clo3d/promo-arrow.svg" alt="" class="promoform__arrow">
                            </div>
                            <div class="promoform__inpwrap">
                                <div class="promoform__inpbox">
                                    <input type="text" name="formParams[dealCustomFields][1367090]"
                                           placeholder="Введите промокод" class="jsPmoField">
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
