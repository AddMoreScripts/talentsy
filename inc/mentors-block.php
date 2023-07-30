<div class="teamblock flexi">
  <div class="teamblock__nav jbm teamblock__nav--left">

    <?php
    $leftMentors = get_field('course_mentors');
    $rightMentors = get_field('course_mentors_r');
    $counter = 0;

    foreach ($leftMentors as $key => $value) : ?>
      <a href="#" class="teamblock__navlink <?= $counter === 0 ? 'is-active' : ''; ?>" data-slide="<?= $counter; ?>">
        <?= get_field('lastname', $value); ?>
      </a>
    <?php $counter++;
    endforeach; ?>
  </div>
  <div class="teamblock__nav jbm teamblock__nav--right">
    <?php foreach ($rightMentors as $key => $value) : ?>
      <a href="#" class="teamblock__navlink <?= $counter === 0 ? 'is-active' : ''; ?>" data-slide="<?= $counter; ?>">
        <?= get_field('lastname', $value); ?>
      </a>
    <?php $counter++;
    endforeach; ?>
  </div>

  <!-- Слайдер десктоп -->
  <div class="swiper teamslider js-team-slider">
    <div class="swiper-wrapper">
      <?php foreach ($leftMentors as $key => $value) : ?>
        <article class="swiper-slide teamslider__slide">
          <div class="teamslider__item">
            <img src="<?= get_the_post_thumbnail_url($value, 'large'); ?>" alt="" class="teamslider__photo">
            <h3 class="teamslider__name"><?= get_the_title($value); ?></h3>
            <div class="teamslider__content">
              <?php
              $content = apply_filters('the_content', get_the_content('', '', $value));
              echo $content;
              ?>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
      <?php foreach ($rightMentors as $key => $value) : ?>
        <article class="swiper-slide teamslider__slide">
          <div class="teamslider__item">
            <img src="<?= get_the_post_thumbnail_url($value, 'large'); ?>" alt="" class="teamslider__photo">
            <h3 class="teamslider__name"><?= get_the_title($value); ?></h3>
            <div class="teamslider__content">
              <?php
              $content = apply_filters('the_content', get_the_content('', '', $value));
              echo $content;
              ?>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- Слайдер десктоп -->

</div><!-- //teamblock -->
