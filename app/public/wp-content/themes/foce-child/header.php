<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
			<nav id="site-navigation" class="main-navigation">

					 <div class="boutonMenu">
						<span> </span>
	         </div>
	         <ul>
		       	<li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
	         </ul>
	    </nav><!-- #site-navigation -->

        <section class="menuListe menuFull">
        	<div class="menuListe__container">

          		<img class="logoMenu"         src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_paralax.png'; ?>" alt="logo menu en parallaxe">
          		<img id="catBleu"         src="<?php echo get_stylesheet_directory_uri() . '/assets/images/bluecat.png'; ?>" alt="Chat violet">
			    <img id="catBlack"        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blackcat.png'; ?>" alt="Chat noir">
			    <img id="catOrange"       src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orangecat.png'; ?>" alt="Chat orange">
			    <img id="fleurSunFlower"  src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>" alt="Fleur blanche">
			    <img id="fleurOrchid"     src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="Orchide violette">
			    <img id="fleurHibiscus"   src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="Hibiscus">
			    <img id="fleurRandom"     src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="petite Fleur violette">
			    <img id="fleurFlower"     src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>" alt="petite Fleur orange">

			    <ul class="liste">
					<li><a href="#story">Histoire</span></a></li>
					<li><a href="#characters">Personnages</span></a></li>
					<li><a href="#place">Lieu</span></a></li>
					<li><a href="#studio">Studio Koukaki</li>
			    </ul>
				<p class="paragrapheBurger">STUDIO KOUKAKI</p>
			</div>
		</section>

	</header><!-- #masthead -->
