<?php 

/*
@package sunsettheme
================================================
ADMIN PAGE
================================================
*/

function sunset_add_admin_page() {
  // Generate Sunset Admin Page
  add_menu_page('Sunset Theme Option', 'Sunset', 'manage_options', 'imon_sunset', 'sunset_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110);

  // Generate Sunset Admin Sub Pages
  add_submenu_page('imon_sunset', 'Sunset Theme Option', 'Settings', 'manage_options', 'imon_sunset', 'sunset_theme_settings_page');
  add_submenu_page('imon_sunset', 'Sunset CSS Option', 'Custom CSS', 'manage_options', 'imon_sunset_css', 'sunset_theme_settings_page');

  // activate custom settings 
  add_action('admin_init', 'sunset_custom_settings');

}

add_action('admin_menu', 'sunset_add_admin_page');

function sunset_custom_settings() {
  register_setting( 'sunset-settings-group', 'first_name' );
  add_settings_section( 'sunset-sidebar-options', 'Sidebar Options', 'sunset_sidebar_options', 'imon_sunset');
  add_settings_field( 'sidebar-name', 'First Name', 'sunset_sidebar_name', 'imon_sunset', 'sunset-sidebar-options' );
}

function sunset_sidebar_options() {
  echo 'Customize your Sidebar Information';
}

function sunset_sidebar_name() {
  $firstName = esc_attr( get_option('first_name') );
  echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" />';
}

function sunset_theme_create_page() {
  require_once(get_template_directory() . '/inc/templates/sunset-admin.php');
}

function sunset_theme_settings_page() {
 echo '<h1>Sunset CSS Theme</h1>';
}