<div class="cc_quotesContainer">
    <div class="cc_quotesContainer2 row large-collapse align-middle">
        <div class="cc_border_1b row expanded align-middle">
            <div class="cc_border_2b row expanded align-middle align-center">
                <div class="cc_quotesContainer3 row large-collapse align-center">
                    <div class="medium-4 column cc_quotesLeft">
                        <?php 

                            $args= array(
                            'page_id' => 94,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>

                </div>
                    <div class="medium-5 column cc_quotesRight">
                        <?php 

                            $args= array(
                            'page_id' => 96,
                            );
                            $query = new WP_Query($args);
                            while($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                        <!-- <a class="cc_qbtn" href="#" class="button">next</a> -->
                        <button type="button" class="cc_qbtn" onclick="displayNextImage()">next</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>