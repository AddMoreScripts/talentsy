<?
	$postPara	= [
		'post_type' 	=> 'post',
		'post_status' 	=> 'publish',
		'order' 		=> 'DESC',
		'orderby' 		=> 'date',
		'paged' 		=> $args['page'],
		'tag__not_in' 	=> [28], // не выводит тег "Выпускники"
		'posts_per_page'	=> 14,
	];
	$postList	= new WP_Query($postPara);
	$postIndx	= 0;
	$endedTag	= 0;
	$showTg 	= $args['showTg'];

	while( $postList->have_posts() ):
		$postList->the_post();
		$postIndx++;
		$isAlt = $postIndx == 8;

		if( $isAlt && $showTg ): // если задано - перед вторым блоком статей нужно вывести блок с ТГ каналами, используется на главной
			get_template_part('inc/tgchanels');
		endif;

		// 1 и 8 посты идут широким шаблоном
		if( in_array($postIndx, [1, 8]) ):
			get_template_part('inc/post-teaser-bloglead', null, ['isAlt' => $isAlt]);
		else: // простой шаблон
			if( in_array($postIndx, [2, 9]) ): // открывающие контейнеры
				echo '<div class="container container--1300"><div class="blogcategory__grid blogroot__grid">';
			endif;

			get_template_part('inc/post-teaser');

			if( in_array($postIndx, [7, 14]) ): // закрывающие контейнеры
				echo '</div></div>';
				$endedTag++;
			endif;
		endif;
	endwhile;
	wp_reset_postdata();

	// ленивый фикс закрытия тегов, если постов меньше %14
	if( $endedTag < 2 ) echo '</div></div>';
?>