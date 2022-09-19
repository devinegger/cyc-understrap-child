<?php 

/** 
 * Template part for displaying the page title
 */


$title_image = create_html_image(get_field('title_image'), 'title-image img-fluid');

?>

<section id="page-title" class="bg-gradient">
    <div class="container-fluid ps-md-3 ps-lg-4 ps-xl-5">
        <div class="row">
            <div class="col-md-6 text-white py-3 pe-3">
                <?php
                while ( have_posts() ) {
                    the_post();
                    the_title( '<h1 class="entry-title text-uppercase">', '</h1>' );
                    the_content();
                }
                ?>
            </div>
            <div class="col-md-6">
                <?= $title_image ?>
            </div>
        </div>
    </div>
</section>