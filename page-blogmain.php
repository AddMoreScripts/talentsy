<?php
/*
Template name: Шаблон: Блог стартовая
*/  
$catsList 	= get_terms(['hide_empty' => false, 'taxonomy' => 'category']);

get_header('blog');
?>

<div class="blogcatheader">
  <div class="container container--1300 flexi">
    <div class="blogcatheader__catlist flexi">
      <a href="#" class="categoriesbox__tag is-active button button--blog">Все</a>
      <?php foreach($catsList as $key => $cat) : ?>
        <a href="<?= get_term_link($cat->term_id); ?>" class="categoriesbox__tag button button--blog">
          <?= $cat->name; ?>
        </a>
      <?php endforeach; ?>
      <button class="categoriesbox__tag button button--blog js-load-more-cats">...</button>
    </div>
    <div class="blogcatheader__right">
      <button class="blogcatheader__search" data-hystmodal="#menuSearchModal">
        <img src="<?= imgs(); ?>/blog/icon-search.svg" alt="">
      </button>
    </div>
  </div>
</div>

<div class="jsLoadMoreCont">
	<? get_template_part('inc/post-teasers-main', null, ['page' => 1, 'showTg' => true]); ?>
</div>

<div class="container container--1300">
	<nav class="navigation pagination" aria-label="Записи">
		<div class="js-pagination-wrap catalog-pagination">
			<div>
				<button class="blogcategory__morelink ajaxClick" data-target="axLoadMoreHome" data-params="2">Eщё</button>
				<div class="nav-links"></div>
			</div>
		</div>
	</nav>
</div>

<section class="blogproffslider js-blog-footer">
  <div class="container container--1300">
    <h3 class="blogproffslider__title">Выбери профессию мечты</h3>
    <div class="blogproffslider__slider swiper">
      <div class="swiper-wrapper">
      <?php while (have_rows('proff-slider')) : the_row(); ?>
        <div class="swiper-slide">
          <div class="blogproff">
            <div class="blogproff__picwrap square">
              <a href="<?=get_sub_field('link');?>">
                <img src="<?=get_sub_field('img');?>" alt="" class="square__img">
              </a>
            </div>
            <div class="blogpost__cats flexi">
              <a href="<?= get_sub_field('facult_link');?>" style="--bgcolor:<?=get_sub_field('color');?>;"><span><?=get_sub_field('facult');?></span></a>
            </div>
            <a href="<?=get_sub_field('link');?>">
              <div class="blogproff__title"><?=get_sub_field('title');?></div>
              <div class="blogproff__descr"><?=get_sub_field('descr');?></div>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
    <div class="blogproffslider__footer flexi">
      <div class="blogproffslider__pag flexi">
        <span>00</span>
        <span class="blogproffslider__scroll">
          <i style="width:0%"></i>
        </span>
        <span>00</span>
      </div>
      <div class="blogrelations__ctrl flexi">
        <button class="ctrl ctrl--prev"><img src="<?=imgs();?>/blog/icon-slider-arrow.svg" alt=""></button>
        <button class="ctrl ctrl--next"><img src="<?=imgs();?>/blog/icon-slider-arrow.svg" alt=""></button>
      </div>
    </div>
  </div>
</section>

<? if( 0 ): // отключил форму подписки, хз куда отправлять данные ?>
  <section class="blogdidjest">
    <div class="container container--1300">
      <div class="blogdidjest__box flexi">
        <div class="blogdidjest__left">
          <h3 class="blogdidjest__title">Еженедельный дайджест <br>самых интересных материалов</h3>
          <div class="blogdidjest__formwrap">
            <form action="#">
              <div class="blogdidjest__checks flexi">
                <label>
                  <input type="checkbox" name="theme" value="PRO студентов">
                  <span>PRO студентов</span>
                </label>
                <label>
                  <input type="checkbox" name="theme" value="Дизайн интерьера">
                  <span>Дизайн интерьера</span>
                </label>
                <label>
                  <input type="checkbox" name="theme" value="Психология">
                  <span>Психология</span>
                </label>
                <label>
                  <input type="checkbox" name="theme" value="Мода и стиль">
                  <span>Мода и стиль</span>
                </label>
                <label>
                  <input type="checkbox" name="theme" value="Современное искусство">
                  <span>Современное искусство</span>
                </label>
                <label>
                  <input type="checkbox" name="theme" value="Beauty">
                  <span>Beauty</span>
                </label>
                <label>
                  <input type="checkbox" name="theme" value="Разное">
                  <span>Разное</span>
                </label>
              </div>
              <div class="blogdidjest__actions flexi">
                <input type="email" name="email" placeholder="Электронная почта" required>
                <button type="submit" class="button button--blog">Подписаться</button>
              </div>
            </form>
            <p class="accept">Нажимая "Подписаться" вы соглашаетесь на <a href="<?= ldocslink('agree'); ?>" target="_blank">обработку персональных данных</a></p>
          </div>
        </div>
        <aside class="blogdidjest__right">
          <img src="<?=imgs();?>/blog/diget.jpg" alt="">
        </aside>
      </div>
    </div>
  </section>
<? endif; ?>

<?php
get_footer();