<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package primland
 */

?>

	</div><!-- #content -->

<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
  <div class="container">
    <div id="footer-widgets" class="top-footer">
      <?php dynamic_sidebar( 'footer-widgets' ); ?>
    </div><!-- #primary-sidebar -->
  </div>
<?php endif; ?>

	<footer id="colophon" class="site-footer">
    <div class="container">
      <div class="footer-menu">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-2',
            'menu_id'        => 'footer-menu',
          ) );
        ?>
      </div>
  		<div class="site-info">
  			<p>&copy; Primland <?php echo date('Y'); ?></p>
  		</div><!-- .site-info -->
      <?php if ( is_active_sidebar( 'socials' ) ) : ?>
        <div id="socials">
          <?php dynamic_sidebar( 'socials' ); ?>
        </div><!-- #socials -->
    <?php endif; ?>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Roboto:300,400" rel="stylesheet">

<script src="https://use.fontawesome.com/8020ac3e36.js"></script>

</body>
</html>
