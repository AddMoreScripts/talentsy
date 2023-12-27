<?php

get_header('blog');
?>


    <main class="blogpost">
        <div class="container container--1300">
            <a href="/blog/" class="blogpost__back button button--blog">
                <img src="<?= imgs(); ?>/blog/icon-slider-arrow.svg" alt="">
                <span>Назад</span>
            </a>
            <div class="blogpost__wrap flexi">
                <div class="blogpost__main">
                    <h1 class="blogpost__title"><?= get_the_title(); ?></h1>
                    <?php
                    if (get_the_excerpt()) { ?>
                        <div class="blogpost__excerpt"><?= get_the_excerpt(); ?></div>
                        <?php
                    } ?>
                    <div class="blogpost__meta flexi">
                        <div class="blogpost__cats flexi">
                            <?php
                            foreach (get_the_category() as $category) { ?>
                                <a href="<?= get_term_link($category->term_id); ?>"
                                   style="--bgcolor:<?= get_field(
                                       'color',
                                       $category
                                   ); ?>; color: <?= get_field(
                                       'textcolor',
                                       $category
                                   ) ? get_field('textcolor', $category) : 'white'; ?>">
                                    <span><?= $category->name; ?></span>
                                </a>
                                <?php
                            } ?>
                        </div>
                        <div class="blogpost__tags flexi">
                            <?php
                            foreach (get_the_tags() as $tag) { ?>
                                <a href="<?= get_term_link($tag->term_id); ?>">
                                    <span>#<?= $tag->name; ?></span>
                                </a>
                                <?php
                            } ?>
                        </div>
                        <i class="idot"></i>
                        <div class="blogpost__date"><?= get_the_date(); ?></div>
                        <!-- <span class="mobbrake"></span> -->
                        <i class="idot"></i>
                        <!-- <div class="blogpost__comments">11</div> -->
                        <!-- <i class="idot"></i> -->
                        <div
                                class="blogpost__viewed"><?= function_exists('pvc_get_post_views') ? pvc_get_post_views(get_the_ID()) : '666'; ?></div>

                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2 blogpost__share" data-curtain data-size="m" data-shape="round"
                             data-limit="0"
                             data-image="<?= get_the_post_thumbnail_url(); ?>" data-more-button-type="long"
                             data-services="vkontakte,telegram,twitter">
                        </div>
                    </div><!-- //blogpost__meta -->


                    <?php
                    if (has_post_thumbnail()) { ?>
                        <div class="blogpost__thumb">
                            <?php
                            the_post_thumbnail('large'); ?>
                        </div>
                        <?php
                    } ?>


                    <?php
                    if (get_field('top-banner')) {
                        $bannerTopId = get_field('top-banner');
                        $bnrLink = get_field('banner-link', $bannerTopId);
                        if (str_allowed($bnrLink, ['?utm_source'])) {
                            $bnrLink = explode('?', $bnrLink)[0];
                        }
                        $bnrLink = $bnrLink.'?utm_source=blog&utm_term='.$post->post_name;
                        ?>
                        <div class="postprofbanner flexi">
                            <img src="<?= get_field('banner-pic', $bannerTopId); ?>" alt="" class="postprofbanner__img">
                            <div class="postprofbanner__text"><?= get_field('banner-title', $bannerTopId); ?></div>
                            <a href="<?= $bnrLink; ?>" class="postprofbanner__link button button--blog">
                                <?= get_field('banner-button', $bannerTopId); ?>
                            </a>
                        </div>
                        <?php
                    } else {
                        /**
                         * Если баннер не выбран то получаем посты-баннеры с типом
                         * "Баннер вверху статьи" с той-же категорией что и пост и выводим их
                         */
                        if (count((array) get_the_category())) {
                            $bannersTopIds = get_posts([
                                'numberposts' => 10,
                                'post_type' => 'banner',
                                'post_status' => 'publish',
                                'tax_query' => [
                                    'relation' => 'AND',
                                    [
                                        'taxonomy' => 'category',
                                        'field' => 'id',
                                        'terms' => get_the_category()[0]->term_id,
                                    ],
                                    [
                                        'taxonomy' => 'bannertype',
                                        'field' => 'id',
                                        'terms' => 18,
                                    ],
                                ],
                            ]);
                            foreach ($bannersTopIds as $key => $bannerTopId) {
                                $bnrLink = get_field('banner-link', $bannerTopId);
                                if (str_allowed($bnrLink, ['?utm_source'])) {
                                    $bnrLink = explode('?', $bnrLink)[0];
                                }
                                $bnrLink = $bnrLink.'?utm_source=blog&utm_term='.$post->post_name;
                                ?>
                                <div class="postprofbanner flexi">
                                    <img src="<?= get_field('banner-pic', $bannerTopId); ?>" alt=""
                                         class="postprofbanner__img">
                                    <div class="postprofbanner__text"><?= get_field(
                                            'banner-title',
                                            $bannerTopId
                                        ); ?></div>
                                    <a href="<?= $bnrLink; ?>" class="postprofbanner__link button button--blog">
                                        <?= get_field('banner-button', $bannerTopId); ?>
                                    </a>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>


                    <?php
                    $headingCount = count((new ezTOC_Post(get_post()))->getHeadings());
                    if ($headingCount > 5) {
                        ?>
                        <div class="tableofcontent is-open js-toc">
                            <div class="tableofcontent__title js-toggler">Читайте в статье</div>
                            <div class="tableofcontent__box tableofcontent__minimum js-togbox">
                                <div class="tableofcontent__boxwrap">
                                    <?php
                                    echo do_shortcode('[ez-toc]'); ?>
                                    <button class="tableofcontent__button tableofcontent__close js-short">Скрыть
                                    </button>
                                </div>
                                <button class="tableofcontent__button tableofcontent__open js-longer">Показать ещё
                                </button>
                            </div>
                        </div>
                        <?php
                    } else { ?>
                        <div class="tableofcontent is-open js-toc">
                            <div class="tableofcontent__title js-toggler">Содержание статьи</div>
                            <div class="tableofcontent__box js-togbox">
                                <div class="tableofcontent__boxwrap">
                                    <?php
                                    echo do_shortcode('[ez-toc]'); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>


                    <div class="blogpost__body textcontent">

                        <?php
                        while (have_posts()) {
                            the_post(); ?>

                            <div class="blogpost__mobprepost">
                                <div class="articleauthor flexi">
                                    <img src="<?= imgs(); ?>/blog/article/user-ava.svg" alt=""
                                         class="articleauthor__ava">
                                    <div class="articleauthor__right">
                                        <div class="articleauthor__name"><?= get_the_author_meta('display_name'); ?></div>
                                        <?= get_the_author_meta('description'); ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $curpostcat = get_the_category()[0];
                            $allPostContent = get_the_content();

                            // вывод формы после +/- первой трети контента
                            if (current_user_can('administrator') || get_field('bif-onoff', $curpostcat)) {
                                $asFourParts = mb_str_split($allPostContent, (mb_strlen($allPostContent) / 4));
                                // в 1/4 может не оказаться заголовка и тогда форма нарушит вёрстку
                                if( strpos($asFourParts[1], '<h') !== false ):
                                    $targetPart = 1;
                                elseif( strpos($asFourParts[2], '<h') !== false ):
                                    $targetPart = 2;
                                endif;

                                [$firstP, $other] = explode('<h', $asFourParts[$targetPart], 2);
                                ob_start();
                                echo $firstP;
                                get_template_part('inc/blog-inline-form', null, ['taxID' => $curpostcat->term_id]);
                                echo '<h';
                                echo $other;
                                $asFourParts[$targetPart] = ob_get_clean();
                                $allPostContent = implode('', $asFourParts);
                            }

                            // вывод формы примерно в середине контента
                            if (get_field('subs_onoff', $curpostcat)) {
                                $afterHalfOfContent = mb_str_split($allPostContent, (mb_strlen($allPostContent) / 2));
                                [$firstP, $other] = explode('<h', $afterHalfOfContent[1], 2);
                                ob_start();
                                echo $firstP;
                                get_template_part('inc/subscribe', null, ['taxObj' => $curpostcat]);
                                echo '<h';
                                echo $other;
                                $afterHalfOfContent[1] = ob_get_clean();
                                $allPostContent = implode('', $afterHalfOfContent);
                            }
                            echo $allPostContent;
                        }
                        ?>
                    </div>
                    <script>
                        window.postId = <?= get_the_ID(); ?>;
                    </script>
                    <footer class="postfooter flexi">
                        <div class="js-postfooter-wrap" style="display: contents;">
                            <?php
                            get_template_part('inc/blog-post-rating', null, ['postId' => get_the_ID()]); ?>
                        </div>

                        <div class="ya-share2 blogpost__share" data-curtain data-size="m" data-shape="round"
                             data-limit="0"
                             data-image="<?= get_the_post_thumbnail_url(); ?>" data-more-button-type="long"
                             data-services="vkontakte,telegram,twitter">
                        </div>

                        <?php
                        if (0) { ?>
                            <div class="blogpost__share" data-hidewrap="sharebuttonbot" data-hideclick="yes">
                                <button class="blogpost__sharebutton button button--blog"
                                        data-hideopen="sharebuttonbot">
                                    <span>Поделиться</span>
                                    <img src="<?= imgs(); ?>/blog/article/icon-share.svg" alt="">
                                </button>
                                <ul class="blogpost__sharepop" data-hidebox="sharebuttonbot">
                                    <li>
                                        <a href="#" class="flexi">
                                            <img src="<?= imgs(); ?>/blog/article/icon-share-vk.svg" alt="">
                                            <span>ВКонтакте</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flexi">
                                            <img src="<?= imgs(); ?>/blog/article/icon-share-tg.svg" alt="">
                                            <span>Телеграм</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flexi">
                                            <img src="<?= imgs(); ?>/blog/article/icon-share-tw.svg" alt="">
                                            <span>Твиттер</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flexi">
                                            <img src="<?= imgs(); ?>/blog/article/icon-share-link.svg" alt="">
                                            <span>Копировать ссылку</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                        } ?>
                    </footer>


                    <?php
                    if (get_field('bottom-banner')) {
                        $bannerBotId = get_field('bottom-banner');

                        // ставим utm_source=blog для ссылки
                        $bnrLink = get_field('banner-link', $bannerBotId);
                        if (str_allowed($bnrLink, ['?utm_source'])) {
                            $bnrLink = explode('?', $bnrLink)[0];
                        }
                        $bnrLink = $bnrLink.'?utm_source=blog&utm_term='.$post->post_name;
                        ?>
                        <aside class="relateproffbanner flexi">
                            <div class="relateproffbanner__left">
                                <div class="relateproffbanner__title"><?= get_field(
                                        'banner-title',
                                        $bannerBotId
                                    ); ?></div>
                                <p><?= get_field('banner-text', $bannerBotId); ?></p>
                                <a href="<?= $bnrLink; ?>" class="button relateproffbanner__button">
                                    <?= get_field('banner-button', $bannerBotId); ?>
                                </a>
                            </div>
                            <div class="relateproffbanner__right">
                                <img src="<?= get_field('banner-pic', $bannerBotId); ?>" alt=""
                                     class="relateproffbanner__pic">
                            </div>
                        </aside>
                        <?php
                    } else {
                        /**
                         * Если нижний баннер не выбран то получаем посты-баннеры с типом
                         * "Баннер внизу статьи" с той-же категорией что и пост и выводим их
                         */
                        if (count((array) get_the_category())) {
                            $bannersBotIds = get_posts([
                                'numberposts' => 10,
                                'post_type' => 'banner',
                                'post_status' => 'publish',
                                'tax_query' => [
                                    'relation' => 'AND',
                                    [
                                        'taxonomy' => 'category',
                                        'field' => 'id',
                                        'terms' => get_the_category()[0]->term_id,
                                    ],
                                    [
                                        'taxonomy' => 'bannertype',
                                        'field' => 'id',
                                        'terms' => 19,
                                    ],
                                ],
                            ]);
                            foreach ($bannersBotIds as $key => $bannerBotId) {
                                $bnrLink = get_field('banner-link', $bannerBotId);
                                if (str_allowed($bnrLink, ['?utm_source'])) {
                                    $bnrLink = explode('?', $bnrLink)[0];
                                }
                                $bnrLink = $bnrLink.'?utm_source=blog&utm_term='.$post->post_name;
                                ?>
                                <aside class="relateproffbanner flexi">
                                    <div class="relateproffbanner__left">
                                        <div class="relateproffbanner__title"><?= get_field(
                                                'banner-title',
                                                $bannerBotId
                                            ); ?></div>
                                        <p><?= get_field('banner-text', $bannerBotId); ?></p>
                                        <a href="<?= $bnrLink; ?>" class="button relateproffbanner__button">
                                            <?= get_field('banner-button', $bannerBotId); ?>
                                        </a>
                                    </div>
                                    <div class="relateproffbanner__right">
                                        <img src="<?= get_field('banner-pic', $bannerBotId); ?>" alt=""
                                             class="relateproffbanner__pic">
                                    </div>
                                </aside>
                                <?php
                            }
                        }
                    } ?>

                </div>
                <aside class="blogpost__sider">
                    <div class="articleauthor flexi">
                        <img src="<?= imgs(); ?>/blog/article/user-ava.svg" alt="" class="articleauthor__ava">
                        <div class="articleauthor__right">
                            <div class="articleauthor__name"><?= get_the_author_meta('display_name'); ?></div>
                            <?= get_the_author_meta('description'); ?>
                        </div>
                    </div>

                    <?php
                    $catlist = get_terms([
                        'hide_empty' => false,
                        'taxonomy' => 'category',
                        'exclude' => 1,
                    ]);
                    ?>
                    <div class="categoriesbox">
                        <div class="categoriesbox__title">Категории</div>
                        <div class="categoriesbox__wrap">
                            <?php
                            foreach ($catlist as $key => $cat) { ?>
                                <a href="<?= get_term_link($cat->term_id); ?>"
                                   class="categoriesbox__tag button button--blog">
                                    <?= $cat->name; ?>
                                </a>
                                <?php
                            } ?>
                        </div>
                    </div>
                </aside>
            </div><!-- //blogpost__wrap -->


            <?php
            $postCats = array_map(fn($cat) => $cat->term_id, get_the_category());
            $postsRelations = get_posts([
                'numberposts' => 9,
                'post_type' => 'post',
                'category' => $postCats,
                'exclude' => get_the_ID(),
            ]);
            ?>
            <aside class="blogrelations js-relations-posts">
                <div class="blogrelations__head flexi">
                    <div class="blogrelations__title">Читайте также</div>
                    <div class="blogrelations__ctrl flexi">
                        <button class="ctrl ctrl--prev"><img src="<?= imgs(); ?>/blog/icon-slider-arrow.svg" alt="">
                        </button>
                        <button class="ctrl ctrl--next"><img src="<?= imgs(); ?>/blog/icon-slider-arrow.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="blogrelations__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($postsRelations as $key => $relPostId) { ?>
                            <div class="swiper-slide">
                                <?php
                                get_template_part('inc/post-teaser', null, ['post_id' => $relPostId]); ?>
                            </div>
                            <?php
                        } ?>
                    </div>
                </div>
            </aside>
        </div>
    </main>


    <div class="blogpost__share mobfixshare" data-hidewrap="mobshare" data-hideclick="yes">
        <button class="blogpost__sharebutton button button--blog" data-hideopen="mobshare">
            <img src="<?= imgs(); ?>/blog/article/icon-share.svg" alt="">
        </button>
        <ul class="blogpost__sharepop" data-hidebox="mobshare">
            <li>
                <a href="#" class="flexi">
                    <img src="<?= imgs(); ?>/blog/article/icon-share-vk.svg" alt="">
                    <span>ВКонтакте</span>
                </a>
            </li>
            <li>
                <a href="#" class="flexi">
                    <img src="<?= imgs(); ?>/blog/article/icon-share-tg.svg" alt="">
                    <span>Телеграм</span>
                </a>
            </li>
            <li>
                <a href="#" class="flexi">
                    <img src="<?= imgs(); ?>/blog/article/icon-share-tw.svg" alt="">
                    <span>Твиттер</span>
                </a>
            </li>
            <li>
                <a href="#" class="flexi">
                    <img src="<?= imgs(); ?>/blog/article/icon-share-link.svg" alt="">
                    <span>Копировать ссылку</span>
                </a>
            </li>
        </ul>
    </div>


<?php
get_footer();
