<?php
/*
Template name: Шаблон: Отзывы
*/
get_header(null, ['white' => false]);

?>


<div class="reviewpage">
  <div class="container">
    <h1 class="reviewpage__h1 druk">Отзывы учеников Talentsy</h1>

    <div class="reviewpage__youtgrid">
      <?php while (have_rows('youtubeLink')) : the_row(); ?>
        <div class="revyoutube js-changeiframe square" data-link="<?=youtube_parser(get_sub_field('link'), 'id'); ?>">
          <img src="<?=youtube_parser(get_sub_field('link'), 'video', 'sddefault'); ?>" alt="" class="square__img">
          <img src="<?=imgs();?>/youtube-play.svg" alt="" class="revyoutube__play">
        </div>
      <?php endwhile; ?>
    </div>


    <div class="reviewpage__screens">
      <?php foreach (is_array(get_field('screens')) ? get_field('screens') : [] as $key => $pictureId): ?>
      <a href="<?= wp_get_attachment_image_url($pictureId, 'full'); ?>" class="reviewpage__screenlink" data-fancybox="review">
        <img src="<?= wp_get_attachment_image_url($pictureId, 'large'); ?>" alt="">
      </a>
      <?php endforeach; ?>
    </div>

    <div class="reviewpage__texts">
      <?php while (have_rows('review-texts')) : the_row(); ?>
      <div class="reviewpage__textbox">
        <?=get_sub_field('text'); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>

<?php
get_footer();
