<?php
class Custom_Posts {
    public function __construct() {
        add_action('init', [$this, 'register_custom_posts']);
    }

    public function register_custom_posts() {
        register_post_type('portfolio', [
            'label'  => __('Portfolio', 'miloslive-theme'),
            'public' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_icon' => 'dashicons-portfolio',
        ]);
    }
}
