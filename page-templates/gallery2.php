<?php
/*
Template Name: Gallery2
*/
get_header('portfolio'); ?>
    <div class="cc_galleryContainer" id="cc_G1">
        <div class="cc_galleryContainer2 row large-collaspe align-middle">
            <div class="medium-12 columns cc_galleryCol1">
                <div class="cc_border_1 row align-middle">
                    <div class="cc_border_2 row align-middle align-center">
                        <!-- WORDPRESS MENU -->

                        <?php get_template_part('template-parts/in-div-nav-gallery'); ?>

                        <div class="medium-10 columns cc_gallerytxtCol">
                            <div class="cc_gallerytxtRow">
                                <?php 

                                    $args= array(
                                    'page_id' => 272,
                                    );
                                    $query = new WP_Query($args);
                                    while($query->have_posts()) : $query->the_post();
                                ?>
                                <?php the_content();?>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                        <?php get_template_part('template-parts/in-div-nav-gallery'); ?>
                        <div class="cc_arrow_r_Container">
    <a id="toRight" class="scrolliconb" href="/chasingpleasuresdev/family" style="opacity: 0; visibility: hidden;"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
</div>
                       <div class="cc_arrow_l_Container">
    <a id="toLeft" class="scrolliconb" href="/chasingpleasuresdev/portraits" style="opacity: 0; visibility: hidden;"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
</div>
                    </div><!--END OF CC_BORDER_2-->
                </div>
            </div>
        </div><!--END OF GALLERYCONTAINER2-->
    </div><!--END OF GALLERYCONTAINER-->
    <!--TOP PAGE ARROW-->
    <?php get_template_part('template-parts/uparrow'); ?>
    <?php get_footer();
