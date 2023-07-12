<div class="numblockitems">
<?php while (have_rows('dl-dt-dd')) : the_row(); ?>
  <dl class="numblockitems__item">
    <dt class="numblockitems__numb"><?=get_row_index() + 1; ?></dt>
    <dt class="numblockitems__title"><?=get_sub_field('dt'); ?></dt>
    <dd><?=get_sub_field('dd'); ?></dd>
  </dl>
  <?php endwhile; ?>
</div>
