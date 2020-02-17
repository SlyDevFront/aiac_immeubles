<?php

/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<?php if (get_field('image_background')) { ?>
	<section class=" blog container-fluid header-page my-auto" style="background: url('<?php the_field('image_background'); ?>">
		<div class="header-overlay">
			<div class="mx-15">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
				}
				?>
				<div class="row justify-content-center">
					<div class="col-12 ">

						<!-- <h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1> -->
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } else { ?>
	<section class="  video container-fluid header-page my-auto" style="background: #000000;">
		<div class="header-overlay">
			<div class="mx-15">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
				}
				?>
				<div class="row justify-content-center">
					<div class="container text-center ">
						<?php the_field('video_header'); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<div class="wrapper" id="single-wrapper" data-aos="fade-up" data-aos-duration="2000">

	<div class="mx-15" id="content" tabindex="-1">

		<div class="row justify-content-center">
			<div class="col-12 title text-center">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				<?php understrap_posted_on(); ?>
				<hr>
			</div>
			<main class="site-main col-12 col-lg-9" id="main">


				<?php get_template_part('loop-templates/content', 'single'); ?>
				<div class="social_row" data-aos="fade-up" data-aos-duration="1000">
					<?php if (get_field('lien_pdf')) { ?>
						<button><a href="<?php the_field('lien_pdf') ?>" target="_blank">télécharger le pdf</a></button>

					<?php } else { ?>
						<button style="visibility: hidden;"></button>
					<?php } ?>

					<div class="rs_buttons">
						<ul class="share_rs">
							<li><a href="https://www.facebook.com/sharer.php?u=<?php echo the_permalink(); ?>&t=<?php strip_tags(get_the_title()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
									<i class="fab fa-facebook-f"></i>
								</a></li>

							<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>&title=<?php strip_tags(get_the_title()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
									<i class="fab fa-linkedin-in"></i>
								</a></li>
							<li><a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php strip_tags(get_the_title()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
									<i class="fab fa-twitter"></i>
								</a></li>
							<li>
								<hr>
							</li>
							<li><span>PARTAGER</span></li>
						</ul>

					</div>

				</div>


				<?php understrap_post_nav(); ?>



			</main><!-- #main -->
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0&appId=563590154067889&autoLogAppEvents=1">
</script>
<?php get_footer();
