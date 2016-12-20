<?php
/*
Template Name: Front
*/
get_header(); ?>
    <!-- Hero Section -->
    <header id="cc_heroContainer" role="banner">
        <div class="cc_menuContainer row large-collapse align-middle">
            <div class="cc_border_1 row align-middle">
                <div class="cc_border_2 row align-middle">
                <?php foundationpress_top_bar_l(); ?>
                <ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
                <?php foundationpress_top_bar_r(); ?>
                <div class="cc_mainmenuRow row">
                    <div class="medium-4 columns small-12 large-expand cc_portraitsCol">
                        <a href="#" class="cc_portraitsImg">
                            <?php

				$args= array(
					'page_id' => 18,
					);
				 $query = new WP_Query($args);
				 while ($query->have_posts()) : $query->the_post();
				 ?>
                                <?php the_content();?>
                                <?php endwhile; wp_reset_query(); 
				?>
				<h5 class="cc_portraitstext">Portraits</h5>
                        </a>
                    </div>
                    <div class="medium-4 columns small-12 large-expand cc_weddingsCol">
                        <a href="#" class="cc_weddingsImg">
                            <?php

				$args= array(
					'page_id' => 21,
					);
				 $query = new WP_Query($args);
				 while ($query->have_posts()) : $query->the_post();
				 ?>
                                <?php the_content();?>
                                <?php endwhile; wp_reset_query(); 
				?>
                        </a>
                    </div>
                    <div class="medium-4 columns small-12 large-expand cc_familyCol">
                        <a href="#" class="cc_familyImg">
                            <?php

				$args= array(
					'page_id' => 23,
					);
				 $query = new WP_Query($args);
				 while ($query->have_posts()) : $query->the_post();
				 ?>
                                <?php the_content();?>
                                <?php endwhile; wp_reset_query(); 
				?>
                        </a>
                    </div>
                    </div>
                    <div class="cc_social-holder">
				<ul class="cc_social-list menu">
					<li><a href="https://www.instagram.com/chasing_pleasures" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true" ></i></a></li>
					<li><a href="https://www.facebook.com/Chasing-Pleasures-Fine-Art-Photography-535058686581850/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.snapchat.com/add/cristabelle56" title="Snapchat" target="_blank"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></li>
					<li><a href="https://www.pinterest.com/cristabelle07" title="Pintrest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- Filler SECTION -->
<div class="cc_fillerTextColumn">
	<div class="cc_fillerTextr row">
	<!-- 		<?php 

       			$args= array(
            	'page_id' => 116,
            	);
            	$query = new WP_Query($args);
				while($query->have_posts()) : $query->the_post();
				?>
				<p> <?php the_content();?> </p>
				<?php endwhile; wp_reset_query(); 
				?> -->
	</div>
</div>

    <!-- ABOUT US SECTION -->
    <section class="cc_aboutContainer">
    	<div class="cc_aboutContainer_2 row large-collapse align-middle">
            <div class="cc_border_1 row align-middle">
                <div class="cc_border_2 row align-middle">
                </div>
            </div>
        </div>

    </section>

        <!-- FILLER SECTION 2 -->
<div class="cc_fillerTextColumn2">
	<div class="cc_fillerTextr2 row">
	<!-- 		<?php 

       			$args= array(
            	'page_id' => 116,
            	);
            	$query = new WP_Query($args);
				while($query->have_posts()) : $query->the_post();
				?>
				<p> <?php the_content();?> </p>
				<?php endwhile; wp_reset_query(); 
				?> -->
	</div>
</div>

    <!-- DETAILS SECTION -->
<div class="cc_detailsContainer">
	<div class="cc_detailsText row large-collapse align-middle">
		<div class="cc_border_1b row align-middle">
            <div class="cc_border_2b row align-middle">
			<!-- 		<?php 

       			$args= array(
            	'page_id' => 116,
            	);
            	$query = new WP_Query($args);
				while($query->have_posts()) : $query->the_post();
				?>
				<p> <?php the_content();?> </p>
				<?php endwhile; wp_reset_query(); 
				?> -->
	</div>
</div>
	</div>
	</div>
	    <!-- CONTACT US SECTION -->
    <section class="cc_contactContainer">
    	<div class="cc_contactContainer_2 row large-collapse align-middle">
            <div class="cc_border_1 row align-middle">
                <div class="cc_border_2 row align-middle">
                </div>
            </div>
        </div>

    </section>







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
