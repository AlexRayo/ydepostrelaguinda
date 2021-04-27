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
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper p-0" id="index-wrapper">

<div class="position-relative">
<div class="overflow-hidden" style="max-height: 500px;">
<img height="200px" src="https://image.freepik.com/free-photo/sexy-attractive-girlfriend-wearing-erotic-lingerie-lying-bed-with-handsome-guy-while-he-is-touching-kissing-her-during-sensual-foreplay-morning-sexually-attracted-couple-bedroom_176420-8782.jpg" width="100%" alt=""/>
</div>
<div class="position-absolute w-100 h-100" style="bottom: 0">
    <div class="position-relative h-100 d-flex justify-content-center align-items-end mx-auto">
        <div class="px-2 px-lg-5 pb-3 pt-2 mb-lg-4" style="background: rgba(255,255,255,0.7);">											
            <h2 class="">Title here</h2>
            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt a, soluta earum explicabo porro omnis.</p>
        </div>
    </div>
    
</div>							


</div>

</div><!-- #index-wrapper -->

<?php
get_footer();
