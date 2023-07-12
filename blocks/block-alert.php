<?php

switch (get_field('type')) {
  case 'alert':
    $iconPath = 'acc-alert.svg';
    break;
  case 'info':
    $iconPath = 'acc-info.svg';
    break;
  case 'check':
    $iconPath = 'acc-check.svg';
    break;
  case 'error':
    $iconPath = 'acc-error.svg';
    break;
  case 'happy':
    $iconPath = 'acc-happy.svg';
    break;
  case 'sad':
    $iconPath = 'acc-sad.svg';
    break;
  default:
    $iconPath = 'acc-alert.svg';
    break;
}
?>
<div class="flexi alrt alrt--<?= get_field('type'); ?> <?= get_field('noicon') ? 'alrt--noicon' : ''; ?>">
  <?php if (!get_field('noicon')) : ?>
    <div class="alrt__imgwrap flexi">
      <img src="<?= imgs(); ?>/blog/article/<?= $iconPath; ?>" alt="">
    </div>
  <?php endif; ?>
  <div class="alrt__content">
    <?= get_field('content'); ?>
  </div>
</div>
