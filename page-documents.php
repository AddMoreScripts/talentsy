<?php
/*
Template name: Шаблон: Документы организации
*/
get_header(null, ['white' => false]);
?>


<div class="documentspage">
  <div class="container">
    <h1 class="simplepage__title druk"><?= get_the_title(); ?></h1>
    <div class="documentspage__grid">
    <?php while (have_rows('org-docs-list')) : the_row(); ?>
      <a target="_blank" href="<?=get_sub_field('link'); ?>" class="documentsquare">
        <div class="documentsquare__title"><?=get_sub_field('doctitle'); ?></div>
        <span class="documentsquare__link">Читать →</span>
      </a>
    <?php endwhile; ?>
    </div>
  </div>
</div>


<?php
get_footer();
