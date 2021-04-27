<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="max-width: 1500px; margin: auto; position: relative;"<?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<header id="navbar" class="col-12 position-fixed w-100 py-md-2 border-bottom bg-white d-flex align-items-center transition justify-content-between" id="header" style="z-index: 100; max-width: 1500px;">

	<!-- MENU -->
	<div class="col-md-4 my-nav" id="dropdown">
		<div class="col-4 icon-menu-container" style="z-index: 999;">
			<div class="icon-menu">
				<span class="icon-line"></span>
				<span class="icon-line"></span>
				<span class="icon-line"></span>
			</div>
		</div>
		<div id="menu" class="menu-container position-relative col-12 p-0">
			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'position-absolute',
						'container_id'    => '',
						'menu_class'      => 'main-menu',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 4,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
			?>
		</div>
	</div>
		<!-- LOGO -->
		<?php if ( ! has_custom_logo() ) { ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
		<?php else : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		<?php endif; ?>
		<?php
		} else {
			echo '<div class="col-4 col-md-2 text-center">';
			the_custom_logo();
			echo '</div>';
		}
		?>
		<!-- CART ICON -->
		<div class="d-flex col-4 col-lg-5">
			<div class="container-header-cart">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/carrito/" class="d-flex align-items-center mt-md-2 pr-2">
					<p class="mr-2 pt-3" style="font-size: 25px; width: 25px;">🛒</p>
					<span id="mini-cart-count"><?php echo WC()->cart->get_cart_contents_count();?></span>
				</a>

				<div class="d-none position-absolute px-4 header-cart-detail bg-gray" style="z-index: 10;">
					<?php dynamic_sidebar( 'Header Cart' ); ?>
				</div>
			</div>
		<!-- SEARCH PRODUCT -->

			<?php echo do_shortcode('[wcas-search-form]'); ?>
		</div>
	<style>footer a:hover {color: #48bb78;}</style>
	<!-- If IE 9- is used do next, otherwise the code bellow is ignored-->
    <!--[if IE]>
    <script type="text/javascript">
    alert('Este sitio no funciona apropiadamente en InternetExplorer 9 o inferior');
    </script>
    <![endif]-->
	</header>
	<div id="main-layer"></div>
	<div class="py-5"></div>

