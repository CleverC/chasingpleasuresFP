<div class="cc_galleryNavRow1C">
		<div class="cc_galleryNavRow1C2 row align-middle">
			<div class="top-bar-left">
				<div class="cc_gallerytopimgl"><img class="cc_imgTitlel" src="<?php echo get_template_directory_uri(); ?>/assets/images/grey-flourish-hi-left.png" /></div>

				<div class="cc_gallerytopnavl"><?php foundationpress_top_bar_gallery1_l(); ?></div>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
 			<div class="top-bar-center">
				 	<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">ChasingPleasures</a></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p class="cc_subtextPleasures"><?php the_title_attribute(); ?></p></a>
			</div>
			<div class="top-bar-right">
			<div class="cc_gallerytopimgr"><img class="cc_imgTitler" src="<?php echo get_template_directory_uri(); ?>/assets/images/grey-flourish-hi-right.png" /></div>

			<div class="cc_gallerytopnavr"><?php foundationpress_top_bar_gallery1_r(); ?></div>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>