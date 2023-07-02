<?php
/*
Template name: Шаблон: Факультет Моды и стиля
*/
get_header();
$pics = imgs() . '/facult-modi';
?>

<div class="facultwrap" style="--bg: #b1fdeb">
  <div class="faculthero">
    <h1 class="faculthero__title druk">Факультет <br>моды и <br>стиля</h1>
    <div class="faculthero__space">
      <div class="faculthero__bgs">
        <img src="<?=$pics; ?>/b1-lettersbg.svg" alt="" class="faculthero__bgfull">
      </div>
      <img src="<?=$pics; ?>/b1-left.png" alt="" class="facmodi-left" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-right.png" alt="" class="facmodi-right" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-text1.svg" alt="" class="faczozh-text1">
      <img src="<?=$pics; ?>/b1-text2.svg" alt="" class="faczozh-text2">
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
        <div class="facultprogs__groups facultprogs__modigroup1">
          <a href="<?=get_permalink(149); ?>" class="facproff facproff-modi1" style="--bgcolor: #FFE3D9;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff1.svg" alt="" class="facproff__ava" width="244">
            </div>
            <div class="facproff__label">ПРОФЕССИЯ</div>
            <div class="facproff__name">Дизайнер <br>одежды</div>
            <div class="facproff__time">8 месяцев</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
          <a href="<?=get_permalink(149); ?>" class="facproff facproff-modi2" style="--bgcolor: #B1FDEB;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff2.svg" alt="" class="facproff__ava"  width="227">
            </div>
            <div class="facproff__label">Онлайн-курсы</div>
            <div class="facproff__name">Фешн-<br class="mobbr">скетчинг</div>
            <div class="facproff__time">4 месяца</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
        </div>

        <a href="<?=get_permalink(149); ?>" class="facproff facproff-modi3" style="--bgcolor: #E3E3E3;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff3.svg" alt="" class="facproff__ava"  width="143">
          </div>
          <div class="facproff__label">Онлайн-курсы</div>
          <div class="facproff__name">Рисунок <br>на ткани</div>
          <div class="facproff__time">3 месяца</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>


        <a href="<?=get_permalink(149); ?>" class="facproff facproff-modi4" style="--bgcolor: #E7E2FF;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff4.svg" alt="" class="facproff__ava" width="267">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Стилист-<br>имиджмейкер</div>
          <div class="facproff__time">5 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>

        <div class="facultprogs__groups facultprogs__modigroup2">
          <a href="<?=get_permalink(149); ?>" class="facproff facproff-modi5" style="--bgcolor: #D2EEFF;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff5.svg" alt="" class="facproff__ava" width="112">
            </div>
            <div class="facproff__label">Онлайн-курсы</div>
            <div class="facproff__name">Конструктор <br>одежды</div>
            <div class="facproff__time">4 месяца</div>
            <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
          </a>
          <a href="<?=get_permalink(149); ?>" class="facproff is-white facproff-modi6" style="--bgcolor: #FF8795;">
            <div class="facproff__picwrap">
              <img src="<?=$pics; ?>/proff6.png" alt="" class="facproff__ava" width="162">
            </div>
            <div class="facproff__label">Онлайн-курсы</div>
            <div class="facproff__name">Fashion - <br class="mobbr">стилист</div>
            <div class="facproff__time">8 месяцев</div>
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
      'name' => 'Регина',
      'lastname' => 'Листопад',
      'link' => 'regina-listopad'
    ],
    [
      'img' => '02.jpg',
      'name' => 'Алеко',
      'lastname' => 'Илиопуло',
      'link' => 'aleko-iliopulo'
    ],
    [
      'img' => '03.jpg',
      'name' => 'Наталья',
      'lastname' => 'Усольская',
      'link' => 'natalya-usolskaya',
    ],
    [
      'img' => '04.jpg',
      'name' => 'Тим',
      'lastname' => 'Ильясов',
      'link' => 'tim-ilyasov'
    ],
    [
      'img' => '05.jpg',
      'name' => 'Алена',
      'lastname' => 'Коннова',
      'link' => 'alena-konnova'
    ],
    [
      'img' => '06.jpg',
      'name' => 'Надежда',
      'lastname' => 'Лоханкова',
      'link' => 'nadezhda-lokhankova'
    ],
    [
      'img' => '07.jpg',
      'name' => 'Ольга',
      'lastname' => 'Дори',
      'link' => 'olga-dori'
    ],
    [
      'img' => '08.jpg',
      'name' => 'Лидия',
      'lastname' => 'Чугунова',
      'link' => 'lidiya-chugunova'
    ],
    [
      'img' => '09.jpg',
      'name' => 'Антон',
      'lastname' => 'Астафьев',
      'link' => 'anton-astafyev',
    ],
    [
      'img' => '10.jpg',
      'name' => 'Алексей',
      'lastname' => 'Сухарев',
      'link' => 'aleksey-sukharev',
    ],
    [
      'img' => '11.jpg',
      'name' => 'Елена',
      'lastname' => 'Федоренко',
      'link' => 'yelena-fedorenko'
    ],
    [
      'img' => '12.jpg',
      'name' => 'Елена',
      'lastname' => 'Червова',
      'link' => 'yelena-chervova'
    ],
    [
      'img' => '13.jpg',
      'name' => 'Татьяна',
      'lastname' => 'Сусова',
      'link' => 'tatyana-susova'
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
          <img src="<?=$pics; ?>/b2-abs1.svg" alt="" class="abs abs1" width="64">
          <img src="<?=$pics; ?>/b2-abs2.svg" alt="" class="abs abs2" width="74">
          <img src="<?=$pics; ?>/b2-abs3.svg" alt="" class="abs abs3" width="66">
          <img src="<?=$pics; ?>/b2-abs4.svg" alt="" class="abs abs4" width="52">
          <img src="<?=$pics; ?>/b2-abs5.svg" alt="" class="abs abs5" width="45">
          <img src="<?=$pics; ?>/b2-abs6.svg" alt="" class="abs abs6" width="70">
          <img src="<?=$pics; ?>/b2-abs7.svg" alt="" class="abs abs7" width="68">
          <?php foreach ($facultMentorsDB as $key => $mentor): ?>
            <a href="https://talentsy.ru/<?=$mentor['link']; ?>" class="facultmentor" target="_blank">
              <img src="<?=$pics . '/mentors/' . $mentor['img']; ?>" alt="" class="facultmentor__pic">
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
          <?php foreach(range(1, 20, 1) as $key => $photo): ?>
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
        Профессиональная подготовка специалистов<br>
        индустрии моды. Актуальные и фундаментальные<br>
        знания от ведущих практиков. Построй карьеру<br>
        или открой свой собственный модный бизнес
      </h2>
    </div>
  </div>
</div>
<?php
get_footer();
