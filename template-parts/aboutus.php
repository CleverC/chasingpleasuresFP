<section class="cc_aboutContainer" id="ccSas">
    <div class="cc_aboutContainer2 row large-collapse align-middle">
        <div class="medium-12 columns cc_aboutcontainerCol">
            <div class="cc_border_1 row align-middle">
                <div class="cc_border_2 row align-middle align-center">
                    <div class="medium-9 small-12 columns cc_abouttxt1stColumn">
                        <div class="cc_abouttext1stRow row">
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
                    <div class="medium-9 small-12 columns cc_aboutimg1Column ">
                        <div class="cc_aboutimg1Row row">
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
                    <div class="cc_aboutmeetRow row align-center ">
                        <div class="medium-5 small-12 columns cc_abouttextColumn">
                            <div class="cc_abouttext2Row row">
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
                        <div class="medium-4 small-12 columns cc_aboutimg2Column " id="cc_aboutusscrollAnchor">
                            <div class="cc_aboutimg2Row row post__image-container">
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
    </div>
</section>
