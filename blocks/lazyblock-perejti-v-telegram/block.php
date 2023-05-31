<?php
/**
 * Example Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="go-to-telegtam flexi"><img src="<?=imgs();?>/blog/article/icon-bot-tg.svg" alt="" class="go-to-telegtam__img">
  <div class="go-to-telegtam__content"><?=$attributes['text']; ?></div>
  <a href="<?=$attributes['link']; ?>" class="button button--blog">Перейти</a>
</div>
