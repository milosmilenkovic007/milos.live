<?php
class Custom_Rest_Api {
    public function __construct() {
        // Inicijalizacija REST API funkcionalnosti
        add_action('admin_enqueue_scripts', [$this, 'enqueue_rest_api_nonce']);
        add_filter('rest_authentication_errors', [$this, 'disable_rest_auth']);
    }

    // Omogućavanje REST API nonce tokena za autentifikaciju
    public function enqueue_rest_api_nonce() {
        if (is_admin()) {
            wp_localize_script('wp-api', 'wpApiSettings', array(
                'root'  => esc_url_raw(rest_url()),
                'nonce' => wp_create_nonce('wp_rest')
            ));
        }
    }

    // Omogućavanje REST API pregleda blokova (MM *** NE koristi ovo na produkciji!)
    public function disable_rest_auth($result) {
        if (strpos($_SERVER['REQUEST_URI'], '/wp-json/wp/v2/block-types') !== false) {
            return true;
        }
        return $result;
    }
}

// Inicijalizacija klase
new Custom_Rest_Api();
