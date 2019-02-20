<?php

	/* Template Name: Berevement */

?>

<?php get_header(); ?>

<section class="hero_image mbp_parallax" id="parallax_hero">
	<div class="hero_bg"></div>
	<div class="prx_item h1_container" data-prx_start="45" data-prx_finish="32" data-prx_center="true">
		<p class="preHeader">Berevement Support</p>
		<h1>A <em>Listening</em> Ear</h1>
	</div>
	<div class="overlay"></div>
	<img class="scroll natural animate_moveupdown" src="<?php echo get_bloginfo('template_directory'); ?>/img/mouse.png">
	<img class="scroll natural mob" src="<?php echo get_bloginfo('template_directory'); ?>/img/scrollmob.png">
	<div class="vertical_line bottom line_1"></div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="mbp_section post_section page_section-four mbp_parallax bg_pattern">
	<div class="container">
		<div class="row">
			<div class="col-12 col-tablet-6">
				<p class="pre-heading">Discover More</p>
				<p class="text_big">
					Everyone has their own, very personal way of dealing with grief and often having someone to talk through your feelings can be of great benefit. 
				</p>
				<p>
					For this reason, we offer a unique service through our bereavement support carer, Heather Bonsall. 
				</p>
				<p>
					Heather’s role is to lend a listening ear to bereaved families and offer support and guidance following the funeral. By sharing and listening our hope is to offer understanding and reassurance that will assist individuals in their own grief at a sad and difficult time.
				</p>
			</div>
			<div class="col-12 col-tablet-6">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/placeholder1.png" />
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