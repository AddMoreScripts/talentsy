<?php
/*
Template name: Шаблон: О Talentsy
*/
get_header(null, ['white' => true]);
$pics = imgs() . '/about';
?>

<div class="aboutloader__fixbg">
  <img src="<?= $pics; ?>/hero.jpg" alt="" class="aboutloader__hero">
</div>

<div class="about js-need-gsap">
  <div class="aboutloader">
    <img src="<?= $pics; ?>/loader-3.svg" alt="" class="aboutloader__pre">
  </div>
  <div class="aboutloader__opacitystart"></div>

  <section class="about2">
    <div class="about2__title druk">
      <span>
        <img src="<?= $pics; ?>/b1-crown.svg" alt="" class="about2__crown" width="122">
        <img src="<?= $pics; ?>/b1-hustle.svg" alt="" class="about2__hustle1" width="392">
        <img src="<?= $pics; ?>/b1-hustle.svg" alt="" class="about2__hustle2" width="392">
        В каждом есть талант для <br>
        самореализации. Мы помогаем <br>
        его раскрыть и превратить <br>
        в актуальную профессию.
      </span>
    </div>
    <div class="about2__sub">
      Мы создаем современный<br>
      университет, в котором<br>
      интересно учиться
    </div>
    <div class="about2__figures flexi">
      <img src="<?= $pics; ?>/b1-oval.png" alt="" class="about2__fig1" width="80">
      <img src="<?= $pics; ?>/b1-piramid.png" alt="" class="about2__fig2" width="176">
      <img src="<?= $pics; ?>/b1-obruch.png" alt="" class="about2__fig3" width="226">
      <img src="<?= $pics; ?>/b1-oval.png" alt="" class="about2__fig4" width="50">
    </div>
  </section>


  <section class="about3" data-tabwrap>
    <div class="container">
      <div class="about3__tablinks flexi">
        <div class="about3__tablinkwrap">
          <button class="about3__tablink is-active" data-tablink="about1">О компании</button>
          <img src="<?= $pics; ?>/b1-tablink1-bg.svg" alt="" class="about3__tablinkbg">
        </div>
        <div class="about3__tablinkwrap">
          <button class="about3__tablink" data-tablink="about2">Отзывы</button>
          <img src="<?= $pics; ?>/b1-tablink2-bg.svg" alt="" class="about3__tablinkbg">
        </div>
      <? if( 0 ): ?>
        <div class="about3__tablinkwrap">
          <button class="about3__tablink" data-tablink="about3">Вакансии</button>
          <img src="<?= $pics; ?>/b1-tablink3-bg.svg" alt="" class="about3__tablinkbg">
        </div>
      <? endif; ?>
        <div class="about3__tablinkwrap">
          <button class="about3__tablink" data-tablink="about4">Контакты</button>
          <img src="<?= $pics; ?>/b1-tablink4-bg.svg" alt="" class="about3__tablinkbg">
        </div>
      </div>
    </div>


    <div class="about3__tabs">
      <div class="about3__tab abouttab1 is-active" data-tab="about1">
        <div class="container">
          <div class="abouttab1__nums flexi">
            <img src="<?= $pics; ?>/tab1-line-left.svg" alt="" class="abouttab1__abs js-slide-left">
            <img src="<?= $pics; ?>/tab1-line-right.svg" alt="" class="abouttab1__ab2 js-slide-right">
            <dl class="abouttab1__num js-slide-opac">
              <dt class="druk">5</dt>
              <dd>Факультетов</dd>
            </dl>
            <dl class="abouttab1__num js-slide-opac">
              <dt class="druk">20+</dt>
              <dd>Образовательных <br>программ</dd>
            </dl>
            <dl class="abouttab1__num js-slide-opac">
              <dt class="druk">100+</dt>
              <dd>Выдающихся <br>преподавателей</dd>
            </dl>
            <dl class="abouttab1__num js-slide-opac">
              <dt class="druk">13k+</dt>
              <dd>Любимых студентов</dd>
            </dl>
          </div>

          <div class="abouttab1__block flexi js-slide-bot" style="background-color: #b1fdeb;">
            <div class="abouttab1__blockmain">
              <h3>Учитесь <br>у лучших</h3>
              <p>Мы приглашаем лучших специалистов со всей страны в качестве преподавателей наших образовательных программ. Это специалисты высочайшего класса и опыта, которые ведут активную профессиональную практику и следят за актуальными мировыми трендами.</p>
              <a href="<?=get_permalink(403); ?>" class="button abouttab1__button">
                <img src="<?= imgs(); ?>/nutriciolog/b1-button-arrow.svg" alt="">
                <span>Стать преподавателем</span>
              </a>
            </div>
            <aside class="abouttab1__side">
              <img src="<?= $pics; ?>/tab1-pic1.svg" alt="" width="229" data-gsapx="40" class="abouttab1__ill1">
            </aside>
          </div>

          <div class="abouttab1__block flexi js-slide-bot" style="background-color: #e7e2ff;">
            <div class="abouttab1__blockmain">
              <h3>Современные <br>форматы обучения</h3>
              <p>Мы создаем свои программы обучения так, чтобы они были подробными как в ВУЗе, но при этом современными и не скучными. Каждая наша программа - это сотни часов практических занятий в мини-группах под руководством наставников. По окончании обучения в работе с первыми клиентами вам будут помогать действующие специалисты.</p>
            </div>
            <aside class="abouttab1__side">
              <img src="<?= $pics; ?>/tab1-pic2.svg" alt="" width="282" style="left: -30px" data-gsapx="-40" class="abouttab1__ill2">
            </aside>
          </div>

          <div class="abouttab1__block flexi js-slide-bot" style="background-color: #fff2e4;">
            <div class="abouttab1__blockmain">
              <h3>Персональное <br>внимание <br>каждому <br>студенту</h3>
              <p>Кураторы курсов помогают студентам в прохождении образовательных программ 7 дней в неделю с раннего утра и до позднего вечера. Все домашние задания проверяются педагогами в течение 48 часов. Если у вас возникает вопрос по материалам курса, вы всегда можете задать вопрос и получить развернутый оперативный ответ.</p>
            </div>
            <aside class="abouttab1__side">
              <img src="<?= $pics; ?>/tab1-pic3.svg" alt="" width="299" data-gsapx="40"  class="abouttab1__ill3">
            </aside>
          </div>

          <div class="abouttab1__block flexi js-slide-bot" style="background-color: #ffe3d9;">
            <div class="abouttab1__blockmain">
              <h3>Обучение на <br>360 градусов</h3>
              <p>Мы понимаем, что для того, чтобы стать успешным, недостаточно только освоить навыки профессии. Необходимо также развивать надпрофессиональные навыки (Soft Skills), которые помогают решать жизненные задачи и работать с другими людьми. Самопрезентация, ведение переговоров, креативность, коммуникация — всё это вы освоите, обучаясь навыкам профессии.</p>
              <a href="<?=get_permalink(404); ?>" class="button abouttab1__button">
                <img src="<?= imgs(); ?>/nutriciolog/b1-button-arrow.svg" alt="">
                <span>Стать партнером</span>
              </a>
            </div>
            <aside class="abouttab1__side">
              <img src="<?= $pics; ?>/tab1-pic4.svg" alt="" width="342" style="left: -60px" data-gsapx="-20"  class="abouttab1__ill4">
            </aside>
          </div>

          <div class="abouttab1__block flexi js-slide-bot" style="background-color: #d2eeff;">
            <div class="abouttab1__blockmain">
              <h3>Работайте <br>на себя</h3>
              <p>Нам важно не только дать навыки профессии, но и научить вас на них зарабатывать. С нами вы сможете сменить скучную работу с 9 до 18 на профессию мечты со свободным графиком. Перестаньте просиживать свою жизнь в офисе, тратить время на дорогу и отдавать 50% с заказа работодателю. Мы научим вас зарабатывать на новой профессии самостоятельно.</p>
            </div>
            <aside class="abouttab1__side">
              <img src="<?= $pics; ?>/tab1-pic5.svg" alt="" width="258" data-gsapx="40" class="abouttab1__ill5">
            </aside>
          </div>
        </div>

      </div><!-- //abouttab1 -->

      <div class="about3__tab abouttab2" data-tab="about2">
        <div class="container">
          <div class="abouttab2__title druk">Реальные отзывы наших <br>учеников</div>
          <div class="abouttab2__reviewswrap">
            <img src="<?= $pics; ?>/tab2-bg.jpg" alt="" class="abouttab2__reviews">
            <div class="abouttab2__reviewover">
              <img src="<?= $pics; ?>/tab2-line.svg" alt="" class="abouttab2__reviewlines">
              <img src="<?= $pics; ?>/tab2-eye.png" alt="" class="abouttab2__revieweye">
              <a href="<?= get_permalink(150); ?>" class="button abouttab2__button">
                <span>Посмотреть все <br>отзывы</span>
              </a>
            </div>
          </div>
        </div>
      </div><!-- //abouttab2 -->

      <? if( 0 ): ?>
        <div class="about3__tab abouttab3" data-tab="about3">
          <div class="container">
            <div class="front3__list druk">
              <div class="front3__item">
                <a href="https://talentsy.ru/vacancies" class="front3__link js-front3-link">Head of Online Marketing</a>
                <picture class="front3__linepic">
                  <source srcset="<?= $pics; ?>/tab3-line1.svg" media="(min-width:992px)">
                  <img src="<?= $pics; ?>/tab3-line1.svg" alt="" class="front3__line front3__line--1">
                </picture>
              </div>
              <div class="front3__item">
                <a href="https://talentsy.ru/vacancies" class="front3__link js-front3-link">Менеджер по обучению</a>
                <picture class="front3__linepic">
                  <source srcset="<?= $pics; ?>/tab3-line2.svg" media="(min-width:992px)">
                  <img src="<?= $pics; ?>/tab3-line2.svg" style="bottom:-2px;" alt="" class="front3__line front3__line--1">
                </picture>
              </div>
            </div>
          </div>
        </div><!-- //abouttab2 -->
      <? endif; ?>
      <div class="about3__tab abouttab4" data-tab="about4">
        <div class="container">
          <div class="abouttab2__title druk">Свяжитесь с нами</div>
          <form class="abloutform ajaxForm" data-target="axFormRequest">
            <img src="<?= $pics; ?>/tab4-leftline.svg" alt="" class="abloutform__abs">
            <img src="<?= $pics; ?>/tab4-rightline.svg" alt="" class="abloutform__abs2">
            <div class="floatinp">
              <select name="Theme" required="required">
                <option value="" disabled selected>Выберите тему обращения</option>
                <option value="Ваш клиент">Ваш клиент</option>
                <option value="Хочу быть вашим преподавателем">Хочу быть вашим преподавателем</option>
                <option value="Инвестор">Инвестор</option>
                <option value="Представитель СМИ">Представитель СМИ</option>
                <option value="Хочу у вас работать">Хочу у вас работать</option>
                <option value="Возврат денежных средств">Возврат денежных средств</option>
                <option value="Другое">Другое</option>
              </select>
            </div>
            <div class="floatinp">
              <input type="text" id="inpname" name="Name" required class="floatinp__input" placeholder=" ">
              <label for="inpname">Имя</label>
            </div>
            <div class="floatinp">
              <input type="tel" id="Phone" name="Phone" required class="floatinp__input" placeholder=" ">
              <label for="Phone">Телефон</label>
            </div>
            <div class="floatinp">
              <input type="email" id="Email" name="Email" required class="floatinp__input" placeholder=" ">
              <label for="Email">Почта</label>
            </div>
            <div class="floatinp">
              <textarea name="Comment" id="Textarea"  class="floatinp__textarea" placeholder=" "></textarea>
              <label for="Textarea">Комментарий</label>
            </div>
            <div class="fileinput flexi">
              <label for="fileInput" class="fileinput__label flexi">Загрузить файл</label>
              <input type="file" name="file" id="fileInput" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx">
              <div class="fileinput__info"></div>
            </div>

            <div class="abloutform__submit">
              <button class="button" type="submit">Отправить</button>
              <img src="<?=$pics; ?>/tab4-buttonbg.svg" alt="">
            </div>

            <div class="abloutform__accept">Нажимая "Отправить" вы соглашаетесь на обработку <a href="<?=ldocslink('agree'); ?>" target="_blank">персональных данных</a></div>
            <input type="hidden" name="special" value="about">
          </form>
        </div>
      </div><!-- //abouttab2 -->
    </div>
  </section>
