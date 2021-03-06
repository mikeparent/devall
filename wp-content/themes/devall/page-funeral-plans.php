<?php

	/* Template Name: Funeral Plans */

?>

<?php get_header(); ?>

<section class="hero_image mbp_parallax" id="parallax_hero">
	<div class="hero_bg"></div>
	<div class="prx_item h1_container" data-prx_start="45" data-prx_finish="32" data-prx_center="true">
		<h1><small>Pre-arranged Funeral Plans</small> <br/><em>Your wishes fulfilled</em></h1>
	</div>
	<div class="overlay"></div>
	<img class="scroll natural animate_moveupdown" src="<?php echo get_bloginfo('template_directory'); ?>/img/mouse.png">
	<img class="scroll natural mob" src="<?php echo get_bloginfo('template_directory'); ?>/img/scrollmob.png">
	<div class="vertical_line bottom line_1">
    </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="mbp_section post_section  bg_pattern mbp_parallax" id="parallax_two">

	<div class="heading_group">
		<div class="fixed_mob_width">
			<p class="pre_heading">More about our fleet</p>
		</div>
	</div>

	<div class="fixed_mob_width no_container">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="the_content align_center">
                        <img class="natural centralise" src="<?php echo get_bloginfo('template_directory'); ?>/img/logos/gc_logo_funeralplans.png" />
                        <h3>For <em>many</em> people, planning their funeral has become an <em>established</em> way of looking at the <em>future</em>, just like making a <em>Will</em>.</h3>
					</div>
                </div>
                
                </div>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom line_6"></div>
</section>

<section class="mbp_section post_section  bg_lighter mbp_parallax" id="parallax_two">

    <div class="vertical_line top line_6 dark"></div>

	<div class="fixed_mob_width no_container">
		<div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="tree no_margin">
                        <div class="horizonal_line l2r dark"></div>
                        <div class="horizonal_line r2l dark"></div>
                        
                        <div class="flex space_between">
                            <div class="tree_box">
                                <!-- <div class="horizonal_line dark"></div> -->
                                <div class="vertical_line top dark"></div>
                                <i class="icon icon-flag medium"></i>
                                <p>More than a million people in Great Britain have taken out a funeral plan. Usually, they have known the grief of bereavement and don’t want their families to go through the stress of making arrangements.</p>
                            </div>
                            <div class="tree_box">
                                <!-- <div class="horizonal_line dark"></div> -->
                                <div class="vertical_line top dark"></div>
                                <i class="icon icon-family2 medium"></i>
                                <p>Many have established a relationship of trust with their local family funeral director. Who better to advise them on such a sensitive topic and assist them with all the details?</p>
                            </div>
                            <div class="tree_box">
                                <!-- <div class="horizonal_line dark"></div> -->
                                <div class="vertical_line top dark"></div>
                                <i class="icon icon-family3 medium"></i>
                                <p>We believe that the Independent Way funeral plan, which is available only through independent funeral directors such as ourselves, offers you significant advantages over other plans.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


			<div class="row">
				<div class="col-12">
					<div class="the_content">
                        <ul class="accordion">
                            <li  class="accordion__item">
                                <p class="accordion__title">Breakfast Menu</p>
                                <section id="morning" class="accordion__section">
                                    <div class="accordion__container">
                                        <p>A selection of sweet pastries filled with a variety of flavours such as cinnamon, pecan, apple and jam</p>
                                        <p>A selection of savoury pastries filled with creamy mushroom with a garlic chive garnish, feta cheese tomato &amp; fresh chive, egg &amp; bacon</p>
                                    </div>
                                </section>
                            </li>
                            <li class="accordion__item">
                                <p class="accordion__title">Traditional Menu</p>
                                <section id="traditional" class="accordion__section">
                                    <div class="accordion__container">
                                        <p>A selection of filled white and brown bread sandwiches, including cheese &amp; onion chutney, roast ham &amp; tomato, cream cheese &amp; red pepper, egg mayonnaise &amp; salad</p>
                                        <p>Sausage Rolls</p>
                                        <p>Mozzarella and tomato pizza</p>
                                        <p>Celery sticks with a fresh flavoured cream cheese dip</p>
                                        <p>Selection of crisps</p>
                                        <p>Homemade cake selection or fresh fruit</p>
                                    </div>
                                </section>
                            </li>
                            <li class="accordion__item">
                                <p class="accordion__title">Classic Menu</p>
                                <section id="classic" class="accordion__section">
                                    <div class="accordion__container">
                                        <p>A selection of filled sandwiches and rolls, with fillings including cheddar cheese &amp; chutney, roast ham &amp; mustard mayonnaise, prawn &amp; crab and chicken tikka</p>
                                        <p>Scotch eggs</p>
                                        <p>Sweet potato, goats cheese and toasted hazelnut salad</p>
                                        <p>Crudités served with hummus dip</p>
                                        <p>Melton Mowbray pork pies served with vine tomatoes and a pot of pickle</p>
                                        <p>Selection of crisps</p>
                                        <p>Homemade cakes or fresh fruit</p>
                                    </div>
                                </section>
                            </li>
                            <li class="accordion__item">
                                <p class="accordion__title">Ploughman’s Lunch</p>
                                <div id="afternoon" class="accordion__section">
                                    <div class="accordion__container">
                                        <p class="p1">A selection of Melton Mowbray pork pies with vine tomatoes</p>
                                        <p>Cheese board with variety of cheeses, biscuits, grapes and chutney</p>
                                        <p>Slices of roast ham, pickles and homemade coleslaw</p>
                                        <p>A selection of breads and butter</p>
                                        <p>Cheese cake slices</p>
                                    </div>
                                </div>
                            </li>
                            <li  class="accordion__item">
                                <p class="accordion__title">Afternoon Tea</p>
                                <div id="executive" class="accordion__section">
                                    <div class="accordion__container">
                                        <p>A selection of filled rolls and wraps, including brie &amp; cranberry, bacon lettuce &amp; tomato, chicken lime &amp; coriander, roast ham &amp; pickle and prawn &amp; crab</p>
                                        <p>Steak &amp; mixed tomato salad</p>
                                        <p>Cheese board with a variety of cheeses, biscuits, grapes chutney &amp; trail mix</p>
                                        <p>Vine tomato &amp; red onion bruschetta baked in smoked salt, drizzled with bal-samic glaze and topped with fresh basil</p>
                                        <p>Anti-pasti board, with a selection of meats and olives</p>
                                        <p>Homemade cakes or fresh fruit</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
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