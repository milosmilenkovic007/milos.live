<?php
class Assets {
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    public function enqueue_assets() {
        // Glavni stil teme
        wp_enqueue_style('miloslive-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0.0');

        // Hero Banner stil - učitava se samo na frontendu
        if (!is_admin()) {
            wp_enqueue_style('miloslive-hero-banner', get_template_directory_uri() . '/assets/css/hero-banner-style.css', [], '1.0.0');
        }

        // Glavni JS fajl teme
        wp_enqueue_script('miloslive-js', get_template_directory_uri() . '/assets/js/theme.js', ['jquery'], '1.0.0', true);
    }
}

// Inicijalizujemo klasu
new Assets();