</div>






<?php if (1) : ?>
  <div class="front5 front5--about">
    <div class="container">
      <div class="js-start-pin"></div>
      <div class="front5__titlewrap js-front5-title">
        <div class="front5__title druk flexi">13 897<br>студентов<br>уже с нами</div>
        <div class="front5__sub">
          Согласно разным исследованиям больше половины людей не любят то дело, которым они вынуждены заниматься. Вы способны осуществить свои мечты и&nbsp;подарить себе интересную, полную смысла жизнь. Мы помогаем людям найти любимое дело и начать на этом зарабатывать. Превратите своё увлечение в профессию!
        </div>
      </div>
      <div class="front5__pics aboutscrollpixs">
        <div class="container">
          <picture class="front5__pic1">
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b5-1.png">
            <img src="<?= imgs(); ?>/frontpage/b5-1-mob.png" alt="">
          </picture>
          <picture class="front5__pic2">
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b5-2.png">
            <img src="<?= imgs(); ?>/frontpage/b5-2-mob.png" alt="">
          </picture>
          <picture class="front5__picover">
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b5-over.svg">
            <img src="<?= imgs(); ?>/frontpage/b5-over-mob.svg" alt="">
          </picture>
        </div>
      </div>
      <div class="js-opacstart"></div>
    </div>
  </div>

  <!-- <div class="front6 front6--about"></div> -->



  <?php
    $front3data = [
      [
        'number' => 0,
        'title' => 'Мода и стиль',
        'link' => get_permalink(207),
        'line' => '/img/frontpage/b3-line1.svg',
        'line-mob' => '/img/frontpage/b3-line1-m.svg',
        'bg' => '/img/frontpage/b3-1.png',
        'bgcolor' => '#b1fdeb',
        'linepos' => 'top:100%',
      ],
      // [
      //   'number' => 1,
      //   'title' => 'Современное искусство',
      //   'link' => get_permalink(208),
      //   'line' => '/img/frontpage/b3-line2.svg',
      //   'line-mob' => '/img/frontpage/b3-line2-m.svg',
      //   'bg' => '/img/frontpage/b3-2.png',
      //   'bgcolor' => '#d8f7ff',
      //   'linepos' => 'bottom:0;',
      // ],
      [
        'number' => 2,
        'title' => 'Психология',
        'link' => get_permalink(209),
        'line' => '/img/frontpage/b3-line3.svg',
        // 'line-mob' => '/img/frontpage/b3-line3-m.svg',
        'line-mob' => '/img/frontpage/b3-line2-m.svg',
        'bg' => '/img/frontpage/b3-3.png',
        'bgcolor' => '#e7e2ff',
        'linepos' => 'top:100%;',
      ],
      [
        'number' => 3,
        'title' => 'Дизайн интерьера',
        'link' => get_permalink(210),
        'line' => '/img/frontpage/b3-line4.svg',
        'line-mob' => '/img/frontpage/b3-line4-m.svg',
        'bg' => '/img/frontpage/b3-4.png',
        'bgcolor' => '#f5eee6',
        'linepos' => 'top;0;',
      ],
      // [
        // 'number' => 4,
      //   'title' => 'Астрология',
      //   'link' => get_permalink(211),
      //   'line' => '/img/frontpage/b3-line5.svg',
      //   'line-mob' => '/img/frontpage/b3-line5-m.svg',
      //   'bg' => '/img/frontpage/b3-5.png',
      //   'bgcolor' => '#f8f0e3',
      //   'linepos' => 'bottom:0;',
      // ],
      [
        'number' => 5,
        'title' => 'ЗОЖ',
        'link' => get_permalink(205),
        'line' => '/img/frontpage/b3-line6.svg',
        'line-mob' => '/img/frontpage/b3-line6-m.svg',
        'bg' => '/img/frontpage/b3-6.png',
        'bgcolor' => '#b0daea',
        'linepos' => 'top:100%;',
      ],
    ];
  ?>
  <section class="front3 druk">
    <div class="front3__spaces">
      <div class="front3__bgs">
        <?php foreach ($front3data as $key => $data) : ?>
          <div class="front3__bg" style="--bgcolor: <?= $data['bgcolor']; ?>;" data-bgnum="<?= $key; ?>">
            <div class="container">
              <img src="<?= get_template_directory_uri(); ?><?= $data['bg']; ?>" alt="" class="front3__bgimg">
              <?php if($data['title'] === 'ЗОЖ'): ?>
                <img src="<?=imgs(); ?>/frontpage/zog-frut-1.webp" alt="" class="front-zog-frut1">
                <img src="<?=imgs(); ?>/frontpage/zog-frut-2.webp" alt="" class="front-zog-frut2">
                <img src="<?=imgs(); ?>/frontpage/zog-frut-3.webp" alt="" class="front-zog-frut3">
                <img src="<?=imgs(); ?>/frontpage/zog-frut-4.webp" alt="" class="front-zog-frut4">
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="front3__over">
        <div class="container">
          <div class="front3__title">Выбери факультет</div>
          <div class="front3__list">
            <?php foreach ($front3data as $key => $data) : ?>
              <div class="front3__item">
                <a href="<?= $data['link']; ?>" class="front3__link js-front3-link" data-bgnum="<?= $key; ?>"><?= $data['title']; ?></a>
                <picture class="front3__linepic">
                  <source srcset="<?= get_template_directory_uri(); ?><?= $data['line']; ?>" media="(min-width:992px)">
                  <img src="<?= get_template_directory_uri(); ?><?= $data['line-mob']; ?>" style="<?= $data['linepos']; ?>" alt="" class="front3__line front3__line--<?= $data['number']; ?>">
                </picture>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

</div>

<?php
get_footer();
