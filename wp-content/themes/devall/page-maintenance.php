<?php

	/* Template Name: Maintenace and Repairs */

?>

<?php get_header(); ?>

<section class="hero_image mbp_parallax" id="parallax_hero">
	<div class="hero_bg"></div>
	<div class="prx_item h1_container" data-prx_start="45" data-prx_finish="32" data-prx_center="true">
		<p class="preHeader">Memorial</p>
		<h1>Maintenance <em>&amp;</em> Repairs</h1>
	</div>
	<div class="overlay"></div>
	<img class="scroll natural animate_moveupdown" src="<?php echo get_bloginfo('template_directory'); ?>/img/mouse.png">
	<img class="scroll natural mob" src="<?php echo get_bloginfo('template_directory'); ?>/img/scrollmob.png">
	<div class="vertical_line bottom line_1"></div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="mbp_section post_section centered_big_simple bg_pattern">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
				<a href="<?php home_url(); ?>/contact" class="btn">Contact Us</a>
			</div>
		</div>
	</div>
	<div class="vertical_line vl2 bottom"></div>
</section>

<?php include('inc/_hand_to_help.php'); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>