<?php
// Register Custom Gutenberg Blocks
function miloslive_register_gutenberg_blocks() {
    // Automatically load all block files from 'blocks' directory
    $blocks = glob(get_template_directory() . '/blocks/*', GLOB_ONLYDIR);
    
    foreach ($blocks as $block) {
        register_block_type($block);
    }
}
add_action('init', 'miloslive_register_gutenberg_blocks');
