<?php

/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>
<section class="container-fluid header-page my-auto" style="background: url('<?php the_field('background_header'); ?>">
	<div class="header-overlay">
		<div class="mx-15">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
			}
			?>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class=" page_team container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row no-gutters justify-content-center">
			<div class="col-12 col-lg-10 title">
				<h2><?php the_field('sous_titre_h2'); ?></h2>
				<h5><?php the_field('sous_titre_h5'); ?></h5>
			</div>
			<div class="col-12 col-lg-10 team_list_page ">
				<div class="row justify-content-center">
					<?php
					$args = array(
						'post_type' => 'experts',
						'posts_per_page' => -1,
						'orderby' => 'date',
						'order' => 'ASC'
					);
					$loop_experts = new WP_Query($args);
					if ($loop_experts->have_posts()) {
						while ($loop_experts->have_posts()) {
							$loop_experts->the_post(); ?>
							<div class="col-12 col-md-4 col-lg-4 expert">
								<?php echo the_post_thumbnail('medium'); ?>
								<div class="expert_data">
									<h6 class="text-center text-md-left" data-aos="fade-up" data-aos-duration="1500"><?php the_title(); ?></h6>
									<p class="text-center text-md-left" data-aos="fade-up" data-aos-duration="1500"><?php the_field('poste_occupe'); ?></p>
									<hr data-aos="fade-up" data-aos-duration="750">
									<ul class="link_team" data-aos="fade-left" data-aos-duration="750">
										<li><a href="mailto:<?php the_field('e-mail'); ?>"><i class="fa fa-at"></i></a></li>
										<li><a href="tel:<?php the_field('telephone'); ?>"><i class="fa fa-phone"></i></a></li>
									</ul>
								</div>
							</div>
					<?php }
						wp_reset_postdata();
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="team_accroche container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row my-auto justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="row">
					<div class="col-6 col-sm-4 col-xl-2 my-auto text-left left" data-aos="fade-right" data-aos-duration="1500">
						<h6 class="accroche_gauche"><?php the_field('texte_accroche_gauche'); ?></h6>
					</div>
					<div class="col-6 col-sm-8 col-xl-7 my-auto text-left right" data-aos="fade-right" data-aos-duration="2000">
						<p class="accroche_text"><?php the_field('contenu_texte_accroche'); ?></p>
					</div>
					<div class="col-12 col-xl-3 my-auto text-center title " data-aos="fade-left" data-aos-duration="1000">
						<button><a href="<?php the_field('lien_bouton_contact') ?>"><?php the_field('titre_bouton_contact') ?></a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
?>
