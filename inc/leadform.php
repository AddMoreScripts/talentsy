<?php

$formClassName = isset($args['formClassName']) ? $args['formClassName'] : '';
$isPromoForm = isset($args['isPromoForm']) ? $args['isPromoForm'] : false;
$buttonTxt = isset($args['buttonTxt']) ? $args['buttonTxt'] : 'Получить <br>консультацию';

?>


<form action="#" class="jsGatewayForm" data-success-url="https://psy.talentsy.ru/fpis_ppk_offer_opros">
  <div class="programfromlead__formwrap flexi <?=$formClassName; ?>">
    <div class="programfromlead__left">
      <button class="formvkbutton jsVKAuthCustom" type="button">
        <img src="<?=imgs();?>/ui/vk.svg" alt="">
        <span>Заполнить через VK</span>
      </button>
      <div class="programfromlead__grid">
        <div class="programfromlead__col">
          <label for="username1">Имя</label>
          <input type="text" name="Name" placeholder="Алиса" id="username1">
        </div>
        <div class="programfromlead__col">
          <label for="phone1">Телефон</label>
          <div class="phoneinp flexi">
            <!-- <button class="phoneinp__country" type="button">
              <img src="/img/ui/flag-ru.svg" alt="">
            </button>
            <div class="phoneinp__code">+7</div> -->
            <input type="tel" name="Phone" placeholder="+7 999 999-99-99" id="phone1" data-mask="tel">
          </div>
        </div>
        <div class="programfromlead__col">
          <label for="email1">Почта</label>
          <input type="email" name="Email" placeholder="hello@mail.ru" id="email1">
        </div>
      </div>

      <?php if ($isPromoForm) : ?>
        <div class="promobox">
          <a href="#" class="promobox__link js-promolink">У вас есть промокод?</a>
          <div class="promoform flexi">
            <input type="text" class="promoform__input">
            <button type="button" class="promoform__button">Активировать промокод</button>
          </div><!-- //promoform -->
        </div>
        <div class="programfromlead__promoformwrap"></div>
      <?php endif; ?>

      <div class="accept">Отправляя данную форму вы соглашаетесь с условиями <a href="#">оферты</a> и политикой <a href="#">обработки персональных данных</a></div>
    </div><!-- //programfromlead__left -->
    <div class="programfromlead__right">
      <button class="programfromlead__submit circlebutton">
        <?=$buttonTxt; ?>
      </button>
      <div class="accept accept--mob">Отправляя данную форму вы соглашаетесь с условиями <a href="#">оферты</a> и
        политикой <a href="#">обработки персональных данных</a></div>
    </div>
  </div>
</form>
