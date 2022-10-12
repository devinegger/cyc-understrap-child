<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Left Right Image Content
 */

$image = create_html_image(get_sub_field('image'));

$heading_color = get_sub_field('heading_color');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$button = get_sub_field('button');

$heading_color ? $text_class = "text-" . $heading_color : $text_class = '';
?>

<section class="left-right-image-content">
    <div class="container-fluid py-2 py-lg-3 px-2 px-md-3 px-lg-4 px-xl-5">
        <div class="row">
            <div class="col-md-6 mb-2 mb-lg-0">
                <?= $image ?>
            </div>
            <div class="col-md-6 text-start m-auto">
                <?php if($heading): ?>
                    <h2 class="<?= $text_class ?>"><?= $heading ?></h2>
                <?php endif; ?>
                <p><?= $content ?></p>
                <?php if($button): ?>
                    <a href="<?= $button['url'] ?>" class="btn btn-primary"><?= $button['title'] ?></a>
                <?php endif; ?>
            </div>
        </div><!-- .row -->
    </div>
</section>