<?php

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

add_filter('body_class', 'understrap_body_classes');

if (!function_exists('understrap_body_classes')) {
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function understrap_body_classes($classes)
	{
		// Adds a class of group-blog to blogs with more than 1 published author.
		if (is_multi_author()) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if (!is_singular()) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter('body_class', 'understrap_adjust_body_class');

if (!function_exists('understrap_adjust_body_class')) {
	/**
	 * Setup body classes.
	 *
	 * @param string $classes CSS classes.
	 *
	 * @return mixed
	 */
	function understrap_adjust_body_class($classes)
	{

		foreach ($classes as $key => $value) {
			if ('tag' == $value) {
				unset($classes[$key]);
			}
		}

		return $classes;
	}
}

// Filter custom logo with correct classes.
add_filter('get_custom_logo', 'understrap_change_logo_class');

if (!function_exists('understrap_change_logo_class')) {
	/**
	 * Replaces logo CSS class.
	 *
	 * @param string $html Markup.
	 *
	 * @return mixed
	 */
	function understrap_change_logo_class($html)
	{

		$html = str_replace('class="custom-logo"', 'class="img-fluid"', $html);
		$html = str_replace('class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html);
		$html = str_replace('alt=""', 'title="Home" alt="logo"', $html);

		return $html;
	}
}

/**
 * Display navigation to next/previous post when applicable.
 */

if (!function_exists('understrap_post_nav')) {
	function understrap_post_nav()
	{
		//To return the URL of the previous page, use the following php code:
		$prevlink = get_permalink(get_adjacent_post(false, '', false));

		//To return the URL of the next page, use the following php code:
		$nextlink = get_permalink(get_adjacent_post(false, '', true));
		// Don't print empty markup if there's nowhere to navigate.
		$previous = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
		$next     = get_adjacent_post(false, '', false);

		if (!$next && !$previous) {
			return;
		}
?>
		<nav class=" navigation post-navigation">
			<h2 class="sr-only"><?php esc_html_e('Post navigation', 'understrap'); ?></h2>
			<div class="row nav-links justify-content-center">
				<?php
				if (get_previous_post_link()) { ?>
					<a href="<?php echo $prevlink; ?>">
						<div class="col-12 col-md-6 link_single text-right" id="firstmobile">
							<div class="content_single" id="left" data-aos="fade-right" data-aos-duration="2500">
								<img class="initial" src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/arrow_who.svg" alt="">
								<img class="hover" src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/arrow-who-hover.svg" alt="">

								<div class="link_container">
									<p>précédent</p>
									<div class="nav_container">
										<?php previous_post_link('<span class="nav-previous">%link</span>'); ?>

									</div>
								</div>

							</div>
						</div>
					</a>
				<?php } ?>

				<?php if (get_next_post_link()) { ?>
					<a href="<?php echo $nextlink; ?>">
						<div class="col-12 col-md-6 link_single text-left">
							<div class="content_single" id="right" data-aos="fade-left" data-aos-duration="2500">
								<div class="link_container">
									<p>suivant</p>
									<div class="nav_container">
										<?php next_post_link('<span class="nav-next">%link</span>');
										?>
									</div>
								</div>
								<img class="initial" src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/arrow_who.svg" alt="">
								<img class="hover" src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/arrow-who-hover.svg" alt="">

							</div>
						</div>
					</a>
				<?php	}
				?>
				</a><!-- .nav-links -->
		</nav><!-- .navigation -->
	<?php
	}
}

if (!function_exists('understrap_pingback')) {
	/**
	 * Add a pingback url auto-discovery header for single posts of any post type.
	 */
	function understrap_pingback()
	{
		if (is_singular() && pings_open()) {
			echo '<link rel="pingback" href="' . esc_url(get_bloginfo('pingback_url')) . '">' . "\n";
		}
	}
}
add_action('wp_head', 'understrap_pingback');

if (!function_exists('understrap_mobile_web_app_meta')) {
	/**
	 * Add mobile-web-app meta.
	 */
	function understrap_mobile_web_app_meta()
	{
		echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
		echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
		echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr(get_bloginfo('name')) . ' - ' . esc_attr(get_bloginfo('description')) . '">' . "\n";
	}
}
add_action('wp_head', 'understrap_mobile_web_app_meta');

if (!function_exists('understrap_default_body_attributes')) {
	/**
	 * Adds schema markup to the body element.
	 *
	 * @param array $atts An associative array of attributes.
	 * @return array
	 */
	function understrap_default_body_attributes($atts)
	{
		$atts['itemscope'] = '';
		$atts['itemtype']  = 'http://schema.org/WebSite';
		return $atts;
	}
}
add_filter('understrap_body_attributes', 'understrap_default_body_attributes');
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_action('wp_footer', 'tarteaucitron_services', PHP_INT_MAX);
function tarteaucitron_services()
{
	?><script>
		var tarteaucitronForceLanguage = 'fr'; /* supported: fr, en, de, es, it, pt, pl, ru */
		tarteaucitron.init({
			"hashtag": "#tarteaucitron",
			/* Automatically open the panel with the hashtag */
			"highPrivacy": false,
			/* disabling the auto consent feature on navigation? */
			"orientation": "top",
			/* the big banner should be on 'top' or 'bottom'? */
			"adblocker": false,
			/* Display a message if an adblocker is detected */
			"showAlertSmall": false,
			/* show the small banner on bottom right? */
			"cookieslist": true,
			/* Display the list of cookies installed ? */
			"removeCredit": false /* remove the credit link? */
		});

		tarteaucitron.user.analyticsUa = 'UA-XXXXXXXX-X';
		tarteaucitron.user.analyticsMore = function() {
			ga('set', 'anonymizeIp', true);
		};
		(tarteaucitron.job = tarteaucitron.job || []).push('analytics');
	</script><?php
			}
