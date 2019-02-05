<?php

/*
 * Theme Support
 */
add_theme_support("post-thumbnails");

/*
 * add_styles
 */
function add_styles() {
  wp_enqueue_style("main", get_template_directory_uri() . "/css/main.css");
}

/*
 * add_scripts
 */
function add_scripts() {
  wp_enqueue_script("jquery");
  wp_enqueue_script("main-script", get_template_directory_uri() . "/js/main.js", array(), "", true);
}


/*
 * Hooks
 */
add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");


?>