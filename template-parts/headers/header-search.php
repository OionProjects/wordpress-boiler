<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title(' | ', true, 'right');?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class()?>>

<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>

<!-- Header -->
<header id="masterhead" class="site-header">
	<div class="site-header-wrapper row">
		<!-- mobile-search -->
		<div class="mobile-search">
			<button class="search-toggle">
				<i class="fas fa-search"></i>
			</button>
			<form class="search-form-mobile" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
				<div class="search-form-inner">
					<input type="search" value="<?php echo get_search_query() ?>" name="s" placeholder="Type &amp; Hit Enter ...">
				</div>
			</form>
		</div>

		<!-- Logo/Branding -->
		<div class="site-branding">
			<a href="<?php echo get_option("siteurl"); ?>">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( get_theme_mod('site_logo')  ) :?>
					<img src="<?= get_theme_mod('site_logo') ?>">
				<?php else:?>
					<h1> <?= esc_html( get_bloginfo( 'name' ).'Primera' ) ?> </h1>
				<?php endif; ?>
			</a>
			<span> Header with search </span>
			<span id="refresh-site-logo"></span>
		</div>

		<!-- Social ICons -->
		<div class="header-element">
			<div class="social-header">
				<ul>
					<?php
					Primera_theme_option_social::init()->social()->showHeader();
					?>
				</ul>
			</div>
			<!-- desktop-search -->
			<div class="desktop-search">

				<form class="search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
					<div class="search-form-inner">
						<input type="search" value="<?php echo get_search_query() ?>" title="Search" name="s" placeholder="Type &amp; Hit Enter ...">
						<button class="btn btn-primary">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</form>
			</div>
		</div>

		<!-- Mobile Navigation : Start -->
		<div class="nav-toggle">
			<button class="menu-toggle">
				<i class="fas fa-bars"></i>
			</button>
			<div class="nav-wrapper">
				<div class="menu-left-container">
					<ul class="nav-menu" aria-expanded="false">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'nav-menu',
						) );
						?>
					</ul>
				</div>

				<ul id="social-mobile">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'secondary',
						'container' => false,
						'menu_class' => 'social-mobile',
					) );
					?>
				</ul>
			</div>
		</div>
		<!-- Mobile Navigation : End -->

	</div>
</header>
<!-- Navigation -->
<div class="navigation nav-vid">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primera-nav-menu',
		'container' => false,
		'menu_class' => 'nav-list',
	) );
	?>
</div>