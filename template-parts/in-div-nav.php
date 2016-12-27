		<div class="cc_heroRow1C">
		<div class="cc_heroRow1C2 row align-middle">
			<div class="top-bar-left">
				<?php foundationpress_top_bar_l(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
			<div class="top-bar-center">
				 	<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">ChasingPleasures</a></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p class="cc_subtextPleasures">Photography</p></a>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>