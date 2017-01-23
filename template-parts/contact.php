<section class="cc_contactContainer" id="ccCs">
    <div class="cc_contactContainer2 row large-collapse align-middle">
        <div class="cc_border_1 row align-middle">
            <div class="cc_border_2 cc_rowContactseven row align-middle">
                <div class="row cc_contactrowrow expanded align-middle align-center">
                    <div class="medium-4 columns" id="cc_contactleft">
                    <ul class="slidesContact active">
                        <?php

                            $args= array(
                            'page_id' => 36,
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </ul>
                    </div>
                    <div class="medium-7 columns" id="cc_contactright">
                        <h4 class="cc_contactTitle">say bonjour</h4>
                        <p class="cc_contactsubTitle">We would love to hear from you. Please fill out the contact form below to get in touch with us by email.</p>
                        <?php

                            $args= array(
                            'page_id' => 34,
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
