<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-2">
		<div class="row">
			<div class="col-lg-3">
				<div class="rhombus">
					<div class="rhombus-inside">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-blue"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="rhombus">
					<div class="rhombus-inside">
						<a href="https://www.instagram.com/"><i class="fa fa-instagram fa-blue"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="rhombus">
					<div class="rhombus-inside">
						<a href="https://www.facebook.com/"><i class="fa fa-telegram fa-blue"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="rhombus">
					<div class="rhombus-inside">
						<a href="https://www.youtube.com/"><i class="fa fa-youtube fa-blue"></i></a>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="col-lg-6">
		</div>
	</div>
		<div class="headeris">

			<div class="container">
				<div class="row">
					<div class="col-lg-7 left">
						<a href="/scoding"><img class="logo" src="<?php echo get_template_directory_uri();?>/img/scoding-logo.svg" alt="Logo"></a>
					</div>
					<div class="col-lg-5 right">
						<div class="dropdown">
							<a href="#"><?php esc_html_e('???????? ', 'understrap'); ?><img class="icon-r" src="<?php echo get_template_directory_uri();?>/img/dropdown.svg" alt="Logo"></a>
							<div class="dropdown-content">
								<ul class="dropdownli">
								<li><a href="#"><?php esc_html_e('???????? ', 'understrap'); ?></a></li>
								<li><a href="#"><?php esc_html_e('?????????????????????? ', 'understrap'); ?></a></li>
								<li><a href="#"><?php esc_html_e('???????????????????? ', 'understrap'); ?></a></li>
								<li><a href="#"><?php esc_html_e('???????????????? ', 'understrap'); ?></a></li>
								</ul>
							</div>
						</div>
						<div class="header-contact">
							<a href="tel:+380958295001"><img class="icon-l icon-phone" src="<?php echo get_template_directory_uri();?>/img/phone-icon.png"><span><?php esc_html_e('+ 380 95 829 5001', 'understrap'); ?></span></a>
						</div>
						<div class="header-callback">
							<a href="tel:+380958295001"><img class="icon-l icon-callback" src="<?php echo get_template_directory_uri();?>/img/callback-icon.png"><span><?php esc_html_e('?????????????????? ??????????????', 'understrap'); ?></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>



		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark primary-color" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
