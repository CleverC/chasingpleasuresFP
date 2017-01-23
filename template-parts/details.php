<div class="cc_detailsContainer" id="ccDs">
    <div class="cc_detailsContainer2 row large-collapse align-middle">
        <div class="cc_border_1b row expanded align-middle">
            <div class="cc_border_2b row expanded align-middle align-center">
                <div class="cc_detailsContainer3 row align-middle">
                    <div class="medium-4 small-12 column cc_detailsleft">
                        <?php 

                            $args= array(
                            'page_id' => 91,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="cc_sidebar"></div>
                    <div class="medium-7 column cc_detailsright">
                    <!-- header -->
                        <div class="cc_detailsrtxt1Row row">
                        <div class="cc_detailsheadertitleRow">
                        <?php 

                            $args= array(
                            'page_id' => 72,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
                    <!-- header end -->
                    <div class="cc_detailsimgRow row align-center">
                        <div class="medium-6 column cc_detailsimgleft">
                            <?php

                                $args=array(
                                    'page_id' => 112,
                                    );
                                $query = new WP_Query($args);
                                while($query->have_posts()) : $query->the_post();
                            ?>
                            <?php the_content();?>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <div class="medium-6 column cc_detailsimgright">
                            <?php

                                $args=array(
                                    'page_id' => 114,
                                    );
                                $query = new WP_Query($args);
                                while($query->have_posts()) : $query->the_post();
                            ?>
                            <?php the_content();?>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        </div>
                        <div class="cc_detailsrtxt2Row row">
                        <div class="medium-12 column">
                        <?php

                                $args=array(
                                    'page_id' => 117,
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
</div>
