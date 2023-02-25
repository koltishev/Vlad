<?php
function enqueue_slick_slider() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null, 'all');
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array('slick'), null, 'all');
    wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/custom-script.js', array('jquery', 'slick-slider'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');
