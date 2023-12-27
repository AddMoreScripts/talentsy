<?php
  $isNoIcon = get_field('pictype') === 'no';
?>
<div class="flexi alrt alrt--expert <?= $isNoIcon ? 'alrt--noicon' : ''; ?>">
  <?php if (false) : ?>
    <div class="alrt__imgwrap flexi" style="background-color: #fff;">
      <?php if (get_field('pictype') === 'talentsy') : ?>
      <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle cx="26" cy="26" r="26" fill="#7835FF"/><g clip-path="url(#a)"><path d="m37.898 24.038-11.595-4.01a.56.56 0 0 0-.345 0l-11.595 4.01a.529.529 0 0 0-.363.508c0 .236.145.435.363.508l5.57 1.869-.017 2.65c0 .072 0 .162.09.253.345.454 2.831 1.851 6.097 1.851 3.103 0 5.789-1.288 6.116-1.724.072-.09.09-.181.072-.236l.037-2.794 2.613-.871v2.359l-.726 1.161a.918.918 0 0 0 0 .962l.98 1.597.98-1.597a.917.917 0 0 0 0-.962l-.726-1.18V25.87l2.468-.835a.528.528 0 0 0 .362-.508.54.54 0 0 0-.38-.49Z" fill="#fff"/></g><defs><clipPath id="a"><path fill="#fff" transform="translate(14 14)" d="M0 0h24v24H0z"/></clipPath></defs></svg>
      <?php endif; ?>
      <?php if (get_field('pictype') === 'img') : ?>
        <img src="<?=wp_get_attachment_image_url(get_field('picture'), 'thumbnail'); ?>" alt="" class="exp-block-avatar">
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <div class="exp-block-right">
    <div class="exp-block-meta">
        <?php if (!$isNoIcon) : ?>
        <div class="alrt__imgwrap flexi" style="background-color: #fff;">
          <?php if (get_field('pictype') === 'talentsy') : ?>
          <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle cx="26" cy="26" r="26" fill="#7835FF"/><g clip-path="url(#a)"><path d="m37.898 24.038-11.595-4.01a.56.56 0 0 0-.345 0l-11.595 4.01a.529.529 0 0 0-.363.508c0 .236.145.435.363.508l5.57 1.869-.017 2.65c0 .072 0 .162.09.253.345.454 2.831 1.851 6.097 1.851 3.103 0 5.789-1.288 6.116-1.724.072-.09.09-.181.072-.236l.037-2.794 2.613-.871v2.359l-.726 1.161a.918.918 0 0 0 0 .962l.98 1.597.98-1.597a.917.917 0 0 0 0-.962l-.726-1.18V25.87l2.468-.835a.528.528 0 0 0 .362-.508.54.54 0 0 0-.38-.49Z" fill="#fff"/></g><defs><clipPath id="a"><path fill="#fff" transform="translate(14 14)" d="M0 0h24v24H0z"/></clipPath></defs></svg>
          <?php endif; ?>
          <?php if (get_field('pictype') === 'img') : ?>
            <img src="<?=wp_get_attachment_image_url(get_field('picture'), 'thumbnail'); ?>" alt="" class="exp-block-avatar">
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="exp-block-metar">
        <?php if(get_field('name')): ?>
          <div class="exp-block-name"><?= get_field('name'); ?></div>
        <?php endif; ?>
        <?php if(get_field('info')): ?>
          <div class="exp-block-info"><?= get_field('info'); ?></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="alrt__content">
      <?= get_field('text'); ?>
    </div>
  </div>
</div>
