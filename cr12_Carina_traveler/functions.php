<?php

/**
* Register Custom Navigation Walker
*/
function register_navwalker(){

        // register the navwalker file
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        register_nav_menus( array(
   'primary' => __( 'Top-Menu'),
) );
}
add_action( 'after_setup_theme', 'register_navwalker' );


?>