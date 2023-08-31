<?php 
 $className = !empty($block['className']) ? $block['className'] : null;
 $heading = get_field('heading');
 $text_1 = get_field('text_1');
 $text_2 = get_field('text_2');

?>

<section class="module module--story py-12 flex items-center justify-center bg-story <?= $className ?>">
  <div class="wrapper mx-auto max-w-[43rem] col-start-2 col-end-12 lg:col-start-2 lg:col-end-11">
    <div class="text-center">
        <h1 class="mt-8 pb-3 text-[#C2EEFF] text-[20px] leading-[24px] tracking-[4px] font-semibold uppercase"><?= $heading ?></h1>
        <p class="text-lg font-light text-white text-[16px] leading-[22px] mb-5"><?= $text_1 ?></p>
        <p class="text-lg text-white font-light text-[16px] leading-[22px] mb-8"><?= $text_2 ?></p>
    </div>
  </div>
</section>


