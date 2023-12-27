<?

$currentCategory = $args['taxObj'];
?>

<div class="subscribe__body" style="background:<?= the_field('subs__background',
    $currentCategory); ?> ">
    <div class="subscribe__main">
        <img src="<?= the_field('subs__img', $currentCategory); ?>" alt="subscribe" width="52" height="52"/>
        <div class="subscribe__text">
            <div class="subscribe__header"><?= the_field('subs__header', $currentCategory); ?></div>
            <div class="subscribe__subheader">
                <?= the_field('subs__subheader', $currentCategory); ?>
            </div>
            <?php
            $link = get_field('subs__link', $currentCategory);
            if (str_allowed($link, ['?'])) {
                $link = $link.'&';
            } else {
                $link = $link.'?';
            }
            $link = $link.'utm_source=blog&utm_term='.$post->post_name;
            ?>
            <a href="<?= $link ?>"
               class="subscribe__link"><?= the_field('subs__btntext', $currentCategory); ?>
            </a>
        </div>
    </div>
</div>

