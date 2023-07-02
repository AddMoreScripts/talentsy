<?php
/*
Template name: Шаблон: Факультет ЗОЖ
*/
get_header();
$pics = imgs() . '/facult-zozh';
?>

<div class="facultwrap" style="--bg: #b0daea;">
  <div class="faculthero">
    <h1 class="faculthero__title druk">Факультет <br>ЗОЖ</h1>
    <div class="faculthero__space">
      <div class="faculthero__bgs">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
        <img src="<?=$pics; ?>/b1-letters.svg" alt="" class="faculthero__bg">
      </div>
      <img src="<?=$pics; ?>/b1-woman-left.png" alt="" class="faczozh-woman1" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-womar-right.png" alt="" class="faczozh-woman2" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/icon-1.png" alt="" class="faczozh-abs1" data-x="-50" data-y="-30" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-2.png" alt="" class="faczozh-abs2" data-x="-50" data-y="-30" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-3.png" alt="" class="faczozh-abs3" data-x="-50" data-y="-30" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-4.png" alt="" class="faczozh-abs4" data-x="-50" data-y="-40" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-5.png" alt="" class="faczozh-abs5" data-x="-50" data-y="-40" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-6.png" alt="" class="faczozh-abs6"  data-x="-50" data-y="-40" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-7.png" alt="" class="faczozh-abs7"  data-x="-50" data-y="-40" data-scale="1.2">
      <img src="<?=$pics; ?>/icon-8.png" alt="" class="faczozh-abs8"  data-x="-50" data-y="-40" data-scale="1.2">
      <img src="<?=$pics; ?>/text-1.png" alt="" class="faczozh-text1">
      <img src="<?=$pics; ?>/text-2.png" alt="" class="faczozh-text2">
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
        <a href="<?=get_permalink(149); ?>" class="facproff" style="--bgcolor: #F6DEDA;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff-ava1.png" alt="" class="facproff__ava facproff-zozh1">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Нутрициолог</div>
          <div class="facproff__time">8 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
      </div>
    </div>
  </div>



  <div class="facultbanner">
    <div class="container">
      <img src="<?=$pics; ?>/foot-1.png" alt="" class="abs abs1 js-slide-left">
      <img src="<?=$pics; ?>/foot-2.png" alt="" class="abs abs2 js-slide-left">
      <img src="<?=$pics; ?>/foot-3.png" alt="" class="abs abs3 js-slide-right">
      <img src="<?=$pics; ?>/foot-4.svg" alt="" class="abs abs4 js-slide-right">
      <h2 class="facultbanner__title">
        Профессиональная подготовка специалистов<br>
        индустрии здоровья и правильного питания.<br>
        Актуальные и фундаментальные знания от ведущих<br>
        практиков. Учись у лучших преподавателей<br>
        и построй карьеру в индустрии здоровья.
      </h2>
    </div>
  </div>
</div>
<?php
get_footer();
