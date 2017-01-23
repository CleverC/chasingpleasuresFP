                <div class="cc_heroRow2 row" id="cc_portfoliomobile">
                    <div class="medium-4 columns small-12 large-expand cc_1stCol">
                        <div class="slideshow-block">
            <a href="/chasingpleasuresdev/portraits" class="cc_1stcolImg">
                            <ul class="slides-2">
                                <?php
                                    $args= array(
                                    'page_id' => 18,
                                    );
                                    $query = new WP_Query($args);
                                    while ($query->have_posts()) : $query->the_post();
                                ?>
                                    <?php the_content();?>
                                    <?php endwhile; wp_reset_query(); ?>
                            </ul>

                                <div class="bwpb-overlay row align-middle align-center">
                                    <h5 class="cc_portraitsTexth">Portraits</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="medium-4 columns small-12 large-expand cc_2ndCol">
                        <div class="slideshow-block">
            <a href="/chasingpleasuresdev/weddings" class="cc_2ndcolImg link">
                            <ul class="slides-2">
                                <?php
                                    $args= array(
                                    'page_id' => 21,
                                    );
                                    $query = new WP_Query($args);
                                    while ($query->have_posts()) : $query->the_post();
                                ?>
                                    <?php the_content();?>
                                    <?php endwhile; wp_reset_query(); ?>
                            </ul>

                                <div class="bwpb-overlay row align-middle align-center">
                                    <h5 class="cc_weddingsTexth">Weddings</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="medium-4 columns small-12 large-expand cc_3rdCol">
                        <div class="slideshow-block">
                    <a href="/chasingpleasuresdev/family" class="cc_3rdcolImg">
                            <ul class="slides-2">
                                <?php
                                    $args= array(
                                    'page_id' => 23,
                                    );
                                    $query = new WP_Query($args);
                                    while ($query->have_posts()) : $query->the_post();
                                ?>
                                    <?php the_content();?>
                                    <?php endwhile; wp_reset_query(); ?>
                            </ul>

                                <div class="bwpb-overlay row align-middle align-center">
                                    <h5 class="cc_familyTexth">Family</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>