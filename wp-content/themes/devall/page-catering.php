<?php

	/* Template Name: Catering */

?>

<?php get_header(); ?>

<section class="hero_image mbp_parallax" id="parallax_hero">
	<div class="hero_bg"></div>
	<div class="prx_item h1_container" data-prx_start="45" data-prx_finish="32" data-prx_center="true">
		<h1><small>After-funeral</small> <br/>Catering</h1>
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
			<p class="pre_heading">Stress Free Planning</p>
		</div>
	</div>

	<div class="fixed_mob_width no_container">
		<div class="vertical_line vl1"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-desktop-5 ">
					<div class="the_content">
						<?php the_content(); ?>
					</div>
                </div>
                <div class="col-12 col-desktop-7">
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

                        <div class="gallery__nav">
                            <div class="gallery__nav__item">
                                <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                            </div>
                            <div class="gallery__nav__item">
                                <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                            </div>
                            <div class="gallery__nav__item">
                                <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                            </div>
                            <div class="gallery__nav__item">
                                <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                            </div>
                            <div class="gallery__nav__item">
                                <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                            </div>
                            <div class="gallery__nav__item">
                                <img class="" src="<?php echo get_bloginfo('template_directory'); ?>/img/whensomeonedies.png">
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

	<div class="vertical_line bottom line_1"></div>
</section>

<section class="mbp_section post_section  bg_light mbp_parallax" id="parallax_three">

	<div class="heading_group">
		<div class="fixed_mob_width">
            <p class="pre_heading">Price Available on Request</p>
            <h2><em>Sample Menus</em></h2>
		</div>
	</div>

	<div class="fixed_mob_width no_container">
		<div class="container">
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
                            <li class="accordion__item">
                                <p class="accordion__title">Contemporary Menu</p>
                                <div id="contemporary" class="accordion__section">
                                    <div class="accordion__container">
                                        <p>A selection of filled rolls and wraps, including chicken mayonnaise &amp; salad, tuna crunch,<br>
                                        cheddar cheese &amp; onion marmalade, roast ham &amp; sweet pickle and lemon chicken</p>
                                        <p>Stilton, mushroom &amp; spinach homemade mini quiches</p>
                                        <p>Tomato and mozzarella salad drizzled with fig balsamic vinegar</p>
                                        <p>Cream cheese, smoked salmon and fresh dill crisp breads</p>
                                        <p>Mini potato skins topped with salsa sour cream and chives</p>
                                        <p>Selection of flavoured sausage pieces with a sauce pot</p>
                                        <p>Homemade cakes or fresh fruit</p>
                                    </div>
                                </div>
                            </li>
                            <li  class="accordion__item">
                                <p class="accordion__title">Luxury Menu</p>
                                <div id="luxury" class="accordion__section">
                                    <div class="accordion__container">
                                        <p>A selection of finger sandwiches with fillings including egg mayonnaise, tuna, cheddar cheese &amp; pickle, roast ham &amp; tomato chutney, cream cheese &amp; cucumber and smoked salmon &amp; cream cheese.</p>
                                        <p>A selection of cupcakes, fresh home-baked scones filled with strawberry jam and clotted cream, lemon drizzle cake pieces, with a fresh fruit garnish</p>
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