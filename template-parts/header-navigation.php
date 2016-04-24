<?php
/**
 * The template part for displaying the main navigation in the header.
 *
 * @package Penguin Gold
 */
?>

<nav id="site-navigation" class="main-navigation clear" role="navigation">
	<div class="container">
		<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			} elseif ( $logo = get_theme_mod( 'logo-upload', false ) ) {
				echo '<a class="site-logo" href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
				echo '<img title="' . get_bloginfo( 'name' ) . '" alt="' . get_bloginfo( 'name' ) . '" src="' . esc_url( $logo ) . '">';
				echo '</a>';
			}
			if ( is_front_page() && is_home() ) {
				echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>';
			} else {
				echo '<p class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></p>';
			}
		?>
		<svg version="1.1" aria-labelledby="icon-menu-title icon-menu-desc" class="menu-toggle penguin-icon-menu" role="img">
			<title id="icon-menu-title"><?php __( 'Menu', 'penguin' ) ?></title>
			<desc id="icon-menu-desc"><?php __( 'Click to see the menu', 'penguin' ) ?></desc>
			<use xlink:href="<?php echo get_template_directory_uri() ?>/icons.svg#penguin-icon-menu"></use>
		</svg>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'penguin' ); ?></a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-menu', 'depth' => 2 ) ); ?>
	</div><!-- .container -->
</nav><!-- #site-navigation -->