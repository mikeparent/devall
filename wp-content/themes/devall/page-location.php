<?php

	/* Template Name: Location */

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/_hero') ?>

<section class="mbp_section post_section  bg_pattern mbp_parallax" id="parallax_two">

	<div class="heading_group">
		<div class="fixed_mob_width">
			<p class="pre_heading">Devall & Son <?php the_title(); ?> Branch</p>
		</div>
	</div>

	<div class="fixed_mob_width no_container">
		<div class="vertical_line vl1"></div>
		<div class="container">
			<div class="row">
				
                <div class="col-12 col-desktop-7">
                <?php if( have_rows('gallery') ): 
                    while( have_rows('gallery') ): the_row(); ?>
                    <?php get_template_part('inc/_gallery'); ?>
                <?php endwhile; endif; ?>
                </div>

                <div class="col-12 col-desktop-5 ">
					<div class="the_content">
                        <?php the_content(); ?>

                        <?php if( have_rows('contact_details') ): while( have_rows('contact_details') ): the_row(); ?>
                            <div class="contact-details">
                                <p><?php the_sub_field('contact_address') ?></p>
                                <p><strong><?php the_sub_field('contact_number') ?> | <a href="mailto:<?php the_sub_field('contact_email_address') ?>"><?php the_sub_field('contact_email_address') ?></a></strong></p>
                            </div>
                        <?php endwhile; endif; ?>

                        <div class="form">
                            <h3>Make an Enquiry</h3>
                            
                            <form>
                                <div class="form__item">
                                    <input type="text" id="full_name" required>
                                    <label>Full name *</label>
                                </div>

                                <div class="form__item">
                                    <input type="tel" id="contact_number" required>
                                    <label>Contact Number *</label>
                                </div>

                                <div class="form__item">
                                    <input type="text" id="your_address" required>
                                    <label>Address</label>
                                </div>

                                <div class="form__item">
                                    <textarea id="your_message" required></textarea>
                                    <label>Message *</label>
                                </div>
                                
                                <input type="submit" value="Submit enquiry" class="btn">

                            </form>
                        </div>
					</div>
                </div>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom line_1"></div>
</section>

<?php if( have_rows('location_coords') ): 
 while( have_rows('location_coords') ): the_row(); ?>
    <section class="mbp_section post_section map">
        <div class="vertical_line top full-height"></div>
        
        <?php get_template_part('inc/_map') ?>

        <div class="vertical_line line_1 bottom"></div>

    </section>
<?php endwhile; endif; ?>


<?php include('inc/_our_locations.php'); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>