<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Content Image List
 */

$list_rows = get_sub_field('list_repeater');
?>

<section>
    <div class="container-fluid px-2 px-md-3 px-lg-4 px-xl-5">

        <?php  foreach($list_rows as $list_row): ?>

            <?php $image = create_html_image($list_row['image'], 'mx-auto d-block'); ?>

            <?php $heading_color = $list_row['heading_color']; ?>
            <?php $heading = $list_row['heading']; ?>
            <?php $content = $list_row['content']; ?>
            <?php $link = $list_row['link']; ?>
            <?php $divider = $list_row['add_divider']; ?>

            <?php $heading_color ? $text_class = "text-" . $heading_color : $text_class = ''; ?>

            <div class="row py-2">
                <div class="col-md-8 col-lg-9 text-start m-auto">
                    <h3 class="<?= $text_class ?>"><?= $heading ?></h3>
                    <p><?= $content ?></p>
                    <?php if($link): ?>
                        <a href="<?= $link['url'] ?>" class="text-primary"><?= $link['title'] ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 col-lg-3 m-auto ps-2">
                    <?= $image ?>
                </div>
            </div><!-- .row -->
            <?php if($divider): ?>
                <div class="col-md-8 col-lg-9">
                    <span class="divider"></span>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>

    </div>
</section>