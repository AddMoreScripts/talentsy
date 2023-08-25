<section class="tgchanels">
	<div class="container container--1300">
		<div class="tgchanels__box">
			<div class="tgchanels__title"><span>Наши <svg width="49" height="44" viewBox="0 0 49 44" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22" cy="22" r="22" fill="black"/><circle cx="27" cy="22" r="21.5" stroke="black"/><path d="M10.3858 20.5998L15.4437 22.5653L17.4154 29.1766C17.5011 29.6233 18.0155 29.7126 18.3584 29.4446L21.1874 27.0324C21.4445 26.7644 21.8732 26.7644 22.2161 27.0324L27.274 30.8741C27.6169 31.1421 28.1313 30.9634 28.217 30.5167L31.989 11.7551C32.0747 11.3084 31.6461 10.8617 31.2174 11.0403L10.3858 19.4384C9.87141 19.6171 9.87141 20.4212 10.3858 20.5998ZM17.1582 21.5826L27.1025 15.2394C27.274 15.15 27.4454 15.4181 27.274 15.5074L19.1299 23.4588C18.8727 23.7268 18.6156 24.0841 18.6156 24.5309L18.3584 26.675C18.3584 26.9431 17.9298 27.0324 17.844 26.675L16.8153 22.744C16.5581 22.2973 16.7296 21.7613 17.1582 21.5826Z" fill="#F4F2F0"/></svg> телеграм-каналы</span></div>

			<div class="tgchanels__grid">
				<? while(have_rows('us-tg-chanels', 14)) : the_row(); ?>
					<a href="<?=get_sub_field('link'); ?>" target="_blank" class="tgchanels__card grid-item">
						<div class="tgchanels__iconwrap">
							<img src="<?=get_sub_field('icon'); ?>" alt="" class="tgchanels__icon">
						</div>
						<div class="tgchanels__label"><?=get_sub_field('title'); ?></div>
					</a>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>