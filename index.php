<?php
get_header();
?>

<main class="simplepage" style="overflow: hidden;">
  <div class="container">

    <div class="simplepage__header">
      <h1 class="simplepage__title druk"><?= get_the_title(); ?></h1>
    </div>

    <div class="simplepage__content textcontent">
      <?php
      /* Start the Loop */
      while (have_posts()) :
        the_post();
        the_content();
      endwhile; // End of the loop.
      ?>
    </div>
  </div>
</main>


<?php
get_footer();
