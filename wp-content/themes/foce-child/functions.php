<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/sass/theme.css', array(), filemtime(get_stylesheet_directory() . '/sass/theme.css') );
        wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), filemtime(get_stylesheet_directory() . '/sass/theme.css'));
    
        wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '5.4.5', true);
        wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.2', true );
        wp_enqueue_script( 'skrollr-script' , get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), '5,4,5', true);
    }
?>

<?php
// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
?>