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

function mi_tema_personalizacion($wp_customize) {
    // Agrega una sección para las opciones de personalización
    
    $wp_customize->add_section('seccion_home', array(
        'title' => 'Sección Home',
        'priority' => 30,
    ));

    // Agrega un campo para el título h1
    $wp_customize->add_setting('titulo_h1', array(
        'default' => 'First wanted to be a veterinarian',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('titulo_h1_control', array(
        'label' => 'Título H1',
        'section' => 'seccion_home',
        'settings' => 'titulo_h1',
        'type' => 'text',
    ));

    // Agrega un campo para el párrafo
    $wp_customize->add_setting('parrafo_home', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('parrafo_home_control', array(
        'label' => 'Párrafo',
        'section' => 'seccion_home',
        'settings' => 'parrafo_home',
        'type' => 'textarea',
    ));
    
    // Agrega un campo para la imagen
    $wp_customize->add_setting('imagen_home', array(
        'default' => get_template_directory_uri() . '/assets/img/dogHome.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imagen_home_control', array(
        'label' => 'Imagen Home',
        'section' => 'seccion_home',
        'settings' => 'imagen_home',
    )));
    
    // Agrega un campo para el color de fondo
    $wp_customize->add_setting('color_fondo_home', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fondo_home_control', array(
        'label' => 'Color de fondo',
        'section' => 'seccion_home',
        'settings' => 'color_fondo_home',
    )));
}
add_action('customize_register', 'mi_tema_personalizacion');

function agregar_personalizacion_parrafo($wp_customize) {
    // Agrega un campo para el tamaño de fuente del párrafo
    $wp_customize->add_setting('tamano_fuente_parrafo', array(
        'default' => '1.5rem',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('tamano_fuente_parrafo_control', array(
        'label' => 'Tamaño de fuente del párrafo',
        'section' => 'seccion_home',
        'settings' => 'tamano_fuente_parrafo',
        'type' => 'text',
    ));

    // Agrega un campo para el color de fuente del párrafo
    $wp_customize->add_setting('color_fuente_parrafo', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fuente_parrafo_control', array(
        'label' => 'Color de fuente del párrafo',
        'section' => 'seccion_home',
        'settings' => 'color_fuente_parrafo',
    )));
}

function agregar_personalizacion_h1($wp_customize) {
    // Agrega un campo para el tamaño de fuente del h1
    $wp_customize->add_setting('tamano_fuente_h1', array(
        'default' => '5rem',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('tamano_fuente_h1_control', array(
        'label' => 'Tamaño de fuente del H1',
        'section' => 'seccion_home',
        'settings' => 'tamano_fuente_h1',
        'type' => 'text',
    ));

    // Agrega un campo para el color de fuente del h1
    $wp_customize->add_setting('color_fuente_h1', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fuente_h1_control', array(
        'label' => 'Color de fuente del H1',
        'section' => 'seccion_home',
        'settings' => 'color_fuente_h1',
    )));

    // Agrega un campo para el estilo de fuente del h1 (negrita o normal)
    $wp_customize->add_setting('estilo_fuente_h1', array(
        'default' => 'normal',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('estilo_fuente_h1_control', array(
        'label' => 'Estilo de fuente del H1',
        'section' => 'seccion_home',
        'settings' => 'estilo_fuente_h1',
        'type' => 'select',
        'choices' => array(
            'normal' => 'Normal',
            'bold' => 'Negrita',
        ),
    ));
}



function agregar_personalizacion_boton($wp_customize) {
    // Agrega un campo para el color de fondo del botón
    $wp_customize->add_setting('color_fondo_boton', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fondo_boton_control', array(
        'label' => 'Color de fondo del botón',
        'section' => 'seccion_home',
        'settings' => 'color_fondo_boton',
    )));

    // Agrega un campo para activar o desactivar el borde del botón
    $wp_customize->add_setting('borde_activo', array(
        'default' => true,
        'sanitize_callback' => 'sanitize_checkbox',
    ));
    $wp_customize->add_control('borde_activo_control', array(
        'label' => 'Activar borde del botón',
        'section' => 'seccion_home',
        'settings' => 'borde_activo',
        'type' => 'checkbox',
    ));

    // Agrega un campo para el color de borde del botón
    $wp_customize->add_setting('color_borde_boton', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_borde_boton_control', array(
        'label' => 'Color de borde del botón',
        'section' => 'seccion_home',
        'settings' => 'color_borde_boton',
    )));

    // Agrega un campo para el tamaño de fuente del botón
    $wp_customize->add_setting('tamano_fuente_boton', array(
        'default' => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('tamano_fuente_boton_control', array(
        'label' => 'Tamaño de fuente del botón',
        'section' => 'seccion_home',
        'settings' => 'tamano_fuente_boton',
        'type' => 'text',
    ));

    // Agrega un campo para el color de fuente del botón
    $wp_customize->add_setting('color_fuente_boton', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fuente_boton_control', array(
        'label' => 'Color de fuente del botón',
        'section' => 'seccion_home',
        'settings' => 'color_fuente_boton',
    )));
}

add_action('customize_register', 'agregar_personalizacion_boton');

function agregar_personalizacion_texto_boton1($wp_customize) {
    // Agrega un campo para el texto del botón 1
    $wp_customize->add_setting('texto_boton_1', array(
        'default' => 'Botón 1',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('texto_boton_1_control', array(
        'label' => 'Texto del Botón 1',
        'section' => 'seccion_home',
        'settings' => 'texto_boton_1',
        'type' => 'text',
    ));
    
    // Agrega un campo para el margen superior del botón 1
    $wp_customize->add_setting('margen_superior_boton1', array(
        'default' => '0',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('margen_superior_boton1_control', array(
        'label' => 'Margen superior del Botón 1',
        'section' => 'seccion_home',
        'settings' => 'margen_superior_boton1',
        'type' => 'text',
    ));
}

add_action('customize_register', 'agregar_personalizacion_texto_boton1');


function agregar_personalizacion_texto_boton2($wp_customize) {
    // Agrega un campo para el texto del botón 2
    $wp_customize->add_setting('texto_boton_2', array(
        'default' => 'Botón 2',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('texto_boton_2_control', array(
        'label' => 'Texto del Botón 2',
        'section' => 'seccion_home',
        'settings' => 'texto_boton_2',
        'type' => 'text',
    ));
}
add_action('customize_register', 'agregar_personalizacion_texto_boton2');



add_theme_support('elementor');

?>