<div class="hystmodal" id="menuModal" aria-hidden="false">
  <div class="hystmodal__window menuwindow__wrap" role="dialog" aria-modal="true">
    <section class="menuwindow">
      <button class="menuwindow__closer" data-hystclose><img src="<?=imgs();?>/menu/icon-close.svg" alt=""></button>
      <div class="container">
        <div class="menuwindow__nav flexi">
          <a href="<?=get_permalink(204); ?>" class="menuwindow__navlink">О Talentsy</a>
          <a href="<?=get_permalink(150); ?>" class="menuwindow__navlink">Отзывы</a>
          <a href="/blog/" class="menuwindow__navlink">Журнал</a>
          <a href="tel:+78007753768" class="menuwindow__phone">8 800 775 37 68</a>
          <a href="https://lk.talentsy.ru/" class="hdr__login flexi">Вход</a>
        </div>

        <div class="menuwindow__main flexi" data-tabwrap>
          <div class="menuwindow__aside">
            <div class="menuwindow__h1">Факультеты</div>
            <ul class="menuwindow__facultet druk">
              <li>
                <a href="<?=get_permalink(207); ?>" data-tablink="moda" class="is-active">Мода и стиль</a>
              </li>
              <li>
                <a href="<?=get_permalink(208); ?>" data-tablink="iskus">Современное <br>искусство</a>
              </li>
              <li>
                <a href="<?=get_permalink(209); ?>" data-tablink="psy">Психология</a>
              </li>
              <li>
                <a href="<?=get_permalink(210); ?>" data-tablink="design">Дизайн <br>интерьера</a>
              </li>
              <li>
                <a href="<?=get_permalink(205); ?>" data-tablink="zog">ЗОЖ</a>
              </li>
            </ul>

            <ul class="menuwindow__mobbot">
              <li>
                <a href="/Proyekty-studentov">Проекты студентов</a>
              </li>
              <li>
                <a class="tn-atom" href="<?=get_permalink(204); ?>">О Talentsy</a>
              </li>
              <li>
                <a class="tn-atom" href="/blog/">Журнал</a>
              </li>
            </ul>

            <a href="https://talentsy.ru/vyberite-programmu" class="menuwindow__circlebutton menuwindow__mobcircle">
              <span>Подобрать <br>программу</span>
            </a>
          </div><!-- //menuwindow__aside -->

          <div class="menuwindow__tabs">

            <div class="menuwindow__tab is-active" data-tab="moda">
              <button class="menuwindow__tabclose" data-tablink="none">
                <img src="<?=imgs();?>/menu/icon-arrow.svg" alt="">
              </button>
              <div class="menuwindow__tabgrid">
                <div class="menuwindow__mobtitle druk">Мода и стиль</div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Профессии</span>
                  <div class="menuwindow__sub">Большие образовательные программы, которые помогут получить новую специальность</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="<?=get_permalink(143); ?>">Дизайнер одежды</a></li>
                    <li><a href="<?=get_permalink(144); ?>">Стилист-имиджмейкер</a></li>
                    <li><a href="<?=get_permalink(146); ?>">Fashion-стилист</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Онлайн-курсы</span>
                  <div class="menuwindow__sub">
                    Короткие программы, которые помогут<br>
                    погрузиться в творческую среду<br>
                    и приобрести новый навык
                  </div>
                  <ul class="menuwindow__submenu">
                    <li><a href="<?=get_permalink(212); ?>">Fashion-скетчинг</a></li>
                    <li><a href="/painting_on_clothes">Рисунок на ткани</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(207); ?>" class="menuwindow__h2">О факультете</a>
                  <div class="menuwindow__sub">Узнать больше о факультете, преподавателях и&nbsp;программах</div>
                </div>
              </div>
            </div><!-- //menuwindow__tab -->

            <div class="menuwindow__tab" data-tab="iskus">
              <button class="menuwindow__tabclose" data-tablink="none">
                <img src="<?=imgs();?>/menu/icon-arrow.svg" alt="">
              </button>
              <div class="menuwindow__tabgrid">
                <div class="menuwindow__mobtitle druk">Современное <br>искусство</div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Профессии</span>
                  <div class="menuwindow__sub">Большие образовательные программы, которые помогут получить новую специальность</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="/professiya-florist">Флорист</a></li>
                    <li><a href="/dizayner-ukrasheniy">Дизайнер украшений</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Онлайн-курсы</span>
                  <div class="menuwindow__sub">
                    Короткие программы, которые помогут<br>
                    погрузиться в творческую среду<br>
                    и приобрести новый навык
                  </div>
                  <ul class="menuwindow__submenu">
                    <li><a href="/wedding-florist">Свадебная флористика</a></li>
                    <li><a href="/osnovy-floristiki">Основы флористики</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(208); ?>" class="menuwindow__h2">О факультете</a>
                  <div class="menuwindow__sub">Узнать больше о факультете, преподавателях и&nbsp;программах</div>
                </div>
              </div>
            </div><!-- //menuwindow__tab -->


            <div class="menuwindow__tab" data-tab="psy">
              <button class="menuwindow__tabclose" data-tablink="none"><img src="<?=imgs(); ?>/menu/icon-arrow.svg" alt=""></button>
              <div class="menuwindow__tabgrid">
                <div class="menuwindow__mobtitle druk">Психология</div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Профессии</span>
                  <div class="menuwindow__sub">Большие образовательные программы, которые помогут получить новую специальность</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="<?=get_permalink(132); ?>">Психолог-консультант</a></li>
                    <li><a href="<?=get_permalink(133); ?>">Консультант в сфере <br>сексуальных отношений</a></li>
                    <li><a href="<?=get_permalink(134); ?>">Детский психолог-консультант</a></li>
                    <li><a href="<?=get_permalink(138); ?>">Семейный психолог-консультант</a></li>
                    <li><a href="<?=get_permalink(148); ?>">Профессия Астролог</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(209); ?>" class="menuwindow__h2">О факультете</a>
                  <div class="menuwindow__sub">Узнать больше о факультете, преподавателях и&nbsp;программах</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="https://talentsy.ru/psychology_orkt">Ориентированная на решение <br>краткосрочная терапия</a></li>
                    <li><a href="https://talentsy.ru/psychology_ppks">Кризисное консультирование</a></li>
                    <li><a href="https://talentsy.ru/psychology_rpck">Работа со сложными клиентами</a></li>
                  </ul>
                </div>
              </div>
            </div><!-- //menuwindow__tab -->

            <div class="menuwindow__tab" data-tab="design">
              <button class="menuwindow__tabclose" data-tablink="none"><img src="<?=imgs();?>/menu/icon-arrow.svg" alt=""></button>
              <div class="menuwindow__tabgrid">
                <div class="menuwindow__mobtitle druk">Дизайн <br>интерьера</div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Профессии</span>
                  <div class="menuwindow__sub">Большие образовательные программы, которые помогут получить новую специальность</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="<?=get_permalink(136); ?>" >Дизайнер Интерьера</a></li>
                    <li><a href="<?=get_permalink(140); ?>" >Декоратор Интерьера</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Онлайн-курсы</span>
                  <div class="menuwindow__sub">
                    Короткие программы, которые помогут<br>
                    погрузиться в творческую среду<br>
                    и приобрести новый навык
                  </div>
                  <ul class="menuwindow__submenu">
                    <li><a href="/interior_scatch" >Интерьерный скетчинг</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(210); ?>" class="menuwindow__h2">О факультете</a>
                  <div class="menuwindow__sub">Узнать больше о факультете, преподавателях и&nbsp;программах</div>
                </div>
              </div>
            </div><!-- //menuwindow__tab -->


            <?php if(0): ?>
            <div class="menuwindow__tab" data-tab="astro">
              <button class="menuwindow__tabclose" data-tablink="none"><img src="<?=imgs(); ?>/menu/icon-arrow.svg" alt=""></button>
              <div class="menuwindow__tabgrid">
                <div class="menuwindow__mobtitle druk">Астрология</div>
                <div class="menuwindow__col">
                  <span class="menuwindow__h2">Профессии</span>
                  <div class="menuwindow__sub">Большие образовательные программы, которые помогут получить новую специальность</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="<?=get_permalink(148); ?>" >Профессия Астролог</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(211); ?>" class="menuwindow__h2">О факультете</a>
                  <div class="menuwindow__sub">Узнать больше о факультете, преподавателях и&nbsp;программах</div>
                </div>
              </div>
            </div><!-- //menuwindow__tab -->
            <?php endif; ?>


            <div class="menuwindow__tab" data-tab="zog">
              <button class="menuwindow__tabclose" data-tablink="none"><img src="<?=imgs(); ?>/menu/icon-arrow.svg" alt=""></button>
              <div class="menuwindow__tabgrid">
                <div class="menuwindow__mobtitle druk">ЗОЖ</div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(205); ?>" class="menuwindow__h2">Профессии</a>
                  <div class="menuwindow__sub">Большие образовательные программы, которые помогут получить новую специальность</div>
                  <ul class="menuwindow__submenu">
                    <li><a href="<?=get_permalink(149); ?>">Профессия Нутрициолог</a></li>
                    <li><a href="https://talentsy.ru/health-ra">Расшифровка анализов</a></li>
                  </ul>
                </div>
                <div class="menuwindow__col">
                  <a href="<?=get_permalink(205); ?>" class="menuwindow__h2">О факультете</a>
                  <div class="menuwindow__sub">Узнать больше о факультете, преподавателях и&nbsp;программах</div>
                </div>
              </div>
            </div><!-- //menuwindow__tab -->

          </div>


          <a href="https://talentsy.ru/vyberite-programmu" class="menuwindow__circlebutton">
            <span>Подобрать <br>программу</span>
          </a>

        </div><!-- //menuwindow__main -->
      </div>
    </section>
  </div>
</div>
<script>
  if (window.innerWidth < 992) {
    document.querySelectorAll('.menuwindow__main .is-active').forEach(el => {
      el.classList.remove('is-active');
    });
  }
</script>
