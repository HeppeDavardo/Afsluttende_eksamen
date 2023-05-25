<?php 

    function winefix_files() {
        wp_enqueue_style('winefix_main_styles', get_theme_file_uri('/styles/main_styles.css'));
    }

    add_action('wp_enqueue_scripts', 'winefix_files');

?>