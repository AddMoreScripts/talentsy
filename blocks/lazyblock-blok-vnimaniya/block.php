<?php
/**
 * Example Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

switch ($attributes['vid-bloka-vnimaniya']) {
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
<div class="flexi alrt alrt--<?=$attributes['vid-bloka-vnimaniya']; ?> <?=$attributes['noicon'] ? 'alrt--noicon': ''; ?>">
  <?php if(!$attributes['noicon']): ?>
  <div class="alrt__imgwrap flexi">
    <img src="<?=imgs();?>/blog/article/<?=$iconPath;?>" alt="">
  </div>
  <?php endif; ?>
  <div class="alrt__content">
    <?=$attributes['kontent']; ?>
  </div>
</div>
