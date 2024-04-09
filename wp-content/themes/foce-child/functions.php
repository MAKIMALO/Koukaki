<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        // Enqueue parent theme style
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

        // Enqueue child theme style
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/sass/theme.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/sass/theme.css') );
    
        // Enqueue swiper style
        wp_enqueue_style('swiper-style', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css', array(), filemtime(get_stylesheet_directory() . '/node_modules/swiper/swiper.min.css'));
        
        // Enqueue swiper script
        wp_enqueue_script('swiper-script', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js', array('jquery'), '1.0', true);
        
        // Enqueue custom script
        wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.2', true );
    
        // Enqueue skrollr script
        wp_enqueue_script( 'skrollr-script', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), '5.4.5', true );
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