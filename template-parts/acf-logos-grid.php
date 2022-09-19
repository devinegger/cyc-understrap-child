<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Image Rows
 */

$logo_rows = get_sub_field('logo_rows');
?>

<section>
    <div class="container-fluid py-1 px-2 px-md-3 px-lg-4 px-xl-5">
        <?php foreach($logo_rows as $logo_row): ?>
            <?php $logos = $logo_row['logos']; ?>

            <div class="row justify-content-center">
                <?php foreach($logos as $logo): ?>
                    <?php $logo_image = create_html_image($logo['logo']); ?>

                    <div class="col-md-3 p-2">
                        <?= $logo_image ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>