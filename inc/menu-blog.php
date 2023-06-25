<div class="hystmodal" id="menuBlogModal" aria-hidden="false">
  <div class="hystmodal__window menublog" role="dialog" aria-modal="true">

    <?php

      get_template_part('inc/menu-blog-menu');

      $catlist = get_terms([
        'hide_empty' => false,
        'taxonomy' => 'category',
      ]);
    ?>

    <div class="menublogcontent container container--1300">
      <section class="menublogcats">
        <h3 class="menublog__label">Редакции</h3>
        <div class="menublogcats__list">
          <a href="/blog/" class="menublogcats__tag is-active">Все</a>
          <?php foreach ($catlist as $key => $cat) : ?>
            <a href="<?= get_term_link($cat->term_id); ?>" class="menublogcats__tag">
              <?= $cat->name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </section>
      <section class="menucourses">
        <h3 class="menublog__label">Онлайн-курсы</h3>
        <div class="menucourses__grid">
        <?php while (have_rows('proff-slider', 14)) : the_row(); ?>
          <a href="<?=get_sub_field('link'); ?>" class="menucourses__item flexi">
            <img src="<?=get_sub_field('img-small'); ?>" alt="" class="menucourses__icon">
            <span><?=get_sub_field('title'); ?></span>
          </a>
        <?php endwhile; ?>
        </div>
      </section>
      <a href="/" class="menubloglink">На главную Talentsy</a>

      <footer class="menublogfoot">
        <a href="/blog/">Журнал</a>
        <a href="/">О Talentsy</a>
        <a href="tel:88007753768">8 800 775 37 68</a>
        <a href="#" class="blogheader__login">Вход</a>
      </footer>
    </div>

  </div>
</div>



<div class="hystmodal" id="menuSearchModal" aria-hidden="false">
  <div class="hystmodal__window menublog" role="dialog" aria-modal="true">

  <?php get_template_part('inc/menu-blog-menu'); ?>

  <div class="container container--1300 blogcategory">
    <div class="blogcategory__search">
      <?=get_search_form(); ?>
    </div>
  </div>

  </div>
</div>
