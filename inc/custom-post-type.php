<?php 

/*
@package sunsettheme
================================================
THEME CUSTOM POST TYPES
================================================
*/

$contact = get_option('activate_contact');
if(@$contact == 1){
  add_action('init', 'sunset_contact_custom_post_type');

  add_filter('manage_sunset-contact_posts_columns', 'sunset_set_contact_columns');
  add_filter('manage_sunset-contact_posts_custom_column', 'sunset_contact_custom_column', 10, 1);
 
}

/* Contact CPT  */
function sunset_contact_custom_post_type(){
  $labels = array(
    'name'            => 'Messages',
    'singular_name'   => 'Message',
    'add_new_item'    => 'Add New Message',
    'menu_name'       => 'Messages',
    'name_admin_bar'  => 'Message'
  );

  $args = array(
    'labels'          => $labels,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 26,
    'menu_icon'       => 'dashicons-email-alt',
    'supports'        => array('title','editor','author')
  );

  register_post_type('sunset-contact', $args);
}

function sunset_set_contact_columns($columns) {
  // unset($columns['author']);
  $newColumns = array();
  $newColumns['title'] = 'Full Name';
  $newColumns['message'] = 'Message';
  $newColumns['email'] = 'Email';
  $newColumns['date'] = 'Date';
  return $newColumns;

}

function sunset_contact_custom_column($column) {
  switch($column) {
    case 'message':
          echo get_the_excerpt();
          break;
    case 'email':
          echo 'email address';
          break;
  }
}