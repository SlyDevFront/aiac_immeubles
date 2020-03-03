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

<section class="actu container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 title">
				<h3><?php the_field('titre_h3'); ?></h3>
				<h5><?php the_field('titre_h5'); ?></h5>
				<hr>
			</div>
		</div>
		<div class="row mx-10 justify-content-center">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'ASC'
			);
			$loop_actu = new WP_Query($args);
			if ($loop_actu->have_posts()) {
				while ($loop_actu->have_posts()) {
					$loop_actu->the_post(); ?>
					<div class="col-12 col-md-6 col-lg-4 actualite">
						<a href="<?php the_permalink(); ?>">
							<div class="content_actualite">
								<?php echo the_post_thumbnail($post->ID); ?>
								<p class="date"><?php the_date(); ?> <img class="arrow" src="<?php get_template_directory_uri(); ?>wp-content/themes/Aiac-immeubles/img/arrow_who.svg" alt="">
								</p>

								<h6 class="text-left title_actu"><?php the_title(); ?></h6>
							</div>
						</a>

					</div>
			<?php }
				wp_reset_postdata();
			}
			?>
		</div>
		<div class="row justify-content-center">
			<button><a href="/actualites">Plus d'actualités</a></button>
		</div>
	</div>
</section>
<?php get_footer();
