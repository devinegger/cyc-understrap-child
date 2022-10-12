<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Gradient
 */

$uppercase = get_sub_field('uppercase');
$font_size = get_sub_field('font_size');
$font_family = get_sub_field('font_family');
$content = get_sub_field('content');
$citation = get_sub_field('citation');
$button = get_sub_field('button');

$uppercase ? $transform_class = 'text-uppercase' : $transform_class="";
$font_class = "font-".$font_family;

$column_class = "col-12";

$font_size['label'] === 'Small' ? $column_class .= " col-lg-8" : $column_class .= " col-lg-10";
?>

<section class="full-width-gradient bg-gradient">
    <div class="container-fluid py-3 py-lg-5 px-2 px-md-3 px-lg-4 px-xl-5 text-center text-white <?= $font_class ?> <?= $font_size['value'] ?>">
        <div class="row justify-content-center">
            <div class="<?= $column_class ?>">
                <p class="<?= $transform_class ?>"><?= $content ?></p>
                <?php if($citation) : ?>
                    <small class="font-cabin"><?= $citation ?></small>
                <?php endif; ?>
                <?php if($button) : ?>
                    <a href="<?= $button['url'] ?>" class="btn btn-white"><?= $button['title'] ?></a>
                <?php endif; ?>
            </div>
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</section>
