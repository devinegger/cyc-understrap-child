<?php 

/** 
 * Template part for displaying the page title
 */

$title_image = create_html_image(get_field('title_image'), 'title-image img-fluid');
$sub_title = get_field('sub_title');
?>

<section id="page-title" class="bg-gradient mb-1">
    <div class="container-fluid ps-md-3 ps-lg-4 ps-xl-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-white py-3 py-lg-1 pe-3">
                <?php
                while ( have_posts() ) {
                    the_post();
                    the_title( '<h1 class="entry-title text-uppercase">', '</h1>' );
                }
                if ($sub_title) {
                    echo '<p>' . $sub_title . '</p>';
                }
                ?>
            </div>
            <div class="col-md-6 p-0">
                <?= $title_image ?>
            </div>
        </div>
    </div>
</section>