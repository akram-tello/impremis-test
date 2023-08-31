<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('intro_text');
    $cta = get_field('cta');
    $background = get_field('background');
?>

<?php
$mobile_image_url = wp_get_attachment_image_src($background['mobile'], 'full')[0];
$desktop_image_url = wp_get_attachment_image_src($background['desktop'], 'full')[0];
?>

<style>
.custom-bg {
  background-image: url('<?= $mobile_image_url ?>');
}

@media (min-width: 768px) {
  .custom-bg {
    background-image: url('<?= $desktop_image_url ?>');
  }
}
</style>

<section class="w-full bg-center bg-cover h-[38rem] custom-bg module module--page-header <?= $className ?>">
    <div class="wrapper flex flex-col items-center w-full h-full p-4 bg-gray-900/40 lg:flex-row">
        <div class="w-full lg:w-7/12">
            <div class="flex flex-col items-start justify-center">
                <h1 class="text-3xl font-semibold text-blue lg:text-4xl text-[20px] tracking-[4px] uppercase"><?= $heading ?></h1>
                <p class="mt-2 text-white text-[32px] font-bold capitalize tracking-[0px]"><?= $content ?></p>
                <?php if( !empty( $cta ) ): ?>
                <a href="<?= $cta['url'] ?>" class="w-full px-5 py-2 mt-4 text-sm text-white capitalize transition-colors duration-300 transform bg-blue lg:w-auto focus:outline-none text-[22px] tracking-[3.6px]"><?= $cta['title'] ?></a>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
