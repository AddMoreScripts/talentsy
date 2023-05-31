<?php
get_header('blog');
?>

<main class="blogcategory">
  <div class="container">
    <a href="/blog/" class="blogpost__back button button--blog">
      <img src="<?= imgs(); ?>/blog/icon-slider-arrow.svg" alt="">
      <span>Назад</span>
    </a>
    <div class="blogcategory__label">Категория</div>
    <h1 class="blogcategory__title"><?=get_the_archive_title(); ?></h1>
    <?php if(!have_posts()): ?>
      <div class="blogcategory__empty">Результатов не найдено</div>
    <?php endif; ?>
    <div class="blogcategory__grid">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('inc/post-teaser', null, ['post_id' => get_the_ID()]); ?>
    <?php endwhile; ?>
    </div>
  </div>
</main>


<?php
get_footer('blog');
