<?php get_header(); ?>

<section class="hero_image mbp_parallax" id="parallax_hero">
	<div class="hero_bg"></div>
	<div class="prx_item h1_container" data-prx_start="40" data-prx_finish="27">
		<h1><em>Three</em><br/>Generations</h1>
	</div>
	<h2>PERSONAL FUNERALS CREATED BY DEVALL &amp; SON</h2>
	<div class="overlay"></div>
	<img class="scroll natural animate_moveupdown" src="<?php echo get_bloginfo('template_directory'); ?>/img/mouse.png">
	<img class="scroll natural mob" src="<?php echo get_bloginfo('template_directory'); ?>/img/scrollmob.png">
	<div class="vertical_line bottom line_1"></div>
</section>

<!-- WHEN SOMEONE DIES -->

<section class="mbp_section post_section post_section page_section-one bg_pattern mbp_parallax" id="parallax_one">
	
	<?php
	    // query for the about page
	    $your_query = new WP_Query( 'pagename=what-to-do-when-someone-dies' );
	    // "loop" through query (even though it's just one page) 
	    while ( $your_query->have_posts() ) : $your_query->the_post();
	?>

	<div class="heading_group" data-prx_start="-10" data-prx_finish="20">
		<div class="fixed_mob_width">
			<p class="pre_heading">UNRIVALLED SUPPORT SINCE 1986</p>
			<h2>What to do when someone <em>dies</em></h2>
		</div>
	</div>

	<div class="container fixed_mob_width">
		<div class="row">
			<div class="col-12 col-tablet-6">
				<div class="prx_item img_left" data-prx_start="11" data-prx_finish="21">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="col-12 col-tablet-5 push-tablet-1">
				<div class="prx_item img_right" data-prx_start="11" data-prx_finish="31">
					<img class="not_mob" src="<?php echo RwdCustomField::field('secondary-image'); ?>" />
					<p><?php the_content(); ?></p>
				</div>
					<a href="<?php echo home_url(); ?>/what-to-do-when-someone-dies" class="btn">READ MORE</a>
					<div class="vertical_line only_mob"></div>
			</div>
		</div>
	</div>

	<?php
	    endwhile;
	    // reset post data (important!)
	    wp_reset_postdata();
	?>

	<div class="vertical_line bottom line_2"></div>
</section>

<!-- OUR FAMILY -->

<section class="mbp_section post_section page_section-two bg_lighter">
	<!-- <div class="vertical_line top line_3"></div> -->

	<div class="container fixed_mob_width">
		<div class="row">
			<div class="col-12">
				<div class="heading_group">
					<p class="pre_heading">OUR HERITAGE, OUR LEGACY</p>
					<h2>From Our <em>Family</em> To Yours</h2>
				</div>
				<p class="text_light intro">
					We are an independent and family run business and proud members of the ‘National Association of Funeral Directors’ and the ‘Society of Allied and Independent Funeral Directors’.
				</p>

				<!-- <svg class="svgLine">
				  <line x1="0" y1="0" x2="200" y2="200" />
				</svg> -->

				<div class="tree">
					<!-- <div class="vertical_line dark"></div> -->

					<div class="horizonal_line l2r dark"></div>
					<div class="horizonal_line r2l dark"></div>

					<div class="flex space_between">
						<div class="tree_box">
							<!-- <div class="horizonal_line dark"></div> -->
							<div class="vertical_line top dark"></div>
							<i class="icon icon-family1 medium"></i>
							<p>
								We have branches in both Nuneaton and Coventry, enabling us to cover a wide geographical area for our clients.
							</p>
						</div>
						<div class="tree_box">
							<!-- <div class="horizonal_line dark"></div> -->
							<div class="vertical_line top dark"></div>
							<i class="icon icon-family2 medium"></i>
							<p>
								Our experienced, staff will be on hand to offer advice, guidance and support throughout the difficult time of arranging your loved ones funeral.
							</p>
						</div>
						<div class="tree_box">
							<!-- <div class="horizonal_line dark"></div> -->
							<div class="vertical_line top dark"></div>
							<i class="icon icon-family3 medium"></i>
							<p>
								Our aim is to provide 
								a quality bespoke funeral service in a caring and dignified manner whilst respecting all faiths and traditions.
							</p>
						</div>
						<div class="tree_box">
							<!-- <div class="horizonal_line dark"></div> -->
							<div class="vertical_line top dark"></div>
							<i class="icon icon-family4 medium"></i>
							<p>
								We pride ourselves on an exceptional level of care, attention to detail and desire to serve every family with our time, dedication and empathy.
							</p>
						</div>
					</div>

					<div class="tree_footer">

						<div class="btn btn-light">OUR HERITAGE</div>		

						<div class="flex space_between pullup">
							<div class="tree_box">
								<div class="vertical_line dark"></div>
							<!-- 	<div class="horizonal_line dark"></div> -->
							</div>
							<div class="tree_box">
								<!-- <div class="horizonal_line dark"></div> -->
							</div>	
							<div class="tree_box">
								<!-- <div class="horizonal_line dark"></div> -->
							</div>	
							<div class="tree_box">
								<div class="vertical_line dark"></div>
							</div>
						</div>

					</div>

					<div style="position: relative;">
						<div class="horizonal_line l2r dark"></div>
						<div class="horizonal_line r2l dark"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom dark line_3"></div>
