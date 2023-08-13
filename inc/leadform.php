<?php

$formClassName = isset($args['formClassName']) ? $args['formClassName'] : '';
$isPromoForm = isset($args['isPromoForm']) ? $args['isPromoForm'] : false;
$buttonTxt = isset($args['buttonTxt']) ? $args['buttonTxt'] : 'Получить <br>консультацию';
$isShowTopTxt = isset($args['showTopTxt']) ? true : false;
$bg = isset($args['bg']) ? $args['bg'] : false;

?>

<form class="ajaxForm" data-target="axFormRequest">
  <div class="programfromlead__prewrap <?=$formClassName; ?>" <?php if($bg) { echo 'style="--bg: ' . $bg . ';"'; } ?> >
    <?php if($isShowTopTxt): ?>
    <div class="programfromlead__toptxt flexi">
      <div class="programfromlead__topl">
        Отправьте заявку, чтобы <br><b>забронировать место</b>
      </div>
      <div class="programfromlead__topr">
        Осталось: <br><b>6 мест</b>
      </div>
    </div>
    <?php endif; ?>

    <div class="programfromlead__formwrap flexi">
      <div class="programfromlead__left">
        <div class="programfromlead__vkwrap">
          <button class="formvkbutton jsVKAuthCustom" type="button">
            <img src="<?=imgs();?>/ui/vk.svg" alt="">
            <span>Заполнить через VK</span>
          </button>
        </div>
        <div class="programfromlead__grid">
          <div class="programfromlead__col">
            <label for="username1">Имя</label>
            <input type="text" name="Name" placeholder="Алиса" id="username1" required>
          </div>
          <div class="programfromlead__col">
            <label for="phone1">Телефон</label>
            <div class="phoneinp flexi">
              <input type="tel" name="Phone" placeholder="+7 999 999-99-99" id="phone1" data-mask="tel" required>
            </div>
          </div>
          <div class="programfromlead__col">
            <label for="email1">Почта</label>
            <input type="email" name="Email" placeholder="hello@mail.ru" id="email1" required>
          </div>
        </div>

        <?php if ($isPromoForm) : ?>
          <div class="promobox">
            <a href="#" class="promobox__link js-promolink">У вас есть промокод?</a>
            <div class="promoform flexi">
              <input type="text" class="promoform__input jsPmoField">
              <button type="button" class="promoform__button jsPPRequest">Активировать промокод</button>
            </div><!-- //promoform -->
          </div>
          <div class="programfromlead__promoformwrap jsPmoError"></div>
        <?php endif; ?>

        <div class="accept">Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и политикой <a href="<?= ldocslink('agree'); ?>" target="_blank">обработки персональных данных</a></div>
      </div><!-- //programfromlead__left -->
      <div class="programfromlead__right">
        <button class="programfromlead__submit circlebutton">
          <span><?=$buttonTxt; ?></span>
        </button>
        <div class="accept accept--mob">Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_permalink(342); ?>" target="_blank">оферты</a> и
          политикой <a href="<?= ldocslink('agree'); ?>" target="_blank">обработки персональных данных</a></div>
      </div>
    </div>
  </div>
  <input type="hidden" name="jsPmoHiddenFormField">
</form>
