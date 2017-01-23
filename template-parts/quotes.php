<div class="cc_quotesContainer">
    <div class="cc_quotesContainer2 row large-collapse align-middle">
        <div class="cc_border_1b row expanded align-middle">
            <div class="cc_border_2b row expanded align-middle align-center">
                <div class="cc_quotesContainer3 row large-collapse align-center">
                    <div class="medium-4 small-12 column cc_quotesLeft">
                        <ul class="slidesQuotes">
                        <?php 

                            $args= array(
                            'page_id' => 94,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </ul>
                </div>
                    <div class="medium-5 small-12 column cc_quotesRight">
                        <?php 

                            $args= array(
                            'page_id' => 96,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                        <a class="cc_qbtn" class="button">next</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>