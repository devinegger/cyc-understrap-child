<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// each column in the footer is a field in the footer options page
$social_icon_links = get_field('social_icon_links', 'option');

$icon_links = $social_icon_links['icon_links'];

$connect_with_us = get_field('connect_with_us', 'option');

$contact_us = get_field('contact_us', 'option');
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<section class="bg-info text-white p-0 mt-1" id="wrapper-footer">

	<footer class="site-footer" id="colophon">
		<h2 class="screen-reader-text">Footer</h2>

		<div class="container-fluid px-md-3 px-lg-4 px-xl-5 py-3">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<img class="footer-logo mb-2" src="/wp-content/uploads/2022/08/CYC-LOGO-MED-WHITE.png" alt="CYC Logo - Children Youth Community">
				</div><!--col end -->
				<div class="col-md-6 col-lg-3">
					<h3>Connect with Us</h3>
					<p><?=  $connect_with_us ?></p>
				</div><!--col end -->
				<div class="col-md-6 col-lg-3">
					<h3>Contact Us</h3>
					<p><?=  $contact_us ?></p>
				</div><!--col end -->
				<div class="col-md-6 col-lg-3">
					<h3>Follow Us</h3>	
					<div class="social flex flex-row text-info ">
						<?php foreach($icon_links as $icon_link) : ?>
							<?php $icon_arr = $icon_link['icon']; ?>
							<?php $icon = create_html_image($icon_arr, 'social--icon'); ?>
							<?php $link = $icon_link['link']; ?>
							<a href="<?= $link ?>" target="_blank"><?= $icon ?><span class="screen-reader-text">opens in new tab</span></a>

						<?php endforeach; ?>
					</div>
				</div><!--col end -->
			</div><!-- row end -->
		</div><!-- container end -->
	
		<div class="site-info bg-secondary">
			<div class="container text-center">
				<?php understrap_site_info(); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</section><!-- #wrapper-footer -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
</html>

