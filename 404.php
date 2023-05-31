<?php
  get_header();
?>

<main class="simplepage">
  <div class="container">

    <ul class="breadcrumbs__list flexi">
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="/">Главная</a>
      </li>

      <?php if(get_post_type() === 'post'): ?>
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="<?=get_permalink(89); ?>">Блог</a>
        </li>
      <?php endif; ?>

      <li class="breadcrumbs__item"><span><?=strip_tags(get_the_title()); ?></span></li>
    </ul>

    <div class="simplepage__header">
      <h1 class="simplepage__title">Ошибка 404. Страницы не найдено</h1>
    </div>

    <div class="simplepage__grid
      <?=get_field('pic_position') == 'top' ? 'simplepage__grid--full': ''; ?>
      <?=get_field('pic_position') == 'right' ? 'simplepage__grid--right': ''; ?>
    ">
      <?php if(has_post_thumbnail()):?>
        <div class="simplepage__thumb">
          <?php the_post_thumbnail();
          if(get_field('absform-pic')): ?>
            <img src="<?=wp_get_attachment_image_url(get_field('absform-pic'), 'large'); ?>" alt="">
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="simplepage__content textcontent">
        <p>Ошибка. Данной страницы не найдено. <a href="/">Перейти на главную</a></p>
      </div>
    </div>
  </div>
</main>


<?php
if(get_field('isShowContactBlock')){
  get_template_part('inc/contacts');
}
get_footer();
