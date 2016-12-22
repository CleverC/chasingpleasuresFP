<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
		<div id="footer-container">
			<footer id="footer">
			  <div class="cc_border_5 row align-middle align-center">
				<div class="medium-3 column cc_sitebyCol">
				<p id="cc_sitebyLink">Site Designed &amp; Developed by Clever Campbell</p>
					<div class="cc_copyR">
						<a href="<?php echo home_url(); ?>">
        					<p class="cc_copylinkClass"> &copy;&nbsp;<?php echo date('Y');?>
								 <?php bloginfo('description');?> </p>
						</a>
					</div>
					</div>
					<div class="cc_sidebar"></div>
				<div class="medium-5 column cc_cpCol">
					<ul class="cc_middlemenufooter">
                        <li class="home">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            	<h5 class="cc_subfooterhome">Fine Art Photography</h5>
                        	</a>
                        </li>
                    </ul>
                </div>
                <div class="cc_sidebar"></div>
                    <div class="medium-3 column cc_social-holder">
                    	<h4 class="cc_social-holderTitle">Socialize</h4>
                        <ul class="cc_social-list menu">
                            <li><a href="https://www.instagram.com/chasing_pleasures" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true" ></i></a></li>
                            <li><a href="https://www.facebook.com/Chasing-Pleasures-Fine-Art-Photography-535058686581850/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/cristabelle56" title="Snapchat" target="_blank"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.pinterest.com/cristabelle07" title="Pintrest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
			<!-- END WORDPRESS FOOTER -->
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
