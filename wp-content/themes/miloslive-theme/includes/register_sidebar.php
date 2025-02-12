<?php
// Register Custom Sidebars
function miloslive_register_sidebars() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'miloslive-theme'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets added here will appear in the main sidebar.', 'miloslive-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Sidebar', 'miloslive-theme'),
        'id'            => 'footer-sidebar',
        'description'   => __('Widgets added here will appear in the footer.', 'miloslive-theme'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'miloslive_register_sidebars');
