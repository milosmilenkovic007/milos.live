<?php
function miloslive_enqueue_scripts() {
    wp_enqueue_style('miloslive-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('miloslive-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'miloslive_enqueue_scripts');

