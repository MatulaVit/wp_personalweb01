<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package personal_website
 */

?>

<header  class=" bg-white " id="masthead">

	<div class="hidden">
		<?php
		if ( is_front_page() ) :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$personal_website_description = get_bloginfo( 'description', 'display' );
		if ( $personal_website_description || is_customize_preview() ) :
			?>
			<p><?php echo $personal_website_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'personal-website' ); ?>">
		<button class="hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'personal-website' ); ?></button>

			<div class=" mt-24">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => 'nav',
							'container_class' => ' mx-auto bg-transparent absolute left-0 top-2 w-full z-50 md:py-[20px]',
							'menu_class' => 'wraper flex items-center mr-24 mt-5 justify-end text-xl font-bold ',
							
							'items_wrap' => '<ul id="%1$s" class="%2$s flex space-x-6   ">%3$s</ul>',
							'fallback_cb' => false
						)
					);
				?>
			</div>

	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
