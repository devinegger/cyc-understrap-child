<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Image Rows
 */

$group_heading = get_sub_field('group_heading');
$group_heading_color = get_sub_field('group_heading_color');

$group_heading_color ? $text_class = "text-" . $group_heading_color : $text_class = '';

$image_rows = get_sub_field('image_row_repeater');


?>

<section class="image-rows">
    <div class="container-fluid py-1 p-md-3 px-2 px-lg-4 px-xl-5">

        <?php if($group_heading) : ?>

            <h2 class="<?= $text_class ?>"><?= $group_heading ?></h2>

        <?php endif; ?>

        <?php  foreach($image_rows as $image_row): ?>

            <?php $image = create_html_image($image_row['image']); ?>

            <?php $heading_color = $image_row['heading_color']; ?>
            <?php $heading = $image_row['heading']; ?>
            <?php $content = $image_row['content']; ?>
            <?php $button = $image_row['button']; ?>
            <?php $resource = $image_row['related_resource']; ?>

            <?php $heading_color ? $text_class = "text-" . $heading_color : $text_class = ''; ?>

            <div class="row py-2">
                <div class="col-md-2">
                    <?= $image ?>
                </div>
                <div class="col-md-10 text-start m-auto">
                    <?php if($heading): ?>
                        <h3 class="<?= $text_class ?> mt-2 m-md-0"><?= $heading ?></h3>
                    <?php endif; ?>
                    <p><?= $content ?></p>
                    <?php if($button): ?>
                        <a href="<?= $button['url'] ?>" class="btn btn-primary"><?= $button['title'] ?></a>
                    <?php endif; ?>
                    <?php if($resource): ?>
                        <a href="<?= $resource ?>" class="text-muted" target="_blank">Download <?= $resource ?></a>
                    <?php endif; ?>
                </div>
            </div><!-- .row -->

        <?php endforeach; ?>

    </div>
</section>