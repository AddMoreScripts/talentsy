<section class="bloglead <?= $args['isAlt'] ? 'bloglead--alt' : ''; ?>">
	<div class="container container--1300">
		<div class="bloglead__box flexi">
			<div class="bloglead__left">
				<div class="bloglead__meta flexi">
					<div class="blogpost__cats flexi">
						<?php foreach(get_the_category() as $category): ?>
							<a href="<?= get_term_link($category->term_id); ?>" style="--bgcolor:<?= get_field('color', $category); ?>">
								<span><?= $category->name; ?></span>
							</a>
						<?php endforeach; ?>
					</div>

					<div class="blogpost__tags flexi">
						<?php foreach(get_the_tags() as $tag): ?>
							<a href="<?= get_term_link($tag->term_id); ?>">
								<span>#<?= $tag->name; ?></span>
							</a>
						<?php endforeach; ?>
					</div>

					<i class="idot"></i>
					<div class="blogpost__date"><?= get_the_date(); ?></div>
				</div><!-- //bloglead__meta -->

				<a href="<?= get_permalink(); ?>" class="bloglead__title"><?= get_the_title(); ?></a>

				<?php if( get_the_excerpt() ): ?>
					<div class="bloglead__excerpt maxline2"><?= get_the_excerpt(); ?></div>
				<?php endif; ?>

				<div class="blogteaser__mobmeta">
					<?php foreach(get_the_tags() as $tag) : ?>
						<a href="<?= get_term_link($tag->term_id); ?>">
							<span>#<?= $tag->name; ?></span>
						</a>
					<?php endforeach; ?>

					<i class="idot"></i>
					<div class="blogpost__date"><?= get_the_date(); ?></div>
				</div>
			</div><!-- //bloglead__left -->

			<div class="bloglead__right">
				<a href="<?= get_permalink(); ?>" class="bloglead__picwrap square">
					<img src="<?= get_the_post_thumbnail_url($post, ($args['isAlt'] ? 'large' : 'blog-m')); ?>" alt="" class="square__img">
				</a>
			</div>
		</div>
	</div>
</section>