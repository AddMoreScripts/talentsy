<aside class="readmoreblock">
  <div class="readmoreblock__wrapper">
    <div class="readmoreblock__left">
      <mark class="readmoreblock__mark"><?=get_field('subtitle'); ?></mark>
      <a href="<?=get_permalink(get_field('postlink')); ?>" class="readmoreblock__link">
        <?=get_the_title(get_field('postlink')); ?>
      </a>
    </div>
    <a href="<?=get_permalink(get_field('postlink')); ?>" class="readmoreblock__right">
      <img src="<?=get_the_post_thumbnail_url(get_field('postlink'), 'large'); ?>" alt="" class="readmoreblock__pic">
    </a>
  </div>
</aside>
