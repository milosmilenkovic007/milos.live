<?php
class GutenbergBlocks {
    public function __construct() {
        add_action('init', [$this, 'register_gutenberg_blocks']);
        add_action('enqueue_block_editor_assets', [$this, 'force_enqueue_scripts']);
    }

    // Automatska registracija svih Gutenberg blokova
    public function register_gutenberg_blocks() {
        $blocks = glob(get_template_directory() . '/blocks/*', GLOB_ONLYDIR);

        foreach ($blocks as $block) {
            $block_json = $block . '/block.json';

            if (file_exists($block_json)) {
                $block_name = basename($block);

                // Registracija JS fajla za Gutenberg blokove
                wp_register_script(
                    "miloslive-{$block_name}-js",
                    get_template_directory_uri() . "/assets/js/{$block_name}.js",
                    ['wp-blocks', 'wp-block-editor', 'wp-components', 'wp-element', 'wp-i18n'],
                    filemtime(get_template_directory() . "/assets/js/{$block_name}.js"),
                    true // Load in footer
                );

                // Registracija Gutenberg bloka iz `block.json`
                register_block_type("miloslive/{$block_name}", [
                    'editor_script' => "miloslive-{$block_name}-js",
                ]);

                error_log(" Block registered: " . $block_name);
            } else {
                error_log("No block.json found for: " . $block);
            }
        }
    }

    //  Osiguraj da se skripte učitavaju u Gutenberg editoru
    public function force_enqueue_scripts() {
        if (is_admin()) {
            wp_enqueue_script("miloslive-hero-banner-js");
        }
    }
}

// Inicijalizacija klase
new GutenbergBlocks();
