<?php 
    $className  = !empty($block['className']) ? $block['className'] : null;
    $heading    = get_field('heading');
    $content    = get_field('content');
    $text       = get_field('text');
    $team_members = get_field('team_members');
?>

<section class="module module--team bg-team <?= $className ?>">
    <div class="wrapper px-6 py-10 mx-auto">
        <div class="xl:flex xl:items-center xL:-mx-4">
            <div class="xl:w-1/2 xl:mx-4">
                <h1 class="text-[#C2EEFF] text-[20px] leading-[24px] tracking-[4px] font-semibold uppercase"><?= $heading ?></h1>
                <p class="text-white text-[32px] font-bold capitalize tracking-[0px] mb-6"><?= $content ?></p>
                <p class="text-lg text-white font-light text-[16px] leading-[22px]"><?= $text ?></p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-0 xl:mx-4 xl:w-1/2 md:grid-cols-3">
            <?php if( have_rows('team_members') ): ?>
                <?php while( have_rows('team_members') ): the_row(); 
                    $image = get_sub_field('team_member_image');
                    if( $image ): 
                        $image_url = wp_get_attachment_image_src($image['ID'], 'full')[0];
                    ?>
                    <div>
                        <img decoding="async" class="object-cover aspect-square" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                    <?php else: ?>
                        <p>No image found.</p>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No team members found.</p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
