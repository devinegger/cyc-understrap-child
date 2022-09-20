<?php 

/** 
 * Template part for displaying the homepage hero section
 */

// site title dynamically set in the hompage options page
$site_title = get_field('site_title', 'options');

// static hero image for phone and tablet
$static_hero_image = create_html_image(get_field('static_hero_image', 'options'), 'img-fluid');

// collention of images that make up the hero section
$dynamic_hero_collection = get_field('dynamic_hero_collection', 'options');

$hero_image_1 = create_html_image($dynamic_hero_collection['hero_image_1'], 'img-fluid h-100 slide-in med');
$hero_image_2 = create_html_image($dynamic_hero_collection['hero_image_2'], 'img-fluid h-100 slide-in slow');
$hero_image_3 = create_html_image($dynamic_hero_collection['hero_image_3'], 'img-fluid h-100 slide-in slow');
$hero_image_4 = create_html_image($dynamic_hero_collection['hero_image_4'], 'img-fluid h-100 slide-in med');
$hero_image_5 = create_html_image($dynamic_hero_collection['hero_image_5'], 'img-fluid h-100 slide-in fast');
$hero_image_6 = create_html_image($dynamic_hero_collection['hero_image_6'], 'img-fluid h-100 slide-in med');
$hero_image_7 = create_html_image($dynamic_hero_collection['hero_image_7'], 'img-fluid h-100 slide-in slow');
$hero_image_8 = create_html_image($dynamic_hero_collection['hero_image_8'], 'img-fluid h-100 slide-in fast');

?>

<section id="homepage-hero" class="pb-1">
    <div class="container-fluid p-0">
        <div class="row g-0 d-none d-lg-flex"> <!-- main hero row - desktop -->
            <div class="col-md-7">
                <div class="row g-0">
                    <div class="col title-section pt-0">
                        <div class=" d-flex bg-gradient h-100 align-items-center">
                            <h1 class="text-white text-uppercase px-3"><?= $site_title ?></h1>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="row">
                            <div class="col">
                                <div class="hero-square pe-0 pt-0">
                                    <div class="bg-info h-100 w-100 slide-in fast"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-square pt-0 pe-0">
                                    <?= $hero_image_3 ?>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end g-0">
                    <div class="col bg-danger"></div>
                    <div class="col-auto">
                        <div class="row g-0">
                            <div class="col-md-auto">
                                <div class="hero-square pt-0 pe-0">
                                    <?= $hero_image_4 ?>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto">
                                <div class="hero-square py-0 pe-0">
                                    <?= $hero_image_6 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="hero-square py-0 pe-0">
                                    <?= $hero_image_7 ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row justify-content-start g-0">
                    <div class="col-auto" style="z-index: 9999;">
                        <div class="hero-square pe-0 pt-0">
                            <?= $hero_image_1 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="hero-square pt-0">
                            <?= $hero_image_2 ?>
                        </div>
                    </div>
                    <div class="col py-1 pt-0">
                        <div class="bg-warning h-100 w-100 slide-in fast"></div>
                    </div>
                </div>

                <div class="row g-0 justify-content-start">
                    <div class="col-auto">
                        <div class="hero-square-lg pt-0">
                            <?= $hero_image_5 ?>
                        </div>
                    </div>
                    <div class="col pb-1">
                        <div class="bg-grey h-100 w-100"></div>
                    </div>
                </div>

                <div class="row justify-content-start g-0">
                    <div class="col-auto">
                        <div class="hero-square py-0 pe-0">
                            <div class="bg-primary h-100 w-100 slide-in fast"></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="hero-square"></div>
                    </div>
                    <div class="col">
                        <div class="hero-img-fit">
                            <?= $hero_image_8 ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- main hero row - desktop -->
        <div class="row d-lg-none"> <!-- static hero row - tablet/mobile -->
            <div class="col-12 p-0">
                <h1 class="screen-reader-text"><?= $site_title ?></h1>
                <?= $static_hero_image ?>
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->