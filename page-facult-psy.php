<?php
/*
Template name: Шаблон: Факультет Психологии
*/
get_header();
$pics = imgs() . '/facult-psy';
?>
<div class="facultwrap" style="--bg: #e7e2ff">
  <div class="faculthero">
    <h1 class="faculthero__title druk">Факультет <br>психо– <br>логии</h1>
    <div class="faculthero__space">
      <div class="faculthero__bgs">
        <img src="<?=$pics; ?>/b1-bg-letter.svg" alt="" class="faculthero__bgfull">
      </div>
      <img src="<?=$pics; ?>/b1-left.png" alt="" class="facpsy-left" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-right.png" alt="" class="facpsy-right" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-text1.svg" alt="" class="facpsy-text1 js-slide-spin">
      <img src="<?=$pics; ?>/b1-text2.svg" alt="" class="facpsy-text2 js-slide-spin">
    </div>
    <div class="faculthero__buttonwrap">
      <div class="faculthero__bgbutton"></div>
      <button class="faculthero__button" data-scrollto="#facultprogs" data-offset="105">Подобрать <br>программу</button>
    </div>
  </div>


  <div class="facultprogs" id="facultprogs">
    <div class="container">
      <h2 class="facultprogs__title druk js-slide-bot">Программа <br>обучения</h2>
      <div class="facultprogs__wrap facultprogs--grid3">

        <div class="facultprogs__groups facultprogs__psygroup1">
          <a href="<?=get_permalink(132); ?>" class="facproff facproff-psy1" style="--bgcolor: #e7e2ff;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff1.svg" alt="" class="facproff__ava" width="153">
            </div>
            <div class="facproff__label">ПРОФЕССИЯ</div>
            <div class="facproff__name">Психолог-<br>консультант</div>
            <div class="facproff__time">12 месяцев</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
          <a href="<?=get_permalink(148); ?>" class="facproff facproff-psy4" style="--bgcolor: #7661ff;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff4.svg" alt="" class="facproff__ava" width="153">
            </div>
            <div class="facproff__label">ПРОФЕССИЯ</div>
            <div class="facproff__name">Профессия <br>Астролог</div>
            <div class="facproff__time">10 месяцев</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
        </div>

        <a href="<?=get_permalink(133); ?>" class="facproff facproff-psy2" style="--bgcolor: #fff5d2;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff2.svg" alt="" class="facproff__ava" width="153">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Консультант по <br>сексуальным <br>отношениям</div>
          <div class="facproff__time">6 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>


        <div class="facultprogs__groups facultprogs__psygroup2">
          <a href="<?=get_permalink(138); ?>" class="facproff facproff-psy3" style="--bgcolor: #8ad8fc;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff3.svg" alt="" class="facproff__ava" width="153">
            </div>
            <div class="facproff__label">ПРОФЕССИЯ</div>
            <div class="facproff__name">Семейный <br>психолог</div>
            <div class="facproff__time">18 месяцев</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
          <a href="<?=get_permalink(134); ?>" class="facproff facproff-psy5" style="--bgcolor: #61ffc8;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff5.svg" alt="" class="facproff__ava" width="168">
            </div>
            <div class="facproff__label">ПРОФЕССИЯ</div>
            <div class="facproff__name">Детский <br>психолог</div>
            <div class="facproff__time">18 месяцев</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
        </div>


      </div>
    </div>
  </div>



  <?php

  $facultMentorsDB = [
    [
      'img' => '01.jpg',
      'name' => 'Ксения',
      'lastname' => 'Кунникова',
      'link' => 'Kseniya-Kunnikova',
    ],
    [
      'img' => '02.jpg',
      'name' => 'Ольга',
      'lastname' => 'Виндекер',
      'link' => 'Olga-Vindeker'
    ],
    [
      'img' => '03.jpg',
      'name' => 'Елена',
      'lastname' => 'Новоселова',
      'link' => 'Yelena-Novoselova'
    ],
    [
      'img' => '04.jpg',
      'name' => 'Файруза',
      'lastname' => 'Исмагилова',
      'link' => 'Fayruza-Ismagilova'
    ],
    [
      'img' => '05.jpg',
      'name' => 'Наталья',
      'lastname' => 'Фомичева',
      'link' => 'Natalya-Fomicheva'
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
          <img src="<?=imgs(); ?>/facult-modi/b2-abs2.svg" alt="" class="abs abs2 abs2--psy" width="74">
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


  <div class="facultbanner">
    <div class="container">
      <img src="<?=imgs(); ?>/facult-zozh/foot-1.png" alt="" class="abs abs1 js-slide-left">
      <img src="<?=imgs(); ?>/facult-zozh/foot-2.png" alt="" class="abs abs2 js-slide-left">
      <img src="<?=imgs(); ?>/facult-zozh/foot-3.png" alt="" class="abs abs3 js-slide-right">
      <img src="<?=imgs(); ?>/facult-zozh/foot-4.svg" alt="" class="abs abs4 js-slide-right">
      <h2 class="facultbanner__title">
        Образовательные программы, разработанные<br>
        с учетом лучших российских и мировых<br>
        практик в преподавании психологии. Наши<br>
        выпускники – это высококвалифицированные<br>
        психологи-практики, востребованные<br>
        в государственных и частных компаниях.
      </h2>
    </div>
  </div>
</div>
<?php
get_footer();
