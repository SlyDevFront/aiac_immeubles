<?php

/**
 * Template Name: Blog listing
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<section class="container-fluid header-page my-auto" style="background: url('<?php the_field('background_titre', get_option('page_for_posts')); ?>');">
	<div class="header-overlay">
		<div class="mx-15">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
			}
			?>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<h1 class="page-title text-center text-lg-left">Actualités</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="actu actu_list col-lg-10 container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="mx-15">

		<div class="my-10 card-columns">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$loop_actu = new WP_Query($args);
			if ($loop_actu->have_posts()) {
				while ($loop_actu->have_posts()) {
					$loop_actu->the_post(); ?>
					<div class="card " data-aos="fade-up" data-aos-duration="1000">
						<a href="<?php the_permalink(); ?>">
							<div class="content_actualite">

								<?php
								$video = get_field('video_header');
								if (!$video) {
									echo the_post_thumbnail($post->ID);
								} else {
									the_field('video_header');
								} ?>
								<p class="date"> <?php echo get_the_date(); ?> <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/arrow_who.svg" alt="">
								</p>

								<h3 class="text-left  card-title"><?php the_title(); ?></h3>
								<p class="card-text"><?php the_excerpt(); ?></p>
							</div>
						</a>

					</div>
			<?php }
				wp_reset_postdata();
			}
			?>
		</div>
		<!-- <div class="row justify-content-center">
			<button><a href="/actualites">Plus d'actualités</a></button>
		</div> -->
	</div>
</section>
<?php get_footer();
