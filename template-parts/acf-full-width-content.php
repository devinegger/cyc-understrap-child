<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Content
 */

$heading_color = get_sub_field('heading_color');
$heading = get_sub_field('heading');
$content = get_sub_field('content');

$heading_color ? $text_class = "text-" . $heading_color : $text_class = '';


?>

<section>
    <div class="container-fluid py-3 px-2 px-md-3 px-lg-4 px-xl-5">
        <div class="row">
            <div class="col-12 text-start">
                <?php if($heading): ?>
                    <h2 class="<?= $text_class ?>"><?= $heading ?></h2>
                <?php endif; ?>
                <?= $content ?>
            </div>
        </div><!-- .row -->
    </div>
</section>