<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Big Heading
 */

$divider_top = get_sub_field('divider_top');
$big_heading = get_sub_field('heading');
$divider_bottom = get_sub_field('divider_bottom');

?>

<div class="container-fluid py-3 px-2 px-md-3 px-lg-4 px-xl-5">
    <?php if($divider_top): ?>
        <span class="divider"></span>
    <?php endif; ?>
    <h2 class="text-primary text-uppercase text-center font-hepta my-4 fs-1"><?= $big_heading ?></h2>
    <?php if($divider_bottom): ?>
        <span class="divider"></span>
    <?php endif; ?>
</div>
