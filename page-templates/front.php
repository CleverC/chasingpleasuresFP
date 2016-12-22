<?php
/*
Template Name: Front
*/
get_header(); ?>
    <!-- HERO SECTION -->
    <?php get_template_part('template-parts/hero'); ?>
    
    <!-- Filler SECTION -->
    <div class="cc_fillerTextColumn">
        <div class="cc_fillerTextr row">
            <?php 

                $args= array(
                'page_id' => 66,
                );
                $query = new WP_Query($args);
                while($query->have_posts()) : $query->the_post();
                ?>
            <p>
                <?php the_content();?> </p>
            <?php endwhile; wp_reset_query(); 
            ?>
        </div>
    </div>

    <!-- ABOUT US SECTION -->
    <?php get_template_part('template-parts/aboutus'); ?>

    <!-- FILLER SECTION 2 -->
    <div class="cc_fillerTextColumn2">
        <div class="cc_fillerTextr2 row">
            <?php 

                $args= array(
                'page_id' => 68,
                );
                $query = new WP_Query($args);
                while($query->have_posts()) : $query->the_post();
                ?>
            <p>
                <?php the_content();?> </p>
            <?php endwhile; wp_reset_query(); 
                ?>
        </div>
    </div>

    <!-- DETAILS SECTION -->
    <?php get_template_part('template-parts/details'); ?>

    <!-- FILLER SECTION 3 -->
    <div class="cc_fillerTextColumn3">
        <div class="cc_fillerTextr3 row">
            <?php 

                $args= array(
                'page_id' => 70,
                );
                $query = new WP_Query($args);
                while($query->have_posts()) : $query->the_post();
                ?>
            <p>
                <?php the_content();?> </p>
            <?php endwhile; wp_reset_query(); 
                ?>
        </div>
    </div>

    <!-- CONTACT US SECTION -->
    <?php get_template_part('template-parts/contact'); ?>

    <?php do_action( 'foundationpress_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <!-- Portfolio Section -->
    <?php endwhile;?>
    <?php do_action( 'foundationpress_after_content' ); ?>
    <!-- Contact Section -->
    <!-- Page Top Arrow -->
    <div class="cc_arrowContainer page-scroll">
        <a id="toTop" class="scrollicon" href="#masthead" style="opacity: 0; visibility: hidden;"><i class="fa fa-angle-up"></i></a>
    </div>
    <?php get_footer();
