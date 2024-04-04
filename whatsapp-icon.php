<?php
/**
 * Plugin Name: WhatsApp Icon
 * Description: Adds a WhatsApp icon to your website.
 */

// Enqueue the necessary styles and scripts
function whatsapp_icon_enqueue_scripts() {
    wp_enqueue_style( 'whatsapp-icon-style', plugin_dir_url( __FILE__ ) . 'style.css' );
}
add_action( 'wp_enqueue_scripts', 'whatsapp_icon_enqueue_scripts' );

// Add WhatsApp icon HTML to the footer
function whatsapp_icon_output() {
    ?>
    <!-- WhatsApp icon -->
    <a href="https://wa.me/201111320373" target="_blank" class="whatsapp-icon">
        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'icons8-whatsapp-94.png'; ?>" alt="WhatsApp Icon">
    </a>
    <?php
}
add_action( 'wp_footer', 'whatsapp_icon_output' );
