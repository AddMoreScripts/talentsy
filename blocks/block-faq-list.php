<section class="faq__section ">
    <div class="faq__wrapper">
      <? foreach(get_field('faq_list_block') as $k => $progStep): ?>
        <article class="faq__question">
          <input type="checkbox" name="questcheck" id="closummary<?=$k;?>">
          <label class="faq__hdr cloflexi" for="closummary<?=$k;?>">
            <span class="faq__title"><?= $progStep['q']; ?></span>
            <span class="faq__plus"></span>
          </label>
          <div class="faq__content">
            <div class="faq__text">
              <div class="faq__textpad"><?= $progStep['a']; ?></div>
            </div>
          </div>
        </article>
      <? endforeach; ?>
    </div>
</section>