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

$social_icon_links = get_field('social_icon_links', 'option');

$icon_links = $social_icon_links['icon_links'];

$connect_with_us = get_field('connect_with_us', 'option');

$contact_us = get_field('contact_us', 'option');
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<section class="bg-info text-white p-0 mt-1" id="wrapper-footer">

	<footer class="site-footer" id="colophon">

		<div class="container-fluid px-md-3 px-lg-4 px-xl-5 py-3">

			<div class="row">

				<div class="col-md-3">
					<img class="footer-logo" src="/wp-content/uploads/2022/08/CYC-LOGO-MED-WHITE.png" alt="CYC Logo">
				</div><!--col end -->
				<div class="col-md-3">
					<h4>Connect with Us</h4>
					<p><?=  $connect_with_us ?></p>
				</div><!--col end -->
				<div class="col-md-3">
					<h4>Contact Us</h4>
					<p><?=  $contact_us ?></p>
				</div><!--col end -->
				<div class="col-md-3">
					<h4>Follow Us</h4>	
					<div class="social flex flex-row text-info ">
						<?php foreach($icon_links as $icon_link) : ?>
							<?php $icon_arr = $icon_link['icon']; ?>

							<?php $icon_ID = $icon_arr['ID']; ?>
							<?php $icon_url = $icon_arr['url']; ?>
							<?php $icon_alt = $icon_alt['alt']; ?>
							<?php $icon = wp_get_attachment_image( $icon_ID, 'full', array('src' => $icon_url, 'alt' => $icon_alt ) ); ?>
							<?php $link = $icon_link['link']; ?>
							<a href="<?= $link ?>"> <?= $icon ?></a>

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

