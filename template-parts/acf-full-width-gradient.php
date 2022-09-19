<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Gradient
 */

// content

$uppercase = get_sub_field('uppercase');
$font_size = get_sub_field('font_size');
$font_family = get_sub_field('font_family');
$content = get_sub_field('content');
$citation = get_sub_field('citation');
$button = get_sub_field('button');

$uppercase ? $transform_class = 'text-uppercase' : $transform_class="";
$font_class = "font-".$font_family;

?>

<section class="bg-gradient">
    <div class="container-fluid py-5 px-2 px-md-3 px-lg-4 px-xl-5 text-center text-white <?= $font_class ?> <?= $font_size ?>">
        <p class="<?= $transform_class ?>"><?= $content ?></p>
        <?php if($citation) : ?>
            <span><?= $cititation ?></span>
        <?php endif; ?>
        <?php if($button) : ?>
            <a href="<?= $button['url'] ?>" class="btn btn-white"><?= $button['title'] ?></a>
        <?php endif; ?>
    </div><!-- .container -->
</section>
