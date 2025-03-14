<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newspack
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'before_header' ); ?>

<?php
	if ( newspack_is_amp() ) {
		get_template_part( 'template-parts/header/mobile', 'sidebar' );
	} else {
		get_template_part( 'template-parts/header/mobile', 'sidebar-fallback' );
	}
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'newspack' ); ?></a>

	<header id="masthead" class="site-header hide-header-search" [class]="searchVisible ? 'show-header-search site-header ' : 'hide-header-search site-header'">

		<?php
			$header_simplified  = get_theme_mod( 'header_simplified', false );
			$header_center_logo = get_theme_mod( 'header_center_logo', false );
		?>

		<?php
		// Header is NOT short:
		if ( false === $header_simplified ) :
		?>
			<div class="top-header-contain desktop-only">
				<div class="wrapper">
					<div id="secondary-nav-contain">
						<?php
						if ( ! newspack_is_amp() ) {
							newspack_secondary_menu();
						}
						?>
					</div>

					<?php
					// Logo is NOT centered:
					if ( false === $header_center_logo ) :
					?>
						<div id="social-nav-contain">
							<?php
							if ( ! newspack_is_amp() ) {
								newspack_social_menu_header();
							}
							?>
						</div>
					<?php endif; ?>
				</div><!-- .wrapper -->
			</div><!-- .top-header-contain -->
		<?php endif; ?>

		<div class="middle-header-contain">
			<div class="wrapper">
				<?php
				// Centered logo AND NOT short header.
				if ( true === $header_center_logo && false === $header_simplified ) :
				?>
					<div id="social-nav-contain" class="desktop-only">
						<?php
						if ( ! newspack_is_amp() ) {
							newspack_social_menu_header();
						}
						?>
					</div>
				<?php endif; ?>

				<?php
				// Centered logo AND short header.
				if ( true === $header_center_logo && true === $header_simplified ) :
				?>
					<div id="tertiary-nav-contain" class="desktop-only">
						<?php
						if ( ! newspack_is_amp() ) {
							newspack_tertiary_menu();
						}
						?>
					</div>
				<?php endif; ?>


				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

				<?php
				// Short header:
				if ( true === $header_simplified ) :
				?>

					<div class="nav-wrapper desktop-only">
						<div id="site-navigation">
							<?php
							if ( ! newspack_is_amp() ) {
								newspack_primary_menu();
							}
							?>
						</div><!-- #site-navigation -->

						<?php
						// Centered logo:
						if ( true === $header_center_logo ) {
							get_template_part( 'template-parts/header/header', 'search' );
						}
						?>
					</div><!-- .nav-wrapper -->

				<?php endif; ?>


				<?php
				// Logo NOT centered and header NOT short:
				if ( ! ( true === $header_center_logo && true === $header_simplified ) ) :
				?>
					<div class="nav-wrapper desktop-only">
						<div id="tertiary-nav-contain">
							<?php
							if ( ! newspack_is_amp() ) {
								newspack_tertiary_menu();
							}
							?>
						</div><!-- #tertiary-nav-contain -->

						<?php
						// Header simplified:
						if ( true === $header_simplified ) {
							get_template_part( 'template-parts/header/header', 'search' );
						}
						?>
					</div><!-- .nav-wrapper -->
				<?php endif; ?>

				<button class="mobile-menu-toggle" on="tap:mobile-sidebar.toggle">
					<?php echo wp_kses( newspack_get_icon_svg( 'menu', 20 ), newspack_sanitize_svgs() ); ?>
					<?php esc_html_e( 'Menu', 'newspack' ); ?>
				</button>

			</div><!-- .wrapper -->
		</div><!-- .middle-header-contain -->


		<?php
		// Header is NOT short:
		if ( false === $header_simplified ) :
		?>
			<div class="bottom-header-contain desktop-only">
				<div class="wrapper">
					<div id="site-navigation">
						<?php
						if ( ! newspack_is_amp() ) {
							newspack_primary_menu();
						}
						?>
					</div>
					<?php get_template_part( 'template-parts/header/header', 'search' ); ?>
				</div><!-- .wrapper -->
			</div><!-- .bottom-header-contain -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<?php do_action( 'after_header' ); ?>
