<?php
/*
Template name: Шаблон: Главная
*/
get_header();
?>
    <div class="js-need-gsap"></div>
    <div class="frontlead">
      <div class="frontlead__bgs js-frontlead-bgs">
        <div class="frontleadbg is-active">
          <picture>
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b1-1.jpg">
            <img src="<?= imgs(); ?>/frontpage/mobbg.gif" alt="">
          </picture>
        </div>
        <div class="frontleadbg" style="--bgcolor: #efefef;">
          <picture>
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b1-2.jpg">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z/C/HgAGgwJ/lK3Q6wAAAABJRU5ErkJggg==">
          </picture>
        </div>
        <div class="frontleadbg" style="--bgcolor: #bee8f4;">
          <picture>
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b1-3.jpg">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z/C/HgAGgwJ/lK3Q6wAAAABJRU5ErkJggg==">
          </picture>
        </div>
        <div class="frontleadbg" style="--bgcolor: #68ff5a;">
          <picture>
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b1-4.jpg">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z/C/HgAGgwJ/lK3Q6wAAAABJRU5ErkJggg==">
          </picture>
        </div>
        <div class="frontleadbg" style="--bgcolor: #fe9de0;">
          <picture>
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b1-5.jpg">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z/C/HgAGgwJ/lK3Q6wAAAABJRU5ErkJggg==">
          </picture>
        </div>
        <div class="frontleadbg" style="--bgcolor: #7ff4fe;">
          <picture>
            <source media="(min-width: 992px)" srcset="<?= imgs(); ?>/frontpage/b1-6.jpg">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8z/C/HgAGgwJ/lK3Q6wAAAABJRU5ErkJggg==">
          </picture>
        </div>
      </div>
      <div class="frontlead__real">
        <div class="frontlead__title druk">Онлайн <br>университет <br><span style="color:#7835ff;">самореализации</span></div>
        <div class="frontlead__sub">Помогаем найти любимое <br>дело и начать на нем <br>зарабатывать</div>
      </div>

      <div class="frontlead__hovers">
        <div class="frontlead__hover js-fronthover" data-hover="1"></div>
        <div class="frontlead__hover js-fronthover" data-hover="2"></div>
        <div class="frontlead__hover js-fronthover" data-hover="3"></div>
        <div class="frontlead__hover js-fronthover" data-hover="4"></div>
        <div class="frontlead__hover js-fronthover" data-hover="5"></div>
        <div class="frontlead__hover js-fronthover" data-hover="6"></div>
      </div>
    </div>



    <?php
    $front2data = [
      [
        'speed' => '1.3',
        'title' => 'Учитесь <br>у лучших',
        'descr' => 'Вы будете учиться <br><br class="mobbr">у топ-преподавателей высочайшего класса <br>и опыта',
      ],
      [
        'speed' => '1.05',
        'title' => 'Современные форматы обучения',
        'descr' => 'Вас ждет высокое качество <br class="mobbr">лекций, практические занятия в&nbsp;мини-группах, наставничество при работе с первыми клиентами',
      ],
      [
        'speed' => '1.2',
        'title' => 'Получите <br>диплом',
        'descr' => 'Мы выдаем дипломы <br class="mobbr">о профессиональной переподготовке на <br class="mobbr">основании государственной образовательной лицензии',
      ],
      [
        'speed' => '1.5',
        'title' => 'Работайте <br>на себя',
        'descr' => 'Нам важно не только <br class="mobbr">дать навыки профессии, <br class="mobbr">но и научить вас на них зарабатывать',
      ],
    ];
    ?>

    <section class="front2">
      <div class="container">
        <div class="front2__wrap flexi">
          <?php foreach ($front2data as $key => $data) : ?>
            <div class="front2__item front2--<?=$key; ?>" data-speed="<?= $data['speed']; ?>">
              <div class="front2__picwrap">
                <picture class="front2__pic front2__pic--<?= $key + 1; ?>">
                  <img src="<?= imgs(); ?>/frontpage/b2-<?= $key + 1; ?>.svg" alt="">
                </picture>
              </div>
              <div class="front2__title"><?= $data['title']; ?></div>
              <div class="front2__sub"><?= $data['descr']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>




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
      [
        'number' => 1,
        'title' => 'Современное искусство',
        'link' => get_permalink(208),
        'line' => '/img/frontpage/b3-line2.svg',
        'line-mob' => '/img/frontpage/b3-line2-m.svg',
        'bg' => '/img/frontpage/b3-2.png',
        'bgcolor' => '#d8f7ff',
        'linepos' => 'bottom:0;',
      ],
      [
        'number' => 2,
        'title' => 'Психология',
        'link' => get_permalink(209),
        'line' => '/img/frontpage/b3-line3.svg',
        'line-mob' => '/img/frontpage/b3-line3-m.svg',
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
            <div class="front3__bg" style="--bgcolor: <?= $data['bgcolor']; ?>;" data-bgnum="<?= $key; ?>" >
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



    <section class="reviewsslider front4 js-review-slider">
      <h2 class="front4__title druk">Отзывы наших <br>студентов</h2>
      <div class="reviewsslider__wrap">
        <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
        <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/ui/slider-ctrl.svg" alt=""></button>
        <div class="reviewsslider__cont js-slide-bot">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php foreach (range(1, 9, 1) as $key => $videoNum) : ?>
                <div class="swiper-slide">
                  <a href="<?=imgs();?>/frontpage/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
                    <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="reviewsslider__screen square__img lazy">
                      <source data-src="<?= imgs(); ?>/frontpage/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
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




    <div class="front5 front5--front">
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
            <picture class="front5__pic2" data-speed="1.3">
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

    <div class="front6">
      <div class="front6__anims flexi">
        <img src="<?= imgs(); ?>/frontpage/b6-marquiee.svg" alt="">
        <img src="<?= imgs(); ?>/frontpage/b6-marquiee.svg" alt="">
        <img src="<?= imgs(); ?>/frontpage/b6-marquiee.svg" alt="">
        <img src="<?= imgs(); ?>/frontpage/b6-marquiee.svg" alt="">
        <img src="<?= imgs(); ?>/frontpage/b6-marquiee.svg" alt="">
        <img src="<?= imgs(); ?>/frontpage/b6-marquiee.svg" alt="">
      </div>
    </div>


    <?php
    $lastBlogPosts = get_posts([
      'numberposts' => 4,
      'post_type' => 'post',
      'post_status' => 'publish',
      'order' => 'DESC',
      'orderby' => 'date',
      'paged' => $args['page'],
      'tag__not_in' => [28], // не выводит тег "Выпускники"
    ]);
    ?>
    <section class="frontblog">
      <div class="container">
        <div class="grid-mob-scroll">
          <div class="frontblog__grid">
            <?php foreach ($lastBlogPosts as $postItem): ?>
            <a href="<?=get_permalink($postItem); ?>" class="frontblog__item js-slide-opac">
              <div class="frontblog__picwrap square">
                <img data-src="<?= get_the_post_thumbnail_url($postItem, 'large'); ?>" alt="" class="frontblog__pic square__img lazy">
              </div>
              <ul class="frontblog__tags flexi">
                <?php
                foreach (get_the_category($postItem) as $postCat): ?>
                  <li><?=$postCat->name; ?></li>
                <?php endforeach; ?>
              </ul>
              <div class="frontblog__title"><?=get_the_title($postItem); ?></div>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>




    <section class="frontcatalog js-front-cat">
      <div class="container">
        <div class="frontcatalog__hdr flexi">
          <h2 class="frontcatalog__title druk">Попробуйте</h2>
          <div class="frontcatalog__ctrls flexi">
            <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/frontpage/b8-arrow.svg" alt=""></button>
            <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/frontpage/b8-arrow.svg" alt=""></button>
          </div>
        </div>
        <div class="frontcatalog__slider swiper">
          <div class="swiper-wrapper">
            <?php while (have_rows('proff-slider-main')) : the_row(); ?>
              <div class="swiper-slide">
                <div class="frontfacultet">
                  <a href="<?=get_sub_field('link');?>" class="frontfacultet__picwrap" style="display: block;">
                    <img src="<?=get_sub_field('img');?>" alt="" class="frontfacultet__pic" loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                  </a>
                  <a href="<?= get_sub_field('facult_link');?>" class="frontfacultet__tag" style="background-color: <?=get_sub_field('color');?>; color: #fff;"><?=get_sub_field('facult');?></a>
                  <a href="<?=get_sub_field('link');?>">
                    <div class="frontfacultet__title"><?=get_sub_field('title');?></div>
                    <div class="frontfacultet__time"><?=get_sub_field('descr');?></div>
                    <div class="frontfacultet__arrow">
                      <img src="<?= imgs(); ?>/frontpage/b8-arrow.svg" alt="">
                    </div>
                  </a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
