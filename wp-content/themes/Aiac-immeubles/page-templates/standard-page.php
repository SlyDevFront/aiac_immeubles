<?php

/**
 * Template Name: Page Standard
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section class="container-fluid header-page-standard my-auto">
	<div class="header-overlay">
		<div class="mx-15">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p class="unite" id="breadcrumbs" data-aos="fade-right" data-aos-duration="750">', '</p>');
			}
			?>
		</div>
	</div>
</section>
<section class="standard-page container-fluid">
	<div class="container">
		<div class="content-standard">
			<h1><?= the_title(); ?></h1>
			<?= the_content($post->ID); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
