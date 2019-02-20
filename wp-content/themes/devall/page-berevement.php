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

<section class="mbp_section post_section page_section-four mbp_parallax bg_pattern" id="parallax_one">
	<div class="container fixed_mob_width relative">
		<div class="align_center">
			<p class="pre_heading">Berevement Support</p>
		</div>
		<div class="content">
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
		<div class="prx_item feat_image" data-prx_start="8" data-prx_finish="18">
			<div class="vertical_line vl3"></div>
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/bervement@2x.png" />
		</div>
	</div>
	<div class="vertical_line vl2 bottom"></div>
</section>

<section class="mbp_section post_section bg_lighter">
	<div class="vertical_line top"></div>
	<div class="container fixed_mob_width">

		<div class="flex">
			<div class="f-small f-item-2">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/person1.png" />
			</div>
			<div class="f-item f-item-1">
				<p class="pre_heading">Support Service</p>
				<h2>Arranging Support</h2>
				<p>
					If you do decided to seek out some support, Heather will make contact with you, usually by telephone following the funeral. She will offer a visit (usually about an hour) at a mutually agreed time and date. 
				</p>
				<p>
					Should you wish to take advantage of this visit, it is with the compliments of Devall & Son. The service is offered to you with a full guarantee of confidentiality and professional conduct.
				</p>
				<div class="hr_thick"></div>
			</div>
			<div class="f-item f-item-3">
				<p class="pre_heading">We Also Offer</p>
				<h2>Practiced Therapist</h2>
				<p>
					Heather worked for Devall & Son as a Funeral Director for 8 years and previous to her employment she had completed several counselling courses covering all aspects of talking and listen therapies using different models and methods of help and care. 
				</p>
				<p>
					During that period she was a volunteer for victim support and is now our bereavement support carer.
				</p>
			</div>
		</div>

	</div>
	<div class="vertical_line bottom"></div>
</section>

<section class="mbp_section post_section bg_light">
	<div class="container fixed_mob_width relative">
		<div class="row">
			<div class="col-12">
				<p class="pre_heading">We Also Offer</p>
				<h2>Group Support</h2>

				<div class="vertical_line onlymob"></div>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
				<div class="vertical_line onlymob"></div>

				<div class="content">
					<p class="pre_heading">NUNEATON CHRISTIAN FELLOWSHIP CHURCH</p>
					<p class="pre_heading">EVERY 3RD FRIDAY 10.30AM-12.30PM</p>
					<p>
						Grief can be very isolating and stressful, not to mention distressing and desperately sad. Speaking to others who are grieving can be a truly helpful way of discussing your feelings, which is why we offer guided group support sessions every 3rd Friday of the month. 
					</p>
					<p>
						It is a very informal, friendly group—currently around 22 people—of differing ages, who have all experienced loss.
					</p>
					<div class="hr_thick"></div>
					<p>
						“We have a cup of tea or coffee and a biscuit and sit and share our experiences and any issues, in a confidential and safe way. 
					</p>
					<p>
						If the group is particularly large, we may split into two halves, to make it easier for people to speak, if they are particularly emotional and need a little more time and attention and then we all get together again for another chat and a drink. This seems to work very well with the group and they like and appreciate it very much.
					</p>
					<p>
						You can stay for the whole session or just pop in for a coffee; it’s really up to you. Sometimes we go out together especially at Christmas and have a Christmas lunch. We are an extremely caring group and everyone is made most welcome
					</p>
					<p>
						My sincere sympathies to you, take care
						Heather”
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="vertical_line bottom"></div>
</section>

<?php include('inc/_testimonial_slider.php'); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>