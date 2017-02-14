<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="http://fonts.googleapis.com/css?family=IM+Fell+English:regular,italic|Crimson+Text:regular|Great+Vibes|Quicksand:regular|Playfair+Display:italic" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
<!-- Header Container -->
	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
		</div>
		<!-- Mobile only Wordpress Menu Below -->
		<nav id="site-navigation" class="main-navigation top-bar nodrop" role="navigation">
		<!-- Wordpress Menu -->
			<div class="top-bar-right" id=:"cc_mobilewpMenu">

		<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar-gallery' ); ?>
				<?php endif; ?>
			</div>
			<div class="cc_social-holder cc_mobile_social">
                        <h2 class="cc_social-holderTitle">socialize</h2>
                        <ul class="cc_social-list menu">
                            <li><a href="https://www.instagram.com/chasing_pleasures" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true" ></i></a></li>
                            <li><a href="https://www.facebook.com/Chasing-Pleasures-Fine-Art-Photography-535058686581850/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/cristabelle56" title="Snapchat" target="_blank"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.pinterest.com/cristabelle07" title="Pintrest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
		</nav>
		
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
