<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<section class="container-fluid footer" id="wrapper-footer">
	<div class="mx-15">
		<div class="row my-auto">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="row ">
						<div class="col-12 order-3 order-md-1 col-md-3 my-auto">
							<p class="copyright">
								© aiac Immeuble par aiac Courtage
							</p>
						</div>
						<div class="col-6 order-1 order-md-2 col-md-6 my-auto text-md-center">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/aiac-logo-footer.svg" alt="">
						</div>
						<div class="col-6 order-2 order-md-3 col-md-3 my-auto text-right icons">
							<ul class="icon">
								<li><a href="<?php the_permalink(16); ?>"><i class="fas fa-envelope"></i></a></li>
								<li><a href="https://www.linkedin.com/company/aiac" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>


				</footer><!-- #colophon -->

			</div>
			<!--col end -->
		</div><!-- row end -->
	</div><!-- wrapper end -->
</section>
<section class="container-fluid d-none d-md-block " id="footer_menu">
	<div class="mx-15">
		<div class="row ">
			<div class="col-md-12">
				<div class="col-12 col-md-12 my-auto text-center justify-content-center">
					<ul>
						<li><a href="#">Mentions légales</a></li>
						<li><a href="<?php the_permalink(3); ?>">Politique de confidentialité</a></li>
						<li><a href="https://www.eanet.fr" target="_blank">Création: EANET</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function() {
		var search = jQuery('#searchformdesktop');
		jQuery('.fa-search').click(function() {
			search.slideToggle(200);
			if (search.is(':visible')) {
				jQuery('.searchIcon ').toggleClass('fa-search fa-close');
			} else {
				// jQuery('.searchIcon ').removeClass('fa-close').addClass('fa-search');
			}
		});
		var height = jQuery('#mega-menu-item-28 > .mega-sub-menu').height();
		var height2 = jQuery('#mega-menu-item-27 > .mega-sub-menu').height();
		var height3 = jQuery('#mega-menu-item-21 > .mega-sub-menu').height();
		jQuery('#mega-menu-28-0-1').height(height);
		jQuery('#mega-menu-27-0-1').height(height2);
		jQuery('#mega-menu-21-0-1').height(height3);
		AOS.init();
		jQuery(window).scroll(function() {
			var scroll = jQuery(window).scrollTop();

			if (scroll >= 45) {
				jQuery(".header").addClass("sticky");
			} else {
				jQuery(".header").removeClass("sticky");
			}
		});
	});
</script>
<?php wp_footer(); ?>
</body>

</html>
