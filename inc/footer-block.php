<footer class="footer">
  <div class="container footerform">
    <div class="footerform__title druk">Поможем в&nbsp;выборе!</div>
    <div class="footerform__sub">
      Если у вас есть вопросы или вы не знаете что <br>
      выбрать, оставьте свой номер: мы позвоним, чтобы <br>
      ответить на все ваши вопросы
    </div>
    <form action="#" class="footerform__form flexi">
      <div class="footerform__formleft">
        <div class="footerform__forminputs">
          <div class="footerform__col">
            <input type="text" placeholder="Имя" name="name">
          </div>
          <div class="footerform__col">
            <input type="tel" placeholder="Телефон" name="phone" data-mask="tel">
          </div>
          <div class="footerform__col">
            <input type="email" placeholder="Почта" name="mail">
          </div>
        </div>
        <div class="footerform__accept">Нажимая "Отправить" вы соглашаетесь на обработку <a href="#">персональных
            данных</a></div>
      </div>
      <div class="footerform__right">
        <button class="footerform__submit">Отправить</button>
        <div class="footerform__accept footerform__accept--mob">Нажимая "Отправить" вы соглашаетесь на обработку <a href="#">персональных
            данных</a></div>
      </div>
    </form>
  </div><!-- //footerform -->


  <!-- Десктоп версия подвала -->
  <div class="footerdesk">
    <div class="container">
      <div class="footerline">
        <img src="<?=imgs();?>/footer/footer-line.svg" alt="">
      </div>
      <div class="footermiddle flexi">
        <section class="footermiddle1">
          <a href="#" class="footermiddle__phone">8 800 775—3768</a>
          <div class="footermiddle__addr">Москва, Ащеулов пер, д.9</div>
          <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" class="footermiddle__licence" target="_blank">
            <img src="<?=imgs();?>/footer/licence.jpg" alt="">
            <span>Государственная <br>лицензия</span>
          </a>
          <img src="<?=imgs();?>/footer/sk.png" alt="" class="footermiddle__sk">
        </section>
        <section class="footermiddle2">
          <h4 class="footermiddle__title">Факультеты</h4>
          <div class="footermenu">
            <ul>
              <li>
                <a href="">Моды и стиля</a>
              </li>
              <li>
                <a href="">Современное искусство</a>
              </li>
              <li>
                <a href="">Психология</a>
              </li>
              <li>
                <a href="">Дизайн интерьера</a>
              </li>
              <li>
                <a href="">Астрология</a>
              </li>
              <li>
                <a href="">ЗОЖ</a>
              </li>
            </ul>
          </div>
        </section>
        <section class="footermiddle3">
          <h4 class="footermiddle__title">О Talentsy</h4>
          <div class="footermenu">
            <ul>
              <li>
                <a href="">Проекты студентов</a>
              </li>
              <li>
                <a href="<?=get_permalink(204); ?>">О Talentsy</a>
              </li>
              <li>
                <a href="<?=get_permalink(150); ?>">Отзывы</a>
              </li>
              <li>
                <a href="">Вакансии</a>
              </li>
              <li>
                <a href="">Контакты</a>
              </li>
              <li>
                <a href="">Партнерская программа</a>
              </li>
              <li><a href="">Программа лояльности</a></li>
            </ul>
          </div>
        </section>
        <section class="footermiddle4">
          <a href="https://vk.com/talentsyofficial" class="footersoclink" target="_blank">Вконтакте</a>
          <a href="https://www.youtube.com/channel/UCZCFFjqhDwfI7Bmn7Z_jD0w?view_as=subscriber" class="footersoclink" target="_blank">Ютюб</a>
          <a href="https://pin.it/64rsuUj" class="footersoclink" target="_blank">Pinterest</a>

          <a href="https://academy-market.com/school-reviews/talentsy" target="_blank" class="acmarket flexi">
            <div class="acmarket__balls flexi">4.5</div>
            <div class="acmarket__descr">
              <span><b>20 отзывов</b> о Talentsy</span>
              <div class="acmarket__link flexi">
                <svg width="15" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6037 2.93333L8.40318 11H5.40418L10.0107 0H13.2736L18 11H15.001L11.6805 2.93333H11.6037ZM5.99802 2.97396L2.69911 10.9948H0L4.51051 0.109375L5.99802 2.97396Z" fill="white"></path>
                </svg>
                <span>Academy Market</span>
              </div>
            </div>
          </a>
        </section>
      </div><!-- //footermiddle -->
    </div>
  </div><!-- //footerdesk -->
  <!-- КОНЕЦ: Десктоп версия подвала -->


  <!-- Мобильная версия подвала -->
  <div class="mobfoot">
    <div class="mobfoot__title">О Talentsy</div>
    <div class="mobfoot__twocol">
      <div class="mobfoot__menu">
        <ul>
          <li>
            <a href="<?=get_permalink(204); ?>">О Talentsy</a>
          </li>
          <li>
            <a href="#">Проекты студентов</a>
          </li>
          <li>
            <a href="<?=get_permalink(150); ?>">Отзывы</a>
          </li>
          <li>
            <a href="#">Вакансии</a>
          </li>
          <li>
            <a href="#">Контакты</a>
          </li>
          <li>
            <a href="#">Партнерская программа</a>
          </li>
          <li>
            <a href="#">Программа лояльности</a>
          </li>
        </ul>
      </div>
      <div class="mobfoot__right">
        <a href="https://vk.com/talentsyofficial" class="mobfoot__soclink" target="_blank">Вконтакте</a>
        <a href="https://www.youtube.com/channel/UCZCFFjqhDwfI7Bmn7Z_jD0w?view_as=subscriber" class="mobfoot__soclink" target="_blank">Ютюб</a>
        <a href="https://pin.it/64rsuUj" class="mobfoot__soclink" target="_blank">Pinterest</a>
        <a href="https://islod.obrnadzor.gov.ru/rlic/details/6fe5bf26-59b9-9ba3-c6bb-1c51f27dacd7/" target="_blank" class="mobfoot__lic flexi">
          <img src="<?=imgs();?>/footer/licence.jpg" alt="">
          <span>Государ-ственная лицензия</span>
        </a>
        <img src="<?=imgs();?>/footer/sk.png" alt="" class="mobfoot__sk">
      </div>
    </div><!-- //mobfoot__twocol -->
    <a href="https://academy-market.com/school-reviews/talentsy" target="_blank" class="acmarket flexi">
      <div class="acmarket__balls flexi">4.5</div>
      <div class="acmarket__descr">
        <span><b>20 отзывов</b> о Talentsy</span>
        <div class="acmarket__link flexi">
          <svg width="15" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6037 2.93333L8.40318 11H5.40418L10.0107 0H13.2736L18 11H15.001L11.6805 2.93333H11.6037ZM5.99802 2.97396L2.69911 10.9948H0L4.51051 0.109375L5.99802 2.97396Z" fill="white"></path>
          </svg>
          <span>Academy Market</span>
        </div>
      </div>
    </a>
    <div class="mobfoot__contacts">
      <a href="tel:+78007753768" class="mobfoot__phonelink">8 800 775-3768</a>
      <div class="mobfoot__addr">Москва, Ащеулов пер, д.9</div>
    </div>
  </div><!-- //mobfoot -->
  <!-- КОНЕЦ: Мобильная версия подвала -->

  <div class="footerbot container">
    <div class="footermiddle__title">Рассрочка через <br class="mobbr">банки–партнеры</div>
    <div class="footerbot__banksgrid">
      <dl>
        <dt>Тинькофф</dt>
        <dd>Лицензия ЦБ РФ № 2673 от 24.03.2015</dd>
      </dl>
      <dl>
        <dt>Альфа-Банк</dt>
        <dd>Лицензия ЦБ РФ № 1326 от 16.01.2015</dd>
      </dl>
      <dl>
        <dt>Почта Банк</dt>
        <dd>Лицензия ЦБ РФ № 650 от 25.03.2016</dd>
      </dl>
      <dl>
        <dt>СберБанк</dt>
        <dd>Лицензия ЦБ РФ №1481 от 11.08.2015</dd>
      </dl>
    </div>
    <div class="footerbot__links flexi">
      <a href="#">Договор <br class="mobbr">оферты</a>
      <a href="#">Реквизиты <br class="mobbr">и оплата</a>
      <a href="#">Политика конфиденциальности</a>
      <a href="#">Документы образовательной организации</a>
      <div>Talentsy 2023</div>
    </div>
  </div><!-- //footerbot -->
</footer>
