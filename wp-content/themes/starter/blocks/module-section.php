<?php 
    $className  = !empty($block['className']) ? $block['className'] : null;
    $heading    = get_field('heading');
    $content    = get_field('content');
    $text      = get_field('text');
    $alignment  = get_field('alignment');
    $media      = get_field('media');
    $background = get_field('background');
?>

<?php
$uniqueClass = $alignment === 'right' ? 'flip-bg' : '';

$mobile_image_url = wp_get_attachment_image_src($background['mobile'], 'full')[0];
$desktop_image_url = wp_get_attachment_image_src($background['desktop'], 'full')[0];
?>

<style>
.mission-bg {
  background-image: url('<?= $mobile_image_url ?>');
  background-position: right;
}

@media (min-width: 768px) {
  .mission-bg {
    background-image: url('<?= $desktop_image_url ?>');
  }
}

.flip-bg {
  background-image: url('<?= $desktop_image_url ?>');
  background-size: cover;
  transform: scaleX(-1) scaleY(-1);
}

.flip-bg > .wrapper {
  transform: scaleX(-1) scaleY(-1);
}

</style>

<section class="module module--mission-vision w-full bg-center bg-cover mission-bg <?= $uniqueClass ?> <?= $className ?>">
  <div class="wrapper py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
    <div class="text-with-media align-<?= $alignment ?>">
      <div class="text-content mr-auto place-self-center lg:col-span-7 <?= $alignment === 'right' ? 'lg:ml-8' : '' ?>">
        <h2 class="text-3xl font-semibold text-blue lg:text-4xl text-[20px] tracking-[4px] uppercase"><?= $heading ?></h2>
        <p class="text-white text-[32px] font-bold capitalize tracking-[0px] mb-6"><?= $content ?></p>
        <p class="text-white font-light mb-6"><?= $text ?></p>
      </div>
      <div class="text-media">
            <?php if( $media['type'] == 'video' ): ?>
                <video width="320" height="240" controls>
                    <source src="<?= $media['url'] ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php elseif( $media['type'] == 'image' ): ?>
                <?= image( $media['ID'], 'a4x3' ) ?>
            <?php endif ?>
      </div>
    </div>
  </div>
</section>
