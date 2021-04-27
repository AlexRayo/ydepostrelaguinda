<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer class="text-center pt-2 pb-1 text-gray" style="background: #290351;">

	<?php dynamic_sidebar('Bottom Block'); ?>

	</div><!-- wrapper end -->

</footer><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
<style>

	.text-bold { font-weight: bold;}
	.node-plus-style { transform: scaleX(1.75); margin-top: 0px; font-weight: bold; float: right; font-size: 15px; transition: all 0.3s ease;}
	.node-plus-rotation { transform: rotate(-180deg) scaleX(2)}
</style>

<script>

	var menuHTMLCollection = document.getElementsByClassName('menu-item-has-children');//Main class
	var menuItems = Array.prototype.slice.call( menuHTMLCollection )//Convert to array for mapping in next step+

	var items = menuItems.map(function(item) {//retrieve all classes and map each

		//Create a plus symbol to each submenu
		var node = document.createElement("span");
		node.classList.add("node-plus-style");
		var textnode = document.createTextNode("v");
		node.appendChild(textnode);
		var link = item.children[0];//get "a" link
		link.appendChild(node);
		//
		var menuItemChild = item.children[1];//get each ul ("dropdown-menu" class)

		item.onclick = function () {
			if(window.innerWidth <= 1124){
				menuItemChild.classList.toggle("d-block");
				node.classList.toggle("node-plus-rotation");
			}
		}
		menuItemChild.onclick = function (e) {
			e.stopPropagation();//prevents chain event parent behaviour
		}
	});
//
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       //if you need load something when explorer is reading js/css
  } else if (state == 'complete') {
      setTimeout(function(){
		//
		document.getElementById('main-menu').classList.add("d-block");
      },0);
  }
}
</script>

</html>
