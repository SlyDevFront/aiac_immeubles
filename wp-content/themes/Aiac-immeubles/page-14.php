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

get_header(); ?>






<section class="container-fluid header-page my-auto" style="background: url('<?php the_field('background_titre'); ?>">
	<div class="header-overlay">
		<div class="mx-15">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<h1 class="page-title text-center text-lg-left"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="presentation container-fluid">
	<div class="mx-15">
		<div class="row justify-content-center my-auto">
			<div class="col-12 col-md-4 col-lg-3 text-left" id="pic" data-aos="fade-left" data-aos-duration="1500">
				<div class="pic_rounded_container">
					<?php $pic1 = get_field('visuel'); ?>
					<img src="<?php echo $pic1; ?>">
				</div>
			</div>

			<div class="col-12 col-md-8 col-lg-7 title text-left my-auto" data-aos="fade-right" data-aos-duration="1500">
				<h2><?php the_field('titre_h2_page'); ?></h2>
				<h5><?php the_field('titre_h5'); ?></h5>
				<hr>
				<div style="clear:both;"></div>
				<p class="text">
					<?php the_field('texte_de_presentation'); ?>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="qui_sommes_nous container-fluid">
	<div class="mx-15">
		<div class="row">

			<div class="col-12 col-md-6 title text-left my-auto" data-aos="fade-right" data-aos-duration="1500">
				<h3><?php the_field('titre_h3'); ?></h3>
				<h5><?php the_field('titre_h5_immeuble'); ?></h5>
				<hr>
				<div style="clear:both;"></div>
				<p class="text">
					<?php the_field('texte_de_presentation_immeubles'); ?>
				</p>
				<button><a href="<?php the_field('lien_bouton') ?>"><?php the_field('titre_bouton') ?></a></button>
			</div>
			<div class="col-12 col-md-6 col-lg-5 text-left" id="pic" data-aos="fade-left" data-aos-duration="1500">
				<?php $pic = get_field('visuel__immeuble');
				//var_dump($pic);
				?>
				<img src="<?php echo $pic; ?>">
			</div>
			<div class="border_dark_grey d-none d-lg-block"></div>
		</div>
	</div>
</section>
<section class="contrat_accroche container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row my-auto">
			<div class="col-6 col-lg-8 text-right left">
				<p> <?php the_field('texte_de_gauche'); ?></p>
			</div>
			<div class="col-6 col-lg-2 text-left right">
				<p><?php the_field('phrase_accroche_droite'); ?></p>
			</div>
			<div class="border_grey d-none d-lg-block"></div>
		</div>
	</div>
</section>
<section class="garantie container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-3 big_pres">
				<?php $img = get_field('visuel_bloc_garanties'); ?>
				<img class="d-none d-md-block" src="<?php echo $img['url']; ?>" alt="<?php echo $img['description']; ?>">
				<img class="d-block d-md-none" src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/aiac-contrat-assurances_mobile.png" alt="">
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
										<img src="<?php bloginfo('url'); ?>/wp-content/themes/Aiac-immeubles/img/arrow_who.png" alt="">
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
<section class="accroche container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="mx-15">
		<hr class="d-none d-lg-block">
		<div class="row my-auto justify-content-center text-center">
			<?php if (have_rows('accroches')) : ?>

				<?php while (have_rows('accroches')) : the_row();
					$titre = get_sub_field('intitule');
					$content = get_sub_field('contenu'); ?>

					<div class="col-12 col-sm-4 col-md-4 col-lg-3 accroche-item">
						<h5><?php echo $titre; ?></h5>
						<p><?php echo $content; ?></p>
					</div>

			<?php endwhile;
			endif; ?>
		</div>
	</div>
</section>
<section class="chiffres-cle container-fluid" data-aos="fade-up" data-aos-duration="2000">
	<div class="mx-15">
		<div class="row my-auto text-right ">
			<?php
			$chiffre_cle_1 = get_field('chiffre_cle_1');
			$chiffre_cle_2 = get_field('chiffre_cle_2');
			$chiffre_cle_3 = get_field('chiffre_cle_3');
			$chiffre_cle_4 = get_field('chiffre_cle_4');
			$chiffre_cle_5 = get_field('chiffre_cle_5');
			$chiffre_cle_6 = get_field('chiffre_cle_6'); ?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-6 chiffre-item-big" id="chiffre-1" style="background-image: url(<?php the_field('background_chiffre_phare'); ?>">
				<div class="overlay-blue"></div>
				<div class="data-container">
					<p class="definition"><?php echo $chiffre_cle_1['definition']; ?></p>
					<p class="number"><?php echo $chiffre_cle_1['chiffres']; ?></p>
					<p class="unite"><?php echo $chiffre_cle_1['unite']; ?></p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 chiffre-item-big" id="chiffre-2">
				<div class="data-container">
					<p class="definition"><?php echo $chiffre_cle_2['definition']; ?></p>
					<p class="number"><?php echo $chiffre_cle_2['chiffres']; ?></p>
					<p class="unite"><?php echo $chiffre_cle_2['unite']; ?></p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 chiffre-item-big" id="chiffre-3">
				<div class="data-container">
					<p class="definition"><?php echo $chiffre_cle_3['definition']; ?></p>
					<p class="number"><?php echo $chiffre_cle_3['chiffres']; ?></p>
					<p class="unite"><?php echo $chiffre_cle_3['unite']; ?></p>
				</div>
			</div>


			<div class="col-12 col-md-6 col-lg-4 col-xl-4 chiffre-item-small" id="chiffre-4">
				<div class="data-container no-border">
					<div class="row">
						<div class="col-6 my-auto text-right">
							<p class="definition"><?php echo $chiffre_cle_4['definition']; ?></p>
						</div>
						<div class="col-6 text-left">
							<p class="number"><?php echo $chiffre_cle_4['chiffres']; ?></p>
							<p class="unite"><?php echo $chiffre_cle_4['unite']; ?></p>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-4 chiffre-item-small" id="chiffre-5">
				<div class="data-container no-border">
					<div class="row">
						<div class="col-6 my-auto text-right">
							<p class="definition"><?php echo $chiffre_cle_5['definition']; ?></p>
						</div>
						<div class="col-6 text-left">
							<p class="number"><?php echo $chiffre_cle_5['chiffres']; ?></p>
							<p class="unite"><?php echo $chiffre_cle_5['unite']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-4 chiffre-item-small" id="chiffre-6">
				<div class="data-container no-border">
					<div class="row">
						<div class="col-6 my-auto text-right">
							<p class="definition"><?php echo $chiffre_cle_6['definition']; ?></p>
						</div>
						<div class="col-6 text-left">
							<p class="number"><?php echo $chiffre_cle_6['chiffres']; ?></p>
							<p class="unite"><?php echo $chiffre_cle_6['unite']; ?></p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
<?php get_footer();
