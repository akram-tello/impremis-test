<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading   = get_field('heading');
?>

<section class="module module--faq bg-faq <?= $className ?> relative">
    <div class="wrapper"> 

        <h1 class="wrapper text-white flex items-center justify-center text-3xl font-semibold text-blue lg:text-4xl text-[20px] tracking-[4px] uppercase">     
            frequently asked question
        </h1>

        <h2 class="module--title text-white text-[32px] font-bold capitalize"><?= $heading ?></h2>
        
        <div class="faq-list border-0">
            <?php while( have_rows('faqs') ): the_row(); ?>
                <?php 
                    $question = get_sub_field('question');
                    $answer   = get_sub_field('answer');
                ?>
                <div class="faq-list__item border-0 border-b border-[#C2EEFF]">
                    <h3 class="faq-question text-[#C2EEFF] text-[20px] font-normal"><?= $question ?></h3>
                    <div class="faq-answer text-white"><?= $answer ?></div>
                </div>
            <?php endwhile ?>
        </div>

        <h3 class="text-3xl font-semibold text-blue lg:text-4xl text-[20px] tracking-[4px] uppercase">
            View All FAQ --->
        </h3>

    </div>
</section>



