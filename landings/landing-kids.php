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
          "научиться ставить <br>и&nbsp;достигать цели",
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
          <span>Оставьте заявку</span> и получите <br>неделю обучения бесплатно
        </span>
        <span class="landkids1__actright">Хочу попробовать</span>
      </button>
      <div class="landkids1__mobile">
        <em>Оставьте заявку</em> и получите неделю <br>обучения бесплатно
      </div>
    </div>
    <div class="landkids1__right">
      <img src="<?=$pics; ?>/b1-boy.png" alt="" class="landkids1__pic">
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
              <img src="<?=$pics; ?>/b2-icon1.svg" alt="">
            </div>
            <p>Строить личные и дружеские отношения. Уметь выражать свои мысли.</p>
          </div>
          <div class="landkids2item__paper" style="--top:10px;">
            <div class="landkids2item__icon">
              <img src="<?=$pics; ?>/b2-icon2.svg" alt="">
            </div>
            <p>Творчески мыслить. Критически оценивать информацию.</p>
          </div>
          <div class="landkids2item__paper" style="--top:10px; --angle:-2deg;">
            <div class="landkids2item__icon">
              <img src="<?=$pics; ?>/b2-icon3.svg" alt="">
            </div>
            <p>Ставить и достигать цели эффективно. Планировать время.</p>
          </div>
          <div class="landkids2item__paper" style="--angle:1deg;">
            <div class="landkids2item__icon">
              <img src="<?=$pics; ?>/b2-icon4.svg" alt="">
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
              <img src="<?=$pics; ?>/b2-icon5.svg" alt="">
            </div>
            <p>Решать уравнения. Помнить формулы сокращенного умножения.</p>
          </div>
          <div class="landkids2item__paper" style="--top:17px; --angle:0deg;">
            <div class="landkids2item__icon">
              <img src="<?=$pics; ?>/b2-icon6.svg" alt="">
            </div>
            <p>Уметь выделять причастный оборот. Знать виды наречий.</p>
          </div>
          <div class="landkids2item__paper" style="--angle:-2deg;">
            <div class="landkids2item__icon">
              <img src="<?=$pics; ?>/b2-icon7.svg" alt="">
            </div>
            <p>Уметь пользоваться контурными картами. Уметь измерять азимут.</p>
          </div>
          <div class="landkids2item__paper" style="--top:15px; --angle:1deg;">
            <div class="landkids2item__icon">
              <img src="<?=$pics; ?>/b2-icon8.svg" alt="">
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
          <img src="<?=$pics; ?>/b3-icon1.svg" alt="">
          <span>Гарварда</span>
        </div>
        <div class="landkids3__iconbox">
          <img src="<?=$pics; ?>/b3-icon2.svg" alt="">
          <span>Стенфорда</span>
        </div>
        <div class="landkids3__iconbox">
          <img src="<?=$pics; ?>/b3-icon3.svg" alt="">
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
              <img src="<?=$pics; ?>/b4-star1.png" alt="" class="landkids3__markpic1">
              <img src="<?=$pics; ?>/b4-star2.png" alt="" class="landkids3__markpic2">
              <span>Soft skills</span>
            </div>
          </div>
          <div class="landkids3__train">
            <div class="kidswagen">
              <div class="kidswagen__title">
                <img src="<?=$pics; ?>/b4-feat1.svg" alt="">
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
                <img src="<?=$pics; ?>/b4-feat2.svg" alt="">
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
                <img src="<?=$pics; ?>/b4-feat3.svg" alt="">
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
                <img src="<?=$pics; ?>/b4-feat4.svg" alt="">
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
                <img src="<?=$pics; ?>/b4-feat5.svg" alt="">
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
      <img src="<?=$pics; ?>/b5-leftbg.png" alt="" class="landkids4__bg1">
      <img src="<?=$pics; ?>/b5-rightbg.png" alt="" class="landkids4__bg2">
      <div class="kidsform kidswindow">
        <img src="<?=$pics; ?>/b5-cube.png" alt="" class="landkids5__cube">
        <div class="kidsform__h1">Попробуйте бесплатно</div>
        <div class="kidsform__h2">Запишите своего ребенка на бесплатное занятие</div>
        <form class="kidsform__wrap">
          <div class="kidsform__item">
            <input type="text" name="username" placeholder="Ваше имя" required>
          </div>
          <div class="kidsform__item">
            <input type="tel" name="userphone" placeholder="Номер телефона" required>
          </div>
          <div class="kidsform__item">
            <input type="email" name="useremail" placeholder="Адрес электронной почты" required>
          </div>
          <div class="kidsform__submit">
            <button type="submit" class="kidsform__button">Записаться</button>
          </div>
        </form>
        <p class="kidsform__accept">
          Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
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
      <img src="<?=$pics; ?>/b6-girl.png" alt="" class="landkids6__bg">
      <div class="landkids6__over">
        <div class="landkids6__left">
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Нежелание учиться и делать уроки вовремя</p>
          </div>
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Истерики, частые слезы и агрессия</p>
          </div>
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Рассеянность и неорганизованность</p>
          </div>
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Низкая самооценка и неуверенность в себе</p>
          </div>
        </div>
        <div class="landkids6__right">
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Страх совершить ошибку</p>
          </div>
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Одиночество и отсутствие друзей</p>
          </div>
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
            <p>Зависимость от гаджетов и игр</p>
          </div>
          <div class="landkids6__item">
            <img src="<?=$pics; ?>/b6-angryicon.svg" alt="">
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
        <img src="<?=$pics; ?>/b7-starsbg.png" alt="">
      </picture>
      <div class="landkids7__over">
        <h2 class="kidsh1">
          Как изменится ваш ребенок после<br>
          обучения на нашей программе?
        </h2>
        <div class="landkids7__grid">
          <img src="<?=$pics; ?>/b7-girl.png" alt="" class="kidscontainer__girl">
          <div class="landkids7__overscroll">
            <div class="landkids7__left">
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Станет</small> самостоятельнее и организованнее <small>в школьных и бытовых
                    вопросах</small></p>
              </div>
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Почувствует себя</small> спокойно и уверенно <small>в общении со сверстниками
                    и взрослыми</small></p>
              </div>
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Станет</small> ценить бережные отношения <small>с близкими, увидит в них опору и
                    поддержку</small></p>
              </div>
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Научится</small> отстаивать свою точку зрения <small>и защищать себя без драк и
                    обзывательств</small></p>
              </div>
            </div>
            <div class="landkids7__right">
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Станет</small> выражать эмоции <small>без истерик и грубости</small></p>
              </div>
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Сможет позитивно</small> воспринимать <small>свои и чужие</small> особенности</p>
              </div>
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p>Расширит кругозор <small>и разовьет интерес к получению новых знаний</small></p>
              </div>
              <div class="landkids7__item">
                <img src="<?=$pics; ?>/b7-smileicon.svg" alt="">
                <p><small>Научится</small> критически оценивать информацию <small>и делать</small> логичные выводы
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
        <form class="kidsform__wrap">
          <div class="kidsform__item">
            <input type="text" name="username" placeholder="Ваше имя" required>
          </div>
          <div class="kidsform__item">
            <input type="tel" name="userphone" placeholder="Номер телефона" required>
          </div>
          <div class="kidsform__item">
            <input type="email" name="useremail" placeholder="Адрес электронной почты" required>
          </div>
          <div class="kidsform__submit">
            <button type="submit" class="kidsform__button">Задать вопрос</button>
          </div>
        </form>
        <p class="kidsform__accept">
          Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
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
        <img src="<?=$pics; ?>/b9-abs1.png" alt="" class="landkids8__abs1">
        <img src="<?=$pics; ?>/b9-abs2.png" alt="" class="landkids8__abs2">
        <div class="landkids8__slider">
          <div class="swiper js-kids-presentation">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/1_2.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/2.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/3.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/4.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/5.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/6.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/7.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
              <div class="swiper-slide">
                <img src="<?=$pics; ?>/slides/8.webp" alt="" class="landkids8__slideing" loading="lazy">
              </div>
            </div>
          </div>
        </div>
        <img src="<?=$pics; ?>/b9-ipadx.webp" alt="" class="landkids8__mask">
      </div>
      <div class="landkids8__propsover">
        <div class="landkids8__left">
          <dl class="landkids8__prop prop1">
            <dt>Группа</dt>
            <dd>
              Дети в группе одного <br>возраста
              <img src="<?=$pics; ?>/b9-arrow-1.svg" alt="">
            </dd>
          </dl>
          <dl class="landkids8__prop prop2">
            <dt>Преподаватели</dt>
            <dd>
              Занятия ведут <br>специалисты по <br>детскому развитию <br>и психологии
              <img src="<?=$pics; ?>/b9-arrow-2.svg" alt="">
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
              <img src="<?=$pics; ?>/b9-arrow-3.svg" alt="">
            </dd>
          </dl>
        </div>
      </div>
    </div><!-- //landkids8__block -->
    <div class="kidsform kidswindow">
      <div class="kidsform__h1">Попробуйте бесплатно</div>
      <div class="kidsform__h2">Запишите своего ребенка на бесплатное занятие</div>
      <form class="kidsform__wrap">
        <div class="kidsform__item">
          <input type="text" name="username" placeholder="Ваше имя" required>
        </div>
        <div class="kidsform__item">
          <input type="tel" name="userphone" placeholder="Номер телефона" required>
        </div>
        <div class="kidsform__item">
          <input type="email" name="useremail" placeholder="Адрес электронной почты" required>
        </div>
        <div class="kidsform__submit">
          <button type="submit" class="kidsform__button">Записаться</button>
        </div>
      </form>
      <p class="kidsform__accept">
        Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a> и <a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой обработки
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
          <img src="<?=$pics; ?>/teach1.jpg" alt="">
        </div>
        <h3 class="landkidsteacher__name">Ольга Илларионовна</h3>
        <div class="landkidsteacher__descr">
          Это не просто человек, который передает знания, это наставник, который помогает ученикам развиваться и
          становиться лучше.
        </div>
      </article>
      <article class="landkidsteacher kidswindow">
        <div class="landkidsteacher__picwrap">
          <img src="<?=$pics; ?>/teach2.jpg" alt="">
        </div>
        <h3 class="landkidsteacher__name">Анна Сергеевна</h3>
        <div class="landkidsteacher__descr">
          Это не просто человек, который передает знания, это наставник, который помогает ученикам развиваться и
          становиться лучше.
        </div>
      </article>
      <article class="landkidsteacher kidswindow">
        <div class="landkidsteacher__picwrap">
          <img src="<?=$pics; ?>/teach3.jpg" alt="">
        </div>
        <h3 class="landkidsteacher__name">Наталья Викторовна</h3>
        <div class="landkidsteacher__descr">
          Это не просто человек, который передает знания, это наставник, который помогает ученикам развиваться и
          становиться лучше.
        </div>
      </article>
      <article class="landkidsteacher kidswindow">
        <div class="landkidsteacher__picwrap">
          <img src="<?=$pics; ?>/teach4.jpg" alt="">
        </div>
        <h3 class="landkidsteacher__name">Юлия Борисовна</h3>
        <div class="landkidsteacher__descr">
          Это не просто человек, который передает знания, это наставник, который помогает ученикам развиваться и
          становиться лучше.
        </div>
      </article>
    </div>
  </div>
