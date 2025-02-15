<?php
class Theme_Setup {
    public function __construct() {
        add_action('after_setup_theme', [$this, 'register_menus']);
        add_action('widgets_init', [$this, 'register_sidebars']);
    }

    // Registracija menija
    public function register_menus() {
        register_nav_menus([
            'primary' => __('Primary Menu', 'miloslive-theme'),
            'footer'  => __('Footer Menu', 'miloslive-theme'),
        ]);
    }

    // Registracija sidebar-a
    public function register_sidebars() {
        register_sidebar([
            'name'          => __('Main Sidebar', 'miloslive-theme'),
            'id'            => 'main-sidebar',
            'description'   => __('Widgets added here will appear in the main sidebar.', 'miloslive-theme'),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]);

        register_sidebar([
            'name'          => __('Footer Sidebar', 'miloslive-theme'),
            'id'            => 'footer-sidebar',
            'description'   => __('Widgets added here will appear in the footer.', 'miloslive-theme'),
            'before_widget' => '<div class="footer-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-widget-title">',
            'after_title'   => '</h4>',
        ]);
    }
}

// Inicijalizacija klase
new Theme_Setup();
