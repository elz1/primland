<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package primland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'primland' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<div class="navigation">
				<div class="top-nav">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-4',
							'menu_id'        => 'secondary-menu',
						) );
					?>
					<?php if ( is_active_sidebar( 'socials' ) ) : ?>
	        <div class="socials">
	          <?php dynamic_sidebar( 'socials' ); ?>
	        </div><!-- .socials -->
	    		<?php endif; ?>
    		</div>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" id="nav-icon" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div class="nav-menu menu-holder">
						<img src="/wp-content/uploads/2017/11/primland-logo.png" class="small-only">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
					<hr class="small-only">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-4',
							'menu_id'        => 'secondary-menu-mobile',
							'menu_class'		 => 'small-only'
						) );
					?>
					<hr class="small-only">
					<?php
	          wp_nav_menu( array(
	            'theme_location' => 'menu-3',
	            'menu_id'        => 'quick-links-mobile',
	            'menu_class'		 => 'small-only'
	          ) );
        	?>
					<hr class="small-only">
					<?php
	          wp_nav_menu( array(
	            'theme_location' => 'menu-2',
	            'menu_id'        => 'footer-menu-mobile',
	            'menu_class'		 => 'small-only'
	          ) );
        	?>
        	<div class="box-cta small-only">
        		<h4>Plan Your Perfect Stay</h4>
        		<a href="#" class="button">Start Now</a>
        	</div>
        	<div class="box-cta small-only">
        		<h4>Stay Updated</h4>
        		<p>Join our Mailing List for the latest Events and Offers</p>
        		<a href="#" class="button">Subscribe</a>
        	</div>
        	<?php if ( is_active_sidebar( 'mobile-widgets' ) ) : ?>
					    <div id="mobile-widgets" class="mobile-widgets small-only">
					      <?php dynamic_sidebar( 'mobile-widgets' ); ?>
					    </div><!-- #primary-sidebar -->
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'socials' ) ) : ?>
        		<div id="menu-socials" class="small-only">
		          <?php dynamic_sidebar( 'socials' ); ?>
		        </div><!-- ,socials -->
		    	<?php endif; ?>
					</div><!-- .menu-holder -->
				</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
