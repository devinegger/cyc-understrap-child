<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Homepage Options',
		'menu_title'	=> 'Homepage',
		'parent_slug'	=> 'theme-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-options',
	));
	
}

// Shortcode to display maichimp subscribe form

function hdc_mailchimp_sub_form() {

	$output = '<!-- Begin Mailchimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
		/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
		   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
	<div id="mc_embed_signup">
		<form action="https://cycprovidence.us20.list-manage.com/subscribe/post?u=52095bef061566acfbc322480&amp;id=a2ee86f066&amp;f_id=00904fe6f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
			<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
	<div class="mc-field-group">
		<label for="mce-FNAME">First Name </label>
		<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
		<span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
	</div>
	<div class="mc-field-group">
		<label for="mce-LNAME">Last Name </label>
		<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
		<span id="mce-LNAME-HELPERTEXT" class="helper_text"></span>
	</div>
	<div class="mc-field-group">
		<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
	</label>
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
		<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
	</div>
		<div id="mce-responses" class="clear foot">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_52095bef061566acfbc322480_a2ee86f066" tabindex="-1" value=""></div>
			<div class="optionalParent">
				<div class="clear foot">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					<p class="brandingLogo"><a href="http://eepurl.com/h-I5m5" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
				</div>
			</div>
		</div>
	</form>
	</div>';
	$output .= "<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='zip';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->";

	return $output;
}

add_shortcode('mailchimp', 'hdc_mailchimp_sub_form');

/**
 * Create HTML Image from Array
 *
 * This function uses the `wp_get_attachment_image` functions and
 * generates a HTML image from an image array, also allowing for
 * additional class(es) to be supplied
 *
 * @param array $image_arr The image array
 * @param string (optional) $classes additional classes to add to the image
 * @return string $html_image an Image in html format to be used in template
 */

 function create_html_image($image_arr, $classes="") {

	// break out image array
	$image_ID = $image_arr['ID'];
	$image_url = $image_arr['url'];
	$image_alt = $image_arr['alt'];

	// create HTML image
	$image = wp_get_attachment_image( $image_ID, 'full', '', array('src' => $image_url, 'alt' => $image_alt, 'class' => $classes ) );

	return $image;
 }