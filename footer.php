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
				<a href="http://www.clevercampbell.com" target="_blank"><p id="cc_sitebyLink">Site Designed &amp; Developed by Clever Campbell</p></a>
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
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cc_cpfootlink" rel="home">
                                ChasingPleasures
                            </a>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            	<h5 class="cc_subfooterhome">Fine Art Photography</h5>
                        	</a>
                        </li>
                    </ul>
                </div>
                <div class="cc_sidebar"></div>
                    <div class="medium-3 column cc_social-holder">
                    	<h2 class="cc_social-holderTitle">socialize</h2>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascript/customjs.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascript/jquery.cycle.lite.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascript/cycle_script.js"></script>



</body>
</html>
