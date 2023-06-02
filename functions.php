<?php

include_once( 'parts/custom-sidebar-widget.php');

function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Barra lateral', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Arrastra los widgets aquí para agregarlos a la barra lateral.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Pie de página', 'textdomain' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Arrastra los widgets aquí para agregarlos al pie de página.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // Puedes agregar más áreas de widgets según tus necesidades
}

add_action( 'widgets_init', 'mytheme_widgets_init' );

function remove_default_widgets() {
    unregister_widget( 'WP_Widget_Pages' );
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Archives' );
    unregister_widget( 'WP_Widget_Links' );
    unregister_widget( 'WP_Widget_Meta' );
    unregister_widget( 'WP_Widget_Search' );
    unregister_widget( 'WP_Widget_Text' );
    unregister_widget( 'WP_Widget_Categories' );
    unregister_widget( 'WP_Widget_Recent_Posts' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_RSS' );
    unregister_widget( 'WP_Widget_Tag_Cloud' );
    unregister_widget( 'WP_Nav_Menu_Widget' );
}

add_action( 'widgets_init', 'remove_default_widgets', 20 );

?>