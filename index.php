<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<div class="wrapper p-0" id="index-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main" id="main">
				<!-- thin block -->
				<div class="bg-accent text-center p-2 mb-4 mb-md-0">
					<h4 class="text-white text-sm">Juguetes de moda, lencería de calidad, aceites y cremas que estimularán tus sentidos.<br>
						<strong>Nuestro surtido contiene más 20,000 artículos</strong>
					</h4>
				</div>

				<!-- splide slider -->
				<div class="splide w-100" data-splide='{"type":"loop"}' style="">
					<div class="splide__track">
						<ul class="splide__list">
							<?php dynamic_sidebar('Slider'); ?>
						</ul>
					</div>
				</div>
				<!-- end slider -->

				<!-- thin block -->
				<div class="bg-dark py-2 mt-4">
					<h2 class="text-white text-center text-bold">Entregas 100% discretas, sin distintivos, en 24h</h2>
				</div>


				<!-- cagories blocks -->
				<div class="categories row d-flex justify-content-around align-items-center">
					<?php dynamic_sidebar('Home Category'); ?>
				</div>

				<!-- thin block -->
				<div class="bg-primary py-2 mt-5 text-center">
					<h2 class="text-white text-bold p-0">Envíos a España en 24h</h2>
					<p class="text-white">(Envíos gratis a partir de 100 €)</p>
				</div>

				<!-- woocommerce slider -->
				<?php echo do_shortcode("[wcps id='61']"); ?>

				<!-- thin block -->
				<div class="bg-secondary p-2 mt-5 text-center">
					<h2 class="text-white text-bold">Puedes seguirnos en Instagram y Facebook:</h2>

					<a href="https://www.instagram.com/ydepostrelaguinda/"><img class="alignnone wp-image-63557" src="https://ydepostrelaguinda.com/wp-content/uploads/2021/04/instagram-logo.png" alt="" width="50" height="50" /></a> <a href="https://www.facebook.com/"><img class="alignnone wp-image-63558" src="https://ydepostrelaguinda.com/wp-content/uploads/2021/04/facebook-logo.png" alt="" width="50" height="50" /></a>
				</div>

				<!-- last blocks -->
				<div class="row d-flex justify-content-around py-4">
					<?php dynamic_sidebar('Last Blocks Home'); ?>
				</div>
				<h2 class="text-center mb-4">
					Lo que nuestros clientes opinan:
				</h2>
				<div class="col-12 col-md-10 mx-auto p-0 mb-5">
					<?php echo do_shortcode('[testimonial_view id="1"]') ?>
				</div>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		new Splide('.splide', {
			type: 'loop',
			perPage: 1,
			autoplay: true,
		}).mount();
	});
</script>
<?php
get_footer();
