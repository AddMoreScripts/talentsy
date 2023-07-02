<?php
/*
Template name: Шаблон: Факультет Астрологии
*/
get_header();
$pics = imgs() . '/facult-astro';
?>
<div class="facultwrap" style="--bg: #f8f0e3">
  <div class="faculthero">
    <h1 class="faculthero__title druk">Факультет <br>астрологии</h1>
    <div class="faculthero__space">
      <img src="<?=$pics; ?>/b1-left.png" alt="" class="facastro-left" data-x="-40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-right.png" alt="" class="facastro-right" data-x="40" data-y="-20" data-scale="1.1">
      <img src="<?=$pics; ?>/b1-text1.png" alt="" class="facastro-text1">
      <img src="<?=$pics; ?>/b1-text2.png" alt="" class="facastro-text2">
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
        <a href="<?=get_permalink(149); ?>" class="facproff facproff-astro1" style="--bgcolor: #fff0de;">
          <div class="facproff__picwrap">
            <img src="<?=$pics; ?>/proff1.svg" alt="" class="facproff__ava" width="167">
          </div>
          <div class="facproff__label">ПРОФЕССИЯ</div>
          <div class="facproff__name">Астролог</div>
          <div class="facproff__time">10 месяцев</div>
          <img src="<?=$pics; ?>/button.svg" alt="" class="facproff__arrow">
        </a>
      </div>
    </div>
  </div>



  <div class="facultbanner">
    <div class="container">
      <img src="<?=$pics; ?>/banner1.png" alt="" class="abs abs1-astro js-slide-left">
      <img src="<?=$pics; ?>/banner1.png" alt="" class="abs abs2-astro js-slide-right">
      <img src="<?=$pics; ?>/banner2.png" alt="" class="abs abs3-astro js-slide-left">
      <img src="<?=$pics; ?>/banner3.png" alt="" class="abs abs4-astro js-slide-right">
      <h2 class="facultbanner__title">
        Несмотря на то, что астрология не имеет под собой<br>
        доказательной базы, известно, что Ньютон,<br>
        Эйнштейн, Наполеон, Сталин и Рейган - не просто<br>
        доверяли астрологии, а считали её естественной<br>
        наукой, чем-то средним между биофизикой и<br>
        социальной психологией. В нашем университете вы<br>
        сможете стать астрологом под руководством<br>
        известных специалистов в этой области.
      </h2>
    </div>
  </div>
</div>
<?php
get_footer();
