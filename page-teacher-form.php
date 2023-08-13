<?php
/*
Template name: Шаблон: Форма Стать преподавателем
*/
get_header();
?>



<div class="comingsoonform">

  <div class="beteacher">
    <div class="comingsoonform__h1 druk js-slide-bot"><?= get_the_title(); ?></div>
    <div class="comingsoonform__sub  js-slide-bot"><?php the_content(); ?></div>

    <form class="abloutform ajaxForm" data-target="axFormRequest">
      <img src="<?= imgs(); ?>/about/tab4-leftline.svg" alt="" class="abloutform__abs">
      <img src="<?= imgs(); ?>/about/tab4-rightline.svg" alt="" class="abloutform__abs2">

      <div class="floatinp">
        <input type="text" id="inpname" name="Name" required class="floatinp__input" placeholder=" ">
        <label for="inpname">Имя</label>
      </div>

      <div class="floatinp">
        <input type="tel" id="Phone" name="Phone" required class="floatinp__input" placeholder=" ">
        <label for="Phone">Телефон</label>
      </div>

      <div class="floatinp">
        <input type="email" id="Email" name="Email" required class="floatinp__input" placeholder=" ">
        <label for="Email">Почта</label>
      </div>

      <div class="floatinp">
        <textarea name="Comment" id="Textarea"  class="floatinp__textarea" placeholder=" "></textarea>
        <label for="Textarea">Комментарий</label>
      </div>
      <div class="fileinput flexi">
        <label for="fileInput" class="fileinput__label flexi">Загрузить файл</label>
        <input type="file" name="file" id="fileInput" accept=".png, .jpg, .jpeg, .pdf, .doc, .docx">
        <div class="fileinput__info"></div>
      </div>

      <div class="abloutform__submit">
        <button class="button" type="submit">Отправить</button>
        <img src="<?=imgs(); ?>/about/tab4-buttonbg.svg" alt="">
      </div>

      <div class="abloutform__accept">Нажимая "Отправить" вы соглашаетесь на обработку <a href="<?=ldocslink('agree'); ?>" target="_blank">персональных данных</a></div>


      <input type="hidden" name="special" value="teacher">
    </form>
  </div>
</div>


<?php
  $beTeachers = [
    [
      'img' => '/be-teacher/001.jpg',
      'name' => 'Игорь Чапурин',
      'text' => 'Один из самых известных дизайнеров страны',
    ],
    [
      'img' => '/be-teacher/002.jpg',
      'name' => 'Алиса Ушакова',
      'text' => 'Сооснователь и дизайнер бренда USHATÁVA',
      'icon' => 'icon-crown.svg',
    ],
    [
      'img' => '/be-teacher/003.jpg',
      'name' => 'Леонид Гривко',
      'text' => 'Основатель мастерской по пошиву мужских костюмов IMPERO by Leonid Grivko',
    ],
    [
      'img' => '/be-teacher/004.jpg',
      'name' => 'Регина Листопад',
      'text' => 'Основатель и управляющий собственник бренда одежды Fashion.Love.Story',
    ],
    [
      'img' => '/be-teacher/005.jpg',
      'name' => 'Алеко Илиопуло',
      'text' => 'Генеральный директор компании компании "Эконика"',
    ],
    [
      'img' => '/be-teacher/006.jpg',
      'name' => 'Лина Дембикова',
      'text' => 'Шеф-стилист и ведущая программы ПЕРЕЗАГРУЗКА на ТНТ',
      'icon' => 'icon-lith.svg',
    ],
  ];
?>

<section class="teachersbox">
  <div class="container">
    <h2 class="teachersbox__title druk js-slide-bot">С нами уже работают</h2>
    <img src="<?=imgs();?>/mob-hand.svg" alt="" class="facultmentors__hand">
    <div class="grid-mob-scroll">
      <div class="teachersbox__grid">
        <?php foreach ($beTeachers as $key => $tch) : ?>
        <div class="teachersbox__item">
          <?php if(isset($tch['icon'])): ?>
            <img src="<?=imgs() . '/be-teacher/' .  $tch['icon']; ?>" alt="" class="teachersbox__icon<?=$key; ?>">
          <?php endif; ?>
          <img src="<?=imgs() .  $tch['img']; ?>" alt="" class="teachersbox__pic">
          <div class="teachersbox__name"><?=$tch['name']; ?></div>
          <div class="teachersbox__sub"><?=$tch['text']; ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <picture class="teachersbox__tapewrap">
      <source media="(min-width: 650px)" srcset="<?=imgs();?>/be-teacher/tape.svg">
      <img src="<?=imgs();?>/be-teacher/tape-mob.svg" alt="">
    </picture>
  </div>
</section>


<a class="scrollTop" href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <polyline points="18 15 12 9 6 15"></polyline>
  </svg>
</a>

<script src="<?= get_template_directory_uri(); ?>/js/custom/vk-superappkit.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/custom/vkscript.js"></script>
<?php
wp_footer(); ?>
</body>

</html>
