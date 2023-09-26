<section class="footblackblock">
  <div class="container">
    <img src="<?=imgs(); ?>/footer/footer-logo.svg" alt="" class="footblack__logo">
    <div class="footblack__line2">
      <div class="footblack__slogan">Онлайн-обучение <br>гуманитарным <br>профессиям</div>
      <div class="footblack__about">Мы помогаем развивать талант, чтобы вы могли начать заниматься любимым делом и
        превратили свое увлечение в профессию. Вас ждут самые актуальные подходы к обучению и топ-преподаватели на
        каждой программе. Мы создаем современный университет, в котором интересно учиться, и заботимся о каждом
        студенте. </div>
    </div>
    <div class="footblack__grid">
      <dl class="footblack__dl">
        <dt class="jbm">6</dt>
        <dd>Факультетов</dd>
      </dl>
      <dl class="footblack__dl">
        <dt class="jbm">20</dt>
        <dd>Образователь-<br>ных программ</dd>
      </dl>
      <dl class="footblack__dl">
        <dt class="jbm">70+</dt>
        <dd>Выдающихся <br>преподавателей</dd>
      </dl>
      <dl class="footblack__dl footblack__dl--green">
        <dt class="jbm">
          <span>13k</span>
          <img src="<?=imgs(); ?>/footer/heart-white.svg" alt="" class="footblack__heart">
        </dt>
        <dd>Любимых <br>студентов</dd>
      </dl>
    </div>

    <div class="footblack__formwrap">
      <h2 class="footblack__h2 jbm">Поможем в&nbsp;выборе!</h2>
      <div class="footblack__formdescr">
        Если у вас есть вопросы или вы не знаете что
        <br>выбрать, оставьте свой номер: мы позвоним, чтобы
        <br>ответить на все ваши вопросы
      </div>
      <form action="#" class="fooformbox fooformbox--black ajaxForm" data-target="axFormRequest">
        <div class="fooformbox__grid">
          <div class="fooformbox__inpwrap">
            <input type="text" name="Name" placeholder="Имя" required>
          </div>
          <div class="fooformbox__inpwrap">
            <input type="tel" name="Phone" placeholder="+7 (999) 999-99-99" required>
          </div>
          <div class="fooformbox__inpwrap">
            <input type="email" name="Email" placeholder="Email" required>
          </div>
          <div class="fooformbox__subwrap">
            <input type="hidden" name="special" value="footer">
            <button type="submit" class="fooformbox__button">Отправить</button>
          </div>
        </div>
        <p class="fooformbox__accept">
          Отправляя данную форму вы соглашаетесь с условиями <a href="<?= get_privacy_policy_url(); ?>" target="_blank">оферты</a> и <a href="<?= ldocslink('agree'); ?>" target="_blank">политикой обработки
            персональных данных</a>
        </p>
      </form>
    </div>
  </div>
</section>

<footer class="newfooter">
  <div class="container newfooter__wrap">
    <aside class="newfooter1">
      <a href="tel:88007753768" class="newfooter1__phone">8 800 775-3768</a>
      <div class="newfooter1__addr">Москва, Ащеулов пер, д.9</div>
      <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" class="newfooter1__lic" target="_blank">
        <img src="<?= imgs(); ?>/footer/licence.jpg" alt="">
        <span>Государственная лицензия</span>
      </a>
    </aside>
    <aside class="newfooter2">
      <div class="footmenutitle">Факультеты</div>
      <?php wp_nav_menu([
        'menu' => 'Подвал - факультеты',
        'menu_class' => 'newfootermenu',
        'container' => 'nav',
        'container_class' => '',
      ]); ?>
    </aside>
    <aside class="newfooter3">
      <div class="footmenutitle">О Talentsy</div>
      <?php wp_nav_menu([
        'menu' => 'Подвал - о Talentsy',
        'menu_class' => 'newfootermenu',
        'container' => 'nav',
        'container_class' => '',
      ]); ?>
    </aside>
    <a href="#" class="newfooter1__lic newfooter1__lic--mob">
      <img src="<?= imgs(); ?>/footer/licence.jpg" alt="">
      <span>Государственная лицензия</span>
    </a>
    <aside class="newfooter4">
      <?php wp_nav_menu([
        'menu' => 'Подвал - соцсети',
        'menu_class' => 'newfootersoclinks',
        'container' => 'nav',
        'container_class' => '',
      ]); ?>
      <img src="<?=imgs();?>/footer/sk.png" alt="" class="newfooter4__skolk">
    </aside>
  </div><!-- //footer__wrap -->

  <div class="newfooterbanks container">
    <div class="newfootmenutitle">Рассрочка через банки–партнеры</div>
    <div class="newfooterbanks__grid">
      <dl class="newfooterbank">
        <dt>Тинькофф</dt>
        <dd>Лицензия ЦБ РФ № 2673 от 24.03.2015</dd>
      </dl>
      <dl class="newfooterbank">
        <dt>Альфа-Банк</dt>
        <dd>Лицензия ЦБ РФ № 1326 от 16.01.2015</dd>
      </dl>
      <dl class="newfooterbank">
        <dt>Почта Банк</dt>
        <dd>Лицензия ЦБ РФ № 650 от 25.03.2016</dd>
      </dl>
      <dl class="newfooterbank">
        <dt>СберБанк</dt>
        <dd>Лицензия ЦБ РФ №1481 от 11.08.2015</dd>
      </dl>
    </div>
  </div>

  <div class="newfooterbot container flexi">
    <ul class="newfooterbot__menu">
      <li>
        <a href="<?= get_permalink(342); ?>">Договор оферты</a>
      </li>
      <li>
        <a href="<?= get_permalink(389); ?>">Реквизиты и оплата</a>
      </li>
      <li>
        <a href="<?= ldocslink('private'); ?>">Политика конфиденциальности</a>
      </li>
      <li>
        <a href="<?= get_permalink(396); ?>">Документы образовательной организации</a>
      </li>
      <li>
        <a href="<?= ldocslink('agree'); ?>">Согласие на рассылку</a>
      </li>
      <li>
        <a href="<?= ldocslink('email'); ?>">Согласие на обработку персональных данных</a>
      </li>
    </ul>
    <div class="newfooterbot__copy"><?= date('Y'); ?> © Talentsy</div>
  </div>
</footer>

<a class="scrollTop" href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <polyline points="18 15 12 9 6 15"></polyline>
  </svg>
</a>


<script src="<?= get_template_directory_uri(); ?>/js/custom/vk-superappkit.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/custom/sombra.js"></script>

<? wp_footer(); ?>
</body>

</html>
