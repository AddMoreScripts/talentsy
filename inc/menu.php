<?
  $acfMenu = [
    'main'    => [],
    'mobile'  => [],
    'subs'    => []
  ];

  foreach(get_field('mmenu', 'options') as $k => $mainItem):
    if( $mainItem['isMobile'] ):
      $acfMenu['mobile'][] = $mainItem['link'];
    else:
      $acfMenu['main'][$k] = [
        'linkData'  => $mainItem['link'],
        'subs'      => false
      ];

      if( $mainItem['isTab'] ):
        $acfMenu['main'][$k]['subs'] = [
          'id'    => rand(1, 200000),
          'items' => $mainItem['mmsubmenu']
        ];
      endif;
    endif;
  endforeach;
?>

<div class="hystmodal" id="menuModal" aria-hidden="false">
  <div class="hystmodal__window menuwindow__wrap" role="dialog" aria-modal="true">
    <section class="menuwindow">
      <button class="menuwindow__closer" data-hystclose><img src="<?=imgs();?>/menu/icon-close.svg" alt=""></button>
      <div class="container">
        <?php wp_nav_menu([
          'menu' => 'Меню в поп-апе',
          'menu_class' => 'flexi',
          'container' => 'nav',
          'container_class' => 'menuwindow__nav',
        ]); ?>

        <div class="menuwindow__main flexi" data-tabwrap>
          <div class="menuwindow__aside">
            <div class="menuwindow__h1">Факультеты</div>
            <ul class="menuwindow__facultet druk">
              <? foreach($acfMenu['main'] as $k => $linkInfo): ?>
                <li>
                  <a href="<?= $linkInfo['linkData']['url']; ?>" <?= $linkInfo['subs'] ? 'data-tablink="'. $linkInfo['subs']['id'] .'"' : ''; ?> <?= $k == 0 ? 'class="is-active"' : ''; ?>>
                    <?= str_replace('&lt;br&gt;', '<br>', $linkInfo['linkData']['title']); ?>
                  </a>
                </li>
              <? endforeach; ?>
            </ul>

            <ul class="menuwindow__mobbot">
              <? foreach($acfMenu['mobile'] as $k => $linkInfo): ?>
                <li>
                  <a href="<?= $linkInfo['linkData']['url']; ?>" <?= $linkInfo['subs'] ? 'data-tablink="'. $linkInfo['subs']['id'] .'"' : ''; ?> <?= $k == 0 ? 'class="is-active"' : ''; ?>>
                    <?= str_replace('&lt;br&gt;', '<br>', $linkInfo['linkData']['title']); ?>
                  </a>
                </li>
              <? endforeach; ?>
            </ul>

            <a href="/vyberite-programmu" class="menuwindow__circlebutton menuwindow__mobcircle">
              <span>Подобрать <br>программу</span>
            </a>
          </div><!-- //menuwindow__aside -->

          <div class="menuwindow__tabs">
              <? foreach($acfMenu['main'] as $k => $linkInfo): if( !$linkInfo['subs'] ) continue; ?>
                <div class="menuwindow__tab <?= $k == 0 ? 'is-active' : ''; ?>" data-tab="<?= $linkInfo['subs']['id']; ?>">
                  <button class="menuwindow__tabclose" data-tablink="none"><img src="<?=imgs();?>/menu/icon-arrow.svg" alt=""></button>

                  <div class="menuwindow__tabgrid">
                    <div class="menuwindow__mobtitle druk"><?= str_replace('&lt;br&gt;', '<br>', $linkInfo['linkData']['title']); ?></div>
                    <? foreach($linkInfo['subs']['items'] as $sik => $subLinkInfo): ?>
                      <div class="menuwindow__col">
                        <? if( $subLinkInfo['isLinkHeader'] ): ?>
                          <a href="<?= $subLinkInfo['link']['url']; ?>" class="menuwindow__h2"><?= $subLinkInfo['link']['title']; ?></a>
                        <? else: ?>
                          <span class="menuwindow__h2"><?= $subLinkInfo['header']; ?></span>
                        <? endif; ?>

                        <div class="menuwindow__sub"><?= $subLinkInfo['description']; ?></div>

                        <? if( !empty($subLinkInfo['subitems']) ): ?>
                          <ul class="menuwindow__submenu">
                            <? foreach($subLinkInfo['subitems'] as $ssk => $subInfo): ?>
                              <li><a href="<?= $subInfo['sublink']['url']; ?>"><?= $subInfo['sublink']['title']; ?></a></li>
                            <? endforeach; ?>
                          </ul>
                        <? endif; ?>
                      </div>
                    <? endforeach; ?>
                  </div>
                </div>
              <? endforeach; ?>
          </div>

          <a href="https://talentsy.ru/vyberite-programmu" class="menuwindow__circlebutton"><span>Подобрать <br>программу</span></a>
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