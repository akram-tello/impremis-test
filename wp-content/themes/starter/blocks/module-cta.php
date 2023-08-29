<?php 
    // Get block's custom class if any
    $className = !empty($block['className']) ? $block['className'] : null;
    // Get fields from ACF
    $cta_title = get_field('cta_title');
    $cta_description = get_field('cta_description');
    $cta_button_text = get_field('cta_button_text');
    $cta_button_link = get_field('cta_button_link');
?>

<!-- i need to add cta section -->
<section class="cta-section">
    <div class="wrapper">
    <h2 class="module--title" style="color: red;"><?= $cta_title ?></h2>
        <div class="cta-content">
            <h1><?php echo $cta_title; ?></h1>
            <p><?php echo $cta_description; ?></p>
            <a href="<?php echo $cta_button_link; ?>" class="btn btn-primary"><?php echo $cta_button_text; ?></a>
        </div>
    </div>
</section>
