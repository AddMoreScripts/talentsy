<?php
/*
Template name: Шаблон: Факультет Дизайна интерьера
*/
get_header();
$pics = imgs() . '/facult-design';
?>
<div class="facultwrap" style="--bg: #f5eee6">
  <div class="faculthero">
    <h1 class="faculthero__title druk">Факультет <br>дизайна <br>интерьера</h1>
    <div class="faculthero__space faculthero__space--full">
      <div class="faculthero__bgs">
        <img src="<?=$pics; ?>/b1-letter-text.svg" alt="" class="faculthero__bgfull" style="top:15px;">
      </div>
      <img src="<?=$pics; ?>/b1-cartina.png" alt="" class="facdesign-cartina" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-cartina.png" alt="" class="facdesign-cartina-m" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-left.png" alt="" class="facdesign-left" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-right.png" alt="" class="facdesign-right" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-kreslo.png" alt="" class="facdesign-mid" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-text.svg" alt="" class="facdesign-text1">
    </div>
    <div class="faculthero__buttonwrap">
      <div class="faculthero__bgbutton"></div>
      <button class="faculthero__button" data-scrollto="#facultprogs" data-offset="105">Подобрать <br>программу</button>
    </div>
  </div>


  <div class="facultprogs" id="facultprogs">
    <div class="container">
      <h2 class="facultprogs__title druk js-slide-bot">Программа <br>обучения</h2>
      <div class="facultprogs__wrap flexi">
        <a href="<?=get_permalink(136); ?>" class="facproff facproff-dis1" style="--bgcolor: #f5eee6;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff1.svg" alt="" class="facproff__ava" width="161">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Дизайнер <br>интерьера</div>
          <div class="facproff__time">12 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
        <a href="<?=get_permalink(140); ?>" class="facproff facproff-dis2" style="--bgcolor: #f5eee6;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff2.png" alt="" class="facproff__ava" width="121">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Декоратор <br>интерьера</div>
          <div class="facproff__time">5 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
      </div>
    </div>
  </div>


  <div class="facultbanner">
    <div class="container">
      <img src="<?=imgs(); ?>/facult-zozh/foot-1.png" alt="" class="abs abs1 js-slide-left">
      <img src="<?=imgs(); ?>/facult-zozh/foot-2.png" alt="" class="abs abs2 js-slide-left">
      <img src="<?=imgs(); ?>/facult-zozh/foot-3.png" alt="" class="abs abs3 js-slide-right">
      <img src="<?=imgs(); ?>/facult-zozh/foot-4.svg" alt="" class="abs abs4 js-slide-right">
      <h2 class="facultbanner__title">
        Освой востребованную на рынке профессию<br>
        дизайнера интерьера. Учись у практикующих<br>
        специалистов, владельцев дизайн бюро и<br>
        обладателей престижных премий. Устройся на<br>
        работу ещё во время обучения или начни<br>
        собственный бизнес.
      </h2>
    </div>
  </div>
</div>
<?php
get_footer();
