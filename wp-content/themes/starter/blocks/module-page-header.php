<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('intro_text');
    $cta = get_field('cta');
    $background = get_field('background');
    $alignment = get_field('alignment');
?>

<div class="module module--page-header <?= $className ?>" style="height: 50vh;">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
        <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>
</div>

<section class="wrapper module module--page-header px-6 mx-auto">
    <div class="items-center lg:flex">
        <div class="w-full lg:w-full <?= $alignment['vertical'] ?>">
            <div class="lg:max-w-lg mw-50<?= $alignment['horizontal'] ?>">
                <h1 class="font-semibold hero-heading"><?= $heading ?></h1>
                <p class="mt-3 hero-content"><?= $content ?></p>
                <?php if( !empty( $cta ) ): ?>
                <a href="<?= $cta['url'] ?>" style="background: #00A8E8; color: #FFFFFF; text-align: center; letter-spacing: 3.6px; font-size: 22px; text-transform: uppercase;" class="w-full px-5 py-2 mt-6 text-sm tracking-wider transition-colors duration-300 transform lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500"><?= $cta['title'] ?></a>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
