<?php

/**
 * Template Name: Page détail garantie
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
<section class="container-fluid header-page my-auto" style="background: url('<?php the_field('background_titre_copie'); ?>">
	<div class="header-overlay">
		<div class="mx-15">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p class="unite" id="breadcrumbs">', '</p>');
			}
			?>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="header_title_container">
						<h5 class="baseline">PAR aiac COURTAGE</h5>
						<h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="anchors_box d-none d-md-block" data-aos="fade-left" data-aos-duration="750" data-aos-delay="2500">
		<ul class="anchors">
			<?php
			if (have_rows('liens_ancres_vers_sections_bloc_flottant')) : $count = 1;
				while (have_rows('liens_ancres_vers_sections_bloc_flottant')) : the_row(); ?>
					<li id="hover_cheat<?= $count; ?>" class="my-auto">
						<a href="#section-<?= $count; ?>">
							<div class="text_container">
								<span class="anchor"><?php the_sub_field('section'); ?></span>
							</div>
							<div class="li_container">

								<div class="img_container">
									<img class="anchor_icon" src="<?php the_sub_field('icone'); ?>">
								</div>
							</div>
						</a>
					</li>
			<?php $count++;
				endwhile;
			endif; ?>
		</ul>
	</div>
</section>
<section id="section-1" class="qui_sommes_nous container-fluid">
	<div class="mx-15">
		<div class="row justify-content-center">
			<div class="col-12 col-md-12 col-lg-6 my-auto my-xl-0 order-2 order-lg-1 col-lg-4 text-center " data-aos="fade-left" data-aos-duration="1500" id="photo_center">
				<?php $pic = get_field('visuel_copie');
				//var_dump($pic);
				?>
				<img src="<?php echo $pic; ?>">
			</div>
			<div class="col-12  col-lg-6 title order-1 order-lg-2 text-left my-auto" data-aos="fade-right" data-aos-duration="1500">
				<h2><?php the_field('titre_h2_page_copie'); ?></h2>
				<h5 class="h5_detail"><?php the_field('titre_h5_copie'); ?></h5>
				<?php the_field('texte_de_presentation_copie'); ?>
			</div>
		</div>
	</div>
</section>
<section id="section-2" class="detail-garanties container-fluid">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 title text-center" data-aos="fade-up" data-aos-duration="500">
				<h2><?php the_field('titre_section_h2'); ?></h2>
				<hr>
			</div>
			<?php if (have_rows('elements_detailles')) : $count = 250; ?>

				<?php while (have_rows('elements_detailles')) : the_row();
					$titre = get_sub_field('titre_element_');
					$content = get_sub_field('contenu_element_'); ?>

					<div class="col-12 col-sm-4 col-md-6 col-lg-3 accroche-item" data-aos-delay="<?= $count; ?>" data-aos-easing="out" data-aos="fade-up" data-aos-duration="500">
						<h3><?php echo $titre; ?></h3>
						<p><?php echo $content; ?></p>
					</div>

			<?php $count  = $count + 500;
				endwhile;
			endif; ?>

		</div>
		<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500">
			<button><a href="<?php the_field('plaquette_en_telechargement_'); ?>"><?php the_field('texte_bouton'); ?></a></button>
		</div>
	</div>
</section>
<section class="team_accroche container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row my-auto justify-content-center ">
			<div class="col-12 col-lg-10">
				<div class="row my-auto justify-content-center">
					<div class="col-6 col-sm-4 col-xl-2 my-auto text-right left" data-aos="fade-right" data-aos-duration="1500">
						<h6 class="accroche_gauche"><?php the_field('titre_accroche_'); ?></h6>
					</div>
					<div class="col-6 col-sm-8 col-xl-9 my-auto text-left right" data-aos="fade-up" data-aos-duration="500">
						<p class="accroche_text"><?php the_field('contenu_accroche'); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section id="section-3" class="qui_sommes_nous qui_sommes_nous-2 container-fluid">
	<div class="mx-15">
		<div class="row justify-content-center">
			<div class="col-12 title text-center" data-aos="fade-up" data-aos-duration="1500">
				<h2><?php the_field('titre_h2_page_copie2'); ?></h2>
				<hr>
			</div>
			<div class="col-12  col-lg-5 title text-left  order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1500">
				<?php the_field('texte_de_presentation_copie2'); ?>
			</div>
			<div class="col-12 col-lg-5 order-1 order-lg-2 my-auto my-xl-0 text-center" data-aos="fade-left" data-aos-duration="1500">
				<?php $pic = get_field('visuel_copie2'); ?>
				<img src="<?php echo $pic; ?>">
			</div>
		</div>
	</div>
</section>
<section id="section-4" class="team_accroche team-accroche-2 container-fluid" data-aos="fade-up" data-aos-duration="750">
	<div class="mx-15">
		<div class="row my-auto justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="row justify-content-center">
					<div class="col-12 col-md-7 col-lg-6 my-auto text-left right " data-aos="fade-right" data-aos-duration="500">
						<h5 class="accroche_gauche"><?php the_field('titre_accroche__copie'); ?></h5>
						<p class="accroche_text"><?php the_field('contenu_accroche_copie'); ?></p>
					</div>
					<div class="col-12 col-md-5 col-lg-4 my-auto text-center title " data-aos="fade-left" data-aos-duration="1000">
						<button><a href="<?php the_field('lien_bouton') ?>"><?php the_field('titre_bouton') ?></a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="team_accroche team-accroche-pagelinked container-fluid" data-aos="fade-up" data-aos-duration="500">
	<div class="mx-15">
		<div class="row my-auto justify-content-center ">
			<div class="col-12 col-xl-10">
				<div class="row my-auto justify-content-center">
					<div class="col-12 col-sm-4 col-lg-2 my-auto text-right left" data-aos="fade-right" data-aos-duration="750">
						<h6 class="accroche_gauche">Garantir vos immeubles</h6>
					</div>
					<div class="col-12 col-sm-8 col-xl-10 my-auto text-left right" data-aos="fade-up" data-aos-duration="500">
						<?php
						$child_pages = array(
							'post_type'      => 'page',
							'posts_per_page' => -1,
							'post_parent'    => 348,
							'post__not_in' => array($post->ID),
							'order'          => 'ASC'
						);
						$get_child_pages = new WP_Query($child_pages);
						if ($get_child_pages->have_posts()) :  ?>
							<ul class="child_pages row">
								<?php while ($get_child_pages->have_posts()) : $get_child_pages->the_post(); ?>
									<li class="col-12 col-md-6 col-lg-4 col-xl-3 my-auto">
										<a href="<?php the_permalink(); ?>">
											<img src="<?php the_field('icone_page'); ?>" alt="">
											<span><?php the_title(); ?></span>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif;
						wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();
?>
