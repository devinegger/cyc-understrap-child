<?php 

/** 
 * Template Part for displaying ACF Flexible Content - Page Section - Full Width Video
 */



$heading_color = get_sub_field('heading_color');
$heading = get_sub_field('heading');
$youtube_url = get_sub_field('youtube_url');

// grab just the code at the end of the url
// 8 is the offset for strpos because of the http:// at the beginning of the url
$video_code = substr($youtube_url,strpos($youtube_url,'/',8)+1);


$heading_color ? $text_class = "text-" . $heading_color : $text_class = '';


?>

<section>
    <div class="container-fluid py-3 px-2 px-md-3 px-lg-4 px-xl-5">
        <div class="row">
            <div class="col-12 text-start">
                <?php if($heading): ?>
                    <h2 class="<?= $text_class ?>"><?= $heading ?></h2>
                <?php endif; ?>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/<?= $video_code ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- .row -->
    </div>
</section>


