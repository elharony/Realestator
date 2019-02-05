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
 * Menu
 * 
 * Let our theme support WP menus and give them unique names
 * 
 */
function add_custom_menu() {
  register_nav_menus(array(
    "header" => "Main Navbar"
  ));
}

function display_menu() {
  wp_nav_menu(array(
      "theme-location" => "header",
      "menu_class"     => "menu-links",
      "container"      => false,
      "depth"          => 2,
  ));
}


/*
 * Hooks
 */
add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("init", "add_custom_menu");


?>