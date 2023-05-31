<?php
/*
Template name: Шаблон: Блог стартовая
*/
get_header('blog');
?>


<?php
$catlist = get_terms([
  'hide_empty' => false,
  'taxonomy' => 'category',
]);
?>
<div class="blogcatheader">
  <div class="container container--1300 flexi">
    <div class="blogcatheader__catlist flexi">
      <a href="#" class="categoriesbox__tag is-active button button--blog">Все</a>
      <?php foreach ($catlist as $key => $cat) : ?>
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


<?php
$frontPosts = get_posts([
  'post_type' => 'post',
  'numberposts' => 14,
]);
$firstPost = $frontPosts[0];
?>
<section class="bloglead">
  <div class="container container--1300">
    <div class="bloglead__box flexi">
      <div class="bloglead__left">
        <div class="bloglead__meta flexi">
          <div class="blogpost__cats flexi">
            <?php foreach (get_the_category($firstPost) as $category) : ?>
              <a href="<?= get_term_link($category->term_id); ?>" style="--bgcolor:<?=get_field('color', $category); ?>">
                <span><?= $category->name; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
          <div class="blogpost__tags flexi">
            <?php foreach (get_the_tags($firstPost) as $tag) : ?>
              <a href="<?= get_term_link($tag->term_id); ?>">
                <span>#<?= $tag->name; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
          <i class="idot"></i>
          <div class="blogpost__date"><?= get_the_date(null, $firstPost); ?></div>
        </div><!-- //bloglead__meta -->

        <a href="<?= get_permalink($firstPost); ?>" class="bloglead__title"><?= get_the_title($firstPost); ?></a>
        <?php if (get_the_excerpt($firstPost)) : ?>
          <div class="bloglead__excerpt maxline2"><?= get_the_excerpt($firstPost); ?></div>
        <?php endif; ?>
        <div class="blogteaser__mobmeta">
          <?php foreach (get_the_tags($firstPost) as $tag) : ?>
            <a href="<?= get_term_link($tag->term_id); ?>">
              <span>#<?= $tag->name; ?></span>
            </a>
          <?php endforeach; ?>
          <i class="idot"></i>
          <div class="blogpost__date"><?= get_the_date(null, $firstPost); ?></div>
        </div>
      </div><!-- //bloglead__left -->
      <div class="bloglead__right">
        <a href="<?= get_permalink($firstPost); ?>" class="bloglead__picwrap square">
          <img src="<?= get_the_post_thumbnail_url($firstPost, 'large'); ?>" alt="" class="square__img">
        </a>
      </div>
    </div>
  </div>
</section>



<div class="container container--1300">
  <div class="blogcategory__grid blogroot__grid">
    <?php foreach ($frontPosts as $key => $postId):
      if($key === 0) continue;
      if($key > 6) break;
      get_template_part('inc/post-teaser', null, ['post_id' => $postId]);
    endforeach; ?>
  </div>
</div>



<section class="tgchanels">
  <div class="container container--1300">
    <div class="tgchanels__box">
      <div class="tgchanels__title"><span>Наши <svg width="49" height="44" viewBox="0 0 49 44" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22" cy="22" r="22" fill="black"/><circle cx="27" cy="22" r="21.5" stroke="black"/><path d="M10.3858 20.5998L15.4437 22.5653L17.4154 29.1766C17.5011 29.6233 18.0155 29.7126 18.3584 29.4446L21.1874 27.0324C21.4445 26.7644 21.8732 26.7644 22.2161 27.0324L27.274 30.8741C27.6169 31.1421 28.1313 30.9634 28.217 30.5167L31.989 11.7551C32.0747 11.3084 31.6461 10.8617 31.2174 11.0403L10.3858 19.4384C9.87141 19.6171 9.87141 20.4212 10.3858 20.5998ZM17.1582 21.5826L27.1025 15.2394C27.274 15.15 27.4454 15.4181 27.274 15.5074L19.1299 23.4588C18.8727 23.7268 18.6156 24.0841 18.6156 24.5309L18.3584 26.675C18.3584 26.9431 17.9298 27.0324 17.844 26.675L16.8153 22.744C16.5581 22.2973 16.7296 21.7613 17.1582 21.5826Z" fill="#F4F2F0"/></svg> телеграм-каналы</span></div>
      <div class="tgchanels__grid">
      <?php while (have_rows('us-tg-chanels')) : the_row(); ?>
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


