<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Sub Section Detail with Image
 */

$image = create_html_image(get_sub_field('image'));
$image_side = get_sub_field('image_side');
$heading_color = get_sub_field('heading_color');
$heading = get_sub_field('heading');
$content = get_sub_field('content');

$image_side === 'right' ? $order_class = "order-md-2" : $order_class = "";

$heading_color ? $text_class = "text-" . $heading_color : $text_class = "";

?>

<section class="sub-section-detail">
    <div class="container-fluid px-2 px-md-3 px-lg-4 px-xl-5">
        <div class="row">
            <div class="col-md-4 <?= $order_class ?> m-auto">
                <?= $image ?>
            </div>
            <div class="col-md-8 text-start">
                <?php if($heading): ?>
                    <h3 class="<?= $text_class ?>"><?= $heading ?></h3>
                <?php endif; ?>
                <div class="heading-<?= $heading_color ?>">
                    <?= $content ?>
                </div>
            </div>
        </div><!-- .row -->
    </div>
</section>