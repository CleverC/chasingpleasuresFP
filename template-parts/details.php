<!-- DETAILS SECTION -->

<div class="cc_detailsContainer">
    <div class="cc_detailsText row large-collapse align-middle">
        <div class="cc_border_1b row expanded align-middle">
            <div class="cc_border_2b row expanded align-middle align-center">
                <div class="cc_detailsContainer_2 row large-collapse align-middle">
                    <div class="medium-5 column cc_detailsleft">
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
                    <div class="medium-7 column cc_detailsright">
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
            </div>
        </div>
    </div>
</div>
