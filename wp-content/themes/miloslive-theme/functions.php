<?php
require_once get_template_directory() . '/inc/class-theme-setup.php';
require_once get_template_directory() . '/inc/class-assets.php';
require_once get_template_directory() . '/inc/class-custom-posts.php';
require_once get_template_directory() . '/inc/class-rest-api.php';
require_once get_template_directory() . '/inc/class-theme-options.php';
require_once get_template_directory() . '/inc/class-gutenberg-blocks.php';
require_once get_template_directory() . '/inc/helpers.php';

// Inicijalizacija svih klasa
new Theme_Setup();
new Assets();
new Custom_Posts();
new Theme_Options();