<?php
// Register Custom Menus
function miloslive_register_menus() {
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'miloslive-theme'),
        'footer'    => __('Footer Menu', 'miloslive-theme'),
    ));
}
add_action('after_setup_theme', 'miloslive_register_menus');
