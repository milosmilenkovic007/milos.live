<?php
// Sigurno prikazivanje teksta
function miloslive_esc_text($text) {
    return esc_html($text);
}

// Skraćivanje teksta
function miloslive_excerpt($text, $length = 50) {
    if (strlen($text) > $length) {
        return substr($text, 0, $length) . '...';
    }
    return $text;
}

// Trenutne URL adrese
function miloslive_get_current_url() {
    return esc_url(home_url(add_query_arg(array(), $wp->request)));
}
?>
