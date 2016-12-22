<!-- ABOUT SECTION -->

<section class="cc_aboutContainer">
    <div class="cc_aboutContainer_2 row large-collapse align-middle">
        <div class="cc_border_1 row align-middle">
            <div class="cc_border_2 row align-middle align-center">
                <div class="medium-9 columns cc_aboutusText1column">
                    <div class="cc_aboutusText1r row">
                        <?php 

                             $args= array(
                            'page_id' => 64,
                             );
                             $query = new WP_Query($args);
                             while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
                <div class="medium-9 columns cc_aboutusImg1column ">
                    <div class="cc_aboutusImg1r row">
                        <?php 

                            $args= array(
                            'page_id' => 59,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
                <div class="row align-center cc_aboutrowrow">
                    <div class="medium-5 columns cc_aboutusTextcolumn">
                        <div class="cc_aboutusText2r row">
                            <?php 

                                $args= array(
                                'page_id' => 62,
                                );
                                $query = new WP_Query($args);
                                while($query->have_posts()) : $query->the_post();
                            ?>
                            <?php the_content();?>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="medium-4 columns cc_aboutusImg2column" id="cc_aboutusscrollAnchor">
                        <div class="cc_aboutusImg2r row">
                            <?php 

                                $args= array(
                                'page_id' => 41,
                                );
                                $query = new WP_Query($args);
                                while($query->have_posts()) : $query->the_post();
                            ?>
                            <?php the_content();?>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
