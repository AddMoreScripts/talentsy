<?php
$currentPage = isset($args['page_num']) ? $args['page_num'] : 1;
$postPerPage = isset($args['per_page']) ? $args['per_page'] : 12;
$exclude = isset($args['exclude']) ? $args['exclude'] : [];
$queryParams = [
  'numberposts' => -1,
  'post_status' => 'publish',
  'post_type' => 'post',
  'order' => 'DESC',
  'orderby' => 'date',
  'posts_per_page' => $postPerPage,
  'paged' => $currentPage,
  'post__not_in' => $exclude,
];
if ($args['cats'] && count($args['cats'])) {
  $queryParams['tax_query'] = [
    'relation' => 'AND',
    [
    'taxonomy' => 'category',
		'terms'    => $args['cats'],
		'field'    => 'id',
		'operator' => 'AND',
    ]
  ];
}
if ($args['tags'] && count($args['tags'])) {
  $queryParams['tax_query'] = [
    'relation' => 'AND',
    [
    'taxonomy' => 'post_tag',
    'terms'    => $args['tags'],
    'field'    => 'id',
    'operator' => 'AND',
    ]
  ];
}
$query = new WP_Query($queryParams);
?>
<?php
// echo '<pre>';
// var_dump($queryParams);
// echo '</pre>';
?>
<div class="blogcategory__grid" data-currentpage="<?=$currentPage; ?>">
  <?php
  if($query->have_posts()){
    while ($query->have_posts()) {
      $query->the_post();
      get_template_part('inc/post-teaser', null, ['id' => $post->ID, 'isShowPrice' => true]);
    }
    wp_reset_postdata();
  } else {
    echo '<div class="blogcategory__empty">Результатов не найдено</div>';
  }

  ?>
</div>

<?php if(1): //здесь заготовка пагинации ?>
<template id="js-cat-pagination">
  <div>
    <?php if( $currentPage < $query->max_num_pages): ?>
      <button class="blogcategory__morelink js-loadmore"
        data-needpage="<?=($currentPage + 1); ?>"
        data-perpage="<?=$postPerPage; ?>"
        data-exclude="<?=json_encode($exclude); ?>"
      >Eщё</button>
    <?php endif; ?>
    <div class="nav-links">
    <?php
    /*
    echo paginate_links([
      'total'   => $query->max_num_pages,
      'current' => $currentPage,
    ]);
     */
    ?>
    </div>
  </div>
</template>
<?php endif ?>

<template id="js-more-pagination">
  <?php if( $currentPage < $query->max_num_pages): ?>
  <button class="profiltermorelink button js-loadmore" data-needpage="<?=($currentPage + 1); ?>">Загрузить ещё</button>
  <?php endif; ?>
</template>
