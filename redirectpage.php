// add this code in your plugin 

function activation_redirect( $plugin ) {
    if( $plugin == plugin_basename( __FILE__ ) ) {
        exit( wp_redirect( admin_url( 'options-general.php?page=plugin_settings' ) ) );
    }
}
add_action( 'activated_plugin', 'activation_redirect' );
