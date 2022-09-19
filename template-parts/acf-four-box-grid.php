<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Four Box Grid
 */

$heading = get_sub_field('heading');
$heading_color = get_sub_field('heading_color');

$boxes = get_sub_field('box_grid');

$button = get_sub_field('button');

// create a bootstrap text class for the heading color
$text_class = "text-" . $heading_color;

?>

<section>
    <div class="container-fluid py-3 px-2 px-md-3 px-lg-4 px-xl-5">
        <h2 class="<?= $text_class ?>"><?= $heading ?></h2>
        <div class="row row-cols-1 row-cols-md-2 g-1">
            <?php foreach($boxes as $box): ?>
                <?php $bg_class = "bg-" . $box['color'];  ?>
                
                <div class="col">
                    <div class="box text-white p-2 h-100 <?= $bg_class ?>">
                        <?= $box['content'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div><!-- .row -->
        <p class="text-center p-2">
            <a class="btn btn-primary" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
        </p>
        
    </div>
</section>