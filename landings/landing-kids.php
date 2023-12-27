<?php
/*
Template name: Шаблон: Лендинг - KIDS
*/
get_header();
$pics = imgs() . '/landing-kids';
?>
<div class="js-scroll-elem"></div>

<div style="flex-shrink: 0;">

  <section class="landkids1">
    <div class="kidscontainer landkids1__wrap">
      <div class="landkids1__left">
        <h1 class="landkids1__h1 machina">
          Поможем
          <br>вашему ребенку<br>
          <span class="landkids1__markwrap">
            <mark class="js-typed">стать успешным <br>в&nbsp;будущем</mark>
          </span>
        </h1>
        <script>
          window.typedTexts = [
            "стать успешным <br>в&nbsp;будущем",
            "научиться ставить и&nbsp;достигать цели",
            "повысить <br>успеваемость <br>в&nbsp;школе",
            "развить <br>уверенность <br>в&nbsp;себе"
          ];
        </script>
        <div class="landkids1__h2">
          Онлайн-программа развития<br>
          ключевых гибких навыков <i>{</i>soft skills<i>}</i><br>
          для детей от 6 до 14 лет
        </div>
        <button class="landkids1__action" data-scrollto="#orderForm">
          <span class="landkids1__actleft">
            <span>Оставьте заявку</span> и получите <br>пробное занятие бесплатно
          </span>
          <span class="landkids1__actright">Хочу попробовать</span>
        </button>
        <div class="landkids1__mobile">
          <em>Оставьте заявку</em> и получите неделю <br>обучения бесплатно
        </div>
      </div>
      <div class="landkids1__right">
        <img src="<?= $pics; ?>/b1-boy.png" alt="" class="landkids1__pic">
      </div>
    </div>
    <div class="landkids1__sep">
      <i></i><i></i><i></i><i></i>
    </div>
  </section>


  <section class="landkids2">
    <div class="kidscontainer">
      <div class="kidspre">Давайте разбираться</div>
      <h2 class="kidsh1">Какие навыки важнее <br>для вашего <em>&nbsp;</em>ребенка?</h2>
      <div class="landkids2__grid">
        <article class="landkids2item kidswindow" style="--accent:#719F11; --bg:#EEFBC6; --stroke: #D0DFA0; --text: #2F400D;">
          <h3 class="landkids2item__title">Soft Skills</h3>
          <div class="landkids2item__h2">Социальные <i>{</i>гибкие<i>}</i> навыки, <br><mark>которым учат в Talentsy
              Kids</mark></div>
          <div class="landkids2item__grid">
            <div class="landkids2item__paper">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon1.svg" alt="">
              </div>
              <p>Строить личные и дружеские отношения. Уметь выражать свои мысли.</p>
            </div>
            <div class="landkids2item__paper" style="--top:10px;">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon2.svg" alt="">
              </div>
              <p>Творчески мыслить. Критически оценивать информацию.</p>
            </div>
            <div class="landkids2item__paper" style="--top:10px; --angle:-2deg;">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon3.svg" alt="">
              </div>
              <p>Ставить и достигать цели эффективно. Планировать время.</p>
            </div>
            <div class="landkids2item__paper" style="--angle:1deg;">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon4.svg" alt="">
              </div>
              <p>Верить в свои способности <br>уверенно. Выступать перед аудиторией.</p>
            </div>
          </div>
        </article>

        <article class="landkids2item kidswindow" style="--accent:#7835FF; --bg:#F4E3FF; --stroke: #E0BEF6;">
          <h3 class="landkids2item__title">Hard Skills</h3>
          <div class="landkids2item__h2">Академические <i>{</i>твердые<i>}</i> знания <br>и навыки, <mark>которым учат
              в
              школе</mark></div>
          <div class="landkids2item__grid">
            <div class="landkids2item__paper">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon5.svg" alt="">
              </div>
              <p>Решать уравнения. Помнить формулы сокращенного умножения.</p>
            </div>
            <div class="landkids2item__paper" style="--top:17px; --angle:0deg;">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon6.svg" alt="">
              </div>
              <p>Уметь выделять причастный оборот. Знать виды наречий.</p>
            </div>
            <div class="landkids2item__paper" style="--angle:-2deg;">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon7.svg" alt="">
              </div>
              <p>Уметь пользоваться контурными картами. Уметь измерять азимут.</p>
            </div>
            <div class="landkids2item__paper" style="--top:15px; --angle:1deg;">
              <div class="landkids2item__icon">
                <img src="<?= $pics; ?>/b2-icon8.svg" alt="">
              </div>
              <p>Знать дату рождения Пушкина. Уметь отличить ямб от хорея.</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section><!-- //landkids2 -->


  <div id="js-pinned-elem-kids">
    <section class="landkids3">
      <div class="kidscontainer">
        <div class="kidspre js-scroll-width-base">
          Согласно исследованию ученых из
          <div class="landkids3__iconbox">
            <img src="<?= $pics; ?>/b3-icon1.svg" alt="">
            <span>Гарварда</span>
          </div>
          <div class="landkids3__iconbox">
            <img src="<?= $pics; ?>/b3-icon2.svg" alt="">
            <span>Стенфорда</span>
          </div>
          <div class="landkids3__iconbox">
            <img src="<?= $pics; ?>/b3-icon3.svg" alt="">
            <span>Фонда Карнеги</span>
          </div>
        </div>
        <h2 class="kidsh1">
          Успех в профессии на <mark>75%</mark><br>
          определяется гибкими навыками<br>
          и только на <mark>25%</mark> – навыками<br>
          академическими
        </h2>
      </div>
      <div class="kidscontainer kidscontainer__train">
        <div class="landkids1__sep landkids3__sep">
          <i></i><i></i><i></i><i></i><i></i>
        </div>
        <div class="landkids3__scroll">
          <div class="landkids3__block">
            <div class="landkids3__left">
              <h3 class="landkids3__h3 machina">
                Мы создали программу<br>
                для детей 6—14 лет по <br>развитию ключевых
              </h3>
              <div class="landkids3__mark machina">
                <img src="<?= $pics; ?>/b4-star1.png" alt="" class="landkids3__markpic1">
                <img src="<?= $pics; ?>/b4-star2.png" alt="" class="landkids3__markpic2">
                <span>Soft skills</span>
              </div>
            </div>
            <div class="landkids3__train">
              <div class="kidswagen">
                <div class="kidswagen__title">
                  <img src="<?= $pics; ?>/b4-feat1.svg" alt="">
                  <span>Мышление</span>
                </div>
                <div class="kidswagen__feats">
                  <p>Творчески мыслить</p>
                  <p>Критически оценивать информацию</p>
                  <p>Находить свежие решения и идеи</p>
                  <p>Делать логичные выводы</p>
                </div>
              </div><!-- //kidswagen -->
              <i></i>
              <div class="kidswagen">
                <div class="kidswagen__title">
                  <img src="<?= $pics; ?>/b4-feat2.svg" alt="">
                  <span>Планирование</span>
                </div>
                <div class="kidswagen__feats">
                  <p>Эффективно планировать время</p>
                  <p>Правильно расставлять приоритеты</p>
                  <p>Ставить цели и достигать их</p>
                  <p>Не тратить время впустую</p>
                </div>
              </div><!-- //kidswagen -->
              <i></i>
              <div class="kidswagen">
                <div class="kidswagen__title">
                  <img src="<?= $pics; ?>/b4-feat3.svg" alt="">
                  <span>Общение</span>
                </div>
                <div class="kidswagen__feats">
                  <p>Уметь выражать свои мысли</p>
                  <p>Слушать и слышать других людей</p>
                  <p>Решать конфликты</p>
                  <p>Улаживать споры</p>
                </div>
              </div><!-- //kidswagen -->
              <i></i>
              <div class="kidswagen">
                <div class="kidswagen__title">
                  <img src="<?= $pics; ?>/b4-feat4.svg" alt="">
                  <span>Лидерство</span>
                </div>
                <div class="kidswagen__feats">
                  <p>Верить в свои способности</p>
                  <p>Проявлять инициативность</p>
                  <p>Выступать перед публикой</p>
                  <p>Вести за собой людей</p>
                </div>
              </div><!-- //kidswagen -->
              <i></i>
              <div class="kidswagen">
                <div class="kidswagen__title">
                  <img src="<?= $pics; ?>/b4-feat5.svg" alt="">
                  <span>Чувства и эмоции</span>
                </div>
                <div class="kidswagen__feats">
                  <p>Строить отношения</p>
                  <p>Заботиться о близких</p>
                  <p>Проявлять эмоции без истерик</p>
                  <p>Преодолевать страхи</p>
                </div>
              </div><!-- //kidswagen -->
            </div>
          </div>
        </div>
        <div class="landkids1__sep landkids3x__sep">
          <i></i><i></i><i></i><i></i><i></i>
        </div>
      </div>
    </section><!-- //landkids3 -->


    <section class="landkids5" id="orderForm">
      <div class="kidscontainer">
        <img src="<?= $pics; ?>/b5-leftbg.png" alt="" class="landkids4__bg1">
        <img src="<?= $pics; ?>/b5-rightbg.png" alt="" class="landkids4__bg2">
        <div class="kidsform kidswindow">
          <img src="<?= $pics; ?>/b5-cube.png" alt="" class="landkids5__cube">
          <div class="kidsform__h1">Попробуйте бесплатно</div>
          <div class="kidsform__h2">Запишите своего ребенка на бесплатное занятие</div>

          <form class="kidsform__wrap ajaxForm" data-target="axFormRequest">
            <div class="kidsform__item">
              <input type="text" name="Name" placeholder="Ваше имя" required>
            </div>
            <div class="kidsform__item">
              <input type="tel" name="Phone" placeholder="Номер телефона" required>
            </div>
            <div class="kidsform__item">
              <input type="email" name="Email" placeholder="Адрес электронной почты" required>
            </div>
            <div class="kidsform__submit">
              <button type="submit" class="kidsform__button">Записаться</button>
            </div>
          </form>
          <p class="kidsform__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </div>
      </div>
    </section><!-- //landkids5 -->
  </div>



  <section class="landkids6">
    <div class="kidscontainer">
      <h2 class="kidsh1">
        Развитие гибких навыков помогает<br>
        справиться с трудностями<br>
        в поведении ребенка
      </h2>
      <div class="landkids6__wrap">
        <img src="<?= $pics; ?>/b6-girl.png" alt="" class="landkids6__bg">
        <div class="landkids6__over">
          <div class="landkids6__left">
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Нежелание учиться и делать уроки вовремя</p>
            </div>
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Истерики, частые слезы и агрессия</p>
            </div>
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Рассеянность и неорганизованность</p>
            </div>
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Низкая самооценка и неуверенность в себе</p>
            </div>
          </div>
          <div class="landkids6__right">
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Страх совершить ошибку</p>
            </div>
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Одиночество и отсутствие друзей</p>
            </div>
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Зависимость от гаджетов и игр</p>
            </div>
            <div class="landkids6__item">
              <img src="<?= $pics; ?>/b6-angryicon.svg" alt="">
              <p>Неумение выражать свои мысли</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //landkids6 -->



  <section class="landkids7">
    <div class="landkids7__bg">
      <div class="kidscontainer">
        <picture class="kidscontainer__bg">
          <img src="<?= $pics; ?>/b7-starsbg.png" alt="">
        </picture>
        <div class="landkids7__over">
          <h2 class="kidsh1">
            Поможем измениться вашему ребенку и приобрести новые качества
          </h2>
          <div class="landkids7__grid">
            <img src="<?= $pics; ?>/b7-girl.png" alt="" class="kidscontainer__girl">
            <div class="landkids7__overscroll">
              <div class="landkids7__left">
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p>Самостоятельность и организованность <small>в школьных и бытовых
                      вопросах</small></p>
                </div>
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p>Спокойствие и уверенность <small>в общении со сверстниками
                      и взрослыми</small></p>
                </div>
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p>Бережные отношения с близкими, <small>способность видеть в них опору и
                      поддержку</small></p>
                </div>
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p><small>Умение</small> отстаивать свою точку зрения <small>и защищать себя без драк и
                      обзывательств</small></p>
                </div>
              </div>
              <div class="landkids7__right">
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p><small>Способность</small> выражать эмоции <small>без истерик и грубости</small></p>
                </div>
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p><small>Умение позитивно</small> воспринимать <small>свои и чужие</small> особенности</p>
                </div>
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p>Расширить кругозор <small>и разовьет интерес к получению новых знаний</small></p>
                </div>
                <div class="landkids7__item">
                  <img src="<?= $pics; ?>/b7-smileicon.svg" alt="">
                  <p><small>Навык</small> критически оценивать информацию <small>и делать</small> логичные выводы
                  </p>
                </div>
              </div>
            </div>
          </div><!-- //landkids7__grid -->
        </div><!-- //landkids7__over -->
        <div class="kidsform kidswindow">
          <div class="kidsform__h1">Возникли вопросы?</div>
          <div class="kidsform__h2">Заполните форму и нажмите кнопку "Задать вопрос", <br>чтобы связаться с нашим
            специалистом</div>

          <form class="kidsform__wrap ajaxForm" data-target="axFormRequest">
            <div class="kidsform__item">
              <input type="text" name="Name" placeholder="Ваше имя" required>
            </div>
            <div class="kidsform__item">
              <input type="tel" name="Phone" placeholder="Номер телефона" required>
            </div>
            <div class="kidsform__item">
              <input type="email" name="Email" placeholder="Адрес электронной почты" required>
            </div>
            <div class="kidsform__submit">
              <button type="submit" class="kidsform__button">Записаться</button>
            </div>
          </form>
          <p class="kidsform__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
              персональных данных</a>
          </p>
        </div><!-- //kidsform -->
      </div>
    </div>
  </section><!-- //landkids7 -->


  <section class="landkids8">
    <div class="kidscontainer">
      <h2 class="kidsh1">
        Занятия проходят <mark>онлайн</mark><br>
        в мини-группах по 4-8 детей
      </h2>
      <div class="landkids8__block">
        <div class="landkids8__sliderwrap">
          <img src="<?= $pics; ?>/b9-abs1.png" alt="" class="landkids8__abs1">
          <img src="<?= $pics; ?>/b9-abs2.png" alt="" class="landkids8__abs2">
          <div class="landkids8__slider">
            <div class="swiper js-kids-presentation">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/1_2.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/2.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/3.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/4.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/5.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/6.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/7.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="<?= $pics; ?>/slides/8.webp" alt="" class="landkids8__slideing" loading="lazy">
                </div>
              </div>
            </div>
          </div>
          <img src="<?= $pics; ?>/b9-ipadx.webp" alt="" class="landkids8__mask">
        </div>
        <div class="landkids8__propsover">
          <div class="landkids8__left">
            <dl class="landkids8__prop prop1">
              <dt>Группа</dt>
              <dd>
                Дети в группе одного <br>возраста
                <img src="<?= $pics; ?>/b9-arrow-1.svg" alt="">
              </dd>
            </dl>
            <dl class="landkids8__prop prop2">
              <dt>Преподаватели</dt>
              <dd>
                Занятия ведут <br>специалисты по <br>детскому развитию <br>и психологии
                <img src="<?= $pics; ?>/b9-arrow-2.svg" alt="">
              </dd>
            </dl>
          </div>
          <div class="landkids8__right">
            <dl class="landkids8__prop prop3">
              <dt>Время</dt>
              <dd>
                Занятия проходят <br>1 раз в неделю <br>по 60 минут
              </dd>
            </dl>
            <dl class="landkids8__prop prop4">
              <dt>Формат</dt>
              <dd>
                Все занятия <br>практические <br>и проходят в игровой <br>форме
                <img src="<?= $pics; ?>/b9-arrow-3.svg" alt="">
              </dd>
            </dl>
          </div>
        </div>
      </div><!-- //landkids8__block -->
      <div class="kidsform kidswindow">
        <div class="kidsform__h1">Попробуйте бесплатно</div>
        <div class="kidsform__h2">Запишите своего ребенка на бесплатное занятие</div>
        <form class="kidsform__wrap ajaxForm" data-target="axFormRequest">
            <div class="kidsform__item">
              <input type="text" name="Name" placeholder="Ваше имя" required>
            </div>
            <div class="kidsform__item">
              <input type="tel" name="Phone" placeholder="Номер телефона" required>
            </div>
            <div class="kidsform__item">
              <input type="email" name="Email" placeholder="Адрес электронной почты" required>
            </div>
            <div class="kidsform__submit">
              <button type="submit" class="kidsform__button">Записаться</button>
            </div>
          </form>
          <p class="kidsform__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
              персональных данных</a>
          </p>
      </div><!-- //kidsform -->
    </div>
  </section><!-- //landkids8 -->



  <section class="landkidsteachers">
    <div class="kidscontainer">
      <h2 class="kidsh1">
        Занятия ведут опытные <br>преподаватели
      </h2>
      <div class="kidspre">которые прошли многоэтапный отбор <br>и методическую подготовку</div>
      <div class="landkidsteachers__wrap">
        <article class="landkidsteacher kidswindow">
          <div class="landkidsteacher__picwrap">
            <img src="<?= $pics; ?>/kids-t1.jpeg" alt="">
          </div>
          <h3 class="landkidsteacher__name">Ужегова Анастасия Алексеевна</h3>
          <div class="landkidsteacher__descr">
            <h4>Опыт работы - 2 года</h4>
			  <br>Окончила магистратуру по специальности "Психологическое консультирование и неклиническая психотерапия". В студенческие годы работала волонтёром в Психологической службе "Lumos". Имеет опыт работы с детьми от 5 до 16 лет. Преподавала ментальную арифметику, обучение чтению, подготовку к школе.
          </div>
        </article>
        <article class="landkidsteacher kidswindow">
          <div class="landkidsteacher__picwrap">
            <img src="<?= $pics; ?>/kids-t2.jpeg" alt="">
          </div>
          <h3 class="landkidsteacher__name">Яценко Анастасия Евгеньевна</h3>
          <div class="landkidsteacher__descr">
            <h4>Опыт работы - 4 года</h4>
			  <br>Окончила медицинский университет по специальности "Клиническая психология". Работала как психологом-консультантом, так и преподавателем курсов по тайм-менеджменту, лидерству, основам предпринимательства, развитию гибких навыков. Есть опыт работы с детьми с расстройствами аутистического спектра, СДВГ, жертвами буллинга.
          </div>
        </article>
        <article class="landkidsteacher kidswindow">
          <div class="landkidsteacher__picwrap">
            <img src="<?= $pics; ?>/kids-t3.jpeg" alt="">
          </div>
          <h3 class="landkidsteacher__name">Степанова Светлана Александровна</h3>
          <div class="landkidsteacher__descr">
			  <h4>Опыт работы - 6 лет</h4>
			  <br>Окончила университет по специальности "Педагогика и методика начального образования". Работала со школьниками с 1 по 11 класс, вела курсы по развитию навыков коммуникации, креативности, теории решения изобретательских задач. Автор учебных материалов по профориентации и самопознанию.
          </div>
        </article>
        <article class="landkidsteacher kidswindow">
          <div class="landkidsteacher__picwrap">
            <img src="<?= $pics; ?>/kids-t4.jpeg" alt="">
          </div>
          <h3 class="landkidsteacher__name">Соболь Лидия Александровна</h3>
          <div class="landkidsteacher__descr">
			  <h4>Опыт работы - 3 года</h4>
			  <br>Имеет высшее психологическое образование. Работала с детьми от 4 до 18 лет. Эксперт в области тьюторского сопровождения школьников. Вела занятия по развитию эмоционального интеллекта, навыков коммуникации, креативности.
          </div>
        </article>
      </div>
    </div>
  </section><!-- //landkidsteachers -->


  <section class="landkidsprog" data-tabwrap="k">
    <div class="kidscontainer">
      <h2 class="kidsh1">
        Программа для разных <br>возрастных групп
      </h2>
      <div class="kidspre">Выберите возраст вашего ребенка, <br>чтобы ознакомиться с программой</div>
      <div class="landkidsprog__hdr">
        <div class="landkidsprog__tablinks">
          <button class="landkidsprog__button is-active" data-tablink="kids1">6-7 лет</button>
          <button class="landkidsprog__button" data-tablink="kids2">8-9 лет</button>
          <button class="landkidsprog__button" data-tablink="kids3">10 лет</button>
          <button class="landkidsprog__button" data-tablink="kids4">11-12 лет</button>
          <button class="landkidsprog__button" data-tablink="kids5">13-14 лет</button>
        </div>
      </div>
      <div class="landkidsprog__tabwrap">
        <div class="landkidsprog__tab is-active" data-tab="kids1">
          <article class="landkidsmonth kidswindow">
            <div class="landkidsmonth__grid">
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как придумывать новое?</div>
                <div class="landkidslesson__text">Супергерои получают тревожный сигнал с планеты Эпсилон. Жители планеты нуждаются в помощи, и Супергерои готовы к новой миссии. Решено вылетать немедленно, но перед вылетом необходимо создать креативные костюмы, которые помогут в путешествии.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Учимся договариваться и решать конфликты</div>
                <div class="landkidslesson__text">На Эпсилоне начались осадки в виде космических пельменей. Жители стали заметно набирать в весе и долго спать. Супергерои выяснили, что планету забрасывают пельменями жители соседней планеты Тихонь. Эпсилотяне для них слишком шумны, а когда они жуют пельмени и спят после еды, то ведут себя тихо и никого не беспокоят. Супергерои решили помочь жителям двух планет помириться.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как быть хорошим другом?</div>
                <div class="landkidslesson__text">День планеты Эпсилон. Но Супергероев не пригласили, сказав, что это праздник только для коренных эпсилотян. Супергерои обижены и собираются улетать. Эпсилотяне обеспокоены: они совсем не ожидали такой реакции. Эпсилотяне просят Супергероев не улетать. Персонажи учат их правилам дружбы. В конце жители планеты посвящают героев в число эпсилотян.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Битва с пожирателями времени</div>
                <div class="landkidslesson__text">Эпсилотяне совсем ничего не успевают: на улицах космический мусор, в домах космическая пыль, важные дела постоянно откладываются на потом. Оказалось, что дело в нашествии хронофагов: планета хронофагов разрушена, и теперь им негде жить. Под подушкой, в шкафах и даже в тарелках маленькие и большие хронофаги. Проблема в том, что хронофаги не заметны для глаз эпсилотян. Супергерои разрабатывают специальные очки для обнаружения и поимки хронофагов.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Учимся видеть хорошее</div>
                <div class="landkidslesson__text">Команда Супергероев прибыла на планету Критиканов. Критиканы вызвали Супергероев, потому что считают, что живут на самой ужасной планете во Вселенной, и с этим нужно что-то делать. Супергерои показывают другие планеты, но и те Критиканам тоже не нравятся. Супергерои решили научить Критиканов замечать не только плохое, но и хорошее.</div>
              </div>
            </div>
          </article>
        </div><!-- //landkidsprog__tab -->

        <div class="landkidsprog__tab" data-tab="kids2">
          <article class="landkidsmonth kidswindow">
            <div class="landkidsmonth__grid">
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как говорить о сложном?</div>
                <div class="landkidslesson__text">Космический корабль супергероев успешно совершил посадку на планете Эпсилон. Жители планеты хотели как можно подробнее рассказать о своих злоключениях, но постоянно перебивали друг друга и в итоге перессорились. Супергерои поняли, что их первая миссия — научить эпсилотян особому языку, с помощью которого можно выражать чувства, никого не обижая. Ученики знакомятся с языком «Я-сообщений» и учатся использовать его для выражения своих чувств.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как найти выход из любой ситуации с помощью вопросов?</div>
                <div class="landkidslesson__text">Супергерои обнаружили старый летательный аппарат. Решив сделать подарок жителям планеты Эпсилон, они его отмыли и отремонтировали, вставили новый мотор и привели в действие. Наутро жители планеты Эпсилон были в шоке: ведь это был космический корабль первого эпсилотянина — старинный ценный памятник. Эпсилотяне обращаются к супергероям с просьбой сначала спрашивать, а потом уже действовать. Герои тренируются задавать разные типы вопросов.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Настоящий детектив, или у каждой неприятности есть причина</div>
                <div class="landkidslesson__text">Супергерои прибывают на планету Исчезающих носков. Все жители ходят в разных носках не могут понять, куда практически сразу после покупки девается второй носок. Неудивительно, что за эти годы владелец сети магазинов носков Мистер Сокс баснословно разбогател и даже построил себе замок в виде огромного Носка. Логос ведёт расследование и шаг за шагом разоблачает Мистера Сокса.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как не утонуть в море информации?</div>
                <div class="landkidslesson__text">Супергерои выбирают, куда лететь дальше. После успеха на Эпсилоне им приходят сообщения с просьбами о помощи с разных планет. Супергерои анализируют полученные обращения и делают выводы о том, кто нуждается в их помощи больше всего.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как распознать мошенника?</div>
                <div class="landkidslesson__text">Космодей засылает на планету Эпсилон Злючек, которые прикидываются жителями соседней планеты Тихонь. Но Супергерои начеку и помогают отличить настоящих Тихонь от тех, кто ими прикидывается.</div>
              </div>
            </div>
          </article>
        </div><!-- //landkidsprog__tab -->

        <div class="landkidsprog__tab" data-tab="kids3">
          <article class="landkidsmonth kidswindow">
            <div class="landkidsmonth__grid">
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как решать нерешаемое?</div>
                <div class="landkidslesson__text">Космодей приближается к планете, но кроме этого эпсилотян волнуют и другие проблемы: из зоопарка убежали три тигровые мыши, поле с карамельками заросло сорняками, а повар в детском саду никак не может научиться варить манную кашу без комочков. Супергерои поняли, что их сил не хватит на всё, и решили обучить эпсилотян навыкам решения проблем. Ученики узнают, чем проблема отличается от задачи, научатся анализировать проблему, разбивать её на небольшие этапы и решать каждый этап.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Ответственный человек — это тот, кто за всё отвечает?</div>
                <div class="landkidslesson__text">Супергерои попадают на планету Изобилия, где из-за засухи не уродились космогруши. Жители требуют вернуть урожай, обратив время вспять. Супергерои объясняют, что управление временем не в их власти. Каждый супергерой рассказывает, чем может помочь, за что готов отвечать. Дети разбираются в том, что такое ответственность и учатся определять, за какие задачи они могут взять ответственность в повседневной жизни.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Полезные и вредные правила</div>
                <div class="landkidslesson__text">Супергерои прибывают на планету Такнадо и сталкиваются с обилием неоправданных правил: корабль надо приземлить носом на север, иначе посадку не дадут; передвигаться по планете можно только на ходулях; а диалог всегда начинает тот, на ком больше красного. Кому-то нужна помощь, но он не может об этом сообщить, потому что на нём нет совсем ничего красного. Логос подсвечивает жителям абсурдность и неудобство их правил. Они вместе вырабатывают новую систему.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Злиться — плохо?</div>
                <div class="landkidslesson__text">Миссия на планете Эпсилон завершена. Эта ситуация вызывает у эпсилотян разные эмоции: кто-то злится, кто-то грустит, кто-то боится отъезда Супергероев, а кто-то радуется построенному щиту. Супергерои объясняют, что одна и та же ситуация может вызывать разные эмоции. Важно принимать свои чувства и научиться понимать их.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Факт, мнение, фейк</div>
                <div class="landkidslesson__text">Древний вулкан на планете Эпсилон, кажется, просыпается: регулярно планету и всех её жителей трясёт. Эпсилотяне в панике. Логос выясняет, что причина тряски вовсе не вулкан, а один из эпсилотян, который затеял большую стройку у подножия вулкана. Логос учит жителей различать фейки и информацию, которой можно доверять, на примере новостей местных газет.</div>
              </div>
            </div>
          </article>
        </div><!-- //landkidsprog__tab -->

        <div class="landkidsprog__tab" data-tab="kids4">
          <article class="landkidsmonth kidswindow">
            <div class="landkidsmonth__grid">
              <div class="landkidslesson">
                <div class="landkidslesson__title">Психологическое айкидо Level 2. Защита от манипуляций</div>
                <div class="landkidslesson__text">Креат просит Кима списать математику, аргументируя свою просьбу тем, что настоящие друзья должны помогать друг другу. Ким чувствует себя не в своей тарелке. Ребята стараются понять, что произошло, знакомятся с понятием «манипуляция» и разбираются в том, чем опасны манипуляции, как их распознать и как вести себя с манипулятором.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Активное слушание</div>
                <div class="landkidslesson__text">Кама расстраивается, что Ким ее совсем не слушает. Хотя Ким может в подробностях пересказать всё, что она говорила. Почему так получилось? Ребята знакомятся с понятием «Активное слушание», изучают приёмы активного слушания и учатся строить диалог с помощью этих приёмов.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как Креат съел слона, а Кама — лягушку</div>
                <div class="landkidslesson__text">У ребят море планов, но как успеть всё это сделать? Ученики знакомятся с понятием «тайм-менеджмент» и основными инструментами планирования и управления временем. Учатся отслеживать и устранять «пожирателей времени» или «хронофагов», оценивают свой режим дня и думают над тем, как его оптимизировать.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Выпускаем монстров страха</div>
                <div class="landkidslesson__text">Кама боится предстоящего выступления. Ребята делятся своими страхами. Выясняется, что бояться — нормально, и у каждого состояния есть своя полезная функция.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Прочти меня, если сможешь</div>
                <div class="landkidslesson__text">У Кима сел голос, врач посоветовал провести неделю в молчании. Персонажам пришлось быть особенно внимательными к его невербальным проявлениям. На этом занятии ребята знакомятся с приёмами «‎отзеркаливание»‎ и «‎эмоциональная подстройка».‎</div>
              </div>
            </div>
          </article>
        </div><!-- //landkidsprog__tab -->

        <div class="landkidsprog__tab" data-tab="kids5">
          <article class="landkidsmonth kidswindow">
            <div class="landkidsmonth__grid">
              <div class="landkidslesson">
                <div class="landkidslesson__title">Всё (почти) в твоих руках!</div>
                <div class="landkidslesson__text">Кора пробует себя в новой секции, но на первом занятии у неё ничего не получается. Друзья убеждают не бросать занятия и приводят примеры того, как через трудности пришли к результату. Ребята разбираются в том, чет отличается реактивный и проактивный подход к жизни. Узнают о важности ошибок и проигрышей и учатся выстраивать стратегию дальнейшего поведения в случае ошибки.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Всегда ли третьего не дано?</div>
                <div class="landkidslesson__text">Ким составил план, но понимает, что точно не сможет выполнить всё и придётся от чего-то отказаться... Креат подсказывает альтернативные варианты там, где они возможны. Ребята узнают, что при решении большинства задач у человека есть возможность выбора, и пытаются разобраться в том, как совершается выбор. Учатся расставлять приоритеты, используя критерии важности и ценности, а также пробуют замечать приоритеты других людей.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Как убедить кого угодно в чём угодно?</div>
                <div class="landkidslesson__text">Ким говорит, что его руководитель готов поддержать ребят в разработке приложения, если команда сможет убедить руководителя в реальной пользе разработки. Друзья готовятся презентовать свои идеи. Ребята знакомятся с основными правилами визуального и аудиального оформления информации, понимают, что важно не только создать креатив, но и донести его ценность до других. Разбираются в том, какие факторы влияют на успех публичного выступления и готовят презентацию мечты ;).</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Сто идей за пять минут</div>
                <div class="landkidslesson__text">Ким взялся за разработку мобильного приложения, которое будет помогать школьникам экономить время, вот только ему нужна помощь ребят, чтобы понять, каким должно быть это приложение. Друзья помогают генерировать идеи, одна из которых обязательно должна привести их к успеху! Ребята разбираются в логике алгоритмов создания креативных решений, выделяют этапы создания креатива, учатся оценивать и ранжировать идеи.</div>
              </div>
              <div class="landkidslesson">
                <div class="landkidslesson__title">Мечта или цель?</div>
                <div class="landkidslesson__text">Кама делится с ребятами своими планами. Ким замечает неконкретность формулировок и говорит, что это, скорее, мечты. Кора рассказывает ребятам о целеполагании по технологии SMART. Ребята учатся отличать истинные и ложные (навязанные) цели, формулировать собственную цель и проверять её по критериям SMART.</div>
              </div>
            </div>
          </article>
        </div><!-- //landkidsprog__tab -->

      </div>
      <div class="landkidsmob">
        <a href="https://docs.yandex.ru/docs/view?url=ya-disk-public%3A%2F%2FLSNGWXTjskJnuKwforDn4Lj92tI4J0uHwqtNoOqDm4CU72mO8Ad1D%2BfrqaiyyFaUMrZMrpRHvcl9PkWNPWglZQ%3D%3D&name=%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0%20%D0%BA%D1%83%D1%80%D1%81%D0%B0%20_%D0%90%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D1%8F%20%D0%A1%D1%83%D0%BF%D0%B5%D1%80%D0%B3%D0%B5%D1%80%D0%BE%D0%B5%D0%B2_%20%D0%B4%D0%BB%D1%8F%20%D1%80%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%B9.pdf" class="landkidsprog__right" target="_blank">Полная программа</a>
      </div>
    </div>
  </section><!-- //landkidsprog -->



  <section class="landkids13">
    <div class="kidscontainer">
      <h2 class="kidsh1">
        Осуществляем поддержку <br>родителей на протяжении <br>всей программы
      </h2>
      <div class="kidspre">
        Чтобы сформировать гибкие навыки у ребенка, нужно создать<br>
        подходящую среду вне занятий. Поэтому в методику программы<br>
        мы включили тесное взаимодействие с родителями.
      </div>
      <div class="landkids13__grid">
        <div class="landkidsstats">
          <div class="landkidsstats__title">Ежемесячный отчет преподавателя <br>о прогрессе вашего ребенка</div>
          <div class="landkidsstats__lines">
            <aside class="landkidsstats__line">
              <div class="landkidsstats__legend">Чувства и эмоции</div>
              <div class="landkidsstats__progress" style="width: 45%;"><i style="width: 55px;"></i></div>
              <div class="landkidsstats__stat">+1</div>
            </aside>
            <aside class="landkidsstats__line">
              <div class="landkidsstats__legend">Общение</div>
              <div class="landkidsstats__progress" style="width: 72%;"><i style="width: 110px;"></i></div>
              <div class="landkidsstats__stat">+2</div>
            </aside>
            <aside class="landkidsstats__line">
              <div class="landkidsstats__legend">Лидерство</div>
              <div class="landkidsstats__progress" style="width: 32%;"></div>
              <div class="landkidsstats__stat">0</div>
            </aside>
            <aside class="landkidsstats__line">
              <div class="landkidsstats__legend">Планирование</div>
              <div class="landkidsstats__progress" style="width: 38%;"><i style="width: 55px;"></i></div>
              <div class="landkidsstats__stat">+1</div>
            </aside>
            <aside class="landkidsstats__line">
              <div class="landkidsstats__legend">Мышление</div>
              <div class="landkidsstats__progress" style="width: 59%;"><i style="width: 165px;"></i></div>
              <div class="landkidsstats__stat">+3</div>
            </aside>
          </div>
        </div>
        <div class="landkidsscreen">
          <p>Доступ к закрытому родительскому чату, консультациям и полезным материалам. Помощь психологов в трудных
            вопросах.</p>
          <img src="<?= $pics; ?>/b13-telegram.png" alt="">
        </div>
        <div class="landkidsvideoblock">
          <div class="landkidsvideoblock__text">
            Лекции и семинары по детской психологии и психологии развития, которые помогут справляться со сложными
            ситуациями и правильно реагировать на возрастные проявления ребенка.
          </div>
          <div class="landkidsvideoblock__picwrap">
            <img src="<?= $pics; ?>/b13-videobg.png" alt="" class="landkidsvideoblock__bg">
            <video class="landkidsvideoblock__lead" preload="auto" playsinline="" autoplay="" loop="" muted="">
              <source src="<?= $pics; ?>/video.mp4">
            </video>
            <!-- <img src="<?= $pics; ?>/b13-video.png" alt="" class="landkidsvideoblock__lead"> -->
          </div>
        </div>
      </div>
    </div>
  </section><!-- //landkids13 -->


  <section class="landkids14">
    <div class="landkids14__bg">
      <div class="kidscontainer">
        <div class="landkids14__left">
          <h2 class="kidsh1">
            Запишите своего<br>
            ребенка на бесплатное<br>
            пробное занятие
          </h2>
          <form class="landkids14form ajaxForm" data-target="axFormRequest">
            <div class="kidsform__item">
              <input type="text" name="Name" placeholder="Ваше имя" required>
            </div>
            <div class="kidsform__item">
              <input type="tel" name="Phone" placeholder="Номер телефона" required>
            </div>
            <div class="kidsform__item landkids14form__2col">
              <input type="email" name="Email" placeholder="Адрес электронной почты" required>
            </div>
            <div class="kidsform__submit">
              <button type="submit" class="kidsform__button landkids14form__button">Записаться</button>
            </div>
            <p class="kidsform__accept landkids14form__2col landkids14form__accept">
              Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a>
              и&nbsp;<a href="<?= ldocslink('agree'); ?>" target="_blank">политикой
                обработки
                персональных данных</a>
            </p>
          </form>
        </div>
        <div class="landkids14__right">
          <img src="<?= $pics; ?>/b14-boy.png" alt="">
        </div>
      </div>
    </div>
  </section><!-- //landkids14 -->



  <section class="landkidsfaq">
    <div class="kidscontainer">
      <div class="landkidsfaq__title">Ответы на часто задаваемые вопросы</div>
      <div class="landkidsfaq__wrap">
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq1">
          <label class="closummary__hdr flexi" for="clofaq1">
            <span class="closummary__title">Можно ли заниматься с телефона?</span>
            <span class="closummary__plus"><i></i></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                С телефона или планшета заниматься можно, если установить на них мобильное приложение Zoom.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq2">
          <label class="closummary__hdr flexi" for="clofaq2">
            <span class="closummary__title">Есть ли индивидуальные занятия?</span>
            <span class="closummary__plus"><i></i></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Индивидуальные занятия не предусмотрены, т.к. для отработки навыков коммуникации или командной работы
                детям нужны будут напарники-ровесники. При необходимости можно будет получить индивидуальную
                консультацию преподавателя, если ребёнок пропустил урок или не до конца усвоил тему. В премиум-тарифе
                несколько часов консультаций уже включены в оплаченный пакет, на других тарифах часы консультаций
                можно оплатить отдельно.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq3">
          <label class="closummary__hdr flexi" for="clofaq3">
            <span class="closummary__title">У нас все хорошо с гибкими навыками, зачем нам это?</span>
            <span class="closummary__plus"><i></i></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                Гибкие навыки относятся к такой категории умений, которые можно совершенствовать почти бесконечно.
                Программа нашего курса построена так, что дети с разным уровнем начальной подготовки смогут получить
                на уроках что-то новое и полезное. Важно помнить, высокий (намного выше среднего) уровень развития
                гибких навыков даёт человеку огромные карьерные преимущества. Так что не упустите свой шанс в
                получении этих преимуществ.
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq4">
          <label class="closummary__hdr flexi" for="clofaq4">
            <span class="closummary__title">Разве ребенок сможет заниматься дистанционно?</span>
            <span class="closummary__plus"><i></i></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Дети будут работать в программе Zoom. Это приложение с очень простым интерфейсом, в котором сможет
                  разобраться даже ученик начальной школы.</p>
                <p>Количество учеников в группах небольшое, поэтому педагог сможет уделить внимание каждому ребёнку и
                  оказать помощь, если в этом возникнет необходимость.</p>
              </div>
            </div>
          </div>
        </article>
        <article class="closummary__quest">
          <input type="checkbox" name="questcheck" id="clofaq5">
          <label class="closummary__hdr flexi" for="clofaq5">
            <span class="closummary__title">Ребенок не любит (стесняется) групповых занятий</span>
            <span class="closummary__plus"><i></i></span>
          </label>
          <div class="closummary__content">
            <div class="closummary__text">
              <div class="closummary__textpad">
                <p>Наши преподаватели прошли специальное обучение и приложат все усилия, чтобы помочь ребёнку
                  комфортно и без стрессов включиться в групповые активности. Мы настоятельно рекомендуем не
                  игнорировать проблему болезненной стеснительности ребёнка и научить его взаимодействовать с группой,
                  высказывать своё мнение и выступать публично, т.к. это очень важный навык, который необходим в
                  жизни. Квалификация наших преподавателей позволит сформировать этот навык постепенно, не травмируя
                  ребёнка.</p>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section><!-- //landkidsfaq -->


</div>

<?php
get_footer();
