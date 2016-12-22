<!-- CONTACT SECTION -->
<section class="cc_contactContainer">
    <div class="cc_contactContainer_2 row large-collapse align-middle">
        <div class="cc_border_1 row align-middle">
            <div class="cc_border_2 cc_rowContactseven row align-middle">
                <div class="row cc_contactrowrow">
                    <div class="medium-5 columns" id="cc_contactleft">
                        <?php

                            $args= array(
                            'page_id' => 36,
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                        <?php the_content();?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="medium-7 columns" id="cc_contactright">
                        <h3 class="cc_contactTitle">Say Bonjour</h3>
                        <h5 class="cc_contactsubTitle">We would love to hear from you. Please fill out the contact form below to get in touch with us by email.</h5>
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
