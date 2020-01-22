<?php

/**
 * The template for displaying all pages
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
include 'inc/slider.php'; ?>

<section class="vous_etes container-fluid">
	<div class="mx-15">
		<div class="row ">
			<div class="col-12 col-md-3 text-center d-block d-sm-none my-auto d-lg-block text-md-right" id="titre">
				<p>Vous êtes</p>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center my-auto text-md-right" id="admin">
				<a href="<?php the_field('lien_administrateur_de_biens'); ?>"><img src="<?php get_template_directory(); ?>wp-content/themes/Aiac-immeubles/img/aiac-home-admin.svg" alt="aiac immeubles syndic bénévoles">
					<h4>ADMINISTRATEUR DE BIENS</h4>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center my-auto text-md-left" id="syndic">
				<a href="<?php the_field('lien_syndic_benevoles'); ?>"><img src="<?php get_template_directory(); ?>wp-content/themes/Aiac-immeubles/img/aiac-home-syndic.svg" alt="aiac immeubles syndic bénévoles">
					<h4>COPROPRIÉTAIRES</h4>
				</a>
			</div>
			<div class="col-12 col-md-12 col-lg-3 text-center text-lh-left my-auto" id="contact">
				<button><a href="<?php the_field('lien_bouton_contact'); ?>">CONTACTEZ-NOUS</a></button>
			</div>
		</div>
	</div>
</section>
<section class="garantie container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 title">
				<h1>Garantir&nbsp;<span><?php the_field('titre_h1_section'); ?></span></h1>
				<hr class="d-block d-md-none">
				<h5><?php the_field('titre_h5_section'); ?></h5>
				<hr class="d-none d-md-block">
			</div>
			<div class="col-12 col-md-12 col-lg-3 big_pres">
				<?php $img = get_field('visuel_bloc_gauche'); ?>
				<img class="d-none d-md-block" src="<?php echo $img['url']; ?>" alt="<?php echo $img['description']; ?>">
				<img class="d-block d-md-none" src="<?php get_template_directory_uri(); ?>wp-content/themes/Aiac-immeubles/img/aiac-contrat-assurances_mobile.png" alt="">
			</div>
			<div class="col-12 col-md-12 col-lg-9 garanties">
				<div class="row justify-content-center justify-content-lg-start">
					<?php
					$args = array(
						'post_type' => 'garanties',
						'posts_per_page' => 5,
						'orderby' => 'date',
						'order' => 'ASC'
					);
					$loop_garantie = new WP_Query($args);
					if ($loop_garantie->have_posts()) {
						while ($loop_garantie->have_posts()) {
							$loop_garantie->the_post(); ?>
							<div class="col-12 col-md-6 col-lg-6 col-xl-4 garantie_item">
								<a href="<?php the_permalink(); ?>">
									<div class="garantie_item_container">
										<h4><?php the_title(); ?></h4>
										<img src="<?php get_template_directory_uri(); ?>wp-content/themes/Aiac-immeubles/img/arrow_who.png" alt="">
									</div>
								</a>

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
<section class="syndics container-fluid">
	<div class="mx-15">
		<div class="row justify-content-center">
			<div class="col-12 title text-center" data-aos="fade-up" data-aos-duration="1500">
				<h3>Syndics :&nbsp;<span><?php the_field('titre_h3_syndics'); ?></span></h3>
				<h5><?php the_field('titre_h5_syndics'); ?></h5>
				<hr>
			</div>
			<div class="col-12 col-md-5 col-lg-6 col-xl-5 text-center goals" data-aos="fade-right" data-aos-duration="1500">
				<div class="row justify-content-center justify-content-md-end justo">
					<div class="col-10 col-md-12 col-lg-6 col-xl-5 my-auto goals_text  order-2 order-lg-1">
						<h4><?php the_field('titre_priorite_1'); ?></h4>
						<p><?php the_field('texte_priorite_1'); ?></p>
					</div>
					<div class="col-10 col-md-12 col-lg-6 col-xl-6 goals_img order-1 order-lg-2">
						<?php
						$image = get_field('visuel_prorite_1'); ?>
						<!-- <img class="layer" src="<?php get_template_directory_uri(); ?>wp-content/themes/Aiac-immeubles/img/border_cercle.svg" alt="">
						<img class="pic" src="<?php echo $image; ?>"> -->
						<div class="pic_rounded_container">
							<?php $pic1 = get_field('visuel'); ?>
							<img src="<?php echo $image; ?>">
						</div>


					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 col-lg-6 col-xl-5 text-center goals" data-aos="fade-left" data-aos-duration="1500">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-10 col-md-12 col-lg-6 col-xl-6 goals_img order">
						<?php $image = get_field('visuel_prorite_2'); ?>
						<div class="pic_rounded_container">
							<?php $pic1 = get_field('visuel'); ?>
							<img src="<?php echo $image; ?>">
						</div>

					</div>
					<div class=" col-10 col-md-12 col-lg-6 col-xl-5 my-auto goals_text">
						<h4><?php the_field('titre_priorite_2'); ?></h4>
						<p><?php the_field('texte_priorite_2'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="qui_sommes_nous container-fluid">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 col-md-6" id="pic" data-aos="fade-right" data-aos-duration="1500">
				<?php $pic = get_field('visuel_');
				//var_dump($pic);
				?>
				<img src="<?php echo $pic['sizes']['medium_large']; ?>" alt="<?php echo $pic['description']; ?>">
			</div>
			<div class="col-12 col-md-5 title text-left my-auto" data-aos="fade-right" data-aos-duration="1500">
				<h3><?php the_field('titre_h3_immeuble'); ?></h3>
				<h5><?php the_field('titre_h5_immeuble'); ?></h5>
				<hr>
				<div style="clear:both;"></div>
				<p class="text">
					<?php the_field('texte_de_presentation'); ?>
				</p>
				<button><a href="<?php the_field('lien_bouton') ?>"><?php the_field('titre_bouton') ?></a></button>
			</div>
			<div class="border_dark_grey d-none d-lg-block"></div>
		</div>
	</div>
</section>
<section class="experts container-fluid" data-aos="fade-up" data-aos-duration="3000">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-3 text-center text-lg-right my-auto" id="intro">
				<h5><?php the_field('intitule_section'); ?></h5>
				<div style="clear:both;"></div>
				<button><a href="<?php the_field('lien_cta_equipe') ?>"><?php the_field('titre_cta_bouton_equipe') ?></a></button>
			</div>
			<div class="col-12 col-md-12 col-lg-9 team_list ">
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
							<div class="col-8 col-md-4 col-lg-3 expert">
								<?php echo the_post_thumbnail($post->ID); ?>
								<h6 class="text-center text-md-left"><?php the_title(); ?></h6>
								<p class="text-center text-md-left"><?php the_field('poste_occupe'); ?></p>

							</div>
					<?php }
						wp_reset_postdata();
					}
					?>
				</div>
			</div>
			<div class="border_grey d-none d-lg-block"></div>
		</div>
	</div>
</section>
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
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'ASC'
			);
			$loop_actu = new WP_Query($args);
			if ($loop_actu->have_posts()) {
				while ($loop_actu->have_posts()) {
					$loop_actu->the_post(); ?>
					<div class="col-12 col-md-4 col-lg-4 actualite">
						<a href="<?php the_permalink(); ?>">
							<div class="content_actualite">
								<?php echo the_post_thumbnail($post->ID); ?>
								<p class="date"><?php the_date(); ?> <img class="arrow" src="<?php get_template_directory_uri(); ?>wp-content/themes/Aiac-immeubles/img/arrow_who.png" alt="">
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
