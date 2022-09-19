<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Sub Section Detail with Image
 */


$column_left_group = get_sub_field('column_left');
$left_repeater = $column_left_group['left_content_group_repeater'];

$column_right_group = get_sub_field('column_right');
$right_repeater = $column_right_group['right_content_group_repeater']

?>

<section class="two-column-content-group">
    <div class="container-fluid py-2 px-2 px-md-3 px-lg-4 px-xl-5">
        <div class="row">
            <div class="col-md-6">
                <?php foreach($left_repeater as $left_content_group): ?>
                    <div class="mb-4">
                        <?php $heading = $left_content_group['group_heading']; ?> 
                        <?php $heading_color = $left_content_group['group_heading_color']; ?>
                        <?php $content_repeater = $left_content_group['section_repeater']; ?>
                        <h3 class="text-<?= $heading_color ?>"><?= $heading ?></h3>
                        <?php foreach($content_repeater as $content): ?>
                            <div class="content-section heading-<?= $heading_color ?>">
                                <?= $content['left_content_section'] ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
                <?php foreach($right_repeater as $right_content_group): ?>
                    <div class="mb-4">
                        <?php $heading = $right_content_group['group_heading']; ?> 
                        <?php $heading_color = $right_content_group['group_heading_color']; ?>
                        <?php $content_repeater = $right_content_group['section_repeater']; ?>
                        <h3 class="text-<?= $heading_color ?>"><?= $heading ?></h3>
                        <?php foreach($content_repeater as $content): ?>
                            <div class="content-section heading-<?= $heading_color ?>">
                                <?= $content['right_content_section'] ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div><!-- .row -->
    </div>
</section>