</section>

<!--  -->

<section class="mbp_section post_section page_section-three bg_light mbp_parallax" id="parallax_two">
	
	<div class="container fixed_mob_width">
		<div class="row">
			<div class="col-12 col-tablet-7 col-extra_large-8">
				<!-- <div class="prx_item img_left" data-prx_start="-20" data-prx_finish="10"> -->
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/placeholder1.png" />
				<!-- </div> -->
				<div class="vertical_line bigger dark line_4"></div>
			</div>
			<div class="col-12 col-tablet-5 col-extra_large-4">
				<div class="content_column">
					<div class="heading_group">
						<p class="pre_heading">THEIR LEGACY</p>
						<h2>Headstones <em>&amp;</em> Memorials</h2>
					</div>
					<p>
						As well as our traditional funeral services we are also qualified monumental masons and we have years of experience providing everlasting, beautiful memorials for people’s loved ones.
					</p>
					<p>
						We can provide new memorials of all shapes sizes and materials, additional inscriptions on existing headstones, renovations, cleaning and refixing to current NAMM regulations.
					</p>
					<a href="" class="btn btn-light">VIEW ALL OPTIONS</a>
					<div class="vertical_line bottom dark line_5"></div>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="mbp_section post_section page_section-four mbp_parallax bg_pattern" id="parallax_three">
	<div class="vertical_line top line_6"></div>
	<div class="align_center">
		<p class="pre_heading">PLANNING AHEAD</p>
	</div>
	<div class="container fixed_mob_width">
		<div class="row">
			<div class="col-12 flex flex_tablet">

				<div class="left">
					<h2>Pre-paid Funeral Plans</h2>
					<p class="first_p">For many people, planning their funeral has become an established way of looking at the future, just like making a Will. Discover more about our pre-paid plans and the options available to you.</p>
					<div class="vertical_line shorter only_mob"></div>
					<a href="" class="btn">VIEW ALL OPTIONS</a>
					<img class="first_image" src="<?php echo get_bloginfo('template_directory') ?>/img/placeholder2.png">
					<div class="vertical_line shorter only_mob"></div>
				</div>

				<div class="right">
					<div class="prx_item" data-prx_start="8" data-prx_finish="18">
						<img src="<?php echo get_bloginfo('template_directory') ?>/img/placeholder3.png">
					</div>
					<div class="flex flex_column space_between">
						<!-- <div class="prx_item" data-prx_start="20" data-prx_finish="10"> -->
							
							<div class="quote_block">
								<p class="quote">"More than a million people in Great Britain have taken out a funeral plan."</p>
								<p class="name">___ DANIEL DEVALL</p>
							</div>
					<!-- 	</div> -->
						<!-- <div class="prx_item" data-prx_start="70" data-prx_finish="60">
							<div class="quote_block">
								<p class="quote">"More than a million people in Great Britain have taken out a funeral plan."</p>
								<p class="name">___ DANIEL DEVALL</p>
							</div>
						</div>
 -->					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="vertical_line bottom line_7"></div>
</section>


<!-- QUOTE SLIDER -->

<?php include('inc/_testimonial_slider.php'); ?>

<!-- WHEN SOMEONE DIES -->

<section class="mbp_section post_section align_center page_section-six bg_lighter">
	<!-- <div class="vertical_line top"></div> -->

	<div class="container squeeze">
		<div class="row">
			<div class="col-12">
				<div class="heading_group">
					<p class="pre_heading">OUR HERITAGE, OUR LEGACY</p>
					<h2>Making a donation <em>&amp;</em> forthcoming funerals</h2>
				</div>
				<p class="margin_bottom">Please click view full calendar to view forthcoming funerals we are facilitating and to make an online donation.</p>
				<a href="" class="btn btn-light">VIEW FULL CALENDAR</a>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom"></div>
</section>

<?php get_footer(); ?>