<?php
/**
 * Widget de Barra Lateral Derecha
 */
class Custom_Sidebar_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_sidebar_widget',
            'Barra Lateral Derecha Custom',
            array( 'description' => 'Este es un widget para la barra lateral derecha.' )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
    
        echo $args['before_widget'];
    
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
    
        // Aquí puedes agregar el contenido específico que deseas mostrar en el widget
        echo '<p>Este es el contenido del widget de la barra lateral derecha.</p>';
    
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
    
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'textdomain' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : '';
    
        return $instance;
    }
}

// Registra el widget
function register_custom_sidebar_widget() {
    register_widget( 'Custom_Sidebar_Widget' );
}
add_action( 'widgets_init', 'register_custom_sidebar_widget' );