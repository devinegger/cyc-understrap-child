<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Column Rows Image Right
 */

// get group of left column items (array)
$left_column = get_sub_field('left_column');

// grab content rows from left column group
$left_column_rows = $left_column['rows'];

// should there be a divider between the rows?
$display_divider = $left_column['display_row_divider'];

// image on right column
$right_image = create_html_image(get_sub_field('right_image'))

?>

<section class="column-row-section">
    <div class="container-fluid px-2 px-md-3 px-lg-4 px-xl-5">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="row">

                    <?php $row_num = 1; ?>
                    <?php foreach($left_column_rows as $row) : ?>

                        <?php if($row['row_image']): ?>

                            <?php $row_image = create_html_image($row['row_image'], 'row-image') ?>

                            <div class="col-12 text-end">
                                <?= $row_image ?>
                            </div>

                        <?php else: ?>

                            <?php $heading_color = $row['heading_color'];  ?>
                            <?php $heading = $row['heading'];  ?>
                            <?php $content = $row['content'];  ?>
                            <?php $button = $row['button'];  ?>
                            <?php $text_class = "text-" . $heading_color; ?>

                            <div class="col-12 py-3">
                                <?php if($heading): ?> 
                                    <h2 class="<?= $text_class ?>"><?= $heading ?></h2>
                                <?php endif; ?>
                                <p><?= $content ?></p>
                                <?php if($button): ?>
                                    <a href="<?= $button['url'] ?>" class="btn btn-primary"><?= $button['title'] ?></a>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if($row_num===1 && $display_divider) : ?>
                            <span class="divider"></span>
                        <?php endif; ?>

                        <?php $row_num++ ?>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="col-md-5 p-3 m-auto">
                <?=  $right_image ?>
            </div>
        </div><!-- .row -->
    </div>
</section>