<?php
$postId = $frontPosts[4];
$firstPost = $frontPosts[4];
?>

<section class="bloglead bloglead--alt">
  <div class="container container--1300">
    <div class="bloglead__box flexi">
      <div class="bloglead__left">
        <div class="bloglead__meta flexi">
          <div class="blogpost__cats flexi">
            <?php foreach (get_the_category($firstPost) as $category) : ?>
              <a href="<?= get_term_link($category->term_id); ?>" style="--bgcolor:<?=get_field('color', $category); ?>;">
                <span><?= $category->name; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
          <div class="blogpost__tags flexi">
            <?php foreach (get_the_tags($firstPost) as $tag) : ?>
              <a href="<?= get_term_link($tag->term_id); ?>">
                <span>#<?= $tag->name; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
          <i class="idot"></i>
          <div class="blogpost__date"><?= get_the_date(null, $firstPost); ?></div>
        </div><!-- //bloglead__meta -->

        <a href="<?= get_permalink($firstPost); ?>" class="bloglead__title"><?= get_the_title($firstPost); ?></a>
        <?php if (get_the_excerpt($firstPost)) : ?>
          <div class="bloglead__excerpt maxline2"><?= get_the_excerpt($firstPost); ?></div>
        <?php endif; ?>
        <div class="blogteaser__mobmeta">
          <?php foreach (get_the_tags($firstPost) as $tag) : ?>
            <a href="<?= get_term_link($tag->term_id); ?>">
              <span>#<?= $tag->name; ?></span>
            </a>
          <?php endforeach; ?>
          <i class="idot"></i>
          <div class="blogpost__date"><?= get_the_date(null, $firstPost); ?></div>
        </div>
      </div><!-- //bloglead__left -->
      <div class="bloglead__right">
        <a href="<?= get_permalink($firstPost); ?>" class="bloglead__picwrap square">
          <img src="<?= get_the_post_thumbnail_url($firstPost, 'large'); ?>" alt="" class="square__img">
        </a>
      </div>
    </div>
  </div>
</section>



<div class="container container--1300">
  <div class="blogcategory__grid blogroot__grid">
    <?php foreach ($frontPosts as $key => $postId):
      if($key === 0) continue;
      if($key > 6) break;
      get_template_part('inc/post-teaser', null, ['post_id' => $postId]);
    endforeach; ?>
  </div>
  <div class="blogcategory__moreplace"></div>
  <div class="blogcategory__moreloader js-loader-blogposts"></div>
  <button class="blogcategory__morelink js-load-blogposts">Ещё</button>
</div>




<section class="blogproffslider js-blog-footer">
  <div class="container container--1300">
    <h3 class="blogproffslider__title">Выбери профессию мечты</h3>
    <div class="blogproffslider__slider swiper">
      <div class="swiper-wrapper">
      <?php while (have_rows('proff-slider')) : the_row(); ?>
        <div class="swiper-slide">
          <a href="<?=get_sub_field('link');?>" class="blogproff">
            <div class="blogproff__picwrap square">
              <img src="<?=get_sub_field('img');?>" alt="" class="square__img">
            </div>
            <div class="blogpost__cats flexi">
              <div style="--bgcolor:<?=get_sub_field('color');?>;"><span><?=get_sub_field('facult');?></span></div>
            </div>
            <div class="blogproff__title"><?=get_sub_field('title');?></div>
            <div class="blogproff__descr"><?=get_sub_field('descr');?></div>
          </a>
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
          <p class="accept">Нажимая "Подписаться" вы соглашаетесь на <a href="<?=get_privacy_policy_url(); ?>" target="_blank">обработку персональных данных</a></p>
        </div>
      </div>
      <aside class="blogdidjest__right">
        <img src="<?=imgs();?>/blog/diget.jpg" alt="">
      </aside>
    </div>
  </div>
</section>



<?php
get_footer('blog');
