<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

    <?php if( have_rows('rows') ): ?> 
        <div>
            <?php while ( have_rows('rows') ) : the_row(); ?>

                <?php if( have_rows('row') ): ?>

                <section class="mbp_section post_section  bg_lighter">
                    <div class="row">
                        
                        <?php while ( have_rows('row') ) : the_row(); ?>
                                <?php if( get_row_layout() == 'gallery' ): ?>
                                    <div class="<?php the_sub_field('classes') ?>">
                                        <?php get_template_part('inc/_gallery'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if( get_row_layout() == 'accordion' ): ?>
                                    <div class="<?php the_sub_field('classes') ?>">
                                        <p>Accordion</p>
                                    </div>
                                <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </section>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>