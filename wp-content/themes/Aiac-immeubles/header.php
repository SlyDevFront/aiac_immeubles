<?php

/**
 * The header for our theme
 *
 * Displays all of the <header> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://kit.fontawesome.com/c991911575.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="container-fluid entete d-none d-sm-block">
		<div class="mx-15 ">
			<div class="row">
				<div class="col-12 col-sm-8 text-left">
					<p class="baseline ">
						<?php echo get_option('blogdescription'); ?>
					</p>
				</div>
				<div class="col-12 col-sm-4 text-right">
					<p class="link">
						<a href="http://prepaiac.eanet.fr" target="_blank" rel="noopener noreferrer">aiac Courtage</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<header class="container-fluid header">
		<div class="mx-15">
			<div class="row" id="header_menu">
				<div class="col-6 col-lg-2 col-xl-2 my-auto text-md-right text-lg-left order-2 order-lg-1" id="logo">
					<?php if (has_custom_logo()) {
						the_custom_logo();
					} ?>
				</div>
				<div class="col-6 col-lg-10 col-xl-8 order-1 order-lg-2" id="menu">
					<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
				</div>
				<div class="col-2 text-lg-right my-auto d-none d-xl-block order-md-3" id="search">
					<?php get_search_form();
					?>
				</div>
			</div>
		</div>
	</header>
