<?php
get_header('blog');
?>

<main class="blogcategory">
  <div class="container">
    <div class="blogcategory__search">
      <?=get_search_form(); ?>
    </div>
    <div class="blogcategory__label">Результаты поиска</div>
    <h1 class="blogcategory__title"><?=get_search_query(); ?></h1>
    <div class="blogcategory__grid">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('inc/post-teaser', null, ['post_id' => get_the_ID()]); ?>
    <?php endwhile; ?>
    </div>
  </div>
</main>


<?php
get_footer('blog');
