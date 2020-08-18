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

//Widget - sidebar
function wpb_init_widgets(){
   register_sidebar(array(
       'name' => 'Sidebar',
       'id' => 'sidebar',
       'before_widget' => '<div class="sidebar-module">',
       'after_widget' => '</div>',
       'before_title' => '<h4>',
       'after_title' => '</h4>'
        ));
}
add_action('widgets_init', 'wpb_init_widgets');


?>
