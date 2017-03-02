<header id="cc_heroContainer" role="banner">
    <div class="cc_heroContainer2 row large-collapse align-middle">
        <div class="cc_border_1 row align-middle">
            <div class="cc_border_2 row align-middle">
                <!-- WORDPRESS MENU -->
                <?php get_template_part('template-parts/in-div-nav'); ?>
                <?php get_template_part('template-parts/in-div-nav-mobile'); ?>
                <!-- WORDPRESS MENU END -->
                <!-- GALLERY ROW -->
                <div class="cc_heroRow2 row">
                    <div class="medium-4 columns small-12 large-expand cc_1stCol">
                        <div class="slideshow-block">
                            <ul class="slides">
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
                            <a href="/chasingpleasuresdev/portraits" class="cc_1stcolImg">
                                <div class="bwpb-overlay row align-middle align-center">
                                    <h5 class="cc_portraitsTexth">Portraits</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="medium-4 columns small-12 large-expand cc_2ndCol">
                        <div class="slideshow-block">
                            <ul class="slides">
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
                            <a href="/chasingpleasuresdev/weddings" class="cc_2ndcolImg link">
                                <div class="bwpb-overlay row align-middle align-center">
                                    <h5 class="cc_weddingsTexth">Weddings</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="medium-4 columns small-12 large-expand cc_3rdCol">
                        <div class="slideshow-block">
                            <ul class="slides">
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
                            <a href="/chasingpleasuresdev/family" class="cc_3rdcolImg">
                                <div class="bwpb-overlay row align-middle align-center">
                                    <h5 class="cc_familyTexth">Family</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- BOTTOM LINKS/SOCIAL MEDIA HOLDER -->
                <div class="cc_heroRow3 row align-middle align-center">
                    <div class="medium-3 column cc_welcomeText">
                        <h2 class="cc_Welcome">welcome</h2>
                    </div>
                    <div class="cc_sidebar"></div>
                    <div class="medium-5 small-12 column cc_cpCol">
                        <ul class="cc_middlemenucolheader">
                            <li class="home">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <h5 class="cc_fineartmain">Fine Art Photography</h5>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                </a>
                            </li>
                        </ul>
                        <div class="cc_midcol row align-middle align-center">
                            <div class="cc_border_6"></div>
                            <p class="cc_subfooterhome">Los Angeles</p>
                            <div class="cc_border_6"></div>
                        </div>
                    </div>
                    <div class="cc_sidebar"></div>
                    <div class="medium-3 small-12 column cc_social-holder">
                        <h2 class="cc_social-holderTitle">socialize</h2>
                        <ul class="cc_social-list menu">
                            <li><a href="https://www.instagram.com/chasing_pleasures" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true" ></i></a></li>
                            <li><a href="https://www.facebook.com/Chasing-Pleasures-Fine-Art-Photography-535058686581850/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/cristabelle56" title="Snapchat" target="_blank"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.pinterest.com/cristabelle07" title="Pintrest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php get_template_part('template-parts/portfolio-mobile'); ?>
