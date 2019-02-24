<?php

	/* Template Name: Memorial */

?>

<?php get_header(); ?>

<section class="hero_image mbp_parallax" id="parallax_hero">
	<div class="hero_bg"></div>
	<div class="prx_item h1_container" data-prx_start="45" data-prx_finish="32" data-prx_center="true">
		<h1><small>Bespoke Memorials</small> <br/>In <em>loving</em> memory</h1>
	</div>
	<div class="overlay"></div>
	<img class="scroll natural animate_moveupdown" src="<?php echo get_bloginfo('template_directory'); ?>/img/mouse.png">
	<img class="scroll natural mob" src="<?php echo get_bloginfo('template_directory'); ?>/img/scrollmob.png">
	<div class="vertical_line bottom line_1">
		<div class="circle_after"></div>
    </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="mbp_section post_section  bg_lighter mbp_parallax" id="parallax_two">

	<div class="heading_group">
		<div class="fixed_mob_width">
			<p class="pre_heading">Memorials</p>
		</div>
	</div>

	<div class="fixed_mob_width no_container">
        <div class="vertical_line vl1"></div>
        
        

		<div class="container">
			<div class="row">
				<div class="col-12 col-desktop-10 push-desktop-1 ">
					<div class="the_content align_center">
                        <a class="btn btn-light" href="#">Full brochure</a>

						<h3>With the hand of our own monumental masonry department, we can create tailor–made memorials as unique as the person we’re commemorating. </h3>
					</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-desktop-2 push-desktop-1">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/page-images/memorial_05.png">
                    </div>
                    <div class="col-12 col-desktop-2">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/page-images/memorial_06.png">
                    </div>
                    <div class="col-12 col-desktop-2">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/page-images/memorial_07.png">
                    </div>
                    <div class="col-12 col-desktop-2">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/page-images/memorial_11.png">
                    </div>
                    <div class="col-12 col-desktop-2">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/page-images/memorial_12.png">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-desktop-8 push-desktop-2">
                    <p class="align_center">Traditional headstones, vases, kerb sets, plaques and boulders can be personalised with a variety of colours and materials, as well as additional inscriptions, through both hand cut or computerised engraving. </p>
                </div>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom line_1"></div>
</section>

<section class="mbp_section post_section  bg_pattern mbp_parallax" id="parallax_three">

	<div class="heading_group">
		<div class="fixed_mob_width">
            <p class="pre_heading">Erecting a memorial</p>
            <h2><em>Logistical craftsmanship</em></h2>
		</div>
	</div>

	<div class="fixed_mob_width no_container">
		<div class="container">
            <div class="row">
                <div class="col-12 col-desktop-8 push-desktop-2">
                    <p class="align_center">Our service includes giving advice on cemetery and churchyard rules and regulations that need to be adhered to when erecting any memorial in the area and completing applications to the local authorities for permission to erect a memorial.
                    Please see below some examples of headstones available, or click hereto view our full range of memorials and designs.</p>
                </div>            
            </div>

            <div class="vertical_line vl1"></div>

			<div class="row">
				<div class="col-12">
					<div class="the_content">
                        <div class="gallery">
                            <div class="gallery__holder">
                                <div class="gallery__item">
                                    <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                                </div>
                                <div class="gallery__item">
                                    <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                                </div>
                                <div class="gallery__item">
                                    <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                                </div>
                                <div class="gallery__item">
                                    <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                                </div>
                                <div class="gallery__item">
                                    <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                                </div>
                                <div class="gallery__item">
                                    <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
                </div>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom line_1"></div>
</section>

<?php include('inc/_hand_to_help.php'); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>