<?php
/*
Template Name: Front
*/
get_header(); ?>
    <!-- HERO SECTION -->
    <?php get_template_part('template-parts/hero'); ?>
    
    <!-- FILLER SECTION -->
    <div class="cc_fillerTextColumn">
        <div class="cc_fillerTextr row align-center">
            <div class="cc_fillerCol1 medium-8">
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
    </div>

    <!-- ABOUT US SECTION -->
    <?php get_template_part('template-parts/aboutus'); ?>

    <!-- FILLER SECTION 2 -->
    <div class="cc_fillerTextColumn2">
        <div class="cc_fillerTextr2 row align-center">
        <div class="cc_fillerCol2 medium-8">
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
    </div>

    <!-- QUOTES SECTION -->
    <?php get_template_part('template-parts/quotes'); ?>
    
    <!-- FILLER SECTION 3 -->
    <div class="cc_fillerTextColumn3">
        <div class="cc_fillerTextr3 row align-center">
        <div class="cc_fillerCol3 medium-8">
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
    </div>


    <!-- DETAILS SECTION -->
    <?php get_template_part('template-parts/details'); ?>

    <!-- FILLER SECTION 4 -->
    <div class="cc_fillerTextColumn4">
        <div class="cc_fillerTextr4 row align-center">
        <div class="cc_fillerCol4 medium-12">
            <?php 

                $args= array(
                'page_id' => 98,
                );
                $query = new WP_Query($args);
                while($query->have_posts()) : $query->the_post();
                ?>
            <p id="ccfl4">
                <?php the_content();?> </p>
            <?php endwhile; wp_reset_query(); 
                ?>
                </div>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <?php get_template_part('template-parts/contact'); ?>

    <?php do_action( 'foundationpress_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <!-- Portfolio Section -->
    <?php endwhile;?>
    <?php do_action( 'foundationpress_after_content' ); ?>
    <!-- Contact Section -->
    <!-- Page Top Arrow -->
    <?php get_template_part('template-parts/uparrow'); ?>
    <?php get_footer();
