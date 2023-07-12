<?php

$postId = isset($args['postId']) ? intval($args['postId']) : '';

$rating1 = get_field('star-1', $postId) ? intval(get_field('star-1', $postId)) : 0;
$rating2 = get_field('star-2', $postId) ? intval(get_field('star-2', $postId)) : 0;
$rating3 = get_field('star-3', $postId) ? intval(get_field('star-3', $postId)) : 0;
$rating4 = get_field('star-4', $postId) ? intval(get_field('star-4', $postId)) : 0;
$rating5 = get_field('star-5', $postId) ? intval(get_field('star-5', $postId)) : 0;

$summ = $rating1 + $rating2 + $rating3 + $rating4 + $rating5;
if ($summ == 0) {
  $totalRating = 0;
} else {
  $totalRating = (($rating1 * 1) + ($rating2 * 2) + ($rating3 * 3) + ($rating4 * 4) + ($rating5 * 5)) / $summ;
}

$isIRated = isset($_COOKIE['rate_post_' . $postId]) ? intval($_COOKIE['rate_post_' . $postId]) : null;

?>
<fieldset class="rating" <?=$isIRated ? "disabled" : ''; ?>>
  <legend class="rating__caption"><?=$isIRated ? "Ваша оценка: $isIRated" : 'Оцените статью'; ?></legend>
  <div class="rating__group">
    <input class="rating__star" type="radio" name="health" value="1" aria-label="Ужасно" checked>
    <input class="rating__star" type="radio" name="health" value="2" aria-label="Сносно" <?= $totalRating > 1.5 ? "checked" : ""; ?>>
    <input class="rating__star" type="radio" name="health" value="3" aria-label="Нормально" <?= $totalRating > 2.5 ? "checked" : ""; ?>>
    <input class="rating__star" type="radio" name="health" value="4" aria-label="Хорошо" <?= $totalRating > 3.5 ? "checked" : ""; ?>>
    <input class="rating__star" type="radio" name="health" value="5" aria-label="Отлично" <?= $totalRating > 4.5 ? "checked" : ""; ?>>
  </div>
</fieldset>
<?php if ($totalRating) : ?>
  <div class="postfooter__rate"><b><?= number_format($totalRating, 1, ',', ''); ?></b> из 5</div>
  <i class="idot"></i>
  <div class="postfooter__counter"><?= $summ; ?> голосов</div>
<?php endif; ?>
