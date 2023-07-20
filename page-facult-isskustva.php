<?php
/*
Template name: Шаблон: Факультет Современного искусства
*/
get_header();
$pics = imgs() . '/facult-isskustva';
?>
<div class="facultwrap" style="--bg: #D8F7FF">
  <div class="faculthero">
    <h1 class="faculthero__title faculthero__title--60 druk">Факультет <br>современного <br>искусства</h1>
    <div class="faculthero__space">
      <div class="faculthero__bgs">
        <img src="<?=$pics; ?>/b1-bg-letter.svg" alt="" class="faculthero__bgfull">
      </div>
      <img src="<?=$pics; ?>/b1-left.png" alt="" class="facisscus-left" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-right.png" alt="" class="facisscus-right" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-middle.png" alt="" class="facisscus-mid" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-text1.svg" alt="" class="facisscus-text1 js-slide-spin">
      <img src="<?=$pics; ?>/b1-text2.svg" alt="" class="facisscus-text2 js-slide-spin">
    </div>
    <div class="faculthero__buttonwrap">
      <div class="faculthero__bgbutton"></div>
      <button class="faculthero__button" data-scrollto="#facultprogs" data-offset="105">Подобрать <br>программу</button>
    </div>
  </div>


  <div class="facultprogs" id="facultprogs">
    <div class="container">
      <h2 class="facultprogs__title druk js-slide-bot">Выбери <br>программу <br>обучения</h2>
      <div class="facultprogs__wrap facultprogs--grid4">
        <a href="https://talentsy.ru/professiya-florist" class="facproff facproff-issku1" style="--bgcolor: #D3E8E1;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff1.svg" alt="" class="facproff__ava" width="142">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Флорист</div>
          <div class="facproff__time">8 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
        <a href="https://talentsy.ru/dizayner-ukrasheniy" class="facproff facproff-issku2" style="--bgcolor: #FDF1E3;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff2.svg" alt="" class="facproff__ava" width="182">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Дизайнер <br>Украшений</div>
          <div class="facproff__time">5 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
        <a href="https://talentsy.ru/form-osnovy-floristiki" class="facproff facproff-issku3" style="--bgcolor: #F8EBEE;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff3.svg" alt="" class="facproff__ava" width="282">
          </div>
          <div class="facproff__label">ОНЛАЙН-КУРСЫ</div>
          <div class="facproff__name">Основы <br>флористики</div>
          <div class="facproff__time">2 месяца</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
        <a href="/" class="facproff facproff-issku4" style="--bgcolor: #D8F4F7;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff4.svg" alt="" class="facproff__ava" width="164">
          </div>
          <div class="facproff__label">ОНЛАЙН-КУРСЫ</div>
          <div class="facproff__name">Свадебная <br>флористика</div>
          <div class="facproff__time">6 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
      </div>
    </div>
  </div>



  <?php

  $facultMentorsDB = [
    [
      'img' => '01.jpg',
      'name' => 'Наталья',
      'lastname' => 'Жижко',
      'link' => 'natalya-zhizhko',
    ],
    [
      'img' => '02.jpg',
      'name' => 'Алексей',
      'lastname' => 'Булатов',
      'link' => 'aleksey-bulatov'
    ],
    [
      'img' => '03.jpg',
      'name' => 'Анна',
      'lastname' => 'Попова',
      'link' => 'anna-popova'
    ],
    [
      'img' => '04.jpg',
      'name' => 'Лора',
      'lastname' => 'Белобровик',
      'link' => 'lora-belobrovik'
    ],
    [
      'img' => '05.jpg',
      'name' => 'Наталья',
      'lastname' => 'Мелехова',
      'link' => 'natalya-melekhova'
    ],
    [
      'img' => '06.jpg',
      'name' => 'Анита',
      'lastname' => 'Карабут',
      'link' => 'anita-karabut'
    ],
    [
      'img' => null,
      'name' => 'Зоя',
      'lastname' => 'Андронова',
      'link' => 'zoya-andronova'
    ],
    [
      'img' => null,
      'name' => 'Алла',
      'lastname' => 'Рева',
      'link' => 'alla-reva'
    ],
  ];

  ?>
  <section class="facultmentors">
    <div class="container">
      <div class="facultmentors__pre">Познакомься</div>
      <h2 class="facultprogs__title druk js-slide-bot">с твоими будущими <br>преподавателями</h2>
      <img src="<?=imgs();?>/mob-hand.svg" alt="" class="facultmentors__hand">
      <div class="grid-mob-scroll">
        <div class="facultmentors__box">
          <img src="<?=imgs(); ?>/facult-modi/b2-abs1.svg" alt="" class="abs abs1" width="64">
          <img src="<?=imgs(); ?>/facult-modi/b2-abs2.svg" alt="" class="abs abs2" width="74">
          <img src="<?=imgs(); ?>/facult-modi/b2-abs3.svg" alt="" class="abs abs3 abs3--bot" width="66">
          <!-- <img src="<?=imgs(); ?>/facult-modi/b2-abs4.svg" alt="" class="abs abs4" width="52"> -->
          <!-- <img src="<?=imgs(); ?>/facult-modi/b2-abs5.svg" alt="" class="abs abs5" width="45"> -->
          <img src="<?=imgs(); ?>/facult-modi/b2-abs6.svg" alt="" class="abs abs6" width="70">
          <!-- <img src="<?=imgs(); ?>/facult-modi/b2-abs7.svg" alt="" class="abs abs7" width="68"> -->
          <?php foreach ($facultMentorsDB as $key => $mentor): ?>
            <a href="https://talentsy.ru/<?=$mentor['link']; ?>" class="facultmentor" target="_blank">
              <?php if($mentor['img']): ?>
              <img src="<?=$pics . '/mentors/' . $mentor['img']; ?>" alt="" class="facultmentor__pic">
              <?php else: ?>
                <div class="facultmentor__empty">
                  <img src="<?=imgs();?>/facult-modi/nopic.svg" alt="">
                </div>
              <?php endif; ?>
              <div class="facultmentor__name"><?=$mentor['name']; ?> <br><?=$mentor['lastname']; ?></div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>


  <section class="facultportfolio">
    <div class="container">
      <h2 class="facultprogs__title druk js-slide-bot">Проекты студентов</h2>
      <div class="facultportfolio__slider swiper js-facult-projects">
        <div class="swiper-wrapper">
          <?php foreach(range(1, 45, 1) as $key => $photo): ?>
          <div class="swiper-slide">
            <a href="<?=$pics . '/slider/' . str_pad($photo, 2, '0', STR_PAD_LEFT) . '.jpg'; ?>" class="facultportfolio__photolink" data-fancybox="facult-projects">
              <img src="<?=$pics . '/slider/' . str_pad($photo, 2, '0', STR_PAD_LEFT) . '.jpg'; ?>" alt="" loading="lazy">
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="facultportfolio__pag swiper-pagination"></div>
    </div>
  </section>


  <div class="facultbanner">
    <div class="container">
      <img src="<?=imgs(); ?>/facult-zozh/foot-1.png" alt="" class="abs abs1 js-slide-left">
      <img src="<?=imgs(); ?>/facult-zozh/foot-2.png" alt="" class="abs abs2 js-slide-left">
      <img src="<?=imgs(); ?>/facult-zozh/foot-3.png" alt="" class="abs abs3 js-slide-right">
      <img src="<?=imgs(); ?>/facult-zozh/foot-4.svg" alt="" class="abs abs4 js-slide-right">
      <h2 class="facultbanner__title">
        На факультете учатся будущие флористы, дизайнеры<br>
        украшений, художники и другие практики из разных<br>
        областей современного искусства. Учись у лучших<br>
        специалистов, владельцев бизнесов и обладателей<br>
        престижных премий.
      </h2>
    </div>
  </div>
</div>
<?php
get_footer();
