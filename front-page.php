<?php
/**
 * The template for displaying all pages
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
		
		<!-- hero section to be built in homepage options -->
		<section id="homepage-hero" class="py-1">
			<div class="container-fluid p-0">
				<div class="row g-0"> <!-- main hero row -->
					<div class="col-md-7">
						<div class="row g-0">
							<div class="col title-section">
								<div class=" d-flex bg-gradient h-100 align-items-center">
									<h1 class="text-white text-uppercase px-3">Solutions For Communites, Built By Communities</h1>
								</div>
							</div>
							<div class="col-md-auto">
								<div class="row">
									<div class="col-md-auto">
										<div class="hero-square pe-0">
											<img class="img-fluid h-100 slide-in fast" src="/wp-content/uploads/2022/09/hero-img-blue.jpg" alt="">
										</div>	
									</div>
								</div>
								<div class="row">
									<div class="col-md-auto">
										<div class="hero-square pt-0 pe-0">
											<img class="img-fluid h-100 slide-in slow" src="/wp-content/uploads/2022/09/hero-img-3.jpg" alt="">
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-end g-0">
							<div class="col bg-danger"></div>
							<div class="col-md-auto">
								<div class="row g-0">
									<div class="col-md-auto">
										<div class="hero-square py-0 pe-0">
											<img class="img-fluid  slide-in med" src="/wp-content/uploads/2022/09/hero-img-4.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="row g-0">
									<div class="col-md-auto">
										<div class="hero-square py-0 pe-0">
											<img class="img-fluid h-100 slide-in med" src="/wp-content/uploads/2022/09/hero-img-6.jpg" alt="">
										</div>
									</div>
									<div class="col-md-auto">
										<div class="hero-square py-0 pe-0">
											<img class="img-fluid h-100 slide-in slow" src="/wp-content/uploads/2022/09/hero-img-7.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="col-md-5">
						<div class="row justify-content-start g-0">
							<div class="col-md-auto" style="z-index: 9999;">
								<div class="hero-square pe-0">
									<img class="img-fluid h-100 slide-in med" src="/wp-content/uploads/2022/09/hero-img-1.jpg" alt="">
								</div>
							</div>
							<div class="col-md-auto">
								<div class="hero-square">
									<img class="img-fluid h-100 slide-in slow" src="/wp-content/uploads/2022/09/hero-img-2.jpg" alt="">
								</div>
							</div>
							<div class="col py-1">
								<div class="bg-warning h-100 w-100 slide-in fast"></div>
							</div>
						</div>

						<div class="row g-0 justify-content-start">
							<div class="col-md-auto">
								<div class="hero-square-lg pt-0">
									<img class="img-fluid h-100 slide-in fast" src="/wp-content/uploads/2022/09/hero-img-5.jpg" alt="">
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
									<img class="img-fluid h-100 slide-in fast" src="/wp-content/uploads/2022/09/hero-img-8.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end hero section -->

		<?php get_template_part('template-parts/acf','main'); ?>


	</div><!-- #content -->
</main><!-- #main -->
<?php
get_footer();
