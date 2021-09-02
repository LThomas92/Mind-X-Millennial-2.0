<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mind_X_Millennial_2.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php the_title();?> | Mind X Millennial</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mind X Millennial is here to provide you with articles on various topics ranging from sports to music to fictonal stories. Tune in to get the views of the millennials on everything current!">

	<!--  Essential META Tags -->

<meta property="og:title" content="Mind X Millennial">
<meta property="og:description" content="Making you feel better one strand at a time">
<meta property="og:image" content="https://imgur.com/EXFwmQI.jpg" />
<meta property="og:image:secure_url" content="https://imgur.com/EXFwmQI.jpg">
<meta property="og:type" content="image/jpg">
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:url" content="https://mindxmillennial.com/">
<meta name="twitter:card" content="summary_large_image">

<!--  Non-Essential, But Recommended -->

<meta property="og:site_name" content="Mind X Millennial">
<meta name="twitter:image:alt" content="Mind X Millennial Logo">


<!--  Non-Essential, But Required for Analytics -->
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

<header id="masthead" class="site-header"> 
	<div class="hamburger-menu">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<div class="site-header__popout-menu">
		<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				

		</nav><!-- #site-navigation -->
		
		<div class="main-navigation__close-icon"></div>

	</div> <!-- popout menu -->

	<?php if( is_single() ) { ?>
		<a class="site-header__logo-link" href="<?php echo site_url(); ?>"><img class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-no-bg.svg" alt="Mind X Millennial Logo"/></a>
		<?php } else { ?>
			<a class="site-header__logo-link" href="<?php echo site_url(); ?>"><img class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Mind X Millennial Logo"/></a>
			<?php } ?>

	<div class="site-header__right">

		<ul class="site-header__login-links">
			<?php if(is_user_logged_in()) { ?>

				<li class="site-header__logout"><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
				
			<?php } else { ?>

				<li class="site-header__login"><a href="#login">Login</a></li>
				<li class="site-header__register"><a href="#register">Register</a></li>
			
				<?php } ?>

			</ul>


		<div class="search-icon">
			<span class="search-line main-line"></span>
			<span class="search-circle third"></span>
		</div>

	</div>

	</header><!-- #masthead -->

	<div class="login-popup">
		<picture class="login-popup__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-no-bg.svg" alt="Mind X Millennial Logo"/>
		</picture>
		<?php echo do_shortcode("[theme-my-login]"); ?>
		<div class="login-popup__close-icon"></div>
	</div>

	<div class="register-popup">
		<picture class="register-popup__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-no-bg.svg" alt="Mind X Millennial Logo"/>
		</picture>
	<?php echo do_shortcode("[theme-my-login action='register']"); ?>
	<div class="register-popup__close-icon"></div>
		</div>

	<div class="search-overlay">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
					<input style="line-height: 4rem" type="search" class="search-field" placeholder="Find something..." value="<?php echo get_search_query(); ?>" name="s" />
					</label>
				</form>
				<h4 class="search-overlay__popular-search-topics-title">Popular search topics</h4>

				<?php if( have_rows('popular_search_topics', 'option') ): ?>
			<ul class="popular-search-topics">
    		<?php while( have_rows('popular_search_topics', 'option') ) : the_row(); ?>
				<li class="popular-search-topics__topic">
        	<?php $searchTopic = get_sub_field('search_topic'); ?>
			<a href="<?php echo site_url() . '?s=' . urlencode( $searchTopic ) ?>"><?php echo $searchTopic; ?></a>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php else :
		
		endif; ?>
	</div>
