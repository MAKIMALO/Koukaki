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
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="sass/theme.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="top-site-title">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a id="closeBtn" href="#" class="close">x</a>
        </div>
        <div id="mytopnav" class="topnav">
            <img class="img_logo_burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_burger.png'; ?>" alt="logo Fleurs d'oranger & chats errants"> 
            <ul>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
            <img class="logo_studio_koukaki" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Studio_Koukaki.png'; ?>" alt="Logo du studio Koukaki"> 
        </div>
            
	</header><!-- #masthead -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/burger.js" type="text/javascript"></script>

</body>
</html>