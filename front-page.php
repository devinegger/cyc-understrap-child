<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main class="site-main" id="main">
	<div id="content" tabindex="-1">
		
		<!-- display homepage hero -->
		<?php get_template_part('template-parts/homepage','hero'); ?>

		<!-- run through ACF templates added to page -->
		<?php get_template_part('template-parts/acf','main'); ?>

	</div><!-- #content -->
</main><!-- #main -->
<?php
get_footer();