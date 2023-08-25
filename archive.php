<?php

  get_header('blog');
  $currentCat = 0;
  $current = get_queried_object();
  if ($current instanceof WP_Term) $currentCat = $current->term_id;

  $isTag    = $current->taxonomy == 'post_tag';
  $axParam  = ['page_num' => 1];
  $axParam[ ($isTag ? 'tags' : 'cats') ] = [$currentCat];

?>


<template class="is-active" data-catid="<?=$currentCat; ?>"></template>

<main class="blogcategory">
  <div class="container">
    <a href="/blog/" class="blogpost__back button button--blog">
      <img src="<?= imgs(); ?>/blog/icon-slider-arrow.svg" alt="">
      <span>Назад</span>
    </a>

    <div class="blogcategory__label"><?= $isTag ? 'Тег' : 'Категория'; ?></div>
    <h1 class="blogcategory__title"><?= $isTag ? '#' : ''; ?><?= get_the_archive_title(); ?></h1>
    <div class="js-catalog" data-actionname="catalog">
      <?php get_template_part('inc/ajax-blog-posts', null, $axParam); ?>
    </div>
    <nav class="navigation pagination" aria-label="Записи">
      <div class="js-pagination-wrap catalog-pagination">
      </div>
    </nav>
  </div>
</main>


<?php
get_footer();
