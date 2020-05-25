<?php
// ============================================
// FUNCTIONS.php
// where it all begins
// ============================================


// INIT
require_once('inc/init.php');

// ACF
require_once('inc/acf/acf-option-page.php');
require_once('inc/acf/acf-flexible-content.php');

// IMAGE SIZES
require_once('inc/images.php');

// TINY MCE
require_once('inc/tiny-mce.php');


// HEADER STYLES
function header_styles()
{
    $template = get_template_directory_uri();
    wp_register_style('main', $template . '/assets/css/application.css');
    wp_enqueue_style('main'); // Enqueue it!
}

// HEADER SCRIPTS
function header_scripts() {
  $template = get_template_directory_uri();
  wp_register_script('app', $template . '/assets/js/application.js', array(), null);
  wp_enqueue_script('app');
}


// ACTION HOOK
add_action('wp_enqueue_scripts', 'header_styles');
add_action('wp_enqueue_scripts', 'header_scripts');
