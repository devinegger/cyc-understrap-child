<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Logos Grid
 */

$logo_rows = get_sub_field('logo_rows');
?>

<section class="logos-grid">
    <div class="container-fluid py-1 px-2 px-md-3 px-lg-4 px-xl-5">
        <?php foreach($logo_rows as $logo_row): ?>
            <?php $logos = $logo_row['logos']; ?>

            <div class="row justify-content-center align-items-center">
                <?php foreach($logos as $logo): ?>
                    <?php $logo_image = create_html_image($logo['logo'], 'w-75'); ?>

                    <div class="col-md-3 p-2 text-center">
                        <?= $logo_image ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>