</section><!-- //landkidsteachers -->


<section class="landkidsprog" data-tabwrap="k">
  <div class="kidscontainer">
    <h2 class="kidsh1">
      Программа для пяти <br>возрастных групп
    </h2>
    <div class="kidspre">Выберите возраст вашего ребенка, <br>чтобы ознакомиться с программой</div>
    <div class="landkidsprog__hdr">
      <div class="landkidsprog__tablinks">
        <button class="landkidsprog__button is-active" data-tablink="kids1">6 лет</button>
        <button class="landkidsprog__button" data-tablink="kids2">8 лет</button>
        <button class="landkidsprog__button" data-tablink="kids3">9 лет</button>
        <button class="landkidsprog__button" data-tablink="kids4">10-11 лет</button>
        <button class="landkidsprog__button" data-tablink="kids5">12-13 лет</button>
      </div>
      <a href="#" class="landkidsprog__right" target="_blank">Скачать всю программу</a>
    </div>
    <div class="landkidsprog__tabwrap">
      <div class="landkidsprog__tab is-active" data-tab="kids1">
        <article class="landkidsmonth kidswindow">
          <h3 class="landkidsmonth__h1">Сентябрь</h3>
          <div class="landkidsmonth__grid">
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 1</div>
              <div class="landkidslesson__title">Эмпатия и эмоциональный интелект</div>
              <div class="landkidslesson__text">Учимся понимать свои эмоции и управлять своим настроением</div>
            </div>
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 2</div>
              <div class="landkidslesson__title">Социальная адаптация</div>
              <div class="landkidslesson__text">Знакомимся с полным и сокращенными иминами</div>
            </div>
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 3</div>
              <div class="landkidslesson__title">Выстраивание коммуникации</div>
              <div class="landkidslesson__text">Формируем умение мириться со сверстниками и понимать причины
                конфликта</div>
            </div>
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 4</div>
              <div class="landkidslesson__title">Самоорганизация, домашние дела в семье</div>
              <div class="landkidslesson__text">Познакомимся с распределением бытовых обязанностей и научим
                ответственно к ним подходить</div>
            </div>
          </div>
        </article>
        <article class="landkidsmonth kidswindow landkidsmonth--green">
          <h3 class="landkidsmonth__h1">Октябрь</h3>
          <div class="landkidsmonth__grid">
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 1</div>
              <div class="landkidslesson__title">Социальная адаптация</div>
              <div class="landkidslesson__text">Знакомимся с полным и сокращенными иминами</div>
            </div>
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 2</div>
              <div class="landkidslesson__title">Эмпатия и эмоциональный интелект</div>
              <div class="landkidslesson__text">Учимся понимать свои эмоции и управлять своим настроением</div>
            </div>
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 3</div>
              <div class="landkidslesson__title">Самоорганизация, домашние дела в семье</div>
              <div class="landkidslesson__text">Познакомимся с распределением бытовых обязанностей и научим
                ответственно к ним подходить</div>
            </div>
            <div class="landkidslesson">
              <div class="landkidslesson__number">УРОК 4</div>
              <div class="landkidslesson__title">Выстраивание коммуникации</div>
              <div class="landkidslesson__text">Формируем умение мириться со сверстниками и понимать причины
                конфликта</div>
            </div>
          </div>
        </article>
      </div><!-- //landkidsprog__tab -->

      <div class="landkidsprog__tab"  data-tab="kids2">8 лет</div>
      <div class="landkidsprog__tab"  data-tab="kids3">9 лет</div>
      <div class="landkidsprog__tab"  data-tab="kids4">10-11 лет</div>
      <div class="landkidsprog__tab"  data-tab="kids5">12-13 лет</div>

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
        <img src="<?=$pics; ?>/b13-telegram.png" alt="">
      </div>
      <div class="landkidsvideoblock">
        <div class="landkidsvideoblock__text">
          Лекции и семинары по детской психологии и психологии развития, которые помогут справляться со сложными
          ситуациями и правильно реагировать на возрастные проявления ребенка.
        </div>
        <div class="landkidsvideoblock__picwrap">
          <img src="<?=$pics; ?>/b13-videobg.png" alt="" class="landkidsvideoblock__bg">
          <video class="landkidsvideoblock__lead" preload="auto" playsinline="" autoplay="" loop="" muted="">
            <source src="<?=$pics; ?>/video.mp4">
          </video>
          <!-- <img src="<?=$pics; ?>/b13-video.png" alt="" class="landkidsvideoblock__lead"> -->
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
          ребенка на бесплатную<br>
          пробную неделю
        </h2>
        <form class="landkids14form">
          <div class="kidsform__item">
            <input type="text" name="username" placeholder="Ваше имя" required>
          </div>
          <div class="kidsform__item">
            <input type="tel" name="userphone" placeholder="Номер телефона" required>
          </div>
          <div class="kidsform__item landkids14form__2col">
            <input type="email" name="useremail" placeholder="Адрес электронной почты" required>
          </div>
          <div class="kidsform__submit">
            <button type="submit" class="kidsform__button landkids14form__button">Записаться</button>
          </div>
          <p class="kidsform__accept landkids14form__2col landkids14form__accept">
            Отправляя данную форму вы соглашаетесь с условиями <a href="https://talentsy.ru/publichnaya-oferta-na-zaklyucheniye-dogovora" target="_blank">оферты</a>
            и&nbsp;<a href="https://host.talentsy.ru/legal/privacy_policy_15.03.23.pdf" target="_blank">политикой
              обработки
              персональных данных</a>
          </p>
        </form>
      </div>
      <div class="landkids14__right">
        <img src="<?=$pics; ?>/b14-boy.png" alt="">
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
