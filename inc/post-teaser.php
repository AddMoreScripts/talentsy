<?php
  $postId = isset($args['post_id']) ? $args['post_id'] : null;
?>
<article class="blogteaser grid-item js-item">
  <a href="<?= get_permalink($postId); ?>" class="blogteaser__picwrap square">
    <img src="<?= get_the_post_thumbnail_url($postId, 'large'); ?>" alt="" class="square__img">
  </a>
  <div class="blogteaser__meta flexi">
    <div class="blogpost__cats flexi">
      <?php foreach (get_the_category($postId) as $category) : ?>
        <a href="<?= get_term_link($category->term_id); ?>"
        style="--bgcolor:<?=get_field('color', $category); ?>; color: <?=get_field('textcolor', $category) ? get_field('textcolor', $category) : 'white'; ?>">
          <span><?= $category->name; ?></span>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="blogpost__tags flexi">
      <?php foreach (get_the_tags($postId) as $tag) : ?>
        <a href="<?= get_term_link($tag->term_id); ?>">
          <span>#<?= $tag->name; ?></span>
        </a>
      <?php endforeach; ?>
    </div>
    <i class="idot"></i>
    <div class="blogpost__date"><?= get_the_date(null, $postId); ?></div>
  </div>
  <a href="<?= get_permalink($postId); ?>" class="blogteaser__title"><?= get_the_title($postId); ?></a>
  <?php if (get_the_excerpt($postId)) : ?>
    <div class="blogteaser__excerpt maxline2"><?= get_the_excerpt($postId); ?></div>
  <?php endif; ?>
  <div class="blogteaser__mobmeta">
    <?php foreach (get_the_tags($postId) as $tag) : ?>
      <a href="<?= get_term_link($tag->term_id); ?>">
        <span>#<?= $tag->name; ?></span>
      </a>
    <?php endforeach; ?>
    <i class="idot"></i>
    <div class="blogpost__date"><?= get_the_date(null, $postId); ?></div>
  </div>
</article>
